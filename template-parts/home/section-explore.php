<?php
// セクションの表示/非表示をテーマの設定から取得
$section_hide = get_theme_mod( 'vw_tourism_pro_explore_enabledisable' );
if ( 'Disable' == $section_hide ) {
  return; // 非表示の場合は出力せずに終了
}

// 背景色または背景画像の設定を取得
if( get_theme_mod('vw_tourism_pro_explore_bgcolor','') ) {
  $explore_bg = 'background-color:'.esc_attr(get_theme_mod('vw_tourism_pro_explore_bgcolor','')).';';
}elseif( get_theme_mod('vw_tourism_pro_explore_bgimage','') ){
  $explore_bg = 'background-image:url(\''.esc_url(get_theme_mod('vw_tourism_pro_explore_bgimage')).'\')';
}else{
  $explore_bg = ''; // 背景設定がない場合
}

// 背景のCSSのattachment設定を取得
$img_bg = get_theme_mod('vw_tourism_pro_explore_bg_attachment');

// WP_Queryでカスタム投稿タイプ「tcp_explore」を取得
$args = array(
  'post_type'      => 'tcp_explore', // カスタム投稿タイプ
  'posts_per_page' => 10, // 取得する投稿の件数
  'fields'         => 'ids' // 投稿IDのみを取得
);
$query = new WP_Query($args);
?>

<!-- 「Explore」セクションの表示実装 -->
<section id="explore" style="<?php echo esc_attr($explore_bg); ?>" class="<?php echo esc_attr($img_bg); ?> pb-0" >
  <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 wow zoomIn delay-2000">
          <?php 
          // サブヘッダーが設定されている場合に表示
          if(get_theme_mod('vw_tourism_pro_explore_sub_heading')!=''){ ?>
            <p class="sec-sub-heading text-md-start text-center">
              <?php echo esc_html(get_theme_mod('vw_tourism_pro_explore_sub_heading')); ?>
            </p>
          <?php } ?>

          <?php 
          // ヘッダーが設定されている場合
          if(get_theme_mod('vw_tourism_pro_explore_heading')!=''){ ?>
            <h2 class="sec-heading text-md-start text-center">
              <?php echo esc_html(get_theme_mod('vw_tourism_pro_explore_heading')); ?>
            </h2>
          <?php } ?>

          <?php 
          // 説明文が設定されている場合
          if(get_theme_mod('vw_tourism_pro_explore_paragraph')!=''){ ?>
            <p class="text-md-start text-center exp-para">
              <?php echo esc_html(get_theme_mod('vw_tourism_pro_explore_paragraph')); ?>
            </p>
          <?php } ?>

          <!-- ドロップダウンメニューの表示 -->
          <div class="explore-inner">
            <?php
              if ($query->have_posts()) {
                $first_post = true; // 最初の投稿を選択状態にするためのフラグ
                ?>
                <div class="custom-select-wrapper">
                  <div class="custom-select">
                    <span class="custom-select-trigger explore-select-title">Select an option <i class="fa-solid fa-chevron-down"></i></span>
                    <ul class="custom-options">
                      <?php
                        $selected_post_id = '';
                        $selected_post_title = '';
                        
                        // ドロップダウンの選択肢を一覧表示
                        while ($query->have_posts()) {
                          $query->the_post();
                          if ($first_post) {
                            $selected_post_id = esc_attr(get_the_ID());
                            $selected_post_title = esc_html(get_the_title());
                            $first_post = false; // 最初の投稿を記録
                          }
                          ?>
                          <li class="custom-option" data-value="<?php echo esc_attr(get_the_ID()); ?>">
                            <?php echo esc_html(get_the_title()); ?>
                          </li>
                        <?php }
                        wp_reset_postdata(); // クリーンアップ
                      ?>
                    </ul>
                  </div>
                </div>
              <?php }
            ?>
            <div class="explore-main-wrapper mt-2">
              <!-- ここにコンテンツが表示される -->
            </div>
          </div>
        </div>

        <!-- 右側の地図画像表示 -->
        <div class="col-lg-6 wow zoomIn delay-2000">
            <img class="map-img" src="<?php echo esc_url(get_theme_mod('vw_tourism_pro_explore_map_img')); ?>" alt="Explore Map">
            <div id="explore-image-wrapper" class="mt-3">
              <!-- 選択した投稿の画像を表示 -->
            </div>
        </div>
      </div>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const customOptions = document.querySelectorAll('.custom-option');
    const exploreMainWrapper = document.querySelector('.explore-main-wrapper');
    const exploreImageWrapper = document.querySelector('#explore-image-wrapper');
    const defaultPostID = '<?php echo $selected_post_id; ?>';

    // 初期表示: 最初の投稿の内容を表示
    if (defaultPostID) {
        fetchExploreContent(defaultPostID);
    }

    // 選択肢がクリックされたときの処理
    customOptions.forEach(option => {
        option.addEventListener('click', function() {
            const postID = this.getAttribute('data-value');
            fetchExploreContent(postID);
        });
    });

    // コンテンツを取得して表示する関数
    function fetchExploreContent(postID) {
        fetch(`<?php echo esc_url( home_url('/wp-json/wp/v2/tcp_explore/')); ?>${postID}`)
            .then(response => response.json())
            .then(data => {
                exploreMainWrapper.innerHTML = `
                    <h3>${data.title.rendered}</h3>
                    <div>${data.content.rendered}</div>
                `;

                if (data.featured_media) {
                    fetch(`<?php echo esc_url( home_url('/wp-json/wp/v2/media/')); ?>${data.featured_media}`)
                        .then(response => response.json())
                        .then(imageData => {
                            exploreImageWrapper.innerHTML = `<img src="${imageData.source_url}" alt="Explore Image" />`;
                        });
                } else {
                    exploreImageWrapper.innerHTML = '<p>No image available.</p>';
                }
            })
            .catch(error => {
                console.error('Error fetching content:', error);
                exploreMainWrapper.innerHTML = '<p>コンテンツの読み込みに失敗しました。</p>';
            });
    }
});
</script>
