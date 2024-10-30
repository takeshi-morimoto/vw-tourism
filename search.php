<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package vw-tourism-pro
 */
get_header();

$background_img = get_theme_mod('vw_tourism_pro_inner_page_banner_bgimage');
?>
<div class="title-box" style="background-image:url(<?php echo esc_url( $background_img); ?>)">
 <div class="container">
		 <div class="row justify-content-center text-center">
			 <div class="col-lg-12">
				 <div class="banner-text">
						 <h1>Search Results</h1>
						 <?php if ( get_theme_mod('vw_tourism_pro_site_breadcrumb_enable', true) != '' ) { ?>
									 <div class=" bradcrumbs">Home / Results</div>
							 <?php }
							 ?>
				 </div>
			 </div>

		 </div>
 </div>
</div>
<section>
	<div class="container">
		<div class="middle-align">
			<div class="row">
						<h1 class="entry-title mb-3"><?php printf( __( 'Results For: %s', 'vw-tourism-pro' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				<div class="col-lg-9 col-sm-6 col-md-8">
					<div class="row">
						<?php if ( have_posts() ) : ?>
							<?php while ( have_posts() ) : the_post();
								get_template_part( 'template-parts/post/post-content' );
							endwhile; ?>
							<div class="navigation">
								<?php // Previous/next page navigation.
								  the_posts_pagination( array(
									  'prev_text'          => __( 'Previous page', 'vw-tourism-pro' ),
									  'next_text'          => __( 'Next page', 'vw-tourism-pro' ),
									  'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-tourism-pro' ) . ' </span>',
								  )); ?>
							</div>
						<?php else : ?>
							<?php get_template_part( 'no-results', 'search' ); ?>
						<?php endif; ?>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6">
					<?php get_sidebar('page'); ?>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
