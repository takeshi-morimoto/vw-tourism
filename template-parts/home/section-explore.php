<?php
$section_hide = get_theme_mod( 'vw_tourism_pro_explore_enabledisable' );
if ( 'Disable' == $section_hide ) {
  return;
}
if( get_theme_mod('vw_tourism_pro_explore_bgcolor','') ) {
  $explore_bg = 'background-color:'.esc_attr(get_theme_mod('vw_tourism_pro_explore_bgcolor','')).';';
}elseif( get_theme_mod('vw_tourism_pro_explore_bgimage','') ){
  $explore_bg = 'background-image:url(\''.esc_url(get_theme_mod('vw_tourism_pro_explore_bgimage')).'\')';
}else{
  $explore_bg = '';
}
$img_bg = get_theme_mod('vw_tourism_pro_explore_bg_attachment');

$args = array(
  'post_type'      => 'tcp_explore',
  'posts_per_page' => 10,
  'fields'         => 'ids'
);
$query = new WP_Query($args);
?>
<section id="explore" style="<?php echo esc_attr($explore_bg); ?>" class="<?php echo esc_attr($img_bg); ?> pb-0" >
  <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 wow zoomIn delay-2000">
          <?php if(get_theme_mod('vw_tourism_pro_explore_sub_heading')!=''){ ?>
            <p class="sec-sub-heading text-md-start text-center"><?php echo esc_html(get_theme_mod('vw_tourism_pro_explore_sub_heading')); ?></p>
          <?php } ?>
          <?php if(get_theme_mod('vw_tourism_pro_explore_heading')!=''){ ?>
            <h2 class="sec-heading text-md-start text-center"><?php echo esc_html(get_theme_mod('vw_tourism_pro_explore_heading')); ?></h2>
          <?php } ?>
          <?php if(get_theme_mod('vw_tourism_pro_explore_paragraph')!=''){ ?>
            <p class="text-md-start text-center exp-para"><?php echo esc_html(get_theme_mod('vw_tourism_pro_explore_paragraph')); ?></p>
          <?php } ?>
          <div class="explore-inner">
            <?php
              if ($query->have_posts()) {
                $first_post = true;
                ?>
                <div class="custom-select-wrapper">
                  <div class="custom-select">
                    <span class="custom-select-trigger explore-select-title">Select an option <i class="fa-solid fa-chevron-down"></i></span>
                    <ul class="custom-options">
                      <?php

                        $selected_post_id = '';
                        $selected_post_title = '';

                        while ($query->have_posts()) {
                          $query->the_post();

                          if ($first_post) {
                            $selected_post_id = esc_attr(get_the_ID());
                            $selected_post_title = esc_html(get_the_title());
                            $first_post = false;
                          }

                          ?>
                          <li class="custom-option" data-value="<?php echo esc_attr(get_the_ID()); ?>"><?php echo esc_html(get_the_title()); ?></li>
                        <?php }
                        wp_reset_postdata();
                      ?>
                    </ul>
                  </div>
                </div>
              <?php }
            ?>
            <div class="explore-main-wrapper  mt-2">
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow zoomIn delay-2000">
            <img class="map-img" src="<?php echo esc_html(get_theme_mod('vw_tourism_pro_explore_map_img')); ?>" alt="" >
        </div>
      </div>
  </div>
</section>
