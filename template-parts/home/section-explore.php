<?php
// 背景設定を取得
function get_explore_bg_style() {
    $bg_color = get_theme_mod('vw_tourism_pro_explore_bgcolor', '');
    $bg_image = get_theme_mod('vw_tourism_pro_explore_bgimage', '');
    if ($bg_color) {
        return 'background-color:' . esc_attr($bg_color) . ';';
    } elseif ($bg_image) {
        return 'background-image:url(' . esc_url($bg_image) . ');';
    }
    return '';
}

$explore_bg = get_explore_bg_style();
$img_bg = esc_attr(get_theme_mod('vw_tourism_pro_explore_bg_attachment', 'fixed'));

// WP_Queryでカスタム投稿タイプを取得
$args = [
    'post_type' => 'tcp_explore',
    'posts_per_page' => 10,
];
$query = new WP_Query($args);

// デフォルト値
$default_image = 'https://example.com/path/to/default-image.jpg';
?>

<section id="explore" style="<?php echo $explore_bg; ?>" class="explore-section <?php echo $img_bg; ?> pb-0">
    <div class="container">
        <!-- セクションヘッダー -->
        <div class="section-header text-center">
            <?php if ($heading = get_theme_mod('vw_tourism_pro_explore_heading', '')): ?>
                <h2 class="section-title"><?php echo esc_html($heading); ?></h2>
            <?php endif; ?>
            <?php if ($sub_heading = get_theme_mod('vw_tourism_pro_explore_sub_heading', '')): ?>
                <p class="section-subtitle"><?php echo esc_html($sub_heading); ?></p>
            <?php endif; ?>
        </div>

        <div class="row align-items-center">
            <!-- 左カラム（スライダー） -->
            <div class="col-lg-6">
                <?php if ($query->have_posts()): ?>
                    <div class="explore-carousel owl-carousel owl-theme">
                        <?php while ($query->have_posts()): $query->the_post(); ?>
                            <?php
                            $images = get_post_meta(get_the_ID(), 'additional_meta_fields', true);
                            $images = is_array($images) ? $images : [];
                            $image_url = esc_url($images['image'] ?? $default_image);
                            ?>
                            <div class="explore-item">
                                <div class="explore-item-img">
                                    <img src="<?php echo $image_url; ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                                </div>
                                <div class="explore-item-info text-center">
                                    <h5 class="explore-item-title"><?php echo esc_html(get_the_title()); ?></h5>
                                    <p class="explore-item-description">
                                        <?php echo esc_html($images['description'] ?? 'Explore the details'); ?>
                                    </p>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                <?php endif; ?>
            </div>

            <!-- 右カラム（地図） -->
            <div class="col-lg-6">
                <?php
                $map_image = get_theme_mod('vw_tourism_pro_explore_map_img', $default_image);
                ?>
                <div class="explore-map">
                    <img class="map-img" src="<?php echo esc_url($map_image); ?>" alt="Explore Map">
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    jQuery('.explore-carousel').owlCarousel({
        loop: true,
        margin: 20,
        nav: true,
        dots: false,
        items: 2,
        navText: ['<i class="fa-solid fa-chevron-left"></i>', '<i class="fa-solid fa-chevron-right"></i>'],
        responsive: {
            0: { items: 1 },
            600: { items: 2 },
            1000: { items: 2 }
        }
    });
});
</script>
