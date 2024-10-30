<?php
$address_section = get_theme_mod( 'vw_tourism_pro_radiolast_enable' );
if ( 'Disable' == $address_section ) {
	return;
}

if( get_theme_mod('vw_tourism_pro_section_footer_bgcolor','') ) {
 $footer_backg = 'background-color:'.esc_attr(get_theme_mod('vw_tourism_pro_section_footer_bgcolor','')).';';
}elseif( get_theme_mod('vw_tourism_pro_footer_bgimage','') ){
 $footer_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_tourism_pro_footer_bgimage')).'\')';
}else{
 $footer_backg='';
}
$img_bg =get_theme_mod('vw_tourism_pro_section_footer_bg_attachment');
?>
<?php if (get_theme_mod('vw_tourism_pro_custom_footer_widget_section', 'true') !='') { ?>
<!-- <section id="footer" class="pb-0"> -->
	<div id="footer-inner" style="<?php echo esc_attr( $footer_backg ); ?>" class="<?php echo esc_attr($img_bg); ?>">
		<div class="container footer-cols">
			<?php
				$count = 0;
				if ( is_active_sidebar('footer-1') != '' ) {
					$count++;
				}
				if ( is_active_sidebar('footer-2') != '' ) {
					$count++;
				}
				if ( is_active_sidebar('footer-3') != '' ) {
					$count++;
				}
				if ( is_active_sidebar('footer-4') != '' ) {
					$count++;
				}

				if ( $count == 1 ) {
					$colmd = 'col-lg-12 col-sm-6';
				} elseif ( $count == 2 ) {
					$colmd = 'col-lg-6 col-sm-6';
				} elseif ( $count == 3 ){
					$collg = 'col-lg-4 col-md-4 col-sm-12 pb-sm-3 pb-4';
					$colmd = 'col-lg-4 col-md-4 col-sm-6 pb-sm-3 pb-4';
				} else {
					$collg = 'col-lg-4 col-sm-12';
					$colmd = 'col-lg-4 col-sm-6';
				}
			?>
			<div class="row">
				<div class="col-lg-4 col-md-12">
						<?php get_template_part( 'template-parts/footer/footer-contact' ); ?>
				</div>
				<div class="col-lg-8 col-md-12	">
					<div class="row footer-col-div py-xl-5 py-lg-3">
						<div class="<?php if ( is_active_sidebar('footer-1') == '' ) { echo 'footer_hide'; } else { echo esc_html( $collg ); } ?> text-md-start text-sm-center text-center">
							<?php dynamic_sidebar( 'footer-1' ); ?>
						</div>
						<div class="<?php if ( is_active_sidebar('footer-2') == '' ) { echo 'footer_hide'; } else { echo esc_html( $colmd ); } ?> text-md-start text-sm-center text-center">
							<?php dynamic_sidebar( 'footer-2' ); ?>
						</div>
						<div class="<?php if ( is_active_sidebar('footer-3') == '' ) { echo 'footer_hide'; } else { echo esc_html( $colmd ); } ?> text-md-start text-sm-center text-center">
							<?php dynamic_sidebar( 'footer-3' ); ?>
					</div>
				</div>
			</div>
		</div>
	<?php get_template_part( 'template-parts/footer/copyright' ); ?>
	</div>
</div>
<!-- </section> -->
<?php } ?>
