<?php
// ---------------------About Page---------------------------
$wp_customize->add_section('vw_tourism_pro_about_page',array(
  'title'	=> __('About Page','vw-tourism-pro'),
  'description'	=> __('Add About content here.','vw-tourism-pro'),
  'panel' => 'vw_tourism_pro_panel_id',
));
$wp_customize->add_setting('vw_tourism_pro_aboutpage_mission_heading',array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_aboutpage_mission_heading',array(
  'label' => __('Mission Heading','vw-tourism-pro'),
  'section' => 'vw_tourism_pro_about_page',
  'setting' => 'vw_tourism_pro_aboutpage_mission_heading',
  'type' => 'text'
));
$wp_customize->add_setting('vw_tourism_pro_aboutpage_mission_paragraph',array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_aboutpage_mission_paragraph',array(
  'label' => __('Mission Paragaph','vw-tourism-pro'),
  'section' => 'vw_tourism_pro_about_page',
  'setting' => 'vw_tourism_pro_aboutpage_mission_paragraph',
  'type' => 'text'
));
$wp_customize->add_setting('vw_tourism_pro_aboutpage_story_heading',array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_aboutpage_story_heading',array(
  'label' => __('Story Heading','vw-tourism-pro'),
  'section' => 'vw_tourism_pro_about_page',
  'setting' => 'vw_tourism_pro_aboutpage_story_heading',
  'type' => 'text'
));
$wp_customize->add_setting('vw_tourism_pro_aboutpage_story_paragraph',array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_aboutpage_story_paragraph',array(
  'label' => __('Story Heading','vw-tourism-pro'),
  'section' => 'vw_tourism_pro_about_page',
  'setting' => 'vw_tourism_pro_aboutpage_story_paragraph',
  'type' => 'text'
));
$wp_customize->add_setting('vw_tourism_pro_aboutpage_vission_heading',array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_aboutpage_vission_heading',array(
  'label' => __('vission Heading','vw-tourism-pro'),
  'section' => 'vw_tourism_pro_about_page',
  'setting' => 'vw_tourism_pro_aboutpage_vission_heading',
  'type' => 'text'
));
$wp_customize->add_setting('vw_tourism_pro_aboutpage_vission_paragraph',array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_aboutpage_vission_paragraph',array(
  'label' => __('vission Paragaph','vw-tourism-pro'),
  'section' => 'vw_tourism_pro_about_page',
  'setting' => 'vw_tourism_pro_aboutpage_vission_paragraph',
  'type' => 'text'
));
$wp_customize->add_setting('vw_tourism_pro_aboutpage_vission_point_one',array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_aboutpage_vission_point_one',array(
  'label' => __('Vission Points','vw-tourism-pro'),
  'section' => 'vw_tourism_pro_about_page',
  'setting' => 'vw_tourism_pro_aboutpage_vission_point_one',
  'type' => 'text'
));
$wp_customize->add_setting('vw_tourism_pro_aboutpage_vission_point_two',array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_aboutpage_vission_point_two',array(
  'label' => __('Vission Points','vw-tourism-pro'),
  'section' => 'vw_tourism_pro_about_page',
  'setting' => 'vw_tourism_pro_aboutpage_vission_point_two',
  'type' => 'text'
));
$wp_customize->add_setting('vw_tourism_pro_aboutpage_vission_img_one',array(
	'default'   =>get_theme_mod('vw_tourism_pro_aboutpage_vission_img_one'),
	'sanitize_callback'	=> 'esc_url_raw',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_tourism_pro_aboutpage_vission_img_one',array(
		'label' => __('Vission Image One','vw-tourism-pro'),
		'section' => 'vw_tourism_pro_about_page',
		'settings' => 'vw_tourism_pro_aboutpage_vission_img_one'
)));
$wp_customize->add_setting('vw_tourism_pro_aboutpage_vission_img_two',array(
	'default'   =>get_theme_mod('vw_tourism_pro_aboutpage_vission_img_two'),
	'sanitize_callback'	=> 'esc_url_raw',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_tourism_pro_aboutpage_vission_img_two',array(
		'label' => __('Vission Image Two','vw-tourism-pro'),
		'section' => 'vw_tourism_pro_about_page',
		'settings' => 'vw_tourism_pro_aboutpage_vission_img_two'
)));
$wp_customize->add_setting('vw_tourism_pro_aboutpage_our_value_heading',array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_aboutpage_our_value_heading',array(
  'label' => __('Value Heading','vw-tourism-pro'),
  'section' => 'vw_tourism_pro_about_page',
  'setting' => 'vw_tourism_pro_aboutpage_our_value_heading',
  'type' => 'text'
));
$wp_customize->add_setting('vvw_tourism_pro_aboutpage_our_value_paragraph',array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vvw_tourism_pro_aboutpage_our_value_paragraph',array(
  'label' => __('Value Paragaph','vw-tourism-pro'),
  'section' => 'vw_tourism_pro_about_page',
  'setting' => 'vvw_tourism_pro_aboutpage_our_value_paragraph',
  'type' => 'text'
));
$wp_customize->add_setting('vw_tourism_pro_aboutpage_our_resource_heading',array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_aboutpage_our_resource_heading',array(
  'label' => __('Resource Heading','vw-tourism-pro'),
  'section' => 'vw_tourism_pro_about_page',
  'setting' => 'vw_tourism_pro_aboutpage_our_resource_heading',
  'type' => 'text'
));
$wp_customize->add_setting('vw_tourism_pro_aboutpage_our_resource_paragraph',array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_aboutpage_our_resource_paragraph',array(
  'label' => __('Resource Paragaph','vw-tourism-pro'),
  'section' => 'vw_tourism_pro_about_page',
  'setting' => 'vw_tourism_pro_aboutpage_our_resource_paragraph',
  'type' => 'text'
));
$wp_customize->add_setting('vw_tourism_pro_aboutpage_about_section_feature_img',array(
	'default'   =>get_theme_mod('vw_tourism_pro_aboutpage_about_section_feature_img'),
	'sanitize_callback'	=> 'esc_url_raw',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_tourism_pro_aboutpage_about_section_feature_img',array(
		'label' => __('Feature Image','vw-tourism-pro'),
		'section' => 'vw_tourism_pro_about_page',
		'settings' => 'vw_tourism_pro_aboutpage_about_section_feature_img'
)));
$wp_customize->add_setting('vw_tourism_pro_aboutpage_about_section_feature_heading',array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_aboutpage_about_section_feature_heading',array(
  'label' => __('Feature Heading','vw-tourism-pro'),
  'section' => 'vw_tourism_pro_about_page',
  'setting' => 'vw_tourism_pro_aboutpage_about_section_feature_heading',
  'type' => 'text'
));
$wp_customize->add_setting('vw_tourism_pro_aboutpage_about_section_feature_paragraph',array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_aboutpage_about_section_feature_paragraph',array(
  'label' => __('Feature Paragaph','vw-tourism-pro'),
  'section' => 'vw_tourism_pro_about_page',
  'setting' => 'vw_tourism_pro_aboutpage_about_section_feature_paragraph',
  'type' => 'text'
));
$wp_customize->add_setting('vw_tourism_pro_aboutpage_about_section_feature_point_one',array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_aboutpage_about_section_feature_point_one',array(
  'label' => __('Feature Points','vw-tourism-pro'),
  'section' => 'vw_tourism_pro_about_page',
  'setting' => 'vw_tourism_pro_aboutpage_about_section_feature_point_one',
  'type' => 'text'
));
$wp_customize->add_setting('vw_tourism_pro_aboutpage_about_section_feature_point_two',array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_aboutpage_about_section_feature_point_two',array(
  'label' => __('Feature Points','vw-tourism-pro'),
  'section' => 'vw_tourism_pro_about_page',
  'setting' => 'vw_tourism_pro_aboutpage_about_section_feature_point_two',
  'type' => 'text'
));
$wp_customize->add_setting('vw_tourism_pro_aboutpage_gallery_img_one',array(
	'default'   =>get_theme_mod('vw_tourism_pro_aboutpage_gallery_img_one'),
	'sanitize_callback'	=> 'esc_url_raw',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_tourism_pro_aboutpage_gallery_img_one',array(
		'label' => __('Gallery Image 1','vw-tourism-pro'),
		'section' => 'vw_tourism_pro_about_page',
		'settings' => 'vw_tourism_pro_aboutpage_gallery_img_one'
)));

