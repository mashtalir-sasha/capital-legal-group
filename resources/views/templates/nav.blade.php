<nav class="nav">
	<div class="container">
		<div class="row align-items-end justify-content-between">
			<div class="col-md-3 col-6">
				<a href="{{ route('index') }}">
					<img src="{{ asset('images/logo.svg') }}" alt="logo" class="nav__logo">
				</a>
			</div>
			<div class="col-md-3 col-6 d-block d-lg-none">
				<div class="nav-btn">
					<button class="nav-toggle">
						<span class="bar-top"></span>
						<span class="bar-mid"></span>
						<span class="bar-bot"></span>
					</button>
				</div>	
			</div>
			<div class="col-xl-8 col-lg-9 nav-mob">
				<div class="d-flex justify-content-lg-end justify-content-center align-items-center">
					<ul class="nav-list">
						<li class="nav-list__item"><a href="{{ route('index') }}">{{ trans('main.menu1') }}</a></li>
						<li class="nav-list__item">
							<a style="cursor:pointer">{{ trans('main.menu2') }} <i></i></a>
							<ul class="nav-hide">
								<li><a href="{{ route('jurAut') }}">{{ trans('main.service1') }}</a></li>
								<li>
									<a href="{{ route('korpPravo') }}">{{ trans('main.service2') }}</a><i></i>
									<ul class="nav-hide2">
										<li><a href="{{ route('vidkryttiaUkr') }}">{{ trans('main.service2_item1') }}</a></li>
										<li><a href="{{ route('kupivliaKomp') }}">{{ trans('main.service2_item2') }}</a></li>
										<li><a href="{{ route('yurAdr') }}">{{ trans('main.service2_item5') }}</a></li>
										<li><a href="{{ route('zakryttiaBiz') }}">{{ trans('main.service2_item3') }}</a></li>
										<li><a href="{{ route('vidkryttiaUsa') }}">{{ trans('main.service2_item4') }}</a></li>
									</ul>	
								</li>
								<li><a href="{{ route('podatkovePravo') }}">{{ trans('main.service3') }}</a></li>
								<li>
									<a href="{{ route('vurSpor') }}">{{ trans('main.service4') }}</a><i></i>
									<ul class="nav-hide2">
										<li><a href="{{ route('dosudoveVur') }}">{{ trans('main.service4_item1') }}</a></li>
										<li><a href="{{ route('gospSpor') }}">{{ trans('main.service4_item2') }}</a></li>
										<li><a href="{{ route('adminSpor') }}">{{ trans('main.service4_item3') }}</a></li>
									</ul>
								</li>
								<li><a href="{{ route('tendernePravo') }}">{{ trans('main.service5') }}</a></li>
								<li>
									<a href="{{ route('mihratsiinePravo') }}">{{ trans('main.service6') }}</a><i></i>
									<ul class="nav-hide2">
										<li><a href="{{ route('otrymanniaIpn') }}">{{ trans('main.service6_item1') }}</a></li>
										<li><a href="{{ route('otrymanniaDoz') }}">{{ trans('main.service6_item2') }}</a></li>
										<li><a href="{{ route('otrymanniaPos') }}">{{ trans('main.service6_item3') }}</a></li>
									</ul>
								</li>
								<li><a href="{{ route('intelektVlasnist') }}">{{ trans('main.service8') }}</a></li>
								<li><a href="{{ route('bukhhalterskyiAut') }}">{{ trans('main.service9') }}</a></li>
							</ul>
						</li>
						@if( Route::currentRouteName() != 'index' )
						<li class="nav-list__item"><a href="{{ route('index') }}/#team">{{ trans('main.menu3') }}</a></li>
						@else
						<li class="nav-list__item"><a href="#team" class="anchor">{{ trans('main.menu3') }}</a></li>
						@endif
						<li class="nav-list__item"><a href="{{ route('blog.main') }}">{{ trans('main.menu4') }}</a></li>
						<li class="nav-list__item"><a href="#contacts" class="list anchor">{{ trans('main.menu5') }}</a></li>
					</ul>
					<a href="tel:+{{ preg_replace('~[^0-9]~','',$contacts['phone']) }}" class="nav__phone">{{ $contacts->phone }}</a>
					<div class="lang">
						@if(app()->getLocale() == 'uk')
							<div class="lang__item">Укр <i></i></div>
							<a href="{{ localization()->getLocalizedURL('ru') }}" class="lang__hide">Рус</a>
						@else
							<div class="lang__item">Рус <i></i></div>
							<a href="{{ localization()->getLocalizedURL('uk') }}" class="lang__hide">Укр</a>
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
</nav>