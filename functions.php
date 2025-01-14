<?php
/**
 * vw-tourism-pro functions and definitions
 *
 * @package vw-tourism-pro
 */

if ( ! function_exists( 'vw_tourism_pro_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function vw_tourism_pro_setup() {
	$GLOBALS['content_width'] = apply_filters( 'vw_tourism_pro_content_width', 640 );
	if ( ! isset( $content_width ) ) $content_width = 640;
	load_theme_textdomain( 'vw-tourism-pro', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'custom-header' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );

	add_theme_support( 'custom-logo', array(
		'height'      => 150,
		'width'       => 150,
		'flex-height' => true,
	) );
	add_image_size('vw-tourism-pro-homepage-thumb',240,145,true);
	register_nav_menus( array(
		'primary'   => __( 'Primary Menu', 'vw-tourism-pro' ),
		'footer1'   => __( 'Footer Menu1', 'vw-tourism-pro' ),
		'footer2'   => __( 'Footer Menu2', 'vw-tourism-pro' ),
) );
	add_theme_support( 'custom-background', array(
		'default-color' => 'f1f1f1'
	) );
	add_editor_style( array( 'assets/css/editor-style.css') );
}
endif;
add_action( 'after_setup_theme', 'vw_tourism_pro_setup' );

/* Theme Widgets Setup */
function vw_tourism_pro_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'vw-tourism-pro' ),
		'description'   => __( 'Appears on blog page sidebar', 'vw-tourism-pro' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'vw-tourism-pro' ),
		'description'   => __( 'Appears on page sidebar', 'vw-tourism-pro' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Column 1', 'vw-tourism-pro' ),
		'description'   => __( 'Appears on footer', 'vw-tourism-pro' ),
		'id'            => 'footer-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Column 2', 'vw-tourism-pro' ),
		'description'   => __( 'Appears on footer', 'vw-tourism-pro' ),
		'id'            => 'footer-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Column 3', 'vw-tourism-pro' ),
		'description'   => __( 'Appears on footer', 'vw-tourism-pro' ),
		'id'            => 'footer-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Column 4', 'vw-tourism-pro' ),
		'description'   => __( 'Appears on footer', 'vw-tourism-pro' ),
		'id'            => 'footer-4',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Single Blog Sidebar', 'vw-tourism-pro' ),
		'description'   => __( 'Appears on Single blog page sidebar', 'vw-tourism-pro' ),
		'id'            => 'single-blog-sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'vw_tourism_pro_widgets_init' );

