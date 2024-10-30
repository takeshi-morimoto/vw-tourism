<?php
// Boxed or full width layout
	$vw_tourism_pro_radio_boxed_full_layout = get_theme_mod('vw_tourism_pro_radio_boxed_full_layout');
	$vw_tourism_pro_radio_boxed_full_layout_value = get_theme_mod('vw_tourism_pro_radio_boxed_full_layout_value');
	$custom_css = '';

//  Padding Top
	$vw_tourism_pro_banner_padding_top = get_theme_mod('vw_tourism_pro_banner_padding_top');
	$vw_tourism_pro_activity_padding_top = get_theme_mod('vw_tourism_pro_activity_padding_top');
	$vw_tourism_pro_about_us_padding_top = get_theme_mod('vw_tourism_pro_about_us_padding_top');
	$vw_tourism_pro_popular_destination_padding_top = get_theme_mod('vw_tourism_pro_popular_destination_padding_top');
	$vw_tourism_pro_explore_padding_top = get_theme_mod('vw_tourism_pro_explore_padding_top');
	$vw_tourism_pro_popular_cuisines_padding_top = get_theme_mod('vw_tourism_pro_popular_cuisines_padding_top');
	$vw_tourism_pro_popular_packages_padding_top = get_theme_mod('vw_tourism_pro_popular_packages_padding_top');
	$vw_tourism_pro_experience_padding_top = get_theme_mod('vw_tourism_pro_experience_padding_top');
	$vw_tourism_pro_how_to_process_padding_top = get_theme_mod('vw_tourism_pro_how_to_process_padding_top');
	$vw_tourism_pro_why_choose_us_padding_top = get_theme_mod('vw_tourism_pro_why_choose_us_padding_top');
	$vw_tourism_pro_team_padding_top = get_theme_mod('vw_tourism_pro_team_padding_top');
	$vw_tourism_pro_testimonial_padding_top = get_theme_mod('vw_tourism_pro_testimonial_padding_top');
	$vw_tourism_pro_blog_padding_top = get_theme_mod('vw_tourism_pro_blog_padding_top');

	// ----------- Padding Top ---------

		if($vw_tourism_pro_banner_padding_top != false){
			$custom_css .='#banner{
				padding-top: '.esc_html($vw_tourism_pro_banner_padding_top).'px;
			}';
		}

		if($vw_tourism_pro_activity_padding_top != false){
			$custom_css .='#activity{
				padding-top: '.esc_html($vw_tourism_pro_activity_padding_top).'px!important;
			}';
		}
		if($vw_tourism_pro_about_us_padding_top != false){
			$custom_css .='#about{
				padding-top: '.esc_html($vw_tourism_pro_about_us_padding_top).'px;
			}';
		}
		if($vw_tourism_pro_popular_destination_padding_top != false){
			$custom_css .='#popular-destination{
				padding-top: '.esc_html($vw_tourism_pro_popular_destination_padding_top).'px;
			}';
		}
		if($vw_tourism_pro_explore_padding_top != false){
			$custom_css .='#explore{
				padding-top: '.esc_html($vw_tourism_pro_explore_padding_top).'px;
			}';
		}
		if($vw_tourism_pro_popular_cuisines_padding_top != false){
			$custom_css .='#popular-cuisines{
				padding-top: '.esc_html($vw_tourism_pro_popular_cuisines_padding_top).'px;
			}';
		}
		if($vw_tourism_pro_popular_packages_padding_top != false){
			$custom_css .='#popular-packages{
				padding-top: '.esc_html($vw_tourism_pro_popular_packages_padding_top).'px;
			}';
		}
		if($vw_tourism_pro_experience_padding_top != false){
			$custom_css .='#experience{
				padding-top: '.esc_html($vw_tourism_pro_experience_padding_top).'px;
			}';
		}

		if($vw_tourism_pro_how_to_process_padding_top != false){
			$custom_css .='#how-to-process{
				padding-top: '.esc_html($vw_tourism_pro_how_to_process_padding_top).'px;
			}';
		}
		if($vw_tourism_pro_why_choose_us_padding_top != false){
			$custom_css .='#why-choose{
				padding-top: '.esc_html($vw_tourism_pro_why_choose_us_padding_top).'px !important;
			}';
		}
		if($vw_tourism_pro_team_padding_top != false){
			$custom_css .='#team{
				padding-top: '.esc_html($vw_tourism_pro_team_padding_top).'px !important;
			}';
		}
		if($vw_tourism_pro_testimonial_padding_top != false){
			$custom_css .='#testimonial{
				padding-top: '.esc_html($vw_tourism_pro_testimonial_padding_top).'px !important;
			}';
		}
		if($vw_tourism_pro_blog_padding_top != false){
			$custom_css .='#Blog{
				padding-top: '.esc_html($vw_tourism_pro_blog_padding_top).'px !important;
			}';
		}
//General Button Color Pallete option
	$vw_tourism_pro_body_font_family = get_theme_mod('vw_tourism_pro_body_font_family');
	$vw_tourism_pro_body_font_size = get_theme_mod('vw_tourism_pro_body_font_size');
	$vw_tourism_pro_body_color = get_theme_mod('vw_tourism_pro_body_color');
	$vw_tourism_pro_h1_font_family = get_theme_mod('vw_tourism_pro_h1_font_family');
	$vw_tourism_pro_h1_font_size = get_theme_mod('vw_tourism_pro_h1_font_size');
	$vw_tourism_pro_h1_color = get_theme_mod('vw_tourism_pro_h1_color');
	$vw_tourism_pro_h2_font_family = get_theme_mod('vw_tourism_pro_h2_font_family');
	$vw_tourism_pro_h2_font_size = get_theme_mod('vw_tourism_pro_h2_font_size');
	$vw_tourism_pro_h2_color = get_theme_mod('vw_tourism_pro_h2_color');
	$vw_tourism_pro_h3_font_family = get_theme_mod('vw_tourism_pro_h3_font_family');
	$vw_tourism_pro_h3_font_size = get_theme_mod('vw_tourism_pro_h3_font_size');
	$vw_tourism_pro_h3_color = get_theme_mod('vw_tourism_pro_h3_color');
	$vw_tourism_pro_h4_font_family = get_theme_mod('vw_tourism_pro_h4_font_family');
	$vw_tourism_pro_h4_font_size = get_theme_mod('vw_tourism_pro_h4_font_size');
	$vw_tourism_pro_h4_color = get_theme_mod('vw_tourism_pro_h4_color');
	$vw_tourism_pro_h5_font_family = get_theme_mod('vw_tourism_pro_h5_font_family');
	$vw_tourism_pro_h5_font_size = get_theme_mod('vw_tourism_pro_h5_font_size');
	$vw_tourism_pro_h5_color = get_theme_mod('vw_tourism_pro_h5_color');
	$vw_tourism_pro_h6_font_family = get_theme_mod('vw_tourism_pro_h6_font_family');
	$vw_tourism_pro_h6_font_size = get_theme_mod('vw_tourism_pro_h6_font_size');
	$vw_tourism_pro_h6_color = get_theme_mod('vw_tourism_pro_h6_color');
	$vw_tourism_pro_paragarpah_font_family = get_theme_mod('vw_tourism_pro_paragarpah_font_family');
	$vw_tourism_pro_para_font_size = get_theme_mod('vw_tourism_pro_para_font_size');
	$vw_tourism_pro_para_color = get_theme_mod('vw_tourism_pro_para_color');
	$vw_tourism_pro_hi_first_color = get_theme_mod('vw_tourism_pro_hi_first_color');
	$vw_tourism_pro_hi_scnd_color = get_theme_mod('vw_tourism_pro_hi_scnd_color');

// Top bar / Header

	$vw_tourism_pro_header_title_color = get_theme_mod('vw_tourism_pro_header_title_color');
	$vw_tourism_pro_header_title_font_family = get_theme_mod('vw_tourism_pro_header_title_font_family');
	$vw_tourism_pro_header_title_font_size = get_theme_mod('vw_tourism_pro_header_title_font_size');
	$vw_tourism_pro_header_subtitle_color = get_theme_mod('vw_tourism_pro_header_subtitle_color');
	$vw_tourism_pro_header_subtitle_font_family = get_theme_mod('vw_tourism_pro_header_subtitle_font_family');
	$vw_tourism_pro_header_subtitle_font_size = get_theme_mod('vw_tourism_pro_header_subtitle_font_size');
	$vw_tourism_pro_header_contact_details_color = get_theme_mod('vw_tourism_pro_header_contact_details_color');
	$vw_tourism_pro_header_contact_details_font_family = get_theme_mod('vw_tourism_pro_header_contact_details_font_family');
	$vw_tourism_pro_header_contact_detailsicon_color = get_theme_mod('vw_tourism_pro_header_contact_detailsicon_color');
	$vw_tourism_pro_headerhomebg_color = get_theme_mod('vw_tourism_pro_headerhomebg_color');
	$vw_tourism_pro_headermenu_color = get_theme_mod('vw_tourism_pro_headermenu_color');
	$vw_tourism_pro_headermenu_font_family = get_theme_mod('vw_tourism_pro_headermenu_font_family');
	$vw_tourism_pro_header_menuhovercolor = get_theme_mod('vw_tourism_pro_header_menuhovercolor');
	$vw_tourism_pro_dropdownbg_color = get_theme_mod('vw_tourism_pro_dropdownbg_color');
	$vw_tourism_pro_dropdownbg_itemcolor = get_theme_mod('vw_tourism_pro_dropdownbg_itemcolor');
	$vw_tourism_pro_dropdownbg_item_hovercolor = get_theme_mod('vw_tourism_pro_dropdownbg_item_hovercolor');
	$vw_tourism_pro_top_submenus_font_size = get_theme_mod('vw_tourism_pro_top_submenus_font_size', '');
	$vw_tourism_pro_top_submenus_bg_opacity_color =get_theme_mod('vw_tourism_pro_top_submenus_bg_opacity_color', '');
	$vw_tourism_pro_dropdownbg_responsivecolor = get_theme_mod('vw_tourism_pro_dropdownbg_responsivecolor');
	$vw_tourism_pro_headermenu_responsive_item_color = get_theme_mod('vw_tourism_pro_headermenu_responsive_item_color');
	$vw_tourism_pro_headermenu_responsive_dropdown_item_color = get_theme_mod('vw_tourism_pro_headermenu_responsive_dropdown_item_color');
	$vw_tourism_pro_headermenu_responsive_dropdown_item_hover_color = get_theme_mod('vw_tourism_pro_headermenu_responsive_dropdown_item_hover_color');


	$vw_tourism_pro_headermenu_font_size = get_theme_mod('vw_tourism_pro_headermenu_font_size');




// ----------- Spinner --------------

	$vw_tourism_pro_products_spinner_bgcolor = get_theme_mod('vw_tourism_pro_products_spinner_bgcolor');
	$vw_tourism_pro_spinner_opacity_color = get_theme_mod('vw_tourism_pro_spinner_opacity_color');
	$vw_tourism_pro_general_scroll_top_bgcolor = get_theme_mod('vw_tourism_pro_general_scroll_top_bgcolor');
	$vw_tourism_pro_general_scroll_top_hover_bgcolor = get_theme_mod('vw_tourism_pro_general_scroll_top_hover_bgcolor');
	$vw_tourism_pro_general_scroll_top_icon_color = get_theme_mod('vw_tourism_pro_general_scroll_top_icon_color');

	// Scroll to top settings
	$vw_tourism_pro_scroll_border_radius = get_theme_mod('vw_tourism_pro_scroll_border_radius');
    $vw_tourism_pro_scroll_width = get_theme_mod('vw_tourism_pro_scroll_width');
    $vw_tourism_pro_scroll_height = get_theme_mod('vw_tourism_pro_scroll_height');

/* -------------- Frame Setting ------------*/

	$vw_tourism_pro_site_frame_width = get_theme_mod('vw_tourism_pro_site_frame_width');
	$vw_tourism_pro_site_frame_type = get_theme_mod('vw_tourism_pro_site_frame_type');
	$vw_tourism_pro_site_frame_color = get_theme_mod('vw_tourism_pro_site_frame_color');

/* ------------- Button Settings -------------- */


	// Sale Badge Setting


	$vw_tourism_pro_product_padding_left = get_theme_mod('vw_tourism_pro_product_padding_left');

$custom_css .='html body,h1,h2,h3,h4,h5,h6,a,p,div,span{
	';
		if($vw_tourism_pro_body_font_family != false){
	    	$custom_css .='font-family: '.esc_html($vw_tourism_pro_body_font_family).'!important;';
		}
		if($vw_tourism_pro_body_color != false){
	    	$custom_css .='color: '.esc_html($vw_tourism_pro_body_color).'!important;';
		}
		if($vw_tourism_pro_body_font_size != false){
	    	$custom_css .='font-size: '.esc_html($vw_tourism_pro_body_font_size).'px !important;';
		}
	$custom_css .='}';

	/*-------------------Layout-----------------------*/
	$define_layout = get_theme_mod( 'vw_tourism_pro_radio_boxed_full_layout' );
	if('boxed' == $define_layout ){
		$custom_css .='body{';
				$custom_css .='max-width: '.esc_html($vw_tourism_pro_radio_boxed_full_layout_value).'px;';
				$custom_css .='margin: 0 auto !important ;';
				$custom_css .='width: 100% ;';
		$custom_css .='}';
	}

	/*-------------------h1-----------------------*/
	if($vw_tourism_pro_h1_font_family != false || $vw_tourism_pro_h1_color != false || $vw_tourism_pro_h1_font_size != false){
		$custom_css .='body h1, #slider h1{';
			if($vw_tourism_pro_h1_font_family != false){
		    	$custom_css .='font-family: '.esc_html($vw_tourism_pro_h1_font_family).'!important;';
			}
			if($vw_tourism_pro_h1_color != false){
		    	$custom_css .='color: '.esc_html($vw_tourism_pro_h1_color).'!important;';
			}
			if($vw_tourism_pro_h1_font_size != false){
		    	$custom_css .='font-size: '.esc_html($vw_tourism_pro_h1_font_size).'px !important;';
			}
		$custom_css .='}';
	}

	/*-------------------h2-----------------------*/
	if($vw_tourism_pro_h2_font_family != false || $vw_tourism_pro_h2_color != false || $vw_tourism_pro_h2_font_size != false){
		$custom_css .='body h2,h2 , #slider h2, .related.products h2, section h2, .postbox h2, #comments h2.comments-title, #comments h2#reply-title{';
			if($vw_tourism_pro_h2_font_family != false){
		    	$custom_css .='font-family: '.esc_html($vw_tourism_pro_h2_font_family).'!important;';
			}
			if($vw_tourism_pro_h2_color != false){
		    	$custom_css .='color: '.esc_html($vw_tourism_pro_h2_color).'!important;';
			}
			if($vw_tourism_pro_h2_font_size != false){
		    	$custom_css .='font-size: '.esc_html($vw_tourism_pro_h2_font_size).'px !important;';
			}
		$custom_css .='}';
	}
	/*-------------------h3-----------------------*/
	if($vw_tourism_pro_h3_font_family != false || $vw_tourism_pro_h3_color != false || $vw_tourism_pro_h3_font_size != false){
			$custom_css .='h3, h3 a, .packages-title a{';
				if($vw_tourism_pro_h3_font_family != false){
			    	$custom_css .='font-family: '.esc_html($vw_tourism_pro_h3_font_family).'!important;';
				}
				if($vw_tourism_pro_h3_color != false){
			    	$custom_css .='color: '.esc_html($vw_tourism_pro_h3_color).'!important;';
				}
				if($vw_tourism_pro_h3_font_size != false){
			    	$custom_css .='font-size: '.esc_html($vw_tourism_pro_h3_font_size).'px!important;';
				}
			$custom_css .='}';
	}
	if($vw_tourism_pro_h4_font_family != false || $vw_tourism_pro_h4_color != false || $vw_tourism_pro_h4_font_size != false){
			$custom_css .='h4, section h4, .collection-inner h4{';
				if($vw_tourism_pro_h4_font_family != false){
			    	$custom_css .='font-family: '.esc_html($vw_tourism_pro_h4_font_family).'!important;';
				}
				if($vw_tourism_pro_h4_color != false){
			    	$custom_css .='color: '.esc_html($vw_tourism_pro_h4_color).'!important;';
				}
				if($vw_tourism_pro_h4_font_size != false){
			    	$custom_css .='font-size: '.esc_html($vw_tourism_pro_h4_font_size).'px!important;';
				}
			$custom_css .='}';
	}
	if($vw_tourism_pro_h5_font_family != false || $vw_tourism_pro_h5_color != false || $vw_tourism_pro_h5_font_size != false){
			$custom_css .='h5, section h5 a{';
				if($vw_tourism_pro_h5_font_family != false){
			    	$custom_css .='font-family: '.esc_html($vw_tourism_pro_h5_font_family).'!important;';
				}
				if($vw_tourism_pro_h5_color != false){
			    	$custom_css .='color: '.esc_html($vw_tourism_pro_h5_color).'!important;';
				}
				if($vw_tourism_pro_h5_font_size != false){
			    	$custom_css .='font-size: '.esc_html($vw_tourism_pro_h5_font_size).'px!important;';
				}
			$custom_css .='}';
	}
	if($vw_tourism_pro_h6_font_family != false || $vw_tourism_pro_h6_color != false || $vw_tourism_pro_h6_font_size != false){
			$custom_css .='body h6,h6{';
				if($vw_tourism_pro_h6_font_family != false){
			    	$custom_css .='font-family: '.esc_html($vw_tourism_pro_h6_font_family).'!important;';
				}
				if($vw_tourism_pro_h6_color != false){
			    	$custom_css .='color: '.esc_html($vw_tourism_pro_h6_color).'!important;';
				}
				if($vw_tourism_pro_h6_font_size != false){
			    	$custom_css .='font-size: '.esc_html($vw_tourism_pro_h6_font_size).'px!important;';
				}
			$custom_css .='}';
	}
	if($vw_tourism_pro_paragarpah_font_family != false || $vw_tourism_pro_para_color != false || $vw_tourism_pro_para_font_size != false){
			$custom_css .='p, .slide_desc, .inner_product p, .tesimonial_col p, .collectionbox-text p, .category_col p, .latest-box p, .collection-inner p, #our_records p, .news_box_outer p, #footer p, .footer-contact p, .copyright p{';
				if($vw_tourism_pro_paragarpah_font_family != false){
			    	$custom_css .='font-family: '.esc_html($vw_tourism_pro_paragarpah_font_family).'!important;';
				}
				if($vw_tourism_pro_para_color != false){
			    	$custom_css .='color: '.esc_html($vw_tourism_pro_para_color).'!important;';
				}
				if($vw_tourism_pro_para_font_size != false){
			    	$custom_css .='font-size: '.esc_html($vw_tourism_pro_para_font_size).'px !important;';
				}
			$custom_css .='}';
	}

	/*-------------------Primary Color --------------------*/
	if($vw_tourism_pro_hi_first_color != false){
			$custom_css .='#about .theme-btn-main,#Blog .theme-btn-main, #blog-left-sidebar .theme-btn-main,#blog-right-sidebar .theme-btn-main,#full-width-blog .theme-btn-main,	.scrolled,.swiper-button-next, .swiper-button-prev,#explore .owl-next, #explore .owl-prev, .share-btn-parent,#testimonial .slider-nav i, .slider-custom-active-dot,.packages-box .theme-btn-line-right,.exp-content-box	,.testi-vertical i.fa-solid.fa-chevron-up.slick-arrow, .testi-vertical i.fa-solid.fa-chevron-down.slick-arrow, #return-to-top{
				background-color: '.esc_html($vw_tourism_pro_hi_first_color).'!important;
			}';
	}

	if($vw_tourism_pro_hi_first_color != false){
		$custom_css .='.blog-inner-meta, .blog-inner-meta a, .post-month, .vertical-blog-img-main a,.cusines-content i, .news-author,.packages-btm-content h5:hover, .packages-title a,#about .ceo-title,#about .ceo-para	{
				color: '.esc_html($vw_tourism_pro_hi_first_color).';
		}';
	}
	if($vw_tourism_pro_hi_first_color != false){
		$custom_css .='#footer-inner{
				border-bottom-color: '.esc_html($vw_tourism_pro_hi_first_color).';
		}';
	}
	if($vw_tourism_pro_hi_first_color != false){
		$custom_css .='.metabox,.border-bottom-red::after{
				border-bottom-color: '.esc_html($vw_tourism_pro_hi_first_color).';
		}';
	}
	if($vw_tourism_pro_hi_first_color != false){
		$custom_css .='.exp-post-img svg path, .dash-img circle,#chevron-down-solid-2,#chevron-down-solid-3 ,#chevron-down-solid-4{
				fill: '.esc_html($vw_tourism_pro_hi_first_color).';
		}';
	}
	if($vw_tourism_pro_hi_first_color != false){
		$custom_css .='.cusines-content-main svg line, .team-outer path, .dash-img path, .why-choose-right-box svg line,.dash-img #dot  g{
				stroke: '.esc_html($vw_tourism_pro_hi_first_color).';
		}';
	}
	if($vw_tourism_pro_hi_first_color != false){
		$custom_css .='#popular-cuisines .slick-slide.slick-current.slick-active .cuisines-image::after {
				border-color: '.esc_html($vw_tourism_pro_hi_first_color).';
		}';
	}

	/*-------------------Secondry Color --------------------*/
	if($vw_tourism_pro_hi_scnd_color != false){
			$custom_css .='#about .abt-icon, .experience-pills-tab .nav-link.active,.theme-btn-main:hover, .team-social-box:hover .share-btn-parent,.show-icon, .footer-contact-inner,.team-outer:hover .share-btn-parent	{
				background-color: '.esc_html($vw_tourism_pro_hi_scnd_color).' !important;
			}';
	}
	if($vw_tourism_pro_hi_scnd_color != false){
		$custom_css .='.sec-sub-heading,.left-blog-content .blog-inner-meta i,.vertical-blog-img-main  i {
				color: '.esc_html($vw_tourism_pro_hi_scnd_color).';
		}';
	}
	if($vw_tourism_pro_hi_scnd_color != false){
		$custom_css .='#testimonial .slider-nav .slick-current.slick-active img{
				border-color: '.esc_html($vw_tourism_pro_hi_scnd_color).';
		}';
	}
	if($vw_tourism_pro_hi_scnd_color != false){
		$custom_css .='.block .circle{
			stroke: '.esc_html($vw_tourism_pro_hi_scnd_color).';
		}';
	}
	/*--------------- header -------------------*/


	/*----------------------------- Header / Site Branding --------------------------*/


	if($vw_tourism_pro_header_title_color != false || $vw_tourism_pro_header_title_font_family != false || $vw_tourism_pro_header_title_font_size != false ){
		$custom_css .='#header .logo h2 a{';
			if($vw_tourism_pro_header_title_color != false){
				$custom_css .='color: '.esc_html($vw_tourism_pro_header_title_color).'!important;';
			}
			if($vw_tourism_pro_header_title_font_family != false){
				$custom_css .='font-family:'.esc_html($vw_tourism_pro_header_title_font_family).'!important;';
			}
			if($vw_tourism_pro_header_title_font_size != false){
				$custom_css .='font-size:'.esc_html($vw_tourism_pro_header_title_font_size).'px!important;';
			}
		$custom_css .='}';
	}
	if($vw_tourism_pro_header_subtitle_color != false || $vw_tourism_pro_header_subtitle_font_family != false || $vw_tourism_pro_header_subtitle_font_size != false ){
		$custom_css .='.logo p{';
			if($vw_tourism_pro_header_subtitle_color != false){
				$custom_css .='color: '.esc_html($vw_tourism_pro_header_subtitle_color).'!important;';
			}
			if($vw_tourism_pro_header_subtitle_font_family != false){
				$custom_css .='font-family:'.esc_html($vw_tourism_pro_header_subtitle_font_family).'!important;';
			}
			if($vw_tourism_pro_header_subtitle_font_size != false){
				$custom_css .='font-size:'.esc_html($vw_tourism_pro_header_subtitle_font_size).'px!important;';
			}
		$custom_css .='}';
	}



	if($vw_tourism_pro_headerhomebg_color != false){
		$custom_css .='div#header{';
				$custom_css .='background-color: '.esc_html($vw_tourism_pro_headerhomebg_color).';';
		$custom_css .='}';
	}

	$custom_css .='@media screen and (min-width:720px) {';
		if($vw_tourism_pro_headermenu_color != false || $vw_tourism_pro_headermenu_font_family != false || $vw_tourism_pro_headermenu_font_size != false){
			$custom_css .='.menubar .nav ul li a{';
				if($vw_tourism_pro_headermenu_color != false){
					$custom_css .='color: '.esc_html($vw_tourism_pro_headermenu_color).' !important;';
				}
				if($vw_tourism_pro_headermenu_font_family != false){
					$custom_css .='font-family:'.esc_html($vw_tourism_pro_headermenu_font_family).';';
				}
				if($vw_tourism_pro_headermenu_font_size != false){
					$custom_css .='font-size:'.esc_html($vw_tourism_pro_headermenu_font_size).'px;';
				}
			$custom_css .='}';
		}

		if($vw_tourism_pro_header_menuhovercolor != false){
			$custom_css .='.menubar .nav ul li a:hover{
				color: '.esc_html($vw_tourism_pro_header_menuhovercolor).' !important;
			}';
		}
		if($vw_tourism_pro_dropdownbg_color != false){
			$custom_css .='.menubar .nav ul li:hover > ul{
				background: '.esc_html($vw_tourism_pro_dropdownbg_color).';
			}';
		}
		if($vw_tourism_pro_dropdownbg_itemcolor != false){
			$custom_css .='.menubar .nav ul li > ul > li a{
				color: '.esc_html($vw_tourism_pro_dropdownbg_itemcolor).'!important;
			}';
		}
		if($vw_tourism_pro_dropdownbg_item_hovercolor != false){
			$custom_css .='.menubar .nav ul.sub-menu li:hover a{
				color: '.esc_html($vw_tourism_pro_dropdownbg_item_hovercolor).'!important;
			}';
		}
	$custom_css .='}';


    if($vw_tourism_pro_top_submenus_font_size != false){
        $custom_css .='#header #site-navigation ul ul a{
                font-size: '.esc_html($vw_tourism_pro_top_submenus_font_size).'px;
        }';
    }
    //---------Text Transform---------------


    if($vw_tourism_pro_top_submenus_bg_opacity_color != ""){
        $custom_css .='#header #site-navigation ul li:hover > ul{
            opacity: '.esc_html($vw_tourism_pro_top_submenus_bg_opacity_color).';
        }';
    }

	$custom_css .='@media screen and (max-width:1024px) {';
		if($vw_tourism_pro_dropdownbg_responsivecolor != false){
			$custom_css .='amp-sidebar#sidebar1{
				background-color:'.esc_html($vw_tourism_pro_dropdownbg_responsivecolor).' !important;
			}';
		}
		if($vw_tourism_pro_headermenu_responsive_item_color != false){
			$custom_css .='.menubar a:not(.sub-menu li a) {
				color: '.esc_html($vw_tourism_pro_headermenu_responsive_item_color).' !important;
			}';
		}
		if($vw_tourism_pro_headermenu_responsive_dropdown_item_color != false){
			$custom_css .='.nav ul li ul li a{
				color: '.esc_html($vw_tourism_pro_headermenu_responsive_dropdown_item_color).' !important;
			}';
		}
		if($vw_tourism_pro_headermenu_responsive_dropdown_item_hover_color != false){
			$custom_css .='.nav ul li ul li a:hover{
				color: '.esc_html($vw_tourism_pro_headermenu_responsive_dropdown_item_hover_color).' !important;
			}';
		}
	$custom_css .='}';

	$vw_tourism_pro_headermenu_icon_color = get_theme_mod('vw_tourism_pro_headermenu_icon_color');
	$vw_tourism_pro_headermenu_icon_font_size = get_theme_mod('vw_tourism_pro_headermenu_icon_font_size');
		 if($vw_tourism_pro_headermenu_icon_color != false || $vw_tourism_pro_headermenu_icon_font_size != false ){
			 $custom_css .='.search-btn i, .header-account-main i,.innermenubox i{';
				 if($vw_tourism_pro_headermenu_icon_color != false){
					 $custom_css .='color: '.esc_html($vw_tourism_pro_headermenu_icon_color).'!important;';
				 }
				 if($vw_tourism_pro_headermenu_icon_font_size != false){
					 $custom_css .='font-size:'.esc_html($vw_tourism_pro_headermenu_icon_font_size).'px!important;';
				 }
			 $custom_css .='}';
		 }
	/*-----------------------Slider Section-------------------------*/

	$vw_tourism_pro_banner_bgimage_mobile = get_theme_mod('vw_tourism_pro_banner_bgimage_mobile');
	$custom_css .='@media screen and (max-width:575px){';
			if($vw_tourism_pro_banner_bgimage_mobile != false){
				$custom_css .='#banner{
					background-image: url('.esc_url($vw_tourism_pro_banner_bgimage_mobile).') !important;
				}';
			}
	$custom_css .='}';

	$vw_tourism_pro_banner_sub_heading_color = get_theme_mod('vw_tourism_pro_banner_sub_heading_color');
	$vw_tourism_pro_banner_sub_heading_font_family = get_theme_mod('vw_tourism_pro_banner_sub_heading_font_family');
	$vw_tourism_pro_banner_sub_heading_font_size = get_theme_mod('vw_tourism_pro_banner_sub_heading_font_size');
		 if($vw_tourism_pro_banner_sub_heading_color != false || $vw_tourism_pro_banner_sub_heading_font_family != false || $vw_tourism_pro_banner_sub_heading_font_size != false ){
			 $custom_css .='.banner-sub-heading{';
				 if($vw_tourism_pro_banner_sub_heading_color != false){
					 $custom_css .='color: '.esc_html($vw_tourism_pro_banner_sub_heading_color).'!important;';
				 }
				 if($vw_tourism_pro_banner_sub_heading_font_family != false){
					 $custom_css .='font-family:'.esc_html($vw_tourism_pro_banner_sub_heading_font_family).'!important;';
				 }
				 if($vw_tourism_pro_banner_sub_heading_font_size != false){
					 $custom_css .='font-size:'.esc_html($vw_tourism_pro_banner_sub_heading_font_size).'px!important;';
				 }
			 $custom_css .='}';
		 }
	$vw_tourism_pro_banner_heading_color = get_theme_mod('vw_tourism_pro_banner_heading_color');
	$vw_tourism_pro_banner_heading_font_family = get_theme_mod('vw_tourism_pro_banner_heading_font_family');
	$vw_tourism_pro_banner_heading_font_size = get_theme_mod('vw_tourism_pro_banner_heading_font_size');
		 if($vw_tourism_pro_banner_heading_color != false || $vw_tourism_pro_banner_heading_font_family != false || $vw_tourism_pro_banner_heading_font_size != false ){
			 $custom_css .='.banner-heading{';
				 if($vw_tourism_pro_banner_heading_color != false){
					 $custom_css .='color: '.esc_html($vw_tourism_pro_banner_heading_color).'!important;';
				 }
				 if($vw_tourism_pro_banner_heading_font_family != false){
					 $custom_css .='font-family:'.esc_html($vw_tourism_pro_banner_heading_font_family).'!important;';
				 }
				 if($vw_tourism_pro_banner_heading_font_size != false){
					 $custom_css .='font-size:'.esc_html($vw_tourism_pro_banner_heading_font_size).'px!important;';
				 }
			 $custom_css .='}';
		 }
	$vw_tourism_pro_banner_card_heading_color = get_theme_mod('vw_tourism_pro_banner_card_heading_color');
	$vw_tourism_pro_banner_card_heading_font_family = get_theme_mod('vw_tourism_pro_banner_card_heading_font_family');
	$vw_tourism_pro_banner_card_heading_font_size = get_theme_mod('vw_tourism_pro_banner_card_heading_font_size');
		 if($vw_tourism_pro_banner_card_heading_color != false || $vw_tourism_pro_banner_card_heading_font_family != false || $vw_tourism_pro_banner_card_heading_font_size != false ){
			 $custom_css .='.banner-box h3{';
				 if($vw_tourism_pro_banner_card_heading_color != false){
					 $custom_css .='color: '.esc_html($vw_tourism_pro_banner_card_heading_color).'!important;';
				 }
				 if($vw_tourism_pro_banner_card_heading_font_family != false){
					 $custom_css .='font-family:'.esc_html($vw_tourism_pro_banner_card_heading_font_family).'!important;';
				 }
				 if($vw_tourism_pro_banner_card_heading_font_size != false){
					 $custom_css .='font-size:'.esc_html($vw_tourism_pro_banner_card_heading_font_size).'px!important;';
				 }
			 $custom_css .='}';
		 }

		 $vw_tourism_pro_banner_line_color = get_theme_mod('vw_tourism_pro_banner_line_color');
		 	 if($vw_tourism_pro_banner_line_color != false || $vw_tourism_pro_headermenu_icon_font_size != false ){
		 		 $custom_css .='#banner svg path ,#banner #Ellipse_34-2{';
		 			 if($vw_tourism_pro_banner_line_color != false){
		 				 $custom_css .='stroke: '.esc_html($vw_tourism_pro_banner_line_color).'!important;';
		 			 }
					 	 $custom_css .='}';
		 		 $custom_css .='#banner #location,#banner svg g circle  {';
		 			 if($vw_tourism_pro_banner_line_color != false){
		 				 $custom_css .='fill: '.esc_html($vw_tourism_pro_banner_line_color).'!important;';
		 			 }
		 		 $custom_css .='}';
		 	 }
	/*------------------------------ Activity section ----------------------------------------*/
	$vw_tourism_pro_activity_sub_heading_color = get_theme_mod('vw_tourism_pro_activity_sub_heading_color');
	$vw_tourism_pro_activity_sub_heading_font_family = get_theme_mod('vw_tourism_pro_activity_sub_heading_font_family');
	$vw_tourism_pro_activity_sub_heading_font_size = get_theme_mod('vw_tourism_pro_activity_sub_heading_font_size');
		 if($vw_tourism_pro_activity_sub_heading_color != false || $vw_tourism_pro_activity_sub_heading_font_family != false || $vw_tourism_pro_activity_sub_heading_font_size != false ){
			 $custom_css .='#activity .sec-sub-heading{';
				 if($vw_tourism_pro_activity_sub_heading_color != false){
					 $custom_css .='color: '.esc_html($vw_tourism_pro_activity_sub_heading_color).'!important;';
				 }
				 if($vw_tourism_pro_activity_sub_heading_font_family != false){
					 $custom_css .='font-family:'.esc_html($vw_tourism_pro_activity_sub_heading_font_family).'!important;';
				 }
				 if($vw_tourism_pro_activity_sub_heading_font_size != false){
					 $custom_css .='font-size:'.esc_html($vw_tourism_pro_activity_sub_heading_font_size).'px!important;';
				 }
			 $custom_css .='}';
		 }
	$vw_tourism_pro_activity_heading_color = get_theme_mod('vw_tourism_pro_activity_heading_color');
	$vw_tourism_pro_activity_heading_font_family = get_theme_mod('vw_tourism_pro_activity_heading_font_family');
	$vw_tourism_pro_activity_heading_font_size = get_theme_mod('vw_tourism_pro_activity_heading_font_size');
		 if($vw_tourism_pro_activity_heading_color != false || $vw_tourism_pro_activity_heading_font_family != false || $vw_tourism_pro_activity_heading_font_size != false ){
			 $custom_css .='#activity .sec-heading{';
				 if($vw_tourism_pro_activity_heading_color != false){
					 $custom_css .='color: '.esc_html($vw_tourism_pro_activity_heading_color).'!important;';
				 }
				 if($vw_tourism_pro_activity_heading_font_family != false){
					 $custom_css .='font-family:'.esc_html($vw_tourism_pro_activity_heading_font_family).'!important;';
				 }
				 if($vw_tourism_pro_activity_heading_font_size != false){
					 $custom_css .='font-size:'.esc_html($vw_tourism_pro_activity_heading_font_size).'px!important;';
				 }
			 $custom_css .='}';
		 }
	$vw_tourism_pro_activity_name_color = get_theme_mod('vw_tourism_pro_activity_name_color');
	$vw_tourism_pro_activity_name_font_family = get_theme_mod('vw_tourism_pro_activity_name_font_family');
	$vw_tourism_pro_activity_name_font_size = get_theme_mod('vw_tourism_pro_activity_name_font_size');
		 if($vw_tourism_pro_activity_name_color != false || $vw_tourism_pro_activity_name_font_family != false || $vw_tourism_pro_activity_name_font_size != false ){
			 $custom_css .='#activity .activity-title{';
				 if($vw_tourism_pro_activity_name_color != false){
					 $custom_css .='color: '.esc_html($vw_tourism_pro_activity_name_color).'!important;';
				 }
				 if($vw_tourism_pro_activity_name_font_family != false){
					 $custom_css .='font-family:'.esc_html($vw_tourism_pro_activity_name_font_family).'!important;';
				 }
				 if($vw_tourism_pro_activity_name_font_size != false){
					 $custom_css .='font-size:'.esc_html($vw_tourism_pro_activity_name_font_size).'px!important;';
				 }
			 $custom_css .='}';
		 }
	$vw_tourism_pro_activity_para_color = get_theme_mod('vw_tourism_pro_activity_para_color');
	$vw_tourism_pro_activity_para_font_family = get_theme_mod('vw_tourism_pro_activity_para_font_family');
	$vw_tourism_pro_activity_para_font_size = get_theme_mod('vw_tourism_pro_activity_para_font_size');
		 if($vw_tourism_pro_activity_para_color != false || $vw_tourism_pro_activity_para_font_family != false || $vw_tourism_pro_activity_para_font_size != false ){
			 $custom_css .='#activity .activity-para{';
				 if($vw_tourism_pro_activity_para_color != false){
					 $custom_css .='color: '.esc_html($vw_tourism_pro_activity_para_color).'!important;';
				 }
				 if($vw_tourism_pro_activity_para_font_family != false){
					 $custom_css .='font-family:'.esc_html($vw_tourism_pro_activity_para_font_family).'!important;';
				 }
				 if($vw_tourism_pro_activity_para_font_size != false){
					 $custom_css .='font-size:'.esc_html($vw_tourism_pro_activity_para_font_size).'px!important;';
				 }
			 $custom_css .='}';
		 }
	$vw_tourism_pro_activity_number_color = get_theme_mod('vw_tourism_pro_activity_number_color');
	$vw_tourism_pro_activity_number_font_family = get_theme_mod('vw_tourism_pro_activity_number_font_family');
	$vw_tourism_pro_activity_number_font_size = get_theme_mod('vw_tourism_pro_activity_number_font_size');
	$vw_tourism_pro_activity_number_opacity_color = get_theme_mod('vw_tourism_pro_activity_number_opacity_color','');
		 if($vw_tourism_pro_activity_number_color != false || $vw_tourism_pro_activity_number_font_family != false || $vw_tourism_pro_activity_number_font_size != false || $vw_tourism_pro_activity_number_opacity_color != false  ){
			 $custom_css .='#activity .activity-no{';
				 if($vw_tourism_pro_activity_number_color != false){
					 $custom_css .='color: '.esc_html($vw_tourism_pro_activity_number_color).'!important;';
				 }
				 if($vw_tourism_pro_activity_number_font_family != false){
					 $custom_css .='font-family:'.esc_html($vw_tourism_pro_activity_number_font_family).'!important;';
				 }
				 if($vw_tourism_pro_activity_number_font_size != false){
					 $custom_css .='font-size:'.esc_html($vw_tourism_pro_activity_number_font_size).'px!important;';
				 }
				 if($vw_tourism_pro_activity_number_opacity_color != false){
				 $custom_css .='opacity: '.esc_html($vw_tourism_pro_activity_number_opacity_color).';';
				 }
			 $custom_css .='}';
		 }
