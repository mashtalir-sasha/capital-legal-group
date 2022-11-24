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

<header class="ja_head header" style="background-image: url(/images/buh_aut_bg.jpg);">
	<div class="container">
		<div class="ja_head__note d-none d-xl-block">{!! trans('buh-aut.head_note') !!}</div>
		<div class="row align-items-center">
			<div class="col offset-lg-1">
				<div class="ja_head__content">
					<h1 class="ja_head-title">{!! trans('buh-aut.main_title') !!}</h1>
					<h2 class="ja_head-text">{!! trans('buh-aut.main_subtitle') !!}</h2>
				</div>
			</div>
		</div>
	</div>
</header>

<section class="vs_about scroll fadeIn">
	<div class="container">
		<div class="note d-none d-xl-block">{{ trans('buh-aut.about_note') }}</div>
		<div class="row justify-content-center">
			<div class="col-xl-5 col-md-6">
				<p class="vs_about__title vs_about__title_fwn">{!! trans('buh-aut.about_text') !!}</p>
				<p class="vs_about__title vs_about__title_fwn">{!! trans('buh-aut.about_text2') !!}</p>
			</div>
			<div class="col-xl-5 col-md-6">
				<div class="video-container">
					<img src="{{ asset('images/buh_video.jpg') }}" alt="image">
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ja_volume scroll fadeIn">
	<div class="container">
		<div class="note d-none d-xl-block">{{ trans('buh-aut.volume_note') }}</div>
		<div class="row">
			<div class="col-xl-10 offset-xl-1">
				<h3 class="ja_block-title fadeInRight">{!! trans('buh-aut.volume_title') !!}</h3>
				<div class="row justify-content-center">
					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="ja_volume-item">
							<p class="ja_volume-item__text">{{ trans('buh-aut.volume_item1') }}</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="ja_volume-item">
							<p class="ja_volume-item__text">{{ trans('buh-aut.volume_item2') }}</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="ja_volume-item">
							<p class="ja_volume-item__text">{{ trans('buh-aut.volume_item3') }}</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="ja_volume-item">
							<p class="ja_volume-item__text">{{ trans('buh-aut.volume_item4') }}</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="ja_volume-item">
							<p class="ja_volume-item__text">{{ trans('buh-aut.volume_item5') }}</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="ja_volume-item">
							<p class="ja_volume-item__text">{{ trans('buh-aut.volume_item6') }}</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="ja_volume-item">
							<p class="ja_volume-item__text">{{ trans('buh-aut.volume_item7') }}</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="ja_volume-item">
							<p class="ja_volume-item__text">{{ trans('buh-aut.volume_item8') }}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ja_price ja_price_buh scroll fadeIn">
	<div class="container">
		<div class="note d-none d-xl-block">{{ trans('buh-aut.price_note') }}</div>
		<div class="row justify-content-center">
			<div class="col-xl-10">
				<h3 class="ja_block-title fadeInRight ja_block-title fadeInRight_buh">{!! trans('buh-aut.price_title') !!}</h3>

				<table class="ja_price-table ja_price-table_buh">
					<tr>
						<th class="first d-none d-md-table-cell">{!! trans('buh-aut.price-table_title1') !!}</th>
						<th class="middle d-none d-md-table-cell">{!! trans('buh-aut.price-table_title2') !!}</th>
						<th class="middle d-none d-md-table-cell">{!! trans('buh-aut.price-table_title3') !!}</th>
						<th class="middle d-none d-md-table-cell">{!! trans('buh-aut.price-table_title4') !!}</th>
						<th class="middle d-none d-md-table-cell">{!! trans('buh-aut.price-table_title5') !!}</th>
					</tr>
					<tr>
						<th class="middle d-md-none">{!! trans('buh-aut.price-table_title2') !!}</th>
						<td>{!! trans('buh-aut.tarif1_text1') !!}</td>
						<td>{!! trans('buh-aut.tarif1_text2') !!}</td>
						<td>{!! trans('buh-aut.tarif1_text3') !!}</td>
						<td>{!! trans('buh-aut.tarif1_text4') !!}</td>
						<td>{!! trans('buh-aut.tarif1_text5') !!}</td>
					</tr>
					<tr>
						<th class="middle d-md-none">{!! trans('buh-aut.price-table_title3') !!}</th>
						<td>{!! trans('buh-aut.tarif2_text1') !!}</td>
						<td>{!! trans('buh-aut.tarif2_text2') !!}</td>
						<td>{!! trans('buh-aut.tarif2_text3') !!}</td>
						<td>{!! trans('buh-aut.tarif2_text4') !!}</td>
						<td>{!! trans('buh-aut.tarif2_text5') !!}</td>
					</tr>
					<tr>
						<th class="middle d-md-none">{!! trans('buh-aut.price-table_title4') !!}</th>
						<td>{!! trans('buh-aut.tarif3_text1') !!}</td>
						<td>{!! trans('buh-aut.tarif3_text2') !!}</td>
						<td>{!! trans('buh-aut.tarif3_text3') !!}</td>
						<td>{!! trans('buh-aut.tarif3_text4') !!}</td>
						<td>{!! trans('buh-aut.tarif3_text5') !!}</td>
					</tr>
					<tr>
						<th class="middle d-md-none">{!! trans('buh-aut.price-table_title5') !!}</th>
						<td>{!! trans('buh-aut.tarif4_text1') !!}</td>
						<td>{!! trans('buh-aut.tarif4_text2') !!}</td>
						<td>{!! trans('buh-aut.tarif4_text3') !!}</td>
						<td>{!! trans('buh-aut.tarif4_text4') !!}</td>
						<td>{!! trans('buh-aut.tarif4_text5') !!}</td>
					</tr>
				</table>

				<p class="ja_price__last">{!! trans('buh-aut.price_last') !!}</p>
			</div>
		</div>
	</div>