/* Theme Font URL */
function vw_tourism_pro_font_url() {
	$font_url = '';
	$font_family = array();
	$font_family[] = 'PT Sans:300,400,600,700,800,900';
	$font_family[] = 'Roboto:400,700';
	$font_family[] = 'Roboto Condensed:400,700';
	$font_family[] = 'Open Sans';
	$font_family[] = 'Overpass';
	$font_family[] = 'Montserrat:300,400,600,700,800,900';
	$font_family[] = 'Playball:300,400,600,700,800,900';
	$font_family[] = 'Alegreya:300,400,600,700,800,900';
	$font_family[] = 'Julius Sans One';
	$font_family[] = 'Arsenal';
	$font_family[] = 'Slabo';
	$font_family[] = 'Lato';
	$font_family[] = 'Overpass Mono';
	$font_family[] = 'Source Sans Pro';
	$font_family[] = 'Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Merriweather';
	$font_family[] = 'Rubik';
	$font_family[] = 'Lora';
	$font_family[] = 'Ubuntu';
	$font_family[] = 'Cabin';
	$font_family[] = 'Arimo';
	$font_family[] = 'Playfair Display';
	$font_family[] = 'Quicksand';
	$font_family[] = 'Padauk';
	$font_family[] = 'Muli';
	$font_family[] = 'Inconsolata';
	$font_family[] = 'Bitter';
	$font_family[] = 'Pacifico';
	$font_family[] = 'Indie Flower';
	$font_family[] = 'VT323';
	$font_family[] = 'Dosis';
	$font_family[] = 'Frank Ruhl Libre';
	$font_family[] = 'Fjalla One';
	$font_family[] = 'Oxygen';
	$font_family[] = 'Arvo';
	$font_family[] = 'Noto Serif';
	$font_family[] = 'Lobster';
	$font_family[] = 'Crimson Text';
	$font_family[] = 'Yanone Kaffeesatz';
	$font_family[] = 'Anton';
	$font_family[] = 'Libre Baskerville';
	$font_family[] = 'Bree Serif';
	$font_family[] = 'Gloria Hallelujah';
	$font_family[] = 'Josefin Sans';
	$font_family[] = 'Abril Fatface';
	$font_family[] = 'Varela Round';
	$font_family[] = 'Vampiro One';
	$font_family[] = 'Shadows Into Light';
	$font_family[] = 'Cuprum';
	$font_family[] = 'Rokkitt';
	$font_family[] = 'Vollkorn';
	$font_family[] = 'Francois One';
	$font_family[] = 'Orbitron';
	$font_family[] = 'Patua One';
	$font_family[] = 'Acme';
	$font_family[] = 'Satisfy';
	$font_family[] = 'Josefin Slab';
	$font_family[] = 'Quattrocento Sans';
	$font_family[] = 'Architects Daughter';
	$font_family[] = 'Russo One';
	$font_family[] = 'Monda';
	$font_family[] = 'Righteous';
	$font_family[] = 'Lobster Two';
	$font_family[] = 'Hammersmith One';
	$font_family[] = 'Courgette';
	$font_family[] = 'Permanent Marker';
	$font_family[] = 'Cherry Swash';
	$font_family[] = 'Cormorant Garamond';
	$font_family[] = 'Poiret One';
	$font_family[] = 'BenchNine';
	$font_family[] = 'Economica';
	$font_family[] = 'Handlee';
	$font_family[] = 'Cardo';
	$font_family[] = 'Alfa Slab One';
	$font_family[] = 'Averia Serif Libre';
	$font_family[] = 'Cookie';
	$font_family[] = 'Chewy';
	$font_family[] = 'Great Vibes';
	$font_family[] = 'Coming Soon';
	$font_family[] = 'Philosopher';
	$font_family[] = 'Days One';
	$font_family[] = 'Kanit';
	$font_family[] = 'Shrikhand';
	$font_family[] = 'Tangerine';
	$font_family[] = 'IM Fell English SC';
	$font_family[] = 'Boogaloo';
	$font_family[] = 'Bangers';
	$font_family[] = 'Fredoka One';
	$font_family[] = 'Bad Script';
	$font_family[] = 'Volkhov';
	$font_family[] = 'Shadows Into Light Two';
	$font_family[] = 'Marck Script';
	$font_family[] = 'Sacramento';
	$font_family[] = 'Poppins';
	$font_family[] = 'PT Serif';
	$font_family[] = 'Work Sans';
	$query_args = array(
		'family'	=> urlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
}

/* Theme enqueue scripts */
function vw_tourism_pro_scripts() {
	wp_enqueue_style( 'vw-tourism-pro-font', vw_tourism_pro_font_url(), array() );
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri().'/assets/css/bootstrap.min.css' );
	wp_enqueue_style( 'vw-tourism-pro-basic-style', get_stylesheet_uri() );
	wp_style_add_data( 'vw-tourism-pro-style', 'rtl', 'replace' );

	/* Inline style sheet */
	require get_parent_theme_file_path( '/inline_style.php' );
	wp_add_inline_style( 'vw-tourism-pro-basic-style',$custom_css );

	if(is_rtl()){
	    wp_enqueue_style( 'rtl-style', get_template_directory_uri().'/rtl-style.css',true, null,'all');
	    wp_add_inline_style( 'rtl-style',$custom_css );
	    wp_enqueue_script( 'vw-tourism-pro-customscripts-rtl', get_template_directory_uri() . '/assets/js/custom-rtl.js', array('jquery'),'', true );
  	}

  	else{
	    // ---------- CSS Enqueue -----------
	    if(is_front_page() || is_home()){
	      wp_enqueue_style( 'home-page-style', get_template_directory_uri().'/assets/css/main-css/home-page.css',true, null,'all');
	      wp_add_inline_style( 'home-page-style',$custom_css );
	    }else{
	      wp_enqueue_style( 'other-page-style', get_template_directory_uri() . '/assets/css/main-css/other-pages.css',true, null,'all');
	      wp_add_inline_style( 'other-page-style',$custom_css );
	    }
	    if('post' == get_post_type() && is_home()){
	      wp_enqueue_style( 'other-page-style', get_template_directory_uri() . '/assets/css/main-css/other-pages.css',true, null,'all');
	      wp_add_inline_style( 'other-page-style',$custom_css );
	    }
	    wp_enqueue_style( 'header-footer-style', get_template_directory_uri().'/assets/css/main-css/header-footer.css',true, null,'all' );
		// wp_enqueue_style( 'vw-tourism-pro', get_template_directory_uri().'/assets/css/main-css/home-page.css',true, null,'all' );
	    wp_enqueue_style( 'responsive-style', get_template_directory_uri().'/assets/css/main-css/mobile-main.css',true, null,'screen and (max-width: 3000px) and (min-width: 320px)' );

	    wp_add_inline_style( 'header-footer-style',$custom_css );
	    wp_add_inline_style( 'responsive-media-style',$custom_css );
  	}

  	if ( function_exists( 'is_amp_endpoint' ) && is_amp_endpoint() ) {
	    wp_enqueue_style( 'amp-style', get_template_directory_uri().'/assets/css/main-css/amp-style.css',true, null,'all' );
	}else{
		wp_enqueue_style( 'animation-wow', get_template_directory_uri().'/assets/css/animate.css' );
		wp_enqueue_style( 'owl-carousel-style', get_template_directory_uri().'/assets/css/owl.carousel.css' );
		wp_enqueue_style( 'swipper-slider-style', get_template_directory_uri().'/assets/css/swiper-bundle.min.css' );
	}

	// wp_enqueue_style( 'animation-wow', get_template_directory_uri().'/assets/css/animate.css' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/assets/css/fontawesome-all.min.css' );
	wp_enqueue_style( 'effect', get_template_directory_uri().'/assets/css/effect.css' );
	wp_enqueue_style( 'slick-css', get_template_directory_uri().'/assets/css/slick.css' );

	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array('jquery'), true);
	wp_enqueue_script( 'tether', get_template_directory_uri() . '/assets/js/tether.js', array('jquery'), '',true);
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js',array('jquery'),'',true);
	wp_enqueue_script( 'bootstrap-notify-js', get_template_directory_uri() . '/assets/js/bootstrap-notify.min.js', array( 'bootstrap' ) );
	// wp_enqueue_script( 'superfsh', get_template_directory_uri() . '/assets/js/jquery.superfish.js',array('jquery'),'',true);
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.js',array('jquery'),'',true);
	// wp_enqueue_script( 'smooth-scroll', get_template_directory_uri() . '/assets/js/SmoothScroll.js',array('jquery'),'',true);
	wp_enqueue_style( 'jquery-ui-min-css', get_template_directory_uri().'/assets/css/jquery-ui.min.css' );
	// wp_enqueue_style( 'animate-min-css', get_template_directory_uri().'/assets/css/animate.min.css' );
	wp_enqueue_script( 'slick-carousel', get_template_directory_uri() . '/assets/js/slick.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'swipper-slider', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'jquery-ui-slider' );
	wp_enqueue_script('jquery-ui-touch-punch', get_template_directory_uri() . '/assets/js/jquery.ui.touch-punch.min.js', array('jquery-ui-slider'), '0.2.3', true);
	wp_enqueue_script( 'jquery-easypiechart', get_template_directory_uri() . '/assets/js/jquery.easypiechart.min.js', array( 'jquery' ) );


	wp_register_script( 'vw-tourism-pro-customscripts', get_template_directory_uri() . '/assets/js/custom.js', array('jquery') );



	global $wpdb;
	$packages_price_max_query = "SELECT MAX( CAST( $wpdb->postmeta.meta_value AS SIGNED ) ) AS packages_max_price FROM $wpdb->postmeta WHERE meta_key='%s'";
	$packages_meta_price_max = $wpdb->get_row( $wpdb->prepare( $packages_price_max_query, 'pkg_regular_price' ) );

	wp_localize_script(
		'vw-tourism-pro-customscripts',
		'vw_tourism_pro_customscripts_obj',
		array(
			'is_home' =>  ( is_home() || is_front_page() ),
			'home_url' =>  home_url(),
			'ajax_url' =>  admin_url('admin-ajax.php'),
			'is_rtl' => is_rtl(),
			'packages_max_price'  =>  $packages_meta_price_max->packages_max_price,
			'package_currency_symbol' => get_theme_mod('vw_tourism_pro_packages_currency', '$')
		)
	);
	wp_enqueue_script( 'vw-tourism-pro-customscripts' );
	 wp_enqueue_script( 'animation-wow', get_template_directory_uri() . '/assets/js/wow.min.js', array( 'jquery' ) );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_enqueue_style('vw-tourism-pro-ie', get_template_directory_uri().'/assets/css/ie.css', array('vw-tourism-pro-basic-style'));
	wp_style_add_data( 'vw-tourism-pro-ie', 'conditional', 'IE' );
}
add_action( 'wp_enqueue_scripts', 'vw_tourism_pro_scripts' );

