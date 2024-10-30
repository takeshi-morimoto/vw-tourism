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
get_header(); ?>
<div class="container">
	<div class="middle-align">
		<div class="row">
			<div class="col-md-9">
				<?php the_archive_title( '<h1>', '</h1>' ); ?>
				<div class="row">
					<?php if ( have_posts() ) : ?>
		                <?php while ( have_posts() ) : the_post();
							get_template_part( 'template-parts/post/post-content' );
						endwhile; ?>
			            <div class="navigation">
							<?php // Previous/next page navigation.
					            the_posts_pagination( array(
					                'prev_text'  => __( 'Previous page', 'vw-tourism-pro' ),
					                'next_text'  => __( 'Next page', 'vw-tourism-pro' ),
					                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-tourism-pro' ) . ' </span>',
					            ));
							?>
						</div>
					<?php else : ?>
						<?php get_template_part( 'no-results', 'archive' ); ?>
					<?php endif; ?>
				</div>
	        </div>
		   	<div class="col-md-3">
				<?php get_sidebar( 'page' ); ?>
			</div>
	        <div class="clearfix"></div>
	    </div>
	</div>
</div>
<?php get_footer(); ?>