/*------------------------------  About Section ----------------------------------------*/

$vw_tourism_pro_about_sub_heading_color = get_theme_mod('vw_tourism_pro_about_sub_heading_color');
$vw_tourism_pro_about_sub_heading_font_family = get_theme_mod('vw_tourism_pro_about_sub_heading_font_family');
$vw_tourism_pro_about_sub_heading_font_size = get_theme_mod('vw_tourism_pro_about_sub_heading_font_size');
	 if($vw_tourism_pro_about_sub_heading_color != false || $vw_tourism_pro_about_sub_heading_font_family != false || $vw_tourism_pro_about_sub_heading_font_size != false ){
		 $custom_css .='#about .sec-sub-heading{';
			 if($vw_tourism_pro_about_sub_heading_color != false){
				 $custom_css .='color: '.esc_html($vw_tourism_pro_about_sub_heading_color).'!important;';
			 }
			 if($vw_tourism_pro_about_sub_heading_font_family != false){
				 $custom_css .='font-family:'.esc_html($vw_tourism_pro_about_sub_heading_font_family).'!important;';
			 }
			 if($vw_tourism_pro_about_sub_heading_font_size != false){
				 $custom_css .='font-size:'.esc_html($vw_tourism_pro_about_sub_heading_font_size).'px!important;';
			 }
		 $custom_css .='}';
	 }
$vw_tourism_pro_about_heading_color = get_theme_mod('vw_tourism_pro_about_heading_color');
$vw_tourism_pro_about_heading_font_family = get_theme_mod('vw_tourism_pro_about_heading_font_family');
$vw_tourism_pro_about_heading_font_size = get_theme_mod('vw_tourism_pro_about_heading_font_size');
	 if($vw_tourism_pro_about_heading_color != false || $vw_tourism_pro_about_heading_font_family != false || $vw_tourism_pro_about_heading_font_size != false ){
		 $custom_css .='#about .sec-heading{';
			 if($vw_tourism_pro_about_heading_color != false){
				 $custom_css .='color: '.esc_html($vw_tourism_pro_about_heading_color).'!important;';
			 }
			 if($vw_tourism_pro_about_heading_font_family != false){
				 $custom_css .='font-family:'.esc_html($vw_tourism_pro_about_heading_font_family).'!important;';
			 }
			 if($vw_tourism_pro_about_heading_font_size != false){
				 $custom_css .='font-size:'.esc_html($vw_tourism_pro_about_heading_font_size).'px!important;';
			 }
		 $custom_css .='}';
	 }
