<div class="header_menu_wrap js-header-menu">
	<ul class="header_menu">
		<?php // 2018
		if ( $_SERVER['REQUEST_URI'] == '/2017/' ) { ?>
			<li><a class="js-scroll-to js-header-menu-close" href="#contacts">Контакты</a></li>
			<li><a class="js-scroll-to js-header-menu-close" href="#news">Новости</a></li>
			<li><a class="js-scroll-to js-header-menu-close" href="#media">СМИ</a></li>
			<li><a class="js-scroll-to js-header-menu-close" href="#partners">Партнеры</a></li>
			<li><a class="js-scroll-to js-header-menu-close" href="#members">Спикеры</a></li>
			<li><a class="js-scroll-to js-header-menu-close" href="#photo">Фото</a></li>
			<li><a class="js-scroll-to js-header-menu-close" href="#video">Видео</a></li>
			<li><a class="js-scroll-to js-header-menu-close" href="#programm">Программа</a></li>
			<li><a class="js-scroll-to js-header-menu-close" href="#about">О мероприятии</a></li>
		<?php }
		elseif ( $_SERVER['REQUEST_URI'] == '/2018/' ) { ?>
			<li><a class="js-scroll-to js-header-menu-close" href="#contacts">Контакты</a></li>
			<li><a class="js-scroll-to js-header-menu-close" href="#news">Новости</a></li>
			<li><a class="js-scroll-to js-header-menu-close" href="#media">СМИ</a></li>
			<li><a class="js-scroll-to js-header-menu-close" href="#members">Спикеры</a></li>
			<li><a class="js-scroll-to js-header-menu-close" href="#partners">Партнеры</a></li>
			<li><a class="js-scroll-to js-header-menu-close" href="#photo">Фото</a></li>
<!--			<li><a class="js-scroll-to js-header-menu-close" href="#video">Видео</a></li>-->
			<li><a class="js-scroll-to js-header-menu-close" href="#programm">Программа</a></li>
			<li><a class="js-scroll-to js-header-menu-close" href="#about">О мероприятии</a></li>
		<?php }
		elseif ( $_SERVER['REQUEST_URI'] == '/2019/' ) { ?>
			<li><a class="js-scroll-to js-header-menu-close" href="#programm">Программа</a></li>
			<li><a class="js-scroll-to js-header-menu-close" href="#members">Спикеры</a></li>
			<li><a class="js-scroll-to js-header-menu-close" href="#photo">Фото</a></li>
			<li><a class="js-scroll-to js-header-menu-close" href="#video">Видео</a></li>
			<li><a class="js-scroll-to js-header-menu-close" href="#media">СМИ</a></li>
			<li><a class="js-scroll-to js-header-menu-close" href="#news">Новости</a></li>
			<li><a class="js-scroll-to js-header-menu-close" href="#contacts">Контакты</a></li>
		<?php }
		elseif ( $_SERVER['REQUEST_URI'] == '/2022/' ) { ?>
			<li><a class="js-scroll-to js-header-menu-close" href="#photo">Фото</a></li>
			<li><a class="js-scroll-to js-header-menu-close" href="#programm">Программа</a></li>
			<li><a class="js-scroll-to js-header-menu-close" href="#members">Спикеры</a></li>
			<li><a class="js-scroll-to js-header-menu-close" href="#media">СМИ</a></li>
			<li><a class="js-scroll-to js-header-menu-close" href="#news">Новости</a></li>
			<li><a class="js-scroll-to js-header-menu-close" href="#contacts">Контакты</a></li>
		<?php }
		elseif ( $_SERVER['REQUEST_URI'] == '/' ) { ?>
			<li><a class="js-scroll-to js-header-menu-close" href="#photo">Фото</a></li>
			<li><a class="js-scroll-to js-header-menu-close" href="#video">Видео</a></li>
			<li><a class="js-scroll-to js-header-menu-close" href="#programm">Программа</a></li>
			<li><a class="js-scroll-to js-header-menu-close" href="#members">Спикеры</a></li>
			<li><a class="js-scroll-to js-header-menu-close" href="#media">СМИ</a></li>
			<li><a class="js-scroll-to js-header-menu-close" href="#news">Новости</a></li>
			<li><a class="js-scroll-to js-header-menu-close" href="#contacts">Контакты</a></li>
		<?php }
		else { ?>
			<li><a class="js-scroll-to js-header-menu-close" href="#photo">Фото</a></li>
			<li><a class="js-scroll-to js-header-menu-close" href="#video">Видео</a></li>
			<li><a class="js-scroll-to js-header-menu-close" href="#programm">Программа</a></li>
			<li><a class="js-scroll-to js-header-menu-close" href="#members">Спикеры</a></li>
			<li><a class="js-scroll-to js-header-menu-close" href="#media">СМИ</a></li>
			<li><a class="js-scroll-to js-header-menu-close" href="#news">Новости</a></li>
			<li><a class="js-scroll-to js-header-menu-close" href="#contacts">Контакты</a></li>
		<?php } ?>
	</ul>

	<?php include 'header_links.php'; ?>
</div>