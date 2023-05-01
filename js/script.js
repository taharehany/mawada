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
});