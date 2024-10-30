<?php


require get_template_directory() . '/theme-wizard/tgm/class-tgm-plugin-activation.php';

/**
 * Recommended plugins.
 */
function vw_tourism_pro_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Tourism Posttype Plugin', 'vw-tourism-pro' ),
			'slug'             => 'tourism-custom-posttype',
			'source'           => get_template_directory() .'/inc/plugins/tourism-custom-posttype.zip',
			'required'         => true,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'VW Social Media', 'vw-tourism-pro' ),
			'slug'             => 'vw-social-media',
			'source'           => get_template_directory() .'/inc/plugins/vw-social-media.zip',
			'required'         => true,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'Contact Form 7', 'vw-tourism-pro' ),
			'slug'             => 'contact-form-7',
			'required'         => true,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'Ibtana - WordPress Website Builder', 'vw-tourism-pro' ),
			'slug'             => 'ibtana-visual-editor',
			'source'           => '',
			'required'         => true,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'Ibtana - Ecommerce Product Addons', 'vw-tourism-pro' ),
			'slug'             => 'ibtana-ecommerce-product-addons',
			'source'           => '',
			'required'         => true,
			'force_activation' => false,
		),
		array(
		  'name'             => __( 'WooCommerce', 'vw-tourism-pro' ),
		  'slug'             => 'woocommerce',
		  'source'           => '',
		  'required'         => true,
		  'force_activation' => false,
		),
		array(
			'name'             => __( 'Font Awesome', 'vw-tourism-pro' ),
			'slug'             => 'font-awesome',
			'source'           => '',
			'required'         => true,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'VW Title Banner Image', 'vw-tourism-pro' ),
			'slug'             => 'vw-title-banner-image',
			'source'           => get_template_directory() .'/inc/plugins/vw-title-banner-image.zip',
			'required'         => true,
			'force_activation' => false,
		)
	);
	$vw_tourism_pro_config = array();
	tgmpa( $plugins, $vw_tourism_pro_config );
}
add_action( 'tgmpa_register', 'vw_tourism_pro_register_recommended_plugins' );
