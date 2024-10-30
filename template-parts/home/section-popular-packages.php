<?php
  $section_hide = get_theme_mod( 'vw_tourism_pro_popular_packages_enabledisable' );
  if ( 'Disable' == $section_hide ) {
    return;
  }
  if( get_theme_mod('vw_tourism_pro_popular_packages_bgcolor','') ) {
    $packages_bg = 'background-color:'.esc_attr(get_theme_mod('vw_tourism_pro_popular_packages_bgcolor','')).';';
  }elseif( get_theme_mod('vw_tourism_pro_popular_packages_bgimage','') ){
    $packages_bg = 'background-image:url(\''.esc_url(get_theme_mod('vw_tourism_pro_popular_packages_bgimage')).'\')';
  }else{
    $packages_bg = '';
  }
  $img_bg = get_theme_mod('vw_tourism_pro_popular_packages_bg_attachment');

?>

<section id="popular-packages" style="<?php echo esc_attr($packages_bg); ?>" class="<?php echo esc_attr($img_bg); ?> pb-0">
  <div class="container  wow zoomIn delay-2000">
    <div class="row align-items-center">
      <div class="col-lg-6 col-md-6">
        <?php if(get_theme_mod('vw_tourism_pro_popular_packages_sub_heading')!=''){ ?>
          <p class="sec-sub-heading mb-0 text-md-start tex-sm-center text-center"><?php echo esc_html(get_theme_mod('vw_tourism_pro_popular_packages_sub_heading')); ?></p>
        <?php } ?>
        <?php if(get_theme_mod('vw_tourism_pro_popular_packages_heading')!=''){ ?>
          <h2 class="sec-heading text-md-start tex-sm-center text-center"><?php echo esc_html(get_theme_mod('vw_tourism_pro_popular_packages_heading')); ?></h2>
        <?php } ?>
      </div>
      <div class="col-lg-6 col-md-6">
        <ul class="nav nav-tabs justify-content-md-end border-0 justify-content-sm-center justify-content-center" id="popular-package-tabs" role="tablist">
          <?php
          $packages_array = array( 'Trending', 'Duration', 'Types' );
          for ($i=0; $i < 3; $i++) {
            $tab_heading = get_theme_mod( 'vw_tourism_pro_popular_packages_tab_heading'.$i, $packages_array[$i] );
             ?>
            <li class="nav-item" role="presentation">
              <button class="nav-link <?php echo $i == 0 ? 'active' : '' ?>" id="package-tab-<?php echo $i; ?>" data-bs-toggle="tab" data-bs-target="#package-<?php echo $i; ?>" type="button" role="tab" aria-controls="package-<?php echo $i; ?>" aria-selected="true"><?php echo esc_html($tab_heading); ?></button>
            </li>
          <?php } ?>
        </ul>
      </div>
    </div>
    <div class="tab-content" id="popular-tab-content">
        <?php for ($i=0; $i < 3; $i++) { ?>
            <div class="tab-pane fade <?php echo $i == 0 ? 'show active' : '' ?>" id="package-<?php echo $i; ?>" role="tabpanel" aria-labelledby="package-<?php echo $i; ?>-tab">
              <div class="owl-carousel mt-5">
                <?php
                $args = array(
                  'post_type' => 'tcp_package',
                  'post_status' => 'publish',
                );

                if ( $i == 0 ) { //trending

                  $args['meta_query'] = array(
                    'relation' => 'OR',
                    array(
                        'key' => 'average_rating',
                        'compare' => 'EXISTS',
                    ),
                    array(
                        'key' => 'average_rating',
                        'compare' => 'NOT EXISTS',
                    )
                  );
                  $args['orderby'] = 'meta_value_num';
                  $args['order'] = 'DESC';

                } elseif ( $i == 1 ) { // duration

                  $args['meta_query'] = array(
                    'relation' => 'OR',
                    array(
                        'key' => 'pkg_tour_days',
                        'compare' => 'EXISTS',
                    ),
                    array(
                        'key' => 'pkg_tour_days',
                        'compare' => 'NOT EXISTS',
                    )
                  );
                  $args['orderby'] = 'meta_value_num';
                  $args['order'] = 'DESC';

                } else {
                  $args['tax_query'] = array(
                    array(
                        'taxonomy' => 'tcp_category',
                        'operator' => 'EXISTS'
                    )
                  );
                }

                $new = new WP_Query($args);

                while ( $new->have_posts() ){ $new->the_post();
                  global $post;
                  $post_id = $post->ID;

                  $location_link = ''; $term_id = '';
                  $destination = get_the_terms($post, 'tcp_destination');
                  $destination_title = '';
                  if (is_array($destination) && count($destination)) {
                    $destination_title = $destination[0]->name . ' Tour';
                    $location_link = get_category_link( $destination[0]->term_id );
                  }
                  $pkg_sale_price   = get_post_meta( $post_id, 'pkg_sale_price', true);
                  $pkg_tour_days   = get_post_meta( $post_id, 'pkg_tour_days', true);
                  $pkg_tour_nights   = get_post_meta( $post_id, 'pkg_tour_nights', true);


                  $pkg_sale_price = $pkg_sale_price ? $pkg_sale_price : 0;
                     $member_text = get_post_meta( $post_id, 'pkg_person_text', true) ? get_post_meta( $post_id, 'pkg_person_text', true) : 'Per Person';
                  ?>
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
                              <p class="mb-0 package-price"><?php echo esc_html(get_theme_mod('vw_tourism_pro_packages_currency')); ?><?php echo  esc_html(number_format((float)$pkg_sale_price, 2, '.', '')); ?></p>
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
                <?php } wp_reset_query(); ?>
              </div>
            </div>
        <?php } ?>
      </div>
      <div class="packages-button text-center my-5 mb-sm-0 mb-0">
        <a class="theme-btn-main" href="<?php echo esc_html(get_theme_mod('vw_tourism_pro_popular_packages_view_more_btn_url')); ?>">
          <div class="theme-btn-block">
              <span class="theme-btn-line-left"></span>
                    <span class="theme-btn-text"><?php echo esc_html(get_theme_mod('vw_tourism_pro_popular_packages_view_more_text'));?></span>
              <span class="theme-btn-line-right"></span>
              <i class="fa-solid fa-caret-down"></i>
            </div>
        </a>
      </div>


  </div>
</section>
