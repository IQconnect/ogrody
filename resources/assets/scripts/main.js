// Import everything from autoload
import './autoload/**/*';

// Import library
import AOS from 'aos';

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';

//import header from './components/header';
import hamburger from './components/hamburger';
import header from './components/header';
import menu from './components/menu';
import preloader from './components/preloader';
import realizations from './components/realizations';


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
jQuery(document).ready(() => {
  routes.loadEvents();
  header.init();
  menu.init();
  preloader.init();
  hamburger.init();
  realizations.init();
  AOS.init({
    disable: function() {
      var maxWidth = 1200;
      return window.innerWidth < maxWidth;
    },
  });
});

