<?php
	$wp_customize->add_section('vw_tourism_pro_banner_section',array(
		'title'	=> __('Banner Settings','vw-tourism-pro'),
		'description'	=> __('Add Banner Setting here.','vw-tourism-pro'),
		'priority'	=> null,
		'panel' => 'vw_tourism_pro_panel_id',
	));
	$wp_customize->add_setting('vw_tourism_pro_banner_enabledisable',array(
        'default'=> 'Enable',
        'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
    ));
	$wp_customize->add_control('vw_tourism_pro_banner_enabledisable', array(
        'type' => 'radio',
        'label' => 'Do you want this section',
        'section' => 'vw_tourism_pro_banner_section',
        'choices' => array(
            'Enable' => 'Enable',
            'Disable' => 'Disable'
        ),
    ));

    $wp_customize->selective_refresh->add_partial( 'vw_tourism_pro_banner_enabledisable', array(
	    'selector' => '#banner .banner-heading',
	    'render_callback' => 'vw_kids_pro_customize_partial_vw_tourism_pro_banner_enabledisable',
	));
	$wp_customize->add_setting( 'vw_tourism_pro_banner_bgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 		'vw_tourism_pro_banner_bgcolor', array(
		'label' => 'Background Color',
    'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-tourism-pro'),
		'section' => 'vw_tourism_pro_banner_section',
		'settings' => 'vw_tourism_pro_banner_bgcolor',
	)));
	$wp_customize->add_setting('vw_tourism_pro_banner_bgimage',array(
			'default'	=> get_theme_mod('vw_tourism_pro_banner_bgimage'),
			'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'vw_tourism_pro_banner_bgimage',
	        array(
	            'label' => __('Background image','vw-tourism-pro'),
						  	'description' => __('Add Maximum Image Size 1920x1075', 'vw-tourism-pro'),
	            'section' => 'vw_tourism_pro_banner_section',
	            'settings' => 'vw_tourism_pro_banner_bgimage'
	)));

	$wp_customize->add_setting('vw_tourism_pro_banner_bgimage_mobile',array(
			'default'	=> get_theme_mod('vw_tourism_pro_banner_bgimage_mobile'),
			'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control(
			new WP_Customize_Image_Control(
					$wp_customize,
					'vw_tourism_pro_banner_bgimage_mobile',
					array(
							'label' => __('Background image Mobile','vw-tourism-pro'),
								'description' => __('Add Maximum Image Size 425x833', 'vw-tourism-pro'),
							'section' => 'vw_tourism_pro_banner_section',
							'settings' => 'vw_tourism_pro_banner_bgimage_mobile'
	)));
	$wp_customize->add_setting( 'vw_tourism_pro_banner_attachment', array(
	    'default'         => '',
	    'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
	));
	$wp_customize->add_control('vw_tourism_pro_banner_attachment', array(
	    'type'      => 'radio',
	    'label'     => __('Choose image option', 'vw-tourism-pro'),
	    'section'   => 'vw_tourism_pro_banner_section',
	    'choices'   => array(
			'vw-fixed'  => __( 'Fixed', 'vw-tourism-pro' ),
	    'vw-scroll' => __( 'Scroll', 'vw-tourism-pro' ),
	)));
	$wp_customize->add_setting( 'vw_tourism_pro_banner_content_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
	));
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_banner_content_settings',
	array(
		'label' => __('Section Content Typography','vw-tourism-pro'),
		'section' => 'vw_tourism_pro_banner_section'
	)));

	// $wp_customize->add_setting('vw_tourism_pro_banner_card_img',array(
	// 	'default'   =>get_theme_mod('vw_tourism_pro_banner_card_img'),
	// 	'sanitize_callback'	=> 'esc_url_raw',
	// ));
	// $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_tourism_pro_banner_card_img',array(
	// 		'label' => __('Image one','vw-tourism-pro'),
	// 			'description' => __('Add image size maximum 210×130', 'vw-tourism-pro'),
	// 		'section' => 'vw_tourism_pro_banner_section',
	// 		'settings' => 'vw_tourism_pro_banner_card_img'
	// )));

	$wp_customize->add_setting('vw_tourism_pro_banner_sub_heading_one',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_tourism_pro_banner_sub_heading_one',array(
    'label' => __('Banner Sub Heading','vw-tourism-pro'),
    'section' => 'vw_tourism_pro_banner_section',
    'setting' => 'vw_tourism_pro_banner_sub_heading_one',
    'type' => 'text'
  ));
	$wp_customize->add_setting('vw_tourism_pro_banner_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_tourism_pro_banner_heading',array(
    'label' => __('Banner Heading','vw-tourism-pro'),
    'section' => 'vw_tourism_pro_banner_section',
    'setting' => 'vw_tourism_pro_banner_heading',
    'type' => 'text'
  ));
	$wp_customize->add_setting('vw_tourism_pro_banner_sub_heading_two',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_tourism_pro_banner_sub_heading_two',array(
    'label' => __('Banner Sub Heading Two','vw-tourism-pro'),
    'section' => 'vw_tourism_pro_banner_section',
    'setting' => 'vw_tourism_pro_banner_sub_heading_two',
    'type' => 'text'
  ));

	$image_sizes = array('210×130', '210×130','300x195', '210×130',  '210×130', '300x195','210×130');

	for ($i=1; $i <= 7; $i++) {
		//vw_tourism_pro_banner_card_img
		$wp_customize->add_setting('vw_tourism_pro_banner_card_img'.$i,array(
			'default'   =>get_theme_mod('vw_tourism_pro_banner_card_img'.$i),
			'sanitize_callback'	=> 'esc_url_raw',
		));
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_tourism_pro_banner_card_img'.$i,array(
				'label' => __('Image'.$i,'vw-tourism-pro'),
					'description' => __('Add image size maximum ' . $image_sizes[$i-1], 'vw-tourism-pro'),
				'section' => 'vw_tourism_pro_banner_section',
				'settings' => 'vw_tourism_pro_banner_card_img'.$i
		)));

		$wp_customize->add_setting('vw_tourism_pro_banner_card_title'.$i,array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_text_field'
	  ));
	  $wp_customize->add_control('vw_tourism_pro_banner_card_title'.$i,array(
	    'label' => __('Banner Sub Heading Two','vw-tourism-pro'),
	    'section' => 'vw_tourism_pro_banner_section',
	    'setting' => 'vw_tourism_pro_banner_card_title'.$i,
	    'type' => 'text'
	  ));

	}


	$wp_customize->add_setting( 'vw_tourism_pro_banner_content_color_font_setting',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
	));
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_banner_content_color_font_setting',
	array(
		'label' => __('Section Color & Font Setting','vw-tourism-pro'),
		'section' => 'vw_tourism_pro_banner_section'
	)));


	$wp_customize->add_setting( 'vw_tourism_pro_banner_sub_heading_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_banner_sub_heading_color', array(
		'label' => __('Sub Heading Color', 'vw-tourism-pro'),
		'section' => 'vw_tourism_pro_banner_section',
		'settings' => 'vw_tourism_pro_banner_sub_heading_color',
	)));

	$wp_customize->add_setting('vw_tourism_pro_banner_sub_heading_font_size',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_tourism_pro_banner_sub_heading_font_size',array(
		'label' => __('Sub Heading Font Size','vw-tourism-pro'),
		'description' => __('Add font size in px','vw-tourism-pro'),
		'section' => 'vw_tourism_pro_banner_section',
		'setting' => 'vw_tourism_pro_banner_sub_heading_font_size',
		'type'    => 'number'
	));

	$wp_customize->add_setting('vw_tourism_pro_banner_sub_heading_font_family',array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
	));
	$wp_customize->add_control(
		'vw_tourism_pro_banner_sub_heading_font_family', array(
		'section'  => 'vw_tourism_pro_banner_section',
		'label'    => __( 'Sub Heading Font Family','vw-tourism-pro'),
		'type'     => 'select',
		'choices'  => $font_array
	));
	$wp_customize->add_setting( 'vw_tourism_pro_banner_heading_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_banner_heading_color', array(
		'label' => __('Heading Color', 'vw-tourism-pro'),
		'section' => 'vw_tourism_pro_banner_section',
		'settings' => 'vw_tourism_pro_banner_heading_color',
	)));

	$wp_customize->add_setting('vw_tourism_pro_banner_heading_font_size',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_tourism_pro_banner_heading_font_size',array(
		'label' => __('Heading Font Size','vw-tourism-pro'),
		'description' => __('Add font size in px','vw-tourism-pro'),
		'section' => 'vw_tourism_pro_banner_section',
		'setting' => 'vw_tourism_pro_banner_heading_font_size',
		'type'    => 'number'
	));

	$wp_customize->add_setting('vw_tourism_pro_banner_heading_font_family',array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
	));
	$wp_customize->add_control(
		'vw_tourism_pro_banner_heading_font_family', array(
		'section'  => 'vw_tourism_pro_banner_section',
		'label'    => __( 'Heading Font Family','vw-tourism-pro'),
		'type'     => 'select',
		'choices'  => $font_array
	));


	$wp_customize->add_setting( 'vw_tourism_pro_banner_card_heading_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_banner_card_heading_color', array(
		'label' => __('Card Heading Color', 'vw-tourism-pro'),
		'section' => 'vw_tourism_pro_banner_section',
		'settings' => 'vw_tourism_pro_banner_card_heading_color',
	)));

	$wp_customize->add_setting('vw_tourism_pro_banner_card_heading_font_size',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_tourism_pro_banner_card_heading_font_size',array(
		'label' => __('Card Heading Font Size','vw-tourism-pro'),
		'description' => __('Add font size in px','vw-tourism-pro'),
		'section' => 'vw_tourism_pro_banner_section',
		'setting' => 'vw_tourism_pro_banner_card_heading_font_size',
		'type'    => 'number'
	));

	$wp_customize->add_setting('vw_tourism_pro_banner_card_heading_font_family',array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
	));
	$wp_customize->add_control(
		'vw_tourism_pro_banner_card_heading_font_family', array(
		'section'  => 'vw_tourism_pro_banner_section',
		'label'    => __( 'Card Heading Font Family','vw-tourism-pro'),
		'type'     => 'select',
		'choices'  => $font_array
	));

	$wp_customize->add_setting( 'vw_tourism_pro_banner_line_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_banner_line_color', array(
		'label' => __('Line Color', 'vw-tourism-pro'),
		'section' => 'vw_tourism_pro_banner_section',
		'settings' => 'vw_tourism_pro_banner_line_color',
	)));

	// 動画設定の追加
	$wp_customize->add_setting('vw_tourism_pro_banner_video', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw', // URLサニタイズ
	));

	$wp_customize->add_control(
		new WP_Customize_Upload_Control(
			$wp_customize,
			'vw_tourism_pro_banner_video', // コントロールID
			array(
				'label'    => __('Banner Video', 'vw-tourism-pro'),
				'section'  => 'vw_tourism_pro_banner_section',
				'settings' => 'vw_tourism_pro_banner_video',
				'description' => __('Upload a video for the banner section (MP4 format recommended).', 'vw-tourism-pro'),
			)
		)
	);