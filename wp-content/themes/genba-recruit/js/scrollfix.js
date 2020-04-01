( function( $ ) {
  var $body = $('body'),
      $navTypeA = $('.main-navigation'),
      navTypeAOffsetTop = $navTypeA.offset().top;

  $(window).on('scroll', function () {
    if($(this).scrollTop() > navTypeAOffsetTop) {
      $body.addClass('is-fixed');
    } else {
      $body.removeClass('is-fixed');
    }
  });
} )( jQuery );
