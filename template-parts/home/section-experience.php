<?php
$section_hide = get_theme_mod( 'vw_tourism_pro_experience_enabledisable' );
if ( 'Disable' == $section_hide ) {
  return;
}
if( get_theme_mod('vw_tourism_pro_experience_bgcolor','') ) {
  $experience_bg = 'background-color:'.esc_attr(get_theme_mod('vw_tourism_pro_experience_bgcolor','')).';';
}elseif( get_theme_mod('vw_tourism_pro_experience_bgimage','') ){
  $experience_bg = 'background-image:url(\''.esc_url(get_theme_mod('vw_tourism_pro_experience_bgimage')).'\')';
}else{
  $experience_bg = '';
}
$img_bg = get_theme_mod('vw_tourism_pro_experience_bg_attachment');

$bg_svg = get_theme_mod('vw_tourism_pro_experience_bgsvg_image');
  $file_contents = file_get_contents(get_template_directory_uri().'/assets/images/exp-path.svg');
if ( $bg_svg != '' ) {
  $ext = pathinfo($bg_svg, PATHINFO_EXTENSION);
  if ($ext == 'svg') {
    $file_contents = file_get_contents($bg_svg);
  }
}
$args = array(
  'post_type' => 'experience',
  'posts_per_page' => 3
);
?>
<section id="experience" style="<?php echo esc_attr($experience_bg); ?>" class="<?php echo esc_attr($img_bg); ?> pb-0">
  <div class="container wow slideInUp delay-1000 animated">
    <div class="row">
      <?php if(get_theme_mod('vw_tourism_pro_experience_sub_heading')!=''){ ?>
        <p class="sec-sub-heading text-center"><?php echo esc_html(get_theme_mod('vw_tourism_pro_experience_sub_heading')); ?></p>
      <?php } ?>
      <?php if(get_theme_mod('vw_tourism_pro_experience_heading')!=''){ ?>
        <h2 class="sec-heading text-center"><?php echo esc_html(get_theme_mod('vw_tourism_pro_experience_heading')); ?><h2>
      <?php } ?>
    </div>
    <div class="row mt-5">
      <div class="col-lg-2 col-6 order-lg-1 order-md-1 order-sm-1 order-1">
        <div class="nav flex-column nav-pills experience-pills-tab gap-3" role="tablist" aria-orientation="vertical">
            <?php
              $query = new WP_Query( $args );
              $i = 0;
              while ( $query->have_posts() ) : $query->the_post();
                global $post;

                $post_thumbnail_url = get_the_post_thumbnail_url( $post );

                if ($post_thumbnail_url) {
                    $file_extension = pathinfo($post_thumbnail_url, PATHINFO_EXTENSION);
                    if (strtolower($file_extension) == 'svg') {
                        $image_post_thumbnail = file_get_contents($post_thumbnail_url);
                    } else {
                        $image_post_thumbnail = '<img src="' . esc_url($post_thumbnail_url) . '" alt="' . esc_attr(get_the_title()) . '"  />';
                    }
                }
                 ?>
                <button class="nav-link <?php echo $i == 0 ? 'active' : ''; ?>"
                  id="experience-pills-<?php echo get_the_ID(); ?>-tab" data-bs-toggle="pill"
                  data-bs-target="#experience-pills-<?php echo get_the_ID(); ?>" type="button" role="tab"
                  aria-controls="experience-pills-<?php echo get_the_ID(); ?>" aria-selected="<?php echo $i == 0 ? 'true' : 'false'; ?>">
                  <div class="">
                      <div class="exp-post-img">
                           <?php echo $image_post_thumbnail;?>
                      </div >
                      <h5 class="exp-post-title">
                          <?php the_title(); ?>
                      </h5>
                  </div>
                </button>
              <?php $i++; endwhile;
              wp_reset_query();
            ?>
          </div>
      </div>
      <div class="col-lg-8 col-12 order-lg-1 order-md-3 order-sm-3 order-3">
        <div class="tab-content" id="experience-pills-tabContent">
              <?php
              $s = 0;
              $args['posts_per_page'] = -1;
              $query = new WP_Query( $args );
              while ( $query->have_posts() ) : $query->the_post();
                global $post;
                ?>
                <div class="tab-pane fade <?php echo $s == 0 ? 'show active' : ''; ?>" id="experience-pills-<?php echo get_the_ID(); ?>" role="tabpanel" aria-labelledby="experience-pills-<?php echo get_the_ID(); ?>-tab">

                    <div class="row experience-tab-inner">
                        <div class="col-lg-5 col-md-5">
                          <div class="row gap-md-3 exp-img-col">
                            <div class="col-md-12 col-sm-6">
                              <div class="exp-content-img-main"  style="border-radius:10px;">
                                    <img class="exp-content-img" src="<?php echo esc_html(get_post_meta($post->ID,'experience-img-one',true)); ?>" alt="Experience Image" >
                              </div>

                            </div>
                            <div class="col-md-12 col-sm-6">
                              <div class="exp-content-img-main"  style="border-radius:10px;">
                                      <img class="exp-content-img" src="<?php echo esc_html(get_post_meta($post->ID,'experience-img-two',true)); ?>" alt="Experience Image" >
                              </div>

                            </div>

                          </div>
                        </div>
                        <div class="col-lg-7 col-md-7 ">
                          <div class="exp-content-box position-relative">
                            <div class="post-title">
                              <?php the_title(); ?>
                            </div>
                            <div class="">
                                <?php the_content();?>
                            </div>
                            <div class="ex-content-bg-img">
                              <?php echo $file_contents; ?>
                            </div>

                          </div>

                        </div>
                    </div>

                </div>
              <?php $s++; endwhile;
                wp_reset_query(); ?>
            </div>
      </div>
      <div class="col-lg-2 col-6 order-lg-1 order-md-2 order-sm-2 order-2 ">
        <div class="nav flex-column nav-pills experience-pills-tab gap-3" role="tablist" aria-orientation="vertical">
            <?php
              $args['posts_per_page'] = 6;
              $args['offset'] = 3;

              $query = new WP_Query( $args );

              while ( $query->have_posts() ) : $query->the_post();
                global $post;
                $post_thumbnail_url = get_the_post_thumbnail_url( $post );

                if ($post_thumbnail_url) {
                    $file_extension = pathinfo($post_thumbnail_url, PATHINFO_EXTENSION);
                    if (strtolower($file_extension) == 'svg') {
                        $image_post_thumbnail = file_get_contents($post_thumbnail_url);
                    } else {
                        $image_post_thumbnail = '<img src="' . esc_url($post_thumbnail_url) . '" alt="' . esc_attr(get_the_title()) . '"  />';
                    }
                }
                ?>
                <button class="nav-link <?php echo $i == 0 ? 'active' : ''; ?>"
                  id="experience-pills-<?php echo get_the_ID(); ?>-tab" data-bs-toggle="pill"
                  data-bs-target="#experience-pills-<?php echo get_the_ID(); ?>" type="button" role="tab"
                  aria-controls="experience-pills-<?php echo get_the_ID(); ?>" aria-selected="<?php echo $i == 0 ? 'true' : 'false'; ?>">
                  <div class="">
                      <div class="exp-post-img">
                           <?php echo $image_post_thumbnail;?>
                      </div >
                      <h5 class="exp-post-title">
                          <?php the_title(); ?>
                      </h5>
                  </div>
                </button>
              <?php $i++; endwhile;
              wp_reset_query();
            ?>
          </div>
      </div>
    </div>
  </div>
</section>
