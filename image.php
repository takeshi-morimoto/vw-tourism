<?php
/**
 * The template for displaying image attachments.
 *
 * @package vw-tourism-pro
 */
get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-md-9 content_page">
			<div class="site-main" id="sitemain">
				<?php while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="entry-header">
							<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
							<div class="entry-meta">
								<?php
									$metadata = wp_get_attachment_metadata();
									printf('Published <span class="entry-date"><time class="entry-date" datetime="%1$s">%2$s</time></span> at <a href="%3$s">%4$s &times; %5$s</a> in <a href="%6$s" rel="gallery">%7$s</a>',
										esc_attr( get_the_date( 'c' ) ),
										esc_html( get_the_date() ),
										esc_url( wp_get_attachment_url() ),
										$metadata['width'],
										$metadata['height'],
										esc_url( get_permalink( $post->post_parent ) ),
										esc_html( get_the_title( $post->post_parent ) )
									);
									edit_post_link( __( 'Edit', 'vw-tourism-pro' ), '<span class="edit-link">', '</span>' );
								?>
							</div>
							<nav role="navigation" id="image-navigation" class="image-navigation">
								<div class="nav-previous"><?php previous_image_link( false, __( '<span class="meta-nav">&larr;</span> Previous', 'vw-tourism-pro' ) ); ?></div>
								<div class="nav-next"><?php next_image_link( false, __( 'Next <span class="meta-nav">&rarr;</span>', 'vw-tourism-pro' ) ); ?></div>
							</nav>
						</header>
						<div class="entry-content">
							<div class="entry-attachment">
								<div class="attachment">
									<?php vw_tourism_pro_the_attached_image(); ?>
								</div>
								<?php if ( has_excerpt() ) : ?>
									<div class="entry-caption">
										<?php the_excerpt(); ?>
									</div>
								<?php endif; ?>
							</div>
							<?php
								the_content();
								wp_link_pages( array(
									'before' => '<div class="page-links">' . __( 'Pages:', 'vw-tourism-pro' ),
									'after'  => '</div>',
								) );
							?>
						</div>
						<?php edit_post_link( __( 'Edit', 'vw-tourism-pro' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
					</article>
					<?php
						// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) {
						comments_template(); }
					?>
				<?php endwhile; // end of the loop. ?>
			</div>
		</div>
		<div id="sidebar" class="col-md-3">
			<?php get_sidebar();?>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<?php get_footer(); ?>
