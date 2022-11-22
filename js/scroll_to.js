var $ = jQuery.noConflict();



$(window).on('load', function () {
	$('.js-scroll-to').click(function (e) {
		var link = $(this).attr('href');

		if ( link.length ) {
			$('body, html').animate({
				scrollTop: $(link).offset().top - 130
			}, 700);

			window.location.hash = link;
		}
		else {
			console.log('link not exist: ' + link);
		}

		e.preventDefault();
	});
});



