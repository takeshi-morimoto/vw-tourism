<?php
/**
 * The template for displaying archive of Dosth Review Source taxonomy
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Dosth
 */
get_header();
  $background_img = get_theme_mod('vw_tourism_pro_inner_page_banner_bgimage');
  $current_term = get_queried_object();

  $term_id = '';
  // Check if the current term exists
  if ($current_term) {
    // Get the term ID
    $term_id = $current_term->term_id;
  }
  $thumbnail_url = '';
  if ( $term_id != '' ) {
    $thumbnail_url = get_term_meta($term_id, 'team_image', true);
    $team_role = get_term_meta($term_id, 'team_role', true);
    $team_dob = get_term_meta($term_id, 'team_dob', true);
    $team_address = get_term_meta($term_id, 'team_address', true);
    $team_email = get_term_meta($term_id, 'team_email', true);
    $team_phone = get_term_meta($term_id, 'team_phone', true);
    $team_experience = get_term_meta($term_id, 'team_experience', true);
    $team_clients = get_term_meta($term_id, 'team_clients', true);
    $team_awards = get_term_meta($term_id, 'team_awards', true);
    $team_client_satisfied = get_term_meta($term_id, 'team_client_satisfied', true);
  }

  $args = array(
    'post_type' => 'tcp_package',
    'post_status' => 'publish',
    'posts_per_page'=> -1,
    'tax_query' => array(
      array(
        'taxonomy' => 'tcp_team',
        'field' => 'term_id',
        'terms' => $term_id
      )
    )
  );
  $new = new WP_Query($args);


?>
<div class="title-box" style="background-image:url(<?php echo esc_url( $background_img); ?>)">
  <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-lg-12">
          <div class="banner-text">
              <h1><?php single_term_title();?></h1>
              <?php if ( get_theme_mod('vw_tourism_pro_site_breadcrumb_enable', true) != '' ) { ?>
                    <div class=" bradcrumbs">
                      <?php vw_tourism_pro_the_breadcrumb(); ?>
                    </div>
                <?php }
                ?>
          </div>
        </div>

        </div>
  </div>

