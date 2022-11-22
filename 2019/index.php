


<!-- Header -->
<?php include_once '../template-parts/header.php'; ?>

<!-- Home slider -->
<?php include_once 'template-parts/homeSlider.php'; ?>

<!-- спонсоры -->
<div class="wrap">
	<ul class="sponsors">
		<li>
			<p class="sponsors__title">Организаторы:</p>

			<div class="sponsors__list">
				<a class="partner__mosreg" href="//mosreg.ru" target="_blank"><img src="/images/header_logo2_01.jpg" alt=""/></a>
				<a class="partner__pppcenter" href="//www.pppcenter.ru/" target="_blank"><img src="/images/partners/pppcenter.svg" alt="pppcenter.ru" /></a>
			</div>
		</li>
	</ul>
</div>



<?php // About
include_once 'template-parts/about.php'; ?>

<?php // Photo
include_once 'template-parts/photo.php'; ?>

<?php // Video
//include_once 'template-parts/video.php'; ?>

<?php // Programm
include_once 'template-parts/programm.php'; ?>

<?php // Educational programm
include_once 'template-parts/programm_edu.php'; ?>

<?php // Speakers
include_once 'template-parts/speakers.php'; ?>

<?php // Partners
include_once 'template-parts/partners.php'; ?>

<?php // SMI
include_once 'template-parts/smi.php'; ?>

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



<?php // Contacts
include_once 'template-parts/contacts.php'; ?>

<?php // Hotels
include_once '../template-parts/hotels.php'; ?>

<?php // Popups
include_once '../template-parts/popup.php'; ?>

<?php // Should be last
// Footer
include_once '../template-parts/footer.php'; ?>


