<?php
/**
 * Template Name: Tour Packages
*/
get_header();
get_template_part( 'template-parts/banner' );

$page_term_id = get_queried_object()->term_id;

global $wpdb;
$packages_price_max_query = "SELECT MAX( CAST( $wpdb->postmeta.meta_value AS SIGNED ) ) AS packages_max_price FROM $wpdb->postmeta WHERE meta_key='%s'";
$packages_meta_price_max = $wpdb->get_row( $wpdb->prepare( $packages_price_max_query, 'pkg_regular_price' ) );

$vw_tourism_pro_packages_currency = get_theme_mod('vw_tourism_pro_packages_currency');

$final_price = 0;
if ($packages_meta_price_max != '') {
  $final_price = $vw_tourism_pro_packages_currency.$packages_meta_price_max->packages_max_price;
}

$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
    'post_type' => 'tcp_package',
    'posts_per_page' => 9,
    'paged' => $paged,
    'order' => 'ASC'
);

$loop = new WP_Query( $args ); ?>

<section id="tour-packges" class="pb-0">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-4">
            <div class="accordion packages-filter d-flex flex-column" id="accordionPanelsStayOpenExample">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                  <?php echo esc_html('Categories', ' vw-tourism-pro'); ?>
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                  <div class="accordion-body">
                  <div class="packages-category d-flex flex-column gap-4 ">
                    <?php
                      $categories = get_terms( array(
                        'taxonomy'   => 'tcp_category',
                        'hide_empty' => false,
                      ) );
                      foreach ($categories as $key => $category) {
                        $term_id = $category->term_id;
                        $term_name = $category->name;
                        $isChecked = '';
                           if($page_term_id == $category->term_id){
                             $isChecked = 'checked';
                           }

                        ?>
                        <div >
                          <label class="d-flex gap-4 align-items-center  position-relative category-inner justify-content-md-start justify-content-sm-center justify-content-center">
                            <input class="category-filter-checkbox" <?php echo $isChecked; ?> type="checkbox" name="tcp_category" value="<?php echo $category->term_id; ?>" />
                            <div>
                              <?php
                                $thumbnail_url = get_term_meta($category->term_id, 'category_image', true);
                                echo "<img src='{$thumbnail_url}' class='activity-img' alt='' />";
                              ?>
                            </div>
                            <div class="pack-cat-name active-class">
                              <?php	echo $term_name;  ?>
                            </div>
                          </label>
                        </div>
                      <?php }
                    ?>
                  </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                      <?php echo esc_html('Filter', 'vw-tourism-pro'); ?>
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show">
                  <div class="accordion-body">
                  <div class="packages-filter text-center d-flex flex-column gap-2  justify-content-md-start justify-content-sm-center justify-content-center">
                    <!-- <div class="d-flex justify-content-between range-div mb-2">
                      <span id="product-amount-start"></span>
                    </div> -->
                    <div id="packages-price-slider"></div>

                    <p class="mb-0 price-text-pack">Price: <span><?php echo $vw_tourism_pro_packages_currency;?>0</span>-<span><?php echo esc_html($final_price); ?></span></p>
                    <button class="filter-btn" type="button" name="button">Filter</button>
                  </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                          <?php echo esc_html('Location Tags', 'vw-tourism-pro'); ?>
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse show">
                  <div class="accordion-body">
                  <div class="destination-content">
                    <?php
                      $destinations = get_terms( array(
                        'taxonomy'   => 'tcp_destination',
                        'hide_empty' => false,
                      ) );
                      foreach ($destinations as $destination) {
                        $term_name = $destination->name;
                        $destination_type = get_term_meta( $term_id, 'destination-type', true );
                        ?>
                        <label>
                          <input class="category-filter-checkbox" type="checkbox" name="tcp_destination" value="<?php echo $destination->term_id; ?>" />
                          <span class="desti-name active-class">
                            <?php	echo $term_name;  ?>
                          </span>
                        </label>
                      <?php }
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      <div class="col-lg-9 col-md-8 packages-main-box">
        <div class="row">
          <?php
            while ( $loop->have_posts() ) :  $loop->the_post();
              global $post;
              $post_id = $post->ID;
              $pkg_sale_price   = get_post_meta( $post_id, 'pkg_sale_price', true);
              $pkg_sale_price = $pkg_sale_price ? $pkg_sale_price : 0;

              $location_link = ''; $term_id = '';
              $destination = get_the_terms($post, 'tcp_destination');
              $destination_title = '';
              if (is_array($destination) && count($destination)) {
                $destination_title = $destination[0]->name . ' Tour';
                $location_link = get_category_link( $destination[0]->term_id );
              }
                $pkg_sale_price   = get_post_meta( $post_id, 'pkg_sale_price', true);
                $round_sale = $pkg_sale_price != 0 ? get_theme_mod('vw_tourism_pro_packages_currency') . number_format((float)$pkg_sale_price, 2, '.', '') : '';
                $member_text = get_post_meta( $post_id, 'pkg_person_text', true) ? get_post_meta( $post_id, 'pkg_person_text', true) : 'Per Person';
                $pkg_tour_days   = get_post_meta( $post_id, 'pkg_tour_days', true);
                $pkg_tour_nights   = get_post_meta( $post_id, 'pkg_tour_nights', true);
              ?>

              <div class="col-xl-4 col-lg-2 mb-4">
                <div class="packages-box">
                  <div class="packages-img-main position-relative">
                    <?php if (has_post_thumbnail()){ ?>
                      <?php the_post_thumbnail(); ?>
                    <?php } ?>
                    <div class="d-flex flex-column position-absolute bottom-0 top-0 start-0 end-0 mx-auto my-3 justify-content-between packages-content-box  text-md-start text-sm-start text-start px-sm-1" style="z-index:1">
                      <div class="packages-btm-content">
                        <a href="<?php echo esc_url($location_link); ?>"><h5><?php echo esc_html($destination_title); ?></h5></a>
                      </div>
                      <div class="packages-btm-content">
                        <h6 class="packages-from">From <?php echo esc_html(get_post_meta($post->ID,'pkg_from',true)); ?></h6>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="packages-date">
                            <span><?php echo $pkg_tour_days ; echo $pkg_tour_days ? ' Days' : '';?></span>
                            <span><?php echo esc_html($pkg_tour_nights); echo $pkg_tour_nights ? ' Nights' : '';?></span>
                              <p class="mb-0 pac-per-year"><?php esc_html_e($member_text);?></p>
                          </div>
                            <p class="mb-0 package-price"><?php echo  esc_html($round_sale); ?></p>
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
            <?php endwhile;  wp_reset_query();
          ?>
        </div>
        <div class="pagination justify-content-center gap-2">
          <?php
            // $big = 999999999;
            // echo paginate_links( array(
            //   'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
            //   'format' => '?paged=%#%',
            //   'current' => max( 1, get_query_var('paged') ),
            //   'total' => $loop->max_num_pages,
            //   'prev_text'          => __( '<i class="fas fa-chevron-left"></i>', 'vw-toursim-pro' ),
            //   'next_text'          => __( '<i class="fas fa-chevron-right"></i>', 'vw-toursim-pro' ),
            // ));
          ?>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>

<?php get_footer(); ?>
