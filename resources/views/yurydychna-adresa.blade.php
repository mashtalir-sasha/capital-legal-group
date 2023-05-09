<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
	<meta charset="utf-8">
	<title>{{ trans('yurydychna-adresa.meta_title') }} | {{ trans('main.meta_title') }}</title>
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

	<meta property="og:title" content="{{ trans('yurydychna-adresa.meta_title') }} | {{ trans('main.meta_title') }}">
	<meta property="og:description" content="{{ trans('main.meta_description') }}">
	<meta property="og:type" content="website">
	<meta property="og:url" content="{{ Request::url() }}">
	<meta property="og:image" content="{{ asset('images/kupivliya_komp_bg.jpg') }}">


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

<header class="ja_head header" style="background-image: url(/images/yurydychna_adresa_bg.jpg);">
	<div class="container">
		<div class="ja_head__note d-none d-xl-block">{!! trans('yurydychna-adresa.head_note') !!}</div>
		<div class="row align-items-center">
			<div class="col offset-lg-1">
				<div class="ja_head__content">
					<h1 class="ja_head-title">{!! trans('yurydychna-adresa.main_title') !!}</h1>
					<h2 class="ja_head-text">{{ trans('yurydychna-adresa.main_text') }}</h2>
				</div>
			</div>
		</div>
	</div>
</header>

<section class="ja_benefits ja_benefits_shadow scroll fadeIn">
	<div class="container">
		<div class="note d-none d-xl-block">{{ trans('yurydychna-adresa.benefits_note') }}</div>
		<div class="row">
			<div class="col-xl-10 offset-xl-1">
				<h3 class="ja_block-title fadeInRight">{!! trans('yurydychna-adresa.benefits_title') !!}</h3>
				<div class="row">
					@foreach($benefits as $item)
					<div class="col-lg-4 col-sm-6">
						<div class="ja_benefits-item">
							<img src="{{ asset($item->image) }}" alt="ico" class="ja_benefits-item__ico">
							<p class="ja_benefits-item__text">
								<span>{{ Helpers::getLangString($item, 'title') }}</span>
								{{ Helpers::getLangString($item, 'text') }}
							</p>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section>

<section class="tarif scroll fadeIn">
	<div class="container">
		<div class="note d-none d-xl-block">{{ trans('yurydychna-adresa.tarif_note') }}</div>
		<div class="row justify-content-center">
			<div class="col-xl-10">
				<h3 class="ja_block-title fadeInRight">{!! trans('yurydychna-adresa.tarif_title') !!}</h3>
				<div class="row">
					@foreach($tarifs as $item)
					<div class="col-lg-4 col-sm-6">
						<div class="cart-item">
							<div class="cart-item__title machHeight">
								<h4>{{ Helpers::getLangString($item, 'title') }}</h4>
							</div>
							<div class="cart-item__wrap">
								<p class="cart-item__text">{!! Helpers::getLangString($item, 'text') !!}</p>
							</div>
							<div class="cart-item__price">
								<p>{!! trans('yurydychna-adresa.tarif_price') !!} {{ $item->price }}</p>
								<a href="#discuss" class="cart-item__btn fancybox">{{ trans('yurydychna-adresa.tarif_btn') }} <i></i></a>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ja_form scroll fadeIn">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-9">
				<h3 class="ja_form__title">{{ trans('jur-aut.form_title') }}</h3>
				<p class="ja_form__text">{{ trans('jur-aut.form_text') }}</p>
				<form class="ja_form-content row form_check" autocomplete="off">
					<input type="hidden" name="mailto" value="{{ $mailto }}">
					<input type="hidden" name="title" value="{{ trans('jur-aut.form_sendTitle') }}">
					<input type="hidden" name="page" value="{{ URL::current() }}">
					<div class="col-sm-6">
						<div class="rline">
							<input type="text" name="name" class="ja_form-content__input rfield" placeholder="{{ trans('main.name') }}" >
						</div>
					</div>
					<div class="col-sm-6">
						<div class="rline">
							<input type="text" name="phone" class="ja_form-content__input rfield" placeholder="{{ trans('main.phone') }}" >
						</div>
					</div>
					<div class="col">
						<div class="rline">
							<textarea name="question" rows="3" class="ja_form-content__textarea" placeholder="{{ trans('jur-aut.query') }}"></textarea>
						</div>
						<button class="ja_form-content__btn btnsubmit">{{ trans('jur-aut.form_btn') }} <i></i></button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<section class="alt scroll fadeIn">
	<div class="container">
		<div class="note d-none d-xl-block">{{ trans('yurydychna-adresa.alt_note') }}</div>
		<div class="row justify-content-center">
			<div class="col-xl-10">
				<h3 class="ja_block-title fadeInRight"><span><i>{{ trans('yurydychna-adresa.other_title') }}</i></span></h3>
				<div class="row justify-content-center">
					<div class="col-md-4 col-sm-6">
						<div class="other-services__item" style="background-image: url(/images/korp_alt4.jpg);">
							<p class="other-services__text">{{ trans('yurydychna-adresa.other_text3') }}</p>
						</div>
						<a href="{{ route('vidkryttiaUkr') }}" class="other-services__btn">{{ trans('yurydychna-adresa.other_btn') }} <i></i></a>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="other-services__item" style="background-image: url(/images/korp_alt2.jpg);">
							<p class="other-services__text">{{ trans('yurydychna-adresa.other_text1') }}</p>
						</div>
						<a href="{{ route('jurAut') }}" class="other-services__btn">{{ trans('yurydychna-adresa.other_btn') }} <i></i></a>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="other-services__item" style="background-image: url(/images/korp_alt3.jpg);">
							<p class="other-services__text">{{ trans('yurydychna-adresa.other_text2') }}</p>
						</div>
						<a href="{{ route('bukhhalterskyiAut') }}" class="other-services__btn">{{ trans('yurydychna-adresa.other_btn') }} <i></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="team" class="manager scroll fadeIn">
	<div class="container">
		<div class="note d-none d-xl-block">{{ trans('yurydychna-adresa.manager_note') }}</div>
		<div class="row justify-content-center">
			<div class="col-xl-10">
				<h3 class="ja_block-title fadeInRight">{!! trans('yurydychna-adresa.manager_title') !!}</h3>
			</div>
		</div>
		<div class="row justify-content-center align-items-center">
			<div class="col-xl-5 col-md-6">
				<div class="manager-image">
					<img src="{{ asset($lider->photo) }}" alt="" class="manger-image__img">
				</div>
			</div>
			<div class="col-xl-5 col-md-6">
				<p class="manager__name">{{ Helpers::getLangString($lider, 'name') }}</p>
				<p class="manager__position">{{ Helpers::getLangString($lider, 'position') }}</p>
				<div class="manager-text">
					<p class="manager-text__count">{{ Helpers::getLangString($lider, 'number') }}</p>
					<p class="manager-text__text">{{ Helpers::getLangString($lider, 'text') }}</p>
				</div>
				<a href="#expert" class="expert-info__btn expert-info__btn_center fancybox" data-name="{{ Helpers::getLangString($lider, 'name') }}">{{ trans('main.expert_btn') }} <i></i></a>
			</div>
		</div>
		<div class="row justify-content-center align-items-center">
			<div class="col-xl-6 col-md-6">
				@if( isset($lider->study) )
				<div class="manager__content">
					<h4 class="manager__title">{{ trans('vur-spor.manager1_title1') }}</h4>
					<p class="manager__text">{!! Helpers::getLangString($lider, 'study') !!}</p>
				</div>
				@endif
				@if( isset($lider->practic) )
				<div class="manager__content">
					<h4 class="manager__title">{{ trans('vur-spor.manager1_title2') }}</h4>
					<p class="manager__text">{!! Helpers::getLangString($lider, 'practic') !!}</p>
				</div>
				@endif
				@if( isset($lider->sphere) )
				<div class="manager__content">
					<h4 class="manager__title">{{ trans('vur-spor.manager1_title3') }}</h4>
					<p class="manager__text">{!! Helpers::getLangString($lider, 'sphere') !!}</p>
				</div>
				@endif
			</div>
			@if( isset($lider->image) )
			<div class="col-xl-4 col-md-6">
				<div class="manager-diploma">
					<img src="{{ asset($lider->image) }}" alt="diploma" class="manager-diploma__img">
				</div>
			</div>
			@endif
		</div>
	</div>
