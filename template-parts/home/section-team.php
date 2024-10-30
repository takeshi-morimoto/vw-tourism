<?php
$section_hide = get_theme_mod( 'vw_tourism_pro_team_enabledisable' );
if ( 'Disable' == $section_hide ) {
  return;
}
if( get_theme_mod('vw_tourism_pro_team_bgcolor','') ) {
  $team_bg = 'background-color:'.esc_attr(get_theme_mod('vw_tourism_pro_team_bgcolor','')).';';
}elseif( get_theme_mod('vw_tourism_pro_team_bgimage','') ){
  $team_bg = 'background-image:url(\''.esc_url(get_theme_mod('vw_tourism_pro_team_bgimage')).'\')';
}else{
  $team_bg = '';
}
$img_bg = get_theme_mod('vw_tourism_pro_team_bg_attachment');
?>

<section id="team" style="<?php echo esc_attr($team_bg); ?>" class="<?php echo esc_attr($img_bg); ?>" >
<div class="container wow zoomIn delay-2000">
  <div class="row justify-content-center text-center">
    <div class="col-lg-8">
      <?php if(get_theme_mod('vw_tourism_pro_team_sub_heading')!=''){ ?>
        <p class="sec-sub-heading mb-0"><?php echo esc_html(get_theme_mod('vw_tourism_pro_team_sub_heading')); ?></p>
      <?php } ?>
      <?php if(get_theme_mod('vw_tourism_pro_team_heading')!=''){ ?>
        <h2 class="sec-heading"><?php echo esc_html(get_theme_mod('vw_tourism_pro_team_heading')); ?></h2>
      <?php } ?>
    </div>
  </div>
    <div class="owl-carousel mt-lg-5 mt-sm-2 mt-3">
      <?php
          $terms = get_terms([
            'taxonomy' => 'tcp_team',
            'hide_empty' => false,
            'post_per_page'=> -1,
          ]);
          foreach ($terms as $term_value) {
           ?>
           <div class="team-outer">
             <div class="team-inner">
               <?php
                $thumbnail_url = get_term_meta($term_value->term_id, 'team_image', true);
                echo "<img src='{$thumbnail_url}' class='team-image' alt='' />";
                ?>
                <div class="team-desc text-center p-3">
                  <h3 class="team-name mb-2" style="line-height:0">
                    <a href="<?php echo esc_attr( esc_url( get_category_link( $term_value->term_id ) ) ) ?>">
                      <?php	echo $term_value->name; ?>
                    </a>
                  </h3>
                  <p class="team-role mb-0">
                    <?php echo esc_html(get_term_meta($term_value->term_id,'team_role',true)); ?>
                  </p>
                </div>
                <div class="team-social-box">
                  <div class="share-btn-parent"> <i class="fas fa-share-alt" aria-hidden="true"></i>
                  </div>

                  <div class="show-icon">
                    <div><a class="youtube" href="<?php echo esc_html(get_term_meta($term_value->term_id,'team_youtube_url',true)); ?>" target="_blank"><i class="<?php echo esc_html(get_theme_mod('vw_tourism_pro_team_youtube_icon')); ?>"></i></a></div>
                    <div><a class="insta" href="<?php echo esc_html(get_term_meta($term_value->term_id,'team_instagram_url',true)); ?>" target="_blank"><i class="<?php echo esc_html(get_theme_mod('vw_tourism_pro_team_insta_icon')); ?>"></i></a></div>
                    <div><a class="twitter" href="<?php echo esc_html(get_term_meta($term_value->term_id,'team_twitter_url',true)); ?>" target="_blank"><i class="<?php echo esc_html(get_theme_mod('vw_tourism_pro_team_twitter_icon')); ?>"></i></a></div>
                    <div><a class="facebook" href="<?php echo esc_html(get_term_meta($term_value->term_id,'team_facebook_url',true)); ?>" target="_blank"><i class="<?php echo esc_html(get_theme_mod('vw_tourism_pro_team_facebook_icon')); ?>"></i></a></div>
                  </div>
               </div>
             </div>
              <svg class="team-dash team-dash-odd" xmlns="http://www.w3.org/2000/svg" width="290.175" height="327.207" viewBox="0 0 323.175 327.207">
                <path id="team_01" data-name="team 01" d="M0-4,309.5-5.167s11.667-4.333,12.333,16S322,320.574,322,320.574" transform="translate(0.004 6.632)" fill="none" stroke="#112542" stroke-width="2" stroke-dasharray="10"/>
              </svg>
              <svg class="team-dash team-dash-even" class="d-none" xmlns="http://www.w3.org/2000/svg" width="290.039" height="325.574" viewBox="0 0 323.039 325.574">
              <path id="team_02" data-name="team 02" d="M0,320.574l300.3-.2s21.6,1,21.7-19.608S322-4,322-4" transform="translate(0.001 4)" fill="none" stroke="#112542" stroke-width="2" stroke-dasharray="10"/>
           </div>
          <?php } ?>
    </div>

</svg>
</div>


</section>
