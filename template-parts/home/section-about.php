<?php
/**
 * Template part for displaying About
 *
 * @package vw-tourism-pro
 */

$section_hide = get_theme_mod( 'vw_tourism_pro_about_enable' );
if ( 'Disable' == $section_hide ) {
  return;
}
if( get_theme_mod('vw_tourism_pro_about_bgcolor','') ) {
 $about_back = 'background-color:'.esc_attr(get_theme_mod('vw_tourism_pro_about_bgcolor','')).';';
}elseif( get_theme_mod('vw_tourism_pro_about_bgimage','') ){
 $about_back = 'background-image:url(\''.esc_url(get_theme_mod('vw_tourism_pro_about_bgimage')).'\')';
}else{
 $about_back='';
}
$img_bg = get_theme_mod('vw_tourism_pro_about_bgimage_setting');



?>
<section id="about" style="<?php echo esc_attr($about_back); ?>" class="<?php echo esc_attr($img_bg); ?> pb-0">
    <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 wow zoomIn delay-2000">
            <div class="d-flex flex-column gap-2">
            <?php if(get_theme_mod('vw_tourism_pro_about_sub_heading')!=''){ ?>
              <p class="sec-sub-heading mb-0 text-md-start text-sm-center text-center"><?php echo esc_html(get_theme_mod('vw_tourism_pro_about_sub_heading')); ?></p>
            <?php } ?>
            <?php if(get_theme_mod('vw_tourism_pro_about_heading')!=''){ ?>
              <h2 class="sec-heading text-md-start text-sm-center text-center"><?php echo esc_html(get_theme_mod('vw_tourism_pro_about_heading')); ?></h2>
            <?php } ?>
            <?php if(get_theme_mod('vw_tourism_pro_about_paragraph')!=''){ ?>
              <p class="mb-0 text-md-start text-sm-center text-center abtpara"><?php echo esc_html(get_theme_mod('vw_tourism_pro_about_paragraph')); ?></p>
            <?php } ?>
            <div class="row mt-sm-2 mt-2">
              <?php
                $abt_point = get_theme_mod("vw_tourism_pro_about_points_number");
                for( $j = 1; $j <= $abt_point; $j++ ) {
                ?>
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="d-flex mb-lg-2 mb-md-2 mb-3 align-items-center gap-2 justify-content-md-start justify-content-sm-center justify-content-center">
                    <?php if(get_theme_mod('vw_tourism_pro_about_points_check_icon'.$j)!=''){ ?>
                      <i class="abt-icon <?php echo esc_html(get_theme_mod('vw_tourism_pro_about_points_check_icon'.$j)); ?>"></i>
                    <?php } ?>
                    <?php if(get_theme_mod('vw_tourism_pro_about_points_title'.$j)!=''){ ?>
                      <h6 class="abt-points"><?php echo esc_html(get_theme_mod('vw_tourism_pro_about_points_title'.$j)); ?></h6>
                    <?php } ?>
                  </div>
                </div>
              <?php } ?>
            </div>
            <hr>
            <div class="about-bottom d-flex align-items-center gap-4 justify-content-md-start justify-content-sm-center justify-content-center">

              <a class="theme-btn-main" href="<?php echo esc_html(get_theme_mod('vw_tourism_pro_about_view_more_btn_url')); ?>">
                <div class="theme-btn-block">
                    <span class="theme-btn-line-left"></span>
                          <span class="theme-btn-text"><?php echo esc_html(get_theme_mod('vw_tourism_pro_about_view_more_btn'));?></span>
                     <span class="theme-btn-line-right"></span>
                    <i class="fa-solid fa-caret-down"></i>
                  </div>
              </a>

              <div class="d-flex align-items-center gap-2">
                <div class="flex-shrink-0">
                  <div class="ceo-img-wrapper">
                    <?php if (get_theme_mod('vw_tourism_pro_about_ceo_img') != ''){ ?>
                        <img class="rounded-circle" src="<?php echo esc_url(get_theme_mod('vw_tourism_pro_about_ceo_img')) ?>" alt="">
                    <?php } ?>
                  </div>
                </div>
                <div class="flex-grow-0  text-lg-start text-xl-start text-md-start text-center">
                  <?php if (get_theme_mod('vw_tourism_pro_about_ceo_heading') != ''): ?>
                   <h4 class="mb-0 ceo-title"><?php echo esc_html(get_theme_mod('vw_tourism_pro_about_ceo_heading')); ?></h4>
                 <?php endif; ?>
                 <?php if (get_theme_mod('vw_tourism_pro_about_ceo_text') != ''): ?>
                  <p class="mb-0 ceo-para"><?php echo esc_html(get_theme_mod('vw_tourism_pro_about_ceo_text')); ?></p>
                <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
              </div>
          <div class="col-lg-5 col-sm-8 wow fadeInDown delay-2000">
              <img class="about-img" src="<?php echo esc_html(get_theme_mod('vw_tourism_pro_about_middle_img')); ?>" alt="">
          </div>
          <div class="col-lg-2 col-sm-4 wow zoomIn delay-2000">
            <div class="about-right-content">
                <?php
                  for($i=1;$i<=2;$i++)
                {
                ?>
                  <div class="about-right-content-one text-md-start text-sm-center text-center d-flex flex-column gap-2">
                    <?php if ( get_theme_mod('vw_tourism_pro_about_counter_image',true) != "" ) { ?>
                      <img class="about-right-img" src="<?php echo esc_url(get_theme_mod('vw_tourism_pro_about_counter_image'.$i)); ?>">
                    <?php } ?>
                    <div class="d-flex justify-content-md-start justify-content-sm-center justify-content-center">
                      <?php if(get_theme_mod('vw_tourism_pro_about_counter_no'.$i)!=''){ ?>
                        <h4 class="counter1-up"><?php echo esc_html(get_theme_mod('vw_tourism_pro_about_counter_no'.$i)); ?>
                        </h4>
                      <?php } if(get_theme_mod('vw_tourism_pro_about_counter_no_suffix'.$i)!=''){ ?><h4 class="counter_suffix p-0">
                        <?php echo esc_html(get_theme_mod('vw_tourism_pro_about_counter_no_suffix'.$i)); ?>
                      </h4>
                      <?php } ?>
                    </div>
                    <?php if(get_theme_mod('vw_tourism_pro_about_counter_title'.$i)!=''){ ?>
                      <p class=""><?php echo esc_html(get_theme_mod('vw_tourism_pro_about_counter_title'.$i)); ?></p>
                    <?php } ?>
                    <hr/>
                </div>
              <?php } ?>
            </div>
          </div>
        </div>
    </div>

</section>
