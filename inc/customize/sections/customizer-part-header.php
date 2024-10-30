<?php
	/*------------------------ Header Section----------------------- */
	$wp_customize->add_section('vw_tourism_pro_header_section',array(
		'title'	=> __('Header','vw-tourism-pro'),
		'description'	=> __('Header Settings','vw-tourism-pro'),
		'priority'	=> null,
		'panel' => 'vw_tourism_pro_panel_id',
	));
  $wp_customize->add_setting( 'vw_tourism_pro_headerhomebg_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_headerhomebg_color', array(
	'label' => __('Header Background Color', 'vw-tourism-pro'),
	'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_header_section',
	'settings' => 'vw_tourism_pro_headerhomebg_color',
)));

	$wp_customize->add_setting('vw_tourism_pro_headerhomebg_image',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'vw_tourism_pro_headerhomebg_image',
            array(
                'label' => __('Background image','vw-tourism-pro'),
                'section' => 'vw_tourism_pro_header_section',
                'settings' => 'vw_tourism_pro_headerhomebg_image'
            )
        )
    );

	// $wp_customize->add_setting( 'vw_tourism_pro_headerhomebg_attachment', array(
	// 	'default'         => '',
	// 	'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
	// ));
	// $wp_customize->add_control('vw_tourism_pro_headerhomebg_attachment', array(
	// 	'type'      => 'radio',
	// 	'label'     => __('Choose image option', 'vw-tourism-pro'),
	// 	'section'   => 'vw_tourism_pro_header_section',
	// 	'choices'   => array(
	// 	'vw-fixed'      => __( 'Fixed', 'vw-tourism-pro' ),
	// 	'vw-scroll'      => __( 'Scroll', 'vw-tourism-pro' ),
	// )));

    $wp_customize->add_setting( 'vw_tourism_pro_head_section_ct_pallete',
		array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
	));
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_head_section_ct_pallete',
		array(
		'label' => __('Section Color & Typography ','vw-tourism-pro'),
		'section' => 'vw_tourism_pro_header_section'
	)));

	$wp_customize->add_setting( 'vw_tourism_pro_head_title_section_ct_pallete',
		array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
	));
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_head_title_section_ct_pallete',
		array(
		'label' => __('Header Title Typography ','vw-tourism-pro'),
		'section' => 'vw_tourism_pro_header_section'
	)));

	$wp_customize->add_setting( 'vw_tourism_pro_header_title_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_header_title_color', array(
		'label' => __('Header Main title Color', 'vw-tourism-pro'),
		'section' => 'vw_tourism_pro_header_section',
		'settings' => 'vw_tourism_pro_header_title_color',
	)));
	$wp_customize->add_setting('vw_tourism_pro_header_title_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control(
	    'vw_tourism_pro_header_title_font_family', array(
	    'section'  => 'vw_tourism_pro_header_section',
	    'label'    => __('Header Main title Font family','vw-tourism-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting('vw_tourism_pro_header_title_font_size',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_tourism_pro_header_title_font_size',array(
		'label' => __('Header Title Font Size','vw-tourism-pro'),
		'description' => __('Add font size in px','vw-tourism-pro'),
		'section' => 'vw_tourism_pro_header_section',
		'setting' => 'vw_tourism_pro_header_title_font_size',
		'type'    => 'number'
	));

	$wp_customize->add_setting( 'vw_tourism_pro_header_subtitle_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_header_subtitle_color', array(
		'label' => __('Tagline Color', 'vw-tourism-pro'),
		'section' => 'vw_tourism_pro_header_section',
		'settings' => 'vw_tourism_pro_header_subtitle_color',
	)));
	$wp_customize->add_setting('vw_tourism_pro_header_subtitle_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control(
	    'vw_tourism_pro_header_subtitle_font_family', array(
	    'section'  => 'vw_tourism_pro_header_section',
	    'label'    => __('Tagline Font family','vw-tourism-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting('vw_tourism_pro_header_subtitle_font_size',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_tourism_pro_header_subtitle_font_size',array(
		'label' => __('Tagline Font Size','vw-tourism-pro'),
		'description' => __('Add font size in px','vw-tourism-pro'),
		'section' => 'vw_tourism_pro_header_section',
		'setting' => 'vw_tourism_pro_header_subtitle_font_size',
		'type'    => 'number'
	));



	$wp_customize->add_setting( 'vw_tourism_pro_head_menu_section_ct_pallete',
		array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
	));
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_head_menu_section_ct_pallete',
		array(
		'label' => __('Menu Typography ','vw-tourism-pro'),
		'section' => 'vw_tourism_pro_header_section'
	)));

	// This is Header Menu Color picker setting
	$wp_customize->add_setting( 'vw_tourism_pro_headermenu_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_headermenu_color', array(
		'label' => __('Menu Item Color', 'vw-tourism-pro'),
		'section' => 'vw_tourism_pro_header_section',
		'settings' => 'vw_tourism_pro_headermenu_color',
	)));

	//This is Header Menu FontFamily picker setting
	$wp_customize->add_setting('vw_tourism_pro_headermenu_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
	 ));
	$wp_customize->add_control(
	    'vw_tourism_pro_headermenu_font_family', array(
	    'section'  => 'vw_tourism_pro_header_section',
	    'label'    => __( 'Menu Item Fonts','vw-tourism-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting('vw_tourism_pro_headermenu_font_size',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_tourism_pro_headermenu_font_size',array(
		'label' => __('Menu Font Size','vw-tourism-pro'),
		'description' => __('Add font size in px','vw-tourism-pro'),
		'section' => 'vw_tourism_pro_header_section',
		'setting' => 'vw_tourism_pro_headermenu_font_size',
		'type'    => 'number'
	));

	$wp_customize->add_setting( 'vw_tourism_pro_header_menuhovercolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_header_menuhovercolor', array(
		'label' => __('Menu Item Hover Color', 'vw-tourism-pro'),
		'section' => 'vw_tourism_pro_header_section',
		'settings' => 'vw_tourism_pro_header_menuhovercolor',
	)));
	// This is Nav Dropdown Background Color picker setting
	$wp_customize->add_setting( 'vw_tourism_pro_dropdownbg_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_dropdownbg_color', array(
		'label' => __('Menu DropDown Background Color', 'vw-tourism-pro'),
		'section' => 'vw_tourism_pro_header_section',
		'settings' => 'vw_tourism_pro_dropdownbg_color',
	)));

	$wp_customize->add_setting( 'vw_tourism_pro_dropdownbg_itemcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_dropdownbg_itemcolor', array(
		'label' => __('Menu DropDown Item Color', 'vw-tourism-pro'),
		'section' => 'vw_tourism_pro_header_section',
		'settings' => 'vw_tourism_pro_dropdownbg_itemcolor',
	)));
	$wp_customize->add_setting( 'vw_tourism_pro_dropdownbg_item_hovercolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_dropdownbg_item_hovercolor', array(
		'label' => __('Menu DropDown Item Hover Color', 'vw-tourism-pro'),
		'section' => 'vw_tourism_pro_header_section',
		'settings' => 'vw_tourism_pro_dropdownbg_item_hovercolor',
	)));

	$wp_customize->add_setting('vw_tourism_pro_top_submenus_font_size',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	)
	);
	$wp_customize->add_control('vw_tourism_pro_top_submenus_font_size',array(
		'label' => __('Sub Menus Text Font Size','vw-tourism-pro'),
		'section' => 'vw_tourism_pro_header_section',
		'setting' => 'vw_tourism_pro_top_submenus_font_size',
		'type'    => 'number'
		)
	);

	/* --------- menudropdown Opacity  ----------- */

	$wp_customize->add_setting('vw_tourism_pro_top_submenus_bg_opacity_color',array(
      'default'              => '1',
      'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
	));

	$wp_customize->add_control( 'vw_tourism_pro_top_submenus_bg_opacity_color', array(
		'label'       => esc_html__( 'Menu Dropdown Opacity','vw-tourism-pro' ),
		'section'     => 'vw_tourism_pro_header_section',
		'type'        => 'select',
		'settings'    => 'vw_tourism_pro_top_submenus_bg_opacity_color',
		'choices' => array(
	      '0' =>  esc_attr('0','vw-tourism-pro'),
	      '0.1' =>  esc_attr('0.1','vw-tourism-pro'),
	      '0.2' =>  esc_attr('0.2','vw-tourism-pro'),
	      '0.3' =>  esc_attr('0.3','vw-tourism-pro'),
	      '0.4' =>  esc_attr('0.4','vw-tourism-pro'),
	      '0.5' =>  esc_attr('0.5','vw-tourism-pro'),
	      '0.6' =>  esc_attr('0.6','vw-tourism-pro'),
	      '0.7' =>  esc_attr('0.7','vw-tourism-pro'),
	      '0.8' =>  esc_attr('0.8','vw-tourism-pro'),
	      '0.9' =>  esc_attr('0.9','vw-tourism-pro'),
	      '1' =>  esc_attr('1','vw-tourism-pro')
		),
	));


	//In Responsive
	$wp_customize->add_setting( 'vw_tourism_pro_dropdownbg_responsivecolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_dropdownbg_responsivecolor', array(
		'label' => __('Responsive Menu Background Color', 'vw-tourism-pro'),
		'section' => 'vw_tourism_pro_header_section',
		'settings' => 'vw_tourism_pro_dropdownbg_responsivecolor',
	)));
	$wp_customize->add_setting( 'vw_tourism_pro_headermenu_responsive_item_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_headermenu_responsive_item_color', array(
		'label' => __('Responsive Menu item Color', 'vw-tourism-pro'),
		'section' => 'vw_tourism_pro_header_section',
		'settings' => 'vw_tourism_pro_headermenu_responsive_item_color',
	)));
	$wp_customize->add_setting( 'vw_tourism_pro_headermenu_responsive_dropdown_item_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_headermenu_responsive_dropdown_item_color', array(
		'label' => __('Responsive Dropdown Menu item Color', 'vw-tourism-pro'),
		'section' => 'vw_tourism_pro_header_section',
		'settings' => 'vw_tourism_pro_headermenu_responsive_dropdown_item_color',
	)));
	$wp_customize->add_setting( 'vw_tourism_pro_headermenu_responsive_dropdown_item_hover_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_headermenu_responsive_dropdown_item_hover_color', array(
		'label' => __('Responsive Dropdown Menu item Hover Color', 'vw-tourism-pro'),
		'section' => 'vw_tourism_pro_header_section',
		'settings' => 'vw_tourism_pro_headermenu_responsive_dropdown_item_hover_color',
	)));

	$wp_customize->add_setting( 'vw_tourism_pro_headermenu_icon_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
	));
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_headermenu_icon_settings',
	array(
		'label' => __('Icon Setting','vw-tourism-pro'),
		'section' => 'vw_tourism_pro_header_section'
	)));
	$wp_customize->add_setting( 'vw_tourism_pro_headermenu_icon_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_headermenu_icon_color', array(
		'label' => __('Icon Color', 'vw-tourism-pro'),
		'section' => 'vw_tourism_pro_header_section',
		'settings' => 'vw_tourism_pro_headermenu_icon_color',
	)));

	$wp_customize->add_setting('vw_tourism_pro_headermenu_icon_font_size',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_tourism_pro_headermenu_icon_font_size',array(
		'label' => __('Icon Font Size','vw-tourism-pro'),
		'description' => __('Add font size in px','vw-tourism-pro'),
		'section' => 'vw_tourism_pro_header_section',
		'setting' => 'vw_tourism_pro_headermenu_icon_font_size',
		'type'    => 'number'
	));

	$wp_customize->add_setting('vw_tourism_pro_header_user_icon_url',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_tourism_pro_header_user_icon_url',array(
    'label' => __('Account Icon Url','vw-tourism-pro'),
    'section' => 'vw_tourism_pro_header_section',
    'setting' => 'vw_tourism_pro_header_user_icon_url',
    'type' => 'text'
  ));
