<?php
/**
 * Template Name: Contact
*/
get_header(); get_template_part( 'template-parts/banner' );

$img_bg = get_theme_mod('vw_tourism_pro_contact_page_image_bg');
if( get_theme_mod('vw_tourism_pro_contact_page_bg_color','') ) {
  $contactpage_backg = 'background-color:'.esc_attr(get_theme_mod('vw_tourism_pro_contact_page_bg_color','')).';';
}elseif( get_theme_mod('vw_tourism_pro_contact_page_bg_image','') ){
  $contactpage_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_tourism_pro_contact_page_bg_image')).'\')';
}else{
  $contactpage_backg = '';
}
$img_bg = get_theme_mod('vw_tourism_pro_contact_page_image_bg');

if( get_theme_mod('vw_tourism_pro_contact_page_form_color','') ) {
  $contactpageform_backg = 'background-color:'.esc_attr(get_theme_mod('vw_tourism_pro_contact_page_form_color','')).';';
}elseif( get_theme_mod('vw_tourism_pro_contact_page_form_bg_image','') ){
  $contactpageform_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_tourism_pro_contact_page_form_bg_image')).'\')';
}else{
  $contactpageform_backg = '';
}
?>
<?php do_action('vw_tourism_pro_before_contact_title'); ?>
<section id="contact-page" class="<?php echo esc_attr($img_bg); ?>" style="<?php echo esc_attr($contactpage_backg); ?>">
   <div class="container">
      <div class="contact-page">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="contactpage-details" class="<?php echo esc_attr($img_form_bg); ?>" style="<?php echo esc_attr($contactpageform_backg); ?>">
                    <?php if(get_theme_mod('vw_tourism_pro_contactpage_form_title') != ''){ ?>
                      <h3 class="text-md-start text-center"><?php echo esc_html(get_theme_mod('vw_tourism_pro_contactpage_form_title')); ?></h3>
                    <?php } ?>
                    <?php if(get_theme_mod('vw_tourism_pro_contactpage_form_subtitle') != ''){ ?>
                      <p class="mb-0 text-md-start text-center"><?php echo esc_html(get_theme_mod('vw_tourism_pro_contactpage_form_subtitle')); ?></p>
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
<?php do_action('vw_tourism_pro_before_footer'); ?>

<?php get_footer(); ?>
