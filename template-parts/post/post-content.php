<?php
  $content_type = get_theme_mod( 'vw_tourism_pro_post_content_blog','Excerpt Content');
  $excerpt_length="";
  if($content_type == "Excerpt Content"){
    $excerpt_length=get_theme_mod( 'vw_tourism_pro_excerpt_length',15);
  }
  $theme_lay = get_theme_mod( 'vw_tourism_pro_plugin_single_blog_option','two_col');

  if($theme_lay == 'one_col'){
    $col_class = 'col-md-12 col-sm-12';
  }else if($theme_lay == 'two_col'){
    $col_class = ' col-lg-6 col-md-12 col-sm-12 col-12';
  }else{
    $col_class = 'col-md-6 col-sm-6 col-12';
  }
?>
<?php if ( get_post_type( get_the_ID() ) == 'post' ) { ?>
  <div class="<?php echo esc_attr($col_class); ?> mb-4">
  <div class="blog-main">
    <div class="vertical-blog-img-main mb-3">
      <div class="blog-img">
        <?php if (has_post_thumbnail()){ ?>
          <?php the_post_thumbnail(); ?>
        <?php } ?>
      </div>
      <div class="collectionbox-text pt-2 d-flex flex-column gap-2">
        <div class="d-lg-flex d-md-grid d-sm-grid d-grid justify-content-between side-blog-meta">
            <div class="post-month blog-inner-meta d-flex "><i class="fas fa-calendar-alt pe-1"></i><?php echo get_the_date( 'j M, Y'); ?></div>
            <div class="blog-inner-meta d-flex">
              <i class="fa-solid fa-tag pe-1 "></i> <a href="<?php echo $category_link; ?>"><?php echo is_array(wp_get_post_terms(get_the_ID(), 'category')) && !empty(wp_get_post_terms(get_the_ID(), 'category')) ? wp_get_post_terms(get_the_ID(), 'category')[0]->name : '';  ?></a>
            </div>
             <div class="news-author blog-inner-meta d-flex">
                 <i class="fa-solid fa-user pe-1"></i>
               <?php the_author(); ?>
           </div>
            <div class="post-comments  blog-inner-meta d-flex">
            <i class="fa-solid fa-comments pe-1"></i>
              <?php $get_comments_number = get_comments_number(get_the_ID()) != 0 ? get_comments_number(get_the_ID()) : 0;
              echo $get_comments_number . ' Comments'; ?>
            </div>
          </div>
        <div class="blog-title">
            <h3 style="line-height:0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
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

      </div>
    </div>
  </div>
  </div>
<?php } else { ?>
    <?php
        global $post;
        $post_id = $post->ID;
        $pkg_sale_price   = get_post_meta( $post_id, 'pkg_sale_price', true);
        $member_text = get_post_meta( $post_id, 'pkg_person_text', true) ? get_post_meta( $post_id, 'pkg_person_text', true) : 'Per Person';
        $pkg_sale_price = $pkg_sale_price ? $pkg_sale_price : 0;

        $location_link = ''; $term_id = '';
        $destination = get_the_terms($post, 'tcp_destination');
        $destination_title = '';
        if (is_array($destination) && count($destination)) {
          $destination_title = $destination[0]->name . ' Tour';
          $location_link = get_category_link( $destination[0]->term_id );
        } ?>

        <div class="col-xl-4 col-lg-6 mb-4">
          <div class="packages-box">
            <div class="packages-img-main position-relative">
              <?php if (has_post_thumbnail()){ ?>
                <?php the_post_thumbnail(); ?>
              <?php } ?>
              <div class="d-flex flex-column position-absolute bottom-0 top-0 start-0 end-0 mx-auto my-3 justify-content-between packages-content-box  text-lg-start text-start px-sm-1" style="z-index:1">
                <div class="packages-btm-content">
                  <a href="<?php echo esc_url($location_link); ?>"><h5><?php echo esc_html($destination_title); ?></h5></a>
                </div>
                <div class="packages-btm-content">
                  <h6 class="packages-from">From <?php echo esc_html(get_post_meta($post->ID,'pkg_from',true)); ?></h6>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="packages-date">
                      <span><?php echo esc_html(get_post_meta($post->ID,'pkg_tour_days',true)); ?></span>Days
                      <span><?php echo esc_html(get_post_meta($post->ID,'pkg_tour_nights',true)); ?></span>Nights
                      <p class="mb-0 pac-per-year"><?php esc_html_e($member_text);?></p>
                    </div>
                    <p class="mb-0 package-price"><?php echo esc_html(get_theme_mod('vw_tourism_pro_packages_currency')); ?><?php echo  esc_html(number_format((float)$pkg_sale_price, 2, '.', '')); ?></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="packges-bottom-box">
              <div class="d-flex flex-column gap-2 packges-bottom-box-inner  py-3 text-center">
                <div class="packages-title">
                  <h3 style="line-height:0;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                </div>
                <div class="packages-name">
                  <p class="mb-0"><?php echo esc_html(get_post_meta($post->ID,'pkg_travel_name',true)); ?></p>
                </div>
                <div class="packages-button  ">
                  <a class="theme-btn-main" href="<?php the_permalink(); ?>">
                    <div class="theme-btn-block">
                      <span class="theme-btn-line-left"></span>
                      <span class="theme-btn-text"><?php echo esc_html(get_theme_mod('vw_tourism_pro_popular_packages_booknow_text'));?></span>
                      <span class="theme-btn-line-right"></span>
                      <i class="fa-solid fa-caret-down"></i>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

<?php
}