$vw_tourism_pro_about_paragraph_color = get_theme_mod('vw_tourism_pro_about_paragraph_color');
$vw_tourism_pro_about_paragraph_font_family = get_theme_mod('vw_tourism_pro_about_paragraph_font_family');
$vw_tourism_pro_about_paragraph_font_size = get_theme_mod('vw_tourism_pro_about_paragraph_font_size');
	 if($vw_tourism_pro_about_paragraph_color != false || $vw_tourism_pro_about_paragraph_font_family != false || $vw_tourism_pro_about_paragraph_font_size != false ){
		 $custom_css .='#about .abtpara{';
			 if($vw_tourism_pro_about_paragraph_color != false){
				 $custom_css .='color: '.esc_html($vw_tourism_pro_about_paragraph_color).'!important;';
			 }
			 if($vw_tourism_pro_about_paragraph_font_family != false){
				 $custom_css .='font-family:'.esc_html($vw_tourism_pro_about_paragraph_font_family).'!important;';
			 }
			 if($vw_tourism_pro_about_paragraph_font_size != false){
				 $custom_css .='font-size:'.esc_html($vw_tourism_pro_about_paragraph_font_size).'px!important;';
			 }
		 $custom_css .='}';
	 }
	$vw_tourism_pro_about_points_title_color = get_theme_mod('vw_tourism_pro_about_points_title_color');
	$vw_tourism_pro_about_points_title_font_family = get_theme_mod('vw_tourism_pro_about_points_title_font_family');
	$vw_tourism_pro_about_points_title_font_size = get_theme_mod('vw_tourism_pro_about_points_title_font_size');
	 if($vw_tourism_pro_about_points_title_color != false || $vw_tourism_pro_about_points_title_font_family != false || $vw_tourism_pro_about_points_title_font_size != false ){
		 $custom_css .='#about .abt-points{';
			 if($vw_tourism_pro_about_points_title_color != false){
				 $custom_css .='color: '.esc_html($vw_tourism_pro_about_points_title_color).'!important;';
			 }
			 if($vw_tourism_pro_about_points_title_font_family != false){
				 $custom_css .='font-family:'.esc_html($vw_tourism_pro_about_points_title_font_family).'!important;';
			 }
			 if($vw_tourism_pro_about_points_title_font_size != false){
				 $custom_css .='font-size:'.esc_html($vw_tourism_pro_about_points_title_font_size).'px!important;';
			 }
		 $custom_css .='}';
	 }

	$vw_tourism_pro_about_points_icon_color = get_theme_mod('vw_tourism_pro_about_points_icon_color');
	$vw_tourism_pro_about_points_icon_bg_color = get_theme_mod('vw_tourism_pro_about_points_icon_bg_color');
	 if($vw_tourism_pro_about_points_icon_color != false || $vw_tourism_pro_about_points_icon_bg_color != false  ){
		 $custom_css .='#about .abt-icon{';
			 if($vw_tourism_pro_about_points_icon_color != false){
				 $custom_css .='color: '.esc_html($vw_tourism_pro_about_points_icon_color).'!important;';
			 }
			 if($vw_tourism_pro_about_points_icon_bg_color != false){
				 $custom_css .='background:'.esc_html($vw_tourism_pro_about_points_icon_bg_color).'!important;';
			 }
		 $custom_css .='}';
	 }
	 $vw_tourism_pro_about_border_bottom_color = get_theme_mod('vw_tourism_pro_about_border_bottom_color');
		if($vw_tourism_pro_about_border_bottom_color != false){
			$custom_css .='#about hr:not([size]){';
				if($vw_tourism_pro_about_border_bottom_color != false){
					$custom_css .='background-color: '.esc_html($vw_tourism_pro_about_border_bottom_color).'!important;';
				}
			$custom_css .='}';
		}


 	$vw_tourism_pro_about_view_more_btn_color = get_theme_mod('vw_tourism_pro_about_view_more_btn_color');
 	$vw_tourism_pro_about_view_more_btn_font_family = get_theme_mod('vw_tourism_pro_about_view_more_btn_font_family');
 	$vw_tourism_pro_about_view_more_btn_font_size = get_theme_mod('vw_tourism_pro_about_view_more_btn_font_size');
 	$vw_tourism_pro_about_view_more_btn_bg_color = get_theme_mod('vw_tourism_pro_about_view_more_btn_bg_color');
 	 if($vw_tourism_pro_about_view_more_btn_color != false || $vw_tourism_pro_about_view_more_btn_font_family != false || $vw_tourism_pro_about_view_more_btn_font_size != false || $vw_tourism_pro_about_view_more_btn_bg_color != false ){
 		 $custom_css .='#about .theme-btn-main{';
 			 if($vw_tourism_pro_about_view_more_btn_color != false){
 				 $custom_css .='color: '.esc_html($vw_tourism_pro_about_view_more_btn_color).'!important;';
 			 }
 			 if($vw_tourism_pro_about_view_more_btn_font_family != false){
 				 $custom_css .='font-family:'.esc_html($vw_tourism_pro_about_view_more_btn_font_family).'!important;';
 			 }
 			 if($vw_tourism_pro_about_view_more_btn_font_size != false){
 				 $custom_css .='font-size:'.esc_html($vw_tourism_pro_about_view_more_btn_font_size).'px!important;';
 			 }
			 if($vw_tourism_pro_about_view_more_btn_bg_color != false){
					 $custom_css .='background: '.esc_html($vw_tourism_pro_about_view_more_btn_bg_color).'!important;';
				 }
 		 $custom_css .='}';
 	 }
	 $vw_tourism_pro_about_view_more_btn_arrow_color = get_theme_mod('vw_tourism_pro_about_view_more_btn_arrow_color');
 	if($vw_tourism_pro_about_view_more_btn_arrow_color != false){
 		$custom_css .='.theme-btn-line-right{';
 		 if($vw_tourism_pro_about_view_more_btn_arrow_color != false){
 			 $custom_css .='background: '.esc_html($vw_tourism_pro_about_view_more_btn_arrow_color).'!important;';
 		 }
 		 $custom_css .='}';
 		 $custom_css .='.theme-btn-main i{';
 		 if($vw_tourism_pro_about_view_more_btn_arrow_color != false){
 			 $custom_css .='color: '.esc_html($vw_tourism_pro_about_view_more_btn_arrow_color).'!important;';
 		 }
 		$custom_css .='}';
 	}


	 $vw_tourism_pro_about_view_more_btn_hover_bg_color = get_theme_mod('vw_tourism_pro_about_view_more_btn_hover_bg_color');
		if($vw_tourism_pro_about_view_more_btn_hover_bg_color != false){
			$custom_css .='#about .theme-btn-main:hover{';
				if($vw_tourism_pro_about_view_more_btn_hover_bg_color != false){
					$custom_css .='background: '.esc_html($vw_tourism_pro_about_view_more_btn_hover_bg_color).'!important;';
				}
			$custom_css .='}';
		}

		$vw_tourism_pro_about_ceo_heading_color = get_theme_mod('vw_tourism_pro_about_ceo_heading_color');
		$vw_tourism_pro_about_ceo_heading_font_family = get_theme_mod('vw_tourism_pro_about_ceo_heading_font_family');
		$vw_tourism_pro_about_ceo_heading_font_size = get_theme_mod('vw_tourism_pro_about_ceo_heading_font_size');
		 if($vw_tourism_pro_about_ceo_heading_color != false || $vw_tourism_pro_about_ceo_heading_font_family != false || $vw_tourism_pro_about_ceo_heading_font_size != false ){
			 $custom_css .='#about .ceo-title{';
				 if($vw_tourism_pro_about_ceo_heading_color != false){
					 $custom_css .='color: '.esc_html($vw_tourism_pro_about_ceo_heading_color).'!important;';
				 }
				 if($vw_tourism_pro_about_ceo_heading_font_family != false){
					 $custom_css .='font-family:'.esc_html($vw_tourism_pro_about_ceo_heading_font_family).'!important;';
				 }
				 if($vw_tourism_pro_about_ceo_heading_font_size != false){
					 $custom_css .='font-size:'.esc_html($vw_tourism_pro_about_ceo_heading_font_size).'px!important;';
				 }
			 $custom_css .='}';
		 }
		$vw_tourism_pro_about_ceo_text_color = get_theme_mod('vw_tourism_pro_about_ceo_text_color');
		$vw_tourism_pro_about_ceo_text_font_family = get_theme_mod('vw_tourism_pro_about_ceo_text_font_family');
		$vw_tourism_pro_about_ceo_text_font_size = get_theme_mod('vw_tourism_pro_about_ceo_text_font_size');
		 if($vw_tourism_pro_about_ceo_text_color != false || $vw_tourism_pro_about_ceo_text_font_family != false || $vw_tourism_pro_about_ceo_text_font_size != false ){
			 $custom_css .='#about .ceo-para{';
				 if($vw_tourism_pro_about_ceo_text_color != false){
					 $custom_css .='color: '.esc_html($vw_tourism_pro_about_ceo_text_color).'!important;';
				 }
				 if($vw_tourism_pro_about_ceo_text_font_family != false){
					 $custom_css .='font-family:'.esc_html($vw_tourism_pro_about_ceo_text_font_family).'!important;';
				 }
				 if($vw_tourism_pro_about_ceo_text_font_size != false){
					 $custom_css .='font-size:'.esc_html($vw_tourism_pro_about_ceo_text_font_size).'px!important;';
				 }
			 $custom_css .='}';
		 }


		 $vw_tourism_pro_about_right_box_bg_color = get_theme_mod('vw_tourism_pro_about_right_box_bg_color');
			if($vw_tourism_pro_about_right_box_bg_color != false){
				$custom_css .='#about .about-right-content{';
					if($vw_tourism_pro_about_right_box_bg_color != false){
						$custom_css .='background: '.esc_html($vw_tourism_pro_about_right_box_bg_color).'!important;';
					}
				$custom_css .='}';
			}
			$vw_tourism_pro_about_right_content_counter_color = get_theme_mod('vw_tourism_pro_about_right_content_counter_color');
			$vw_tourism_pro_about_right_content_counter_font_family = get_theme_mod('vw_tourism_pro_about_right_content_counter_font_family');
			$vw_tourism_pro_about_right_content_counter_font_size = get_theme_mod('vw_tourism_pro_about_right_content_counter_font_size');
			 if($vw_tourism_pro_about_right_content_counter_color != false || $vw_tourism_pro_about_right_content_counter_font_family != false || $vw_tourism_pro_about_right_content_counter_font_size != false ){
				 $custom_css .='#about .about-right-content h4{';
					 if($vw_tourism_pro_about_right_content_counter_color != false){
						 $custom_css .='color: '.esc_html($vw_tourism_pro_about_right_content_counter_color).'!important;';
					 }
					 if($vw_tourism_pro_about_right_content_counter_font_family != false){
						 $custom_css .='font-family:'.esc_html($vw_tourism_pro_about_right_content_counter_font_family).'!important;';
					 }
					 if($vw_tourism_pro_about_right_content_counter_font_size != false){
						 $custom_css .='font-size:'.esc_html($vw_tourism_pro_about_right_content_counter_font_size).'px!important;';
					 }
				 $custom_css .='}';
			 }
			$vw_tourism_pro_about_right_content_heading_color = get_theme_mod('vw_tourism_pro_about_right_content_heading_color');
			$vw_tourism_pro_about_right_content_heading_font_family = get_theme_mod('vw_tourism_pro_about_right_content_heading_font_family');
			$vw_tourism_pro_about_right_content_heading_font_size = get_theme_mod('vw_tourism_pro_about_right_content_heading_font_size');
			 if($vw_tourism_pro_about_right_content_heading_color != false || $vw_tourism_pro_about_right_content_heading_font_family != false || $vw_tourism_pro_about_right_content_heading_font_size != false ){
				 $custom_css .='#about .about-right-content p{';
					 if($vw_tourism_pro_about_right_content_heading_color != false){
						 $custom_css .='color: '.esc_html($vw_tourism_pro_about_right_content_heading_color).'!important;';
					 }
					 if($vw_tourism_pro_about_right_content_heading_font_family != false){
						 $custom_css .='font-family:'.esc_html($vw_tourism_pro_about_right_content_heading_font_family).'!important;';
					 }
					 if($vw_tourism_pro_about_right_content_heading_font_size != false){
						 $custom_css .='font-size:'.esc_html($vw_tourism_pro_about_right_content_heading_font_size).'px!important;';
					 }
				 $custom_css .='}';
			 }
	/*------------------------------ About Section ----------------------------------------*/
	$vw_tourism_pro_popular_destination_sub_heading_color = get_theme_mod('vw_tourism_pro_popular_destination_sub_heading_color');
	$vw_tourism_pro_popular_destination_sub_heading_font_family = get_theme_mod('vw_tourism_pro_popular_destination_sub_heading_font_family');
	$vw_tourism_pro_popular_destination_sub_heading_font_size = get_theme_mod('vw_tourism_pro_popular_destination_sub_heading_font_size');
		 if($vw_tourism_pro_popular_destination_sub_heading_color != false || $vw_tourism_pro_popular_destination_sub_heading_font_family != false || $vw_tourism_pro_popular_destination_sub_heading_font_size != false ){
			 $custom_css .='#popular-destination .sec-sub-heading{';
				 if($vw_tourism_pro_popular_destination_sub_heading_color != false){
					 $custom_css .='color: '.esc_html($vw_tourism_pro_popular_destination_sub_heading_color).'!important;';
				 }
				 if($vw_tourism_pro_popular_destination_sub_heading_font_family != false){
					 $custom_css .='font-family:'.esc_html($vw_tourism_pro_popular_destination_sub_heading_font_family).'!important;';
				 }
				 if($vw_tourism_pro_popular_destination_sub_heading_font_size != false){
					 $custom_css .='font-size:'.esc_html($vw_tourism_pro_popular_destination_sub_heading_font_size).'px!important;';
				 }
			 $custom_css .='}';
		 }
	$vw_tourism_pro_popular_destination_heading_color = get_theme_mod('vw_tourism_pro_popular_destination_heading_color');
	$vw_tourism_pro_popular_destination_heading_font_family = get_theme_mod('vw_tourism_pro_popular_destination_heading_font_family');
	$vw_tourism_pro_popular_destination_heading_font_size = get_theme_mod('vw_tourism_pro_popular_destination_heading_font_size');
		 if($vw_tourism_pro_popular_destination_heading_color != false || $vw_tourism_pro_popular_destination_heading_font_family != false || $vw_tourism_pro_popular_destination_heading_font_size != false ){
			 $custom_css .='#popular-destination .sec-heading{';
				 if($vw_tourism_pro_popular_destination_heading_color != false){
					 $custom_css .='color: '.esc_html($vw_tourism_pro_popular_destination_heading_color).'!important;';
				 }
				 if($vw_tourism_pro_popular_destination_heading_font_family != false){
					 $custom_css .='font-family:'.esc_html($vw_tourism_pro_popular_destination_heading_font_family).'!important;';
				 }
				 if($vw_tourism_pro_popular_destination_heading_font_size != false){
					 $custom_css .='font-size:'.esc_html($vw_tourism_pro_popular_destination_heading_font_size).'px!important;';
				 }
			 $custom_css .='}';
		 }
	$vw_tourism_pro_popular_destination_name_color = get_theme_mod('vw_tourism_pro_popular_destination_name_color');
	$vw_tourism_pro_popular_destination_name_font_family = get_theme_mod('vw_tourism_pro_popular_destination_name_font_family');
	$vw_tourism_pro_popular_destination_name_font_size = get_theme_mod('vw_tourism_pro_popular_destination_name_font_size');
		 if($vw_tourism_pro_popular_destination_name_color != false || $vw_tourism_pro_popular_destination_name_font_family != false || $vw_tourism_pro_popular_destination_name_font_size != false ){
			 $custom_css .='.destination-content a{';
				 if($vw_tourism_pro_popular_destination_name_color != false){
					 $custom_css .='color: '.esc_html($vw_tourism_pro_popular_destination_name_color).'!important;';
				 }
				 if($vw_tourism_pro_popular_destination_name_font_family != false){
					 $custom_css .='font-family:'.esc_html($vw_tourism_pro_popular_destination_name_font_family).'!important;';
				 }
				 if($vw_tourism_pro_popular_destination_name_font_size != false){
					 $custom_css .='font-size:'.esc_html($vw_tourism_pro_popular_destination_name_font_size).'px!important;';
				 }
			 $custom_css .='}';
		 }

	$vw_tourism_pro_popular_destination_type_color = get_theme_mod('vw_tourism_pro_popular_destination_type_color');
	$vw_tourism_pro_popular_destination_type_font_family = get_theme_mod('vw_tourism_pro_popular_destination_type_font_family');
	$vw_tourism_pro_popular_destination_type_font_size = get_theme_mod('vw_tourism_pro_popular_destination_type_font_size');
		 if($vw_tourism_pro_popular_destination_type_color != false || $vw_tourism_pro_popular_destination_type_font_family != false || $vw_tourism_pro_popular_destination_type_font_size != false ){
			 $custom_css .='.destination-content .desti-type{';
				 if($vw_tourism_pro_popular_destination_type_color != false){
					 $custom_css .='color: '.esc_html($vw_tourism_pro_popular_destination_type_color).'!important;';
				 }
				 if($vw_tourism_pro_popular_destination_type_font_family != false){
					 $custom_css .='font-family:'.esc_html($vw_tourism_pro_popular_destination_type_font_family).'!important;';
				 }
				 if($vw_tourism_pro_popular_destination_type_font_size != false){
					 $custom_css .='font-size:'.esc_html($vw_tourism_pro_popular_destination_type_font_size).'px!important;';
				 }
			 $custom_css .='}';
		 }

   $vw_tourism_pro_popular_destination_border_gradient_color = get_theme_mod('vw_tourism_pro_popular_destination_border_gradient_color');
   if ($vw_tourism_pro_popular_destination_border_gradient_color != false){
   	$custom_css .='.line-after{';
 		$custom_css .=  'background:transparent linear-gradient(90deg,'. esc_html($vw_tourism_pro_popular_destination_border_gradient_color .' 0%,') .'#FFFFFF00 100%);';

   	$custom_css .='}';
   }
   $vw_tourism_pro_popular_destination_border_gradient_color = get_theme_mod('vw_tourism_pro_popular_destination_border_gradient_color');
   if ($vw_tourism_pro_popular_destination_border_gradient_color != false){
   	$custom_css .='.line-before{';
 		$custom_css .=  'background:transparent linear-gradient(270deg,'. esc_html($vw_tourism_pro_popular_destination_border_gradient_color .' 0%,') .'#FFFFFF00 100%);';

   	$custom_css .='}';
   }

	 $vw_tourism_pro_popular_destination_arrow_color = get_theme_mod('vw_tourism_pro_popular_destination_arrow_color');
	 $vw_tourism_pro_popular_destination_arrow_bg_color = get_theme_mod('vw_tourism_pro_popular_destination_arrow_bg_color');

		if($vw_tourism_pro_popular_destination_arrow_color != false || $vw_tourism_pro_popular_destination_arrow_bg_color != false){
			$custom_css .='.swiper-button-next, .swiper-button-prev{';
				if($vw_tourism_pro_popular_destination_arrow_color != false){
					$custom_css .='color: '.esc_html($vw_tourism_pro_popular_destination_arrow_color).'!important;';
				}
				if($vw_tourism_pro_popular_destination_arrow_bg_color != false){
					$custom_css .='background: '.esc_html($vw_tourism_pro_popular_destination_arrow_bg_color).'!important;';
				}
			$custom_css .='}';
		}
	/*------------------------------ Explore Section----------------------------------------*/
	$vw_tourism_pro_explore_sub_heading_color = get_theme_mod('vw_tourism_pro_explore_sub_heading_color');
	$vw_tourism_pro_explore_sub_heading_font_family = get_theme_mod('vw_tourism_pro_explore_sub_heading_font_family');
	$vw_tourism_pro_explore_sub_heading_font_size = get_theme_mod('vw_tourism_pro_explore_sub_heading_font_size');
	 if($vw_tourism_pro_explore_sub_heading_color != false || $vw_tourism_pro_explore_sub_heading_font_family != false || $vw_tourism_pro_explore_sub_heading_font_size != false ){
		 $custom_css .='#explore .sec-sub-heading{';
			 if($vw_tourism_pro_explore_sub_heading_color != false){
				 $custom_css .='color: '.esc_html($vw_tourism_pro_explore_sub_heading_color).'!important;';
			 }
			 if($vw_tourism_pro_explore_sub_heading_font_family != false){
				 $custom_css .='font-family:'.esc_html($vw_tourism_pro_explore_sub_heading_font_family).'!important;';
			 }
			 if($vw_tourism_pro_explore_sub_heading_font_size != false){
				 $custom_css .='font-size:'.esc_html($vw_tourism_pro_explore_sub_heading_font_size).'px!important;';
			 }
		 $custom_css .='}';
	 }
	$vw_tourism_pro_explore_heading_color = get_theme_mod('vw_tourism_pro_explore_heading_color');
	$vw_tourism_pro_explore_heading_font_family = get_theme_mod('vw_tourism_pro_explore_heading_font_family');
	$vw_tourism_pro_explore_heading_font_size = get_theme_mod('vw_tourism_pro_explore_heading_font_size');
	 if($vw_tourism_pro_explore_heading_color != false || $vw_tourism_pro_explore_heading_font_family != false || $vw_tourism_pro_explore_heading_font_size != false ){
		 $custom_css .='#explore  .sec-heading{';
			 if($vw_tourism_pro_explore_heading_color != false){
				 $custom_css .='color: '.esc_html($vw_tourism_pro_explore_heading_color).'!important;';
			 }
			 if($vw_tourism_pro_explore_heading_font_family != false){
				 $custom_css .='font-family:'.esc_html($vw_tourism_pro_explore_heading_font_family).'!important;';
			 }
			 if($vw_tourism_pro_explore_heading_font_size != false){
				 $custom_css .='font-size:'.esc_html($vw_tourism_pro_explore_heading_font_size).'px!important;';
			 }
		 $custom_css .='}';
	 }
	$vw_tourism_pro_explore_heading_color = get_theme_mod('vw_tourism_pro_explore_heading_color');
	$vw_tourism_pro_explore_heading_font_family = get_theme_mod('vw_tourism_pro_explore_heading_font_family');
	$vw_tourism_pro_explore_heading_font_size = get_theme_mod('vw_tourism_pro_explore_heading_font_size');
	 if($vw_tourism_pro_explore_heading_color != false || $vw_tourism_pro_explore_heading_font_family != false || $vw_tourism_pro_explore_heading_font_size != false ){
		 $custom_css .='#explore  .sec-heading{';
			 if($vw_tourism_pro_explore_heading_color != false){
				 $custom_css .='color: '.esc_html($vw_tourism_pro_explore_heading_color).'!important;';
			 }
			 if($vw_tourism_pro_explore_heading_font_family != false){
				 $custom_css .='font-family:'.esc_html($vw_tourism_pro_explore_heading_font_family).'!important;';
			 }
			 if($vw_tourism_pro_explore_heading_font_size != false){
				 $custom_css .='font-size:'.esc_html($vw_tourism_pro_explore_heading_font_size).'px!important;';
			 }
		 $custom_css .='}';
	 }
	$vw_tourism_pro_explore_paragraph_color = get_theme_mod('vw_tourism_pro_explore_paragraph_color');
	$vw_tourism_pro_explore_paragraph_font_family = get_theme_mod('vw_tourism_pro_explore_paragraph_font_family');
	$vw_tourism_pro_explore_paragraph_font_size = get_theme_mod('vw_tourism_pro_explore_paragraph_font_size');
	 if($vw_tourism_pro_explore_paragraph_color != false || $vw_tourism_pro_explore_paragraph_font_family != false || $vw_tourism_pro_explore_paragraph_font_size != false ){
		 $custom_css .='#explore  .exp-para{';
			 if($vw_tourism_pro_explore_paragraph_color != false){
				 $custom_css .='color: '.esc_html($vw_tourism_pro_explore_paragraph_color).'!important;';
			 }
			 if($vw_tourism_pro_explore_paragraph_font_family != false){
				 $custom_css .='font-family:'.esc_html($vw_tourism_pro_explore_paragraph_font_family).'!important;';
			 }
			 if($vw_tourism_pro_explore_paragraph_font_size != false){
				 $custom_css .='font-size:'.esc_html($vw_tourism_pro_explore_paragraph_font_size).'px!important;';
			 }
		 $custom_css .='}';
	 }
	$vw_tourism_pro_explore_inner_heading_color = get_theme_mod('vw_tourism_pro_explore_inner_heading_color');
	$vw_tourism_pro_explore_inner_heading_font_family = get_theme_mod('vw_tourism_pro_explore_inner_heading_font_family');
	$vw_tourism_pro_explore_inner_heading_font_size = get_theme_mod('vw_tourism_pro_explore_inner_heading_font_size');
	 if($vw_tourism_pro_explore_inner_heading_color != false || $vw_tourism_pro_explore_inner_heading_font_family != false || $vw_tourism_pro_explore_inner_heading_font_size != false ){
		 $custom_css .='.explore-select-title{';
			 if($vw_tourism_pro_explore_inner_heading_color != false){
				 $custom_css .='color: '.esc_html($vw_tourism_pro_explore_inner_heading_color).'!important;';
			 }
			 if($vw_tourism_pro_explore_inner_heading_font_family != false){
				 $custom_css .='font-family:'.esc_html($vw_tourism_pro_explore_inner_heading_font_family).'!important;';
			 }
			 if($vw_tourism_pro_explore_inner_heading_font_size != false){
				 $custom_css .='font-size:'.esc_html($vw_tourism_pro_explore_inner_heading_font_size).'px!important;';
			 }
		 $custom_css .='}';
	 }
	$vw_tourism_pro_explore_inner_heading_dropdown_text_color = get_theme_mod('vw_tourism_pro_explore_inner_heading_dropdown_text_color');
	$vw_tourism_pro_explore_inner_heading_dropdown_text_font_family = get_theme_mod('vw_tourism_pro_explore_inner_heading_dropdown_text_font_family');
	$vw_tourism_pro_explore_inner_heading_dropdown_text_font_size = get_theme_mod('vw_tourism_pro_explore_inner_heading_dropdown_text_font_size');
	 if($vw_tourism_pro_explore_inner_heading_dropdown_text_color != false || $vw_tourism_pro_explore_inner_heading_dropdown_text_font_family != false || $vw_tourism_pro_explore_inner_heading_dropdown_text_font_size != false ){
		 $custom_css .='.custom-option{';
			 if($vw_tourism_pro_explore_inner_heading_dropdown_text_color != false){
				 $custom_css .='color: '.esc_html($vw_tourism_pro_explore_inner_heading_dropdown_text_color).';';
			 }
			 if($vw_tourism_pro_explore_inner_heading_dropdown_text_font_family != false){
				 $custom_css .='font-family:'.esc_html($vw_tourism_pro_explore_inner_heading_dropdown_text_font_family).'!important;';
			 }
			 if($vw_tourism_pro_explore_inner_heading_dropdown_text_font_size != false){
				 $custom_css .='font-size:'.esc_html($vw_tourism_pro_explore_inner_heading_dropdown_text_font_size).'px!important;';
			 }
		 $custom_css .='}';
	 }

	 $vw_tourism_pro_explore_inner_heading_dropdown_text_hover_color = get_theme_mod('vw_tourism_pro_explore_inner_heading_dropdown_text_hover_color');
	 if($vw_tourism_pro_explore_inner_heading_dropdown_text_hover_color != false){
		 $custom_css .='.custom-option:hover{';
			 if($vw_tourism_pro_explore_inner_heading_dropdown_text_hover_color != false){
				 $custom_css .='color: '.esc_html($vw_tourism_pro_explore_inner_heading_dropdown_text_hover_color).'';
			 }
		 $custom_css .='}';
	 }
	 $vw_tourism_pro_explore_inner_heading_arrow_color = get_theme_mod('vw_tourism_pro_explore_inner_heading_arrow_color');
		if($vw_tourism_pro_explore_inner_heading_arrow_color != false){
			$custom_css .='.explore-select-title::after{';
				if($vw_tourism_pro_explore_inner_heading_arrow_color != false){
					$custom_css .='color: '.esc_html($vw_tourism_pro_explore_inner_heading_arrow_color).'!important;';
				}
			$custom_css .='}';
		}
	$vw_tourism_pro_explore_inner_paragraph_color = get_theme_mod('vw_tourism_pro_explore_inner_paragraph_color');
	$vw_tourism_pro_explore_inner_paragraph_font_family = get_theme_mod('vw_tourism_pro_explore_inner_paragraph_font_family');
	$vw_tourism_pro_explore_inner_paragraph_font_size = get_theme_mod('vw_tourism_pro_explore_inner_paragraph_font_size');
	 if($vw_tourism_pro_explore_inner_paragraph_color != false || $vw_tourism_pro_explore_inner_paragraph_font_family != false || $vw_tourism_pro_explore_inner_paragraph_font_size != false ){
		 $custom_css .='#explore  .explore-main-wrapper p{';
			 if($vw_tourism_pro_explore_inner_paragraph_color != false){
				 $custom_css .='color: '.esc_html($vw_tourism_pro_explore_inner_paragraph_color).'!important;';
			 }
			 if($vw_tourism_pro_explore_inner_paragraph_font_family != false){
				 $custom_css .='font-family:'.esc_html($vw_tourism_pro_explore_inner_paragraph_font_family).'!important;';
			 }
			 if($vw_tourism_pro_explore_inner_paragraph_font_size != false){
				 $custom_css .='font-size:'.esc_html($vw_tourism_pro_explore_inner_paragraph_font_size).'px!important;';
			 }
		 $custom_css .='}';
	 }
	$vw_tourism_pro_explore_feild_color = get_theme_mod('vw_tourism_pro_explore_feild_color');
	$vw_tourism_pro_explore_feild_font_family = get_theme_mod('vw_tourism_pro_explore_feild_font_family');
	$vw_tourism_pro_explore_feild_font_size = get_theme_mod('vw_tourism_pro_explore_feild_font_size');
	 if($vw_tourism_pro_explore_feild_color != false || $vw_tourism_pro_explore_feild_font_family != false || $vw_tourism_pro_explore_feild_font_size != false ){
		 $custom_css .='.explore-inner-title{';
			 if($vw_tourism_pro_explore_feild_color != false){
				 $custom_css .='color: '.esc_html($vw_tourism_pro_explore_feild_color).'!important;';
			 }
			 if($vw_tourism_pro_explore_feild_font_family != false){
				 $custom_css .='font-family:'.esc_html($vw_tourism_pro_explore_feild_font_family).'!important;';
			 }
			 if($vw_tourism_pro_explore_feild_font_size != false){
				 $custom_css .='font-size:'.esc_html($vw_tourism_pro_explore_feild_font_size).'px!important;';
			 }
		 $custom_css .='}';
	 }

	 $vw_tourism_pro_explore_feild_bg_color = get_theme_mod('vw_tourism_pro_explore_feild_bg_color');
		if( $vw_tourism_pro_explore_feild_bg_color != false){
			$custom_css .='#explore .explore-inner-box{';
				if($vw_tourism_pro_explore_feild_bg_color != false){
					$custom_css .='background: '.esc_html($vw_tourism_pro_explore_feild_bg_color).'!important;';
				}
			$custom_css .='}';
		}

	 $vw_tourism_pro_explore_inner_content_border_color = get_theme_mod('vw_tourism_pro_explore_inner_content_border_color');
		if( $vw_tourism_pro_explore_inner_content_border_color != false){
			$custom_css .='#explore .explore-inner{';
				if($vw_tourism_pro_explore_inner_content_border_color != false){
					$custom_css .='border-color: '.esc_html($vw_tourism_pro_explore_inner_content_border_color).'!important;';
				}
			$custom_css .='}';
		}

		$vw_tourism_pro_explore_arrow_color = get_theme_mod('vw_tourism_pro_explore_arrow_color');
		$vw_tourism_pro_explore_arrow_bg_color = get_theme_mod('vw_tourism_pro_explore_arrow_bg_color');

		 if($vw_tourism_pro_explore_arrow_color != false || $vw_tourism_pro_explore_arrow_bg_color != false){
			 $custom_css .='#explore .owl-next, #explore .owl-prev{';
				 if($vw_tourism_pro_explore_arrow_color != false){
					 $custom_css .='color: '.esc_html($vw_tourism_pro_explore_arrow_color).'!important;';
				 }
				 if($vw_tourism_pro_explore_arrow_bg_color != false){
					 $custom_css .='background: '.esc_html($vw_tourism_pro_explore_arrow_bg_color).'!important;';
				 }
			 $custom_css .='}';
		 }

		 	/*------------------------------Popular Cuisines----------------------------------------*/

			$vw_tourism_pro_cuisines_sub_heading_color = get_theme_mod('vw_tourism_pro_cuisines_sub_heading_color');
			$vw_tourism_pro_cuisines_sub_heading_font_family = get_theme_mod('vw_tourism_pro_cuisines_sub_heading_font_family');
			$vw_tourism_pro_cuisines_sub_heading_font_size = get_theme_mod('vw_tourism_pro_cuisines_sub_heading_font_size');
			 if($vw_tourism_pro_cuisines_sub_heading_color != false || $vw_tourism_pro_cuisines_sub_heading_font_family != false || $vw_tourism_pro_cuisines_sub_heading_font_size != false ){
				 $custom_css .='#popular-cuisines .sec-sub-heading{';
					 if($vw_tourism_pro_cuisines_sub_heading_color != false){
						 $custom_css .='color: '.esc_html($vw_tourism_pro_cuisines_sub_heading_color).'!important;';
					 }
					 if($vw_tourism_pro_cuisines_sub_heading_font_family != false){
						 $custom_css .='font-family:'.esc_html($vw_tourism_pro_cuisines_sub_heading_font_family).'!important;';
					 }
					 if($vw_tourism_pro_cuisines_sub_heading_font_size != false){
						 $custom_css .='font-size:'.esc_html($vw_tourism_pro_cuisines_sub_heading_font_size).'px!important;';
					 }
				 $custom_css .='}';
			 }
			$vw_tourism_pro_cuisines_heading_color = get_theme_mod('vw_tourism_pro_cuisines_heading_color');
			$vw_tourism_pro_cuisines_heading_font_family = get_theme_mod('vw_tourism_pro_cuisines_heading_font_family');
			$vw_tourism_pro_cuisines_heading_font_size = get_theme_mod('vw_tourism_pro_cuisines_heading_font_size');
			 if($vw_tourism_pro_cuisines_heading_color != false || $vw_tourism_pro_cuisines_heading_font_family != false || $vw_tourism_pro_cuisines_heading_font_size != false ){
				 $custom_css .='#popular-cuisines .sec-heading{';
					 if($vw_tourism_pro_cuisines_heading_color != false){
						 $custom_css .='color: '.esc_html($vw_tourism_pro_cuisines_heading_color).'!important;';
					 }
					 if($vw_tourism_pro_cuisines_heading_font_family != false){
						 $custom_css .='font-family:'.esc_html($vw_tourism_pro_cuisines_heading_font_family).'!important;';
					 }
					 if($vw_tourism_pro_cuisines_heading_font_size != false){
						 $custom_css .='font-size:'.esc_html($vw_tourism_pro_cuisines_heading_font_size).'px!important;';
					 }
				 $custom_css .='}';
			 }
			$vw_tourism_pro_cuisines_paragraph_color = get_theme_mod('vw_tourism_pro_cuisines_paragraph_color');
			$vw_tourism_pro_cuisines_paragraph_font_family = get_theme_mod('vw_tourism_pro_cuisines_paragraph_font_family');
			$vw_tourism_pro_cuisines_paragraph_font_size = get_theme_mod('vw_tourism_pro_cuisines_paragraph_font_size');
			 if($vw_tourism_pro_cuisines_paragraph_color != false || $vw_tourism_pro_cuisines_paragraph_font_family != false || $vw_tourism_pro_cuisines_paragraph_font_size != false ){
				 $custom_css .='#popular-cuisines .popular-cuisines-para{';
					 if($vw_tourism_pro_cuisines_paragraph_color != false){
						 $custom_css .='color: '.esc_html($vw_tourism_pro_cuisines_paragraph_color).'!important;';
					 }
					 if($vw_tourism_pro_cuisines_paragraph_font_family != false){
						 $custom_css .='font-family:'.esc_html($vw_tourism_pro_cuisines_paragraph_font_family).'!important;';
					 }
					 if($vw_tourism_pro_cuisines_paragraph_font_size != false){
						 $custom_css .='font-size:'.esc_html($vw_tourism_pro_cuisines_paragraph_font_size).'px!important;';
					 }
				 $custom_css .='}';
			 }
			$vw_tourism_pro_cuisines_name_color = get_theme_mod('vw_tourism_pro_cuisines_name_color');
			$vw_tourism_pro_cuisines_name_font_family = get_theme_mod('vw_tourism_pro_cuisines_name_font_family');
			$vw_tourism_pro_cuisines_name_font_size = get_theme_mod('vw_tourism_pro_cuisines_name_font_size');
			 if($vw_tourism_pro_cuisines_name_color != false || $vw_tourism_pro_cuisines_name_font_family != false || $vw_tourism_pro_cuisines_name_font_size != false ){
				 $custom_css .='.cusines-title-content h4{';
					 if($vw_tourism_pro_cuisines_name_color != false){
						 $custom_css .='color: '.esc_html($vw_tourism_pro_cuisines_name_color).'!important;';
					 }
					 if($vw_tourism_pro_cuisines_name_font_family != false){
						 $custom_css .='font-family:'.esc_html($vw_tourism_pro_cuisines_name_font_family).'!important;';
					 }
					 if($vw_tourism_pro_cuisines_name_font_size != false){
						 $custom_css .='font-size:'.esc_html($vw_tourism_pro_cuisines_name_font_size).'px!important;';
					 }
				 $custom_css .='}';
			 }
			$vw_tourism_pro_cuisines_paragraph_color = get_theme_mod('vw_tourism_pro_cuisines_paragraph_color');
			$vw_tourism_pro_cuisines_paragraph_font_family = get_theme_mod('vw_tourism_pro_cuisines_paragraph_font_family');
			$vw_tourism_pro_cuisines_paragraph_font_size = get_theme_mod('vw_tourism_pro_cuisines_paragraph_font_size');
			 if($vw_tourism_pro_cuisines_paragraph_color != false || $vw_tourism_pro_cuisines_paragraph_font_family != false || $vw_tourism_pro_cuisines_paragraph_font_size != false ){
				 $custom_css .='.cusines-content p{';
					 if($vw_tourism_pro_cuisines_paragraph_color != false){
						 $custom_css .='color: '.esc_html($vw_tourism_pro_cuisines_paragraph_color).'!important;';
					 }
					 if($vw_tourism_pro_cuisines_paragraph_font_family != false){
						 $custom_css .='font-family:'.esc_html($vw_tourism_pro_cuisines_paragraph_font_family).'!important;';
					 }
					 if($vw_tourism_pro_cuisines_paragraph_font_size != false){
						 $custom_css .='font-size:'.esc_html($vw_tourism_pro_cuisines_paragraph_font_size).'px!important;';
					 }
				 $custom_css .='}';
			 }
			$vw_tourism_pro_cuisines_price_location_color = get_theme_mod('vw_tourism_pro_cuisines_price_location_color');
			$vw_tourism_pro_cuisines_price_location_font_family = get_theme_mod('vw_tourism_pro_cuisines_price_location_font_family');
			$vw_tourism_pro_cuisines_price_location_font_size = get_theme_mod('vw_tourism_pro_cuisines_price_location_font_size');
			 if($vw_tourism_pro_cuisines_price_location_color != false || $vw_tourism_pro_cuisines_price_location_font_family != false || $vw_tourism_pro_cuisines_price_location_font_size != false ){
				 $custom_css .='.slider-for h6{';
					 if($vw_tourism_pro_cuisines_price_location_color != false){
						 $custom_css .='color: '.esc_html($vw_tourism_pro_cuisines_price_location_color).'!important;';
					 }
					 if($vw_tourism_pro_cuisines_price_location_font_family != false){
						 $custom_css .='font-family:'.esc_html($vw_tourism_pro_cuisines_price_location_font_family).'!important;';
					 }
					 if($vw_tourism_pro_cuisines_price_location_font_size != false){
						 $custom_css .='font-size:'.esc_html($vw_tourism_pro_cuisines_price_location_font_size).'px!important;';
					 }
				 $custom_css .='}';
			 }

			$vw_tourism_pro_cuisines_price_location_icon_color = get_theme_mod('vw_tourism_pro_cuisines_price_location_icon_color');
			 if($vw_tourism_pro_cuisines_price_location_icon_color != false ){
				 $custom_css .='.cusines-content i {';
					 if($vw_tourism_pro_cuisines_price_location_icon_color != false){
						 $custom_css .='color: '.esc_html($vw_tourism_pro_cuisines_price_location_icon_color).'!important;';
					 }
				 $custom_css .='}';
			 }

			 $vw_tourism_pro_cuisines_regular_price_color = get_theme_mod('vw_tourism_pro_cuisines_regular_price_color');
			 $vw_tourism_pro_cuisines_regular_price_font_family = get_theme_mod('vw_tourism_pro_cuisines_regular_price_font_family');
			 $vw_tourism_pro_cuisines_regular_price_font_size = get_theme_mod('vw_tourism_pro_cuisines_regular_price_font_size');
			  if($vw_tourism_pro_cuisines_regular_price_color != false || $vw_tourism_pro_cuisines_regular_price_font_family != false || $vw_tourism_pro_cuisines_regular_price_font_size != false ){
			 	 $custom_css .='.cuisines-price .c-price{';
			 		 if($vw_tourism_pro_cuisines_regular_price_color != false){
			 			 $custom_css .='color: '.esc_html($vw_tourism_pro_cuisines_regular_price_color).'!important;';
			 		 }
			 		 if($vw_tourism_pro_cuisines_regular_price_font_family != false){
			 			 $custom_css .='font-family:'.esc_html($vw_tourism_pro_cuisines_regular_price_font_family).'!important;';
			 		 }
			 		 if($vw_tourism_pro_cuisines_regular_price_font_size != false){
			 			 $custom_css .='font-size:'.esc_html($vw_tourism_pro_cuisines_regular_price_font_size).'px!important;';
			 		 }
			 	 $custom_css .='}';
			  }
			 $vw_tourism_pro_cuisines_sale_price_color = get_theme_mod('vw_tourism_pro_cuisines_sale_price_color');
			 $vw_tourism_pro_cuisines_sale_price_font_family = get_theme_mod('vw_tourism_pro_cuisines_sale_price_font_family');
			 $vw_tourism_pro_cuisines_sale_price_font_size = get_theme_mod('vw_tourism_pro_cuisines_sale_price_font_size');
			  if($vw_tourism_pro_cuisines_sale_price_color != false || $vw_tourism_pro_cuisines_sale_price_font_family != false || $vw_tourism_pro_cuisines_sale_price_font_size != false ){
			 	 $custom_css .='.cuisines-price .c-sale-price{';
			 		 if($vw_tourism_pro_cuisines_sale_price_color != false){
			 			 $custom_css .='color: '.esc_html($vw_tourism_pro_cuisines_sale_price_color).'!important;';
			 		 }
			 		 if($vw_tourism_pro_cuisines_sale_price_font_family != false){
			 			 $custom_css .='font-family:'.esc_html($vw_tourism_pro_cuisines_sale_price_font_family).'!important;';
			 		 }
			 		 if($vw_tourism_pro_cuisines_sale_price_font_size != false){
			 			 $custom_css .='font-size:'.esc_html($vw_tourism_pro_cuisines_sale_price_font_size).'px!important;';
			 		 }
			 	 $custom_css .='}';
			  }

			$vw_tourism_pro_cuisines_border_color = get_theme_mod('vw_tourism_pro_cuisines_border_color');
			 if($vw_tourism_pro_cuisines_border_color != false ){
				 $custom_css .='.cusines-content-main svg line{';
					 if($vw_tourism_pro_cuisines_border_color != false){
						 $custom_css .='stroke: '.esc_html($vw_tourism_pro_cuisines_border_color).'!important;';
					 }
				 $custom_css .='}';
			 }
			 $vw_tourism_pro_cuisines_hot_recipe_color = get_theme_mod('vw_tourism_pro_cuisines_hot_recipe_color');
			 $vw_tourism_pro_cuisines_hot_recipe_font_family = get_theme_mod('vw_tourism_pro_cuisines_hot_recipe_font_family');
			 $vw_tourism_pro_cuisines_hot_recipe_font_size = get_theme_mod('vw_tourism_pro_cuisines_hot_recipe_font_size');
			 $vw_tourism_pro_cuisines_hot_recipe_bg_color = get_theme_mod('vw_tourism_pro_cuisines_hot_recipe_bg_color');
				if($vw_tourism_pro_cuisines_hot_recipe_color != false || $vw_tourism_pro_cuisines_hot_recipe_font_family != false || $vw_tourism_pro_cuisines_hot_recipe_font_size != false || $vw_tourism_pro_cuisines_hot_recipe_bg_color != false){
				 $custom_css .='.recipe-title{';
					 if($vw_tourism_pro_cuisines_hot_recipe_color != false){
						 $custom_css .='color: '.esc_html($vw_tourism_pro_cuisines_hot_recipe_color).'!important;';
					 }
					 if($vw_tourism_pro_cuisines_hot_recipe_font_family != false){
						 $custom_css .='font-family:'.esc_html($vw_tourism_pro_cuisines_hot_recipe_font_family).'!important;';
					 }
					 if($vw_tourism_pro_cuisines_hot_recipe_font_size != false){
						 $custom_css .='font-size:'.esc_html($vw_tourism_pro_cuisines_hot_recipe_font_size).'px!important;';
					 }
					 if($vw_tourism_pro_cuisines_hot_recipe_bg_color != false){
						 $custom_css .='background:'.esc_html($vw_tourism_pro_cuisines_hot_recipe_bg_color).';';
					 }
				 $custom_css .='}';
				}

				$vw_tourism_pro_cuisines_img_border_color = get_theme_mod('vw_tourism_pro_cuisines_img_border_color');
				 if($vw_tourism_pro_cuisines_img_border_color != false ){
					 $custom_css .='#popular-cuisines .slick-slide.slick-current.slick-active .cuisines-image::after{';
						 if($vw_tourism_pro_cuisines_img_border_color != false){
							 $custom_css .='border-color: '.esc_html($vw_tourism_pro_cuisines_img_border_color).'!important;';
						 }
					 $custom_css .='}';
				 }

				 $vw_tourism_pro_cuisines_arrow_color = get_theme_mod('vw_tourism_pro_cuisines_arrow_color');
				 $vw_tourism_pro_cuisines_arrow_bg_color = get_theme_mod('vw_tourism_pro_cuisines_arrow_bg_color');

					if($vw_tourism_pro_cuisines_arrow_color != false || $vw_tourism_pro_cuisines_arrow_bg_color != false){
						$custom_css .='#popular-cuisines .slider-custom-main i, .slider-custom-active-dot{';
							if($vw_tourism_pro_cuisines_arrow_color != false){
								$custom_css .='color: '.esc_html($vw_tourism_pro_cuisines_arrow_color).'!important;';
							}
							if($vw_tourism_pro_cuisines_arrow_bg_color != false){
								$custom_css .='background: '.esc_html($vw_tourism_pro_cuisines_arrow_bg_color).'!important;';
							}
						$custom_css .='}';
					}
					$vw_tourism_pro_cuisines_middle_arrow_color = get_theme_mod('vw_tourism_pro_cuisines_middle_arrow_color');
					 if($vw_tourism_pro_cuisines_middle_arrow_color != false ){
						 $custom_css .='#popular-cuisines .slider-custom-active-dot g	{';
							 if($vw_tourism_pro_cuisines_middle_arrow_color != false){
								 $custom_css .='stroke: '.esc_html($vw_tourism_pro_cuisines_middle_arrow_color).'!important;';
							 }
						 $custom_css .='}';
					 }
	/*------------------------------ OUR PLACES Post ----------------------------------------*/


	$vw_tourism_pro_popular_packages_sub_heading_color = get_theme_mod('vw_tourism_pro_popular_packages_sub_heading_color');
	$vw_tourism_pro_popular_packages_sub_heading_font_family = get_theme_mod('vw_tourism_pro_popular_packages_sub_heading_font_family');
	$vw_tourism_pro_popular_packages_sub_heading_font_size = get_theme_mod('vw_tourism_pro_popular_packages_sub_heading_font_size');
		 if($vw_tourism_pro_popular_packages_sub_heading_color != false || $vw_tourism_pro_popular_packages_sub_heading_font_family != false || $vw_tourism_pro_popular_packages_sub_heading_font_size != false ){
			 $custom_css .='#popular-packages .sec-sub-heading{';
				 if($vw_tourism_pro_popular_packages_sub_heading_color != false){
					 $custom_css .='color: '.esc_html($vw_tourism_pro_popular_packages_sub_heading_color).'!important;';
				 }
				 if($vw_tourism_pro_popular_packages_sub_heading_font_family != false){
					 $custom_css .='font-family:'.esc_html($vw_tourism_pro_popular_packages_sub_heading_font_family).'!important;';
				 }
				 if($vw_tourism_pro_popular_packages_sub_heading_font_size != false){
					 $custom_css .='font-size:'.esc_html($vw_tourism_pro_popular_packages_sub_heading_font_size).'px!important;';
				 }
			 $custom_css .='}';
		 }
	$vw_tourism_pro_popular_packages_heading_color = get_theme_mod('vw_tourism_pro_popular_packages_heading_color');
	$vw_tourism_pro_popular_packages_heading_font_family = get_theme_mod('vw_tourism_pro_popular_packages_heading_font_family');
	$vw_tourism_pro_popular_packages_heading_font_size = get_theme_mod('vw_tourism_pro_popular_packages_heading_font_size');
		 if($vw_tourism_pro_popular_packages_heading_color != false || $vw_tourism_pro_popular_packages_heading_font_family != false || $vw_tourism_pro_popular_packages_heading_font_size != false ){
			 $custom_css .='#popular-packages .sec-heading{';
				 if($vw_tourism_pro_popular_packages_heading_color != false){
					 $custom_css .='color: '.esc_html($vw_tourism_pro_popular_packages_heading_color).'!important;';
				 }
				 if($vw_tourism_pro_popular_packages_heading_font_family != false){
					 $custom_css .='font-family:'.esc_html($vw_tourism_pro_popular_packages_heading_font_family).'!important;';
				 }
				 if($vw_tourism_pro_popular_packages_heading_font_size != false){
					 $custom_css .='font-size:'.esc_html($vw_tourism_pro_popular_packages_heading_font_size).'px!important;';
				 }
			 $custom_css .='}';
		 }
	$vw_tourism_pro_popular_packages_tab_heading_color = get_theme_mod('vw_tourism_pro_popular_packages_tab_heading_color');
	$vw_tourism_pro_popular_packages_tab_heading_font_family = get_theme_mod('vw_tourism_pro_popular_packages_tab_heading_font_family');
	$vw_tourism_pro_popular_packages_tab_heading_font_size = get_theme_mod('vw_tourism_pro_popular_packages_tab_heading_font_size');
		 if($vw_tourism_pro_popular_packages_tab_heading_color != false || $vw_tourism_pro_popular_packages_tab_heading_font_family != false || $vw_tourism_pro_popular_packages_tab_heading_font_size != false ){
			 $custom_css .='#popular-package-tabs .nav-link{';
				 if($vw_tourism_pro_popular_packages_tab_heading_color != false){
					 $custom_css .='color: '.esc_html($vw_tourism_pro_popular_packages_tab_heading_color).'!important;';
				 }
				 if($vw_tourism_pro_popular_packages_tab_heading_font_family != false){
					 $custom_css .='font-family:'.esc_html($vw_tourism_pro_popular_packages_tab_heading_font_family).'!important;';
				 }
				 if($vw_tourism_pro_popular_packages_tab_heading_font_size != false){
					 $custom_css .='font-size:'.esc_html($vw_tourism_pro_popular_packages_tab_heading_font_size).'px!important;';
				 }
			 $custom_css .='}';
		 }
	$vw_tourism_pro_popular_packages_destination_color = get_theme_mod('vw_tourism_pro_popular_packages_destination_color');
	$vw_tourism_pro_popular_packages_destination_font_family = get_theme_mod('vw_tourism_pro_popular_packages_destination_font_family');
	$vw_tourism_pro_popular_packages_destination_font_size = get_theme_mod('vw_tourism_pro_popular_packages_destination_font_size');
		 if($vw_tourism_pro_popular_packages_destination_color != false || $vw_tourism_pro_popular_packages_destination_font_family != false || $vw_tourism_pro_popular_packages_destination_font_size != false ){
			 $custom_css .='.packages-btm-content h5{';
				 if($vw_tourism_pro_popular_packages_destination_color != false){
					 $custom_css .='color: '.esc_html($vw_tourism_pro_popular_packages_destination_color).'!important;';
				 }
				 if($vw_tourism_pro_popular_packages_destination_font_family != false){
					 $custom_css .='font-family:'.esc_html($vw_tourism_pro_popular_packages_destination_font_family).'!important;';
				 }
				 if($vw_tourism_pro_popular_packages_destination_font_size != false){
					 $custom_css .='font-size:'.esc_html($vw_tourism_pro_popular_packages_destination_font_size).'px!important;';
				 }
			 $custom_css .='}';
		 }
	$vw_tourism_pro_popular_packages_from_color = get_theme_mod('vw_tourism_pro_popular_packages_from_color');
	$vw_tourism_pro_popular_packages_from_font_family = get_theme_mod('vw_tourism_pro_popular_packages_from_font_family');
	$vw_tourism_pro_popular_packages_from_font_size = get_theme_mod('vw_tourism_pro_popular_packages_from_font_size');
		 if($vw_tourism_pro_popular_packages_from_color != false || $vw_tourism_pro_popular_packages_from_font_family != false || $vw_tourism_pro_popular_packages_from_font_size != false ){
			 $custom_css .='.packages-from, .packages-date{';
				 if($vw_tourism_pro_popular_packages_from_color != false){
					 $custom_css .='color: '.esc_html($vw_tourism_pro_popular_packages_from_color).'!important;';
				 }
				 if($vw_tourism_pro_popular_packages_from_font_family != false){
					 $custom_css .='font-family:'.esc_html($vw_tourism_pro_popular_packages_from_font_family).'!important;';
				 }
				 if($vw_tourism_pro_popular_packages_from_font_size != false){
					 $custom_css .='font-size:'.esc_html($vw_tourism_pro_popular_packages_from_font_size).'px!important;';
				 }
			 $custom_css .='}';
		 }


		 $vw_tourism_pro_popular_packages_from_border_color = get_theme_mod('vw_tourism_pro_popular_packages_from_border_color');
 		 if($vw_tourism_pro_popular_packages_from_border_color != false ){
 			 $custom_css .='.packages-from{';
 				 if($vw_tourism_pro_popular_packages_from_border_color != false){
 					 $custom_css .='border-color: '.esc_html($vw_tourism_pro_popular_packages_from_border_color).'!important;';
 				 }
 			 $custom_css .='}';
 		 }
		 $vw_tourism_pro_popular_packages_price_color = get_theme_mod('vw_tourism_pro_popular_packages_price_color');
	  $vw_tourism_pro_popular_packages_price_font_family = get_theme_mod('vw_tourism_pro_popular_packages_price_font_family');
	  $vw_tourism_pro_popular_packages_price_font_size = get_theme_mod('vw_tourism_pro_popular_packages_price_font_size');
	 	if($vw_tourism_pro_popular_packages_price_color != false || $vw_tourism_pro_popular_packages_price_font_family != false || $vw_tourism_pro_popular_packages_price_font_size != false ){
	 		$custom_css .='.package-price{';
	 			if($vw_tourism_pro_popular_packages_price_color != false){
	 				$custom_css .='color: '.esc_html($vw_tourism_pro_popular_packages_price_color).'!important;';
	 			}
	 			if($vw_tourism_pro_popular_packages_price_font_family != false){
	 				$custom_css .='font-family:'.esc_html($vw_tourism_pro_popular_packages_price_font_family).'!important;';
	 			}
	 			if($vw_tourism_pro_popular_packages_price_font_size != false){
	 				$custom_css .='font-size:'.esc_html($vw_tourism_pro_popular_packages_price_font_size).'px!important;';
	 			}
	 		$custom_css .='}';
	 	}
	 	$vw_tourism_pro_popular_packages_per_text_color = get_theme_mod('vw_tourism_pro_popular_packages_per_text_color');
	 	$vw_tourism_pro_popular_packages_per_text_font_family = get_theme_mod('vw_tourism_pro_popular_packages_per_text_font_family');
	 	$vw_tourism_pro_popular_packages_per_text_font_size = get_theme_mod('vw_tourism_pro_popular_packages_per_text_font_size');
 		 if($vw_tourism_pro_popular_packages_per_text_color != false || $vw_tourism_pro_popular_packages_per_text_font_family != false || $vw_tourism_pro_popular_packages_per_text_font_size != false ){
 			 $custom_css .='.pac-per-year{';
 				 if($vw_tourism_pro_popular_packages_per_text_color != false){
 					 $custom_css .='color: '.esc_html($vw_tourism_pro_popular_packages_per_text_color).'!important;';
 				 }
 				 if($vw_tourism_pro_popular_packages_per_text_font_family != false){
 					 $custom_css .='font-family:'.esc_html($vw_tourism_pro_popular_packages_per_text_font_family).'!important;';
 				 }
 				 if($vw_tourism_pro_popular_packages_per_text_font_size != false){
 					 $custom_css .='font-size:'.esc_html($vw_tourism_pro_popular_packages_per_text_font_size).'px!important;';
 				 }
 			 $custom_css .='}';
 		 }
	 	$vw_tourism_pro_popular_packages_title_color = get_theme_mod('vw_tourism_pro_popular_packages_title_color');
	 	$vw_tourism_pro_popular_packages_title_font_family = get_theme_mod('vw_tourism_pro_popular_packages_title_font_family');
	 	$vw_tourism_pro_popular_packages_title_font_size = get_theme_mod('vw_tourism_pro_popular_packages_title_font_size');
 		 if($vw_tourism_pro_popular_packages_title_color != false || $vw_tourism_pro_popular_packages_title_font_family != false || $vw_tourism_pro_popular_packages_title_font_size != false ){
 			 $custom_css .='.packages-title a{';
 				 if($vw_tourism_pro_popular_packages_title_color != false){
 					 $custom_css .='color: '.esc_html($vw_tourism_pro_popular_packages_title_color).'!important;';
 				 }
 				 if($vw_tourism_pro_popular_packages_title_font_family != false){
 					 $custom_css .='font-family:'.esc_html($vw_tourism_pro_popular_packages_title_font_family).'!important;';
 				 }
 				 if($vw_tourism_pro_popular_packages_title_font_size != false){
 					 $custom_css .='font-size:'.esc_html($vw_tourism_pro_popular_packages_title_font_size).'px!important;';
 				 }
 			 $custom_css .='}';
 		 }
	 	$vw_tourism_pro_popular_packages_travel_name_color = get_theme_mod('vw_tourism_pro_popular_packages_travel_name_color');
	 	$vw_tourism_pro_popular_packages_travel_name_font_family = get_theme_mod('vw_tourism_pro_popular_packages_travel_name_font_family');
	 	$vw_tourism_pro_popular_packages_travel_name_font_size = get_theme_mod('vw_tourism_pro_popular_packages_travel_name_font_size');
 		 if($vw_tourism_pro_popular_packages_travel_name_color != false || $vw_tourism_pro_popular_packages_travel_name_font_family != false || $vw_tourism_pro_popular_packages_travel_name_font_size != false ){
 			 $custom_css .='.packages-name p{';
 				 if($vw_tourism_pro_popular_packages_travel_name_color != false){
 					 $custom_css .='color: '.esc_html($vw_tourism_pro_popular_packages_travel_name_color).'!important;';
 				 }
 				 if($vw_tourism_pro_popular_packages_travel_name_font_family != false){
 					 $custom_css .='font-family:'.esc_html($vw_tourism_pro_popular_packages_travel_name_font_family).'!important;';
 				 }
 				 if($vw_tourism_pro_popular_packages_travel_name_font_size != false){
 					 $custom_css .='font-size:'.esc_html($vw_tourism_pro_popular_packages_travel_name_font_size).'px!important;';
 				 }
 			 $custom_css .='}';
 		 }
  	$vw_tourism_pro_popular_packages_btn_color = get_theme_mod('vw_tourism_pro_popular_packages_btn_color');
  	$vw_tourism_pro_popular_packages_btn_font_family = get_theme_mod('vw_tourism_pro_popular_packages_btn_font_family');
  	$vw_tourism_pro_popular_packages_btn_font_size = get_theme_mod('vw_tourism_pro_popular_packages_btn_font_size');
  	$vw_tourism_pro_popular_packages_btn_bg_color = get_theme_mod('vw_tourism_pro_popular_packages_btn_bg_color');
  	 if($vw_tourism_pro_popular_packages_btn_color != false || $vw_tourism_pro_popular_packages_btn_font_family != false || $vw_tourism_pro_popular_packages_btn_font_size != false || $vw_tourism_pro_popular_packages_btn_bg_color != false ){
  		 $custom_css .='.packages-box .theme-btn-main{';
  			 if($vw_tourism_pro_popular_packages_btn_color != false){
  				 $custom_css .='color: '.esc_html($vw_tourism_pro_popular_packages_btn_color).'!important;';
  			 }
  			 if($vw_tourism_pro_popular_packages_btn_font_family != false){
  				 $custom_css .='font-family:'.esc_html($vw_tourism_pro_popular_packages_btn_font_family).'!important;';
  			 }
  			 if($vw_tourism_pro_popular_packages_btn_font_size != false){
  				 $custom_css .='font-size:'.esc_html($vw_tourism_pro_popular_packages_btn_font_size).'px!important;';
  			 }
 			 if($vw_tourism_pro_popular_packages_btn_bg_color != false){
 					 $custom_css .='background: '.esc_html($vw_tourism_pro_popular_packages_btn_bg_color).'!important;';
 				 }
  		 $custom_css .='}';
  	 }

		 $vw_tourism_pro_popular_packages_btn_arrow_color = get_theme_mod('vw_tourism_pro_popular_packages_btn_arrow_color');
		 if($vw_tourism_pro_popular_packages_btn_arrow_color != false){
		  $custom_css .='.packages-box .theme-btn-line-right{';
		 	if($vw_tourism_pro_popular_packages_btn_arrow_color != false){
		 		$custom_css .='background: '.esc_html($vw_tourism_pro_popular_packages_btn_arrow_color).'!important;';
		 	}
		 	$custom_css .='}';
		 	$custom_css .='.packages-box .theme-btn-main i{';
		 	if($vw_tourism_pro_popular_packages_btn_arrow_color != false){
		 		$custom_css .='color: '.esc_html($vw_tourism_pro_popular_packages_btn_arrow_color).'!important;';
		 	}
		  $custom_css .='}';
		 }

 	 $vw_tourism_pro_popular_packages_btn_hover_bg_color = get_theme_mod('vw_tourism_pro_popular_packages_btn_hover_bg_color');
 		if($vw_tourism_pro_popular_packages_btn_hover_bg_color != false){
 			$custom_css .='.packages-box .theme-btn-main:hover{';
 				if($vw_tourism_pro_popular_packages_btn_hover_bg_color != false){
 					$custom_css .='background: '.esc_html($vw_tourism_pro_popular_packages_btn_hover_bg_color).'!important;';
 				}
 			$custom_css .='}';
 		}

 	 $vw_tourism_pro_popular_packages_content_bg_color = get_theme_mod('vw_tourism_pro_popular_packages_content_bg_color');
 		if($vw_tourism_pro_popular_packages_content_bg_color != false){
 			$custom_css .='.packges-bottom-box{';
 				if($vw_tourism_pro_popular_packages_content_bg_color != false){
 					$custom_css .='background: '.esc_html($vw_tourism_pro_popular_packages_content_bg_color).'!important;';
 				}
 			$custom_css .='}';
 		}

	/*------------------------------ Experience Section----------------------------------------*/

	$vw_tourism_pro_experience_sub_heading_color = get_theme_mod('vw_tourism_pro_experience_sub_heading_color');
	$vw_tourism_pro_experience_sub_heading_font_family = get_theme_mod('vw_tourism_pro_experience_sub_heading_font_family');
	$vw_tourism_pro_experience_sub_heading_font_size = get_theme_mod('vw_tourism_pro_experience_sub_heading_font_size');
	 if($vw_tourism_pro_experience_sub_heading_color != false || $vw_tourism_pro_experience_sub_heading_font_family != false || $vw_tourism_pro_experience_sub_heading_font_size != false ){
		 $custom_css .='#experience .sec-sub-heading{';
			 if($vw_tourism_pro_experience_sub_heading_color != false){
				 $custom_css .='color: '.esc_html($vw_tourism_pro_experience_sub_heading_color).'!important;';
			 }
			 if($vw_tourism_pro_experience_sub_heading_font_family != false){
				 $custom_css .='font-family:'.esc_html($vw_tourism_pro_experience_sub_heading_font_family).'!important;';
			 }
			 if($vw_tourism_pro_experience_sub_heading_font_size != false){
				 $custom_css .='font-size:'.esc_html($vw_tourism_pro_experience_sub_heading_font_size).'px!important;';
			 }
		 $custom_css .='}';
	 }

	$vw_tourism_pro_experience_heading_color = get_theme_mod('vw_tourism_pro_experience_heading_color');
	$vw_tourism_pro_experience_heading_font_family = get_theme_mod('vw_tourism_pro_experience_heading_font_family');
	$vw_tourism_pro_experience_heading_font_size = get_theme_mod('vw_tourism_pro_experience_heading_font_size');
	 if($vw_tourism_pro_experience_heading_color != false || $vw_tourism_pro_experience_heading_font_family != false || $vw_tourism_pro_experience_heading_font_size != false ){
		 $custom_css .='#experience .sec-heading{';
			 if($vw_tourism_pro_experience_heading_color != false){
				 $custom_css .='color: '.esc_html($vw_tourism_pro_experience_heading_color).'!important;';
			 }
			 if($vw_tourism_pro_experience_heading_font_family != false){
				 $custom_css .='font-family:'.esc_html($vw_tourism_pro_experience_heading_font_family).'!important;';
			 }
			 if($vw_tourism_pro_experience_heading_font_size != false){
				 $custom_css .='font-size:'.esc_html($vw_tourism_pro_experience_heading_font_size).'px!important;';
			 }
		 $custom_css .='}';
	 }
	$vw_tourism_pro_experience_title_color = get_theme_mod('vw_tourism_pro_experience_title_color');
	$vw_tourism_pro_experience_title_font_family = get_theme_mod('vw_tourism_pro_experience_title_font_family');
	$vw_tourism_pro_experience_title_font_size = get_theme_mod('vw_tourism_pro_experience_title_font_size');
	 if($vw_tourism_pro_experience_title_color != false || $vw_tourism_pro_experience_title_font_family != false || $vw_tourism_pro_experience_title_font_size != false ){
		 $custom_css .='.exp-post-title{';
			 if($vw_tourism_pro_experience_title_color != false){
				 $custom_css .='color: '.esc_html($vw_tourism_pro_experience_title_color).'!important;';
			 }
			 if($vw_tourism_pro_experience_title_font_family != false){
				 $custom_css .='font-family:'.esc_html($vw_tourism_pro_experience_title_font_family).'!important;';
			 }
			 if($vw_tourism_pro_experience_title_font_size != false){
				 $custom_css .='font-size:'.esc_html($vw_tourism_pro_experience_title_font_size).'px!important;';
			 }
		 $custom_css .='}';
	 }

	 $vw_tourism_pro_experience_icon_color = get_theme_mod('vw_tourism_pro_experience_icon_color');
	 if($vw_tourism_pro_experience_icon_color != false){
		 $custom_css .='.experience-pills-tab .exp-post-img svg path{';
			 if($vw_tourism_pro_experience_icon_color != false){
				 $custom_css .='fill: '.esc_html($vw_tourism_pro_experience_icon_color).'!important;';
			 }
		 $custom_css .='}';
	 }
	 $vw_tourism_pro_experience_active_icon_color = get_theme_mod('vw_tourism_pro_experience_active_icon_color');
		if($vw_tourism_pro_experience_active_icon_color != false){
			$custom_css .='.experience-pills-tab .nav-link.active .exp-post-img svg path{';
				if($vw_tourism_pro_experience_active_icon_color != false){
					$custom_css .='fill: '.esc_html($vw_tourism_pro_experience_active_icon_color).'!important;';
				}
			$custom_css .='}';
		}
	 $vw_tourism_pro_experience_active_title_color = get_theme_mod('vw_tourism_pro_experience_active_title_color');
		if($vw_tourism_pro_experience_active_title_color != false){
			$custom_css .='.experience-pills-tab .nav-link.active .exp-post-title{';
				if($vw_tourism_pro_experience_active_title_color != false){
					$custom_css .='color: '.esc_html($vw_tourism_pro_experience_active_title_color).'!important;';
				}
			$custom_css .='}';
		}
	 $vw_tourism_pro_experience_active_bg_color = get_theme_mod('vw_tourism_pro_experience_active_bg_color');
		if($vw_tourism_pro_experience_active_bg_color != false){
			$custom_css .='#about .abt-icon, .experience-pills-tab .nav-link.active, .theme-btn-main:hover{';
				if($vw_tourism_pro_experience_active_bg_color != false){
					$custom_css .='background-color: '.esc_html($vw_tourism_pro_experience_active_bg_color).'!important;';
				}
			$custom_css .='}';
		}

		$vw_tourism_pro_experience_content_title_color = get_theme_mod('vw_tourism_pro_experience_content_title_color');
		$vw_tourism_pro_experience_content_title_font_family = get_theme_mod('vw_tourism_pro_experience_content_title_font_family');
		$vw_tourism_pro_experience_content_title_font_size = get_theme_mod('vw_tourism_pro_experience_content_title_font_size');
		if($vw_tourism_pro_experience_content_title_color != false || $vw_tourism_pro_experience_content_title_font_family != false || $vw_tourism_pro_experience_content_title_font_size != false ){
		 $custom_css .='.exp-content-box .post-title{';
			 if($vw_tourism_pro_experience_content_title_color != false){
				 $custom_css .='color: '.esc_html($vw_tourism_pro_experience_content_title_color).'!important;';
			 }
			 if($vw_tourism_pro_experience_content_title_font_family != false){
				 $custom_css .='font-family:'.esc_html($vw_tourism_pro_experience_content_title_font_family).'!important;';
			 }
			 if($vw_tourism_pro_experience_content_title_font_size != false){
				 $custom_css .='font-size:'.esc_html($vw_tourism_pro_experience_content_title_font_size).'px!important;';
			 }
		 $custom_css .='}';
		}
		$vw_tourism_pro_experience_content_para_color = get_theme_mod('vw_tourism_pro_experience_content_para_color');
		$vw_tourism_pro_experience_content_para_font_family = get_theme_mod('vw_tourism_pro_experience_content_para_font_family');
		$vw_tourism_pro_experience_content_para_font_size = get_theme_mod('vw_tourism_pro_experience_content_para_font_size');
		if($vw_tourism_pro_experience_content_para_color != false || $vw_tourism_pro_experience_content_para_font_family != false || $vw_tourism_pro_experience_content_para_font_size != false ){
		 $custom_css .='.exp-content-box p{';
			 if($vw_tourism_pro_experience_content_para_color != false){
				 $custom_css .='color: '.esc_html($vw_tourism_pro_experience_content_para_color).'!important;';
			 }
			 if($vw_tourism_pro_experience_content_para_font_family != false){
				 $custom_css .='font-family:'.esc_html($vw_tourism_pro_experience_content_para_font_family).'!important;';
			 }
			 if($vw_tourism_pro_experience_content_para_font_size != false){
				 $custom_css .='font-size:'.esc_html($vw_tourism_pro_experience_content_para_font_size).'px!important;';
			 }
		 $custom_css .='}';
		}
		$vw_tourism_pro_experience_content_bg_color = get_theme_mod('vw_tourism_pro_experience_content_bg_color');
 	 if($vw_tourism_pro_experience_content_bg_color != false){
 		 $custom_css .='.exp-content-box{';
 			 if($vw_tourism_pro_experience_content_bg_color != false){
 				 $custom_css .='background: '.esc_html($vw_tourism_pro_experience_content_bg_color).'!important;';
 			 }
 		 $custom_css .='}';
 	 }
		$vw_tourism_pro_experience_content_bg_img_color = get_theme_mod('vw_tourism_pro_experience_content_bg_img_color');
 	 if($vw_tourism_pro_experience_content_bg_img_color != false){
 		 $custom_css .='.ex-content-bg-img svg path{';
 			 if($vw_tourism_pro_experience_content_bg_img_color != false){
 				 $custom_css .='fill: '.esc_html($vw_tourism_pro_experience_content_bg_img_color).'!important;';
 			 }
 		 $custom_css .='}';
 	 }
	/*------------------------------How To process ----------------------------------------*/



	$vw_tourism_pro_how_to_process_sub_heading_color = get_theme_mod('vw_tourism_pro_how_to_process_sub_heading_color');
	$vw_tourism_pro_how_to_process_sub_heading_font_family = get_theme_mod('vw_tourism_pro_how_to_process_sub_heading_font_family');
	$vw_tourism_pro_how_to_process_sub_heading_font_size = get_theme_mod('vw_tourism_pro_how_to_process_sub_heading_font_size');
	 if($vw_tourism_pro_how_to_process_sub_heading_color != false || $vw_tourism_pro_how_to_process_sub_heading_font_family != false || $vw_tourism_pro_how_to_process_sub_heading_font_size != false ){
		 $custom_css .='#how-to-process .sec-sub-heading{';
			 if($vw_tourism_pro_how_to_process_sub_heading_color != false){
				 $custom_css .='color: '.esc_html($vw_tourism_pro_how_to_process_sub_heading_color).'!important;';
			 }
			 if($vw_tourism_pro_how_to_process_sub_heading_font_family != false){
				 $custom_css .='font-family:'.esc_html($vw_tourism_pro_how_to_process_sub_heading_font_family).'!important;';
			 }
			 if($vw_tourism_pro_how_to_process_sub_heading_font_size != false){
				 $custom_css .='font-size:'.esc_html($vw_tourism_pro_how_to_process_sub_heading_font_size).'px!important;';
			 }
		 $custom_css .='}';
	 }

	$vw_tourism_pro_how_to_process_heading_color = get_theme_mod('vw_tourism_pro_how_to_process_heading_color');
	$vw_tourism_pro_how_to_process_heading_font_family = get_theme_mod('vw_tourism_pro_how_to_process_heading_font_family');
	$vw_tourism_pro_how_to_process_heading_font_size = get_theme_mod('vw_tourism_pro_how_to_process_heading_font_size');
	 if($vw_tourism_pro_how_to_process_heading_color != false || $vw_tourism_pro_how_to_process_heading_font_family != false || $vw_tourism_pro_how_to_process_heading_font_size != false ){
		 $custom_css .='#how-to-process .sec-heading{';
			 if($vw_tourism_pro_how_to_process_heading_color != false){
				 $custom_css .='color: '.esc_html($vw_tourism_pro_how_to_process_heading_color).'!important;';
			 }
			 if($vw_tourism_pro_how_to_process_heading_font_family != false){
				 $custom_css .='font-family:'.esc_html($vw_tourism_pro_how_to_process_heading_font_family).'!important;';
			 }
			 if($vw_tourism_pro_how_to_process_heading_font_size != false){
				 $custom_css .='font-size:'.esc_html($vw_tourism_pro_how_to_process_heading_font_size).'px!important;';
			 }
		 $custom_css .='}';
	 }

	$vw_tourism_pro_how_to_process_card_count_color = get_theme_mod('vw_tourism_pro_how_to_process_card_count_color');
	$vw_tourism_pro_how_to_process_card_count_font_family = get_theme_mod('vw_tourism_pro_how_to_process_card_count_font_family');
	$vw_tourism_pro_how_to_process_card_count_font_size = get_theme_mod('vw_tourism_pro_how_to_process_card_count_font_size');
	$vw_tourism_pro_how_to_process_card_count_opacity_color = get_theme_mod('vw_tourism_pro_how_to_process_card_count_opacity_color','');
	 if($vw_tourism_pro_how_to_process_card_count_color != false || $vw_tourism_pro_how_to_process_card_count_font_family != false || $vw_tourism_pro_how_to_process_card_count_font_size != false || $vw_tourism_pro_how_to_process_card_count_opacity_color != false ){
		 $custom_css .='.how-box-wrapper-inner .activity-no{';
			 if($vw_tourism_pro_how_to_process_card_count_color != false){
				 $custom_css .='color: '.esc_html($vw_tourism_pro_how_to_process_card_count_color).'!important;';
			 }
			 if($vw_tourism_pro_how_to_process_card_count_font_family != false){
				 $custom_css .='font-family:'.esc_html($vw_tourism_pro_how_to_process_card_count_font_family).'!important;';
			 }
			 if($vw_tourism_pro_how_to_process_card_count_font_size != false){
				 $custom_css .='font-size:'.esc_html($vw_tourism_pro_how_to_process_card_count_font_size).'px!important;';
			 }
			 if($vw_tourism_pro_how_to_process_card_count_opacity_color != false){
				 $custom_css .='opacity:'.esc_html($vw_tourism_pro_how_to_process_card_count_opacity_color).'';
			 }
		 $custom_css .='}';
	 }
	 $vw_tourism_pro_how_to_process_card_title_color = get_theme_mod('vw_tourism_pro_how_to_process_card_title_color');
 	$vw_tourism_pro_how_to_process_card_title_font_family = get_theme_mod('vw_tourism_pro_how_to_process_card_title_font_family');
 	$vw_tourism_pro_how_to_process_card_title_font_size = get_theme_mod('vw_tourism_pro_how_to_process_card_title_font_size');
 	 if($vw_tourism_pro_how_to_process_card_title_color != false || $vw_tourism_pro_how_to_process_card_title_font_family != false || $vw_tourism_pro_how_to_process_card_title_font_size != false ){
 		 $custom_css .='#how-to-process .how-title{';
 			 if($vw_tourism_pro_how_to_process_card_title_color != false){
 				 $custom_css .='color: '.esc_html($vw_tourism_pro_how_to_process_card_title_color).'!important;';
 			 }
 			 if($vw_tourism_pro_how_to_process_card_title_font_family != false){
 				 $custom_css .='font-family:'.esc_html($vw_tourism_pro_how_to_process_card_title_font_family).'!important;';
 			 }
 			 if($vw_tourism_pro_how_to_process_card_title_font_size != false){
 				 $custom_css .='font-size:'.esc_html($vw_tourism_pro_how_to_process_card_title_font_size).'px!important;';
 			 }
 		 $custom_css .='}';
 	 }
	 $vw_tourism_pro_how_to_process_card_border_color = get_theme_mod('vw_tourism_pro_how_to_process_card_border_color');
  if($vw_tourism_pro_how_to_process_card_border_color != false){
 	 $custom_css .='.how-img-wrapper::after{';
 		 if($vw_tourism_pro_how_to_process_card_border_color != false){
 			 $custom_css .='border-color: '.esc_html($vw_tourism_pro_how_to_process_card_border_color).'!important;';
 		 }
 	 $custom_css .='}';
  }
	 $vw_tourism_pro_how_to_process_card_bg_color = get_theme_mod('vw_tourism_pro_how_to_process_card_bg_color');
  if($vw_tourism_pro_how_to_process_card_bg_color != false){
 	 $custom_css .='.how-img-wrapper::after{';
 		 if($vw_tourism_pro_how_to_process_card_bg_color != false){
 			 $custom_css .='background: '.esc_html($vw_tourism_pro_how_to_process_card_bg_color).'!important;';
 		 }
 	 $custom_css .='}';
  }
	$vw_tourism_pro_how_to_process_bg_line_color = get_theme_mod('vw_tourism_pro_how_to_process_bg_line_color');
	if($vw_tourism_pro_how_to_process_bg_line_color != false){
		$custom_css .='.dash-img path,.dash-img #dot g{';
		 if($vw_tourism_pro_how_to_process_bg_line_color != false){
			 $custom_css .='stroke: '.esc_html($vw_tourism_pro_how_to_process_bg_line_color).'!important;';
		 }
		 $custom_css .='}';
		 $custom_css .='#chevron-down-solid-2, #chevron-down-solid-3, #chevron-down-solid-4,.dash-img circle,.dash-img #location_1_ path{';
		 if($vw_tourism_pro_how_to_process_bg_line_color != false){
			 $custom_css .='fill: '.esc_html($vw_tourism_pro_how_to_process_bg_line_color).'!important;';
		 }
		$custom_css .='}';
	}

	/*------------------------------ Why Choose Section----------------------------------------*/
	$vw_tourism_pro_why_choose_us_sub_heading_color = get_theme_mod('vw_tourism_pro_why_choose_us_sub_heading_color');
	$vw_tourism_pro_why_choose_us_sub_heading_font_family = get_theme_mod('vw_tourism_pro_why_choose_us_sub_heading_font_family');
	$vw_tourism_pro_why_choose_us_sub_heading_font_size = get_theme_mod('vw_tourism_pro_why_choose_us_sub_heading_font_size');
		 if($vw_tourism_pro_why_choose_us_sub_heading_color != false || $vw_tourism_pro_why_choose_us_sub_heading_font_family != false || $vw_tourism_pro_why_choose_us_sub_heading_font_size != false ){
			 $custom_css .='#why-choose .sec-sub-heading	{';
				 if($vw_tourism_pro_why_choose_us_sub_heading_color != false){
					 $custom_css .='color: '.esc_html($vw_tourism_pro_why_choose_us_sub_heading_color).'!important;';
				 }
				 if($vw_tourism_pro_why_choose_us_sub_heading_font_family != false){
					 $custom_css .='font-family:'.esc_html($vw_tourism_pro_why_choose_us_sub_heading_font_family).'!important;';
				 }
				 if($vw_tourism_pro_why_choose_us_sub_heading_font_size != false){
					 $custom_css .='font-size:'.esc_html($vw_tourism_pro_why_choose_us_sub_heading_font_size).'px!important;';
				 }
			 $custom_css .='}';
		 }
	$vw_tourism_pro_why_choose_us_heading_color = get_theme_mod('vw_tourism_pro_why_choose_us_heading_color');
	$vw_tourism_pro_why_choose_us_heading_font_family = get_theme_mod('vw_tourism_pro_why_choose_us_heading_font_family');
	$vw_tourism_pro_why_choose_us_heading_font_size = get_theme_mod('vw_tourism_pro_why_choose_us_heading_font_size');
		 if($vw_tourism_pro_why_choose_us_heading_color != false || $vw_tourism_pro_why_choose_us_heading_font_family != false || $vw_tourism_pro_why_choose_us_heading_font_size != false ){
			 $custom_css .='#why-choose .sec-heading{';
				 if($vw_tourism_pro_why_choose_us_heading_color != false){
					 $custom_css .='color: '.esc_html($vw_tourism_pro_why_choose_us_heading_color).'!important;';
				 }
				 if($vw_tourism_pro_why_choose_us_heading_font_family != false){
					 $custom_css .='font-family:'.esc_html($vw_tourism_pro_why_choose_us_heading_font_family).'!important;';
				 }
				 if($vw_tourism_pro_why_choose_us_heading_font_size != false){
					 $custom_css .='font-size:'.esc_html($vw_tourism_pro_why_choose_us_heading_font_size).'px!important;';
				 }
			 $custom_css .='}';
		 }
	$vw_tourism_pro_why_choose_us_paragraph_color = get_theme_mod('vw_tourism_pro_why_choose_us_paragraph_color');
	$vw_tourism_pro_why_choose_us_paragraph_font_family = get_theme_mod('vw_tourism_pro_why_choose_us_paragraph_font_family');
	$vw_tourism_pro_why_choose_us_paragraph_font_size = get_theme_mod('vw_tourism_pro_why_choose_us_paragraph_font_size');
		 if($vw_tourism_pro_why_choose_us_paragraph_color != false || $vw_tourism_pro_why_choose_us_paragraph_font_family != false || $vw_tourism_pro_why_choose_us_paragraph_font_size != false ){
			 $custom_css .='#why-choose .choose-para{';
				 if($vw_tourism_pro_why_choose_us_paragraph_color != false){
					 $custom_css .='color: '.esc_html($vw_tourism_pro_why_choose_us_paragraph_color).'!important;';
				 }
				 if($vw_tourism_pro_why_choose_us_paragraph_font_family != false){
					 $custom_css .='font-family:'.esc_html($vw_tourism_pro_why_choose_us_paragraph_font_family).'!important;';
				 }
				 if($vw_tourism_pro_why_choose_us_paragraph_font_size != false){
					 $custom_css .='font-size:'.esc_html($vw_tourism_pro_why_choose_us_paragraph_font_size).'px!important;';
				 }
			 $custom_css .='}';
		}

	 $vw_tourism_pro_why_choose_us_percentage_circle_color = get_theme_mod('vw_tourism_pro_why_choose_us_percentage_circle_color');
		if($vw_tourism_pro_why_choose_us_percentage_circle_color != false){
		 $custom_css .='.block .circle{';
			 if($vw_tourism_pro_why_choose_us_percentage_circle_color != false){
				 $custom_css .='color: '.esc_html($vw_tourism_pro_why_choose_us_percentage_circle_color).'!important;';
			 }
		 $custom_css .='}';
		}

		$vw_tourism_pro_why_choose_us_percentage_circle_number_color = get_theme_mod('vw_tourism_pro_why_choose_us_percentage_circle_number_color');
		$vw_tourism_pro_why_choose_us_percentage_circle_number_font_family = get_theme_mod('vw_tourism_pro_why_choose_us_percentage_circle_number_font_family');
		$vw_tourism_pro_why_choose_us_percentage_circle_number_font_size = get_theme_mod('vw_tourism_pro_why_choose_us_percentage_circle_number_font_size');
			 if($vw_tourism_pro_why_choose_us_percentage_circle_number_color != false || $vw_tourism_pro_why_choose_us_percentage_circle_number_font_family != false || $vw_tourism_pro_why_choose_us_percentage_circle_number_font_size != false ){
				 $custom_css .='#why-choose .number{';
					 if($vw_tourism_pro_why_choose_us_percentage_circle_number_color != false){
						 $custom_css .='color: '.esc_html($vw_tourism_pro_why_choose_us_percentage_circle_number_color).'!important;';
					 }
					 if($vw_tourism_pro_why_choose_us_percentage_circle_number_font_family != false){
						 $custom_css .='font-family:'.esc_html($vw_tourism_pro_why_choose_us_percentage_circle_number_font_family).'!important;';
					 }
					 if($vw_tourism_pro_why_choose_us_percentage_circle_number_font_size != false){
						 $custom_css .='font-size:'.esc_html($vw_tourism_pro_why_choose_us_percentage_circle_number_font_size).'px!important;';
					 }
				 $custom_css .='}';
			}
		$vw_tourism_pro_why_choose_us_percentage_circle_heading_color = get_theme_mod('vw_tourism_pro_why_choose_us_percentage_circle_heading_color');
		$vw_tourism_pro_why_choose_us_percentage_circle_heading_font_family = get_theme_mod('vw_tourism_pro_why_choose_us_percentage_circle_heading_font_family');
		$vw_tourism_pro_why_choose_us_percentage_circle_heading_font_size = get_theme_mod('vw_tourism_pro_why_choose_us_percentage_circle_heading_font_size');
			 if($vw_tourism_pro_why_choose_us_percentage_circle_heading_color != false || $vw_tourism_pro_why_choose_us_percentage_circle_heading_font_family != false || $vw_tourism_pro_why_choose_us_percentage_circle_heading_font_size != false ){
				 $custom_css .='.progress-text{';
					 if($vw_tourism_pro_why_choose_us_percentage_circle_heading_color != false){
						 $custom_css .='color: '.esc_html($vw_tourism_pro_why_choose_us_percentage_circle_heading_color).'!important;';
					 }
					 if($vw_tourism_pro_why_choose_us_percentage_circle_heading_font_family != false){
						 $custom_css .='font-family:'.esc_html($vw_tourism_pro_why_choose_us_percentage_circle_heading_font_family).'!important;';
					 }
					 if($vw_tourism_pro_why_choose_us_percentage_circle_heading_font_size != false){
						 $custom_css .='font-size:'.esc_html($vw_tourism_pro_why_choose_us_percentage_circle_heading_font_size).'px!important;';
					 }
				 $custom_css .='}';
			}
		$vw_tourism_pro_why_choose_points_heading_color = get_theme_mod('vw_tourism_pro_why_choose_points_heading_color');
		$vw_tourism_pro_why_choose_points_heading_font_family = get_theme_mod('vw_tourism_pro_why_choose_points_heading_font_family');
		$vw_tourism_pro_why_choose_points_heading_font_size = get_theme_mod('vw_tourism_pro_why_choose_points_heading_font_size');
			 if($vw_tourism_pro_why_choose_points_heading_color != false || $vw_tourism_pro_why_choose_points_heading_font_family != false || $vw_tourism_pro_why_choose_points_heading_font_size != false ){
				 $custom_css .='.why-choose-right-box h5{';
					 if($vw_tourism_pro_why_choose_points_heading_color != false){
						 $custom_css .='color: '.esc_html($vw_tourism_pro_why_choose_points_heading_color).'!important;';
					 }
					 if($vw_tourism_pro_why_choose_points_heading_font_family != false){
						 $custom_css .='font-family:'.esc_html($vw_tourism_pro_why_choose_points_heading_font_family).'!important;';
					 }
					 if($vw_tourism_pro_why_choose_points_heading_font_size != false){
						 $custom_css .='font-size:'.esc_html($vw_tourism_pro_why_choose_points_heading_font_size).'px!important;';
					 }
				 $custom_css .='}';
			}
		$vw_tourism_pro_why_choose_points_para_color = get_theme_mod('vw_tourism_pro_why_choose_points_para_color');
		$vw_tourism_pro_why_choose_points_para_font_family = get_theme_mod('vw_tourism_pro_why_choose_points_para_font_family');
		$vw_tourism_pro_why_choose_points_para_font_size = get_theme_mod('vw_tourism_pro_why_choose_points_para_font_size');
			 if($vw_tourism_pro_why_choose_points_para_color != false || $vw_tourism_pro_why_choose_points_para_font_family != false || $vw_tourism_pro_why_choose_points_para_font_size != false ){
				 $custom_css .='.why-choose-right-box p{';
					 if($vw_tourism_pro_why_choose_points_para_color != false){
						 $custom_css .='color: '.esc_html($vw_tourism_pro_why_choose_points_para_color).'!important;';
					 }
					 if($vw_tourism_pro_why_choose_points_para_font_family != false){
						 $custom_css .='font-family:'.esc_html($vw_tourism_pro_why_choose_points_para_font_family).'!important;';
					 }
					 if($vw_tourism_pro_why_choose_points_para_font_size != false){
						 $custom_css .='font-size:'.esc_html($vw_tourism_pro_why_choose_points_para_font_size).'px!important;';
					 }
				 $custom_css .='}';
			}

			$vw_tourism_pro_why_choose_points_border_color = get_theme_mod('vw_tourism_pro_why_choose_points_border_color');
	 		if($vw_tourism_pro_why_choose_points_border_color != false){
	 		 $custom_css .='.why-choose-right-box svg line{';
	 			 if($vw_tourism_pro_why_choose_points_border_color != false){
	 				 $custom_css .='stroke: '.esc_html($vw_tourism_pro_why_choose_points_border_color).'!important;';
	 			 }
	 		 $custom_css .='}';
	 		}

			/*------------------------------ Team Post ----------------------------------------*/

			$vw_tourism_pro_team_sub_heading_color = get_theme_mod('vw_tourism_pro_team_sub_heading_color');
			$vw_tourism_pro_team_sub_heading_font_family = get_theme_mod('vw_tourism_pro_team_sub_heading_font_family');
			$vw_tourism_pro_team_sub_heading_font_size = get_theme_mod('vw_tourism_pro_team_sub_heading_font_size');
				 if($vw_tourism_pro_team_sub_heading_color != false || $vw_tourism_pro_team_sub_heading_font_family != false || $vw_tourism_pro_team_sub_heading_font_size != false ){
					 $custom_css .='#team .sec-sub-heading{';
						 if($vw_tourism_pro_team_sub_heading_color != false){
							 $custom_css .='color: '.esc_html($vw_tourism_pro_team_sub_heading_color).'!important;';
						 }
						 if($vw_tourism_pro_team_sub_heading_font_family != false){
							 $custom_css .='font-family:'.esc_html($vw_tourism_pro_team_sub_heading_font_family).'!important;';
						 }
						 if($vw_tourism_pro_team_sub_heading_font_size != false){
							 $custom_css .='font-size:'.esc_html($vw_tourism_pro_team_sub_heading_font_size).'px!important;';
						 }
					 $custom_css .='}';
				 }
			$vw_tourism_pro_team_heading_color = get_theme_mod('vw_tourism_pro_team_heading_color');
			$vw_tourism_pro_team_heading_font_family = get_theme_mod('vw_tourism_pro_team_heading_font_family');
			$vw_tourism_pro_team_heading_font_size = get_theme_mod('vw_tourism_pro_team_heading_font_size');
				 if($vw_tourism_pro_team_heading_color != false || $vw_tourism_pro_team_heading_font_family != false || $vw_tourism_pro_team_heading_font_size != false ){
					 $custom_css .='#team .sec-heading{';
						 if($vw_tourism_pro_team_heading_color != false){
							 $custom_css .='color: '.esc_html($vw_tourism_pro_team_heading_color).'!important;';
						 }
						 if($vw_tourism_pro_team_heading_font_family != false){
							 $custom_css .='font-family:'.esc_html($vw_tourism_pro_team_heading_font_family).'!important;';
						 }
						 if($vw_tourism_pro_team_heading_font_size != false){
							 $custom_css .='font-size:'.esc_html($vw_tourism_pro_team_heading_font_size).'px!important;';
						 }
					 $custom_css .='}';
				 }

			 $vw_tourism_pro_team_name_color = get_theme_mod('vw_tourism_pro_team_name_color');
			 $vw_tourism_pro_team_name_font_family = get_theme_mod('vw_tourism_pro_team_name_font_family');
			 $vw_tourism_pro_team_name_font_size = get_theme_mod('vw_tourism_pro_team_name_font_size');
					if($vw_tourism_pro_team_name_color != false || $vw_tourism_pro_team_name_font_family != false || $vw_tourism_pro_team_name_font_size != false ){
						$custom_css .='.team-name a{';
							if($vw_tourism_pro_team_name_color != false){
								$custom_css .='color: '.esc_html($vw_tourism_pro_team_name_color).'!important;';
							}
							if($vw_tourism_pro_team_name_font_family != false){
								$custom_css .='font-family:'.esc_html($vw_tourism_pro_team_name_font_family).'!important;';
							}
							if($vw_tourism_pro_team_name_font_size != false){
								$custom_css .='font-size:'.esc_html($vw_tourism_pro_team_name_font_size).'px!important;';
							}
						$custom_css .='}';
					}


			$vw_tourism_pro_team_guide_color = get_theme_mod('vw_tourism_pro_team_guide_color');
			$vw_tourism_pro_team_guide_font_family = get_theme_mod('vw_tourism_pro_team_guide_font_family');
			$vw_tourism_pro_team_guide_font_size = get_theme_mod('vw_tourism_pro_team_guide_font_size');
				 if($vw_tourism_pro_team_guide_color != false || $vw_tourism_pro_team_guide_font_family != false || $vw_tourism_pro_team_guide_font_size != false ){
					 $custom_css .='.team-role{';
						 if($vw_tourism_pro_team_guide_color != false){
							 $custom_css .='color: '.esc_html($vw_tourism_pro_team_guide_color).'!important;';
						 }
						 if($vw_tourism_pro_team_guide_font_family != false){
							 $custom_css .='font-family:'.esc_html($vw_tourism_pro_team_guide_font_family).'!important;';
						 }
						 if($vw_tourism_pro_team_guide_font_size != false){
							 $custom_css .='font-size:'.esc_html($vw_tourism_pro_team_guide_font_size).'px!important;';
						 }
					 $custom_css .='}';
				 }
				 $vw_tourism_pro_team_content_bg_color = get_theme_mod('vw_tourism_pro_team_content_bg_color');
			 	if($vw_tourism_pro_team_content_bg_color != false){
			 	 $custom_css .='.team-desc{';
			 		 if($vw_tourism_pro_team_content_bg_color != false){
			 			 $custom_css .='background: '.esc_html($vw_tourism_pro_team_content_bg_color).'!important;';
			 		 }
			 	 $custom_css .='}';
			 	}
				 $vw_tourism_pro_team_content_hover_bg_color = get_theme_mod('vw_tourism_pro_team_content_hover_bg_color');
			 	if($vw_tourism_pro_team_content_hover_bg_color != false){
			 	 $custom_css .='.team-outer:hover .team-desc{';
			 		 if($vw_tourism_pro_team_content_hover_bg_color != false){
			 			 $custom_css .='background: '.esc_html($vw_tourism_pro_team_content_hover_bg_color).'!important;';
			 		 }
			 	 $custom_css .='}';
			 	}

				$vw_tourism_pro_team_content_share_icon_bg_color = get_theme_mod('vw_tourism_pro_team_content_share_icon_bg_color');
				 if( $vw_tourism_pro_team_content_share_icon_bg_color != false ){
					 $custom_css .='.share-btn-parent{';
						 if($vw_tourism_pro_team_content_share_icon_bg_color != false){
							 $custom_css .='background:'.esc_html($vw_tourism_pro_team_content_share_icon_bg_color).'!important;';
						 }

					 $custom_css .='}';
				 }

				 $vw_tourism_pro_team_content_share_icon_color = get_theme_mod('vw_tourism_pro_team_content_share_icon_color');
				if($vw_tourism_pro_team_content_share_icon_color != false){
				 $custom_css .='.share-btn-parent i{';
					 if($vw_tourism_pro_team_content_share_icon_color != false){
						 $custom_css .='color: '.esc_html($vw_tourism_pro_team_content_share_icon_color).'!important;';
					 }
				 $custom_css .='}';
				}
				 $vw_tourism_pro_team_content_social_icon_color = get_theme_mod('vw_tourism_pro_team_content_social_icon_color');
				if($vw_tourism_pro_team_content_social_icon_color != false){
				 $custom_css .='.show-icon i{';
					 if($vw_tourism_pro_team_content_social_icon_color != false){
						 $custom_css .='color: '.esc_html($vw_tourism_pro_team_content_social_icon_color).'!important;';
					 }
				 $custom_css .='}';
				}
				 $vw_tourism_pro_team_content_icon_hover_background_color = get_theme_mod('vw_tourism_pro_team_content_icon_hover_background_color');
				if($vw_tourism_pro_team_content_icon_hover_background_color != false){
				 $custom_css .='.show-icon,.team-social-box:hover .share-btn-parent{';
					 if($vw_tourism_pro_team_content_icon_hover_background_color != false){
						 $custom_css .='background: '.esc_html($vw_tourism_pro_team_content_icon_hover_background_color).'!important;';
					 }
				 $custom_css .='}';
				}
				 $vw_tourism_pro_team_card_border_color = get_theme_mod('vw_tourism_pro_team_card_border_color');
				if($vw_tourism_pro_team_card_border_color != false){
				 $custom_css .='.team-outer path{';
					 if($vw_tourism_pro_team_card_border_color != false){
						 $custom_css .='stroke: '.esc_html($vw_tourism_pro_team_card_border_color).'!important;';
					 }
				 $custom_css .='}';
				}
	/*------------------------------ Testimonial Section ----------------------------------------*/

	$vw_tourism_pro_testimonial_sub_heading_color = get_theme_mod('vw_tourism_pro_testimonial_sub_heading_color');
	$vw_tourism_pro_testimonial_sub_heading_font_family = get_theme_mod('vw_tourism_pro_testimonial_sub_heading_font_family');
	$vw_tourism_pro_testimonial_sub_heading_font_size = get_theme_mod('vw_tourism_pro_testimonial_sub_heading_font_size');
		 if($vw_tourism_pro_testimonial_sub_heading_color != false || $vw_tourism_pro_testimonial_sub_heading_font_family != false || $vw_tourism_pro_testimonial_sub_heading_font_size != false ){
			 $custom_css .='#testimonial .sec-sub-heading{';
				 if($vw_tourism_pro_testimonial_sub_heading_color != false){
					 $custom_css .='color: '.esc_html($vw_tourism_pro_testimonial_sub_heading_color).'!important;';
				 }
				 if($vw_tourism_pro_testimonial_sub_heading_font_family != false){
					 $custom_css .='font-family:'.esc_html($vw_tourism_pro_testimonial_sub_heading_font_family).'!important;';
				 }
				 if($vw_tourism_pro_testimonial_sub_heading_font_size != false){
					 $custom_css .='font-size:'.esc_html($vw_tourism_pro_testimonial_sub_heading_font_size).'px!important;';
				 }
			 $custom_css .='}';
		 }
	$vw_tourism_pro_testimonial_heading_color = get_theme_mod('vw_tourism_pro_testimonial_heading_color');
	$vw_tourism_pro_testimonial_heading_font_family = get_theme_mod('vw_tourism_pro_testimonial_heading_font_family');
	$vw_tourism_pro_testimonial_heading_font_size = get_theme_mod('vw_tourism_pro_testimonial_heading_font_size');
		 if($vw_tourism_pro_testimonial_heading_color != false || $vw_tourism_pro_testimonial_heading_font_family != false || $vw_tourism_pro_testimonial_heading_font_size != false ){
			 $custom_css .='#testimonial .sec-heading{';
				 if($vw_tourism_pro_testimonial_heading_color != false){
					 $custom_css .='color: '.esc_html($vw_tourism_pro_testimonial_heading_color).'!important;';
				 }
				 if($vw_tourism_pro_testimonial_heading_font_family != false){
					 $custom_css .='font-family:'.esc_html($vw_tourism_pro_testimonial_heading_font_family).'!important;';
				 }
				 if($vw_tourism_pro_testimonial_heading_font_size != false){
					 $custom_css .='font-size:'.esc_html($vw_tourism_pro_testimonial_heading_font_size).'px!important;';
				 }
			 $custom_css .='}';
		 }
	$vw_tourism_pro_testimonial_paragraph_color = get_theme_mod('vw_tourism_pro_testimonial_paragraph_color');
	$vw_tourism_pro_testimonial_paragraph_font_family = get_theme_mod('vw_tourism_pro_testimonial_paragraph_font_family');
	$vw_tourism_pro_testimonial_paragraph_font_size = get_theme_mod('vw_tourism_pro_testimonial_paragraph_font_size');
		 if($vw_tourism_pro_testimonial_paragraph_color != false || $vw_tourism_pro_testimonial_paragraph_font_family != false || $vw_tourism_pro_testimonial_paragraph_font_size != false ){
			 $custom_css .='#testimonial .sec-para{';
				 if($vw_tourism_pro_testimonial_paragraph_color != false){
					 $custom_css .='color: '.esc_html($vw_tourism_pro_testimonial_paragraph_color).'!important;';
				 }
				 if($vw_tourism_pro_testimonial_paragraph_font_family != false){
					 $custom_css .='font-family:'.esc_html($vw_tourism_pro_testimonial_paragraph_font_family).'!important;';
				 }
				 if($vw_tourism_pro_testimonial_paragraph_font_size != false){
					 $custom_css .='font-size:'.esc_html($vw_tourism_pro_testimonial_paragraph_font_size).'px!important;';
				 }
			 $custom_css .='}';
		 }
		 $vw_tourism_pro_testimonial_active_img_border_color = get_theme_mod('vw_tourism_pro_testimonial_active_img_border_color');
		if($vw_tourism_pro_testimonial_active_img_border_color != false){
		 $custom_css .='#testimonial .slider-nav .slick-current.slick-active img{';
			 if($vw_tourism_pro_testimonial_active_img_border_color != false){
				 $custom_css .='border-color: '.esc_html($vw_tourism_pro_testimonial_active_img_border_color).'!important;';
			 }
		 $custom_css .='}';
		}
		$vw_tourism_pro_testimonial_arrow_color = get_theme_mod('vw_tourism_pro_testimonial_arrow_color');
	  $vw_tourism_pro_testimonial_arrow_bg_color = get_theme_mod('vw_tourism_pro_testimonial_arrow_bg_color');

	 	if($vw_tourism_pro_testimonial_arrow_color != false || $vw_tourism_pro_testimonial_arrow_bg_color != false){
	 		$custom_css .='#testimonial .slider-nav i{';
	 			if($vw_tourism_pro_testimonial_arrow_color != false){
	 				$custom_css .='color: '.esc_html($vw_tourism_pro_testimonial_arrow_color).'!important;';
	 			}
	 			if($vw_tourism_pro_testimonial_arrow_bg_color != false){
	 				$custom_css .='background: '.esc_html($vw_tourism_pro_testimonial_arrow_bg_color).'!important;';
	 			}
	 		$custom_css .='}';
	 	}
	$vw_tourism_pro_testimonial_quote_color = get_theme_mod('vw_tourism_pro_testimonial_quote_color');
	 if($vw_tourism_pro_testimonial_quote_color != false){
	  $custom_css .='.test-quote-svg path{';
	 	 if($vw_tourism_pro_testimonial_quote_color != false){
	 		 $custom_css .='fill: '.esc_html($vw_tourism_pro_testimonial_quote_color).'!important;';
	 	 }
	  $custom_css .='}';
	 }
	$vw_tourism_pro_testimonial_comment_color = get_theme_mod('vw_tourism_pro_testimonial_comment_color');
	 if($vw_tourism_pro_testimonial_comment_color != false){
	  $custom_css .='.test-comment-svg path{';
	 	 if($vw_tourism_pro_testimonial_comment_color != false){
	 		 $custom_css .='fill: '.esc_html($vw_tourism_pro_testimonial_comment_color).'!important;';
	 	 }
	  $custom_css .='}';
	 }
	$vw_tourism_pro_testimonial_card_border_color = get_theme_mod('vw_tourism_pro_testimonial_card_border_color');
	 if($vw_tourism_pro_testimonial_card_border_color != false){
	  $custom_css .='.test-svg #location_1_ path{';
	 	 if($vw_tourism_pro_testimonial_card_border_color != false){
	 		 $custom_css .='fill: '.esc_html($vw_tourism_pro_testimonial_card_border_color).'!important;';
	 	 }
	  $custom_css .='}';
	  $custom_css .='.test-svg #Path_7669{';
	 	 if($vw_tourism_pro_testimonial_card_border_color != false){
	 		 $custom_css .='stroke: '.esc_html($vw_tourism_pro_testimonial_card_border_color).'!important;';
	 	 }
	  $custom_css .='}';

	 }

	 $vw_tourism_pro_testimonial_content_heading_color = get_theme_mod('vw_tourism_pro_testimonial_content_heading_color');
	 $vw_tourism_pro_testimonial_content_heading_font_family = get_theme_mod('vw_tourism_pro_testimonial_content_heading_font_family');
	 $vw_tourism_pro_testimonial_content_heading_font_size = get_theme_mod('vw_tourism_pro_testimonial_content_heading_font_size');
		if($vw_tourism_pro_testimonial_content_heading_color != false || $vw_tourism_pro_testimonial_content_heading_font_family != false || $vw_tourism_pro_testimonial_content_heading_font_size != false ){
			$custom_css .='#testimonial .testi-title a{';
				if($vw_tourism_pro_testimonial_content_heading_color != false){
					$custom_css .='color: '.esc_html($vw_tourism_pro_testimonial_content_heading_color).'!important;';
				}
				if($vw_tourism_pro_testimonial_content_heading_font_family != false){
					$custom_css .='font-family:'.esc_html($vw_tourism_pro_testimonial_content_heading_font_family).'!important;';
				}
				if($vw_tourism_pro_testimonial_content_heading_font_size != false){
					$custom_css .='font-size:'.esc_html($vw_tourism_pro_testimonial_content_heading_font_size).'px!important;';
				}
			$custom_css .='}';
		}
	 $vw_tourism_pro_testimonial_content_designation_color = get_theme_mod('vw_tourism_pro_testimonial_content_designation_color');
	 $vw_tourism_pro_testimonial_content_designation_font_family = get_theme_mod('vw_tourism_pro_testimonial_content_designation_font_family');
	 $vw_tourism_pro_testimonial_content_designation_font_size = get_theme_mod('vw_tourism_pro_testimonial_content_designation_font_size');
		if($vw_tourism_pro_testimonial_content_designation_color != false || $vw_tourism_pro_testimonial_content_designation_font_family != false || $vw_tourism_pro_testimonial_content_designation_font_size != false ){
			$custom_css .='#testimonial .testi-desi{';
				if($vw_tourism_pro_testimonial_content_designation_color != false){
					$custom_css .='color: '.esc_html($vw_tourism_pro_testimonial_content_designation_color).'!important;';
				}
				if($vw_tourism_pro_testimonial_content_designation_font_family != false){
					$custom_css .='font-family:'.esc_html($vw_tourism_pro_testimonial_content_designation_font_family).'!important;';
				}
				if($vw_tourism_pro_testimonial_content_designation_font_size != false){
					$custom_css .='font-size:'.esc_html($vw_tourism_pro_testimonial_content_designation_font_size).'px!important;';
				}
			$custom_css .='}';
		}
	 $vw_tourism_pro_testimonial_content_para_color = get_theme_mod('vw_tourism_pro_testimonial_content_para_color');
	 $vw_tourism_pro_testimonial_content_para_font_family = get_theme_mod('vw_tourism_pro_testimonial_content_para_font_family');
	 $vw_tourism_pro_testimonial_content_para_font_size = get_theme_mod('vw_tourism_pro_testimonial_content_para_font_size');
		if($vw_tourism_pro_testimonial_content_para_color != false || $vw_tourism_pro_testimonial_content_para_font_family != false || $vw_tourism_pro_testimonial_content_para_font_size != false ){
			$custom_css .='.slider-for .test-content{';
				if($vw_tourism_pro_testimonial_content_para_color != false){
					$custom_css .='color: '.esc_html($vw_tourism_pro_testimonial_content_para_color).'!important;';
				}
				if($vw_tourism_pro_testimonial_content_para_font_family != false){
					$custom_css .='font-family:'.esc_html($vw_tourism_pro_testimonial_content_para_font_family).'!important;';
				}
				if($vw_tourism_pro_testimonial_content_para_font_size != false){
					$custom_css .='font-size:'.esc_html($vw_tourism_pro_testimonial_content_para_font_size).'px!important;';
				}
			$custom_css .='}';
		}
		$vw_tourism_pro_testimonial_content_rating_color = get_theme_mod('vw_tourism_pro_testimonial_content_rating_color');
		 if($vw_tourism_pro_testimonial_content_rating_color != false){
		  $custom_css .='.testi-star i{';
		 	 if($vw_tourism_pro_testimonial_content_rating_color != false){
		 		 $custom_css .='color: '.esc_html($vw_tourism_pro_testimonial_content_rating_color).'!important;';
		 	 }
		  $custom_css .='}';
		 }

	 	$vw_tourism_pro_testimonial_content_rating_count_color = get_theme_mod('vw_tourism_pro_testimonial_content_rating_count_color');
		$vw_tourism_pro_testimonial_content_rating_count_font_family = get_theme_mod('vw_tourism_pro_testimonial_content_rating_count_font_family');
		$vw_tourism_pro_testimonial_content_rating_count_font_size = get_theme_mod('vw_tourism_pro_testimonial_content_rating_count_font_size');
		 if($vw_tourism_pro_testimonial_content_rating_count_color != false || $vw_tourism_pro_testimonial_content_rating_count_font_family != false || $vw_tourism_pro_testimonial_content_rating_count_font_size != false ){
			 $custom_css .='.rating-count{';
				 if($vw_tourism_pro_testimonial_content_rating_count_color != false){
					 $custom_css .='color: '.esc_html($vw_tourism_pro_testimonial_content_rating_count_color).'!important;';
				 }
				 if($vw_tourism_pro_testimonial_content_rating_count_font_family != false){
					 $custom_css .='font-family:'.esc_html($vw_tourism_pro_testimonial_content_rating_count_font_family).'!important;';
				 }
				 if($vw_tourism_pro_testimonial_content_rating_count_font_size != false){
					 $custom_css .='font-size:'.esc_html($vw_tourism_pro_testimonial_content_rating_count_font_size).'px!important;';
				 }
			 $custom_css .='}';
		 }

		 $vw_tourism_pro_testimonial_content_background_color = get_theme_mod('vw_tourism_pro_testimonial_content_background_color');
			if($vw_tourism_pro_testimonial_content_background_color != false){
			 $custom_css .='#testimonial .test-content-main{';
				if($vw_tourism_pro_testimonial_content_background_color != false){
					$custom_css .='background: '.esc_html($vw_tourism_pro_testimonial_content_background_color).'!important;';
				}
			 $custom_css .='}';
			}
		 $vw_tourism_pro_testimonial_content_img_bg_color = get_theme_mod('vw_tourism_pro_testimonial_content_img_bg_color');
			if($vw_tourism_pro_testimonial_content_img_bg_color != false){
			 $custom_css .='#testimonial .slider-for img{';
				if($vw_tourism_pro_testimonial_content_img_bg_color != false){
					$custom_css .='border-color: '.esc_html($vw_tourism_pro_testimonial_content_img_bg_color).'!important;';
				}
			 $custom_css .='}';
			}




	/*------------------------------ Latest Post ----------------------------------------*/

