<div class="d-none">
	<div id="modal" class="modal">
		<h3 class="modal__title">{{ trans('main.modal_title1') }}</h3>
		<h4 class="modal__text">{{ trans('main.modal_text1') }}</h4>
		<form class="modal-form form_check" autocomplete="off">
			<input type="hidden" name="title" value="{{ trans('main.modal_form_title') }}">
			<input type="hidden" name="page" value="{{ URL::current() }}">
			<div class="rline">
				<input type="text" name="name" class="modal-form__input rfield" placeholder="{{ trans('main.name') }}">
			</div>
			<div class="rline">
				<input type="text" name="phone" class="modal-form__input rfield" placeholder="{{ trans('main.phone') }}">
			</div>
			<button class="modal-form__btn btnsubmit">{{ trans('main.modal_btn1') }} <i></i></button>
		</form>
	</div>
	<div id="discuss" class="modal">
		<h3 class="modal__title">{{ trans('main.modal_title2') }}</h3>
		<h4 class="modal__text">{{ trans('main.modal_text2') }}</h4>
		<form class="modal-form form_check" autocomplete="off">
			<input type="hidden" name="title" value="{{ trans('main.modal2_form_title') }}">
			<input type="hidden" name="page" value="{{ URL::current() }}">
			<div class="rline">
				<input type="text" name="name" class="modal-form__input rfield" placeholder="{{ trans('main.name') }}">
			</div>
			<div class="rline">
				<input type="text" name="phone" class="modal-form__input rfield" placeholder="{{ trans('main.phone') }}">
			</div>
			<button class="modal-form__btn btnsubmit">{{ trans('main.modal_btn2') }} <i></i></button>
		</form>
	</div>
	<div id="details" class="modal">
		<h3 class="modal__title">{{ trans('main.modal_title3') }}</h3>
		<h4 class="modal__text">{{ trans('main.modal_text3') }}</h4>
		<form class="modal-form form_check" autocomplete="off">
			<input type="hidden" name="title" value="{{ trans('main.modal3_form_title') }}">
			<input type="hidden" name="page" value="{{ URL::current() }}">
			<div class="rline">
				<input type="text" name="name" class="modal-form__input rfield" placeholder="{{ trans('main.name') }}">
			</div>
			<div class="rline">
				<input type="text" name="phone" class="modal-form__input rfield" placeholder="{{ trans('main.phone') }}">
			</div>
			<button class="modal-form__btn btnsubmit">{{ trans('main.modal_btn3') }} <i></i></button>
		</form>
	</div>
	<div id="buy" class="modal">
		<h3 class="modal__title">{{ trans('main.modal_title4') }}</h3>
		<h4 class="modal__text">{{ trans('main.modal_text4') }}</h4>
		<form class="modal-form form_check" autocomplete="off">
			<input type="hidden" name="title" value="{{ trans('main.modal4_form_title') }}">
			<input type="hidden" name="page" value="{{ URL::current() }}">
			<div class="rline">
				<input type="text" name="name" class="modal-form__input rfield" placeholder="{{ trans('main.name') }}">
			</div>
			<div class="rline">
				<input type="text" name="phone" class="modal-form__input rfield" placeholder="{{ trans('main.phone') }}">
			</div>
			<button class="modal-form__btn btnsubmit">{{ trans('main.modal_btn4') }} <i></i></button>
		</form>
	</div>
	<div id="thn" class="thn">
		<h3>{{ trans('main.thn_title') }}</h3>
		<p>{{ trans('main.thn_text') }}</p>
	</div>
</div>