<?php
/**
 * Template part for displaying Header Widgets Content
 *
 * @package vw_tourism_pro
 */



$menu_width="";
 if ( get_theme_mod('vw_tourism_pro_site_menu_width',true) != "" ) {
   $menu_width=get_theme_mod('vw_tourism_pro_site_menu_width','250');
 }
if(get_theme_mod('vw_tourism_pro_head_sticky_header', true) == false){
 $sticky_class = 'not_sticky';
}
else{
 $sticky_class = 'yes_sticky';
}
?>
<?php if ( class_exists( 'WooCommerce' ) ) { ?>
<div id="header_widgets">
  <div class="container">
  <div class="menubar <?php echo esc_attr($sticky_class); ?>">
    <div class="row">
      <div class="col-xl-9 col-lg-7 col-md-4 col-sm-4 col-2 content_head_col">
        <div class="innermenubox ">
          <div class="toggle-nav mobile-menu">
            <div role="button" on="tap:sidebar1.toggle" tabindex="0" class="hamburger" id="open_nav"><span class="screen-reader-text"><?php echo esc_html( 'Menu', 'vw-tourism-pro' ); ?></span><i class="<?php echo esc_html(get_theme_mod('vw_tourism_pro_res_open_menu_icon', 'fas fa-bars')); ?>"></i></div>
          </div>
          <div class="main-header">
            <div id="mySidenav" class="nav sidenav">
              <nav id="site-navigation" class="main-navigation">
                <?php
                  wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container_class' => 'menu clearfix' ,
                    'menu_class' => 'clearfix',
                    'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                    'fallback_cb' => 'wp_page_menu',
                  ) );
                ?>
              </nav><!-- #site-navigation -->
            </div>
          </div>
          <amp-sidebar id="sidebar1" layout="nodisplay" side="left">
            <div role="button" aria-label="close sidebar" on="tap:sidebar1.toggle" tabindex="0" class="close-sidebar closebtn mobile-menu" id="close_nav"><i class="<?php echo esc_html(get_theme_mod('vw_tourism_pro_res_close_menu_icon', 'fas fa-times')); ?>"></i></div>
              <div id="mySidenav" class="nav sidenav">
                <nav id="site-navigation" class="main-navigation">
                  <?php
                    wp_nav_menu( array(
                      'theme_location' => 'primary',
                      'container_class' => 'menu clearfix' ,
                      'menu_class' => 'clearfix',
                      'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                      'fallback_cb' => 'wp_page_menu',
                    ) );
                  ?>
                </nav><!-- #site-navigation -->
              </div>
          </amp-sidebar>

          <div class="clearfix"></div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-5 col-md-7 col-sm-8 col-10 head-togle">
        <?php if(get_theme_mod('vw_tourism_pro_header_title',true) != ''){?>
          <p class="header_title"><?php echo esc_html(get_theme_mod('vw_tourism_pro_header_title')); ?></p>
        <?php } ?>
      </div>
    </div>
  </div>
  </div>
</div>
<?php } ?>
