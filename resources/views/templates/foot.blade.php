<section id="contacts" class="contacts">
	<div class="container">
		<div class="note d-none d-xl-block">{{ trans('main.contacts_note') }}</div>
		<div class="row">
			<div class="col contacts-position">
				<div class="contacts-block">
					<h3 class="block-title"><span>{{ trans('main.contacts_title') }}</span></h3>
					<p class="contacts-block__text addr">{{ trans('main.contacts_addr') }}</p>
					<a href="mailto:office@spg.kiev.ua" class="contacts-block__text email">office@spg.kiev.ua</a>
					<a href="tel:+380674029916" class="contacts-block__text phone">+38 067 402 99 16</a>
					<div class="contacts-block__soc">
						<a href="https://www.facebook.com/spg.kiev.ua" target="_blank" class="facebook"></a>
						<a href="https://instagram.com/spgkiev?igshid=YmMyMTA2M2Y=" target="_blank" class="instagram"></a>
						<a href="https://www.youtube.com/channel/UCray89DGhD0x4MY0OWLkT2w" target="_blank" class="youtube"></a>
					</div>
				</div>
			</div>
			<div class="col-xl-10 offset-xl-1">
				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2540.587824205955!2d30.504919223191045!3d50.448777639338786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ce58def18f17%3A0xeb4ba29c3d603908!2zMThBLCDQstGD0LvQuNGG0Y8g0IbQstCw0L3QsCDQpNGA0LDQvdC60LAsIDE40JAsINCa0LjRl9CyLCAwMjAwMA!5e0!3m2!1suk!2sua!4v1655315441422!5m2!1suk!2sua" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
		</div>
	</div>
</section>

<footer class="foot">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-3 d-none d-sm-block">
				<img src="{{ asset('images/foot_logo.png') }}" alt="" class="foot__logo">
			</div>
			<div class="col-md-6">
				<ul class="foot-main">
					<li class="foot-main__item"><a href="{{ route('index') }}">{{ trans('main.menu1') }}</a></li>
					@if( Route::currentRouteName() != 'index' )
					<li class="foot-main__item"><a href="{{ route('index') }}/#team">{{ trans('main.menu3') }}</a></li>
					@else
					<li class="foot-main__item"><a href="#team" class="anchor">{{ trans('main.menu3') }}</a></li>
					@endif
					<li class="foot-main__item"><a href="{{ route('blog.main') }}">{{ trans('main.menu4') }}</a></li>
					<li class="foot-main__item"><a href="#contacts" class="anchor">{{ trans('main.menu5') }}</a></li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<ul class="foot-list">
					<li class="foot-list__item"><a href="{{ route('jurAut') }}">{{ trans('main.foot_menu1') }}</a></li>
					<li class="foot-list__item"><a href="{{ route('korpPravo') }}">{{ trans('main.foot_menu2') }}</a></li>
					<li class="foot-list__item"><a href="{{ route('podatkovePravo') }}">{{ trans('main.foot_menu3') }}</a></li>
					<li class="foot-list__item"><a href="{{ route('vurSpor') }}">{{ trans('main.foot_menu4') }}</a></li>
					<li class="foot-list__item"><a href="{{ route('tendernePravo') }}">{{ trans('main.foot_menu5') }}</a></li>
					<li class="foot-list__item"><a href="{{ route('mihratsiinePravo') }}">{{ trans('main.foot_menu6') }}</a></li>
					<li class="foot-list__item"><a href="{{ route('intelektVlasnist') }}">{{ trans('main.foot_menu8') }}</a></li>
					<li class="foot-list__item"><a href="{{ route('bukhhalterskyiAut') }}">{{ trans('main.foot_menu9') }}</a></li>
				</ul>
			</div>
			<div class="col-md-4">
				<ul class="foot-list">
					<li class="foot-list__item"><a href="{{ route('vidkryttiaUkr') }}">{{ trans('main.foot_menu24') }}</a></li>
					<li class="foot-list__item"><a href="{{ route('kupivliaKomp') }}">{{ trans('main.foot_menu23') }}</a></li>
					<li class="foot-list__item"><a href="{{ route('zakryttiaBiz') }}">{{ trans('main.foot_menu10') }}</a></li>
					<li class="foot-list__item"><a href="{{ route('vidkryttiaUsa') }}">{{ trans('main.foot_menu11') }}</a></li>
					<li class="foot-list__item"><a href="{{ route('dosudoveVur') }}">{{ trans('main.foot_menu12') }}</a></li>
					<li class="foot-list__item"><a href="{{ route('gospSpor') }}">{{ trans('main.foot_menu13') }}</a></li>
					<li class="foot-list__item"><a href="{{ route('adminSpor') }}">{{ trans('main.foot_menu14') }}</a></li>
				</ul>
			</div>
			<div class="col-md-4">
				<ul class="foot-list">
					<li class="foot-list__item"><a href="{{ route('otrymanniaIpn') }}">{{ trans('main.foot_menu15') }}</a></li>
					<li class="foot-list__item"><a href="{{ route('otrymanniaDoz') }}">{{ trans('main.foot_menu16') }}</a></li>
					<li class="foot-list__item"><a href="{{ route('otrymanniaPos') }}">{{ trans('main.foot_menu17') }}</a></li>
				</ul>
			</div>
		</div>
		<div class="row align-items-center">
			<div class="col-md-6">
				<a href="{{ route('oferta') }}" class="foot__link">{{ trans('oferta-konf.oferta_link') }}</a>
				<a href="{{ route('konfident') }}" class="foot__link">{{ trans('oferta-konf.polituka_link') }}</a>
			</div>
			<div class="col-md-6">
				<a href="https://wamp.com.ua" target="_blank" class="dev">
					<img src="{{ asset('images/wamp.svg') }}" alt="wamp">
					<p>{{ trans('main.dev') }}</p>
				</a>
			</div>
		</div>
	</div>
	<div class="container cprt">
		<div class="row">
			<div class="col">
				<p class="cprt__text">{{ trans('main.cprt') }} {{ date('Y') }}</p>
			</div>
		</div>
	</div>
</footer>