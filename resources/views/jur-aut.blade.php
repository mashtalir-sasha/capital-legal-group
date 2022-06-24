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
								<li><a href="{{ route('jurAut') }}">Абонентское юридическое обслуживание</a></li>
								<li>
									<a style="cursor:pointer">Корпоративное право <i></i></a>
									<ul class="nav-hide2">
										<li><a href="{{ route('dev') }}">Открытие бизнеса в Украине</a></li>
										<li><a href="{{ route('dev') }}">Покупка готовых компаний в Украине</a></li>
										<li><a href="{{ route('dev') }}">Закрытие бизнеса в Украине</a></li>
										<li><a href="{{ route('dev') }}">Открытие бизнеса в США</a></li>
									</ul>	
								</li>
								<li><a href="{{ route('dev') }}">Налоговое право</a></li>
								<li><a href="{{ route('dev') }}">Разрешение споров <i></i></a></li>
								<li><a href="{{ route('dev') }}">Тендерное право</a></li>
								<li><a href="{{ route('dev') }}">Миграционное право <i></i></a></li>
								<li><a href="{{ route('dev') }}">Адвокат частных лиц <i></i></a></li>
								<li><a href="{{ route('dev') }}">Интеллектуальная собственность</a></li>
								<li><a href="{{ route('dev') }}">Бухгалтерский аутсорсинг</a></li>
							</ul>
						</li>
						<li class="nav-list__item"><a href="#team" class="anchor">{{ trans('main.menu3') }}</a></li>
						<li class="nav-list__item"><a href="{{ route('dev') }}">{{ trans('main.menu4') }}</a></li>
						<li class="nav-list__item"><a href="#contacts" class="list anchor">{{ trans('main.menu5') }}</a></li>
					</ul>
					<a href="tel:+380674029916" class="nav__phone">+38 067 402 99 16</a>
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

<header class="ja_head header">
	<div class="container">
		<div class="ja_head__note d-none d-xl-block">{!! trans('jur-aut.head_note') !!}</div>
		<div class="row align-items-center">
			<div class="col offset-lg-1">
				<div class="ja_head__content">
					<h1 class="ja_head-title">{!! trans('jur-aut.main_title') !!}</h1>
					<h2 class="ja_head-text">{{ trans('jur-aut.main_text') }}</h2>
				</div>
			</div>
		</div>
	</div>
</header>

<section class="ja_about">
	<div class="container">
		<div class="note d-none d-xl-block">{{ trans('jur-aut.about_note') }}</div>
		<div class="row">
			<div class="col-xl-10 offset-lg-1">
				<h3 class="ja_about__title">{{ trans('jur-aut.about_title') }}</h3>
				<p class="ja_about__text">{{ trans('jur-aut.about_text') }}</p>
			</div>
		</div>
		<div class="row align-items-center">
			<div class="col-xl-4 offset-xl-1 col-lg-5 col-md-6">
				<ul class="ja_about-list">
					{!! trans('jur-aut.about_list') !!}
				</ul>
			</div>
			<div class="col-lg-7 col-md-6">
				<div class="video-container">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/26q0Cd1BXOs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ja_benefits">
	<div class="container">
		<div class="note d-none d-xl-block">{{ trans('jur-aut.benefits_note') }}</div>
		<div class="row">
			<div class="col-xl-10 offset-xl-1">
				<h3 class="ja_block-title">{!! trans('jur-aut.benefits_title') !!}</h3>
				<div class="row">
					<div class="col-lg-4 col-sm-6">
						<div class="ja_benefits-item">
							<img src="{{ asset('images/ja_benefits_ico1.svg') }}" alt="ico" class="ja_benefits-item__ico">
							<p class="ja_benefits-item__text">{!! trans('jur-aut.benefits-item1') !!}</p>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="ja_benefits-item">
							<img src="{{ asset('images/ja_benefits_ico2.svg') }}" alt="ico" class="ja_benefits-item__ico">
							<p class="ja_benefits-item__text">{!! trans('jur-aut.benefits-item2') !!}</p>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="ja_benefits-item">
							<img src="{{ asset('images/ja_benefits_ico3.svg') }}" alt="ico" class="ja_benefits-item__ico">
							<p class="ja_benefits-item__text">{!! trans('jur-aut.benefits-item3') !!}</p>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="ja_benefits-item">
							<img src="{{ asset('images/ja_benefits_ico4.svg') }}" alt="ico" class="ja_benefits-item__ico">
							<p class="ja_benefits-item__text">{!! trans('jur-aut.benefits-item4') !!}</p>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="ja_benefits-item">
							<img src="{{ asset('images/ja_benefits_ico5.svg') }}" alt="ico" class="ja_benefits-item__ico">
							<p class="ja_benefits-item__text">{!! trans('jur-aut.benefits-item5') !!}</p>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="ja_benefits-item">
							<img src="{{ asset('images/ja_benefits_ico6.svg') }}" alt="ico" class="ja_benefits-item__ico">
							<p class="ja_benefits-item__text">{!! trans('jur-aut.benefits-item6') !!}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ja_volume">
	<div class="container">
		<div class="note d-none d-xl-block">{{ trans('jur-aut.volume_note') }}</div>
		<div class="row">
			<div class="col-xl-10 offset-xl-1">
				<h3 class="ja_block-title">{!! trans('jur-aut.volume_title') !!}</h3>
				<div class="row justify-content-center">
					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="ja_volume-item">
							<p class="ja_volume-item__text">{{ trans('jur-aut.volume_item1') }}</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="ja_volume-item">
							<p class="ja_volume-item__text">{{ trans('jur-aut.volume_item2') }}</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="ja_volume-item">
							<p class="ja_volume-item__text">{{ trans('jur-aut.volume_item3') }}</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="ja_volume-item">
							<p class="ja_volume-item__text">{{ trans('jur-aut.volume_item4') }}</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="ja_volume-item">
							<p class="ja_volume-item__text">{{ trans('jur-aut.volume_item5') }}</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="ja_volume-item">
							<p class="ja_volume-item__text">{{ trans('jur-aut.volume_item6') }}</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="ja_volume-item">
							<p class="ja_volume-item__text">{{ trans('jur-aut.volume_item7') }}</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="ja_volume-item">
							<p class="ja_volume-item__text">{{ trans('jur-aut.volume_item8') }}</p>
						</div>
					</div>
				</div>
				<a href="#modal" class="ja_volume__btn fancybox">{{ trans('jur-aut.volume_btn') }} <i></i></a>
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
								<img src="{{ asset('images/uploads/expert7.jpg') }}" alt="expert" class="expert-photo__image">
								<p class="expert-photo__name">{{ trans('main.expert_name7') }}</p>
							</div>
							<div class="expert-info">
								<p class="expert-info__name">{{ trans('main.expert_name7') }}</p>
								<p class="expert-info__position">{{ trans('main.expert_position7') }}</p>
								<p class="expert-info__text">
									<i>10+</i>
									<span>{{ trans('main.expert_text7') }}</span>
								</p>
								<a href="mailto:alyonkina@spg.kiev.ua" class="expert-info__email">alyonkina@spg.kiev.ua</a>
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