function vw_tourism_pro_admin_scripts_enqueue() {
	wp_enqueue_script( 'admin-script', get_template_directory_uri() . '/assets/js/admin_script.js',array('jquery'),'',true);
}
add_action( 'admin_enqueue_scripts', 'vw_tourism_pro_admin_scripts_enqueue' );

/* Implement the Custom Header feature. */
require get_parent_theme_file_path( '/inc/custom-header.php' );
/* Custom template tags for this theme. */
require get_parent_theme_file_path( '/inc/template-tags.php' );
/* Customizer additions. */
require get_parent_theme_file_path( '/inc/customize/customizer.php' );

 //about us
require get_template_directory() . '/inc/widget/about-us-widget.php';
// Contact-Widgets
require get_parent_theme_file_path( 'inc/widget/contact-widget.php');
// social-widgets
require get_parent_theme_file_path( 'inc/widget/socail-widget.php');

//Filter
require get_parent_theme_file_path('custom-filter.php' );
/**
 * Functions which enhance the theme by hooking into WordPress
*/
require get_parent_theme_file_path( 'inc/custom-functions.php');

require get_template_directory().'/inc/verify_theme_version.php';
/* Theme Wizard */
require get_template_directory() . '/theme-wizard/config.php';
require get_parent_theme_file_path('/theme-wizard/plugin-activation.php' );
/* URL DEFINES */
define('vw_tourism_pro_SITE_URL','https://www.vwthemes.com/');
/* Theme Credit link */
function vw_tourism_pro_credit_link() {
	// echo esc_html_e(' Design & Developed by','vw-tourism-pro'). "<a href=".esc_url(vw_tourism_pro_SITE_URL)." target='_blank'> VW Themes</a>";
}
/*Radio Button sanitization*/
function vw_tourism_pro_sanitize_choices( $input, $setting ) {
	global $wp_customize;
	$control = $wp_customize->get_control( $setting->id );
	if ( array_key_exists( $input, $control->choices ) ) {
		return $input;
	} else {
		return $setting->default;
	}
}