$vw_tourism_pro_blog_sub_heading_color = get_theme_mod('vw_tourism_pro_blog_sub_heading_color');
$vw_tourism_pro_blog_sub_heading_font_family = get_theme_mod('vw_tourism_pro_blog_sub_heading_font_family');
$vw_tourism_pro_blog_sub_heading_font_size = get_theme_mod('vw_tourism_pro_blog_sub_heading_font_size');
	 if($vw_tourism_pro_blog_sub_heading_color != false || $vw_tourism_pro_blog_sub_heading_font_family != false || $vw_tourism_pro_blog_sub_heading_font_size != false ){
		 $custom_css .='#Blog .sec-sub-heading{';
			 if($vw_tourism_pro_blog_sub_heading_color != false){
				 $custom_css .='color: '.esc_html($vw_tourism_pro_blog_sub_heading_color).'!important;';
			 }
			 if($vw_tourism_pro_blog_sub_heading_font_family != false){
				 $custom_css .='font-family:'.esc_html($vw_tourism_pro_blog_sub_heading_font_family).'!important;';
			 }
			 if($vw_tourism_pro_blog_sub_heading_font_size != false){
				 $custom_css .='font-size:'.esc_html($vw_tourism_pro_blog_sub_heading_font_size).'px!important;';
			 }
		 $custom_css .='}';
	 }
