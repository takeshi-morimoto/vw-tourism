
<div id="footer-top-contact">
  <div class="container">
  	<div class="row justify-content-end">
      <div class="col-lg-8 col-md-12 ">
          <div class="row footer-top-inner">
              <?php
                $abt_point = get_theme_mod("vw_tourism_pro_footer_contact_number");
                for( $j = 1; $j <= $abt_point; $j++ ) {
                ?>
                  <div class="col-lg-4 col-md-4  col-sm-6 footer-con-col">
                    <div class="footer-con-box">
                      <div class="d-flex align-items-center gap-2 justify-content-md-start justify-content-sm-center justify-content-center">
                        <div class="flex-shrink-0 ">
                          <div class="footer-con-box-img-wrapper">
                            <?php if(get_theme_mod('vw_tourism_pro_footer_contact_img'.$j)!=''){ ?>
                              <img src="<?php echo esc_html(get_theme_mod('vw_tourism_pro_footer_contact_img'.$j)); ?>">
                            <?php } ?>
                          </div>
                        </div>
                        <div class="flex-grow-0 ms-2 text-lg-start text-xl-start text-md-start text-center">
                          <?php if(get_theme_mod('vw_tourism_pro_footer_contact_title'.$j)!=''){ ?>
                            <h5 class=""><?php echo esc_html(get_theme_mod('vw_tourism_pro_footer_contact_title'.$j)); ?></h5>
                          <?php } ?>
                          <?php if(get_theme_mod('vw_tourism_pro_footer_contact_para'.$j)!=''){

                            if ($j == 1) { ?>
                              <a  class="contact-text phone-text" href="tel:<?php echo esc_html(get_theme_mod('vw_tourism_pro_footer_contact_para'.$j)); ?>">
                            <?php } elseif ($j == 2) { ?>
                              <a  class="contact-text contact-email" href="mailto:<?php echo esc_html(get_theme_mod('vw_tourism_pro_footer_contact_para'.$j)); ?>">
                            <?php } else { ?>
                              <a target="_blank" class="contact-text" href="https://maps.google.com/?q=58250<?php echo esc_textarea(get_theme_mod('vw_tourism_pro_footer_contact_para'.$j)); ?>" target="_blank">
                            <?php }
                             ?>
                            <p class=" mb-0"><?php echo esc_html(get_theme_mod('vw_tourism_pro_footer_contact_para'.$j)); ?></p>
                            </a>
                          <?php } ?>
                        </div>
                      </div>
                    </div>
                  </div>
              <?php } ?>

          </div>
      </div>
  	</div>
  </div>
</div>
