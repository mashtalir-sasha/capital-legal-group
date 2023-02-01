<section id="contacts" class="contacts">
	<div class="container">
		<div class="note d-none d-xl-block">{{ trans('main.contacts_note') }}</div>
		<div class="row">
			<div class="col contacts-position">
				<div class="contacts-block">
					<h3 class="block-title"><span>{{ trans('main.contacts_title') }}</span></h3>
					<p class="contacts-block__text addr">{{ Helpers::getLangString($contacts, 'address') }}</p>
					<a href="mailto:{{ $contacts->email }}" class="contacts-block__text email">{{ $contacts->email }}</a>
					<a href="tel:+{{ preg_replace('~[^0-9]~','',$contacts['phone']) }}" class="contacts-block__text phone">{{ $contacts->phone }}</a>
					<div style="display:none;"><a href="tel:+380671336510">(067)133-65-10</a></div>
					<div class="contacts-block__soc">
						@if( isset($contacts->facebook) )
							<a href="{{ $contacts->facebook }}" target="_blank" class="facebook"></a>
						@endif
						@if( isset($contacts->instagram) )
							<a href="{{ $contacts->instagram }}" target="_blank" class="instagram"></a>
						@endif
						@if( isset($contacts->youtube) )
							<a href="{{ $contacts->youtube }}" target="_blank" class="youtube"></a>
						@endif
					</div>
				</div>
			</div>
			<div class="col-xl-10 offset-xl-1">
				<div class="map">
					{!! $contacts->map !!}
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