</section>

<section class="ja_benefits scroll fadeIn">
	<div class="container">
		<div class="note d-none d-xl-block">{{ trans('buh-aut.benefits_note') }}</div>
		<div class="row">
			<div class="col-xl-10 offset-xl-1">
				<h3 class="ja_block-title fadeInRight">{!! trans('buh-aut.benefits_title') !!}</h3>
				<div class="row">
					<div class="col-lg-4 col-sm-6">
						<div class="ja_benefits-item">
							<img src="{{ asset('images/ja_benefits_ico1.svg') }}" alt="ico" class="ja_benefits-item__ico">
							<p class="ja_benefits-item__text">{!! trans('buh-aut.benefits-item1') !!}</p>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="ja_benefits-item">
							<img src="{{ asset('images/ja_benefits_ico2.svg') }}" alt="ico" class="ja_benefits-item__ico">
							<p class="ja_benefits-item__text">{!! trans('buh-aut.benefits-item2') !!}</p>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="ja_benefits-item">
							<img src="{{ asset('images/ja_benefits_ico3.svg') }}" alt="ico" class="ja_benefits-item__ico">
							<p class="ja_benefits-item__text">{!! trans('buh-aut.benefits-item3') !!}</p>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="ja_benefits-item">
							<img src="{{ asset('images/ja_benefits_ico4.svg') }}" alt="ico" class="ja_benefits-item__ico">
							<p class="ja_benefits-item__text">{!! trans('buh-aut.benefits-item4') !!}</p>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="ja_benefits-item">
							<img src="{{ asset('images/ja_benefits_ico5.svg') }}" alt="ico" class="ja_benefits-item__ico">
							<p class="ja_benefits-item__text">{!! trans('buh-aut.benefits-item5') !!}</p>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="ja_benefits-item">
							<img src="{{ asset('images/ja_benefits_ico6.svg') }}" alt="ico" class="ja_benefits-item__ico">
							<p class="ja_benefits-item__text">{!! trans('buh-aut.benefits-item6') !!}</p>
						</div>
					</div>
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

<section id="team" class="manager scroll fadeIn">
	<div class="container">
		<div class="note d-none d-xl-block">{{ trans('buh-aut.manager_note') }}</div>
		<div class="row justify-content-center">
			<div class="col-xl-10">
				<h3 class="ja_block-title fadeInRight">{!! trans('buh-aut.manager_title') !!}</h3>
			</div>
		</div>
		<div class="row justify-content-center align-items-center">
			<div class="col-xl-5 col-md-6">
				<div class="manager-image">
					<img src="{{ asset('images/manager6.jpg') }}" alt="" class="manger-image__img">
				</div>
			</div>
			<div class="col-xl-5 col-md-6">
				<p class="manager__name">{{ trans('buh-aut.manager1_name') }}</p>
				<p class="manager__position">{{ trans('buh-aut.manager1_position') }}</p>
				<div class="manager-text">
					<p class="manager-text__count">{{ trans('buh-aut.manager1_year') }}</p>
					<p class="manager-text__text">{{ trans('buh-aut.manager1_exp') }}</p>
				</div>
				<a href="#expert" class="expert-info__btn expert-info__btn_center fancybox" data-name="{{ trans('buh-aut.manager1_name') }}">{{ trans('main.expert_btn') }}s <i></i></a>
			</div>
		</div>
	</div>
</section>

<section class="ja_faq scroll fadeIn">
	<div class="container">
		<div class="note d-none d-xl-block">{{ trans('buh-aut.faq_note') }}</div>
		<div class="row justify-content-center">
			<div class="col-xl-10">
				<h3 class="ja_block-title fadeInRight">{!! trans('buh-aut.faq_title') !!}</h3>

				<div class="faq-content">
					<div class="faq__title">
						<i>01</i>
						<p>{{ trans('buh-aut.question1') }}</p>
					</div>
					<div class="faq__answer">{!! trans('buh-aut.answer1') !!}</div>

					<div class="faq__title">
						<i>02</i>
						<p>{{ trans('buh-aut.question2') }}</p>
					</div>
					<div class="faq__answer">{!! trans('buh-aut.answer2') !!}</div>
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
				<h3 class="ja_block-title fadeInRight">{!! trans('buh-aut.blog_title') !!}</h3>
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