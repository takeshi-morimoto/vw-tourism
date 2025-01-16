<?php
/**
 * The Header for our theme.
 *
 * @package vw-tourism-pro
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<header id="masthead" class="site-header">
    <!-- before header hook -->

    <?php
    $background_setting = '';
    if ($color = get_theme_mod('vw_tourism_pro_headerhomebg_color', '')) {
        $background_setting = "background-color: $color;";
    } elseif ($image = get_theme_mod('vw_tourism_pro_headerhomebg_image', '')) {
        $background_setting = "background-image: url('$image');";
    }

    // $img_bg が未定義の場合、デフォルト値を設定
    if (!isset($img_bg) || empty($img_bg)) {
        $img_bg = 'default-class'; // デフォルトクラス名を指定（例: 'default-class'）
    }
    ?>

    <?php if (get_theme_mod('vw_tourism_pro_products_spinner_enable', true)) { ?>
        <div class="eco-box">
            <span class="loader-6"></span>
        </div>
    <?php } ?>

    <a class="screen-reader-text skip-link" href="#maincontent"><?php esc_html_e('Skip to main content', 'vw-tourism-pro'); ?></a>

    <div id="header" class="<?php echo esc_attr($img_bg); ?> right_menu" style="<?php echo esc_attr($background_setting); ?>">
        <?php
        do_action('vw_tourism_pro_before_header');
        get_template_part('template-parts/header/content-header');
        ?>
    </div>
</header>
