(function($) {
  "use strict";
  
  $('.menu-services').click(function() {
    $('.sub-services').slideToggle("fast");
  });

  // mobile menu

  $("#mobile-menu").meanmenu({
    meanMenuContainer: ".mobile-menu",
    meanScreenWidth: "991"
  });


  // sticky
  var wind = $(window);
  var sticky = $('#sticky-header');
  wind.on('scroll', function () {
    var scroll = wind.scrollTop();
    if (scroll < 180) {
      sticky.removeClass('sticky');
    } else {
      sticky.addClass('sticky');
    }
  });

  // offcanvas menu
  $(".menu-tigger").on("click", function() {
    $(".offcanvas-menu,.offcanvas-overly").addClass("active");
    return false;
  });
  $(".menu-close,.offcanvas-overly").on("click", function() {
    $(".offcanvas-menu,.offcanvas-overly").removeClass("active");
  });

  //   Slider activation

  function mainSlider() {
    var BasicSlider = $(".slider-active");
    BasicSlider.on("init", function(e, slick) {
      var $firstAnimatingElements = $(".single-slider:first-child").find(
        "[data-animation]"
      );
      doAnimations($firstAnimatingElements);
    });
    BasicSlider.on("beforeChange", function(e, slick, currentSlide, nextSlide) {
      var $animatingElements = $(
        '.single-slider[data-slick-index="' + nextSlide + '"]'
      ).find("[data-animation]");
      doAnimations($animatingElements);
    });
    BasicSlider.slick({
      autoplay: true,
      autoplaySpeed: 10000,
      fade: true,
      prevArrow:
        '<button type="button" class="slick-prev"><i class="icofont-long-arrow-left"></i>Prev</button>',
      nextArrow:
        '<button type="button" class="slick-next"><i class="icofont-long-arrow-right"></i>Next</button>',
      arrows: false,
      dots: true,
      responsive: [
        { breakpoint: 767, settings: { dots: false, arrows: false } }
      ]
    });

    function doAnimations(elements) {
      var animationEndEvents =
        "webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend";
      elements.each(function() {
        var $this = $(this);
        var $animationDelay = $this.data("delay");
        var $animationType = "animated " + $this.data("animation");
        $this.css({
          "animation-delay": $animationDelay,
          "-webkit-animation-delay": $animationDelay
        });
        $this.addClass($animationType).one(animationEndEvents, function() {
          $this.removeClass($animationType);
        });
      });
    }
  }
  mainSlider();

  // slider-three
  $('.slider-team').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    centerMode: false,
    variableWidth: true,
    prevArrow:false,
      nextArrow:false
  });

  $('.slider-v-inm').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    centerMode: false,
    variableWidth: true,
    prevArrow: false,
      nextArrow:
        '<a class="slick-next"><img src="' + theme_directory + '/assets/img/assets/slide-right.png" /></a>',
  });
  


  // isotope
  $(".grid-events").imagesLoaded(function() {
    var $grid = $(".grid-events").isotope({
    itemSelector: ".grid-events-items",
    layoutMode: 'fitRows'
    });

    // filter items on button click
    $('#select-event').on('change', function() {
        var filterValue = $(this).val();
        // alert(filterValue);
        $grid.isotope({ filter: filterValue });
    });
});
  
  $(".factory-active").imagesLoaded(function() {
    var $grid = $(".factory-active").isotope({
      itemSelector: ".grid-facto",
      percentPosition: true,
      masonry: {
        // use outer width of grid-sizer for columnWidth
        // columnWidth: 1
      }
    });

    // filter items on button click
    $(".filter-factory").on("click", "a", function () {
      // alert("sadsad");
        var filterValue = $(this).attr("data-filter");
        
        $grid.isotope({ filter: filterValue });
    });
  });

  $(".cron-active").imagesLoaded(function() {
    var $grid = $(".cron-active").isotope({
      itemSelector: ".grid-cron",
      percentPosition: true,
      masonry: {
        // use outer width of grid-sizer for columnWidth
        // columnWidth: 1
      }
    });

    // filter items on button click
    $(".filter-cron").on("click", "a", function () {
      // alert("sadsad");
        var filterValuec = $(this).attr("data-filter");
        
        $grid.isotope({ filter: filterValuec });
    });
  });
  //for menu active class
 

  // counterUp

  // $(".counter").counterUp({
  //   delay: 10,
  //   time: 1000
  // });

  // testimonial

  $(".testimonial-active").owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: false,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 1
      },
      1000: {
        items: 1
      }
    }
  });

  // portfolio
  $(".portfolio-active").isotope({
    itemSelector: ".grid-item",
    percentPosition: true,
    masonry: {
      // use outer width of grid-sizer for columnWidth
      columnWidth: 1
    }
  });

  // popup
  $(".view").magnificPopup({
    type: "image",
    gallery: {
      enabled: true
    }
  });

  $(".video-view").magnificPopup({
    type: "iframe"
  });

  // clients

  $(".clients-active").owlCarousel({
    loop: true,
    nav: false,
    autoplay: true,
    responsive: {
      0: {
        items: 2
      },
      320: {
        items: 2
      },
      480: {
        items: 3
      },
      767: {
        items: 5
      },
      991: {
        items: 6
      },
      1000: {
        items: 6
      }
    }
  });


})(jQuery);
