<?php
$section_hide = get_theme_mod('vw_tourism_pro_banner_enabledisable');
if ('Disable' == $section_hide) {
    return;
}

// 動画または画像の背景設定
$banner_background = '';
if (get_theme_mod('vw_tourism_pro_banner_video')) {
    // 動画背景
    $banner_background = '<video autoplay muted loop class="banner-video"><source src="' . esc_url(get_theme_mod('vw_tourism_pro_banner_video')) . '" type="video/mp4"></video>';
} elseif (get_theme_mod('vw_tourism_pro_banner_bgimage')) {
    // 画像背景
    $banner_background = '<div class="banner-image" style="background-image: url(' . esc_url(get_theme_mod('vw_tourism_pro_banner_bgimage')) . ');"></div>';
}
?>

<section id="banner" class="banner-section">
    <!-- 背景 -->
    <?php echo $banner_background; ?>

    <!-- コンテンツ -->
    <div class="container-fluid banner-content">
        <div class="row">
            <!-- 左側ボックス -->
            <div class="col-lg-3 col-md-3 col-6 text-center banner-left">
                <?php for ($i = 1; $i <= 3; $i++): ?>
                    <?php if (get_theme_mod("vw_tourism_pro_banner_card_img{$i}") || get_theme_mod("vw_tourism_pro_banner_card_title{$i}")): ?>
                        <div class="banner-box">
                            <?php if (get_theme_mod("vw_tourism_pro_banner_card_img{$i}")): ?>
                                <img src="<?php echo esc_url(get_theme_mod("vw_tourism_pro_banner_card_img{$i}")); ?>" alt="Banner Image">
                            <?php endif; ?>
                            <?php if (get_theme_mod("vw_tourism_pro_banner_card_title{$i}")): ?>
                                <h3><?php echo esc_html(get_theme_mod("vw_tourism_pro_banner_card_title{$i}")); ?></h3>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                <?php endfor; ?>
            </div>

            <!-- 中央テキスト -->
            <div class="col-lg-6 col-md-6 col-12 text-center banner-center">
                <div class="banner-text">
                    <?php if (get_theme_mod('vw_tourism_pro_banner_sub_heading_one')): ?>
                        <p class="banner-subheading"><?php echo esc_html(get_theme_mod('vw_tourism_pro_banner_sub_heading_one')); ?></p>
                    <?php endif; ?>
                    <?php if (get_theme_mod('vw_tourism_pro_banner_heading')): ?>
                        <h1 class="banner-heading"><?php echo esc_html(get_theme_mod('vw_tourism_pro_banner_heading')); ?></h1>
                    <?php endif; ?>
                    <?php if (get_theme_mod('vw_tourism_pro_banner_sub_heading_two')): ?>
                        <p class="banner-subheading"><?php echo esc_html(get_theme_mod('vw_tourism_pro_banner_sub_heading_two')); ?></p>
                    <?php endif; ?>
                </div>
            </div>

            <!-- 右側ボックス -->
            <div class="col-lg-3 col-md-3 col-6 text-center banner-right">
                <?php for ($i = 4; $i <= 6; $i++): ?>
                    <?php if (get_theme_mod("vw_tourism_pro_banner_card_img{$i}") || get_theme_mod("vw_tourism_pro_banner_card_title{$i}")): ?>
                        <div class="banner-box">
                            <?php if (get_theme_mod("vw_tourism_pro_banner_card_img{$i}")): ?>
                                <img src="<?php echo esc_url(get_theme_mod("vw_tourism_pro_banner_card_img{$i}")); ?>" alt="Banner Image">
                            <?php endif; ?>
                            <?php if (get_theme_mod("vw_tourism_pro_banner_card_title{$i}")): ?>
                                <h3><?php echo esc_html(get_theme_mod("vw_tourism_pro_banner_card_title{$i}")); ?></h3>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</section>
