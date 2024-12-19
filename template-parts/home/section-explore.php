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
?>

<section id="explore" style="<?php echo esc_attr($explore_bg); ?>" class="pb-0">
    <div class="container">
        <div class="row align-items-center">
            <!-- 左カラム -->
            <div class="col-lg-6 wow zoomIn delay-2000">
                <p class="sec-sub-heading text-md-start text-center"><?php echo esc_html(get_theme_mod('vw_tourism_pro_explore_sub_heading', 'Explore')); ?></p>
                <h2 class="sec-heading text-md-start text-center"><?php echo esc_html(get_theme_mod('vw_tourism_pro_explore_heading', 'Discover New Places')); ?></h2>
                <p class="text-md-start text-center exp-para"><?php echo esc_html(get_theme_mod('vw_tourism_pro_explore_paragraph', 'Explore the beauty of the world.')); ?></p>

                <!-- カスタムセレクト -->
                <div class="custom-select-wrapper">
                    <div class="custom-select">
                        <span class="custom-select-trigger explore-select-title">Select Region</span>
                        <ul class="custom-options">
                            <?php if ($query->have_posts()): ?>
                                <?php while ($query->have_posts()): $query->the_post(); ?>
                                    <li class="custom-option" data-value="<?php echo get_the_ID(); ?>"><?php echo get_the_title(); ?></li>
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>

                <!-- スライダー -->
                <div class="explore-main-wrapper mt-2">
                    <p class="text-md-start text-center">Click on a region to explore more details.</p>
                    <div class="explore-carousel owl-carousel owl-loaded owl-drag">
                        <?php
                        if ($query->have_posts()):
                            while ($query->have_posts()): $query->the_post();
                                $additional_fields = get_post_meta(get_the_ID(), 'additional_meta_fields', true);
                                if (!empty($additional_fields) && is_array($additional_fields)) {
                                    foreach ($additional_fields as $field) {
                                        $image = isset($field['image']) ? esc_url($field['image']) : $default_image;
                                        $text1 = isset($field['text1']) ? esc_html($field['text1']) : '';
                                        $text2 = isset($field['text2']) ? esc_html($field['text2']) : '';
                                        ?>
                                        <div class="explore-inners">
                                            <div class="explore-img">
                                                <img style="border-radius: 10px;" src="<?php echo $image; ?>" alt="<?php echo $text1; ?>">
                                            </div>
                                            <div class="d-flex gap-2 mt-2">
                                                <div class="explore-inner-box">
                                                    <h6 class="explore-inner-title"><?php echo $text1; ?></h6>
                                                    <h6 class="explore-inner-title"><?php echo $text2; ?></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                }
                            endwhile;
                            wp_reset_postdata();
                        endif;
                        ?>
                    </div>
                </div>
            </div>

            <!-- 右カラム：地図画像 -->
            <div class="col-lg-6 wow zoomIn delay-2000">
                <img class="map-img" src="<?php echo esc_url(get_theme_mod('vw_tourism_pro_explore_map_img', $default_image)); ?>" alt="Explore Map">
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // セレクトボックス要素を取得
    const selectTrigger = document.querySelector('.custom-select-trigger');
    const selectOptions = document.querySelector('.custom-options');
    const selectWrapper = document.querySelector('.custom-select-wrapper');

    // ドロップダウンを表示・非表示にする
    selectTrigger.addEventListener('click', (e) => {
        e.stopPropagation(); // イベントのバブリングを停止
        selectOptions.classList.toggle('open');
    });

    // オプションをクリックした際に選択された値をトリガーに表示
    selectOptions.addEventListener('click', (e) => {
        if (e.target.classList.contains('custom-option')) {
            selectTrigger.textContent = e.target.textContent;
            selectOptions.classList.remove('open'); // ドロップダウンを閉じる
        }
    });

    // ページのどこかをクリックした際にドロップダウンを閉じる
    document.addEventListener('click', () => {
        selectOptions.classList.remove('open');
    });
});
</script>

<?php
// デバッグ用コード（開発中のみ有効にする）
if (defined('WP_DEBUG') && WP_DEBUG) {
    echo '<h3>テスト: 投稿データ</h3>';
    if ($query->have_posts()):
        while ($query->have_posts()): $query->the_post();
            echo '<p>タイトル: ' . get_the_title() . '</p>';
            $additional_fields = get_post_meta(get_the_ID(), 'package_explore_meta_fields', true);
            if (!empty($additional_fields)) {
                echo '<pre>';
                print_r($additional_fields);
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
?>
