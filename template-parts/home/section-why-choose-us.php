<?php
/**
 * Template part for displaying About
 *
 * @package vw-tourism-pro
 */

$section_hide = get_theme_mod( 'vw_tourism_pro_why_choose_us_enable' );
if ( 'Disable' == $section_hide ) {
  return;
}
if( get_theme_mod('vw_tourism_pro_why_choose_us_bgcolor','') ) {
 $why_choose_back = 'background-color:'.esc_attr(get_theme_mod('vw_tourism_pro_why_choose_us_bgcolor','')).';';
}elseif( get_theme_mod('vw_tourism_pro_why_choose_us_bgimage','') ){
 $why_choose_back = 'background-image:url(\''.esc_url(get_theme_mod('vw_tourism_pro_why_choose_us_bgimage')).'\')';
}else{
 $why_choose_back='';
}
$img_bg = get_theme_mod('vw_tourism_pro_why_choose_us_bgimage_setting');
?>
<section id="why-choose" style="<?php echo esc_attr($why_choose_back); ?>" class="<?php echo esc_attr($img_bg); ?> pb-0">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-4  wow zoomIn delay-2000">
        <div class="d-flex flex-column gap-2">
        <?php if(get_theme_mod('vw_tourism_pro_why_choose_us_sub_heading')!=''){ ?>
          <p class="sec-sub-heading text-lg-start text-md-center text-center"><?php echo esc_html(get_theme_mod('vw_tourism_pro_why_choose_us_sub_heading')); ?></p>
        <?php } ?>
        <?php if(get_theme_mod('vw_tourism_pro_why_choose_us_heading')!=''){ ?>
          <h2 class="sec-heading text-lg-start text-md-center text-center"><?php echo esc_html(get_theme_mod('vw_tourism_pro_why_choose_us_heading')); ?></h2>
        <?php } ?>
        <?php if(get_theme_mod('vw_tourism_pro_why_choose_us_paragraph')!=''){ ?>
          <p class="choose-para text-lg-start text-md-center text-center mb-0"><?php echo esc_html(get_theme_mod('vw_tourism_pro_why_choose_us_paragraph')); ?></p>
        <?php } ?>
        <div class="circle-progress-bar row mt-4">
        <?php $number = get_theme_mod('vw_tourism_pro_why_choose_circle_number');
         for ($i=1; $i <= $number ; $i++) { ?>
           <div class="col-lg-5 col-md-4 col-sm-6 col-6">
             <div class="chart" data-percent="<?php echo esc_attr(get_theme_mod('vw_tourism_pro_why_choose_circle_progress_count'.$i)); ?>" data-scale-color="<?php echo get_theme_mod('vw_tourism_pro_why_choose_us_percentage_circle_color', '#00a3eb'); ?>">
               <p class="number"><?php echo esc_html(get_theme_mod('vw_tourism_pro_why_choose_circle_progress_count'.$i)); ?>%</p></div>
             <h6 class="progress-text mt-2"><?php echo esc_html(get_theme_mod('vw_tourism_pro_why_choose_circle_progress_title'.$i)); ?></h6>

             こんにちは、私は<?php echo esc_html(get_theme_mod('vw_tourism_pro_why_choose_circle_progress_title'.$i)); ?>です。
            </div>

        <?php } ?>
        </div>
                </div>
      </div>
      <div class="col-lg-4 col-md-6  pt-lg-0 pt-md-4 wow fadeInDown delay-2000">
        <img class="about-img" src="<?php echo esc_html(get_theme_mod('vw_tourism_pro_why_choose_us_girl_img')); ?>" alt="">
      </div>
        <div class="col-lg-4 col-md-6 pt-lg-0 pt-md-4 choose-right-content-main  wow zoomIn delay-2000">
        <?php
          $abt_point = get_theme_mod("vw_tourism_pro_why_choose_us_number");
          for( $j = 1; $j <= $abt_point; $j++ ) {
          ?>
          <div class="why-choose-right-box mb-lg-4 mb-md-3 mb-3">
            <div class="d-flex gap-3">
              <div class="flex-shrink-0">
                <div class="why-choose-img-wrapper">
                  <?php if(get_theme_mod('vw_tourism_pro_why_choose_us_img'.$j)!=''){ ?>
                    <img src="<?php echo esc_html(get_theme_mod('vw_tourism_pro_why_choose_us_img'.$j)); ?>">
                  <?php } ?>
                </div>
              </div>
              <div class="flex-grow-0 text-lg-start text-xl-start text-md-start text-center">
                <?php if(get_theme_mod('vw_tourism_pro_why_choose_us_title'.$j)!=''){ ?>
                  <h5 class=""><?php echo esc_html(get_theme_mod('vw_tourism_pro_why_choose_us_title'.$j)); ?></h5>
                <?php } ?>
                <?php if(get_theme_mod('vw_tourism_pro_why_choose_us_para'.$j)!=''){ ?>
                  <p class="mt-2"><?php echo esc_html(get_theme_mod('vw_tourism_pro_why_choose_us_para'.$j)); ?></p>
                <?php } ?>
              </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" width="354" height="2" viewBox="0 0 354 2">
                <line id="why_choose_" data-name="why choose " x2="354" transform="translate(0 1)" fill="none" stroke="#112542" stroke-width="2" stroke-dasharray="10"/>
              </svg>
          </div>


        <?php } ?>
      </div>
    </div>
  </div>
</section>
