<?php
// セクションを非表示にする場合
$section_hide = get_theme_mod('vw_tourism_pro_explore_enabledisable');
if ('Disable' == $section_hide) {
  return;
}

// 背景スタイルの設定
if (get_theme_mod('vw_tourism_pro_explore_bgcolor', '')) {
  $explore_bg = 'background-color:' . esc_attr(get_theme_mod('vw_tourism_pro_explore_bgcolor', '')) . ';';
} elseif (get_theme_mod('vw_tourism_pro_explore_bgimage', '')) {
  $explore_bg = 'background-image:url(\'' . esc_url(get_theme_mod('vw_tourism_pro_explore_bgimage')) . '\')';
} else {
  $explore_bg = '';
}
$img_bg = get_theme_mod('vw_tourism_pro_explore_bg_attachment');

// 投稿データ取得
$args = array(
  'post_type'      => 'tcp_explore',
  'posts_per_page' => 10,
);
$query = new WP_Query($args);

// セクションの開始
?>
<section id="explore" style="<?php echo esc_attr($explore_bg); ?>" class="<?php echo esc_attr($img_bg); ?> pb-0">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 wow zoomIn delay-2000">
        <?php if ($sub_heading = get_theme_mod('vw_tourism_pro_explore_sub_heading')) { ?>
          <p class="sec-sub-heading text-md-start text-center"><?php echo esc_html($sub_heading); ?></p>
        <?php } ?>
        <?php if ($heading = get_theme_mod('vw_tourism_pro_explore_heading')) { ?>
          <h2 class="sec-heading text-md-start text-center"><?php echo esc_html($heading); ?></h2>
        <?php } ?>
        <?php if ($paragraph = get_theme_mod('vw_tourism_pro_explore_paragraph')) { ?>
          <p class="text-md-start text-center exp-para"><?php echo esc_html($paragraph); ?></p>
        <?php } ?>

        <div class="explore-inner">
          <?php if ($query->have_posts()) {
            $first_post = true; ?>
            <div class="custom-select-wrapper">
              <div class="custom-select">
                <span class="custom-select-trigger explore-select-title">Select an option <i class="fa-solid fa-chevron-down"></i></span>
                <ul class="custom-options">
                  <?php
                  $selected_post_id = '';
                  $selected_post_title = '';
                  $selected_post_content = '';
                  $selected_post_image = '';

                  while ($query->have_posts()) {
                    $query->the_post();
                    $post_id = get_the_ID();
                    $post_title = get_the_title();
                    $post_content = wp_kses_post(get_the_content());
                    $post_image = get_the_post_thumbnail_url($post_id, 'full') ?: 'path/to/default-image.jpg';

                    // 初回の投稿をデフォルト表示
                    if ($first_post) {
                      $selected_post_id = $post_id;
                      $selected_post_title = $post_title;
                      $selected_post_content = $post_content;
                      $selected_post_image = $post_image;
                      $first_post = false;
                    }
                    ?>
                    <li class="custom-option" 
                        data-value="<?php echo esc_attr($post_id); ?>" 
                        data-content="<?php echo htmlspecialchars($post_content, ENT_QUOTES, 'UTF-8'); ?>"
                        data-image="<?php echo esc_url($post_image); ?>">
                      <?php echo esc_html($post_title); ?>
                    </li>
                  <?php }
                  wp_reset_postdata(); ?>
                </ul>
              </div>
            </div>
          <?php } ?>

          <!-- デフォルトコンテンツ表示 -->
          <div class="explore-main-wrapper mt-2">
            <div class="default-content">
              <h3><?php echo esc_html($selected_post_title); ?></h3>
              <p><?php echo esc_html($selected_post_content); ?></p>
              <img src="<?php echo esc_url($selected_post_image); ?>" alt="<?php echo esc_attr($selected_post_title); ?>">
            </div>
          </div>
        </div>
      </div>

      <!-- 右側の画像 -->
      <div class="col-lg-6 wow zoomIn delay-2000">
        <img class="map-img" src="<?php echo esc_url(get_theme_mod('vw_tourism_pro_explore_map_img')); ?>" alt="Map Image">
      </div>
    </div>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const options = document.querySelectorAll('.custom-option');
  const contentWrapper = document.querySelector('.explore-main-wrapper');
  const selectTrigger = document.querySelector('.custom-select-trigger');

  // 初期表示用データ
  const firstOption = options[0]; // 最初の選択肢を取得
  if (firstOption) {
    const selectedTitle = firstOption.innerText;
    const selectedContent = firstOption.dataset.content;
    const selectedImage = firstOption.dataset.image;

    // デフォルトコンテンツを表示
    contentWrapper.innerHTML = `
      <div class="content">
        <h3>${selectedTitle}</h3>
        <p>${selectedContent}</p>
        <img src="${selectedImage}" alt="${selectedTitle}">
      </div>
    `;

    // セレクトトリガーも初期状態に反映
    selectTrigger.textContent = selectedTitle;
  }

  // 選択肢クリックイベントの設定
  options.forEach(option => {
    option.addEventListener('click', function () {
      const selectedTitle = this.innerText;
      const selectedContent = this.dataset.content;
      const selectedImage = this.dataset.image;

      // コンテンツを動的に更新
      contentWrapper.innerHTML = `
        <div class="content">
          <h3>${selectedTitle}</h3>
          <p>${selectedContent}</p>
          <img src="${selectedImage}" alt="${selectedTitle}">
        </div>
      `;

      // UIの選択状態を更新
      selectTrigger.textContent = selectedTitle;
    });
  });

  // セレクトボックスの開閉
  selectTrigger.addEventListener('click', function () {
    this.parentNode.classList.toggle('open');
  });
});
</script>
