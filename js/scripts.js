jQuery(document).ready(function($){
  $('.welcome__bg').addClass('welcome__load');
  $('.header').addClass('header__load');

	var LoadParallax = function(p){
	  $('.parallax-window').parallax();
	}

	LoadParallax();

	if ($(document).width() > 760) {
	  var swiperSert = new Swiper('.sert-swiper-container', {
	    slidesPerView: 5,
	    loop: true,
	    autoplay: {
	      delay: 5000,
	    },
	    pagination: {
	      el: '.sert-swiper-pagination',
	    },
	  })
	}
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