$vw_tourism_pro_blog_heading_color = get_theme_mod('vw_tourism_pro_blog_heading_color');
$vw_tourism_pro_blog_heading_font_family = get_theme_mod('vw_tourism_pro_blog_heading_font_family');
$vw_tourism_pro_blog_heading_font_size = get_theme_mod('vw_tourism_pro_blog_heading_font_size');
	 if($vw_tourism_pro_blog_heading_color != false || $vw_tourism_pro_blog_heading_font_family != false || $vw_tourism_pro_blog_heading_font_size != false ){
		 $custom_css .='#Blog .sec-heading{';
			 if($vw_tourism_pro_blog_heading_color != false){
				 $custom_css .='color: '.esc_html($vw_tourism_pro_blog_heading_color).'!important;';
			 }
			 if($vw_tourism_pro_blog_heading_font_family != false){
				 $custom_css .='font-family:'.esc_html($vw_tourism_pro_blog_heading_font_family).'!important;';
			 }
			 if($vw_tourism_pro_blog_heading_font_size != false){
				 $custom_css .='font-size:'.esc_html($vw_tourism_pro_blog_heading_font_size).'px!important;';
			 }
		 $custom_css .='}';
	 }

	$vw_tourism_pro_our_blog_left_content_date_comment_color = get_theme_mod('vw_tourism_pro_our_blog_left_content_date_comment_color');
 	$vw_tourism_pro_our_blog_left_content_date_comment_font_family = get_theme_mod('vw_tourism_pro_our_blog_left_content_date_comment_font_family');
 	$vw_tourism_pro_our_blog_left_content_date_comment_font_size = get_theme_mod('vw_tourism_pro_our_blog_left_content_date_comment_font_size');
		 if($vw_tourism_pro_our_blog_left_content_date_comment_color != false || $vw_tourism_pro_our_blog_left_content_date_comment_font_family != false || $vw_tourism_pro_our_blog_left_content_date_comment_font_size != false ){
			 $custom_css .='.left-blog-content .blog-inner-meta, .left-blog-content  .blog-inner-meta a,.left-blog-content .post-month{';
				 if($vw_tourism_pro_our_blog_left_content_date_comment_color != false){
					 $custom_css .='color: '.esc_html($vw_tourism_pro_our_blog_left_content_date_comment_color).'!important;';
				 }
				 if($vw_tourism_pro_our_blog_left_content_date_comment_font_family != false){
					 $custom_css .='font-family:'.esc_html($vw_tourism_pro_our_blog_left_content_date_comment_font_family).';';
				 }
				 if($vw_tourism_pro_our_blog_left_content_date_comment_font_size != false){
					 $custom_css .='font-size:'.esc_html($vw_tourism_pro_our_blog_left_content_date_comment_font_size).'px!important;';
				 }
			 $custom_css .='}';
	 }

	 $vw_tourism_pro_our_blog_left_content_date_comment_icon_color = get_theme_mod('vw_tourism_pro_our_blog_left_content_date_comment_icon_color');
		if($vw_tourism_pro_our_blog_left_content_date_comment_icon_color != false){
		 $custom_css .='.left-blog-content .blog-inner-meta i{';
			if($vw_tourism_pro_our_blog_left_content_date_comment_icon_color != false){
				$custom_css .='color: '.esc_html($vw_tourism_pro_our_blog_left_content_date_comment_icon_color).'!important;';
			}
		 $custom_css .='}';
		}

		$vw_tourism_pro_our_blog_left_content_blog_title_color = get_theme_mod('vw_tourism_pro_our_blog_left_content_blog_title_color');
	 	$vw_tourism_pro_our_blog_left_content_blog_title_font_family = get_theme_mod('vw_tourism_pro_our_blog_left_content_blog_title_font_family');
	 	$vw_tourism_pro_our_blog_left_content_blog_title_font_size = get_theme_mod('vw_tourism_pro_our_blog_left_content_blog_title_font_size');
			 if($vw_tourism_pro_our_blog_left_content_blog_title_color != false || $vw_tourism_pro_our_blog_left_content_blog_title_font_family != false || $vw_tourism_pro_our_blog_left_content_blog_title_font_size != false ){
				 $custom_css .='#Blog .left-blog-content .blog-title a{';
					 if($vw_tourism_pro_our_blog_left_content_blog_title_color != false){
						 $custom_css .='color: '.esc_html($vw_tourism_pro_our_blog_left_content_blog_title_color).'!important;';
					 }
					 if($vw_tourism_pro_our_blog_left_content_blog_title_font_family != false){
						 $custom_css .='font-family:'.esc_html($vw_tourism_pro_our_blog_left_content_blog_title_font_family).';';
					 }
					 if($vw_tourism_pro_our_blog_left_content_blog_title_font_size != false){
						 $custom_css .='font-size:'.esc_html($vw_tourism_pro_our_blog_left_content_blog_title_font_size).'px!important;';
					 }
				 $custom_css .='}';
		 }
		$vw_tourism_pro_our_blog_left_content_blog_desc_color = get_theme_mod('vw_tourism_pro_our_blog_left_content_blog_desc_color');
	 	$vw_tourism_pro_our_blog_left_content_blog_desc_font_family = get_theme_mod('vw_tourism_pro_our_blog_left_content_blog_desc_font_family');
	 	$vw_tourism_pro_our_blog_left_content_blog_desc_font_size = get_theme_mod('vw_tourism_pro_our_blog_left_content_blog_desc_font_size');
			 if($vw_tourism_pro_our_blog_left_content_blog_desc_color != false || $vw_tourism_pro_our_blog_left_content_blog_desc_font_family != false || $vw_tourism_pro_our_blog_left_content_blog_desc_font_size != false ){
				 $custom_css .='#Blog .left-blog-content  p{';
					 if($vw_tourism_pro_our_blog_left_content_blog_desc_color != false){
						 $custom_css .='color: '.esc_html($vw_tourism_pro_our_blog_left_content_blog_desc_color).'!important;';
					 }
					 if($vw_tourism_pro_our_blog_left_content_blog_desc_font_family != false){
						 $custom_css .='font-family:'.esc_html($vw_tourism_pro_our_blog_left_content_blog_desc_font_family).';';
					 }
					 if($vw_tourism_pro_our_blog_left_content_blog_desc_font_size != false){
						 $custom_css .='font-size:'.esc_html($vw_tourism_pro_our_blog_left_content_blog_desc_font_size).'px!important;';
					 }
				 $custom_css .='}';
		 }

		 $vw_tourism_pro_our_blog_left_content_view_more_btn_color = get_theme_mod('vw_tourism_pro_our_blog_left_content_view_more_btn_color');
	  	$vw_tourism_pro_our_blog_left_content_view_more_btn_font_family = get_theme_mod('vw_tourism_pro_our_blog_left_content_view_more_btn_font_family');
	  	$vw_tourism_pro_our_blog_left_content_view_more_btn_font_size = get_theme_mod('vw_tourism_pro_our_blog_left_content_view_more_btn_font_size');
	  	$vw_tourism_pro_our_blog_left_content_view_more_btn_bg_color = get_theme_mod('vw_tourism_pro_our_blog_left_content_view_more_btn_bg_color');
	  	 if($vw_tourism_pro_our_blog_left_content_view_more_btn_color != false || $vw_tourism_pro_our_blog_left_content_view_more_btn_font_family != false || $vw_tourism_pro_our_blog_left_content_view_more_btn_font_size != false || $vw_tourism_pro_our_blog_left_content_view_more_btn_bg_color != false ){
	  		 $custom_css .='#Blog .theme-btn-main,.vertical-blog-img-main .theme-btn-main{';
	  			 if($vw_tourism_pro_our_blog_left_content_view_more_btn_color != false){
	  				 $custom_css .='color: '.esc_html($vw_tourism_pro_our_blog_left_content_view_more_btn_color).'!important;';
	  			 }
	  			 if($vw_tourism_pro_our_blog_left_content_view_more_btn_font_family != false){
	  				 $custom_css .='font-family:'.esc_html($vw_tourism_pro_our_blog_left_content_view_more_btn_font_family).'!important;';
	  			 }
	  			 if($vw_tourism_pro_our_blog_left_content_view_more_btn_font_size != false){
	  				 $custom_css .='font-size:'.esc_html($vw_tourism_pro_our_blog_left_content_view_more_btn_font_size).'px!important;';
	  			 }
	 			 if($vw_tourism_pro_our_blog_left_content_view_more_btn_bg_color != false){
	 					 $custom_css .='background: '.esc_html($vw_tourism_pro_our_blog_left_content_view_more_btn_bg_color).'!important;';
	 				 }
	  		 $custom_css .='}';
	  	 }
	 	 $vw_tourism_pro_our_blog_left_content_view_more_btn_arrow_color = get_theme_mod('vw_tourism_pro_our_blog_left_content_view_more_btn_arrow_color');
	  	if($vw_tourism_pro_our_blog_left_content_view_more_btn_arrow_color != false){
	  		$custom_css .='#Blog .theme-btn-line-right,#Blog .theme-btn-line-left, .vertical-blog-img-main .theme-btn-line-left, .vertical-blog-img-main .theme-btn-line-right{';
	  		 if($vw_tourism_pro_our_blog_left_content_view_more_btn_arrow_color != false){
	  			 $custom_css .='background: '.esc_html($vw_tourism_pro_our_blog_left_content_view_more_btn_arrow_color).'!important;';
	  		 }
	  		 $custom_css .='}';
	  		 $custom_css .='#Blog .theme-btn-main i{';
	  		 if($vw_tourism_pro_our_blog_left_content_view_more_btn_arrow_color != false){
	  			 $custom_css .='color: '.esc_html($vw_tourism_pro_our_blog_left_content_view_more_btn_arrow_color).'!important;';
	  		 }
	  		$custom_css .='}';
	  	}


	 	 $vw_tourism_pro_our_blog_left_content_view_more_btn_hover_bg_color = get_theme_mod('vw_tourism_pro_our_blog_left_content_view_more_btn_hover_bg_color');
	 		if($vw_tourism_pro_our_blog_left_content_view_more_btn_hover_bg_color != false){
	 			$custom_css .='#Blog .theme-btn-main:hover,.vertical-blog-img-main .theme-btn-main:hover {';
	 				if($vw_tourism_pro_our_blog_left_content_view_more_btn_hover_bg_color != false){
	 					$custom_css .='background: '.esc_html($vw_tourism_pro_our_blog_left_content_view_more_btn_hover_bg_color).'!important;';
	 				}
	 			$custom_css .='}';
	 		}

		$vw_tourism_pro_our_blog_right_content_date_comment_color = get_theme_mod('vw_tourism_pro_our_blog_right_content_date_comment_color');
		$vw_tourism_pro_our_blog_right_content_date_comment_font_family = get_theme_mod('vw_tourism_pro_our_blog_right_content_date_comment_font_family');
		$vw_tourism_pro_our_blog_right_content_date_comment_font_size = get_theme_mod('vw_tourism_pro_our_blog_right_content_date_comment_font_size');
			 if($vw_tourism_pro_our_blog_right_content_date_comment_color != false || $vw_tourism_pro_our_blog_right_content_date_comment_font_family != false || $vw_tourism_pro_our_blog_right_content_date_comment_font_size != false ){
				 $custom_css .='.vertical-blog-img-main .post-month, .vertical-blog-img-main  .post-tags a,.vertical-blog-img-main .news-author,.blog-main .blog-inner-meta, .blog-main .blog-inner-meta a{';
					 if($vw_tourism_pro_our_blog_right_content_date_comment_color != false){
						 $custom_css .='color: '.esc_html($vw_tourism_pro_our_blog_right_content_date_comment_color).'!important;';
					 }
					 if($vw_tourism_pro_our_blog_right_content_date_comment_font_family != false){
						 $custom_css .='font-family:'.esc_html($vw_tourism_pro_our_blog_right_content_date_comment_font_family).';';
					 }
					 if($vw_tourism_pro_our_blog_right_content_date_comment_font_size != false){
						 $custom_css .='font-size:'.esc_html($vw_tourism_pro_our_blog_right_content_date_comment_font_size).'px!important;';
					 }
				 $custom_css .='}';
		 }

		 $vvw_tourism_pro_our_blog_right_content_date_comment_icon_color = get_theme_mod('vvw_tourism_pro_our_blog_right_content_date_comment_icon_color');
			if($vvw_tourism_pro_our_blog_right_content_date_comment_icon_color != false){
			 $custom_css .='.vertical-blog-img-main i{';
				if($vvw_tourism_pro_our_blog_right_content_date_comment_icon_color != false){
					$custom_css .='color: '.esc_html($vvw_tourism_pro_our_blog_right_content_date_comment_icon_color).'!important;';
				}
			 $custom_css .='}';
			}

			$vw_tourism_pro_our_blog_right_content_title_color = get_theme_mod('vw_tourism_pro_our_blog_right_content_title_color');
			$vw_tourism_pro_our_blog_right_content_title_font_family = get_theme_mod('vw_tourism_pro_our_blog_right_content_title_font_family');
			$vw_tourism_pro_our_blog_right_content_title_font_size = get_theme_mod('vw_tourism_pro_our_blog_right_content_title_font_size');
				 if($vw_tourism_pro_our_blog_right_content_title_color != false || $vw_tourism_pro_our_blog_right_content_title_font_family != false || $vw_tourism_pro_our_blog_right_content_title_font_size != false ){
					 $custom_css .='.vertical-blog-img-main .blog-title a{';
						 if($vw_tourism_pro_our_blog_right_content_title_color != false){
							 $custom_css .='color: '.esc_html($vw_tourism_pro_our_blog_right_content_title_color).'!important;';
						 }
						 if($vw_tourism_pro_our_blog_right_content_title_font_family != false){
							 $custom_css .='font-family:'.esc_html($vw_tourism_pro_our_blog_right_content_title_font_family).';';
						 }
						 if($vw_tourism_pro_our_blog_right_content_title_font_size != false){
							 $custom_css .='font-size:'.esc_html($vw_tourism_pro_our_blog_right_content_title_font_size).'px!important;';
						 }
					 $custom_css .='}';
			 }
			$vw_tourism_pro_our_blog_right_content_desc_color = get_theme_mod('vw_tourism_pro_our_blog_right_content_desc_color');
			$vw_tourism_pro_our_blog_right_content_desc_font_family = get_theme_mod('vw_tourism_pro_our_blog_right_content_desc_font_family');
			$vw_tourism_pro_our_blog_right_content_desc_font_size = get_theme_mod('vw_tourism_pro_our_blog_right_content_desc_font_size');
			 if($vw_tourism_pro_our_blog_right_content_desc_color != false || $vw_tourism_pro_our_blog_right_content_desc_font_family != false || $vw_tourism_pro_our_blog_right_content_desc_font_size != false ){
				 $custom_css .='.testi-vertical .blog-content p, .vertical-blog-img-main .blog-content p{';
					 if($vw_tourism_pro_our_blog_right_content_desc_color != false){
						 $custom_css .='color: '.esc_html($vw_tourism_pro_our_blog_right_content_desc_color).'!important;';
					 }
					 if($vw_tourism_pro_our_blog_right_content_desc_font_family != false){
						 $custom_css .='font-family:'.esc_html($vw_tourism_pro_our_blog_right_content_desc_font_family).';';
					 }
					 if($vw_tourism_pro_our_blog_right_content_desc_font_size != false){
						 $custom_css .='font-size:'.esc_html($vw_tourism_pro_our_blog_right_content_desc_font_size).'px!important;';
					 }
				 $custom_css .='}';
		 }
 		 $vw_tourism_pro_our_blog_arrow_color = get_theme_mod('vw_tourism_pro_our_blog_arrow_color');
 		 $vw_tourism_pro_our_blog_arrow_bg_color = get_theme_mod('vw_tourism_pro_our_blog_arrow_bg_color');
 			if($vw_tourism_pro_our_blog_arrow_color != false || $vw_tourism_pro_our_blog_arrow_bg_color != false){
 			 $custom_css .='.testi-vertical i.fa-solid.fa-chevron-up.slick-arrow, .testi-vertical i.fa-solid.fa-chevron-down.slick-arrow {';
 				if($vw_tourism_pro_our_blog_arrow_color != false){
 					$custom_css .='color: '.esc_html($vw_tourism_pro_our_blog_arrow_color).'!important;';
 				}
 				if($vw_tourism_pro_our_blog_arrow_bg_color != false){
 					$custom_css .='background: '.esc_html($vw_tourism_pro_our_blog_arrow_bg_color).'!important;';
 				}
 			 $custom_css .='}';
 			}

	/*------------------------------ Footer----------------------------------------*/

	/*------------------------------ Footer Menu----------------------------------------*/

	$vw_tourism_pro_newsletter_form_title_color = get_theme_mod('vw_tourism_pro_newsletter_form_title_color');
	$vw_tourism_pro_newsletter_form_title_font_family = get_theme_mod('vw_tourism_pro_newsletter_form_title_font_family');
	$vw_tourism_pro_newsletter_form_title_font_size = get_theme_mod('vw_tourism_pro_newsletter_form_title_font_size');
	if($vw_tourism_pro_newsletter_form_title_color != false || $vw_tourism_pro_newsletter_form_title_font_family != false || $vw_tourism_pro_newsletter_form_title_font_size != false){
		$custom_css .='.footer-contact-inner h3{';
			if($vw_tourism_pro_newsletter_form_title_color != false){
				$custom_css .='color: '.esc_html($vw_tourism_pro_newsletter_form_title_color).'!important;';
			}
			if($vw_tourism_pro_newsletter_form_title_font_family != false){
				$custom_css .='font-family:'.esc_html($vw_tourism_pro_newsletter_form_title_font_family).'!important;';
			}
			if($vw_tourism_pro_newsletter_form_title_font_size != false){
				$custom_css .='font-size:'.esc_html($vw_tourism_pro_newsletter_form_title_font_size).'px !important;';
			}
		$custom_css .='}';
	}

	$vw_tourism_pro_newsletter_form_para_color = get_theme_mod('vw_tourism_pro_newsletter_form_para_color');
	$vw_tourism_pro_newsletter_form_para_font_family = get_theme_mod('vw_tourism_pro_newsletter_form_para_font_family');
	$vw_tourism_pro_newsletter_form_para_font_size = get_theme_mod('vw_tourism_pro_newsletter_form_para_font_size');
	if($vw_tourism_pro_newsletter_form_para_color != false || $vw_tourism_pro_newsletter_form_para_font_family != false || $vw_tourism_pro_newsletter_form_para_font_size != false){
		$custom_css .='#footer-inner p{';
			if($vw_tourism_pro_newsletter_form_para_color != false){
				$custom_css .='color: '.esc_html($vw_tourism_pro_newsletter_form_para_color).'!important;';
			}
			if($vw_tourism_pro_newsletter_form_para_font_family != false){
				$custom_css .='font-family:'.esc_html($vw_tourism_pro_newsletter_form_para_font_family).'!important;';
			}
			if($vw_tourism_pro_newsletter_form_para_font_size != false){
				$custom_css .='font-size:'.esc_html($vw_tourism_pro_newsletter_form_para_font_size).'px !important;';
			}
		$custom_css .='}';
	}

	$vw_tourism_pro_newsletter_form_btn_color = get_theme_mod('vw_tourism_pro_newsletter_form_btn_color');
	$vw_tourism_pro_newsletter_form_btn_font_family = get_theme_mod('vw_tourism_pro_newsletter_form_btn_font_family');
	$vw_tourism_pro_newsletter_form_btn_font_size = get_theme_mod('vw_tourism_pro_newsletter_form_btn_font_size');
	 if($vw_tourism_pro_newsletter_form_btn_color != false || $vw_tourism_pro_newsletter_form_btn_font_family != false || $vw_tourism_pro_newsletter_form_btn_font_size != false ){
		 $custom_css .='#footer-inner .theme-btn-text input{';
			 if($vw_tourism_pro_newsletter_form_btn_color != false){
				 $custom_css .='color: '.esc_html($vw_tourism_pro_newsletter_form_btn_color).'!important;';
			 }
			 if($vw_tourism_pro_newsletter_form_btn_font_family != false){
				 $custom_css .='font-family:'.esc_html($vw_tourism_pro_newsletter_form_btn_font_family).'!important;';
			 }
			 if($vw_tourism_pro_newsletter_form_btn_font_size != false){
				 $custom_css .='font-size:'.esc_html($vw_tourism_pro_newsletter_form_btn_font_size).'px!important;';
			 }

		 $custom_css .='}';
	 }
	 $vw_tourism_pro_newsletter_form_btn_bg_color = get_theme_mod('vw_tourism_pro_newsletter_form_btn_bg_color');
		if($vw_tourism_pro_newsletter_form_btn_bg_color != false){
			$custom_css .='#newsletter-footer .theme-btn-main{';
				if($vw_tourism_pro_newsletter_form_btn_bg_color != false){
					$custom_css .='background: '.esc_html($vw_tourism_pro_newsletter_form_btn_bg_color).'!important;';
				}
			$custom_css .='}';
		}
	 $vw_tourism_pro_newsletter_form_btn_arrow_color = get_theme_mod('vw_tourism_pro_newsletter_form_btn_arrow_color');
	if($vw_tourism_pro_newsletter_form_btn_arrow_color != false){
		$custom_css .='#footer-inner .theme-btn-block .theme-btn-line-right, #footer-inner .theme-btn-block .theme-btn-line-left{';
		 if($vw_tourism_pro_newsletter_form_btn_arrow_color != false){
			 $custom_css .='background: '.esc_html($vw_tourism_pro_newsletter_form_btn_arrow_color).'!important;';
		 }
		 $custom_css .='}';
		 $custom_css .='#footer-inner .theme-btn-main i{';
		 if($vw_tourism_pro_newsletter_form_btn_arrow_color != false){
			 $custom_css .='color: '.esc_html($vw_tourism_pro_newsletter_form_btn_arrow_color).'!important;';
		 }
		$custom_css .='}';
	}

 $vw_tourism_pro_newsletter_form_btn_hover_bg_color = get_theme_mod('vw_tourism_pro_newsletter_form_btn_hover_bg_color');
	if($vw_tourism_pro_newsletter_form_btn_hover_bg_color != false){
		$custom_css .='#footer-inner .theme-btn-main:hover{';
			if($vw_tourism_pro_newsletter_form_btn_hover_bg_color != false){
				$custom_css .='background: '.esc_html($vw_tourism_pro_newsletter_form_btn_hover_bg_color).'!important;';
			}
		$custom_css .='}';
	}
	$vw_tourism_pro_footer_paragraph_color = get_theme_mod('vw_tourism_pro_footer_paragraph_color');
	$vw_tourism_pro_footer_paragraph_font_family = get_theme_mod('vw_tourism_pro_footer_paragraph_font_family');
	$vw_tourism_pro_footer_paragraph_font_size = get_theme_mod('vw_tourism_pro_footer_paragraph_font_size');
	if($vw_tourism_pro_footer_paragraph_color != false || $vw_tourism_pro_footer_paragraph_font_family != false || $vw_tourism_pro_footer_paragraph_font_size != false){
		$custom_css .='#contact-page .theme-btn-main p{';
			if($vw_tourism_pro_footer_paragraph_color != false){
				$custom_css .='color: '.esc_html($vw_tourism_pro_footer_paragraph_color).'!important;';
			}
			if($vw_tourism_pro_footer_paragraph_font_family != false){
				$custom_css .='font-family:'.esc_html($vw_tourism_pro_footer_paragraph_font_family).'!important;';
			}
			if($vw_tourism_pro_footer_paragraph_font_size != false){
				$custom_css .='font-size:'.esc_html($vw_tourism_pro_footer_paragraph_font_size).'px !important;';
			}
		$custom_css .='}';
	}

	$vw_tourism_pro_footer_icon_color = get_theme_mod('vw_tourism_pro_footer_icon_color');
	$vw_tourism_pro_footer_icon_font_size = get_theme_mod('vw_tourism_pro_footer_icon_font_size');
	$vw_tourism_pro_footer_icon_border_color = get_theme_mod('vw_tourism_pro_footer_icon_border_color');
	if($vw_tourism_pro_footer_icon_color != false || $vw_tourism_pro_footer_paragraph_font_family != false || $vw_tourism_pro_footer_icon_font_size != false || $vw_tourism_pro_footer_icon_border_color != false ){
		$custom_css .='#footer .social_widget i{';
			if($vw_tourism_pro_footer_icon_color != false){
				$custom_css .='color: '.esc_html($vw_tourism_pro_footer_icon_color).'!important;';
			}
			if($vw_tourism_pro_footer_icon_border_color != false){
				$custom_css .='border-color: '.esc_html($vw_tourism_pro_footer_icon_border_color).'!important;';
			}
			if($vw_tourism_pro_footer_icon_font_size != false){
				$custom_css .='font-size:'.esc_html($vw_tourism_pro_footer_icon_font_size).'px !important;';
			}
		$custom_css .='}';
	}

	$vw_tourism_pro_footer_icon_hover_color = get_theme_mod('vw_tourism_pro_footer_icon_hover_color');
 	if($vw_tourism_pro_footer_icon_hover_color != false){
 		$custom_css .='#footer .custom-social-icons a:hover::after{';
 			if($vw_tourism_pro_footer_icon_hover_color != false){
 				$custom_css .='border-color: '.esc_html($vw_tourism_pro_footer_icon_hover_color).'!important;';
 			}
 		$custom_css .='}';
 		$custom_css .='#footer .custom-social-icons a:hover i{';
 			if($vw_tourism_pro_footer_icon_hover_color != false){
 				$custom_css .='border-color: '.esc_html($vw_tourism_pro_footer_icon_hover_color).'!important;';
 			}
 		$custom_css .='}';
 		$custom_css .='#footer .custom-social-icons a:hover i{';
 			if($vw_tourism_pro_footer_icon_hover_color != false){
 				$custom_css .='color: '.esc_html($vw_tourism_pro_footer_icon_hover_color).'!important;';
 			}
 		$custom_css .='}';
 	}


	$vw_tourism_pro_footer_column_heading_color = get_theme_mod('vw_tourism_pro_footer_column_heading_color');
	$vw_tourism_pro_footer_column_heading_font_family = get_theme_mod('vw_tourism_pro_footer_column_heading_font_family');
	$vw_tourism_pro_footer_column_heading_font_size = get_theme_mod('vw_tourism_pro_footer_column_heading_font_size');
	if($vw_tourism_pro_footer_column_heading_color != false || $vw_tourism_pro_footer_column_heading_font_family != false || $vw_tourism_pro_footer_column_heading_font_size != false){
		$custom_css .='#footer .widget-title{';
			if($vw_tourism_pro_footer_column_heading_color != false){
				$custom_css .='color: '.esc_html($vw_tourism_pro_footer_column_heading_color).'!important;';
			}
			if($vw_tourism_pro_footer_column_heading_font_family != false){
				$custom_css .='font-family:'.esc_html($vw_tourism_pro_footer_column_heading_font_family).'!important;';
			}
			if($vw_tourism_pro_footer_column_heading_font_size != false){
				$custom_css .='font-size:'.esc_html($vw_tourism_pro_footer_column_heading_font_size).'px !important;';
			}
		$custom_css .='}';
	}
	$vw_tourism_pro_footer_column_menu_items_color = get_theme_mod('vw_tourism_pro_footer_column_menu_items_color');
	$vw_tourism_pro_footer_column_menu_items_font_family = get_theme_mod('vw_tourism_pro_footer_column_menu_items_font_family');
	$vw_tourism_pro_footer_column_menu_items_font_size = get_theme_mod('vw_tourism_pro_footer_column_menu_items_font_size');
	if($vw_tourism_pro_footer_column_menu_items_color != false || $vw_tourism_pro_footer_column_menu_items_font_family != false || $vw_tourism_pro_footer_column_menu_items_font_size != false){
		$custom_css .='.widget_nav_menu a{';
			if($vw_tourism_pro_footer_column_menu_items_color != false){
				$custom_css .='color: '.esc_html($vw_tourism_pro_footer_column_menu_items_color).'!important;';
			}
			if($vw_tourism_pro_footer_column_menu_items_font_family != false){
				$custom_css .='font-family:'.esc_html($vw_tourism_pro_footer_column_menu_items_font_family).'!important;';
			}
			if($vw_tourism_pro_footer_column_menu_items_font_size != false){
				$custom_css .='font-size:'.esc_html($vw_tourism_pro_footer_column_menu_items_font_size).'px !important;';
			}
		$custom_css .='}';
	}
	$vw_tourism_pro_footer_column_menu_items_border_color = get_theme_mod('vw_tourism_pro_footer_column_menu_items_border_color');
	 if($vw_tourism_pro_footer_column_menu_items_border_color != false){
		 $custom_css .='#footer .widget_nav_menu a::before{';
			 if($vw_tourism_pro_footer_column_menu_items_border_color != false){
				 $custom_css .='border-color: '.esc_html($vw_tourism_pro_footer_column_menu_items_border_color).'!important;';
			 }
		 $custom_css .='}';
	 }
	 // ----------- Copyright color ---------
	 $vw_tourism_pro_copyright_border_top_color = get_theme_mod('vw_tourism_pro_copyright_border_top_color');
		if($vw_tourism_pro_copyright_border_top_color != false){
			$custom_css .='#footer-inner hr:not([size]){';
				if($vw_tourism_pro_copyright_border_top_color != false){
					$custom_css .='background-color: '.esc_html($vw_tourism_pro_copyright_border_top_color).'!important;';
				}
			$custom_css .='}';
		}

		$vw_tourism_pro_footer_copyright_text_color = get_theme_mod('vw_tourism_pro_footer_copyright_text_color');
		$vw_tourism_pro_footer_copyright_text_font_family = get_theme_mod('vw_tourism_pro_footer_copyright_text_font_family');
		$vw_tourism_pro_footer_copyright_text_font_size = get_theme_mod('vw_tourism_pro_footer_copyright_text_font_size');

		if($vw_tourism_pro_footer_copyright_text_color != false || $vw_tourism_pro_footer_copyright_text_font_family != false || $vw_tourism_pro_footer_copyright_text_font_size != false){
			$custom_css .='.copyright p{';
				if($vw_tourism_pro_footer_copyright_text_color != false){
					$custom_css .='color: '.esc_html($vw_tourism_pro_footer_copyright_text_color).'!important;;';
				}
				if($vw_tourism_pro_footer_copyright_text_font_family != false){
					$custom_css .='font-family:'.esc_html($vw_tourism_pro_footer_copyright_text_font_family).'!important;;';
				}
				if($vw_tourism_pro_footer_copyright_text_font_size != false){
					$custom_css .='font-size:'.esc_html($vw_tourism_pro_footer_copyright_text_font_size).'px!important;';
				}
			$custom_css .='}';
		}

		$vw_tourism_pro_footer_copyright_privacy_terms_color = get_theme_mod('vw_tourism_pro_footer_copyright_privacy_terms_color');
		$vw_tourism_pro_footer_copyright_privacy_terms_font_family = get_theme_mod('vw_tourism_pro_footer_copyright_privacy_terms_font_family');
		$vw_tourism_pro_footer_copyright_privacy_terms_font_size = get_theme_mod('vw_tourism_pro_footer_copyright_privacy_terms_font_size');

		if($vw_tourism_pro_footer_copyright_privacy_terms_color != false || $vw_tourism_pro_footer_copyright_privacy_terms_font_family != false || $vw_tourism_pro_footer_copyright_privacy_terms_font_size != false){
			$custom_css .='.news-menu a{';
				if($vw_tourism_pro_footer_copyright_privacy_terms_color != false){
					$custom_css .='color: '.esc_html($vw_tourism_pro_footer_copyright_privacy_terms_color).'!important;;';
				}
				if($vw_tourism_pro_footer_copyright_privacy_terms_font_family != false){
					$custom_css .='font-family:'.esc_html($vw_tourism_pro_footer_copyright_privacy_terms_font_family).'!important;;';
				}
				if($vw_tourism_pro_footer_copyright_privacy_terms_font_size != false){
					$custom_css .='font-size:'.esc_html($vw_tourism_pro_footer_copyright_privacy_terms_font_size).'px!important;';
				}
			$custom_css .='}';
		}

		$vw_tourism_pro_footer_copyright_privacy_terms_border_color = get_theme_mod('vw_tourism_pro_footer_copyright_privacy_terms_border_color');
		 if($vw_tourism_pro_footer_copyright_privacy_terms_border_color != false){
			 $custom_css .='.news-menu a::after{';
				 if($vw_tourism_pro_footer_copyright_privacy_terms_border_color != false){
					 $custom_css .='border-color: '.esc_html($vw_tourism_pro_footer_copyright_privacy_terms_border_color).'!important;';
				 }
			 $custom_css .='}';
		 }
	// ----------- Contact Page ---------

		$vw_tourism_pro_contact_page_heading_color = get_theme_mod('vw_tourism_pro_contact_page_heading_color');
		$vw_tourism_pro_contact_page_heading_font_family = get_theme_mod('vw_tourism_pro_contact_page_heading_font_family');
		$vw_tourism_pro_contact_page_heading_font_size = get_theme_mod('vw_tourism_pro_contact_page_heading_font_size');

			if($vw_tourism_pro_contact_page_heading_color != false || $vw_tourism_pro_contact_page_heading_font_family != false || $vw_tourism_pro_contact_page_heading_font_size != false){
			$custom_css .='.contactpage-details h3{';
			if($vw_tourism_pro_contact_page_heading_color != false){
			$custom_css .='color: '.esc_html($vw_tourism_pro_contact_page_heading_color).'!important;;';
			}
			if($vw_tourism_pro_contact_page_heading_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_tourism_pro_contact_page_heading_font_family).'!important;;';
			}
			if($vw_tourism_pro_contact_page_heading_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_tourism_pro_contact_page_heading_font_size).'px!important;';
			}
			$custom_css .='}';
		}
		$vw_tourism_pro_contact_page_para_color = get_theme_mod('vw_tourism_pro_contact_page_para_color');
		$vw_tourism_pro_contact_page_para_font_family = get_theme_mod('vw_tourism_pro_contact_page_para_font_family');
		$vw_tourism_pro_contact_page_para_font_size = get_theme_mod('vw_tourism_pro_contact_page_para_font_size');

			if($vw_tourism_pro_contact_page_para_color != false || $vw_tourism_pro_contact_page_para_font_family != false || $vw_tourism_pro_contact_page_para_font_size != false){
			$custom_css .='.contactpage-details p{';
			if($vw_tourism_pro_contact_page_para_color != false){
			$custom_css .='color: '.esc_html($vw_tourism_pro_contact_page_para_color).'!important;;';
			}
			if($vw_tourism_pro_contact_page_para_font_family != false){
			$custom_css .='font-family:'.esc_html($vw_tourism_pro_contact_page_para_font_family).'!important;;';
			}
			if($vw_tourism_pro_contact_page_para_font_size != false){
			$custom_css .='font-size:'.esc_html($vw_tourism_pro_contact_page_para_font_size).'px!important;';
			}
			$custom_css .='}';
		}


		$vw_tourism_pro_contact_page_btn_color = get_theme_mod('vw_tourism_pro_contact_page_btn_color');
		$vw_tourism_pro_contact_page_btn_font_family = get_theme_mod('vw_tourism_pro_contact_page_btn_font_family');
		$vw_tourism_pro_contact_page_btn_font_size = get_theme_mod('vw_tourism_pro_contact_page_btn_font_size');
		 if($vw_tourism_pro_contact_page_btn_color != false || $vw_tourism_pro_contact_page_btn_font_family != false || $vw_tourism_pro_contact_page_btn_font_size != false ){
			 $custom_css .=' #contact-page .theme-btn-text input{';
				 if($vw_tourism_pro_contact_page_btn_color != false){
					 $custom_css .='color: '.esc_html($vw_tourism_pro_contact_page_btn_color).'!important;';
				 }
				 if($vw_tourism_pro_contact_page_btn_font_family != false){
					 $custom_css .='font-family:'.esc_html($vw_tourism_pro_contact_page_btn_font_family).'!important;';
				 }
				 if($vw_tourism_pro_contact_page_btn_font_size != false){
					 $custom_css .='font-size:'.esc_html($vw_tourism_pro_contact_page_btn_font_size).'px!important;';
				 }

			 $custom_css .='}';
		 }
		 $vw_tourism_pro_contact_page_btn_bg_color = get_theme_mod('vw_tourism_pro_contact_page_btn_bg_color');
			if($vw_tourism_pro_contact_page_btn_bg_color != false){
				$custom_css .='#contact-page .theme-btn-main{';
					if($vw_tourism_pro_contact_page_btn_bg_color != false){
						$custom_css .='background: '.esc_html($vw_tourism_pro_contact_page_btn_bg_color).'!important;';
					}
				$custom_css .='}';
			}
		 $vw_tourism_pro_contact_page_btn_arrow_color = get_theme_mod('vw_tourism_pro_contact_page_btn_arrow_color');
		if($vw_tourism_pro_contact_page_btn_arrow_color != false){
			$custom_css .='#contact-page .theme-btn-block .theme-btn-line-right, #contact-page .theme-btn-block .theme-btn-line-left{';
			 if($vw_tourism_pro_contact_page_btn_arrow_color != false){
				 $custom_css .='background: '.esc_html($vw_tourism_pro_contact_page_btn_arrow_color).'!important;';
			 }
			 $custom_css .='}';
			 $custom_css .='#contact-page .theme-btn-main i{';
			 if($vw_tourism_pro_contact_page_btn_arrow_color != false){
				 $custom_css .='color: '.esc_html($vw_tourism_pro_contact_page_btn_arrow_color).'!important;';
			 }
			$custom_css .='}';
		}

		$vw_tourism_pro_contact_page_btn_hover_bg_color = get_theme_mod('vw_tourism_pro_contact_page_btn_hover_bg_color');
	 	if($vw_tourism_pro_contact_page_btn_hover_bg_color != false){
	 		$custom_css .='#contact-page .theme-btn-main:hover{';
	 			if($vw_tourism_pro_contact_page_btn_hover_bg_color != false){
	 				$custom_css .='background: '.esc_html($vw_tourism_pro_contact_page_btn_hover_bg_color).'!important;';
	 			}
	 		$custom_css .='}';
	 	}


