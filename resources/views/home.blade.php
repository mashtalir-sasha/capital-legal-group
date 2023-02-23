<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
	<meta charset="utf-8">
	<title>{{ trans('main.meta_title') }}</title>
	<meta name="description" content="{{ trans('main.meta_description') }}">
	<meta name="keywords" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="shortcut icon" href="/images/favicon/16.png" type="image/x-icon">
	<link rel="icon" href="/images/favicon/16.png" type="image/x-icon"> 
	<link rel="apple-touch-icon" href="/images/favicon/16.png">
	<link rel="apple-touch-icon" sizes="32x32" href="/images/favicon/32.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/images/favicon/72.png"> 
	<meta name="theme-color" content="#C6A636">

	<link rel="stylesheet" href="{{ mix('/css/main.css') }}">

	<meta name="csrf-token" content="{{ csrf_token() }}">

	<meta property="og:title" content="{{ trans('main.meta_title') }}">
	<meta property="og:description" content="{{ trans('main.meta_description') }}">
	<meta property="og:type" content="website">
	<meta property="og:url" content="{{ Request::url() }}">
	<meta property="og:image" content="{{ asset('images/main_bg.jpg') }}">

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-P5XL843');</script>
	<!-- End Google Tag Manager -->

</head>

<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P5XL843"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="grid-line grid-line_1 d-none d-xl-block"></div>
<div class="grid-line grid-line_2 d-none d-xl-block"></div>

@include('templates.nav')

<header class="main header">
	<div class="main-ico i1 d-none d-md-block"></div>
	<div class="container">
		<div class="main-ico i2 d-none d-md-block"></div>
		<div class="main__note d-none d-md-block">{{ trans('main.head_note') }}</div>
		<div class="row align-items-center">
			<div class="col offset-lg-1">
				<h1 class="main-title">{!! trans('main.main_title') !!}</h1>
				<h2 class="main-text">{{ trans('main.main_text') }}</h2>
			</div>
		</div>
	</div>
</header>

