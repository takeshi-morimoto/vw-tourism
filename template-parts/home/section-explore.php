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
    'posts_per_page' => 1, // 最初の投稿だけ取得
];
$query = new WP_Query($args);

// デフォルト画像
$default_image = 'https://example.com/default-image.jpg';
?>

<section id="explore" class="pb-0" style="<?php echo esc_attr($explore_bg); ?>">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
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
          <?php if ($query->have_posts()) : ?>
            <?php
              $query->the_post();
              $additional_fields = get_post_meta(get_the_ID(), 'package_explore_meta_fields', true);
              wp_reset_postdata();

              if(!empty($additional_fields) && is_array($additional_fields)): ?>
                <div class="explore-main-wrapper mt-2">
                  <p class="text-md-start text-center">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry...
                  </p>
                  <div class="explore-list">
                    <ul>
                      <?php foreach($additional_fields as $field): ?>
                      <li>
                        <div class="explore-inners">
                          <div class="explore-img">
                            <img style="border-radius:10px;" src="<?php echo esc_url($field['image']); ?>" alt="<?php echo esc_attr($field['text1']); ?>">
                          </div>
                          <div class="d-flex gap-2 mt-2">
                            <div class="explore-inner-box">
                              <h6 class="explore-inner-title"><?php echo esc_html($field['text1']); ?></h6>
                              <h6 class="explore-inner-title"><?php echo esc_html($field['text2']); ?></h6>
                            </div>
                            <div class="explore-inner-box">
                              <h6 class="explore-inner-title"><?php echo esc_html($field['text3']); ?></h6>
                              <h6 class="explore-inner-title"><?php echo esc_html($field['text4']); ?></h6>
                            </div>
                          </div>
                        </div>
                      </li>
                      <?php endforeach; ?>
                    </ul>
                  </div>
                </div>
              <?php else: ?>
                <p>No additional fields found for this post.</p>
              <?php endif; ?>
          <?php else : ?>
            <p>No Regions Available</p>
          <?php endif; ?>
        </div>
      </div>
      
      <div class="col-lg-6">
        <img class="map-img"
             src="<?php echo esc_html(get_theme_mod('vw_tourism_pro_explore_map_img')); ?>" 
             alt="Map">
      </div>
    </div>
  </div>
</section>

<?php
// デバッグ用コード（開発中のみ有効にする）
// セレクトや複数投稿、スライダーも外したため、ここでは単純にデバッグ
if (defined('WP_DEBUG') && WP_DEBUG) {
    echo '<h3>テスト: 投稿データ</h3>';
    // 同じ条件で取得
    $debug_query = new WP_Query($args);
    if ($debug_query->have_posts()):
        while ($debug_query->have_posts()): $debug_query->the_post();
            echo '<p>タイトル: ' . get_the_title() . '</p>';
            $debug_additional_fields = get_post_meta(get_the_ID(), 'package_explore_meta_fields', true);
            if (!empty($debug_additional_fields)) {
                echo '<pre>';
                print_r($debug_additional_fields);
                echo '</pre>';
            } else {
                echo '<p>追加メタフィールドが見つかりません</p>';
            }
        endwhile;
        wp_reset_postdata();
    else:
        echo '<p>投稿が見つかりませんでした。</p>';
    endif;
}
