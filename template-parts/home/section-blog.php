<?php
$latestpost_enable = get_theme_mod( 'vw_tourism_pro_radio_our_blog_enable' );
if ( 'Disable' == $latestpost_enable ) {
  return;
}
/*Latest post*/

if( get_theme_mod('vw_tourism_pro_our_blog_bg_color') ) {
  $about_backg = 'background-color:'.esc_attr(get_theme_mod('vw_tourism_pro_our_blog_bg_color')).';';
}elseif( get_theme_mod('vw_tourism_pro_our_blog_bgimage') ){
  $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('vw_tourism_pro_our_blog_bgimage')).'\')';
}else{
  $about_backg = '';
}
$img_bg =get_theme_mod('vw_tourism_pro_our_blog_image_bg');


?>
<section id="Blog" style="<?php echo esc_html($about_backg); ?>" class="<?php echo esc_attr($img_bg); ?> pb-0 pt-0" >
    <div class="container text-center  wow zoomIn delay-2000">
      <div class="row justify-content-center">
        <?php if(get_theme_mod('vw_tourism_pro_blog_sub_heading')!=''){ ?>
          <p class="sec-sub-heading text-center"><?php echo esc_html(get_theme_mod('vw_tourism_pro_blog_sub_heading')); ?></p>
        <?php } ?>
        <?php if(get_theme_mod('vw_tourism_pro_blog_heading')!=''){ ?>
          <h2 class="sec-heading text-center"><?php echo esc_html(get_theme_mod('vw_tourism_pro_blog_heading')); ?><h2>
        <?php } ?>
      </div>
        <div class="row mt-lg-5 mt-md-4 mt-4">
          <div class="col-lg-6">
            <?php
            $args = array(
              'post_type' => 'post',
              'post_status' => 'publish',
              'posts_per_page'=> 1
            );
            $new = new WP_Query($args);

            while ( $new->have_posts() ){ $new->the_post();
              $post_id = get_the_ID();

              $assigned_category = get_the_terms( $post_id, 'category' );

             $assigned_category_name = '';$category_link = '#';
             if (!empty($assigned_category)) {
               $assigned_category_name = $assigned_category[0]->name;
               $category_link = get_category_link( $assigned_category[0]->term_id );
              }
             ?>

                <div class="collectionbox-text left-blog-content">
                  <div class="blog-img">
                    <?php if (has_post_thumbnail()){ ?>
                      <?php the_post_thumbnail(); ?>
                    <?php } ?>
                  </div>
                    <div class="d-md-flex text-md-start text-sm-center text-center justify-content-between d-lg-flex d-md-grid d-sm-grid d-grid justify-content-between blog-main-meta">
                      <div class=" home-blog-meta">
                        <div class="post-month blog-inner-meta"><i class="fas fa-calendar-alt pe-2"></i><?php echo get_the_date( 'j M, Y'); ?></div>
                      </div>
                      <div class=" home-blog-meta">
                        <div class="blog-inner-meta d-flex justify-content-md-start justify-content-sm-center justify-content-center align-items-center">
                          <i class="fa-solid fa-tag pe-2"></i>   <a href="<?php echo $category_link; ?>"><?php echo wp_get_post_terms(get_the_ID(), 'category')[0]->name;  ?></a>
                        </div>
                      </div>
                      <div class=" home-blog-meta">
                         <div class="news-author blog-inner-meta">
                             <i class="fa-solid fa-user pe-2"></i>
                           <?php the_author(); ?>
                           </div>
                      </div>
                      <div class=" home-blog-meta">
                        <div class="post-comments ms-xl-4 blog-inner-meta">
                        <i class="fa-solid fa-comments pe-2"></i>
                          <?php $get_comments_number = get_comments_number(get_the_ID()) != 0 ? get_comments_number(get_the_ID()) : 0;
                          echo $get_comments_number . ' Comments'; ?>
                        </div>
                      </div>
                      </div>
                      <div class="blog-title">
                          <h3 style="line-height:0 " class="text-md-start text-sm-center text-center"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                      </div>
                      <div class="blog-content">
                        <?php the_excerpt(); ?>
                      </div>
                        <a class="theme-btn-main" href="<?php the_permalink(); ?>">
                          <div class="theme-btn-block">
                              <span class="theme-btn-line-left"></span>
                    			          <span class="theme-btn-text"><?php echo esc_html(get_theme_mod('vw_tourism_pro_blog_viewmore_text'));?></span>
                               <span class="theme-btn-line-right"></span>
                              <i class="fa-solid fa-caret-down"></i>
                            </div>
                        </a>
                                            <!-- <div class="readmore mt-2">
                          <a class="theme_button d-inline-block" href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('vw_tourism_pro_blog_viewmore_text'));?></a>
                        </div> -->
                </div>
               <?php } wp_reset_query(); ?>
            </div>
          <div class="col-lg-6">
            <div class="testi-vertical">
              <?php
              $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page'=> -1
              );
              $new = new WP_Query($args);
              while ( $new->have_posts() ){ $new->the_post();
                $post_id = get_the_ID();

                  $assigned_tag = get_the_terms( $post_id, 'post_tag' );

                  $post_tags_arr = wp_get_post_terms(get_the_ID(), 'post_tag');

                  $assigned_category_name = '';$category_link = '#';
                  if (!empty($assigned_category)) {
                    $assigned_category_name = $assigned_category[0]->name;
                    $category_link = get_category_link( $assigned_category[0]->term_id );
                   } ?>
                <div class="vertical-blog-img-main d-flex align-items-center mb-2">
                  <div class="blog-img">
                    <?php if (has_post_thumbnail()){ ?>
                      <?php the_post_thumbnail(); ?>
                    <?php } ?>
                  </div>
                  <div class="collectionbox-text ps-2">
                    <div class="d-flex align-items-center gap-xl-4 gap-lg-2 gap-md-3 gap-sm-3 gap-3 blog-meta-main justify-content-start">
                        <div class="post-month d-flex gap-md-2 gap-1 align-items-center"><i class="fas fa-calendar-alt"></i><?php echo get_the_date( 'j M, Y'); ?></div>
                        <div class="d-flex gap-md-2  gap-1 align-items-center post-tags">
                            <i class="fa-solid fa-tag"></i> <a href="<?php echo $category_link; ?>"><?php echo wp_get_post_terms(get_the_ID(), 'category')[0]->name;  ?></a>
                        </div>
                        <div class="news-author d-flex gap-md-2  gap-1 align-items-center">
                            <i class="fa-solid fa-user"></i>
                          <?php the_author(); ?>
                        </div>
                    </div>
                    <div class="blog-title">
                        <h3 style="line-height:0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    </div>
                    <div class="blog-content">
                      <?php the_excerpt(); ?>
                    </div>
                  </div>
                </div>
                 <?php } wp_reset_query(); ?>
              </div>
              <!-- <div class="blog-prev" >
                <i class="fa-solid fa-chevron-up"></i></button>
              </div>
              <div class="blog-next" >
              <i class="fa-solid fa-chevron-down"></i></button>
              </div> -->
          </div>
      </div>
  </div>
</section>

<style media="screen">

</style>
