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
            <!-- 左カラム -->
            <div class="col-lg-6">
                <p class="sec-sub-heading"><?php echo esc_html(get_theme_mod('vw_tourism_pro_explore_sub_heading', 'Explore')); ?></p>
                <h2 class="sec-heading"><?php echo esc_html(get_theme_mod('vw_tourism_pro_explore_heading', 'Discover New Places')); ?></h2>
                <p class="exp-para"><?php echo esc_html(get_theme_mod('vw_tourism_pro_explore_paragraph', 'Explore the beauty of the world.')); ?></p>
                
                <!-- スライダー -->
                <div class="explore-carousel owl-carousel mt-3">
                <?php
                if ($query->have_posts()):
                    while ($query->have_posts()): $query->the_post();
                        $additional_fields = get_post_meta(get_the_ID(), 'additional_meta_fields', true);

                        if (!empty($additional_fields)) {
                            foreach ($additional_fields as $field) {
                                $image = isset($field['image']) ? esc_url($field['image']) : $default_image;
                                $text1 = isset($field['text1']) ? esc_html($field['text1']) : 'Default Title';
                                $text2 = isset($field['text2']) ? esc_html($field['text2']) : 'Default Subtitle';
                                $text3 = isset($field['text3']) ? esc_html($field['text3']) : 'Default Description';
                                $text4 = isset($field['text4']) ? esc_html($field['text4']) : 'Default Footer';
                                ?>
                                <div class="explore-item text-center">
                                    <img src="<?php echo $image; ?>" alt="<?php echo $text1; ?>" class="rounded-3">
                                    <p><?php echo $text1 . ' - ' . $text2 . ' - ' . $text3 . ' - ' . $text4; ?></p>
                                </div>
                                <?php
                            }
                        } else {
                            echo '<p>No additional data available for this post. Please check the custom fields.</p>';
                        }
                    endwhile;
                    wp_reset_postdata();
                else:
                    echo '<p>No posts available.</p>';
                endif;
                ?>
                </div>
            </div>

            <!-- 右カラム：地図画像 -->
            <?php
            $map_img = get_theme_mod('vw_tourism_pro_explore_map_img', $default_image);
            if (empty($map_img)) {
                $map_img = $default_image;
            }
            ?>
            <div class="col-lg-6">
                <img src="<?php echo esc_url($map_img); ?>" alt="Explore Map" class="img-fluid rounded-3">
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
// `additional_meta_fields` の確認
$additional_meta = get_post_meta(get_the_ID(), 'additional_meta_fields', true);
echo '<h3>additional_meta_fields デバッグ</h3>';
echo '<pre>';
print_r($additional_meta);
echo '</pre>';

// `explore_meta` の確認
$explore_meta = get_post_meta(get_the_ID(), 'explore_meta', true);
echo '<h3>explore_meta デバッグ</h3>';
echo '<pre>';
print_r($explore_meta);
echo '</pre>';
?>
