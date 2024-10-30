<?php
  $wp_customize->add_section('vw_tourism_pro_section_ordering_settings',array(
      'title' => __('Section Ordering','vw-tourism-pro'),
      'description'=> __('Section Ordering.','vw-tourism-pro'),
      'panel' => 'vw_tourism_pro_panel_id',
  ));
  $wp_customize->add_setting( 'vw_tourism_pro_section_ordering_settings_repeater',
      array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control( new vw_tourism_pro_Repeater_Custom_Control( $wp_customize, 'vw_tourism_pro_section_ordering_settings_repeater',
      array(
        'label' => __( 'Section Reordering','vw-tourism-pro' ),
        'section' => 'vw_tourism_pro_section_ordering_settings',
        'button_labels' => array(
          'add' => __( 'Add Row','vw-tourism-pro' ),
  ))));
  $wp_customize->add_setting( 'vw_tourism_pro_section_ordering_padding_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_section_ordering_padding_settings',
    array(
    'label' => __('Section Padding Top Settings','vw-tourism-pro'),
    'section' => 'vw_tourism_pro_section_ordering_settings'
  )));
  $wp_customize->add_setting('vw_tourism_pro_banner_padding_top',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('vw_tourism_pro_banner_padding_top',array(
      'label' => __('Banner Padding Top','vw-tourism-pro'),
      'description' => __('Add Padding Top in Pixels','vw-tourism-pro'),
      'section' => 'vw_tourism_pro_section_ordering_settings',
      'setting'   => 'vw_tourism_pro_banner_padding_top',
      'type'  => 'number'
  ));
  $wp_customize->add_setting('vw_tourism_pro_activity_padding_top',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('vw_tourism_pro_activity_padding_top',array(
      'label' => __('Activity Padding Top','vw-tourism-pro'),
      'description' => __('Add Padding Top in Pixels','vw-tourism-pro'),
      'section' => 'vw_tourism_pro_section_ordering_settings',
      'setting'   => 'vw_tourism_pro_activity_padding_top',
      'type'  => 'number'
  ));
  $wp_customize->add_setting('vw_tourism_pro_about_us_padding_top',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('vw_tourism_pro_about_us_padding_top',array(
      'label' => __('About us Padding Top','vw-tourism-pro'),
      'description' => __('Add Padding Top in Pixels','vw-tourism-pro'),
      'section' => 'vw_tourism_pro_section_ordering_settings',
      'setting'   => 'vw_tourism_pro_about_us_padding_top',
      'type'  => 'number'
  ));
  $wp_customize->add_setting('vw_tourism_pro_popular_destination_padding_top',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('vw_tourism_pro_popular_destination_padding_top',array(
      'label' => __('Popular Destination Top','vw-tourism-pro'),
      'description' => __('Add Padding Top in Pixels','vw-tourism-pro'),
      'section' => 'vw_tourism_pro_section_ordering_settings',
      'setting'   => 'vw_tourism_pro_popular_destination_padding_top',
      'type'  => 'number'
  ));
  $wp_customize->add_setting('vw_tourism_pro_explore_padding_top',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('vw_tourism_pro_explore_padding_top',array(
      'label' => __('Explore Padding Top','vw-tourism-pro'),
      'description' => __('Add Padding Top in Pixels','vw-tourism-pro'),
      'section' => 'vw_tourism_pro_section_ordering_settings',
      'setting'   => 'vw_tourism_pro_explore_padding_top',
      'type'  => 'number'
  ));
  $wp_customize->add_setting('vw_tourism_pro_popular_cuisines_padding_top',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('vw_tourism_pro_popular_cuisines_padding_top',array(
      'label' => __('Popular Cuisines Padding Top','vw-tourism-pro'),
      'description' => __('Add Padding Top in Pixels','vw-tourism-pro'),
      'section' => 'vw_tourism_pro_section_ordering_settings',
      'setting'   => 'vw_tourism_pro_popular_cuisines_padding_top',
      'type'  => 'number'
  ));
  $wp_customize->add_setting('vw_tourism_pro_popular_packages_padding_top',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('vw_tourism_pro_popular_packages_padding_top',array(
      'label' => __('Our Popular Packages Padding Top','vw-tourism-pro'),
      'description' => __('Add Padding Top in Pixels','vw-tourism-pro'),
      'section' => 'vw_tourism_pro_section_ordering_settings',
      'setting'   => 'vw_tourism_pro_popular_packages_padding_top',
      'type'  => 'number'
  ));
  $wp_customize->add_setting('vw_tourism_pro_experience_padding_top',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('vw_tourism_pro_experience_padding_top',array(
      'label' => __('Experience Padding Top','vw-tourism-pro'),
      'description' => __('Add Padding Top in Pixels','vw-tourism-pro'),
      'section' => 'vw_tourism_pro_section_ordering_settings',
      'setting'   => 'vw_tourism_pro_experience_padding_top',
      'type'  => 'number'
  ));
  $wp_customize->add_setting('vw_tourism_pro_how_to_process_padding_top',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('vw_tourism_pro_how_to_process_padding_top',array(
      'label' => __('How to process Top','vw-tourism-pro'),
      'description' => __('Add Padding Top in Pixels','vw-tourism-pro'),
      'section' => 'vw_tourism_pro_section_ordering_settings',
      'setting'   => 'vw_tourism_pro_how_to_process_padding_top',
      'type'  => 'number'
  ));
  $wp_customize->add_setting('vw_tourism_pro_why_choose_us_padding_top',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('vw_tourism_pro_why_choose_us_padding_top',array(
      'label' => __('Why Choose Us Padding Top','vw-tourism-pro'),
      'description' => __('Add Padding Top in Pixels','vw-tourism-pro'),
      'section' => 'vw_tourism_pro_section_ordering_settings',
      'setting'   => 'vw_tourism_pro_why_choose_us_padding_top',
      'type'  => 'number'
  ));
  $wp_customize->add_setting('vw_tourism_pro_team_padding_top',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('vw_tourism_pro_team_padding_top',array(
      'label' => __('Team Padding Top','vw-tourism-pro'),
      'description' => __('Add Padding Top in Pixels','vw-tourism-pro'),
      'section' => 'vw_tourism_pro_section_ordering_settings',
      'setting'   => 'vw_tourism_pro_team_padding_top',
      'type'  => 'number'
  ));
  $wp_customize->add_setting('vw_tourism_pro_testimonial_padding_top',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('vw_tourism_pro_testimonial_padding_top',array(
      'label' => __('Team Padding Top','vw-tourism-pro'),
      'description' => __('Add Padding Top in Pixels','vw-tourism-pro'),
      'section' => 'vw_tourism_pro_section_ordering_settings',
      'setting'   => 'vw_tourism_pro_testimonial_padding_top',
      'type'  => 'number'
  ));
  $wp_customize->add_setting('vw_tourism_pro_blog_padding_top',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('vw_tourism_pro_blog_padding_top',array(
      'label' => __('Blog Padding Top','vw-tourism-pro'),
      'description' => __('Add Padding Top in Pixels','vw-tourism-pro'),
      'section' => 'vw_tourism_pro_section_ordering_settings',
      'setting'   => 'vw_tourism_pro_blog_padding_top',
      'type'  => 'number'
  ));
  //General Color Pallete
  $wp_customize->add_section('vw_tourism_pro_color_pallette',array(
      'title' => __('Typography / General settings','vw-tourism-pro'),
      'description'=> __('Typography settings','vw-tourism-pro'),
      'panel' => 'vw_tourism_pro_panel_id',
  ));


  $wp_customize->add_setting( 'vw_tourism_pro_theme_layout_section_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_theme_layout_section_ct_pallete',
    array(
    'label' => __('Theme Layout ','vw-tourism-pro'),
    'section' => 'vw_tourism_pro_color_pallette'
  )));

  $wp_customize->add_setting('vw_tourism_pro_radio_boxed_full_layout',
      array(
        'default' => 'full-Width',
        'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
  ));
  $wp_customize->add_control('vw_tourism_pro_radio_boxed_full_layout',
      array(
        'type' => 'radio',
        'label' => __('Choose Boxed or Full Width Layout', 'vw-tourism-pro'),
        'section' => 'vw_tourism_pro_color_pallette',
        'choices' => array(
        'full-Width' => __('Full Width', 'vw-tourism-pro'),
        'boxed' => __('Boxed', 'vw-tourism-pro')
      ),
  ));

  $wp_customize->add_setting('vw_tourism_pro_radio_boxed_full_layout_value',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('vw_tourism_pro_radio_boxed_full_layout_value',array(
      'label' => __('Add Boxed layout Width Here','vw-tourism-pro'),
      'description' => __('Value should be less than 1140px','vw-tourism-pro'),
      'section' => 'vw_tourism_pro_color_pallette',
      'setting' => 'vw_tourism_pro_radio_boxed_full_layout_value',
      'type'    => 'number'
    )
  );

  //This is Button Text FontFamily picker setting
  $wp_customize->add_setting( 'vw_tourism_pro_body_section_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_body_section_ct_pallete',
    array(
    'label' => __('Body Typography ','vw-tourism-pro'),
    'section' => 'vw_tourism_pro_color_pallette'
  )));

  $wp_customize->add_setting('vw_tourism_pro_body_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_tourism_pro_body_font_family', array(
      'section'  => 'vw_tourism_pro_color_pallette',
      'label'    => __( 'Body Font family','vw-tourism-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_tourism_pro_body_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('vw_tourism_pro_body_font_size',array(
      'label' => __('font size in px','vw-tourism-pro'),
      'section' => 'vw_tourism_pro_color_pallette',
      'setting' => 'vw_tourism_pro_body_font_size',
      'type'    => 'number'
    )
  );
  $wp_customize->add_setting( 'vw_tourism_pro_body_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_body_color', array(
    'label' => __('Body color', 'vw-tourism-pro'),
    'section' => 'vw_tourism_pro_color_pallette',
    'settings' => 'vw_tourism_pro_body_color',
  )));

  $wp_customize->add_setting( 'vw_tourism_pro_h1_section_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_h1_section_ct_pallete',
    array(
    'label' => __('H1 Typography ','vw-tourism-pro'),
    'section' => 'vw_tourism_pro_color_pallette'
  )));

  $wp_customize->add_setting('vw_tourism_pro_h1_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_tourism_pro_h1_font_family', array(
      'section'  => 'vw_tourism_pro_color_pallette',
      'label'    => __( 'H1','vw-tourism-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_tourism_pro_h1_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('vw_tourism_pro_h1_font_size',array(
      'label' => __('H1 font size in px','vw-tourism-pro'),
      'section' => 'vw_tourism_pro_color_pallette',
      'setting' => 'vw_tourism_pro_h1_font_size',
      'type'    => 'number'
    )
  );
  $wp_customize->add_setting( 'vw_tourism_pro_h1_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_h1_color', array(
    'label' => __('H1 color', 'vw-tourism-pro'),
    'section' => 'vw_tourism_pro_color_pallette',
    'settings' => 'vw_tourism_pro_h1_color',
  )));

  $wp_customize->add_setting( 'vw_tourism_pro_h2_section_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_h2_section_ct_pallete',
    array(
    'label' => __('H2 Typography ','vw-tourism-pro'),
    'section' => 'vw_tourism_pro_color_pallette'
  )));

  $wp_customize->add_setting('vw_tourism_pro_h2_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_tourism_pro_h2_font_family', array(
      'section'  => 'vw_tourism_pro_color_pallette',
      'label'    => __( 'H2','vw-tourism-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_tourism_pro_h2_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('vw_tourism_pro_h2_font_size',array(
      'label' => __('H2 font size in px','vw-tourism-pro'),
      'section' => 'vw_tourism_pro_color_pallette',
      'setting' => 'vw_tourism_pro_h2_font_size',
      'type'    => 'number'
    )
  );
  $wp_customize->add_setting( 'vw_tourism_pro_h2_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_h2_color', array(
    'label' => __('H2 color', 'vw-tourism-pro'),
    'section' => 'vw_tourism_pro_color_pallette',
    'settings' => 'vw_tourism_pro_h2_color',
  )));

  $wp_customize->add_setting( 'vw_tourism_pro_h3_section_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_h3_section_ct_pallete',
    array(
    'label' => __('H3 Typography ','vw-tourism-pro'),
    'section' => 'vw_tourism_pro_color_pallette'
  )));

  $wp_customize->add_setting('vw_tourism_pro_h3_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_tourism_pro_h3_font_family', array(
      'section'  => 'vw_tourism_pro_color_pallette',
      'label'    => __( 'H3','vw-tourism-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_tourism_pro_h3_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('vw_tourism_pro_h3_font_size',array(
      'label' => __('H3 font size in px','vw-tourism-pro'),
      'section' => 'vw_tourism_pro_color_pallette',
      'setting' => 'vw_tourism_pro_h3_font_size',
      'type'    => 'number'
    )
  );
  $wp_customize->add_setting( 'vw_tourism_pro_h3_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_h3_color', array(
    'label' => __('H3 color', 'vw-tourism-pro'),
    'section' => 'vw_tourism_pro_color_pallette',
    'settings' => 'vw_tourism_pro_h3_color',
  )));

  $wp_customize->add_setting( 'vw_tourism_pro_h4_section_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_h4_section_ct_pallete',
    array(
    'label' => __('H4 Typography ','vw-tourism-pro'),
    'section' => 'vw_tourism_pro_color_pallette'
  )));

  $wp_customize->add_setting('vw_tourism_pro_h4_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_tourism_pro_h4_font_family', array(
      'section'  => 'vw_tourism_pro_color_pallette',
      'label'    => __( 'H4','vw-tourism-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_tourism_pro_h4_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('vw_tourism_pro_h4_font_size',array(
      'label' => __('H4 font size in px','vw-tourism-pro'),
      'section' => 'vw_tourism_pro_color_pallette',
      'setting' => 'vw_tourism_pro_h4_font_size',
      'type'    => 'number'
    )
  );
  $wp_customize->add_setting( 'vw_tourism_pro_h4_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_h4_color', array(
    'label' => __('H4 color', 'vw-tourism-pro'),
    'section' => 'vw_tourism_pro_color_pallette',
    'settings' => 'vw_tourism_pro_h4_color',
  )));

  $wp_customize->add_setting( 'vw_tourism_pro_h5_section_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_h5_section_ct_pallete',
    array(
    'label' => __('H5 Typography ','vw-tourism-pro'),
    'section' => 'vw_tourism_pro_color_pallette'
  )));

  $wp_customize->add_setting('vw_tourism_pro_h5_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_tourism_pro_h5_font_family', array(
      'section'  => 'vw_tourism_pro_color_pallette',
      'label'    => __( 'H5','vw-tourism-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_tourism_pro_h5_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('vw_tourism_pro_h5_font_size',array(
      'label' => __('H5 font size in px','vw-tourism-pro'),
      'section' => 'vw_tourism_pro_color_pallette',
      'setting' => 'vw_tourism_pro_h5_font_size',
      'type'    => 'number'
    )
  );
  $wp_customize->add_setting( 'vw_tourism_pro_h5_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_h5_color', array(
    'label' => __('H5 color', 'vw-tourism-pro'),
    'section' => 'vw_tourism_pro_color_pallette',
    'settings' => 'vw_tourism_pro_h5_color',
  )));

  $wp_customize->add_setting( 'vw_tourism_pro_h6_section_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_h6_section_ct_pallete',
    array(
    'label' => __('H6 Typography ','vw-tourism-pro'),
    'section' => 'vw_tourism_pro_color_pallette'
  )));

  $wp_customize->add_setting('vw_tourism_pro_h6_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_tourism_pro_h6_font_family', array(
      'section'  => 'vw_tourism_pro_color_pallette',
      'label'    => __( 'H6','vw-tourism-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_tourism_pro_h6_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('vw_tourism_pro_h6_font_size',array(
      'label' => __('H6 font size in px','vw-tourism-pro'),
      'section' => 'vw_tourism_pro_color_pallette',
      'setting' => 'vw_tourism_pro_h6_font_size',
      'type'    => 'number'
    )
  );
  $wp_customize->add_setting( 'vw_tourism_pro_h6_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_h6_color', array(
    'label' => __('H6 color', 'vw-tourism-pro'),
    'section' => 'vw_tourism_pro_color_pallette',
    'settings' => 'vw_tourism_pro_h6_color',
  )));

  $wp_customize->add_setting( 'vw_tourism_pro_para_section_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_para_section_ct_pallete',
    array(
    'label' => __('Paragraph Typography ','vw-tourism-pro'),
    'section' => 'vw_tourism_pro_color_pallette'
  )));

  //paragarph font family
  $wp_customize->add_setting('vw_tourism_pro_paragarpah_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'vw_tourism_pro_paragarpah_font_family', array(
      'section'  => 'vw_tourism_pro_color_pallette',
      'label'    => __( 'Paragraph','vw-tourism-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('vw_tourism_pro_para_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('vw_tourism_pro_para_font_size',array(
      'label' => __('Paragraph font size in px','vw-tourism-pro'),
      'section' => 'vw_tourism_pro_color_pallette',
      'setting' => 'vw_tourism_pro_para_font_size',
      'type'    => 'number'
    )
  );
  $wp_customize->add_setting( 'vw_tourism_pro_para_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_para_color', array(
      'label' => __('Para color', 'vw-tourism-pro'),
      'section' => 'vw_tourism_pro_color_pallette',
      'settings' => 'vw_tourism_pro_para_color',
    )
  ));

  $wp_customize->add_setting( 'vw_tourism_pro_global_section_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_global_section_ct_pallete',
    array(
    'label' => __('Global Color ','vw-tourism-pro'),
    'section' => 'vw_tourism_pro_color_pallette'
  )));

  $wp_customize->add_setting( 'vw_tourism_pro_primary_section_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_primary_section_ct_pallete',
    array(
    'label' => __('Primary ','vw-tourism-pro'),
    'section' => 'vw_tourism_pro_color_pallette'
  )));

  $wp_customize->add_setting( 'vw_tourism_pro_hi_first_color', array(
    'default' => '#112542',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_hi_first_color', array(
    'label' => __('Primary Color', 'vw-tourism-pro'),
    'section' => 'vw_tourism_pro_color_pallette',
    'settings' => 'vw_tourism_pro_hi_first_color',
  )));

  $wp_customize->add_setting( 'vw_tourism_pro_secondry_section_ct_pallete',
    array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_secondry_section_ct_pallete',
    array(
    'label' => __('Secondry ','vw-tourism-pro'),
    'section' => 'vw_tourism_pro_color_pallette'
  )));

  $wp_customize->add_setting( 'vw_tourism_pro_hi_scnd_color', array(
    'default' => '#00A3EB',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_hi_scnd_color', array(
    'label' => __('Secondry Color', 'vw-tourism-pro'),
    'section' => 'vw_tourism_pro_color_pallette',
    'settings' => 'vw_tourism_pro_hi_scnd_color',
  )));
  /*------------------------ Button ---------------------------*/
  $wp_customize->add_section('vw_tourism_pro_section_button_settings',array(
      'title' => __('Button Typography','vw-tourism-pro'),
      'panel' => 'vw_tourism_pro_panel_id',
  ));
