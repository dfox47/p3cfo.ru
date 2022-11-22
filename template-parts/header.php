<!DOCTYPE html>

<html class="main_page" lang="ru">


<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, user-scalable=yes, maximum-scale=5" name="viewport">

	<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="/favicon/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="/favicon/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="/favicon/manifest.json">
	<link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="shortcut icon" href="/favicon/favicon.ico">

	<meta name="msapplication-config" content="/favicon/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">

	<title>VI ФОРУМ ЦЕНТРАЛЬНОГО ФЕДЕРАЛЬНОГО ОКРУГА ПО ГЧП</title>



	<!--all styles in one file with GULP-->
	<link rel="stylesheet" href="/styles.min.css?v<?php echo(date("YmdHis")); ?>">

	<link rel="stylesheet" href="/css/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="/js/slick/slick.css">
	<link rel="stylesheet" href="/js/slick/slick-theme.css">
<!--	<link rel="stylesheet" href="/css/main.css" />-->

	<link rel="stylesheet" href="/css/owl.carousel.min.css">
	<link rel="stylesheet" href="/css/owl.theme.default.min.css">

	<link rel="stylesheet" href="/include/fancyBox/jquery.fancybox.css" media="screen">
	<link rel="stylesheet" href="/include/jquery.countdown.package-2.0.1/jquery.countdown.css">

	<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
	<script src="/js/jquery.3.2.1.js"></script>
	<script src="/js/owl.carousel.min.js"></script>

	<script src="/include/jquery.scrollTo.min.js?201809251441"></script>



	<script src="/include/fancyBox/jquery.fancybox.pack.js"></script>

	<script src="/include/jquery.countdown.package-2.0.1/jquery.plugin.min.js"></script>
	<script src="/include/jquery.countdown.package-2.0.1/jquery.countdown.js"></script>
	<script src="/include/jquery.countdown.package-2.0.1/jquery.countdown-ru.js"></script>

	<script src="/js/owl.carousel.min.js"></script>


	<script src="/include/jssor.slider.mini.js"></script>

	<script src="/include/jquery-validation/jquery.validate.min.js"></script>
	<script src="/include/jquery-validation/messages_ru.min.js"></script>

	<script src="/include/main.js?v3"></script>

	<script src="/js/slick/slick.min.js"></script>

	<script src="/js/scroll_to.js"></script>
</head>



<body>
<div class="header_bg js-header-menu-close"></div>

<div class="header_wrap_2">
	<div class="header_wrap">
		<a class="logo js-scroll-to" href="#top">
			<?php if ( $_SERVER['REQUEST_URI'] == '/2017/' ) { ?>
				II
			<?php }
			elseif ( $_SERVER['REQUEST_URI'] == '/2018/' ) { ?>
				III
			<?php }
			elseif ( $_SERVER['REQUEST_URI'] == '/2019/' ) { ?>
				IV
			<?php }
			elseif ( $_SERVER['REQUEST_URI'] == '/2020/' ) { ?>
				V
			<?php }
			else { ?>
				VI
			<?php } ?>

			Форум<br>
			Центрального<br>
			Федерального<br>
			Округа по ГЧП
		</a>

		<div class="header">
			<div class="header_contacts">
				<p><span class="header__title">Телефон: </span> <a class="header__link js-phone" href="javascript:void(0);">+7 (495) 988-77-13</a></p>

				<p><span class="header__title">E-mail:</span> <a class="header__link" href="mailto:info@p3cfo.ru" target="_blank">info@p3cfo.ru</a></p>
			</div>

			<?php include 'header_links.php'; ?>

			<span class="header__title">Социальные сети:</span>

			<div class="social_links">
<!--				<a class="social_links__fb" href="//www.facebook.com/p3region/" target="_blank" title="facebook">&nbsp;</a>-->
				<a class="social_links__telegram" href="//t.me/ROSINFRA" target="_blank" title="telegram">&nbsp;</a>
<!--				<a class="social_links__inst" href="//www.instagram.com/rosinfracongress/" target="_blank" title="instagram">&nbsp;</a>-->
				<a class="social_links__youtube" href="//www.youtube.com/watch?v=xdbkRNsR-Js&list=PLtW2B4_VWGzCdmQgKc8LBoPptd4Bahl0a" target="_blank" title="youtube">&nbsp;</a>

				<span class="header_menu_toggle js-header-menu-toggle"><span></span></span>
			</div>

			<?php include_once 'header_menu.php'; ?>
		</div>
	</div>
</div>