</section>

<section class="ja_faq scroll fadeIn">
	<div class="container">
		<div class="note d-none d-xl-block">{{ trans('yurydychna-adresa.faq_note') }}</div>
		<div class="row justify-content-center">
			<div class="col-xl-10">
				<h3 class="ja_block-title fadeInRight">{!! trans('yurydychna-adresa.faq_title') !!}</h3>

				<div class="faq-content">
					@foreach($faq as $item)
						<div class="faq__title">
							<i>{{ str_pad($item->id, 2, 0, STR_PAD_LEFT) }}</i>
							<p>{{ Helpers::getLangString($item, 'question') }}</p>
						</div>
						<div class="faq__answer">{!! Helpers::getLangString($item, 'answer') !!}</div>
					@endforeach
				</div>

				<a href="#modal" class="ja_faq__btn fancybox">{{ trans('jur-aut.faq_btn') }} <i></i></a>
			</div>
		</div>
	</div>
</section>

<section class="service-blog scroll fadeIn">
	<div class="container">
		<div class="note d-none d-xl-block">{{ trans('jur-aut.blog_note') }}</div>
		<div class="row justify-content-center">
			<div class="col-xl-10">
				<h3 class="ja_block-title fadeInRight">{!! trans('yurydychna-adresa.blog_title') !!}</h3>
				<div class="blog-slider">
					@forelse($blogContent->articles as $item)
					<div class="blog-slider__slide">
						<div class="blog-item">
							<a href="https://www.youtube.com/watch?v={{ $item->link }}" class="fancybox">
								<img src="https://img.youtube.com/vi/{{ $item->link }}/maxresdefault.jpg" alt="blog image" class="blog-item__image">
							</a>
							<div class="blog-item__content">
								<h4 class="blog-item__title">{{ Helpers::getLangString($item, 'title') }}</h4>
								<p class="blog-item__text">{{ mb_strimwidth(Helpers::getLangString($item, 'text'), 0, 200, "...") }}</p>
								<a href="https://www.youtube.com/watch?v={{ $item->link }}" class="blog-item__link fancybox">{{ trans('blog.btn') }}</a>
							</div>
						</div>
					</div>
					@empty
					<div class="blog-epty">
						<h4 class="blog-empty__title">{{ trans('blog.empty_title') }}</h4>
						<p class="blog-empty__text">{{ trans('blog.empty_text') }}</p>
					</div>
					@endforelse
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