<section class="ja_price">
	<div class="container">
		<div class="note d-none d-xl-block">{{ trans('jur-aut.price_note') }}</div>
		<div class="row justify-content-center">
			<div class="col-xl-10">
				<h3 class="ja_block-title">{!! trans('jur-aut.price_title') !!}</h3>
				<p class="ja_price__text">{{ trans('jur-aut.price_text1') }}</p>
				<p class="ja_price__text">{{ trans('jur-aut.price_text2') }}</p>

				<table class="ja_price-table">
					<tr>
						<th class="first">{!! trans('jur-aut.price-table_title1') !!}</th>
						<th class="middle">{!! trans('jur-aut.price-table_title2') !!}</th>
						<th class="last">{!! trans('jur-aut.price-table_title3') !!}</th>
					</tr>
					<tr>
						<td>{{ trans('jur-aut.tarif1_text1') }}</td>
						<td>{{ trans('jur-aut.tarif1_text2') }}</td>
						<td>{{ trans('jur-aut.tarif1_text3') }}</td>
					</tr>
					<tr>
						<td>{{ trans('jur-aut.tarif2_text1') }}</td>
						<td>{{ trans('jur-aut.tarif2_text2') }}</td>
						<td>{{ trans('jur-aut.tarif2_text3') }}</td>
					</tr>
					<tr>
						<td>{{ trans('jur-aut.tarif3_text1') }}</td>
						<td>{{ trans('jur-aut.tarif3_text2') }}</td>
						<td>{{ trans('jur-aut.tarif3_text3') }}</td>
					</tr>
					<tr>
						<td>{{ trans('jur-aut.tarif4_text1') }}</td>
						<td>{{ trans('jur-aut.tarif4_text2') }}</td>
						<td>{{ trans('jur-aut.tarif4_text3') }}</td>
					</tr>
				</table>

				<p class="ja_price__last">{!! trans('jur-aut.price_last') !!}</p>
			</div>
		</div>
	</div>
</section>

