if ($('.animate-puk').length > 0 || $('.static-animate-puk').length > 0) {
  var windowpos = $(window).scrollTop();
  if (windowpos == 0) {
    $('.static-animate-puk').each(function(){
      var animateEffect = $(this).attr('data-effect');
      var animateDelay = $(this).attr('data-delay');
      $(this).addClass('effect-'+animateEffect);
      $(this).css({'transition-delay': animateDelay})
    })
  }
  $(window).scroll(function() {
    $('.animate-puk').each(function(){
      var windowpos = $(window).scrollTop();
      var viewportTop = $(window).scrollTop();
      var viewportBottom = viewportTop + $(window).height();
      var animateTop = $(this).offset().top;
      var animateBottom = animateTop + $(this).outerHeight();
      var animateHeight = $(window).outerHeight();
      var animateEffect = $(this).attr('data-effect');
      var animateDelay = $(this).attr('data-delay');
      if (animateBottom > viewportTop && animateTop < viewportBottom) {
        $(this).addClass('effect-'+animateEffect);
        $(this).css({'transition-delay': animateDelay})
      }
    })
  })
}