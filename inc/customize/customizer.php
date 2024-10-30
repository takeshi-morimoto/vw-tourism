<?php
/**
 * vw-tourism-pro Theme Customizer
 *
 * @package vw-tourism-pro
 */
/**
 * Loads custom control for layout settings
 */
function vw_tourism_pro_custom_controls() {
    require_once get_template_directory() . '/inc/customize/controls/admin/customize-texteditor-control.php';
     require_once get_template_directory() . '/inc/customize/controls/custom-controls.php';
     require_once get_template_directory() . '/inc/customize/controls/button-controls.php';

     // Inlcude the Alpha Color Picker control file.
     require_once get_template_directory() . '/inc/customize/controls/alpha-color-picker.php';
     get_stylesheet_directory_uri() . '/assets/js/alpha-color-picker.js';
     get_stylesheet_directory_uri() . '/assets/css/alpha-color-picker.css';

}
add_action( 'customize_register', 'vw_tourism_pro_custom_controls' );
/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function vw_tourism_pro_customize_register( $wp_customize ) {
    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

    $wp_customize->selective_refresh->add_partial( 'blogname', array(
        'selector' => '.logo a',
        'render_callback' => 'twentyfifteen_customize_partial_blogname',
    ) );
    $wp_customize->selective_refresh->add_partial( 'blogdescription', array(
        'selector' => '.site-description',
        'render_callback' => 'twentyfifteen_customize_partial_blogdescription',
    ) );

    $wp_customize->add_setting('vw_tourism_pro_display_title',array(
        'default' => 'false',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_tourism_pro_display_title',array(
        'type' => 'checkbox',
        'label' => __('Show Title','vw-tourism-pro'),
        'section' => 'title_tagline',
    ));
    $wp_customize->add_setting('vw_tourism_pro_display_tagline',array(
        'default' => 'false',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_tourism_pro_display_tagline',array(
        'type' => 'checkbox',
        'label' => __('Show Tagline','vw-tourism-pro'),
        'section' => 'title_tagline',
    ));
    //add home page setting pannel
    $wp_customize->add_panel( 'vw_tourism_pro_panel_id', array(
        'priority' => 10,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __( 'Theme Settings', 'vw-tourism-pro' ),
        'description' => __( 'Description of what this panel does.', 'vw-tourism-pro' ),
    ) );
    $font_array = array(
        '' => __( 'No Fonts', 'vw-tourism-pro' ),
        'Abril Fatface' => __( 'Abril Fatface', 'vw-tourism-pro' ),
        'Acme' => __( 'Acme', 'vw-tourism-pro' ),
        'Anton' => __( 'Anton', 'vw-tourism-pro' ),
        'Architects Daughter' => __( 'Architects Daughter', 'vw-tourism-pro' ),
        'Arimo' => __( 'Arimo', 'vw-tourism-pro' ),
        'Arsenal' => __( 'Arsenal', 'vw-tourism-pro' ),
        'Arvo' => __( 'Arvo', 'vw-tourism-pro' ),
        'Alegreya' => __( 'Alegreya', 'vw-tourism-pro' ),
        'Alfa Slab One' => __( 'Alfa Slab One', 'vw-tourism-pro' ),
        'Averia Serif Libre' => __( 'Averia Serif Libre', 'vw-tourism-pro' ),
        'Bangers' => __( 'Bangers', 'vw-tourism-pro' ),
        'Boogaloo' => __( 'Boogaloo', 'vw-tourism-pro' ),
        'Bad Script' => __( 'Bad Script', 'vw-tourism-pro' ),
        'Bitter' => __( 'Bitter', 'vw-tourism-pro' ),
        'Bree Serif' => __( 'Bree Serif', 'vw-tourism-pro' ),
        'BenchNine' => __( 'BenchNine', 'vw-tourism-pro' ),
        'Cabin' => __( 'Cabin', 'vw-tourism-pro' ),
        'Cardo' => __( 'Cardo', 'vw-tourism-pro' ),
        'Courgette' => __( 'Courgette', 'vw-tourism-pro' ),
        'Cherry Swash' => __( 'Cherry Swash', 'vw-tourism-pro' ),
        'Cormorant Garamond' => __( 'Cormorant Garamond', 'vw-tourism-pro' ),
        'Crimson Text' => __( 'Crimson Text', 'vw-tourism-pro' ),
        'Cuprum' => __( 'Cuprum', 'vw-tourism-pro' ),
        'Cookie' => __( 'Cookie', 'vw-tourism-pro' ),
        'Chewy' => __( 'Chewy', 'vw-tourism-pro' ),
        'Days One' => __( 'Days One', 'vw-tourism-pro' ),
        'Dosis' => __( 'Dosis', 'vw-tourism-pro' ),
        'Economica' => __( 'Economica', 'vw-tourism-pro' ),
        'Fredoka One' => __( 'Fredoka One', 'vw-tourism-pro' ),
        'Fjalla One' => __( 'Fjalla One', 'vw-tourism-pro' ),
        'Francois One' => __( 'Francois One', 'vw-tourism-pro' ),
        'Frank Ruhl Libre' => __( 'Frank Ruhl Libre', 'vw-tourism-pro' ),
        'Gloria Hallelujah' => __( 'Gloria Hallelujah', 'vw-tourism-pro' ),
        'Great Vibes' => __( 'Great Vibes', 'vw-tourism-pro' ),
        'Handlee' => __( 'Handlee', 'vw-tourism-pro' ),
        'Hammersmith One' => __( 'Hammersmith One', 'vw-tourism-pro' ),
        'Inconsolata' => __( 'Inconsolata', 'vw-tourism-pro' ),
        'Indie Flower' => __( 'Indie Flower', 'vw-tourism-pro' ),
        'IM Fell English SC' => __( 'IM Fell English SC', 'vw-tourism-pro' ),
        'Julius Sans One' => __( 'Julius Sans One', 'vw-tourism-pro' ),
        'Josefin Slab' => __( 'Josefin Slab', 'vw-tourism-pro' ),
        'Josefin Sans' => __( 'Josefin Sans', 'vw-tourism-pro' ),
        'Kanit' => __( 'Kanit', 'vw-tourism-pro' ),
        'Lobster' => __( 'Lobster', 'vw-tourism-pro' ),
        'Lato' => __( 'Lato', 'vw-tourism-pro' ),
        'Lora' => __( 'Lora', 'vw-tourism-pro' ),
        'Libre Baskerville' => __( 'Libre Baskerville', 'vw-tourism-pro' ),
        'Lobster Two' => __( 'Lobster Two', 'vw-tourism-pro' ),
        'Merriweather' => __( 'Merriweather', 'vw-tourism-pro' ),
        'Monda' => __( 'Monda', 'vw-tourism-pro' ),
        'Montserrat' => __( 'Montserrat', 'vw-tourism-pro' ),
        'Muli' => __( 'Muli', 'vw-tourism-pro' ),
        'Marck Script' => __( 'Marck Script', 'vw-tourism-pro' ),
        'Noto Serif' => __( 'Noto Serif', 'vw-tourism-pro' ),
        'Open Sans' => __( 'Open Sans', 'vw-tourism-pro' ),
        'Overpass' => __( 'Overpass', 'vw-tourism-pro' ),
        'Overpass Mono' => __( 'Overpass Mono', 'vw-tourism-pro' ),
        'Oxygen' => __( 'Oxygen', 'vw-tourism-pro' ),
        'Orbitron' => __( 'Orbitron', 'vw-tourism-pro' ),
        'Patua One' => __( 'Patua One', 'vw-tourism-pro' ),
        'Pacifico' => __( 'Pacifico', 'vw-tourism-pro' ),
        'Padauk' => __( 'Padauk', 'vw-tourism-pro' ),
        'Playball' => __( 'Playball', 'vw-tourism-pro' ),
        'Playfair Display' => __( 'Playfair Display', 'vw-tourism-pro' ),
        'PT Sans' => __( 'PT Sans', 'vw-tourism-pro' ),
        'Philosopher' => __( 'Philosopher', 'vw-tourism-pro' ),
        'Permanent Marker' => __( 'Permanent Marker', 'vw-tourism-pro' ),
        'Poiret One' => __( 'Poiret One', 'vw-tourism-pro' ),
        'Quicksand' => __( 'Quicksand', 'vw-tourism-pro' ),
        'Quattrocento Sans' => __( 'Quattrocento Sans', 'vw-tourism-pro' ),
        'Raleway' => __( 'Raleway', 'vw-tourism-pro' ),
        'Rubik' => __( 'Rubik', 'vw-tourism-pro' ),
        'Rokkitt' => __( 'Rokkitt', 'vw-tourism-pro' ),
        'Russo One' => __( 'Russo One', 'vw-tourism-pro' ),
        'Righteous' => __( 'Righteous', 'vw-tourism-pro' ),
        'Slabo' => __( 'Slabo', 'vw-tourism-pro' ),
        'Source Sans Pro' => __( 'Source Sans Pro', 'vw-tourism-pro' ),
        'Shadows Into Light Two' => __( 'Shadows Into Light Two', 'vw-tourism-pro'),
        'Shadows Into Light' => __( 'Shadows Into Light', 'vw-tourism-pro' ),
        'Sacramento' => __( 'Sacramento', 'vw-tourism-pro' ),
        'Shrikhand' => __( 'Shrikhand', 'vw-tourism-pro' ),
        'Tangerine' => __( 'Tangerine', 'vw-tourism-pro' ),
        'Ubuntu' => __( 'Ubuntu', 'vw-tourism-pro' ),
        'VT323' => __( 'VT323', 'vw-tourism-pro' ),
        'Varela Round' => __( 'Varela Round', 'vw-tourism-pro' ),
        'Vampiro One' => __( 'Vampiro One', 'vw-tourism-pro' ),
        'Vollkorn' => __( 'Vollkorn', 'vw-tourism-pro' ),
        'Volkhov' => __( 'Volkhov', 'vw-tourism-pro' ),
        'Yanone Kaffeesatz' => __( 'Yanone Kaffeesatz', 'vw-tourism-pro' )
    );
    require_once get_template_directory() . '/inc/customize/controls/slider-line-control/slider-line-control.php';
    require_once get_template_directory() . '/inc/customize/controls/social-icons/social-icon-picker.php';

    require_once get_template_directory() . '/inc/customize/controls/customizer-text-radio-button/class/customizer-text-radio-button.php';
    require_once get_template_directory() . '/inc/customize/controls/customizer-seperator/class/customizer-seperator.php';
     require_once get_template_directory() . '/inc/customize/controls/customizer-notice/class/customizer-notice.php';

    require_once get_template_directory() . '/inc/customize/controls/customize-repeater/customize-repeater.php';

   if ( (ThemeWhizzie::get_the_validation_status() === 'true') && (ThemeWhizzie::get_the_suspension_status() == 'false') ) {
    require_once get_template_directory() . '/inc/customize/sections/customizer-custom-variables.php';
    // require_once get_template_directory() . '/inc/customize/sections/customizer-part-social-icons.php';
    require_once get_template_directory() . '/inc/customize/sections/customizer-part-header.php';
    require_once get_template_directory() . '/inc/customize/sections/customizer-part-slide.php';
    require_once get_template_directory() . '/inc/customize/sections/customizer-part-home.php';
    require_once get_template_directory() . '/inc/customize/sections/customizer-part-footer.php';
    require_once get_template_directory() . '/inc/customize/sections/customizer-other-page.php';

  }
}
add_action( 'customize_register', 'vw_tourism_pro_customize_register' );
//Integer
function vw_tourism_pro_sanitize_integer( $input ) {
    if( is_numeric( $input ) ) {
        return intval( $input );
    }
}

