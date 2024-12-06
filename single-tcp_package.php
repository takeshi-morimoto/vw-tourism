<?php
/**
 * The Template for displaying all single packages.
 *
 * @package vw-tourism-pro
 */

get_header();
$background_img = get_theme_mod('vw_tourism_pro_inner_page_banner_bgimage');

// 価格フォーマット用関数を定義
function format_price($price) {
    return $price ? get_theme_mod('vw_tourism_pro_packages_currency') . number_format((float)$price, 2, '.', '') : '';
}

// GoogleマップURLを安全に生成
function get_location_url($latitude, $longitude) {
    if (is_numeric($latitude) && is_numeric($longitude)) {
        return sprintf(
            'https://maps.google.com/maps?q=%s,%s&hl=es;z=14&amp;output=embed',
            $latitude,
            $longitude
        );
    }
    return '';
}

?>

<div class="title-box" style="background-image:url(<?php echo esc_url($background_img); ?>)">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-12">
                <div class="banner-text">
                    <h1><?php the_title(); ?></h1>
                    <?php if (get_theme_mod('vw_tourism_pro_site_breadcrumb_enable', true)) { ?>
                        <div class="breadcrumbs">
                            <?php vw_tourism_pro_the_breadcrumb(); ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="single-packages" class="pb-0">
    <div class="container">
        <div class="row">
            <!-- メインコンテンツ -->
            <div class="col-lg-8">
                <?php
                while (have_posts()) : the_post();
                endwhile;

                $post_id = get_the_ID();
                $pkg_travel_name = get_post_meta($post_id, 'pkg_travel_name', true);
                $pkg_from = get_post_meta($post_id, 'pkg_from', true);
                $pkg_to = get_post_meta($post_id, 'pkg_to', true);
                $pkg_tour_days = get_post_meta($post_id, 'pkg_tour_days', true);
                $pkg_tour_nights = get_post_meta($post_id, 'pkg_tour_nights', true);
                $pkg_regular_price = get_post_meta($post_id, 'pkg_regular_price', true);
                $pkg_sale_price = get_post_meta($post_id, 'pkg_sale_price', true);
                $pkg_tour_details = get_post_meta($post_id, 'pkg_tour_details', true);
                $pkg_tour_loc_latitude = get_post_meta($post_id, 'pkg_tour_loc_latitude', true);
                $pkg_tour_loc_longitude = get_post_meta($post_id, 'pkg_tour_loc_longitude', true);
                $pkg_tour_additional_info = get_post_meta($post_id, 'pkg_tour_additional_info', true);
                $pkg_additional_video = get_post_meta($post_id, 'pkg_additional_video', true);

                $round_regular = format_price($pkg_regular_price);
                $round_sale = format_price($pkg_sale_price);
                $location_address = get_location_url($pkg_tour_loc_latitude, $pkg_tour_loc_longitude);
                ?>
                <h3 class="single-room-title"><?php the_title(); ?></h3>

                <div class="d-flex pack-meta-content gap-3">
                    <p><?php echo esc_html($pkg_travel_name); ?></p>
                    <p><?php echo esc_html($pkg_from); ?> → <?php echo esc_html($pkg_to); ?></p>
                    <p><?php echo esc_html($pkg_tour_days); ?> Days / <?php echo esc_html($pkg_tour_nights); ?> Nights</p>
                </div>

                <!-- 価格表示 -->
                <div class="pack-price-content my-3">
                    <span class="pack-sale-price"><?php echo esc_html($round_sale); ?></span>
                    <span class="pack-regular-price"><?php echo esc_html($round_regular); ?></span>
                </div>

                <!-- ショートコードの予約フォーム -->
                <div class="booking-wizard mt-4">
                    <?php echo do_shortcode('[appointment_form post="' . get_post_field('post_name', $post_id) . '"]'); ?>
                </div>

                <!-- ツアー詳細 -->
                <div class="pack-desc mt-4">
                    <h4>Description</h4>
                    <?php the_content(); ?>
                </div>

                <!-- 日程タブ -->
                <?php if ($pkg_tour_details && is_array($pkg_tour_details)) { ?>
                    <div class="pack-days-tab">
                        <ul class="nav nav-tabs gap-2">
                            <?php foreach ($pkg_tour_details as $key => $detail) { ?>
                                <li class="nav-item">
                                    <button class="nav-link <?php echo $key === 0 ? 'active' : ''; ?>" 
                                            data-bs-toggle="tab" 
                                            data-bs-target="#day-<?php echo $key; ?>">
                                        Day <?php echo $key + 1; ?>
                                    </button>
                                </li>
                            <?php } ?>
                        </ul>
                        <div class="tab-content">
                            <?php foreach ($pkg_tour_details as $key => $detail) { ?>
                                <div class="tab-pane fade <?php echo $key === 0 ? 'show active' : ''; ?>" id="day-<?php echo $key; ?>">
                                    <p><?php echo esc_html($detail['description']); ?></p>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>

                <!-- 追加情報 -->
                <div class="pack-add-info mt-4">
                    <?php if ($pkg_tour_additional_info) { ?>
                        <h4>Additional Information</h4>
                        <p><?php echo esc_html($pkg_tour_additional_info); ?></p>
                    <?php } ?>
                </div>
            </div>

            <!-- サイドバー -->
            <div class="col-lg-4">
                <?php if ($pkg_additional_video) { ?>
                    <video controls width="100%" src="<?php echo esc_url($pkg_additional_video); ?>"></video>
                <?php } ?>

                <?php if ($location_address) { ?>
                    <div class="pack-map mt-3">
                        <h4>Location</h4>
                        <iframe src="<?php echo esc_url($location_address); ?>" width="100%" height="300"></iframe>
                    </div>
                <?php } ?>
            </div>
        </div>

        <!-- 関連ツアー -->
        <div id="related-places" class="mt-5">
            <?php
            $related = new WP_Query(array(
                'post_type' => 'tcp_package',
                'post__not_in' => array($post_id),
                'posts_per_page' => 4,
                'orderby' => 'date',
            ));
            if ($related->have_posts()) { ?>
                <h4>Related Tours</h4>
                <div class="row">
                    <?php while ($related->have_posts()) { $related->the_post(); ?>
                        <div class="col-md-3">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium'); ?>
                                <h5><?php the_title(); ?></h5>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            <?php }
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
