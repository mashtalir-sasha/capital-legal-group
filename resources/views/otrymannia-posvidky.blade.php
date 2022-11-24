<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
	<meta charset="utf-8">
	<title>{{ trans('main.meta_title') }}</title>
	<meta name="description" content="{{ trans('main.meta_description') }}">
	<meta name="keywords" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="shortcut icon" href="img/favicon/16.png" type="image/x-icon">
	<link rel="icon" href="/img/favicon/16.png" type="image/x-icon"> 
	<link rel="apple-touch-icon" href="/img/favicon/16.png">
	<link rel="apple-touch-icon" sizes="32x32" href="/img/favicon/32.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/img/favicon/72.png"> 
	<meta name="theme-color" content="#C6A636">

	<link rel="stylesheet" href="{{ mix('/css/main.css') }}">

	<meta name="csrf-token" content="{{ csrf_token() }}">

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
				<h3 class="vs_about__title">{{ trans('otrymannia-posvidky.about_title') }}</h3>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-xl-10">
				<p class="vs_about__text vs_about__text_fz16">{!! trans('otrymannia-posvidky.about_text1') !!}</p>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-xl-6 col-md-6">
				<ul class="vs_about-list">
					<li>{!! trans('otrymannia-posvidky.about_list1') !!}</li>
					<li>{!! trans('otrymannia-posvidky.about_list2') !!}</li>
					<li>{!! trans('otrymannia-posvidky.about_list3') !!}</li>
				</ul>
				<p class="vs_about__text vs_about__text_fz16">{!! trans('otrymannia-posvidky.about_text2') !!}</p>
				<p class="vs_about__text vs_about__text_fz16">{!! trans('otrymannia-posvidky.about_text3') !!}</p>
			</div>
			<div class="col-xl-4 col-md-6">
				<div class="video-container video-container_img">
					<img src="{{ asset('images/otrymannia_posvidky_img.jpg') }}" alt="image">
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
				<p class="procedure__text">{!! trans('otrymannia-posvidky.procedure_text1') !!}</p>
			</div>
			<div class="col-lg-3">
				<div class="procedure-line">
					<div class="procedure-line__number">02</div>
					<div class="procedure-line__big i2"></div>
				</div>
				<p class="procedure__text">{!! trans('otrymannia-posvidky.procedure_text2') !!}</p>
			</div>
			<div class="col-lg-3">
				<div class="procedure-line">
					<div class="procedure-line__small i3"></div>
					<div class="procedure-line__number">03</div>
				</div>
				<p class="procedure__text">{!! trans('otrymannia-posvidky.procedure_text3') !!}</p>
			</div>
			<div class="col-lg-4">
				<div class="procedure-line">
					<div class="procedure-line__number">04</div>
					<div class="procedure-line__small i1"></div>
					<div class="procedure-line__big i1"></div>
				</div>
				<p class="procedure__text">{!! trans('otrymannia-posvidky.procedure_text4') !!}</p>
			</div>
			<div class="col-lg-3">
				<div class="procedure-line">
					<div class="procedure-line__number">05</div>
					<div class="procedure-line__big i2"></div>
				</div>
				<p class="procedure__text">{!! trans('otrymannia-posvidky.procedure_text5') !!}</p>
			</div>
			<div class="col-lg-3">
				<div class="procedure-line">
					<div class="procedure-line__small i3"></div>
					<div class="procedure-line__number">06</div>
				</div>
				<p class="procedure__text">{!! trans('otrymannia-posvidky.procedure_text6') !!}</p>
			</div>
			<div class="col-xl-10">
				<p class="procedure__text"><b>{{ trans('otrymannia-posvidky.procedure_subtitle') }}</b></p>
			</div>
		</div>
	</div>
</section>

