var $ = jQuery;


$(window).bind('load', function() {
	$('.slider-video').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		dots: false,
		asNavFor: '.slider-video__thumbnails',
	});

	$('.slider-video__thumbnails').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		arrows: true,
		asNavFor: '.slider-video',
		focusOnSelect: true
	});



	if ( $('.table_programm__title_2').length ) {
		$(document).on('click', '.table_programm__title_2', function () {
			$(this).parent().parent().find('.table_programm__desc').toggleClass('active');
		});
	}

	if ( $('.js-news-more').length ) {
		$(document).on('click', '.js-news-more', function () {
			var $this = $(this);

			$this.parent().parent().find('.js-news-list').addClass('active');

			$this.hide();
		});
	}



	$('.js-register-popup-show').click(function() {
		$('.register_popup').toggleClass('active');
	});

	$('.js-register2-popup-show').click(function() {
		$('.register_2__popup').toggleClass('active');
	});

	$('.js-register-popup-close').click(function() {
		$('.register_popup').removeClass('active');
	});

	$('.js-register2-popup-close').click(function() {
		$('.register_2__popup').removeClass('active');
	});



	if ( $('.slider__video').length ) {
		$('.slider__video').find(".owl-carousel").owlCarousel({
			// autoplay:           true,
			// autoplayTimeout:    5000,
			dots:               false,
			items:              1,
			loop:               true,
			nav:                true,
			navText: ['<div class="slider__navigation__prev"></div>', '<div class="slider__navigation__next"></div>']
		});
	}



	if ( $('.js-slide-select').length ) {
		$(document).on('click', '.js-slide-select', function () {
			var slideId = $(this).attr('data-slide-id');

			$('.slider__video').find('.owl-carousel').trigger('to.owl.carousel', slideId);
		});
	}

	$('.js-header-menu-toggle').click(function () {
		$('body').toggleClass('header_menu_active');
	});

	$('.js-header-menu-close').click(function () {
		$('body').removeClass('header_menu_active');
	});



	// popup Covid [START]
	var $popupCovid             = $('.js-popup');
	var date                    = new Date();
	var currentTime             = date.getHours();
	var currentTimePlusHour     = currentTime + 1;
	var setTime                 = localStorage.getItem('covidClosedTime');

	if ( !setTime || currentTime > setTime ) {
		$popupCovid.addClass('active');
	}

	$('.js-popup-close').click(function () {
		$popupCovid.removeClass('active');
		localStorage.setItem('covidClosedTime', currentTimePlusHour.toString());
	});
	// popup Covid [END]
});


