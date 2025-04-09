jQuery(document).ready(function ($) {
  $.noConflict();
  //console.log("jQuery is still working!", $);

  $(".slick-js").slick({
    dots: true,
    infinite: true,
    speed: 500,
    adaptiveHeight: false,
    autoplay: false,
    centerMode: false,
    arrows: true,
    prevArrow: '<i class="fa-solid fa-chevron-left fa-4x"></i>',
    nextArrow: '<i class="fa-solid fa-chevron-right fa-4x"></i>',
    responsive: [
      {
        breakpoint: 3500,
        settings: {
          slidesToShow: 5,
          slidesToScroll: 2,
        },
      },
      {
        breakpoint: 1800,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 2,
        },
      },
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });

  $(".slick-people").slick({
    slidesToScroll: 1,
    arrows: true,
    prevArrow: '<i class="fa-solid fa-chevron-left fa-4x"></i>',
    nextArrow: '<i class="fa-solid fa-chevron-right fa-4x"></i>',
    responsive: [
      {
        breakpoint: 3500,
        settings: {
          slidesToShow: 5,
          slidesToScroll: 2,
        },
      },
      {
        breakpoint: 1800,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 2,
        },
      },
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });

  $(".multiple-items").slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    prevArrow: '<i class="fa-solid fa-chevron-left fa-4x"></i>',
    nextArrow: '<i class="fa-solid fa-chevron-right fa-4x"></i>',
    variableWidth: true,
  });

  $(window).resize(function () {
    $(".js-slider").not(".slick-initialized").slick("resize");
  });

  $(window).on("orientationchange", function () {
    $(".js-slider").not(".slick-initialized").slick("resize");
  });
});
