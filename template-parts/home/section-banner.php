<?php
$section_hide = get_theme_mod('vw_tourism_pro_banner_enabledisable');
if ('Disable' == $section_hide) {
    return;
}
?>

<?php
$section_hide = get_theme_mod('vw_tourism_pro_banner_enabledisable');
if ('Disable' == $section_hide) {
    return;
}
?>

<section id="banner" class="position-relative" style="overflow: hidden; height: 100vh;">
    <!-- 動画背景 -->
    <?php if ($video_url = get_theme_mod('vw_tourism_pro_banner_video')): ?>
        <video autoplay muted loop id="banner-video" preload="metadata" style="position: absolute; top: 0; left: 0; width: 100%; height: 100vh; object-fit: cover; z-index: -1;">
            <source src="<?php echo esc_url($video_url); ?>" type="video/mp4">
        </video>
    <?php endif; ?>

    <!-- コンテンツ部分 -->
    <div class="container-fluid" style="position: relative; z-index: 2;">
        <div class="row">
            <!-- 左側のコンテンツ -->
            <div class="col-lg-3 col-md-3 text-center col-6 order-md-1 order-sm-2 order-2 banner-left">
                <?php for ($i = 1; $i <= 3; $i++): ?>
                    <?php if ($img = get_theme_mod("vw_tourism_pro_banner_card_img$i", '')): ?>
                        <div class="banner-box wow fadeIn" data-wow-delay="<?php echo ($i * 0.3); ?>s">
                            <img src="<?php echo esc_url($img); ?>" style="max-width: 100%;">
                            <?php if ($title = get_theme_mod("vw_tourism_pro_banner_card_title$i", '')): ?>
                                <h3><?php echo esc_html($title); ?></h3>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                <?php endfor; ?>
            </div>

            <!-- メインのバナーテキスト -->
            <div class="col-lg-6 col-md-6 col-12 order-md-2 order-sm-1 order-1">
                <div class="banner-text-main wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                    <?php if ($sub_heading_one = get_theme_mod('vw_tourism_pro_banner_sub_heading_one', '')): ?>
                        <p class="banner-sub-heading mb-0"><?php echo esc_html($sub_heading_one); ?></p>
                    <?php endif; ?>
                    <?php if ($heading = get_theme_mod('vw_tourism_pro_banner_heading', '')): ?>
                        <h1 class="banner-heading"><?php echo esc_html($heading); ?></h1>
                    <?php endif; ?>
                    <?php if ($sub_heading_two = get_theme_mod('vw_tourism_pro_banner_sub_heading_two', '')): ?>
                        <p class="banner-sub-heading mb-0 text-md-end text-sm-center text-center"><?php echo esc_html($sub_heading_two); ?></p>
                    <?php endif; ?>
                </div>
            </div>

            <!-- 右側のコンテンツ -->
            <div class="col-lg-3 col-md-3 col-6 order-md-3 text-center order-sm-3 order-3 baner-right">
              <?php for ($i=4; $i <= 6; $i++) { ?>
                <div class="banner-box banner-box-left wow fadeIn delay-2000">
                  <?php if(get_theme_mod('vw_tourism_pro_banner_card_img'.$i)!=''){ ?>
                    <img src="<?php echo esc_html(get_theme_mod('vw_tourism_pro_banner_card_img'.$i)); ?>" style="max-width: 100%;">
                  <?php } ?>
                  <?php if(get_theme_mod('vw_tourism_pro_banner_card_title'.$i)!=''){ ?>
                    <h3><?php echo esc_html(get_theme_mod('vw_tourism_pro_banner_card_title'.$i)); ?></h3>
                  <?php } ?>
                </div>
              <?php } ?>
            </div>
        </div>
      </div>

      <!-- 右側のコンテンツ -->
      <div class="col-lg-3 col-md-3 col-6 order-md-3 text-center order-sm-3 order-3 baner-right">
        <?php for ($i=4; $i <= 6; $i++) { ?>
          <div class="banner-box banner-box-left wow fadeIn delay-2000">
            <?php if(get_theme_mod('vw_tourism_pro_banner_card_img'.$i)!=''){ ?>
              <img src="<?php echo esc_html(get_theme_mod('vw_tourism_pro_banner_card_img'.$i)); ?>" style="max-width: 100%;">
            <?php } ?>
            <?php if(get_theme_mod('vw_tourism_pro_banner_card_title'.$i)!=''){ ?>
              <h3><?php echo esc_html(get_theme_mod('vw_tourism_pro_banner_card_title'.$i)); ?></h3>
            <?php } ?>
          </div>
        <?php } ?>
        </div>
    </div>