add_filter( 'excerpt_more', 'vw_tourism_pro_excerpt_more' );

define('vw_tourism_pro_THEME_DOC','https://www.vwthemesdemo.com/docs/vw-tourism-pro/');
define('vw_tourism_pro_SUPPORT','https://www.vwthemes.com/support/vw-theme/');
define('vw_tourism_pro_FAQ','https://www.vwthemes.com/faqs/');
define('vw_tourism_pro_CONTACT','https://www.vwthemes.com/contact/');
define('vw_tourism_pro_REVIEW','https://www.vwthemes.com/topic/reviews-and-testimonials/');

define('vw_tourism_pro_banner_link','https://www.vwthemes.com/premium-plugin/vw-title-banner-plugin/');
define('vw_tourism_pro_social_media_plugin','https://www.vwthemes.com/free-plugin/vw-social-media/');
define('vw_tourism_pro_preloader_plugin','https://www.vwthemes.com/free-plugin/vw-preloader/');
define('vw_tourism_pro_accordion_plugin','https://www.vwthemes.com/free-plugin/vw-accordion/');
define('vw_tourism_pro_gallery_link','https://www.vwthemes.com/premium-plugin/vw-gallery-plugin/');
define('vw_tourism_pro_footer_link','https://www.youtube.com/watch?v=7BvTpLh-RB8');

