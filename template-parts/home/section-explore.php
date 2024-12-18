<?php
// セクションの表示/非表示をテーマの設定から取得
$section_hide = get_theme_mod( 'vw_tourism_pro_explore_enabledisable' );
if ( 'Disable' == $section_hide ) {
  return; // 非表示の場合は出力せずに終了
}

// 背景色または背景画像の設定を取得
if( get_theme_mod('vw_tourism_pro_explore_bgcolor','') ) {
  $explore_bg = 'background-color:'.esc_attr(get_theme_mod('vw_tourism_pro_explore_bgcolor','')).';';
}elseif( get_theme_mod('vw_tourism_pro_explore_bgimage','') ){
  $explore_bg = 'background-image:url(\''.esc_url(get_theme_mod('vw_tourism_pro_explore_bgimage')).'\')';
}else{
  $explore_bg = ''; // 背景設定がない場合
}

// 背景のCSSのattachment設定を取得
$img_bg = get_theme_mod('vw_tourism_pro_explore_bg_attachment');

// WP_Queryでカスタム投稿タイプ「tcp_explore」を取得
$args = array(
  'post_type'      => 'tcp_explore', // カスタム投稿タイプ
  'posts_per_page' => 10, // 取得する投稿の件数
  'fields'         => 'ids' // 投稿IDのみを取得
);
$query = new WP_Query($args);

?>

<?php
while ($query->have_posts()) {
    $query->the_post();
    $post_id = get_the_ID();

    // カスタムフィールドを取得
    $image = get_post_meta($post_id, 'image_meta_field', true);
    $text1 = get_post_meta($post_id, 'text1_meta_field', true);
    $text2 = get_post_meta($post_id, 'text2_meta_field', true);
    $text3 = get_post_meta($post_id, 'text3_meta_field', true);
    $text4 = get_post_meta($post_id, 'text4_meta_field', true);
    ?>
    <div class="custom-option" data-value="<?php echo esc_attr($post_id); ?>">
        <?php if ($image) { ?>
            <img src="<?php echo esc_url($image); ?>" alt="Meta Image">
        <?php } ?>
        <p><?php echo esc_html($text1); ?></p>
        <p><?php echo esc_html($text2); ?></p>
        <p><?php echo esc_html($text3); ?></p>
        <p><?php echo esc_html($text4); ?></p>
    </div>
<?php }
wp_reset_postdata();
?>


<!-- 「Explore」セクションの表示実装 -->
<section id="explore" style="<?php echo esc_attr($explore_bg); ?>" class="<?php echo esc_attr($img_bg); ?> pb-0" >
  <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 wow zoomIn delay-2000">
          <?php 
          // サブヘッダーが設定されている場合に表示
          if(get_theme_mod('vw_tourism_pro_explore_sub_heading')!=''){ ?>
            <p class="sec-sub-heading text-md-start text-center">
              <?php echo esc_html(get_theme_mod('vw_tourism_pro_explore_sub_heading')); ?>
            </p>
          <?php } ?>

          <?php 
          // ヘッダーが設定されている場合
          if(get_theme_mod('vw_tourism_pro_explore_heading')!=''){ ?>
            <h2 class="sec-heading text-md-start text-center">
              <?php echo esc_html(get_theme_mod('vw_tourism_pro_explore_heading')); ?>
            </h2>
          <?php } ?>

          <?php 
          // 説明文が設定されている場合
          if(get_theme_mod('vw_tourism_pro_explore_paragraph')!=''){ ?>
            <p class="text-md-start text-center exp-para">
              <?php echo esc_html(get_theme_mod('vw_tourism_pro_explore_paragraph')); ?>
            </p>
          <?php } ?>

          <!-- ドロップダウンメニューの表示 -->
          <div class="explore-inner">
            <?php
              if ($query->have_posts()) {
                $first_post = true; // 最初の投稿を選択状態にするためのフラグ
                ?>
                <div class="custom-select-wrapper">
                  <div class="custom-select">
                    <span class="custom-select-trigger explore-select-title">「Select an option」 <i class="fa-solid fa-chevron-down"></i></span>
                    <ul class="custom-options">
                      <?php
                        $selected_post_id = '';
                        $selected_post_title = '';
                        
                        // ドロップダウンの選択肢を一覧表示
                        while ($query->have_posts()) {
                          $query->the_post();
                          if ($first_post) {
                            $selected_post_id = esc_attr(get_the_ID());
                            $selected_post_title = esc_html(get_the_title());
                            $first_post = false; // 最初の投稿を記録
                          }
                          ?>
                          <li class="custom-option" data-value="<?php echo esc_attr(get_the_ID()); ?>">
                            <?php echo esc_html(get_the_title()); ?>
                          </li>
                        <?php }
                        wp_reset_postdata(); // クリーンアップ
                      ?>
                    </ul>
                  </div>
                </div>
              <?php }
            ?>
            <div class="explore-main-wrapper mt-2">
              <!-- ここにコンテンツが表示される -->
            </div>
          </div>
        </div>

        <!-- 右側の地図画像表示 -->
        <div class="col-lg-6 wow zoomIn delay-2000">
            <img class="map-img" src="<?php echo esc_url(get_theme_mod('vw_tourism_pro_explore_map_img')); ?>" alt="Explore Map">
        </div>
      </div>
  </div>
</section>
