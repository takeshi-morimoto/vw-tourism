<?php
if ( ! class_exists( 'Vw_Premium_Theme_Plugin_Activation_Settings' ) ) {
	/**
	 * Vw_Theme_Plugin_Activation_Settings initial setup
	 *
	 * @since 1.6.2
	 */


	class Vw_Premium_Theme_Plugin_Activation_Settings {

        private static $instance;

				protected $action_count = '';
				protected $recommended_actions = '';

        /** Initiator **/
        public static function get_instance() {
          if ( ! isset( self::$instance ) ) {
            self::$instance = new self();
          }
          return self::$instance;
        }

        /*  Constructor */
        public function __construct() {

            add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
            // ---------- Ibtana Plugin Activation -------
            add_filter( 'vw_tourism_pro_vw_theme_recommended_plugins', array($this, 'vw_tourism_pro_recommended_plugins_array') );

            $actions                   = $this->vw_tourism_pro_get_recommended_actions();
            $this->action_count        = $actions['count'];
            $this->recommended_actions = $actions['actions'];
        }

        public function vw_tourism_pro_recommended_plugins_array($plugins){
            $plugins[] = array(
                'name'     => esc_html__('Ibtana - WordPress Website Builder', 'vw-tourism-pro'),
                'slug'     => 'ibtana-visual-editor',
                'function'     => 'Ibtana_Visual_Editor_Menu_Class',
                'desc'     => esc_html__('it is recommended that you install the Contact Form 7 plugin to show contact form on pages', 'vw-tourism-pro'),
            );
            // $plugins[] = array(
            //     'name'     => esc_html__('Ibtana - Ecommerce Product Addons', 'vw-tourism-pro'),
            //     'slug'     => 'ibtana-ecommerce-product-addons',
            //     'function'     => 'IEPA_Submenu',
            //     'desc'     => esc_html__('it is recommended that you install the Contact Form 7 plugin to show contact form on pages', 'vw-tourism-pro'),
            // );
            return $plugins;
        }

        public function enqueue_scripts() {
            wp_enqueue_script('updates');
            wp_register_script( 'vw-theme-plugin-activation-script', get_template_directory_uri() . '/theme-wizard/assets/js/plugin-activation.js', array('jquery') );
            wp_localize_script('vw-theme-plugin-activation-script', 'vw_tourism_pro_activate_plugin',
                array(
                    'installing' => esc_html__('Installing', 'vw-tourism-pro'),
                    'activating' => esc_html__('Activating', 'vw-tourism-pro'),
                    'error' => esc_html__('Error', 'vw-tourism-pro'),
                    'ajax_url' => esc_url(admin_url('admin-ajax.php')),
                    'ibtana_admin_url' => esc_url(admin_url('admin.php?page=ibtana-visual-editor'))
                )
            );
            wp_enqueue_script( 'vw-theme-plugin-activation-script' );

        }

        // --------- Plugin Actions ---------
        public function vw_tourism_pro_get_recommended_actions() {

            $act_count           = 0;
            $actions_todo = get_option( 'recommending_actions', array());

            $plugins = $this->vw_tourism_pro_get_recommended_plugins();

            if ($plugins) {
                foreach ($plugins as $key => $plugin) {
                    $action = array();
                    if (!isset($plugin['slug'])) {
                        continue;
                    }

                    $action['id']   = 'install_' . $plugin['slug'];
                    $action['desc'] = '';
                    if (isset($plugin['desc'])) {
                        $action['desc'] = $plugin['desc'];
                    }

                    $action['name'] = '';
                    if (isset($plugin['name'])) {
                        $action['title'] = $plugin['name'];
                    }

                    $link_and_is_done  = $this->vw_tourism_pro_get_plugin_buttion($plugin['slug'], $plugin['name'], $plugin['function']);
                    $action['link']    = $link_and_is_done['button'];
                    $action['is_done'] = $link_and_is_done['done'];
                    if (!$action['is_done'] && (!isset($actions_todo[$action['id']]) || !$actions_todo[$action['id']])) {
                        $act_count++;
                    }
                    $recommended_actions[] = $action;
                    $actions_todo[]        = array('id' => $action['id'], 'watch' => true);
                }
                return array('count' => $act_count, 'actions' => $recommended_actions);
            }

        }

        public function vw_tourism_pro_get_recommended_plugins() {

            $plugins = apply_filters('vw_tourism_pro_vw_theme_recommended_plugins', array());
            return $plugins;
        }

        public function vw_tourism_pro_get_plugin_buttion($slug, $name, $function) {
                $is_done      = false;
                $button_html  = '';
                $is_installed = $this->vw_tourism_pro_is_plugin_installed($slug);
                $plugin_path  = $this->vw_tourism_pro_get_plugin_basename_from_slug($slug);
                $is_activeted = (class_exists($function)) ? true : false;
                if (!$is_installed) {
                    $plugin_install_url = add_query_arg(
                        array(
                            'action' => 'install-plugin',
                            'plugin' => $slug,
                        ),
                        self_admin_url('update.php')
                    );
                    $plugin_install_url = wp_nonce_url($plugin_install_url, 'install-plugin_' . esc_attr($slug));
                    $button_html        = sprintf('<a class="vw-theme-plugin-install install-now button-secondary button" data-slug="%1$s" href="%2$s" aria-label="%3$s" data-name="%4$s">%5$s</a>',
                        esc_attr($slug),
                        esc_url($plugin_install_url),
                        sprintf(esc_html__('Install %s Now', 'vw-tourism-pro'), esc_html($name)),
                        esc_html($name),
                        esc_html__('Install & Activate', 'vw-tourism-pro')
                    );
                } elseif ($is_installed && !$is_activeted) {

                    $plugin_activate_link = add_query_arg(
                        array(
                            'action'        => 'activate',
                            'plugin'        => rawurlencode($plugin_path),
                            'plugin_status' => 'all',
                            'paged'         => '1',
                            '_wpnonce'      => wp_create_nonce('activate-plugin_' . $plugin_path),
                        ), self_admin_url('plugins.php')
                    );

                    $button_html = sprintf('<a class="vw-theme-plugin-activate activate-now button-primary button" data-slug="%1$s" href="%2$s" aria-label="%3$s" data-name="%4$s">%5$s</a>',
                        esc_attr($slug),
                        esc_url($plugin_activate_link),
                        sprintf(esc_html__('Activate %s Now', 'vw-tourism-pro'), esc_html($name)),
                        esc_html($name),
                        esc_html__('Activate', 'vw-tourism-pro')
                    );
                } elseif ($is_activeted) {
                    $button_html = sprintf('<div class="action-link button disabled"><span class="dashicons dashicons-yes"></span> %s</div>', esc_html__('Active', 'vw-tourism-pro'));
                    $is_done     = true;
                }

                return array('done' => $is_done, 'button' => $button_html);
            }
        public function vw_tourism_pro_is_plugin_installed($slug) {
            $installed_plugins = $this->vw_tourism_pro_get_installed_plugins(); // Retrieve a list of all installed plugins (WP cached).
            $file_path         = $this->vw_tourism_pro_get_plugin_basename_from_slug($slug);
            return (!empty($installed_plugins[$file_path]));
        }
        public function vw_tourism_pro_get_plugin_basename_from_slug($slug) {
            $keys = array_keys($this->vw_tourism_pro_get_installed_plugins());
            foreach ($keys as $key) {
                if (preg_match('|^' . $slug . '/|', $key)) {
                    return $key;
                }
            }
            return $slug;
        }

        public function vw_tourism_pro_get_installed_plugins() {

            if (!function_exists('get_plugins')) {
                require_once ABSPATH . 'wp-admin/includes/plugin.php';
            }

            return get_plugins();
        }

    }
}
/**
 * Kicking this off by calling 'get_instance()' method
 */
Vw_Premium_Theme_Plugin_Activation_Settings::get_instance();
