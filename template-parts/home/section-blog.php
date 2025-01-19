<?php
$latestpost_enable = get_theme_mod('vw_tourism_pro_radio_our_blog_enable');
if ('Disable' === $latestpost_enable) {
    return;
}

// 背景設定
$about_backg = '';
if ($bg_color = get_theme_mod('vw_tourism_pro_our_blog_bg_color')) {
    $about_backg = 'background-color:' . esc_attr($bg_color) . ';';
} elseif ($bg_image = get_theme_mod('vw_tourism_pro_our_blog_bgimage')) {
    $about_backg = 'background-image:url(\'' . esc_url($bg_image) . '\')';
}
$img_bg = get_theme_mod('vw_tourism_pro_our_blog_image_bg');
?>

<section id="Blog" style="<?php echo esc_attr($about_backg); ?>" class="<?php echo esc_attr($img_bg); ?> pb-0 pt-0">
    <div class="container text-center wow zoomIn delay-2000">
        <div class="row justify-content-center">
            <?php if ($sub_heading = get_theme_mod('vw_tourism_pro_blog_sub_heading')) : ?>
                <p class="sec-sub-heading text-center"><?php echo esc_html($sub_heading); ?></p>
            <?php endif; ?>

            <?php if ($heading = get_theme_mod('vw_tourism_pro_blog_heading')) : ?>
                <h2 class="sec-heading text-center"><?php echo esc_html($heading); ?></h2>
            <?php endif; ?>
        </div>

        <div class="row mt-lg-5 mt-md-4 mt-4">
            <!-- 最新記事 -->
            <div class="col-lg-6">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => 1,
                );
                $latest_posts = new WP_Query($args);

                while ($latest_posts->have_posts()) : $latest_posts->the_post();
                    ?>
                    <div class="collectionbox-text left-blog-content">
                        <div class="blog-img">
                            <?php if (has_post_thumbnail()) {
                                the_post_thumbnail('full', ['style' => 'max-width: 100%;']);
                            } ?>
                        </div>
                        <div class="blog-main-meta d-flex justify-content-between">
                            <div class="home-blog-meta">
                                <i class="fas fa-calendar-alt pe-2"></i><?php echo esc_html(get_the_date('j M, Y')); ?>
                            </div>
                            <div class="home-blog-meta">
                                <i class="fa-solid fa-tag pe-2"></i>
                                <a href="<?php echo esc_url(get_category_link(get_the_category()[0]->term_id)); ?>">
                                    <?php echo esc_html(get_the_category()[0]->name); ?>
                                </a>
                            </div>
                            <div class="home-blog-meta">
                                <i class="fa-solid fa-user pe-2"></i><?php the_author(); ?>
                            </div>
                            <div class="home-blog-meta">
                                <i class="fa-solid fa-comments pe-2"></i><?php echo get_comments_number() . ' Comments'; ?>
                            </div>
                        </div>
                        <div class="blog-title">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        </div>
                        <div class="blog-content"><?php the_excerpt(); ?></div>
                        <a class="theme-btn-main" href="<?php the_permalink(); ?>">
                            <div class="theme-btn-block">
                                <span class="theme-btn-line-left"></span>
                                <span class="theme-btn-text"><?php echo esc_html(get_theme_mod('vw_tourism_pro_blog_viewmore_text', 'View More')); ?></span>
                                <span class="theme-btn-line-right"></span>
                                <i class="fa-solid fa-caret-down"></i>
                            </div>
                        </a>
                    </div>
                <?php endwhile;
                wp_reset_postdata(); ?>
            </div>

            <!-- 投稿リスト -->
            <div class="col-lg-6">
                <div class="testi-vertical">
                    <?php
                    $all_posts = new WP_Query(array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'posts_per_page' => -1,
                    ));
                    while ($all_posts->have_posts()) : $all_posts->the_post();
                        ?>
                        <div class="vertical-blog-img-main d-flex align-items-center mb-2">
                            <div class="blog-img">
                                <?php if (has_post_thumbnail()) {
                                    the_post_thumbnail('thumbnail', ['style' => 'max-width: 100%;']);
                                } ?>
                            </div>
                            <div class="collectionbox-text ps-2">
                                <div class="blog-meta-main d-flex align-items-center">
                                    <div class="post-month">
                                        <i class="fas fa-calendar-alt"></i><?php echo esc_html(get_the_date('j M, Y')); ?>
                                    </div>
                                    <div class="post-tags">
                                        <i class="fa-solid fa-tag"></i>
                                        <a href="<?php echo esc_url(get_category_link(get_the_category()[0]->term_id)); ?>">
                                            <?php echo esc_html(get_the_category()[0]->name); ?>
                                        </a>
                                    </div>
                                    <div class="news-author">
                                        <i class="fa-solid fa-user"></i><?php the_author(); ?>
                                    </div>
                                </div>
                                <div class="blog-title">
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                </div>
                                <div class="blog-content"><?php the_excerpt(); ?></div>
                            </div>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
