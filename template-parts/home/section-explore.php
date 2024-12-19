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

// デフォルト画像は使わないので、ここでは省略可能
?>

<section id="explore" style="<?php echo esc_attr($explore_bg); ?>">
    <div class="container">
        <div class="row align-items-center">
            <!-- 左カラム -->
            <div class="col-lg-6">
                <p class="sec-sub-heading"><?php echo esc_html(get_theme_mod('vw_tourism_pro_explore_sub_heading', 'Explore')); ?></p>
                <h2 class="sec-heading"><?php echo esc_html(get_theme_mod('vw_tourism_pro_explore_heading', 'Discover New Places')); ?></h2>
                <p class="exp-para"><?php echo esc_html(get_theme_mod('vw_tourism_pro_explore_paragraph', 'Explore the beauty of the world.')); ?></p>

                <div class="explore-text-list mt-3">
                    <?php
                    if ($query->have_posts()):
                        while ($query->have_posts()): $query->the_post();
                            $additional_fields = get_post_meta(get_the_ID(), 'package_explore_meta_fields', true);

                            if (!empty($additional_fields) && is_array($additional_fields)) {
                                // タイトル表示(投稿タイトル)
                                echo '<h3>' . esc_html(get_the_title()) . '</h3>';
                                echo '<ul>';
                                foreach ($additional_fields as $field) {
                                    $text1 = isset($field['text1']) ? esc_html($field['text1']) : '';
                                    $text2 = isset($field['text2']) ? esc_html($field['text2']) : '';
                                    $text3 = isset($field['text3']) ? esc_html($field['text3']) : '';
                                    $text4 = isset($field['text4']) ? esc_html($field['text4']) : '';

                                    // テキストのみ表示
                                    echo '<li>';
                                    echo '<p><strong>' . $text1 . '</strong></p>';
                                    echo '<p>' . $text2 . '</p>';
                                    echo '<p>' . $text3 . '</p>';
                                    echo '<p>' . $text4 . '</p>';
                                    echo '</li>';
                                }
                                echo '</ul>';
                            } else {
                                echo '<p>追加メタフィールドが見つかりません</p>';
                            }
                        endwhile;
                        wp_reset_postdata();
                    else:
                        echo '<p>投稿が見つかりませんでした。</p>';
                    endif;
                    ?>
                </div>
            </div>

            <!-- 右カラム：地図画像 -->
            <?php
            $map_img = get_theme_mod('vw_tourism_pro_explore_map_img', '');
            if(!empty($map_img)): ?>
            <div class="col-lg-6">
                <img src="<?php echo esc_url($map_img); ?>" alt="Explore Map" class="img-fluid rounded-3">
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php
// デバッグ用コード（開発中のみ有効にする）
if (defined('WP_DEBUG') && WP_DEBUG) {
    echo '<h3>テスト: 投稿データ</h3>';
    $debug_args = [
        'post_type' => 'tcp_explore',
        'posts_per_page' => 10,
    ];
    $debug_query = new WP_Query($debug_args);
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
