<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package vw-tourism-pro
 */
get_header();
  $background_img = get_theme_mod('vw_tourism_pro_inner_page_banner_bgimage');
?>
<div class="title-box text-center banner-img" style="background-image:url(<?php echo esc_url( $background_img); ?>)">
  <div class="banner-page-text">
  <div class="above_title ">
      <h1><?php the_title();?></h1>
      <?php if ( get_theme_mod('vw_tourism_pro_site_breadcrumb_enable', true) != '' ) { ?>
            <div class=" bradcrumbs py-3 b1">
              <?php vw_tourism_pro_the_breadcrumb(); ?>
            </div>
        <?php }
        ?>
    </div>
  </div>
</div>
<div class="container">
	<div class="middle-align">
		<div class="row">
			<div class="col-md-8">
				<div class="row">
					<?php if ( have_posts() ) : ?>
						<header class="page-header">
							<?php the_archive_title( '<h1 class="page-title">', '</h1>' );
							the_archive_description( '<div class="taxonomy-description">', '</div>' );?>
						</header>
						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post();
							get_template_part( 'template-parts/post/post-content' );
						endwhile;
						// Previous/next page navigation.
						the_posts_pagination( array(
							'prev_text'          => __( 'Previous page', 'vw-tourism-pro' ),
							'next_text'          => __( 'Next page', 'vw-tourism-pro' ),
							'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-tourism-pro' ) . ' </span>',
						));
					else :
						get_template_part( 'no-results', 'archive' ); ?>
					<?php endif; ?>
				</div>
			</div>
			<!-- <div class="col-md-4">
				<?php get_sidebar( 'page' ); ?>
			</div> -->
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
