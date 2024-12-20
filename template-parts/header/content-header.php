<div class="container">
  <div class="row justify-content-between align-items-center bg-media">
    <!-- ロゴセクション -->
    <div class="logo col-lg-2 col-md-4 col-4">
      <?php if (has_custom_logo()) {  
          vw_tourism_pro_the_custom_logo();
      } else { ?>
          <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" alt="<?php bloginfo('name'); ?>"/>
          </a>
      <?php } ?>
    </div>

    <!-- メインナビゲーション -->
    <div class="main-nav col-lg-10 col-md-8 col-8">
      <nav id="site-navigation" class="main-navigation">
        <?php wp_nav_menu(array(
          'theme_location' => 'primary',
          'container_class' => 'menu clearfix',
          'menu_class' => 'clearfix d-flex align-items-center', /* 横並び */
          'fallback_cb' => 'wp_page_menu',
        )); ?>
      </nav>
    </div>
  </div>
</div>
