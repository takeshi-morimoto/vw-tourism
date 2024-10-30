<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package vw-tourism-pro
 */
	get_header();
	get_template_part( 'template-parts/banner' );

	if( get_theme_mod('vw_tourism_pro_404_page_bgcolor','') ) {
	 $error_page_back = 'background-color:'.esc_attr(get_theme_mod('vw_tourism_pro_404_page_bgcolor','')).';';
  }elseif( get_theme_mod('vw_tourism_pro_404_page_bgimage','') ){
	 $error_page_back = 'background-image:url(\''.esc_url(get_theme_mod('vw_tourism_pro_404_page_bgimage')).'\')';
	}else{
	 $error_page_back='';
	}
	$img_bg = get_theme_mod('vw_tourism_pro_404_page_bg_attachment');
?>
<section  class="content_page error-page <?php echo esc_attr($img_bg); ?>" style="<?php echo esc_attr($error_page_back);?>">
	<div class="container">
		<div class="row text-center justify-content-center">
			<div class="col-lg-4">
				<div class="page-content error_bgs d-flex flex-column gap-3">
					<img class="errorimg" src="<?php echo esc_html(get_theme_mod('vw_tourism_pro_error_temp_bg_image')); ?>">
							<?php if ( get_theme_mod('vw_tourism_pro_404_page_heading') != ''): ?>
								<h2 class="error-heading">
									<?php echo esc_html(get_theme_mod('vw_tourism_pro_404_page_heading')); ?>
								</h2>
							<?php endif; ?>
							<?php if ( get_theme_mod('vw_tourism_pro_404_page_content') != ''): ?>
								<p class="error-para mb-0">
									<?php echo esc_html(get_theme_mod('vw_tourism_pro_404_page_content')); ?>
								</p>
							<?php endif; ?>
							<a class="theme-btn-main" style="margin:0 auto;" href="<?php echo esc_url( home_url() ); ?>">
								<div class="theme-btn-block">
										<span class="theme-btn-line-left"></span>
													<span class="theme-btn-text"><?php echo esc_html(get_theme_mod('vw_tourism_pro_404_page_button_text'));?></span>
										 <span class="theme-btn-line-right"></span>
										<i class="fa-solid fa-caret-down"></i>
									</div>
							</a>

			 </div>
			</div>

			</div>
		</div>
</section>
<?php get_footer(); ?>
