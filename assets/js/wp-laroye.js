jQuery(document).ready(function ($) {
  $.noConflict();
  //console.log("jQuery is still working!", $);

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
    slidesToScroll: 3,
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

  $('#mobile-menu .menu-item-has-children a').on('click', function(){
    if($(this).closest('li').hasClass('menu-item-has-children')){
      $(this).attr('href', '#');
      $(this).parent('li').find('.dropdown-toggle').click();
      return;
    }
  });
});
