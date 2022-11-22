


$(document).ready(function() {
	$('.mailButton').fancybox({
		autoCenter:     true,
		autoSize:       false,
		closeClick:     false,
		closeEffect:    'none',
		fitToView:      false,
		fixed:          false,
		height:         600,
		maxHeight:      600,
		maxWidth:       750,
		openEffect:     'none',
		width:          '70%'
	});

	$(".regButtonT").fancybox({
		fixed : false,
		autoCenter : true
	});

	$('.fbslider').fancybox({
		autoCenter: true,
		fixed:      false,
		type:       'iframe'
	});

	var fio         = $('#fio');
	var org         = $('#org');
	var email       = $('#email');
	var site        = $('#site');

	fio.focus(function() {
		if (fio.val() === 'ФИО') fio.val('');
	});

	fio.blur(function() {
		if (fio.val() === '') fio.val('ФИО');});

	org.focus(function() {
		if (org.val() === 'Компания') org.val('');
	});

	org.blur(function() {
		if (org.val() === '') org.val('Компания');
	});

	email.focus(function() {
		if (email.val() === 'E-mail') email.val('');
	});

	email.blur(function() {
		if (email.val() === '') email.val('E-mail');
	});

	site.focus(function() {
		if (site.val() === 'Сайт компании') site.val('');
	});

	site.blur(function() {
		if (site.val() === '') site.val('Сайт компании');
	});



	jQuery.validator.setDefaults({
		debug: true,
		success: "valid"
	});

	jQuery.validator.addMethod("notFIO", function(value, element) {
		return value !== 'ФИО'
	}, "ФИО");

	jQuery.validator.addMethod("notOrg", function(value, element) {
		return value !== 'Компания'
	}, "Компания");

	$("#sbscrbForm").validate({
		rules: {
			'input_name[0]': {
				required: true,
				notFIO: true
			},
			'input_name[1]': {
				required: true,
				notOrg: true
			},
			'input_name[2]': {
				required: true
			}
		},
		errorPlacement: function( error, element ) {}
	});


	$('.headerMenu a').click(function(){
		var idscroll = $(this).attr('href');
		$.scrollTo($(idscroll).offset().top, 600);
		return false;
	});

	$(".regButton").fancybox({
		type: 'iframe',
		minHeight: '560'
	});

	$(".fancyboxDetales").fancybox({
		minHeight: '560',
		width: 800,
		minWidth: 600,
		maxWidth: 800
	});

	$(".show_more_news").click(function(){
		$(".news2Wrap").addClass("showTrue");
		$(".show_more_news").hide();
	});

	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollup2').fadeIn();
		} else {
			$('.scrollup2').fadeOut();
		}
	});

	$('.scrollup').click(function(){
		$("html, body").animate({ scrollTop: 0 }, 600);

		return false;
	});

	$('.scrollup2').click(function(){
		$("html, body").animate({ scrollTop: 0 }, 600);

		return false;
	});
});

function AjaxFormRequest() {
	var form = $('.js-subscribe-form');

	var privacy = $('.form_subscribe__privacy:checked').length;

	form.validate();

	if ( privacy < 1 ) {
		$('.form_subscribe__privacy').parent().addClass('error2');
	}
	else if (form.valid()) {
		jQuery.ajax({
			url: "mail.php",
			type: "POST",
			dataType: "html",
			data: jQuery("#sbscrbForm").serialize(),
			success: function() {
				$.fancybox.open([{
					href : '#formSuccessWrap',
					fixed : false,
					autoCenter : true
				}]);

				$('#sbscrbForm')[0].reset();
			},
			error: function() {
				console.log('error');
			}
		});
	}
}
