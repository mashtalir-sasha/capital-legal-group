<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
	<meta charset="utf-8">
	<title>{{ trans('otrymannia-posvidky.meta_title') }} | {{ trans('main.meta_title') }}</title>
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

	<meta property="og:title" content="{{ trans('otrymannia-posvidky.meta_title') }} | {{ trans('main.meta_title') }}">
	<meta property="og:description" content="{{ trans('main.meta_description') }}">
	<meta property="og:type" content="website">
	<meta property="og:url" content="{{ Request::url() }}">
	<meta property="og:image" content="{{ asset('images/otrymannia_posvidky_bg.jpg') }}">

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

<header class="ja_head header" style="background-image: url(/images/otrymannia_posvidky_bg.jpg);">
	<div class="container">
		<div class="ja_head__note d-none d-xl-block">{!! trans('otrymannia-posvidky.head_note') !!}</div>
		<div class="row align-items-center">
			<div class="col offset-lg-1">
				<div class="ja_head__content">
					<h1 class="ja_head-title">{!! trans('otrymannia-posvidky.main_title') !!}</h1>
					<h2 class="ja_head-text">{!! trans('otrymannia-posvidky.main_text') !!}</h2>
				</div>
			</div>
		</div>
	</div>
</header>

<section class="vs_about scroll fadeIn">
	<div class="container">
		<div class="note d-none d-xl-block">{{ trans('otrymannia-posvidky.about_note') }}</div>
		<div class="row">
			<div class="col-xl-10 offset-xl-1">
				<h3 class="vs_about__title">{{ Helpers::getLangString($about, 'title') }}</h3>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-xl-10">
				<p class="vs_about__text vs_about__text_fz16"><b>{{ Helpers::getLangString($about, 'sub_title') }}</b></p>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-xl-6 col-md-6">
				<ul class="vs_about-list">
					@foreach( json_decode($about->list) as $item )
						@if( app()->getLocale() == 'uk')
							<li>{{ $item->item }}</li>
						@else
							<li>{{ $item->itemRU }}</li>
						@endif
					@endforeach
				</ul>
				<p class="vs_about__text vs_about__text_fz16">{!! Helpers::getLangString($about, 'text1') !!}</p>
				@if( isset($about->text2) )
					<p class="vs_about__text vs_about__text_fz16">{!! Helpers::getLangString($about, 'text2') !!}</p>
				@endif
			</div>
			<div class="col-xl-4 col-md-6">
				<div class="video-container video-container_img">
					<img src="{{ asset($about->image) }}" alt="image">
				</div>
			</div>
		</div>
	</div>
</section>

<section class="procedure scroll fadeIn">
	<div class="container">
		<div class="note d-none d-xl-block">{{ trans('otrymannia-posvidky.procedure_note') }}</div>
		<div class="row justify-content-center">
			<div class="col-xl-10">
				<h3 class="ja_block-title fadeInRight">{!! trans('otrymannia-posvidky.procedure_title') !!}</h3>
			</div>
			<div class="col-lg-4">
				<div class="procedure-line">
					<div class="procedure-line__number">01</div>
					<div class="procedure-line__small i1"></div>
					<div class="procedure-line__big i1"></div>
				</div>
				<p class="procedure__text">{!! Helpers::getLangString($procedure, 'item1') !!}</p>
			</div>
			<div class="col-lg-3">
				<div class="procedure-line">
					<div class="procedure-line__number">02</div>
					<div class="procedure-line__big i2"></div>
				</div>
				<p class="procedure__text">{!! Helpers::getLangString($procedure, 'item2') !!}</p>
			</div>
			<div class="col-lg-3">
				<div class="procedure-line">
					<div class="procedure-line__small i3"></div>
					<div class="procedure-line__number">03</div>
				</div>
				<p class="procedure__text">{!! Helpers::getLangString($procedure, 'item3') !!}</p>
			</div>
			<div class="col-lg-4">
				<div class="procedure-line">
					<div class="procedure-line__number">04</div>
					<div class="procedure-line__small i1"></div>
					<div class="procedure-line__big i1"></div>
				</div>
				<p class="procedure__text">{!! Helpers::getLangString($procedure, 'item4') !!}</p>
			</div>
			<div class="col-lg-3">
				<div class="procedure-line">
					<div class="procedure-line__number">05</div>
					<div class="procedure-line__big i2"></div>
				</div>
				<p class="procedure__text">{!! Helpers::getLangString($procedure, 'item5') !!}</p>
			</div>
			<div class="col-lg-3">
				<div class="procedure-line">
					<div class="procedure-line__small i3"></div>
					<div class="procedure-line__number">06</div>
				</div>
				<p class="procedure__text">{!! Helpers::getLangString($procedure, 'item6') !!}</p>
			</div>
			@if( isset($procedure->note) )
				<div class="col-xl-10">
					<p class="procedure__text"><b>{{ Helpers::getLangString($procedure, 'note') }}</b></p>
				</div>
			@endif
		</div>
	</div>
