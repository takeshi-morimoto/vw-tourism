<?php
/**
 * Template part for displaying header content
 *
 * @package vw_tourism_pro
 */

// 変数の初期化
$menu_width = get_theme_mod('vw_tourism_pro_menu_width', 'default'); // デフォルト値を設定

$header_widgets_section = get_theme_mod( 'vw_tourism_pro_header_widgets_enable' );
if ( 'Disable' == $header_widgets_section ) {
   return;
}

if( get_theme_mod('vw_tourism_pro_header_widgets_bgcolor','') ) {
   $background_setting = 'background-color:'.esc_attr(get_theme_mod('vw_tourism_pro_header_widgets_bgcolor','')).';';
} else {
   $background_setting = '';
}
?>

<div class="container">
  <div class="row justify-content-between bg-media align-items-center">
    
    <!-- ロゴセクション -->
    <div class="logo col-lg-2 col-md-4 col-4 order-lg-1">
      <?php if (has_custom_logo()) {  
          vw_tourism_pro_the_custom_logo();
      } else { ?>
          <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" alt="<?php bloginfo('name'); ?>"/>
          </a>
      <?php } ?>
    </div>

    <!-- メニューナビゲーション -->
    <div class="header-menu col-lg-8 col-md-1 col-1 order-lg-2">
      <div class="menubar">
        <div class="toggle-nav mobile-menu">
          <!-- ハンバーガーメニュー -->
          <button id="open_nav" aria-expanded="false" aria-label="Open Menu">
              <i class="<?php echo esc_html(get_theme_mod('vw_tourism_pro_res_open_menu_icon', 'fas fa-bars')); ?>"></i>
          </button>
        </div>
        <nav id="site-navigation" class="main-navigation">
          <?php wp_nav_menu(array(
            'theme_location' => 'primary',
            'container_class' => 'menu clearfix',
            'menu_class' => 'clearfix',
            'fallback_cb' => 'wp_page_menu',
          )); ?>
        </nav>
      </div>
    </div>

  </div>
  <span class="d-none" id="menu-width"><?php echo esc_html($menu_width); ?></span>
</div>
