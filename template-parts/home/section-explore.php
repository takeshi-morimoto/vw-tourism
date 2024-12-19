<?php
// セクションの表示/非表示設定
$section_hide = get_theme_mod('vw_tourism_pro_explore_enabledisable');
if ($section_hide === 'Disable') return;

// 背景設定
$explore_bg = '';
if ($bg_color = get_theme_mod('vw_tourism_pro_explore_bgcolor', '')) {
    $explore_bg = 'background-color:' . esc_attr($bg_color) . ';';
} elseif ($bg_image = get_theme_mod('vw_tourism_pro_explore_bgimage', '')) {
    $explore_bg = 'background-image:url(' . esc_url($bg_image) . ');';
}

// カスタム投稿タイプ「tcp_explore」を取得
$args = [
    'post_type' => 'tcp_explore',
    'posts_per_page' => 10,
];
$query = new WP_Query($args);

// デフォルト画像
$default_image = 'https://example.com/default-image.jpg';
?>

<section id="explore" class="pb-0" style="<?php echo esc_attr($explore_bg); ?>">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 wow zoomIn delay-2000">
        <?php if(get_theme_mod('vw_tourism_pro_explore_sub_heading')!=''){ ?>
          <p class="sec-sub-heading text-md-start text-center"><?php echo esc_html(get_theme_mod('vw_tourism_pro_explore_sub_heading')); ?></p>
        <?php } ?>
        <?php if(get_theme_mod('vw_tourism_pro_explore_heading')!=''){ ?>
          <h2 class="sec-heading text-md-start text-center"><?php echo esc_html(get_theme_mod('vw_tourism_pro_explore_heading')); ?></h2>
        <?php } ?>
        <?php if(get_theme_mod('vw_tourism_pro_explore_paragraph')!=''){ ?>
          <p class="text-md-start text-center exp-para"><?php echo esc_html(get_theme_mod('vw_tourism_pro_explore_paragraph')); ?></p>
        <?php } ?>

        <div class="explore-inner">
          <?php
            if ($query->have_posts()) {
              $first_post = true;
              $selected_post_title = '';
              $selected_post_id = '';
              ?>
              <div class="custom-select-wrapper">
                <div class="custom-select">
                  <!-- 最初の投稿をデフォルト選択状態に -->
                  <?php 
                    // ループ一旦回して最初の投稿情報を取得
                    $query->the_post();
                    $selected_post_id = get_the_ID();
                    $selected_post_title = get_the_title();
                    wp_reset_postdata(); // 再度ループ走らせるためにリセット

                    // 再ループ開始
                    $query->rewind_posts();
                  ?>
                  <span class="custom-select-trigger explore-select-title" data-value="<?php echo esc_attr($selected_post_id); ?>">
                    <?php echo esc_html($selected_post_title); ?> <i class="fa-solid fa-chevron-down"></i>
                  </span>
                  <ul class="custom-options" style="display: none;">
                    <?php
                      while ($query->have_posts()) {
                        $query->the_post();
                        $post_id = get_the_ID();
                        $post_title = get_the_title();
                        ?>
                        <li class="custom-option" data-value="<?php echo esc_attr($post_id); ?>"><?php echo esc_html($post_title); ?></li>
                        <?php
                      }
                      wp_reset_postdata();
                    ?>
                  </ul>
                </div>
              </div>
            <?php } else {
              // 投稿がない場合
              ?>
              <p>No Regions Available</p>
              <?php
            }
          ?>

          <div class="explore-main-wrapper mt-2">
            <!-- ここに説明文やAjaxで動的更新するテキストなどを配置 -->
            <p class="text-md-start text-center">
              <!-- この部分にロジックを追加して、選択された投稿IDに応じた説明をAjaxなどで取得可能 -->
              <!-- 例：選択された投稿IDを用いてget_post_meta()などで情報取得 -->
              Lorem Ipsum is simply dummy text of the printing and typesetting industry...
            </p>

            <!-- スライダー要素（OwlかSlickかは状況に応じて） -->
            <!-- Owl Carousel例 -->
            <div class="owl-carousel owl-loaded owl-drag">
              <!-- ここに投稿情報から抽出したスライドアイテムを表示することも可能 -->
              <!-- 例として固定アイテムを配置 -->
              <div class="explore-inners">
                <div class="explore-img">
                  <img style="border-radius: 10px;" src="https://example.com/image1.jpg" alt="Slide 1">
                </div>
                <div class="d-flex gap-2 mt-2">
                  <div class="explore-inner-box">
                    <h6 class="explore-inner-title">875Km</h6>
                    <h6 class="explore-inner-title">Area</h6>
                  </div>
                  <div class="explore-inner-box">
                    <h6 class="explore-inner-title">91,12,520</h6>
                    <h6 class="explore-inner-title">Population</h6>
                  </div>
                </div>
              </div>
              <!-- 必要に応じて他のスライドアイテムを追加 -->
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-lg-6 wow zoomIn delay-2000">
        <img class="map-img" src="<?php echo esc_html(get_theme_mod('vw_tourism_pro_explore_map_img')); ?>" alt="">
      </div>
    </div>
  </div>
</section>
