var $ = jQuery;

$(window).bind('load', function() {
	// do NOT display popup again
	$('.privacy__close').click(function () {
		localStorage.setItem('privacy', 'hidden');

		$('html').removeClass('privacy__active');
	});



	// show popup when user came to footer [START]
	// user clicked close - do NOT display popup again
	if (localStorage.getItem('privacy') == 'hidden') {}
	else {
		// $('html').addClass('privacy__active');
	}
	// show popup when user came to footer [END]
});