<section class="ja_faq">
	<div class="container">
		<div class="note d-none d-xl-block">{{ trans('jur-aut.faq_note') }}</div>
		<div class="row justify-content-center">
			<div class="col-xl-10">
				<h3 class="ja_block-title">{!! trans('jur-aut.faq_title') !!}</h3>

				<div class="faq-content">
					<div class="faq__title">
						<i>01</i>
						<p>{{ trans('jur-aut.question1') }}</p>
					</div>
					<div class="faq__answer">Lorem ipsum dolor sit amet, consectetur adipisicing, elit. Eveniet provident nisi, iste placeat similique cupiditate in, tenetur aliquam obcaecati quidem!</div>

					<div class="faq__title">
						<i>02</i>
						<p>{{ trans('jur-aut.question2') }}</p>
					</div>
					<div class="faq__answer">Lorem ipsum dolor sit amet, consectetur adipisicing, elit. Eveniet provident nisi, iste placeat similique cupiditate in, tenetur aliquam obcaecati quidem!</div>

					<div class="faq__title">
						<i>03</i>
						<p>{{ trans('jur-aut.question3') }}</p>
					</div>
					<div class="faq__answer">{{ trans('jur-aut.answer3') }}</div>
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
				<h3 class="ja_block-title">{!! trans('jur-aut.blog_title') !!}</h3>
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
			<div class="col-md-3">
				<img src="{{ asset('images/foot_logo.png') }}" alt="" class="foot__logo">
			</div>
			<div class="col-md-6">
				<ul class="foot-main">
					<li class="foot-main__item"><a href="{{ route('index') }}">{{ trans('main.menu1') }}</a></li>
					<li class="foot-main__item"><a href="{{ route('index') }}/#team" class="anchor">{{ trans('main.menu3') }}</a></li>
					<li class="foot-main__item"><a href="{{ route('dev') }}">{{ trans('main.menu4') }}</a></li>
					<li class="foot-main__item"><a href="#contacts" class="anchor">{{ trans('main.menu5') }}</a></li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<ul class="foot-list">
					<li class="foot-list__item"><a href="{{ route('jurAut') }}">{{ trans('main.foot_menu1') }}</a></li>
					<li class="foot-list__item"><a href="{{ route('dev') }}">{{ trans('main.foot_menu2') }}</a></li>
					<li class="foot-list__item"><a href="{{ route('dev') }}">{{ trans('main.foot_menu3') }}</a></li>
					<li class="foot-list__item"><a href="{{ route('dev') }}">{{ trans('main.foot_menu4') }}</a></li>
					<li class="foot-list__item"><a href="{{ route('dev') }}">{{ trans('main.foot_menu5') }}</a></li>
					<li class="foot-list__item"><a href="{{ route('dev') }}">{{ trans('main.foot_menu6') }}</a></li>
					<li class="foot-list__item"><a href="{{ route('dev') }}">{{ trans('main.foot_menu7') }}</a></li>
					<li class="foot-list__item"><a href="{{ route('dev') }}">{{ trans('main.foot_menu8') }}</a></li>
					<li class="foot-list__item"><a href="{{ route('dev') }}">{{ trans('main.foot_menu9') }}</a></li>
				</ul>
			</div>
			<div class="col-md-4">
				<ul class="foot-list">
					<li class="foot-list__item"><a href="{{ route('dev') }}">{{ trans('main.foot_menu9') }}</a></li>
					<li class="foot-list__item"><a href="{{ route('dev') }}">{{ trans('main.foot_menu10') }}</a></li>
					<li class="foot-list__item"><a href="{{ route('dev') }}">{{ trans('main.foot_menu11') }}</a></li>
					<li class="foot-list__item"><a href="{{ route('dev') }}">{{ trans('main.foot_menu12') }}</a></li>
					<li class="foot-list__item"><a href="{{ route('dev') }}">{{ trans('main.foot_menu13') }}</a></li>
					<li class="foot-list__item"><a href="{{ route('dev') }}">{{ trans('main.foot_menu14') }}</a></li>
					<li class="foot-list__item"><a href="{{ route('dev') }}">{{ trans('main.foot_menu15') }}</a></li>
				</ul>
			</div>
			<div class="col-md-4">
				<ul class="foot-list">
					<li class="foot-list__item"><a href="{{ route('dev') }}">{{ trans('main.foot_menu16') }}</a></li>
					<li class="foot-list__item"><a href="{{ route('dev') }}">{{ trans('main.foot_menu17') }}</a></li>
					<li class="foot-list__item"><a href="{{ route('dev') }}">{{ trans('main.foot_menu18') }}</a></li>
					<li class="foot-list__item"><a href="{{ route('dev') }}">{{ trans('main.foot_menu19') }}</a></li>
					<li class="foot-list__item"><a href="{{ route('dev') }}">{{ trans('main.foot_menu20') }}</a></li>
					<li class="foot-list__item"><a href="{{ route('dev') }}">{{ trans('main.foot_menu21') }}</a></li>
				</ul>
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

<div class="d-none">
	<div id="modal" class="modal">
		<h3 class="modal__title">{{ trans('main.modal_title1') }}</h3>
		<h4 class="modal__text">{{ trans('main.modal_text1') }}</h4>
		<form class="modal-form form_check" autocomplete="off">
			<input type="hidden" name="title" value="{{ trans('main.modal_form_title') }}">
			<div class="rline">
				<input type="text" name="name" class="modal-form__input rfield" placeholder="{{ trans('main.name') }}">
			</div>
			<div class="rline">
				<input type="text" name="phone" class="modal-form__input rfield" placeholder="{{ trans('main.phone') }}">
			</div>
			<button class="modal-form__btn btnsubmit">{{ trans('main.modal_btn1') }} <i></i></button>
		</form>
	</div>
	<div id="thn" class="thn">
		<h3>{{ trans('main.thn_title') }}</h3>
		<p>{{ trans('main.thn_text') }}</p>
	</div>
</div>

<script src="{{ mix('/js/all.js') }}"></script>
<script src="{{ mix('/js/scripts.js') }}"></script>

</body>
</html>