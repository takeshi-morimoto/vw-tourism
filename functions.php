<?php
// 親テーマのスタイルシートを読み込む関数
function vw_tourism_pro_child_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(), array('parent-style') ); // 子テーマのスタイルシート
}
add_action( 'wp_enqueue_scripts', 'vw_tourism_pro_child_enqueue_styles' );

// マテリアルデザインのスタイルとスクリプトを読み込む関数
function vw_tourism_pro_child_enqueue_material() {
    wp_enqueue_style( 'material-css', 'https://fonts.googleapis.com/icon?family=Material+Icons', array(), null ); // アイコン用
    wp_enqueue_style( 'material-lite-css', 'https://code.getmdl.io/1.3.0/material.indigo-pink.min.css', array(), '1.3.0' ); // マテリアルデザインのCSS
    wp_enqueue_script( 'material-js', 'https://code.getmdl.io/1.3.0/material.min.js', array('jquery'), '1.3.0', true ); // マテリアルデザインのJavaScript
}
add_action( 'wp_enqueue_scripts', 'vw_tourism_pro_child_enqueue_material' );

// 親テーマのJavaScriptとローカライズを追加する関数
function vw_tourism_pro_child_enqueue_theme_scripts() {
    wp_enqueue_script( 'theme-wizard', get_template_directory_uri() . '/theme-wizard/assets/js/theme-wizard.js', array('jquery'), null, true );

    // 親テーマで使用されるパラメータをJavaScriptに渡す
    wp_localize_script( 'theme-wizard', 'vw_tourism_pro_whizzie_params', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'wpnonce' => wp_create_nonce('vw_tourism_pro_nonce')
    ));
}
add_action( 'wp_enqueue_scripts', 'vw_tourism_pro_child_enqueue_theme_scripts' );

?>
