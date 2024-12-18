<?php
/**
 * Template part for displaying footer content
 *
 * @package vw_tourism_pro
 */

// セクションの表示/非表示設定
$address_section = get_theme_mod('vw_tourism_pro_radiolast_enable');
if ('Disable' == $address_section) {
    return;
}

// 背景設定
if ($bgcolor = get_theme_mod('vw_tourism_pro_section_footer_bgcolor', '')) {
    $footer_backg = 'background-color:' . esc_attr($bgcolor) . ';';
} elseif ($bgimage = get_theme_mod('vw_tourism_pro_footer_bgimage', '')) {
    $footer_backg = 'background-image:url(' . esc_url($bgimage) . ');';
} else {
    $footer_backg = '';
}
$img_bg = get_theme_mod('vw_tourism_pro_section_footer_bg_attachment', '');

// ウィジェットカラム数のチェック
$count = 0;
$sidebars = ['footer-1', 'footer-2', 'footer-3', 'footer-4'];
foreach ($sidebars as $sidebar) {
    if (is_active_sidebar($sidebar)) {
        $count++;
    }
}

// カラムのクラス設定
switch ($count) {
    case 1:
        $col_class = 'col-lg-12 col-sm-6';
        break;
    case 2:
        $col_class = 'col-lg-6 col-sm-6';
        break;
    case 3:
    case 4:
        $col_class = 'col-lg-4 col-md-4 col-sm-6 pb-3';
        break;
    default:
        $col_class = 'footer_hide';
        break;
}
?>

<?php if (get_theme_mod('vw_tourism_pro_custom_footer_widget_section', 'true') != ''): ?>
    <div id="footer-inner" style="<?php echo esc_attr($footer_backg); ?>" class="<?php echo esc_attr($img_bg); ?>">
        <div class="container footer-cols">
            <div class="row">
                <!-- 左カラム（連絡先情報） -->
                <div class="col-lg-4 col-md-12">
                    <?php get_template_part('template-parts/footer/footer-contact'); ?>
                </div>

                <!-- 右カラム（ウィジェットエリア） -->
                <div class="col-lg-8 col-md-12">
                    <div class="row footer-col-div py-xl-5 py-lg-3">
                        <?php foreach ($sidebars as $sidebar): ?>
                            <?php if (is_active_sidebar($sidebar)): ?>
                                <div class="<?php echo esc_attr($col_class); ?> text-md-start text-center">
                                    <?php dynamic_sidebar($sidebar); ?>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php get_template_part('template-parts/footer/copyright'); ?>
    </div>
<?php endif; ?>
