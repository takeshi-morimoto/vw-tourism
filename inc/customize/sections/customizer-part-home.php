<?php
//------------------------------- Activity-----------------------------
$wp_customize->add_section('vw_tourism_pro_activity_sec',array(
	'title'	=> __('Activity Section','vw-tourism-pro'),
	'description'	=> __('Add Activity Setting here.','vw-tourism-pro'),
	'panel' => 'vw_tourism_pro_panel_id',
));
$wp_customize->add_setting('vw_tourism_pro_activity_enabledisable',
	array(
			'default' => 'Enable',
			'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
	));
$wp_customize->add_control(
	'vw_tourism_pro_activity_enabledisable',
		array(
				'type' => 'radio',
				'label' => __('Do you want this section', 'vw-tourism-pro'),
				'section' => 'vw_tourism_pro_activity_sec',
				'choices' => array(
						'Enable' => __('Enable', 'vw-tourism-pro'),
						'Disable' => __('Disable', 'vw-tourism-pro')
		),
	));
	$wp_customize->selective_refresh->add_partial( 'vw_tourism_pro_activity_enabledisable', array(
		'selector' => '#activity .container',
		'render_callback' => 'vw_kids_pro_customize_partial_vw_tourism_pro_activity_enabledisable',
));

$wp_customize->add_setting( 'vw_tourism_pro_activity_bgcolor', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 		'vw_tourism_pro_activity_bgcolor', array(
	'label' => 'Background Color',
	'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_activity_sec',
	'settings' => 'vw_tourism_pro_activity_bgcolor',
)));
$wp_customize->add_setting('vw_tourism_pro_activity_bgimage',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
));
$wp_customize->add_control(
		new WP_Customize_Image_Control(
				$wp_customize,
				'vw_tourism_pro_activity_bgimage',
				array(
						'label' => __('Background image','vw-tourism-pro'),
						'section' => 'vw_tourism_pro_activity_sec',
						'settings' => 'vw_tourism_pro_activity_bgimage'
)));
$wp_customize->add_setting( 'vw_tourism_pro_activity_bg_attachment', array(
		'default'         => '',
		'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control('vw_tourism_pro_activity_bg_attachment', array(
		'type'      => 'radio',
		'label'     => __('Choose image option', 'vw-tourism-pro'),
		'section'   => 'vw_tourism_pro_activity_sec',
		'choices'   => array(
		'vw-fixed'  => __( 'Fixed', 'vw-tourism-pro' ),
		'vw-scroll' => __( 'Scroll', 'vw-tourism-pro' ),
)));
$wp_customize->add_setting( 'vw_tourism_pro_activity_content_settings',
array(
	'default' => '',
	'transport' => 'postMessage',
	'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
));
$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_activity_content_settings',
array(
	'label' => __('Section Content Typography','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_activity_sec'
)));
$wp_customize->add_setting('vw_tourism_pro_activity_sub_heading',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_activity_sub_heading',array(
	'label' => __('Activity Sub Heading','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_activity_sec',
	'setting' => 'vw_tourism_pro_activity_sub_heading',
	'type' => 'text'
));
$wp_customize->add_setting('vw_tourism_pro_activity_heading',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_activity_heading',array(
	'label' => __('Activity Heading','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_activity_sec',
	'setting' => 'vw_tourism_pro_activity_heading',
	'type' => 'text'
));

$wp_customize->add_setting( 'vw_tourism_pro_activity_content_color_font_setting',
array(
	'default' => '',
	'transport' => 'postMessage',
	'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
));
$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_activity_content_color_font_setting',
array(
	'label' => __('Section Color & Font Setting','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_activity_sec'
)));

$wp_customize->add_setting( 'vw_tourism_pro_activity_sub_heading_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_activity_sub_heading_color', array(
	'label' => __('Sub Heading Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_activity_sec',
	'settings' => 'vw_tourism_pro_activity_sub_heading_color',
)));

$wp_customize->add_setting('vw_tourism_pro_activity_sub_heading_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_activity_sub_heading_font_size',array(
	'label' => __('Sub Heading Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_activity_sec',
	'setting' => 'vw_tourism_pro_activity_sub_heading_font_size',
	'type'    => 'number'
));

$wp_customize->add_setting('vw_tourism_pro_activity_sub_heading_font_family',array(
'default' => '',
'capability' => 'edit_theme_options',
'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_tourism_pro_activity_sub_heading_font_family', array(
	'section'  => 'vw_tourism_pro_activity_sec',
	'label'    => __( 'Sub Heading Font Family','vw-tourism-pro'),
	'type'     => 'select',
	'choices'  => $font_array
));
$wp_customize->add_setting( 'vw_tourism_pro_activity_heading_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_activity_heading_color', array(
	'label' => __('Heading Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_activity_sec',
	'settings' => 'vw_tourism_pro_activity_heading_color',
)));

$wp_customize->add_setting('vw_tourism_pro_activity_heading_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_activity_heading_font_size',array(
	'label' => __('Heading Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_activity_sec',
	'setting' => 'vw_tourism_pro_activity_heading_font_size',
	'type'    => 'number'
));
$wp_customize->add_setting('vw_tourism_pro_activity_heading_font_family',array(
'default' => '',
'capability' => 'edit_theme_options',
'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_tourism_pro_activity_heading_font_family', array(
	'section'  => 'vw_tourism_pro_activity_sec',
	'label'    => __( 'Heading Font Family','vw-tourism-pro'),
	'type'     => 'select',
	'choices'  => $font_array
));

$wp_customize->add_setting( 'vw_tourism_pro_activity_content_card_color_font_setting',
array(
	'default' => '',
	'transport' => 'postMessage',
	'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
));
$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_activity_content_card_color_font_setting',
array(
	'label' => __('Activity content Color & Font Setting','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_activity_sec'
)));

$wp_customize->add_setting( 'vw_tourism_pro_activity_name_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_activity_name_color', array(
	'label' => __('Activity Name Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_activity_sec',
	'settings' => 'vw_tourism_pro_activity_name_color',
)));

$wp_customize->add_setting('vw_tourism_pro_activity_name_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_activity_name_font_size',array(
	'label' => __('Activity Name Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_activity_sec',
	'setting' => 'vw_tourism_pro_activity_name_font_size',
	'type'    => 'number'
));
$wp_customize->add_setting('vw_tourism_pro_activity_name_font_family',array(
'default' => '',
'capability' => 'edit_theme_options',
'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_tourism_pro_activity_name_font_family', array(
	'section'  => 'vw_tourism_pro_activity_sec',
	'label'    => __( 'Activity Name Font Family','vw-tourism-pro'),
	'type'     => 'select',
	'choices'  => $font_array
));
$wp_customize->add_setting( 'vw_tourism_pro_activity_para_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_activity_para_color', array(
	'label' => __('Activity Paragraph Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_activity_sec',
	'settings' => 'vw_tourism_pro_activity_para_color',
)));

$wp_customize->add_setting('vw_tourism_pro_activity_para_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_activity_para_font_size',array(
	'label' => __('Activity Paragraph Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_activity_sec',
	'setting' => 'vw_tourism_pro_activity_para_font_size',
	'type'    => 'number'
));
$wp_customize->add_setting('vw_tourism_pro_activity_para_font_family',array(
'default' => '',
'capability' => 'edit_theme_options',
'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_tourism_pro_activity_para_font_family', array(
	'section'  => 'vw_tourism_pro_activity_sec',
	'label'    => __( 'Activity Paragraph Font Family','vw-tourism-pro'),
	'type'     => 'select',
	'choices'  => $font_array
));

$wp_customize->add_setting( 'vw_tourism_pro_activity_number_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_activity_number_color', array(
	'label' => __('Activity Number Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_activity_sec',
	'settings' => 'vw_tourism_pro_activity_number_color',
)));

$wp_customize->add_setting('vw_tourism_pro_activity_number_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_activity_number_font_size',array(
	'label' => __('Activity Number Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_activity_sec',
	'setting' => 'vw_tourism_pro_activity_number_font_size',
	'type'    => 'number'
));
$wp_customize->add_setting('vw_tourism_pro_activity_number_font_family',array(
'default' => '',
'capability' => 'edit_theme_options',
'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_tourism_pro_activity_number_font_family', array(
	'section'  => 'vw_tourism_pro_activity_sec',
	'label'    => __( 'Activity Number Font Family','vw-tourism-pro'),
	'type'     => 'select',
	'choices'  => $font_array
));

$wp_customize->add_setting('vw_tourism_pro_activity_number_opacity_color',array(
		'default'              => '0.1',
		'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));

$wp_customize->add_control( 'vw_tourism_pro_activity_number_opacity_color', array(
	'label'       => esc_html__( 'Number Opacity','vw-tourism-pro' ),
	'section'     => 'vw_tourism_pro_activity_sec',
	'type'        => 'select',
	'settings'    => 'vw_tourism_pro_activity_number_opacity_color',
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
/*-------------------About Section----------------------------------------*/

$wp_customize->add_section('vw_tourism_pro_about_sec',array(
	'title'	=> __('About Section','vw-tourism-pro'),
	'description'	=> __('Add About Setting here.','vw-tourism-pro'),
	'panel' => 'vw_tourism_pro_panel_id',
));
$wp_customize->add_setting('vw_tourism_pro_about_enable',
	array(
			'default' => 'Enable',
			'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
	));
$wp_customize->add_control(
	'vw_tourism_pro_about_enable',
		array(
				'type' => 'radio',
				'label' => __('Do you want this section', 'vw-tourism-pro'),
				'section' => 'vw_tourism_pro_about_sec',
				'choices' => array(
						'Enable' => __('Enable', 'vw-tourism-pro'),
						'Disable' => __('Disable', 'vw-tourism-pro')
		),
	));

	$wp_customize->selective_refresh->add_partial( 'vw_tourism_pro_about_enable', array(
		'selector' => '#about .container',
		'render_callback' => 'vw_tourism_pro_customize_partial_vw_tourism_pro_about_enable',
));

$wp_customize->add_setting( 'vw_tourism_pro_about_bgcolor', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 		'vw_tourism_pro_about_bgcolor', array(
	'label' => 'Background Color',
	'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_about_sec',
	'settings' => 'vw_tourism_pro_about_bgcolor',
)));
$wp_customize->add_setting('vw_tourism_pro_about_bgimage',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
));
$wp_customize->add_control(
		new WP_Customize_Image_Control(
				$wp_customize,
				'vw_tourism_pro_about_bgimage',
				array(
						'label' => __('Background image','vw-tourism-pro'),
						'section' => 'vw_tourism_pro_about_sec',
						'settings' => 'vw_tourism_pro_about_bgimage'
)));
$wp_customize->add_setting( 'vw_tourism_pro_about_bgimage_setting', array(
		'default'         => '',
		'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control('vw_tourism_pro_about_bgimage_setting', array(
		'type'      => 'radio',
		'label'     => __('Choose image option', 'vw-tourism-pro'),
		'section'   => 'vw_tourism_pro_about_sec',
		'choices'   => array(
		'vw-fixed'  => __( 'Fixed', 'vw-tourism-pro' ),
		'vw-scroll' => __( 'Scroll', 'vw-tourism-pro' ),
)));

$wp_customize->add_setting( 'vw_tourism_pro_about_section_content_setting',
array(
	'default' => '',
	'transport' => 'postMessage',
	'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
));
$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_about_section_content_setting',
array(
	'label' => __('About content Setting','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_about_sec'
)));

$wp_customize->add_setting('vw_tourism_pro_about_sub_heading',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_about_sub_heading',array(
	'label' => __('Sub Heading','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_about_sec',
	'setting' => 'vw_tourism_pro_about_sub_heading',
	'type' => 'text'
));
$wp_customize->add_setting('vw_tourism_pro_about_heading',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_about_heading',array(
	'label' => __('Heading','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_about_sec',
	'setting' => 'vw_tourism_pro_about_heading',
	'type' => 'text'
));
$wp_customize->add_setting('vw_tourism_pro_about_paragraph',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_about_paragraph',array(
	'label' => __('Paragraph','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_about_sec',
	'setting' => 'vw_tourism_pro_about_paragraph',
	'type' => 'text'
));
$wp_customize->add_setting('vw_tourism_pro_about_points_number',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_about_points_number',array(
	'label' => __('About Points','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_about_sec',
	'setting' => 'vw_tourism_pro_about_points_number',
	'type' => 'number'
));
	$about_points=get_theme_mod('vw_tourism_pro_about_points_number');

for ($i=1; $i <= $about_points ; $i++) {
	$wp_customize->add_setting( 'vw_tourism_pro_about_points_number_settings'.$i,
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
	));
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_about_points_number_settings'.$i,array(
		'label' => __('Points '.$i,'vw-tourism-pro'),
		'section' => 'vw_tourism_pro_about_sec'
	)));
	$wp_customize->add_setting('vw_tourism_pro_about_points_check_icon'.$i,	array(
				'default'     => get_theme_mod('vw_tourism_pro_about_points_check_icon'),
				'sanitize_callback' => 'sanitize_text_field'
			)
	);
	$wp_customize->add_control(new vw_tourism_pro_Fontawesome_Icon_Chooser(	$wp_customize,	'vw_tourism_pro_about_points_check_icon'.$i,	array(
					'settings'    => 'vw_tourism_pro_about_points_check_icon'.$i,
					'section'   => 'vw_tourism_pro_about_sec',
					'type'      => 'icon',
					'label'     => esc_html__( 'Choose  Icon', 'vw-tourism-pro' ),
				)
			)
	);
	$wp_customize->add_setting('vw_tourism_pro_about_points_title'.$i,array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_tourism_pro_about_points_title'.$i,array(
		'label' => __('Why Choose Paragraph','vw-tourism-pro'),
		'section' => 'vw_tourism_pro_about_sec',
		'setting' => 'vw_tourism_pro_about_points_title'.$i,
		'type' => 'text'
	));
}
$wp_customize->add_setting('vw_tourism_pro_about_view_more_btn_url',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_about_view_more_btn_url',array(
	'label' => __('View More Button Url','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_about_sec',
	'setting' => 'vw_tourism_pro_about_view_more_btn_url',
	'type' => 'text'
));
$wp_customize->add_setting('vw_tourism_pro_about_view_more_btn',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_about_view_more_btn',array(
	'label' => __('View More Button Text','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_about_sec',
	'setting' => 'vw_tourism_pro_about_view_more_btn',
	'type' => 'text'
));

$wp_customize->add_setting('vw_tourism_pro_about_ceo_img',array(
	'default'   =>get_theme_mod('vw_tourism_pro_about_ceo_img'),
	'sanitize_callback'	=> 'esc_url_raw',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_tourism_pro_about_ceo_img',array(
		'label' => __('Choose Video Background Image','vw-tourism-pro'),
			'description' => __('Add image size maximum 48x48', 'vw-tourism-pro'),
		'section' => 'vw_tourism_pro_about_sec',
		'settings' => 'vw_tourism_pro_about_ceo_img'
)));
$wp_customize->add_setting('vw_tourism_pro_about_ceo_heading',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_about_ceo_heading',array(
	'label' => __('CEO Heading','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_about_sec',
	'setting' => 'vw_tourism_pro_about_ceo_heading',
	'type' => 'text'
));
$wp_customize->add_setting('vw_tourism_pro_about_ceo_text',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_about_ceo_text',array(
	'label' => __('CEO Text','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_about_sec',
	'setting' => 'vw_tourism_pro_about_ceo_text',
	'type' => 'text'
));
$wp_customize->add_setting('vw_tourism_pro_about_middle_img',array(
	'default'   =>get_theme_mod('vw_tourism_pro_about_middle_img'),
	'sanitize_callback'	=> 'esc_url_raw',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_tourism_pro_about_middle_img',array(
		'label' => __('About Main Image','vw-tourism-pro'),
			'description' => __('Add image size maximum 500x500', 'vw-tourism-pro'),
		'section' => 'vw_tourism_pro_about_sec',
		'settings' => 'vw_tourism_pro_about_middle_img'
)));





// $wp_customize->add_setting('vw_tourism_pro_about_right_content_img_one',array(
// 	'default'   =>get_theme_mod('vw_tourism_pro_about_right_content_img_one'),
// 	'sanitize_callback'	=> 'esc_url_raw',
// ));
// $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_tourism_pro_about_right_content_img_one',array(
// 		'label' => __('Tourist Image','vw-tourism-pro'),
// 			'description' => __('Add image size maximum 55x55', 'vw-tourism-pro'),
// 		'section' => 'vw_tourism_pro_about_sec',
// 		'settings' => 'vw_tourism_pro_about_right_content_img_one'
// )));
// $wp_customize->add_setting('vw_tourism_pro_about_right_content_counter_one',array(
// 	'default' => '',
// 	'sanitize_callback' => 'sanitize_text_field'
// ));
// $wp_customize->add_control('vw_tourism_pro_about_right_content_counter_one',array(
// 	'label' => __('Tourist Count','vw-tourism-pro'),
// 	'section' => 'vw_tourism_pro_about_sec',
// 	'setting' => 'vw_tourism_pro_about_right_content_counter_one',
// 	'type' => 'text'
// ));
// $wp_customize->add_setting('vw_tourism_pro_about_right_content_heading_one',array(
// 	'default' => '',
// 	'sanitize_callback' => 'sanitize_text_field'
// ));
// $wp_customize->add_control('vw_tourism_pro_about_right_content_heading_one',array(
// 	'label' => __('Tourist Heading','vw-tourism-pro'),
// 	'section' => 'vw_tourism_pro_about_sec',
// 	'setting' => 'vw_tourism_pro_about_right_content_heading_one',
// 	'type' => 'text'
// ));
// $wp_customize->add_setting('vw_tourism_pro_about_right_content_img_two',array(
// 	'default'   =>get_theme_mod('vw_tourism_pro_about_right_content_img_two'),
// 	'sanitize_callback'	=> 'esc_url_raw',
// ));
// $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_tourism_pro_about_right_content_img_two',array(
// 		'label' => __('	Location Image','vw-tourism-pro'),
// 			'description' => __('Add image size maximum 55x55', 'vw-tourism-pro'),
// 		'section' => 'vw_tourism_pro_about_sec',
// 		'settings' => 'vw_tourism_pro_about_right_content_img_two'
// )));
// $wp_customize->add_setting('vw_tourism_pro_about_right_content_counter_two',array(
// 	'default' => '',
// 	'sanitize_callback' => 'sanitize_text_field'
// ));
// $wp_customize->add_control('vw_tourism_pro_about_right_content_counter_two',array(
// 	'label' => __('	Location Count','vw-tourism-pro'),
// 	'section' => 'vw_tourism_pro_about_sec',
// 	'setting' => 'vw_tourism_pro_about_right_content_counter_two',
// 	'type' => 'text'
// ));
// $wp_customize->add_setting('vw_tourism_pro_about_right_content_heading_two',array(
// 	'default' => '',
// 	'sanitize_callback' => 'sanitize_text_field'
// ));
// $wp_customize->add_control('vw_tourism_pro_about_right_content_heading_two',array(
// 	'label' => __('	Location Heading','vw-tourism-pro'),
// 	'section' => 'vw_tourism_pro_about_sec',
// 	'setting' => 'vw_tourism_pro_about_right_content_heading_two',
// 	'type' => 'text'
// ));


for ($i=1; $i <= 2 ; $i++) {
$wp_customize->add_setting( 'vw_tourism_pro_about_number_settings'.$i,
array(
	'default' => '',
	'transport' => 'postMessage',
	'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
));
$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_about_number_settings'.$i,array(
	'label' => __('Counter '.$i,'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_about_sec'
)));
$wp_customize->add_setting('vw_tourism_pro_about_counter_image'.$i,array(
			'default'   =>get_theme_mod('vw_tourism_pro_about_counter_image'.$i),
		'sanitize_callback'	=> 'esc_url_raw',
));
$wp_customize->add_control(	new WP_Customize_Image_Control($wp_customize,'vw_tourism_pro_about_counter_image'.$i,	array(
		'label' => __('Process Image size(90x85)','vw-tourism-pro'),
		'section' => 'vw_tourism_pro_about_sec',
		'settings' => 'vw_tourism_pro_about_counter_image'.$i
)));
$wp_customize->add_setting('vw_tourism_pro_about_counter_no'.$i,array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_about_counter_no'.$i,array(
	'label' => __('Count No','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_about_sec',
	'setting' => 'vw_tourism_pro_about_counter_no'.$i,
	'type' => 'text'
));
$wp_customize->add_setting('vw_tourism_pro_about_counter_no_suffix'.$i,array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_about_counter_no_suffix'.$i,array(
	'label' => __('Count Suffix','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_about_sec',
	'setting' => 'vw_tourism_pro_about_counter_no_suffix'.$i,
	'type' => 'text'
));
$wp_customize->add_setting('vw_tourism_pro_about_counter_title'.$i,array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_about_counter_title'.$i,array(
	'label' => __('Count Title','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_about_sec',
	'setting' => 'vw_tourism_pro_about_counter_title'.$i,
	'type' => 'text'
));
}
$wp_customize->add_setting( 'vw_tourism_pro_about_section_content_color_font_setting',
array(
	'default' => '',
	'transport' => 'postMessage',
	'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
));
$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_about_section_content_color_font_setting',
array(
	'label' => __('About content Color Font Setting','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_about_sec'
)));

$wp_customize->add_setting( 'vw_tourism_pro_about_sub_heading_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_about_sub_heading_color', array(
	'label' => __('Sub Heading Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_about_sec',
	'settings' => 'vw_tourism_pro_about_sub_heading_color',
)));