<!-- desktop svg -->
<svg class="position-absolute banner-svg d-md-block d-none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  width="1820.479" height="780"  viewBox="0 0 1790 835.763">
  <defs>
    <filter id="Ellipse_27" x="5" y="459" width="37" height="37" filterUnits="userSpaceOnUse">
      <feOffset dy="3" input="SourceAlpha"/>
      <feGaussianBlur stdDeviation="3" result="blur"/>
      <feFlood flood-opacity="0.161"/>
      <feComposite operator="in" in2="blur"/>
      <feComposite in="SourceGraphic"/>
    </filter>
    <filter id="Ellipse_28" x="426" y="537" width="37" height="37" filterUnits="userSpaceOnUse">
      <feOffset dy="3" input="SourceAlpha"/>
      <feGaussianBlur stdDeviation="3" result="blur-2"/>
      <feFlood flood-opacity="0.161"/>
      <feComposite operator="in" in2="blur-2"/>
      <feComposite in="SourceGraphic"/>
    </filter>
    <filter id="Ellipse_30" x="1439" y="542" width="37" height="37" filterUnits="userSpaceOnUse">
      <feOffset dy="3" input="SourceAlpha"/>
      <feGaussianBlur stdDeviation="3" result="blur-3"/>
      <feFlood flood-opacity="0.161"/>
      <feComposite operator="in" in2="blur-3"/>
      <feComposite in="SourceGraphic"/>
    </filter>
    <filter id="Ellipse_31" x="1755" y="430" width="37" height="37" filterUnits="userSpaceOnUse">
      <feOffset dy="3" input="SourceAlpha"/>
      <feGaussianBlur stdDeviation="3" result="blur-4"/>
      <feFlood flood-opacity="0.161"/>
      <feComposite operator="in" in2="blur-4"/>
      <feComposite in="SourceGraphic"/>
    </filter>
    <filter id="Ellipse_33" x="1721" y="6" width="37" height="37" filterUnits="userSpaceOnUse">
      <feOffset dy="3" input="SourceAlpha"/>
      <feGaussianBlur stdDeviation="3" result="blur-5"/>
      <feFlood flood-opacity="0.161"/>
      <feComposite operator="in" in2="blur-5"/>
      <feComposite in="SourceGraphic"/>
    </filter>
    <filter id="Ellipse_34" x="1715" y="0" width="49" height="49" filterUnits="userSpaceOnUse">
      <feOffset dy="3" input="SourceAlpha"/>
      <feGaussianBlur stdDeviation="3" result="blur-6"/>
      <feFlood flood-opacity="0.161"/>
      <feComposite operator="in" in2="blur-6"/>
      <feComposite in="SourceGraphic"/>
    </filter>
    <filter id="Ellipse_35" x="937" y="679" width="37" height="37" filterUnits="userSpaceOnUse">
      <feOffset dy="3" input="SourceAlpha"/>
      <feGaussianBlur stdDeviation="3" result="blur-7"/>
      <feFlood flood-opacity="0.161"/>
      <feComposite operator="in" in2="blur-7"/>
      <feComposite in="SourceGraphic"/>
    </filter>
  </defs>
  <g id="Line" transform="translate(-57 -183)">
    <path id="Line-2" data-name="Line" d="M1726.6-296.5s115.249,442-41.16,452c-58.028,3.71-111.133-34-218.15,0-38.954,12.376-39.1,186-131.713,192-37.018-8.684-37.249,119.555-189.338,120-31.7.093-148.215-101.606-189.338-112-109.481-27.672-160.134,161.836-286.065,112-68.275-27.019-43.495-80.56-109.075-120-50.09-33.306-96.856-125.625-224.324-192-50.605-26.351-267.157,66.375-323.109,0S-.082-296.5-.082-296.5" transform="translate(78.5 524.5)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="3" stroke-dasharray="10"/>
    <path id="location" d="M13.107,30.333c3.117-3.9,10.227-13.356,10.227-18.667A11.667,11.667,0,0,0,0,11.667c0,5.311,7.109,14.766,10.227,18.667a1.836,1.836,0,0,0,2.88,0ZM11.667,7.778a3.889,3.889,0,1,1-3.889,3.889A3.889,3.889,0,0,1,11.667,7.778Z" transform="translate(68 190.953)" fill="#fff"/>
    <g transform="matrix(1, 0, 0, 1, 57, 183)" filter="url(#Ellipse_27)">
      <circle id="Ellipse_27-2" data-name="Ellipse 27" cx="9.5" cy="9.5" r="9.5" transform="translate(14 465)" fill="#fff"/>
    </g>
    <g transform="matrix(1, 0, 0, 1, 57, 183)" filter="url(#Ellipse_28)">
      <circle id="Ellipse_28-2" data-name="Ellipse 28" cx="9.5" cy="9.5" r="9.5" transform="translate(435 543)" fill="#fff"/>
    </g>
    <g transform="matrix(1, 0, 0, 1, 57, 183)" filter="url(#Ellipse_30)">
      <circle id="Ellipse_30-2" data-name="Ellipse 30" cx="9.5" cy="9.5" r="9.5" transform="translate(1448 548)" fill="#fff"/>
    </g>
    <g transform="matrix(1, 0, 0, 1, 57, 183)" filter="url(#Ellipse_31)">
      <circle id="Ellipse_31-2" data-name="Ellipse 31" cx="9.5" cy="9.5" r="9.5" transform="translate(1764 436)" fill="#fff"/>
    </g>
    <g transform="matrix(1, 0, 0, 1, 57, 183)" filter="url(#Ellipse_33)">
      <circle id="Ellipse_33-2" data-name="Ellipse 33" cx="9.5" cy="9.5" r="9.5" transform="translate(1730 12)" fill="#fff"/>
    </g>
    <g transform="matrix(1, 0, 0, 1, 57, 183)" filter="url(#Ellipse_34)">
      <g id="Ellipse_34-2" data-name="Ellipse 34" transform="translate(1724 6)" fill="none" stroke="#fff" stroke-width="2">
        <circle cx="15.5" cy="15.5" r="15.5" stroke="none"/>
        <circle cx="15.5" cy="15.5" r="14.5" fill="none"/>
      </g>
    </g>
    <g transform="matrix(1, 0, 0, 1, 57, 183)" filter="url(#Ellipse_35)">
      <circle id="Ellipse_35-2" data-name="Ellipse 35" cx="9.5" cy="9.5" r="9.5" transform="translate(946 685)" fill="#fff"/>
    </g>
    <g id="Group_100" data-name="Group 100">
      <circle id="Ellipse_32" data-name="Ellipse 32" cx="8" cy="8" r="8" transform="translate(1819 323)" fill="#fff"/>
    </g>
    <g id="Group_101" data-name="Group 101" transform="translate(-1757)">
      <circle id="Ellipse_32-2" data-name="Ellipse 32" cx="8" cy="8" r="8" transform="translate(1819 323)" fill="#fff"/>
    </g>
  </g>
