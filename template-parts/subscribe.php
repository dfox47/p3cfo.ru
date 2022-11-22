


<div id="subscribe" class="subscribe">
	<div class="wrap">
		<p class="subscribe__title">Подпишитесь на нашу электронную рассылку, чтобы быть в курсе всех последних новостей форума</p>

		<form action="javascript:void(0);"
		      class="subscribe__form js-subscribe-form"
		      id="sbscrbFormX"
		      method="post"
		      onsubmit="AjaxFormRequest()"
		>
			<div>
				<input id="fio" type="text" name="input_name[0]" size="39" value="ФИО" required>
				<input type="hidden" name="check[]" value="1">
			</div>

			<div>
				<input id="org" type="text" name="input_name[1]" size="39" value="Компания" required>
				<input type="hidden" name="check[]" value="1">
			</div>

			<div>
				<input id="email" type="email" name="input_name[2]" size="39" value="E-mail" required>
				<input type="hidden" name="check[]" value="1">
			</div>

			<div>
				<input type="submit" value="ПОДПИСАТЬСЯ" name="submit">
			</div>

			<label class="form_subscribe__label">
				<input class="form_subscribe__privacy" type="checkbox" name="form_subscribe__privacy" checked>
				<span class="form_subscribe__checkbox"></span>
				<span>Даю своё согласие с <a href="/privacy_policy.html" target="_blank">Политикой конфиденциальности</a></span>
			</label>
		</form>
	</div>
</div>


