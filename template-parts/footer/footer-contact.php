<?php
	$footer_con_section = get_theme_mod( 'vw_tourism_pro_footer_contact_enable' );
	if ( 'Disable' == $footer_con_section ) {
		return;
	}
	// $img_bg = get_theme_mod('vw_tourism_pro_custom_footer_image_bg');
	if( get_theme_mod('vw_tourism_pro_custom_footer_section_bgcolor') ) {
	  $footer_con_backg = 'background-color:'.esc_attr(get_theme_mod('vw_tourism_pro_custom_footer_section_bgcolor')).'!important;';
	}elseif( get_theme_mod('vw_tourism_pro_custom_footer_section_bgimage') ){
	  $footer_con_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_tourism_pro_custom_footer_section_bgimage')).'\')';
	}else{
	  $footer_con_backg = '';
	}
	set_theme_mod('vw_tourism_pro_newsletter_form_img',get_template_directory_uri().'/assets/images/footer-news.png' );
?>

	<div class="footer-contact-inner">
		    <img src="<?php echo esc_html(get_theme_mod('vw_tourism_pro_newsletter_form_img')); ?>" alt="">
		<?php if(get_theme_mod('vw_tourism_pro_newsletter_form_title') != ''){ ?>
			<h3 class=""><?php echo esc_html(get_theme_mod('vw_tourism_pro_newsletter_form_title')); ?></h3>
		<?php } ?>
		<?php if(get_theme_mod('vw_tourism_pro_newsletter_form_sub_title') != ''){ ?>
			<p class=""><?php echo esc_html(get_theme_mod('vw_tourism_pro_newsletter_form_sub_title')); ?></p>
		<?php } ?>
		<div class="Newsletter-inner">
			<?php echo do_shortcode(get_theme_mod('vw_tourism_pro_newsletter_shortcode')); ?>
		</div>
	</div>