</svg>
<!-- desktop svg -->
<!-- desktop svg End -->
<!-- Mobile svg -->
<svg class="position-absolute d-md-none d-block banner-mbl-svg" xmlns="http://www.w3.org/2000/svg" width="257" height="426.047" viewBox="0 0 257 426.047">
  <g id="line" transform="translate(-125 -246.953)">
    <path id="Line-2" data-name="Line" d="M277.415,113.167s-22.293-50.636-76.833-41c-47.48,8.388-80.417,46.167-138.5,22.5s14.583-65.333,5-97-32.667-48.167,0-59.5,43.833,31.167,97.5,8.5,29.625-42.75,34-80.5,25.833-63-16.5-70.5c-21.209-3.758-40.963,45.328-64,42.5-46.167-5.667-51.5,22-78.5-4.5s53-119.5,53-119.5" transform="translate(94.918 544.833)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="1.3" stroke-dasharray="4 5"/>
    <g id="Group_101" data-name="Group 101" transform="translate(-1656 -34)">
      <circle id="Ellipse_32" data-name="Ellipse 32" cx="3.5" cy="3.5" r="3.5" transform="translate(1816 320)" fill="#fff"/>
      <g id="Ellipse_829" data-name="Ellipse 829" transform="translate(1814 318)" fill="none" stroke="#fff" stroke-width="1">
        <circle cx="5.5" cy="5.5" r="5.5" stroke="none"/>
        <circle cx="5.5" cy="5.5" r="5" fill="none"/>
      </g>
    </g>
    <circle id="Ellipse_27" data-name="Ellipse 27" cx="4" cy="4" r="4" transform="translate(269 336)" fill="#fff"/>
    <circle id="Ellipse_832" data-name="Ellipse 832" cx="4" cy="4" r="4" transform="translate(125 360)" fill="#fff"/>
    <circle id="Ellipse_833" data-name="Ellipse 833" cx="4" cy="4" r="4" transform="translate(306 611)" fill="#fff"/>
    <circle id="Ellipse_834" data-name="Ellipse 834" cx="4" cy="4" r="4" transform="translate(140 495)" fill="#fff"/>
    <circle id="Ellipse_830" data-name="Ellipse 830" cx="4" cy="4" r="4" transform="translate(289 408)" fill="#fff"/>
    <circle id="Ellipse_831" data-name="Ellipse 831" cx="4" cy="4" r="4" transform="translate(129 611)" fill="#fff"/>
    <path id="location" d="M4.213,9.75c1-1.254,3.287-4.293,3.287-6a3.75,3.75,0,0,0-7.5,0c0,1.707,2.285,4.746,3.287,6a.59.59,0,0,0,.926,0ZM3.75,2.5A1.25,1.25,0,1,1,2.5,3.75,1.25,1.25,0,0,1,3.75,2.5Z" transform="translate(188.5 246.953)" fill="#fff"/>
    <g id="Group_102" data-name="Group 102" transform="translate(-1443 344)">
      <circle id="Ellipse_32-2" data-name="Ellipse 32" cx="3.5" cy="3.5" r="3.5" transform="translate(1816 320)" fill="#fff"/>
      <g id="Ellipse_829-2" data-name="Ellipse 829" transform="translate(1814 318)" fill="none" stroke="#fff" stroke-width="1">
        <circle cx="5.5" cy="5.5" r="5.5" stroke="none"/>
        <circle cx="5.5" cy="5.5" r="5" fill="none"/>
      </g>
    </g>
  </g>
</svg>
<!-- Mobile svg End-->

</section>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const bannerLeft = document.querySelector(".banner-left");
    const images = bannerLeft.querySelectorAll("img");

    let loadedImages = 0;

    function checkImagesLoaded() {
        console.log(`Loaded images: ${loadedImages}/${images.length}`); // デバッグ用ログ
        if (loadedImages === images.length) {
            bannerLeft.classList.add("loaded");
            console.log("All images loaded, class added.");
        }
    }

    images.forEach((img) => {
        if (img.complete) {
            loadedImages++;
        } else {
            img.addEventListener("load", () => {
                loadedImages++;
                checkImagesLoaded();
            });

            img.addEventListener("error", () => {
                console.error("Image failed to load:", img.src);
                loadedImages++;
                checkImagesLoaded();
            });
        }
    });

    checkImagesLoaded();
});
</script>