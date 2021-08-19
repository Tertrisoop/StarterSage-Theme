// import external dependencies
import 'jquery';

// Import everything from autoload
import './autoload/**/*'

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());

jQuery(window).scroll(function() {    
  var scroll = jQuery(window).scrollTop();

  if (scroll >= 100) {
      jQuery('#header').addClass('sticky');
  } else {
      jQuery('#desktop-header').removeClass('sticky');
  }

  if (scroll >= 30) {
      jQuery('#header').addClass('sticky');
  } else {
      jQuery('#header').removeClass('sticky');
  }
});

jQuery(window).scroll(function() {

const url = 'https://corona.lmao.ninja/v2/all';
const analyze_comments = (url) => {
  fetch(url)
    .then((response) => response.json())
    .then((results) => {
      if (results) {
       jQuery('#total').html(new Intl.NumberFormat().format(results.cases));
       jQuery('#death').html(new Intl.NumberFormat().format(results.deaths));
       jQuery('#recover').html(new Intl.NumberFormat().format(results.recovered));
       jQuery('#active').html(new Intl.NumberFormat().format(results.active));
      }
    })
    .catch((error) => {
      console.log(error);
    });
};
analyze_comments(url);
});
jQuery(function($) {
  
  var doAnimations = function() {
    
    var offset = $(window).scrollTop() + $(window).height(),
        $animatables = $('.animatable');
    
    if ($animatables.length == 0) {
      $(window).off('scroll', doAnimations);
    }
    
        $animatables.each(function() {
       var $animatable = $(this);
            if (($animatable.offset().top + $animatable.height() - 20) < offset) {
        $animatable.removeClass('animatable').addClass('animated');
            }
    });

    };

    $(window).on('scroll', doAnimations);
  $(window).trigger('scroll');

});
