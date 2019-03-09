/*----------------------------------------------------*/
/*	#CAROUSELs
/*----------------------------------------------------*/

// #Portfolio Back Slider
jQuery(document).ready(function($){

  "use strict";

  var owl  = $("#sliderBack");

  owl.owlCarousel({
    items: 1,
    nav: true,
    navText: [],
    dots: false,
    responsive: {
      320: {
        dots: true,
        nav: false
      },
      500: {
        dots: false,
        nav: true
      },
    }
  });
});

// #Portfolio Front Slider
jQuery(document).ready(function($){

  "use strict";

  var owl  = $("#sliderFront");

  owl.owlCarousel({
    items: 1,
    nav: true,
    navText: [],
    dots: false,
    margin: 30,
    responsive: {
      320: {
        dots: true,
        nav: false,
        margin: 0,
      },
      400: {
        dots: true,
        nav: false,
        items: 2,
        margin: 20,
      },
      500: {
        dots: false,
        nav: true,
        items: 2
      },
      576: {
        items: 3
      },
      768: {
        items: 4
      },
      992: {
        items: 5,
        margin: 36
      }
    }
  });
});

// Show/hide sliders
jQuery(document).ready(function($){

  "use strict";

  $('.frontSlide').click(function (e) {
    e.preventDefault();
    var index = $(this).parent().index();
    $('.service-slider--back').trigger('to.owl.carousel', [index, 10, true]);
    $('.service-slider--front').addClass('is-back');
    $('.service-slider--back').addClass('is-front');
  });

  $('.close-slider').click(function (e) {
    e.preventDefault();
    $('.service-slider--back').removeClass('is-front');
    $('.service-slider--front').removeClass('is-back');
  });
});


// #Price Slider
jQuery(document).ready(function($){

  "use strict";

  var owl  = $("#sliderPrice");

  owl.owlCarousel({
    items: 1,
    nav: true,
    navText: [],
    dots: false,
    margin: 28,
    responsive: {
      320: {
        dots: true,
        nav: false
      },
      500: {
        dots: false,
        nav: true
      },
      768: {
        items: 2
      },
      992: {
        items: 3
      }
    }
  });
});


/*----------------------------------------------------*/
/*  #MOVING IMAGE ON HOVER
/*----------------------------------------------------*/

jQuery(document).ready(function($){

  $('.page-heading__img img').mousemove(function(e){
    var x = -(e.pageX + this.offsetLeft) / 30;
    var y = -(e.pageY + this.offsetTop) / 30;
    $(this).css('transform', 'translate(' + x + 'px, ' + y + 'px)');
  });

});

/*----------------------------------------------------*/
/*  #SHOW MENU
/*----------------------------------------------------*/

jQuery(document).ready(function($){

  $('#hamburgerHolder').click(function (e) { 
    e.preventDefault();
    $('.mobile-nav').addClass('is-active');
  });

  $('.close-menu').click(function (e) { 
    e.preventDefault();
    $('.mobile-nav').removeClass('is-active');
  });

});