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

<section id="explore" class="pb-0" style="<?php echo esc_attr($explore_bg); ?>">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <p class="sec-sub-heading text-md-start text-center">Explore</p>
        <h2 class="sec-heading text-md-start text-center">France Discover</h2>
        <p class="text-md-start text-center exp-para">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry...
        </p>
        
        <div class="explore-inner">
          <div class="custom-select-wrapper">
            <div class="custom-select">
              <span class="custom-select-trigger explore-select-title" data-value="123">Ile De France 1</span>
              <ul class="custom-options" style="display: none;">
                <li class="custom-option" data-value="125">Ile De France 3</li>
                <li class="custom-option" data-value="124">Ile De France 2</li>
                <li class="custom-option" data-value="123">Ile De France 1</li>
                <li class="custom-option" data-value="122">Ile De France</li>
              </ul>
            </div>
          </div>
          
          <div class="explore-main-wrapper mt-2">
            <p class="text-md-start text-center">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry...
            </p>
            <div class="slider">
              <div class="slide-item">
                <div class="explore-inners">
                  <div class="explore-img">
                    <img style="border-radius:10px;" 
                         src="https://preview.vwthemesdemo.com/vw-tourism/wp-content/themes/vw-tourism-pro/assets/images/explore/explore2-1.png" 
                         alt="Slide 1">
                  </div>
                  <div class="d-flex gap-2 mt-2">
                    <div class="explore-inner-box">
                      <h6 class="explore-inner-title">875Km</h6>
                      <h6 class="explore-inner-title">Area</h6>
                    </div>
                    <div class="explore-inner-box">
                      <h6 class="explore-inner-title">91,12,520</h6>
                      <h6 class="explore-inner-title">Population</h6>
                    </div>
                  </div>
                </div>
              </div>
              <div class="slide-item">
                <div class="explore-inners">
                  <div class="explore-img">
                    <img style="border-radius:10px;" 
                         src="https://preview.vwthemesdemo.com/vw-tourism/wp-content/themes/vw-tourism-pro/assets/images/explore/explore2-2.png" 
                         alt="Slide 2">
                  </div>
                  <div class="d-flex gap-2 mt-2">
                    <div class="explore-inner-box">
                      <h6 class="explore-inner-title">85.09%</h6>
                      <h6 class="explore-inner-title">Literacy</h6>
                    </div>
                    <div class="explore-inner-box">
                      <h6 class="explore-inner-title">123456</h6>
                      <h6 class="explore-inner-title">Pincode</h6>
                    </div>
                  </div>
                </div>
              </div>
              <div class="slide-item">
                <div class="explore-inners">
                  <div class="explore-img">
                    <img style="border-radius:10px;" 
                         src="https://preview.vwthemesdemo.com/vw-tourism/wp-content/themes/vw-tourism-pro/assets/images/explore/explore2-3.png" 
                         alt="Slide 3">
                  </div>
                  <div class="d-flex gap-2 mt-2">
                    <div class="explore-inner-box">
                      <h6 class="explore-inner-title">65+</h6>
                      <h6 class="explore-inner-title">Villages</h6>
                    </div>
                    <div class="explore-inner-box">
                      <h6 class="explore-inner-title">French</h6>
                      <h6 class="explore-inner-title">Language</h6>
                    </div>
                  </div>
                </div>
              </div>
              <!-- 必要に応じて他のスライドを追加 -->
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-lg-6">
        <img class="map-img"
             src="https://preview.vwthemesdemo.com/vw-tourism/wp-content/themes/vw-tourism-pro/assets/images/explore/map.png" 
             alt="Map">
      </div>
    </div>
  </div>
</section>

<script>
jQuery(window).on('load', function(){
  var $slider = jQuery('.slider');
  if ($slider.length > 0) {
    console.log('Slider element found:', $slider);
    if (typeof jQuery.fn.slick !== 'undefined') {
      // ここでslick()を初期化
      $slider.slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        dots: true,
        autoplay: true,
        autoplaySpeed: 4000,
        accessibility: false, // 追加
        responsive: [
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 2
            }
          },{
            breakpoint: 576,
            settings: {
              slidesToShow: 1
            }
          }
        ]
      });
    } else {
      console.error('Slick is not loaded. Check if slick.min.js is enqueued properly.');
    }
  } else {
    console.error('.slider element not found.');
  }
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