// ----------------------About Page-----------------------

		$vw_tourism_pro_about_page_heading_color = get_theme_mod('vw_tourism_pro_about_page_heading_color');
		$vw_tourism_pro_about_page_heading_font_family = get_theme_mod('vw_tourism_pro_about_page_heading_font_family');
		$vw_tourism_pro_about_page_heading_font_size = get_theme_mod('vw_tourism_pro_about_page_heading_font_size');
			if($vw_tourism_pro_about_page_heading_font_family != false || $vw_tourism_pro_about_page_heading_color != false || $vw_tourism_pro_about_page_heading_font_size != false){
		$custom_css .='#about-page-main h5{';
			if($vw_tourism_pro_about_page_heading_font_family != false){
					$custom_css .='font-family: '.esc_html($vw_tourism_pro_about_page_heading_font_family).';';
			}
			if($vw_tourism_pro_about_page_heading_color != false){
					$custom_css .='color: '.esc_html($vw_tourism_pro_about_page_heading_color).';';
			}
			if($vw_tourism_pro_about_page_heading_font_size != false){
					$custom_css .='font-size: '.esc_html($vw_tourism_pro_about_page_heading_font_size).'px;';
			}
		$custom_css .='}';
		}

		$vw_tourism_pro_about_page_para_color = get_theme_mod('vw_tourism_pro_about_page_para_color');
		$vw_tourism_pro_about_page_para_font_family = get_theme_mod('vw_tourism_pro_about_page_para_font_family');
		$vw_tourism_pro_about_page_para_font_size = get_theme_mod('vw_tourism_pro_about_page_para_font_size');
			if($vw_tourism_pro_about_page_para_font_family != false || $vw_tourism_pro_about_page_para_color != false || $vw_tourism_pro_about_page_para_font_size != false){
		$custom_css .='#about-page-main .abt-page-para{';
			if($vw_tourism_pro_about_page_para_font_family != false){
					$custom_css .='font-family: '.esc_html($vw_tourism_pro_about_page_para_font_family).';';
			}
			if($vw_tourism_pro_about_page_para_color != false){
					$custom_css .='color: '.esc_html($vw_tourism_pro_about_page_para_color).';';
			}
			if($vw_tourism_pro_about_page_para_font_size != false){
					$custom_css .='font-size: '.esc_html($vw_tourism_pro_about_page_para_font_size).'px;';
			}
		$custom_css .='}';
		}

		$vw_tourism_pro_about_page_points_dots_color = get_theme_mod('vw_tourism_pro_about_page_points_dots_color');
	 	if($vw_tourism_pro_about_page_points_dots_color != false){
	 		$custom_css .='.vision-points p::after{';
	 			if($vw_tourism_pro_about_page_points_dots_color != false){
	 				$custom_css .='background: '.esc_html($vw_tourism_pro_about_page_points_dots_color).'!important;';
	 			}
	 		$custom_css .='}';
	 	}

		// 404 page
		$vw_tourism_pro_404_page_title_color = get_theme_mod('vw_tourism_pro_404_page_title_color');
		$vw_tourism_pro_404_page_title_font_family = get_theme_mod('vw_tourism_pro_404_page_title_font_family');
		$vw_tourism_pro_404_page_title_font_size = get_theme_mod('vw_tourism_pro_404_page_title_font_size');
			if($vw_tourism_pro_404_page_title_font_family != false || $vw_tourism_pro_404_page_title_color != false || $vw_tourism_pro_404_page_title_font_size != false){
		$custom_css .='.error-heading{';
			if($vw_tourism_pro_404_page_title_font_family != false){
					$custom_css .='font-family: '.esc_html($vw_tourism_pro_404_page_title_font_family).';';
			}
			if($vw_tourism_pro_404_page_title_color != false){
					$custom_css .='color: '.esc_html($vw_tourism_pro_404_page_title_color).';';
			}
			if($vw_tourism_pro_404_page_title_font_size != false){
					$custom_css .='font-size: '.esc_html($vw_tourism_pro_404_page_title_font_size).'px;';
			}
		$custom_css .='}';
	 }
		$vw_tourism_pro_404_page_para_color = get_theme_mod('vw_tourism_pro_404_page_para_color');
		$vw_tourism_pro_404_page_para_font_family = get_theme_mod('vw_tourism_pro_404_page_para_font_family');
		$vw_tourism_pro_404_page_para_font_size = get_theme_mod('vw_tourism_pro_404_page_para_font_size');
			if($vw_tourism_pro_404_page_para_font_family != false || $vw_tourism_pro_404_page_para_color != false || $vw_tourism_pro_404_page_para_font_size != false){
		$custom_css .='.error-para {';
			if($vw_tourism_pro_404_page_para_font_family != false){
					$custom_css .='font-family: '.esc_html($vw_tourism_pro_404_page_para_font_family).';';
			}
			if($vw_tourism_pro_404_page_para_color != false){
					$custom_css .='color: '.esc_html($vw_tourism_pro_404_page_para_color).';';
			}
			if($vw_tourism_pro_404_page_para_font_size != false){
					$custom_css .='font-size: '.esc_html($vw_tourism_pro_404_page_para_font_size).'px;';
			}
		$custom_css .='}';
	 }


	 $vw_tourism_pro_404_page_btn_color = get_theme_mod('vw_tourism_pro_404_page_btn_color');
  	$vw_tourism_pro_404_page_btn_font_family = get_theme_mod('vw_tourism_pro_404_page_btn_font_family');
  	$vw_tourism_pro_404_page_btn_font_size = get_theme_mod('vw_tourism_pro_404_page_btn_font_size');
  	$vw_tourism_pro_404_page_btn_bg_color = get_theme_mod('vw_tourism_pro_404_page_btn_bg_color');
  	 if($vw_tourism_pro_404_page_btn_color != false || $vw_tourism_pro_404_page_btn_font_family != false || $vw_tourism_pro_404_page_btn_font_size != false || $vw_tourism_pro_404_page_btn_bg_color != false ){
  		 $custom_css .='.error-page .theme-btn-main{';
  			 if($vw_tourism_pro_404_page_btn_color != false){
  				 $custom_css .='color: '.esc_html($vw_tourism_pro_404_page_btn_color).'!important;';
  			 }
  			 if($vw_tourism_pro_404_page_btn_font_family != false){
  				 $custom_css .='font-family:'.esc_html($vw_tourism_pro_404_page_btn_font_family).'!important;';
  			 }
  			 if($vw_tourism_pro_404_page_btn_font_size != false){
  				 $custom_css .='font-size:'.esc_html($vw_tourism_pro_404_page_btn_font_size).'px!important;';
  			 }
 			 if($vw_tourism_pro_404_page_btn_bg_color != false){
 					 $custom_css .='background: '.esc_html($vw_tourism_pro_404_page_btn_bg_color).'!important;';
 				 }
  		 $custom_css .='}';
  	 }
 	 $vw_tourism_pro_404_page_btn_arrow_color = get_theme_mod('vw_tourism_pro_404_page_btn_arrow_color');
  	if($vw_tourism_pro_404_page_btn_arrow_color != false){
  		$custom_css .='.error-page .theme-btn-line-right, .error-page .theme-btn-line-left{';
  		 if($vw_tourism_pro_404_page_btn_arrow_color != false){
  			 $custom_css .='background: '.esc_html($vw_tourism_pro_404_page_btn_arrow_color).'!important;';
  		 }
  		 $custom_css .='}';
  		 $custom_css .='.theme-btn-main i{';
  		 if($vw_tourism_pro_404_page_btn_arrow_color != false){
  			 $custom_css .='color: '.esc_html($vw_tourism_pro_404_page_btn_arrow_color).'!important;';
  		 }
  		$custom_css .='}';
  	}

 	 $vw_tourism_pro_404_page_btn_hover_bg_color = get_theme_mod('vw_tourism_pro_404_page_btn_hover_bg_color');
 		if($vw_tourism_pro_404_page_btn_hover_bg_color != false){
 			$custom_css .='.error-page .theme-btn-main:hover{';
 				if($vw_tourism_pro_404_page_btn_hover_bg_color != false){
 					$custom_css .='background: '.esc_html($vw_tourism_pro_404_page_btn_hover_bg_color).'!important;';
 				}
 			$custom_css .='}';
 		}