</section>

<section class="variant scroll fadeIn">
	<div class="container">
		<div class="note d-none d-xl-block" style="width:420px;">{{ trans('otrymannia-posvidky.variant_note') }}</div>
		<div class="row justify-content-center">
			<div class="col-xl-10">
				<h3 class="ja_block-title fadeInRight">{!! trans('otrymannia-posvidky.variant_title') !!}</h3>
				@foreach($tarifs as $item)
				<div @if($item->is_top == 1) class="variant-item variant-item_top" @else class="variant-item" @endif>
					<div class="variant-item__title">@if($item->is_top == 1) <i class="top"></i> @endif<h4>{{ Helpers::getLangString($item, 'title') }}</h4></div>
					<div class="variant-item__wrap">
						<h4 class="variant-item__subtitle">{{ trans('otrymannia-posvidky.variant_subtitle') }}</h4>
						<div class="variant-item__text">{!! Helpers::getLangString($item, 'text') !!}</div>
					</div>
				</div>
				<a href="#buy" class="variant-item__btn fancybox">{{ trans('otrymannia-posvidky.variant_btn') }} <i></i></a>
				@endforeach
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
		<div class="note d-none d-xl-block">{{ trans('otrymannia-posvidky.other_note') }}</div>
		<div class="row justify-content-center">
			<div class="col-xl-10">
				<h3 class="ja_block-title fadeInRight">{!! trans('otrymannia-posvidky.other_title') !!}</h3>
				<div class="row justify-content-center">
					<div class="col-md-4 col-sm-6">
						<div class="other-services__item" style="background-image: url(/images/korp_alt2.jpg);">
							<p class="other-services__text">{{ trans('otrymannia-posvidky.other_text1') }}</p>
						</div>
						<a href="{{ route('jurAut') }}" class="other-services__btn">{{ trans('otrymannia-posvidky.other_btn') }} <i></i></a>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="other-services__item" style="background-image: url(/images/korp_alt3.jpg);">
							<p class="other-services__text">{{ trans('otrymannia-posvidky.other_text2') }}</p>
						</div>
						<a href="{{ route('bukhhalterskyiAut') }}" class="other-services__btn">{{ trans('otrymannia-posvidky.other_btn') }} <i></i></a>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="other-services__item" style="background-image: url(/images/korp_alt4.jpg);">
							<p class="other-services__text">{{ trans('otrymannia-posvidky.other_text3') }}</p>
						</div>
						<a href="{{ route('vidkryttiaUkr') }}" class="other-services__btn">{{ trans('otrymannia-posvidky.other_btn') }} <i></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="team" class="team team_white scroll fadeIn">
	<div class="container">
		<div class="note d-none d-xl-block">{{ trans('jur-aut.team_note') }}</div>
		<div class="row">
			<div class="col-xl-10 offset-xl-1">
				<h3 class="ja_block-title fadeInRight">{!! trans('jur-aut.team_title') !!}</h3>
				<div class="team-slider team-slider_service">
					@foreach($team->lawyers as $item)
					<div class="team-slider__slide">
						<div class="expert expert_service">
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

<section class="ja_faq scroll fadeIn">
	<div class="container">
		<div class="note d-none d-xl-block">{{ trans('otrymannia-posvidky.faq_note') }}</div>
		<div class="row justify-content-center">
			<div class="col-xl-10">
				<h3 class="ja_block-title fadeInRight">{!! trans('otrymannia-posvidky.faq_title') !!}</h3>

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
				<h3 class="ja_block-title fadeInRight">{!! trans('otrymannia-posvidky.blog_title') !!}</h3>
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