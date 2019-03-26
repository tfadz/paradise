jQuery(function($) {
  $('.par-slider').slick({
    autoplay: false,
    dots: false,
    infinite: true,
    speed: 300,
    fade: true,
    cssEase: 'ease-out',
    slidesToShow: 1,
    slidesToScroll: 1,
    centerMode: false,
    variableWidth: false,
    swipeToSlide: true,
    swipe: true
    });
});