<?php
$section_hide = get_theme_mod( 'vw_tourism_pro_popular_cuisines_enabledisable' );
if ( 'Disable' == $section_hide ) {
  return;
}
if( get_theme_mod('vw_tourism_pro_popular_cuisines_bgcolor','') ) {
  $cuisines_bg = 'background-color:'.esc_attr(get_theme_mod('vw_tourism_pro_popular_cuisines_bgcolor','')).';';
}elseif( get_theme_mod('vw_tourism_pro_popular_cuisines_bgimage','') ){
  $cuisines_bg = 'background-image:url(\''.esc_url(get_theme_mod('vw_tourism_pro_popular_cuisines_bgimage')).'\')';
}else{
  $cuisines_bg = '';
}
$img_bg = get_theme_mod('vw_tourism_pro_popular_cuisines_bg_attachment');
$args = array(
  'post_type' => 'popular-cuisines',
  'post_status' => 'publish',
  'posts_per_page'=> -1
);
$new = new WP_Query($args);



?>
<section id="popular-cuisines" style="<?php echo esc_attr($cuisines_bg); ?>" class="<?php echo esc_attr($img_bg); ?> pb-0" >
  <div class="container  wow zoomIn delay-2000">
    <div class="row justify-content-center text-center">
      <div class="col-lg-8">
        <?php if(get_theme_mod('vw_tourism_pro_cuisines_sub_heading')!=''){ ?>
          <p class="sec-sub-heading mb-0"><?php echo esc_html(get_theme_mod('vw_tourism_pro_cuisines_sub_heading')); ?></p>
        <?php } ?>
        <?php if(get_theme_mod('vw_tourism_pro_cuisines_heading')!=''){ ?>
          <h2 class="sec-heading"><?php echo esc_html(get_theme_mod('vw_tourism_pro_cuisines_heading')); ?></h2>
        <?php } ?>
        <?php if(get_theme_mod('vw_tourism_pro_cuisines_paragraph')!=''){ ?>
          <p class="mb-0 popular-cuisines-para"><?php echo esc_html(get_theme_mod('vw_tourism_pro_cuisines_paragraph')); ?></p>
        <?php } ?>
      </div>
    </div>
    <div class="row mt-md-5">
        <div class="col-lg-3">
          <div class="slider-for">
            <?php while ( $new->have_posts() ){ $new->the_post();


              $cuisines_price   = get_post_meta( $post->ID, 'cuisines_price', true);
              $cuisines_sale_price   = get_post_meta( $post->ID, 'cuisines_sale_price', true);
              $cuisines_price = $cuisines_price != '' ? $cuisines_price : 0;
              $cuisines_sale_price = $cuisines_sale_price != '' ? $cuisines_sale_price : 0;

              $round_regular = $cuisines_price != 0 ? get_theme_mod('vw_tourism_pro_popular__cuisines_currency') . number_format((float)$cuisines_price, 2, '.', '') : '';
              $round_sale = $cuisines_sale_price != 0 ? get_theme_mod('vw_tourism_pro_popular__cuisines_currency') . number_format((float)$cuisines_sale_price, 2, '.', '') : '';
                ?>
              <div class="cusines-content-main">
                    <div class="cusines-content d-flex flex-column gap-3 h-100 justify-content-center pt-sm-4 pt-4 text-md-start text-center">
                      <div class="cusines-title-content d-flex flex-column gap-3">
                        <h4><?php the_title(); ?></h4>
                        <div class="cusines-desc"><?php the_content(); ?></div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="310" height="2" viewBox="0 0 354 2">
                            <line id="" data-name=" " x2="354" transform="translate(0 1)" fill="none" stroke="#112542" stroke-width="2" stroke-dasharray="10"/>
                        </svg>
                      </div>
                      <div class="cuisines-price-content d-flex flex-column gap-3">
                        <h6 class=""><i class="fa-solid fa-tag mx-2"></i><?php echo esc_html(get_post_meta($post->ID,'cuisines_price_title',true)); ?></h6>
                        <div class="cuisines-price">
                          <span class="c-price"><?php echo esc_html($round_regular); ?></span>
                          <span class="c-sale-price"><?php echo esc_html($round_sale); ?></span>

                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="310" height="2" viewBox="0 0 354 2">
                          <line id="" data-name="why choose " x2="354" transform="translate(0 1)" fill="none" stroke="#112542" stroke-width="2" stroke-dasharray="10"/>
                        </svg>
                      </div>
                      <div class="cusines-location-content d-flex flex-column gap-3">
                        <h6 class=""><i class="fa-solid fa-location-dot mx-2"></i><?php echo esc_html(get_post_meta($post->ID,'cuisines_location_title',true)); ?></h6>
                        <p><?php echo esc_html(get_post_meta($post->ID,'cuisines_location',true)); ?></p>
                      </div>
                    </div>
              </div>
               <?php } wp_reset_query(); ?>
            </div>
        </div>
        <div class="col-lg-5 col-md-9 offset-lg-1">
          <div class="slider-for">
            <?php while ( $new->have_posts() ){ $new->the_post();  ?>
                  <div class="cuisines-img">
                    <h5 class="recipe-title"><?php echo esc_html(get_post_meta($post->ID,'cuisines_recipe_title',true)); ?></h5>
                    <?php if (has_post_thumbnail()){ ?>
                      <?php the_post_thumbnail(); ?>
                    <?php } ?>
                  </div>

             <?php } wp_reset_query(); ?>
              </div>
        </div>
        <div class="col-lg-3 col-md-3 position-relative">
          <?php $new = new WP_Query($args); ?>
          <div class="slider slider-nav">
            <?php   while ( $new->have_posts() ){ $new->the_post();  ?>
              <div class="cuisines-image-box">
                <div class="cuisines-image">
                  <?php if (has_post_thumbnail()){ ?>
                    <img src="<?php the_post_thumbnail_url(); ?>">
                  <?php } ?>
                </div>
              </div>
            <?php } wp_reset_query(); ?>
          </div>
          <div class="slider-custom-main d-flex flex-md-column flex-sm-column gap-2 position-absolute position-sm-absolute end-0 translate-md-middle translate-sm-middle " style="width:max-content;">
              <div class="sliders-custom-prev" >
                <i class="fa-solid fa-chevron-up"></i></button>
              </div>

            <div class="slider-custom-active-dot" >
              <a href="<?php echo esc_html(get_theme_mod('vw_tourism_pro_cuisines_btn_url')); ?>">
              <svg style="padding-left:2px; "xmlns="http://www.w3.org/2000/svg" width="15" height="19" viewBox="0 0 19 19">
                <g id="mENU" transform="translate(365 -4007)">
                  <g id="Rectangle_439" data-name="Rectangle 439" transform="translate(-365 4007)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1.2">
                    <rect width="9" height="9" rx="2" stroke="none"/>
                    <rect x="0.6" y="0.6" width="7.8" height="7.8" rx="1.4" fill="none"/>
                  </g>
                  <g id="Rectangle_440" data-name="Rectangle 440" transform="translate(-355 4007)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1.2">
                    <rect width="9" height="9" rx="2" stroke="none"/>
                    <rect x="0.6" y="0.6" width="7.8" height="7.8" rx="1.4" fill="none"/>
                  </g>
                  <g id="Rectangle_441" data-name="Rectangle 441" transform="translate(-355 4017)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1.2">
                    <rect width="9" height="9" rx="2" stroke="none"/>
                    <rect x="0.6" y="0.6" width="7.8" height="7.8" rx="1.4" fill="none"/>
                  </g>
                  <g id="Rectangle_442" data-name="Rectangle 442" transform="translate(-365 4017)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1.2">
                    <rect width="9" height="9" rx="2" stroke="none"/>
                    <rect x="0.6" y="0.6" width="7.8" height="7.8" rx="1.4" fill="none"/>
                  </g>
                </g>
              </svg>
              </a>
            </div>
            <div class="sliders-custom-next" >
            <i class="fa-solid fa-chevron-down"></i></button>
            </div>
          </div>
        </div>
      </div>
  </div>
</section>
