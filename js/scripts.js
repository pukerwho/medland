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
	    autoplay: {
	      delay: 5000,
	    },
	    pagination: {
	      el: '.sert-swiper-pagination',
	    },
	  })
	}
})

//Callback Form Open
if ($('.callback').length > 0) {
  $(document).on('click', '.callback', function(){
    $('.callback__modal').addClass('callback__modal-open');
    $('body').addClass('modal-open');
    $('.modal__bg').addClass('modal__bg-open');
  });
}

//Callback Form Close
if ($('.callback__close').length > 0) {
  $(document).on('click', '.callback__close', function(){
    $('.callback__modal').removeClass('callback__modal-open');
    $('body').removeClass('modal-open');
    $('.modal__bg').removeClass('modal__bg-open');
  });
}

$(window).scroll(function() {
	var scrollTop = $(window).scrollTop();
	console.log(scrollTop)
	if (scrollTop != 0) {
		$('.scroll-down').fadeOut();
	} else {
		$('.scroll-down').fadeIn();
	}
})