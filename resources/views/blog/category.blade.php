<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
	<meta charset="utf-8">
	<title>Блог - {{ Helpers::getLangString($category, 'title') }} | {{ trans('main.meta_title') }}</title>
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

<div class="grid-line grid-line_1 d-none d-xl-block"></div>
<div class="grid-line grid-line_2 d-none d-xl-block"></div>

@include('templates.nav')

<section class="blog-content header-margin">
	<div class="container">
		<div class="note d-none d-xl-block">{{ trans('blog.content_title') }}</div>
		<div class="row">
			<div class="col-lg-11 offset-lg-1">
				<div class="row">
					<div class="col-md-9">
						<h3 class="ja_block-title"><span><i>{{ trans('blog.content_title') }}</i></span></h3>
						<div class="row">
							@forelse($category->articles as $item)
							<div class="col-md-6">
								<div class="blog-cart">
									<a href="https://www.youtube.com/watch?v={{ $item->link }}" class="fancybox blog-cart__img">
										<img src="https://img.youtube.com/vi/{{ $item->link }}/maxresdefault.jpg" alt="blog item">
									</a>
									<h4 class="blog-cart__title">{{ Helpers::getLangString($item, 'title') }}</h4>
									<p class="blog-cart__text">{{ mb_strimwidth(Helpers::getLangString($item, 'text'), 0, 200, "...") }}</p>
									<a href="https://www.youtube.com/watch?v={{ $item->link }}" class="blog-cart__link fancybox">{{ trans('blog.btn') }}</a>
								</div>
							</div>
							@empty
							<div class="col">
								<div class="blog-epty">
									<h4 class="blog-empty__title">{{ trans('blog.empty_title') }}</h4>
									<p class="blog-empty__text">{{ trans('blog.empty_text') }}</p>
								</div>
							</div>
							@endforelse
						</div>
					</div>
					<div class="col-md-3 blog-list__wrap">
						<h4 class="blog-list__title d-md-none">{{ trans('blog.title') }}</h4>
						<ul class="blog-list">
							@foreach($blogCategory as $item)
							<li @if($category->id == $item->id) class="blog-list__item active" @else class="blog-list__item" @endif><a href="{{ route('blog.category', $item->slug) }}">{{ Helpers::getLangString($item, 'title') }}</a></li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@include('templates.foot')

<script src="{{ mix('/js/all.js') }}"></script>
<script src="{{ mix('/js/scripts.js') }}"></script>

</body>
</html>