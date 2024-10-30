<?php
$section_hide = get_theme_mod( 'vw_tourism_pro_how_to_process_enabledisable' );
if ( 'Disable' == $section_hide ) {
  return;
}
if( get_theme_mod('vw_tourism_pro_how_to_process_bgcolor','') ) {
  $process_bg = 'background-color:'.esc_attr(get_theme_mod('vw_tourism_pro_how_to_process_bgcolor','')).';';
}elseif( get_theme_mod('vw_tourism_pro_how_to_process_bgimage','') ){
  $process_bg = 'background-image:url(\''.esc_url(get_theme_mod('vw_tourism_pro_how_to_process_bgimage')).'\')';
}else{
  $process_bg = '';
}
$img_bg = get_theme_mod('vw_tourism_pro_how_to_process_bg_attachment');
?>
<section id="how-to-process" class="<?php echo esc_attr($img_bg); ?> position-relative pb-0" style="<?php echo esc_attr($process_bg); ?>">
  <div class="container">
    <div class="row">
      <?php if(get_theme_mod('vw_tourism_pro_how_to_process_sub_heading')!=''){ ?>
        <p class="sec-sub-heading text-center"><?php echo esc_html(get_theme_mod('vw_tourism_pro_how_to_process_sub_heading')); ?></p>
      <?php } ?>
      <?php if(get_theme_mod('vw_tourism_pro_how_to_process_heading')!=''){ ?>
        <h2 class="sec-heading text-center"><?php echo esc_html(get_theme_mod('vw_tourism_pro_how_to_process_heading')); ?><h2>
      <?php } ?>
    </div>
    <div class="d-md-flex d-sm-grid d-grid mt-md-5 pt-md-5 mt-2 justify-content-between how-inner">
      <?php

        $how_point = get_theme_mod("vw_tourism_pro_how_to_process_number");

        $no = 1;
        for( $j = 1; $j <= $how_point; $j++ ) {
        $number_with_zero = sprintf("%02d", $no);

        if (get_theme_mod('vw_tourism_pro_how_to_process_img'.$j) != '') {
          $no++;
        }
        ?>
        <div class="how-box-wrapper">
          <?php if(get_theme_mod('vw_tourism_pro_how_to_process_img'.$j) != '') { ?>
          <div class="how-box-wrapper-inner">
            <span class="activity-no"><?php echo esc_html($number_with_zero); ?></span>
            <div class="d-flex flex-column gap-3">
                <div class="how-img-wrapper position-relative">
                <?php if(get_theme_mod('vw_tourism_pro_how_to_process_img'.$j)!=''){ ?>
                  <img class="how-img" src="<?php echo esc_html(get_theme_mod('vw_tourism_pro_how_to_process_img'.$j)); ?>">
                <?php } ?>
              </div>
            </div>
          </div>
          <?php if(get_theme_mod('vw_tourism_pro_how_to_process_title'.$j)!=''){ ?>
            <h5 class="how-title"><?php echo esc_html(get_theme_mod('vw_tourism_pro_how_to_process_title'.$j)); ?></h5>
          <?php } } ?>
        </div>
      <?php } ?>
    </div>
  </div>
  <svg class="dash-img" xmlns="http://www.w3.org/2000/svg" width="1920" height="143.592" viewBox="0 0 1810 143.592">
    <g id="line" transform="translate(-61 -6234.076)">
      <path id="how_to_work_line_" data-name="how to work line " d="M-23.833,93.833s172.458-57.375,289.333-16,174.333,69.5,324,84.333,208,8,317.333-44,202.667-82.667,384-32,286.667,130,394.667,112,71-11.667,71-11.667" transform="translate(94.5 6175.5)" fill="none" stroke="#112542" stroke-width="3" stroke-dasharray="10"/>
      <path id="chevron-down-solid" d="M11.915,14.122a1.94,1.94,0,0,0,2.679,0L25.949,3.13a1.794,1.794,0,0,0,0-2.593,1.94,1.94,0,0,0-2.679,0l-10.018,9.7L3.233.542a1.94,1.94,0,0,0-2.679,0,1.793,1.793,0,0,0,0,2.593L11.909,14.128Z" transform="matrix(-0.105, -0.995, 0.995, -0.105, 148.767, 6261.966)" fill="#112542"/>
      <path id="chevron-down-solid-2" data-name="chevron-down-solid" d="M11.915,14.122a1.94,1.94,0,0,0,2.679,0L25.949,3.13a1.794,1.794,0,0,0,0-2.593,1.94,1.94,0,0,0-2.679,0l-10.018,9.7L3.233.542a1.94,1.94,0,0,0-2.679,0,1.793,1.793,0,0,0,0,2.593L11.909,14.128Z" transform="matrix(0.259, -0.966, 0.966, 0.259, 510.242, 6319.446)" fill="#112542"/>
      <path id="chevron-down-solid-3" data-name="chevron-down-solid" d="M11.915,14.122a1.94,1.94,0,0,0,2.679,0L25.949,3.13a1.794,1.794,0,0,0,0-2.593,1.94,1.94,0,0,0-2.679,0l-10.018,9.7L3.233.542a1.94,1.94,0,0,0-2.679,0,1.793,1.793,0,0,0,0,2.593L11.909,14.128Z" transform="matrix(-0.309, -0.951, 0.951, -0.309, 942.829, 6333.165)" fill="#112542"/>
      <path id="chevron-down-solid-4" data-name="chevron-down-solid" d="M11.915,14.122a1.94,1.94,0,0,0,2.679,0L25.949,3.13a1.794,1.794,0,0,0,0-2.593,1.94,1.94,0,0,0-2.679,0l-10.018,9.7L3.233.542a1.94,1.94,0,0,0-2.679,0,1.793,1.793,0,0,0,0,2.593L11.909,14.128Z" transform="matrix(0.407, -0.914, 0.914, 0.407, 1326.753, 6259.479)" fill="#112542"/>
      <g id="dot">
        <circle id="Ellipse_757" data-name="Ellipse 757" cx="9" cy="9" r="9" transform="translate(68 6260)" fill="#112542"/>
        <g id="Ellipse_758" data-name="Ellipse 758" transform="translate(61 6253)" fill="none" stroke="#112542" stroke-width="2">
          <circle cx="16" cy="16" r="16" stroke="none"/>
          <circle cx="16" cy="16" r="15" fill="none"/>
        </g>
      </g>
      <g id="location_1_" data-name="location (1)" transform="translate(1840.333 6328.667)">
        <path id="Path_7691" data-name="Path 7691" d="M89.974,26.183a29.192,29.192,0,0,0,13.566,0c2.231-.63,3.363-1.543,3.363-2.712s-1.131-2.081-3.363-2.712a21.155,21.155,0,0,0-3.531-.638c2.561-4.372,5.1-9.322,5.1-11.77a8.352,8.352,0,0,0-16.7,0c0,2.448,2.538,7.4,5.1,11.769a21.147,21.147,0,0,0-3.53.638c-2.231.63-3.363,1.543-3.363,2.712S87.742,25.552,89.974,26.183ZM96.757,1.8a6.562,6.562,0,0,1,6.555,6.555c0,1.857-2.3,6.723-6.145,13.018a.481.481,0,0,1-.821,0C92.5,15.075,90.2,10.209,90.2,8.352A6.563,6.563,0,0,1,96.757,1.8ZM90.788,22.4a21.84,21.84,0,0,1,3.738-.564l.286.471a2.278,2.278,0,0,0,3.887,0l.287-.471a21.841,21.841,0,0,1,3.738.564,4.588,4.588,0,0,1,2.365,1.07,4.587,4.587,0,0,1-2.365,1.07,25.213,25.213,0,0,1-5.968.644,25.212,25.212,0,0,1-5.968-.644,4.587,4.587,0,0,1-2.365-1.07A4.589,4.589,0,0,1,90.788,22.4Z" transform="translate(-81.423)" fill="#112542"/>
        <path id="Path_7692" data-name="Path 7692" d="M28.051,357.226a.9.9,0,0,0-.865,1.575c1.07.588,1.684,1.24,1.684,1.788,0,.671-.951,1.711-3.619,2.617a32.081,32.081,0,0,1-9.918,1.389,32.081,32.081,0,0,1-9.918-1.389C2.747,362.3,1.8,361.26,1.8,360.589c0-.549.614-1.2,1.684-1.788a.9.9,0,0,0-.865-1.575C1.422,357.882,0,359,0,360.589c0,1.22.839,2.96,4.837,4.319a33.9,33.9,0,0,0,10.5,1.484,33.9,33.9,0,0,0,10.5-1.484c4-1.358,4.837-3.1,4.837-4.319C30.667,359,29.245,357.882,28.051,357.226Z" transform="translate(0 -335.725)" fill="#112542"/>
        <path id="Path_7693" data-name="Path 7693" d="M206.667,77.177a3.357,3.357,0,1,0-3.357,3.357A3.361,3.361,0,0,0,206.667,77.177Zm-4.917,0a1.56,1.56,0,1,1,1.56,1.56A1.562,1.562,0,0,1,201.75,77.177Z" transform="translate(-187.977 -69.398)" fill="#112542"/>
      </g>
    </g>
  </svg>
  <!-- <svg class="dash-img" xmlns="http://www.w3.org/2000/svg" width="1786.565" height="143.24" viewBox="0 0 1786.565 143.24">
 <path id="how_to_work_line_" data-name="how to work line " d="M-23.833,93.833s172.458-57.375,289.333-16,120.667,81.353,281,91.436,251,.9,360.333-51.1,202.667-82.667,384-32,286.667,130,394.667,112,68-18,68-18" transform="translate(24.307 -58.928)" fill="none" stroke="#112542" stroke-width="2" stroke-dasharray="10"/>
</svg> -->

</section>
