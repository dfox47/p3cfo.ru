


var $ = jQuery;

// example
// <span class="js-news-list-link" data-link="https://rosinfra.ru/news/dajdzest-nacionalnogo-centra-gcp-za-dva-mesaca-zapuseno-227-konkursnyh-procedur-po-proektam-gcp"></span>

$(window).bind('load', function() {
	var $newsLink = $('.js-news-list-link');

	if ( $newsLink.length ) {
		$newsLink.each(function () {
			const $this     = $(this);
			const ext_url   = $this.attr('data-link');
			let host_http;
			let hostname;

			if (ext_url.indexOf("//") > -1) {
				host_http   = ext_url.split('/')[0];
				hostname    = ext_url.split('/')[2];
			}
			else {
				host_http   = '';
				hostname    = ext_url.split('/')[0];
			}

			const host_full = host_http + '//' + hostname;

			$.ajax({
				method: 'POST',
				url: '/add_news.php',
				data: {
					'ext_url': ext_url
				},
				success: function (data) {
					const $data         = $(data);
					const $h1           = $data.find('h1').html();
					const $img          = $data.find('.article__img').attr('src');
					const $date         = $data.find('.meta__time-changer').parent().html();

					$this.parent().append('<div class="news_list__item"><a href="' + ext_url + '" target="_blank">' +
						'<img src="' + host_full + $img + '" alt="">' +
						'<span class="news_list__date">' + $date + '</span>' +
						'<span class="news_list__desc">' + $h1 + '</span>' +
						'</a></div>');

					$this.find('.meta__time-changer').remove();

					$this.remove();
				},
				error: function () {
					console.log("Error");
				}
			});
		});
	}
});