$wp_customize->add_setting('vw_tourism_pro_about_sub_heading_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_about_sub_heading_font_size',array(
	'label' => __('Sub Heading Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_about_sec',
	'setting' => 'vw_tourism_pro_about_sub_heading_font_size',
	'type'    => 'number'
));

$wp_customize->add_setting('vw_tourism_pro_about_sub_heading_font_family',array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
		'vw_tourism_pro_about_sub_heading_font_family', array(
		'section'  => 'vw_tourism_pro_about_sec',
		'label'    => __( 'Sub Headings  Font Family','vw-tourism-pro'),
		'type'     => 'select',
		'choices'  => $font_array
));
$wp_customize->add_setting( 'vw_tourism_pro_about_heading_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_about_heading_color', array(
	'label' => __('Heading Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_about_sec',
	'settings' => 'vw_tourism_pro_about_heading_color',
)));

$wp_customize->add_setting('vw_tourism_pro_about_heading_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_about_heading_font_size',array(
	'label' => __('Heading Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_about_sec',
	'setting' => 'vw_tourism_pro_about_heading_font_size',
	'type'    => 'number'
));

$wp_customize->add_setting('vw_tourism_pro_about_heading_font_family',array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
		'vw_tourism_pro_about_heading_font_family', array(
		'section'  => 'vw_tourism_pro_about_sec',
		'label'    => __( 'Heading Font Family','vw-tourism-pro'),
		'type'     => 'select',
		'choices'  => $font_array
));
$wp_customize->add_setting( 'vw_tourism_pro_about_paragraph_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_about_paragraph_color', array(
	'label' => __('Paragraph Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_about_sec',
	'settings' => 'vw_tourism_pro_about_paragraph_color',
)));

$wp_customize->add_setting('vw_tourism_pro_about_paragraph_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_about_paragraph_font_size',array(
	'label' => __('Paragraph Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_about_sec',
	'setting' => 'vw_tourism_pro_about_paragraph_font_size',
	'type'    => 'number'
));

$wp_customize->add_setting('vw_tourism_pro_about_paragraph_font_family',array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
		'vw_tourism_pro_about_paragraph_font_family', array(
		'section'  => 'vw_tourism_pro_about_sec',
		'label'    => __( 'Paragraph Font Family','vw-tourism-pro'),
		'type'     => 'select',
		'choices'  => $font_array
));
$wp_customize->add_setting( 'vw_tourism_pro_about_points_title_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_about_points_title_color', array(
	'label' => __('Points Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_about_sec',
	'settings' => 'vw_tourism_pro_about_points_title_color',
)));

$wp_customize->add_setting('vw_tourism_pro_about_points_title_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_about_points_title_font_size',array(
	'label' => __('Points Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_about_sec',
	'setting' => 'vw_tourism_pro_about_points_title_font_size',
	'type'    => 'number'
));

$wp_customize->add_setting('vw_tourism_pro_about_points_title_font_family',array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
		'vw_tourism_pro_about_points_title_font_family', array(
		'section'  => 'vw_tourism_pro_about_sec',
		'label'    => __( 'Points Font Family','vw-tourism-pro'),
		'type'     => 'select',
		'choices'  => $font_array
));
$wp_customize->add_setting( 'vw_tourism_pro_about_points_icon_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_about_points_icon_color', array(
	'label' => __('Points Icon Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_about_sec',
	'settings' => 'vw_tourism_pro_about_points_icon_color',
)));
$wp_customize->add_setting( 'vw_tourism_pro_about_points_icon_bg_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_about_points_icon_bg_color', array(
	'label' => __('Points Icon Background Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_about_sec',
	'settings' => 'vw_tourism_pro_about_points_icon_bg_color',
)));
$wp_customize->add_setting( 'vw_tourism_pro_about_border_bottom_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_about_border_bottom_color', array(
	'label' => __('Border Bottom Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_about_sec',
	'settings' => 'vw_tourism_pro_about_border_bottom_color',
)));
$wp_customize->add_setting( 'vw_tourism_pro_about_view_more_btn_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_about_view_more_btn_color', array(
	'label' => __('View More Button Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_about_sec',
	'settings' => 'vw_tourism_pro_about_view_more_btn_color',
)));
$wp_customize->add_setting('vw_tourism_pro_about_view_more_btn_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_about_view_more_btn_font_size',array(
	'label' => __('View More Button Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_about_sec',
	'setting' => 'vw_tourism_pro_about_view_more_btn_font_size',
	'type'    => 'number'
));
$wp_customize->add_setting('vw_tourism_pro_about_view_more_btn_font_family',array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
		'vw_tourism_pro_about_view_more_btn_font_family', array(
		'section'  => 'vw_tourism_pro_about_sec',
		'label'    => __( 'View More Button Font Family','vw-tourism-pro'),
		'type'     => 'select',
		'choices'  => $font_array
));
$wp_customize->add_setting( 'vw_tourism_pro_about_view_more_btn_bg_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_about_view_more_btn_bg_color', array(
	'label' => __('View More Button Background Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_about_sec',
	'settings' => 'vw_tourism_pro_about_view_more_btn_bg_color',
)));
$wp_customize->add_setting( 'vw_tourism_pro_about_view_more_btn_arrow_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_about_view_more_btn_arrow_color', array(
	'label' => __('View More Button Arrow Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_about_sec',
	'settings' => 'vw_tourism_pro_about_view_more_btn_arrow_color',
)));


$wp_customize->add_setting( 'vw_tourism_pro_about_view_more_btn_hover_bg_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_about_view_more_btn_hover_bg_color', array(
	'label' => __('View More Button Hover Background Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_about_sec',
	'settings' => 'vw_tourism_pro_about_view_more_btn_hover_bg_color',
)));

$wp_customize->add_setting( 'vw_tourism_pro_about_ceo_heading_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_about_ceo_heading_color', array(
	'label' => __('CEO Name Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_about_sec',
	'settings' => 'vw_tourism_pro_about_ceo_heading_color',
)));
$wp_customize->add_setting('vw_tourism_pro_about_ceo_heading_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_about_ceo_heading_font_size',array(
	'label' => __('CEO Name Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_about_sec',
	'setting' => 'vw_tourism_pro_about_ceo_heading_font_size',
	'type'    => 'number'
));
$wp_customize->add_setting('vw_tourism_pro_about_ceo_heading_font_family',array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
		'vw_tourism_pro_about_ceo_heading_font_family', array(
		'section'  => 'vw_tourism_pro_about_sec',
		'label'    => __( 'CEO Name Font Family','vw-tourism-pro'),
		'type'     => 'select',
		'choices'  => $font_array
));
$wp_customize->add_setting( 'vw_tourism_pro_about_ceo_text_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_about_ceo_text_color', array(
	'label' => __('CEO Text Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_about_sec',
	'settings' => 'vw_tourism_pro_about_ceo_text_color',
)));
$wp_customize->add_setting('vw_tourism_pro_about_ceo_text_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_about_ceo_text_font_size',array(
	'label' => __('CEO Text Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_about_sec',
	'setting' => 'vw_tourism_pro_about_ceo_text_font_size',
	'type'    => 'number'
));
$wp_customize->add_setting('vw_tourism_pro_about_ceo_text_font_family',array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
		'vw_tourism_pro_about_ceo_text_font_family', array(
		'section'  => 'vw_tourism_pro_about_sec',
		'label'    => __( 'CEO Text Font Family','vw-tourism-pro'),
		'type'     => 'select',
		'choices'  => $font_array
));

$wp_customize->add_setting( 'vw_tourism_pro_about_right_box_bg_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_about_right_box_bg_color', array(
	'label' => __('Counter Box Background Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_about_sec',
	'settings' => 'vw_tourism_pro_about_right_box_bg_color',
)));

$wp_customize->add_setting( 'vw_tourism_pro_about_right_content_counter_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_about_right_content_counter_color', array(
	'label' => __('Counter Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_about_sec',
	'settings' => 'vw_tourism_pro_about_right_content_counter_color',
)));
$wp_customize->add_setting('vw_tourism_pro_about_right_content_counter_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_about_right_content_counter_font_size',array(
	'label' => __('Counter Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_about_sec',
	'setting' => 'vw_tourism_pro_about_right_content_counter_font_size',
	'type'    => 'number'
));
$wp_customize->add_setting('vw_tourism_pro_about_right_content_counter_font_family',array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
		'vw_tourism_pro_about_right_content_counter_font_family', array(
		'section'  => 'vw_tourism_pro_about_sec',
		'label'    => __( 'Counter Font Family','vw-tourism-pro'),
		'type'     => 'select',
		'choices'  => $font_array
));
$wp_customize->add_setting( 'vw_tourism_pro_about_right_content_heading_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_about_right_content_heading_color', array(
	'label' => __('Counter Heading Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_about_sec',
	'settings' => 'vw_tourism_pro_about_right_content_heading_color',
)));
$wp_customize->add_setting('vw_tourism_pro_about_right_content_heading_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_about_right_content_heading_font_size',array(
	'label' => __('Counter Heading Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_about_sec',
	'setting' => 'vw_tourism_pro_about_right_content_heading_font_size',
	'type'    => 'number'
));
$wp_customize->add_setting('vw_tourism_pro_about_right_content_heading_font_family',array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
		'vw_tourism_pro_about_right_content_heading_font_family', array(
		'section'  => 'vw_tourism_pro_about_sec',
		'label'    => __( 'Counter Heading Font Family','vw-tourism-pro'),
		'type'     => 'select',
		'choices'  => $font_array
));
	/*-------------------Destination----------------------------------------*/

	$wp_customize->add_section('vw_tourism_pro_destination_sec',array(
		'title'	=> __('Destination Section','vw-tourism-pro'),
		'description'	=> __('Add Destination Setting here.','vw-tourism-pro'),
		'panel' => 'vw_tourism_pro_panel_id',
	));
	$wp_customize->add_setting('vw_tourism_pro_popular_destination_enabledisable',
		array(
				'default' => 'Enable',
				'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
		));
	$wp_customize->add_control(
		'vw_tourism_pro_popular_destination_enabledisable',
			array(
					'type' => 'radio',
					'label' => __('Do you want this section', 'vw-tourism-pro'),
					'section' => 'vw_tourism_pro_destination_sec',
					'choices' => array(
							'Enable' => __('Enable', 'vw-tourism-pro'),
							'Disable' => __('Disable', 'vw-tourism-pro')
			),
		));

		$wp_customize->selective_refresh->add_partial( 'vw_tourism_pro_popular_destination_enabledisable', array(
			'selector' => '#popular-destination .container',
			'render_callback' => 'vw_tourism_pro_customize_partial_vw_tourism_pro_popular_destination_enabledisable',
	));

	$wp_customize->add_setting( 'vw_tourism_pro_popular_destination_bgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 		'vw_tourism_pro_popular_destination_bgcolor', array(
		'label' => 'Background Color',
    'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-tourism-pro'),
		'section' => 'vw_tourism_pro_destination_sec',
		'settings' => 'vw_tourism_pro_popular_destination_bgcolor',
	)));
	$wp_customize->add_setting('vw_tourism_pro_popular_destination_bgimage',array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'vw_tourism_pro_popular_destination_bgimage',
	        array(
	            'label' => __('Background image','vw-tourism-pro'),
	            'section' => 'vw_tourism_pro_destination_sec',
	            'settings' => 'vw_tourism_pro_popular_destination_bgimage'
	)));
	$wp_customize->add_setting( 'vw_tourism_pro_popular_destination_bg_attachment', array(
	    'default'         => '',
	    'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
	));
	$wp_customize->add_control('vw_tourism_pro_popular_destination_bg_attachment', array(
	    'type'      => 'radio',
	    'label'     => __('Choose image option', 'vw-tourism-pro'),
	    'section'   => 'vw_tourism_pro_destination_sec',
	    'choices'   => array(
			'vw-fixed'  => __( 'Fixed', 'vw-tourism-pro' ),
	    'vw-scroll' => __( 'Scroll', 'vw-tourism-pro' ),
	)));

	$wp_customize->add_setting( 'vw_tourism_pro_popular_destination_content_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
	));
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_popular_destination_content_settings',
	array(
		'label' => __('Section Content Setting','vw-tourism-pro'),
		'section' => 'vw_tourism_pro_our_blog_sec'
	)));

	$wp_customize->add_setting('vw_tourism_pro_popular_destination_sub_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_tourism_pro_popular_destination_sub_heading',array(
    'label' => __('Sub Heading','vw-tourism-pro'),
    'section' => 'vw_tourism_pro_destination_sec',
    'setting' => 'vw_tourism_pro_popular_destination_sub_heading',
    'type' => 'text'
  ));

	$wp_customize->add_setting('vw_tourism_pro_popular_destination_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_tourism_pro_popular_destination_heading',array(
    'label' => __('Heading','vw-tourism-pro'),
    'section' => 'vw_tourism_pro_destination_sec',
    'setting' => 'vw_tourism_pro_popular_destination_heading',
    'type' => 'text'
  ));

	$wp_customize->add_setting( 'vw_tourism_pro_popular_destination_content_color_font_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
	));
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_popular_destination_content_color_font_settings',
	array(
		'label' => __('Section Content Color & Font Setting','vw-tourism-pro'),
		'section' => 'vw_tourism_pro_destination_sec'
	)));

	$wp_customize->add_setting( 'vw_tourism_pro_popular_destination_sub_heading_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_popular_destination_sub_heading_color', array(
		'label' => __('Sub Heading Color', 'vw-tourism-pro'),
		'section' => 'vw_tourism_pro_destination_sec',
		'settings' => 'vw_tourism_pro_popular_destination_sub_heading_color',
	)));

	$wp_customize->add_setting('vw_tourism_pro_popular_destination_sub_heading_font_size',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_tourism_pro_popular_destination_sub_heading_font_size',array(
		'label' => __('Sub Heading Font Size','vw-tourism-pro'),
		'description' => __('Add font size in px','vw-tourism-pro'),
		'section' => 'vw_tourism_pro_destination_sec',
		'setting' => 'vw_tourism_pro_popular_destination_sub_heading_font_size',
		'type'    => 'number'
	));

	$wp_customize->add_setting('vw_tourism_pro_popular_destination_sub_heading_font_family',array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
	));
	$wp_customize->add_control(
		'vw_tourism_pro_popular_destination_sub_heading_font_family', array(
		'section'  => 'vw_tourism_pro_destination_sec',
		'label'    => __( 'Sub Heading Font Family','vw-tourism-pro'),
		'type'     => 'select',
		'choices'  => $font_array
	));
	$wp_customize->add_setting( 'vw_tourism_pro_popular_destination_heading_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_popular_destination_heading_color', array(
		'label' => __('Heading Color', 'vw-tourism-pro'),
		'section' => 'vw_tourism_pro_destination_sec',
		'settings' => 'vw_tourism_pro_popular_destination_heading_color',
	)));

	$wp_customize->add_setting('vw_tourism_pro_popular_destination_heading_font_size',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_tourism_pro_popular_destination_heading_font_size',array(
		'label' => __('Heading Font Size','vw-tourism-pro'),
		'description' => __('Add font size in px','vw-tourism-pro'),
		'section' => 'vw_tourism_pro_destination_sec',
		'setting' => 'vw_tourism_pro_popular_destination_heading_font_size',
		'type'    => 'number'
	));

	$wp_customize->add_setting('vw_tourism_pro_popular_destination_heading_font_family',array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
	));
	$wp_customize->add_control(
		'vw_tourism_pro_popular_destination_heading_font_family', array(
		'section'  => 'vw_tourism_pro_destination_sec',
		'label'    => __( 'Heading Font Family','vw-tourism-pro'),
		'type'     => 'select',
		'choices'  => $font_array
	));
	$wp_customize->add_setting( 'vw_tourism_pro_popular_destination_name_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_popular_destination_name_color', array(
		'label' => __('Destination Name Color', 'vw-tourism-pro'),
		'section' => 'vw_tourism_pro_destination_sec',
		'settings' => 'vw_tourism_pro_popular_destination_name_color',
	)));

	$wp_customize->add_setting('vw_tourism_pro_popular_destination_name_font_size',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_tourism_pro_popular_destination_name_font_size',array(
		'label' => __('Destination Name Font Size','vw-tourism-pro'),
		'description' => __('Add font size in px','vw-tourism-pro'),
		'section' => 'vw_tourism_pro_destination_sec',
		'setting' => 'vw_tourism_pro_popular_destination_name_font_size',
		'type'    => 'number'
	));

	$wp_customize->add_setting('vw_tourism_pro_popular_destination_name_font_family',array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
	));
	$wp_customize->add_control(
		'vw_tourism_pro_popular_destination_name_font_family', array(
		'section'  => 'vw_tourism_pro_destination_sec',
		'label'    => __( 'Destination Name Font Family','vw-tourism-pro'),
		'type'     => 'select',
		'choices'  => $font_array
	));
	$wp_customize->add_setting( 'vw_tourism_pro_popular_destination_type_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_popular_destination_type_color', array(
		'label' => __('Destination Type Color', 'vw-tourism-pro'),
		'section' => 'vw_tourism_pro_destination_sec',
		'settings' => 'vw_tourism_pro_popular_destination_type_color',
	)));

	$wp_customize->add_setting('vw_tourism_pro_popular_destination_type_font_size',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_tourism_pro_popular_destination_type_font_size',array(
		'label' => __('Destination Type Font Size','vw-tourism-pro'),
		'description' => __('Add font size in px','vw-tourism-pro'),
		'section' => 'vw_tourism_pro_destination_sec',
		'setting' => 'vw_tourism_pro_popular_destination_type_font_size',
		'type'    => 'number'
	));

	$wp_customize->add_setting('vw_tourism_pro_popular_destination_type_font_family',array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
	));
	$wp_customize->add_control(
		'vw_tourism_pro_popular_destination_type_font_family', array(
		'section'  => 'vw_tourism_pro_destination_sec',
		'label'    => __( 'Destination Type Font Family','vw-tourism-pro'),
		'type'     => 'select',
		'choices'  => $font_array
	));

	$wp_customize->add_setting( 'vw_tourism_pro_popular_destination_border_gradient_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_popular_destination_border_gradient_color', array(
		'label' => __('Border Gradient Color', 'vw-tourism-pro'),
		'section' => 'vw_tourism_pro_destination_sec',
		'settings' => 'vw_tourism_pro_popular_destination_border_gradient_color',
	)));

	$wp_customize->add_setting( 'vw_tourism_pro_popular_destination_arrow_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_popular_destination_arrow_color', array(
		'label' => __('Arrow  Color', 'vw-tourism-pro'),
		'section' => 'vw_tourism_pro_destination_sec',
		'settings' => 'vw_tourism_pro_popular_destination_arrow_color',
	)));
	$wp_customize->add_setting( 'vw_tourism_pro_popular_destination_arrow_bg_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_popular_destination_arrow_bg_color', array(
		'label' => __('Arrow Background Color', 'vw-tourism-pro'),
		'section' => 'vw_tourism_pro_destination_sec',
		'settings' => 'vw_tourism_pro_popular_destination_arrow_bg_color',
	)));

// ---------------------------------Explore Section--------------------------


$wp_customize->add_section('vw_tourism_pro_explore_sec',array(
	'title'	=> __('Explore Section','vw-tourism-pro'),
	'description'	=> __('Add Explore Setting here.','vw-tourism-pro'),
	'panel' => 'vw_tourism_pro_panel_id',
));
$wp_customize->add_setting('vw_tourism_pro_explore_enabledisable',
	array(
			'default' => 'Enable',
			'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
	));
$wp_customize->add_control(
	'vw_tourism_pro_explore_enabledisable',
		array(
				'type' => 'radio',
				'label' => __('Do you want this section', 'vw-tourism-pro'),
				'section' => 'vw_tourism_pro_explore_sec',
				'choices' => array(
						'Enable' => __('Enable', 'vw-tourism-pro'),
						'Disable' => __('Disable', 'vw-tourism-pro')
		),
	));

	$wp_customize->selective_refresh->add_partial( 'vw_tourism_pro_explore_enabledisable', array(
		'selector' => '#explore .container',
		'render_callback' => 'vw_tourism_pro_customize_partial_vw_tourism_pro_explore_enabledisable',
));

$wp_customize->add_setting( 'vw_tourism_pro_explore_bgcolor', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 		'vw_tourism_pro_explore_bgcolor', array(
	'label' => 'Background Color',
	'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_explore_sec',
	'settings' => 'vw_tourism_pro_explore_bgcolor',
)));
$wp_customize->add_setting('vw_tourism_pro_explore_bgimage',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
));
$wp_customize->add_control(	new WP_Customize_Image_Control($wp_customize,'vw_tourism_pro_explore_bgimage',	array(
		'label' => __('Background image','vw-tourism-pro'),
		'section' => 'vw_tourism_pro_explore_sec',
		'settings' => 'vw_tourism_pro_explore_bgimage'
)));
$wp_customize->add_setting( 'vw_tourism_pro_explore_bg_attachment', array(
		'default'         => '',
		'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control('vw_tourism_pro_explore_bg_attachment', array(
		'type'      => 'radio',
		'label'     => __('Choose image option', 'vw-tourism-pro'),
		'section'   => 'vw_tourism_pro_explore_sec',
		'choices'   => array(
		'vw-fixed'  => __( 'Fixed', 'vw-tourism-pro' ),
		'vw-scroll' => __( 'Scroll', 'vw-tourism-pro' ),
)));
$wp_customize->add_setting( 'vw_tourism_pro_explore_content_settings',
array(
	'default' => '',
	'transport' => 'postMessage',
	'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
));
$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_explore_content_settings',
array(
	'label' => __('Section Content Typoghraphy','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_explore_sec'
)));
$wp_customize->add_setting('vw_tourism_pro_explore_sub_heading',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_explore_sub_heading',array(
	'label' => __('Sub Heading','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_explore_sec',
	'setting' => 'vw_tourism_pro_explore_sub_heading',
	'type' => 'text'
));
$wp_customize->add_setting('vw_tourism_pro_explore_heading',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_explore_heading',array(
	'label' => __('Heading','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_explore_sec',
	'setting' => 'vw_tourism_pro_explore_heading',
	'type' => 'text'
));
$wp_customize->add_setting('vw_tourism_pro_explore_paragraph',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_explore_paragraph',array(
	'label' => __('Paragraph','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_explore_sec',
	'setting' => 'vw_tourism_pro_explore_paragraph',
	'type' => 'text'
));

$wp_customize->add_setting( 'vw_tourism_pro_explore_content_color_font_settings',
array(
	'default' => '',
	'transport' => 'postMessage',
	'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
));
$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_explore_content_color_font_settings',
array(
	'label' => __('Section Color & Font Setting','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_explore_sec'
)));

$wp_customize->add_setting( 'vw_tourism_pro_explore_sub_heading_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_explore_sub_heading_color', array(
	'label' => __('Sub Heading Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_explore_sec',
	'settings' => 'vw_tourism_pro_explore_sub_heading_color',
)));

