/**
 * Exoplanet Custom JS
 *
 * @package Exoplanet
 *
 * Distributed under the MIT license - http://opensource.org/licenses/MIT
 */

jQuery(function($){


    jQuery('.search-icon > i').click(function(){
        jQuery(".serach_outer").slideDown(700);
    });

    jQuery('.closepop i').click(function(){
        jQuery(".serach_outer").slideUp(700);
    });
});


var menu_width="";

var menu_width="";
/* Mobile responsive Menu*/
jQuery(function($){
  jQuery('#open_nav').click(function(){
    jQuery('#sidebar1').css({"width": "250px", "display":"block"})
  })
  jQuery('#close_nav').click(function(){
    jQuery('#sidebar1').css({"width": "0", "display":"none"})
  })
});
jQuery(document).ready(function () {
  jQuery(".search-div i").click(function () {
    jQuery(".side-menu").show();
  });
  jQuery(".icon-cross i").click(function () {
    jQuery(".side-menu").hide();
  });

  jQuery('.search-form .search-btn').on('click', function(event) {

    if (!jQuery('.search-form.serach-page.search-box.show').length) {
      event.preventDefault();
    }

    jQuery('.search-field.search-input').toggleClass('show');
    jQuery('.search-form.serach-page.search-box').toggleClass('show');
  });

  jQuery(document).on('click', 'body', function(event) {
    if (!jQuery(event.target).closest('.search-form.serach-page').length && !jQuery(event.target).is('.search-form .search-btn')) {
      jQuery('.search-field.search-input').removeClass('show');
    }
  });
});

/* Mobile responsive Menu*/

jQuery(window).on('scroll', function(e) {
  if ( jQuery("#about").offset() != undefined ) {

   if (jQuery(window).scrollTop() >= (jQuery("#about").offset().top - (jQuery(window).height()))) {
     if (!jQuery("#about").hasClass("animated")) {
       jQuery('#about .counter1-up').each(function() {
         jQuery(this).prop('Counter', 0).animate({
           Counter: jQuery(this).text()
         }, {
           duration: 10000,
           easing: 'swing',
           step: function(now) {
             jQuery(this).text(Math.ceil(now));
           }
         });
       });
       jQuery("#triggered").addClass("show");
       jQuery("#about").addClass("animated");
     }
   }
 }

 if (jQuery('.chart').length && jQuery('.chart').offset() != undefined) {

   if (jQuery(window).scrollTop() >= (jQuery(".chart").offset().top - (jQuery(window).height()))) {

     jQuery('.chart').each((i, elem) => {

       jQuery(elem).easyPieChart({
         size: 90,
         barColor: jQuery(elem).attr('data-scale-color'),
         scaleLength: 0,
         lineWidth: 11,
         trackColor: "",
         lineCap: "round",
         animate: {
           duration: 3000,
           enabled: true
         },
       });
     });
   }
 }
 });

