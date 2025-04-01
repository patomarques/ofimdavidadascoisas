jQuery(document).ready(function ($) {
  $.noConflict();
  console.log("jQuery is still working!", $);

  $(".slick-js").slick({
    dots: false,
    infinite: true,
    speed: 500,
    slidesToShow: 4,
    adaptiveHeight: true,
    autoplay: true,
    centerMode: false,
  });

  $(".slick-people").slick({
    // dots: false,
    // infinite: true,
    // speed: 300,
    slidesToShow: 4,
    // adaptiveHeight: true,
    // autoplay: true,
    // centerMode: false,
    arrows: true,
    prevArrow: '<i class="fa-solid fa-chevron-left fa-4x"></i>',
    nextArrow: '<i class="fa-solid fa-chevron-right fa-4x"></i>',
  });

  $(".multiple-items").slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 3,
    prevArrow: '<i class="fa-solid fa-chevron-left fa-4x"></i>',
    nextArrow: '<i class="fa-solid fa-chevron-right fa-4x"></i>',
  });
});
