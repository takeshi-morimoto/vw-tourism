<?php
// 背景設定
$explore_bg = 'background-color: #f9fafc;';
$default_image = 'https://example.com/path/to/default-image.jpg';

$args = [
    'post_type' => 'tcp_explore',
    'posts_per_page' => 3,
];
$query = new WP_Query($args);
?>

<section id="explore" style="<?php echo $explore_bg; ?>" class="explore-section pb-5">
    <div class="container">
        <div class="row align-items-center">
            <!-- 左カラム -->
            <div class="col-lg-6">
                <h2 class="section-title">France Discover</h2>
                <p class="section-description">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </p>

                <div class="explore-dropdown">
                    <div class="dropdown">
                        <button class="btn btn-light dropdown-toggle" type="button" id="exploreMenu" data-bs-toggle="dropdown" aria-expanded="false">
                            Ile De France 3
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="exploreMenu">
                            <?php while ($query->have_posts()): $query->the_post(); ?>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <?php echo esc_html(get_the_title()); ?>
                                    </a>
                                </li>
                            <?php endwhile; wp_reset_postdata(); ?>
                        </ul>
                    </div>
                </div>

                <!-- スライダー -->
                <div class="explore-carousel owl-carousel owl-theme mt-3">
                    <?php while ($query->have_posts()): $query->the_post();
                        $meta = get_post_meta(get_the_ID(), 'additional_meta_fields', true);
                        $image_url = !empty($meta['image']) ? esc_url($meta['image']) : $default_image; ?>
                        <div class="explore-item">
                            <img src="<?php echo $image_url; ?>" alt="Explore Image">
                            <div class="explore-info text-center">
                                <p>875Km Area</p>
                                <p>91,12,520 Population</p>
                            </div>
                        </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            </div>

            <!-- 右カラム（地図） -->
            <div class="col-lg-6">
                <img class="map-img" src="https://example.com/path/to/map-image.jpg" alt="Map of France">
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    jQuery('.explore-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        items: 3,
        navText: ['<i class="fa-solid fa-chevron-left"></i>', '<i class="fa-solid fa-chevron-right"></i>'],
        responsive: {
            0: { items: 1 },
            768: { items: 2 },
            1000: { items: 3 }
        }
    });
});
</script>
