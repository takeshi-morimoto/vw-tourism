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

// WP_Queryでカスタム投稿タイプ「tcp_explore」を取得
$args = [
    'post_type' => 'tcp_explore',
    'posts_per_page' => 10,
];
$query = new WP_Query($args);

// デフォルト画像
$default_image = 'https://example.com/default-image.jpg';

$additional_fields = get_post_meta(get_the_ID(), 'additional_meta_fields', true);
if (!empty($additional_fields)) {
    foreach ($additional_fields as $field) {
        $image = isset($field['image']) ? esc_url($field['image']) : '';
        $text1 = isset($field['text1']) ? esc_html($field['text1']) : '';
        $text2 = isset($field['text2']) ? esc_html($field['text2']) : '';
        $text3 = isset($field['text3']) ? esc_html($field['text3']) : '';
        $text4 = isset($field['text4']) ? esc_html($field['text4']) : '';
        
        // 表示例
        echo '<div class="explore-item">';
        echo '<img src="' . $image . '" alt="' . $text1 . '">';
        echo '<p>' . $text1 . ' - ' . $text2 . ' - ' . $text3 . ' - ' . $text4 . '</p>';
        echo '</div>';
    }
}

?>



<section id="explore" style="<?php echo esc_attr($explore_bg); ?>">
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
                    ?>
                    <div class="custom-select-wrapper">
                        <div class="custom-select">
                            <span class="custom-select-trigger explore-select-title">Select an option <i class="fa-solid fa-chevron-down"></i></span>
                            <ul class="custom-options">
                                <?php
                                $selected_post_id = '';
                                $selected_post_title = '';
                                while ($query->have_posts()) {
                                    $query->the_post();
                                    if ($first_post) {
                                        $selected_post_id = esc_attr(get_the_ID());
                                        $selected_post_title = esc_html(get_the_title());
                                        $first_post = false;
                                    }
                                    ?>
                                    <li class="custom-option" data-value="<?php echo esc_attr(get_the_ID()); ?>"><?php echo esc_html(get_the_title()); ?></li>
                                    <?php
                                }
                                wp_reset_postdata();
                                ?>
                            </ul>
                        </div>
                    </div>
                    <?php
                }
                ?>
                <div class="explore-main-wrapper mt-2">
                    <?php
                    if (!empty($selected_post_id)) {
                        // 選択された投稿のカスタムフィールドを取得
                        $additional_fields = get_post_meta($selected_post_id, 'additional_meta_fields', true);
                        if (!empty($additional_fields)) {
                            foreach ($additional_fields as $field) {
                                $image = isset($field['image']) ? esc_url($field['image']) : '';
                                $text1 = isset($field['text1']) ? esc_html($field['text1']) : '';
                                $text2 = isset($field['text2']) ? esc_html($field['text2']) : '';
                                $text3 = isset($field['text3']) ? esc_html($field['text3']) : '';
                                $text4 = isset($field['text4']) ? esc_html($field['text4']) : '';

                                // HTML出力
                                ?>
                                <div class="explore-item">
                                    <?php if ($image): ?>
                                        <img src="<?php echo $image; ?>" alt="<?php echo $text1; ?>" class="img-fluid rounded-3">
                                    <?php endif; ?>
                                    <p><?php echo $text1 . ' - ' . $text2 . ' - ' . $text3 . ' - ' . $text4; ?></p>
                                </div>
                                <?php
                            }
                        } else {
                            echo '<p>No additional data available for this post. Please check the custom fields.</p>';
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-lg-6 wow zoomIn delay-2000">
            <img class="map-img" src="<?php echo esc_html(get_theme_mod('vw_tourism_pro_explore_map_img')); ?>" alt="" >
        </div>
    </div>
</div>
</section>



<script>
document.addEventListener('DOMContentLoaded', function() {
  if (typeof jQuery !== 'undefined' && jQuery('.explore-carousel').length) {
    jQuery('.explore-carousel').owlCarousel({
      loop: true,
      margin: 20,
      nav: true,
      dots: false,
      autoplay: true,
      autoplayTimeout: 5000,
      items: 3,
      responsive: {
          0: { items: 1 },
          576: { items: 2 },
          992: { items: 3 }
      }
    });
  }
});
</script>

<?php
// 投稿データのデバッグ用コード
$args = [
    'post_type' => 'tcp_explore',
    'posts_per_page' => 10,
];
$query = new WP_Query($args);

if ($query->have_posts()):
    echo '<h3>テスト: 投稿データ</h3>';
    while ($query->have_posts()): $query->the_post();
        // 投稿のタイトルを表示
        echo '<p>タイトル: ' . get_the_title() . '</p>';
        
        // カスタムフィールドを取得
        $additional_fields = get_post_meta(get_the_ID(), 'additional_meta_fields', true);
        if (!empty($additional_fields)) {
            echo '<pre>';
            print_r($additional_fields); // カスタムフィールドデータを表示
            echo '</pre>';
        } else {
            echo '<p>追加メタフィールドが見つかりません</p>';
        }
    endwhile;
    wp_reset_postdata();
else:
    echo '<p>投稿が見つかりませんでした。</p>';
endif;
?>

<?php
$all_meta = get_post_meta(get_the_ID());
echo '<pre>';
print_r($all_meta);
echo '</pre>';
?>


