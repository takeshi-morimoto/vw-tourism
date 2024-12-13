<?php

// error_reporting(E_ALL);
// ini_set('display_errors', '1');

/**
 * Wizard
 *
 * @package Whizzie
 * @author Catapult Themes
 * @since 1.0.0
 */


class ThemeWhizzie {

	public static $is_valid_key = 'false';
	public static $theme_key 		= '';

	protected $version = '1.1.0';

	/** @var string Current theme name, used as namespace in actions. */
	protected $theme_name = '';
	protected $theme_title = '';

	protected $plugin_path = '';
	protected $parent_slug = '';

	/** @var string Wizard page slug and title. */
	protected $page_slug = '';
	protected $page_title = '';

	/** @var array Wizard steps set by user. */
	protected $config_steps = array();

	/**
	 * Relative plugin url for this plugin folder
	 * @since 1.0.0
	 * @var string
	 */
	protected $plugin_url = '';

	/**
	 * TGMPA instance storage
	 *
	 * @var object
	 */
	protected $tgmpa_instance;

	/**
	 * TGMPA Menu slug
	 *
	 * @var string
	 */
	protected $tgmpa_menu_slug = 'tgmpa-install-plugins';

	/**
	 * TGMPA Menu url
	 *
	 * @var string
	 */
	protected $tgmpa_url = 'themes.php?page=tgmpa-install-plugins';

	// Where to find the widget.wie file
	protected $widget_file_url = '';

	/**
	 * Constructor
	 *
	 * @param $vw_tourism_pro_config	Our config parameters
	 */
	public function __construct( $vw_tourism_pro_config ) {
		$this->set_vars( $vw_tourism_pro_config );
		$this->init();

		include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
	}

	public static function get_the_validation_status() {
		return get_option('vw_tourism_pro_theme_validation_status');
	}

	public static function set_the_validation_status($is_valid) {
		update_option('vw_tourism_pro_theme_validation_status', $is_valid);
	}

	public static function get_the_suspension_status() {
		return get_option( 'vw_tourism_pro_theme_suspension_status' );
	}

	public static function set_the_suspension_status( $is_suspended ) {
		update_option( 'vw_tourism_pro_theme_suspension_status' , $is_suspended );
	}

	public static function set_the_theme_key($the_key) {
		update_option('vw_pro_theme_key', $the_key);
	}

	public static function remove_the_theme_key() {
		delete_option('vw_pro_theme_key');
	}

	public static function get_the_theme_key() {
		return get_option('vw_pro_theme_key');
	}

	/**
	 * Set some settings
	 * @since 1.0.0
	 * @param $vw_tourism_pro_config	Our config parameters
	 */
	public function set_vars( $vw_tourism_pro_config ) {

		require_once trailingslashit( WHIZZIE_DIR ) . 'tgm/tgm.php';
		require_once trailingslashit( WHIZZIE_DIR ) . 'widgets/class-vw-widget-importer.php';

		if( isset( $vw_tourism_pro_config['page_slug'] ) ) {
			$this->page_slug = esc_attr( $vw_tourism_pro_config['page_slug'] );
		}
		if( isset( $vw_tourism_pro_config['page_title'] ) ) {
			$this->page_title = esc_attr( $vw_tourism_pro_config['page_title'] );
		}
		if( isset( $vw_tourism_pro_config['steps'] ) ) {
			$this->config_steps = $vw_tourism_pro_config['steps'];
		}

		$this->plugin_path = trailingslashit( dirname( __FILE__ ) );
		$relative_url = str_replace( get_template_directory(), '', $this->plugin_path );
		$this->plugin_url = trailingslashit( get_template_directory_uri() . $relative_url );
		$current_theme = wp_get_theme();
		$this->theme_title = $current_theme->get( 'Name' );
		$this->theme_name = strtolower( preg_replace( '#[^a-zA-Z]#', '', $current_theme->get( 'Name' ) ) );
		$this->page_slug = apply_filters( $this->theme_name . '_theme_setup_wizard_page_slug', $this->theme_name . '-wizard' );
		$this->parent_slug = apply_filters( $this->theme_name . '_theme_setup_wizard_parent_slug', '' );

		$this->widget_file_url = trailingslashit( WHIZZIE_DIR ) . 'widgets/vw-tourism-pro-widgets.wie';
	}