// ---------------faq page---------------



	 $vw_tourism_pro_faq_que_color = get_theme_mod('vw_tourism_pro_faq_que_color');
	 $vw_tourism_pro_faq_que_font_family = get_theme_mod('vw_tourism_pro_faq_que_font_family');
	 $vw_tourism_pro_faq_que_font_size = get_theme_mod('vw_tourism_pro_faq_que_font_size');
		 if($vw_tourism_pro_faq_que_font_family != false || $vw_tourism_pro_faq_que_color != false || $vw_tourism_pro_faq_que_font_size != false){
	 $custom_css .='#faq .accordion-button{';
		 if($vw_tourism_pro_faq_que_font_family != false){
				 $custom_css .='font-family: '.esc_html($vw_tourism_pro_faq_que_font_family).' !important;';
		 }
		 if($vw_tourism_pro_faq_que_color != false){
				 $custom_css .='color: '.esc_html($vw_tourism_pro_faq_que_color).' !important;';
		 }
		 if($vw_tourism_pro_faq_que_font_size != false){
				 $custom_css .='font-size: '.esc_html($vw_tourism_pro_faq_que_font_size).'px !important;';
		 }
	 $custom_css .='}';
	}

	 $vw_tourism_pro_faq_ans_color = get_theme_mod('vw_tourism_pro_faq_ans_color');
	 $vw_tourism_pro_faq_ans_font_family = get_theme_mod('vw_tourism_pro_faq_ans_font_family');
	 $vw_tourism_pro_faq_ans_font_size = get_theme_mod('vw_tourism_pro_faq_ans_font_size');
		 if($vw_tourism_pro_faq_ans_font_family != false || $vw_tourism_pro_faq_ans_color != false || $vw_tourism_pro_faq_ans_font_size != false){
	 $custom_css .='#faq .accordion-body{';
		 if($vw_tourism_pro_faq_ans_font_family != false){
				 $custom_css .='font-family: '.esc_html($vw_tourism_pro_faq_ans_font_family).' !important;';
		 }
		 if($vw_tourism_pro_faq_ans_color != false){
				 $custom_css .='color: '.esc_html($vw_tourism_pro_faq_ans_color).' !important;';
		 }
		 if($vw_tourism_pro_faq_ans_font_size != false){
				 $custom_css .='font-size: '.esc_html($vw_tourism_pro_faq_ans_font_size).'px !important;';
		 }
	 $custom_css .='}';
	}

		$vw_tourism_pro_faq_icon_color = get_theme_mod('vw_tourism_pro_faq_icon_color');
		$vw_tourism_pro_faq_icon_font_size = get_theme_mod('vw_tourism_pro_faq_icon_font_size');

			if($vw_tourism_pro_faq_icon_color != false  || $vw_tourism_pro_faq_icon_font_size != false){
		$custom_css .='#faq .accordion-button::after{';
			if($vw_tourism_pro_faq_icon_color != false){
					$custom_css .='color: '.esc_html($vw_tourism_pro_faq_icon_color).';';
			}
			if($vw_tourism_pro_faq_icon_font_size != false){
					$custom_css .='font-size: '.esc_html($vw_tourism_pro_faq_icon_font_size).'px;';
			}
		$custom_css .='}';
		}


		$vw_tourism_pro_faq_question_background_color = get_theme_mod('vw_tourism_pro_faq_question_background_color');
			if($vw_tourism_pro_faq_question_background_color != false  || $vw_tourism_pro_faq_icon_font_size != false){
		$custom_css .='.accordion-button{';
			if($vw_tourism_pro_faq_question_background_color != false){
					$custom_css .='background: '.esc_html($vw_tourism_pro_faq_question_background_color).'!important;';
			}
		$custom_css .='}';
		}

		$vw_tourism_pro_faq_open_question_background_color = get_theme_mod('vw_tourism_pro_faq_open_question_background_color');
			if($vw_tourism_pro_faq_open_question_background_color != false ){
		$custom_css .='.accordion-button:not(.collapsed){';
			if($vw_tourism_pro_faq_open_question_background_color != false){
					$custom_css .='background: '.esc_html($vw_tourism_pro_faq_open_question_background_color).'!important;';
			}
		$custom_css .='}';
		}

