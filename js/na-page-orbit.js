'use strict';

$('#na-page-orbit-list').on('after-slide-change.fndtn.orbit', function(event, orbit) {
  var currentSlide = orbit.slide_number
  var linkNode = $('.na-home-link--' + currentSlide)

  $('.na-home-link').removeClass('na-home-link--active')
  linkNode.addClass('na-home-link--active')
});
