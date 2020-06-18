jQuery(function ($) {

    'use strict';

    // Preloader
    // Hide Mobile Menu On Click
    // Toggle Menu for Mobile
    // Sticky Nav
    // OnePageNav
    // Masonry
    // MagnificPopup
    // Slick Slider
    // CounterUp
    // Parallax Scrolling
    // Progress Bar
    // Video Player
    // Carousel animation

    // -------------------------------------------------------------
    //  Preloader
    // -------------------------------------------------------------

    $(window).on("load", function(){
        $('#preloader').fadeOut('slow',function(){$(this).remove();});
    });
    

    // -------------------------------------------------------------
    //  Hide Mobile Menu On Click
    // -------------------------------------------------------------

    menuHide();
    function menuHide(){
        var windowWidth = $(window).width();
            if(windowWidth < 991 ){
                $('.navbar-collapse a').on('click', function (){
                $('.navbar-collapse').collapse('toggle');
            });
        }  
    }


    // -------------------------------------------------------------
    //  Toggle Menu for Mobile
    // -------------------------------------------------------------

    mobileDropdown ();
    function mobileDropdown () {
      if($('.tr-menu').length) {
        $('.tr-menu .tr-dropdown').append(function () {
          return '<i class="fa fa-angle-down icon" aria-hidden="true"></i>';
        });
        $('.tr-menu .tr-dropdown .icon').on('click', function () {
          $(this).parent('li').children('ul').slideToggle();
        });
      }
    }     

    // -------------------------------------------------------------
    //  Sticky Nav
    // -------------------------------------------------------------
    
    $(window).on("scroll", function(){
        var navbar = $('.navbar');
        var $this = $(this);

        if($this.scrollTop() > 50) {
            navbar.addClass('menu-bg');
        }
        else {
            navbar.removeClass('menu-bg');
        }
    });

    var new_scroll_position = 0;
    var last_scroll_position;
    var trNavbar = document.getElementById("tr_navbar");

    window.addEventListener('scroll', function(e) {
        last_scroll_position = window.scrollY;

        // Scrolling down
        if (new_scroll_position < last_scroll_position && last_scroll_position > 80) {
            trNavbar.classList.remove("slideDown");
            trNavbar.classList.add("slideUp");

        // Scrolling up
        } else if (new_scroll_position > last_scroll_position) {
            trNavbar.classList.remove("slideUp");
            trNavbar.classList.add("slideDown");
        }

      new_scroll_position = last_scroll_position;
    });

    // -------------------------------------------------------------
    //  OnePageNav
    // -------------------------------------------------------------
        
    $('.navbar').onePageNav({});
    

    // -------------------------------------------------------------
    //  Masonry
    // -------------------------------------------------------------
 
    $('.tr-masonry-content').masonry({
        itemSelector: '.tr-masonry',
        columnWidth: 0
    });

    // -------------------------------------------------------------
    //  MagnificPopup
    // -------------------------------------------------------------
        
    $('.video-link').magnificPopup({type:'iframe'}); 

    $('.photo-overlay .zoom-icon a').magnificPopup({
      type: 'image',
      gallery:{
        enabled:true
      }
    });       

    // -------------------------------------------------------------
    //  Slick Slider
    // -------------------------------------------------------------  

    $(".team-slider").slick({
        infinite: true,
        dots: true,
        arrows: false,
        slidesToShow: 4,
        autoplay:true,
        autoplaySpeed:10000,
        slidesToScroll: 2,
        nextArrow: '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        prevArrow: '<i class="fa fa-angle-right" aria-hidden="true"></i>',
        responsive: [
        {
          breakpoint: 1199,
          settings: {
            slidesToShow: 3,
          }
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
          }
        },
        {
          breakpoint: 481,
          settings: {
            slidesToShow: 1,
          }
        }
        ] 
 
    }); 

    $(".tr-slider-6").slick({
        infinite: true,
        dots: true,
        arrows: false,
        slidesToShow: 2,
        autoplay:true,
        autoplaySpeed:10000,
        slidesToScroll: 2,
        nextArrow: '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        prevArrow: '<i class="fa fa-angle-right" aria-hidden="true"></i>',
        responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
          }
        },
        {
          breakpoint: 476,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          }
        }
        ] 
 
    }); 

    // -------------------------------------------------------------
    // CounterUp
    // -------------------------------------------------------------

    $('.counter span').counterUp({
        delay: 10,
        time: 1000
    });  
 
    // -------------------------------------------------------------
    //  Parallax Scrolling
    // -------------------------------------------------------------

    $('.tr-parallax').jarallax({
        keepImg: true,
        type: 'scroll-opacity',
        
    }); 

    // -------------------------------------------------------------
    // Progress Bar
    // -------------------------------------------------------------

    $('.raised-progress').on('inview', function(event, visible, visiblePartX, visiblePartY) {
        if (visible) {
            $.each($('div.progress-bar'),function(){
              $(this).css('width', $(this).attr('aria-valuenow')+'%');
            });
        }
    });

    // -------------------------------------------------------------
    //  Video Player
    // -------------------------------------------------------------
    
     $("#tr-video-player").YTPlayer({
        containment:'self', 
        showControls:false, 
        mute:true, 
        autoPlay:true, 
        loop:true, 
        optimizeDisplay:true

    });

    // -------------------------------------------------------------
    //  Carousel animation
    // -------------------------------------------------------------

    function doAnimations( elems ) {
        var animEndEv = 'webkitAnimationEnd animationend';
        
        elems.each(function () {
            var $this = $(this),
                $animationType = $this.data('animation');
            $this.addClass($animationType).one(animEndEv, function () {
                $this.removeClass($animationType);
            });
        });
    }
    var $myCarousel = $('#tr-carousel'),
        $firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");
    $myCarousel.carousel();

    doAnimations($firstAnimatingElems);
    $myCarousel.carousel('pause');
    
    $myCarousel.on('slide.bs.carousel', function (e) {
        var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
        doAnimations($animatingElems);
    });  
        
     

// script end
});