$wp_customize->add_setting('vw_tourism_pro_aboutpage_gallery_img_two',array(
	'default'   =>get_theme_mod('vw_tourism_pro_aboutpage_gallery_img_two'),
	'sanitize_callback'	=> 'esc_url_raw',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_tourism_pro_aboutpage_gallery_img_two',array(
		'label' => __('Gallery Image 2','vw-tourism-pro'),
		'section' => 'vw_tourism_pro_about_page',
		'settings' => 'vw_tourism_pro_aboutpage_gallery_img_two'
)));
$wp_customize->add_setting('vw_tourism_pro_aboutpage_gallery_img_three',array(
	'default'   =>get_theme_mod('vw_tourism_pro_aboutpage_gallery_img_three'),
	'sanitize_callback'	=> 'esc_url_raw',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_tourism_pro_aboutpage_gallery_img_three',array(
		'label' => __('Gallery Image 3','vw-tourism-pro'),
		'section' => 'vw_tourism_pro_about_page',
		'settings' => 'vw_tourism_pro_aboutpage_gallery_img_three'
)));
$wp_customize->add_setting('vw_tourism_pro_aboutpage_gallery_img_four',array(
	'default'   =>get_theme_mod('vw_tourism_pro_aboutpage_gallery_img_four'),
	'sanitize_callback'	=> 'esc_url_raw',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_tourism_pro_aboutpage_gallery_img_four',array(
		'label' => __('Gallery Image 3','vw-tourism-pro'),
		'section' => 'vw_tourism_pro_about_page',
		'settings' => 'vw_tourism_pro_aboutpage_gallery_img_four'
)));
$wp_customize->add_setting( 'vw_tourism_pro_aboutpage_content_color_font_settings',
array(
	'default' => '',
	'transport' => 'postMessage',
	'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
));
$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_aboutpage_content_color_font_settings',
array(
	'label' => __('Section Color & Font Setting','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_about_page'
)));
$wp_customize->add_setting( 'vw_tourism_pro_about_page_heading_color', array(
'default' => '',
'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_about_page_heading_color',array(
'label' => __('Heading Color', 'vw-tourism-pro'),
'section' => 'vw_tourism_pro_about_page',
'settings' => 'vw_tourism_pro_about_page_heading_color',
)));
$wp_customize->add_setting('vw_tourism_pro_about_page_heading_font_family',array(
'default' => '',
'capability' => 'edit_theme_options',
'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
  'vw_tourism_pro_about_page_heading_font_family', array(
  'section'  => 'vw_tourism_pro_about_page',
  'label'    => __( 'Heading Font Family','vw-tourism-pro'),
  'type'     => 'select',
  'choices'  => $font_array
));
$wp_customize->add_setting('vw_tourism_pro_about_page_heading_font_size',array(
'default' => '',
'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_about_page_heading_font_size',array(
'label' => __('Heading Font Size','vw-tourism-pro'),
'description' => __('Add font size in px','vw-tourism-pro'),
'section' => 'vw_tourism_pro_about_page',
'setting' => 'vw_tourism_pro_about_page_font_size',
'type'    => 'number'
));
$wp_customize->add_setting( 'vw_tourism_pro_about_page_para_color', array(
'default' => '',
'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_about_page_para_color',array(
'label' => __('Paragaph Color', 'vw-tourism-pro'),
'section' => 'vw_tourism_pro_about_page',
'settings' => 'vw_tourism_pro_about_page_para_color',
)));
$wp_customize->add_setting('vw_tourism_pro_about_page_para_font_family',array(
'default' => '',
'capability' => 'edit_theme_options',
'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
  'vw_tourism_pro_about_page_para_font_family', array(
  'section'  => 'vw_tourism_pro_about_page',
  'label'    => __( 'Paragaph Font Family','vw-tourism-pro'),
  'type'     => 'select',
  'choices'  => $font_array
));
$wp_customize->add_setting('vw_tourism_pro_about_page_para_font_size',array(
'default' => '',
'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_about_page_para_font_size',array(
'label' => __('Paragaph Font Size','vw-tourism-pro'),
'description' => __('Add font size in px','vw-tourism-pro'),
'section' => 'vw_tourism_pro_about_page',
'setting' => 'vw_tourism_pro_about_page_para_font_size',
'type'    => 'number'
));
$wp_customize->add_setting( 'vw_tourism_pro_about_page_points_dots_color', array(
'default' => '',
'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_about_page_points_dots_color',array(
'label' => __('Points dot Color', 'vw-tourism-pro'),
'section' => 'vw_tourism_pro_about_page',
'settings' => 'vw_tourism_pro_about_page_points_dots_color',
)));


// ---------------------404 Page---------------------------
//404 Page Setting
 $wp_customize->add_section('vw_tourism_pro_404_page',array(
   'title' => __('404 Page Settings','vw-tourism-pro'),
   'panel' => 'vw_tourism_pro_panel_id',
 ));
 $wp_customize->add_setting( 'vw_tourism_pro_404_page_bgcolor', array(
   'default' => '',
   'sanitize_callback'	=> 'sanitize_hex_color'
 ));
 $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_404_page_bgcolor',array(
   'label' => __('Background Color', 'vw-tourism-pro'),
   'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-tourism-pro'),
   'section' => 'vw_tourism_pro_404_page',
   'settings' => 'vw_tourism_pro_404_page_bgcolor',
 )));
 $wp_customize->add_setting('vw_tourism_pro_404_page_bgimage',array(
     'default'   => '',
     'sanitize_callback' => 'esc_url_raw',
 ));
 $wp_customize->add_control(
     new WP_Customize_Image_Control($wp_customize,'vw_tourism_pro_404_page_bgimage',
         array(
         'label' => __('Background image','vw-tourism-pro'),
         'section' => 'vw_tourism_pro_404_page',
         'settings' => 'vw_tourism_pro_404_page_bgimage'
 )));
 $wp_customize->add_setting( 'vw_tourism_pro_404_page_bg_attachment', array(
     'default'         => '',
     'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
 ));
 $wp_customize->add_control('vw_tourism_pro_404_page_bg_attachment', array(
     'type'      => 'radio',
     'label'     => __('Choose image option', 'vw-tourism-pro'),
     'section'   => 'vw_tourism_pro_404_page',
     'choices'   => array(
     'vw-fixed'      => __( 'Fixed', 'vw-tourism-pro' ),
     'vw-scroll'      => __( 'Scroll', 'vw-tourism-pro' ),
 )));
 $wp_customize->add_setting('vw_tourism_pro_404_page_heading',array(
   'default'=> '',
   'sanitize_callback' => 'sanitize_text_field'
 ));

 $wp_customize->add_control('vw_tourism_pro_404_page_heading',array(
   'label' => __('Heading','vw-tourism-pro'),
   'section'=> 'vw_tourism_pro_404_page',
   'type'=> 'text'
 ));
 $wp_customize->add_setting('vw_tourism_pro_404_page_content',array(
   'default'=> '',
   'sanitize_callback' => 'sanitize_text_field'
 ));

 $wp_customize->add_control('vw_tourism_pro_404_page_content',array(
   'label' => __('Paragaph','vw-tourism-pro'),
   'section'=> 'vw_tourism_pro_404_page',
   'type'=> 'text'
 ));

 $wp_customize->add_setting('vw_tourism_pro_404_page_button_text',array(
   'default'=> '',
   'sanitize_callback' => 'sanitize_text_field'
 ));
 $wp_customize->add_control('vw_tourism_pro_404_page_button_text',array(
   'label' => __('Add Button Text','vw-tourism-pro'),
   'input_attrs' => array(
           'placeholder' => __( 'Back to Home Page', 'vw-tourism-pro' ),
       ),
   'section'=> 'vw_tourism_pro_404_page',
   'type'=> 'text'
 ));
 $wp_customize->add_setting( 'vw_tourism_pro_404_page_color_settings',
 array(
   'default' => '',
   'transport' => 'postMessage',
   'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
 ));
 $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_404_page_color_settings',
 array(
   'label' => __('Heading Typography','vw-tourism-pro'),
   'section' => 'vw_tourism_pro_404_page'
 )));
 $wp_customize->add_setting( 'vw_tourism_pro_404_page_title_color', array(
 'default' => '',
 'sanitize_callback'	=> 'sanitize_hex_color'
 ));
 $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_404_page_title_color',array(
 'label' => __('Heading Color', 'vw-tourism-pro'),
 'section' => 'vw_tourism_pro_404_page',
 'settings' => 'vw_tourism_pro_404_page_title_color',
 )));
 $wp_customize->add_setting('vw_tourism_pro_404_page_title_font_family',array(
 'default' => '',
 'capability' => 'edit_theme_options',
 'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
 ));
 $wp_customize->add_control(
   'vw_tourism_pro_404_page_title_font_family', array(
   'section'  => 'vw_tourism_pro_404_page',
   'label'    => __( 'Heading Font Family','vw-tourism-pro'),
   'type'     => 'select',
   'choices'  => $font_array
 ));
 $wp_customize->add_setting('vw_tourism_pro_404_page_title_font_size',array(
 'default' => '',
 'sanitize_callback' => 'sanitize_text_field'
 ));
 $wp_customize->add_control('vw_tourism_pro_404_page_title_font_size',array(
 'label' => __('Heading Font Size','vw-tourism-pro'),
 'description' => __('Add font size in px','vw-tourism-pro'),
 'section' => 'vw_tourism_pro_404_page',
 'setting' => 'vw_tourism_pro_404_page_title_font_size',
 'type'    => 'number'
 ));

 $wp_customize->add_setting( 'vw_tourism_pro_404_page_para_color', array(
 'default' => '',
 'sanitize_callback'	=> 'sanitize_hex_color'
 ));
 $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_404_page_para_color',array(
 'label' => __('Paragaph Color', 'vw-tourism-pro'),
 'section' => 'vw_tourism_pro_404_page',
 'settings' => 'vw_tourism_pro_404_page_para_color',
 )));
 $wp_customize->add_setting('vw_tourism_pro_404_page_para_font_family',array(
 'default' => '',
 'capability' => 'edit_theme_options',
 'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
 ));
 $wp_customize->add_control(
   'vw_tourism_pro_404_page_para_font_family', array(
   'section'  => 'vw_tourism_pro_404_page',
   'label'    => __( 'Paragaph Font Family','vw-tourism-pro'),
   'type'     => 'select',
   'choices'  => $font_array
 ));
 $wp_customize->add_setting('vw_tourism_pro_404_page_para_font_size',array(
 'default' => '',
 'sanitize_callback' => 'sanitize_text_field'
 ));
 $wp_customize->add_control('vw_tourism_pro_404_page_para_font_size',array(
 'label' => __('Paragaph Font Size','vw-tourism-pro'),
 'description' => __('Add font size in px','vw-tourism-pro'),
 'section' => 'vw_tourism_pro_404_page',
 'setting' => 'vw_tourism_pro_404_page_para_font_size',
 'type'    => 'number'
 ));

 $wp_customize->add_setting( 'vw_tourism_pro_404_page_btn_color', array(
 	'default' => '',
 	'sanitize_callback'	=> 'sanitize_hex_color'
 ));
 $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_404_page_btn_color', array(
 	'label' => __('Button Color', 'vw-tourism-pro'),
 	'section' => 'vw_tourism_pro_404_page',
 	'settings' => 'vw_tourism_pro_404_page_btn_color',
 )));
 $wp_customize->add_setting('vw_tourism_pro_404_page_btn_font_size',array(
 	'default' => '',
 	'sanitize_callback' => 'sanitize_text_field'
 ));
 $wp_customize->add_control('vw_tourism_pro_404_page_btn_font_size',array(
 	'label' => __('Button Font Size','vw-tourism-pro'),
 	'description' => __('Add font size in px','vw-tourism-pro'),
 	'section' => 'vw_tourism_pro_404_page',
 	'setting' => 'vw_tourism_pro_404_page_btn_font_size',
 	'type'    => 'number'
 ));
 $wp_customize->add_setting('vw_tourism_pro_404_page_btn_font_family',array(
 	'default' => '',
 	'capability' => 'edit_theme_options',
 	'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
 ));
 $wp_customize->add_control(
 		'vw_tourism_pro_404_page_btn_font_family', array(
 		'section'  => 'vw_tourism_pro_404_page',
 		'label'    => __( 'Button Font Family','vw-tourism-pro'),
 		'type'     => 'select',
 		'choices'  => $font_array
 ));
 $wp_customize->add_setting( 'vw_tourism_pro_404_page_btn_bg_color', array(
 	'default' => '',
 	'sanitize_callback'	=> 'sanitize_hex_color'
 ));
 $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_404_page_btn_bg_color', array(
 	'label' => __('Button Background Color', 'vw-tourism-pro'),
 	'section' => 'vw_tourism_pro_404_page',
 	'settings' => 'vw_tourism_pro_404_page_btn_bg_color',
 )));
 $wp_customize->add_setting( 'vw_tourism_pro_404_page_btn_arrow_color', array(
 	'default' => '',
 	'sanitize_callback'	=> 'sanitize_hex_color'
 ));
 $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_404_page_btn_arrow_color', array(
 	'label' => __('Button Arrow Color', 'vw-tourism-pro'),
 	'section' => 'vw_tourism_pro_404_page',
 	'settings' => 'vw_tourism_pro_404_page_btn_arrow_color',
 )));


 $wp_customize->add_setting( 'vw_tourism_pro_404_page_btn_hover_bg_color', array(
 	'default' => '',
 	'sanitize_callback'	=> 'sanitize_hex_color'
 ));
 $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_404_page_btn_hover_bg_color', array(
 	'label' => __('Button Hover Background Color', 'vw-tourism-pro'),
 	'section' => 'vw_tourism_pro_404_page',
 	'settings' => 'vw_tourism_pro_404_page_btn_hover_bg_color',
 )));