define( 'IBTANA_THEME_LICENCE_ENDPOINT', 'https://preview.vwthemesdemo.com/old_website/wp-json/ibtana-licence/v2/' );
define( 'SHOPIFY_THEME_LICENCE_ENDPOINT', 'https://license.vwthemes.com/api/public/' );

//-------- Bundle Notice ---------
add_action( 'admin_notices', 'vw_theme_bundle_admin_notice' );
function vw_theme_bundle_admin_notice() {
       ?>
    <div class="notice bundle-notice is-dismissible">
      <div class="theme_box">
        <h3><?php echo esc_html('Thank You For Purchasing VW Tourism Pro Theme','vw-tourism-pro'); ?></h3>
        <p><?php echo esc_html('Get our all','sirat-pro'); ?>
        <strong><?php echo esc_html('120+ Premium Themes','vw-tourism-pro'); ?></strong>
        <?php echo esc_html('worth $7021 With Our','vw-tourism-pro'); ?>
        <strong><?php echo esc_html('WP Theme Bundle','vw-tourism-pro'); ?></strong>
        <?php echo esc_html('in just $89.','vw-tourism-pro'); ?></p>

      </div>
      <div class="bubdle_button">
        <a href="https://www.vwthemes.com/premium/all-themes/" class="button button-primary button-hero" target="_blank" rel="noopener"><?php echo esc_html('Get Bundle at $89','vw-tourism-pro'); ?></a>
      </div>
    </div>
   <?php
}

add_action('switch_theme', 'vw_tourism_pro_deactivate');
function vw_tourism_pro_deactivate() {
  ThemeWhizzie::remove_the_theme_key();
  ThemeWhizzie::set_the_validation_status('false');
}

define('CUSTOM_TEXT_DOMAIN', 'vw-book-store');
add_filter( 'woocommerce_add_to_cart_fragments', 'vw_tourism_pro_wc_refresh_mini_cart_count');
function vw_tourism_pro_wc_refresh_mini_cart_count( $fragments ) {
  ob_start();
  $items_count = WC()->cart->get_cart_contents_count();
  ?>
    <span class="cart-value"><?php echo $items_count ? $items_count : '0'; ?></span>
  <?php
  $fragments['.cart-value'] = ob_get_clean();
  return $fragments;
}

add_filter('loop_shop_columns', 'loop_columns', 999);
if (!function_exists('loop_columns')) {
  function loop_columns() {
    return 3; // 3 products per row
  }
}

add_action('wp_footer', 'single_added_to_cart_event');

add_filter( 'intermediate_image_sizes', 'remove_default_img_sizes', 10, 1);

function remove_default_img_sizes( $sizes ) {
  $targets = ['thumbnail', 'medium', 'medium_large', 'large', '1536x1536', '2048x2048'];

  foreach($sizes as $size_index=>$size) {
    if(in_array($size, $targets)) {
      unset($sizes[$size_index]);
    }
  }
  return $sizes;
}


function single_added_to_cart_event()
{
    if( isset($_POST['add-to-cart']) && isset($_POST['quantity']) ) {
        // Get added to cart product ID (or variation ID) and quantity (if needed)
        $quantity   = $_POST['quantity'];
        $product_id = isset($_POST['variation_id']) ? $_POST['variation_id'] : $_POST['add-to-cart'];

        // JS code goes here below
        ?>
        <script>
        jQuery(function($){
            alert('Product added to cart');
        });
        </script>
        <?php
    }
}

function enable_svg_support($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'enable_svg_support');

function fix_svg_preview($response, $attachment, $meta) {
    if ($response['mime'] === 'image/svg+xml') {
        $response['sizes'] = [
            'thumbnail' => [
                'url' => $response['url'],
                'width' => $response['width'],
                'height' => $response['height'],
            ],
        ];
    }
    return $response;
}
add_filter('wp_prepare_attachment_for_js', 'fix_svg_preview', 10, 3);

