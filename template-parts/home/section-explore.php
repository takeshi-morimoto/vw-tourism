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

<section id="explore" style="<?php echo esc_attr($explore_bg); ?>">
    <div class="container">
        <div class="row align-items-center">
            <!-- 左カラム -->
            <div class="col-lg-6">
                <p class="sec-sub-heading">Explore</p>
                <h2 class="sec-heading">Discover Japan</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                
                <!-- カスタムセレクト -->
                <div class="custom-select-wrapper">
                    <div class="custom-select">
                        <span class="custom-select-trigger">Select Region</span>
                        <ul class="custom-options">
                            <?php if ($query->have_posts()): ?>
                                <?php while ($query->have_posts()): $query->the_post(); ?>
                                    <li class="custom-option" data-post-id="<?php echo get_the_ID(); ?>">
                                        <?php echo get_the_title(); ?>
                                    </li>
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>
                            <?php else: ?>
                                <li class="custom-option">No Regions Available</li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
                
                <!-- スライダー -->
                <div class="explore-main-wrapper mt-2">
                    <div class="owl-carousel owl-loaded">
                        <!-- Ajaxでスライダー要素を挿入 -->
                    </div>
                </div>
            </div>

            <!-- 右カラム：地図画像 -->
            <div class="col-lg-6">
                <img src="<?php echo esc_url(get_theme_mod('vw_tourism_pro_explore_map_img', $default_image)); ?>" alt="Explore Map">
            </div>
        </div>
    </div>
</section>

<script>
jQuery(document).ready(function ($) {
    const selectTrigger = $('.custom-select-trigger');
    const selectOptions = $('.custom-options');
    const slider = $('.owl-carousel');

    // ドロップダウン開閉
    selectTrigger.on('click', function () {
        selectOptions.toggleClass('open');
    });

    // ドロップダウン選択時にスライダーを更新
    selectOptions.on('click', '.custom-option', function () {
        const postId = $(this).data('post-id');
        selectTrigger.text($(this).text());
        selectOptions.removeClass('open');
        updateSlider(postId);
    });

    // スライダーを更新する関数
    function updateSlider(postId) {
        $.ajax({
            url: ajax_object.ajaxurl,
            method: 'POST',
            data: {
                action: 'get_explore_meta_fields',
                post_id: postId,
                nonce: ajax_object.nonce,
            },
            success: function (response) {
                if (response.success) {
                    populateSlider(response.meta_fields);
                } else {
                    console.error('AJAX Error:', response.message);
                }
            },
            error: function (xhr, status, error) {
                console.error('Fetch Error:', error);
            },
        });
    }

    // スライダーのアイテムを生成
    function populateSlider(items = []) {
        slider.trigger('destroy.owl.carousel'); // 既存のスライダーを破棄
        slider.html(''); // スライダーの初期化

        // アイテムを追加
        items.forEach(item => {
            slider.append(`
                <div class="explore-inners">
                    <div class="explore-img">
                        <img src="${item.image}" alt="${item.text1}">
                    </div>
                    <div class="d-flex gap-2 mt-2">
                        <div class="explore-inner-box">
                            <h6 class="explore-inner-title">${item.text1}</h6>
                            <h6 class="explore-inner-title">${item.text2}</h6>
                        </div>
                    </div>
                </div>
            `);
        });

        initializeOwlCarousel();
    }

    // OwlCarouselを初期化する
    function initializeOwlCarousel() {
        slider.owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            dots: true,
            autoplay: true,
            autoplayTimeout: 5000,
            items: 3,
            responsive: {
                0: { items: 1 },
                576: { items: 2 },
                992: { items: 3 },
            },
        });
    }

    // ページロード時に初期化
    initializeOwlCarousel();
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
