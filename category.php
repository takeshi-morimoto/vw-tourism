<?php
/**
 * The template for displaying all category pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
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
							<h1><?php single_term_title();?></h1>
							<?php if ( get_theme_mod('vw_tourism_pro_site_breadcrumb_enable', true) != '' ) { ?>
										<div class=" bradcrumbs">
											<?php vw_tourism_pro_the_breadcrumb(); ?>
										</div>
								<?php }
								?>
					</div>
				</div>

			</div>
	</div>

</div>
<section>
  <div class="container">
      <div class="row">
  		<div class="col-md-12">
  				<?php if ( have_posts() ) : ?>
  	                <?php while ( have_posts() ) : the_post();?>
                      <div class="col-lg-4 mb-4">
                      <div class="blog-main">
                        <div class="vertical-blog-img-main mb-3">
                          <div class="blog-img">
                            <?php if (has_post_thumbnail()){ ?>
                              <?php the_post_thumbnail(); ?>
                            <?php } ?>
                          </div>
                          <div class="collectionbox-text pt-2 d-flex flex-column gap-2">
                            <div class="d-lg-flex d-md-grid d-sm-grid d-grid justify-content-between side-blog-meta">
                                <div class="post-month blog-inner-meta d-flex "><i class="fas fa-calendar-alt pe-1"></i><?php echo get_the_date( 'j M, Y'); ?></div>
                                <div class="blog-inner-meta d-flex">
                                  <i class="fa-solid fa-tag pe-1 "></i> <a href="<?php echo $category_link; ?>"><?php echo is_array(wp_get_post_terms(get_the_ID(), 'category')) && !empty(wp_get_post_terms(get_the_ID(), 'category')) ? wp_get_post_terms(get_the_ID(), 'category')[0]->name : '';  ?></a>
                                </div>
                                 <div class="news-author blog-inner-meta d-flex">
                                     <i class="fa-solid fa-user pe-1"></i>
                                   <?php the_author(); ?>
                               </div>
                                <div class="post-comments  blog-inner-meta d-flex">
                                <i class="fa-solid fa-comments pe-1"></i>
                                  <?php $get_comments_number = get_comments_number(get_the_ID()) != 0 ? get_comments_number(get_the_ID()) : 0;
                                  echo $get_comments_number . ' Comments'; ?>
                                </div>
                              </div>
                            <div class="blog-title">
                                <h3 style="line-height:0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            </div>
                            <div class="blog-content">
                              <?php the_excerpt(); ?>
                            </div>
                            <a class="theme-btn-main" href="<?php the_permalink(); ?>">
                              <div class="theme-btn-block">
                                  <span class="theme-btn-line-left"></span>
                                        <span class="theme-btn-text"><?php echo esc_html(get_theme_mod('vw_tourism_pro_blog_viewmore_text'));?></span>
                                   <span class="theme-btn-line-right"></span>
                                  <i class="fa-solid fa-caret-down"></i>
                                </div>
                            </a>

                          </div>
                        </div>
                      </div>
                      </div>
  					<?php endwhile; ?>
  	            <?php else : ?>
  	                <?php get_template_part( 'no-results', 'archive' ); ?>
  	            <?php endif; ?>
  	            <div class="navigation">
  					<?php // Previous/next page navigation.
  			            the_posts_pagination( array(
  			                'prev_text'  => __( 'Previous page', 'vw-tourism-pro' ),
  			                'next_text'  => __( 'Next page', 'vw-tourism-pro' ),
  			                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-tourism-pro' ) . ' </span>',
  			            ));
  					?>
  				</div>
          </div>
  </div>
</section>

<?php get_footer(); ?>
