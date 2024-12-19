<?php
// セクションの表示/非表示設定
$section_hide = get_theme_mod('vw_tourism_pro_explore_enabledisable');
if ($section_hide === 'Disable') return;

// 背景設定
$explore_bg = '';
if ($bg_color = get_theme_mod('vw_tourism_pro_explore_bgcolor', '')) {
    $explore_bg = 'background-color:' . esc_attr($bg_color) . ';';
} elseif ($bg_image = get_theme_mod('vw_tourism_pro_explore_bgimage', '')) {
    $explore_bg = 'background-image:url(' . esc_url($bg_image) . ');';
}

// WP_Queryでカスタム投稿タイプ「tcp_explore」を取得
$args = [
    'post_type' => 'tcp_explore',
    'posts_per_page' => 10,
];
$query = new WP_Query($args);

// デフォルト画像
$default_image = 'https://example.com/default-image.jpg';
?>

<section id="explore" style="<?php echo esc_attr($explore_bg); ?>">
    <div class="container">
        <div class="row align-items-center">
            <!-- 左カラム -->
            <div class="col-lg-6">
                <p class="sec-sub-heading"><?php echo esc_html(get_theme_mod('vw_tourism_pro_explore_sub_heading', 'Explore')); ?></p>
                <h2 class="sec-heading"><?php echo esc_html(get_theme_mod('vw_tourism_pro_explore_heading', 'Discover New Places')); ?></h2>
                <p class="exp-para"><?php echo esc_html(get_theme_mod('vw_tourism_pro_explore_paragraph', 'Explore the beauty of the world.')); ?></p>
                
                <!-- ドロップダウンメニュー -->
                <?php if ($query->have_posts()): ?>
                    <div class="custom-select-wrapper">
                        <select id="explore-dropdown" class="form-select">
                            <?php while ($query->have_posts()): $query->the_post(); ?>
                                <option value="<?php echo esc_attr(get_the_ID()); ?>">
                                    <?php echo esc_html(get_the_title()); ?>
                                </option>
                            <?php endwhile; wp_reset_postdata(); ?>
                        </select>
                    </div>
                <?php endif; ?>
                
                <!-- スライダー -->
                <div class="explore-carousel owl-carousel mt-3">
                    <?php
                    $query->rewind_posts(); // 投稿リセット
                    while ($query->have_posts()): $query->the_post();
                        $images = get_post_meta(get_the_ID(), 'additional_meta_fields', true);
                        $image_url = !empty($images['image']) ? esc_url($images['image']) : $default_image;
                    ?>
                        <div class="explore-item text-center">
                            <img src="<?php echo $image_url; ?>" alt="Explore Image" class="rounded-3">
                            <p class="mt-2"><?php echo esc_html(get_the_title()); ?></p>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>

            <!-- 右カラム：地図画像 -->
            <div class="col-lg-6">
                <?php $map_img = get_theme_mod('vw_tourism_pro_explore_map_img', $default_image); ?>
                <img src="<?php echo esc_url($map_img); ?>" alt="Explore Map" class="img-fluid rounded-3">
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
    autoplay: true,
    autoplayTimeout: 5000,
    items: 3,
    responsive: {
        0: { items: 1 },
        576: { items: 2 },
        992: { items: 3 }
    }
});
</script>