function get_page_id_by_title_global($pagename){
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

//custom rating code start
add_action( 'wp_enqueue_scripts', 'ci_comment_rating_styles' );
function ci_comment_rating_styles() {

  wp_enqueue_style( 'dashicons' );
  wp_enqueue_style( 'ci-comment-rating-styles' );
}

//Create the rating interface.
add_action( 'comment_form_logged_in_after', 'ci_comment_rating_rating_field' );
add_action( 'comment_form_after_fields', 'ci_comment_rating_rating_field' );
function ci_comment_rating_rating_field () {

	if ('tcp_package' == get_post_type()) { ?>
		<div class="rating-main-box">
			<label for="rating">Rating<span class="required ms-1"> :- </span></label>
		  <fieldset class="comments-rating">
		    <span class="rating-container">
		      <?php for ( $i = 5; $i >= 1; $i-- ) : ?>
		        <input class="single-room-rating" type="radio" id="rating-<?php echo esc_attr( $i ); ?>" name="rating" value="<?php echo esc_attr( $i ); ?>" /><label for="rating-<?php echo esc_attr( $i ); ?>"><?php echo esc_html( $i ); ?></label>
		      <?php endfor; ?>
		    </span>
		  </fieldset>
		</div>
  <?php }
}

//Save the rating submitted by the user.
add_action( 'comment_post', 'ci_comment_rating_save_comment_rating' );
function ci_comment_rating_save_comment_rating( $comment_id ) {
  if ( ( isset( $_POST['rating'] ) ) && ( '' !== $_POST['rating'] ) )
  $rating = intval( $_POST['rating'] );
  add_comment_meta( $comment_id, 'rating', $rating );
}

//Make the rating required.
add_filter( 'preprocess_comment', 'ci_comment_rating_require_rating' );
function ci_comment_rating_require_rating( $commentdata ) {
  if ( ! is_admin() && ( ! isset( $_POST['rating'] ) || 0 === intval( $_POST['rating'] ) ) && get_post_type($commentdata['comment_post_ID']) == 'tcp_package' )
  wp_die( __( 'Error: You did not add a rating. Hit the Back button on your Web browser and resubmit your comment with a rating.' ) );
  return $commentdata;
}

add_filter( 'get_comment_author_link', 'ci_comment_rating_display_after_author', 10, 3 );
function ci_comment_rating_display_after_author( $author_link, $comment_ID, $comment ) {

  // Check if the comment has a rating
  $rating = get_comment_meta( get_comment_ID(), 'rating', true );
	$stars = '';
  if ( $rating ) {
    $stars = '<span class="stars">';
    for ( $i = 1; $i <= $rating; $i++ ) {
      $stars .= '<span class="dashicons dashicons-star-filled"></span>';
    }
    $stars .= '</span>';
  }

	$final_html = '<div class="d-flex gap-4">
		<div class="author-name-custom">'.$author_link.'</div>
		<div class="comment-stars-custom">'.$stars.'</div>
	</div>
	';

  return $final_html;
}


//Display the rating on a submitted comment.
// add_filter( 'comment_text', 'ci_comment_rating_display_rating');
// function ci_comment_rating_display_rating( $comment_text ){
//
//   if ( $rating = get_comment_meta( get_comment_ID(), 'rating', true ) ) {
//     $stars = '<p class="stars">';
//     for ( $i = 1; $i <= $rating; $i++ ) {
//       $stars .= '<span class="dashicons dashicons-star-filled"></span>';
//     }
//     $stars .= '</p>';
//     $comment_text = $comment_text . $stars;
//     return $comment_text;
//   } else {
//     return $comment_text;
//   }
// }

//Get the average rating of a post.
function ci_comment_rating_get_average_ratings( $id ) {
  $comments = get_approved_comments( $id );

  if ( $comments ) {
    $i = 0;
    $total = 0;
    foreach( $comments as $comment ){
      $rate = get_comment_meta( $comment->comment_ID, 'rating', true );
      if( isset( $rate ) && '' !== $rate ) {
        $i++;
        $total += $rate;
      }
    }

    if ( 0 === $i ) {
      return false;
    } else {
      return round( $total / $i, 1 );
    }
  } else {
    return false;
  }
}

function comment_form_change_cookies_consent( $fields ) {
	$commenter = wp_get_current_commenter();
	$consent   = empty( $commenter['comment_author_email'] ) ? '' : ' checked="checked"';
	$fields['cookies'] = '<p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"' . $consent . ' />' .
					 '<label for="wp-comment-cookies-consent"> Your Review Will Be Posted Publicly One The Web.</label></p>';
	return $fields;
}
add_filter( 'comment_form_default_fields', 'comment_form_change_cookies_consent' );


//Display the average rating above the content.
add_filter( 'the_content', 'ci_comment_rating_display_average_rating' );
function ci_comment_rating_display_average_rating( $content ) {

  global $post;

  if ( false === ci_comment_rating_get_average_ratings( $post->ID ) ) {
    return $content;
  }

  $stars   = '';
  $average = ci_comment_rating_get_average_ratings( $post->ID );

  for ( $i = 1; $i <= $average + 1; $i++ ) {

    $width = intval( $i - $average > 0 ? 20 - ( ( $i - $average ) * 20 ) : 20 );

    if ( 0 === $width ) {
      continue;
    }

    $stars .= '<span style="overflow:hidden; width:' . $width . 'px" class="dashicons dashicons-star-filled"></span>';

    if ( $i - $average > 0 ) {
      $stars .= '<span style="overflow:hidden; position:relative; left:-' . $width .'px;" class="dashicons dashicons-star-empty"></span>';
    }
  }

  $custom_content  = '<p class="average-rating"> ' . $stars .'</p>';
  $custom_content .= $content;
  return $custom_content;
}

function update_post_rating_from_comments($comment_id) {
    // Get the comment
    $comment = get_comment($comment_id);
    $post_id = $comment->comment_post_ID;

    // Get all comments for the post
    $comments = get_comments(array('post_id' => $post_id, 'status' => 'approve'));

    // Calculate the average rating
    $total_rating = 0;
    $total_comments = 0;

    foreach ($comments as $comment) {
        $rating = get_comment_meta($comment->comment_ID, 'rating', true);
        if ($rating) {
            $total_rating += intval($rating);
            $total_comments++;
        }
    }

    if ($total_comments > 0) {
        $average_rating = $total_rating / $total_comments;
    } else {
        $average_rating = 0;
    }

    // Update post meta with the average rating
    update_post_meta($post_id, 'average_rating', $average_rating);
}
add_action('comment_post', 'update_post_rating_from_comments');
add_action('edit_comment', 'update_post_rating_from_comments');
add_action('delete_comment', 'update_post_rating_from_comments');

function custom_comment_form_defaults( $defaults ) {
    $defaults['title_reply'] = 'Leave a Comment';
	$defaults['label_submit'] = 'Leave a comment';
    return $defaults;
}

add_filter( 'comment_form_defaults', 'custom_comment_form_defaults' );


function vw_tourism_pro_popular_cuisines_section_shortcode() {
	ob_start();
	get_template_part( 'template-parts/home/section-popular-cuisines' );
	$output = ob_get_clean();
	return $output;
}
add_shortcode('popular-cuisines-sec', 'vw_tourism_pro_popular_cuisines_section_shortcode');

function vw_tourism_pro_popular_packages_section_shortcode() {
	ob_start();
	get_template_part( 'template-parts/home/section-popular-packages' );
	$output = ob_get_clean();
	return $output;
}
add_shortcode('popular-packages-sec', 'vw_tourism_pro_popular_packages_section_shortcode');

function vw_tourism_pro_testimonial_section_shortcode() {
	ob_start();
	get_template_part( 'template-parts/home/section-testimonial' );
	$output = ob_get_clean();
	return $output;
}
add_shortcode('testimonial-sec', 'vw_tourism_pro_testimonial_section_shortcode');

function vw_tourism_pro_destination_section_shortcode() {
	ob_start();
	get_template_part( 'template-parts/home/section-popular-destination' );
	$output = ob_get_clean();
	return $output;
}
add_shortcode('destination-sec', 'vw_tourism_pro_destination_section_shortcode');


add_filter( 'pre_get_posts', 'add_cpt_in_search_result' );

function add_cpt_in_search_result( $query ) {

    if ( $query->is_search ) {
    $query->set( 'post_type', array( 'tcp_package', 'post' ) );
    }

    return $query;
}

function get_packages_explore_content() {
    // Nonceの検証
    if ( ! isset( $_POST['get_packages_explore_content_nonce'] ) || 
         ! wp_verify_nonce( $_POST['get_packages_explore_content_nonce'], 'get_packages_explore_content_action' ) ) {
        wp_send_json_error( array( 'message' => 'セキュリティチェックに失敗しました。' ) );
        exit;
    }

    // POSTデータの取得
    $post_id = isset($_POST['post_id']) ? intval($_POST['post_id']) : 0;

    if ( ! $post_id ) {
        wp_send_json_error( array( 'message' => '無効な投稿IDです。' ) );
        exit;
    }

    // 残りの処理
    $args = array(
        'post_type' => 'tcp_explore',
        'p' => $post_id
    );

    $query = new WP_Query( $args );
    $response = array();

    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
            $query->the_post();

            // 必要なデータを取得
            $package_explore_meta_fields = get_post_meta( get_the_ID(), 'package_explore_meta_fields', true);
            $content = get_the_content();

            ob_start();
            ?>
            <p class="text-md-start text-center"><?php echo esc_html($content); ?></p>
            <div class="owl-carousel">
                <?php if (is_array($package_explore_meta_fields) && !empty($package_explore_meta_fields)) {
                    foreach ($package_explore_meta_fields as $package_explore) {
                        $image_url = esc_url($package_explore['image'] ?? '');
                        $text1 = esc_html($package_explore['text1'] ?? '');
                        $text2 = esc_html($package_explore['text2'] ?? '');
                        ?>
                        <div class="explore-inners">
                            <div class="explore-img">
                                <img style="border-radius: 10px;" src="<?php echo $image_url; ?>">
                            </div>
                            <div class="d-flex gap-2 mt-2">
                                <div class="explore-inner-box">
                                    <h6 class="explore-inner-title"><?php echo $text1; ?></h6>
                                    <h6 class="explore-inner-title"><?php echo $text2; ?></h6>
                                </div>
                            </div>
                        </div>
                    <?php }
                } ?>
            </div>
            <?php
            $html_content = ob_get_clean();

            $response = array(
                'post_id' => get_the_ID(),
                'html_content' => $html_content,
            );
        }
        wp_reset_postdata();
    }

    wp_send_json_success( $response );
    exit;
}