$wp_customize->add_setting('vw_tourism_pro_explore_sub_heading_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_explore_sub_heading_font_size',array(
	'label' => __('Sub Heading Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_explore_sec',
	'setting' => 'vw_tourism_pro_explore_sub_heading_font_size',
	'type'    => 'number'
));

$wp_customize->add_setting('vw_tourism_pro_explore_sub_heading_font_family',array(
'default' => '',
'capability' => 'edit_theme_options',
'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_tourism_pro_explore_sub_heading_font_family', array(
	'section'  => 'vw_tourism_pro_explore_sec',
	'label'    => __( 'Sub Heading Font Family','vw-tourism-pro'),
	'type'     => 'select',
	'choices'  => $font_array
));
$wp_customize->add_setting( 'vw_tourism_pro_explore_heading_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_explore_heading_color', array(
	'label' => __('Heading Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_explore_sec',
	'settings' => 'vw_tourism_pro_explore_heading_color',
)));

$wp_customize->add_setting('vw_tourism_pro_explore_heading_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_explore_heading_font_size',array(
	'label' => __('Heading Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_explore_sec',
	'setting' => 'vw_tourism_pro_explore_heading_font_size',
	'type'    => 'number'
));

$wp_customize->add_setting('vw_tourism_pro_explore_heading_font_family',array(
'default' => '',
'capability' => 'edit_theme_options',
'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_tourism_pro_explore_heading_font_family', array(
	'section'  => 'vw_tourism_pro_explore_sec',
	'label'    => __( 'Heading Font Family','vw-tourism-pro'),
	'type'     => 'select',
	'choices'  => $font_array
));
$wp_customize->add_setting( 'vw_tourism_pro_explore_paragraph_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_explore_paragraph_color', array(
	'label' => __('Paragraph Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_explore_sec',
	'settings' => 'vw_tourism_pro_explore_paragraph_color',
)));

$wp_customize->add_setting('vw_tourism_pro_explore_paragraph_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_explore_paragraph_font_size',array(
	'label' => __('Paragraph Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_explore_sec',
	'setting' => 'vw_tourism_pro_explore_paragraph_font_size',
	'type'    => 'number'
));

$wp_customize->add_setting('vw_tourism_pro_explore_paragraph_font_family',array(
'default' => '',
'capability' => 'edit_theme_options',
'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_tourism_pro_explore_paragraph_font_family', array(
	'section'  => 'vw_tourism_pro_explore_sec',
	'label'    => __( 'Paragraph Font Family','vw-tourism-pro'),
	'type'     => 'select',
	'choices'  => $font_array
));
$wp_customize->add_setting( 'vw_tourism_pro_explore_inner_heading_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_explore_inner_heading_color', array(
	'label' => __('Inner Heading Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_explore_sec',
	'settings' => 'vw_tourism_pro_explore_inner_heading_color',
)));

$wp_customize->add_setting('vw_tourism_pro_explore_inner_heading_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_explore_inner_heading_font_size',array(
	'label' => __('Inner Heading Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_explore_sec',
	'setting' => 'vw_tourism_pro_explore_inner_heading_font_size',
	'type'    => 'number'
));

$wp_customize->add_setting('vw_tourism_pro_explore_inner_heading_font_family',array(
'default' => '',
'capability' => 'edit_theme_options',
'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_tourism_pro_explore_inner_heading_font_family', array(
	'section'  => 'vw_tourism_pro_explore_sec',
	'label'    => __( 'Inner Heading Font Family','vw-tourism-pro'),
	'type'     => 'select',
	'choices'  => $font_array
));

$wp_customize->add_setting( 'vw_tourism_pro_explore_inner_heading_dropdown_text_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_explore_inner_heading_dropdown_text_color', array(
	'label' => __('Dropdown Text Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_explore_sec',
	'settings' => 'vw_tourism_pro_explore_inner_heading_dropdown_text_color',
)));

$wp_customize->add_setting('vw_tourism_pro_explore_inner_heading_dropdown_text_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_explore_inner_heading_dropdown_text_font_size',array(
	'label' => __('Dropdown Text Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_explore_sec',
	'setting' => 'vw_tourism_pro_explore_inner_heading_dropdown_text_font_size',
	'type'    => 'number'
));

$wp_customize->add_setting('vw_tourism_pro_explore_inner_heading_dropdown_text_font_family',array(
'default' => '',
'capability' => 'edit_theme_options',
'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_tourism_pro_explore_inner_heading_dropdown_text_font_family', array(
	'section'  => 'vw_tourism_pro_explore_sec',
	'label'    => __( 'Dropdown Text  Font Family','vw-tourism-pro'),
	'type'     => 'select',
	'choices'  => $font_array
));
$wp_customize->add_setting( 'vw_tourism_pro_explore_inner_heading_dropdown_text_hover_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_explore_inner_heading_dropdown_text_hover_color', array(
	'label' => __('Dropdown Text Hover Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_explore_sec',
	'settings' => 'vw_tourism_pro_explore_inner_heading_dropdown_text_hover_color',
)));

$wp_customize->add_setting( 'vw_tourism_pro_explore_inner_heading_arrow_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_explore_inner_heading_arrow_color', array(
	'label' => __('Inner Heading Arrow Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_explore_sec',
	'settings' => 'vw_tourism_pro_explore_inner_heading_arrow_color',
)));
$wp_customize->add_setting( 'vw_tourism_pro_explore_inner_paragraph_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_explore_inner_paragraph_color', array(
	'label' => __('Inner Paragraph Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_explore_sec',
	'settings' => 'vw_tourism_pro_explore_inner_paragraph_color',
)));

$wp_customize->add_setting('vw_tourism_pro_explore_inner_paragraph_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_explore_inner_paragraph_font_size',array(
	'label' => __('Inner Paragraph Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_explore_sec',
	'setting' => 'vw_tourism_pro_explore_inner_paragraph_font_size',
	'type'    => 'number'
));

$wp_customize->add_setting('vw_tourism_pro_explore_inner_paragraph_font_family',array(
'default' => '',
'capability' => 'edit_theme_options',
'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_tourism_pro_explore_inner_paragraph_font_family', array(
	'section'  => 'vw_tourism_pro_explore_sec',
	'label'    => __( 'Inner Paragraph Font Family','vw-tourism-pro'),
	'type'     => 'select',
	'choices'  => $font_array
));
$wp_customize->add_setting( 'vw_tourism_pro_explore_feild_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_explore_feild_color', array(
	'label' => __('Field Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_explore_sec',
	'settings' => 'vw_tourism_pro_explore_feild_color',
)));

$wp_customize->add_setting('vw_tourism_pro_explore_feild_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_explore_feild_font_size',array(
	'label' => __('Field Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_explore_sec',
	'setting' => 'vw_tourism_pro_explore_feild_font_size',
	'type'    => 'number'
));

$wp_customize->add_setting('vw_tourism_pro_explore_feild_font_family',array(
'default' => '',
'capability' => 'edit_theme_options',
'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_tourism_pro_explore_feild_font_family', array(
	'section'  => 'vw_tourism_pro_explore_sec',
	'label'    => __( 'Field Font Family','vw-tourism-pro'),
	'type'     => 'select',
	'choices'  => $font_array
));

$wp_customize->add_setting( 'vw_tourism_pro_explore_feild_bg_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_explore_feild_bg_color', array(
	'label' => __('Field Background Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_explore_sec',
	'settings' => 'vw_tourism_pro_explore_feild_bg_color',
)));
$wp_customize->add_setting( 'vw_tourism_pro_explore_inner_content_border_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_explore_inner_content_border_color', array(
	'label' => __('Inner Content Border Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_explore_sec',
	'settings' => 'vw_tourism_pro_explore_inner_content_border_color',
)));
$wp_customize->add_setting( 'vw_tourism_pro_explore_arrow_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_explore_arrow_color', array(
	'label' => __('Arrow Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_explore_sec',
	'settings' => 'vw_tourism_pro_explore_arrow_color',
)));
$wp_customize->add_setting( 'vw_tourism_pro_explore_arrow_bg_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_explore_arrow_bg_color', array(
	'label' => __('Arrow Background Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_explore_sec',
	'settings' => 'vw_tourism_pro_explore_arrow_bg_color',
)));
$wp_customize->add_setting('vw_tourism_pro_explore_map_img',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
));
$wp_customize->add_control(	new WP_Customize_Image_Control($wp_customize,'vw_tourism_pro_explore_map_img',	array(
		'label' => __('Map  image','vw-tourism-pro'),
		'section' => 'vw_tourism_pro_explore_sec',
		'settings' => 'vw_tourism_pro_explore_map_img'
)));
/*-------------------Popular Cuisines----------------------------------------*/

$wp_customize->add_section('vw_tourism_pro_popular_cuisines_sec',array(
	'title'	=> __('Popular Cuisines Section','vw-tourism-pro'),
	'description'	=> __('Add Popular Cuisines Setting here.','vw-tourism-pro'),
	'panel' => 'vw_tourism_pro_panel_id',
));
$wp_customize->add_setting('vw_tourism_pro_popular_cuisines_enabledisable',
	array(
			'default' => 'Enable',
			'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
	));
$wp_customize->add_control(
	'vw_tourism_pro_popular_cuisines_enabledisable',
		array(
				'type' => 'radio',
				'label' => __('Do you want this section', 'vw-tourism-pro'),
				'section' => 'vw_tourism_pro_popular_cuisines_sec',
				'choices' => array(
						'Enable' => __('Enable', 'vw-tourism-pro'),
						'Disable' => __('Disable', 'vw-tourism-pro')
		),
	));

	$wp_customize->selective_refresh->add_partial( 'vw_tourism_pro_popular_cuisines_enabledisable', array(
		'selector' => '#popular-cuisines .container',
		'render_callback' => 'vw_tourism_pro_customize_partial_vw_tourism_pro_popular_cuisines_enabledisable',
));

$wp_customize->add_setting( 'vw_tourism_pro_popular_cuisines_bgcolor', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 		'vw_tourism_pro_popular_cuisines_bgcolor', array(
	'label' => 'Background Color',
	'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_cuisines_sec',
	'settings' => 'vw_tourism_pro_popular_cuisines_bgcolor',
)));
$wp_customize->add_setting('vw_tourism_pro_popular_cuisines_bgimage',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
));
$wp_customize->add_control(	new WP_Customize_Image_Control($wp_customize,'vw_tourism_pro_popular_cuisines_bgimage',	array(
		'label' => __('Background image','vw-tourism-pro'),
		'section' => 'vw_tourism_pro_popular_cuisines_sec',
		'settings' => 'vw_tourism_pro_popular_cuisines_bgimage'
)));
$wp_customize->add_setting( 'vw_tourism_pro_popular_cuisines_bg_attachment', array(
		'default'         => '',
		'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control('vw_tourism_pro_popular_cuisines_bg_attachment', array(
		'type'      => 'radio',
		'label'     => __('Choose image option', 'vw-tourism-pro'),
		'section'   => 'vw_tourism_pro_popular_cuisines_sec',
		'choices'   => array(
		'vw-fixed'  => __( 'Fixed', 'vw-tourism-pro' ),
		'vw-scroll' => __( 'Scroll', 'vw-tourism-pro' ),
)));
$wp_customize->add_setting( 'vw_tourism_pro_popular_cuisines_content_settings',
array(
	'default' => '',
	'transport' => 'postMessage',
	'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
));
$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_popular_cuisines_content_settings',
array(
	'label' => __('Section Content Setting','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_cuisines_sec'
)));
$wp_customize->add_setting('vw_tourism_pro_cuisines_sub_heading',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_cuisines_sub_heading',array(
	'label' => __('Sub Heading','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_cuisines_sec',
	'setting' => 'vw_tourism_pro_cuisines_sub_heading',
	'type' => 'text'
));
$wp_customize->add_setting('vw_tourism_pro_cuisines_heading',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_cuisines_heading',array(
	'label' => __('Heading','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_cuisines_sec',
	'setting' => 'vw_tourism_pro_cuisines_heading',
	'type' => 'text'
));

$wp_customize->add_setting('vw_tourism_pro_cuisines_paragraph',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_cuisines_paragraph',array(
	'label' => __('Paragraph','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_cuisines_sec',
	'setting' => 'vw_tourism_pro_cuisines_paragraph',
	'type' => 'text'
));

$wp_customize->add_setting( 'vw_tourism_pro_popular_cuisines_content_color_font_settings',
array(
	'default' => '',
	'transport' => 'postMessage',
	'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
));
$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_popular_cuisines_content_color_font_settings',
array(
	'label' => __('Section Content Color & Font Setting','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_cuisines_sec'
)));


$wp_customize->add_setting( 'vw_tourism_pro_cuisines_sub_heading_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_cuisines_sub_heading_color', array(
	'label' => __('Sub Heading Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_cuisines_sec',
	'settings' => 'vw_tourism_pro_cuisines_sub_heading_color',
)));

$wp_customize->add_setting('vw_tourism_pro_cuisines_sub_heading_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_cuisines_sub_heading_font_size',array(
	'label' => __('Sub Heading Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_cuisines_sec',
	'setting' => 'vw_tourism_pro_cuisines_sub_heading_font_size',
	'type'    => 'number'
));

$wp_customize->add_setting('vw_tourism_pro_cuisines_sub_heading_font_family',array(
'default' => '',
'capability' => 'edit_theme_options',
'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_tourism_pro_cuisines_sub_heading_font_family', array(
	'section'  => 'vw_tourism_pro_popular_cuisines_sec',
	'label'    => __( 'Sub Heading Font Family','vw-tourism-pro'),
	'type'     => 'select',
	'choices'  => $font_array
));
$wp_customize->add_setting( 'vw_tourism_pro_cuisines_heading_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_cuisines_heading_color', array(
	'label' => __('Heading Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_cuisines_sec',
	'settings' => 'vw_tourism_pro_cuisines_heading_color',
)));

$wp_customize->add_setting('vw_tourism_pro_cuisines_heading_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_cuisines_heading_font_size',array(
	'label' => __('Heading Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_cuisines_sec',
	'setting' => 'vw_tourism_pro_cuisines_heading_font_size',
	'type'    => 'number'
));

$wp_customize->add_setting('vw_tourism_pro_cuisines_heading_font_family',array(
'default' => '',
'capability' => 'edit_theme_options',
'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_tourism_pro_cuisines_heading_font_family', array(
	'section'  => 'vw_tourism_pro_popular_cuisines_sec',
	'label'    => __( 'Heading Font Family','vw-tourism-pro'),
	'type'     => 'select',
	'choices'  => $font_array
));
$wp_customize->add_setting( 'vw_tourism_pro_cuisines_paragraph_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_cuisines_paragraph_color', array(
	'label' => __('Paragraph Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_cuisines_sec',
	'settings' => 'vw_tourism_pro_cuisines_paragraph_color',
)));

$wp_customize->add_setting('vw_tourism_pro_cuisines_paragraph_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_cuisines_paragraph_font_size',array(
	'label' => __('Paragraph Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_cuisines_sec',
	'setting' => 'vw_tourism_pro_cuisines_paragraph_font_size',
	'type'    => 'number'
));

$wp_customize->add_setting('vw_tourism_pro_cuisines_paragraph_font_family',array(
'default' => '',
'capability' => 'edit_theme_options',
'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_tourism_pro_cuisines_paragraph_font_family', array(
	'section'  => 'vw_tourism_pro_popular_cuisines_sec',
	'label'    => __( 'Paragraph Font Family','vw-tourism-pro'),
	'type'     => 'select',
	'choices'  => $font_array
));

$wp_customize->add_setting( 'vw_tourism_pro_cuisines_inner_color_font_settings',
array(
	'default' => '',
	'transport' => 'postMessage',
	'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
));
$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_cuisines_inner_color_font_settings',
array(
	'label' => __('Popular Cuisines Color & Font Setting','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_cuisines_sec'
)));

$wp_customize->add_setting( 'vw_tourism_pro_cuisines_name_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_cuisines_name_color', array(
	'label' => __('Cuisines Name Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_cuisines_sec',
	'settings' => 'vw_tourism_pro_cuisines_name_color',
)));

$wp_customize->add_setting('vw_tourism_pro_cuisines_name_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_cuisines_name_font_size',array(
	'label' => __('Cuisines Name Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_cuisines_sec',
	'setting' => 'vw_tourism_pro_cuisines_name_font_size',
	'type'    => 'number'
));

$wp_customize->add_setting('vw_tourism_pro_cuisines_name_font_family',array(
'default' => '',
'capability' => 'edit_theme_options',
'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_tourism_pro_cuisines_name_font_family', array(
	'section'  => 'vw_tourism_pro_popular_cuisines_sec',
	'label'    => __( 'Cuisines Name Font Family','vw-tourism-pro'),
	'type'     => 'select',
	'choices'  => $font_array
));
$wp_customize->add_setting( 'vw_tourism_pro_cuisines_paragraph_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_cuisines_paragraph_color', array(
	'label' => __('Cuisines Paragraph Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_cuisines_sec',
	'settings' => 'vw_tourism_pro_cuisines_paragraph_color',
)));

$wp_customize->add_setting('vw_tourism_pro_cuisines_paragraph_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_cuisines_paragraph_font_size',array(
	'label' => __('Cuisines Paragraph Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_cuisines_sec',
	'setting' => 'vw_tourism_pro_cuisines_paragraph_font_size',
	'type'    => 'number'
));

$wp_customize->add_setting('vw_tourism_pro_cuisines_paragraph_font_family',array(
'default' => '',
'capability' => 'edit_theme_options',
'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_tourism_pro_cuisines_paragraph_font_family', array(
	'section'  => 'vw_tourism_pro_popular_cuisines_sec',
	'label'    => __( 'Cuisines Paragraph Font Family','vw-tourism-pro'),
	'type'     => 'select',
	'choices'  => $font_array
));
$wp_customize->add_setting( 'vw_tourism_pro_cuisines_price_location_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_cuisines_price_location_color', array(
	'label' => __('Cuisines Price & Location Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_cuisines_sec',
	'settings' => 'vw_tourism_pro_cuisines_price_location_color',
)));

$wp_customize->add_setting('vw_tourism_pro_cuisines_price_location_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_cuisines_price_location_font_size',array(
	'label' => __('Cuisines Price & Location Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_cuisines_sec',
	'setting' => 'vw_tourism_pro_cuisines_price_location_font_size',
	'type'    => 'number'
));

$wp_customize->add_setting('vw_tourism_pro_cuisines_price_location_font_family',array(
'default' => '',
'capability' => 'edit_theme_options',
'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_tourism_pro_cuisines_price_location_font_family', array(
	'section'  => 'vw_tourism_pro_popular_cuisines_sec',
	'label'    => __( 'Cuisines Price & Location Font Family','vw-tourism-pro'),
	'type'     => 'select',
	'choices'  => $font_array
));
$wp_customize->add_setting( 'vw_tourism_pro_cuisines_price_location_icon_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_cuisines_price_location_icon_color', array(
	'label' => __('Cuisines Icon Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_cuisines_sec',
	'settings' => 'vw_tourism_pro_cuisines_price_location_icon_color',
)));

$wp_customize->add_setting( 'vw_tourism_pro_cuisines_regular_price_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_cuisines_regular_price_color', array(
	'label' => __('Cuisines Regular Price Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_cuisines_sec',
	'settings' => 'vw_tourism_pro_cuisines_regular_price_color',
)));

$wp_customize->add_setting('vw_tourism_pro_cuisines_regular_price_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_cuisines_regular_price_font_size',array(
	'label' => __('Cuisines Regular Price Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_cuisines_sec',
	'setting' => 'vw_tourism_pro_cuisines_regular_price_font_size',
	'type'    => 'number'
));

$wp_customize->add_setting('vw_tourism_pro_cuisines_regular_price_font_family',array(
'default' => '',
'capability' => 'edit_theme_options',
'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_tourism_pro_cuisines_regular_price_font_family', array(
	'section'  => 'vw_tourism_pro_popular_cuisines_sec',
	'label'    => __( 'Cuisines Regular Price Font Family','vw-tourism-pro'),
	'type'     => 'select',
	'choices'  => $font_array
));
$wp_customize->add_setting( 'vw_tourism_pro_cuisines_sale_price_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_cuisines_sale_price_color', array(
	'label' => __('Cuisines Sale Price Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_cuisines_sec',
	'settings' => 'vw_tourism_pro_cuisines_sale_price_color',
)));

$wp_customize->add_setting('vw_tourism_pro_cuisines_sale_price_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_cuisines_sale_price_font_size',array(
	'label' => __('Cuisines Sale Price Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_cuisines_sec',
	'setting' => 'vw_tourism_pro_cuisines_sale_price_font_size',
	'type'    => 'number'
));

$wp_customize->add_setting('vw_tourism_pro_cuisines_sale_price_font_family',array(
'default' => '',
'capability' => 'edit_theme_options',
'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_tourism_pro_cuisines_sale_price_font_family', array(
	'section'  => 'vw_tourism_pro_popular_cuisines_sec',
	'label'    => __( 'Cuisines Sale Price Font Family','vw-tourism-pro'),
	'type'     => 'select',
	'choices'  => $font_array
));
$wp_customize->add_setting( 'vw_tourism_pro_cuisines_border_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_cuisines_border_color', array(
	'label' => __('Cuisines Border Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_cuisines_sec',
	'settings' => 'vw_tourism_pro_cuisines_border_color',
)));

$wp_customize->add_setting( 'vw_tourism_pro_cuisines_hot_recipe_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_cuisines_hot_recipe_color', array(
	'label' => __('Hot Recipe Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_cuisines_sec',
	'settings' => 'vw_tourism_pro_cuisines_hot_recipe_color',
)));

$wp_customize->add_setting('vw_tourism_pro_cuisines_hot_recipe_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_cuisines_hot_recipe_font_size',array(
	'label' => __('Hot Recipe Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_cuisines_sec',
	'setting' => 'vw_tourism_pro_cuisines_hot_recipe_font_size',
	'type'    => 'number'
));

$wp_customize->add_setting('vw_tourism_pro_cuisines_hot_recipe_font_family',array(
'default' => '',
'capability' => 'edit_theme_options',
'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_tourism_pro_cuisines_hot_recipe_font_family', array(
	'section'  => 'vw_tourism_pro_popular_cuisines_sec',
	'label'    => __( 'Hot Recipe Font Family','vw-tourism-pro'),
	'type'     => 'select',
	'choices'  => $font_array
));

$wp_customize->add_setting( 'vw_tourism_pro_cuisines_hot_recipe_bg_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_cuisines_hot_recipe_bg_color', array(
	'label' => __('Hot Recipe Background Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_cuisines_sec',
	'settings' => 'vw_tourism_pro_cuisines_hot_recipe_bg_color',
)));
$wp_customize->add_setting( 'vw_tourism_pro_cuisines_img_border_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_cuisines_img_border_color', array(
	'label' => __('Image Border Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_cuisines_sec',
	'settings' => 'vw_tourism_pro_cuisines_img_border_color',
)));
$wp_customize->add_setting( 'vw_tourism_pro_cuisines_arrow_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_cuisines_arrow_color', array(
	'label' => __('Arrow Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_cuisines_sec',
	'settings' => 'vw_tourism_pro_cuisines_arrow_color',
)));
$wp_customize->add_setting( 'vw_tourism_pro_cuisines_arrow_bg_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_cuisines_arrow_bg_color', array(
	'label' => __('Arrow Background Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_cuisines_sec',
	'settings' => 'vw_tourism_pro_cuisines_arrow_bg_color',
)));
$wp_customize->add_setting( 'vw_tourism_pro_cuisines_middle_arrow_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_cuisines_middle_arrow_color', array(
	'label' => __('Middle Arrow Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_cuisines_sec',
	'settings' => 'vw_tourism_pro_cuisines_middle_arrow_color',
)));

	/*-------------------Our Popular Packages----------------------------------------*/

	$wp_customize->add_section('vw_tourism_pro_popular_packages_sec',array(
		'title'	=> __('Our Popular Packages Section','vw-tourism-pro'),
		'description'	=> __('Add Our Popular Packages Setting here.','vw-tourism-pro'),
		'panel' => 'vw_tourism_pro_panel_id',
	));
	$wp_customize->add_setting('vw_tourism_pro_popular_packages_enabledisable',
		array(
				'default' => 'Enable',
				'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
		));
	$wp_customize->add_control(
		'vw_tourism_pro_popular_packages_enabledisable',
			array(
					'type' => 'radio',
					'label' => __('Do you want this section', 'vw-tourism-pro'),
					'section' => 'vw_tourism_pro_popular_packages_sec',
					'choices' => array(
							'Enable' => __('Enable', 'vw-tourism-pro'),
							'Disable' => __('Disable', 'vw-tourism-pro')
			),
		));

		$wp_customize->selective_refresh->add_partial( 'vw_tourism_pro_popular_packages_enabledisable', array(
			'selector' => '#popular-packages .container',
			'render_callback' => 'vw_tourism_pro_customize_partial_vw_tourism_pro_popular_packages_enabledisable',
	));

	$wp_customize->add_setting( 'vw_tourism_pro_popular_packages_bgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 		'vw_tourism_pro_popular_packages_bgcolor', array(
		'label' => 'Background Color',
		'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-tourism-pro'),
		'section' => 'vw_tourism_pro_popular_packages_sec',
		'settings' => 'vw_tourism_pro_popular_packages_bgcolor',
	)));
	$wp_customize->add_setting('vw_tourism_pro_popular_packages_bgimage',array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control(	new WP_Customize_Image_Control($wp_customize,'vw_tourism_pro_popular_packages_bgimage',	array(
			'label' => __('Background image','vw-tourism-pro'),
			'section' => 'vw_tourism_pro_popular_packages_sec',
			'settings' => 'vw_tourism_pro_popular_packages_bgimage'
	)));
	$wp_customize->add_setting( 'vw_tourism_pro_popular_packages_bg_attachment', array(
			'default'         => '',
			'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
	));
	$wp_customize->add_control('vw_tourism_pro_popular_packages_bg_attachment', array(
			'type'      => 'radio',
			'label'     => __('Choose image option', 'vw-tourism-pro'),
			'section'   => 'vw_tourism_pro_popular_packages_sec',
			'choices'   => array(
			'vw-fixed'  => __( 'Fixed', 'vw-tourism-pro' ),
			'vw-scroll' => __( 'Scroll', 'vw-tourism-pro' ),
	)));

	$wp_customize->add_setting( 'vw_tourism_pro_popular_packages_content_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
	));
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_popular_packages_content_settings',
	array(
		'label' => __('Section Content Setting','vw-tourism-pro'),
		'section' => 'vw_tourism_pro_popular_packages_sec'
	)));
	$wp_customize->add_setting('vw_tourism_pro_popular_packages_sub_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_tourism_pro_popular_packages_sub_heading',array(
    'label' => __('Sub Heading','vw-tourism-pro'),
    'section' => 'vw_tourism_pro_popular_packages_sec',
    'setting' => 'vw_tourism_pro_popular_packages_sub_heading',
    'type' => 'text'
  ));
	$wp_customize->add_setting('vw_tourism_pro_popular_packages_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_tourism_pro_popular_packages_heading',array(
    'label' => __('Sub Heading','vw-tourism-pro'),
    'section' => 'vw_tourism_pro_popular_packages_sec',
    'setting' => 'vw_tourism_pro_popular_packages_heading',
    'type' => 'text'
  ));

for ($i=0; $i<3 ; $i++) {
	$wp_customize->add_setting( 'vw_tourism_pro_popular_packages_settings'.$i,
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
	));
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_popular_packages_settings'.$i,array(
		'label' => __('Packages Heading '.($i+1),'vw-tourism-pro'),
		'section' => 'vw_tourism_pro_popular_packages_sec'
	)));
	$wp_customize->add_setting('vw_tourism_pro_popular_packages_tab_heading'.$i,array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_tourism_pro_popular_packages_tab_heading'.$i,array(
		'label' => __('Tab Heading','vw-tourism-pro'),
		'section' => 'vw_tourism_pro_popular_packages_sec',
		'setting' => 'vw_tourism_pro_popular_packages_tab_heading'.$i,
		'type' => 'text'
	));
}

$wp_customize->add_setting( 'vw_tourism_pro_popular_packages_content_color_font_settings',
array(
	'default' => '',
	'transport' => 'postMessage',
	'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
));
$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_popular_packages_content_color_font_settings',
array(
	'label' => __('Section Content color & Font Setting','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_packages_sec'
)));

$wp_customize->add_setting( 'vw_tourism_pro_popular_packages_sub_heading_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_popular_packages_sub_heading_color', array(
	'label' => __('Sub Heading Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_packages_sec',
	'settings' => 'vw_tourism_pro_popular_packages_sub_heading_color',
)));

$wp_customize->add_setting('vw_tourism_pro_popular_packages_sub_heading_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_popular_packages_sub_heading_font_size',array(
	'label' => __('Sub Heading Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_packages_sec',
	'setting' => 'vw_tourism_pro_popular_packages_sub_heading_font_size',
	'type'    => 'number'
));

$wp_customize->add_setting('vw_tourism_pro_popular_packages_sub_heading_font_family',array(
'default' => '',
'capability' => 'edit_theme_options',
'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_tourism_pro_popular_packages_sub_heading_font_family', array(
	'section'  => 'vw_tourism_pro_popular_packages_sec',
	'label'    => __( 'Sub Heading Font Family','vw-tourism-pro'),
	'type'     => 'select',
	'choices'  => $font_array
));
$wp_customize->add_setting( 'vw_tourism_pro_popular_packages_heading_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_popular_packages_heading_color', array(
	'label' => __('Heading Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_packages_sec',
	'settings' => 'vw_tourism_pro_popular_packages_heading_color',
)));

$wp_customize->add_setting('vw_tourism_pro_popular_packages_heading_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_popular_packages_heading_font_size',array(
	'label' => __('Heading Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_packages_sec',
	'setting' => 'vw_tourism_pro_popular_packages_heading_font_size',
	'type'    => 'number'
));

$wp_customize->add_setting('vw_tourism_pro_popular_packages_heading_font_family',array(
'default' => '',
'capability' => 'edit_theme_options',
'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_tourism_pro_popular_packages_heading_font_family', array(
	'section'  => 'vw_tourism_pro_popular_packages_sec',
	'label'    => __( 'Heading Font Family','vw-tourism-pro'),
	'type'     => 'select',
	'choices'  => $font_array
));
$wp_customize->add_setting( 'vw_tourism_pro_popular_packages_tab_heading_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_popular_packages_tab_heading_color', array(
	'label' => __('Tab Heading Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_packages_sec',
	'settings' => 'vw_tourism_pro_popular_packages_tab_heading_color',
)));

$wp_customize->add_setting('vw_tourism_pro_popular_packages_tab_heading_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_popular_packages_tab_heading_font_size',array(
	'label' => __('Tab Heading Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_packages_sec',
	'setting' => 'vw_tourism_pro_popular_packages_tab_heading_font_size',
	'type'    => 'number'
));

$wp_customize->add_setting('vw_tourism_pro_popular_packages_tab_heading_font_family',array(
'default' => '',
'capability' => 'edit_theme_options',
'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_tourism_pro_popular_packages_tab_heading_font_family', array(
	'section'  => 'vw_tourism_pro_popular_packages_sec',
	'label'    => __( 'Tab Heading Font Family','vw-tourism-pro'),
	'type'     => 'select',
	'choices'  => $font_array
));
$wp_customize->add_setting( 'vw_tourism_pro_popular_packages_card_color_font_settings',
array(
	'default' => '',
	'transport' => 'postMessage',
	'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
));
$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_popular_packages_card_color_font_settings',
array(
	'label' => __('Packages card color & Font Setting','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_packages_sec'
)));

$wp_customize->add_setting( 'vw_tourism_pro_popular_packages_destination_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_popular_packages_destination_color', array(
	'label' => __('Destination Heading Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_packages_sec',
	'settings' => 'vw_tourism_pro_popular_packages_destination_color',
)));

$wp_customize->add_setting('vw_tourism_pro_popular_packages_destination_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_popular_packages_destination_font_size',array(
	'label' => __('Destination Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_packages_sec',
	'setting' => 'vw_tourism_pro_popular_packages_destination_font_size',
	'type'    => 'number'
));

$wp_customize->add_setting('vw_tourism_pro_popular_packages_destination_font_family',array(
'default' => '',
'capability' => 'edit_theme_options',
'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_tourism_pro_popular_packages_destination_font_family', array(
	'section'  => 'vw_tourism_pro_popular_packages_sec',
	'label'    => __( 'Destination Font Family','vw-tourism-pro'),
	'type'     => 'select',
	'choices'  => $font_array
));
$wp_customize->add_setting( 'vw_tourism_pro_popular_packages_from_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_popular_packages_from_color', array(
	'label' => __('Packages From & Days Heading Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_packages_sec',
	'settings' => 'vw_tourism_pro_popular_packages_from_color',
)));

$wp_customize->add_setting('vw_tourism_pro_popular_packages_from_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_popular_packages_from_font_size',array(
	'label' => __('Packages From & Days Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_packages_sec',
	'setting' => 'vw_tourism_pro_popular_packages_from_font_size',
	'type'    => 'number'
));

$wp_customize->add_setting('vw_tourism_pro_popular_packages_from_font_family',array(
'default' => '',
'capability' => 'edit_theme_options',
'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_tourism_pro_popular_packages_from_font_family', array(
	'section'  => 'vw_tourism_pro_popular_packages_sec',
	'label'    => __( 'Packages From & Days Font Family','vw-tourism-pro'),
	'type'     => 'select',
	'choices'  => $font_array
));

$wp_customize->add_setting( 'vw_tourism_pro_popular_packages_from_border_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_popular_packages_from_border_color', array(
	'label' => __('Packages From & Days border Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_packages_sec',
	'settings' => 'vw_tourism_pro_popular_packages_from_border_color',
)));
$wp_customize->add_setting( 'vw_tourism_pro_popular_packages_per_text_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_popular_packages_per_text_color', array(
	'label' => __('Packages Per Text Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_packages_sec',
	'settings' => 'vw_tourism_pro_popular_packages_per_text_color',
)));

$wp_customize->add_setting('vw_tourism_pro_popular_packages_per_text_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_popular_packages_per_text_font_size',array(
	'label' => __('Packages Per Text Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_packages_sec',
	'setting' => 'vw_tourism_pro_popular_packages_per_text_font_size',
	'type'    => 'number'
));

$wp_customize->add_setting('vw_tourism_pro_popular_packages_per_text_font_family',array(
'default' => '',
'capability' => 'edit_theme_options',
'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_tourism_pro_popular_packages_per_text_font_family', array(
	'section'  => 'vw_tourism_pro_popular_packages_sec',
	'label'    => __( 'Packages Per Text Font Family','vw-tourism-pro'),
	'type'     => 'select',
	'choices'  => $font_array
));
$wp_customize->add_setting( 'vw_tourism_pro_popular_packages_price_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_popular_packages_price_color', array(
	'label' => __('Packages Price Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_packages_sec',
	'settings' => 'vw_tourism_pro_popular_packages_price_color',
)));

$wp_customize->add_setting('vw_tourism_pro_popular_packages_price_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_popular_packages_price_font_size',array(
	'label' => __('Packages Price Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_packages_sec',
	'setting' => 'vw_tourism_pro_popular_packages_price_font_size',
	'type'    => 'number'
));

$wp_customize->add_setting('vw_tourism_pro_popular_packages_price_font_family',array(
'default' => '',
'capability' => 'edit_theme_options',
'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_tourism_pro_popular_packages_price_font_family', array(
	'section'  => 'vw_tourism_pro_popular_packages_sec',
	'label'    => __( 'Packages Price Font Family','vw-tourism-pro'),
	'type'     => 'select',
	'choices'  => $font_array
));
$wp_customize->add_setting( 'vw_tourism_pro_popular_packages_title_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_popular_packages_title_color', array(
	'label' => __('Packages Title Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_packages_sec',
	'settings' => 'vw_tourism_pro_popular_packages_title_color',
)));

$wp_customize->add_setting('vw_tourism_pro_popular_packages_title_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_popular_packages_title_font_size',array(
	'label' => __('Packages Title Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_packages_sec',
	'setting' => 'vw_tourism_pro_popular_packages_title_font_size',
	'type'    => 'number'
));

$wp_customize->add_setting('vw_tourism_pro_popular_packages_title_font_family',array(
'default' => '',
'capability' => 'edit_theme_options',
'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_tourism_pro_popular_packages_title_font_family', array(
	'section'  => 'vw_tourism_pro_popular_packages_sec',
	'label'    => __( 'Packages Title Font Family','vw-tourism-pro'),
	'type'     => 'select',
	'choices'  => $font_array
));
$wp_customize->add_setting( 'vw_tourism_pro_popular_packages_travel_name_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_popular_packages_travel_name_color', array(
	'label' => __('Packages Travel Name Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_packages_sec',
	'settings' => 'vw_tourism_pro_popular_packages_travel_name_color',
)));

$wp_customize->add_setting('vw_tourism_pro_popular_packages_travel_name_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_popular_packages_travel_name_font_size',array(
	'label' => __('Packages Travel Name Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_packages_sec',
	'setting' => 'vw_tourism_pro_popular_packages_travel_name_font_size',
	'type'    => 'number'
));

$wp_customize->add_setting('vw_tourism_pro_popular_packages_travel_name_font_family',array(
'default' => '',
'capability' => 'edit_theme_options',
'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_tourism_pro_popular_packages_travel_name_font_family', array(
	'section'  => 'vw_tourism_pro_popular_packages_sec',
	'label'    => __( 'Packages Travel Name Font Family','vw-tourism-pro'),
	'type'     => 'select',
	'choices'  => $font_array
));
$wp_customize->add_setting( 'vw_tourism_pro_popular_packages_btn_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_popular_packages_btn_color', array(
	'label' => __('Book Now Button Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_packages_sec',
	'settings' => 'vw_tourism_pro_popular_packages_btn_color',
)));
$wp_customize->add_setting('vw_tourism_pro_popular_packages_btn_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_popular_packages_btn_font_size',array(
	'label' => __('Book Now Button Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_packages_sec',
	'setting' => 'vw_tourism_pro_popular_packages_btn_font_size',
	'type'    => 'number'
));
$wp_customize->add_setting('vw_tourism_pro_popular_packages_btn_font_family',array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
		'vw_tourism_pro_popular_packages_btn_font_family', array(
		'section'  => 'vw_tourism_pro_popular_packages_sec',
		'label'    => __( 'Book Now Button Font Family','vw-tourism-pro'),
		'type'     => 'select',
		'choices'  => $font_array
));
$wp_customize->add_setting( 'vw_tourism_pro_popular_packages_btn_bg_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_popular_packages_btn_bg_color', array(
	'label' => __('Book Now Button Background Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_packages_sec',
	'settings' => 'vw_tourism_pro_popular_packages_btn_bg_color',
)));
$wp_customize->add_setting( 'vw_tourism_pro_popular_packages_btn_arrow_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_popular_packages_btn_arrow_color', array(
	'label' => __('Book Now Button Arrow Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_packages_sec',
	'settings' => 'vw_tourism_pro_popular_packages_btn_arrow_color',
)));


$wp_customize->add_setting( 'vw_tourism_pro_popular_packages_btn_hover_bg_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_popular_packages_btn_hover_bg_color', array(
	'label' => __('Book Now Button Hover Background Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_packages_sec',
	'settings' => 'vw_tourism_pro_popular_packages_btn_hover_bg_color',
)));
$wp_customize->add_setting( 'vw_tourism_pro_popular_packages_content_bg_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_popular_packages_content_bg_color', array(
	'label' => __('Packages Content Background Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_popular_packages_sec',
	'settings' => 'vw_tourism_pro_popular_packages_content_bg_color',
)));


// ------------------------Experience Section----------------

$wp_customize->add_section('vw_tourism_pro_experience_sec',array(
	'title'	=> __('Experience Section','vw-tourism-pro'),
	'description'	=> __('Add Experience Setting here.','vw-tourism-pro'),
	'panel' => 'vw_tourism_pro_panel_id',
));
$wp_customize->add_setting('vw_tourism_pro_experience_enabledisable',
	array(
			'default' => 'Enable',
			'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
	));
$wp_customize->add_control(
	'vw_tourism_pro_experience_enabledisable',
		array(
				'type' => 'radio',
				'label' => __('Do you want this section', 'vw-tourism-pro'),
				'section' => 'vw_tourism_pro_experience_sec',
				'choices' => array(
						'Enable' => __('Enable', 'vw-tourism-pro'),
						'Disable' => __('Disable', 'vw-tourism-pro')
		),
	));

	$wp_customize->selective_refresh->add_partial( 'vw_tourism_pro_experience_enabledisable', array(
		'selector' => '#experience .container',
		'render_callback' => 'vw_tourism_pro_customize_partial_vw_tourism_pro_experience_enabledisable',
));

$wp_customize->add_setting( 'vw_tourism_pro_experience_bgcolor', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 		'vw_tourism_pro_experience_bgcolor', array(
	'label' => 'Background Color',
	'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_experience_sec',
	'settings' => 'vw_tourism_pro_experience_bgcolor',
)));
$wp_customize->add_setting('vw_tourism_pro_experience_bgimage',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
));
$wp_customize->add_control(	new WP_Customize_Image_Control($wp_customize,'vw_tourism_pro_experience_bgimage',	array(
		'label' => __('Background image','vw-tourism-pro'),
		'section' => 'vw_tourism_pro_experience_sec',
		'settings' => 'vw_tourism_pro_experience_bgimage'
)));
$wp_customize->add_setting( 'vw_tourism_pro_experience_bg_attachment', array(
		'default'         => '',
		'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control('vw_tourism_pro_experience_bg_attachment', array(
		'type'      => 'radio',
		'label'     => __('Choose image option', 'vw-tourism-pro'),
		'section'   => 'vw_tourism_pro_experience_sec',
		'choices'   => array(
		'vw-fixed'  => __( 'Fixed', 'vw-tourism-pro' ),
		'vw-scroll' => __( 'Scroll', 'vw-tourism-pro' ),
)));
$wp_customize->add_setting( 'vw_tourism_pro_experience_content_settings',
array(
	'default' => '',
	'transport' => 'postMessage',
	'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
));
$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_experience_content_settings',
array(
	'label' => __('Section Content Setting','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_experience_sec'
)));
$wp_customize->add_setting('vw_tourism_pro_experience_sub_heading',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_experience_sub_heading',array(
	'label' => __('Sub Heading','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_experience_sec',
	'setting' => 'vw_tourism_pro_experience_sub_heading',
	'type' => 'text'
));

$wp_customize->add_setting('vw_tourism_pro_experience_heading',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_experience_heading',array(
	'label' => __('Sub Heading','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_experience_sec',
	'setting' => 'vw_tourism_pro_experience_heading',
	'type' => 'text'
));
$wp_customize->add_setting( 'vw_tourism_pro_experience_content_color_font_settings',
array(
	'default' => '',
	'transport' => 'postMessage',
	'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
));
$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_experience_content_color_font_settings',
array(
	'label' => __('Section Content color & Font Setting','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_experience_sec'
)));

$wp_customize->add_setting( 'vw_tourism_pro_experience_sub_heading_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_experience_sub_heading_color', array(
	'label' => __('Sub Heading Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_experience_sec',
	'settings' => 'vw_tourism_pro_experience_sub_heading_color',
)));
$wp_customize->add_setting('vw_tourism_pro_experience_sub_heading_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_experience_sub_heading_font_size',array(
	'label' => __('Sub Heading Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_experience_sec',
	'setting' => 'vw_tourism_pro_experience_sub_heading_font_size',
	'type'    => 'number'
));
$wp_customize->add_setting('vw_tourism_pro_experience_sub_heading_font_family',array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
		'vw_tourism_pro_experience_sub_heading_font_family', array(
		'section'  => 'vw_tourism_pro_experience_sec',
		'label'    => __( 'Sub Heading Font Family','vw-tourism-pro'),
		'type'     => 'select',
		'choices'  => $font_array
));
$wp_customize->add_setting( 'vw_tourism_pro_experience_heading_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_experience_heading_color', array(
	'label' => __('Heading Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_experience_sec',
	'settings' => 'vw_tourism_pro_experience_heading_color',
)));
$wp_customize->add_setting('vw_tourism_pro_experience_heading_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_experience_heading_font_size',array(
	'label' => __('Heading Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_experience_sec',
	'setting' => 'vw_tourism_pro_experience_heading_font_size',
	'type'    => 'number'
));
$wp_customize->add_setting('vw_tourism_pro_experience_heading_font_family',array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
		'vw_tourism_pro_experience_heading_font_family', array(
		'section'  => 'vw_tourism_pro_experience_sec',
		'label'    => __( 'Heading Font Family','vw-tourism-pro'),
		'type'     => 'select',
		'choices'  => $font_array
));
$wp_customize->add_setting( 'vw_tourism_pro_experience_icon_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_experience_icon_color', array(
	'label' => __('Icon Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_experience_sec',
	'settings' => 'vw_tourism_pro_experience_icon_color',
)));
$wp_customize->add_setting( 'vw_tourism_pro_experience_active_icon_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_experience_active_icon_color', array(
	'label' => __('Active Icon Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_experience_sec',
	'settings' => 'vw_tourism_pro_experience_active_icon_color',
)));
$wp_customize->add_setting( 'vw_tourism_pro_experience_title_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_experience_title_color', array(
	'label' => __('Title Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_experience_sec',
	'settings' => 'vw_tourism_pro_experience_title_color',
)));
$wp_customize->add_setting('vw_tourism_pro_experience_title_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_experience_title_font_size',array(
	'label' => __('Title Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_experience_sec',
	'setting' => 'vw_tourism_pro_experience_title_font_size',
	'type'    => 'number'
));
$wp_customize->add_setting('vw_tourism_pro_experience_title_font_family',array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
		'vw_tourism_pro_experience_title_font_family', array(
		'section'  => 'vw_tourism_pro_experience_sec',
		'label'    => __( 'Title Font Family','vw-tourism-pro'),
		'type'     => 'select',
		'choices'  => $font_array
));
$wp_customize->add_setting( 'vw_tourism_pro_experience_active_title_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_experience_active_title_color', array(
	'label' => __('Title Active Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_experience_sec',
	'settings' => 'vw_tourism_pro_experience_active_title_color',
)));
$wp_customize->add_setting( 'vw_tourism_pro_experience_active_bg_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_experience_active_bg_color', array(
	'label' => __('Title Background Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_experience_sec',
	'settings' => 'vw_tourism_pro_experience_active_bg_color',
)));
$wp_customize->add_setting( 'vw_tourism_pro_experience_content_title_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_experience_content_title_color', array(
	'label' => __(' Content Title Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_experience_sec',
	'settings' => 'vw_tourism_pro_experience_content_title_color',
)));
$wp_customize->add_setting('vw_tourism_pro_experience_content_title_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_experience_content_title_font_size',array(
	'label' => __('Content Title Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_experience_sec',
	'setting' => 'vw_tourism_pro_experience_content_title_font_size',
	'type'    => 'number'
));
$wp_customize->add_setting('vw_tourism_pro_experience_content_title_font_family',array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
		'vw_tourism_pro_experience_content_title_font_family', array(
		'section'  => 'vw_tourism_pro_experience_sec',
		'label'    => __( 'Content Title Font Family','vw-tourism-pro'),
		'type'     => 'select',
		'choices'  => $font_array
));
$wp_customize->add_setting( 'vw_tourism_pro_experience_content_para_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_experience_content_para_color', array(
	'label' => __(' Content Paragraph Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_experience_sec',
	'settings' => 'vw_tourism_pro_experience_content_para_color',
)));
$wp_customize->add_setting('vw_tourism_pro_experience_content_para_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_experience_content_para_font_size',array(
	'label' => __('Content Paragraph Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_experience_sec',
	'setting' => 'vw_tourism_pro_experience_content_para_font_size',
	'type'    => 'number'
));
$wp_customize->add_setting('vw_tourism_pro_experience_content_para_font_family',array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
		'vw_tourism_pro_experience_content_para_font_family', array(
		'section'  => 'vw_tourism_pro_experience_sec',
		'label'    => __( 'Content Paragraph Font Family','vw-tourism-pro'),
		'type'     => 'select',
		'choices'  => $font_array
));
$wp_customize->add_setting( 'vw_tourism_pro_experience_content_bg_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_experience_content_bg_color', array(
	'label' => __('Content Background Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_experience_sec',
	'settings' => 'vw_tourism_pro_experience_content_bg_color',
)));
$wp_customize->add_setting( 'vw_tourism_pro_experience_content_bg_img_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_experience_content_bg_img_color', array(
	'label' => __('Content Background  Image Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_experience_sec',
	'settings' => 'vw_tourism_pro_experience_content_bg_img_color',
)));

$wp_customize->add_setting('vw_tourism_pro_experience_bgsvg_image',array(
		'default'	=> '',
		'sanitize_callback' => 'esc_url_raw',
));
$wp_customize->add_control(	new WP_Customize_Image_Control($wp_customize,'vw_tourism_pro_experience_bgsvg_image',	array(
		'label' => __('Content Background Image','vw-tourism-pro'),
		'section' => 'vw_tourism_pro_experience_sec',
		'description' => __('Upload image with <b>.svg</b> extension','vw-tourism-pro'),
		'settings' => 'vw_tourism_pro_experience_bgsvg_image'
)));

// -------------------How To Process Section-------------------


$wp_customize->add_section('vw_tourism_pro_how_to_process_sec',array(
	'title'	=> __('How To Process Section','vw-tourism-pro'),
	'description'	=> __('Add How To Process Setting here.','vw-tourism-pro'),
	'panel' => 'vw_tourism_pro_panel_id',
));
$wp_customize->add_setting('vw_tourism_pro_how_to_process_enabledisable',
	array(
			'default' => 'Enable',
			'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
	));
$wp_customize->add_control(
	'vw_tourism_pro_how_to_process_enabledisable',
		array(
				'type' => 'radio',
				'label' => __('Do you want this section', 'vw-tourism-pro'),
				'section' => 'vw_tourism_pro_how_to_process_sec',
				'choices' => array(
						'Enable' => __('Enable', 'vw-tourism-pro'),
						'Disable' => __('Disable', 'vw-tourism-pro')
		),
	));

	$wp_customize->selective_refresh->add_partial( 'vw_tourism_pro_how_to_process_enabledisable', array(
		'selector' => '#how-to-process .container',
		'render_callback' => 'vw_tourism_pro_customize_partial_vw_tourism_pro_how_to_process_enabledisable',
));
$wp_customize->add_setting( 'vw_tourism_pro_how_to_process_bgcolor', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 		'vw_tourism_pro_how_to_process_bgcolor', array(
	'label' => 'Background Color',
	'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_how_to_process_sec',
	'settings' => 'vw_tourism_pro_how_to_process_bgcolor',
)));
$wp_customize->add_setting('vw_tourism_pro_how_to_process_bgimage',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
));
$wp_customize->add_control(	new WP_Customize_Image_Control($wp_customize,'vw_tourism_pro_how_to_process_bgimage',	array(
		'label' => __('Background image','vw-tourism-pro'),
		'section' => 'vw_tourism_pro_how_to_process_sec',
		'settings' => 'vw_tourism_pro_how_to_process_bgimage'
)));
$wp_customize->add_setting( 'vw_tourism_pro_how_to_process_bg_attachment', array(
		'default'         => '',
		'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control('vw_tourism_pro_how_to_process_bg_attachment', array(
		'type'      => 'radio',
		'label'     => __('Choose image option', 'vw-tourism-pro'),
		'section'   => 'vw_tourism_pro_how_to_process_sec',
		'choices'   => array(
		'vw-fixed'  => __( 'Fixed', 'vw-tourism-pro' ),
		'vw-scroll' => __( 'Scroll', 'vw-tourism-pro' ),
)));
$wp_customize->add_setting( 'vw_tourism_pro_how_to_process_content_settings',
array(
	'default' => '',
	'transport' => 'postMessage',
	'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
));
$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_how_to_process_content_settings',
array(
	'label' => __('Section Content Setting','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_how_to_process_sec'
)));

$wp_customize->add_setting('vw_tourism_pro_how_to_process_sub_heading',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_how_to_process_sub_heading',array(
	'label' => __('Sub Heading','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_how_to_process_sec',
	'setting' => 'vw_tourism_pro_how_to_process_sub_heading',
	'type' => 'text'
));

$wp_customize->add_setting('vw_tourism_pro_how_to_process_heading',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_how_to_process_heading',array(
	'label' => __('Heading','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_how_to_process_sec',
	'setting' => 'vw_tourism_pro_how_to_process_heading',
	'type' => 'text'
));

$exp_points=get_theme_mod('vw_tourism_pro_how_to_process_number');

for ($i=1; $i <= $exp_points ; $i++) {
$wp_customize->add_setting( 'vw_tourism_pro_how_to_process_number_settings'.$i,
array(
	'default' => '',
	'transport' => 'postMessage',
	'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
));
$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_how_to_process_number_settings'.$i,array(
	'label' => __('Process Box '.$i,'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_how_to_process_sec'
)));
$wp_customize->add_setting('vw_tourism_pro_how_to_process_img'.$i,array(
			'default'   =>get_theme_mod('vw_tourism_pro_how_to_process_img'.$i),
		'sanitize_callback'	=> 'esc_url_raw',
));
$wp_customize->add_control(	new WP_Customize_Image_Control($wp_customize,'vw_tourism_pro_how_to_process_img'.$i,	array(
		'label' => __('Process Image size(90x85)','vw-tourism-pro'),
		'section' => 'vw_tourism_pro_how_to_process_sec',
		'settings' => 'vw_tourism_pro_how_to_process_img'.$i
)));
$wp_customize->add_setting('vw_tourism_pro_how_to_process_title'.$i,array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_how_to_process_title'.$i,array(
	'label' => __('Why Choose Paragraph','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_how_to_process_sec',
	'setting' => 'vw_tourism_pro_how_to_process_title'.$i,
	'type' => 'text'
));
}

$wp_customize->add_setting( 'vw_tourism_pro_how_to_process_content_color_font_settings',
array(
	'default' => '',
	'transport' => 'postMessage',
	'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
));
$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_how_to_process_content_color_font_settings',
array(
	'label' => __('Section Color & Font Setting','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_how_to_process_sec'
)));

$wp_customize->add_setting( 'vw_tourism_pro_how_to_process_sub_heading_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_how_to_process_sub_heading_color', array(
	'label' => __(' Sub Heading Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_how_to_process_sec',
	'settings' => 'vw_tourism_pro_how_to_process_sub_heading_color',
)));
$wp_customize->add_setting('vw_tourism_pro_how_to_process_sub_heading_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_how_to_process_sub_heading_font_size',array(
	'label' => __('Sub Heading Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_how_to_process_sec',
	'setting' => 'vw_tourism_pro_how_to_process_sub_heading_font_size',
	'type'    => 'number'
));
$wp_customize->add_setting('vw_tourism_pro_how_to_process_sub_heading_font_family',array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
		'vw_tourism_pro_how_to_process_sub_heading_font_family', array(
		'section'  => 'vw_tourism_pro_how_to_process_sec',
		'label'    => __( 'Sub Heading Font Family','vw-tourism-pro'),
		'type'     => 'select',
		'choices'  => $font_array
));
$wp_customize->add_setting( 'vw_tourism_pro_how_to_process_heading_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_how_to_process_heading_color', array(
	'label' => __(' Heading Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_how_to_process_sec',
	'settings' => 'vw_tourism_pro_how_to_process_heading_color',
)));
$wp_customize->add_setting('vw_tourism_pro_how_to_process_heading_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_how_to_process_heading_font_size',array(
	'label' => __('Heading Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_how_to_process_sec',
	'setting' => 'vw_tourism_pro_how_to_process_heading_font_size',
	'type'    => 'number'
));
$wp_customize->add_setting('vw_tourism_pro_how_to_process_heading_font_family',array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
		'vw_tourism_pro_how_to_process_heading_font_family', array(
		'section'  => 'vw_tourism_pro_how_to_process_sec',
		'label'    => __( 'Heading Font Family','vw-tourism-pro'),
		'type'     => 'select',
		'choices'  => $font_array
));
$wp_customize->add_setting( 'vw_tourism_pro_how_to_process_card_count_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_how_to_process_card_count_color', array(
	'label' => __(' Card Count Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_how_to_process_sec',
	'settings' => 'vw_tourism_pro_how_to_process_card_count_color',
)));
$wp_customize->add_setting('vw_tourism_pro_how_to_process_card_count_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_how_to_process_card_count_font_size',array(
	'label' => __('Card Count Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_how_to_process_sec',
	'setting' => 'vw_tourism_pro_how_to_process_card_count_font_size',
	'type'    => 'number'
));
$wp_customize->add_setting('vw_tourism_pro_how_to_process_card_count_font_family',array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
		'vw_tourism_pro_how_to_process_card_count_font_family', array(
		'section'  => 'vw_tourism_pro_how_to_process_sec',
		'label'    => __( 'Card Count Font Family','vw-tourism-pro'),
		'type'     => 'select',
		'choices'  => $font_array
));

$wp_customize->add_setting('vw_tourism_pro_how_to_process_card_count_opacity_color',array(
		'default'              => '0.1',
		'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));

$wp_customize->add_control( 'vw_tourism_pro_how_to_process_card_count_opacity_color', array(
	'label'       => esc_html__( 'Card Count Opacity','vw-tourism-pro' ),
	'section'     => 'vw_tourism_pro_how_to_process_sec',
	'type'        => 'select',
	'settings'    => 'vw_tourism_pro_how_to_process_card_count_opacity_color',
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

$wp_customize->add_setting( 'vw_tourism_pro_how_to_process_card_title_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_how_to_process_card_title_color', array(
	'label' => __(' Card Title Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_how_to_process_sec',
	'settings' => 'vw_tourism_pro_how_to_process_card_title_color',
)));
$wp_customize->add_setting('vw_tourism_pro_how_to_process_card_title_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_how_to_process_card_title_font_size',array(
	'label' => __('Card Title Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_how_to_process_sec',
	'setting' => 'vw_tourism_pro_how_to_process_card_title_font_size',
	'type'    => 'number'
));
$wp_customize->add_setting('vw_tourism_pro_how_to_process_card_title_font_family',array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
		'vw_tourism_pro_how_to_process_card_title_font_family', array(
		'section'  => 'vw_tourism_pro_how_to_process_sec',
		'label'    => __( 'Card Title Font Family','vw-tourism-pro'),
		'type'     => 'select',
		'choices'  => $font_array
));
$wp_customize->add_setting( 'vw_tourism_pro_how_to_process_card_border_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_how_to_process_card_border_color', array(
	'label' => __('Card Border Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_how_to_process_sec',
	'settings' => 'vw_tourism_pro_how_to_process_card_border_color',
)));
$wp_customize->add_setting( 'vw_tourism_pro_how_to_process_card_bg_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_how_to_process_card_bg_color', array(
	'label' => __('Card Background Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_how_to_process_sec',
	'settings' => 'vw_tourism_pro_how_to_process_card_bg_color',
)));
$wp_customize->add_setting( 'vw_tourism_pro_how_to_process_bg_line_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_how_to_process_bg_line_color', array(
	'label' => __('Background Line Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_how_to_process_sec',
	'settings' => 'vw_tourism_pro_how_to_process_bg_line_color',
)));


// $wp_customize->add_setting('vw_tourism_pro_why_choose_us_bgimage',array(
// 		'default'	=> '',
// 		'sanitize_callback'	=> 'esc_url_raw',
// ));
// $wp_customize->add_control(	new WP_Customize_Image_Control($wp_customize,'vw_tourism_pro_why_choose_us_bgimage',	array(
// 		'label' => __('Background image','vw-tourism-pro'),
// 		'section' => 'vw_tourism_pro_why_choose_us_sec',
// 		'settings' => 'vw_tourism_pro_why_choose_us_bgimage'
// )));



// ------------------------WHY CHOOSE US Section----------------

$wp_customize->add_section('vw_tourism_pro_why_choose_us_sec',array(
	'title'	=> __('Why Choose Us Section','vw-tourism-pro'),
	'description'	=> __('Add Why Choose Us Setting here.','vw-tourism-pro'),
	'panel' => 'vw_tourism_pro_panel_id',
));
$wp_customize->add_setting('vw_tourism_pro_why_choose_us_enable',
	array(
			'default' => 'Enable',
			'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
	));
$wp_customize->add_control(
	'vw_tourism_pro_why_choose_us_enable',
		array(
				'type' => 'radio',
				'label' => __('Do you want this section', 'vw-tourism-pro'),
				'section' => 'vw_tourism_pro_why_choose_us_sec',
				'choices' => array(
						'Enable' => __('Enable', 'vw-tourism-pro'),
						'Disable' => __('Disable', 'vw-tourism-pro')
		),
	));

	$wp_customize->selective_refresh->add_partial( 'vw_tourism_pro_why_choose_us_enable', array(
		'selector' => '#why-choose .container',
		'render_callback' => 'vw_tourism_pro_customize_partial_vw_tourism_pro_why_choose_us_enable',
));
$wp_customize->add_setting( 'vw_tourism_pro_why_choose_us_bgcolor', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 		'vw_tourism_pro_why_choose_us_bgcolor', array(
	'label' => 'Background Color',
	'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_why_choose_us_sec',
	'settings' => 'vw_tourism_pro_why_choose_us_bgcolor',
)));
$wp_customize->add_setting('vw_tourism_pro_why_choose_us_bgimage',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
));
$wp_customize->add_control(	new WP_Customize_Image_Control($wp_customize,'vw_tourism_pro_why_choose_us_bgimage',	array(
		'label' => __('Background image','vw-tourism-pro'),
		'section' => 'vw_tourism_pro_why_choose_us_sec',
		'settings' => 'vw_tourism_pro_why_choose_us_bgimage'
)));
$wp_customize->add_setting( 'vw_tourism_pro_why_choose_us_bgimage_setting', array(
		'default'         => '',
		'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control('vw_tourism_pro_why_choose_us_bgimage_setting', array(
		'type'      => 'radio',
		'label'     => __('Choose image option', 'vw-tourism-pro'),
		'section'   => 'vw_tourism_pro_why_choose_us_sec',
		'choices'   => array(
		'vw-fixed'  => __( 'Fixed', 'vw-tourism-pro' ),
		'vw-scroll' => __( 'Scroll', 'vw-tourism-pro' ),
)));
$wp_customize->add_setting( 'vw_tourism_pro_why_choose_us_content_settings',
array(
	'default' => '',
	'transport' => 'postMessage',
	'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
));
$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_why_choose_us_content_settings',
array(
	'label' => __('Section Content Setting','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_why_choose_us_sec'
)));
$wp_customize->add_setting('vw_tourism_pro_why_choose_us_sub_heading',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_why_choose_us_sub_heading',array(
	'label' => __('Sub Heading','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_why_choose_us_sec',
	'setting' => 'vw_tourism_pro_why_choose_us_sub_heading',
	'type' => 'text'
));
$wp_customize->add_setting('vw_tourism_pro_why_choose_us_heading',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_why_choose_us_heading',array(
	'label' => __('Heading','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_why_choose_us_sec',
	'setting' => 'vw_tourism_pro_why_choose_us_heading',
	'type' => 'text'
));
$wp_customize->add_setting('vw_tourism_pro_why_choose_us_paragraph',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_why_choose_us_paragraph',array(
	'label' => __('Paragraph','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_why_choose_us_sec',
	'setting' => 'vw_tourism_pro_why_choose_us_paragraph',
	'type' => 'text'
));

$about_points=get_theme_mod('vw_tourism_pro_why_choose_circle_number');

for ($i=1; $i <= $about_points ; $i++) {
$wp_customize->add_setting( 'vw_tourism_pro_why_choose_circle_number_settings'.$i,
array(
	'default' => '',
	'transport' => 'postMessage',
	'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
));
$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_why_choose_circle_number_settings'.$i,array(
	'label' => __('Circle '.$i,'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_why_choose_us_sec'
)));
$wp_customize->add_setting('vw_tourism_pro_why_choose_circle_progress_count'.$i,array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_why_choose_circle_progress_count'.$i,array(
	'label' => __('Percentage Number','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_why_choose_us_sec',
	'setting' => 'vw_tourism_pro_why_choose_circle_progress_count'.$i,
	'type' => 'text'
));
$wp_customize->add_setting('vw_tourism_pro_why_choose_circle_progress_title'.$i,array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_why_choose_circle_progress_title'.$i,array(
	'label' => __('Why Choose Paragraph','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_why_choose_us_sec',
	'setting' => 'vw_tourism_pro_why_choose_circle_progress_title'.$i,
	'type' => 'text'
));
}
$wp_customize->add_setting('vw_tourism_pro_why_choose_us_girl_img',array(
	'default'   =>get_theme_mod('vw_tourism_pro_why_choose_us_girl_img'),
	'sanitize_callback'	=> 'esc_url_raw',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_tourism_pro_why_choose_us_girl_img',array(
	'label' => __('Choose Video Background Image','vw-tourism-pro'),
	'description' => __('Add image size maximum 415x377', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_why_choose_us_sec',
	'settings' => 'vw_tourism_pro_why_choose_us_girl_img'
)));

$choose_points=get_theme_mod('vw_tourism_pro_why_choose_us_number');

for ($j=1; $j <= $choose_points ; $j++) {
$wp_customize->add_setting( 'vw_tourism_pro_why_choose_us_number_settings'.$j,
array(
	'default' => '',
	'transport' => 'postMessage',
	'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
));
$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_why_choose_us_number_settings'.$j,array(
	'label' => __('Choose Point '.$j,'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_why_choose_us_sec'
)));

$wp_customize->add_setting('vw_tourism_pro_why_choose_us_img'.$j,array(
	'default'   =>get_theme_mod('vw_tourism_pro_why_choose_us_img'.$j),
	'sanitize_callback'	=> 'esc_url_raw',
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'vw_tourism_pro_why_choose_us_img'.$j,array(
		'label' => __('Points Img','vw-tourism-pro'),
			'description' => __('Add image size maximum 40x40', 'vw-tourism-pro'),
		'section' => 'vw_tourism_pro_why_choose_us_sec',
		'settings' => 'vw_tourism_pro_why_choose_us_img'.$j
)));
$wp_customize->add_setting('vw_tourism_pro_why_choose_us_title'.$j,array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_why_choose_us_title'.$j,array(
	'label' => __('Points Title','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_why_choose_us_sec',
	'setting' => 'vw_tourism_pro_why_choose_us_title'.$j,
	'type' => 'text'
));
$wp_customize->add_setting('vw_tourism_pro_why_choose_us_para'.$j,array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_why_choose_us_para'.$j,array(
	'label' => __('PointsParagraph','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_why_choose_us_sec',
	'setting' => 'vw_tourism_pro_why_choose_us_para'.$j,
	'type' => 'text'
));
}

$wp_customize->add_setting( 'vw_tourism_pro_why_choose_us_content_color_font_settings',
array(
	'default' => '',
	'transport' => 'postMessage',
	'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
));
$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_why_choose_us_content_color_font_settings',
array(
	'label' => __('Section Color & Font Setting','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_why_choose_us_sec'
)));

$wp_customize->add_setting( 'vw_tourism_pro_why_choose_us_sub_heading_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_why_choose_us_sub_heading_color', array(
	'label' => __('Sub Heading Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_why_choose_us_sec',
	'settings' => 'vw_tourism_pro_why_choose_us_sub_heading_color',
)));

$wp_customize->add_setting('vw_tourism_pro_why_choose_us_sub_heading_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_why_choose_us_sub_heading_font_size',array(
	'label' => __('Sub Heading Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_why_choose_us_sec',
	'setting' => 'vw_tourism_pro_why_choose_us_sub_heading_font_size',
	'type'    => 'number'
));

$wp_customize->add_setting('vw_tourism_pro_why_choose_us_sub_heading_font_family',array(
'default' => '',
'capability' => 'edit_theme_options',
'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_tourism_pro_why_choose_us_sub_heading_font_family', array(
	'section'  => 'vw_tourism_pro_why_choose_us_sec',
	'label'    => __( 'Sub Heading Font Family','vw-tourism-pro'),
	'type'     => 'select',
	'choices'  => $font_array
));
$wp_customize->add_setting( 'vw_tourism_pro_why_choose_us_heading_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_why_choose_us_heading_color', array(
	'label' => __('Heading Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_why_choose_us_sec',
	'settings' => 'vw_tourism_pro_why_choose_us_heading_color',
)));

$wp_customize->add_setting('vw_tourism_pro_why_choose_us_heading_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_why_choose_us_heading_font_size',array(
	'label' => __('Heading Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_why_choose_us_sec',
	'setting' => 'vw_tourism_pro_why_choose_us_heading_font_size',
	'type'    => 'number'
));

$wp_customize->add_setting('vw_tourism_pro_why_choose_us_heading_font_family',array(
'default' => '',
'capability' => 'edit_theme_options',
'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_tourism_pro_why_choose_us_heading_font_family', array(
	'section'  => 'vw_tourism_pro_why_choose_us_sec',
	'label'    => __( 'Heading Font Family','vw-tourism-pro'),
	'type'     => 'select',
	'choices'  => $font_array
));
$wp_customize->add_setting( 'vw_tourism_pro_why_choose_us_paragraph_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_why_choose_us_paragraph_color', array(
	'label' => __('Paragraph Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_why_choose_us_sec',
	'settings' => 'vw_tourism_pro_why_choose_us_paragraph_color',
)));

$wp_customize->add_setting('vw_tourism_pro_why_choose_us_paragraph_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_why_choose_us_paragraph_font_size',array(
	'label' => __('Paragraph Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_why_choose_us_sec',
	'setting' => 'vw_tourism_pro_why_choose_us_paragraph_font_size',
	'type'    => 'number'
));
$wp_customize->add_setting('vw_tourism_pro_why_choose_us_paragraph_font_family',array(
'default' => '',
'capability' => 'edit_theme_options',
'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_tourism_pro_why_choose_us_paragraph_font_family', array(
	'section'  => 'vw_tourism_pro_why_choose_us_sec',
	'label'    => __( 'Paragraph Font Family','vw-tourism-pro'),
	'type'     => 'select',
	'choices'  => $font_array
));
$wp_customize->add_setting( 'vw_tourism_pro_why_choose_us_percentage_circle_color', array(
	'default' => '#00a3eb',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_why_choose_us_percentage_circle_color', array(
	'label' => __('Circle Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_why_choose_us_sec',
	'settings' => 'vw_tourism_pro_why_choose_us_percentage_circle_color',
)));
$wp_customize->add_setting( 'vw_tourism_pro_why_choose_us_percentage_circle_number_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_why_choose_us_percentage_circle_number_color', array(
	'label' => __('Circle Number Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_why_choose_us_sec',
	'settings' => 'vw_tourism_pro_why_choose_us_percentage_circle_number_color',
)));

$wp_customize->add_setting('vw_tourism_pro_why_choose_us_percentage_circle_number_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_why_choose_us_percentage_circle_number_font_size',array(
	'label' => __('Circle Number Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_why_choose_us_sec',
	'setting' => 'vw_tourism_pro_why_choose_us_percentage_circle_number_font_size',
	'type'    => 'number'
));

$wp_customize->add_setting('vw_tourism_pro_why_choose_us_percentage_circle_number_font_family',array(
'default' => '',
'capability' => 'edit_theme_options',
'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_tourism_pro_why_choose_us_percentage_circle_number_font_family', array(
	'section'  => 'vw_tourism_pro_why_choose_us_sec',
	'label'    => __( 'Circle Number Font Family','vw-tourism-pro'),
	'type'     => 'select',
	'choices'  => $font_array
));
$wp_customize->add_setting( 'vw_tourism_pro_why_choose_us_percentage_circle_heading_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_why_choose_us_percentage_circle_heading_color', array(
	'label' => __('Circle Heading Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_why_choose_us_sec',
	'settings' => 'vw_tourism_pro_why_choose_us_percentage_circle_heading_color',
)));

$wp_customize->add_setting('vw_tourism_pro_why_choose_us_percentage_circle_heading_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_why_choose_us_percentage_circle_heading_font_size',array(
	'label' => __('Circle Heading Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_why_choose_us_sec',
	'setting' => 'vw_tourism_pro_why_choose_us_percentage_circle_heading_font_size',
	'type'    => 'number'
));

$wp_customize->add_setting('vw_tourism_pro_why_choose_us_percentage_circle_heading_font_family',array(
'default' => '',
'capability' => 'edit_theme_options',
'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_tourism_pro_why_choose_us_percentage_circle_heading_font_family', array(
	'section'  => 'vw_tourism_pro_why_choose_us_sec',
	'label'    => __( 'Circle Heading Font Family','vw-tourism-pro'),
	'type'     => 'select',
	'choices'  => $font_array
));
$wp_customize->add_setting( 'vw_tourism_pro_why_choose_points_heading_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_why_choose_points_heading_color', array(
	'label' => __('Points Heading Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_why_choose_us_sec',
	'settings' => 'vw_tourism_pro_why_choose_points_heading_color',
)));

$wp_customize->add_setting('vw_tourism_pro_why_choose_points_heading_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_why_choose_points_heading_font_size',array(
	'label' => __('Points Heading Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_why_choose_us_sec',
	'setting' => 'vw_tourism_pro_why_choose_points_heading_font_size',
	'type'    => 'number'
));

$wp_customize->add_setting('vw_tourism_pro_why_choose_points_heading_font_family',array(
'default' => '',
'capability' => 'edit_theme_options',
'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_tourism_pro_why_choose_points_heading_font_family', array(
	'section'  => 'vw_tourism_pro_why_choose_us_sec',
	'label'    => __( 'Points Heading Font Family','vw-tourism-pro'),
	'type'     => 'select',
	'choices'  => $font_array
));
$wp_customize->add_setting( 'vw_tourism_pro_why_choose_points_para_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_why_choose_points_para_color', array(
	'label' => __('Points Paragraph Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_why_choose_us_sec',
	'settings' => 'vw_tourism_pro_why_choose_points_para_color',
)));

$wp_customize->add_setting('vw_tourism_pro_why_choose_points_para_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_why_choose_points_para_font_size',array(
	'label' => __('Points Paragraph Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_why_choose_us_sec',
	'setting' => 'vw_tourism_pro_why_choose_points_para_font_size',
	'type'    => 'number'
));

$wp_customize->add_setting('vw_tourism_pro_why_choose_points_para_font_family',array(
'default' => '',
'capability' => 'edit_theme_options',
'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_tourism_pro_why_choose_points_para_font_family', array(
	'section'  => 'vw_tourism_pro_why_choose_us_sec',
	'label'    => __( 'Points Paragraph Font Family','vw-tourism-pro'),
	'type'     => 'select',
	'choices'  => $font_array
));

$wp_customize->add_setting( 'vw_tourism_pro_why_choose_points_border_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_why_choose_points_border_color', array(
	'label' => __('Border Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_why_choose_us_sec',
	'settings' => 'vw_tourism_pro_why_choose_points_border_color',
)));

// Add settings for Why Choose Us section
$wp_customize->add_setting('vw_tourism_pro_why_choose_us_sub_heading', array(
	'default' => 'WHY CHOOSE US',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_why_choose_us_sub_heading', array(
	'label' => __('Sub Heading', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_why_choose_us_sec',
	'type' => 'text'
));

$wp_customize->add_setting('vw_tourism_pro_why_choose_us_heading', array(
	'default' => 'Get The Best Travel Experience With Tourism',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_why_choose_us_heading', array(
	'label' => __('Main Heading', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_why_choose_us_sec',
	'type' => 'text'
));

$wp_customize->add_setting('vw_tourism_pro_why_choose_us_paragraph', array(
	'default' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_why_choose_us_paragraph', array(
	'label' => __('Paragraph', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_why_choose_us_sec',
	'type' => 'textarea'
));

// Add settings for the points (e.g. Tour Guide, Friendly Price, Instant Booking)
$points = array(
	1 => array('default_title' => 'Tour Guide', 'default_text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
	2 => array('default_title' => 'Friendly Price', 'default_text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
	3 => array('default_title' => 'Instant Booking', 'default_text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.')
);

foreach ($points as $key => $data) {
	$wp_customize->add_setting('vw_tourism_pro_why_choose_point'.$key.'_title', array(
		'default' => $data['default_title'],
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_tourism_pro_why_choose_point'.$key.'_title', array(
		'label' => __('Point '.$key.' Title', 'vw-tourism-pro'),
		'section' => 'vw_tourism_pro_why_choose_us_sec',
		'type' => 'text'
	));

	$wp_customize->add_setting('vw_tourism_pro_why_choose_point'.$key.'_description', array(
		'default' => $data['default_text'],
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_tourism_pro_why_choose_point'.$key.'_description', array(
		'label' => __('Point '.$key.' Description', 'vw-tourism-pro'),
		'section' => 'vw_tourism_pro_why_choose_us_sec',
		'type' => 'textarea'
	));

	$wp_customize->add_setting('vw_tourism_pro_why_choose_point'.$key.'_image', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'vw_tourism_pro_why_choose_point'.$key.'_image', array(
		'label' => __('Point '.$key.' Image', 'vw-tourism-pro'),
		'section' => 'vw_tourism_pro_why_choose_us_sec'
	)));
}


// ------------------------Team Section---------------------

$wp_customize->add_section('vw_tourism_pro_team_sec',array(
	'title'	=> __('Team Section Section','vw-tourism-pro'),
	'description'	=> __('Add Team Section Setting here.','vw-tourism-pro'),
	'panel' => 'vw_tourism_pro_panel_id',
));
$wp_customize->add_setting('vw_tourism_pro_team_enabledisable',
	array(
			'default' => 'Enable',
			'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
	));
$wp_customize->add_control(
	'vw_tourism_pro_team_enabledisable',
		array(
				'type' => 'radio',
				'label' => __('Do you want this section', 'vw-tourism-pro'),
				'section' => 'vw_tourism_pro_team_sec',
				'choices' => array(
						'Enable' => __('Enable', 'vw-tourism-pro'),
						'Disable' => __('Disable', 'vw-tourism-pro')
		),
	));

	$wp_customize->selective_refresh->add_partial( 'vw_tourism_pro_team_enabledisable', array(
		'selector' => '#team .container',
		'render_callback' => 'vw_tourism_pro_customize_partial_vw_tourism_pro_team_enabledisable',
));
$wp_customize->add_setting( 'vw_tourism_pro_team_bgcolor', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 		'vw_tourism_pro_team_bgcolor', array(
	'label' => 'Background Color',
	'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_team_sec',
	'settings' => 'vw_tourism_pro_team_bgcolor',
)));
$wp_customize->add_setting('vw_tourism_pro_team_bgimage',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
));
$wp_customize->add_control(	new WP_Customize_Image_Control($wp_customize,'vw_tourism_pro_team_bgimage',	array(
		'label' => __('Background image','vw-tourism-pro'),
		'section' => 'vw_tourism_pro_team_sec',
		'settings' => 'vw_tourism_pro_team_bgimage'
)));
$wp_customize->add_setting( 'vw_tourism_pro_team_bg_attachment', array(
		'default'         => '',
		'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control('vw_tourism_pro_team_bg_attachment', array(
		'type'      => 'radio',
		'label'     => __('Choose image option', 'vw-tourism-pro'),
		'section'   => 'vw_tourism_pro_team_sec',
		'choices'   => array(
		'vw-fixed'  => __( 'Fixed', 'vw-tourism-pro' ),
		'vw-scroll' => __( 'Scroll', 'vw-tourism-pro' ),
)));
$wp_customize->add_setting( 'vw_tourism_pro_team_content_settings',
array(
	'default' => '',
	'transport' => 'postMessage',
	'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
));
$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_team_content_settings',
array(
	'label' => __('Section Content Setting','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_team_sec'
)));
$wp_customize->add_setting('vw_tourism_pro_team_sub_heading',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_team_sub_heading',array(
	'label' => __('Sub Heading','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_team_sec',
	'setting' => 'vw_tourism_pro_team_sub_heading',
	'type' => 'text'
));
$wp_customize->add_setting('vw_tourism_pro_team_heading',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_team_heading',array(
	'label' => __('Sub Heading','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_team_sec',
	'setting' => 'vw_tourism_pro_team_heading',
	'type' => 'text'
));
$wp_customize->add_setting( 'vw_tourism_pro_team_content_color_font_settings',
array(
	'default' => '',
	'transport' => 'postMessage',
	'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
));
$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_team_content_color_font_settings',
array(
	'label' => __('Section Color & Font Setting','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_team_sec'
)));

$wp_customize->add_setting( 'vw_tourism_pro_team_sub_heading_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_team_sub_heading_color', array(
	'label' => __('Sub Heading Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_team_sec',
	'settings' => 'vw_tourism_pro_team_sub_heading_color',
)));

$wp_customize->add_setting('vw_tourism_pro_team_sub_heading_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_team_sub_heading_font_size',array(
	'label' => __('Sub Heading Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_team_sec',
	'setting' => 'vw_tourism_pro_team_sub_heading_font_size',
	'type'    => 'number'
));

$wp_customize->add_setting('vw_tourism_pro_team_sub_heading_font_family',array(
'default' => '',
'capability' => 'edit_theme_options',
'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_tourism_pro_team_sub_heading_font_family', array(
	'section'  => 'vw_tourism_pro_team_sec',
	'label'    => __( 'Sub Heading Font Family','vw-tourism-pro'),
	'type'     => 'select',
	'choices'  => $font_array
));
$wp_customize->add_setting( 'vw_tourism_pro_team_heading_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_team_heading_color', array(
	'label' => __('Heading Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_team_sec',
	'settings' => 'vw_tourism_pro_team_heading_color',
)));

$wp_customize->add_setting('vw_tourism_pro_team_heading_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_team_heading_font_size',array(
	'label' => __('Heading Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_team_sec',
	'setting' => 'vw_tourism_pro_team_heading_font_size',
	'type'    => 'number'
));

$wp_customize->add_setting('vw_tourism_pro_team_heading_font_family',array(
'default' => '',
'capability' => 'edit_theme_options',
'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_tourism_pro_team_heading_font_family', array(
	'section'  => 'vw_tourism_pro_team_sec',
	'label'    => __( 'Heading Font Family','vw-tourism-pro'),
	'type'     => 'select',
	'choices'  => $font_array
));
$wp_customize->add_setting( 'vw_tourism_pro_team_name_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_team_name_color', array(
	'label' => __('Team Name Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_team_sec',
	'settings' => 'vw_tourism_pro_team_name_color',
)));

$wp_customize->add_setting('vw_tourism_pro_team_name_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_team_name_font_size',array(
	'label' => __('Team Name Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_team_sec',
	'setting' => 'vw_tourism_pro_team_name_font_size',
	'type'    => 'number'
));

$wp_customize->add_setting('vw_tourism_pro_team_name_font_family',array(
'default' => '',
'capability' => 'edit_theme_options',
'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_tourism_pro_team_name_font_family', array(
	'section'  => 'vw_tourism_pro_team_sec',
	'label'    => __( 'Team Name Font Family','vw-tourism-pro'),
	'type'     => 'select',
	'choices'  => $font_array
));
$wp_customize->add_setting( 'vw_tourism_pro_team_guide_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_team_guide_color', array(
	'label' => __('Travel Guide Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_team_sec',
	'settings' => 'vw_tourism_pro_team_guide_color',
)));

$wp_customize->add_setting('vw_tourism_pro_team_guide_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_team_guide_font_size',array(
	'label' => __('Travel Guide Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_team_sec',
	'setting' => 'vw_tourism_pro_team_guide_font_size',
	'type'    => 'number'
));

$wp_customize->add_setting('vw_tourism_pro_team_guide_font_family',array(
'default' => '',
'capability' => 'edit_theme_options',
'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_tourism_pro_team_guide_font_family', array(
	'section'  => 'vw_tourism_pro_team_sec',
	'label'    => __( 'Travel Guide Font Family','vw-tourism-pro'),
	'type'     => 'select',
	'choices'  => $font_array
));
$wp_customize->add_setting( 'vw_tourism_pro_team_content_bg_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_team_content_bg_color', array(
	'label' => __('Content Background Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_team_sec',
	'settings' => 'vw_tourism_pro_team_content_bg_color',
)));
$wp_customize->add_setting( 'vw_tourism_pro_team_content_hover_bg_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_team_content_hover_bg_color', array(
	'label' => __('Content Hover Background Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_team_sec',
	'settings' => 'vw_tourism_pro_team_content_hover_bg_color',
)));

$wp_customize->add_setting(
     'vw_tourism_pro_team_youtube_icon',
     array(
       'default'     => '',
       'sanitize_callback' => 'sanitize_text_field'
     )
   );
   $wp_customize->add_control(
     new vw_tourism_pro_Fontawesome_Icon_Chooser(
       $wp_customize,
       'vw_tourism_pro_team_youtube_icon',
       array(
         'settings'    => 'vw_tourism_pro_team_youtube_icon',
         'section'   => 'vw_tourism_pro_team_sec',
         'type'      => 'icon',
         'label'     => esc_html__( 'Choose Youtube Icon', 'vw-tourism-pro' ),
       )
     )
   );
$wp_customize->add_setting(
     'vw_tourism_pro_team_insta_icon',
     array(
       'default'     => '',
       'sanitize_callback' => 'sanitize_text_field'
     )
   );
   $wp_customize->add_control(
     new vw_tourism_pro_Fontawesome_Icon_Chooser(
       $wp_customize,
       'vw_tourism_pro_team_insta_icon',
       array(
         'settings'    => 'vw_tourism_pro_team_insta_icon',
         'section'   => 'vw_tourism_pro_team_sec',
         'type'      => 'icon',
         'label'     => esc_html__( 'Choose Instagram Icon', 'vw-tourism-pro' ),
       )
     )
   );
$wp_customize->add_setting(
     'vw_tourism_pro_team_twitter_icon',
     array(
       'default'     => '',
       'sanitize_callback' => 'sanitize_text_field'
     )
   );
   $wp_customize->add_control(
     new vw_tourism_pro_Fontawesome_Icon_Chooser(
       $wp_customize,
       'vw_tourism_pro_team_twitter_icon',
       array(
         'settings'    => 'vw_tourism_pro_team_twitter_icon',
         'section'   => 'vw_tourism_pro_team_sec',
         'type'      => 'icon',
         'label'     => esc_html__( 'Choose Twitter Icon', 'vw-tourism-pro' ),
       )
     )
   );
$wp_customize->add_setting(
     'vw_tourism_pro_team_facebook_icon',
     array(
       'default'     => '',
       'sanitize_callback' => 'sanitize_text_field'
     )
   );
   $wp_customize->add_control(
     new vw_tourism_pro_Fontawesome_Icon_Chooser(
       $wp_customize,
       'vw_tourism_pro_team_facebook_icon',
       array(
         'settings'    => 'vw_tourism_pro_team_facebook_icon',
         'section'   => 'vw_tourism_pro_team_sec',
         'type'      => 'icon',
         'label'     => esc_html__( 'Choose Facebook Icon', 'vw-tourism-pro' ),
       )
     )
   );


$wp_customize->add_setting( 'vw_tourism_pro_team_content_share_icon_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_team_content_share_icon_color', array(
	'label' => __('Share Icon Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_team_sec',
	'settings' => 'vw_tourism_pro_team_content_share_icon_color',
)));
$wp_customize->add_setting( 'vw_tourism_pro_team_content_share_icon_bg_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_team_content_share_icon_bg_color', array(
	'label' => __('Share Icon Background Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_team_sec',
	'settings' => 'vw_tourism_pro_team_content_share_icon_bg_color',
)));
$wp_customize->add_setting( 'vw_tourism_pro_team_content_social_icon_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_team_content_social_icon_color', array(
	'label' => __('Social Icon Background Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_team_sec',
	'settings' => 'vw_tourism_pro_team_content_social_icon_color',
)));
$wp_customize->add_setting( 'vw_tourism_pro_team_content_icon_hover_background_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_team_content_icon_hover_background_color', array(
	'label' => __('Social Icon Hover Background Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_team_sec',
	'settings' => 'vw_tourism_pro_team_content_icon_hover_background_color',
)));
$wp_customize->add_setting( 'vw_tourism_pro_team_card_border_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_team_card_border_color', array(
	'label' => __('Card Border Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_team_sec',
	'settings' => 'vw_tourism_pro_team_card_border_color',
)));
	/*-------------------Testimonial Section----------------------------------------*/

	$wp_customize->add_section('vw_tourism_pro_testimonial_sec',array(
		'title'	=> __('Testimonial Section Section','vw-tourism-pro'),
		'description'	=> __('Add Testimonial Section Setting here.','vw-tourism-pro'),
		'panel' => 'vw_tourism_pro_panel_id',
	));
	$wp_customize->add_setting('vw_tourism_pro_testimonial_enabledisable',
		array(
				'default' => 'Enable',
				'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
		));
	$wp_customize->add_control(
		'vw_tourism_pro_testimonial_enabledisable',
			array(
					'type' => 'radio',
					'label' => __('Do you want this section', 'vw-tourism-pro'),
					'section' => 'vw_tourism_pro_testimonial_sec',
					'choices' => array(
							'Enable' => __('Enable', 'vw-tourism-pro'),
							'Disable' => __('Disable', 'vw-tourism-pro')
			),
		));

		$wp_customize->selective_refresh->add_partial( 'vw_tourism_pro_testimonial_enabledisable', array(
			'selector' => '#testimonial .container',
			'render_callback' => 'vw_tourism_pro_customize_partial_vw_tourism_pro_testimonial_enabledisable',
	));
	$wp_customize->add_setting( 'vw_tourism_pro_testimonial_bgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 		'vw_tourism_pro_testimonial_bgcolor', array(
		'label' => 'Background Color',
		'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-tourism-pro'),
		'section' => 'vw_tourism_pro_testimonial_sec',
		'settings' => 'vw_tourism_pro_testimonial_bgcolor',
	)));
	$wp_customize->add_setting('vw_tourism_pro_testimonial_bgimage',array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control(	new WP_Customize_Image_Control($wp_customize,'vw_tourism_pro_testimonial_bgimage',	array(
			'label' => __('Background image','vw-tourism-pro'),
			'section' => 'vw_tourism_pro_testimonial_sec',
			'settings' => 'vw_tourism_pro_testimonial_bgimage'
	)));
	$wp_customize->add_setting( 'vw_tourism_pro_testimonial_bg_attachment', array(
			'default'         => '',
			'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
	));
	$wp_customize->add_control('vw_tourism_pro_testimonial_bg_attachment', array(
			'type'      => 'radio',
			'label'     => __('Choose image option', 'vw-tourism-pro'),
			'section'   => 'vw_tourism_pro_testimonial_sec',
			'choices'   => array(
			'vw-fixed'  => __( 'Fixed', 'vw-tourism-pro' ),
			'vw-scroll' => __( 'Scroll', 'vw-tourism-pro' ),
	)));
	$wp_customize->add_setting( 'vw_tourism_pro_testimonial_content_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
	));
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_testimonial_content_settings',
	array(
		'label' => __('Section Content Setting','vw-tourism-pro'),
		'section' => 'vw_tourism_pro_testimonial_sec'
	)));
	$wp_customize->add_setting('vw_tourism_pro_testimonial_sub_heading',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_tourism_pro_testimonial_sub_heading',array(
		'label' => __('Sub Heading','vw-tourism-pro'),
		'section' => 'vw_tourism_pro_testimonial_sec',
		'setting' => 'vw_tourism_pro_testimonial_sub_heading',
		'type' => 'text'
	));
	$wp_customize->add_setting('vw_tourism_pro_testimonial_heading',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_tourism_pro_testimonial_heading',array(
		'label' => __('Heading','vw-tourism-pro'),
		'section' => 'vw_tourism_pro_testimonial_sec',
		'setting' => 'vw_tourism_pro_testimonial_heading',
		'type' => 'text'
	));
	$wp_customize->add_setting('vw_tourism_pro_testimonial_paragraph',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_tourism_pro_testimonial_paragraph',array(
		'label' => __('Paragraph','vw-tourism-pro'),
		'section' => 'vw_tourism_pro_testimonial_sec',
		'setting' => 'vw_tourism_pro_testimonial_paragraph',
		'type' => 'text'
	));
	$wp_customize->add_setting( 'vw_tourism_pro_testimonial_content_color_font_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
	));
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_testimonial_content_color_font_settings',
	array(
		'label' => __('Section Color & Font Setting','vw-tourism-pro'),
		'section' => 'vw_tourism_pro_testimonial_sec'
	)));

	$wp_customize->add_setting( 'vw_tourism_pro_testimonial_sub_heading_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_testimonial_sub_heading_color', array(
		'label' => __('Sub Heading Color', 'vw-tourism-pro'),
		'section' => 'vw_tourism_pro_testimonial_sec',
		'settings' => 'vw_tourism_pro_testimonial_sub_heading_color',
	)));

	$wp_customize->add_setting('vw_tourism_pro_testimonial_sub_heading_font_size',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_tourism_pro_testimonial_sub_heading_font_size',array(
		'label' => __('Sub Heading Font Size','vw-tourism-pro'),
		'description' => __('Add font size in px','vw-tourism-pro'),
		'section' => 'vw_tourism_pro_testimonial_sec',
		'setting' => 'vw_tourism_pro_testimonial_sub_heading_font_size',
		'type'    => 'number'
	));

	$wp_customize->add_setting('vw_tourism_pro_testimonial_sub_heading_font_family',array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
	));
	$wp_customize->add_control(
		'vw_tourism_pro_testimonial_sub_heading_font_family', array(
		'section'  => 'vw_tourism_pro_testimonial_sec',
		'label'    => __( 'Sub Heading Font Family','vw-tourism-pro'),
		'type'     => 'select',
		'choices'  => $font_array
	));
	$wp_customize->add_setting( 'vw_tourism_pro_testimonial_heading_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_testimonial_heading_color', array(
		'label' => __('Heading Color', 'vw-tourism-pro'),
		'section' => 'vw_tourism_pro_testimonial_sec',
		'settings' => 'vw_tourism_pro_testimonial_heading_color',
	)));

	$wp_customize->add_setting('vw_tourism_pro_testimonial_heading_font_size',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_tourism_pro_testimonial_heading_font_size',array(
		'label' => __('Heading Font Size','vw-tourism-pro'),
		'description' => __('Add font size in px','vw-tourism-pro'),
		'section' => 'vw_tourism_pro_testimonial_sec',
		'setting' => 'vw_tourism_pro_testimonial_heading_font_size',
		'type'    => 'number'
	));

	$wp_customize->add_setting('vw_tourism_pro_testimonial_heading_font_family',array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
	));
	$wp_customize->add_control(
		'vw_tourism_pro_testimonial_heading_font_family', array(
		'section'  => 'vw_tourism_pro_testimonial_sec',
		'label'    => __( 'Heading Font Family','vw-tourism-pro'),
		'type'     => 'select',
		'choices'  => $font_array
	));
	$wp_customize->add_setting( 'vw_tourism_pro_testimonial_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_testimonial_paragraph_color', array(
		'label' => __('Paragraph Color', 'vw-tourism-pro'),
		'section' => 'vw_tourism_pro_testimonial_sec',
		'settings' => 'vw_tourism_pro_testimonial_paragraph_color',
	)));

	$wp_customize->add_setting('vw_tourism_pro_testimonial_paragraph_font_size',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_tourism_pro_testimonial_paragraph_font_size',array(
		'label' => __('Paragraph Font Size','vw-tourism-pro'),
		'description' => __('Add font size in px','vw-tourism-pro'),
		'section' => 'vw_tourism_pro_testimonial_sec',
		'setting' => 'vw_tourism_pro_testimonial_paragraph_font_size',
		'type'    => 'number'
	));

	$wp_customize->add_setting('vw_tourism_pro_testimonial_paragraph_font_family',array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
	));
	$wp_customize->add_control(
		'vw_tourism_pro_testimonial_paragraph_font_family', array(
		'section'  => 'vw_tourism_pro_testimonial_sec',
		'label'    => __( 'Paragraph Font Family','vw-tourism-pro'),
		'type'     => 'select',
		'choices'  => $font_array
	));
	$wp_customize->add_setting( 'vw_tourism_pro_testimonial_active_img_border_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_testimonial_active_img_border_color', array(
		'label' => __('Active Image Border Color', 'vw-tourism-pro'),
		'section' => 'vw_tourism_pro_testimonial_sec',
		'settings' => 'vw_tourism_pro_testimonial_active_img_border_color',
	)));
	$wp_customize->add_setting( 'vw_tourism_pro_testimonial_arrow_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_testimonial_arrow_color', array(
		'label' => __('Arrow Color', 'vw-tourism-pro'),
		'section' => 'vw_tourism_pro_testimonial_sec',
		'settings' => 'vw_tourism_pro_testimonial_arrow_color',
	)));
	$wp_customize->add_setting( 'vw_tourism_pro_testimonial_arrow_bg_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_testimonial_arrow_bg_color', array(
		'label' => __('Arrow  Background Color', 'vw-tourism-pro'),
		'section' => 'vw_tourism_pro_testimonial_sec',
		'settings' => 'vw_tourism_pro_testimonial_arrow_bg_color',
	)));
	$wp_customize->add_setting( 'vw_tourism_pro_testimonial_quote_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_testimonial_quote_color', array(
		'label' => __('Quote Color', 'vw-tourism-pro'),
		'section' => 'vw_tourism_pro_testimonial_sec',
		'settings' => 'vw_tourism_pro_testimonial_quote_color',
	)));
	$wp_customize->add_setting( 'vw_tourism_pro_testimonial_comment_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_testimonial_comment_color', array(
		'label' => __('Comment Color', 'vw-tourism-pro'),
		'section' => 'vw_tourism_pro_testimonial_sec',
		'settings' => 'vw_tourism_pro_testimonial_comment_color',
	)));
	$wp_customize->add_setting( 'vw_tourism_pro_testimonial_card_border_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_testimonial_card_border_color', array(
		'label' => __('Card Border Color', 'vw-tourism-pro'),
		'section' => 'vw_tourism_pro_testimonial_sec',
		'settings' => 'vw_tourism_pro_testimonial_card_border_color',
	)));
	$wp_customize->add_setting( 'vw_tourism_pro_testimonial_content_heading_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_testimonial_content_heading_color', array(
		'label' => __('Content Heading Color', 'vw-tourism-pro'),
		'section' => 'vw_tourism_pro_testimonial_sec',
		'settings' => 'vw_tourism_pro_testimonial_content_heading_color',
	)));

	$wp_customize->add_setting('vw_tourism_pro_testimonial_content_heading_font_size',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_tourism_pro_testimonial_content_heading_font_size',array(
		'label' => __('Content Heading Font Size','vw-tourism-pro'),
		'description' => __('Add font size in px','vw-tourism-pro'),
		'section' => 'vw_tourism_pro_testimonial_sec',
		'setting' => 'vw_tourism_pro_testimonial_content_heading_font_size',
		'type'    => 'number'
	));

	$wp_customize->add_setting('vw_tourism_pro_testimonial_content_heading_font_family',array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
	));
	$wp_customize->add_control(
		'vw_tourism_pro_testimonial_content_heading_font_family', array(
		'section'  => 'vw_tourism_pro_testimonial_sec',
		'label'    => __( 'Content Heading Font Family','vw-tourism-pro'),
		'type'     => 'select',
		'choices'  => $font_array
	));
	$wp_customize->add_setting( 'vw_tourism_pro_testimonial_content_designation_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_testimonial_content_designation_color', array(
		'label' => __('Content Desgination Color', 'vw-tourism-pro'),
		'section' => 'vw_tourism_pro_testimonial_sec',
		'settings' => 'vw_tourism_pro_testimonial_content_designation_color',
	)));

	$wp_customize->add_setting('vw_tourism_pro_testimonial_content_designation_font_size',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_tourism_pro_testimonial_content_designation_font_size',array(
		'label' => __('Content Desgination Font Size','vw-tourism-pro'),
		'description' => __('Add font size in px','vw-tourism-pro'),
		'section' => 'vw_tourism_pro_testimonial_sec',
		'setting' => 'vw_tourism_pro_testimonial_content_designation_font_size',
		'type'    => 'number'
	));

	$wp_customize->add_setting('vw_tourism_pro_testimonial_content_designation_font_family',array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
	));
	$wp_customize->add_control(
		'vw_tourism_pro_testimonial_content_designation_font_family', array(
		'section'  => 'vw_tourism_pro_testimonial_sec',
		'label'    => __( 'Content Desgination Font Family','vw-tourism-pro'),
		'type'     => 'select',
		'choices'  => $font_array
	));
	$wp_customize->add_setting( 'vw_tourism_pro_testimonial_content_para_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_testimonial_content_para_color', array(
		'label' => __('Content Paragraph Color', 'vw-tourism-pro'),
		'section' => 'vw_tourism_pro_testimonial_sec',
		'settings' => 'vw_tourism_pro_testimonial_content_para_color',
	)));

	$wp_customize->add_setting('vw_tourism_pro_testimonial_content_para_font_size',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_tourism_pro_testimonial_content_para_font_size',array(
		'label' => __('Content Paragraph Font Size','vw-tourism-pro'),
		'description' => __('Add font size in px','vw-tourism-pro'),
		'section' => 'vw_tourism_pro_testimonial_sec',
		'setting' => 'vw_tourism_pro_testimonial_content_para_font_size',
		'type'    => 'number'
	));

	$wp_customize->add_setting('vw_tourism_pro_testimonial_content_para_font_family',array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
	));
	$wp_customize->add_control(
		'vw_tourism_pro_testimonial_content_para_font_family', array(
		'section'  => 'vw_tourism_pro_testimonial_sec',
		'label'    => __( 'Content Paragraph Font Family','vw-tourism-pro'),
		'type'     => 'select',
		'choices'  => $font_array
	));

	$wp_customize->add_setting( 'vw_tourism_pro_testimonial_content_rating_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_testimonial_content_rating_color', array(
		'label' => __('Rating Color', 'vw-tourism-pro'),
		'section' => 'vw_tourism_pro_testimonial_sec',
		'settings' => 'vw_tourism_pro_testimonial_content_rating_color',
	)));
	$wp_customize->add_setting( 'vw_tourism_pro_testimonial_content_rating_count_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_testimonial_content_rating_count_color', array(
		'label' => __('Content Rating count Color', 'vw-tourism-pro'),
		'section' => 'vw_tourism_pro_testimonial_sec',
		'settings' => 'vw_tourism_pro_testimonial_content_rating_count_color',
	)));

	$wp_customize->add_setting('vw_tourism_pro_testimonial_content_rating_count_font_size',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_tourism_pro_testimonial_content_rating_count_font_size',array(
		'label' => __('Content Rating count Font Size','vw-tourism-pro'),
		'description' => __('Add font size in px','vw-tourism-pro'),
		'section' => 'vw_tourism_pro_testimonial_sec',
		'setting' => 'vw_tourism_pro_testimonial_content_rating_count_font_size',
		'type'    => 'number'
	));

	$wp_customize->add_setting('vw_tourism_pro_testimonial_content_rating_count_font_family',array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
	));
	$wp_customize->add_control(
		'vw_tourism_pro_testimonial_content_rating_count_font_family', array(
		'section'  => 'vw_tourism_pro_testimonial_sec',
		'label'    => __( 'Content Rating count Font Family','vw-tourism-pro'),
		'type'     => 'select',
		'choices'  => $font_array
	));

	$wp_customize->add_setting( 'vw_tourism_pro_testimonial_content_background_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_testimonial_content_background_color', array(
		'label' => __('Content Background Color', 'vw-tourism-pro'),
		'section' => 'vw_tourism_pro_testimonial_sec',
		'settings' => 'vw_tourism_pro_testimonial_content_background_color',
	)));
	$wp_customize->add_setting( 'vw_tourism_pro_testimonial_content_img_bg_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_testimonial_content_img_bg_color', array(
		'label' => __('Content Image Border Color', 'vw-tourism-pro'),
		'section' => 'vw_tourism_pro_testimonial_sec',
		'settings' => 'vw_tourism_pro_testimonial_content_img_bg_color',
	)));
/*-------------------Latest Post----------------------------------------*/
	$wp_customize->add_section('vw_tourism_pro_latest_news_sec',array(
		'title'	=> __('Latest News & Blogs Section','vw-tourism-pro'),
		'description'	=> __('Add Latest News & Blogs Setting here.','vw-tourism-pro'),
		'panel' => 'vw_tourism_pro_panel_id',
	));
	$wp_customize->add_setting('vw_tourism_pro_radio_our_blog_enable',
    array(
        'default' => 'Enable',
        'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
    ));
	$wp_customize->add_control(
    'vw_tourism_pro_radio_our_blog_enable',
	    array(
	        'type' => 'radio',
	        'label' => __('Do you want this section', 'vw-tourism-pro'),
	        'section' => 'vw_tourism_pro_latest_news_sec',
	        'choices' => array(
	            'Enable' => __('Enable', 'vw-tourism-pro'),
	            'Disable' => __('Disable', 'vw-tourism-pro')
	    ),
    ));

    $wp_customize->selective_refresh->add_partial( 'vw_tourism_pro_radio_our_blog_enable', array(
	    'selector' => '#Blog .container',
	    'render_callback' => 'vw_tourism_pro_customize_partial_vw_tourism_pro_radio_our_blog_enable',
	));

	$wp_customize->add_setting( 'vw_tourism_pro_our_blog_bg_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 		'vw_tourism_pro_our_blog_bg_color', array(
		'label' => 'Background Color',
    'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'vw-tourism-pro'),
		'section' => 'vw_tourism_pro_latest_news_sec',
		'settings' => 'vw_tourism_pro_our_blog_bg_color',
	)));
	$wp_customize->add_setting('vw_tourism_pro_our_blog_bgimage',array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'vw_tourism_pro_our_blog_bgimage',
	        array(
	            'label' => __('Background image','vw-tourism-pro'),
	            'section' => 'vw_tourism_pro_latest_news_sec',
	            'settings' => 'vw_tourism_pro_our_blog_bgimage'
	)));
	$wp_customize->add_setting( 'vw_tourism_pro_our_blog_image_bg', array(
	    'default'         => '',
	    'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
	));
	$wp_customize->add_control('vw_tourism_pro_our_blog_image_bg', array(
	    'type'      => 'radio',
	    'label'     => __('Choose image option', 'vw-tourism-pro'),
	    'section'   => 'vw_tourism_pro_latest_news_sec',
	    'choices'   => array(
			'vw-fixed'  => __( 'Fixed', 'vw-tourism-pro' ),
	    'vw-scroll' => __( 'Scroll', 'vw-tourism-pro' ),
	)));
	$wp_customize->add_setting( 'vw_tourism_pro_our_blog_content_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
	));
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_our_blog_content_settings',
	array(
		'label' => __('Section Content Setting','vw-tourism-pro'),
		'section' => 'vw_tourism_pro_our_blog_sec'
	)));
  $wp_customize->add_setting('vw_tourism_pro_blog_sub_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_tourism_pro_blog_sub_heading',array(
    'label' => __('Sub Heading','vw-tourism-pro'),
    'section' => 'vw_tourism_pro_latest_news_sec',
    'setting' => 'vw_tourism_pro_blog_sub_heading',
    'type' => 'text'
  ));
  $wp_customize->add_setting('vw_tourism_pro_blog_heading',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_tourism_pro_blog_heading',array(
    'label' => __('Heading','vw-tourism-pro'),
    'section' => 'vw_tourism_pro_latest_news_sec',
    'setting' => 'vw_tourism_pro_blog_heading',
    'type' => 'text'
  ));
	$wp_customize->add_setting( 'vw_tourism_pro_our_blog_color_settings',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
	));
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_our_blog_color_settings',
	array(
		'label' => __('Section Content Color & font Setting','vw-tourism-pro'),
		'section' => 'vw_tourism_pro_latest_news_sec'
	)));

  $wp_customize->add_setting( 'vw_tourism_pro_blog_sub_heading_color', array(
    'default' => '',
    'sanitize_callback'	=> 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_blog_sub_heading_color', array(
    'label' => __('Sub Heading Color', 'vw-tourism-pro'),
    'section' => 'vw_tourism_pro_latest_news_sec',
    'settings' => 'vw_tourism_pro_blog_sub_heading_color',
  )));

  $wp_customize->add_setting('vw_tourism_pro_blog_sub_heading_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_tourism_pro_blog_sub_heading_font_size',array(
    'label' => __('Sub Heading Font Size','vw-tourism-pro'),
    'description' => __('Add font size in px','vw-tourism-pro'),
    'section' => 'vw_tourism_pro_latest_news_sec',
    'setting' => 'vw_tourism_pro_blog_sub_heading_font_size',
    'type'    => 'number'
  ));
	$wp_customize->add_setting('vw_tourism_pro_blog_sub_heading_font_family',array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
	));
	$wp_customize->add_control(
		'vw_tourism_pro_blog_sub_heading_font_family', array(
		'section'  => 'vw_tourism_pro_latest_news_sec',
		'label'    => __( 'Sub Heading Font Family','vw-tourism-pro'),
		'type'     => 'select',
		'choices'  => $font_array
	));
  $wp_customize->add_setting( 'vw_tourism_pro_blog_heading_color', array(
    'default' => '',
    'sanitize_callback'	=> 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_blog_heading_color', array(
    'label' => __('Heading Color', 'vw-tourism-pro'),
    'section' => 'vw_tourism_pro_latest_news_sec',
    'settings' => 'vw_tourism_pro_blog_heading_color',
  )));

  $wp_customize->add_setting('vw_tourism_pro_blog_heading_font_size',array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_tourism_pro_blog_heading_font_size',array(
    'label' => __('Heading Font Size','vw-tourism-pro'),
    'description' => __('Add font size in px','vw-tourism-pro'),
    'section' => 'vw_tourism_pro_latest_news_sec',
    'setting' => 'vw_tourism_pro_blog_heading_font_size',
    'type'    => 'number'
  ));

  $wp_customize->add_setting('vw_tourism_pro_blog_heading_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
  ));
  $wp_customize->add_control(
      'vw_tourism_pro_blog_heading_font_family', array(
      'section'  => 'vw_tourism_pro_latest_news_sec',
      'label'    => __( 'Headings  Font Family','vw-tourism-pro'),
      'type'     => 'select',
      'choices'  => $font_array
  ));

	$wp_customize->add_setting( 'vw_tourism_pro_our_blog_left_content_typography',
	array(
		'default' => '',
		'transport' => 'postMessage',
		'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
	));
	$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_our_blog_left_content_typography',
	array(
		'label' => __('Blog Content Font Color Setting ','vw-tourism-pro'),
		'section' => 'vw_tourism_pro_latest_news_sec'
	)));

	  $wp_customize->add_setting( 'vw_tourism_pro_our_blog_left_content_date_comment_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_our_blog_left_content_date_comment_color',array(
		'label' => __('Date & Comment Color', 'vw-tourism-pro'),
		'section' => 'vw_tourism_pro_latest_news_sec',
		'settings' => 'vw_tourism_pro_our_blog_left_content_date_comment_color',
	)));
	$wp_customize->add_setting('vw_tourism_pro_our_blog_left_content_date_comment_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_tourism_pro_our_blog_left_content_date_comment_font_family', array(
	    'section'  => 'vw_tourism_pro_latest_news_sec',
	    'label'    => __( 'Date & Comment Font Family','vw-tourism-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array
	));

	$wp_customize->add_setting('vw_tourism_pro_our_blog_left_content_date_comment_font_size',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_tourism_pro_our_blog_left_content_date_comment_font_size',array(
		'label' => __('Date & Comment Font Size','vw-tourism-pro'),
		'description' => __('Add font size in px','vw-tourism-pro'),
		'section' => 'vw_tourism_pro_latest_news_sec',
		'setting' => 'vw_tourism_pro_our_blog_left_content_date_comment_font_size',
		'type'    => 'number'
	));

	$wp_customize->add_setting( 'vw_tourism_pro_our_blog_left_content_date_comment_icon_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_our_blog_left_content_date_comment_icon_color',array(
	'label' => __('Date & Comment Icon Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_latest_news_sec',
	'settings' => 'vw_tourism_pro_our_blog_left_content_date_comment_icon_color',
)));
$wp_customize->add_setting( 'vw_tourism_pro_our_blog_left_content_blog_title_color', array(
'default' => '',
'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_our_blog_left_content_blog_title_color',array(
'label' => __('Left Blog Title Color', 'vw-tourism-pro'),
'section' => 'vw_tourism_pro_latest_news_sec',
'settings' => 'vw_tourism_pro_our_blog_left_content_blog_title_color',
)));
$wp_customize->add_setting('vw_tourism_pro_our_blog_left_content_blog_title_font_family',array(
'default' => '',
'capability' => 'edit_theme_options',
'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_tourism_pro_our_blog_left_content_blog_title_font_family', array(
	'section'  => 'vw_tourism_pro_latest_news_sec',
	'label'    => __( 'Left Blog Title Font Family','vw-tourism-pro'),
	'type'     => 'select',
	'choices'  => $font_array
));

$wp_customize->add_setting('vw_tourism_pro_our_blog_left_content_blog_title_font_size',array(
'default' => '',
'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_our_blog_left_content_blog_title_font_size',array(
'label' => __('Left Blog Title Font Size','vw-tourism-pro'),
'description' => __('Add font size in px','vw-tourism-pro'),
'section' => 'vw_tourism_pro_latest_news_sec',
'setting' => 'vw_tourism_pro_our_blog_left_content_blog_title_font_size',
'type'    => 'number'
));
$wp_customize->add_setting( 'vw_tourism_pro_our_blog_left_content_blog_desc_color', array(
'default' => '',
'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_our_blog_left_content_blog_desc_color',array(
'label' => __('Left Blog Description Color', 'vw-tourism-pro'),
'section' => 'vw_tourism_pro_latest_news_sec',
'settings' => 'vw_tourism_pro_our_blog_left_content_blog_desc_color',
)));
$wp_customize->add_setting('vw_tourism_pro_our_blog_left_content_blog_desc_font_family',array(
'default' => '',
'capability' => 'edit_theme_options',
'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
	'vw_tourism_pro_our_blog_left_content_blog_desc_font_family', array(
	'section'  => 'vw_tourism_pro_latest_news_sec',
	'label'    => __( 'Left Blog Description Font Family','vw-tourism-pro'),
	'type'     => 'select',
	'choices'  => $font_array
));

$wp_customize->add_setting('vw_tourism_pro_our_blog_left_content_blog_desc_font_size',array(
'default' => '',
'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_our_blog_left_content_blog_desc_font_size',array(
'label' => __('Left Blog Description Font Size','vw-tourism-pro'),
'description' => __('Add font size in px','vw-tourism-pro'),
'section' => 'vw_tourism_pro_latest_news_sec',
'setting' => 'vw_tourism_pro_our_blog_left_content_blog_desc_font_size',
'type'    => 'number'
));

$wp_customize->add_setting( 'vw_tourism_pro_our_blog_left_content_view_more_btn_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_our_blog_left_content_view_more_btn_color', array(
	'label' => __('View More Button Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_latest_news_sec',
	'settings' => 'vw_tourism_pro_our_blog_left_content_view_more_btn_color',
)));
$wp_customize->add_setting('vw_tourism_pro_our_blog_left_content_view_more_btn_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_our_blog_left_content_view_more_btn_font_size',array(
	'label' => __('View More Button Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_latest_news_sec',
	'setting' => 'vw_tourism_pro_our_blog_left_content_view_more_btn_font_size',
	'type'    => 'number'
));
$wp_customize->add_setting('vw_tourism_pro_our_blog_left_content_view_more_btn_font_family',array(
	'default' => '',
	'capability' => 'edit_theme_options',
	'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
		'vw_tourism_pro_our_blog_left_content_view_more_btn_font_family', array(
		'section'  => 'vw_tourism_pro_latest_news_sec',
		'label'    => __( 'View More Button Font Family','vw-tourism-pro'),
		'type'     => 'select',
		'choices'  => $font_array
));
$wp_customize->add_setting( 'vw_tourism_pro_our_blog_left_content_view_more_btn_bg_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_our_blog_left_content_view_more_btn_bg_color', array(
	'label' => __('View More Button Background Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_latest_news_sec',
	'settings' => 'vw_tourism_pro_our_blog_left_content_view_more_btn_bg_color',
)));
$wp_customize->add_setting( 'vw_tourism_pro_our_blog_left_content_view_more_btn_arrow_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_our_blog_left_content_view_more_btn_arrow_color', array(
	'label' => __('View More Button Arrow Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_latest_news_sec',
	'settings' => 'vw_tourism_pro_our_blog_left_content_view_more_btn_arrow_color',
)));


$wp_customize->add_setting( 'vw_tourism_pro_our_blog_left_content_view_more_btn_hover_bg_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_our_blog_left_content_view_more_btn_hover_bg_color', array(
	'label' => __('View More Button Hover Background Color', 'vw-tourism-pro'),
	'section' => 'vw_tourism_pro_latest_news_sec',
	'settings' => 'vw_tourism_pro_our_blog_left_content_view_more_btn_hover_bg_color',
)));

$wp_customize->add_setting( 'vw_tourism_pro_our_blog_right_content_color_font_settings',
array(
	'default' => '',
	'transport' => 'postMessage',
	'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
));
$wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_our_blog_right_content_color_font_settings',
array(
	'label' => __('Section Right Blog Color & Font Setting','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_latest_news_sec'
)));


$wp_customize->add_setting( 'vw_tourism_pro_our_blog_right_content_date_comment_color', array(
'default' => '',
'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_our_blog_right_content_date_comment_color',array(
'label' => __('Right Blog Date & Comment Color', 'vw-tourism-pro'),
'section' => 'vw_tourism_pro_latest_news_sec',
'settings' => 'vw_tourism_pro_our_blog_right_content_date_comment_color',
)));
$wp_customize->add_setting('vw_tourism_pro_our_blog_right_content_date_comment_font_family',array(
'default' => '',
'capability' => 'edit_theme_options',
'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
  'vw_tourism_pro_our_blog_right_content_date_comment_font_family', array(
  'section'  => 'vw_tourism_pro_latest_news_sec',
  'label'    => __( 'Right Blog Date & Comment Font Family','vw-tourism-pro'),
  'type'     => 'select',
  'choices'  => $font_array
));

$wp_customize->add_setting('vw_tourism_pro_our_blog_right_content_date_comment_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_our_blog_right_content_date_comment_font_size',array(
	'label' => __('Right Blog Date & Comment Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_latest_news_sec',
	'setting' => 'vw_tourism_pro_our_blog_right_content_date_comment_font_size',
	'type'    => 'number'
));

$wp_customize->add_setting( 'vvw_tourism_pro_our_blog_right_content_date_comment_icon_color', array(
'default' => '',
'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vvw_tourism_pro_our_blog_right_content_date_comment_icon_color',array(
'label' => __('Right Blog Date & Comment Icon Color', 'vw-tourism-pro'),
'section' => 'vw_tourism_pro_latest_news_sec',
'settings' => 'vvw_tourism_pro_our_blog_right_content_date_comment_icon_color',
)));


$wp_customize->add_setting( 'vw_tourism_pro_our_blog_right_content_title_color', array(
'default' => '',
'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_our_blog_right_content_title_color',array(
'label' => __('Right Blog Title Color', 'vw-tourism-pro'),
'section' => 'vw_tourism_pro_latest_news_sec',
'settings' => 'vw_tourism_pro_our_blog_right_content_title_color',
)));
$wp_customize->add_setting('vw_tourism_pro_our_blog_right_content_title_font_family',array(
'default' => '',
'capability' => 'edit_theme_options',
'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
  'vw_tourism_pro_our_blog_right_content_title_font_family', array(
  'section'  => 'vw_tourism_pro_latest_news_sec',
  'label'    => __( 'Right Blog Title Font Family','vw-tourism-pro'),
  'type'     => 'select',
  'choices'  => $font_array
));

$wp_customize->add_setting('vw_tourism_pro_our_blog_right_content_title_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_our_blog_right_content_title_font_size',array(
	'label' => __('Right Blog Title Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_latest_news_sec',
	'setting' => 'vw_tourism_pro_our_blog_right_content_title_font_size',
	'type'    => 'number'
));
$wp_customize->add_setting( 'vw_tourism_pro_our_blog_right_content_desc_color', array(
'default' => '',
'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_our_blog_right_content_desc_color',array(
'label' => __('Right Blog Description Color', 'vw-tourism-pro'),
'section' => 'vw_tourism_pro_latest_news_sec',
'settings' => 'vw_tourism_pro_our_blog_right_content_desc_color',
)));
$wp_customize->add_setting('vw_tourism_pro_our_blog_right_content_desc_font_family',array(
'default' => '',
'capability' => 'edit_theme_options',
'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
));
$wp_customize->add_control(
  'vw_tourism_pro_our_blog_right_content_desc_font_family', array(
  'section'  => 'vw_tourism_pro_latest_news_sec',
  'label'    => __( 'Right Blog Description Font Family','vw-tourism-pro'),
  'type'     => 'select',
  'choices'  => $font_array
));

$wp_customize->add_setting('vw_tourism_pro_our_blog_right_content_desc_font_size',array(
	'default' => '',
	'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control('vw_tourism_pro_our_blog_right_content_desc_font_size',array(
	'label' => __('Right Blog Description Font Size','vw-tourism-pro'),
	'description' => __('Add font size in px','vw-tourism-pro'),
	'section' => 'vw_tourism_pro_latest_news_sec',
	'setting' => 'vw_tourism_pro_our_blog_right_content_desc_font_size',
	'type'    => 'number'
));

$wp_customize->add_setting( 'vw_tourism_pro_our_blog_arrow_color', array(
'default' => '',
'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_our_blog_arrow_color',array(
'label' => __('Arrow Color', 'vw-tourism-pro'),
'section' => 'vw_tourism_pro_latest_news_sec',
'settings' => 'vw_tourism_pro_our_blog_arrow_color',
)));
$wp_customize->add_setting( 'vw_tourism_pro_our_blog_arrow_bg_color', array(
'default' => '',
'sanitize_callback'	=> 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_our_blog_arrow_bg_color',array(
'label' => __('Arrow Background Color', 'vw-tourism-pro'),
'section' => 'vw_tourism_pro_latest_news_sec',
'settings' => 'vw_tourism_pro_our_blog_arrow_bg_color',
)));

// ボタンテキスト設定を追加
$wp_customize->add_setting('vw_tourism_pro_blog_button_text', array(
    'default' => __('Continue Reading', 'vw-tourism-pro'),
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control('vw_tourism_pro_blog_button_text', array(
    'label' => __('Blog Button Text', 'vw-tourism-pro'),
    'section' => 'vw_tourism_pro_latest_news_sec',
    'type' => 'text',
));

  // --------------- Post General Settings ---------------
  $wp_customize->add_section('vw_tourism_pro_post_general_settings',array(
    'title' => __('Blog Page Settings','vw-tourism-pro'),
    'description'   => __('See section settings below and do check documentation too.','vw-tourism-pro'),
    'priority'  => null,
    'panel' => 'vw_tourism_pro_panel_id',
  ));
  $wp_customize->add_setting( 'vw_tourism_pro_post_general_settings_post_date',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'vw_tourism_pro_switch_sanitization'
  ));
  $wp_customize->add_control( new vw_tourism_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_tourism_pro_post_general_settings_post_date',
     array(
        'label' => esc_html__( 'Show or Hide Post Date', 'vw-tourism-pro' ),
        'section' => 'vw_tourism_pro_post_general_settings'
  )));
  $wp_customize->add_setting( 'vw_tourism_pro_post_general_settings_post_comments',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'vw_tourism_pro_switch_sanitization'
  ));
  $wp_customize->add_control( new vw_tourism_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_tourism_pro_post_general_settings_post_comments',
     array(
        'label' => esc_html__( 'Show or Hide Comments', 'vw-tourism-pro' ),
        'section' => 'vw_tourism_pro_post_general_settings'
     )
  ));
  $wp_customize->add_setting( 'vw_tourism_pro_post_general_settings_post_author',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'vw_tourism_pro_switch_sanitization'
   )
  );
  $wp_customize->add_control( new vw_tourism_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_tourism_pro_post_general_settings_post_author',
     array(
        'label' => esc_html__( 'Show or Hide Author', 'vw-tourism-pro' ),
        'section' => 'vw_tourism_pro_post_general_settings'
     )
  ));
  $wp_customize->add_setting( 'vw_tourism_pro_post_general_settings_post_share',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'vw_tourism_pro_switch_sanitization'
   )
  );
  $wp_customize->add_control( new vw_tourism_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_tourism_pro_post_general_settings_post_share',
     array(
        'label' => esc_html__( 'Show or Hide Share Icons', 'vw-tourism-pro' ),
        'section' => 'vw_tourism_pro_post_general_settings'
     )
  ));
  $wp_customize->add_setting( 'vw_tourism_pro_post_general_settings_post_share_facebook',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'vw_tourism_pro_switch_sanitization'
   )
  );
  $wp_customize->add_control( new vw_tourism_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_tourism_pro_post_general_settings_post_share_facebook',
     array(
        'label' => esc_html__( 'Post Share Facebook', 'vw-tourism-pro' ),
        'section' => 'vw_tourism_pro_post_general_settings'
     )
  ));
  $wp_customize->add_setting( 'vw_tourism_pro_post_general_settings_post_share_linkedin',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'vw_tourism_pro_switch_sanitization'
   )
  );
  $wp_customize->add_control( new vw_tourism_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_tourism_pro_post_general_settings_post_share_linkedin',
     array(
        'label' => esc_html__( 'Post Share Linkedin', 'vw-tourism-pro' ),
        'section' => 'vw_tourism_pro_post_general_settings'
     )
  ));
  $wp_customize->add_setting( 'vw_tourism_pro_post_general_settings_post_share_twitter',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'vw_tourism_pro_switch_sanitization'
   )
  );
  $wp_customize->add_control( new vw_tourism_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_tourism_pro_post_general_settings_post_share_twitter',
     array(
        'label' => esc_html__( 'Post Share Twitter', 'vw-tourism-pro' ),
        'section' => 'vw_tourism_pro_post_general_settings'
     )
  ));
  $wp_customize->add_setting( 'vw_tourism_pro_post_general_settings_category_setting',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'vw_tourism_pro_switch_sanitization'
   )
  );
  $wp_customize->add_control( new vw_tourism_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_tourism_pro_post_general_settings_category_setting',
     array(
        'label' => esc_html__( 'Show or Hide Category', 'vw-tourism-pro' ),
        'section' => 'vw_tourism_pro_post_general_settings'
     )
  ));
  $wp_customize->add_setting( 'vw_tourism_pro_post_general_settings_post_sidebar',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'vw_tourism_pro_switch_sanitization'
   )
  );
  $wp_customize->add_control( new vw_tourism_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_tourism_pro_post_general_settings_post_sidebar',
     array(
        'label' => esc_html__( 'Show or Hide Sidebar', 'vw-tourism-pro' ),
        'section' => 'vw_tourism_pro_post_general_settings'
     )
  ));
  

