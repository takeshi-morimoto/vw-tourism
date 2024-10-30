<?php
/**
 * Template part for displaying header content
 *
 * @package vw_tourism_pro
 */
 $header_widgets_section = get_theme_mod( 'vw_tourism_pro_header_widgets_enable' );
 if ( 'Disable' == $header_widgets_section ) {
   return;
 }
 if( get_theme_mod('vw_tourism_pro_header_widgets_bgcolor','') ) {
   $background_setting = 'background-color:'.esc_attr(get_theme_mod('vw_tourism_pro_header_widgets_bgcolor','')).';';
 }else{
   $background_setting = '';
 }
?>
  <div class="container">
    <div class="row justify-content-between  bg-media align-items-center   ">
        <div class="logo col-lg-2 col-md-4 col-4  order-lg-1 order-md-1 order-sm-1 order-1">
          <?php
             if( has_custom_logo() ){  vw_tourism_pro_the_custom_logo();  }
             $logo= get_theme_mod( 'custom_logo' );
             if($logo){ ?>
           <div class="logo-text">
             <?php if( get_theme_mod('vw_tourism_pro_display_title') ){ ?>
             <h2 class="logo-title">
               <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                 <?php esc_attr(bloginfo( 'name' )); ?>
               </a>
             </h2>
             <?php }
                if( get_theme_mod('vw_tourism_pro_display_tagline')){
                  $description = get_bloginfo( 'description', 'display' );
                  if ( $description || is_customize_preview() ) : ?>
             <p class="site-description">
                <?php echo esc_html($description); ?>
             </p>
             <?php endif; }  ?>
          </div>
          <?php }
           else  { ?>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
           <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" alt="<?php bloginfo( 'name' ); ?>"/>
          </a>
          <?php }?>
        </div>
        <div class="header-menu col-lg-8 col-md-1 col-1  order-lg-2 order-md-3 order-sm-3 order-3">
          <div class="menubar">
                <div class="innermenubox">
                  <div class="toggle-nav mobile-menu">
                    <div role="button" on="tap:sidebar1.toggle" tabindex="0" class="hamburger" id="open_nav"><span class="screen-reader-text"><?php echo esc_html( 'Menu', 'vw-tourism-pro' ); ?></span><i class="<?php echo esc_html(get_theme_mod('vw_tourism_pro_res_open_menu_icon', 'fas fa-bars')); ?>"></i></div>
                  </div>
                  <div class="main-header">
                    <div id="mySidenav" class="nav sidenav main_list justify-content-center">
                      <nav id="site-navigation" class="main-navigation " >
                        <?php
                          wp_nav_menu( array(
                            'theme_location' => 'primary',
                            'container_class' => 'menu clearfix' ,
                            'menu_class' => 'clearfix',
                            'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                            'fallback_cb' => 'wp_page_menu',
                          ) );
                        ?>
                      </nav>
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
                        </nav>
                      </div>
                  </amp-sidebar>
                  <div class="clearfix"></div>
                </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-7 col-7  order-lg-3 order-md-2 order-sm-2 order-2 ">
          <div class="d-flex gap-md-3 gap-1 justify-content-md-end justify-content-sm-end justify-content-end align-items-center">
            <form role="search" method="get" class="search-form serach-page d-flex search-box" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <input type="search" class="search-field search-input"  placeholder="Search"  value="<?php echo esc_attr(the_search_query()); ?>" name="s" required>
                <!-- <input type="hidden" name="post_type" value="tcp_package"> -->
                <button type="submit" name="button" class="search-btn">
                  <i class="<?php echo esc_html(get_theme_mod('vw_tourism_pro_header_search_icon')); ?>"></i>
                </button>
            </form>
            <div class="header-account-main" style="position: relative;">
               <a href="<?php echo esc_html(get_theme_mod('vw_tourism_pro_header_user_icon_url'));?>"><i class="fas fa-user"></i></a>
                 <?php /*
                 if (!is_user_logged_in()) { ?>
                   <a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('My Account','woothemes'); ?>"> <i class="<?php echo esc_html(get_theme_mod('vw_tourism_pro_header_admin_user_icon','fas fa-user')); ?>"></i></a>
                 <?php } else { ?>
                   <a href="<?php echo home_url();?>"><i class="fa-solid fa-house"></i></a>
                 <?php }
                 */?>
             </div>
          </div>

        </div>


  </div>
 <span class="d-none" id="menu-width"><?php echo esc_html($menu_width); ?></span>


</div>
