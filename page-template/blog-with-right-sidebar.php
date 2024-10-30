<?php
/**
 * Template Name:Blog with Right Sidebar
 */

get_header();

get_template_part('template-parts/banner'); ?>

<?php do_action('vw_tourism_pro_before_blog'); ?>

<section id="blog-right-sidebar">
	<div class="container">
	    <div class="middle-align">
		    <div class="row">
				<div class="col-lg-8 col-md-8 content_page">
					<div class="row">
						<?php if ( have_posts() ) : ?>
					      	<?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
								$args = array(
								   'paged' => $paged,
								   'category_name' => get_theme_mod('vw_tourism_pro_category_setting'),
									 'posts_per_page' => 6
								);
							$custom_query = new WP_Query( $args );
							while($custom_query->have_posts()) :
							   $custom_query->the_post();?>
								 <div class="blog-main col-lg-6">
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
														<i class="fa-solid fa-tag pe-1 "></i> <a href="<?php echo $category_link; ?>"><?php echo wp_get_post_terms(get_the_ID(), 'category')[0]->name;  ?></a>
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
												<?php the_content(); ?>
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
						<?php 	endwhile; // end of the loop.
							wp_reset_postdata(); ?>
						<?php else : ?>
							<h2><?php _e('Not Found','vw-tourism-pro'); ?></h2>
						<?php endif; ?>
					</div>
					<div class="navigation">
		              	<?php
							$big = 999999999;
							echo paginate_links( array(
								'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
								'format' => 'paged=%#%',
								'current' =>  (get_query_var('paged') ? get_query_var('paged') : 1),
								'total' => $custom_query->max_num_pages,
								'prev_text'          => __( '<i class="fas fa-chevron-left"></i>', 'pest-control-treatment-pro' ),
									'next_text'          => __( '<i class="fas fa-chevron-right"></i>', 'pest-control-treatment-pro' ),
							) );
						?>
		            </div>
				</div>
				<div class="col-lg-4 col-md-4" id="sidebar">
					<?php dynamic_sidebar('sidebar-1'); ?>
				</div>
		        <div class="clearfix"></div>
		    </div>
	    </div>
	</div>
</section>

<?php do_action('vw_tourism_pro_after_blog'); ?>

<?php get_footer(); ?>