// -----------------------General Setting------------
  $wp_customize->add_section('vw_tourism_pro_post_product_general_settings',array(
    'title' => __('General Settings','vw-tourism-pro'),
    'description'   => __('See section settings below and do check documentation too.','vw-tourism-pro'),
    'priority'  => null,
    'panel' => 'vw_tourism_pro_panel_id',
  ));


   $wp_customize->add_setting( 'vw_tourism_pro_products_spinner_settings',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_products_spinner_settings',
    array(
    'label' => __('Spinner Settings','vw-tourism-pro'),
    'section' => 'vw_tourism_pro_post_product_general_settings'
  )));
  $wp_customize->add_setting( 'vw_tourism_pro_products_spinner_enable',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'vw_tourism_pro_switch_sanitization'
  ));
  $wp_customize->add_control( new vw_tourism_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_tourism_pro_products_spinner_enable',
     array(
        'label' => esc_html__( 'Spinner Enable/Disable', 'vw-tourism-pro' ),
        'section' => 'vw_tourism_pro_post_product_general_settings'
  )));
  $wp_customize->add_setting( 'vw_tourism_pro_products_spinner_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_products_spinner_bgcolor', array(
    'label' => __('Spinner Background Color', 'vw-tourism-pro'),
    'section' => 'vw_tourism_pro_post_product_general_settings',
    'settings' => 'vw_tourism_pro_products_spinner_bgcolor',
  )));

   /* --------- Spinner Opacity  ----------- */

  $wp_customize->add_setting('vw_tourism_pro_spinner_opacity_color',array(
      'default'              => '1',
      'sanitize_callback' => 'vw_tourism_pro_sanitize_choices'
  ));

  // $wp_customize->add_control( 'vw_tourism_pro_spinner_opacity_color', array(
  //   'label'       => esc_html__( 'Spinner Loader Opacity','vw-tourism-pro' ),
  //   'section'     => 'vw_tourism_pro_post_product_general_settings',
  //   'type'        => 'select',
  //   'settings'    => 'vw_tourism_pro_spinner_opacity_color',
  //   'choices' => array(
  //       '0' =>  esc_attr('0','vw-tourism-pro'),
  //       '0.1' =>  esc_attr('0.1','vw-tourism-pro'),
  //       '0.2' =>  esc_attr('0.2','vw-tourism-pro'),
  //       '0.3' =>  esc_attr('0.3','vw-tourism-pro'),
  //       '0.4' =>  esc_attr('0.4','vw-tourism-pro'),
  //       '0.5' =>  esc_attr('0.5','vw-tourism-pro'),
  //       '0.6' =>  esc_attr('0.6','vw-tourism-pro'),
  //       '0.7' =>  esc_attr('0.7','vw-tourism-pro'),
  //       '0.8' =>  esc_attr('0.8','vw-tourism-pro'),
  //       '0.9' =>  esc_attr('0.9','vw-tourism-pro'),
  //       '1' =>  esc_attr('1','vw-tourism-pro')
  //   ),
  // ));

 $wp_customize->add_setting( 'vw_tourism_pro_general_settings_scroll_top',
    array(
    'default' => '',
    'transport' => 'postMessage',
    'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
  ));
  $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_general_settings_scroll_top',
    array(
    'label' => __('Scroll Top Settings','vw-tourism-pro'),
    'section' => 'vw_tourism_pro_post_product_general_settings'
  )));

   $wp_customize->add_setting( 'vw_tourism_pro_genral_section_show_scroll_top',
   array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'vw_tourism_pro_switch_sanitization'
    ));
    $wp_customize->add_control( new vw_tourism_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_tourism_pro_genral_section_show_scroll_top',
         array(
            'label' => esc_html__( 'Show or Hide Scroll Top', 'vw-tourism-pro' ),
            'section' => 'vw_tourism_pro_post_product_general_settings'
    )));

    $wp_customize->add_setting(
      'vw_tourism_pro_genral_section_show_scroll_top_icon',
      array(
        'default'     => '',
        'sanitize_callback' => 'sanitize_text_field'
      )
    );
    $wp_customize->add_control(
      new vw_tourism_pro_Fontawesome_Icon_Chooser(
        $wp_customize,
        'vw_tourism_pro_genral_section_show_scroll_top_icon',
        array(
          'settings'    => 'vw_tourism_pro_genral_section_show_scroll_top_icon',
          'section'   => 'vw_tourism_pro_post_product_general_settings',
          'type'      => 'icon',
          'label'     => esc_html__( 'Choose Scroll Top Icon', 'vw-tourism-pro' ),
        )
      )
    );

  $wp_customize->add_setting( 'vw_tourism_pro_general_scroll_top_icon_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_general_scroll_top_icon_color', array(
    'label' => __('Scroll Top Icon Color', 'vw-tourism-pro'),
    'section' => 'vw_tourism_pro_post_product_general_settings',
    'settings' => 'vw_tourism_pro_general_scroll_top_icon_color',
  )));

  $wp_customize->add_setting( 'vw_tourism_pro_general_scroll_top_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_general_scroll_top_bgcolor', array(
    'label' => __('Scroll Top Background Color', 'vw-tourism-pro'),
    'section' => 'vw_tourism_pro_post_product_general_settings',
    'settings' => 'vw_tourism_pro_general_scroll_top_bgcolor',
  )));
  $wp_customize->add_setting( 'vw_tourism_pro_general_scroll_top_hover_bgcolor', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_general_scroll_top_hover_bgcolor', array(
    'label' => __('Scroll Top Hover Background Color', 'vw-tourism-pro'),
    'section' => 'vw_tourism_pro_post_product_general_settings',
    'settings' => 'vw_tourism_pro_general_scroll_top_hover_bgcolor',
  )));

   $wp_customize->add_setting('vw_tourism_pro_scroll_top_layout',array(
        'default' => __('Right','vw-tourism-pro'),
        'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(new vw_tourism_pro_Image_Radio_Control($wp_customize, 'vw_tourism_pro_scroll_top_layout', array(
        'type' => 'select',
        'label' => __('Scroll Top Layouts','vw-tourism-pro'),
        'section' => 'vw_tourism_pro_post_product_general_settings',
        'choices' => array(
            'Left' => get_template_directory_uri().'/assets/images/layout1.png',
            'Center' => get_template_directory_uri().'/assets/images/layout2.png',
            'Right' => get_template_directory_uri().'/assets/images/layout3.png',
    ))));

    $wp_customize->add_setting('vw_tourism_pro_scroll_border_radius',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_textarea_field',
  ));
  $wp_customize->add_control('vw_tourism_pro_scroll_border_radius',array(
      'label' => __('Scroll To Top Border Radius','vw-tourism-pro'),
      'section'   => 'vw_tourism_pro_post_product_general_settings',
      'type'      => 'number'
  ));
  $wp_customize->add_setting('vw_tourism_pro_scroll_width',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_textarea_field',
  ));
  $wp_customize->add_control('vw_tourism_pro_scroll_width',array(
      'label' => __('Scroll To Top Width','vw-tourism-pro'),
      'section'   => 'vw_tourism_pro_post_product_general_settings',
      'type'      => 'number'
  ));
  $wp_customize->add_setting('vw_tourism_pro_scroll_height',array(
      'default'   => '',
      'sanitize_callback' => 'sanitize_textarea_field',
  ));
  $wp_customize->add_control('vw_tourism_pro_scroll_height',array(
      'label' => __('Scroll To Top Height','vw-tourism-pro'),
      'section'   => 'vw_tourism_pro_post_product_general_settings',
      'type'      => 'number'
  ));
  // $wp_customize->add_setting( 'vw_tourism_pro_site_frame_settings',
  //   array(
  //   'default' => '',
  //   'transport' => 'postMessage',
  //   'sanitize_callback' => 'vw_tourism_pro_text_sanitization'
  // ));
  // $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_site_frame_settings',
  //   array(
  //   'label' => __('Site Frame Settings','vw-tourism-pro'),
  //   'section' => 'vw_tourism_pro_post_product_general_settings'
  // )));
  // $wp_customize->add_setting('vw_tourism_pro_site_frame_width',array(
  //     'default'   => '',
  //     'sanitize_callback' => 'sanitize_textarea_field',
  // ));
  // $wp_customize->add_control('vw_tourism_pro_site_frame_width',array(
  //     'label' => __('Frame Width','vw-tourism-pro'),
  //     'section'   => 'vw_tourism_pro_post_product_general_settings',
  //     'type'      => 'number'
  // ));
	//
  // $wp_customize->add_setting('vw_tourism_pro_site_frame_type',array(
  //       'default' => __('','vw-tourism-pro'),
  //       'sanitize_callback' => 'sanitize_text_field'
  // ));
  // $wp_customize->add_control('vw_tourism_pro_site_frame_type',array(
  //       'type' => 'select',
  //       'label' => __('Frame Type','vw-tourism-pro'),
  //       'section' => 'vw_tourism_pro_post_product_general_settings',
  //       'choices' => array(
  //           '' => __('','vw-tourism-pro'),
  //           'solid' => __('Solid','vw-tourism-pro'),
  //           'dashed' => __('Dashed','vw-tourism-pro'),
  //           'double' => __('Double','vw-tourism-pro'),
  //           'groove' => __('Groove','vw-tourism-pro'),
  //           'ridge' => __('Ridge','vw-tourism-pro'),
  //           'inset' => __('Inset','vw-tourism-pro')
  //       ),
  //  ) );
	//
  // $wp_customize->add_setting( 'vw_tourism_pro_site_frame_color', array(
  //     'default' => '',
  //     'sanitize_callback' => 'sanitize_hex_color'
  // ));
  // $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_tourism_pro_site_frame_color', array(
  //     'label' => __('Frame Color', 'vw-tourism-pro'),
  //     'section' => 'vw_tourism_pro_post_product_general_settings',
  //     'settings' => 'vw_tourism_pro_site_frame_color',
  // )));
  // ------------- Button Settings ----------

  //   $wp_customize->add_setting( 'vw_tourism_pro_site_button_setting',array(
  //       'default' => '',
  //       'transport' => 'postMessage',
  //       'sanitize_callback' => 'sanitize_text_field'
  //   ));
  //   $wp_customize->add_control( new VW_Themes_Seperator_custom_Control( $wp_customize, 'vw_tourism_pro_site_button_setting',
  //       array(
  //       'label' => __('Button Settings','vw-tourism-pro'),
  //       'section' => 'vw_tourism_pro_post_product_general_settings'
  //   )));
	//
  //   $wp_customize->add_setting('vw_tourism_pro_button_padding_top_bottom',array(
  //       'default'   => '',
  //       'sanitize_callback' => 'sanitize_textarea_field',
  //   ));
  //   $wp_customize->add_control('vw_tourism_pro_button_padding_top_bottom',array(
  //       'label' => __('Button Padding Top and Bottom','vw-tourism-pro'),
  //       'section'   => 'vw_tourism_pro_post_product_general_settings',
  //       'type'      => 'number'
  //   ));
	//
  //   $wp_customize->add_setting('vw_tourism_pro_button_padding_left_right',array(
  //       'default'   => '',
  //       'sanitize_callback' => 'sanitize_textarea_field',
  //   ));
  //   $wp_customize->add_control('vw_tourism_pro_button_padding_left_right',array(
  //       'label' => __('Button Padding Left and Right','vw-tourism-pro'),
  //       'section'   => 'vw_tourism_pro_post_product_general_settings',
  //       'type'      => 'number'
  //   ));
	//
  //   $wp_customize->add_setting('vw_tourism_pro_button_border_radius',array(
  //       'default'   => '',
  //       'sanitize_callback' => 'sanitize_textarea_field',
  //   ));
  //   $wp_customize->add_control('vw_tourism_pro_button_border_radius',array(
  //       'label' => __('Button Border Radius','vw-tourism-pro'),
  //       'section'   => 'vw_tourism_pro_post_product_general_settings',
  //       'type'      => 'number'
  //   ));
	//
  //   $wp_customize->add_setting( 'vw_tourism_pro_site_breadcrumb_enable',
  //  array(
  //     'default' => '',
  //     'transport' => 'refresh',
  //     'sanitize_callback' => 'vw_tourism_pro_switch_sanitization'
  // ));
  // $wp_customize->add_control( new vw_tourism_pro_Toggle_Switch_Custom_control( $wp_customize, 'vw_tourism_pro_site_breadcrumb_enable',
  //    array(
  //       'label' => esc_html__( 'Breadcrumb Enable/Disable', 'vw-tourism-pro' ),
  //       'section' => 'vw_tourism_pro_post_product_general_settings'
  // )));



 //    //Responsive Media Settings
 //  $wp_customize->add_section('vw_tourism_pro_responsive_media',array(
 //    'title' => __('Responsive Media','vw-tourism-pro'),
 //    'panel' => 'vw_tourism_pro_panel_id',
 //  ));
 //
 //    $wp_customize->add_setting( 'vw_tourism_pro_resp_slider_hide_show',array(
 //          'default' => 1,
 //          'transport' => 'refresh',
 //          'sanitize_callback' => 'vw_tourism_pro_switch_sanitization'
 //    ));
 //    $wp_customize->add_control( new vw_tourism_pro_Toggle_Switch_Custom_Control( $wp_customize, 'vw_tourism_pro_resp_slider_hide_show',array(
 //          'label' => esc_html__( 'Show / Hide Slider','vw-tourism-pro' ),
 //          'section' => 'vw_tourism_pro_responsive_media'
 //    )));
 //
 //  $wp_customize->add_setting( 'vw_tourism_pro_metabox_hide_show',array(
 //          'default' => 1,
 //          'transport' => 'refresh',
 //          'sanitize_callback' => 'vw_tourism_pro_switch_sanitization'
 //    ));
 //    $wp_customize->add_control( new vw_tourism_pro_Toggle_Switch_Custom_Control( $wp_customize, 'vw_tourism_pro_metabox_hide_show',array(
 //          'label' => esc_html__( 'Show / Hide Metabox','vw-tourism-pro' ),
 //          'section' => 'vw_tourism_pro_responsive_media'
 //    )));
 //
 //    $wp_customize->add_setting( 'vw_tourism_pro_sidebar_hide_show',array(
 //          'default' => 1,
 //          'transport' => 'refresh',
 //          'sanitize_callback' => 'vw_tourism_pro_switch_sanitization'
 //    ));
 //    $wp_customize->add_control( new vw_tourism_pro_Toggle_Switch_Custom_Control( $wp_customize, 'vw_tourism_pro_sidebar_hide_show',array(
 //          'label' => esc_html__( 'Show / Hide Sidebar','vw-tourism-pro' ),
 //          'section' => 'vw_tourism_pro_responsive_media'
 //    )));
 //
 //    $wp_customize->add_setting('vw_tourism_pro_site_menu_width',array(
 //        'default'   => '250',
 //        'sanitize_callback' => 'sanitize_text_field',
 //    ));
 //    $wp_customize->add_control('vw_tourism_pro_site_menu_width',array(
 //        'label' => __('Responsive Menu Width','vw-tourism-pro'),
 //        'section'   => 'vw_tourism_pro_responsive_media',
 //        'type'      => 'number'
 //    ));
 //    $wp_customize->add_setting(
 //      'vw_tourism_pro_res_open_menu_icon',
 //      array(
 //        'default'     => '',
 //        'sanitize_callback' => 'sanitize_text_field'
 //      )
 //    );
 //    $wp_customize->add_control(
 //      new vw_tourism_pro_Fontawesome_Icon_Chooser(
 //        $wp_customize,
 //        'vw_tourism_pro_res_open_menu_icon',
 //        array(
 //          'settings'    => 'vw_tourism_pro_res_open_menu_icon',
 //          'section'   => 'vw_tourism_pro_responsive_media',
 //          'type'      => 'icon',
 //          'label'     => esc_html__( 'Choose Open Menu Icon', 'vw-tourism-pro' ),
 //        )
 //      )
 //    );
 //
 //    $wp_customize->add_setting(
 //      'vw_tourism_pro_res_close_menu_icon',
 //      array(
 //        'default'     => '',
 //        'sanitize_callback' => 'sanitize_text_field'
 //      )
 //    );
 //    $wp_customize->add_control(
 //      new vw_tourism_pro_Fontawesome_Icon_Chooser(
 //        $wp_customize,
 //        'vw_tourism_pro_res_close_menus_icon',
 //        array(
 //          'settings'    => 'vw_tourism_pro_res_close_menu_icon',
 //          'section'   => 'vw_tourism_pro_responsive_media',
 //          'type'      => 'icon',
 //          'label'     => esc_html__( 'Choose Close Icon', 'vw-tourism-pro' ),
 //        )
 //      )
 //    );