jQuery(function() {
  //----- OPEN
  jQuery('[data-popup-open]').on('click', function(e) {
    var targeted_popup_class = jQuery(this).attr('data-popup-open');
    jQuery('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);

    e.preventDefault();
  });

  //----- CLOSE
  jQuery('[data-popup-close]').on('click', function(e) {
    var targeted_popup_class = jQuery(this).attr('data-popup-close');
    jQuery('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);

    e.preventDefault();
  });
});

function vw_tourism_pro_packges_filters(page=1){
  var data_obj = {};

  jQuery('.packages-filter [type="checkbox"]:checked').each(function (index, element) {
    if (!Array.isArray(data_obj[jQuery(element).attr('name')])) {
      data_obj[jQuery(element).attr('name')] = new Array();
    }
    data_obj[jQuery(element).attr('name')].push(jQuery(element).val())
  });

  data_obj['page'] = page;

  data_obj['value'] = 0;
  if (jQuery("#packages-price-slider").data("ui-slider")) {
    data_obj['value'] = jQuery('#packages-price-slider').slider( "value" );
  }

  jQuery.post(vw_tourism_pro_customscripts_obj.ajax_url, {
    'action': 'get_packages_page_filter',
    'data':   data_obj
  },
  function(response) {
    jQuery('.packages-main-box .row').empty();
    jQuery('.packages-main-box .row').append(response.html);

    jQuery('.packages-main-box .pagination').empty();
    jQuery('.packages-main-box .pagination').append(response.pagination);
  });
}


jQuery(document).ready(function($) {

  // $("#tourVideo").bind("click", function () {
  //   var vid = $(this).get(0);
  //       if (vid.paused) {
  //         vid.play();
  //       } else {
  //         vid.pause();
  //       }
  // });


  if ($('.appointment-date input').length) {

   var today = new Date().toISOString().split('T')[0];

   $(".appointment-date input").attr('min', today);
   $('.appointment-date input').attr('type', 'text');

   $('.appointment-date input').focus(function() {
     $(this).attr('type', 'date');
     $('.appointment-date .fa-calendar-days').hide();
   });

   $('.appointment-date input').blur(function() {
     $(this).attr('type', 'text');
     $('.appointment-date .fa-calendar-days').show();
   });
 }

 // explore section js start
  const $selectWrapper = $('.custom-select-wrapper');
  const $select = $selectWrapper.find('.custom-select');
  const $trigger = $select.find('.custom-select-trigger');
  const $options = $select.find('.custom-options');
  const $firstOption = $options.find('.custom-option:first');

  let explore_owl = null;

  function initOwlCarousel() {
    if (explore_owl) {
      explore_owl.trigger('destroy.owl.carousel').removeClass('owl-loaded');
    }

    explore_owl = $('#explore .owl-carousel');
    explore_owl.owlCarousel({
      rtl: !!vw_tourism_pro_customscripts_obj.is_rtl,
      nav: true,
      margin: 20,
      autoplay: true,
      lazyLoad: true,
      autoplayTimeout: 3000,
      arrow: true,
      dots: false,
      loop: true,
      navText: ['<i class="fa-solid fa-chevron-left"></i>', '<i class="fa-solid fa-chevron-right"></i>'],
      responsive: {
        0: {
          items: 1
        },
        576: {
          items: 2
        },
        1000: {
          items: 2
        },
        1366: {
          items: 3
        }
      },
      autoplayHoverPause: true,
      mouseDrag: true
    });
  }
  // Set the initial selected value to the first option
  $trigger.text($firstOption.text());
  $trigger.attr('data-value', $firstOption.attr('data-value'));

  // Event listener for toggling the dropdown visibility
  $trigger.on('click', function() {
      $options.toggle();
  });

  const initialValue = $firstOption.attr('data-value');
  fetchData(initialValue);

  function fetchData(value) {
    $.ajax({
        url: vw_tourism_pro_customscripts_obj.ajax_url,
        method: 'POST',
        data: {
          post_id: value,
          action: 'get_packages_explore_content'
        },
        success: function(response) {

          if (explore_owl) {
            explore_owl.trigger('destroy.owl.carousel').removeClass('owl-carousel owl-loaded');
          }

          $('.explore-main-wrapper').empty();
          if (response.html_content) {
            $('.explore-main-wrapper').append(response.html_content);

            initOwlCarousel();
          }
        },
        error: function(xhr, status, error) {
            console.error('AJAX Error:', error);
        }
    });
  }

  // Event listener to close dropdown on blur
  $selectWrapper.on('blur', function() {
      $options.hide();
  });

  // Event listener for selecting an option
  $options.on('click', '.custom-option', function() {
      const value = $(this).attr('data-value');
      const text = $(this).text();
      $trigger.text(text);
      $trigger.attr('data-value', value);
      $options.hide();

      fetchData(value);
  });

  // Event listener to close dropdown when clicking outside
  $(document).on('click', function(event) {
      if (!$selectWrapper.is(event.target) && $selectWrapper.has(event.target).length === 0) {
          $options.hide();
      }
  });

  // explore section js end


    jQuery('.myVideoBtn').click(function()
    {
      var url = jQuery(this).data('url');
      jQuery('#videoEmbed').attr('src', url);
      jQuery("#myVideoNewModal").show();
    });
    jQuery('.close-one').click(function()
    {
      jQuery("#myVideoNewModal").hide()
    });

    if (jQuery('#tour-packges .packages-filter').length) {

      vw_tourism_pro_packges_filters();
    }


    jQuery('.packages-filter [type="checkbox"]').on('change', function (event) {
      vw_tourism_pro_packges_filters();
      jQuery(this).siblings(".active-class").toggleClass('active');
    });

    jQuery('body').on('click', '.filter-btn', function() {

      vw_tourism_pro_packges_filters();
    });

    jQuery('body').on('click', '.pagination a.page-numbers', function(event){
      event.preventDefault();

      const url = $(this).attr('href');

      const urlObject = new URL(url, window.location.origin);
      const queryParams = new URLSearchParams(urlObject.search);
      const topage = queryParams.get('topage');

      vw_tourism_pro_packges_filters(topage);
    });

  const package_currency_symbol = vw_tourism_pro_customscripts_obj.package_currency_symbol ? vw_tourism_pro_customscripts_obj.package_currency_symbol : '';

  jQuery( "#packages-price-slider" ).slider({
    min: 0,
    max: parseInt(vw_tourism_pro_customscripts_obj.packages_max_price),
    values: 0,
    slide: function( event, ui ) {
      jQuery( "#product-amount-start" ).text(
        package_currency_symbol + ui.value
      );
    }
  });


  jQuery('.experience-pills-tab .nav-link').on('click', function() {
    $('.experience-pills-tab .nav-link').removeClass('active');
    $(this).addClass('active');

    $('.experience-pills-tab .nav-link').attr('aria-selected', false);
    $(this).attr('aria-selected', true);
  })

  var swiper = new Swiper(".swiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    // slidesPerView:5,
    loop:true,
    autoplay: {
      delay: 3000,
    },
    centeredSlidesBounds:true,
    roundLengths:true,
    keyboard: {
      enabled: true,
      onlyInViewport: false,
    },
    coverflowEffect: {
    rotate: 0,
      stretch: 0,
      depth: 115,
      modifier: 5,
      slideShadows: true
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    scrollbar: {
      el: ".swiper-scrollbar",
    },
    breakpoints: {
    575: {
      slidesPerView: 1
    },
  576: {
      slidesPerView: 2
    },
    768: {
      slidesPerView: 2
    },
    992: {
      slidesPerView: 3
    },
    }
  });

  jQuery('#myBtn').click(function()
  {
  jQuery("#myNewModal").css("display","block");
  });
  jQuery('.close-one').click(function()
  {
  jQuery("#myNewModal").css("display","none");
  });


  jQuery('#popular-cuisines .slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    autoplay:false,
    asNavFor: '.slider-nav',
  infinite: false,
   });

   jQuery('.custom-prev').click(function() {
    jQuery('.slider-nav').slick('slickPrev');
  });

  jQuery('.custom-next').click(function() {
    jQuery('.slider-nav').slick('slickNext');
  });

   jQuery('#popular-cuisines .slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        centerPadding:"0px",
        arrows: false,
        infinite: true,
        asNavFor: '.slider-for',
        dots: false,
        focusOnSelect: true,
        autoplay:true,
        autoplaySpeed:3000,
        centerMode: true,
          adaptiveHeight: false,
        loop:true,
        vertical: true, // Enable vertical orientation
        verticalSwiping: true, // Enable vertical swiping

        responsive: [
        {
        breakpoint: 768, // Adjust this breakpoint for mobile devices
        settings: {
        vertical: false,
          verticalSwiping:false,
        }
      }
    ]


   });

   jQuery('.sliders-custom-prev').click(function() {
       jQuery('.slider-nav').slick('slickPrev');
   });

   jQuery('.sliders-custom-next').click(function() {
       jQuery('.slider-nav').slick('slickNext');
   });

  jQuery('#testimonial .slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav'
  });
  jQuery('#testimonial .slider-nav').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
      autoplay: true,
    asNavFor: '.slider-for',
    dots: false,
    focusOnSelect: true,
    prevArrow: '<i class="fa-solid fa-chevron-left"></i>',
    nextArrow: '<i class="fa-solid fa-chevron-right"></i>',
  });

});

