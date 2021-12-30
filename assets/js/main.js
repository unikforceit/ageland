$(function($) {

    "use strict";


    /*=========================== scroll background ===========================*/

    //sticky menu
    $(window).on('scroll', function() {
        var window_top = $(window).scrollTop() + 0;
        if (window_top > 150) {
            $('.classic_header').addClass('menu_fixed');
        } else {
            $('.classic_header').removeClass('menu_fixed');
        }
    });

    /*=========================== close scroll background ===========================*/

    $(window).on('load', function() {
        $(".preloder_part").fadeOut();
        $(".sk-child").delay(1000).fadeOut("slow");
    });

    //offcanvus menu js
    $("#pu_collaps_menu_icon").on('click', function() {
        $('.canvus_menu').addClass("canvus_active")
    });
    $(".canvus_close_icon").on('click', function() {
        $(".canvus_menu").removeClass("canvus_active")
    });

    //canvus menu js
    $(".offcanvus_menu_trigger").on('click', function() {
        $("body").addClass("active_off_canvus")
        $(".offcanvas_overlay").addClass("active_offcanvas_overlay")
    });
    $(".close_icon, .offcanvas_overlay").on('click', function() {
        $("body").removeClass("active_off_canvus")
        $(".offcanvas_overlay").removeClass("active_offcanvas_overlay")
    });

    // dropdown-toggle class not added for submenus by current WP Bootstrap Navwalker as of November 15, 2017.
    $('.dropdown-menu > .dropdown > a').addClass('dropdown-toggle');

    $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
        if (!$(this).next().hasClass('show')) {
            $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
        }
        var $subMenu = $(this).next(".dropdown-menu");
        $subMenu.toggleClass('show');
        $(this).parents('li.nav-item.dropdown.show').on('.dropdown', function(e) {
            $('.dropdown-menu > .dropdown .show').removeClass("show");
        });
        $('.dropdown-menu a.dropdown-toggle').removeClass("show_dropdown");
        if ($(this).next().hasClass('show')) {
            $(this).addClass("show_dropdown");
        }
        return false;
    });
    $('.classic_header .dropdown-menu > .dropdown').hover(
        function() {
            $(this).find('.dropdown-toggle').toggleClass("active_icon");
        }
    );

    $('.off_canvus_menu .dropdown-menu > .dropdown > .dropdown-toggle').on('click', function() {
        $('.off_canvus_menu .dropdown-menu > .dropdown > .dropdown-toggle').removeClass("active_icon");
        if ($(this).next().hasClass('show')) {
            $(this).addClass("active_icon");
        }
    });
    /*=========================== preloader ===========================*/
    // Wait for window load
    $(window).on('load', function() {
        $(".se-pre-con").fadeOut("slow");;
    });

    /*=========================== preloader ===========================*/

    AOS.init();


    /*=========================== popup video ===========================*/
    // Gets the video src from the data-src on each button

    var $videoSrc;
    $('.video-btn').on('click', function() {
        $videoSrc = $(this).data("src");
    });
    console.log($videoSrc);



    // when the modal is opened autoplay it  
    $('#myModal').on('shown.bs.modal', function(e) {

        // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
        $("#video").attr('src', $videoSrc + "?rel=0&amp;showinfo=0&amp;modestbranding=1&amp;autoplay=1");
    })


    // stop playing the youtube video when I close the modal
    $('#myModal').on('hide.bs.modal', function(e) {
            // a poor man's stop video
            $("#video").attr('src', $videoSrc);
        })
        /*===========================close popup video ===========================*/


    /*=========================== case slider ===========================*/
    var owls = $("#case-slider-owl");
    owls.owlCarousel({

        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        items: 1,
        loop: true,
        center: false,
        margin: 15,
        stagePadding: 0,
        dots: true,
        nav: false,


        merge: false,
        mergeFit: true,
        autoWidth: false,
        animateOut: 'fadeOutRight',
        animateIn: 'fadeInLeft',
    });

    /*=========================== case slider ===========================*/


    /*=========================== blog slider ===========================*/
    var owls = $("#blog_slider_owl");
    owls.owlCarousel({

        autoplay: false,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        items: 3,
        loop: true,
        center: false,
        margin: 0,
        stagePadding: 0,
        dots: true,
        nav: false,


        merge: false,
        mergeFit: true,
        autoWidth: false,
        animateOut: 'fadeOutRight',
        animateIn: 'fadeInLeft',
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,

            },
            580: {
                items: 1,

            },
            768: {
                items: 2,

            },
            992: {
                items: 3,

                loop: true
            }
        },
    });

    /*=========================== blog slider ===========================*/


    /*=========================== popup image ===========================*/

    //popup gallery
    var mgf_popup = $('.popup-gallery');
    if (mgf_popup.length) {
        mgf_popup.magnificPopup({
            delegate: 'a',
            type: 'image',
            tLoading: 'Loading image #%curr%...',
            mainClass: 'mfp-img-mobile',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
            }
        });
    }

    //popup gallery
    var video_popup_btn = $('.video_popup_btn');
    if (video_popup_btn.length) {
        video_popup_btn.magnificPopup({
            type: 'iframe',
            removalDelay: 160,
            preloader: false,
        });
    }
    /*=========================== popup image ===========================*/


    /*=========================== Pricing tabs===========================*/


    // Price Table
    var monthly_price_table = $('#price_tables').find('.monthly');
    var yearly_price_table = $('#price_tables').find('.yearly');


    $('.switch-toggles').find('.monthly').addClass('active');
    $('#price_tables').find('.monthly').addClass('active');

    $('.switch-toggles').find('.monthly').on('click', function() {
        $(this).addClass('active');
        $(this).closest('.switch-toggles').removeClass('active');
        $(this).siblings().removeClass('active');
        monthly_price_table.addClass('active');
        yearly_price_table.removeClass('active');
    });

    $('.switch-toggles').find('.yearly').on('click', function() {
        $(this).addClass('active');
        $(this).closest('.switch-toggles').addClass('active');
        $(this).siblings().removeClass('active');
        yearly_price_table.addClass('active');
        monthly_price_table.removeClass('active');
    });

    /*=========================== Pricing tabs===========================*/



    /*=========================== isotop active ===========================*/


    // init Isotope
    var $grid = $('.grid').isotope({
        itemSelector: '.grid-item',
        percentPosition: true,
        masonry: {
            columnWidth: '.grid-sizer'
        }
    });


    //// ISOTOPE TRIGGER
    // filter items on button click
    $('.filter-button-group').on('click', 'button', function() {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({
            filter: filterValue
        });
    });

    // change is-checked class on buttons
    $('.filter-button-group').each(function(i, buttonGroup) {
        var $buttonGroup = $(buttonGroup);
        $buttonGroup.on('click', 'button', function() {
            $buttonGroup.find('.is-checked').removeClass('is-checked');
            $(this).addClass('is-checked');
        });
    });


    /*=========================== isotop active ===========================*/


    /*=========================== pricing table home2 slider ===========================*/

    var swiper = new Swiper('.swiper-container.price', {
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true,
        },
        // autoplay: {
        //     delay: 3000,
        // },
        speed: 1000,
        effect: 'coverflow',
        loop: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        coverflowEffect: {
            rotate: 0,
            stretch: 100,
            depth: 180,
            modifier: 2,
            slideShadows: false,
        }
    });

    /*=========================== pricing table home2 slider ===========================*/

    /*=========================== testimonial slider home2 ===========================*/
    var owls = $("#testimonials_home2_owl");
    owls.owlCarousel({

        autoplay: false,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        items: 1,
        loop: true,
        center: false,
        margin: 0,
        stagePadding: 0,
        dots: true,
        nav: true,


        merge: false,
        mergeFit: true,
        autoWidth: false,
    });


    /*=========================== testimonial slider home2 ===========================*/


    /*=========================== blog tw0 slider ===========================*/
    var owls = $(".blog_slider_2");
    owls.owlCarousel({
        autoplay: false,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        items: 3,
        loop: true,
        center: false,
        margin: 30,
        stagePadding: 0,
        dots: true,
        nav: false,
        merge: false,
        mergeFit: true,
        autoWidth: false,
        animateOut: 'fadeOutRight',
        animateIn: 'fadeInLeft',
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            580: {
                items: 1,
            },
            768: {
                items: 1,
            },
            992: {
                items: 2,
                loop: true
            }
        },
    });

    var owls = $(".blog_slider_3");
    owls.owlCarousel({
        autoplay: false,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        items: 3,
        loop: true,
        center: false,
        margin: 30,
        stagePadding: 0,
        dots: true,
        nav: false,
        merge: false,
        mergeFit: true,
        autoWidth: false,
        animateOut: 'fadeOutRight',
        animateIn: 'fadeInLeft',
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            580: {
                items: 1,
            },
            768: {
                items: 1,
            },
            992: {
                items: 3,
                loop: true
            }
        },
    });


    /*=========================== blog twp slider ===========================*/


    /*=========================== post slider single===========================*/
    var owls = $(".blog_single_owl");
    owls.owlCarousel({

        autoplay: false,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        items: 1,
        loop: true,
        center: false,
        margin: 30,
        stagePadding: 0,
        dots: false,
        nav: true,


        merge: false,
        mergeFit: true,
        autoWidth: false,

    });

    /*=========================== post slider single===========================*/

    var mp3_player = $(".mp3_players");
    if (mp3_player.length) {
        mp3_player.musicPlayer({
            elements: ['artwork', 'information', 'controls', 'progress', 'time', 'volume'], // ==> This will display in  the order it is inserted
            //elements: [ 'controls' , 'information', 'artwork', 'progress', 'time', 'volume' ],
            //controlElements: ['backward', 'play', 'forward', 'stop'],
            //timeElements: ['current', 'duration'],
            //timeSeparator: " : ", // ==> Only used if two elements in timeElements option
            //infoElements: [  'title', 'artist' ],

            //volume: 10,
            //autoPlay: true,
            //loop: true,

        });
    }

    //data bg image sec
    $("[data-bg-img]").each(function() {
        var bg = $(this).data("bg-img");
        $(this).css({
            "background": "no-repeat center/cover url(" + bg + ")",
        })
    })

    $("[data-bg-color]").each(function() {
        var bg_color = $(this).data("bg-color");
        $(this).css({
            "background-color": (bg_color)
        })
    })

    //swiper slider thumb js
    var galleryThumbs = new Swiper('.client_slider_thumbs', {
        spaceBetween: 10,
        slidesPerView: 5,
        loopedSlides: 5, //looped slides should be the same
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
    });
    var galleryTop = new Swiper('.client_slider_content', {
        spaceBetween: 10,
        loop: true,
        loopedSlides: 5, //looped slides should be the same
        thumbs: {
            swiper: galleryThumbs,
        },
    });

    //case studies slider

    $('.swiper_case_filter').on('click', 'a', function() {
        var filter = $(this).attr('data-filter');

        $('.swiper_case_studies_wrapper .swiper-slide').css('display', 'none')
        $('.swiper_case_studies_wrapper .swiper-slide' + filter).css('display', '')
        $('.swiper_case_filter a').removeClass('swiper-active');
        $(this).addClass('swiper-active');

        productSwiper.updateSize();
        productSwiper.updateSlides();
        productSwiper.updateProgress();
        productSwiper.updateSlidesClasses();
        productSwiper.slideTo(0);
        productSwiper.scrollbar.updateSize();

        return false;
    });
    var productSwiper = new Swiper('.swiper_case_studies_wrapper', {
        /*grabCursor: true,*/
        observer: true,
        slidesPerView: 3,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true,
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            991: {
                slidesPerView: 3,
                spaceBetween: 30
            }
        },
        spaceBetween: 30,
        scrollbarHide: false,
        updateOnImagesReady: true
    })

    // (Optional) Active an item if it has the class "is-active"	
    $(".dl_accordion > .dl_accordion_item.is-active").children(".dl_accordion_panel").slideDown();

    $(".dl_accordion > .dl_accordion_item").on('click', function() {
        // Cancel the siblings
        $(this).siblings(".dl_accordion_item").removeClass("is-active").children(".dl_accordion_panel").slideUp();
        // Toggle the item
        $(this).toggleClass("is-active").children(".dl_accordion_panel").slideToggle("ease-out");
    });

    //mouse move parallax
    if ($('.mouse_move_animation').length > 0) {
        $('.mouse_move_animation').parallax({
            scalarX: 10.0,
            scalarY: 8.0,
        });
    }

});