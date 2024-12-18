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
$img_bg = esc_attr(get_theme_mod('vw_tourism_pro_explore_bg_attachment', ''));

// WP_Queryでカスタム投稿タイプを取得
$args = [
    'post_type' => 'tcp_explore',
    'posts_per_page' => 10,
    'fields' => 'ids',
];
$query = new WP_Query($args);

// デフォルト値
$default_image = 'https://example.com/path/to/default-image.jpg';
$default_text = 'Default Text';
?>

<section id="explore" style="<?php echo $explore_bg; ?>" class="<?php echo $img_bg; ?> pb-0">
    <div class="container">
        <div class="row align-items-center">
            <!-- 左カラム -->
            <div class="col-lg-6 wow zoomIn delay-2000">
                <?php if ($sub_heading = get_theme_mod('vw_tourism_pro_explore_sub_heading', '')): ?>
                    <p class="sec-sub-heading text-md-start text-center"><?php echo esc_html($sub_heading); ?></p>
                <?php endif; ?>

                <?php if ($heading = get_theme_mod('vw_tourism_pro_explore_heading', '')): ?>
                    <h2 class="sec-heading text-md-start text-center"><?php echo esc_html($heading); ?></h2>
                <?php endif; ?>

                <?php if ($paragraph = get_theme_mod('vw_tourism_pro_explore_paragraph', '')): ?>
                    <p class="text-md-start text-center exp-para"><?php echo esc_html($paragraph); ?></p>
                <?php endif; ?>

                <?php if ($query->have_posts()): ?>
                    <div class="explore-inner">
                        <div class="custom-select-wrapper">
                            <div class="custom-select">
                                <span class="custom-select-trigger explore-select-title">
                                    Select an option <i class="fa-solid fa-chevron-down"></i>
                                </span>
                                <ul class="custom-options">
                                    <?php while ($query->have_posts()): $query->the_post(); ?>
                                        <li class="custom-option" data-value="<?php echo esc_attr(get_the_ID()); ?>">
                                            <?php echo esc_html(get_the_title()); ?>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>

            <!-- 右カラム -->
            <div class="col-lg-6 wow zoomIn delay-2000">
                <img class="map-img" src="<?php echo esc_url(get_theme_mod('vw_tourism_pro_explore_map_img', $default_image)); ?>" alt="Explore Map">
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
