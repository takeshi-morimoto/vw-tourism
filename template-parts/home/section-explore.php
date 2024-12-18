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
                    <span class="custom-select-trigger explore-select-title">Select an option <i class="fa-solid fa-chevron-down"></i></span>
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
              <div class="owl-carousel owl-theme" id="explore-carousel">
                <?php
                while ($query->have_posts()) {
                    $query->the_post();
                    $images = get_post_meta(get_the_ID(), 'additional_meta_fields', true); // カスタムフィールドから画像取得
                    ?>
                    <div class="explore-inners">
                        <div class="explore-img">
                            <img style="border-radius: 10px;" src="<?php echo esc_url($images['image'] ?? ''); ?>" alt="Explore Image">
                        </div>
                        <div class="d-flex gap-2 mt-2">
                            <div class="explore-inner-box">
                                <h6 class="explore-inner-title"><?php echo esc_html($images['text1'] ?? ''); ?></h6>
                                <h6 class="explore-inner-title"><?php echo esc_html($images['text2'] ?? ''); ?></h6>
                            </div>
                            <div class="explore-inner-box">
                                <h6 class="explore-inner-title"><?php echo esc_html($images['text3'] ?? ''); ?></h6>
                                <h6 class="explore-inner-title"><?php echo esc_html($images['text4'] ?? ''); ?></h6>
                            </div>
                        </div>
                    </div>
                <?php }
                wp_reset_postdata(); ?>
              </div>
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

<script>
document.addEventListener('DOMContentLoaded', function() {
    $('#explore-carousel').owlCarousel({
        loop: true,
        margin: 20,
        nav: true,
        dots: false,
        items: 3,
        navText: ['<i class="fa-solid fa-chevron-left"></i>', '<i class="fa-solid fa-chevron-right"></i>'],
        responsive: {
            0: { items: 1 },
            600: { items: 2 },
            1000: { items: 3 }
        }
    });
});
</script>

<?php
while ($query->have_posts()) {
    $query->the_post();
    $images = get_post_meta(get_the_ID(), 'additional_meta_fields', true); // カスタムフィールドから画像取得
    echo '<pre>';
    print_r($images); // デバッグ: 取得した値を確認
    echo '</pre>';
    ?>
    <div class="explore-inners">
        <div class="explore-img">
            <?php if (!empty($images['image'])) { ?>
                <img style="border-radius: 10px;" src="<?php echo esc_url($images['image']); ?>" alt="Explore Image">
            <?php } else { ?>
                <p>No image available.</p>
            <?php } ?>
        </div>
    </div>
<?php }
wp_reset_postdata();

if (empty($images)) {
    echo '<p>No custom field data available.</p>';
}

?>
