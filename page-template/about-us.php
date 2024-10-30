<?php
/**
 * Template Name:About Us Template
 *
 *
 */

get_header(); get_template_part( 'template-parts/banner' );

if( get_theme_mod('vw_tourism_pro_aboutpage_bgcolor','') ) {
 $about_page_back = 'background-color:'.esc_attr(get_theme_mod('vw_tourism_pro_aboutpage_bgcolor','')).';';
}elseif( get_theme_mod('vw_tourism_pro_aboutpage_bgimage','') ){
 $about_page_back = 'background-image:url(\''.esc_url(get_theme_mod('vw_tourism_pro_aboutpage_bgimage')).'\')';
}else{
 $about_page_back='';
}
?>

<div id="about-page-main">
  <section id="vission-mission" class="pb-0 wow fadeInUp delay-4000">
    <div class="container">
      <div class="row">
         <div class="col-lg-6">
           <?php if(get_theme_mod('vw_tourism_pro_aboutpage_mission_heading')!=''){ ?>
             <h5 class=" text-lg-start text-md-start text-sm-center text-center "><?php echo esc_html(get_theme_mod('vw_tourism_pro_aboutpage_mission_heading')); ?></h5>
           <?php } ?>
           <?php if(get_theme_mod('vw_tourism_pro_aboutpage_mission_paragraph')!=''){ ?>
             <p class="text-lg-start text-md-start text-sm-center text-center py-3 mb-0 abt-page-para"><?php echo esc_html(get_theme_mod('vw_tourism_pro_aboutpage_mission_paragraph')); ?></p>
           <?php } ?>
         </div>
         <div class="col-lg-6">
           <?php if(get_theme_mod('vw_tourism_pro_aboutpage_story_heading')!=''){ ?>
             <h5 class=" text-lg-start text-md-start text-sm-center text-center"><?php echo esc_html(get_theme_mod('vw_tourism_pro_aboutpage_story_heading')); ?></h5>
           <?php } ?>
           <?php if(get_theme_mod('vw_tourism_pro_aboutpage_story_paragraph')!=''){ ?>
             <p class="text-lg-start text-md-start text-sm-center text-center py-3 mb-0 abt-page-para"><?php echo esc_html(get_theme_mod('vw_tourism_pro_aboutpage_story_paragraph')); ?></p>
           <?php } ?>
         </div>
       </div>
    </div>
  </section>
    <?php get_template_part('template-parts/home/section-about'); ?>
  <section id="vision-two" class="pt-0 wow fadeInUp delay-1000">
      <div class="container">
        <div class="row pt-md-3 mt-md-3">
          <div class="col-lg-6">
            <?php if(get_theme_mod('vw_tourism_pro_aboutpage_vission_heading')!=''){ ?>
             <h5 class=" text-lg-start text-md-start text-sm-center text-center"><?php echo esc_html(get_theme_mod('vw_tourism_pro_aboutpage_vission_heading')); ?></h5>
            <?php } ?>
            <?php if(get_theme_mod('vw_tourism_pro_aboutpage_vission_paragraph')!=''){ ?>
             <p class=" text-lg-start text-md-start text-sm-center text-center py-3 abt-page-para"><?php echo esc_html(get_theme_mod('vw_tourism_pro_aboutpage_vission_paragraph')); ?></p>
            <?php } ?>
            <div class="vision-points">
             <?php if(get_theme_mod('vw_tourism_pro_aboutpage_vission_point_one') != ''){ ?>
               <p class="position-relative ps-4 abt-page-para"><?php echo esc_html(get_theme_mod('vw_tourism_pro_aboutpage_vission_point_one')); ?></p>
             <?php } ?>
             <?php if(get_theme_mod('vw_tourism_pro_aboutpage_vission_point_two') != ''){ ?>
               <p class="position-relative ps-4 abt-page-para"><?php echo esc_html(get_theme_mod('vw_tourism_pro_aboutpage_vission_point_two')); ?></p>
             <?php } ?>
            </div>
        </div>
          <div class="col-lg-6">
            <div class="row">
               <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                 <div class="abt-img-effect">
                   <?php if ( get_theme_mod('vw_tourism_pro_aboutpage_vission_img_one') != "" ) {?>
                         <img class="mb-sm-2 mb-3" style="border-radius:15px;" src="<?php echo esc_url(get_theme_mod('vw_tourism_pro_aboutpage_vission_img_one')); ?>">
                       <?php } ?>
                 </div>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="abt-img-effect">
                     <?php if ( get_theme_mod('vw_tourism_pro_aboutpage_vission_img_two') != "" ) {?>
                       <img class="mb-sm-2  mb-3" style="border-radius:15px;" src="<?php echo esc_url(get_theme_mod('vw_tourism_pro_aboutpage_vission_img_two')); ?>">
                     <?php } ?>
                   </div>
               </div>
            </div>
          </div>
      </div>
      <div class="row pt-md-3 mt-md-3  wow fadeInUp delay-1000">
       <div class="col-lg-6">
         <?php if(get_theme_mod('vw_tourism_pro_aboutpage_our_value_heading')!=''){ ?>
           <h5 class=" text-lg-start text-md-start text-sm-center text-center"><?php echo esc_html(get_theme_mod('vw_tourism_pro_aboutpage_our_value_heading')); ?></h5>
         <?php } ?>
         <?php if(get_theme_mod('vvw_tourism_pro_aboutpage_our_value_paragraph')!=''){ ?>
           <p class="text-lg-start text-md-start text-sm-center text-center abt-page-para py-3 "><?php echo esc_html(get_theme_mod('vvw_tourism_pro_aboutpage_our_value_paragraph')); ?></p>
         <?php } ?>
       </div>
       <div class="col-lg-6">
         <?php if(get_theme_mod('vw_tourism_pro_aboutpage_our_resource_heading')!=''){ ?>
           <h5 class=" text-lg-start text-md-start text-sm-center text-center"><?php echo esc_html(get_theme_mod('vw_tourism_pro_aboutpage_our_resource_heading')); ?></h5>
         <?php } ?>
         <?php if(get_theme_mod('vw_tourism_pro_aboutpage_our_resource_paragraph')!=''){ ?>
           <p class="text-lg-start text-md-start text-sm-center text-center abt-page-para py-3 "><?php echo esc_html(get_theme_mod('vw_tourism_pro_aboutpage_our_resource_paragraph')); ?></p>
         <?php } ?>
       </div>
     </div>
     <div class="row pt-md-3 mt-md-3  wow fadeInUp delay-1000">
        <div class="col-lg-6">
            <div class="abt-img-effect">
              <?php if ( get_theme_mod('vw_tourism_pro_aboutpage_about_section_feature_img') != "" ) {?>
                <img class="mb-sm-2  mb-3 w-100" style="border-radius:15px;" src="<?php echo esc_url(get_theme_mod('vw_tourism_pro_aboutpage_about_section_feature_img')); ?>">
              <?php } ?>
            </div>
        </div>
        <div class="col-lg-6">
          <?php if(get_theme_mod('vw_tourism_pro_aboutpage_about_section_feature_heading')!=''){ ?>
            <h5 class=" text-lg-start text-md-start text-sm-center text-center"><?php echo esc_html(get_theme_mod('vw_tourism_pro_aboutpage_about_section_feature_heading')); ?></h5>
          <?php } ?>
          <?php if(get_theme_mod('vw_tourism_pro_aboutpage_about_section_feature_paragraph')!=''){ ?>
            <p class=" text-lg-start text-md-start text-sm-center text-center py-3 abt-page-para"><?php echo esc_html(get_theme_mod('vw_tourism_pro_aboutpage_about_section_feature_paragraph')); ?></p>
          <?php } ?>
          <div class="vision-points">
              <?php if(get_theme_mod('vw_tourism_pro_aboutpage_about_section_feature_point_one') != ''){ ?>
                <p class="position-relative ps-4 abt-page-para"><?php echo esc_html(get_theme_mod('vw_tourism_pro_aboutpage_about_section_feature_point_one')); ?></p>
              <?php } ?>
              <?php if(get_theme_mod('vw_tourism_pro_aboutpage_about_section_feature_point_two') != ''){ ?>
                <p class="position-relative ps-4 abt-page-para"><?php echo esc_html(get_theme_mod('vw_tourism_pro_aboutpage_about_section_feature_point_two')); ?></p>
            <?php } ?>
          </div>
      </div>
    </div>
    </div>
  </section>
  <?php get_template_part('template-parts/home/section-testimonial'); ?>
  <div id="about-gallery" class="wow fadeInUp delay-1000">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 align-self-end">
            <div class="abt-img-effect">
              <?php if ( get_theme_mod('vw_tourism_pro_aboutpage_gallery_img_one') != "" ) {?>
                <img class="w-100 mb-md-0 mb-2 " style="border-radius: 10px;"  src="<?php echo esc_url(get_theme_mod('vw_tourism_pro_aboutpage_gallery_img_one')); ?>">
              <?php } ?>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 align-self-end">
            <div class="abt-img-effect">
              <?php if ( get_theme_mod('vw_tourism_pro_aboutpage_gallery_img_two') != "" ) {?>
              <img class="w-100 mb-md-0 mb-2 gallery-two" style="border-radius: 10px;" src="<?php echo esc_url(get_theme_mod('vw_tourism_pro_aboutpage_gallery_img_two')); ?>">
              <?php } ?>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 align-self-end">
          <div class="abt-img-effect">
            <?php if ( get_theme_mod('vw_tourism_pro_aboutpage_gallery_img_three') != "" ) {?>
              <img class="w-100 mb-md-0 mb-2" style="border-radius: 10px;" src="<?php echo esc_url(get_theme_mod('vw_tourism_pro_aboutpage_gallery_img_three')); ?>">
            <?php } ?>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 align-self-end">
          <div class="abt-img-effect">
            <?php if ( get_theme_mod('vw_tourism_pro_aboutpage_gallery_img_four') != "" ) {?>
              <img class="w-100 gallery-four" style="border-radius: 10px; " src="<?php echo esc_url(get_theme_mod('vw_tourism_pro_aboutpage_gallery_img_four')); ?>">
            <?php } ?>
          </div>

        </div>
      </div>
    </div>
</div>
</div>




<?php get_footer(); ?>
