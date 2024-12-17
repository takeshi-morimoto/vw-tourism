<?php
// デフォルトのデータ設定
$selected_post_title   = '';
$selected_post_content = '';
$selected_post_image   = '';

if ($query->have_posts()) {
  $first_post = $query->posts[0]; // 最初の投稿データを直接取得
  $selected_post_title   = get_the_title($first_post);
  $selected_post_content = wp_kses_post(get_post_field('post_content', $first_post));
  $selected_post_image   = get_the_post_thumbnail_url($first_post->ID, 'full') ?: 'path/to/default-image.jpg';
}
?>

<section id="explore" style="<?php echo esc_attr($explore_bg); ?>" class="<?php echo esc_attr($img_bg); ?> pb-0">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="explore-inner">
          <div class="custom-select-wrapper">
            <div class="custom-select">
              <span class="custom-select-trigger explore-select-title"><?php echo esc_html($selected_post_title); ?></span>
              <ul class="custom-options">
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                  <li class="custom-option" 
                      data-content="<?php echo esc_attr(get_the_content()); ?>" 
                      data-image="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>">
                    <?php the_title(); ?>
                  </li>
                <?php endwhile; wp_reset_postdata(); ?>
              </ul>
            </div>
          </div>

          <!-- 初期コンテンツ -->
          <div class="explore-main-wrapper mt-2">
            <h3><?php echo esc_html($selected_post_title); ?></h3>
            <p><?php echo esc_html($selected_post_content); ?></p>
            <img src="<?php echo esc_url($selected_post_image); ?>" alt="<?php echo esc_attr($selected_post_title); ?>">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const options = document.querySelectorAll('.custom-option');
  const contentWrapper = document.querySelector('.explore-main-wrapper');
  const selectTrigger = document.querySelector('.custom-select-trigger');

  // 選択肢クリックイベントの設定
  options.forEach(option => {
    option.addEventListener('click', function () {
      const content = this.dataset.content;
      const image = this.dataset.image;

      // デフォルトコンテンツを動的に更新
      contentWrapper.innerHTML = `
        <h3>${this.textContent}</h3>
        <p>${content}</p>
        <img src="${image}" alt="${this.textContent}">
      `;

      // トリガーのタイトル更新
      selectTrigger.textContent = this.textContent;
    });
  });

  // セレクトボックスの開閉設定
  selectTrigger.addEventListener('click', function () {
    this.parentElement.classList.toggle('open');
  });
});
</script>
