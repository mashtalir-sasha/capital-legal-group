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

<div class="grid d-none d-xl-block">
	<div class="line line_1"></div>
	<div class="line line_2"></div>
</div>

@include('templates.nav')

<header class="ja_head header" style="background-image: url(/images/vidkryttia_ukr_bg.jpg);">
	<div class="container">
		<div class="ja_head__note d-none d-xl-block">{!! trans('vidkryttia-ukr.head_note') !!}</div>
		<div class="row align-items-center">
			<div class="col offset-lg-1">
				<div class="ja_head__content">
					<h1 class="ja_head-title">{!! trans('vidkryttia-ukr.main_title') !!}</h1>
					<h2 class="ja_head-text">{{ trans('vidkryttia-ukr.main_text') }}</h2>
				</div>
			</div>
		</div>
	</div>
</header>

<section class="vs_about">
	<div class="container">
		<div class="note d-none d-xl-block">{{ trans('vidkryttia-ukr.about_note') }}</div>
		<div class="row">
			<div class="col-xl-10 offset-xl-1">
				<p class="vs_about__title vs_about__title_fwn">{{ trans('vidkryttia-ukr.about_title') }}</p>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-xl-5 col-md-6">
				<h3 class="vs_about__title">{{ trans('vidkryttia-ukr.about_subtitle1') }}</h3>
				<ul class="vs_about-list vs_about-list_fz16">
					{!! trans('vidkryttia-ukr.about_list1') !!}
				</ul>
				<h3 class="vs_about__title">{{ trans('vidkryttia-ukr.about_subtitle2') }}</h3>
				<ul class="vs_about-list vs_about-list_fz16">
					{!! trans('vidkryttia-ukr.about_list2') !!}
				</ul>
				<a href="{{ route('jurAut') }}" class="vs_about-link">{{ trans('vidkryttia-ukr.about_link1') }}</a>
				<a href="{{ route('dev') }}" class="vs_about-link">{{ trans('vidkryttia-ukr.about_link2') }}</a>
				<a href="#modal" class="vs_about__btn fancybox">{{ trans('vidkryttia-ukr.about_btn') }} <i></i></a>
			</div>
			<div class="col-xl-5 col-md-6">
				<div class="video-container">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/LXcoylC3IGA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="tarif">
	<div class="container">
		<div class="note d-none d-xl-block">{{ trans('vidkryttia-ukr.tarif_note') }}</div>
		<div class="row justify-content-center">
			<div class="col-xl-10">
				<h3 class="ja_block-title">{!! trans('vidkryttia-ukr.tarif_title') !!}</h3>
				<div class="row">
					<div class="col-lg-4 col-sm-6">
						<div class="tarif-item">
							<div class="tarif-item__title">
								<h4>{{ trans('vidkryttia-ukr.tarif_name1') }}</h4>
							</div>
							<div class="tarif-item__wrap">
								<p class="tarif-item__subtitle">{!! trans('vidkryttia-ukr.tarif_subtitle1') !!}</p>
								<p class="tarif-item__text">{!! trans('vidkryttia-ukr.tarif_text1') !!}</p>
							</div>
							<div class="tarif-item__price">
								<p>{!! trans('vidkryttia-ukr.tarif_price1') !!}</p>
								<a href="#buy" class="tarif-item__btn fancybox">{{ trans('vidkryttia-ukr.tarif_btn') }} <i></i></a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="tarif-item tarif-item_accent">
							<div class="tarif-item__title">
								<h4>{{ trans('vidkryttia-ukr.tarif_name2') }}</h4>
							</div>
							<div class="tarif-item__wrap">
								<p class="tarif-item__subtitle">{!! trans('vidkryttia-ukr.tarif_subtitle2') !!}</p>
								<p class="tarif-item__text">{!! trans('vidkryttia-ukr.tarif_text2') !!}</p>
							</div>
							<div class="tarif-item__price">
								<p>{!! trans('vidkryttia-ukr.tarif_price2') !!}</p>
								<a href="#buy" class="tarif-item__btn fancybox">{{ trans('vidkryttia-ukr.tarif_btn') }} <i></i></a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="tarif-item">
							<div class="tarif-item__title">
								<h4>{{ trans('vidkryttia-ukr.tarif_name3') }}</h4>
							</div>
							<div class="tarif-item__wrap">
								<p class="tarif-item__subtitle">{!! trans('vidkryttia-ukr.tarif_subtitle3') !!}</p>
								<p class="tarif-item__text">{!! trans('vidkryttia-ukr.tarif_text3') !!}</p>
							</div>
							<div class="tarif-item__price">
								<p>{!! trans('vidkryttia-ukr.tarif_price3') !!}</p>
								<a href="#buy" class="tarif-item__btn fancybox">{{ trans('vidkryttia-ukr.tarif_btn') }} <i></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ja_form">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-9">
				<h3 class="ja_form__title">{{ trans('jur-aut.form_title') }}</h3>
				<p class="ja_form__text">{{ trans('jur-aut.form_text') }}</p>
				<form class="ja_form-content row form_check" autocomplete="off">
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
							<textarea name="query" rows="3" class="ja_form-content__textarea" placeholder="{{ trans('jur-aut.query') }}"></textarea>
						</div>
						<button class="ja_form-content__btn btnsubmit">{{ trans('jur-aut.form_btn') }} <i></i></button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<section class="alt">
	<div class="container">
		<div class="note d-none d-xl-block">{{ trans('vidkryttia-ukr.alt_note') }}</div>
		<div class="row justify-content-center">
			<div class="col-xl-10">
				<h3 class="ja_block-title">{!! trans('vidkryttia-ukr.alt_title') !!}</h3>
				<a href="{{ route('kupivliaKomp') }}" class="alt-services__item" style="background-image: url(/images/korp_alt1.jpg);">
					<p class="alt-services__text">{{ trans('vidkryttia-ukr.alt_text') }}</p>
				</a>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-xl-10">
				<h3 class="ja_block-title"><span><i>{{ trans('vidkryttia-ukr.other_title') }}</i></span></h3>
				<div class="row justify-content-center">
					<div class="col-md-4 col-sm-6">
						<div class="other-services__item" style="background-image: url(/images/korp_alt2.jpg);">
							<p class="other-services__text">{{ trans('vidkryttia-ukr.other_text1') }}</p>
						</div>
						<a href="{{ route('jurAut') }}" class="other-services__btn">{{ trans('vidkryttia-ukr.other_btn') }} <i></i></a>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="other-services__item" style="background-image: url(/images/korp_alt3.jpg);">
							<p class="other-services__text">{{ trans('vidkryttia-ukr.other_text2') }}</p>
						</div>
						<a href="{{ route('dev') }}" class="other-services__btn">{{ trans('vidkryttia-ukr.other_btn') }} <i></i></a>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="other-services__item" style="background-image: url(/images/korp_alt4.jpg);">
							<p class="other-services__text">{{ trans('vidkryttia-ukr.other_text3') }}</p>
						</div>
						<a href="{{ route('dev') }}" class="other-services__btn">{{ trans('vidkryttia-ukr.other_btn') }} <i></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="team">
	<div class="container">
		<div class="note d-none d-xl-block">{{ trans('jur-aut.team_note') }}</div>
		<div class="row">
			<div class="col-xl-10 offset-xl-1">
				<h3 class="ja_block-title">{!! trans('jur-aut.team_title') !!}</h3>
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
								<a href="tel:+380674029916" class="expert-info__phone">+38 067 402 99 16</a>
								<a href="mailto:priadka@spg.kiev.ua" class="expert-info__email">priadka@spg.kiev.ua</a>
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
								<a href="mailto:borovyk@spg.kiev.ua" class="expert-info__email">borovyk@spg.kiev.ua</a>
							</div>
						</div>
					</div>
					<div class="team-slider__slide">
						<div class="expert expert_service">
							<div class="expert-photo">
								<img src="{{ asset('images/uploads/expert10.jpg') }}" alt="expert" class="expert-photo__image">
								<p class="expert-photo__name">{{ trans('main.expert_name9') }}</p>
							</div>
							<div class="expert-info">
								<p class="expert-info__name">{{ trans('main.expert_name9') }}</p>
								<p class="expert-info__position">{{ trans('main.expert_position9') }}</p>
								<p class="expert-info__text">
									<i>5+</i>
									<span>{{ trans('main.expert_text9') }}</span>
								</p>
								<a href="mailto:rukodii@spg.kiev.ua" class="expert-info__email">rukodii@spg.kiev.ua</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ja_faq">
	<div class="container">
		<div class="note d-none d-xl-block">{{ trans('vidkryttia-ukr.faq_note') }}</div>
		<div class="row justify-content-center">
			<div class="col-xl-10">
				<h3 class="ja_block-title">{!! trans('vidkryttia-ukr.faq_title') !!}</h3>

				<div class="faq-content">
					<div class="faq__title">
						<i>01</i>
						<p>{{ trans('vidkryttia-ukr.question1') }}</p>
					</div>
					<div class="faq__answer">{!! trans('vidkryttia-ukr.answer1') !!}</div>

					<div class="faq__title">
						<i>02</i>
						<p>{{ trans('vidkryttia-ukr.question2') }}</p>
					</div>
					<div class="faq__answer">{!! trans('vidkryttia-ukr.answer2') !!}</div>

					<div class="faq__title">
						<i>03</i>
						<p>{{ trans('vidkryttia-ukr.question3') }}</p>
					</div>
					<div class="faq__answer">{!! trans('vidkryttia-ukr.answer3') !!}</div>

					<div class="faq__title">
						<i>04</i>
						<p>{{ trans('vidkryttia-ukr.question4') }}</p>
					</div>
					<div class="faq__answer">{!! trans('vidkryttia-ukr.answer4') !!}</div>

					<div class="faq__title">
						<i>05</i>
						<p>{{ trans('vidkryttia-ukr.question5') }}</p>
					</div>
					<div class="faq__answer">{!! trans('vidkryttia-ukr.answer5') !!}</div>
				</div>

				<a href="#modal" class="ja_faq__btn fancybox">{{ trans('jur-aut.faq_btn') }} <i></i></a>
			</div>
		</div>
	</div>
