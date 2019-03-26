jQuery(function($) {
  $('.par-slider').slick({
    autoplay: false,
    dots: false,
    infinite: true,
    speed: 300,
    fade: false,
    cssEase: 'ease-out',
    centerMode: false,
    swipeToSlide: true,
    swipe: true
  });
});

jQuery(function($) {
  $nav = $('.par-nav');
  $burger = $('.burger');
  $close = $('.close-btn');

  $burger.on('click', function(event) {
    $nav.animate({
      opacity: 1,
      top: "0"
    },
    300,
    function() {});
    $(this).hide();
    $close.show();
    event.preventDefault();

  });

  $close.on('click', function(event) {
    $nav.animate({
      opacity: 0,
      top: "-100px"
    },
    300,
    function() {

    });
    $(this).hide();
    $burger.show();
    event.preventDefault();

  });
});

jQuery(function($) {
  $(window).on("scroll", function(){
    if
      ($(window).scrollTop() > 50){
      $(".par-header").addClass("active");
    }
    else
    {
      $(".par-header").removeClass("active");
    }
  });
});