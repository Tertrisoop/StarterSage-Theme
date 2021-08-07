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