<section class="variant scroll fadeIn">
	<div class="container">
		<div class="note d-none d-xl-block" style="width:420px;">{{ trans('otrymannia-posvidky.variant_note') }}</div>
		<div class="row justify-content-center">
			<div class="col-xl-10">
				<h3 class="ja_block-title fadeInRight">{!! trans('otrymannia-posvidky.variant_title') !!}</h3>
				<div class="variant-item">
					<div class="variant-item__title"><h4>{{ trans('otrymannia-posvidky.variant_item1_title') }}</h4></div>
					<div class="variant-item__wrap">
						<h4 class="variant-item__subtitle">{{ trans('otrymannia-posvidky.variant_subtitle') }}</h4>
						<div class="variant-item__text">{!! trans('otrymannia-posvidky.variant_item1_text') !!}</div>
					</div>
				</div>
				<a href="#buy" class="variant-item__btn fancybox">{{ trans('otrymannia-posvidky.variant_btn') }} <i></i></a>
				<div class="variant-item variant-item_top">
					<div class="variant-item__title"><i class="top"></i><h4>{{ trans('otrymannia-posvidky.variant_item2_title') }}</h4></div>
					<div class="variant-item__wrap">
						<h4 class="variant-item__subtitle">{{ trans('otrymannia-posvidky.variant_subtitle') }}</h4>
						<div class="variant-item__text">{!! trans('otrymannia-posvidky.variant_item2_text') !!}</div>
					</div>
				</div>
				<a href="#buy" class="variant-item__btn fancybox">{{ trans('otrymannia-posvidky.variant_btn') }} <i></i></a>
				<div class="variant-item">
					<div class="variant-item__title"><h4>{{ trans('otrymannia-posvidky.variant_item3_title') }}</h4></div>
					<div class="variant-item__wrap">
						<h4 class="variant-item__subtitle">{{ trans('otrymannia-posvidky.variant_subtitle') }}</h4>
						<div class="variant-item__text">{!! trans('otrymannia-posvidky.variant_item3_text') !!}</div>
					</div>
				</div>
				<a href="#buy" class="variant-item__btn fancybox">{{ trans('otrymannia-posvidky.variant_btn') }} <i></i></a>
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
					<div class="team-slider__slide">
						<div class="expert expert_service">
							<div class="expert-photo">
								<img src="{{ asset('images/uploads/expert1.jpg') }}" alt="expert" class="expert-photo__image">
								<p class="expert-photo__name">{{ trans('main.expert_name1') }}</p>
							</div>
							<div class="expert-info">
								<p class="expert-info__name">{{ trans('main.expert_name1') }}</p>
								<p class="expert-info__position">{{ trans('main.expert_position1') }}</p>
								<p class="expert-info__text">
									<i>15+</i>
									<span>{{ trans('main.expert_text1') }}</span>
								</p>
								<a href="#expert" class="expert-info__btn fancybox" data-name="{{ trans('main.expert_name1') }}">{{ trans('main.expert_btn') }} <i></i></a>
							</div>
						</div>
					</div>
					<div class="team-slider__slide">
						<div class="expert expert_service">
							<div class="expert-photo">
								<img src="{{ asset('images/uploads/expert9.jpg') }}" alt="expert" class="expert-photo__image">
								<p class="expert-photo__name">{{ trans('main.expert_name8') }}</p>
							</div>
							<div class="expert-info">
								<p class="expert-info__name">{{ trans('main.expert_name8') }}</p>
								<p class="expert-info__position">{{ trans('main.expert_position8') }}</p>
								<p class="expert-info__text">
									<i>10+</i>
									<span>{{ trans('main.expert_text8') }}</span>
								</p>
								<a href="#expert" class="expert-info__btn fancybox" data-name="{{ trans('main.expert_name9') }}">{{ trans('main.expert_btn') }} <i></i></a>
							</div>
						</div>
					</div>
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
					<div class="faq__title">
						<i>01</i>
						<p>{{ trans('otrymannia-posvidky.question1') }}</p>
					</div>
					<div class="faq__answer">{!! trans('otrymannia-posvidky.answer1') !!}</div>

					<div class="faq__title">
						<i>02</i>
						<p>{{ trans('otrymannia-posvidky.question2') }}</p>
					</div>
					<div class="faq__answer">{!! trans('otrymannia-posvidky.answer2') !!}</div>

					<div class="faq__title">
						<i>03</i>
						<p>{{ trans('otrymannia-posvidky.question3') }}</p>
					</div>
					<div class="faq__answer">{!! trans('otrymannia-posvidky.answer3') !!}</div>
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