// ---------------------FAQ Section---------

// faq page setting
$wp_customize->add_section('vw_tourism_pro_faq_page_section',array(
   'title' => __('Faq Page','vw-tourism-pro'),
   'panel' => 'vw_tourism_pro_panel_id',
));
$wp_customize->add_setting( 'vw_tourism_pro_faq_page_bgcolor', array(
   'default' => '',
   'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_faq_page_bgcolor', array(
   'label' => __('Background Color', 'vw-tourism-pro'),
   'section' => 'vw_tourism_pro_faq_page_section',
   'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-tourism-pro'),
   'settings' => 'vw_tourism_pro_faq_page_bgcolor',
)));
$wp_customize->add_setting('vw_tourism_pro_faq_page_bgimage',array(
   'default'   => '',
   'sanitize_callback' => 'esc_url_raw',
));
$wp_customize->add_control(
   new WP_Customize_Image_Control(
       $wp_customize,
       'vw_tourism_pro_faq_page_bgimage',
       array(
           'label' => __('Background image','vw-tourism-pro'),
           'section' => 'vw_tourism_pro_faq_page_section',
           'settings' => 'vw_tourism_pro_faq_page_bgimage'
)));
$wp_customize->add_setting( 'vw_tourism_pro_aboutpage_bg_attachment', array(
 'default'         => '',
 'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control('vw_tourism_pro_aboutpage_bg_attachment', array(
 'type'      => 'radio',
 'label'     => __('Choose image option', 'vw-tourism-pro'),
 'section'   => 'vw_tourism_pro_faq_page_section',
 'choices'   => array(
 'vw-fixed'      => __( 'Fixed', 'vw-tourism-pro' ),
 'vw-scroll'      => __( 'Scroll', 'vw-tourism-pro' ),
)));

