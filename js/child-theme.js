// Add your custom JS here.
var swiper = new Swiper('.swiper-container', {
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
});

var homepage = new Swiper('.homepage', {
  // direction: 'vertical',
  // loop:   true,
  // autoHeight:true,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
});
