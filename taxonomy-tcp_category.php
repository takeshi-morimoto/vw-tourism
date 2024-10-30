<?php
/**
 * The Template for displaying all single team.
 *
 * @package vw-tourism-pro
 */
get_header();
$background_img = get_theme_mod('vw_tourism_pro_inner_page_banner_bgimage');

$current_term = get_queried_object();

$current_term_id = '';
if ($current_term) {
  $current_term_id = $current_term->term_id;
}
if ($current_term_id) {

  $args = array(
    'post_type' => 'tcp_package',
    'post_status' => 'publish',
    'posts_per_page'=> -1,
    'tax_query' => array(
      array(
        'taxonomy' => 'tcp_category',
        'field' => 'term_id',
        'terms' => $current_term_id
      )
    )
  );
  $new = new WP_Query($args);

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
        <?php while ( $new->have_posts() ){ $new->the_post();

          $post_id = $post->ID;

        $location_link = ''; $term_id = '';
        $destination = get_the_terms($post, 'tcp_destination');
        $destination_title = '';
        if (is_array($destination) && count($destination)) {
          $destination_title = $destination[0]->name . ' Tour';
          $location_link = get_category_link( $destination[0]->term_id );
        }

        $pkg_regular_price   = get_post_meta( $post_id, 'pkg_regular_price', true);
        $pkg_regular_price = $pkg_regular_price ? $pkg_regular_price : 0;

        $member_text = get_post_meta( $post_id, 'pkg_person_text', true) ? get_post_meta( $post_id, 'pkg_person_text', true) : 'Per Person';
            ?>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
              <div class="packages-box mb-4">
                <div class="packages-img-main position-relative">
                  <?php if (has_post_thumbnail()){ ?>
                    <?php the_post_thumbnail(); ?>
                  <?php } ?>
                  <div class="d-flex flex-column position-absolute bottom-0 top-0 start-0 end-0 mx-auto my-3 justify-content-between packages-content-box text-md-start text-sm-center text-center px-sm-1" style="z-index:1">
                    <div class="packages-btm-content">
                        <a href="<?php echo esc_url($location_link); ?>"><h5><?php echo esc_html($destination_title); ?></h5></a>
                    </div>
                    <div class="packages-btm-content">
                      <h6 class="packages-from">From <?php echo esc_html(get_post_meta($post->ID,'pkg_from',true)); ?></h6>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="packages-date">
                            <span><?php echo esc_html(get_post_meta($post->ID,'pkg_tour_days',true)); ?></span>Days
                            <span><?php echo esc_html(get_post_meta($post->ID,'pkg_tour_nights',true)); ?></span>Nights
                            <p class="mb-0 pac-per-year"><?php esc_html_e($member_text);?></p>
                        </div>
                        <p class="mb-0 package-price"><?php echo esc_html(get_theme_mod('vw_tourism_pro_packages_currency')); ?><?php echo  esc_html(number_format((float)$pkg_regular_price, 2, '.', '')); ?></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="packges-bottom-box">
                  <div class="d-flex flex-column gap-2 packges-bottom-box-inner  py-3 text-center">
                    <div class="packages-title">
                        <h3 style="line-height:0;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    </div>
                    <div class="packages-name">
                        <p class="mb-0"><?php echo esc_html(get_post_meta($post->ID,'pkg_travel_name',true)); ?></p>
                    </div>
                    <div class="packages-button  ">
                      <a class="theme-btn-main" href="<?php the_permalink(); ?>">
                        <div class="theme-btn-block">
                            <span class="theme-btn-line-left"></span>
                                  <span class="theme-btn-text"><?php echo esc_html(get_theme_mod('vw_tourism_pro_popular_packages_booknow_text'));?></span>
                            <span class="theme-btn-line-right"></span>
                            <i class="fa-solid fa-caret-down"></i>
                          </div>
                      </a>
                    </div>
                  </div>

                </div>

              </div>
            </div>
            <?php } wp_reset_query(); ?>
        </div>
    </div>
  </section>

<?php } else { ?>
  <div class="class">No data found.</div>
<?php } ?>

<?php get_footer(); ?>