//------------------------------- Registration Form -----------------------------

$wp_customize->add_section('vw_tourism_pro_registration_section', array(
    'title'       => __('Registration Form Section', 'vw-tourism-pro'),
    'description' => __('Add Registration Form settings here.', 'vw-tourism-pro'),
    'panel'       => 'vw_tourism_pro_panel_id',
));

// セクションの有効/無効設定
$wp_customize->add_setting('vw_tourism_pro_registration_enabledisable', array(
    'default'           => 'Enable',
    'sanitize_callback' => 'vw_tourism_pro_sanitize_choices',
));
$wp_customize->add_control('vw_tourism_pro_registration_enabledisable', array(
    'type'    => 'radio',
    'label'   => __('Do you want this section', 'vw-tourism-pro'),
    'section' => 'vw_tourism_pro_registration_section',
    'choices' => array(
        'Enable'  => __('Enable', 'vw-tourism-pro'),
        'Disable' => __('Disable', 'vw-tourism-pro'),
    ),
));

// 見出し設定
$wp_customize->add_setting('vw_tourism_pro_registration_heading', array(
    'default'           => 'Tour Reservation Form',
    'sanitize_callback' => 'sanitize_text_field',
));
$wp_customize->add_control('vw_tourism_pro_registration_heading', array(
    'label'    => __('Form Heading', 'vw-tourism-pro'),
    'section'  => 'vw_tourism_pro_registration_section',
    'type'     => 'text',
));

// 説明文設定
$wp_customize->add_setting('vw_tourism_pro_registration_para', array(
    'default'           => "Let's know what you are interested to see!",
    'sanitize_callback' => 'sanitize_textarea_field',
));
$wp_customize->add_control('vw_tourism_pro_registration_para', array(
    'label'    => __('Form Description', 'vw-tourism-pro'),
    'section'  => 'vw_tourism_pro_registration_section',
    'type'     => 'textarea',
));

// ショートコード設定
$wp_customize->add_setting('vw_tourism_pro_registration_form_shortcode', array(
    'default'           => '[contact-form-7 id="123" title="Registration Form"]',
    'sanitize_callback' => 'sanitize_text_field',
));
$wp_customize->add_control('vw_tourism_pro_registration_form_shortcode', array(
    'label'    => __('Form Shortcode', 'vw-tourism-pro'),
    'section'  => 'vw_tourism_pro_registration_section',
    'type'     => 'text',
));

?>