function custom_excerpt_length($length) {
    return 500; // 表示する語数をここで設定（100語に設定）
}

function vw_tourism_pro_excerpt_more($more) {
    return '...'; // 省略記号として「...」を表示
}

// カスタムフィールドに集合場所を追加して、予約メールに表示する
add_filter('mpa_email_tags', function ($tags, $email, $booking) {
    global $wpdb;

    // カスタムタグ "location" を追加
    $tags['location'] = function () use ($booking) {
        // 予約IDを取得
        $booking_id = $booking->getId();

        // 投稿IDをデータベースから取得
        $post_id = $wpdb->get_var(
            $wpdb->prepare(
                "SELECT post_id FROM {$wpdb->postmeta} WHERE meta_key = '_booking_id' AND meta_value = %d",
                $booking_id
            )
        );

        // 投稿IDが取得できない場合
        if (empty($post_id)) {
            return '集合場所は未設定です。';
        }

        // 集合場所のカスタムフィールドを取得
        $meeting_location = get_post_meta($post_id, 'meeting_location', true);

        // 値がない場合のデフォルト
        if (empty($meeting_location)) {
            $meeting_location = '集合場所は未設定です。';
        }

        return esc_html($meeting_location);
    };

    return $tags;
}, 10, 3);

add_action('mpa_before_send_email', function($email, $booking, $args) {
    error_log(print_r($booking, true)); // $booking オブジェクトを完全出力
}, 10, 3);

add_filter('excerpt_length', 'custom_excerpt_length');
add_action('wp_ajax_get_packages_explore_content','get_packages_explore_content');
add_action('wp_ajax_nopriv_get_packages_explore_content','get_packages_explore_content');