<?php
$section_hide = get_theme_mod( 'vw_tourism_pro_popular_destination_enabledisable' );
if ( 'Disable' == $section_hide ) {
  return;
}
if( get_theme_mod('vw_tourism_pro_popular_destination_bgcolor','') ) {
  $destination_bg = 'background-color:'.esc_attr(get_theme_mod('vw_tourism_pro_popular_destination_bgcolor','')).';';
}elseif( get_theme_mod('vw_tourism_pro_popular_destination_bgimage','') ){
  $destination_bg = 'background-image:url(\''.esc_url(get_theme_mod('vw_tourism_pro_popular_destination_bgimage')).'\')';
}else{
  $destination_bg = '';
}
$img_bg = get_theme_mod('vw_tourism_pro_popular_destination_bg_attachment');
?>
<section id="popular-destination" style="<?php echo esc_attr($destination_bg); ?>" class="<?php echo esc_attr($img_bg); ?>" >
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-8">
        <?php if(get_theme_mod('vw_tourism_pro_popular_destination_sub_heading')!=''){ ?>
          <p class="sec-sub-heading mb-0"><?php echo esc_html(get_theme_mod('vw_tourism_pro_popular_destination_sub_heading')); ?></p>
        <?php } ?>
        <?php if(get_theme_mod('vw_tourism_pro_popular_destination_heading')!=''){ ?>
          <h2 class="sec-heading"><?php echo esc_html(get_theme_mod('vw_tourism_pro_popular_destination_heading')); ?></h2>
        <?php } ?>
      </div>
    </div>

    <div class="swiper">
      <div class="swiper-wrapper">
      <?php
        $destinations = get_terms( array(
            'taxonomy'   => 'tcp_destination',
            'hide_empty' => false,
        ) );

            foreach ($destinations as $destination) {
                $term_id = $destination->term_id;
                $term_name = $destination->name;

                // $destination_image = get_term_meta( $term_id, 'destination-image', true );
                $destination_type = get_term_meta( $term_id, 'destination_type', true );
                ?>
                <div class="swiper-slide">
                  <div class="desti-img position-relative">
                    <?php
                     $thumbnail_url = get_term_meta($destination->term_id, 'destination_image', true);
                     echo "<img src='{$thumbnail_url}' class='w-100' alt='' />";
                     ?>
                  </div>

                   <div class="destination-contents">
                     <a href="<?php echo esc_attr( esc_url( get_category_link( $destination->term_id ) ) ) ?>">
                       <?php	echo $term_name;  ?>
                     </a>
                     <div class="d-flex gap-2 align-items-center justify-content-center">
                       <div class="line-before"></div>
                        <h6 class="desti-type"> <?php	echo $destination_type;  ?></h6>
                       <div class="line-after"></div>
                     </div>

                   </div>


                </div>

            <?php }

             ?>

           </div>
           <div class="swiper-button-prev"></div>
   <div class="swiper-button-next"></div>
    </div>
</section>
<style media="screen">
.swiper {
/* width: 100%; */
padding-top: 3.125rem;
}

/* .swiper-slide {
width: 18.75rem;
height: 28.125rem;
display: flex;
flex-direction: column;
justify-content: end;
align-items: self-start;
} */
</style>