</div>
<section id="tcp_team_single" class="pb-0">
  <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3">
          <img class="team-single-img w-100" src="<?php echo $thumbnail_url; ?>">
        </div>
        <div class="col-lg-9 col-md-9">
            <div class="single-team-content-main">
              <p class="mb-0 term-role"><?php echo $team_role; ?></p>
              <h4><?php echo single_term_title(); ?></h4>
                <p class="mb-0"><?php echo term_description(); ?></p>
                <div class="single-team-iner">
                  <p class="mb-0"><span>Date Of Birth: </span> <?php echo $team_dob; ?></p>
                  <p class="mb-0"><span>Address: </span> <?php echo $team_address; ?></p>
                  <p class="mb-0"><span>Email: </span> <?php echo $team_email; ?></p>
                  <p class="mb-0"><span>Phone: </span> <?php echo $team_phone; ?></p>
                </div>
            </div>
            <div class="d-md-flex d-sm-grid d-grid justify-content-around team-year-main ">
                <div class="text-center"><h5><?php echo $team_experience; ?></h5><p class="mb-0">Experience Years</p></div>
                <div class="text-center"> <h5><?php echo $team_clients; ?> </h5><p class="mb-0">Clients</p></div>
                <div class="text-center"><h5><?php echo $team_awards; ?></h5><p class="mb-0">Awards</p>   </div>
                <div class="text-center"><h5> <?php echo $team_client_satisfied; ?></h5><p class="mb-0"> Client Satisfied</p>   </div>
            </div>
        </div>
      </div>
      <div class="row mt-5">
        <div class="mb-4">
          <?php if(get_theme_mod('vw_tourism_pro_places_guided_post_sub_heading')!=''){ ?>
            <p class="sec-sub-heading  text-center"><?php echo esc_html(get_theme_mod('vw_tourism_pro_places_guided_post_sub_heading')); ?></p>
          <?php } ?>
          <?php if(get_theme_mod('vw_tourism_pro_places_guided_post_heading')!=''){ ?>
            <h2 class="sec-heading  text-center"><?php echo esc_html(get_theme_mod('vw_tourism_pro_places_guided_post_heading')); ?></h2>
          <?php } ?>
        </div>

        <?php while ( $new->have_posts() ){ $new->the_post();

          $post_id = $post->ID;

          $location_link = ''; $term_id = '';
          $destination = get_the_terms($post, 'tcp_destination');
          $destination_title = '';
          if (is_array($destination) && count($destination)) {
            $destination_title = $destination[0]->name . ' Tour';
            $location_link = get_category_link( $destination[0]->term_id );
          }

          $member_text = get_post_meta( $post_id, 'pkg_person_text', true) ? get_post_meta( $post_id, 'pkg_person_text', true) : 'Per Person';

          $pkg_sale_price   = get_post_meta( $post_id, 'pkg_sale_price', true);
          $pkg_tour_days   = get_post_meta( $post_id, 'pkg_tour_days', true);
          $pkg_tour_nights   = get_post_meta( $post_id, 'pkg_tour_nights', true);


          $pkg_sale_price = $pkg_sale_price ? $pkg_sale_price : 0;
             $member_text = get_post_meta( $post_id, 'pkg_person_text', true) ? get_post_meta( $post_id, 'pkg_person_text', true) : 'Per Person';
        ?>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
          <div class="packages-box mb-4">
            <div class="packages-img-main position-relative">
              <?php if (has_post_thumbnail()){ ?>
                <?php the_post_thumbnail(); ?>
              <?php } ?>
              <div class="d-flex flex-column position-absolute bottom-0 top-0 start-0 end-0 mx-auto my-3 justify-content-between packages-content-box  text-md-start text-sm-start text-start px-sm-1" style="z-index:1">
                <div class="packages-btm-content">
                  <a href="<?php echo esc_url($location_link); ?>"><h5><?php echo esc_html($destination_title); ?></h5></a>
                </div>
                <div class="packages-btm-content">
                  <h6 class="packages-from">From <?php echo esc_html(get_post_meta($post->ID,'pkg_from',true)); ?></h6>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="packages-date">
                        <span><?php echo $pkg_tour_days ; echo $pkg_tour_days ? ' Days' : '';?></span>
                        <span><?php echo esc_html($pkg_tour_nights); echo $pkg_tour_nights ? ' Nights' : '';?></span>
                        <p class="mb-0 pac-per-year"><?php esc_html_e($member_text);?></p>
                    </div>
                      <p class="mb-0 package-price"><?php echo esc_html(get_theme_mod('vw_tourism_pro_packages_currency')); ?><?php echo  esc_html(number_format((float)$pkg_sale_price, 2, '.', '')); ?></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="packges-bottom-box">
              <div class="d-flex flex-column gap-2 packges-bottom-box-inner  py-3 text-center">
                <div class="packages-title">
                    <h3 style="line-height:0;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                </div>
                <div class="packages-name">
                    <p class="mb-0"><?php echo esc_html(get_post_meta($post->ID,'pkg_travel_name',true)); ?></p>
                </div>
                <div class="packages-button  ">
                  <a class="theme-btn-main" href="<?php the_permalink(); ?>">
                    <div class="theme-btn-block">
                        <span class="theme-btn-line-left"></span>
                              <span class="theme-btn-text"><?php echo esc_html(get_theme_mod('vw_tourism_pro_popular_packages_booknow_text'));?></span>
                        <span class="theme-btn-line-right"></span>
                        <i class="fa-solid fa-caret-down"></i>
                      </div>
                  </a>
                </div>
              </div>

            </div>

          </div>
        </div>
        <?php } wp_reset_query(); ?>
      </div>
  </div>
</section>

<?php get_footer(); ?>
