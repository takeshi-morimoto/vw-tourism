<?php
/**
 * The Template for displaying all single posts.
 *
 * @package vw-tourism-pro
 */
	get_header();
get_template_part( 'template-parts/banner' );

$terms = get_the_terms( get_the_ID(), 'category' );
	$posts_category_var = array();
	foreach ( $terms as $term ) {
	$posts_category_var[] = $term->name;
	}
	$posts_category_name = join( ", ", $posts_category_var );

	$current_user = wp_get_current_user();
?>
<section id="single-blog" class="pb-0">
<div class="container">
		<div class="row">
				<div class="col-lg-8">
					<?php while ( have_posts() ) : the_post();
				    $post_repeater_fields = get_post_meta( get_the_ID() , 'post_repeater_fields', true);
					?>
					<div class="post-main-box d-flex flex-column gap-3">

					<?php if ( has_post_thumbnail() ) { ?>
					<div class="single-image">
						<img style="border-radius: 20px;" src="<?php the_post_thumbnail_url( 'full' ); ?>">
					</div>
				<?php } ?>
				<div class="post-meta">
							<div class="d-flex justify-content-between align-items-center post-meta-inner">
								<div class="single-post-author">
									<?php if ( get_theme_mod('vw_tourism_pro_post_general_settings_post_author',true) == "1" ) { ?>
										<div class="entry-autho gap-2 d-flex align-items-center justify-content-lg-start justify-content-md-start justify-content-center ">
												<img class="single-author-image" src="<?php echo esc_url( get_avatar_url( $current_user->ID ) ); ?>">
												<p class="author-name mb-0 ">
														<?php the_author(); ?>
												</p>
										</div>
										<?php } ?>
								</div>
								<div class="single-post-date">
									<?php if ( get_theme_mod('vw_tourism_pro_post_general_settings_post_date',true) == "1" ) { ?>
											<div class="entry-date meta-heading">
											<i class="fas fa-calendar-alt pe-1"></i><?php echo get_the_date( 'j M, Y'); ?>
											</div>
										<?php } ?>
								</div>
								<div class="single-post-category">
									<?php if ( get_theme_mod('vw_tourism_pro_post_general_settings_category_setting',true) == "1" ) { ?>
												 <p class="mb-0 meta-heading">
															 <span >
																	 <i class="fa-solid fa-tag pe-1"></i><?php echo $posts_category_name; ?>
															 </span>
												 </p>
										 <?php } ?>
								</div>
								<div class="single-post-comment">
									<?php if ( get_theme_mod('vw_tourism_pro_post_general_settings_post_comments',true) == "1" ) { ?>
											<div class="entry-comments">
												<a href="#comments">
														<i class="fa-solid fa-comments pe-1"></i>
													<a href="#comments" class="meta-heading">
													<?php
													$get_comments_number = get_comments_number(get_the_ID()) != 0 ? get_comments_number(get_the_ID()) : 0;
														echo $get_comments_number . ' Comments'; ?>
												</a>
												</a>
											</div>
										<?php } ?>
								</div>
								<div class="single-post-icons">
									<?php if ( get_theme_mod('vw_tourism_pro_post_general_settings_post_share',true) ) {
										if ( function_exists('vw_tourism_pro_social_share') ) {
											vw_tourism_pro_social_share();
										}
									} ?>
								</div>
							</div>
						</div>
					<h2><?php echo get_the_title(); ?></h2>
					<div class="post-para"><?php the_content(); ?></div>

							<div class="post-content-inner">
								<h4 class="">	<?php echo esc_html(get_post_meta($post->ID,'post-ques',true)); ?></h4>
								<p class="post-para"><?php echo esc_html(get_post_meta($post->ID,'post-para-one',true)); ?></p>
							</div>
				<div class="">
					<?php
						if (is_array($post_repeater_fields)) {
							foreach ($post_repeater_fields as $key => $post_field) {
								$field = $post_field['points']; ?>
									<div class=" mb-md-3 mb-2">

										<p class="mb-0 text-lg-start text-md-start text-sm-center text-center post-para"><i class="fa-solid fa-chevron-right pe-2"></i><?php echo $field; ?></p>
									</div>
							<?php }
						}
				 ?>
				</div>

									</div>
				<?php endwhile; // end of the loop. ?>


			</div>
			<div class="col-lg-4" id="single-blog-sidebar">
					<?php if ( get_theme_mod('vw_tourism_pro_post_general_settings_post_sidebar',true) ) {
						 dynamic_sidebar('single-blog-sidebar');
					 }?>
			</div>
			<div class="single-post-comment">
					<?php
						if ( comments_open() || '0' != get_comments_number() ) {
						comments_template();
						}
					?>
			</div>
		</div>
</div>
</section>





<?php get_footer();
