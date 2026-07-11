window.Popper = require('popper.js').default;
window.$ = window.jQuery = require('jquery');
// require('lightbox2/dist/css/lightbox.min.css')
// window.lightbox = require('lightbox2');
import jQueryBridget from 'jquery-bridget';
import 'bootstrap';
import { WOW } from 'wowjs';
import 'owl.carousel/dist/assets/owl.carousel.css';
import 'owl.carousel';
// import 'ionicons/dist/ionicons';
import 'owl.carousel/dist/assets/owl.carousel.css';
import 'animate.css/animate.compat.css';
import Isotope from 'isotope-layout';
import '../../../source/assets/lib/mobile-nav/mobile-nav.js';
import '../../../source/assets/lib/easing/easing.min.js';
import '../../../source/assets/lib/waypoints/waypoints.min.js';

(function ($) {
  "use strict";

  function normalizePath(path) {
    return path.replace(/\/+$/, '') || '/';
  }

  function headerHeight() {
    return $('#header').outerHeight() || 0;
  }

  // Smooth scroll via GSAP ScrollToPlugin, falling back to jQuery.
  function smoothScrollTo(scrollTop) {
    var targetScroll = Math.max(0, scrollTop);

    $('html, body').stop(true);
    if (window.gsap) {
      window.gsap.killTweensOf(window);
    }

    if (window.gsap && window.ScrollToPlugin) {
      window.gsap.to(window, {
        duration: 0.9,
        ease: 'power3.inOut',
        overwrite: 'auto',
        scrollTo: { y: targetScroll, autoKill: false },
        onUpdate: function () {
          if (window.ScrollTrigger) {
            window.ScrollTrigger.update();
          }
        }
      });
    } else {
      $('html, body').animate({ scrollTop: targetScroll }, 900, 'easeInOutExpo');
    }
  }

  // Preloader (if the #preloader div exists)
  $(window).on('load', function () {
    if ($('#preloader').length) {
      $('#preloader').delay(100).fadeOut('slow', function () {
        $(this).remove();
      });
    }
  });

  // Back to top button
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });
  $('.back-to-top').click(function(){
    smoothScrollTo(0);
    return false;
  });

  // Initiate the wowjs animation library
  new WOW({
    live: false
  }).init();

  // Header scroll class
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('#header').addClass('header-scrolled');
    } else {
      $('#header').removeClass('header-scrolled');
    }
  });

  if ($(window).scrollTop() > 100) {
    $('#header').addClass('header-scrolled');
  }

  // Smooth scroll for the navigation and same-page section links.
  $('.main-nav a, .mobile-nav a, .scrollto, .lc-btn[href*="#"], .lc-footer a[href*="#"]').on('click', function(event) {
    var href = this.getAttribute('href');
    if (!href || href === '#') return;

    try {
      var url = new URL(href, window.location.href);

      if (normalizePath(url.pathname) == normalizePath(location.pathname) && url.hostname == location.hostname) {
        var target = $(url.hash);
        if (target.length) {
          event.preventDefault();
          var top_space = 0;

          if ($('#header').length) {
            top_space = headerHeight();

            if (! $('#header').hasClass('header-scrolled')) {
              top_space = top_space - 20;
            }
          }

          smoothScrollTo(target.offset().top - top_space);

          if ($(this).parents('.main-nav, .mobile-nav').length) {
            $('.main-nav .active, .mobile-nav .active').removeClass('active');
            $(this).closest('li').addClass('active');
          }

          if ($('body').hasClass('mobile-nav-active')) {
            $('body').removeClass('mobile-nav-active');
            $('.mobile-nav-toggle i').toggleClass('fa-times fa-bars');
            $('.mobile-nav-overly').fadeOut();
          }
          return false;
        }
      }
    } catch (e) { return; }
  });

  // Navigation active state on scroll
  var nav_sections = $('section[id], main[id]');
  var main_nav = $('.main-nav, .mobile-nav');

  function updateActiveNavOnScroll(current_scroll_position) {
    var matched = false;
    var main_nav_height = headerHeight();
    nav_sections.each(function() {
      var $section = $(this);
      var top = $section.offset().top - main_nav_height;
      var bottom = top + $section.outerHeight();

      if (current_scroll_position >= top && current_scroll_position <= bottom) {
        var id = $section.attr('id');
        var current_path = normalizePath(window.location.pathname);
        var $link = main_nav
          .find('a[href$="#' + id + '"]')
          .filter(function() {
            try {
              var url = new URL(this.getAttribute('href'), window.location.origin);
              var link_path = normalizePath(url.pathname);
              return link_path === current_path;
            } catch (e) { return false; }
          });
        if ($link.length) {
          main_nav.find('li').removeClass('active');
          $link.parent('li').addClass('active');
          matched = true;
          return false;
        }
      }
    });
    return matched;
  }

  $(window).on('scroll', function () {
    updateActiveNavOnScroll($(this).scrollTop());
  });

  $(window).on('load', function () {
    var hadMatch = updateActiveNavOnScroll($(window).scrollTop());

    if (!hadMatch && main_nav.find('li.active').length === 0) {
      var current_path = normalizePath(window.location.pathname);
      var $matches = main_nav.find('a').filter(function() {
        var href = this.getAttribute('href');
        if (!href || href.indexOf('#') !== -1) return false;
        try {
          var url = new URL(href, window.location.origin);
          return normalizePath(url.pathname) === current_path;
        } catch (e) { return false; }
      });
      if ($matches.length) {
        main_nav.find('li').removeClass('active');
        $matches.parent('li').addClass('active');
      }
    }
  });

  // Porfolio isotope and filter
  $(window).on('load', function () {
    jQueryBridget( 'isotope', Isotope, $ );
    var portfolioIsotope = $('.portfolio-container').isotope({
      itemSelector: '.portfolio-item'
    });
    $('#portfolio-flters li').on( 'click', function() {
      $("#portfolio-flters li").removeClass('filter-active');
      $(this).addClass('filter-active');
  
      portfolioIsotope.isotope({ filter: $(this).data('filter') });
    });

    // Testimonials carousel (uses the Owl Carousel library)
    $(".testimonials-carousel").owlCarousel({
      autoplay: true,
      dots: true,
      loop: true,
      items: 1
    });
  });

})(jQuery);