// $wp_customize->add_setting('vw_tourism_pro_faqpage_form_title',array(
//    'default'   => '',
//    'sanitize_callback' => 'sanitize_text_field',
// ));
// $wp_customize->add_control('vw_tourism_pro_faqpage_form_title',array(
//    'label' => __('Form Heading','vw-tourism-pro'),
//    'section' => 'vw_tourism_pro_faq_page_section',
//    'setting'   => 'vw_tourism_pro_faqpage_form_title',
//    'type'  => 'text'
// ));
// $wp_customize->add_setting('vw_tourism_pro_faqpage_form_subtitle',array(
//    'default'   => '',
//    'sanitize_callback' => 'sanitize_text_field',
// ));
// $wp_customize->add_control('vw_tourism_pro_faqpage_form_subtitle',array(
//    'label' => __('Form Paragraph','vw-tourism-pro'),
//    'section' => 'vw_tourism_pro_faq_page_section',
//    'setting'   => 'vw_tourism_pro_faqpage_form_subtitle',
//    'type'  => 'text'
// ));
$wp_customize->add_setting( 'vw_tourism_pro_faq_temp_faq_number',
 array(
 'default' => '',
 'transport' => 'postMessage',
 'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
));
$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_faq_temp_faq_number',
 array(
 'label' => __('Number of FAQ To SHOW','vw-tourism-pro'),
 'section' => 'vw_tourism_pro_faq_page_section'
)));
$wp_customize->add_setting('vw_tourism_pro_faq_number', array(
 'default' => '',
 'sanitize_callback' => 'sanitize_text_field',
 ));
