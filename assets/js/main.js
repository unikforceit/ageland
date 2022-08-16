/* -----------------------------------------------------------------------------
File:           JS Core
Version:        1.0
Last change:    00/00/00 
-------------------------------------------------------------------------------- */
(function ($) {
  "use strict";

  var Medi = {
    init: function () {
      this.Basic.init();
    },

    Basic: {
      init: function () {
        this.preloader();
        this.scrollTop();
        this.BackgroundImage();
        this.MobileMenu();
        this.SidebarMenu();
        this.BrandSlider();
        this.Wow();
        this.Counter();
      },
      preloader: function () {
        $(window).on("load", function () {
          $(".preloader").delay(1500).fadeOut("slow");
        });
      },
      scrollTop: function () {
        $(window).on("scroll", function () {
          var ScrollBarPosition = $(this).scrollTop();
          if (ScrollBarPosition > 200) {
            $(".scroll-top").fadeIn();
          } else {
            $(".scroll-top").fadeOut();
          }
        });
        $(".scroll-top").on("click", function () {
          $("body,html").animate({
            scrollTop: 0,
          });
        });
      },
      BackgroundImage: function () {
        $("[data-background]").each(function () {
          $(this).css(
            "background-image",
            "url(" + $(this).attr("data-background") + ")"
          );
        });
      },
      MobileMenu: function () {
        jQuery(window).on("scroll", function () {
          if (jQuery(window).scrollTop() > 250) {
            jQuery(".main-header").addClass("sticky-on");
          } else {
            jQuery(".main-header").removeClass("sticky-on");
          }
        });
        $(".open_mobile_menu").on("click", function () {
          $(".mobile_menu_wrap").toggleClass("mobile_menu_on");
        });
        $(".open_mobile_menu").on("click", function () {
          $("body").toggleClass("mobile_menu_overlay_on");
        });
        if ($(".mobile_menu li.dropdown ul").length) {
          $(".mobile_menu li.dropdown").append(
            '<div class="dropdown-btn"><span class="fa fa-angle-down"></span></div>'
          );
          $(".mobile_menu li.dropdown .dropdown-btn").on("click", function () {
            $(this).prev("ul").slideToggle(500);
          });
        }
      },
      SidebarMenu: function () {
        if ($(".sidebar_dropdown").length) {
          $(".sidebar_dropdown").append(
            '<div class="sidebar-dropdown-btn"><span class="fas fa-plus"></span></div>'
          );
          $(".sidebar-dropdown-btn").on("click", function () {
            $(this).prev("ul").slideToggle(500);
            $(this).html(
              $(this).html() == '<span class="fas fa-plus"></span>'
                ? '<span class="fas fa-minus"></span>'
                : '<span class="fas fa-plus"></span>'
            );
          });
        }
      },
      BrandSlider: function () {
        var swiperBannerSlider = new Swiper(".brandSlider", {
          slidesPerView: 4,
          loop: true,
          // autoplay: true,
          breakpoints: {
            345: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            525: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 40,
            },
            992: {
                slidesPerView: 4,
                spaceBetween: 40,
            },
        },
        });
      },
      DonarSlider: function () {
        var swiperDonarSlider = new Swiper(".donarSlider", {
          // slidesPerView: 3,
          loop: true,
          autoplay: true,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
          breakpoints: {
            525: {
              slidesPerView: 1,
              spaceBetween: 20,
            },
            768: {
              slidesPerView: 2,
              spaceBetween: 40,
            },
            992: {
              slidesPerView: 3,
              spaceBetween: 40,
            },
          },
        });
      },
      Counter: function () {
        if ($(".odometer").length) {
          $(".odometer").appear();
          $(document.body).on("appear", ".odometer", function (e) {
            var odo = $(".odometer");
            odo.each(function () {
              var countNumber = $(this).attr("data-count");
              $(this).html(countNumber);
            });
            window.odometerOptions = {
              format: "d",
            };
          });
        }
      },
      Niceselect: function () {
        $(document).ready(function () {
          $("select").niceSelect();
        });
      },
      GoogleMap: function () {
        var mapSelector = $("#popular_map");
        if (mapSelector.length) {
          var lat = mapSelector.data("lat");
          var lon = mapSelector.data("lon");
          var zoom = mapSelector.data("zoom");
          var marker = mapSelector.data("marker");
          var info = mapSelector.data("info");
          var markerLat = mapSelector.data("mlat");
          var markerLon = mapSelector.data("mlon");
          var map = new GMaps({
            el: "#popular_map",
            lat: lat,
            lng: lon,
            scrollwheel: false,
            scaleControl: true,
            streetViewControl: false,
            panControl: true,
            disableDoubleClickZoom: true,
            mapTypeControl: false,
            zoom: zoom,
            height: "100%",
          });
          map.addMarker({
            lat: markerLat,
            lng: markerLon,
            icon: marker,
            infoWindow: {
              content: info,
            },
          });
        }
      },
      Wow: function () {
        new WOW().init();
      },
    },
  };
  jQuery(document).ready(function () {
    Medi.init();
  });
})(jQuery);
