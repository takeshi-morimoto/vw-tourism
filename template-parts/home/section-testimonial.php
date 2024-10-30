<?php
$section_hide = get_theme_mod( 'vw_tourism_pro_testimonial_enabledisable' );
if ( 'Disable' == $section_hide ) {
  return;
}
if( get_theme_mod('vw_tourism_pro_testimonial_bgcolor','') ) {
  $testi_bg = 'background-color:'.esc_attr(get_theme_mod('vw_tourism_pro_testimonial_bgcolor','')).';';
}elseif( get_theme_mod('vw_tourism_pro_testimonial_bgimage','') ){
  $testi_bg = 'background-image:url(\''.esc_url(get_theme_mod('vw_tourism_pro_testimonial_bgimage')).'\')';
}else{
  $testi_bg = '';
}
$img_bg = get_theme_mod('vw_tourism_pro_testimonial_bg_attachment');

$args = array(
  'post_type' => 'testimonial',
  'post_status' => 'publish',
  'posts_per_page'=> get_theme_mod('vw_tourism_pro_testimonials_number',4)
);
$new = new WP_Query($args);
 set_theme_mod( 'vw_tourism_pro_testimonial_paragraph', "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book." );
?>
<section id="testimonial" style="<?php echo esc_attr($testi_bg); ?>" class="<?php echo esc_attr($img_bg); ?>  position-relative pb-0" >
  <div class="container wow zoomIn delay-2000">
    <svg class="test-comment-svg" xmlns="http://www.w3.org/2000/svg" width="331.47" height="273.167" viewBox="0 0 341.47 273.167">
      <path id="comments-regular" d="M47.047,164.914a25.609,25.609,0,0,0-4-29.771C31.681,123.192,25.6,108.84,25.6,93.9c0-33.879,34.039-68.292,85.365-68.292S196.329,60.022,196.329,93.9s-34.039,68.292-85.365,68.292A107.316,107.316,0,0,1,90.8,160.272a25.58,25.58,0,0,0-16.379,2.241q-3.281,1.681-6.722,3.2a174.106,174.106,0,0,1-26.623,9.6c1.494-2.454,2.881-4.855,4.215-7.256.587-1.014,1.174-2.081,1.707-3.148ZM-.01,93.9c0,22.3,9.177,42.736,24.489,58.848-.48.907-1.014,1.867-1.494,2.721a148.15,148.15,0,0,1-19.527,27.8,12.822,12.822,0,0,0,9.337,21.608c22.942,0,46.15-7.1,65.464-15.846,2.561-1.174,5.122-2.4,7.576-3.628a129.091,129.091,0,0,0,25.129,2.4c61.3,0,110.974-42.042,110.974-93.9S172.266,0,110.964,0-.01,42.042-.01,93.9ZM230.474,256.094a133.793,133.793,0,0,0,25.129-2.4c2.454,1.227,5.015,2.454,7.576,3.628,19.314,8.75,42.522,15.846,65.464,15.846a12.778,12.778,0,0,0,9.283-21.555,153.254,153.254,0,0,1-19.527-27.8c-.48-.907-1.014-1.814-1.494-2.721,15.366-16.166,24.542-36.6,24.542-58.9,0-50.365-46.9-91.5-105.745-93.794a97.717,97.717,0,0,1,3.308,25.5v.32c46.524,3.575,76.828,36.013,76.828,67.972,0,14.939-6.082,29.291-17.446,41.188a25.62,25.62,0,0,0-4,29.771c.587,1.067,1.174,2.134,1.707,3.148,1.334,2.4,2.774,4.8,4.215,7.256a168.621,168.621,0,0,1-26.623-9.6q-3.441-1.521-6.722-3.2a25.58,25.58,0,0,0-16.379-2.241,103.45,103.45,0,0,1-20.167,1.921c-32.919,0-58.688-14.139-72.987-33.239a147.2,147.2,0,0,1-26.676,6.3C148.844,234.646,186.725,256.094,230.474,256.094Z" transform="translate(0.022)" fill="#dbe0e5"/>
    </svg>
    <svg class="test-quote-svg" xmlns="http://www.w3.org/2000/svg" width="170" height="157.143" viewBox="0 0 220 157.143">
      <path id="quote-left-solid" d="M0,154.929A58.912,58.912,0,0,1,58.929,96h3.929a15.714,15.714,0,1,1,0,31.429H58.929a27.518,27.518,0,0,0-27.5,27.5v3.929H62.857a31.458,31.458,0,0,1,31.429,31.429v31.429a31.458,31.458,0,0,1-31.429,31.429H31.429A31.458,31.458,0,0,1,0,221.714V154.929Zm125.714,0A58.912,58.912,0,0,1,184.643,96h3.929a15.714,15.714,0,0,1,0,31.429h-3.929a27.518,27.518,0,0,0-27.5,27.5v3.929h31.429A31.458,31.458,0,0,1,220,190.286v31.429a31.458,31.458,0,0,1-31.429,31.429H157.143a31.458,31.458,0,0,1-31.429-31.429V154.929Z" transform="translate(0 -96)" fill="#dbe0e5"/>
    </svg>
    <div class="row">
      <div class="col-lg-6 order-lg-1 order-md-2 order-sm-2 order-2 position-relative">
        <div class="slider slider-for">
          <?php while ( $new->have_posts() ){ $new->the_post();  ?>
            <div class="item">

              <div class="test-content-main">
                <?php if (has_post_thumbnail()){ ?>
                  <img src="<?php the_post_thumbnail_url(); ?>">
                <?php } ?>
                  <div class="test-content-inner d-flex align-items-center justify-content-md-between justify-content-sm-end">
                      <div class="">
                        <h5 class="testi-title "><a  href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                        <div class="testi-desi mb-2"><?php echo esc_html(get_post_meta($post->ID,'testimonial_desigstory',true)); ?> </div>
                      </div>
                      <div class="testi-star"> <?php for ($s=0; $s <=4 ; $s++) {
                          $rating = esc_html(get_post_meta(get_the_ID(),'testimonial_rating',true));
                          $final_rating = isset($rating) ? $rating : 0 ;
                          if ($final_rating <= $s) {?>
                               <!-- filled -->
                              <span><i class="far fa-star"></i></span>
                          <?php } else { ?>
                              <!-- // without filled -->
                              <span><i class="fas fa-star"></i></span>
                          <?php }
                          } ?>
                          <span class="rating-count"><?php echo '(' .number_format($rating,1).')';  ?></span>
                        </div>
                  </div>
                  <div class="test-content">
                    <?php echo get_the_content(); ?>
                  </div>
              </div>
            </div>
          <?php } wp_reset_query(); ?>

        </div>
        <svg class="test-svg" xmlns="http://www.w3.org/2000/svg" width="475.5" height="170.275" viewBox="0 0 472.5 170.275">
          <g id="Testimonial_line" data-name="Testimonial line" transform="translate(-425.5 -6693.283)">
            <path id="Path_7669" data-name="Path 7669" d="M0-.029,437.751-.167s10.435-1.137,9.868,11.9c-.388,8.93-2.551,121.576,0,135.745s17.287,17.57,17.287,17.57" transform="translate(425.5 6694.5)" fill="none" stroke="#babec4" stroke-width="2" stroke-dasharray="10"/>
            <g id="location_1_" data-name="location (1)" transform="translate(876 6841.558)">
              <path id="Path_7870" data-name="Path 7870" d="M89.023,18.783a20.942,20.942,0,0,0,9.732,0c1.6-.452,2.412-1.107,2.412-1.945s-.812-1.493-2.412-1.945a15.176,15.176,0,0,0-2.533-.457c1.837-3.136,3.658-6.687,3.658-8.443a5.992,5.992,0,0,0-11.983,0c0,1.756,1.821,5.307,3.658,8.443a15.171,15.171,0,0,0-2.533.457c-1.6.452-2.412,1.107-2.412,1.945S87.423,18.331,89.023,18.783ZM93.889,1.289a4.708,4.708,0,0,1,4.7,4.7c0,1.332-1.648,4.823-4.408,9.339a.345.345,0,0,1-.589,0c-2.76-4.516-4.408-8.007-4.408-9.339A4.708,4.708,0,0,1,93.889,1.289ZM89.608,16.07a15.668,15.668,0,0,1,2.682-.4L92.5,16a1.634,1.634,0,0,0,2.788,0l.206-.338a15.668,15.668,0,0,1,2.682.4,3.291,3.291,0,0,1,1.7.768,3.291,3.291,0,0,1-1.7.768,18.087,18.087,0,0,1-4.282.462,18.087,18.087,0,0,1-4.282-.462,3.291,3.291,0,0,1-1.7-.768A3.292,3.292,0,0,1,89.608,16.07Z" transform="translate(-82.889)" fill="#babec4"/>
              <path id="Path_7871" data-name="Path 7871" d="M20.124,357.195a.645.645,0,1,0-.621,1.13c.768.422,1.208.889,1.208,1.283,0,.481-.682,1.227-2.6,1.877a23.014,23.014,0,0,1-7.115,1,23.014,23.014,0,0,1-7.115-1c-1.914-.65-2.6-1.4-2.6-1.877,0-.393.44-.861,1.208-1.283a.645.645,0,0,0-.621-1.13A3.066,3.066,0,0,0,0,359.607c0,.875.6,2.124,3.47,3.1A24.316,24.316,0,0,0,11,363.77a24.316,24.316,0,0,0,7.53-1.065c2.868-.974,3.47-2.223,3.47-3.1A3.066,3.066,0,0,0,20.124,357.195Z" transform="translate(0 -341.77)" fill="#babec4"/>
              <path id="Path_7872" data-name="Path 7872" d="M204.77,76.228a2.408,2.408,0,1,0-2.408,2.408A2.411,2.411,0,0,0,204.77,76.228Zm-3.527,0a1.119,1.119,0,1,1,1.119,1.119A1.12,1.12,0,0,1,201.242,76.228Z" transform="translate(-191.361 -70.648)" fill="#babec4"/>
            </g>
          </g>
        </svg>
      </div>
      <div class="col-lg-6 order-lg-2 order-md-1 order-sm-1 order-1">
        <?php if(get_theme_mod('vw_tourism_pro_testimonial_sub_heading')!=''){ ?>
          <p class="sec-sub-heading text-lg-start text-md-start text-center"><?php echo esc_html(get_theme_mod('vw_tourism_pro_testimonial_sub_heading')); ?></p>
        <?php } ?>
        <?php if(get_theme_mod('vw_tourism_pro_testimonial_heading')!=''){ ?>
          <h2 class="sec-heading text-lg-start text-md-start text-center"><?php echo esc_html(get_theme_mod('vw_tourism_pro_testimonial_heading')); ?><h2>
        <?php } ?>
        <?php if(get_theme_mod('vw_tourism_pro_testimonial_paragraph')!=''){ ?>
          <p class="sec-para text-lg-start text-md-start text-center"><?php echo esc_html(get_theme_mod('vw_tourism_pro_testimonial_paragraph')); ?><p>
        <?php } ?>
        <div class="slider slider-nav d-flex">
           <?php   while ( $new->have_posts() ){ $new->the_post();  ?>
             <div class="item">
               <div class="testi-image-box">
                 <div class="testi-image">
                   <?php if (has_post_thumbnail()){ ?>
                     <img src="<?php the_post_thumbnail_url(); ?>">
                   <?php } ?>
                 </div>
               </div>
             </div>
           <?php } wp_reset_query(); ?>
         </div>
      </div>
    </div>

  </div>
</section>
