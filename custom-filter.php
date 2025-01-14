<?php
// テーマで使用されている通貨設定を取得
$vw_tourism_pro_packages_currency = get_theme_mod('vw_tourism_pro_packages_currency');

// パッケージページのフィルタリングを行う関数
function get_packages_page_filter() {
    // 現在のページ番号を取得 (AJAXリクエストで送信されたデータから)
    $paged = isset($_POST['data']['page']) ? $_POST['data']['page'] : 1;

    // 1ページあたりの表示件数
    $items_per_page = 9;

    // WP_Query用の基本的な引数を設定
    $args = array(
        'post_type'       =>  'tcp_package', // 投稿タイプを指定
        'post_status'     =>  'publish',    // 公開済みの投稿のみ取得
        'posts_per_page'  =>  $items_per_page,
        'paged'           =>  $paged       // 現在のページ番号
    );

    // フィルタリング条件がある場合の処理
    if (isset($_POST['data'])) {
        $post_data = $_POST['data'];

        // タクソノミークエリを格納する配列
        $tax_query_array = array(
            'relation' => 'AND' // クエリ条件の関係を「AND」で指定
        );

        // メタクエリを格納する配列
        $meta_query_array = array();

        // タクソノミー: tcp_destination (目的地) が指定されている場合
        if (isset($post_data['tcp_destination']) && count($post_data['tcp_destination'])) {
            $tcp_destination_ids = $post_data['tcp_destination'];
            array_push($tax_query_array, array(
                'taxonomy'  =>  'tcp_destination',
                'field'     =>  'term_id',
                'terms'     =>  $tcp_destination_ids
            ));
        }

        // タクソノミー: tcp_category (カテゴリ) が指定されている場合
        if (isset($post_data['tcp_category']) && count($post_data['tcp_category'])) {
            $tcp_category_ids = $post_data['tcp_category'];
            array_push($tax_query_array, array(
                'taxonomy'  =>  'tcp_category',
                'field'     =>  'term_id',
                'terms'     =>  $tcp_category_ids
            ));
        }

        // メタクエリ: 価格 (pkg_sale_price) の最大値が指定されている場合
        if (isset($post_data['value']) && $post_data['value'] != 0) {
            array_push($meta_query_array, array(
                'key'     => 'pkg_sale_price',  // カスタムフィールド名
                'value'   => $post_data['value'], // フィルタ値
                'compare' => '<=',               // 条件: 以下
                'type'    => 'numeric'          // 値の型
            ));
            $args['meta_query'] = $meta_query_array;
        }

        // WP_Queryの引数にタクソノミークエリを追加
        $args['tax_query'] = $tax_query_array;
    }

    // WP_Queryを実行
    $loop = new WP_Query($args);
    $shop_page_loop_html = '';
    $pages = '';

    // 出力用バッファリングを開始
    ob_start();
    if ($loop->have_posts()):
        while ($loop->have_posts()):
            $loop->the_post();
            global $post;

            // 各投稿の情報を取得
            $post_id = $post->ID;
            $location_link = '';
            $destination = get_the_terms($post, 'tcp_destination');
            $destination_title = '';
            if (is_array($destination) && count($destination)) {
                $destination_title = $destination[0]->name . ' Tour';
                $location_link = get_category_link($destination[0]->term_id);
            }

            $pkg_sale_price = get_post_meta($post_id, 'pkg_sale_price', true);
            $round_sale = $pkg_sale_price != 0 ? get_theme_mod('vw_tourism_pro_packages_currency') . number_format((float)$pkg_sale_price, 2, '.', '') : '';
            $member_text = get_post_meta($post_id, 'pkg_person_text', true) ? get_post_meta($post_id, 'pkg_person_text', true) : 'Per Person';
            $pkg_tour_days = get_post_meta($post_id, 'pkg_tour_days', true);
            $pkg_tour_nights = get_post_meta($post_id, 'pkg_tour_nights', true);
            ?>

            <!-- 投稿のHTML構造を出力 -->
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 mb-4">
                <div class="packages-box">
                    <div class="packages-img-main position-relative">
                        <?php if (has_post_thumbnail()){ ?>
                            <?php the_post_thumbnail(); ?>
                        <?php } ?>
                        <div class="d-flex flex-column position-absolute bottom-0 top-0 start-0 end-0 mx-auto my-3 justify-content-between packages-content-box text-lg-start text-start px-sm-1" style="z-index:1">
                            <div class="packages-btm-content">
                                <a href="<?php echo esc_url($location_link); ?>"><h5><?php echo esc_html($destination_title); ?></h5></a>
                            </div>
                            <div class="packages-btm-content">
                                <h6 class="packages-from">From <?php echo esc_html(get_post_meta($post->ID, 'pkg_from', true)); ?></h6>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="packages-date">
                                        <span><?php echo $pkg_tour_days; echo $pkg_tour_days ? ' Days' : '';?></span>
                                        <span><?php echo esc_html($pkg_tour_nights); echo $pkg_tour_nights ? ' Nights' : '';?></span>
                                        <p class="mb-0 pac-per-year"><?php esc_html_e($member_text);?></p>
                                    </div>
                                    <p class="mb-0 package-price"><?php echo esc_html($round_sale); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="packges-bottom-box">
                        <div class="d-flex flex-column gap-2 packges-bottom-box-inner py-3 text-center">
                            <div class="packages-title">
                                <h3 style="line-height:0;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            </div>
                            <div class="packages-name">
                                <p class="mb-0"><?php echo esc_html(get_post_meta($post->ID, 'pkg_travel_name', true)); ?></p>
                            </div>
                            <div class="packages-button">
                                <a class="theme-btn-main" href="<?php the_permalink(); ?>">
                                    <div class="theme-btn-block">
                                        <span class="theme-btn-line-left"></span>
                                        <span class="theme-btn-text"><?php echo esc_html(get_theme_mod('vw_tourism_pro_popular_packages_booknow_text')); ?></span>
                                        <span class="theme-btn-line-right"></span>
                                        <i class="fa-solid fa-caret-down"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; wp_reset_query();
    endif;

    // HTML出力を終了し、取得
    $shop_page_loop_html = ob_get_clean();

    // ページネーションを生成
    $total = $loop->max_num_pages;
    $pages = paginate_links(
        array(
            'base'      => add_query_arg('topage', '%#%'),
            'format'    => '',
            'current'   => max(1, $paged),
            'total'     => $total,
            'prev_text' => '<i class="fas fa-chevron-left"></i>',
            'next_text' => '<i class="fas fa-chevron-right"></i>',
            'add_args'  => array()
        )
    );

    // レスポンスデータを返す
    $response_data = array(
        'html'          =>  $shop_page_loop_html,
        'pagination'    =>  $pages
    );

    wp_send_json($response_data); // JSON形式でデータを返却
    exit;
}

// AJAXリクエスト用のアクションフックを登録
add_action('wp_ajax_get_packages_page_filter', 'get_packages_page_filter');
add_action('wp_ajax_nopriv_get_packages_page_filter', 'get_packages_page_filter');