$wp_customize->add_control('vw_tourism_pro_faq_number',array(
 'label' => __('Number of Faq','vw-tourism-pro'),
 'section' => 'vw_tourism_pro_faq_page_section',
 'type' => 'number'
));
$awrd_count = get_theme_mod("vw_tourism_pro_faq_number");
for ($i=1; $i<= $awrd_count; $i++) {
 $wp_customize->add_setting( 'vw_tourism_pro_faq_temp_faq_name'.$i,
   array(
   'default' => '',
   'transport' => 'postMessage',
   'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
 ));
 $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_faq_temp_faq_name'.$i,
   array(
   'label' => __('Question '.$i,'vw-tourism-pro'),
   'section' => 'vw_tourism_pro_faq_page_section'
 )));
 $wp_customize->add_setting('vw_tourism_pro_faq_que'.$i, array(
   'default' => '',
   'sanitize_callback' => 'sanitize_text_field',
   ));
 $wp_customize->add_control('vw_tourism_pro_faq_que'.$i,array(
   'label' => __('Faq Question','vw-tourism-pro').$i,
   'section' => 'vw_tourism_pro_faq_page_section',
   'type' => 'text'
 ));
 $wp_customize->add_setting('vw_tourism_pro_faq_ans'.$i, array(
   'default' => '',
   'sanitize_callback' => 'sanitize_text_field',
   ));
 $wp_customize->add_control('vw_tourism_pro_faq_ans'.$i,array(
   'label' => __('Faq Answer','vw-tourism-pro').$i,
   'section' => 'vw_tourism_pro_faq_page_section',
   'type' => 'text'
 ));
}

$wp_customize->add_setting( 'vw_tourism_pro_faq_temp_faq_name',
 array(
 'default' => '',
 'transport' => 'postMessage',
 'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
));
$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_faq_temp_faq_name',
 array(
 'label' => __('Heading & Text Typography','vw-tourism-pro'),
 'section' => 'vw_tourism_pro_faq_page_section'
)));
$wp_customize->add_setting( 'vw_tourism_pro_faq_que_ans_typography',
 array(
 'default' => '',
 'transport' => 'postMessage',
 'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
));
$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_faq_que_ans_typography',
 array(
 'label' => __('Quesion & Answer Typography','vw-tourism-pro'),
 'section' => 'vw_tourism_pro_faq_page_section'
)));

$wp_customize->add_setting( 'vw_tourism_pro_faq_que_color', array(
'default' => '',
'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_faq_que_color',array(
'label' => __('Faq Question Color', 'vw-tourism-pro'),
'section' => 'vw_tourism_pro_faq_page_section',
'settings' => 'vw_tourism_pro_faq_que_color',
)));

