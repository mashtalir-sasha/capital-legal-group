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

<header class="ja_head header" style="background-image: url(/images/gosp_spor_bg.jpg);">
	<div class="container">
		<div class="ja_head__note d-none d-xl-block">{!! trans('gosp-spor.head_note') !!}</div>
		<div class="row align-items-center">
			<div class="col offset-lg-1">
				<div class="ja_head__content">
					<h1 class="ja_head-title">{!! trans('gosp-spor.main_title') !!}</h1>
					<h2 class="ja_head-text">{{ trans('gosp-spor.main_text') }}</h2>
				</div>
			</div>
		</div>
	</div>
</header>

<section class="vs_about">
	<div class="container">
		<div class="note d-none d-xl-block">{{ trans('gosp-spor.about_note') }}</div>
		<div class="row">
			<div class="col-xl-10 offset-xl-1">
				<h3 class="vs_about__title">{{ trans('gosp-spor.about_title') }}</h3>
				<ul class="vs_about-list">
					<li>{{ trans('gosp-spor.about_list1') }}</li>
					<li>{{ trans('gosp-spor.about_list2') }}</li>
				</ul>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-xl-5 col-md-6">
				<ul class="vs_about-list">
					<li>
						{{ trans('gosp-spor.about_list3') }}
						<ul class="vs_about-list_into">
							{!! trans('vur-spor.about_list3_text') !!}
						</ul>
					</li>
					<li>{{ trans('gosp-spor.about_list4') }}</li>	
				</ul>
			</div>
			<div class="col-xl-5 col-md-6">
				<div class="video-container">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/kKz1oXTZ5iY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="col-xl-10">
				<table class="vs_price-table">
					<tr>
						<th class="first" style="text-align:left">{!! trans('gosp-spor.price-table_title1') !!}</th>
						<th class="middle">{!! trans('gosp-spor.price-table_title2') !!}</th>
					</tr>
				</table>
				<p class="vs_price__last">{!! trans('gosp-spor.price_last') !!}</p>
				<a href="#modal" class="vs_about__btn fancybox mt20">{{ trans('gosp-spor.about_btn') }} <i></i></a>
			</div>
		</div>
	</div>
</section>

<section class="receive pt">
	<div class="container">
		<div class="note d-none d-xl-block">{{ trans('gosp-spor.receive_note') }}</div>
		<div class="row justify-content-center">
			<div class="col-xl-10">
				<h3 class="ja_block-title">{!! trans('gosp-spor.receive_title') !!}</h3>
				<div class="row">
					<div class="col-lg-4 col-sm-6">
						<div class="receive-item">
							<img src="{{ asset('images/vs_receive_ico1.svg') }}" alt="ico" class="receive-item__ico">
							<p class="receive-item__text">{!! trans('gosp-spor.receive-item1') !!}</p>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="receive-item">
							<img src="{{ asset('images/vs_receive_ico2.svg') }}" alt="ico" class="receive-item__ico">
							<p class="receive-item__text">{!! trans('gosp-spor.receive-item2') !!}</p>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="receive-item">
							<img src="{{ asset('images/vs_receive_ico5.svg') }}" alt="ico" class="receive-item__ico">
							<p class="receive-item__text">{!! trans('gosp-spor.receive-item3') !!}</p>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="receive-item">
							<img src="{{ asset('images/vs_receive_ico4.svg') }}" alt="ico" class="receive-item__ico">
							<p class="receive-item__text">{!! trans('gosp-spor.receive-item4') !!}</p>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="receive-item">
							<img src="{{ asset('images/vs_receive_ico6.svg') }}" alt="ico" class="receive-item__ico">
							<p class="receive-item__text">{!! trans('gosp-spor.receive-item5') !!}</p>
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

<section class="manager">
	<div class="container">
		<div class="note d-none d-xl-block">{{ trans('gosp-spor.manager_note') }}</div>
		<div class="row justify-content-center">
			<div class="col-xl-10">
				<h3 class="ja_block-title">{!! trans('gosp-spor.manager_title') !!}</h3>
			</div>
		</div>
		<div class="row justify-content-center align-items-center">
			<div class="col-xl-5 col-md-6">
				<div class="manager-image">
					<img src="{{ asset('images/manager1.jpg') }}" alt="" class="manger-image__img">
				</div>
			</div>
			<div class="col-xl-5 col-md-6">
				<p class="manager__name">{{ trans('gosp-spor.manager1_name') }}</p>
				<p class="manager__position">{{ trans('gosp-spor.manager1_position') }}</p>
				<div class="manager-text">
					<p class="manager-text__count">{{ trans('gosp-spor.manager1_year') }}</p>
					<p class="manager-text__text">{{ trans('gosp-spor.manager1_exp') }}</p>
				</div>
				<a href="tel:+380973126266" class="manager__link">+38 097 312 62 66</a>
				<a href="mailto:shnyahin@spg.kiev.ua" class="manager__link">shnyahin@spg.kiev.ua</a>
			</div>
		</div>
		<div class="row justify-content-center align-items-center">
			<div class="col-xl-6 col-md-6">
				<div class="manager__content">
					<h4 class="manager__title">{{ trans('gosp-spor.manager1_title1') }}</h4>
					<p class="manager__text">{{ trans('gosp-spor.manager1_text1') }}</p>
					<p class="manager__text">{{ trans('gosp-spor.manager1_text2') }}</p>
				</div>
				<div class="manager__content">
					<h4 class="manager__title">{{ trans('gosp-spor.manager1_title2') }}</h4>
					<p class="manager__text">{{ trans('gosp-spor.manager1_text3') }}</p>
				</div>
				<div class="manager__content">
					<h4 class="manager__title">{{ trans('gosp-spor.manager1_title3') }}</h4>
					<p class="manager__text">{{ trans('gosp-spor.manager1_text4') }}</p>
					<p class="manager__text">{{ trans('gosp-spor.manager1_text5') }}</p>
					<p class="manager__text">{{ trans('gosp-spor.manager1_text6') }}</p>
				</div>
			</div>
			<div class="col-xl-4 col-md-6">
				<div class="manager-diploma">
					<img src="{{ asset('images/manager1_diploma.jpg') }}" alt="diploma" class="manager-diploma__img">
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ja_faq">
	<div class="container">
		<div class="note d-none d-xl-block">{{ trans('jur-aut.faq_note') }}</div>
		<div class="row justify-content-center">
			<div class="col-xl-10">
				<h3 class="ja_block-title">{!! trans('gosp-spor.faq_title') !!}</h3>

				<div class="faq-content">
					<div class="faq__title">
						<i>01</i>
						<p>{{ trans('gosp-spor.question1') }}</p>
					</div>
					<div class="faq__answer">{!! trans('gosp-spor.answer1') !!}</div>

					<div class="faq__title">
						<i>02</i>
						<p>{{ trans('gosp-spor.question2') }}</p>
					</div>
					<div class="faq__answer">{!! trans('gosp-spor.answer2') !!}</div>

					<div class="faq__title">
						<i>03</i>
						<p>{{ trans('gosp-spor.question3') }}</p>
					</div>
					<div class="faq__answer">{!! trans('gosp-spor.answer3') !!}</div>
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
				<h3 class="ja_block-title">{!! trans('gosp-spor.blog_title') !!}</h3>
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