<section class="numbers scroll fadeIn">
	<img src="{{ asset('images/numbers_image.svg') }}" alt="image" class="numbers__image d-none d-md-block">
	<div class="container">
		<div class="note d-none d-xl-block">{{ trans('main.numbers_note') }}</div>
		<div class="row">
			<div class="col-xl-3 col-md-4 col-6 offset-xl-1 order-first">
				<div class="number-item fadeIn_slow">
					<p class="number-item__title">{{ Helpers::getLangString($numbers, 'title1') }}</p>
					<p class="number-item__text">{{ Helpers::getLangString($numbers, 'text1') }}</p>
				</div>
			</div>
			<div class="col-xl-3 col-md-4 col-6 offset-xl-1">
				<div class="number-item fadeIn_slow">
					<p class="number-item__title">{{ Helpers::getLangString($numbers, 'title2') }}</p>
					<p class="number-item__text">{{ Helpers::getLangString($numbers, 'text2') }}</p>
				</div>
			</div>
			<div class="col-xl-3 col-md-4 col-6 offset-xl-1">
				<div class="number-item fadeIn_slow">
					<p class="number-item__title">{{ Helpers::getLangString($numbers, 'title3') }}</p>
					<p class="number-item__text">{{ Helpers::getLangString($numbers, 'text3') }}</p>
				</div>
			</div>
		
			<div class="numbers-line d-none d-md-block">
				<div class="numbers-line__big i1 pulse"></div>
				<div class="numbers-line__small i1"></div>
				<div class="numbers-line__small i2"></div>
				<div class="numbers-line__big i2 pulse"></div>
				<div class="numbers-line__big i3 pulse"></div>
				<div class="numbers-line__small i3"></div>
			</div>
		
			<div class="col-xl-3 col-md-4 col-6 offset-xl-1">
				<div class="number-item fadeIn_slow">
					<p class="number-item__title">{{ Helpers::getLangString($numbers, 'title4') }}</p>
					<p class="number-item__text">{{ Helpers::getLangString($numbers, 'text4') }}</p>
				</div>
			</div>
			<div class="col-xl-3 col-md-4 col-6 offset-xl-1">
				<div class="number-item fadeIn_slow">
					<p class="number-item__title">{{ Helpers::getLangString($numbers, 'title5') }}</p>
					<p class="number-item__text">{{ Helpers::getLangString($numbers, 'text5') }}</p>
				</div>
			</div>
			<div class="col-xl-3 col-md-4 col-6 offset-xl-1 order-first order-sm-last">
				<div class="number-item fadeIn_slow">
					<p class="number-item__title">{{ Helpers::getLangString($numbers, 'title6') }}</p>
					<p class="number-item__text">{{ Helpers::getLangString($numbers, 'text6') }}</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="about scroll fadeIn">
	<div class="container">
		<div class="about__ico d-none d-md-block"></div>
		<div class="note d-none d-xl-block">{{ trans('main.about_note') }}</div>
		<div class="row">
			<div class="col offset-xl-1">
				<h3 class="block-title fadeInRight">{!! trans('main.about_title') !!}</h3>
			</div>
		</div>
		<div class="row align-items-center">
			<div class="col-xl-5 col-md-6 order-0 order-md-1">
				<div class="video-container">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/{{ basename($about->video) }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="col-lx-5 col-md-6 offset-xl-1 order-1 order-md-0">
				<p class="about__text">{!! Helpers::getLangString($about, 'text') !!}</p>
				<a href="#modal" class="about__btn fancybox">{{ trans('main.about_btn') }} <i></i></a>
			</div>
			
		</div>
	</div>
</section>

<section id="team" class="team scroll fadeIn">
	<div class="container">
		<div class="note d-none d-xl-block">{{ trans('main.team_note') }}</div>
		<div class="row">
			<div class="col-xl-10 offset-xl-1">
				<h3 class="block-title fadeInRight">{!! trans('main.team_title') !!}</h3>
				<div class="team-slider">
					@foreach($team as $item)
						<div class="team-slider__slide">
							<div class="expert">
								<div class="expert-photo">
									<img src="{{ asset($item->image) }}" alt="expert" class="expert-photo__image">
									<p class="expert-photo__name">{{ Helpers::getLangString($item, 'name') }}</p>
								</div>
								<div class="expert-info">
									<p class="expert-info__name">{{ Helpers::getLangString($item, 'name') }}</p>
									<p class="expert-info__position">{{ Helpers::getLangString($item, 'position') }}</p>
									<p class="expert-info__text">
										@if( isset($item->number) )
										<i>{{ Helpers::getLangString($item, 'number') }}</i>
										@endif
										<span>{{ Helpers::getLangString($item, 'text') }}</span>
									</p>
									<a href="#expert" class="expert-info__btn fancybox" data-name="{{ Helpers::getLangString($item, 'name') }}">{{ trans('main.expert_btn') }} <i></i></a>
								</div>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section>

<section class="partners scroll fadeIn">
	<div class="container">
		<div class="note d-none d-xl-block">{{ trans('main.partners_note') }}</div>
		<div class="row">
			<div class="col-xl-10 offset-xl-1">
				<h3 class="block-title fadeInRight">{!! trans('main.partners_title') !!}</h3>
				<div class="d-flex align-items-end">
					<p class="partners__text">{{ trans('main.partners_text') }}</p>
					<div class="partners__line"></div>
				</div>
			</div>
			<div class="col-12">
				@foreach($clients->images as $item)
					@if( $loop->iteration == 1 )
						<div class="row align-items-center justify-content-end d-none d-md-flex" smooth-parallax container="body" start-position-x="-.3" end-position-x="0">
					@endif
						@if( $loop->iteration < 6 )
							<div class="col-md-2">
								<div class="partner">
									<img src="{{ asset($item) }}" alt="partner">
								</div>
							</div>
						@endif
					@if( $loop->iteration == 5 )
						</div>
					@endif
					@if( $loop->iteration == 6 )
						<div class="row align-items-center d-none d-md-flex" smooth-parallax container="body" start-position-x=".3" end-position-x="0">
					@endif
						@if( $loop->iteration >= 6 && $loop->iteration < 11 )
							<div class="col-md-2">
								<div class="partner">
									<img src="{{ asset($item) }}" alt="partner">
								</div>
							</div>
						@endif
					@if( $loop->iteration == 10 )
						</div>
					@endif
					@if( $loop->iteration == 11 )
						<div class="row align-items-center justify-content-end d-none d-md-flex" smooth-parallax container="body" start-position-x="-.3" end-position-x="0">
					@endif
						@if( $loop->iteration >= 11 && $loop->iteration < 16 )
							<div class="col-md-2">
								<div class="partner">
									<img src="{{ asset($item) }}" alt="partner">
								</div>
							</div>
						@endif
					@if( $loop->last )
						</div>
					@endif
				@endforeach
				<div class="partners-slider d-md-none">
					@foreach($clients->images as $item)
						<div class="partners-slider__slide">
							<div class="partner">
								<img src="{{ asset($item) }}" alt="partner">
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section>

<section class="reviews scroll fadeIn">
	<div class="reviews__ico d-none d-md-block"></div>
	<div class="container">
		<div class="note d-none d-xl-block">{{ trans('main.reviews_title') }}</div>
		<div class="row">
			<div class="col-xl-10 offset-xl-1">
				<h3 class="block-title fadeInRight"><span>{{ trans('main.reviews_title') }}</span></h3>
				<div class="reviews-slider">
					@foreach($reviews as $item)
						<div class="review">
							@if( $loop->iteration % 2 === 0 )
								<p class="review__title">{{ Helpers::getLangString($item, 'title') }}</p>
							@endif
							<a href="{{ asset($item->image) }}" data-fancybox="reviews">
								<img src="/images/uploads/thumb/{{basename($item->image)}}" alt="review image" class="review__img">
							</a>
							@if( $loop->iteration % 2 === 1 )
								<p class="review__title">{{ Helpers::getLangString($item, 'title') }}</p>
							@endif
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section>

@include('templates.foot')

@include('templates.modal')

<script src="{{ mix('/js/all.js') }}"></script>
<script src="{{ mix('/js/scripts.js') }}"></script>

</body>
</html>