// ---------------Privacy page---------------


$vw_tourism_pro_privacy_policy_heading_color = get_theme_mod('vw_tourism_pro_privacy_policy_heading_color');
$vw_tourism_pro_privacy_policy_heading_font_family = get_theme_mod('vw_tourism_pro_privacy_policy_heading_font_family');
$vw_tourism_pro_privacy_policy_heading_font_size = get_theme_mod('vw_tourism_pro_privacy_policy_heading_font_size');
	if($vw_tourism_pro_privacy_policy_heading_font_family != false || $vw_tourism_pro_privacy_policy_heading_color != false || $vw_tourism_pro_privacy_policy_heading_font_size != false){
$custom_css .='.privacy-main h2{';
	if($vw_tourism_pro_privacy_policy_heading_font_family != false){
			$custom_css .='font-family: '.esc_html($vw_tourism_pro_privacy_policy_heading_font_family).' !important;';
	}
	if($vw_tourism_pro_privacy_policy_heading_color != false){
			$custom_css .='color: '.esc_html($vw_tourism_pro_privacy_policy_heading_color).' !important;';
	}
	if($vw_tourism_pro_privacy_policy_heading_font_size != false){
			$custom_css .='font-size: '.esc_html($vw_tourism_pro_privacy_policy_heading_font_size).'px !important;';
	}
$custom_css .='}';
}

$vw_tourism_pro_privacy_policy_sub_heading_color = get_theme_mod('vw_tourism_pro_privacy_policy_sub_heading_color');
$vw_tourism_pro_privacy_policy_sub_heading_font_family = get_theme_mod('vw_tourism_pro_privacy_policy_sub_heading_font_family');
$vw_tourism_pro_privacy_policy_sub_heading_font_size = get_theme_mod('vw_tourism_pro_privacy_policy_sub_heading_font_size');
	if($vw_tourism_pro_privacy_policy_sub_heading_font_family != false || $vw_tourism_pro_privacy_policy_sub_heading_color != false || $vw_tourism_pro_privacy_policy_sub_heading_font_size != false){
$custom_css .='.privacy-main h3{';
	if($vw_tourism_pro_privacy_policy_sub_heading_font_family != false){
			$custom_css .='font-family: '.esc_html($vw_tourism_pro_privacy_policy_sub_heading_font_family).' !important;';
	}
	if($vw_tourism_pro_privacy_policy_sub_heading_color != false){
			$custom_css .='color: '.esc_html($vw_tourism_pro_privacy_policy_sub_heading_color).' !important;';
	}
	if($vw_tourism_pro_privacy_policy_sub_heading_font_size != false){
			$custom_css .='font-size: '.esc_html($vw_tourism_pro_privacy_policy_sub_heading_font_size).'px !important;';
	}
$custom_css .='}';
}
$vw_tourism_pro_privacy_policy_sub_heading_two_color = get_theme_mod('vw_tourism_pro_privacy_policy_sub_heading_two_color');
$vw_tourism_pro_privacy_policy_sub_heading_two_font_family = get_theme_mod('vw_tourism_pro_privacy_policy_sub_heading_two_font_family');
$vw_tourism_pro_privacy_policy_sub_heading_two_font_size = get_theme_mod('vw_tourism_pro_privacy_policy_sub_heading_two_font_size');
	if($vw_tourism_pro_privacy_policy_sub_heading_two_font_family != false || $vw_tourism_pro_privacy_policy_sub_heading_two_color != false || $vw_tourism_pro_privacy_policy_sub_heading_two_font_size != false){
$custom_css .='.middle-content h4{';
	if($vw_tourism_pro_privacy_policy_sub_heading_two_font_family != false){
			$custom_css .='font-family: '.esc_html($vw_tourism_pro_privacy_policy_sub_heading_two_font_family).' !important;';
	}
	if($vw_tourism_pro_privacy_policy_sub_heading_two_color != false){
			$custom_css .='color: '.esc_html($vw_tourism_pro_privacy_policy_sub_heading_two_color).' !important;';
	}
	if($vw_tourism_pro_privacy_policy_sub_heading_two_font_size != false){
			$custom_css .='font-size: '.esc_html($vw_tourism_pro_privacy_policy_sub_heading_two_font_size).'px !important;';
	}
$custom_css .='}';
}
$vw_tourism_pro_privacy_policy_para_color = get_theme_mod('vw_tourism_pro_privacy_policy_para_color');
$vw_tourism_pro_privacy_policy_para_font_family = get_theme_mod('vw_tourism_pro_privacy_policy_para_font_family');
$vw_tourism_pro_privacy_policy_para_font_size = get_theme_mod('vw_tourism_pro_privacy_policy_para_font_size');
	if($vw_tourism_pro_privacy_policy_para_font_family != false || $vw_tourism_pro_privacy_policy_para_color != false || $vw_tourism_pro_privacy_policy_para_font_size != false){
$custom_css .=' .privacy-main  ul li, .privacy-main p  {';
	if($vw_tourism_pro_privacy_policy_para_font_family != false){
			$custom_css .='font-family: '.esc_html($vw_tourism_pro_privacy_policy_para_font_family).' !important;';
	}
	if($vw_tourism_pro_privacy_policy_para_color != false){
			$custom_css .='color: '.esc_html($vw_tourism_pro_privacy_policy_para_color).' !important;';
	}
	if($vw_tourism_pro_privacy_policy_para_font_size != false){
			$custom_css .='font-size: '.esc_html($vw_tourism_pro_privacy_policy_para_font_size).'px !important;';
	}
$custom_css .='}';
}

/*---------------------------Terms Condtion-------------------*/
$vw_tourism_pro_terms_condtion_heading_color = get_theme_mod('vw_tourism_pro_terms_condtion_heading_color');
$vw_tourism_pro_terms_condtion_heading_font_family = get_theme_mod('vw_tourism_pro_terms_condtion_heading_font_family');
$vw_tourism_pro_terms_condtion_heading_font_size = get_theme_mod('vw_tourism_pro_terms_condtion_heading_font_size');
	if($vw_tourism_pro_terms_condtion_heading_font_family != false || $vw_tourism_pro_terms_condtion_heading_color != false || $vw_tourism_pro_terms_condtion_heading_font_size != false){
$custom_css .='#terms-condition-main  h3 {';
	if($vw_tourism_pro_terms_condtion_heading_font_family != false){
			$custom_css .='font-family: '.esc_html($vw_tourism_pro_terms_condtion_heading_font_family).' !important;';
	}
	if($vw_tourism_pro_terms_condtion_heading_color != false){
			$custom_css .='color: '.esc_html($vw_tourism_pro_terms_condtion_heading_color).' !important;';
	}
	if($vw_tourism_pro_terms_condtion_heading_font_size != false){
			$custom_css .='font-size: '.esc_html($vw_tourism_pro_terms_condtion_heading_font_size).'px !important;';
	}
$custom_css .='}';
}
$vw_tourism_pro_terms_condtion_para_color = get_theme_mod('vw_tourism_pro_terms_condtion_para_color');
$vw_tourism_pro_terms_condtion_para_font_family = get_theme_mod('vw_tourism_pro_terms_condtion_para_font_family');
$vw_tourism_pro_terms_condtion_para_font_size = get_theme_mod('vw_tourism_pro_terms_condtion_para_font_size');
	if($vw_tourism_pro_terms_condtion_para_font_family != false || $vw_tourism_pro_terms_condtion_para_color != false || $vw_tourism_pro_terms_condtion_para_font_size != false){
$custom_css .='#terms-condition-main p {';
	if($vw_tourism_pro_terms_condtion_para_font_family != false){
			$custom_css .='font-family: '.esc_html($vw_tourism_pro_terms_condtion_para_font_family).' !important;';
	}
	if($vw_tourism_pro_terms_condtion_para_color != false){
			$custom_css .='color: '.esc_html($vw_tourism_pro_terms_condtion_para_color).' !important;';
	}
	if($vw_tourism_pro_terms_condtion_para_font_size != false){
			$custom_css .='font-size: '.esc_html($vw_tourism_pro_terms_condtion_para_font_size).'px !important;';
	}
$custom_css .='}';
}

/*---------------------------Support Page-------------------*/
$vw_tourism_pro_support_page_heading_color = get_theme_mod('vw_tourism_pro_support_page_heading_color');
$vw_tourism_pro_support_page_heading_font_family = get_theme_mod('vw_tourism_pro_support_page_heading_font_family');
$vw_tourism_pro_support_page_heading_font_size = get_theme_mod('vw_tourism_pro_support_page_heading_font_size');
	if($vw_tourism_pro_support_page_heading_font_family != false || $vw_tourism_pro_support_page_heading_color != false || $vw_tourism_pro_support_page_heading_font_size != false){
$custom_css .='#support-page .top-content h2{';
	if($vw_tourism_pro_support_page_heading_font_family != false){
			$custom_css .='font-family: '.esc_html($vw_tourism_pro_support_page_heading_font_family).' !important;';
	}
	if($vw_tourism_pro_support_page_heading_color != false){
			$custom_css .='color: '.esc_html($vw_tourism_pro_support_page_heading_color).' !important;';
	}
	if($vw_tourism_pro_support_page_heading_font_size != false){
			$custom_css .='font-size: '.esc_html($vw_tourism_pro_support_page_heading_font_size).'px !important;';
	}
$custom_css .='}';
}
$vw_tourism_pro_support_page_sub_heading_color = get_theme_mod('vw_tourism_pro_support_page_sub_heading_color');
$vw_tourism_pro_support_page_sub_heading_font_family = get_theme_mod('vw_tourism_pro_support_page_sub_heading_font_family');
$vw_tourism_pro_support_page_sub_heading_font_size = get_theme_mod('vw_tourism_pro_support_page_sub_heading_font_size');
	if($vw_tourism_pro_support_page_sub_heading_font_family != false || $vw_tourism_pro_support_page_sub_heading_color != false || $vw_tourism_pro_support_page_sub_heading_font_size != false){
$custom_css .='#support-page .top-content h4{';
	if($vw_tourism_pro_support_page_sub_heading_font_family != false){
			$custom_css .='font-family: '.esc_html($vw_tourism_pro_support_page_sub_heading_font_family).' !important;';
	}
	if($vw_tourism_pro_support_page_sub_heading_color != false){
			$custom_css .='color: '.esc_html($vw_tourism_pro_support_page_sub_heading_color).' !important;';
	}
	if($vw_tourism_pro_support_page_sub_heading_font_size != false){
			$custom_css .='font-size: '.esc_html($vw_tourism_pro_support_page_sub_heading_font_size).'px !important;';
	}
$custom_css .='}';
}
$vw_tourism_pro_support_page_para_color = get_theme_mod('vw_tourism_pro_support_page_para_color');
$vw_tourism_pro_support_page_para_font_family = get_theme_mod('vw_tourism_pro_support_page_para_font_family');
$vw_tourism_pro_support_page_para_font_size = get_theme_mod('vw_tourism_pro_support_page_para_font_size');
	if($vw_tourism_pro_support_page_para_font_family != false || $vw_tourism_pro_support_page_para_color != false || $vw_tourism_pro_support_page_para_font_size != false){
$custom_css .='#support-page p,#support-page li{';
	if($vw_tourism_pro_support_page_para_font_family != false){
			$custom_css .='font-family: '.esc_html($vw_tourism_pro_support_page_para_font_family).' !important;';
	}
	if($vw_tourism_pro_support_page_para_color != false){
			$custom_css .='color: '.esc_html($vw_tourism_pro_support_page_para_color).' !important;';
	}
	if($vw_tourism_pro_support_page_para_font_size != false){
			$custom_css .='font-size: '.esc_html($vw_tourism_pro_support_page_para_font_size).'px !important;';
	}
$custom_css .='}';
}

$vw_tourism_pro_support_page_border_color = get_theme_mod('vw_tourism_pro_support_page_border_color');
	if($vw_tourism_pro_support_page_border_color != false ){
$custom_css .='#support-page hr:not([size]){';
	if($vw_tourism_pro_support_page_border_color != false){
			$custom_css .='background-color: '.esc_html($vw_tourism_pro_support_page_border_color).'!important;';
	}
$custom_css .='}';
}

	/*---------------------------Blog Layout -------------------*/

		$theme_lay = get_theme_mod( 'vw_tourism_pro_blog_layout_option','Left');
	    if($theme_lay == 'Left'){
			$custom_css .='.collectionbox-text{';
				$custom_css .='text-align:Left;';
			$custom_css .='}';
		}else if($theme_lay == 'Center'){
			$custom_css .='.collectionbox-text{';
				$custom_css .='text-align:center;';
			$custom_css .='}';
		}else if($theme_lay == 'Right'){
			$custom_css .='.collectionbox-text{';
				$custom_css .='text-align:Right;';
			$custom_css .='}';
		}

	/* ------------ Border Radius And Box Shadow --------------- */
	$vw_tourism_pro_blog_featured_image_border_radius = get_theme_mod('vw_tourism_pro_blog_featured_image_border_radius');
	$vw_tourism_pro_blog_featured_image_box_shadow = get_theme_mod('vw_tourism_pro_blog_featured_image_box_shadow');

	if($vw_tourism_pro_blog_featured_image_border_radius != false){
		$custom_css .='.collectionbox img,.feature-box img{
			border-radius: '.esc_html($vw_tourism_pro_blog_featured_image_border_radius).'px;
		}';
	}


	if($vw_tourism_pro_blog_featured_image_box_shadow != false){
		    $custom_css .='.collectionbox img,.feature-box img{
		        box-shadow: 0 0 3px '.esc_html($vw_tourism_pro_blog_featured_image_box_shadow).' #ccc !important;
		    }';
	}

	/*---------------------------Page Title Layout -------------------*/

	$page_title_lay = get_theme_mod( 'vw_tourism_pro_page_title_content_option','Left');
    if($page_title_lay == 'Left'){
		$custom_css .='.main_title h1 ,h1.page-title,h1.entry-title{';
			$custom_css .='text-align:Left;';
		$custom_css .='}';
		$custom_css .='.logo{';
			$custom_css .='border-bottom:none;';
		$custom_css .='}';
	}else if($page_title_lay == 'Center'){
		$custom_css .='.main_title h1,h1.page-title,h1.entry-title{';
			$custom_css .='text-align:center;';
		$custom_css .='}';
		$custom_css .='.logo{';
			$custom_css .='padding:15px 0; border-bottom: 1px solid #e1e1e1; text-align: center;';
		$custom_css .='}';
		$custom_css .='.middle-header{';
			$custom_css .='padding: 0;';
		$custom_css .='}';
	}else if($page_title_lay == 'Right'){
		$custom_css .='.main_title h1,h1.page-title,h1.entry-title{';
			$custom_css .='text-align:Right;';
		$custom_css .='}';
		$custom_css .='.logo{';
			$custom_css .='border-bottom:none;';
		$custom_css .='}';
	}

	// --------- Scroll Top --------------

	if($vw_tourism_pro_general_scroll_top_bgcolor != false){
		$custom_css .='#return-to-top{
			background-color: '.esc_html($vw_tourism_pro_general_scroll_top_bgcolor).'!important;
		}';
	}
	if($vw_tourism_pro_general_scroll_top_hover_bgcolor != false){
		$custom_css .='#return-to-top:hover{
			background-color: '.esc_html($vw_tourism_pro_general_scroll_top_hover_bgcolor).'!important;
		}';
	}
	if($vw_tourism_pro_general_scroll_top_icon_color != false){
		$custom_css .='#return-to-top i{
			color: '.esc_html($vw_tourism_pro_general_scroll_top_icon_color).'!important;
		}';
	}

	$slider_layouy="";
	if(get_theme_mod('vw_tourism_pro_scroll_top_layout')!=''){
		$slider_layouy= get_theme_mod('vw_tourism_pro_scroll_top_layout');
	}


		if($slider_layouy=="Left"){
			$custom_css .='#return-to-top{
				right:unset;
			}';
		}

		if($slider_layouy=="Right"){
			$custom_css .='#return-to-top{
				  left:unset;
			}';

		}

		if($slider_layouy=="Center"){
			$custom_css .='#return-to-top{
				left: 0;
				right: 0;
				margin: auto;
				text-align: center;
			}';
		}

	/* --------- Spinner Other Settings ------------ */
	    if($vw_tourism_pro_products_spinner_bgcolor != false){
			$custom_css .='.eco-box{
				background-color: '.esc_html($vw_tourism_pro_products_spinner_bgcolor).' !important;
			}';
		}

		if($vw_tourism_pro_spinner_opacity_color != ""){
		$custom_css .='.eco-box{
				opacity: '.esc_html($vw_tourism_pro_spinner_opacity_color).'!important;
			}';
	    }

	/* ---------- Frame Setting ------------ */

	if($vw_tourism_pro_site_frame_width != false && $vw_tourism_pro_site_frame_type != false && $vw_tourism_pro_site_frame_color != false){
		$custom_css .='body{
			border: '.esc_html($vw_tourism_pro_site_frame_width).'px '.esc_html($vw_tourism_pro_site_frame_type).' '.esc_html($vw_tourism_pro_site_frame_color).';
		}';
	}

	/* ------------ Responsive Media Settings ----------- */

	$custom_css .='@media screen and (max-width:575px){';

		if ( get_theme_mod('vw_tourism_pro_resp_slider_hide_show',true) != "1" ) {

			$custom_css .='#slider{
				display: none;
			}';
		}

		if ( get_theme_mod('vw_tourism_pro_metabox_hide_show',true) != "1" ) {
			$custom_css .='#single_post .post-meta-box,.content_page .metabox{
				display: none;
			}';
		}

		if ( get_theme_mod('vw_tourism_pro_sidebar_hide_show',true) != "1" ) {
			$custom_css .='#sidebar{
				display: none;
			}';
		}

	$custom_css .='}';


	// ------------ Sticky Header Alignment -----------

    // $sticky_alignment = get_theme_mod('vw_tourism_pro_header_section_sticky_alingment','center');
    // if($sticky_alignment=="left"){
    //     $custom_css .='.scrolled .innermenubox {
    //             float: left;
		// 	    position: relative;
		// 	    left: 0;
		// 	    text-align: left;
    //     }';
    // }
    // if($sticky_alignment=="center"){
    //     $custom_css .='.scrolled .innermenubox {
		// 	    // margin-left: 20%;
    //         	text-align: center;
    //         	float:left;
		//
    //     }';
    // }
		//
    // if($sticky_alignment=="right"){
    //     $custom_css .='.scrolled .innermenubox {
    //             float: right;
    //     }';
    // }
    	/*--------------------------Scroll to top ----------------------*/

	if($vw_tourism_pro_scroll_border_radius != false){
		$custom_css .='#return-to-top{
			border-radius:'.esc_html($vw_tourism_pro_scroll_border_radius).'%;
		}';
	}
	if($vw_tourism_pro_scroll_width != false){
		$custom_css .='#return-to-top{
			width:'.esc_html($vw_tourism_pro_scroll_width).'px;
		}';
	}
	if($vw_tourism_pro_scroll_height != false){
		$custom_css .='#return-to-top{
			height:'.esc_html($vw_tourism_pro_scroll_height).'px;
		}';
	}


?>