jQuery('document').ready(function(){

    jQuery('.testi-vertical').slick({
    vertical: true,
    slidesToShow: 4,
    infinite:false,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 2000,
    loop:true,
    arrows:true,
    // asNavFor: '.blog-nav',
    prevArrow: '<i class="fa-solid fa-chevron-up"></i>',
    nextArrow: '<i class="fa-solid fa-chevron-down"></i>',
  });
   //  jQuery('.blog-prev').click(function() {
   //   jQuery('.blog-nav').slick('slickPrev');
   // });
   //
   // jQuery('.blog-next').click(function() {
   //   jQuery('.blog-nav').slick('slickNext');
   // });


  jQuery('.cat_toggle i').click(function() {
  jQuery('#cart_animate').toggle('slow');
  });

    var owl = jQuery('#popular-packages .owl-carousel');
        owl.owlCarousel({
        rtl: !!vw_tourism_pro_customscripts_obj.is_rtl,
        margin: 30,
        nav: false,
        dots: false,
        autoplay : true,
        lazyLoad: true,
        autoplayTimeout: 3000,
        // loop: true,
        navText : ['<i class="fas fa-arrow-left" aria-hidden="true"></i>','<i class="fas fa-arrow-right" aria-hidden="true"></i>'],
        responsive: {
          0: {
            items: 1
          },
          576: {
            items: 2
          },
          1000: {
            items: 3,
          },
          1366: {
            items: 4,
          }
        },
        autoplayHoverPause : true,
        mouseDrag: true
    });
      var owl = jQuery('#explore .owl-carousel');
      owl.owlCarousel({
      rtl: !!vw_tourism_pro_customscripts_obj.is_rtl,
      nav: true,
      margin:20,
      autoplay : true,
      lazyLoad: true,
      autoplayTimeout: 3000,
      arrow:true,
        dots: false,
      loop: true,
      navText : ['<i class="fa-solid fa-chevron-left"></i>','<i class="fa-solid fa-chevron-right"></i>'],
      responsive: {
        0: {
          items: 1
        },
        576: {
          items: 2
        },
        1000: {
          items: 2
        },
        1366: {
          items: 3
        }
      },
      autoplayHoverPause : true,
      mouseDrag: true
    });

      var owl = jQuery('#team .owl-carousel');
      owl.owlCarousel({
      rtl: !!vw_tourism_pro_customscripts_obj.is_rtl,
      nav: false,
     autoplay : true,
      lazyLoad: true,
      autoplayTimeout: 2000,
        dots: false,
      loop: false,
      navText : ['<i class="fas fa-arrow-left" aria-hidden="true"></i>','<i class="fas fa-arrow-right" aria-hidden="true"></i>'],
      responsive: {
        0: {
          items: 1
        },
      576: {
          items: 2,
        },
        1000: {
          items: 3
        },
        1300: {
          items: 4
        }
      },
      autoplayHoverPause : true,
      mouseDrag: true
    });



    jQuery('a.accordion-toggle').click(function() {
        jQuery("i", this).toggleClass("fas fa-plus fas fa-times");
    });
    var interval=null;
    function show_loading_box()
    {
      jQuery(".eco-box").css("display","none");
      clearInterval(interval);
    }
    jQuery('document').ready(function(){

      interval = setInterval(show_loading_box,1000);
    });



    // circular progress bar
      const block = document.querySelectorAll('.block');
      window.addEventListener('load', function(){
        block.forEach(item => {
          let numElement = item.querySelector('.num');
          let num = parseInt(numElement.innerText);
          let count = 0;
          let time = 2000 / num;
          let circle = item.querySelector('.circle');

          console.log(360 * (num / 100));
          setInterval(() => {
            if(count == num){
              clearInterval();
            } else {
              count += 1;
              numElement.innerText = count;
            }
          }, time)
          circle.style.strokeDashoffset
            = 503 - ( 503 * ( num / 100 ));
          let dots = item.querySelector('.dots');
          dots.style.transform =
            `rotate(${360 * (num / 100)}deg)`;
          if(num == 100){
            dots.style.opacity = 0;
          }
        })
      });
    // circular progress bar end

    // ------------ Scroll Top ---------------

   jQuery(window).scroll(function() {
     if (jQuery(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
       jQuery('#return-to-top').fadeIn(200);    // Fade in the arrow
     } else {
       jQuery('#return-to-top').fadeOut(200);   // Else fade out the arrow
     }
   });
   jQuery('#return-to-top').click(function() {      // When arrow is clicked
     jQuery('body,html').animate({
       scrollTop : 0                       // Scroll to top of body
     }, 2000);
   });
});




// });

jQuery(function($){
    $(window).scroll(function(){
      var scrollTop = $(window).scrollTop();
      if( scrollTop > 100 ){
        $('.right_menu').addClass('scrolled');
      }else{
        $('.right_menu').removeClass('scrolled');
      }
        $('.main-header').css('background-position', 'center ' + (scrollTop / 2) + 'px');
    });

 });

  //At the document ready event
jQuery(function(){
  new WOW().init();
});

//also at the window load event
jQuery(window).on('load', function(){
     new WOW().init();
});
