<?php
$section_hide = get_theme_mod( 'vw_tourism_pro_activity_enabledisable' );
if ( 'Disable' == $section_hide ) {
  return;
}
if( get_theme_mod('vw_tourism_pro_activity_bgcolor','') ) {
  $activity_bg = 'background-color:'.esc_attr(get_theme_mod('vw_tourism_pro_activity_bgcolor','')).';';
}elseif( get_theme_mod('vw_tourism_pro_activity_bgimage','') ){
  $activity_bg = 'background-image:url(\''.esc_url(get_theme_mod('vw_tourism_pro_activity_bgimage')).'\')';
}else{
  $activity_bg = '';
}
$img_bg = get_theme_mod('vw_tourism_pro_activity_bg_attachment');


?>

<section id="activity" style="<?php echo esc_attr($activity_bg); ?>" class="<?php echo esc_attr($img_bg); ?> pb-0" >
  <div class="container" >
    <div class="row">
      <?php if(get_theme_mod('vw_tourism_pro_activity_sub_heading')!=''){ ?>
        <p class="sec-sub-heading text-center"><?php echo esc_html(get_theme_mod('vw_tourism_pro_activity_sub_heading')); ?></p>
      <?php } ?>
      <?php if(get_theme_mod('vw_tourism_pro_activity_heading')!=''){ ?>
        <h2 class="sec-heading text-center"><?php echo esc_html(get_theme_mod('vw_tourism_pro_activity_heading')); ?><h2>
      <?php } ?>
    </div>
    <div class="row">
        <?php

          $categories = get_terms( array(
              'taxonomy'   => 'tcp_category',
              'hide_empty' => false,
          ) );
          foreach ($categories as $key => $category) {
              $term_id = $category->term_id;
              $term_name = $category->name;
              $term_desc = $category->description;
                  $number_with_zero = sprintf("%02d", $key+1);
              ?>
              <div class="col-lg-4 col-sm-6 col-12 mt-md-5 mt-sm-3  mt-3 position-relative wow slideInLeft delay-2000">
                <div class="activity-box-main">
                  <span class="activity-no"><?php echo esc_html($number_with_zero); ?></span>
                  <div class="d-flex  gap-2">
                    <div class="flex-shrink-0 text-center" style="width: 60px;">
                      <?php
                       $thumbnail_url = get_term_meta($category->term_id, 'category_image', true);
                       echo "<img src='{$thumbnail_url}' class='activity-img' alt='' />";
                       ?>
                    </div>
                      <div class="flex-grow-0 ms-2 text-lg-start text-xl-start text-md-start text-sm-start  text-center">
                        <a class="activity-title" href="<?php echo esc_attr( esc_url( get_category_link( $category->term_id ) ) ) ?>">
                          <?php	echo $term_name;  ?>
                        </a>
                        <p class="activity-para mb-0"><?php echo $term_desc; ?></p>
                      </div>
                    </div>
                  </div>
                </div>

        <?php } ?>
      </div>
      </div>
  </div>
</section>
