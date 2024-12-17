<?php
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

$args = array(
  'post_type'      => 'tcp_explore',
  'posts_per_page' => 10,
);
$query = new WP_Query($args);

// 初期表示のための最初の投稿データを取得
$selected_post_id    = '';
$selected_post_title = '';
$selected_post_excerpt = '';
$selected_post_image = '';

if ($query->have_posts()) {
  $query->the_post();
  $selected_post_id    = get_the_ID();
  $selected_post_title = get_the_title();
  $selected_post_excerpt = get_the_excerpt();
  $selected_post_image = get_the_post_thumbnail_url($selected_post_id, 'full') ?: 'https://koikoi.co.jp/wp-content/uploads/default-image.jpg';
  wp_reset_postdata();
}
?>
<section id="explore" style="<?php echo esc_attr($explore_bg); ?>" class="<?php echo esc_attr($img_bg); ?> pb-0">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 wow zoomIn delay-2000">
        <h2 class="sec-heading text-md-start text-center"><?php echo esc_html(get_theme_mod('vw_tourism_pro_explore_heading', 'Explore Our Highlights')); ?></h2>
        <div class="explore-inner">
          <div class="custom-select-wrapper">
            <div class="custom-select">
              <span class="custom-select-trigger explore-select-title"><?php echo esc_html($selected_post_title); ?> <i class="fa-solid fa-chevron-down"></i></span>
              <ul class="custom-options">
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                  <li class="custom-option" 
                      data-id="<?php echo esc_attr(get_the_ID()); ?>">
                    <?php echo esc_html(get_the_title()); ?>
                  </li>
                <?php endwhile; wp_reset_postdata(); ?>
              </ul>
            </div>
          </div>

          <!-- 初期表示コンテンツ -->
          <div class="explore-main-wrapper mt-2">
            <div class="content">
              <h3><?php echo esc_html($selected_post_title); ?></h3>
              <p><?php echo esc_html($selected_post_excerpt); ?></p>
              <img src="<?php echo esc_url($selected_post_image); ?>" alt="<?php echo esc_attr($selected_post_title); ?>">
            </div>
          </div>
        </div>
      </div>
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

  options.forEach(option => {
    option.addEventListener('click', function () {
      const postId = this.dataset.id;

      fetch(`<?php echo admin_url('admin-ajax.php'); ?>?action=get_post_data&id=${postId}`)
        .then(response => response.json())
        .then(data => {
          contentWrapper.innerHTML = `
            <div class="content">
              <h3>${data.title}</h3>
              <p>${data.excerpt}</p>
              <img src="${data.image}" alt="${data.title}">
            </div>
          `;
          selectTrigger.textContent = data.title;
        })
        .catch(error => console.error('Error fetching post data:', error));
    });
  });

  selectTrigger.addEventListener('click', function () {
    this.parentNode.classList.toggle('open');
  });
});
</script>
