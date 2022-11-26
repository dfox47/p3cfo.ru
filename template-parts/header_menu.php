<div class="header_menu_wrap js-header-menu">
	<ul class="header_menu">
		<?php $links = array(
			'#photo'        => 'Фото',
			'#video'        => 'Видео',
			'#programm'     => 'Программа',
			'#members'      => 'Спикеры',
			'#media'        => 'СМИ',
			'#news'         => 'Новости',
			'#contacts'     => 'Контакты'
		);

		// 2017
		if ( $_SERVER['REQUEST_URI'] == '/2017/' ) {
			$links = array(
				'#contacts'     => 'Контакты',
				'#news'         => 'Новости',
				'#media'        => 'СМИ',
				'#partners'     => 'Партнеры',
				'#members'      => 'Спикеры',
				'#photo'        => 'Фото',
				'#video'        => 'Видео',
				'#programm'     => 'Программа',
				'#about'        => 'О мероприятии'
			);
		}
		elseif ( $_SERVER['REQUEST_URI'] == '/2018/' ) {
			$links = array(
				'#contacts'     => 'Контакты',
				'#news'         => 'Новости',
				'#media'        => 'СМИ',
				'#members'      => 'Спикеры',
				'#partners'     => 'Партнеры',
				'#photo'        => 'Фото',
				'#programm'     => 'Программа',
				'#about'        => 'О мероприятии'
			);
		}
		elseif ( $_SERVER['REQUEST_URI'] == '/2019/' ) {
			$links = array(
				'#programm'     => 'Программа',
				'#members'      => 'Спикеры',
				'#photo'        => 'Фото',
				'#video'        => 'Видео',
				'#media'        => 'СМИ',
				'#news'         => 'Новости',
				'#contacts'     => 'Контакты'
			);
		}
		elseif ( $_SERVER['REQUEST_URI'] == '/2022/' ) {
			$links = array(
				'#photo'        => 'Фото',
				'#programm'     => 'Программа',
				'#members'      => 'Спикеры',
				'#media'        => 'СМИ',
				'#news'         => 'Новости',
				'#contacts'     => 'Контакты'
			);
		}
		elseif ( $_SERVER['REQUEST_URI'] == '/' ) {
			$links = array(
				'#photo'        => 'Фото',
				'#video'        => 'Видео',
				'#programm'     => 'Программа',
				'#members'      => 'Спикеры',
				'#media'        => 'СМИ',
				'#news'         => 'Новости',
				'#contacts'     => 'Контакты'
			);
		}

		foreach($links as $link => $linkTitle) { ?>
			<li><a class="js-scroll-to js-header-menu-close" href="<?php echo $link; ?>"><?= $linkTitle; ?></a></li>
		<?php } ?>
	</ul>

	<?php include 'header_links.php'; ?>
</div>