$wp_customize->add_setting('vw_tourism_pro_faq_que_font_family',array(
'default' => '',
'capability' => 'edit_theme_options',
'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
 'vw_tourism_pro_faq_que_font_family', array(
 'section'  => 'vw_tourism_pro_faq_page_section',
 'label'    => __( 'Faq Question Font Family','vw-tourism-pro'),
 'type'     => 'select',
 'choices'  => $font_array
));
$wp_customize->add_setting('vw_tourism_pro_faq_que_font_size',array(
'default' => '',
'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_faq_que_font_size',array(
'label' => __('Faq Question Font Size','vw-tourism-pro'),
'description' => __('Add font size in px','vw-tourism-pro'),
'section' => 'vw_tourism_pro_faq_page_section',
'setting' => 'vw_tourism_pro_faq_que_font_size',
'type'    => 'number'
));

$wp_customize->add_setting( 'vw_tourism_pro_faq_ans_color', array(
'default' => '',
'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_faq_ans_color',array(
'label' => __('Faq Answer Color', 'vw-tourism-pro'),
'section' => 'vw_tourism_pro_faq_page_section',
'settings' => 'vw_tourism_pro_faq_ans_color',
)));

$wp_customize->add_setting('vw_tourism_pro_faq_ans_font_family',array(
'default' => '',
'capability' => 'edit_theme_options',
'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
 'vw_tourism_pro_faq_ans_font_family', array(
 'section'  => 'vw_tourism_pro_faq_page_section',
 'label'    => __( 'Faq Answer Font Family','vw-tourism-pro'),
 'type'     => 'select',
 'choices'  => $font_array
));
$wp_customize->add_setting('vw_tourism_pro_faq_ans_font_size',array(
'default' => '',
'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_faq_ans_font_size',array(
'label' => __('Faq Answer Font Size','vw-tourism-pro'),
'description' => __('Add font size in px','vw-tourism-pro'),
'section' => 'vw_tourism_pro_faq_page_section',
'setting' => 'vw_tourism_pro_faq_ans_font_size',
'type'    => 'number'
));

$wp_customize->add_setting( 'vw_tourism_pro_faq_icon_color', array(
'default' => '',
'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_faq_icon_color',array(
'label' => __('Faq Icon Color', 'vw-tourism-pro'),
'section' => 'vw_tourism_pro_faq_page_section',
'settings' => 'vw_tourism_pro_faq_icon_color',
)));


$wp_customize->add_setting('vw_tourism_pro_faq_icon_font_size',array(
'default' => '',
'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_faq_icon_font_size',array(
'label' => __('Faq Icon Font Size','vw-tourism-pro'),
'description' => __('Add font size in px','vw-tourism-pro'),
'section' => 'vw_tourism_pro_faq_page_section',
'setting' => 'vw_tourism_pro_faq_icon_font_size',
'type'    => 'number'
));
$wp_customize->add_setting( 'vw_tourism_pro_faq_question_background_color', array(
'default' => '',
'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_faq_question_background_color',array(
'label' => __('Faq Background Color', 'vw-tourism-pro'),
'section' => 'vw_tourism_pro_faq_page_section',
'settings' => 'vw_tourism_pro_faq_question_background_color',
)));
$wp_customize->add_setting( 'vw_tourism_pro_faq_open_question_background_color', array(
'default' => '',
'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_faq_open_question_background_color',array(
'label' => __('Faq Open Background Color', 'vw-tourism-pro'),
'section' => 'vw_tourism_pro_faq_page_section',
'settings' => 'vw_tourism_pro_faq_open_question_background_color',
)));


 /*------------------Privacy Policy Section--------------*/

 $wp_customize->add_section('vw_tourism_pro_privacy_policy_page',array(
   'title'	=> __('Privacy Policy Page','vw-tourism-pro'),
   'description'	=> __('Add Privacy Policy content here.','vw-tourism-pro'),
   'panel' => 'vw_tourism_pro_panel_id',
 ));

 $wp_customize->add_setting( 'vw_tourism_pro_privacy_policy_color_font_settings',
 array(
 	'default' => '',
 	'transport' => 'postMessage',
 	'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
 ));
 $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_privacy_policy_color_font_settings',
 array(
 	'label' => __('Section Color & Font Setting','vw-tourism-pro'),
 	'section' => 'vw_tourism_pro_privacy_policy_page'
 )));

 $wp_customize->add_setting( 'vw_tourism_pro_privacy_policy_heading_color', array(
 'default' => '',
 'sanitize_callback'	=> 'sanitize_hex_color'
 ));
 $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_privacy_policy_heading_color',array(
 'label' => __('Heading Color', 'vw-tourism-pro'),
 'section' => 'vw_tourism_pro_privacy_policy_page',
 'settings' => 'vw_tourism_pro_privacy_policy_heading_color',
 )));
 $wp_customize->add_setting('vw_tourism_pro_privacy_policy_heading_font_family',array(
 'default' => '',
 'capability' => 'edit_theme_options',
 'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
 ));
 $wp_customize->add_control(
   'vw_tourism_pro_privacy_policy_heading_font_family', array(
   'section'  => 'vw_tourism_pro_privacy_policy_page',
   'label'    => __( 'Heading Font Family','vw-tourism-pro'),
   'type'     => 'select',
   'choices'  => $font_array
 ));
 $wp_customize->add_setting('vw_tourism_pro_privacy_policy_heading_font_size',array(
 'default' => '',
 'sanitize_callback' => 'sanitize_text_field'
 ));
 $wp_customize->add_control('vw_tourism_pro_privacy_policy_heading_font_size',array(
 'label' => __('Heading Font Size','vw-tourism-pro'),
 'description' => __('Add font size in px','vw-tourism-pro'),
 'section' => 'vw_tourism_pro_privacy_policy_page',
 'setting' => 'vw_tourism_pro_about_page_font_size',
 'type'    => 'number'
 ));
 $wp_customize->add_setting( 'vw_tourism_pro_privacy_policy_sub_heading_color', array(
 'default' => '',
 'sanitize_callback'	=> 'sanitize_hex_color'
 ));
 $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_privacy_policy_sub_heading_color',array(
 'label' => __('Sub Heading Color', 'vw-tourism-pro'),
 'section' => 'vw_tourism_pro_privacy_policy_page',
 'settings' => 'vw_tourism_pro_privacy_policy_sub_heading_color',
 )));
 $wp_customize->add_setting('vw_tourism_pro_privacy_policy_sub_heading_font_family',array(
 'default' => '',
 'capability' => 'edit_theme_options',
 'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
 ));
 $wp_customize->add_control(
   'vw_tourism_pro_privacy_policy_sub_heading_font_family', array(
   'section'  => 'vw_tourism_pro_privacy_policy_page',
   'label'    => __( 'Sub Heading Font Family','vw-tourism-pro'),
   'type'     => 'select',
   'choices'  => $font_array
 ));
 $wp_customize->add_setting('vw_tourism_pro_privacy_policy_sub_heading_font_size',array(
 'default' => '',
 'sanitize_callback' => 'sanitize_text_field'
 ));
 $wp_customize->add_control('vw_tourism_pro_privacy_policy_sub_heading_font_size',array(
 'label' => __('Sub Heading Font Size','vw-tourism-pro'),
 'description' => __('Add font size in px','vw-tourism-pro'),
 'section' => 'vw_tourism_pro_privacy_policy_page',
 'setting' => 'vw_tourism_pro_privacy_policy_sub_heading_font_size',
 'type'    => 'number'
 ));
 $wp_customize->add_setting( 'vw_tourism_pro_privacy_policy_sub_heading_two_color', array(
 'default' => '',
 'sanitize_callback'	=> 'sanitize_hex_color'
 ));
 $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_privacy_policy_sub_heading_two_color',array(
 'label' => __('Sub Heading Two Color', 'vw-tourism-pro'),
 'section' => 'vw_tourism_pro_privacy_policy_page',
 'settings' => 'vw_tourism_pro_privacy_policy_sub_heading_two_color',
 )));
 $wp_customize->add_setting('vw_tourism_pro_privacy_policy_sub_heading_two_font_family',array(
 'default' => '',
 'capability' => 'edit_theme_options',
 'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
 ));
 $wp_customize->add_control(
   'vw_tourism_pro_privacy_policy_sub_heading_two_font_family', array(
   'section'  => 'vw_tourism_pro_privacy_policy_page',
   'label'    => __( 'Sub Heading Two Font Family','vw-tourism-pro'),
   'type'     => 'select',
   'choices'  => $font_array
 ));
 $wp_customize->add_setting('vw_tourism_pro_privacy_policy_sub_heading_two_font_size',array(
 'default' => '',
 'sanitize_callback' => 'sanitize_text_field'
 ));
 $wp_customize->add_control('vw_tourism_pro_privacy_policy_sub_heading_two_font_size',array(
 'label' => __('Sub Heading Two Font Size','vw-tourism-pro'),
 'description' => __('Add font size in px','vw-tourism-pro'),
 'section' => 'vw_tourism_pro_privacy_policy_page',
 'setting' => 'vw_tourism_pro_privacy_policy_sub_heading_two_font_size',
 'type'    => 'number'
 ));
 $wp_customize->add_setting( 'vw_tourism_pro_privacy_policy_para_color', array(
 'default' => '',
 'sanitize_callback'	=> 'sanitize_hex_color'
 ));
 $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_privacy_policy_para_color',array(
 'label' => __('Paragaph Color', 'vw-tourism-pro'),
 'section' => 'vw_tourism_pro_privacy_policy_page',
 'settings' => 'vw_tourism_pro_privacy_policy_para_color',
 )));
 $wp_customize->add_setting('vw_tourism_pro_privacy_policy_para_font_family',array(
 'default' => '',
 'capability' => 'edit_theme_options',
 'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
 ));
 $wp_customize->add_control(
   'vw_tourism_pro_privacy_policy_para_font_family', array(
   'section'  => 'vw_tourism_pro_privacy_policy_page',
   'label'    => __( 'Paragaph Font Family','vw-tourism-pro'),
   'type'     => 'select',
   'choices'  => $font_array
 ));
 $wp_customize->add_setting('vw_tourism_pro_privacy_policy_para_font_size',array(
 'default' => '',
 'sanitize_callback' => 'sanitize_text_field'
 ));
 $wp_customize->add_control('vw_tourism_pro_privacy_policy_para_font_size',array(
 'label' => __('Paragaph Font Size','vw-tourism-pro'),
 'description' => __('Add font size in px','vw-tourism-pro'),
 'section' => 'vw_tourism_pro_privacy_policy_page',
 'setting' => 'vw_tourism_pro_about_page_font_size',
 'type'    => 'number'
 ));


  /*------------------Terms & Condtion Section--------------*/

  $wp_customize->add_section('vw_tourism_pro_terms_condtion_page',array(
    'title'	=> __('Terms Page','vw-tourism-pro'),
    'description'	=> __('Add Terms content here.','vw-tourism-pro'),
    'panel' => 'vw_tourism_pro_panel_id',
  ));

  $wp_customize->add_setting( 'vw_tourism_pro_privacy_policy_color_font_settings',
  array(
   'default' => '',
   'transport' => 'postMessage',
   'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_privacy_policy_color_font_settings',
  array(
   'label' => __('Section Color & Font Setting','vw-tourism-pro'),
   'section' => 'vw_tourism_pro_terms_condtion_page'
  )));

  $wp_customize->add_setting( 'vw_tourism_pro_terms_condtion_heading_color', array(
  'default' => '',
  'sanitize_callback'	=> 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_terms_condtion_heading_color',array(
  'label' => __('Heading Color', 'vw-tourism-pro'),
  'section' => 'vw_tourism_pro_terms_condtion_page',
  'settings' => 'vw_tourism_pro_terms_condtion_heading_color',
  )));
  $wp_customize->add_setting('vw_tourism_pro_terms_condtion_heading_font_family',array(
  'default' => '',
  'capability' => 'edit_theme_options',
  'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
    'vw_tourism_pro_terms_condtion_heading_font_family', array(
    'section'  => 'vw_tourism_pro_terms_condtion_page',
    'label'    => __( 'Heading Font Family','vw-tourism-pro'),
    'type'     => 'select',
    'choices'  => $font_array
  ));
  $wp_customize->add_setting('vw_tourism_pro_terms_condtion_heading_font_size',array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_tourism_pro_terms_condtion_heading_font_size',array(
  'label' => __('Heading Font Size','vw-tourism-pro'),
  'description' => __('Add font size in px','vw-tourism-pro'),
  'section' => 'vw_tourism_pro_terms_condtion_page',
  'setting' => 'vw_tourism_pro_about_page_font_size',
  'type'    => 'number'
  ));
  $wp_customize->add_setting( 'vw_tourism_pro_terms_condtion_para_color', array(
  'default' => '',
  'sanitize_callback'	=> 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_terms_condtion_para_color',array(
  'label' => __('Paragaph Color', 'vw-tourism-pro'),
  'section' => 'vw_tourism_pro_terms_condtion_page',
  'settings' => 'vw_tourism_pro_terms_condtion_para_color',
  )));
  $wp_customize->add_setting('vw_tourism_pro_terms_condtion_para_font_family',array(
  'default' => '',
  'capability' => 'edit_theme_options',
  'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
    'vw_tourism_pro_terms_condtion_para_font_family', array(
    'section'  => 'vw_tourism_pro_terms_condtion_page',
    'label'    => __( 'Paragaph Font Family','vw-tourism-pro'),
    'type'     => 'select',
    'choices'  => $font_array
  ));
  $wp_customize->add_setting('vw_tourism_pro_terms_condtion_para_font_size',array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_tourism_pro_terms_condtion_para_font_size',array(
  'label' => __('Paragaph Font Size','vw-tourism-pro'),
  'description' => __('Add font size in px','vw-tourism-pro'),
  'section' => 'vw_tourism_pro_terms_condtion_page',
  'setting' => 'vw_tourism_pro_about_page_font_size',
  'type'    => 'number'
  ));


