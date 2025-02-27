<?php
/**
 * The Template for displaying all single team.
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
              <h1><?php the_title();?></h1>
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
<section id="single-packages" class="pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
              <?php
                    while ( have_posts() ) : the_post();
                  endwhile;
                  $post_id = $post->ID;
                  $pkg_travel_name   = get_post_meta( $post_id, 'pkg_travel_name', true);
                  $pkg_from   =  get_post_meta( $post_id, 'pkg_from', true);
                  $pkg_to   =  get_post_meta( $post_id, 'pkg_to', true);
                  $pkg_tour_days   = get_post_meta( $post_id, 'pkg_tour_days', true);
                  $pkg_tour_nights   = get_post_meta( $post_id, 'pkg_tour_nights', true);
                  $pkg_regular_price   = get_post_meta( $post_id, 'pkg_regular_price', true);
                  $pkg_sale_price   = get_post_meta( $post_id, 'pkg_sale_price', true);
                  $pkg_sale_price = $pkg_sale_price ? $pkg_sale_price : 0;
                  $pkg_regular_price = $pkg_regular_price ? $pkg_regular_price : 0;
                  $pkg_tour_details = get_post_meta( $post_id, 'pkg_tour_details', true );
                  $pkg_tour_loc_latitude = get_post_meta($post_id,'pkg_tour_loc_latitude',true);
                  $pkg_tour_loc_longitude = get_post_meta($post_id,'pkg_tour_loc_longitude',true);
                  $pkg_registation_btn_text = get_post_meta($post_id,'pkg_registation_btn_text',true);
                  $pkg_registation_btn_url = get_post_meta($post_id,'pkg_registation_btn_url',true);
                  $location_address = '';
                  if ($pkg_tour_loc_latitude != '' && $pkg_tour_loc_longitude != '') {
                    $location_address = "https://maps.google.com/maps?q=".$pkg_tour_loc_latitude.",".$pkg_tour_loc_longitude."&hl=es;z=14&amp;output=embed";
                  }
                    $pkg_additional_video   = get_post_meta( $post_id, 'pkg_additional_video', true);
                    $pkg_tour_additional_info   = get_post_meta( $post_id, 'pkg_tour_additional_info', true);
                    $round_regular = $pkg_regular_price != 0 ? get_theme_mod('vw_tourism_pro_packages_currency') . number_format((float)$pkg_regular_price, 0, '.', '') : '';
                    $round_sale = $pkg_sale_price != 0 ? get_theme_mod('vw_tourism_pro_packages_currency') . number_format((float)$pkg_sale_price, 0, '.', '') : '';
                    $member_text = get_post_meta( $post_id, 'pkg_person_text', true) ? get_post_meta( $post_id, 'pkg_person_text', true) : 'Per Person';
                ?>
                <?php if (has_post_thumbnail()){ ?>
                  <?php the_post_thumbnail(); ?>
                <?php } ?>
                  <h3 class="single-room-title "><?php the_title(); ?></h3>
                  <div class="d-flex pack-meta-content gap-md-5 gap-2 justify-content-md-start justify-conten-sm-center justify-content-center">
                  <div class="pack-meta-text position-relative"><?php echo esc_html($pkg_travel_name); ?></div>
                  <?php
                  $meeting_location = get_post_meta($post_id, 'meeting_location', true);
                  if (!empty($meeting_location)) {
                      echo '<div class="pack-meta-text position-relative"><strong>Meeting Location:</strong> ' . esc_html($meeting_location) . '</div>';
                  }
                  ?>
                  <div class="pack-meta-text position-relative"><span><?php echo $pkg_from; ?></span> <?php echo $pkg_to != '' ? 'To' : ''; ?> <span><?php echo esc_html($pkg_to); ?></span></div>
                  <div class="pack-meta-text position-relative"><span class="pe-1"><?php echo $pkg_tour_days; echo $pkg_tour_days ? ' Days' : '';?></span><span><?php echo esc_html($pkg_tour_nights); echo $pkg_tour_nights ? ' Night' : '';?></span></div>
                </div>

                <div class="pack-price-content my-3 row">
                  <div class="d-flex align-items-center gap-2 justify-content-md-start justify-content-sm-center justify-content-center col-md-4">
                    <div class="pack-sale-pr"><?php echo esc_html($round_sale); ?></div>
                    <div class="pack-regular-pr"> <?php echo esc_html($round_regular); ?></div>
                    <div class="pack-per-person"><?php echo $pkg_sale_price != 0 || $pkg_regular_price != 0 ? $member_text : ''; ?></div>
                  </div>
                  <!-- <div class="book-btn col-md-4">
                    <a class="theme-btn-main" href="<?php echo esc_url($pkg_registation_btn_url); ?>" style="padding: 6px 15px;">
                      <div class="theme-btn-block">
                        <span class="theme-btn-line-left"></span>
                        <span class="theme-btn-text"><?php echo esc_html($pkg_registation_btn_text); ?></span>
                        <span class="theme-btn-line-right"></span>
                        <i class="fa-solid fa-caret-down"></i>
                      </div>
                    </a>
                  </div> -->
                </div>

                <div class="pack-desc mt-4">
                  <h4 class="my-2"><?php echo get_the_content() != '' ? 'Description' : '' ?></h4>
                  <?php the_content();?>
                </div>

                <div class="pack-days-tab mb-3">
                <?php
                if ( $pkg_tour_details && is_array($pkg_tour_details) ) { ?>
                  <ul class="nav nav-tabs gap-1" id="daysTab" role="tablist">
                  <?php foreach ( $pkg_tour_details as $key => $pkg_tour_detail ) { ?>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link <?php echo $key == 0 ? 'active' : '' ?>" id="<?php echo 'tour-detail-'.$key ?>-tab" data-bs-toggle="tab" data-bs-target="#<?php echo 'tour-detail-'.$key ?>-tab-pane" type="button" role="tab" aria-controls="<?php echo 'tour-detail-'.$key; ?>-tab-pane" aria-selected="true"><?php echo esc_html(sprintf("%02d", $key+1)); ?></button>
                    </li>
                  <?php } ?>
                  </ul>
                  <div class="tab-content" id="daysTabContent">
                    <?php foreach ( $pkg_tour_details as $key => $pkg_tour_detail ) {
                      $pkg_tour_detail_image = isset($pkg_tour_detail['image']) ? $pkg_tour_detail['image'] : '';
                      $pkg_tour_detail_desc = isset($pkg_tour_detail['description']) ? $pkg_tour_detail['description'] : '';
                      $pkg_tour_days_text = $pkg_tour_days != '' ? $pkg_tour_days > 1 ? $pkg_tour_days.' Days' : $pkg_tour_days.' Day' : '';
                      $pkg_tour_nights_text = $pkg_tour_nights != '' ? $pkg_tour_nights > 1 ? $pkg_tour_nights.' Nights' : $pkg_tour_nights.' Night' : '';
                      $single_text = $pkg_tour_days_text.' '.$pkg_tour_nights_text;
                      $day_text = sprintf("%02d", $key+1) . ' Day';
                      ?>
                      <div class="tab-pane fade <?php echo $key == 0 ? 'show active' : '' ?>" id="<?php echo 'tour-detail-'.$key; ?>-tab-pane" role="tabpanel" aria-labelledby="<?php echo 'tour-detail-'.$key; ?>-tab" tabindex="0">
                        <div class="row align-items-center">
                          <div class="days-img col-lg-4 col-md-5">
                            <img src="<?php echo esc_url($pkg_tour_detail_image); ?>" />
                          </div>
                          <div class="days-content col-lg-8 col-md-7">
                            <div class="d-flex justify-content-between mb-2 mt-sm-2 mt-2">
                              <div class="pack-days-night"><?php esc_html_e($single_text); ?></div>
                              <div class="pack-day-no"><?php esc_html_e($day_text); ?></div>
                            </div>
                            <p class="mb-0"><?php esc_html_e($pkg_tour_detail_desc); ?></p>
                          </div>
                        </div>
                      </div>
                    <?php } ?>
                  </div>
                <?php } ?>
                </div>
                <div class="pack-add-info">
                    <h4 class="my-2"><?php echo $pkg_tour_additional_info != '' ? 'Additional information' : '' ?></h4>
                    <?php echo $pkg_tour_additional_info;?>
                </div>
            </div>
            <div class="col-lg-4">
              <div class="row">
                <div class="col-lg-12 col-md-6">
                  <?php echo get_post_meta($post->ID,'pkg_additional_image_1',true) != '' ? '<img class="pack-content-img mb-3" src="'.esc_html(get_post_meta($post->ID,"pkg_additional_image_1",true)).'" alt="Packages Image" >' : '';?>
                </div>
                <div class="col-lg-12 col-md-6">
                  <?php echo get_post_meta($post->ID,'pkg_additional_image_2',true) != '' ? '<img class="pack-content-img mb-3" src="'.esc_html(get_post_meta($post->ID,"pkg_additional_image_2",true)).'" alt="Packages Image" >' : '';?>
                </div>
                <div class="col-lg-12 col-md-6">
                  <div class="pack-content-video position-relative">
                    <!-- <video width="100%" height="400" controls>
                        <source src="<?php echo $pkg_additional_video; ?>" type="video/mp4">
                    </video> -->
                    <!-- <video id="tourVideo" width="100%" height="400"  audio="muted" autoplay="false" src="<?php echo $pkg_additional_video; ?>" type="video/mp4"></video> -->
                    <!-- <div class="video-bg-img">
                        <?php if(get_theme_mod('vw_tourism_pro_single_packages_video_img')!=''){ ?>
                          <img src="<?php echo esc_html(get_theme_mod('vw_tourism_pro_single_packages_video_img')); ?>" alt=".....">
                        <?php } ?>
                          <a class="videoslider-video-btn myVideoBtn" data-aos="fade-up" data-aos-duration="2000" data-toggle="modal"
                          data-url="<?php  echo $pkg_additional_video; ?>?rel=0&autoplay=1"  id="myBtn">
                          <i class="fa-solid fa-play"></i>
                        </a>
                      <div id="myVideoNewModal" class="modal-new">
                        <div class="modal-contents">
                          <button class="close-one">&times;<span class="screen-reader-text"><?php echo esc_html('Close button', 'vw-musician-band-artist-pro' ) ; ?></span></button>
                          <video width="100%" height="400" controls>
                              <source src="<?php echo $pkg_additional_video; ?>" type="video/mp4">
                          </video>
                        </div>
                      </div>
                    </div> -->
                  </div>
                </div>
                <div class="col-lg-12 col-md-6">
                  <?php echo $location_address != '' ? '<div class="pack-map">
                        <h4 class="pack-map-title" style="">Track Live Location</h4>
                    <embed style="border-radius:20px" width="100%" height="400" frameborder="0" scrolling="yes" marginheight="0" marginwidth="0" src="'.$location_address.'"></embed>
                  </div>' : '' ?>
                </div>
              </div>
            </div>
        </div>
        <!-- <div class="row mt-5"> -->

          <?php
          // if ( comments_open() || '0' != get_comments_number() ) {
            // comments_template();
          // }
          ?>
          
        <!-- </div> -->
        <div id="related-places" class="mt-5">
          <?php if(get_theme_mod('vw_tourism_pro_places_related_post_sub_heading')!=''){ ?>
            <p class="sec-sub-heading text-center"><?php echo esc_html(get_theme_mod('vw_tourism_pro_places_related_post_sub_heading')); ?></p>
          <?php } ?>
          <?php if(get_theme_mod('vw_tourism_pro_places_related_post_heading')!=''){ ?>
            <h2 class="sec-heading text-center"><?php echo esc_html(get_theme_mod('vw_tourism_pro_places_related_post_heading')); ?></h2>
          <?php } ?>
          <?php
          $current_post_type = get_post_type( $post );
          $tcp_category = get_the_terms($post, 'tcp_category');
          $tcp_category_ids_arr = array();
          if (is_array($tcp_category) && count($tcp_category)) {
              foreach ($tcp_category as $tcp_category_term) {
                  array_push($tcp_category_ids_arr, $tcp_category_term->term_id);
              }
          }
          $args = array(
              'posts_per_page' => 4,
              'order' => 'DESC',
              'orderby' => 'ID',
              'post_type' => $current_post_type,
              'post__not_in' => array( $post->ID )
          );
          if ($tcp_category_ids_arr) {
              $args['tax_query'] = array(
                  array(
                      'taxonomy' => 'tcp_category',
                      'field'    => 'term_id',
                      'terms'    => $tcp_category_ids_arr,
                      'operator' => 'IN',
                  )
              );
          }
          $related = new WP_Query( $args );
          ?>

          <div class="row mt-3">
              <?php while ( $related->have_posts() ) { 
                  $related->the_post(); // ループ内で現在の投稿を取得
                  $post_id = get_the_ID(); // 現在の投稿 ID を取得

                  // 目的地のデータ取得
                  $destination = get_the_terms($post_id, 'tcp_destination');
                  $destination_title = $destination && !is_wp_error($destination) ? $destination[0]->name . ' Tour' : '';
                  $location_link = $destination && !is_wp_error($destination) ? get_category_link($destination[0]->term_id) : '';

                  // メタデータの取得
                  $pkg_travel_name = get_post_meta($post_id, 'pkg_travel_name', true);
                  $pkg_from = get_post_meta($post_id, 'pkg_from', true);
                  $pkg_tour_days = get_post_meta($post_id, 'pkg_tour_days', true);
                  $pkg_tour_nights = get_post_meta($post_id, 'pkg_tour_nights', true);
                  $pkg_sale_price = get_post_meta($post_id, 'pkg_sale_price', true) ?: 0;
                  $pkg_person_text = get_post_meta($post_id, 'pkg_person_text', true) ?: 'Per Person';
              ?>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                  <div class="packages-box">
                      <div class="packages-img-main position-relative">
                          <?php if ( has_post_thumbnail() ) { ?>
                              <?php the_post_thumbnail(); ?>
                          <?php } ?>
                          <div class="d-flex flex-column position-absolute bottom-0 top-0 start-0 end-0 mx-auto my-3 justify-content-between packages-content-box text-md-start text-start px-sm-1" style="z-index:1">
                              <div class="packages-btm-content">
                                  <a href="<?php echo esc_url($location_link); ?>">
                                      <h5><?php echo esc_html($destination_title); ?></h5>
                                  </a>
                              </div>
                              <div class="packages-btm-content">
                                  <h6 class="packages-from">From <?php echo esc_html($pkg_from); ?></h6>
                                  <div class="d-flex justify-content-between align-items-center">
                                      <div class="packages-date">
                                          <span><?php echo esc_html($pkg_tour_days); ?></span> Days
                                          <span><?php echo esc_html($pkg_tour_nights); ?></span> Nights
                                          <p class="mb-0 pac-per-year"><?php echo esc_html($pkg_person_text); ?></p>
                                      </div>
                                      <p class="mb-0 package-price"><?php echo esc_html(get_theme_mod('vw_tourism_pro_packages_currency')) . number_format($pkg_sale_price, 0, '.', ''); ?></p>
                                      </div>
                              </div>
                          </div>
                      </div>
                      <div class="packges-bottom-box">
                          <div class="d-flex flex-column gap-2 packges-bottom-box-inner py-3 text-center">
                              <div class="packages-title">
                                  <h3 style="line-height:0;">
                                      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                  </h3>
                              </div>
                              <div class="packages-name">
                                  <p class="mb-0"><?php echo esc_html($pkg_travel_name); ?></p>
                              </div>
                              <div class="packages-button">
                                  <a class="theme-btn-main" href="<?php the_permalink(); ?>">
                                      <div class="theme-btn-block">
                                          <span class="theme-btn-line-left"></span>
                                          <span class="theme-btn-text"><?php echo esc_html(get_theme_mod('vw_tourism_pro_popular_packages_booknow_text')); ?></span>
                                          <span class="theme-btn-line-right"></span>
                                          <i class="fa-solid fa-caret-down"></i>
                                      </div>
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <?php } wp_reset_postdata(); ?>
          </div>
        </div>  
</section>
<?php get_footer(); ?>