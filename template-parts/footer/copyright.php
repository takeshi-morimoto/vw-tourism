<?php

if ( get_theme_mod( 'vw_tourism_pro_footer_copyright_section_bgcolor' ) ) {
	$section_backg = 'background-color:' . esc_attr( get_theme_mod( 'vw_tourism_pro_footer_copyright_section_bgcolor' ) ) . ';';
} elseif ( get_theme_mod( 'vw_tourism_pro_footer_copyright_section_bgimage' ) ) {
	$section_backg = 'background-image:url(\'' . esc_url( get_theme_mod( 'vw_tourism_pro_footer_copyright_section_bgimage' ) ) . '\')';
} else {
	$section_backg = '';
}
$img_bg = get_theme_mod('vw_tourism_pro_footer_copyright_image_bg');
?>

<hr style="    background-color: #fff;
    opacity: 1;">

		<div class="row pb-2">
			<div class="col-lg-8">
				<div class="copyright ">
						<p class="copyright-text text-md-start"><?php echo get_theme_mod( 'vw_tourism_pro_footer_copy'); ?>
						<?php if( get_theme_mod( 'vw_tourism_pro_hide_show_credit_link',true) != '') { ?>
							<span class="credit_link"><?php echo esc_html( vw_tourism_pro_credit_link() ); ?></span></p>
						<?php } ?>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="d-flex news-menu justify-content-md-end gap-4">
					<a class="position-relative" href="<?php echo esc_html(get_theme_mod('vw_tourism_pro_footer_support_url'));?>"><?php echo get_theme_mod( 'vw_tourism_pro_footer_support_text'); ?></a>
					<a class="position-relative" href="<?php echo esc_html(get_theme_mod('vw_tourism_pro_footer_privacy_url'));?>"><?php echo get_theme_mod( 'vw_tourism_pro_footer_privacy_text'); ?></a>
					<a class="position-relative" href="<?php echo esc_html(get_theme_mod('vw_tourism_pro_footer_terms_condition_url'));?>"><?php echo get_theme_mod( 'vw_tourism_pro_footer_term_conditon_text'); ?></a>
				</div>

			</div>
		</div>
		<?php if ( get_theme_mod('vw_tourism_pro_genral_section_show_scroll_top',true) == "1" ) { ?>
			<a href="javascript:" id="return-to-top"><i class="<?php echo esc_html(get_theme_mod('vw_tourism_pro_genral_section_show_scroll_top_icon')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Return To Top Button','vw-tourism-pro')?></span></a>
		<?php }?>