/* Logo Resizer */
load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class vw_tourism_pro_customize {
    /**
     * Returns the instance.
     *
     * @since  1.0.0
     * @access public
     * @return object
     */
    public static function get_instance() {
        static $instance = null;
        if ( is_null( $instance ) ) {
            $instance = new self;
            $instance->setup_actions();
        }
        return $instance;
    }
    /**
     * Constructor method.
     *
     * @since  1.0.0
     * @access private
     * @return void
     */
    private function __construct() {}
    /**
     * Sets up initial actions.
     *
     * @since  1.0.0
     * @access private
     * @return void
     */
    private function setup_actions() {
        // Register panels, sections, settings, controls, and partials.
        add_action( 'customize_register', array( $this, 'sections' ) );
         add_action( 'customize_register', array( $this, 'bundle' ) );
        // Register scripts and styles for the controls.
        add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
    }
    /**
     * Sets up the customizer sections.
     *
     * @since  1.0.0
     * @access public
     * @param  object  $manager
     * @return void
     */
    public function sections( $manager ) {
        // Load custom sections.
        load_template( trailingslashit( get_template_directory() ) . '/inc/review-section.php' );
        // Register custom section types.
        $manager->register_section_type( 'vw_tourism_pro_customize_reviews_and_testimonials' );
        // Register sections.
        $manager->add_section(
            new vw_tourism_pro_customize_reviews_and_testimonials(
                $manager,
                'example_1',
                array(
                    'title'    => esc_html__( 'Review & Testimonial', 'vw-tourism-pro' ),
                    'reviews_and_testimonials_text' => esc_html__( 'Rate Us', 'vw-tourism-pro' ),
                    'reviews_and_testimonials_url'  => 'https://www.vwthemes.com/topic/reviews-and-testimonials/',
                    'priority' =>1,
                )
            )
        );
    }

     public function bundle( $manager ) {
        // Load custom sections.
        load_template( trailingslashit( get_template_directory() ) . '/inc/review-section.php' );
        // Register custom section types.
        $manager->register_section_type( 'vw_tourism_pro_customize_reviews_and_testimonials' );
        // Register sections.
        $manager->add_section(
            new vw_tourism_pro_customize_reviews_and_testimonials(
                $manager,
                'example_2',
                array(
                    'title'    => esc_html__( 'Theme Bundle', 'vw-tourism-pro' ),
                    'reviews_and_testimonials_text' => esc_html__( 'Buy Now', 'vw-tourism-pro' ),
                    'reviews_and_testimonials_url'  => 'https://www.vwthemes.com/premium/theme-bundle/',
                    'priority' =>2,
                )
            )
        );
    }
    /**
     * Loads theme customizer CSS.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function enqueue_control_scripts() {
        wp_enqueue_script( 'vw-tourism-pro-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );
        wp_enqueue_style( 'vw-tourism-pro-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
    }
}
// Doing this customizer thang!
vw_tourism_pro_customize::get_instance();
