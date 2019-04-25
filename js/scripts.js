jQuery(document).ready(function($){
  $('.welcome__bg').addClass('welcome__load');
  $('.header').addClass('header__load');

	var LoadParallax = function(p){
	  $('.parallax-window').parallax();
	}

	LoadParallax();
})

$(window).scroll(function() {
	var scrollTop = $(window).scrollTop();
	console.log(scrollTop)
	if (scrollTop != 0) {
		$('.scroll-down').fadeOut();
	} else {
		$('.scroll-down').fadeIn();
	}
})