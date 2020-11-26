// Add your custom JS here.
var swiper = new Swiper('.products', {
    cssMode: true,
    // height:680,
    // autoHeight:true,
    slidesPerView:3,
    loop: true,
    autoplay:true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '.swiper-pagination'
    },
    mousewheel: true,
    keyboard: true,
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 30
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 30
      }
    }
});

var homepage = new Swiper('.homepage', {
  fadeEffect: {
    crossFade: true
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
});

$(document).ready(function() {
  $('.navbar-toggler').bigSlide();
});