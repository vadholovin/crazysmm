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
    dots: false
  });
});

// #Portfolio Front Slider
jQuery(document).ready(function($){

  "use strict";

  var owl  = $("#sliderFront");

  owl.owlCarousel({
    items: 5,
    nav: true,
    navText: [],
    dots: false,
    margin: 36
  });
});

// Show/hide sliders
jQuery(document).ready(function($){

  "use strict";

  $('.frontSlide').click(function (e) {
    e.preventDefault();
    var index = $(this).parent().index();
    $('.service-slider--back').trigger('to.owl.carousel', [index, 500, true]);
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
    items: 3,
    nav: true,
    navText: [],
    dots: false,
    margin: 28
  });
});