<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
	<meta charset="utf-8">
	<title>{{ trans('buh-aut.meta_title') }} | {{ trans('main.meta_title') }}</title>
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

	<meta property="og:title" content="{{ trans('admin-spor.meta_title') }} | {{ trans('main.meta_title') }}">
	<meta property="og:description" content="{{ trans('main.meta_description') }}">
	<meta property="og:type" content="website">
	<meta property="og:url" content="{{ Request::url() }}">
	<meta property="og:image" content="{{ asset('images/buh_aut_bg.jpg') }}">

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
				<p class="vs_about__title vs_about__title_fwn">{!! Helpers::getLangString($about, 'text1') !!}</p>
				@if( isset( $about->text2 ) )
				<p class="vs_about__title vs_about__title_fwn">{!! Helpers::getLangString($about, 'text2') !!}</p>
				@endif
			</div>
			<div class="col-xl-5 col-md-6">
				<div class="video-container">
					<img src="{{ asset($about->image) }}" alt="image">
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
					@foreach($directions as $item)
					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="ja_volume-item">
							<p class="ja_volume-item__text">{{ Helpers::getLangString($item, 'text') }}</p>
						</div>
					</div>
					@endforeach
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
						<th class="first d-md-table-cell">{!! trans('buh-aut.price-table_title1') !!}</th>
						<th class="middle d-md-table-cell">{!! trans('buh-aut.price-table_title2') !!}</th>
						<th class="middle d-md-table-cell">{!! trans('buh-aut.price-table_title3') !!}</th>
						<th class="middle d-md-table-cell">{!! trans('buh-aut.price-table_title4') !!}</th>
						<th class="middle d-md-table-cell">{!! trans('buh-aut.price-table_title5') !!}</th>
					</tr>

					@foreach( json_decode($tarif->table) as $item )
						<tr>
							@if( app()->getLocale() == 'uk')
								<td>{{ $item->item1 }}</td>
								<td>{{ $item->item2 }}</td>
								<td>{{ $item->item3 }}</td>
								<td>{{ $item->item4 }}</td>
								<td>{{ $item->item5 }}</td>
							@else
								<td>{{ $item->item1RU }}</td>
								<td>{{ $item->item2RU }}</td>
								<td>{{ $item->item3RU }}</td>
								<td>{{ $item->item4RU }}</td>
								<td>{{ $item->item5RU }}</td>
							@endif
						</tr>
					@endforeach
				</table>

				<p class="ja_price__last">{!! Helpers::getLangString($tarif, 'text') !!}</p>
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
					@foreach($benefits as $item)
						<div class="col-lg-4 col-sm-6">
							<div class="ja_benefits-item">
								<img src="/{{ $item->image }}" alt="ico" class="ja_benefits-item__ico">
								<p class="ja_benefits-item__text"><span>{{ Helpers::getLangString($item, 'title') }}</span>{{ Helpers::getLangString($item, 'text') }}</p>
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
		<div class="note d-none d-xl-block">{{ trans('buh-aut.faq_note') }}</div>
		<div class="row justify-content-center">
			<div class="col-xl-10">
				<h3 class="ja_block-title fadeInRight">{!! trans('buh-aut.faq_title') !!}</h3>

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