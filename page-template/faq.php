<?php
/**
 * Template Name:Faq Template
 *
 *
 */

get_header(); get_template_part( 'template-parts/banner' );

if( get_theme_mod('vw_tourism_pro_faq_page_bgcolor','') ) {
 $faq_back = 'background-color:'.esc_attr(get_theme_mod('vw_tourism_pro_faq_page_bgcolor','')).';';
}elseif( get_theme_mod('vw_tourism_pro_faq_page_bgimage','') ){
 $faq_back = 'background-image:url(\''.esc_url(get_theme_mod('vw_tourism_pro_faq_page_bgimage')).'\')';
}else{
 $faq_back='';
}
$img_bg = get_theme_mod('vw_tourism_pro_aboutpage_bg_attachment');
?>
<section id="faq"  class="<?php echo esc_attr($img_bg); ?>" style="<?php echo esc_attr($faq_back); ?>">
    <div class="container">
      <div class="row">
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
