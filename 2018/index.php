


<?php // Header
include_once '../template-parts/header.php'; ?>

<?php // Home slider
include_once 'template-parts/homeSlider.php'; ?>

<!-- спонсоры -->
<div class="wrap">
	<ul class="sponsors">
		<li>
			<p class="sponsors__title">Организаторы:</p>

			<div class="sponsors__list">
				<a class="partner__mosreg" href="//mosreg.ru" target="_blank"><img src="/images/partners/mos_oblast.svg" alt=""/></a>
				<a class="partner__pppcenter" href="//www.pppcenter.ru/" target="_blank"><img src="/images/partners/pppcenter.svg" alt="pppcenter.ru" /></a>
			</div>
		</li>
	</ul>
</div>

<?php // About
include_once 'template-parts/about.php'; ?>

<?php // Programm
include_once 'template-parts/programm.php'; ?>

<?php // Speakers
include_once 'template-parts/speakers.php'; ?>

<?php // Partners
include_once 'template-parts/partners.php'; ?>

<?php // Video
include_once 'template-parts/video.php'; ?>

<?php // Photo
include_once 'template-parts/photo.php'; ?>







<a class="anchor" id="media"></a>

<div class="smiWrap">
	<div class="title_2">
		<div class="wrap">
			<h2>СМИ</h2>
		</div>
	</div>

	<div class="smi">
		<ul>
			<li>
				<a href="/doc/P3cfo_Press-reliz_A4.docx" target="_blank"><div>Пресс-релиз</div></a>
			</li>

			<li>
				<a href="/doc/post_relize.docx" target="_blank"><div>Пост-релиз</div></a>
			</li>
		</ul>
	</div>
</div>



<?php // News
include_once '../template-parts/news.php'; ?>

<?php // Subscribe
include_once '../template-parts/subscribe.php'; ?>



<div id="formSuccessWrap" style="display:none;">
	<div class="formSuccess">
		<p class="bigTxt">Заявка отправлена.</p>

		<pre><span id="results"></span></pre>
	</div>
</div>

<div id="startMessage" style="display:none;">
	<div class="formSuccess">
		<p class="bigTxt">для регистрации необходимо скачать <a style="color:#0069b4;" href="/doc/blank_registracii_uchastnika_2016.docx" target="_blank">бланк регистрации</a> и отправить заполненный бланк по адресу <a style="color:#0069b4;" href="mailto:support@ticketforevent.com" target="_blank">support@ticketforevent.com</a></p>
		<p class="bigTxt">&nbsp;</p>
		<p class="bigTxt">По вопросам регистрации и оплаты участия: <span style="color:#0069b4;">+7 (499) 271-96-79</span></p>
		<p class="bigTxt">&nbsp;</p>
		<p class="bigTxt">По вопросам деловой программы, участия и партнёрства: <br> <span style="color:#0069b4;">+7 (905) 761-01-43</span></p>
	</div>
</div>



<?php // Hotels
include_once '../template-parts/hotels.php'; ?>

<?php // Popups
include_once '../template-parts/popup.php'; ?>

<?php // Should be last
// Footer
include_once '../template-parts/footer.php'; ?>


