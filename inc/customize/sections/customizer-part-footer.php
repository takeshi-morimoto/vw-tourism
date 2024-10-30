<?php $wp_customize->add_section('vw_tourism_pro_footer_menu_section',array(
        'title' => __('Footer','vw-tourism-pro'),
        'title' => __('Footer','vw-tourism-pro'),
        'panel' => 'vw_tourism_pro_panel_id',
    ));
    $wp_customize->add_setting( 'vw_tourism_pro_section_footer_bgcolor', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_section_footer_bgcolor', array(
        'label' => __('Background Color', 'vw-tourism-pro'),
        'section' => 'vw_tourism_pro_footer_menu_section',
        'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-tourism-pro'),
        'settings' => 'vw_tourism_pro_section_footer_bgcolor',
    )));
    $wp_customize->add_setting('vw_tourism_pro_footer_bgimage',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'vw_tourism_pro_footer_bgimage',
            array(
                'label' => __('Background image','vw-tourism-pro'),
                'section' => 'vw_tourism_pro_footer_menu_section',
                'settings' => 'vw_tourism_pro_footer_bgimage'
    )));
  $wp_customize->add_setting( 'vw_tourism_pro_section_footer_bg_attachment', array(
      'default'         => '',
      'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
  ));
  $wp_customize->add_control('vw_tourism_pro_section_footer_bg_attachment', array(
      'type'      => 'radio',
      'label'     => __('Choose image option', 'vw-tourism-pro'),
      'section'   => 'vw_tourism_pro_footer_menu_section',
      'choices'   => array(
      'vw-fixed'      => __( 'Fixed', 'vw-tourism-pro' ),
      'vw-scroll'      => __( 'Scroll', 'vw-tourism-pro' ),
  )));
    $wp_customize->add_setting( 'vw_tourism_pro_footer_menu_title_ct_pallete',
    array(
        'default' => '',
        'transport' => 'postMessage',
        'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_footer_menu_title_ct_pallete',
    array(
        'label' => __('Section Menu Typography ','vw-tourism-pro'),
        'section' => 'vw_tourism_pro_footer_menu_section'
    )));

    $wp_customize->add_setting('vw_tourism_pro_newsletter_form_img',array(
    	'default'   =>get_theme_mod('vw_tourism_pro_newsletter_form_img'),
    	'sanitize_callback'	=> 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_tourism_pro_newsletter_form_img',array(
    		'label' => __('Choose Video Background Image','vw-tourism-pro'),
    			'description' => __('Add image size maximum 84x84', 'vw-tourism-pro'),
    		'section' => 'vw_tourism_pro_footer_menu_section',
    		'settings' => 'vw_tourism_pro_newsletter_form_img'
    )));
    $wp_customize->add_setting('vw_tourism_pro_newsletter_form_title',array(
          'default'   => '',
          'sanitize_callback' => 'sanitize_text_field',
      ));
      $wp_customize->add_control('vw_tourism_pro_newsletter_form_title',array(
          'label' => __('Heading','vw-tourism-pro'),
          'section'   => 'vw_tourism_pro_footer_menu_section',
          'type'      => 'text'
      ));
    $wp_customize->add_setting('vw_tourism_pro_newsletter_form_sub_title',array(
          'default'   => '',
          'sanitize_callback' => 'sanitize_text_field',
      ));
      $wp_customize->add_control('vw_tourism_pro_newsletter_form_sub_title',array(
          'label' => __('Sub Heading','vw-tourism-pro'),
          'section'   => 'vw_tourism_pro_footer_menu_section',
          'type'      => 'text'
      ));
      $wp_customize->add_setting('vw_tourism_pro_newsletter_shortcode',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
      ));
    $wp_customize->add_control('vw_tourism_pro_newsletter_shortcode',array(
      'label' => __('Newsletter Shortcode','vw-tourism-pro'),
      'section' => 'vw_tourism_pro_footer_menu_section',
      'setting' => 'vw_tourism_pro_newsletter_shortcode',
      'type' => 'text'
    ));

    $wp_customize->add_setting( 'vw_tourism_pro_footer_contact_settings',
    array(
    	'default' => '',
    	'transport' => 'postMessage',
    	'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_footer_contact_settings',
    array(
    	'label' => __('Footer Contact Setting','vw-tourism-pro'),
    	'section' => 'vw_tourism_pro_footer_menu_section'
    )));
    $footer_point = get_theme_mod("vw_tourism_pro_footer_contact_number");
    for ($i=1; $i <= $footer_point ; $i++) {
      $wp_customize->add_setting('vw_tourism_pro_footer_contact_img'.$i,array(
        'default'   =>get_theme_mod('vw_tourism_pro_footer_contact_img'.$i),
        'sanitize_callback'	=> 'esc_url_raw',
      ));
      $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_tourism_pro_footer_contact_img'.$i,array(
          'label' => __('Contact Image','vw-tourism-pro'),
            'description' => __('Add image size maximum 84x84', 'vw-tourism-pro'),
          'section' => 'vw_tourism_pro_footer_menu_section',
          'settings' => 'vw_tourism_pro_footer_contact_img'.$i
      )));
      $wp_customize->add_setting('vw_tourism_pro_footer_contact_title'.$i,array(
      	'default' => '',
      	'sanitize_callback' => 'sanitize_text_field'
      ));
      $wp_customize->add_control('vw_tourism_pro_footer_contact_title'.$i,array(
      	'label' => __('Contact Heading','vw-tourism-pro'),
      	'section' => 'vw_tourism_pro_footer_menu_section',
      	'setting' => 'vw_tourism_pro_footer_contact_title'.$i,
      	'type' => 'text'
      ));
      $wp_customize->add_setting('vw_tourism_pro_footer_contact_para'.$i,array(
      	'default' => '',
      	'sanitize_callback' => 'sanitize_text_field'
      ));
      $wp_customize->add_control('vw_tourism_pro_footer_contact_para'.$i,array(
      	'label' => __('Contact Paragraph','vw-tourism-pro'),
      	'section' => 'vw_tourism_pro_footer_menu_section',
      	'setting' => 'vw_tourism_pro_footer_contact_para'.$i,
      	'type' => 'text'
      ));
    }
    $wp_customize->add_setting( 'vw_tourism_pro_footer_content_color_font_settings',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_footer_content_color_font_settings',
    array(
      'label' => __('Section Color & Font Setting','vw-tourism-pro'),
      'section' => 'vw_tourism_pro_footer_menu_section'
    )));
    $wp_customize->add_setting( 'vw_tourism_pro_newsletter_form_title_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_newsletter_form_title_color', array(
        'label' => __('Form Heading Color', 'vw-tourism-pro'),
        'section' => 'vw_tourism_pro_footer_menu_section',
        'settings' => 'vw_tourism_pro_newsletter_form_title_color',
    )));
    $wp_customize->add_setting('vw_tourism_pro_newsletter_form_title_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_tourism_pro_newsletter_form_title_font_family', array(
        'section'  => 'vw_tourism_pro_footer_menu_section',
        'label'    => __( 'Form Heading Font Family','vw-tourism-pro'),
        'type'     => 'select',
        'choices'  => $font_array
    ));

    $wp_customize->add_setting('vw_tourism_pro_newsletter_form_title_font_size',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_tourism_pro_newsletter_form_title_font_size',array(
        'label' => __('Form Heading Font Size','vw-tourism-pro'),
        'description' => __('Add font size in px','vw-tourism-pro'),
        'section' => 'vw_tourism_pro_footer_menu_section',
        'setting' => 'vw_tourism_pro_newsletter_form_title_font_size',
        'type'    => 'number'
    ));
    $wp_customize->add_setting( 'vw_tourism_pro_newsletter_form_para_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_newsletter_form_para_color', array(
        'label' => __('Form Paragraph Color', 'vw-tourism-pro'),
        'section' => 'vw_tourism_pro_footer_menu_section',
        'settings' => 'vw_tourism_pro_newsletter_form_para_color',
    )));
    $wp_customize->add_setting('vw_tourism_pro_newsletter_form_para_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_tourism_pro_newsletter_form_para_font_family', array(
        'section'  => 'vw_tourism_pro_footer_menu_section',
        'label'    => __( 'Form Paragraph Font Family','vw-tourism-pro'),
        'type'     => 'select',
        'choices'  => $font_array
    ));

    $wp_customize->add_setting('vw_tourism_pro_newsletter_form_para_font_size',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_tourism_pro_newsletter_form_para_font_size',array(
        'label' => __('Form Paragraph Font Size','vw-tourism-pro'),
        'description' => __('Add font size in px','vw-tourism-pro'),
        'section' => 'vw_tourism_pro_footer_menu_section',
        'setting' => 'vw_tourism_pro_newsletter_form_para_font_size',
        'type'    => 'number'
    ));

    $wp_customize->add_setting( 'vw_tourism_pro_newsletter_form_btn_color', array(
    	'default' => '',
    	'sanitize_callback'	=> 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_newsletter_form_btn_color', array(
    	'label' => __('Subscribe Button Color', 'vw-tourism-pro'),
    	'section' => 'vw_tourism_pro_footer_menu_section',
    	'settings' => 'vw_tourism_pro_newsletter_form_btn_color',
    )));
    $wp_customize->add_setting('vw_tourism_pro_newsletter_form_btn_font_size',array(
    	'default' => '',
    	'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_tourism_pro_newsletter_form_btn_font_size',array(
    	'label' => __('Subscribe Button Font Size','vw-tourism-pro'),
    	'description' => __('Add font size in px','vw-tourism-pro'),
    	'section' => 'vw_tourism_pro_footer_menu_section',
    	'setting' => 'vw_tourism_pro_newsletter_form_btn_font_size',
    	'type'    => 'number'
    ));
    $wp_customize->add_setting('vw_tourism_pro_newsletter_form_btn_font_family',array(
    	'default' => '',
    	'capability' => 'edit_theme_options',
    	'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
    		'vw_tourism_pro_newsletter_form_btn_font_family', array(
    		'section'  => 'vw_tourism_pro_footer_menu_section',
    		'label'    => __( 'Subscribe Button Font Family','vw-tourism-pro'),
    		'type'     => 'select',
    		'choices'  => $font_array
    ));
    $wp_customize->add_setting( 'vw_tourism_pro_newsletter_form_btn_bg_color', array(
    	'default' => '',
    	'sanitize_callback'	=> 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_newsletter_form_btn_bg_color', array(
    	'label' => __('Subscribe Button Background Color', 'vw-tourism-pro'),
    	'section' => 'vw_tourism_pro_footer_menu_section',
    	'settings' => 'vw_tourism_pro_newsletter_form_btn_bg_color',
    )));
    $wp_customize->add_setting( 'vw_tourism_pro_newsletter_form_btn_arrow_color', array(
    	'default' => '',
    	'sanitize_callback'	=> 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_newsletter_form_btn_arrow_color', array(
    	'label' => __('Subscribe Button Arrow Color', 'vw-tourism-pro'),
    	'section' => 'vw_tourism_pro_footer_menu_section',
    	'settings' => 'vw_tourism_pro_newsletter_form_btn_arrow_color',
    )));
    $wp_customize->add_setting( 'vw_tourism_pro_newsletter_form_btn_hover_bg_color', array(
    	'default' => '',
    	'sanitize_callback'	=> 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_newsletter_form_btn_hover_bg_color', array(
    	'label' => __('Subscribe Button Hover Background Color', 'vw-tourism-pro'),
    	'section' => 'vw_tourism_pro_footer_menu_section',
    	'settings' => 'vw_tourism_pro_newsletter_form_btn_hover_bg_color',
    )));

    $wp_customize->add_setting( 'vw_tourism_pro_footer_paragraph_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_footer_paragraph_color', array(
        'label' => __('Footer Paragraph Color', 'vw-tourism-pro'),
        'section' => 'vw_tourism_pro_footer_menu_section',
        'settings' => 'vw_tourism_pro_footer_paragraph_color',
    )));
    $wp_customize->add_setting('vw_tourism_pro_footer_paragraph_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_tourism_pro_footer_paragraph_font_family', array(
        'section'  => 'vw_tourism_pro_footer_menu_section',
        'label'    => __( 'Footer Paragraph Font Family','vw-tourism-pro'),
        'type'     => 'select',
        'choices'  => $font_array
    ));

    $wp_customize->add_setting('vw_tourism_pro_footer_paragraph_font_size',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_tourism_pro_footer_paragraph_font_size',array(
        'label' => __('Footer Paragraph Font Size','vw-tourism-pro'),
        'description' => __('Add font size in px','vw-tourism-pro'),
        'section' => 'vw_tourism_pro_footer_menu_section',
        'setting' => 'vw_tourism_pro_footer_paragraph_font_size',
        'type'    => 'number'
    ));
    $wp_customize->add_setting( 'vw_tourism_pro_footer_icon_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_footer_icon_color', array(
        'label' => __('Footer Icon Color', 'vw-tourism-pro'),
        'section' => 'vw_tourism_pro_footer_menu_section',
        'settings' => 'vw_tourism_pro_footer_icon_color',
    )));

    $wp_customize->add_setting('vw_tourism_pro_footer_icon_font_size',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_tourism_pro_footer_icon_font_size',array(
        'label' => __('Footer Icon Font Size','vw-tourism-pro'),
        'description' => __('Add font size in px','vw-tourism-pro'),
        'section' => 'vw_tourism_pro_footer_menu_section',
        'setting' => 'vw_tourism_pro_footer_icon_font_size',
        'type'    => 'number'
    ));

    $wp_customize->add_setting( 'vw_tourism_pro_footer_icon_border_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_footer_icon_border_color', array(
        'label' => __('Footer Icon Border Color', 'vw-tourism-pro'),
        'section' => 'vw_tourism_pro_footer_menu_section',
        'settings' => 'vw_tourism_pro_footer_icon_border_color',
    )));
    $wp_customize->add_setting( 'vw_tourism_pro_footer_icon_hover_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_footer_icon_hover_color', array(
        'label' => __('Footer Icon Hover Border Color', 'vw-tourism-pro'),
        'section' => 'vw_tourism_pro_footer_menu_section',
        'settings' => 'vw_tourism_pro_footer_icon_hover_color',
    )));


    $wp_customize->add_setting( 'vw_tourism_pro_footer_column_heading_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_footer_column_heading_color', array(
        'label' => __('Footer Column Heading Color', 'vw-tourism-pro'),
        'section' => 'vw_tourism_pro_footer_menu_section',
        'settings' => 'vw_tourism_pro_footer_column_heading_color',
    )));
    $wp_customize->add_setting('vw_tourism_pro_footer_column_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_tourism_pro_footer_column_heading_font_family', array(
        'section'  => 'vw_tourism_pro_footer_menu_section',
        'label'    => __( 'Footer Column Heading Font Family','vw-tourism-pro'),
        'type'     => 'select',
        'choices'  => $font_array
    ));

    $wp_customize->add_setting('vw_tourism_pro_footer_column_heading_font_size',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_tourism_pro_footer_column_heading_font_size',array(
        'label' => __('Footer Column Heading Font Size','vw-tourism-pro'),
        'description' => __('Add font size in px','vw-tourism-pro'),
        'section' => 'vw_tourism_pro_footer_menu_section',
        'setting' => 'vw_tourism_pro_footer_column_heading_font_size',
        'type'    => 'number'
    ));
    $wp_customize->add_setting( 'vw_tourism_pro_footer_column_menu_items_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_footer_column_menu_items_color', array(
        'label' => __('Footer Column Menu Items Color', 'vw-tourism-pro'),
        'section' => 'vw_tourism_pro_footer_menu_section',
        'settings' => 'vw_tourism_pro_footer_column_menu_items_color',
    )));
    $wp_customize->add_setting('vw_tourism_pro_footer_column_menu_items_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_tourism_pro_footer_column_menu_items_font_family', array(
        'section'  => 'vw_tourism_pro_footer_menu_section',
        'label'    => __( 'Footer Column Menu Items Font Family','vw-tourism-pro'),
        'type'     => 'select',
        'choices'  => $font_array
    ));

    $wp_customize->add_setting('vw_tourism_pro_footer_column_menu_items_font_size',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_tourism_pro_footer_column_menu_items_font_size',array(
        'label' => __('Footer Column Menu Items Font Size','vw-tourism-pro'),
        'description' => __('Add font size in px','vw-tourism-pro'),
        'section' => 'vw_tourism_pro_footer_menu_section',
        'setting' => 'vw_tourism_pro_footer_column_menu_items_font_size',
        'type'    => 'number'
    ));
    $wp_customize->add_setting( 'vw_tourism_pro_footer_column_menu_items_border_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_footer_column_menu_items_border_color', array(
        'label' => __('Footer Column Menu Items Border Color', 'vw-tourism-pro'),
        'section' => 'vw_tourism_pro_footer_menu_section',
        'settings' => 'vw_tourism_pro_footer_column_menu_items_border_color',
    )));
    // ----------Newsletter Setting--------------------
    $wp_customize->add_section('vw_tourism_pro_copyright_section',array(
        'title' => __('Copyright Setting','vw-tourism-pro'),
        'description'   => __('Add Copyright settings here','vw-tourism-pro'),
        'priority'  => null,
        'panel' => 'vw_tourism_pro_panel_id',
    ));

    $wp_customize->add_setting( 'vw_tourism_pro_copyright_border_top_color', array(
        'default' => __('','vw-tourism-pro'),
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_copyright_border_top_color', array(
        'label' => 'Border Top Color',
        'section' => 'vw_tourism_pro_copyright_section',
        'settings' => 'vw_tourism_pro_copyright_border_top_color',
    )));

    $wp_customize->add_setting('vw_tourism_pro_footer_copy',array(
          'default'   => '',
          'sanitize_callback' => 'sanitize_text_field',
      ));
      $wp_customize->add_control('vw_tourism_pro_footer_copy',array(
          'label' => __('Copyright Text','vw-tourism-pro'),
          'section'   => 'vw_tourism_pro_copyright_section',
          'type'      => 'text'
      ));
      $wp_customize->add_setting('vw_tourism_pro_footer_support_text',array(
      	'default' => '',
      	'sanitize_callback' => 'sanitize_text_field'
      ));
      $wp_customize->add_control('vw_tourism_pro_footer_support_text',array(
      	'label' => __('Support Text','vw-tourism-pro'),
      	'section' => 'vw_tourism_pro_copyright_section',
      	'setting' => 'vw_tourism_pro_footer_support_text',
      	'type' => 'text'
      ));
      $wp_customize->add_setting('vw_tourism_pro_footer_support_url',array(
      	'default' => '',
      	'sanitize_callback' => 'sanitize_text_field'
      ));
      $wp_customize->add_control('vw_tourism_pro_footer_support_url',array(
      	'label' => __('Support Url','vw-tourism-pro'),
      	'section' => 'vw_tourism_pro_copyright_section',
      	'setting' => 'vw_tourism_pro_footer_support_url',
      	'type' => 'text'
      ));
      $wp_customize->add_setting('vw_tourism_pro_footer_privacy_text',array(
      	'default' => '',
      	'sanitize_callback' => 'sanitize_text_field'
      ));
      $wp_customize->add_control('vw_tourism_pro_footer_privacy_text',array(
      	'label' => __('Privacy Text','vw-tourism-pro'),
      	'section' => 'vw_tourism_pro_copyright_section',
      	'setting' => 'vw_tourism_pro_footer_privacy_text',
      	'type' => 'text'
      ));
      $wp_customize->add_setting('vw_tourism_pro_footer_privacy_url',array(
      	'default' => '',
      	'sanitize_callback' => 'sanitize_text_field'
      ));
      $wp_customize->add_control('vw_tourism_pro_footer_privacy_url',array(
      	'label' => __('Privacy Url','vw-tourism-pro'),
      	'section' => 'vw_tourism_pro_copyright_section',
      	'setting' => 'vw_tourism_pro_footer_privacy_url',
      	'type' => 'text'
      ));
      $wp_customize->add_setting('vw_tourism_pro_footer_term_conditon_text',array(
      	'default' => '',
      	'sanitize_callback' => 'sanitize_text_field'
      ));
      $wp_customize->add_control('vw_tourism_pro_footer_term_conditon_text',array(
      	'label' => __('Conditon Text','vw-tourism-pro'),
      	'section' => 'vw_tourism_pro_copyright_section',
      	'setting' => 'vw_tourism_pro_footer_term_conditon_text',
      	'type' => 'text'
      ));
      $wp_customize->add_setting('vw_tourism_pro_footer_terms_condition_url',array(
      	'default' => '',
      	'sanitize_callback' => 'sanitize_text_field'
      ));
      $wp_customize->add_control('vw_tourism_pro_footer_terms_condition_url',array(
      	'label' => __('Condition Url','vw-tourism-pro'),
      	'section' => 'vw_tourism_pro_copyright_section',
      	'setting' => 'vw_tourism_pro_footer_terms_condition_url',
      	'type' => 'text'
      ));

    $wp_customize->add_setting( 'vw_tourism_pro_footer_copyright_text_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_footer_copyright_text_color', array(
        'label' => __('Footer Copyright Text Color', 'vw-tourism-pro'),
        'section' => 'vw_tourism_pro_copyright_section',
        'settings' => 'vw_tourism_pro_footer_copyright_text_color',
    )));
    $wp_customize->add_setting('vw_tourism_pro_footer_copyright_text_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_tourism_pro_footer_copyright_text_font_family', array(
        'section'  => 'vw_tourism_pro_copyright_section',
        'label'    => __( 'Footer Copyright Text Font Family','vw-tourism-pro'),
        'type'     => 'select',
        'choices'  => $font_array
    ));

    $wp_customize->add_setting('vw_tourism_pro_footer_copyright_text_font_size',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_tourism_pro_footer_copyright_text_font_size',array(
        'label' => __('Footer Copyright Text Font Size','vw-tourism-pro'),
        'description' => __('Add font size in px','vw-tourism-pro'),
        'section' => 'vw_tourism_pro_copyright_section',
        'setting' => 'vw_tourism_pro_footer_copyright_text_font_size',
        'type'    => 'number'
    ));

    $wp_customize->add_setting( 'vw_tourism_pro_footer_copyright_privacy_terms_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_footer_copyright_privacy_terms_color', array(
        'label' => __('Footer Privacy & Terms Text Color', 'vw-tourism-pro'),
        'section' => 'vw_tourism_pro_copyright_section',
        'settings' => 'vw_tourism_pro_footer_copyright_privacy_terms_color',
    )));
    $wp_customize->add_setting('vw_tourism_pro_footer_copyright_privacy_terms_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_tourism_pro_footer_copyright_privacy_terms_font_family', array(
        'section'  => 'vw_tourism_pro_copyright_section',
        'label'    => __( 'Footer Privacy & Terms Text Font Family','vw-tourism-pro'),
        'type'     => 'select',
        'choices'  => $font_array
    ));

    $wp_customize->add_setting('vw_tourism_pro_footer_copyright_privacy_terms_font_size',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_tourism_pro_footer_copyright_privacy_terms_font_size',array(
        'label' => __('Footer Privacy & Terms Text Font Size','vw-tourism-pro'),
        'description' => __('Add font size in px','vw-tourism-pro'),
        'section' => 'vw_tourism_pro_copyright_section',
        'setting' => 'vw_tourism_pro_footer_copyright_privacy_terms_font_size',
        'type'    => 'number'
    ));

    $wp_customize->add_setting( 'vw_tourism_pro_footer_copyright_privacy_terms_border_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_footer_copyright_privacy_terms_border_color', array(
        'label' => __('Footer Privacy & Terms Border Color', 'vw-tourism-pro'),
        'section' => 'vw_tourism_pro_copyright_section',
        'settings' => 'vw_tourism_pro_footer_copyright_privacy_terms_border_color',
    )));


    //Contact Page section--------------
    $wp_customize->add_section('vw_tourism_pro_contact_page_section',array(
        'title' => __('Contact','vw-tourism-pro'),
        'description'   => __('Add contact page settings here','vw-tourism-pro'),
        'priority'  => null,
        'panel' => 'vw_tourism_pro_panel_id',
    ));

    $wp_customize->add_setting( 'vw_tourism_pro_contact_page_bg_color', array(
        'default' => __('','vw-tourism-pro'),
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_contact_page_bg_color', array(
        'label' => 'Background Color',
        'section' => 'vw_tourism_pro_contact_page_section',
        'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-tourism-pro'),
        'settings' => 'vw_tourism_pro_contact_page_bg_color',
    )));
    $wp_customize->add_setting('vw_tourism_pro_contact_page_bg_image',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_tourism_pro_contact_page_bg_image',array(
            'label' => __('Background image','vw-tourism-pro'),
            'section' => 'vw_tourism_pro_contact_page_section',
            'settings' => 'vw_tourism_pro_contact_page_bg_image'
    )));

    $wp_customize->add_setting( 'vw_tourism_pro_contact_page_image_bg', array(
        'default'         => '',
        'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
    ));
    $wp_customize->add_control('vw_tourism_pro_contact_page_image_bg', array(
        'type'      => 'radio',
        'label'     => __('Choose image option', 'vw-tourism-pro'),
        'section'   => 'vw_tourism_pro_contact_page_section',
        'choices'   => array(
        'vw-fixed'      => __( 'Fixed', 'vw-tourism-pro' ),
        'vw-scroll'      => __( 'Scroll', 'vw-tourism-pro' ),
    )));
    $wp_customize->add_setting('vw_tourism_pro_address_longitude',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_tourism_pro_address_longitude',array(
        'label' => __('Longitude','vw-tourism-pro'),
        'section' => 'vw_tourism_pro_contact_page_section',
        'setting'   => 'vw_tourism_pro_address_longitude',
        'type'=>'text'
    ));
    $wp_customize->add_setting('vw_tourism_pro_address_latitude',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_tourism_pro_address_latitude',array(
        'label' => __('Latitude','vw-tourism-pro'),
        'section' => 'vw_tourism_pro_contact_page_section',
        'setting'   => 'vw_tourism_pro_address_latitude',
        'type'=>'text'
    ));
    $wp_customize->add_setting('vw_tourism_pro_contactpage_form_title',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vw_tourism_pro_contactpage_form_title',array(
        'label' => __('Title','vw-tourism-pro'),
        'section' => 'vw_tourism_pro_contact_page_section',
        'setting'   => 'vw_tourism_pro_contactpage_form_title',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('vw_tourism_pro_contactpage_form_subtitle',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vw_tourism_pro_contactpage_form_subtitle',array(
        'label' => __('SubTitle','vw-tourism-pro'),
        'section' => 'vw_tourism_pro_contact_page_section',
        'setting'   => 'vw_tourism_pro_contactpage_form_subtitle',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('vw_tourism_pro_contactpage_form_title',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vw_tourism_pro_contactpage_form_title',array(
        'label' => __('Add Form Title','vw-tourism-pro'),
        'section' => 'vw_tourism_pro_contact_page_section',
        'setting'   => 'vw_tourism_pro_contactpage_form_title',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('vw_tourism_pro_contactpage_form_subtitle',array(
      'default'   => '',
      'capability'         => 'edit_theme_options',
      'sanitize_callback'  => 'wp_kses_post'
    ));
    $wp_customize->add_control('vw_tourism_pro_contactpage_form_subtitle',array(
      'label' => __('Add Form Sub Title','vw-tourism-pro'),
      'section' => 'vw_tourism_pro_contact_page_section',
      'setting'   => 'vw_tourism_pro_contactpage_form_subtitle',
    ));

    $wp_customize->add_setting('vw_tourism_pro_contact_us_section_shortcode',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('vw_tourism_pro_contact_us_section_shortcode',array(
        'label' => __('Contact Form Shortcode','vw-tourism-pro'),
        'section' => 'vw_tourism_pro_contact_page_section',
        'setting'   => 'vw_tourism_pro_contact_us_section_shortcode',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('vw_tourism_pro_contact_page_form_bg_image',array(
      'default'	=> '',
      'sanitize_callback'	=> 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_tourism_pro_contact_page_form_bg_image',array(
          'label' => __('Contact Form Background Image ','vw-tourism-pro'),
          'section' => 'vw_tourism_pro_contact_page_section',
          'settings' => 'vw_tourism_pro_contact_page_form_bg_image'
    )));
    $wp_customize->add_setting( 'vw_tourism_pro_contactpage_content_color_settings',
    array(
        'default' => '',
        'transport' => 'postMessage',
        'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
    ));
    $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_contactpage_content_color_settings',
    array(
        'label' => __('Section Color & Font Setting','vw-tourism-pro'),
        'section' => 'vw_tourism_pro_contact_page_section'
    )));

    $wp_customize->add_setting( 'vw_tourism_pro_contact_page_heading_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_contact_page_heading_color', array(
        'label' => __('Contact Heading Color', 'vw-tourism-pro'),
        'section' => 'vw_tourism_pro_contact_page_section',
        'settings' => 'vw_tourism_pro_contact_page_heading_color',
    )));
    //This is Section Heading FontFamily picker setting
    $wp_customize->add_setting('vw_tourism_pro_contact_page_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_tourism_pro_contact_page_heading_font_family', array(
        'section'  => 'vw_tourism_pro_contact_page_section',
        'label'    => __( 'Heading Fonts','vw-tourism-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

    $wp_customize->add_setting('vw_tourism_pro_contact_page_heading_font_size',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_tourism_pro_contact_page_heading_font_size',array(
        'label' => __('Font Size','vw-tourism-pro'),
        'description' => __('Add font size in px','vw-tourism-pro'),
        'section' => 'vw_tourism_pro_contact_page_section',
        'setting' => 'vw_tourism_pro_contact_page_heading_font_size',
        'type'    => 'number'
    ));
    $wp_customize->add_setting( 'vw_tourism_pro_contact_page_para_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_contact_page_para_color', array(
        'label' => __('Contact Paragraph Color', 'vw-tourism-pro'),
        'section' => 'vw_tourism_pro_contact_page_section',
        'settings' => 'vw_tourism_pro_contact_page_para_color',
    )));

    $wp_customize->add_setting('vw_tourism_pro_contact_page_para_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_tourism_pro_contact_page_para_font_family', array(
        'section'  => 'vw_tourism_pro_contact_page_section',
        'label'    => __( 'Contact Paragraph Font Family','vw-tourism-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

    $wp_customize->add_setting('vw_tourism_pro_contact_page_para_font_size',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_tourism_pro_contact_page_para_font_size',array(
        'label' => __('Contact Paragraph Font Size','vw-tourism-pro'),
        'description' => __('Add font size in px','vw-tourism-pro'),
        'section' => 'vw_tourism_pro_contact_page_section',
        'setting' => 'vw_tourism_pro_contact_page_para_font_size',
        'type'    => 'number'
    ));

    $wp_customize->add_setting( 'vw_tourism_pro_contact_page_btn_color', array(
      'default' => '',
      'sanitize_callback'	=> 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_contact_page_btn_color', array(
      'label' => __('Submit Button Color', 'vw-tourism-pro'),
      'section' => 'vw_tourism_pro_contact_page_section',
      'settings' => 'vw_tourism_pro_contact_page_btn_color',
    )));
    $wp_customize->add_setting('vw_tourism_pro_contact_page_btn_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_tourism_pro_contact_page_btn_font_size',array(
      'label' => __('Submit Button Font Size','vw-tourism-pro'),
      'description' => __('Add font size in px','vw-tourism-pro'),
      'section' => 'vw_tourism_pro_contact_page_section',
      'setting' => 'vw_tourism_pro_contact_page_btn_font_size',
      'type'    => 'number'
    ));
    $wp_customize->add_setting('vw_tourism_pro_contact_page_btn_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'vw_tourism_pro_contact_page_btn_font_family', array(
        'section'  => 'vw_tourism_pro_contact_page_section',
        'label'    => __( 'Submit Button Font Family','vw-tourism-pro'),
        'type'     => 'select',
        'choices'  => $font_array
    ));
    $wp_customize->add_setting( 'vw_tourism_pro_contact_page_btn_bg_color', array(
      'default' => '',
      'sanitize_callback'	=> 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_contact_page_btn_bg_color', array(
      'label' => __('Submit Button Background Color', 'vw-tourism-pro'),
      'section' => 'vw_tourism_pro_contact_page_section',
      'settings' => 'vw_tourism_pro_contact_page_btn_bg_color',
    )));
    $wp_customize->add_setting( 'vw_tourism_pro_contact_page_btn_arrow_color', array(
      'default' => '',
      'sanitize_callback'	=> 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_contact_page_btn_arrow_color', array(
      'label' => __('Submit Button Arrow Color', 'vw-tourism-pro'),
      'section' => 'vw_tourism_pro_contact_page_section',
      'settings' => 'vw_tourism_pro_contact_page_btn_arrow_color',
    )));
    $wp_customize->add_setting( 'vw_tourism_pro_contact_page_btn_hover_bg_color', array(
      'default' => '',
      'sanitize_callback'	=> 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_contact_page_btn_hover_bg_color', array(
      'label' => __('Submit Button Hover Background Color', 'vw-tourism-pro'),
      'section' => 'vw_tourism_pro_contact_page_section',
      'settings' => 'vw_tourism_pro_contact_page_btn_hover_bg_color',
    )));
