<?php
/**
 * The Template for displaying Support.
 *
 * @package pest-control-treatment-pro
 */
/**
 * Template Name: Registration Form
*/
get_header();
get_template_part('template-parts/banner');

set_theme_mod("vw_tourism_pro_registration_heading","Tour Reservation Form");
set_theme_mod("vw_tourism_pro_registration_para","Let's know what you are interested to see!");
?>
<section id="registation-form">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="registation-form-inner">
              <?php if(get_theme_mod('vw_tourism_pro_registration_heading')!=''){ ?>
                <h2 class="text-center regi-heading"><?php echo esc_html(get_theme_mod('vw_tourism_pro_registration_heading')); ?></h2>
              <?php } ?>
              <?php if(get_theme_mod('vw_tourism_pro_registration_para')!=''){ ?>
                <p class="sub-heading text-center"><?php echo esc_html(get_theme_mod('vw_tourism_pro_registration_para')); ?><p>
              <?php } ?>
              <?php echo do_shortcode(get_theme_mod('vw_tourism_pro_registration_form_shortcode')); ?>
            </div>
          </div>
      </div>
  </div>
</section>




<?php get_footer(); ?>
