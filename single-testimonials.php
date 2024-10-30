<?php
/**
 * The Template for displaying all single team.
 *
 * @package vw-tourism-pro
 */
get_header();
	// get_template_part( 'template-parts/banner' );
  $background_img = get_theme_mod('vw_tourism_pro_inner_page_banner_bgimage');
?>
<?php do_action('vw_tourism_pro_before_contact_title'); ?>
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
<div class="container single-testimonial-parent-div py-5">
    <div class="row">
        <div id="testimonial_single" class="col-md-9">
            <?php while ( have_posts() ) : the_post(); ?>
                <?php if ( has_post_thumbnail() ) { ?>
                    <div class="team_feature-box mb-2">
                        <img src="<?php the_post_thumbnail_url( 'full' ); ?>">
                    </div>
                <?php } ?>
                <div class="mb-2 testimonial_desi">
                   <?php echo esc_html(get_post_meta($post->ID,'meta_testimonial_designation',true)); ?>
                </div>
                <div class="testimonial_des">
                  <?php the_content();?>
                </div>

                <div class="clearfix"></div>
            <?php endwhile; // end of the loop. ?>

            <div class="post_pagination mt-4">
                <?php the_post_navigation( array(
                    'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'vw-tourism-pro' ) . '</span> ' .
                        '<span class="screen-reader-text">' . __( 'Next post:', 'vw-tourism-pro' ) . '</span> ' .
                        '<span class="post-title">%title</span>',
                    'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'vw-tourism-pro' ) . '</span> ' .
                        '<span class="screen-reader-text">' . __( 'Previous post:', 'vw-tourism-pro' ) . '</span> ' .
                        '<span class="post-title">%title</span>',
                ) );?>
            </div>
        </div>
        <div class="col-md-3" id="sidebar">
            <?php dynamic_sidebar('sidebar-1'); ?>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<?php get_footer(); ?>
