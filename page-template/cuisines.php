<?php
/**
 * Template Name: Cuisines
*/
get_header();
get_template_part( 'template-parts/banner' );

$args = array(
  'post_type' => 'popular-cuisines',
  'post_status' => 'publish',
  'posts_per_page'=>-1,
      // 'order' => 'ASC',
);
$new = new WP_Query($args);


?>
<section id="cuisines-page" class="pb-0">
    <div class="container">
        <div class=" cuisines-grid-main d-md-grid d-sm-grid d-block">
          <?php
          while ( $new->have_posts() ){ $new->the_post();
              $post_id = $post->ID;
            $cuisines_price   = get_post_meta( $post_id, 'cuisines_price', true);
            $cuisines_sale_price   = get_post_meta( $post_id, 'cuisines_sale_price', true);
            $cuisines_price = $cuisines_price != '' ? $cuisines_price : 0;
            $cuisines_sale_price = $cuisines_sale_price != '' ? $cuisines_sale_price : 0;

            $round_regular = $cuisines_price != 0 ? get_theme_mod('vw_tourism_pro_popular__cuisines_currency') . number_format((float)$cuisines_price, 2, '.', '') : '';
            $round_sale = $cuisines_sale_price != 0 ? get_theme_mod('vw_tourism_pro_popular__cuisines_currency') . number_format((float)$cuisines_sale_price, 2, '.', '') : '';
             ?>
            <div class="cuisines-inner position-relative">
              <?php if (has_post_thumbnail()){ ?>
                <img src="<?php the_post_thumbnail_url(); ?>">
              <?php } ?>
              <div class="cusines-content position-absolute bottom-0 d-flex flex-column gap-2" >
                <h4><?php the_title(); ?></h4>
                <p class="mb-0"><i class="fa-solid fa-location-dot pe-2"></i><?php echo esc_html(get_post_meta($post->ID,'cuisines_location',true)); ?></p>
                <div class="d-flex gap-2 align-items-center justify-content-md-start justify-content-sm-center justify-content-center">
                  <span class="c-price"><?php echo  esc_html($round_sale); ?></span>
                  <span class="c-sale-price "><?php echo  esc_html($round_regular); ?></span>
                </div>
              </div>

            </div>
          <?php } wp_reset_query(); ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>