	/**
	 * Hooks and filters
	 * @since 1.0.0
	 */
	public function init() {

		if ( class_exists( 'TGM_Plugin_Activation' ) && isset( $GLOBALS['tgmpa'] ) ) {
			add_action( 'init', array( $this, 'get_tgmpa_instance' ), 30 );
			add_action( 'init', array( $this, 'set_tgmpa_url' ), 40 );
		}

		add_action( 'after_switch_theme', array( $this, 'redirect_to_wizard' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
		add_action( 'admin_menu', array( $this, 'menu_page' ) );
		add_action( 'admin_init', array( $this, 'get_plugins' ), 30 );
		add_filter( 'tgmpa_load', array( $this, 'tgmpa_load' ), 10, 1 );
		add_action( 'wp_ajax_setup_plugins', array( $this, 'setup_plugins' ) );
		add_action( 'wp_ajax_setup_widgets', array( $this, 'setup_widgets' ) );

		add_action( 'wp_ajax_setup_builder', array( $this, 'setup_builder' ) );
		add_action( 'wp_ajax_wz_install_activate_ibtana', array( $this, 'wz_install_activate_ibtana' ) );

		add_action( 'wp_ajax_wz_activate_vw_tourism_pro', array( $this, 'wz_activate_vw_tourism_pro' ) );

		add_action('admin_enqueue_scripts',  array( $this, 'vw_tourism_pro_admin_theme_style' ) );


	}

	public function redirect_to_wizard() {
		global $pagenow;
		if( is_admin() && 'themes.php' == $pagenow && isset( $_GET['activated'] ) && current_user_can( 'manage_options' ) ) {
			wp_redirect( admin_url( 'themes.php?page=' . esc_attr( $this->page_slug ) ) );
		}
	}

	public function enqueue_scripts() {
		wp_enqueue_style( 'theme-wizard-style', get_template_directory_uri() . '/theme-wizard/assets/css/theme-wizard-style.css');
		wp_register_script( 'theme-wizard-script', get_template_directory_uri() . '/theme-wizard/assets/js/theme-wizard-script.js', array( 'jquery' ), time() );
		wp_localize_script(
			'theme-wizard-script',
			'vw_tourism_pro_whizzie_params',
			array(
				'ajaxurl' 		=> admin_url( 'admin-ajax.php' ),
				'wpnonce' 		=> wp_create_nonce( 'whizzie_nonce' ),
				'verify_text'	=> esc_html( 'verifying', 'vw-tourism-pro' ),
				'IBTANA_THEME_LICENCE_ENDPOINT' => IBTANA_THEME_LICENCE_ENDPOINT
			)
		);
		wp_enqueue_script( 'theme-wizard-script' );
		wp_enqueue_script('tabs', get_template_directory_uri() . '/theme-wizard/getstarted/js/tab.js');
		wp_enqueue_script( 'vw-notify-popup', get_template_directory_uri() . '/assets/js/notify.min.js');
	}

	public static function get_instance() {
		if ( ! self::$instance ) {
			self::$instance = new self;
		}
		return self::$instance;
	}

	public function tgmpa_load( $status ) {
		return is_admin() || current_user_can( 'install_themes' );
	}

	/**
	 * Get configured TGMPA instance
	 *
	 * @access public
	 * @since 1.1.2
	 */
	public function get_tgmpa_instance() {
		$this->tgmpa_instance = call_user_func( array( get_class( $GLOBALS['tgmpa'] ), 'get_instance' ) );
	}

	/**
	 * Update $tgmpa_menu_slug and $tgmpa_parent_slug from TGMPA instance
	 *
	 * @access public
	 * @since 1.1.2
	 */
	public function set_tgmpa_url() {
		$this->tgmpa_menu_slug = ( property_exists( $this->tgmpa_instance, 'menu' ) ) ? $this->tgmpa_instance->menu : $this->tgmpa_menu_slug;
		$this->tgmpa_menu_slug = apply_filters( $this->theme_name . '_theme_setup_wizard_tgmpa_menu_slug', $this->tgmpa_menu_slug );
		$tgmpa_parent_slug = ( property_exists( $this->tgmpa_instance, 'parent_slug' ) && $this->tgmpa_instance->parent_slug !== 'themes.php' ) ? 'admin.php' : 'themes.php';
		$this->tgmpa_url = apply_filters( $this->theme_name . '_theme_setup_wizard_tgmpa_url', $tgmpa_parent_slug . '?page=' . $this->tgmpa_menu_slug );
	}

	/**
	 * Make a modal screen for the wizard
	 */
	public function menu_page() {
		add_menu_page( esc_html( $this->page_title ), esc_html( $this->page_title ), 'manage_options', $this->page_slug, array( $this, 'vw_tourism_pro_mostrar_guide' ) ,get_template_directory_uri().'/theme-wizard/assets/images/admin-menu.svg',40);
	}

	public function activation_page() {
		$theme_key 						= ThemeWhizzie::get_the_theme_key();
		$validation_status 		= ThemeWhizzie::get_the_validation_status();
		?>
		<div class="wrap">
			<label><?php esc_html_e('Enter Your Theme License Key:','vw-tourism-pro'); ?></label>
			<form id="vw_tourism_pro_license_form">
				<input type="text" name="vw_tourism_pro_license_key" value="<?php echo $theme_key ?>" <?php if($validation_status === 'true') { echo "disabled"; } ?> required placeholder="License Key" />
				<div class="licence-key-button-wrap">
					<button class="button" type="submit" name="button" <?php if($validation_status === 'true') { echo "disabled"; } ?>>
						<?php if ($validation_status === 'true') {
						?>
							Activated
						<?php
						} else { ?>
							Activate
						<?php
						}
						?>
					</button>

					<?php if ($validation_status === 'true') { ?>
						<button id="change--key" class="button" type="button" name="button">
							Change Key
						</button>
						<div class="next-button">
						<button id="start-now-next" class="button" type="button" name="button" onclick="openCity(event, 'demo_offer')">
							Next
						</button>
					</div>
					<?php } ?>
				</div>
			</form>
		</div>
		<?php
	}

	/**
	 * Make an interface for the wizard
	 */
	public function wizard_page() {

		tgmpa_load_bulk_installer();

		// install plugins with TGM.
		if ( ! class_exists( 'TGM_Plugin_Activation' ) || ! isset( $GLOBALS['tgmpa'] ) ) {
			die( 'Failed to find TGM' );
		}
		$url = wp_nonce_url( add_query_arg( array( 'plugins' => 'go' ) ), 'whizzie-setup' );

		// copied from TGM
		$method = ''; // Leave blank so WP_Filesystem can populate it as necessary.
		$fields = array_keys( $_POST ); // Extra fields to pass to WP_Filesystem.
		if ( false === ( $creds = request_filesystem_credentials( esc_url_raw( $url ), $method, false, false, $fields ) ) ) {
			return true; // Stop the normal page form from displaying, credential request form will be shown.
		}
		// Now we have some credentials, setup WP_Filesystem.
		if ( ! WP_Filesystem( $creds ) ) {
			// Our credentials were no good, ask the user for them again.
			request_filesystem_credentials( esc_url_raw( $url ), $method, true, false, $fields );
			return true;
		}


		/* If we arrive here, we have the filesystem */ ?>
		<div class="wrap">
			<div class="wizard-logo-wrap">
				<img src="<?php echo esc_url(get_template_directory_uri().'/theme-wizard/assets/images/adminIcon.png'); ?>">
				<span class="wizard-main-title">
					<?php esc_html_e('Welcome to ','vw-tourisRejuvenate Your Mind Body And Soul In Tranquil Settings
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididuntm-pro'); echo $this->theme_title; ?>
				</span>
			</div>
			<?php echo '<div class="card whizzie-wrap">';
				// The wizard is a list with only one item visible at a time
				$steps = $this->get_steps();
				echo '<ul class="whizzie-menu vw-wizard-menu-page">';
				foreach( $steps as $step ) {
					$class = 'step step-' . esc_attr( $step['id'] );
					echo '<li data-step="' . esc_attr( $step['id'] ) . '" class="' . esc_attr( $class ) . '" >';
						printf( '<span class="wizard-main-title">%s</span>',
							esc_html( $step['title'] )
							);
						// $content is split into summary and detail
						$content = call_user_func( array( $this, $step['view'] ) );
						if( isset( $content['summary'] ) ) {
							printf(
								'<div class="summary">%s</div>',
								wp_kses_post( $content['summary'] )
							);
						}
						if( isset( $content['detail'] ) ) {
							// Add a link to see more detail
							printf( '<div class="wz-require-plugins">');
							printf(
								'<div class="detail">%s</div>',
								$content['detail'] // Need to escape this
							);
							printf('</div>');
						}

						printf('<div class="wizard-button-wrapper">');
						  if (ThemeWhizzie::get_the_validation_status() === 'true') {
							// The next button
							if( isset( $step['button_text'] ) && $step['button_text'] ) {
								printf(
									'<div class="button-wrap"><a href="#" class="button button-primary do-it" data-callback="%s" data-step="%s">%s</a></div>',
									esc_attr( $step['callback'] ),
									esc_attr( $step['id'] ),
									esc_html( $step['button_text'] )
								);
							}

							if( isset( $step['button_text_one'] )) {
								printf(
									'<div class="button-wrap button-wrap-one">
										<a href="#" class="button button-primary do-it" data-callback="install_widgets" data-step="widgets"><img src="'.get_template_directory_uri().'/theme-wizard/assets/images/Customize-Icon.png"></a>
										<p class="demo-type-text">%s</p>
									</div>',
									esc_html( $step['button_text_one'] )
								);
							}
							if( isset( $step['button_text_two'] )) {
								printf(
									'<div class="button-wrap button-wrap-two">
										<a href="#" class="button button-primary do-it" data-step="widgets" data-callback="page_builder" id="ibtana_button"><img src="'.get_template_directory_uri().'/theme-wizard/assets/images/Gutenberg-Icon.png"></a>
										<p class="demo-type-text">%s</p>
									</div>',
									esc_html( $step['button_text_two'] )
								);
							}

						} else {
							printf(
								'<div class="button-wrap"><a href="#" class="button button-primary key-activation-tab-click">%s</a></div>',
								esc_html( __( 'Activate Your License', 'vw-tourism-pro' ) )
							);
						}
						printf('</div>');

					echo '</li>';
				}
				echo '</ul>';
				echo '<ul class="whizzie-nav wizard-icon-nav">';
					$stepI=1;
					foreach( $steps as $step ) {
						$stepAct=($stepI ==1)? 1 : 0;
						if( isset( $step['icon_url'] ) && $step['icon_url'] ) {
							echo '<li class="nav-step-' . esc_attr( $step['id'] ) . '" wizard-steps="step-'.esc_attr( $step['id'] ).'" data-enable="'.$stepAct.'">
							<img src="'.esc_attr( $step['icon_url'] ).'">
							</li>';
						}
					$stepI++;}
				echo '</ul>';
				?>
				<div class="step-loading"><span class="spinner">
					<img src="<?php echo esc_url(get_template_directory_uri().'/theme-wizard/assets/images/Spinner-Animaion.gif'); ?>">
				</span></div>
			<?php echo '</div>';?>

		</div>
	<?php }
	/**
	 * Set options for the steps
	 * Incorporate any options set by the theme dev
	 * Return the array for the steps
	 * @return Array
	 */
	public function get_steps() {
		$dev_steps = $this->config_steps;
		$steps = array(
			'intro' => array(
				'id'			=> 'intro',
				'title'			=> __( '', 'vw-tourism-pro' ),
				'icon'			=> 'dashboard',
				'view'			=> 'get_step_intro', // Callback for content
				'callback'		=> 'do_next_step', // Callback for JS
				'button_text'	=> __( 'Start Now', 'vw-tourism-pro' ),
				'can_skip'		=> false, // Show a skip button?
				'icon_url'      => get_template_directory_uri().'/theme-wizard/assets/images/Icons-01.svg'
			),
			'plugins' => array(
				'id'			=> 'plugins',
				'title'			=> __( 'Plugins', 'vw-tourism-pro' ),
				'icon'			=> 'admin-plugins',
				'view'			=> 'get_step_plugins',
				'callback'		=> 'install_plugins',
				'button_text'	=> __( 'Install Plugins', 'vw-tourism-pro' ),
				'can_skip'		=> true,
				'icon_url'      => get_template_directory_uri().'/theme-wizard/assets/images/Icons-02.svg'
			),
			'widgets' => array(
				'id'			=> 'widgets',
				'title'			=> __( 'Customizer', 'vw-tourism-pro' ),
				'icon'			=> 'welcome-widgets-menus',
				'view'			=> 'get_step_widgets',
				'callback'		=> 'install_widgets',
				'button_text_one'	=> __( 'Click On The Image To Import Customizer Demo', 'vw-tourism-pro' ),
				'button_text_two'	=> __( 'Click On The Image To Import Gutenberg Block Demo', 'vw-tourism-pro' ),
				'can_skip'		=> true,
				'icon_url'      => get_template_directory_uri().'/theme-wizard/assets/images/Icons-03.svg'
			),

			'done' => array(
				'id'			=> 'done',
				'title'			=> __( 'All Done', 'vw-tourism-pro' ),
				'icon'			=> 'yes',
				'view'			=> 'get_step_done',
				'callback'		=> '',
				'icon_url'      => get_template_directory_uri().'/theme-wizard/assets/images/Icons-04.svg'
			)
		);

		// Iterate through each step and replace with dev config values
		if( $dev_steps ) {
			// Configurable elements - these are the only ones the dev can update from config.php
			$can_config = array( 'title', 'icon', 'button_text', 'can_skip','button_text_two' );
			foreach( $dev_steps as $dev_step ) {
				// We can only proceed if an ID exists and matches one of our IDs
				if( isset( $dev_step['id'] ) ) {
					$id = $dev_step['id'];
					if( isset( $steps[$id] ) ) {
						foreach( $can_config as $element ) {
							if( isset( $dev_step[$element] ) ) {
								$steps[$id][$element] = $dev_step[$element];
							}
						}
					}
				}
			}
		}
		return $steps;
	}

	/**
	 * Print the content for the intro step
	 */
	public function get_step_intro() { ?>
		<div class="summary">
			<p>
				<?php esc_html_e('Thank you for choosing this '.$this->theme_title.' Theme. Using this quick setup wizard, you will be able to configure your new website and get it running in just a few minutes. Just follow these simple steps mentioned in the wizard and get started with your website.','vw-tourism-pro'); ?>
			</p>
			<p>
				<?php esc_html_e('You may even skip the steps and get back to the dashboard if you have no time at the present moment. You can come back any time if you change your mind.','vw-tourism-pro'); ?>
			</p>
		</div>
	<?php }

	public function get_step_importer() { ?>
		<div class="summary">
			<p>
				<?php esc_html_e('Thank you for choosing this '.$this->theme_title.' Theme. Using this quick setup wizard, you will be able to configure your new website and get it running in just a few minutes. Just follow these simple steps mentioned in the wizard and get started with your website.','vw-tourism-pro'); ?>
			</p>
		</div>
	<?php }
	/**
	 * Get the content for the plugins step
	 * @return $content Array
	 */
	public function get_step_plugins() {
		$plugins = $this->get_plugins();
		$content = array(); ?>
			<div class="summary">
				<p>
					<?php esc_html_e('Additional plugins always make your website exceptional. Install these plugins by clicking the install button. You may also deactivate them from the dashboard.','vw-tourism-pro') ?>
				</p>
			</div>
		<?php // The detail element is initially hidden from the user
		$content['detail'] = '<span class="wizard-plugin-count">'.count($plugins['all']).'</span><ul class="whizzie-do-plugins">';
		// Add each plugin into a list
		foreach( $plugins['all'] as $slug=>$plugin ) {
			$content['detail'] .= '<li data-slug="' . esc_attr( $slug ) . '">' . esc_html( $plugin['name'] ) . '<div class="wizard-plugin-title">';

			$content['detail'] .= '<span class="wizard-plugin-status">Installation Required</span><i class="spinner"></i></div></li>';

		}
		$content['detail'] .= '</ul>';

		return $content;
	}


	/**
	 * Print the content for the widgets step
	 * @since 1.1.0
	 */
	public function get_step_widgets() { ?>
		<div class="summary">
			<p>
				<?php esc_html_e('This theme supports importing the demo content and adding widgets. Get them installed with the below button. Using the Customizer, it is possible to update or even deactivate them','vw-tourism-pro'); ?>
			</p>
		</div>
	<?php }


	/**
	 * Print the content for the Design choices for the user
	 */

	public function get_step_design() { ?>

		<div class="ibtana-design-product-row">
		</div>
		<div class="wizard-design-button-wrapper">
			<a href="#" class="button button-primary do-it" data-step="design" id="IbtanaImportButton" data-callback="inner_page_builder">Import</a>
		</div>

	<?php }
	/**
	 * Print the content for the final step
	 */
	public function get_step_done() {

	 ?>

		<div class="vw-setup-finish">
			<p>
				<?php echo esc_html('Your demo content has been imported successfully . Click on the finish button for more information.'); ?>
			</p>
			<div class="finish-buttons">
				<a href="<?php echo esc_url(admin_url('/customize.php')); ?>" class="wz-btn-customizer" target="_blank"><?php esc_html_e('Customize Your Demo','vw-tourism-pro') ?></a>
				<a href="" class="wz-btn-builder" target="_blank"><?php esc_html_e('Customize Your Demo','vw-tourism-pro'); ?></a>
				<a href="<?php echo esc_url(site_url()); ?>" class="wz-btn-visit-site" target="_blank"><?php esc_html_e('Visit Your Site','vw-tourism-pro'); ?></a>
			</div>
			<div class="vw-finish-btn">
				<a href="javascript:void(0);" class="button button-primary" onclick="openCity(event, 'theme_info')" data-tab="theme_info">Finish</a>
			</div>
		</div>

	<?php }

	/**
	 * Get the plugins registered with TGMPA
	 */
	public function get_plugins() {

		$instance = call_user_func( array( get_class( $GLOBALS['tgmpa'] ), 'get_instance' ) );
		$plugins = array(
			'all' 		=> array(),
			'install'	=> array(),
			'update'	=> array(),
			'activate'	=> array()
		);
		foreach( $instance->plugins as $slug=>$plugin ) {
			if( $instance->is_plugin_active( $slug ) && false === $instance->does_plugin_have_update( $slug ) ) {
				// Plugin is installed and up to date
				continue;
			} else {
				$plugins['all'][$slug] = $plugin;
				if( ! $instance->is_plugin_installed( $slug ) ) {
					$plugins['install'][$slug] = $plugin;
				} else {
					if( false !== $instance->does_plugin_have_update( $slug ) ) {
						$plugins['update'][$slug] = $plugin;
					}
					if( $instance->can_plugin_activate( $slug ) ) {
						$plugins['activate'][$slug] = $plugin;
					}
				}
			}
		}
		return $plugins;
	}

	public function setup_plugins() {

		if ( ! check_ajax_referer( 'whizzie_nonce', 'wpnonce' ) || empty( $_POST['slug'] ) ) {
			wp_send_json_error( array( 'error' => 1, 'message' => esc_html__( 'No Slug Found','vw-tourism-pro' ) ) );
		}
		$json = array();
		// send back some json we use to hit up TGM
		$plugins = $this->get_plugins();

		// what are we doing with this plugin?
		foreach ( $plugins['activate'] as $slug => $plugin ) {
			if ( $_POST['slug'] == $slug ) {
				$json = array(
					'url'           => admin_url( $this->tgmpa_url ),
					'plugin'        => array( $slug ),
					'tgmpa-page'    => $this->tgmpa_menu_slug,
					'plugin_status' => 'all',
					'_wpnonce'      => wp_create_nonce( 'bulk-plugins' ),
					'action'        => 'tgmpa-bulk-activate',
					'action2'       => - 1,
					'message'       => esc_html__( 'Activating Plugin','vw-tourism-pro' ),
				);
				break;
			}
		}
		foreach ( $plugins['update'] as $slug => $plugin ) {
			if ( $_POST['slug'] == $slug ) {
				$json = array(
					'url'           => admin_url( $this->tgmpa_url ),
					'plugin'        => array( $slug ),
					'tgmpa-page'    => $this->tgmpa_menu_slug,
					'plugin_status' => 'all',
					'_wpnonce'      => wp_create_nonce( 'bulk-plugins' ),
					'action'        => 'tgmpa-bulk-update',
					'action2'       => - 1,
					'message'       => esc_html__( 'Updating Plugin','vw-tourism-pro' ),
				);
				break;
			}
		}
		foreach ( $plugins['install'] as $slug => $plugin ) {
			if ( $_POST['slug'] == $slug ) {
				$json = array(
					'url'           => admin_url( $this->tgmpa_url ),
					'plugin'        => array( $slug ),
					'tgmpa-page'    => $this->tgmpa_menu_slug,
					'plugin_status' => 'all',
					'_wpnonce'      => wp_create_nonce( 'bulk-plugins' ),
					'action'        => 'tgmpa-bulk-install',
					'action2'       => - 1,
					'message'       => esc_html__( 'Installing Plugin','vw-tourism-pro' ),
				);
				break;
			}
		}
		if ( $json ) {
			$json['hash'] = md5( serialize( $json ) ); // used for checking if duplicates happen, move to next plugin
			wp_send_json( $json );
		} else {
			wp_send_json( array( 'done' => 1, 'message' => esc_html__( 'Success','vw-tourism-pro' ) ) );
		}
		exit;
	}


	public static function get_page_id_by_title($pagename){
		$args = array(
			'post_type' => 'page',
			'posts_per_page' => 1,
			'title' => $pagename
		);
		$query = new WP_Query( $args );

		$page_id = '1';
		if (isset($query->post->ID)) {
			$page_id = $query->post->ID;
		}

		return $page_id;
	}


	// ------- Create Nav Menu --------
	public function theme_create_customizer_nav_menu(){
		$menuname = 'Primary Menu';
		$bpmenulocation = 'primary';
		$menu_exists = wp_get_nav_menu_object( $menuname );

		if( !$menu_exists){
		    $menu_id = wp_create_nav_menu($menuname);
		    wp_update_nav_menu_item($menu_id, 0, array(
	        'menu-item-title' =>  __('Home'),
	        'menu-item-classes' => 'home',
	        'menu-item-url' => home_url( '/' ),
	        'menu-item-status' => 'publish'));

					wp_update_nav_menu_item($menu_id, 0, array(
						'menu-item-title' =>  __('Destination','vw-tourism-pro'),
						'menu-item-classes' => 'destination',
						'menu-item-url' => get_permalink(ThemeWhizzie::get_page_id_by_title('Destination')),
						'menu-item-status' => 'publish'
					));

					wp_update_nav_menu_item($menu_id, 0, array(
						'menu-item-title' => __('About Us','vw-tourism-pro'),
						'menu-item-classes' => 'about-us',
						'menu-item-url' => get_permalink(ThemeWhizzie::get_page_id_by_title('About Us')),
						'menu-item-status' => 'publish',

					));

					$parent_page_item = wp_update_nav_menu_item($menu_id, 0, array(
					 'menu-item-title' => __('Pages','vw-tourism-pro'),
					 'menu-item-status' => 'publish'
				 ));
				 wp_update_nav_menu_item($menu_id, 0, array(
					 'menu-item-title' =>  __('Tour Packages','vw-tourism-pro'),
					 'menu-item-classes' => 'tour-packages',
					 'menu-item-url' => get_permalink(ThemeWhizzie::get_page_id_by_title('Tour Packages')),
					 'menu-item-status' => 'publish',
 						'menu-item-parent-id' => $parent_page_item
				 ));
					wp_update_nav_menu_item($menu_id, 0, array(
						'menu-item-title' =>  __('Terms & Condition','vw-tourism-pro'),
						'menu-item-classes' => 'terms-condition',
						'menu-item-url' => get_permalink(ThemeWhizzie::get_page_id_by_title('Terms & Condition')),
						'menu-item-status' => 'publish',
						'menu-item-parent-id' => $parent_page_item
					));
					wp_update_nav_menu_item($menu_id, 0, array(
						'menu-item-title' =>  __('Privacy Policy','vw-tourism-pro'),
						'menu-item-classes' => 'privacy',
						'menu-item-url' => get_permalink(ThemeWhizzie::get_page_id_by_title('Privacy Policy')),
						'menu-item-status' => 'publish',
						'menu-item-parent-id' => $parent_page_item
					));
					wp_update_nav_menu_item($menu_id, 0, array(
						'menu-item-title' =>  __('Support','vw-tourism-pro'),
						'menu-item-classes' => 'support',
						'menu-item-url' => get_permalink(ThemeWhizzie::get_page_id_by_title('Support')),
						'menu-item-status' => 'publish',
						'menu-item-parent-id' => $parent_page_item
					));
					wp_update_nav_menu_item($menu_id, 0, array(
						'menu-item-title' => __('404','vw-tourism-pro'),
						'menu-item-classes' => 'error',
						'menu-item-url' => get_permalink(ThemeWhizzie::get_page_id_by_title('404')),
						'menu-item-status' => 'publish',
						'menu-item-parent-id' => $parent_page_item
					));
					wp_update_nav_menu_item($menu_id, 0, array(
						'menu-item-title' =>  __('Faq','vw-tourism-pro'),
						'menu-item-classes' => 'faq',
						'menu-item-url' => get_permalink(ThemeWhizzie::get_page_id_by_title('Faq')),
						'menu-item-status' => 'publish',
						'menu-item-parent-id' => $parent_page_item
					));
					wp_update_nav_menu_item($menu_id, 0, array(
						'menu-item-title' =>  __('Cuisines','vw-tourism-pro'),
						'menu-item-classes' => 'cuisines',
						'menu-item-url' => get_permalink(ThemeWhizzie::get_page_id_by_title('Cuisines')),
						'menu-item-status' => 'publish',
						'menu-item-parent-id' => $parent_page_item
					));
					wp_update_nav_menu_item($menu_id, 0, array(
						'menu-item-title' =>  __('Contact','vw-tourism-pro'),
						'menu-item-classes' => 'Contact',
						'menu-item-url' => get_permalink(ThemeWhizzie::get_page_id_by_title('Contact')),
						'menu-item-status' => 'publish',
						'menu-item-parent-id' => $parent_page_item
					));
		    $parent_item = wp_update_nav_menu_item($menu_id, 0, array(
					'menu-item-title' => __('Blog','vw-tourism-pro'),
					'menu-item-status' => 'publish'
				));
				wp_update_nav_menu_item($menu_id, 0, array(
					'menu-item-title' => __('Blog With No Sidebar','vw-tourism-pro'),
					'menu-item-classes' => 'blog-left-sidebar',
					'menu-item-url' => get_permalink(ThemeWhizzie::get_page_id_by_title('Blog')),
					'menu-item-status' => 'publish',
					'menu-item-parent-id' => $parent_item
				));
				wp_update_nav_menu_item($menu_id, 0, array(
					'menu-item-title' => __('Blog Left Sidebar','vw-tourism-pro'),
					'menu-item-classes' => 'blog-left-sidebar',
					'menu-item-url' => get_permalink(ThemeWhizzie::get_page_id_by_title('Blog Left Sidebar')),
					'menu-item-status' => 'publish',
					'menu-item-parent-id' => $parent_item
				));
				wp_update_nav_menu_item($menu_id, 0, array(
					'menu-item-title' => __('Blog Right Sidebar','vw-tourism-pro'),
					'menu-item-classes' => 'blog-right-sidebar',
					'menu-item-url' => get_permalink(ThemeWhizzie::get_page_id_by_title('Blog Right Sidebar')),
					'menu-item-status' => 'publish',
					'menu-item-parent-id' => $parent_item
				));
		    if( !has_nav_menu( $bpmenulocation ) ){
		        $locations = get_theme_mod('nav_menu_locations');
		        $locations[$bpmenulocation] = $menu_id;
		        set_theme_mod( 'nav_menu_locations', $locations );
		    }
			}
		}
		// ------- Create Footer Menu --------
		public function theme_create_customizer_footer_quick_menu() {
			$menuname = $lblg_themename . 'Quick Links';
			$bpmenulocation = 'footer1';
			$menu_exists = wp_get_nav_menu_object( $menuname );

			if( !$menu_exists){
				$menu_id = wp_create_nav_menu($menuname);
		    wp_update_nav_menu_item($menu_id, 0, array(
					'menu-item-title' =>  __('About Us','vw-tourism-pro'),
	        'menu-item-classes' => 'page',
					'menu-item-url' => get_permalink(ThemeWhizzie::get_page_id_by_title('About Us')),
	        'menu-item-status' => 'publish'
				));
				wp_update_nav_menu_item($menu_id, 0, array(
					'menu-item-title' =>  __('Destination','vw-tourism-pro'),
					'menu-item-classes' => 'destination',
					'menu-item-url' => get_permalink(ThemeWhizzie::get_page_id_by_title('Destination')),
					'menu-item-status' => 'publish'
				));
				wp_update_nav_menu_item($menu_id, 0, array(
					'menu-item-title' =>  __('Cuisines','vw-tourism-pro'),
					'menu-item-classes' => 'cuisines',
					'menu-item-url' => get_permalink(ThemeWhizzie::get_page_id_by_title('Cuisines')),
					'menu-item-status' => 'publish',
					'menu-item-parent-id' => $parent_page_item
				));
				wp_update_nav_menu_item($menu_id, 0, array(
				 'menu-item-title' =>  __('News & Blog','vw-tourism-pro'),
				 'menu-item-classes' => 'page',
				 'menu-item-url' => get_permalink(ThemeWhizzie::get_page_id_by_title('Blog')),
				 'menu-item-status' => 'publish'
			 ));
			 wp_update_nav_menu_item($menu_id, 0, array(
				 'menu-item-title' =>  __('Contact','vw-tourism-pro'),
				 'menu-item-classes' => 'Contact',
				 'menu-item-url' => get_permalink(ThemeWhizzie::get_page_id_by_title('Contact')),
				 'menu-item-status' => 'publish',
			 ));
				if( !has_nav_menu( $bpmenulocation ) ){
					$locations = get_theme_mod('nav_menu_locations');
					$locations[$bpmenulocation] = $menu_id;
					set_theme_mod( 'nav_menu_locations', $locations );
				}
			}
		}

		// ------- Create Footer Menu --------
		public function theme_create_customizer_footer_activity_cat() {
			$main_menu_items = array(
				'Activities' => array(
							'Historical Places',
							'Exciting Baloon',
							'Hiking',
							'Magnificent Cities',
							'Rock Climbing',
							'Water Sports'
							)
				);

			$menuname = 'Activity Menu';
			$bpmenulocation = 'footer2';
			$menu_exists = wp_get_nav_menu_object( $menuname );

				if( !$menu_exists){
					 $menu_id = wp_create_nav_menu($menuname);

					foreach ($main_menu_items as $top_level_name => $column_titles) {
							foreach ($column_titles as $category_name ) {

								$term_object = get_term_by('name', $category_name, 'tcp_category');

								$term_link = '#';
								if ($term_object) {
									$term_id = $term_object->term_id;
									$term_link = get_term_link( $term_id, 'tcp_category' );
								}

								$page = get_page_by_title($category_name, OBJECT, 'tcp_category');
								wp_update_nav_menu_item($menu_id, 0, array(
									'menu-item-title' =>  __( $category_name, 'vw-tourism-pro'),
									'menu-item-classes' => 'menu-category',
									'menu-item-url' => 	$term_link,
									'menu-item-status' => 'publish',
									// 'menu-item-parent-id' => $sub_menu_heading
								));
							}
					}

					 if( !has_nav_menu( $bpmenulocation ) ){
						$locations = get_theme_mod('nav_menu_locations');
						$locations[$bpmenulocation] = $menu_id;
						set_theme_mod( 'nav_menu_locations', $locations );
					 }
			 }

		}


	function isAssoc( array $arr ) {
		if (array() === $arr) return false;
		return array_keys($arr) !== range(0, count($arr) - 1);
	}

	/**
	 * Imports the Demo Content
	 * @since 1.1.0
	 */
	 public function setup_widgets() {

		 ini_set( 'upload_max_filesize', '30M' );
		 ini_set( 'max_execution_time', '300' );

		 // $this->custom_posttype_option();


			set_theme_mod('vw_tourism_pro_inner_page_banner_bgimage', get_template_directory_uri().'/assets/images/banner-Image.png');
		 // vw_title_banner_image_wp_custom_attachment START
		 $image_url 	= get_template_directory_uri().'/assets/images/banner-Image.png';
		 $upload_dir = wp_upload_dir();
		 $image_data = file_get_contents( $image_url );
		 $filename = basename( $image_url );
		 if ( wp_mkdir_p( $upload_dir['path'] ) ) {
			 $file = $upload_dir['path'] . '/' . $filename;
		 } else {
			 $file = $upload_dir['basedir'] . '/' . $filename;
		 }
		 file_put_contents( $file, $image_data );
		 $wp_filetype = wp_check_filetype( $filename, null );
		 $attachment = array(
			 'post_mime_type'	=> $wp_filetype['type'],
			 'post_title' 			=> sanitize_file_name( $filename ),
			 'post_content' 		=> '',
			 'post_status' 		=> 'inherit'
		 );
		 $attach_id = wp_insert_attachment( $attachment, $file );
		 require_once( ABSPATH . 'wp-admin/includes/image.php' );
		 $attach_data = wp_generate_attachment_metadata( $attach_id, $file );
		 wp_update_attachment_metadata( $attach_id, $attach_data );
		 $attachment_url = wp_get_attachment_url( $attach_id );
		 // vw_title_banner_image_wp_custom_attachment END

		 //POST and update the customizer and other related data of VW Video Vlog Pro
		 $home_id=''; $vw_blog_id=''; $page_id=''; $contact_id='';
		 // Create a front page and assigned the template
		 $home_title = 'Home';
		 $home_check = get_page_by_title($home_title);
		 $home = array(
			 'post_type' => 'page',
 		   'post_title' => $home_title,
 		   'post_status' => 'publish',
 		   'post_author' => 1,
 		   'post_slug' => 'home'
		 );
		 $home_id = wp_insert_post($home);
		 //Set the home page template
		 add_post_meta( $home_id, '_wp_page_template', 'page-template/home-page.php' );

		 //Set the static front page
		$home = get_page_by_title( 'Home' );
		update_option( 'page_on_front', $home->ID );
		update_option( 'show_on_front', 'page' );

		//  assign the banner image to the shop page
		$shop_page = get_page_by_title('Shop');
		add_post_meta( $shop_page->ID, 'vw_title_banner_image_wp_custom_attachment', $attachment_url );

		// Create a blog Blog and assigned the template
		$blog_title = 'Blog';
		$blog_check = get_page_by_title($blog_title);
		$blog = array(
			'post_type' => 'page',
			'post_title' => $blog_title,
			'post_status' => 'publish',
			'post_author' => 1,
			'post_slug' => 'blog'
		);
		$blog_id = wp_insert_post($blog);

		//Set the blog page template
		add_post_meta( $blog_id, '_wp_page_template', 'page-template/blog-fullwidth-extend.php' );
		add_post_meta( $blog_id, 'vw_title_banner_image_wp_custom_attachment', $attachment_url );
		// add_post_meta( $blog_id, '
		// ', $attachment_url );

		$blog_title = 'Blog Left Sidebar';
		$blog = array(
			'post_type' 	=> 'page',
			'post_title' 	=> $blog_title,
			'post_status' => 'publish',
			'post_author' => 1,
			'post_slug' 	=> 'blog-left-sidebar'
		);
		$blog_id = wp_insert_post($blog);

		//Set the blog page template
		add_post_meta( $blog_id, '_wp_page_template', 'page-template/blog-with-left-sidebar.php' );
		add_post_meta( $blog_id, 'vw_title_banner_image_wp_custom_attachment', $attachment_url );

		$blog_title = 'Blog Right Sidebar';
		$blog = array(
			'post_type' 	=> 'page',
			'post_title' 	=> $blog_title,
			'post_status' => 'publish',
			'post_author' => 1,
			'post_slug' 	=> 'blog-right-sidebar'
		);
		$blog_id = wp_insert_post($blog);

		//Set the blog page template
		add_post_meta( $blog_id, '_wp_page_template', 'page-template/blog-with-right-sidebar.php' );
		add_post_meta( $blog_id, 'vw_title_banner_image_wp_custom_attachment', $attachment_url );

		// Create a Page
		if( get_page_by_title( 'Page' ) == NULL ) {
			$page_title = 'Page ';
			$content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est. laborum.ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

			$page_check = get_page_by_title($page_title);
			$page = array(
				'post_type' => 'page',
				'post_title' => $page_title,
				'post_content'  => $content,
				'post_status' => 'publish',
				'post_author' => 1,
				'post_slug' => 'page'
			);
			$page_id = wp_insert_post($page);
			add_post_meta( $page_id , 'vw_title_banner_image_wp_custom_attachment', $attachment_url );
			$page_title = 'Page Left Sidebar';
			$content = 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi. Sed quis scit si forte quod esset optima res pro me. sicut ea quae sentio. Qui vellem cadunt off ius desk ejus! Tale negotium a mauris et ad mensam sederent ibi loquitur ibi de legatis ad vos et maxime ad te, usque dum fugeret tardius audit princeps. Bene tamen fiduciam Ego got off semelTe obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi. Sed quis scit si forte quod esset optima res pro me. sicut ea quae sentio. Qui vellem cadunt off ius desk ejus! Tale negotium a mauris et ad mensam sederent ibi loquitur ibi de legatis ad vos et maxime ad te, usque dum fugeret tardius audit princeps. Bene tamen fiduciam Ego got off semel.';

			$page_check = get_page_by_title($page_title);
			$vw_page = array(
				'post_type' 		=> 'page',
				'post_title' 		=> $page_title,
				'post_content'	=> $content,
				'post_status' 	=> 'publish',
				'post_author' 	=> 1,
				'post_slug' 		=> 'page-left'
			);
			$page_id = wp_insert_post($vw_page);

			//Set the blog page template
			add_post_meta( $page_id, '_wp_page_template', 'page-template/page-with-left-sidebar.php' );
			add_post_meta( $page_id, 'vw_title_banner_image_wp_custom_attachment', $attachment_url );

			$page_title = 'Page Right Sidebar';
			$content = 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi. Sed quis scit si forte quod esset optima res pro me. sicut ea quae sentio. Qui vellem cadunt off ius desk ejus! Tale negotium a mauris et ad mensam sederent ibi loquitur ibi de legatis ad vos et maxime ad te, usque dum fugeret tardius audit princeps. Bene tamen fiduciam Ego got off semelTe obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi. Sed quis scit si forte quod esset optima res pro me. sicut ea quae sentio. Qui vellem cadunt off ius desk ejus! Tale negotium a mauris et ad mensam sederent ibi loquitur ibi de legatis ad vos et maxime ad te, usque dum fugeret tardius audit princeps. Bene tamen fiduciam Ego got off semel.';

			$page_check = get_page_by_title($page_title);
			$vw_page = array(
				'post_type' 		=> 'page',
				'post_title' 		=> $page_title,
				'post_content'	=> $content,
				'post_status' 	=> 'publish',
				'post_author' 	=> 1,
				'post_slug' 		=> 'page-right'
			);
			$page_id = wp_insert_post($vw_page);

			//Set the blog page template
			add_post_meta( $page_id, '_wp_page_template', 'page-template/page-with-right-sidebar.php' );
			add_post_meta( $page_id, 'vw_title_banner_image_wp_custom_attachment', $attachment_url );
		}



		// Create a contact page and assigned the template
		$contact_title = 'Contact';
		$contact_check = get_page_by_title($contact_title);
		$contact = array(
			'post_type' => 'page',
			'post_title' => $contact_title,
			'post_status' => 'publish',
			'post_author' => 1,
			'post_slug' => 'contact'
		);
		$contact_id = wp_insert_post($contact);

		//Set the blog with right sidebar template
		add_post_meta( $contact_id, '_wp_page_template', 'page-template/contact.php' );
		add_post_meta( $contact_id, 'vw_title_banner_image_wp_custom_attachment', $attachment_url );

		$menu_title = '2 Columns';
		$content = '[products  columns="2" orderby="date" order="DESC" visibility="visible"]';
		$menu = array(
			'post_type' 	=> 'page',
			'post_title' 	=> $menu_title,
			'post_content'  => $content,
			'post_status' => 'publish',
			'post_author' => 1,
			'post_slug' 	=> 'page'
		);
		$menu_id = wp_insert_post($menu);

		//Set the blog with right sidebar template
		add_post_meta( $menu_id, '_wp_page_template', 'page-template/2-columns.php' );
		add_post_meta( $menu_id, 'vw_title_banner_image_wp_custom_attachment', $attachment_url );

		// Create a contact page and assigned the template
		$menu_title = '3 Columns';
		$content = '[products  columns="3" orderby="date" order="DESC" visibility="visible"]';
		$menu = array(
			'post_type' 	=> 'page',
			'post_title' 	=> $menu_title,
			'post_content'  => $content,
			'post_status' => 'publish',
			'post_author' => 1,
			'post_slug' 	=> 'page'
		);
		$menu_id = wp_insert_post($menu);

		//Set the blog with right sidebar template
		add_post_meta( $menu_id, '_wp_page_template', 'page-template/3-columns.php' );
		add_post_meta( $menu_id, 'vw_title_banner_image_wp_custom_attachment', $attachment_url );

		// Create a contact page and assigned the template
		$menu_title = '4 Columns';
		$content = '[products  columns="4" orderby="date" order="DESC" visibility="visible"]';
		$menu = array(
			'post_type' 	=> 'page',
			'post_title' 	=> $menu_title,
			'post_content'  => $content,
			'post_status' => 'publish',
			'post_author' => 1,
			'post_slug' 	=> 'page'
		);
		$menu_id = wp_insert_post($menu);


		$aboutus_title = 'About Us';
	  $aboutus= array(
			'post_type' 	=> 'page',
			'post_title' 	=> $aboutus_title,
			'post_status' => 'publish',
			'post_author' => 1,
			'post_slug' 	=> 'aboutus'
		);
		$aboutus_id = wp_insert_post($aboutus);


		add_post_meta( $aboutus_id, '_wp_page_template', 'page-template/about-us.php' );
		add_post_meta( $aboutus_id, 'vw_title_banner_image_wp_custom_attachment', $attachment_url );


		$error_title = '404';
	  $error = array(
			'post_type' 	=> 'page',
			'post_title' 	=> $error_title,
			'post_status' => 'publish',
			'post_author' => 1,
			'post_slug' 	=> 'error-us'
		);
		$error_id = wp_insert_post($error);

		//Set the single testimonial with right sidebar template
		add_post_meta( $error_id, '_wp_page_template', '404.php' );
		add_post_meta( $error_id, 'vw_title_banner_image_wp_custom_attachment', $attachment_url );



			// ---------Destination Page------------

		$destination_title = 'Destination';
		$destination_check = get_page_by_title($destination_title);
		$destination = array(
			'post_type' => 'page',
			'post_title' => $destination_title,
			'post_status' => 'publish',
			'post_author' => 1,
			'post_slug' => 'destination'
		);
		$destination_id = wp_insert_post($destination);

		add_post_meta( $destination_id, '_wp_page_template', 'page-template/destination.php' );
		add_post_meta( $destination_id, 'vw_title_banner_image_wp_custom_attachment', $attachment_url );

	// ---------Faq Page------------
		$faq_title = 'Faq';
		$faq_check = get_page_by_title($faq_title);
	  $faq = array(
			'post_type' 	=> 'page',
			'post_title' 	=> $faq_title,
			'post_status' => 'publish',
			'post_author' => 1,
			'post_slug' 	=> 'faq'
		);
		$faq_id = wp_insert_post($faq);

		add_post_meta( $faq_id, '_wp_page_template', 'page-template/faq.php' );
		add_post_meta( $faq_id, 'vw_title_banner_image_wp_custom_attachment', $attachment_url );

	// ---------Cuisines Page------------
		$cuisines_title = 'Cuisines';
		$cuisines_check = get_page_by_title($cuisines_title);
	  $cuisines = array(
			'post_type' 	=> 'page',
			'post_title' 	=> $cuisines_title,
			'post_status' => 'publish',
			'post_author' => 1,
			'post_slug' 	=> 'cuisines'
		);
		$cuisines_id = wp_insert_post($cuisines);

		add_post_meta( $cuisines_id, '_wp_page_template', 'page-template/cuisines.php' );
		add_post_meta( $cuisines_id, 'vw_title_banner_image_wp_custom_attachment', $attachment_url );

	// ---------Cuisines Page------------
		$tour_title = 'Tour Packages';
		$tour_check = get_page_by_title($tour_title);
	  $tour = array(
			'post_type' 	=> 'page',
			'post_title' 	=> $tour_title,
			'post_status' => 'publish',
			'post_author' => 1,
			'post_slug' 	=> 'tour-packages'
		);
		$tour_id = wp_insert_post($tour);

		add_post_meta( $tour_id, '_wp_page_template', 'page-template/tour-packages.php' );
		add_post_meta( $tour_id, 'vw_title_banner_image_wp_custom_attachment', $attachment_url );

	// ---------Registration Form Page------------

		$registration_title = 'Registration Form';
		$registration_check = get_page_by_title($registration_title);
	  $registration = array(
			'post_type' 	=> 'page',
			'post_title' 	=> $registration_title,
			'post_status' => 'publish',
			'post_author' => 1,
			'post_slug' 	=> 'registration-form'
		);
		$registration_id = wp_insert_post($registration);

		add_post_meta( $registration_id, '_wp_page_template', 'page-template/registration-form.php' );
		add_post_meta( $registration_id, 'vw_title_banner_image_wp_custom_attachment', $attachment_url );


			$support_page = 'Support';
			$content = '
			<h2>How To Get Support?</h2>

					<h4>Dear customers, future customers and Friends!</h4>

					<p>This support interface has all the tools we need to listen to your ideas and help you with your problems. Just choose your Department and write your questions or problems. We love feedback and satisfied customers. We promise that you will get answer for your question in 24 hours, so prepare to get satisfied.</p>

					<hr>

					<h4>If you have product related problem on your site please provide us the following things:</h4>

					<p>This support interface has all the tools we need to listen to your ideas and help you with your problems. Just choose your Department and write your questions or problems. We love feedback and satisfied customers. We promise that you will get answer for your question in 24 hours, so prepare to get satisfied.</p>


					<ul class="half-width">
						<li>Link to your site: To check your site...</li>
						<li>FTP access (optional): Sometimes we can`t solve the problems without it...</li>
						<li>Admin account: To dig in the site more deeply...</li>
						<li>Important: Please sure that you added your domain to our domain list here. We will be priority support for domains which are registered in our domain list.</li>
						<li>Order id: To identify yourself...</li>
						<li>Order id: To identify yourself...</li>
					</ul>

					<hr>

					<h4>How to write a support message?<h4>

					<ul class="d-block">
					<li>Language: Please write us in the following languages: english.</li>
					<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry`s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>
					</ul>

					<h2 class="mt-5">Contact Us</h2>

					<h4>Lorem Ipsum is simply dummy text of the printing</h4>

					<ul class="d-block">
						<li class="mb-2">Lorem Ipsum is simply dummy text of the printing</li>
						<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry`s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>
					</ul>
				';
			$support = array(
				'post_type' 	=> 'page',
				'post_title' 	=> $support_page,
				'post_content'  => $content,
				'post_status' => 'publish',
				'post_author' => 1,
				'post_slug' 	=> 'page'
			);
			$support_id = wp_insert_post($support);

			//Set the blog with right sidebar template
			add_post_meta($support_id, '_wp_page_template', 'page-template/support.php');
			add_post_meta( $support_id, 'vw_title_banner_image_wp_custom_attachment', $attachment_url );


			// / Create a Terms page and assigned the template


		//Privacy Policy page
			$privacy_content = '
			<div class="content privacy-main">
			<h2>France Tourism Privacy Policy</h2>
			<p>When planning a visit to France, its important to understand how your personal data will be handled by various tourism services. Here’s a summary of the privacy practices of some major French tourism entities:</p>

			<h3>General Data Practices</h3>
			<ul>
					<li>Data Collection: French tourism websites and services typically collect data that you provide directly, such as when booking a hotel, subscribing to newsletters, or contacting customer support. This includes personal identification information (name, email, phone number), travel preferences, and payment details.</li>
					<li>Usage Data: They also gather data about how you interact with their services. This includes information about your device, IP address, and browsing activities. This helps improve service delivery and personalize user experience.</li>
					<li>Cookies: Like many websites, French tourism sites use cookies to track your browsing habits. These cookies help in understanding visitor preferences and enhancing site functionality. Users are usually given options to manage cookie preferences.</li>
					<li>Data Sharing: Personal data might be shared with third-party partners, including service providers, payment processors, and analytics companies, but always under strict contractual obligations to protect the data.</li>
					<li>Security Measures: French tourism agencies implement various security measures to protect your data from unauthorized access, such as encryption and secure servers.</li>
			</ul>

			<h3>Specific Tourism Sites</h3>

			<h4>Marseille Tourism</h4>
			<p>Their privacy policy highlights that data collected through their services is used to personalize the user experience and improve service quality. They emphasize their commitment to data protection and user rights to access, rectify, and delete their data as per GDPR guidelines.

			</p>

			<h4>Normandy Tourism</h4>
			<p>They ensure compliance with GDPR by providing users with clear options to control their data. This includes giving consent for data processing and the right to request data deletion.
			</p>

			<h4>Nice Côte dAzur</h4>
			<p>This bureaus policy specifies the use of data for enhancing user experience and facilitating bookings and reservations. They also provide detailed instructions on managing cookies and accessing personal data.

			</p>

			<h3>User Rights</h3>
			<p>Under the General Data Protection Regulation (GDPR), users have several rights regarding their personal data:</p>
			<ul>
					<li>Right to Access: You can request details about the data being held about you.</li>
					<li>Right to Rectification: If your data is incorrect or incomplete, you can request corrections.</li>
					<li>Right to Erasure: Also known as the "right to be forgotten," you can request that your data be deleted.</li>
					<li>Right to Object: You can object to certain types of data processing, such as for marketing purposes.</li>
			</ul>

			<p>For detailed information, always refer to the specific privacy policies of the tourism services you are using. This ensures you understand how your data is handled and the measures in place to protect your privacy.</p>
		';

		$page_name = 'Privacy Policy';//
			$page_id = ThemeWhizzie::get_page_id_by_title($page_name);
			if ($page_id) {
					$my_post = array(
							'ID'           => $page_id,
							'post_status' => 'publish',
							'post_content' => $privacy_content
					);
					$privacy_id = wp_update_post( $my_post );
					add_post_meta( $privacy_id, 'vw_title_banner_image_wp_custom_attachment', $attachment_url );
			}


			//Terms Condition page

		$terms_page = 'Terms & Condition';
		$content = '
		<div id="terms-condition-main">
			<h3>1. Acceptance of Terms</h3>
			<p>By accessing or using our website, you agree to be bound by these Terms and Conditions, our Privacy Policy, and all applicable laws and regulations. If you do not agree with any of these terms, you are prohibited from using or accessing this site.</p>

			<h3>2. Services</h3>
			<p>Our company provides pest control services as described on our website. By requesting our services, you agree to abide by our service terms and any additional agreements made between you and our company.</p>

			<h3>3. Payment</h3>
			<p>Payment for our services is due upon completion, unless otherwise agreed upon. We accept payment via [list accepted payment methods]. Failure to pay may result in additional fees or legal action.</p>

			<h3>4. Cancellations and Refunds</h3>
			<p>Cancellations must be made [number of days] prior to the scheduled service date to receive a full refund. Refunds will be issued in the original form of payment. Refunds will not be provided for cancellations made after this time period.</p>

			<h3>5. Liability</h3>
			<p>Our company is not liable for any damages or injuries resulting from the use of our services, except where prohibited by law. We are not responsible for damages to property or belongings caused by pests.</p>

			<h3>6. Warranty</h3>
			<p>We warrant that our services will be performed in a professional manner and in accordance with industry standards. If you are not satisfied with our services, please contact us within [number of days] for resolution.</p>

			<h3>7. Indemnification</h3>
			<p>You agree to indemnify and hold harmless our company, its officers, employees, and agents from any claims, damages, or losses arising out of your use of our services or violation of these Terms and Conditions.</p>

			<h3>8. Governing Law</h3>
			<p>These Terms and Conditions shall be governed by and construed in accordance with the laws of [your jurisdiction]. Any disputes arising under these terms shall be subject to the exclusive jurisdiction of the courts in [your jurisdiction].</p>

			<h3>9. Changes to Terms</h3>
			<p>We reserve the right to update or modify these Terms and Conditions at any time without prior notice. Changes will be effective immediately upon posting to our website. It is your responsibility to review these terms periodically for updates.</p>

			<h3>10. Contact Us</h3>
			<p>If you have any questions or concerns about these Terms and Conditions, please contact us at <a href="mailto:contact@example.com">contact@example.com</a>.</p>
		</div>
			';
		$menu = array(
			'post_type' 	=> 'page',
			'post_title' 	=> $terms_page,
			'post_content'  => $content,
			'post_status' => 'publish',
			'post_author' => 1,
			'post_slug' 	=> 'page'
		);
		$menu_id = wp_insert_post($menu);

		//Set the blog with right sidebar template
		add_post_meta( $menu_id, 'vw_title_banner_image_wp_custom_attachment', $attachment_url );



		// -------------- Section Ordering ---------------
		set_theme_mod( 'vw_tourism_pro_section_ordering_settings_repeater', 'banner,activity,about,popular-destination,explore,popular-cuisines,popular-packages,experience,how-to-process,why-choose-us,testimonial,team,blog');

		// topbar

	$topbar_social_icons = array(
		'vwsmp_facebook' 	=> 'https://www.facebook.com/',
		'vwsmp_admin_check_facebook' 	=> '1',
		'vwsmp_twitter'  	=> 'https://www.twitter.com/',
		'vwsmp_admin_check_twitter' 	=> '1',
		'vwsmp_instagram'  	=> 'https://www.instagram.com/',
		'vwsmp_admin_check_instagram' 	=> '1',
		'vwsmp_pinterest' => 'https://www.pinterest.com/',
		'vwsmp_admin_check_pinterest' 	=> '1',
	 );

	 update_option('vwsmp_options', $topbar_social_icons);


	set_theme_mod('vw_tourism_pro_banner_bgimage_mobile', get_template_directory_uri().'/assets/images/banner/banner-mbl.png');

	 //Scroll Top
		set_theme_mod( 'vw_tourism_pro_genral_section_show_scroll_top_icon', 'fas fa-angle-double-up' );
		set_theme_mod('vw_tourism_pro_footer_desc_img', get_template_directory_uri().'/assets/images/logo.png');
		set_theme_mod('vw_tourism_pro_footer_desc_text', 'Lorem ipsum dolor sit amet,consectetur adipiscing elit.Ut elit tellus, luctus nec ullamcorper mattis.');

		 //Scroll Top

		//Skip Link
		set_theme_mod('vw_tourism_pro_placeholder_text_search_placeholder_text', 'Search');
		set_theme_mod( 'vw_tourism_pro_header_search_icon', 'fa fa-search' );
		set_theme_mod('vw_tourism_pro_header_user_icon_url',get_permalink(ThemeWhizzie::get_page_id_by_title('Registration Form')));
		// set_theme_mod( 'vw_tourism_pro_placeholder_text_search_placeholder_text', 'Search Here' );

		set_theme_mod( 'vw_tourism_pro_res_open_menu_side_icon', 'fas fa-bars' );
		set_theme_mod( 'vw_tourism_pro_res_close_side_menus_icon', 'fas fa-times' );
		set_theme_mod('vw_tourism_pro_side_menu_image', get_template_directory_uri().'/assets/images/logo-side-menu.png');
		set_theme_mod( 'vw_tourism_pro_side_menu_para','Lorem ipsum dolor sit amet, consectetur adipiscing elit.Ut elit tellus luctus nec ullamcor mattis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Ut elit tellus, luctus nec ullamcorper mattis.' );
		set_theme_mod( 'vw_tourism_pro_side_contact_head', 'Contact' );
		set_theme_mod( 'vw_tourism_pro_side_menu_icon1', 'fas fa-location-dot' );
		set_theme_mod( 'vw_tourism_pro_side_menu_location_text', ':- A668 Street Middleton Manchester UK' );

		// --------Slider Section------------------
		set_theme_mod('vw_tourism_pro_banner_bgimage', get_template_directory_uri().'/assets/images/banner/banner-main.png');
		set_theme_mod( 'vw_tourism_pro_banner_sub_heading_one', 'Exclusive	& Memorable	' );
		set_theme_mod( 'vw_tourism_pro_banner_heading', 'France Tourism' );
		set_theme_mod( 'vw_tourism_pro_banner_sub_heading_two', 'Legal Assets Tourism LTD.' );

		$card_title = array('Paris','Lyon','Cannes','Rouen','Marseille','Poitier','Brive-la-Gaillarde');

		for( $i=1; $i<=7; $i++ ) {
			set_theme_mod('vw_tourism_pro_banner_card_img'.$i, get_template_directory_uri().'/assets/images/banner/slider-img'.$i.'.png');
			set_theme_mod('vw_tourism_pro_banner_card_title'.$i, $card_title[$i-1]);
		}

		// set_theme_mod('vw_tourism_pro_banner_img_seven', get_template_directory_uri().'/assets/images/banner/slider-img7.png');
		// set_theme_mod( 'vw_tourism_pro_banner_heading_seven', 'Brive-la-Gaillarde ' );



		/*--------------------------- Destination------------------------*/
 set_theme_mod( 'vw_tourism_pro_popular_destination_sub_heading', 'DESTINATION' );
 set_theme_mod( 'vw_tourism_pro_popular_destination_heading', 'Popular Destination' );
 $destination_arr = array(
			'Cannes',
			'Paris',
			'Lyon',
			'Rouen',
			'Marseille',
			'Brive la Gaillarde',
			'Poitier'
 );
 $destination_type = array(
			'Historical City',
			'The City Of Love',
			'Historical City',
			'Natural City',
			'Historical City',
			'Historical City',
			'Historical City'
 );

 $destinations_ids = array();

 for($i=1;$i<=7;$i++){
		 $desti_title = $destination_arr[$i-1];
		 $content = 'Lorem Ipsum has been the industrys standard dummy text ever since the 1500 when an unknown printer took a galley of type and scrambled it to make a type specimen book Lorem Ipsum has been the industrys standard dummy text ever since the 1500 when an unknown printer took a galley of type and scrambled it to make a type specimen book.';
		 $destination_main	=	wp_insert_term(
				 $desti_title, // the term
				 'tcp_destination', // the taxonomy
				 array(
						 'description'=> $content
				 )
	 );

	 if (!is_wp_error($destinations_ids)) {
		 array_push($destinations_ids, $destination_main['term_id']);
	 }

	 $image_url = get_template_directory_uri().'/assets/images/destination/'.str_replace(' ','-', $desti_title).'.png';
	 $image_name = $desti_title.'.png';;
	 $upload_dir = wp_upload_dir();
	 // Set upload folder
	 $image_data = file_get_contents(esc_url($image_url));
	 // Get image data
	 $unique_file_name = wp_unique_filename($upload_dir['path'], $image_name);
	 // Generate unique name
	 $filename = basename($unique_file_name);
	 // Create image file name
	 // Check folder permission and define file location
	 if (wp_mkdir_p($upload_dir['path'])) {
			$file = $upload_dir['path'].'/'.$filename;
	 } else {
			$file = $upload_dir['basedir'].'/'.$filename;
	 }
	 // Create the image  file on the server
	 file_put_contents($file, $image_data);
	 // Check image file type
	 $wp_filetype = wp_check_filetype($filename, null);
	 // Set attachment data
	 $attachment = array(
		 'post_mime_type' => $wp_filetype['type'],
		 'post_title'     => sanitize_file_name($filename),
		 'post_type'      => 'mphb_room_type',
		 'post_status'    => 'inherit',
	 );
	 // Create the attachment
	 $attach_id = wp_insert_attachment($attachment, $file);

	 // Include image.php
	 require_once (ABSPATH.'wp-admin/includes/image.php');
	 // Define attachment metadata
	 $attach_data = wp_generate_attachment_metadata($attach_id, $file);
	 // Assign metadata to attachment
	 wp_update_attachment_metadata($attach_id, $attach_data);
	 $attach_url =	wp_get_attachment_image_url($attach_id);
	 // And finally assign featured image to post

	 if (!is_wp_error($destinations_ids)) {
		 update_term_meta(	$destination_main['term_id'],	'destination_image', $attach_url);
		 update_term_meta(	$destination_main['term_id'],	'destination_type',$destination_type[$i-1]);
	 }
}

/*--------------------------- team------------------------*/
set_theme_mod( 'vw_tourism_pro_places_guided_post_sub_heading', 'Our Places' );
set_theme_mod( 'vw_tourism_pro_places_guided_post_heading', 'Place Guided' );

set_theme_mod( 'vw_tourism_pro_team_sub_heading', 'GUIDER TEAM' );
set_theme_mod( 'vw_tourism_pro_team_heading', 'Expert & Professional Guider' );
set_theme_mod( 'vw_tourism_pro_team_youtube_icon', 'fa-brands fa-youtube' );
set_theme_mod( 'vw_tourism_pro_team_insta_icon', 'fa-brands fa-instagram' );
set_theme_mod( 'vw_tourism_pro_team_twitter_icon', 'fa-brands fa-x-twitter' );
set_theme_mod( 'vw_tourism_pro_team_facebook_icon', 'fab fa-facebook-f' );
	 $team_name_arr = array(
				'Rozi Natasha',
				'Musa Adique',
				'John Lerozina',
				'Johnathan James',
	 );

	 $team_ids = array();
		 for($i=1;$i<=4;$i++){
			$title = $team_name_arr[$i-1];
			$content = 'Lorem Ipsum has been the industrys standard dummy text ever since the 1500 when an unknown printer took a galley of type and scrambled it to make a type specimen book Lorem Ipsum has been the industrys standard dummy text ever since the 1500 when an unknown printer took a galley of type and scrambled it to make a type specimen book.';
						$team_main	=	wp_insert_term(
								$title, // the term
								'tcp_team', // the taxonomy
								array(
										'description'=> $content
								)
					);

			array_push($team_ids, $team_main['term_id']);

			$image_url = get_template_directory_uri().'/assets/images/team/'.str_replace(' ','-', $title).'.png';
			$image_name = $title.'.png';;
			$upload_dir = wp_upload_dir();
			// Set upload folder
			$image_data = file_get_contents(esc_url($image_url));
			// Get image data
			$unique_file_name = wp_unique_filename($upload_dir['path'], $image_name);
			// Generate unique name
			$filename = basename($unique_file_name);
			// Create image file name
			// Check folder permission and define file location
			if (wp_mkdir_p($upload_dir['path'])) {
				 $file = $upload_dir['path'].'/'.$filename;
			} else {
				 $file = $upload_dir['basedir'].'/'.$filename;
			}
			// Create the image  file on the server
			file_put_contents($file, $image_data);
			// Check image file type
			$wp_filetype = wp_check_filetype($filename, null);
			// Set attachment data
			$attachment = array(
				'post_mime_type' => $wp_filetype['type'],
				'post_title'     => sanitize_file_name($filename),
				'post_type'      => 'mphb_room_type',
				'post_status'    => 'inherit',
			);
			// Create the attachment
			$attach_id = wp_insert_attachment($attachment, $file, $post_id);

			// Include image.php
			require_once (ABSPATH.'wp-admin/includes/image.php');
			// Define attachment metadata
			$attach_data = wp_generate_attachment_metadata($attach_id, $file);
			// Assign metadata to attachment
			wp_update_attachment_metadata($attach_id, $attach_data);
			$attach_url =	wp_get_attachment_image_url($attach_id);
			// And finally assign featured image to post

			update_term_meta(	$team_main['term_id'],	'team_image', $attach_url);
			update_term_meta( $team_main['term_id'], 'team_role','Travel Guider' );
			update_term_meta( $team_main['term_id'], 'team_dob', '1991-05-31' );
			update_term_meta( $team_main['term_id'], 'team_address','Travel Guider' );
			update_term_meta( $team_main['term_id'], 'team_email','example@toursim.com' );
			update_term_meta( $team_main['term_id'], 'team_phone','+12 34567895' );
			update_term_meta( $team_main['term_id'], 'team_experience','08+' );
			update_term_meta( $team_main['term_id'], 'team_clients','925' );
			update_term_meta( $team_main['term_id'], 'team_awards','03' );
			update_term_meta( $team_main['term_id'], 'team_client_satisfied','91.6%');
			update_term_meta( $team_main['term_id'], 'team_youtube_url','https://www.youtube.com/');
			update_term_meta( $team_main['term_id'], 'team_instagram_url','https://www.instagram.com/');
			update_term_meta( $team_main['term_id'], 'team_twitter_url','https://x.com/');
			update_term_meta( $team_main['term_id'], 'team_facebook_url','https://www.facebook.com/');
		}



		// ----------------popular packages-------------

		set_theme_mod('vw_tourism_pro_popular_packages_view_more_btn_url',get_permalink(ThemeWhizzie::get_page_id_by_title('Tour Packages')));
		set_theme_mod('vw_tourism_pro_popular_packages_view_more_text','View More');

		set_theme_mod( 'vw_tourism_pro_popular_packages_sub_heading', 'Our Places' );
		set_theme_mod( 'vw_tourism_pro_popular_packages_heading', 'Our Popular Packages' );

		$packages_array = array( 'Trending', 'Duration', 'Types' );
		for ($i=0; $i < 3; $i++) {
			set_theme_mod( 'vw_tourism_pro_popular_packages_tab_heading'.$i, $packages_array[$i] );
		}

		if (get_theme_mod('vw_tourism_pro_popular_packages_booknow_text') === false) {
			set_theme_mod('vw_tourism_pro_popular_packages_booknow_text', 'Book Now');
		}

		set_theme_mod( 'vw_tourism_pro_packages_currency', '$' );
		set_theme_mod( 'vw_tourism_pro_single_packages_video_img', get_template_directory_uri() . '/assets/images/packages/video.png');
		set_theme_mod( 'vw_tourism_pro_activity_sub_heading', 'Activity' );
		set_theme_mod( 'vw_tourism_pro_activity_heading', 'Unique Offering' );

		// --------activity Section------------------
		set_theme_mod( 'vw_tourism_pro_places_related_post_sub_heading', 'Our Places' );
		set_theme_mod( 'vw_tourism_pro_places_related_post_heading', 'Related Tour Places	' );


		$packages_categories_array = array();
		$parent_category_arr = array(
		'Historical Places' => array('Castles Cathedrals of France','Normandy Impressionist Festival'),
		'Exciting Baloon' => array('Dordogne Hot Air Balloon Ride','A Journey Through Museums and Artistic Treasures'),
		'Hiking' => array('Hidden Gems Secret Towns of France','Hiking the French Alps'),
		'Magnificent Cities' => array('A Luxurious Tour of France','Romantic Rendezvous Paris Provence'),
		'Rock Climbing' => array('Exploring Breathtaking Landscapes','Rock Climbing Escapade'),
		'Water Sports' => array('Water Sports Retreat in Annecy','Ultimate Water Sports in Corsica'),
	);
		// $cat=1;
		foreach ( $parent_category_arr as $parent_packages_cat => $parent_packages ) {
		 $content = "Lorem Ipsum is simply dummy text of the printing and typesetting industry.";
		 $parent_category	=	wp_insert_term(
		   $parent_packages_cat,
		   'tcp_category',
		   array(
		     'description'=> $content
		   )
		 );

		 $term_category = get_term_by('id', $parent_category['term_id'], 'tcp_category');
		 if ($term_category) {
		   $term_slug = $term_category->slug;

		   array_push( $packages_categories_array, $term_slug );
		 }

			// $cat++;//
			$image_url = get_template_directory_uri().'/assets/images/activity/'.str_replace( " ", "-", $parent_packages_cat).'.png';
			 $image_name= $parent_packages_cat.'.png';
			 $upload_dir       = wp_upload_dir();
			 // Set upload folder
			 $image_data= file_get_contents($image_url);
			 // Get image data
			 $unique_file_name = wp_unique_filename( $upload_dir['path'], $image_name );
			 // Generate unique name
			 $filename= basename( $unique_file_name );
			 // Create image file name

			 // Check folder permission and define file location
			 if( wp_mkdir_p( $upload_dir['path'] ) ) {
			   $file = $upload_dir['path'] . '/' . $filename;
			 } else {
			   $file = $upload_dir['basedir'] . '/' . $filename;
			 }

			 // Create the image  file on the server
			 file_put_contents( $file, $image_data );

			 // Check image file type
			 $wp_filetype = wp_check_filetype( $filename, null );

			 // Set attachment data
			 $attachment = array(
			   'post_mime_type' => $wp_filetype['type'],
			   'post_title'     => sanitize_file_name( $filename ),
			   'post_content'   => '',
			   'post_type'     => '',
			   'post_status'    => 'inherit'
			 );

			 // Create the attachment
			 $attach_id = wp_insert_attachment($attachment, $file);
			 $attach_url =	wp_get_attachment_image_url($attach_id);

			 update_term_meta($parent_category['term_id'], 'category_image', $attach_url);

		 foreach ( $parent_packages as $packages ) {
			 $short_description = '<ul>
						<li>eque sodales ut etiam sit amet nisl purus non tellus orci ac auctor</li>
						<li>eque sodales ut etiam sit amet nisl purus non tellus orci ac auctor</li>
						<li>eque sodales ut etiam sit amet nisl purus non tellus orci ac auctor</li>
						</ul>';
		   $packages_content = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.

			 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.";
		   $my_post = array(
		     'post_title'    => $packages,
		     'post_content'  => $packages_content,
		     'post_status'   => 'publish',
		     'post_type'     => 'tcp_package',
			   'post_excerpt' => $short_description
		   );
		   // Insert the post into the database
				$packages_id = wp_insert_post($my_post);
				wp_set_object_terms( $packages_id, $parent_category['term_id'], 'tcp_category', true );

				$key_team = array_rand($team_ids,1);
				wp_set_object_terms( $packages_id, $team_ids[$key_team], 'tcp_team', true );

				$key_desti = array_rand($destinations_ids,1);
				wp_set_object_terms( $packages_id, $destinations_ids[$key_desti], 'tcp_destination', true );

				 $random_price = rand(100,500);

				updae_post_meta( $packages_id, 'vw_title_banner_image_wp_custom_attachment', $attachment_url );
				update_post_meta( $packages_id, 'pkg_from', 'Ile  De France' );
				update_post_meta( $packages_id, 'pkg_to', 'Rouen City' );
				update_post_meta( $packages_id, 'pkg_regular_price', $random_price );
				update_post_meta( $packages_id, 'pkg_sale_price',  $random_price - 10  );
				update_post_meta( $packages_id, 'pkg_tour_days', '5' );
				update_post_meta( $packages_id, 'pkg_tour_nights','4' );
				update_post_meta( $packages_id, 'pkg_travel_name','Travel Name Here' );
				update_post_meta( $packages_id, 'pkg_person_text','Per Person' );
				update_post_meta( $packages_id, 'pkg_additional_image_1', get_template_directory_uri().'/assets/images/packages/additional-img1.png' );
				update_post_meta( $packages_id, 'pkg_additional_image_2', get_template_directory_uri().'/assets/images/packages/additional-img2.png' );
				update_post_meta( $packages_id, 'pkg_additional_video', get_template_directory_uri().'/assets/videos/tour-video.mp4');
				update_post_meta( $packages_id, 'pkg_tour_loc_latitude', '37.7576928' );
				update_post_meta( $packages_id, 'pkg_tour_loc_longitude', '-122.4788851' );
				update_post_meta( $packages_id, 'pkg_tour_additional_info', $short_description );
				update_post_meta( $packages_id, 'pkg_registation_btn_url', get_permalink(ThemeWhizzie::get_page_id_by_title('Registration Form')) );
				update_post_meta( $packages_id, 'pkg_registation_btn_text', 'Book Now');



				$tour_packages_arr = array();
				for ($i=1; $i <= 5; $i++) {
					array_push($tour_packages_arr, array(
						'image' => get_template_directory_uri().'/assets/images/packages/day'.$i.'.png',
						'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.'
					));
				}

				update_post_meta( $packages_id, 'pkg_tour_details', $tour_packages_arr );

				// create Product START
			$review_text = array(
				'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor Incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet.',
				'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor Incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet.',
				'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor Incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet.',

			);
			// -------------- rating START -------------------------
			for ( $c=0; $c <= 2; $c++ ) {
			 $comment_id = wp_insert_comment( array(
				 'comment_post_ID'      => $packages_id,
				 'comment_author'       => get_the_author_meta( 'display_name' ),
				 'comment_author_email' => get_the_author_meta( 'user_email' ),
				 'comment_content'      => $review_text[$c],
				 'comment_parent'       => 0,
				 'user_id'              => get_current_user_id(), // <== Important
				 'comment_date'         => date('Y-m-d H:i:s'),
				 'comment_approved'     => 1,
			 ) );

			 update_comment_meta( $comment_id, 'rating', 4 );
			}	update_comment_meta( $comment_id, 'rating', 5 );
				$image_name_replaced = str_replace(' ', '-', $packages);
				$image_url = get_template_directory_uri().'/assets/images/packages/'.strtolower(str_replace(' ', '-', $parent_packages_cat)).'/'.$image_name_replaced.'.png';
				$image_name       = $image_name_replaced.'.png';
				$upload_dir = wp_upload_dir();
		   $image_data = file_get_contents(esc_url($image_url));
		   $unique_file_name = wp_unique_filename($upload_dir['path'], $image_name);
		   $filename = basename($unique_file_name);

		   // Check folder permission and define file location
		   if (wp_mkdir_p($upload_dir['path'])) {
		      $file = $upload_dir['path'].'/'.$filename;
		   } else {
		      $file = $upload_dir['basedir'].'/'.$filename;
		   }
		   // Create the image  file on the server
		   file_put_contents($file, $image_data);

		   // Check image file type
		   $wp_filetype = wp_check_filetype($filename, null);

		   // Set attachment data
		   $attachment = array(
		      'post_mime_type' => $wp_filetype['type'],
		      'post_title'     => sanitize_file_name($filename),
		      'post_type'      => 'tcp_package',
		      'post_status'    => 'inherit',
		   );
		   // Create the attachment
		   $attach_id = wp_insert_attachment($attachment, $file, $packages_id);

		   // Include image.php
		   require_once (ABSPATH.'wp-admin/includes/image.php');

		   // Define attachment metadata
		   $attach_data = wp_generate_attachment_metadata($attach_id, $file);


		   // And finally assign featured image to post
		   set_post_thumbnail($packages_id, $attach_id);

		 }
		}



		// --------About Section------------------
		set_theme_mod( 'vw_tourism_pro_about_sub_heading', 'ABOUT US' );
		set_theme_mod( 'vw_tourism_pro_about_heading', 'Plan Your Dream Holiday With France Tourism' );
		set_theme_mod( 'vw_tourism_pro_about_paragraph', "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book." );

	  set_theme_mod( 'vw_tourism_pro_about_points_number', '4' );

		$about_icon = array('fa-solid fa-check','fa-solid fa-check','fa-solid fa-check','fa-solid fa-check');
	  $about_title = array('Lorem Ipsum simply dummy text','Lorem Ipsum simply dummy text','Lorem Ipsum simply dummy text','Lorem Ipsum simply dummy text');
	  for( $i=1; $i<=4; $i++ ) {
	  set_theme_mod('vw_tourism_pro_about_points_check_icon'.$i, $about_icon[$i-1]);
	  set_theme_mod('vw_tourism_pro_about_points_title'.$i, $about_title[$i-1]);
	  }

	  set_theme_mod('vw_tourism_pro_about_middle_img',get_template_directory_uri().'/assets/images/about/abt-img.png' );

   // 	set_theme_mod('vw_tourism_pro_about_right_content_img_one',get_template_directory_uri().'/assets/images/about/internet.png' );
	 // 	set_theme_mod( 'vw_tourism_pro_about_right_content_counter_one', '678K+' );
	 // 	set_theme_mod( 'vw_tourism_pro_about_right_content_heading_one', 'Global Tourist Travel' );
	 //
   // set_theme_mod('vw_tourism_pro_about_right_content_img_two',get_template_directory_uri().'/assets/images/about/route.png' );
	 // set_theme_mod( 'vw_tourism_pro_about_right_content_counter_two', '89+' );
 	 // set_theme_mod( 'vw_tourism_pro_about_right_content_heading_two', 'Travel Location' );

	 $counter_no=array('678','89');
	 $counter_sufix=array('k+','+','+','+');
	 $counter_title=array('Global Tourist Travel','Travel Location');
	 for($i=1;$i<=2;$i++)
	 {
		 set_theme_mod( 'vw_tourism_pro_about_counter_image'.$i, get_template_directory_uri().'/assets/images/about/counter'.$i.'.png' );
		 set_theme_mod( 'vw_tourism_pro_about_counter_no'.$i, $counter_no[$i-1] );
		 set_theme_mod( 'vw_tourism_pro_about_counter_no_suffix'.$i,$counter_sufix[$i-1]);
		 set_theme_mod( 'vw_tourism_pro_about_counter_title'.$i, $counter_title[$i-1] );
	 }


	 	 set_theme_mod( 'vw_tourism_pro_about_view_more_btn', 'View More' );
	 	 set_theme_mod( 'vw_tourism_pro_about_view_more_btn_url', get_permalink(ThemeWhizzie::get_page_id_by_title('About Us')));

		 set_theme_mod( 'vw_tourism_pro_about_ceo_img', get_template_directory_uri().'/assets/images/about/profile.png'  );
		 set_theme_mod( 'vw_tourism_pro_about_ceo_heading', 'Musa Dikshit' );
		 set_theme_mod( 'vw_tourism_pro_about_ceo_text', 'CEO' );

	 	 /*---------------------------Cuisines------------------------*/
			set_theme_mod( 'vw_tourism_pro_popular__cuisines_currency', '$' );
		 set_theme_mod( 'vw_tourism_pro_cuisines_sub_heading', 'Cuisines' );
		 set_theme_mod( 'vw_tourism_pro_cuisines_heading', 'Popular Cuisines' );
		 set_theme_mod( 'vw_tourism_pro_cuisines_paragraph', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.' );
		 set_theme_mod( 'vw_tourism_pro_cuisines_btn_url', get_permalink(ThemeWhizzie::get_page_id_by_title('Cuisines')));

		 $cuisines_name = array(
						 'Pasta',
						 'Steak frites',
						 'Chicken confit',
						 'Bouillabaisse',
						 'Quiche Lorraine',
						  'Joe Burger',
							'Hot Pizza',
							'Croque monsieur',
							'Tandoori Panner',
							'Tarte tatin'
					 );

		 for($i=1;$i<=10;$i++){
			 $title = $cuisines_name[$i-1];
			 $content = "Lorem Ipsum is simply dummy text Lorem Ipsum is simply dummy text";
			 // Create post object
			 $my_post = array(
			 'post_title'    =>wp_strip_all_tags( $title ),
			 'post_content'  => $content,
			 'post_status'   => 'publish',
			 'post_type'     => 'popular-cuisines',
			 );

			 // Insert the post into the database
			 $cuisines_id = wp_insert_post( $my_post );

			 // Now replafile_urice meta w/ new updated value array

			 $random_price = rand(10,30);

			 update_post_meta( $cuisines_id, 'cuisines_sale_price', $random_price - 10 );
			 update_post_meta( $cuisines_id, 'cuisines_price', $random_price );
			 update_post_meta( $cuisines_id, 'cuisines_price_title', 'Price' );

			 update_post_meta( $cuisines_id, 'cuisines_location_title','Location');
			 update_post_meta( $cuisines_id, 'cuisines_location','Lorem Ipsum is simply dummy text Lorem Ipsum is simply dummy text');
			 update_post_meta( $cuisines_id, 'cuisines_recipe_title','Hot Recipe');

			 $image_url = get_template_directory_uri().'/assets/images/popular-cuisines/popular-cuisines'.$i.'.png';

			 $image_name       = 'popular-cuisines'.$i.'.png';
			 $upload_dir       = wp_upload_dir(); // Set upload folder
			 $image_data       = file_get_contents($image_url); // Get image data
			 $unique_file_name = wp_unique_filename( $upload_dir['path'], $image_name ); // Generate unique name
			 $filename         = basename( $unique_file_name ); // Create image file name

			 // Check folder permission and define file location
			 if( wp_mkdir_p( $upload_dir['path'] ) ) {
				 $file = $upload_dir['path'] . '/' . $filename;
			 } else {
				 $file = $upload_dir['basedir'] . '/' . $filename;
			 }

			 // Create the image  file on the server
			 file_put_contents( $file, $image_data );

			 // Check image file type
			 $wp_filetype = wp_check_filetype( $filename, null );

			 // Set attachment data
			 $attachment = array(
				 'post_mime_type' => $wp_filetype['type'],
				 'post_title'     => sanitize_file_name( $filename ),
				 'post_content'   => '',
				 'post_type'     => 'popular-cuisines',
				 'post_status'    => 'inherit'
			 );

			 // Create the attachment
			 $attach_id = wp_insert_attachment( $attachment, $file, $cuisines_id );

			 // Include image.php
			 require_once(ABSPATH . 'wp-admin/includes/image.php');

			 // Define attachment metadata
			 $attach_data = wp_generate_attachment_metadata( $attach_id, $file );

			 // Assign metadata to attachment
			 wp_update_attachment_metadata( $attach_id, $attach_data );

			 // And finally assign featured image to post
			 set_post_thumbnail( $cuisines_id, $attach_id );
		 }



		 // ----------------Experience-------------

		set_theme_mod( 'vw_tourism_pro_experience_sub_heading', 'EXPERIANCE' );
		set_theme_mod( 'vw_tourism_pro_experience_heading', 'Experience The Tourist Paradise' );


		// $experience_name = array();

		$experience_name = array(
						'Music',
						'Festival',
						'Street Food',
						'Nature Walk',
						'Boating',
						'Mountain'
					);

		for($i=1;$i<=6;$i++){
			$title = $experience_name[$i-1];
			$content = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
			// Create post object
			$my_post = array(
			'post_title'    =>wp_strip_all_tags( $title ),
			'post_content'  => $content,
			'post_status'   => 'publish',
			'post_type'     => 'experience',
			);


			 // set_theme_mod('vw_tourism_pro_experience_names', $experience_name );
			// Insert the post into the database
			$experience_id = wp_insert_post( $my_post );

			if ( $experience_name[$i-1] == 'Music' ) {
					update_post_meta( $experience_id,'experience-img-one',get_template_directory_uri().'/assets/images/experience/Music1.png');
					update_post_meta( $experience_id,'experience-img-two',get_template_directory_uri().'/assets/images/experience/Music2.png');
				} elseif ( $experience_name[$i-1] == 'Festival' ) {
					update_post_meta( $experience_id,'experience-img-one',get_template_directory_uri().'/assets/images/experience/Festival1.png');
					update_post_meta( $experience_id,'experience-img-two',get_template_directory_uri().'/assets/images/experience/Festival2.png');
				} elseif ( $experience_name[$i-1] == 'Street Food' ) {
					update_post_meta( $experience_id,'experience-img-one',get_template_directory_uri().'/assets/images/experience/Street-Food1.png');
					update_post_meta( $experience_id,'experience-img-two',get_template_directory_uri().'/assets/images/experience/Street-Food2.png');
				} elseif ( $experience_name[$i-1] == 'Nature Walk' ) {
					update_post_meta( $experience_id,'experience-img-one',get_template_directory_uri().'/assets/images/experience/Nature-Walk1.png');
					update_post_meta( $experience_id,'experience-img-two',get_template_directory_uri().'/assets/images/experience/Nature-Walk2.png');
				}  elseif ( $experience_name[$i-1] == 'Boating' ) {
					update_post_meta( $experience_id,'experience-img-one',get_template_directory_uri().'/assets/images/experience/Boating1.png');
					update_post_meta( $experience_id,'experience-img-two',get_template_directory_uri().'/assets/images/experience/Boating2.png');
				} else {
					update_post_meta( $experience_id,'experience-img-one',get_template_directory_uri().'/assets/images/experience/Mountain1.png');
					update_post_meta( $experience_id,'experience-img-two',get_template_directory_uri().'/assets/images/experience/Mountain2.png');
				}

			$image_url = get_template_directory_uri().'/assets/images/experience/'.str_replace( " ", "-", $title).'.svg';
			$image_name       =  $title.$i.'.svg';
			$upload_dir       = wp_upload_dir(); // Set upload folder
			$image_data       = file_get_contents($image_url); // Get image data
			$unique_file_name = wp_unique_filename( $upload_dir['path'], $image_name ); // Generate unique name
			$filename         = basename( $unique_file_name ); // Create image file name

			// Check folder permission and define file location
			if( wp_mkdir_p( $upload_dir['path'] ) ) {
				$file = $upload_dir['path'] . '/' . $filename;
			} else {
				$file = $upload_dir['basedir'] . '/' . $filename;
			}

			// Create the image  file on the server
			file_put_contents( $file, $image_data );

			// Check image file type
			$wp_filetype = wp_check_filetype( $filename, null );

			// Set attachment data
			$attachment = array(
				'post_mime_type' => $wp_filetype['type'],
				'post_title'     => sanitize_file_name( $filename ),
				'post_content'   => '',
				'post_type'     => 'experience',
				'post_status'    => 'inherit'
			);

			// Create the attachment
			$attach_id = wp_insert_attachment( $attachment, $file, $experience_id );

			// Include image.php
			require_once(ABSPATH . 'wp-admin/includes/image.php');

			// Define attachment metadata
			$attach_data = wp_generate_attachment_metadata( $attach_id, $file );

			// Assign metadata to attachment
			wp_update_attachment_metadata( $attach_id, $attach_data );

			// And finally assign featured image to post
			set_post_thumbnail( $experience_id, $attach_id );
		}

		 // ----------------How to process-------------
		 set_theme_mod( 'vw_tourism_pro_how_to_process_sub_heading', 'HOW TO PROCESS' );
		 set_theme_mod( 'vw_tourism_pro_how_to_process_heading', 'Experience The Tourist Paradise' );

		set_theme_mod( 'vw_tourism_pro_how_to_process_number', '4' );

		$how_title = array('Select Budget','Select Destination','Select Hotel','Select Sightseeing');
		for( $i=1; $i<=4; $i++ ) {
		set_theme_mod('vw_tourism_pro_how_to_process_img'.$i, get_template_directory_uri().'/assets/images/how-to-process/how'.$i.'.png');
		set_theme_mod('vw_tourism_pro_how_to_process_title'.$i, $how_title[$i-1]);
	}
	 set_theme_mod('vw_tourism_pro_how_to_process_bg_arrow_img',get_template_directory_uri().'/assets/images/how-to-process/how-line.png' );

	 // ----------------Why Choose Us-------------
	 	set_theme_mod( 'vw_tourism_pro_why_choose_us_sub_heading', 'WHY CHOOSE US' );
 		set_theme_mod( 'vw_tourism_pro_why_choose_us_heading', 'Get The Best Travel Experience With Tourism' );
		set_theme_mod( 'vw_tourism_pro_why_choose_us_paragraph', "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley." );

		$choose_title = array('Tour Guide','Friendly Price','Instant Booking');
		$choose_para = array('Lorem Ipsum is simply dummy text of the printing and typesetting industry.','Lorem Ipsum is simply dummy text of the printing and typesetting industry.','Lorem Ipsum is simply dummy text of the printing and typesetting industry.');

		set_theme_mod( 'vw_tourism_pro_why_choose_us_number', '3' );

		for( $i=1; $i<=3; $i++ ) {
			set_theme_mod('vw_tourism_pro_why_choose_us_img'.$i, get_template_directory_uri().'/assets/images/why-choose/choose'.$i.'.png');
			set_theme_mod('vw_tourism_pro_why_choose_us_title'.$i, $choose_title[$i-1]);
			set_theme_mod('vw_tourism_pro_why_choose_us_para'.$i, $choose_para[$i-1]);
		}

		set_theme_mod('vw_tourism_pro_why_choose_us_girl_img',get_template_directory_uri().'/assets/images/why-choose/Women.png' );

		set_theme_mod( 'vw_tourism_pro_why_choose_circle_number', 2 );
		$progress_title = array('Organized Group Tour','Single Customized Trip');
		$progress_count = array('92' ,'90');
		for ($i=1; $i <=2 ; $i++) {
			set_theme_mod( 'vw_tourism_pro_why_choose_circle_progress_title'.$i,  $progress_title[$i-1]);
			set_theme_mod( 'vw_tourism_pro_why_choose_circle_progress_count'.$i,  $progress_count[$i-1]);
		}

		 /*--------------------------- Testimonial------------------------*/
 set_theme_mod( 'vw_tourism_pro_testimonials_number', 6 );
 set_theme_mod( 'vw_tourism_pro_testimonial_sub_heading', 'TESTIMONIAL' );
 set_theme_mod( 'vw_tourism_pro_testimonial_heading', 'What Say Client' );
 set_theme_mod( 'vw_tourism_pro_testimonial_paragraph', "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book." );

 $testimonial_name = array(
				 'Rosy Nackly',
				 'Mary Ray',
				 'Abraham Khalil',
				 'christine Rose',
				 'Alex sofia',
				 'Chris jhon'
			 );
 $testimonial_designation = array(
				 'Adventure Journalist',
				 'Guide',
				 'Artist',
				 'Adventure Traveller',
				 'Photographer',
				 'Professor'
			 );

 for($i=1;$i<=6;$i++){
	 $title = $testimonial_name[$i-1];
	 $content = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry.";
	 // Create post object
	 $my_post = array(
	 'post_title'    =>wp_strip_all_tags( $title ),
	 'post_content'  => $content,
	 'post_status'   => 'publish',
	 'post_type'     => 'testimonial',
	 );

	 // Insert the post into the database
	 $testimonial_id = wp_insert_post( $my_post );

	 // Now replafile_urice meta w/ new updated value array
	 update_post_meta( $testimonial_id, 'testimonial_desigstory', $testimonial_designation[$i-1]);
	  update_post_meta( $testimonial_id, 'testimonial_rating','5');

	 $image_url = get_template_directory_uri().'/assets/images/testimonial/test'.$i.'.png';

	 $image_name       = 'test'.$i.'.png';
	 $upload_dir       = wp_upload_dir(); // Set upload folder
	 $image_data       = file_get_contents($image_url); // Get image data
	 $unique_file_name = wp_unique_filename( $upload_dir['path'], $image_name ); // Generate unique name
	 $filename         = basename( $unique_file_name ); // Create image file name

	 // Check folder permission and define file location
	 if( wp_mkdir_p( $upload_dir['path'] ) ) {
		 $file = $upload_dir['path'] . '/' . $filename;
	 } else {
		 $file = $upload_dir['basedir'] . '/' . $filename;
	 }

	 // Create the image  file on the server
	 file_put_contents( $file, $image_data );

	 // Check image file type
	 $wp_filetype = wp_check_filetype( $filename, null );

	 // Set attachment data
	 $attachment = array(
		 'post_mime_type' => $wp_filetype['type'],
		 'post_title'     => sanitize_file_name( $filename ),
		 'post_content'   => '',
		 'post_type'     => 'testimonial',
		 'post_status'    => 'inherit'
	 );

	 // Create the attachment
	 $attach_id = wp_insert_attachment( $attachment, $file, $testimonial_id );

	 // Include image.php
	 require_once(ABSPATH . 'wp-admin/includes/image.php');

	 // Define attachment metadata
	 $attach_data = wp_generate_attachment_metadata( $attach_id, $file );

	 // Assign metadata to attachment
	 wp_update_attachment_metadata( $attach_id, $attach_data );

	 // And finally assign featured image to post
	 set_post_thumbnail( $testimonial_id, $attach_id );
 }


 /*--------------------------- Destination------------------------*/
 set_theme_mod( 'vw_tourism_pro_explore_sub_heading', 'Explore' );
 set_theme_mod( 'vw_tourism_pro_explore_heading', 'France Discover' );
 set_theme_mod( 'vw_tourism_pro_explore_paragraph',"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book." );

 // set_theme_mod( 'vw_tourism_pro_explore_inner_heading', 'Ile De France' );
 // set_theme_mod( 'vw_tourism_pro_explore_inner_paragraph', "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.");

 //  explore custom posttype code start
$explore_titles = array( 'Ile De France', 'Ile De France 1', 'Ile De France 2', 'Ile De France 3' );
$explore_field_one = array("875Km", "85.09%","65+");
$explore_field_two = array("Area","Literacy","Villages");
$explore_field_three = array("91,12,520","123456","French");
$explore_field_four = array("Population","Pincode","Language");
$content = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.";
for ($i=0; $i < count($explore_titles); $i++) {
	$tcp_explore_arr = array(
		'post_title'    => wp_strip_all_tags( $explore_titles[$i] ),
		'post_content'  => $content,
		'post_status'   => 'publish',
		'post_type'     => 'tcp_explore',
	);
	// Insert the post into the database
	$tcp_explore_id    = wp_insert_post($tcp_explore_arr);

	$fields_arr = array();

	for( $s=0; $s<3; $s++ ) {
        $image_name = 'explore'.($i+1).'-'.($s+1).'.png';
        array_push($fields_arr, array(
            'text1' => $explore_field_one[$s],
            'text2' => $explore_field_two[$s],
            'text3' => $explore_field_three[$s],
            'text4' => $explore_field_four[$s],
            'image' => get_template_directory_uri().'/assets/images/explore/'.$image_name,
        ));
    }

	update_post_meta( $tcp_explore_id, 'package_explore_meta_fields', $fields_arr);
}
//  explore custom posttype code end

	// set_theme_mod( 'vw_tourism_pro_explore_number', 3 );
	// $explore_field_one = array("875Km", "85.09%","65+");
	// $explore_field_two = array("Area","Literacy","Villages");
	// $explore_field_three = array("91,12,520","123456","French");
	// $explore_field_four = array("Population","Pincode","Language");

	//  for( $i=1; $i<=3; $i++ ) {
	//  set_theme_mod( 'vw_tourism_pro_explore_field_one'.$i, $explore_field_one[$i-1] );
	//  set_theme_mod( 'vw_tourism_pro_explore_field_two'.$i, $explore_field_two[$i-1] );
	//  set_theme_mod( 'vw_tourism_pro_explore_field_three'.$i, $explore_field_three[$i-1] );
	//  set_theme_mod( 'vw_tourism_pro_explore_field_four'.$i, $explore_field_four[$i-1] );
	// 	set_theme_mod('vw_tourism_pro_explore_img'.$i, get_template_directory_uri().'/assets/images/explore/explore'.$i.'.png');
	// }
set_theme_mod('vw_tourism_pro_explore_map_img', get_template_directory_uri().'/assets/images/explore/map.png');
	/*------------------------ Blog--------------------------------------*/
	set_theme_mod( 'vw_tourism_pro_blog_sub_heading', 'NEWS & BLOGS' );
	set_theme_mod( 'vw_tourism_pro_blog_heading', 'Latest News & Blogs' );
	set_theme_mod( 'vw_tourism_pro_blog_viewmore_text', 'View More' );

	$post_category_name = array(
	'Hiking' => array(
			"Tips And Tricks For Navigating The World Alone",
	),
	'Water Sports' => array(
		"The Most Common Painting Mistake",
	),
	'Historical Places' => array(
		"Uncovering the Stories of the Past In Fascinating Locations",
	),
	'Rock Climbing' => array(
		"Creating Lasting Memories with Your Loved Ones",
	),
	'Magnificent Cities' => array(
		"Culinary Delights From Around the Globe",
	),
	'Exciting Baloon' => array(
		"Rejuvenate Your Mind Body And Soul In Tranquil Settings",
	),
);

foreach ($post_category_name as $post_category => $post_name) {
	$content = 'This is sample Post Tags';
	$parent_name	=	wp_insert_term(
			$post_category, // the term
			'category', // the taxonomy
			array(
					'description'=> $content,
					'slug' => strtolower(str_replace(' ', '_', $post_category))
			)
	);

	// Create Blog Tags end
	// create post START

	$post_meta = array(
		array(
			'points' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce laoreet'
		),
		array(
			'points' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce laoreet'
		),
		array(
			'points' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce laoreet'
		),
		array(
			'points' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce laoreet'
		),

	);


	foreach ($post_name as $key => $post_title) {
			$content = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Id porta nibh venenatis cras. In aliquam sem fringilla ut morbi. Blandit aliquam etiam erat velit. Risus commodo viverra maecenas accumsan lacus vel. Suscipit adipiscing bibendum est ultricies. Dignissim enim sit amet venenatis urna cursus eget nunc.";
			// Create post object
			$my_post = array(
					'post_title'    => wp_strip_all_tags( $post_title ),
					'post_content'  => $content,
					'post_status'   => 'publish',
					'post_type'     => 'post',
			);
			// Insert the post into the database
			$post_id    = wp_insert_post($my_post);
			wp_set_object_terms( $post_id, $post_category, 'category', true );

			update_post_meta($post_id, 'post-ques','Why do we use it?' );
			update_post_meta($post_id, 'post-para-one', "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.");
			update_post_meta( $post_id,'post_repeater_fields',$post_meta);
			add_post_meta( $post_id, 'vw_title_banner_image_wp_custom_attachment', $attachment_url );



			$review_text = array(
				'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor Incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet.',
				'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor Incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet.',
				'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor Incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet.',
			);
			// -------------- rating START -------------------------
			for ( $c=0; $c <= 2; $c++ ) {
			 $comment_id = wp_insert_comment( array(
				 'comment_post_ID'      => $post_id,
				 'comment_author'       => get_the_author_meta( 'display_name' ),
				 'comment_author_email' => get_the_author_meta( 'user_email' ),
				 'comment_content'      => $review_text[$c],
				 'comment_parent'       => 0,
				 'user_id'              => get_current_user_id(), // <== Important
				 'comment_date'         => date('Y-m-d H:i:s'),
				 'comment_approved'     => 1,
			 ) );
			}

			$image_url = get_template_directory_uri().'/assets/images/blog/'.strtolower(str_replace(' ', '-', $post_title)).'.png';
			$image_name = strtolower(str_replace(' ', '-', $post_title)).'.png';
			$upload_dir       = wp_upload_dir();
			$image_data       = file_get_contents($image_url);
			$unique_file_name = wp_unique_filename( $upload_dir['path'], $image_name );
			$filename= basename( $unique_file_name );
			if( wp_mkdir_p( $upload_dir['path'] ) ) {
					$file = $upload_dir['path'] . '/' . $filename;
			} else {
					$file = $upload_dir['basedir'] . '/' . $filename;
			}
			file_put_contents( $file, $image_data );
			$wp_filetype = wp_check_filetype( $filename, null );
			$attachment = array(
					'post_mime_type' => $wp_filetype['type'],
					'post_title'     => sanitize_file_name( $filename ),
					'post_content'   => '',
					'post_type'     => 'post',
					'post_status'    => 'inherit'
			);
			// Create the attachment
			$attach_id = wp_insert_attachment( $attachment, $file, $post_id );
			require_once(ABSPATH . 'wp-admin/includes/image.php');
			$attach_data = wp_generate_attachment_metadata( $attach_id, $file );
			wp_update_attachment_metadata( $attach_id, $attach_data );
			set_post_thumbnail( $post_id, $attach_id );
	}
	// create post END
}

// ------------Footer ---------
	// set_theme_mod( 'vw_tourism_pro_section_footer_bgcolor', '#112542' );

	// --------------------Faq-------------------
	set_theme_mod( 'vw_tourism_pro_faq_number', '5' );
	$faqques = array("What are the must-visit attractions in France?", "How can I travel around France efficiently?","What are the best times to visit France?", "Where can I find authentic French cuisine?", "Are there family-friendly activities in France?");
	for( $i=1; $i<=5; $i++ ) {
		set_theme_mod( 'vw_tourism_pro_faq_que'.$i, $faqques[$i-1] );
		set_theme_mod( 'vw_tourism_pro_faq_ans'.$i, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor Incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua' );
	}


	//Copyright Text
	set_theme_mod('vw_tourism_pro_footer_support_url',get_permalink(ThemeWhizzie::get_page_id_by_title('Support')));
	set_theme_mod('vw_tourism_pro_footer_privacy_url',get_permalink(ThemeWhizzie::get_page_id_by_title('Privacy Policy')));
	set_theme_mod('vw_tourism_pro_footer_terms_condition_url',get_permalink(ThemeWhizzie::get_page_id_by_title('Terms & Condition')));

	set_theme_mod('vw_tourism_pro_footer_support_text','Support');
	set_theme_mod('vw_tourism_pro_footer_privacy_text','Privacy');
	set_theme_mod('vw_tourism_pro_footer_term_conditon_text','Term & Condition');

	set_theme_mod( 'vw_tourism_pro_footer_copy', 'Copyright © 2024 France Tourism, All Rights Reserved' );
	// Newsletter shortcode
	$cf7title = "Footer Newsletter";
	$cf7content = '
	<div id="newsletter-footer"><label class="pb-2">Email Address</label>
					[email* your-email placeholder "Your Email"]
		    <div class="theme-btn-block theme-btn-main" >
		      <span class="theme-btn-line-left"></span>
		      <span class="theme-btn-text">[submit "Subscribe"]</span>
		      <span class="theme-btn-line-right"></span>
		      <i class="fa-solid fa-caret-down"></i>
		    </div>
		</div>
	[_site_title] "[your-subject]"
	[_site_title] <abc@gmail.com>
	From: [your-name] <[your-email]>
	Subject: [your-subject]

	Message Body:
	[your-message]

	--
	This e-mail was sent from a contact form on [_site_title] ([_site_url])
	[_site_admin_email]
	Reply-To: [your-email]

	0
	0

	[_site_title] "[your-subject]"
	[_site_title] <abc@gmail.com>
	Message Body:
	[your-message]

	--
	This e-mail was sent from a contact form on [_site_title] ([_site_url])
	[your-email]
	Reply-To: [_site_admin_email]

	0
	0
	Thank you for your message. It has been sent.
	There was an error trying to send your message. Please try again later.
	One or more fields have an error. Please check and try again.
	There was an error trying to send your message. Please try again later.
	You must accept the terms and conditions before sending your message.
	The field is required.
	The field is too long.
	The field is too short.
	There was an unknown error uploading the file.
	You are not allowed to upload files of this type.
	The file is too big.
	There was an error uploading the file.';

	$cf7_post = array(
	'post_title'    => wp_strip_all_tags( $cf7title ),
	'post_content'  => $cf7content,
	'post_status'   => 'publish',
	'post_type'     => 'wpcf7_contact_form',
	);
	// Insert the post into the database
	$cf7post_id = wp_insert_post( $cf7_post );

	add_post_meta($cf7post_id, "_form", '<div id="newsletter-footer"><label class="pb-2">Email Address</label>
				[email* your-email placeholder "Your Email"]
	    <div class="theme-btn-block theme-btn-main" >
	      <span class="theme-btn-line-left"></span>
	      <span class="theme-btn-text">[submit "Subscribe"]</span>
	      <span class="theme-btn-line-right"></span>
	      <i class="fa-solid fa-caret-down"></i>
	    </div>
	</div>');

	$cf7mail_data  = array('subject' => '[_site_title] "[your-subject]"',
			'sender' => '[_site_title] <abc@gmail.com>',
			'body' => 'From: [your-name] <[your-email]>
	Subject: [your-subject]

	Message Body:
	[your-message]

	--
	This e-mail was sent from a contact form on [_site_title] ([_site_url])',
			'recipient' => '[_site_admin_email]',
			'additional_headers' => 'Reply-To: [your-email]',
			'attachments' => '',
			'use_html' => 0,
			'exclude_blank' => 0 );

	add_post_meta($cf7post_id, "_mail", $cf7mail_data);
						// Gets term object from Tree in the database.

	$cf7shortcode = '[contact-form-7 id="'.$cf7post_id.'" title="'.$cf7title.'"]';

	set_theme_mod( 'vw_tourism_pro_newsletter_shortcode',$cf7shortcode );

	set_theme_mod( 'vw_tourism_pro_newsletter_form_title','Sign Up For Travel News And Inslights' );
	set_theme_mod( 'vw_tourism_pro_newsletter_form_sub_title','Lorem Ipsum is simply dummy text of the printing and typesetting industry.' );
	set_theme_mod( 'vw_tourism_pro_newsletter_form_para','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis.' );
	set_theme_mod('vw_tourism_pro_newsletter_form_img',get_template_directory_uri().'/assets/images/why-choose/footer-news.png' );

	$contact_title = array('Contact','Mail Address','Location');
	$contact_para = array('+12 3456789012','francetourism@gmail.com','4953 Vine Street San Diego');

	set_theme_mod( 'vw_tourism_pro_footer_contact_number', '3' );

	for( $i=1; $i<=3; $i++ ) {
		set_theme_mod('vw_tourism_pro_footer_contact_img'.$i, get_template_directory_uri().'/assets/images/footer-con'.$i.'.png');
		set_theme_mod('vw_tourism_pro_footer_contact_title'.$i, $contact_title[$i-1]);
		set_theme_mod('vw_tourism_pro_footer_contact_para'.$i, $contact_para[$i-1]);
	}



	set_theme_mod( 'vw_tourism_pro_contactpage_form_title', 'Contact Information' );
		set_theme_mod( 'vw_tourism_pro_contactpage_form_subtitle', 'Fill up the contact form and our team will get back in touch with you within 24 hours.');
		set_theme_mod( 'vw_tourism_pro_address_latitude', '28.8027594' );
		set_theme_mod( 'vw_tourism_pro_address_longitude', '-105.9808615' );
		set_theme_mod( 'vw_tourism_pro_contact_page_form_bg_image',get_template_directory_uri().'/assets/images/contact-bg.png' );

			// ------------About us section-------------

	set_theme_mod( 'vw_tourism_pro_aboutpage_mission_heading', 'The Mission' );
	set_theme_mod( 'vw_tourism_pro_aboutpage_mission_paragraph', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.');

	set_theme_mod( 'vw_tourism_pro_aboutpage_story_heading', 'The Story' );
	set_theme_mod( 'vw_tourism_pro_aboutpage_story_paragraph', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.');


	set_theme_mod( 'vw_tourism_pro_aboutpage_vission_heading', 'Our Vision:' );
set_theme_mod( 'vw_tourism_pro_aboutpage_vission_paragraph', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.' );

set_theme_mod( 'vw_tourism_pro_aboutpage_vission_point_one', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.' );
set_theme_mod( 'vw_tourism_pro_aboutpage_vission_point_two', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.' );

set_theme_mod( 'vw_tourism_pro_aboutpage_vission_img_one',get_template_directory_uri().'/assets/images/about-page/vision1.png' );
set_theme_mod( 'vw_tourism_pro_aboutpage_vission_img_two',get_template_directory_uri().'/assets/images/about-page/vision2.png' );


set_theme_mod( 'vw_tourism_pro_aboutpage_our_value_heading', 'Our Values' );
set_theme_mod( 'vvw_tourism_pro_aboutpage_our_value_paragraph', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.');

set_theme_mod( 'vw_tourism_pro_aboutpage_our_resource_heading', 'Our Resources' );
set_theme_mod( 'vw_tourism_pro_aboutpage_our_resource_paragraph', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.');


set_theme_mod( 'vw_tourism_pro_aboutpage_about_section_feature_img',get_template_directory_uri().'/assets/images/about-page/feature.png' );

set_theme_mod( 'vw_tourism_pro_aboutpage_about_section_feature_heading', 'Features:' );
set_theme_mod( 'vw_tourism_pro_aboutpage_about_section_feature_paragraph', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.' );

set_theme_mod( 'vw_tourism_pro_aboutpage_about_section_feature_point_one', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.' );
set_theme_mod( 'vw_tourism_pro_aboutpage_about_section_feature_point_two', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.' );

set_theme_mod( 'vw_tourism_pro_aboutpage_gallery_img_one',get_template_directory_uri().'/assets/images/about-page/Gallery-img1.png' );
set_theme_mod( 'vw_tourism_pro_aboutpage_gallery_img_two',get_template_directory_uri().'/assets/images/about-page/Gallery-img2.png' );
set_theme_mod( 'vw_tourism_pro_aboutpage_gallery_img_three',get_template_directory_uri().'/assets/images/about-page/Gallery-img3.png' );
set_theme_mod( 'vw_tourism_pro_aboutpage_gallery_img_four',get_template_directory_uri().'/assets/images/about-page/Gallery-img4.png' );

		// ------------contact us section-------------

	$cf7title = "Contact Us";
	$cf7content = '
	[text* your-name autocomplete:name placeholder "Enter Your Name*"]

		[tel* tel-203 placeholder "Phone No*"]

		[email* email-431 placeholder "Enter Your E-mail*"]

		[textarea your-message placeholder "Enter Your Message"]
<div class="theme-btn-block theme-btn-main" >
	      <span class="theme-btn-line-left"></span>
	      <span class="theme-btn-text">[submit "Submit"]</span>
	      <span class="theme-btn-line-right"></span>
	      <i class="fa-solid fa-caret-down"></i>
	    </div>
	[_site_title] "[your-subject]"
	[_site_title] <abc@gmail.com>
	From: [your-name] <[your-email]>
	Subject: [your-subject]

	Message Body:
	[your-message]

	--
	This e-mail was sent from a contact form on [_site_title] ([_site_url])
	[_site_admin_email]
	Reply-To: [your-email]

	0
	0

	[_site_title] "[your-subject]"
	[_site_title] <abc@gmail.com>
	Message Body:
	[your-message]

	--
	This e-mail was sent from a contact form on [_site_title] ([_site_url])
	[your-email]
	Reply-To: [_site_admin_email]

	0
	0
	Thank you for your message. It has been sent.
	There was an error trying to send your message. Please try again later.
	One or more fields have an error. Please check and try again.
	There was an error trying to send your message. Please try again later.
	You must accept the terms and conditions before sending your message.
	The field is required.
	The field is too long.
	The field is too short.
	There was an unknown error uploading the file.
	You are not allowed to upload files of this type.
	The file is too big.
	There was an error uploading the file.';

	$cf7_post = array(
	'post_title'    => wp_strip_all_tags( $cf7title ),
	'post_content'  => $cf7content,
	'post_status'   => 'publish',
	'post_type'     => 'wpcf7_contact_form',
	);
	// Insert the post into the database
	$cf7post_id = wp_insert_post( $cf7_post );

	add_post_meta($cf7post_id, "_form", '[text* your-name autocomplete:name placeholder "Enter Your Name*"]

		[tel* tel-203 placeholder "Phone No*"]

		[email* email-431 placeholder "Enter Your E-mail*"]

		[textarea your-message placeholder "Enter Your Message"]
		<div class="theme-btn-block theme-btn-main" >
		  <span class="theme-btn-line-left"></span>
		  <span class="theme-btn-text">[submit "Submit"]</span>
		  <span class="theme-btn-line-right"></span>
		  <i class="fa-solid fa-caret-down"></i>
		</div>');

		$cf7mail_data  = array('subject' => '[_site_title] "[your-subject]"',
		'sender' => '[_site_title] <abc@gmail.com>',
		'body' => 'From: [your-name] <[your-email]>
		Subject: [your-subject]

		Message Body:
		[your-message]

		--
		This e-mail was sent from a contact form on [_site_title] ([_site_url])',
		'recipient' => '[_site_admin_email]',
		'additional_headers' => 'Reply-To: [your-email]',
		'attachments' => '',
		'use_html' => 0,
		'exclude_blank' => 0 );

		add_post_meta($cf7post_id, "_mail", $cf7mail_data);
		// Gets term object from Tree in the database.

		$cf7shortcode = '[contact-form-7 id="'.$cf7post_id.'" title="'.$cf7title.'"]';
	set_theme_mod( 'vw_tourism_pro_contact_us_section_shortcode',$cf7shortcode );




			// ------------Registartion section-------------

		$cf7title = "Registration form";
		$cf7content = '
		<div id="registration-form">
		      <div class="row">
		  <label>Full Name</label>
			        <div class="col-lg-6 mb-2">


		[text* text-739 placeholder "First Name"]
			     	</div>
						       <div class="col-lg-6  mb-3">

						               [text* text-361 placeholder "Last Name"]
							     	</div>
						     <div class="col-lg-6  mb-3">
						<label>E-mail</label>
						[email* email-831 placeholder "Email Here"]
						</div>
						   <div class="col-lg-6  mb-3">
						<label>Phone Number</label>
						[tel* tel-157 placeholder "+12 1234567890"]
						   </div>

						  <div class="col-lg-6  mb-3 appointment-date">
						<label>When are you planning to visit?</label>
						[date* date-877 placeholder "Date"]
						</div>
						 <div class="col-lg-6  mb-3">
						<label>How many people are in your group?</label>
						[number number-798 min:1 max:50 "Number"]
						</div>
						 <div class="col-lg-6  mb-3">
						<label>Which tours or events are you most interested in?</label>
		[radio radio-699 use_label_element default:1 "Revolution was just the beginning" "Transcendentalism" "Custom" "Ghosts in the Gloaming" "Gateposts, Grapes & Graveyards" "Tavern Life"]
						</div>
						 <div class="col-lg-6  mb-3">
						<label>What is the best way to contact you?</label>
					[radio radio-298 use_label_element default:1 "Phone" "Mail" "Either"]
						</div>
						<div class="col-lg-6  mb-3">
						<label>If phone, when is the best time of day for a call-back?</label>
				[radio radio-84 use_label_element default:1 "8-11 am" "12-4 pm" "6-10pm"]
						</div>
						<div class="col-lg-6 text-two  mb-3">
						<label>Anything else we should know?</label>
						[textarea textarea-983 placeholder "Type Here"]
						</div>
						<div class="col-lg-12  mb-3">
						<label>And last, how did you hear about us?</label>
						[textarea textarea-983 placeholder "Type Here"]
						</div>

						<div class="col-lg-12 text-center">[submit "Submit"]</div>
						</div>
		[_site_title] "[your-subject]"
		[_site_title] <abc@gmail.com>
		From: [your-name] <[your-email]>
		Subject: [your-subject]

		Message Body:
		[your-message]

		--
		This e-mail was sent from a contact form on [_site_title] ([_site_url])
		[_site_admin_email]
		Reply-To: [your-email]

		0
		0

		[_site_title] "[your-subject]"
		[_site_title] <abc@gmail.com>
		Message Body:
		[your-message]

		--
		This e-mail was sent from a contact form on [_site_title] ([_site_url])
		[your-email]
		Reply-To: [_site_admin_email]

		0
		0
		Thank you for your message. It has been sent.
		There was an error trying to send your message. Please try again later.
		One or more fields have an error. Please check and try again.
		There was an error trying to send your message. Please try again later.
		You must accept the terms and conditions before sending your message.
		The field is required.
		The field is too long.
		The field is too short.
		There was an unknown error uploading the file.
		You are not allowed to upload files of this type.
		The file is too big.
		There was an error uploading the file.';

		$cf7_post = array(
		'post_title'    => wp_strip_all_tags( $cf7title ),
		'post_content'  => $cf7content,
		'post_status'   => 'publish',
		'post_type'     => 'wpcf7_contact_form',
		);
		// Insert the post into the database
		$cf7post_id = wp_insert_post( $cf7_post );

		add_post_meta($cf7post_id, "_form", '<div id="registration-form">
      <div class="row">
  <label>Full Name</label>
	        <div class="col-lg-6 mb-2">


[text* text-739 placeholder "First Name"]
	     	</div>
				       <div class="col-lg-6  mb-3">

				               [text* text-361 placeholder "Last Name"]
					     	</div>
				     <div class="col-lg-6  mb-3">
				<label>E-mail</label>
				[email* email-831 placeholder "Email Here"]
				</div>
				   <div class="col-lg-6  mb-3">
				<label>Phone Number</label>
				[tel* tel-157 placeholder "+12 1234567890"]
				   </div>

				  <div class="col-lg-6  mb-3 appointment-date">
				<label>When are you planning to visit?</label>
				[date* date-877 placeholder "Date"]
				</div>
				 <div class="col-lg-6  mb-3">
				<label>How many people are in your group?</label>
				[number number-798 min:1 max:50 "Number"]
				</div>
				 <div class="col-lg-6  mb-3">
				<label>Which tours or events are you most interested in?</label>
[radio radio-699 use_label_element default:1 "Revolution was just the beginning" "Transcendentalism" "Custom" "Ghosts in the Gloaming" "Gateposts, Grapes & Graveyards" "Tavern Life"]
				</div>
				 <div class="col-lg-6  mb-3">
				<label>What is the best way to contact you?</label>
			[radio radio-298 use_label_element default:1 "Phone" "Mail" "Either"]
				</div>
				<div class="col-lg-6  mb-3">
				<label>If phone, when is the best time of day for a call-back?</label>
		[radio radio-84 use_label_element default:1 "8-11 am" "12-4 pm" "6-10pm"]
				</div>
				<div class="col-lg-6 text-two  mb-3">
				<label>Anything else we should know?</label>
				[textarea textarea-983 placeholder "Type Here"]
				</div>
				<div class="col-lg-12  mb-3">
				<label>And last, how did you hear about us?</label>
				[textarea textarea-983 placeholder "Type Here"]
				</div>

				<div class="col-lg-12 text-center">[submit "Submit"]</div>
				</div>');

			$cf7mail_data  = array('subject' => '[_site_title] "[your-subject]"',
			'sender' => '[_site_title] <abc@gmail.com>',
			'body' => 'From: [your-name] <[your-email]>
			Subject: [your-subject]

			Message Body:
			[your-message]

			--
			This e-mail was sent from a contact form on [_site_title] ([_site_url])',
			'recipient' => '[_site_admin_email]',
			'additional_headers' => 'Reply-To: [your-email]',
			'attachments' => '',
			'use_html' => 0,
			'exclude_blank' => 0 );

			add_post_meta($cf7post_id, "_mail", $cf7mail_data);
			// Gets term object from Tree in the database.

			$cf7shortcode = '[contact-form-7 id="'.$cf7post_id.'" title="'.$cf7title.'"]';
		set_theme_mod( 'vw_tourism_pro_registration_form_shortcode',$cf7shortcode );


	// About Us
	set_theme_mod( 'vw_tourism_pro_aboutpage_imgone',get_template_directory_uri().'/assets/images/Servicesimg.png' );

	set_theme_mod( 'vw_tourism_pro_aboutpage_imgone',get_template_directory_uri().'/assets/images/About-Us-Page/happy-girl-with-family-christmas-time.png' );
	set_theme_mod( 'vw_tourism_pro_aboutpage_heading_one', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry' );
	set_theme_mod( 'vw_tourism_pro_aboutpage_para_one', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.' );

	set_theme_mod( 'vw_tourism_pro_aboutpage_imgtwo',get_template_directory_uri().'/assets/images/About-Us-Page/little-helper-st-claus-work.png' );
	set_theme_mod( 'vw_tourism_pro_aboutpage_heading_two', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry' );
	set_theme_mod( 'vw_tourism_pro_aboutpage_para_two', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.' );

	set_theme_mod( 'vw_tourism_pro_contactpage_form_title', 'Contact Information' );
	set_theme_mod( 'vw_tourism_pro_contactpage_form_subtitle', 'Fill up the contact form and our team will get back in touch with you within 24 hours.');

	set_theme_mod( 'vw_tourism_pro_address_latitude', '28.8027594' );
	set_theme_mod( 'vw_tourism_pro_address_longitude', '-105.9808615' );

	set_theme_mod( 'vw_tourism_pro_error_temp_bg_image',get_template_directory_uri().'/assets/images/404.png' );
	set_theme_mod( 'vw_tourism_pro_404_page_heading', 'Page Not Found' );
	set_theme_mod( 'vw_tourism_pro_404_page_content', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.' );
	set_theme_mod( 'vw_tourism_pro_404_page_button_text', 'Back to Home' );



	$this->theme_create_customizer_nav_menu();
	$this->theme_create_customizer_footer_quick_menu();
	$this->theme_create_customizer_footer_activity_cat();


	$VW_Widget_Importer = new VW_Widget_Importer;
	$VW_Widget_Importer->import_widgets( $this->widget_file_url );

	echo "string";
	exit;
		}


	public function wz_activate_vw_tourism_pro() {
		$vw_tourism_pro_license_key = $_POST['vw_tourism_pro_license_key'];

		$endpoint = SHOPIFY_THEME_LICENCE_ENDPOINT.'verifyTheme';

		$body = [
			'theme_license_key'  => $vw_tourism_pro_license_key,
			'site_url'					 => site_url(),
			'theme_text_domain'	 => wp_get_theme()->get( 'TextDomain' )
		];
		$body = wp_json_encode( $body );
		$options = [
			'body'        => $body,
			'headers'     => [
				'Content-Type' => 'application/json',
			]
		];
		$response = wp_remote_post( $endpoint, $options );
		if ( is_wp_error( $response ) ) {
			ThemeWhizzie::remove_the_theme_key();
			ThemeWhizzie::set_the_validation_status('false');
			$response = array('status' => false, 'msg' => 'Something Went Wrong!');
			wp_send_json($response);
			exit;
		} else {
			$response_body = wp_remote_retrieve_body( $response );
			$response_body = json_decode($response_body);

			if ( isset($response_body->is_suspended) && $response_body->is_suspended == 1 ) {
				ThemeWhizzie::set_the_suspension_status( 'true' );
			} else {
				ThemeWhizzie::set_the_suspension_status( 'false' );
			}

			if ($response_body->status === false) {
				ThemeWhizzie::remove_the_theme_key();
				ThemeWhizzie::set_the_validation_status('false');
				$response = array('status' => false, 'msg' => $response_body->msg);
				wp_send_json($response);
				exit;
			} else {
				ThemeWhizzie::set_the_validation_status('true');
				ThemeWhizzie::set_the_theme_key($vw_tourism_pro_license_key);
				$response = array('status' => true, 'msg' => 'Theme Activated Successfully!');
				wp_send_json($response);
				exit;
			}
		}
	}



	/**
	 * Imports Ibtana Builder Demo Content
	 * @since 1.1.0
	 */
public function setup_builder() {
		$buildercontent = '';
		$resp_slug = '';
		$json_theme = array('base_theme_text_domain' => 'vw-tourism');
	    $json_args = array(
	        'method' => 'POST',
	        'headers'     => array(
	            'Content-Type'  => 'application/json'
	        ),
	        'body' => json_encode($json_theme),
	    );

	    $request_data = wp_remote_post( IBTANA_THEME_LICENCE_ENDPOINT.'get_client_ibtana_premium_theme_json_with_inner_pages',$json_args);
	    $response_json = json_decode(wp_remote_retrieve_body( $request_data));

	    // echo '<pre>'; print_r($response_json->data); echo '</pre>';


	    foreach($response_json->data as $resp_json) {
		    if($resp_json->page_type  == 'template'){
		    	$resp_slug = $resp_json->slug ;
		    }
	    }

			// demo content START


			/*---------------------------Cuisines------------------------*/
			set_theme_mod( 'vw_tourism_pro_popular__cuisines_currency', '$' );
			set_theme_mod( 'vw_tourism_pro_cuisines_sub_heading', 'Cuisines' );
			set_theme_mod( 'vw_tourism_pro_cuisines_heading', 'Popular Cuisines' );
			set_theme_mod( 'vw_tourism_pro_cuisines_paragraph', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.' );
			set_theme_mod( 'vw_tourism_pro_cuisines_btn_url', get_permalink(ThemeWhizzie::get_page_id_by_title('Cuisines')));

			$cuisines_name = array(
			       'Pasta',
			       'Steak frites',
			       'Chicken confit',
			       'Bouillabaisse',
			       'Quiche Lorraine',
			        'Joe Burger',
			        'Hot Pizza',
			        'Croque monsieur',
			        'Tandoori Panner',
			        'Tarte tatin'
			     );

			for($i=1;$i<=10;$i++){
			 $title = $cuisines_name[$i-1];
			 $content = "Lorem Ipsum is simply dummy text Lorem Ipsum is simply dummy text";
			 // Create post object
			 $my_post = array(
			 'post_title'    =>wp_strip_all_tags( $title ),
			 'post_content'  => $content,
			 'post_status'   => 'publish',
			 'post_type'     => 'popular-cuisines',
			 );

			 // Insert the post into the database
			 $cuisines_id = wp_insert_post( $my_post );

			 // Now replafile_urice meta w/ new updated value array

			 $random_price = rand(10,30);

			 update_post_meta( $cuisines_id, 'cuisines_sale_price', $random_price - 10 );
			 update_post_meta( $cuisines_id, 'cuisines_price', $random_price );
			 update_post_meta( $cuisines_id, 'cuisines_price_title', 'Price' );

			 update_post_meta( $cuisines_id, 'cuisines_location_title','Location');
			 update_post_meta( $cuisines_id, 'cuisines_location','Lorem Ipsum is simply dummy text Lorem Ipsum is simply dummy text');
			 update_post_meta( $cuisines_id, 'cuisines_recipe_title','Hot Recipe');

			 $image_url = get_template_directory_uri().'/assets/images/popular-cuisines/popular-cuisines'.$i.'.png';

			 $image_name       = 'popular-cuisines'.$i.'.png';
			 $upload_dir       = wp_upload_dir(); // Set upload folder
			 $image_data       = file_get_contents($image_url); // Get image data
			 $unique_file_name = wp_unique_filename( $upload_dir['path'], $image_name ); // Generate unique name
			 $filename         = basename( $unique_file_name ); // Create image file name

			 // Check folder permission and define file location
			 if( wp_mkdir_p( $upload_dir['path'] ) ) {
			   $file = $upload_dir['path'] . '/' . $filename;
			 } else {
			   $file = $upload_dir['basedir'] . '/' . $filename;
			 }

			 // Create the image  file on the server
			 file_put_contents( $file, $image_data );

			 // Check image file type
			 $wp_filetype = wp_check_filetype( $filename, null );

			 // Set attachment data
			 $attachment = array(
			   'post_mime_type' => $wp_filetype['type'],
			   'post_title'     => sanitize_file_name( $filename ),
			   'post_content'   => '',
			   'post_type'     => 'popular-cuisines',
			   'post_status'    => 'inherit'
			 );

			 // Create the attachment
			 $attach_id = wp_insert_attachment( $attachment, $file, $cuisines_id );

			 // Include image.php
			 require_once(ABSPATH . 'wp-admin/includes/image.php');

			 // Define attachment metadata
			 $attach_data = wp_generate_attachment_metadata( $attach_id, $file );

			 // Assign metadata to attachment
			 wp_update_attachment_metadata( $attach_id, $attach_data );

			 // And finally assign featured image to post
			 set_post_thumbnail( $cuisines_id, $attach_id );
			}



			/*--------------------------- Destination------------------------*/
			set_theme_mod( 'vw_tourism_pro_popular_destination_sub_heading', 'DESTINATION' );
			set_theme_mod( 'vw_tourism_pro_popular_destination_heading', 'Popular Destination' );
			$destination_arr = array(
			  'Cannes',
			  'Paris',
			  'Lyon',
			  'Rouen',
			  'Marseille',
			  'Brive la Gaillarde',
			  'Poitier'
			);
			$destination_type = array(
			  'Historical City',
			  'The City Of Love',
			  'Historical City',
			  'Natural City',
			  'Historical City',
			  'Historical City',
			  'Historical City'
			);

			$destinations_ids = array();

			for($i=1;$i<=7;$i++){
			 $desti_title = $destination_arr[$i-1];
			 $content = 'Lorem Ipsum has been the industrys standard dummy text ever since the 1500 when an unknown printer took a galley of type and scrambled it to make a type specimen book Lorem Ipsum has been the industrys standard dummy text ever since the 1500 when an unknown printer took a galley of type and scrambled it to make a type specimen book.';
			 $destination_main	=	wp_insert_term(
			     $desti_title, // the term
			     'tcp_destination', // the taxonomy
			     array(
			         'description'=> $content
			     )
			);

			if (!is_wp_error($destinations_ids)) {
			 array_push($destinations_ids, $destination_main['term_id']);
			}

			$image_url = get_template_directory_uri().'/assets/images/destination/'.str_replace(' ','-', $desti_title).'.png';
			$image_name = $desti_title.'.png';;
			$upload_dir = wp_upload_dir();
			// Set upload folder
			$image_data = file_get_contents(esc_url($image_url));
			// Get image data
			$unique_file_name = wp_unique_filename($upload_dir['path'], $image_name);
			// Generate unique name
			$filename = basename($unique_file_name);
			// Create image file name
			// Check folder permission and define file location
			if (wp_mkdir_p($upload_dir['path'])) {
			  $file = $upload_dir['path'].'/'.$filename;
			} else {
			  $file = $upload_dir['basedir'].'/'.$filename;
			}
			// Create the image  file on the server
			file_put_contents($file, $image_data);
			// Check image file type
			$wp_filetype = wp_check_filetype($filename, null);
			// Set attachment data
			$attachment = array(
			 'post_mime_type' => $wp_filetype['type'],
			 'post_title'     => sanitize_file_name($filename),
			 'post_type'      => 'mphb_room_type',
			 'post_status'    => 'inherit',
			);
			// Create the attachment
			$attach_id = wp_insert_attachment($attachment, $file);

			// Include image.php
			require_once (ABSPATH.'wp-admin/includes/image.php');
			// Define attachment metadata
			$attach_data = wp_generate_attachment_metadata($attach_id, $file);
			// Assign metadata to attachment
			wp_update_attachment_metadata($attach_id, $attach_data);
			$attach_url =	wp_get_attachment_image_url($attach_id);
			// And finally assign featured image to post

			if (!is_wp_error($destinations_ids)) {
			 update_term_meta(	$destination_main['term_id'],	'destination_image', $attach_url);
			 update_term_meta(	$destination_main['term_id'],	'destination_type',$destination_type[$i-1]);
			}
			}




					// ----------------popular packages-------------

					set_theme_mod('vw_tourism_pro_popular_packages_view_more_btn_url',get_permalink(ThemeWhizzie::get_page_id_by_title('Tour Packages')));
					set_theme_mod('vw_tourism_pro_popular_packages_view_more_text','View More');

					set_theme_mod( 'vw_tourism_pro_popular_packages_sub_heading', 'Our Places' );
					set_theme_mod( 'vw_tourism_pro_popular_packages_heading', 'Our Popular Packages' );

					$packages_array = array( 'Trending', 'Duration', 'Types' );
					for ($i=0; $i < 3; $i++) {
						set_theme_mod( 'vw_tourism_pro_popular_packages_tab_heading'.$i, $packages_array[$i] );
					}

			    set_theme_mod( 'vw_tourism_pro_popular_packages_booknow_text', 'Book Now' );
			    set_theme_mod( 'vw_tourism_pro_packages_currency', '$' );


			    $packages_categories_array = array();
			    $parent_category_arr = array(
			    'Historical Places' => array('Castles Cathedrals of France','Normandy Impressionist Festival'),
			    'Exciting Baloon' => array('Dordogne Hot Air Balloon Ride','A Journey Through Museums and Artistic Treasures'),
			    'Hiking' => array('Hidden Gems Secret Towns of France','Hiking the French Alps'),
			    'Magnificent Cities' => array('A Luxurious Tour of France','Romantic Rendezvous Paris Provence'),
			    'Rock Climbing' => array('Exploring Breathtaking Landscapes','Rock Climbing Escapade'),
			    'Water Sports' => array('Water Sports Retreat in Annecy','Ultimate Water Sports in Corsica'),
			  );
			    // $cat=1;
			    foreach ( $parent_category_arr as $parent_packages_cat => $parent_packages ) {
			     $content = "Lorem Ipsum is simply dummy text of the printing and typesetting industry.";
			     $parent_category	=	wp_insert_term(
			       $parent_packages_cat,
			       'tcp_category',
			       array(
			         'description'=> $content
			       )
			     );

			     $term_category = get_term_by('id', $parent_category['term_id'], 'tcp_category');
			     if ($term_category) {
			       $term_slug = $term_category->slug;

			       array_push( $packages_categories_array, $term_slug );
			     }

			      // $cat++;//
			      $image_url = get_template_directory_uri().'/assets/images/activity/'.str_replace( " ", "-", $parent_packages_cat).'.png';
			       $image_name= $parent_packages_cat.'.png';
			       $upload_dir       = wp_upload_dir();
			       // Set upload folder
			       $image_data= file_get_contents($image_url);
			       // Get image data
			       $unique_file_name = wp_unique_filename( $upload_dir['path'], $image_name );
			       // Generate unique name
			       $filename= basename( $unique_file_name );
			       // Create image file name

			       // Check folder permission and define file location
			       if( wp_mkdir_p( $upload_dir['path'] ) ) {
			         $file = $upload_dir['path'] . '/' . $filename;
			       } else {
			         $file = $upload_dir['basedir'] . '/' . $filename;
			       }

			       // Create the image  file on the server
			       file_put_contents( $file, $image_data );

			       // Check image file type
			       $wp_filetype = wp_check_filetype( $filename, null );

			       // Set attachment data
			       $attachment = array(
			         'post_mime_type' => $wp_filetype['type'],
			         'post_title'     => sanitize_file_name( $filename ),
			         'post_content'   => '',
			         'post_type'     => '',
			         'post_status'    => 'inherit'
			       );

			       // Create the attachment
			       $attach_id = wp_insert_attachment($attachment, $file);
			       $attach_url =	wp_get_attachment_image_url($attach_id);

			       update_term_meta($parent_category['term_id'], 'category_image', $attach_url);

			     foreach ( $parent_packages as $packages ) {
			       $short_description = '<ul>
			            <li>eque sodales ut etiam sit amet nisl purus non tellus orci ac auctor</li>
			            <li>eque sodales ut etiam sit amet nisl purus non tellus orci ac auctor</li>
			            <li>eque sodales ut etiam sit amet nisl purus non tellus orci ac auctor</li>
			            </ul>';
			       $packages_content = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.

			       Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.";
			       $my_post = array(
			         'post_title'    => $packages,
			         'post_content'  => $packages_content,
			         'post_status'   => 'publish',
			         'post_type'     => 'tcp_package',
			         'post_excerpt' => $short_description
			       );
			       // Insert the post into the database
			        $packages_id = wp_insert_post($my_post);
			        wp_set_object_terms( $packages_id, $parent_category['term_id'], 'tcp_category', true );

			        $key_team = array_rand($team_ids,1);
			        wp_set_object_terms( $packages_id, $team_ids[$key_team], 'tcp_team', true );

			        $key_desti = array_rand($destinations_ids,1);
			        wp_set_object_terms( $packages_id, $destinations_ids[$key_desti], 'tcp_destination', true );

			         $random_price = rand(100,500);

			        update_post_meta( $packages_id, 'vw_title_banner_image_wp_custom_attachment', $attachment_url );
			        update_post_meta( $packages_id, 'pkg_from', 'Ile  De France' );
			        update_post_meta( $packages_id, 'pkg_to', 'Rouen City' );
			        update_post_meta( $packages_id, 'pkg_regular_price', $random_price );
			        update_post_meta( $packages_id, 'pkg_sale_price',  $random_price - 10  );
			        update_post_meta( $packages_id, 'pkg_tour_days', '5' );
			        update_post_meta( $packages_id, 'pkg_tour_nights','4' );
			        update_post_meta( $packages_id, 'pkg_travel_name','Travel Name Here' );
			        update_post_meta( $packages_id, 'pkg_person_text','Per Person' );
			        update_post_meta( $packages_id, 'pkg_additional_image_1', get_template_directory_uri().'/assets/images/packages/additional-img1.png' );
			        update_post_meta( $packages_id, 'pkg_additional_image_2', get_template_directory_uri().'/assets/images/packages/additional-img2.png' );
			        update_post_meta( $packages_id, 'pkg_additional_video', get_template_directory_uri().'/assets/videos/tour-video.mp4');
			        update_post_meta( $packages_id, 'pkg_tour_loc_latitude', '37.7576928' );
			        update_post_meta( $packages_id, 'pkg_tour_loc_longitude', '-122.4788851' );
			        update_post_meta( $packages_id, 'pkg_tour_additional_info', $short_description );
			        update_post_meta( $packages_id, 'pkg_registation_btn_url', get_permalink(ThemeWhizzie::get_page_id_by_title('Registration Form')) );
			        update_post_meta( $packages_id, 'pkg_registation_btn_text', 'Book Now');



			        $tour_packages_arr = array();
			        for ($i=1; $i <= 5; $i++) {
			          array_push($tour_packages_arr, array(
			            'image' => get_template_directory_uri().'/assets/images/packages/day'.$i.'.png',
			            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.'
			          ));
			        }

			        update_post_meta( $packages_id, 'pkg_tour_details', $tour_packages_arr );

			        // create Product START
			      $review_text = array(
			        'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor Incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet.',
			        'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor Incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet.',
			        'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor Incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet.',

			      );
			      // -------------- rating START -------------------------
			      for ( $c=0; $c <= 2; $c++ ) {
			       $comment_id = wp_insert_comment( array(
			         'comment_post_ID'      => $packages_id,
			         'comment_author'       => get_the_author_meta( 'display_name' ),
			         'comment_author_email' => get_the_author_meta( 'user_email' ),
			         'comment_content'      => $review_text[$c],
			         'comment_parent'       => 0,
			         'user_id'              => get_current_user_id(), // <== Important
			         'comment_date'         => date('Y-m-d H:i:s'),
			         'comment_approved'     => 1,
			       ) );

			       update_comment_meta( $comment_id, 'rating', 4 );
			      }	update_comment_meta( $comment_id, 'rating', 5 );
			        $image_name_replaced = str_replace(' ', '-', $packages);
			        $image_url = get_template_directory_uri().'/assets/images/packages/'.strtolower(str_replace(' ', '-', $parent_packages_cat)).'/'.$image_name_replaced.'.png';
			        $image_name       = $image_name_replaced.'.png';
			        $upload_dir = wp_upload_dir();
			       $image_data = file_get_contents(esc_url($image_url));
			       $unique_file_name = wp_unique_filename($upload_dir['path'], $image_name);
			       $filename = basename($unique_file_name);

			       // Check folder permission and define file location
			       if (wp_mkdir_p($upload_dir['path'])) {
			          $file = $upload_dir['path'].'/'.$filename;
			       } else {
			          $file = $upload_dir['basedir'].'/'.$filename;
			       }
			       // Create the image  file on the server
			       file_put_contents($file, $image_data);

			       // Check image file type
			       $wp_filetype = wp_check_filetype($filename, null);

			       // Set attachment data
			       $attachment = array(
			          'post_mime_type' => $wp_filetype['type'],
			          'post_title'     => sanitize_file_name($filename),
			          'post_type'      => 'tcp_package',
			          'post_status'    => 'inherit',
			       );
			       // Create the attachment
			       $attach_id = wp_insert_attachment($attachment, $file, $packages_id);

			       // Include image.php
			       require_once (ABSPATH.'wp-admin/includes/image.php');

			       // Define attachment metadata
			       $attach_data = wp_generate_attachment_metadata($attach_id, $file);


			       // And finally assign featured image to post
			       set_post_thumbnail($packages_id, $attach_id);

			     }
			    }

					/*--------------------------- Testimonial------------------------*/
				 set_theme_mod( 'vw_tourism_pro_testimonials_number', 6 );
				 set_theme_mod( 'vw_tourism_pro_testimonial_sub_heading', 'TESTIMONIAL' );
				 set_theme_mod( 'vw_tourism_pro_testimonial_heading', 'What Say Client' );
				 set_theme_mod( 'vw_tourism_pro_testimonial_paragraph', "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book." );

				 $testimonial_name = array(
				 		 'Rosy Nackly',
				 		 'Mary Ray',
				 		 'Abraham Khalil',
				 		 'christine Rose',
				 		 'Alex sofia',
				 		 'Chris jhon'
				 	 );
				 $testimonial_designation = array(
				 		 'Adventure Journalist',
				 		 'Guide',
				 		 'Artist',
				 		 'Adventure Traveller',
				 		 'Photographer',
				 		 'Professor'
				 	 );

				 for($i=1;$i<=6;$i++){
				 $title = $testimonial_name[$i-1];
				 $content = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry.";
				 // Create post object
				 $my_post = array(
				 'post_title'    =>wp_strip_all_tags( $title ),
				 'post_content'  => $content,
				 'post_status'   => 'publish',
				 'post_type'     => 'testimonial',
				 );

				 // Insert the post into the database
				 $testimonial_id = wp_insert_post( $my_post );

				 // Now replafile_urice meta w/ new updated value array
				 update_post_meta( $testimonial_id, 'testimonial_desigstory', $testimonial_designation[$i-1]);
				 update_post_meta( $testimonial_id, 'testimonial_rating','5');

				 $image_url = get_template_directory_uri().'/assets/images/testimonial/test'.$i.'.png';

				 $image_name       = 'test'.$i.'.png';
				 $upload_dir       = wp_upload_dir(); // Set upload folder
				 $image_data       = file_get_contents($image_url); // Get image data
				 $unique_file_name = wp_unique_filename( $upload_dir['path'], $image_name ); // Generate unique name
				 $filename         = basename( $unique_file_name ); // Create image file name

				 // Check folder permission and define file location
				 if( wp_mkdir_p( $upload_dir['path'] ) ) {
				  $file = $upload_dir['path'] . '/' . $filename;
				 } else {
				  $file = $upload_dir['basedir'] . '/' . $filename;
				 }

				 // Create the image  file on the server
				 file_put_contents( $file, $image_data );

				 // Check image file type
				 $wp_filetype = wp_check_filetype( $filename, null );

				 // Set attachment data
				 $attachment = array(
				  'post_mime_type' => $wp_filetype['type'],
				  'post_title'     => sanitize_file_name( $filename ),
				  'post_content'   => '',
				  'post_type'     => 'testimonial',
				  'post_status'    => 'inherit'
				 );

				 // Create the attachment
				 $attach_id = wp_insert_attachment( $attachment, $file, $testimonial_id );

				 // Include image.php
				 require_once(ABSPATH . 'wp-admin/includes/image.php');

				 // Define attachment metadata
				 $attach_data = wp_generate_attachment_metadata( $attach_id, $file );

				 // Assign metadata to attachment
				 wp_update_attachment_metadata( $attach_id, $attach_data );

				 // And finally assign featured image to post
				 set_post_thumbnail( $testimonial_id, $attach_id );
				 }



			// demo content END
		$json_theme1 = array('premium_template_slug' => $resp_slug);
	    $json_args1 = array(
	        'method' => 'POST',
	        'headers'     => array(
	            'Content-Type'  => 'application/json'
	        ),
	        'body' => json_encode($json_theme1),
	    );

	    $request_data1 = wp_remote_post( IBTANA_THEME_LICENCE_ENDPOINT.'get_client_ibtana_premium_theme_json',$json_args1);
	    $response_json1 = json_decode(wp_remote_retrieve_body( $request_data1));
/*	    print_r($response_json1->data);
*/
       	$buildercontent = $response_json1->data;



		$home_id; $blog_id=''; $contact_id=''; $page_id= '';$page_title='';
		$page_slug=''; global $home_b;

		$page_title = 'Home Page';
		$page_slug = 'home-page';

       	$page_check = get_page_by_title($page_title);
       	$vw_page = array(
       		'post_type' => 'page',
       		'post_title' => $page_title,
       		'post_content'  => $buildercontent,
       		'post_status' => 'publish',
       		'post_author' => 1,
       		'post_slug' => $page_slug
       	);
       	$home_id = wp_insert_post(wp_slash($vw_page));
       	add_post_meta( $home_id, '_wp_page_template', 'page-template/ibtana-template.php' );


		$home_b = get_page_by_title( 'Home Page' );

       	update_option( 'page_on_front', $home_b->ID );
       	update_option( 'show_on_front', 'page' );


        // Create a blog page and assigned the template
        $blog_title = 'Blog';
        $blog = array(
             'post_type' => 'page',
             'post_title' => $blog_title,
             'post_status' => 'publish',
             'post_author' => 1,
             'post_slug' => 'blog'
        );
        $blog_id = wp_insert_post($blog);


        //Set the blog page template
        add_post_meta( $blog_id, '_wp_page_template', 'page-template/blog-fullwidth-extend.php' );


        // Create a Page
        if( get_page_by_title( 'Page' ) == NULL ){
         	$page_title = 'Page ';
         	$content = 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi. Sed quis scit si forte quod esset optima res pro me. sicut ea quae sentio. Qui vellem cadunt off ius desk ejus! Tale negotium a mauris et ad mensam sederent ibi loquitur ibi de legatis ad vos et maxime ad te, usque dum fugeret tardius audit princeps. Bene tamen fiduciam Ego got off semel';

         	$page_check = get_page_by_title($page_title);
        	$vw_page = array(
	         	'post_type' => 'page',
	         	'post_title' => $page_title,
	         	'post_content'  => $content,
	         	'post_status' => 'publish',
	         	'post_author' => 1,
	         	'post_slug' => 'page'
        	);
       		$page_id = wp_insert_post($vw_page);
         }

        // Create a contact page and assigned the template
        $contact_title = 'Contact';
        $contact = array(
          'post_type' => 'page',
          'post_title' => $contact_title,
          'post_status' => 'publish',
          'post_author' => 1,
          'post_slug' => 'contact'
        );
 		$contact_id = wp_insert_post($contact);

		$this->theme_create_customizer_nav_menu();

       	$VW_Widget_Importer = new VW_Widget_Importer;
		$VW_Widget_Importer->import_widgets( $this->widget_file_url );

		//Set the blog with right sidebar template
		add_post_meta( $contact_id, '_wp_page_template', 'page-template/contact.php' );
		if(isset($home_b->ID)){
			echo json_encode(['home_page_id'=>$home_b->ID,'home_page_url'=>get_edit_post_link( $home_b->ID, '' )]);
		}
		exit;

	}


	// ------------ Ibtana Activation Close -----------
	//guidline for about theme
	public function vw_tourism_pro_mostrar_guide() {

		$display_string = '';

		// Check the validation Start
		$vw_tourism_pro_license_key = ThemeWhizzie::get_the_theme_key();
		$endpoint = SHOPIFY_THEME_LICENCE_ENDPOINT.'status';
		$body = [
			'theme_license_key'  => $vw_tourism_pro_license_key,
			'site_url'					 => site_url(),
			'theme_text_domain'	 => wp_get_theme()->get( 'TextDomain' )
		];
		$body = wp_json_encode( $body );
		$options = [
			'body'        => $body,
			'headers'     => [
				'Content-Type' => 'application/json',
			]
		];
		$response = wp_remote_post( $endpoint, $options );
		if ( is_wp_error( $response ) ) {
			// ThemeWhizzie::set_the_validation_status('false');
		} else {
			$response_body = wp_remote_retrieve_body( $response );
			$response_body = json_decode($response_body);

			if ( isset($response_body->is_suspended) && $response_body->is_suspended == 1 ) {
				ThemeWhizzie::set_the_suspension_status( 'true' );
			} else {
				ThemeWhizzie::set_the_suspension_status( 'false' );
			}

			$display_string = isset($response_body->display_string) ? $response_body->display_string : '';

			if ($display_string != '') {
				if (strpos($display_string, '[THEME_NAME]') !== false) {
					$display_string = str_replace("[THEME_NAME]", "VW Tourism Pro", $display_string);
				}
				if (strpos($display_string, '[THEME_PERMALINK]') !== false) {
					$display_string = str_replace("[THEME_PERMALINK]", "https://www.vwthemes.com/themes/bakery-wordpress-theme/", $display_string);
				}
				echo '<div class="notice is-dismissible error thb_admin_notices">' . $display_string . '</div>';
			}



			if ( isset($response_body->status) && $response_body->status === false ) {
				ThemeWhizzie::set_the_validation_status('false');
			} else {
				ThemeWhizzie::set_the_validation_status('true');
			}
		}
		// Check the validation END

		$theme_validation_status = ThemeWhizzie::get_the_validation_status();

		//custom function about theme customizer
		$return = add_query_arg( array()) ;
		$theme = wp_get_theme( 'vw-tourism-pro' );

		?>

		<div class="wrapper-info get-stared-page-wrap">

			<div class="wrapper-info-content">
				<h2><?php _e( 'Welcome to VW Tourism Pro', 'vw-tourism-pro' ); ?> <span class="version">Version: <?php echo esc_html($theme['Version']);?></span></h2>
				<p><?php _e('All our WordPress themes are modern, minimalist, 100% responsive, seo-friendly,feature-rich, block based and multipurpose that best suit designers, bloggers and other professionals who are working in the creative fields.','vw-tourism-pro'); ?></p>
			</div>
			<div class="tab-sec theme-option-tab">
				<div class="tab">
					<button class="tablinks active" onclick="openCity(event, 'theme_activation')" data-tab="theme_activation"><?php _e( 'Key Activation', 'vw-tourism-pro' ); ?></button>
					<button class="tablinks wizard-tab" onclick="openCity(event, 'demo_offer')" data-tab="demo_offer"><?php _e( 'Setup Wizard', 'vw-tourism-pro' ); ?></button>
					<button class="tablinks" onclick="openCity(event, 'theme_info')" data-tab="theme_info"><?php _e( 'Support', 'vw-tourism-pro' ); ?></button>
					<button class="tablinks" onclick="openCity(event, 'plugins')" data-tab="plugins"><?php _e( 'Plugins', 'vw-tourism-pro' ); ?></button>
					<button class="tablinks other-product-tab" onclick="openCity(event, 'others_theme')"><?php esc_html_e( 'All Themes', 'vw-tourism-pro' ); ?></button>
				</div>

				<!-- Tab content -->
				<div id="theme_activation" class="tabcontent open">

					<div class="theme_activation-wrapper">
						<div class="theme_activation_spinner">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin:auto;background:#fff;display:block;" width="200px" height="200px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
								<g transform="translate(50,50)">
								  <g transform="scale(0.7)">
								  <circle cx="0" cy="0" r="50" fill="#0f81d0"></circle>
								  <circle cx="0" cy="-28" r="15" fill="#cfd7dd">
								    <animateTransform attributeName="transform" type="rotate" dur="1s" repeatCount="indefinite" keyTimes="0;1" values="0 0 0;360 0 0"></animateTransform>
								  </circle>
								  </g>
								</g>
							</svg>
						</div>
						<div class="theme-wizard-key-status">
							<?php
								if ( $theme_validation_status === 'false' ) {
									esc_html_e('Theme License Key is not activated!','vw-tourism-pro');
								} else {
									esc_html_e('Theme License is Activated!','vw-tourism-pro');
								}
							?>
						</div>
						<?php $this->activation_page(); ?>
					</div>
				</div>
				<div id="demo_offer" class="tabcontent">
					<?php $this->wizard_page(); ?>
				</div>
				<div id="theme_info" class="tabcontent">
					<div class="col-left-inner">
						<h3><?php _e( 'VW Tourism Pro Information', 'vw-tourism-pro' ); ?></h3>
						<hr class="h3hr">
						<h4><?php _e( 'Theme Documentation', 'vw-tourism-pro' ); ?></h4>
						<p><?php _e( 'If you need any assistance regarding setting up and configuring the Theme, our documentation is there.', 'vw-tourism-pro' ); ?></p>
						<div class="info-link">
							<a href="<?php echo esc_url( vw_tourism_pro_THEME_DOC ); ?>" target="_blank"> <?php _e( 'Documentation', 'vw-tourism-pro' ); ?></a>
						</div>
						<hr>
						<h4><?php _e('Having Trouble, Need Support?', 'vw-tourism-pro'); ?></h4>
						<p> <?php _e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'vw-tourism-pro'); ?></p>
						<div class="info-link">
							<a href="<?php echo esc_url( vw_tourism_pro_SUPPORT ); ?>" target="_blank"><?php _e('Support Forum', 'vw-tourism-pro'); ?></a>
						</div>
						<hr>
						<h4><?php _e('Reviews & Testimonials', 'vw-tourism-pro'); ?></h4>
						<p> <?php _e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'vw-tourism-pro'); ?>  </p>
						<div class="info-link">
							<a href="<?php echo esc_url( vw_tourism_pro_REVIEW ); ?>" target="_blank"><?php _e('Reviews', 'vw-tourism-pro'); ?></a>
						</div>
					</div>
					<div class="col-right-inner">
						<div id="vw-demo-setup-guid">
							<h3><?php esc_html_e('Checkout our setup videos','vw-tourism-pro'); ?></h3><hr />
					<ul>
								<li>
									<a href="javascript:void(0);" doc-video-url="https://www.youtube.com/embed/nLB9E6BBBv0"><span class="dashicons dashicons-welcome-widgets-menus"></span>Setup Menu</a>
								</li>
								<li>
									<a href="javascript:void(0);" doc-video-url="https://www.youtube.com/embed/gjccwcAK47o"><span class="dashicons dashicons-email-alt"></span>Setup Contact Page</a>
								</li>
								<li>
									<a href="javascript:void(0);" doc-video-url="https://www.youtube.com/embed/7BvTpLh-RB8"><span class="dashicons dashicons-editor-table"></span>Setup Widgets</a>
								</li>
								<li>
									<a href="javascript:void(0);" doc-video-url="https://www.youtube.com/embed/Mox298rk0Qo"><span class="dashicons dashicons-share"></span>Setup Social Icon</a>
								</li>
								<li>
									<a href="javascript:void(0);" doc-video-url="https://www.youtube.com/embed/hLtS4sztAX4"><span class="dashicons dashicons-wordpress-alt"></span>Install WordPress Theme</a>
								</li>
								<li>
									<a href="javascript:void(0);" doc-video-url="https://www.youtube.com/embed/8UxkXkix-ic"><span class="dashicons dashicons-admin-users"></span>Create WordPress User</a>
								</li>
								<li>
									<a href="javascript:void(0);" doc-video-url="https://www.youtube.com/embed/1xGlbWOzQBg"><span class="dashicons dashicons-image-flip-horizontal"></span>Setup Slider</a>
								</li>
								<li>
									<a href="javascript:void(0);" doc-video-url="https://www.youtube.com/embed/pJFF_wjdvcA"><span class="dashicons dashicons-database"></span>WordPress Backup</a>
								</li>
								<li>
									<a href="javascript:void(0);" doc-video-url="https://www.youtube.com/embed/xXdnUTPG_6A"><span class="dashicons dashicons-instagram"></span>Connect Instagram</a>
								</li>
								<li>
									<a href="javascript:void(0);" doc-video-url="https://www.youtube.com/embed/leLBzmbvdQQ"><span class="dashicons dashicons-table-col-delete"></span>Fix 404 Error</a>
								</li>
								<li>
									<a href="javascript:void(0);" doc-video-url="https://www.youtube.com/embed/OPBONJBtO6g"><span class="dashicons dashicons-admin-page"></span>Setup Template Pages</a>
								</li>
								<li>
									<a href="javascript:void(0);" doc-video-url="https://www.youtube.com/embed/j7veMuhcXYA"><span class="dashicons dashicons-video-alt3"></span>Create a New Post</a>
								</li>
								<li>
									<a href="javascript:void(0);" doc-video-url="https://www.youtube.com/embed/ovcok3FPRto"><span class="dashicons dashicons-welcome-add-page"></span>Setup Shortcode Pages</a>
								</li>
								<li>
									<a href="javascript:void(0);" doc-video-url="https://www.youtube.com/embed/O6elK2kSHQw"><span class="dashicons dashicons-images-alt2"></span>Setup Gallery Plugin</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				</div>
				<div class="wz-video-model">
					<span class="dashicons dashicons-no"></span>
					<iframe width="100%" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<div id="plugins" class="tabcontent">
					<div class="wizard-plugin-wrapper">
						<div class="o-product-row">
							<div class="plugin-col ibtana-plugin-col">
								<img src="<?php echo esc_url(get_template_directory_uri().'/theme-wizard/assets/images/banner-772x250.png'); ?>">
								<h3><?php echo esc_html('Ibtana - WordPress Website Builder Plugin'); ?></h3>
								<p><?php echo esc_html('Ibtana Gutenberg Editor has ready made eye catching responsive templates build with custom blocks and options to extend Gutenberg’s default capabilities. You can easily import demo content for the block or templates with a single click'); ?></p>
								<?php
								$plugin_ins = Vw_Premium_Theme_Plugin_Activation_Settings::get_instance();
								$vw_theme_actions = $plugin_ins->recommended_actions;

								if ($vw_theme_actions): foreach ($vw_theme_actions as $key => $vw_theme_actionValue):
								?>
								<div class="ibtana-activation-btn">
									<?php echo wp_kses_post($vw_theme_actionValue['link']); ?>
								</div>
								<?php endforeach;
				        		endif; ?>
							</div>
							<div class="plugin-col">
								<img src="<?php echo esc_url(get_template_directory_uri().'/theme-wizard/assets/images/Ibtana-ecommerce-banner.png'); ?>">

								<h3><?php echo esc_html('Ibtana – Woocommerce Product Addons'); ?></h3>
								<p><?php echo esc_html('Ibtana – Ecommerce Product Addons is excellent for designing a highly customized product page that shows your products in a more prominent and interesting way. With these product add ons, creating unique product pages is now possible.'); ?></p>
								<a href="<?php echo esc_url('https://www.vwthemes.com/plugins/woocommerce-product-add-ons/'); ?>" target="_blank"><?php echo esc_html('Buy Now'); ?></a>
							</div>
							<div class="plugin-col">
								<img src="<?php echo esc_url(get_template_directory_uri().'/theme-wizard/assets/images/mega-menu.png'); ?>">

								<h3><?php echo esc_html('Ibtana- Mega Menu Addon'); ?></h3>
								<p><?php echo esc_html('View our mega menu demos or start the setup wizard which will guide you through all the steps to set up your menus.'); ?></p>
								<a href="<?php echo esc_url('https://www.vwthemes.com/plugins/woocommerce-product-add-ons/'); ?>" target="_blank"><?php echo esc_html('Buy Now'); ?></a>
							</div>
							<div class="plugin-col">
								<img src="<?php echo esc_url(get_template_directory_uri().'/theme-wizard/assets/images/VWThemes_banner_plugin.png'); ?>">
								<h3><?php echo esc_html('Title Banner Image Plugin'); ?></h3>
								<p><?php echo esc_html('If you are interested in adding the banner images, you check VW Title Banner Plugin. Its main speciality is that it permits user the addition of banner image on post, custom post or any page. '); ?></p>
								<a href="<?php echo esc_url('https://www.vwthemes.com/premium-plugin/vw-title-banner-plugin/'); ?>" target="_blank"><?php echo esc_html('Buy Now'); ?></a>
							</div>

							<div class="plugin-col">
								<img src="<?php echo esc_url(get_template_directory_uri().'/theme-wizard/assets/images/gallery_plugin_banner.png'); ?>">

								<h3><?php echo esc_html('VW Gallery Images Plugin'); ?></h3>
								<p><?php echo esc_html('The VW Gallery Plugin is an amazing WordPress gallery plugin. It helps you in creating the elegant gallery within few minutes. The VW Gallery plugin offers the advantage of displaying multiple galleries on a single page or post.'); ?></p>
								<a href="<?php echo esc_url('https://www.vwthemes.com/premium-plugin/vw-gallery-plugin/'); ?>" target="_blank"><?php echo esc_html('Buy Now'); ?></a>
							</div>

						</div>
					</div>
				</div>
				<div id="others_theme" class="tabcontent">
					<script>

						var data_post={"para":"1"};

					    jQuery.ajax({
					      method: "POST",
					      url: "https://www.vwthemes.com/wp-json/ibtana-licence/v2/get_modal_contents",
					      data: JSON.stringify(data_post),
					      dataType: 'json',
					      contentType: 'application/json',
					    }).done(function( data ) {
					    	/*console.log(data);*/
					    	var premium_data = data.data.products;
					    	for (var i = 0; i < premium_data.length; i++) {
						          var premium_product = premium_data[i];
						          var card_content = `<div class="o-products-col" data-id="`+premium_product.id+`">
						          	<div class="o-products-image">
						          		<img src="`+premium_product.image+`">
						          	</div>
						          	<h3>`+premium_product.title+`</h3>
						          	<a href="`+premium_product.permalink+`" target="_blank">Buy Now</a>
						          	<a href="`+premium_product.demo_url+`" target="_blank">View Demo</a>
						          </div>`;
						        jQuery('.wz-spinner-wrap').css('display','none');
	          					jQuery('#other-products .o-product-row').append(card_content);
	        				}

	        				var premium_category = data.data.sub;
	        				var active_class=""
	        				/*console.log(premium_category.length);*/
					    	for (let i = 0; i < premium_category.length; i++) {
					    		if(i==0){
					    			active_class="active";
					    		}else{
					    			active_class="";
					    		}
				    			let premium_product = premium_category[i];
					          	let card_content = `<li data-ids="`+premium_product.product_ids+`" onclick="other_products(this);" class="`+active_class+`">
					          		`+premium_product.name+`<span class="badge badge-info">`+premium_product.product_ids.length+`</span>
					          	</li>`;
          						jQuery('.o-product-col-1 ul').append(card_content);
					    	}
					    });

					    function other_products(content){

					    	jQuery('.o-product-col-1 ul li').attr('class','');
					        content.classList.add("active");
				            var data_ids = jQuery(content).attr('data-ids');

				            var id_arr = data_ids.split(',');
				            jQuery('.o-product-row .o-products-col[data-id]').hide();
				            for (var i = 0; i < id_arr.length; i++) {
				                var single_id = id_arr[i];
				                jQuery('.o-product-row .o-products-col[data-id="'+single_id+'"]').show();
				            }

					    }

					</script>
					<div id="other-products">
						<div class="wz-spinner-wrap">
							<div class="lds-dual-ring"></div>
						</div>
						<div class="o-product-main-row">
							<div class="o-product-col-1">
								<ul>

								</ul>
							</div>
							<div class="o-product-col-2">
								<div class="social-theme-search">
				                    <input class="themesearchinput" type="text" placeholder="Search Theme Here">
				                </div>
								<div class="o-product-row" style="clear: both;">

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	<?php }


	// Add a Custom CSS file to WP Admin Area
	public function vw_tourism_pro_admin_theme_style() {
		wp_enqueue_style( 'vw-tourism-pro-font', $this->vw_tourism_pro_admin_font_url(), array() );
		wp_enqueue_style('custom-admin-style', get_template_directory_uri() . '/theme-wizard/getstarted/getstart.css');
		//( 'tab', get_template_directory_uri() . '/theme-wizard/getstarted/js/tab.js' );
	}

	// Theme Font URL
	public function vw_tourism_pro_admin_font_url() {
		$font_url = '';
		$font_family = array();
		$font_family[] = 'Muli:300,400,600,700,800,900';

		$query_args = array(
			'family'	=> urlencode(implode('|',$font_family)),
		);
		$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
		return $font_url;
	}
}
