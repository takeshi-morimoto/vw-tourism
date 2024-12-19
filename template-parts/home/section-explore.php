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
                    <div class="owl-carousel explore-slider">
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
document.addEventListener('DOMContentLoaded', function () {
    const selectTrigger = document.querySelector('.custom-select-trigger');
    const selectOptions = document.querySelector('.custom-options');
    const slider = document.querySelector('.explore-slider');

    // ドロップダウン開閉
    selectTrigger.addEventListener('click', () => {
        selectOptions.classList.toggle('open');
    });

    // オプション選択時の処理
    selectOptions.addEventListener('click', (e) => {
        if (e.target.classList.contains('custom-option')) {
            const selectedOption = e.target.textContent; // 選択したテキストを取得
            const postId = e.target.getAttribute('data-post-id'); // 選択したオプションの投稿IDを取得

            // トリガーテキストを更新
            selectTrigger.textContent = selectedOption;

            // ドロップダウンを閉じる
            selectOptions.classList.remove('open');

            // スライダーを更新
            updateSlider(postId);
        }
    });

    // スライダーを更新する関数
    function updateSlider(postId) {
        fetch(ajax_object.ajaxurl, {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: new URLSearchParams({
                action: 'get_explore_meta_fields',
                post_id: postId,
                nonce: ajax_object.nonce,
            }),
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                populateSlider(data.meta_fields);
            } else {
                console.error('AJAX Error:', data.message);
            }
        })
        .catch(error => console.error('Fetch Error:', error));
    }

    // スライダーのアイテムを生成
    function populateSlider(items = []) {
        slider.innerHTML = ''; // スライダーの初期化

        items.forEach(item => {
            const slide = document.createElement('div');
            slide.className = 'explore-inners';
            slide.innerHTML = `
                <div class="explore-img">
                    <img src="${item.image}" alt="${item.text1}">
                </div>
                <div class="d-flex gap-2 mt-2">
                    <div class="explore-inner-box">
                        <h6 class="explore-inner-title">${item.text1}</h6>
                        <h6 class="explore-inner-title">${item.text2}</h6>
                    </div>
                </div>
            `;
            slider.appendChild(slide);
        });

        initializeOwlCarousel();
    }

    // OwlCarouselを初期化する
    function initializeOwlCarousel() {
        if ($(slider).hasClass('owl-loaded')) {
            $(slider).owlCarousel('destroy'); // 既存のインスタンスを破棄
        }

        $(slider).owlCarousel({
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

    // 初期化
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