// ---------------------------Support Page Css--------------


  $wp_customize->add_section('vw_tourism_pro_support_page',array(
    'title'	=> __('Support Page','vw-tourism-pro'),
    'description'	=> __('Add Support content here.','vw-tourism-pro'),
    'panel' => 'vw_tourism_pro_panel_id',
  ));

  $wp_customize->add_setting( 'vw_tourism_pro_support_page_color_font_settings',
  array(
   'default' => '',
   'transport' => 'postMessage',
   'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_support_page_color_font_settings',
  array(
   'label' => __('Section Color & Font Setting','vw-tourism-pro'),
   'section' => 'vw_tourism_pro_support_page'
  )));

  $wp_customize->add_setting( 'vw_tourism_pro_support_page_heading_color', array(
  'default' => '',
  'sanitize_callback'	=> 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_support_page_heading_color',array(
  'label' => __('Heading Color', 'vw-tourism-pro'),
  'section' => 'vw_tourism_pro_support_page',
  'settings' => 'vw_tourism_pro_support_page_heading_color',
  )));
  $wp_customize->add_setting('vw_tourism_pro_support_page_heading_font_family',array(
  'default' => '',
  'capability' => 'edit_theme_options',
  'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
    'vw_tourism_pro_support_page_heading_font_family', array(
    'section'  => 'vw_tourism_pro_support_page',
    'label'    => __( 'Heading Font Family','vw-tourism-pro'),
    'type'     => 'select',
    'choices'  => $font_array
  ));
  $wp_customize->add_setting('vw_tourism_pro_support_page_heading_font_size',array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_tourism_pro_support_page_heading_font_size',array(
  'label' => __('Heading Font Size','vw-tourism-pro'),
  'description' => __('Add font size in px','vw-tourism-pro'),
  'section' => 'vw_tourism_pro_support_page',
  'setting' => 'vw_tourism_pro_support_page_heading_font_size',
  'type'    => 'number'
  ));
  $wp_customize->add_setting( 'vw_tourism_pro_support_page_sub_heading_color', array(
  'default' => '',
  'sanitize_callback'	=> 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_support_page_sub_heading_color',array(
  'label' => __('Sub Heading Color', 'vw-tourism-pro'),
  'section' => 'vw_tourism_pro_support_page',
  'settings' => 'vw_tourism_pro_support_page_sub_heading_color',
  )));
  $wp_customize->add_setting('vw_tourism_pro_support_page_sub_heading_font_family',array(
  'default' => '',
  'capability' => 'edit_theme_options',
  'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
    'vw_tourism_pro_support_page_sub_heading_font_family', array(
    'section'  => 'vw_tourism_pro_support_page',
    'label'    => __( 'Sub Heading Font Family','vw-tourism-pro'),
    'type'     => 'select',
    'choices'  => $font_array
  ));
  $wp_customize->add_setting('vw_tourism_pro_support_page_sub_heading_font_size',array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_tourism_pro_support_page_sub_heading_font_size',array(
  'label' => __('Sub Heading Font Size','vw-tourism-pro'),
  'description' => __('Add font size in px','vw-tourism-pro'),
  'section' => 'vw_tourism_pro_support_page',
  'setting' => 'vw_tourism_pro_support_page_sub_heading_font_size',
  'type'    => 'number'
  ));
  $wp_customize->add_setting( 'vw_tourism_pro_support_page_para_color', array(
  'default' => '',
  'sanitize_callback'	=> 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_support_page_para_color',array(
  'label' => __('Paragaph Color', 'vw-tourism-pro'),
  'section' => 'vw_tourism_pro_support_page',
  'settings' => 'vw_tourism_pro_support_page_para_color',
  )));
  $wp_customize->add_setting('vw_tourism_pro_support_page_para_font_family',array(
  'default' => '',
  'capability' => 'edit_theme_options',
  'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
    'vw_tourism_pro_support_page_para_font_family', array(
    'section'  => 'vw_tourism_pro_support_page',
    'label'    => __( 'Paragaph Font Family','vw-tourism-pro'),
    'type'     => 'select',
    'choices'  => $font_array
  ));
  $wp_customize->add_setting('vw_tourism_pro_support_page_para_font_size',array(
  'default' => '',
  'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_tourism_pro_support_page_para_font_size',array(
  'label' => __('Paragaph Font Size','vw-tourism-pro'),
  'description' => __('Add font size in px','vw-tourism-pro'),
  'section' => 'vw_tourism_pro_support_page',
  'setting' => 'vw_tourism_pro_support_page_para_font_size',
  'type'    => 'number'
  ));

  $wp_customize->add_setting( 'vw_tourism_pro_support_page_border_color', array(
  'default' => '',
  'sanitize_callback'	=> 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_support_page_border_color',array(
  'label' => __('Border Color', 'vw-tourism-pro'),
  'section' => 'vw_tourism_pro_support_page',
  'settings' => 'vw_tourism_pro_support_page_border_color',
  )));

  $wp_customize->add_section('vw_tourism_pro_currency_symbol_page',array(
    'title'	=> __('Currency Symbol','vw-tourism-pro'),
    'description'	=> __('Add Currency Symbol here.','vw-tourism-pro'),
    'panel' => 'vw_tourism_pro_panel_id',
  ));


  $wp_customize->add_setting('vw_tourism_pro_packages_currency',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_tourism_pro_packages_currency',array(
    'label' => __('Packages Currency Symbol','vw-tourism-pro'),
    'section' => 'vw_tourism_pro_currency_symbol_page',
    'setting' => 'vw_tourism_pro_packages_currency',
    'type' => 'text'
  ));

  $wp_customize->add_setting('vw_tourism_pro_popular__cuisines_currency',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_tourism_pro_popular__cuisines_currency',array(
    'label' => __('Cuisines Currency Symbol','vw-tourism-pro'),
    'section' => 'vw_tourism_pro_currency_symbol_page',
    'setting' => 'vw_tourism_pro_popular__cuisines_currency',
    'type' => 'text'
  ));

  $wp_customize->add_section('vw_tourism_pro_related_page',array(
    'title'	=> __('Related Heading ','vw-tourism-pro'),
    'description'	=> __('Add Related here.','vw-tourism-pro'),
    'panel' => 'vw_tourism_pro_panel_id',
  ));

  $wp_customize->add_setting( 'vw_tourism_pro_related_page_settings',
  array(
  	'default' => '',
  	'transport' => 'postMessage',
  	'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_related_page_settings',
  array(
  	'label' => __('Single Tour Package Setting','vw-tourism-pro'),
  	'section' => 'vw_tourism_pro_related_page'
  )));

  $wp_customize->add_setting('vw_tourism_pro_places_related_post_sub_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_tourism_pro_places_related_post_sub_heading',array(
    'label' => __('Sub Heading','vw-tourism-pro'),
    'section' => 'vw_tourism_pro_related_page',
    'setting' => 'vw_tourism_pro_places_related_post_sub_heading',
    'type' => 'text'
  ));
  $wp_customize->add_setting('vw_tourism_pro_places_related_post_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_tourism_pro_places_related_post_heading',array(
    'label' => __('Heading','vw-tourism-pro'),
    'section' => 'vw_tourism_pro_related_page',
    'setting' => 'vw_tourism_pro_places_related_post_heading',
    'type' => 'text'
  ));
  $wp_customize->add_setting( 'vw_tourism_pro_team_related_page_settings',
  array(
  	'default' => '',
  	'transport' => 'postMessage',
  	'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_team_related_page_settings',
  array(
  	'label' => __('Single Team Setting','vw-tourism-pro'),
  	'section' => 'vw_tourism_pro_related_page'
  )));
  $wp_customize->add_setting('vw_tourism_pro_places_guided_post_sub_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_tourism_pro_places_guided_post_sub_heading',array(
    'label' => __('Sub Heading','vw-tourism-pro'),
    'section' => 'vw_tourism_pro_related_page',
    'setting' => 'vw_tourism_pro_places_guided_post_sub_heading',
    'type' => 'text'
  ));
  $wp_customize->add_setting('vw_tourism_pro_places_guided_post_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_tourism_pro_places_guided_post_heading',array(
    'label' => __('Heading','vw-tourism-pro'),
    'section' => 'vw_tourism_pro_related_page',
    'setting' => 'vw_tourism_pro_places_guided_post_heading',
    'type' => 'text'
  ));
 ?>
