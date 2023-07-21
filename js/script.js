$(document).ready(function () {
  "use strict";

  // fixed header
  $(window).scroll(function () {
   let scroll = $(window).scrollTop();

   if (scroll >= 2) {
     $("header .navbar.main-nav").addClass("fixed");
   } else {
     $("header .navbar.main-nav").removeClass("fixed");
   }
  });

  $('.main-slider').ripples({
    resolution: 720,
    dropRadius: 10,
    perturbance: 0.04,
    imageUrl: '../images/slider/hero.jpg'
  });

    //clients slider owl
    $(".clients-carousel").owlCarousel({
      loop: true,
      autoplay: true,
      autoplayTimeout: 3000,
      items: 5,
      nav: false,
      dots: true,
      rtl: true,
      margin: 50,
      navText: ["<i class='bi bi-arrow-left'></i>", "<i class='bi bi-arrow-right'></i>"],
      responsive: {
        0: {
          items: 2,
        },
        400: {
          items: 3,
        },
        575: {
          items: 3,
        },
        768: {
          items: 4,
        },
  
        992: {
          items: 5,
        }
      }
    });

    //lazyload images
    // $("img").Lazy({
    //   scrollDirection: "vertical",
    //   effect: "fadeIn",
    //   visibleOnly: false,
    // });
});