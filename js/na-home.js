(function() {
  'use strict';

  $('.na-home-links').on('click', '.na-home-link', function(event) {
    var linkNode = $(this)
    var contentNode = $('.na-content')
    var bgId = linkNode.data('home-link-id')

    $('.na-home-link').removeClass('na-home-link--active')
    linkNode.addClass('na-home-link--active')

    contentNode.removeClass('na-content--air').removeClass('na-content--land').removeClass('na-content--sea');
    contentNode.addClass('na-content--' + bgId);

    event.preventDefault();
  })
}())
