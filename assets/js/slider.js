// Homepage 1 Showcase Slider
if ($(".header-carousel").length > 0) {
  $(".header-carousel").owlCarousel({
    loop: true,
    autoplay: false, //true if you want to enable autoplay
    autoPlayTimeout: 1000,
    margin: 0,
    dots: true,
    nav: true,
    navText: ['<i class="flaticon-back"></i>', '<i class="flaticon-next"></i>'],
    responsive: {
      0: {
        items: 1
        // dots: treu,
        // nav: false,
      },
      460: {
        items: 1
        // dots: false,
        // nav: false,
      },
      599: {
        items: 1
        // dots: false,
        // nav: false,
      },
      768: {
        items: 1
      },
      960: {
        items: 1
      },
      1200: {
        items: 1
      },
      1920: {
        items: 1
      }
    }
  });

  var owlCarousel = jQuery(".header-carousel").data('owlCarousel');
owlCarousel.removeItem(2);
}

// ============================= Showcase Sliders ============================

// Homepage 4
if ($(".showcase-style-4").length > 0) {
  $(".showcase-style-4 > .content-wrapper").slick({
    infinite: true,
    speed: 500,
    dots: true,
    arrows: false,
    cssEase: "linear",
    appendDots: $(".showcase-style-4 .slider-indicator-2")
  });

  $(".showcase-style-4 > .content-wrapper").on("beforeChange", function(
    event,
    slick,
    currentSlide,
    nextSlide
  ) {
    var currentSlideindex = nextSlide;
    ++currentSlideindex;
    $(".showcase-style-4 .slider-indicator-3 .current").text(
      check_number(currentSlideindex)
    );
  });

  function totalSlideNum(totalSlide) {
    $(".showcase-style-4 .slider-indicator-3 .total").text(
      check_number(totalSlide)
    );
  }

  $(window).on("load", function() {
    var totalSlide = $(".showcase-style-4 > .content-wrapper").slick("getSlick")
      .slideCount;
    totalSlideNum(totalSlide);
  });

  function check_number(num) {
    var IsInteger = /^[0-9]+$/.test(num);
    return IsInteger ? "0" + num : null;
  }
}

// ============================= Showcase Style 2 ==========================
if ($(".showcase-style-2").length > 0) {
  $(".showcase-style-2 .slider-wrapper").slick({
    dots: true,
    infinite: true,
    speed: 500,
    fade: true,
    autoplay: true,
    autoplaySpeed: 5000,
    arrows: true,
    cssEase: "linear",
    prevArrow: $(".indicator-style-2 > .flaticon-back"),
    nextArrow: $(".indicator-style-2 > .flaticon-next"),
    appendDots: $(".indicator-style-2 .indicator-style-2 .nums")
  });

  $(".showcase-style-2 .slider-wrapper").on("beforeChange", function(
    event,
    slick,
    currentSlide,
    nextSlide
  ) {
    var currentSlideindex = nextSlide;
    ++currentSlideindex;
    $(".showcase-style-2 .indicator-style-2 .current").text(
      check_number(currentSlideindex)
    );
  });

  function totalSlideNum(totalSlide) {
    $(".showcase-style-2 .indicator-style-2 .total").text(
      check_number(totalSlide)
    );
  }

  $(window).on("load", function() {
    var totalSlide = $(".showcase-style-2 .slider-wrapper").slick("getSlick")
      .slideCount;
    totalSlideNum(totalSlide);
  });

  function check_number(num) {
    var IsInteger = /^[0-9]+$/.test(num);
    return IsInteger ? "0" + num : null;
  }
}

// ============================= Showcase Style 3 ==============================
if ($(".showcase-style-3").length > 0) {
  $(".showcase-style-3 .slider-wrapper").slick({
    dots: false,
    infinite: true,
    speed: 500,
    arrows: true,
    dots: false,
    cssEase: "linear",
    prevArrow: $(".indicator-style-3 > .flaticon-up-arrow"),
    nextArrow: $(".indicator-style-3 > .flaticon-down-arrow")
  });

  // On before home slider change
  $(".slider-wrapper").on("beforeChange", function(
    event,
    slick,
    currentSlide,
    nextSlide
  ) {
    var totalSlide = slick.slideCount;
    var currentSlideindex = nextSlide;
    ++currentSlideindex;
    var progress = 100 / totalSlide;
    var progressHeight = progress * currentSlideindex;
    SliderProgressbarStart(progressHeight);
    $(".indicator-style-3 .current").text(check_number(currentSlideindex));
  });

  $(window).on("load", function() {
    var totalSlide = $(".slider-wrapper").slick("getSlick").slideCount;
    var progress = 100 / totalSlide;
    var progressHeight = progress * 1;
    SliderProgressbarStart(progressHeight);
  });

  function check_number(num) {
    var IsInteger = /^[0-9]+$/.test(num);
    return IsInteger ? "0" + num : null;
  }

  function SliderProgressbarStart(height) {
    $(".home-slider-progressbar .home-slider-progress-active").css({
      height: height + "%"
    });
  }
}

// ============================ Showcase Style 5 ===============================
if ($(".showcase-style-5").length > 0) {
  $(".slider-wrapper").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    autoplay: false,
    speed: 1000,
    autoplaySpeed: 5000,
    fade: true,
    prevArrow: $(".carousel-controlar > .prev"),
    nextArrow: $(".carousel-controlar > .next"),
    appendArrows: $(".showcase-style-5 .pagination-style-3")
  });

  $(".slider-wrapper").on("beforeChange", function(
    event,
    slick,
    currentSlide,
    nextSlide
  ) {
    var totalSlide = slick.slideCount;
    var currentSlideindex = nextSlide;
    ++currentSlideindex;
    $(".showcase-style-5 .pagination-style-3 .current").text(
      check_number(currentSlideindex)
    );
    $(".showcase-style-5 .pagination-style-3 .total").text(
      check_number(totalSlide)
    );
  });

  function totalSlideNum(totalSlide) {
    $(".showcase-style-5 .pagination-style-3 .total").text(
      check_number(totalSlide)
    );
  }

  $(window).on("load", function() {
    var totalSlide = $(".slider-wrapper").slick("getSlick").slideCount;
    totalSlideNum(totalSlide);
  });

  function check_number(num) {
    var IsInteger = /^[0-9]+$/.test(num);
    return IsInteger ? "0" + num : null;
  }
}


