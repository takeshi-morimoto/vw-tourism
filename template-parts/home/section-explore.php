<?php
// セクションの表示/非表示をテーマの設定から取得
$section_hide = get_theme_mod('vw_tourism_pro_explore_enabledisable');
if ('Disable' == $section_hide) {
    return; // 非表示の場合は出力せずに終了
}

// 背景設定を取得
$explore_bg = '';
if ($bg_color = get_theme_mod('vw_tourism_pro_explore_bgcolor', '')) {
    $explore_bg = 'background-color:' . esc_attr($bg_color) . ';';
} elseif ($bg_image = get_theme_mod('vw_tourism_pro_explore_bgimage', '')) {
    $explore_bg = 'background-image:url(' . esc_url($bg_image) . ');';
}

// WP_Queryでカスタム投稿タイプ「tcp_explore」を取得
$args = [
    'post_type'      => 'tcp_explore',
    'posts_per_page' => 10,
];
$query = new WP_Query($args);

// デフォルト画像
$default_image = 'https://example.com/path/to/default-image.jpg';
?>

<section id="explore" style="<?php echo esc_attr($explore_bg); ?>" class="pb-0">
    <div class="container">
        <div class="row align-items-center">
            <!-- 左側：ヘッダーとコンテンツ -->
            <div class="col-lg-6">
                <?php if ($sub_heading = get_theme_mod('vw_tourism_pro_explore_sub_heading', '')): ?>
                    <p class="sec-sub-heading"><?php echo esc_html($sub_heading); ?></p>
                <?php endif; ?>

                <?php if ($heading = get_theme_mod('vw_tourism_pro_explore_heading', '')): ?>
                    <h2 class="sec-heading"><?php echo esc_html($heading); ?></h2>
                <?php endif; ?>

                <?php if ($paragraph = get_theme_mod('vw_tourism_pro_explore_paragraph', '')): ?>
                    <p class="exp-para"><?php echo esc_html($paragraph); ?></p>
                <?php endif; ?>

                <!-- スライダー -->
                <?php if ($query->have_posts()): ?>
                    <div class="owl-carousel owl-theme" id="explore-carousel">
                        <?php while ($query->have_posts()): $query->the_post();
                            $images = get_post_meta(get_the_ID(), 'additional_meta_fields', true);
                            $images = is_array($images) ? $images : [];
                            $image_url = !empty($images['image']) ? esc_url($images['image']) : $default_image;
                        ?>
                        <div class="explore-inners">
                            <div class="explore-img">
                                <img class="rounded-3" src="<?php echo $image_url; ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                            </div>
                            <div class="d-flex gap-2 mt-2">
                                <div class="explore-inner-box">
                                    <h6><?php echo esc_html($images['text1'] ?? 'N/A'); ?></h6>
                                    <h6><?php echo esc_html($images['text2'] ?? 'N/A'); ?></h6>
                                </div>
                                <div class="explore-inner-box">
                                    <h6><?php echo esc_html($images['text3'] ?? 'N/A'); ?></h6>
                                    <h6><?php echo esc_html($images['text4'] ?? 'N/A'); ?></h6>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; wp_reset_postdata(); ?>
                    </div>
                <?php endif; ?>
            </div>

            <!-- 右側：地図画像 -->
            <div class="col-lg-6">
                <?php $map_img = get_theme_mod('vw_tourism_pro_explore_map_img', $default_image); ?>
                <img class="map-img rounded-3 w-100" src="<?php echo esc_url($map_img); ?>" alt="Explore Map">
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    jQuery('#explore-carousel').owlCarousel({
        loop: true,
        margin: 20,
        nav: true,
        dots: false,
        items: 3,
        navText: ['<i class="fa-solid fa-chevron-left"></i>', '<i class="fa-solid fa-chevron-right"></i>'],
        responsive: {
            0: { items: 1 },
            600: { items: 2 },
            1000: { items: 3 }
        }
    });
});
</script>
