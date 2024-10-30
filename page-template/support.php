<?php

/**
   * The Template for displaying Support.
   *
   * @package pest-control-treatment-pro
   */
  /**
   * Template Name: Support
  */

get_header();
get_template_part('template-parts/banner');

$img_bg = get_theme_mod('vw_tourism_pro_contact_page_image_bg');
if( get_theme_mod('vw_tourism_pro_contact_page_bg_color','') ) {
  $contactpage_backg = 'background-color:'.esc_attr(get_theme_mod('vw_tourism_pro_contact_page_bg_color','')).';';
}elseif( get_theme_mod('vw_tourism_pro_contact_page_bg_image','') ){
  $contactpage_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_tourism_pro_contact_page_bg_image')).'\')';
}else{
  $contactpage_backg = '';
}
$img_form_bg = get_theme_mod('vw_tourism_pro_contact_page_image_bg_setting');

if( get_theme_mod('vw_tourism_pro_contact_page_form_color','') ) {
  $contactpageform_backg = 'background-color:'.esc_attr(get_theme_mod('vw_tourism_pro_contact_page_form_color','')).';';
}elseif( get_theme_mod('vw_tourism_pro_contact_page_form_bg_image','') ){
  $contactpageform_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_tourism_pro_contact_page_form_bg_image')).'\')';
}else{
  $contactpageform_backg = '';
}


 ?>
 <section id="support-page" class="pb-0" >
   <div class="container">
      <div class="row">
        <div class="top-content">
            <?php the_content(); ?>
        </div>

      </div>
   </div>
 </section>
 <section id="contact-page" class="<?php echo esc_attr($img_bg); ?>" style="<?php echo esc_attr($contactpage_backg); ?>">
   	<div class="container">
       <div class="contact-page">
         <div class="row align-items-center">
             <div class="col-md-6">
                 <div class="contactpage-details" class="<?php echo esc_attr($img_form_bg); ?>" style="<?php echo esc_attr($contactpageform_backg); ?>">
                     <?php if(get_theme_mod('vw_tourism_pro_contactpage_form_title') != ''){ ?>
                       <h3 class=""><?php echo esc_html(get_theme_mod('vw_tourism_pro_contactpage_form_title')); ?></h3>
                     <?php } ?>
                     <?php if(get_theme_mod('vw_tourism_pro_contactpage_form_subtitle') != ''){ ?>
                       <p class="mb-0"><?php echo esc_html(get_theme_mod('vw_tourism_pro_contactpage_form_subtitle')); ?></p>
                     <?php } ?>

                     <div class="contactpage_map pt-2">
                       <?php do_action('vw_tourism_pro_before_map'); ?>
                         <section class="google-map text-center p-0" id="map">
                           <?php if ( get_theme_mod('vw_tourism_pro_address_latitude',true) != "" && get_theme_mod('vw_tourism_pro_address_longitude',true) != "" ) {?>
                             <embed width="100%" height="240" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=<?php echo esc_attr(get_theme_mod('vw_tourism_pro_address_latitude')); ?>,<?php echo esc_attr(get_theme_mod('vw_tourism_pro_address_longitude')); ?>&hl=es;z=14&amp;output=embed"></embed>
                           <?php }?>
                         </section>
                       <?php do_action('vw_tourism_pro_after_map'); ?>
                     </div>
                 </div>
               </div>
                 <div class="col-md-6">
           	   	<div class="contac_form">
                   <?php echo do_shortcode(get_theme_mod('vw_tourism_pro_contact_us_section_shortcode')); ?>
         		      </div>
     	         </div>
         </div>
       </div>
   </div>
 </section>
 <section id="faq-page">
 <div class="container">
     <div class="row">
       <h2 style="    font: 500 26px / 60px figtree;
    color: #000000;">FAQ's</h2>
      <div id="accordion">
            <div class="accordion" id="accordionExample">
             <?php
                $fcount = get_theme_mod("vw_tourism_pro_faq_number");
                for( $j = 1; $j <= $fcount; $j++ ) {
                  ?>
                <div class="accordion-item">
                 <div class="accordion-header" id="heading<?php echo esc_attr($j); ?>">
                   <a class="accordion-button <?php if( $j != 1 ) { echo "collapsed"; } ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo esc_attr($j); ?>" aria-expanded="true" aria-controls="collapse<?php echo esc_attr($j); ?>">
                       <?php echo esc_html(get_theme_mod('vw_tourism_pro_faq_que'.$j)); ?>
                   </a>
                 </div>
                 <div id="collapse<?php echo esc_attr($j);?>" class="accordion-collapse collapse <?php if( $j == 1 ) { echo "show"; } ?>" aria-labelledby="heading<?php echo esc_attr($j); ?>" data-bs-parent="#accordionExample" id="collapse<?php echo esc_attr($j);?>">
                    <div class="accordion-body">
                       <?php echo esc_html(get_theme_mod('vw_tourism_pro_faq_ans'.$j)); ?>
                    </div>
                 </div>
                </div>
               <?php } ?>
              </div>
          </div>

   </div>
 </div>
 </section>
<?php get_footer(); ?>
