(function($) {

    "use strict";


    /*=========================== scroll background ===========================*/

    //sticky menu
    $(window).on('scroll', function() {
        var window_top = $(window).scrollTop() + 0;
        if (window_top > 150) {
            $('.classic_header, .ageland-sticky-header').addClass('menu_fixed');
        } else {
            $('.classic_header, .ageland-sticky-header').removeClass('menu_fixed');
        }
    });

    //scroll top
    $(window).on('scroll', function() {
        $(window).on("scroll", function() {
            var ScrollBarPosition = $(this).scrollTop();
            if (ScrollBarPosition > 200) {
                $(".scroll-top").fadeIn();
            } else {
                $(".scroll-top").fadeOut();
            }
        });
        $(".scroll-top").on("click", function() {
            $('body,html').animate({
                scrollTop: 0,
            });
        })
    });

    /*=========================== close scroll background ===========================*/

    $(window).on('load', function() {
     $(".preloader").delay(1000).fadeOut("slow");
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

    //data bg image sec
    $("[data-bg-img]").each(function() {
        var bg = $(this).data("bg-img");
        $(this).css({
            "background-image": "url(" + bg + ")",
        })
    })

    $("[data-bg-color]").each(function() {
        var bg_color = $(this).data("bg-color");
        $(this).css({
            "background-color": (bg_color)
        })
    })

    $(".widget_block h2, .widget_block .wp-block-search__label").after("<div class='line'</div>")

})(jQuery);