</section>

<section class="service-blog">
	<div class="container">
		<div class="note d-none d-xl-block">{{ trans('jur-aut.blog_note') }}</div>
		<div class="row justify-content-center">
			<div class="col-xl-10">
				<h3 class="ja_block-title">{!! trans('vidkryttia-ukr.blog_title') !!}</h3>
				<div class="blog-slider">
					<div class="blog-slider__slide">
						<div class="blog-item">
							<img src="{{ asset('images/blog1.jpg') }}" alt="blog image" class="blog-item__image">
							<div class="blog-item__content">
								<h4 class="blog-item__title">{{ trans('jur-aut.blog_item1_title') }}</h4>
								<p class="blog-item__text">{{ trans('jur-aut.blog_item1_text') }}</p>
								<a href="#" class="blog-item__link">{{ trans('jur-aut.blog_more') }}</a>
							</div>
						</div>
					</div>
					<div class="blog-slider__slide">
						<div class="blog-item">
							<img src="{{ asset('images/blog2.jpg') }}" alt="blog image" class="blog-item__image">
							<div class="blog-item__content">
								<h4 class="blog-item__title">{{ trans('jur-aut.blog_item2_title') }}</h4>
								<p class="blog-item__text">{{ trans('jur-aut.blog_item2_text') }}</p>
								<a href="#" class="blog-item__link">{{ trans('jur-aut.blog_more') }}</a>
							</div>
						</div>
					</div>
					<div class="blog-slider__slide">
						<div class="blog-item">
							<img src="{{ asset('images/blog3.jpg') }}" alt="blog image" class="blog-item__image">
							<div class="blog-item__content">
								<h4 class="blog-item__title">{{ trans('jur-aut.blog_item3_title') }}</h4>
								<p class="blog-item__text">{{ trans('jur-aut.blog_item3_text') }}</p>
								<a href="#" class="blog-item__link">{{ trans('jur-aut.blog_watch') }}</a>
							</div>
						</div>
					</div>
					<div class="blog-slider__slide">
						<div class="blog-item">
							<img src="{{ asset('images/blog1.jpg') }}" alt="blog image" class="blog-item__image">
							<div class="blog-item__content">
								<h4 class="blog-item__title">{{ trans('jur-aut.blog_item4_title') }}</h4>
								<p class="blog-item__text">{{ trans('jur-aut.blog_item4_text') }}</p>
								<a href="#" class="blog-item__link">{{ trans('jur-aut.blog_more') }}</a>
							</div>
						</div>
					</div>
					<div class="blog-slider__slide">
						<div class="blog-item">
							<img src="{{ asset('images/blog2.jpg') }}" alt="blog image" class="blog-item__image">
							<div class="blog-item__content">
								<h4 class="blog-item__title">{{ trans('jur-aut.blog_item1_title') }}</h4>
								<p class="blog-item__text">{{ trans('jur-aut.blog_item1_text') }}</p>
								<a href="#" class="blog-item__link">{{ trans('jur-aut.blog_more') }}</a>
							</div>
						</div>
					</div>
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