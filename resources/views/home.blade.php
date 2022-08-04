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

<section class="numbers">
	<img src="{{ asset('images/numbers_image.svg') }}" alt="image" class="numbers__image d-none d-md-block">
	<div class="container">
		<div class="note d-none d-xl-block">{{ trans('main.numbers_note') }}</div>
		<div class="row">
			<div class="col-xl-3 col-md-4 col-6 offset-xl-1">
				<div class="number-item">
					<p class="number-item__title">{{ trans('main.number_title1') }}</p>
					<p class="number-item__text">{{ trans('main.number_text1') }}</p>
				</div>
			</div>
			<div class="col-xl-3 col-md-4 col-6 offset-xl-1">
				<div class="number-item">
					<p class="number-item__title">{{ trans('main.number_title2') }}</p>
					<p class="number-item__text">{{ trans('main.number_text2') }}</p>
				</div>
			</div>
			<div class="col-xl-3 col-md-4 col-6 offset-xl-1">
				<div class="number-item">
					<p class="number-item__title">{{ trans('main.number_title3') }}</p>
					<p class="number-item__text">{{ trans('main.number_text3') }}</p>
				</div>
			</div>
		
			<div class="numbers-line d-none d-md-block">
				<div class="numbers-line__big i1"></div>
				<div class="numbers-line__small i1"></div>
				<div class="numbers-line__small i2"></div>
				<div class="numbers-line__big i2"></div>
				<div class="numbers-line__big i3"></div>
				<div class="numbers-line__small i3"></div>
			</div>
		
			<div class="col-xl-3 col-md-4 col-6 offset-xl-1">
				<div class="number-item">
					<p class="number-item__title">{{ trans('main.number_title4') }}</p>
					<p class="number-item__text">{{ trans('main.number_text4') }}</p>
				</div>
			</div>
			<div class="col-xl-3 col-md-4 col-6 offset-xl-1">
				<div class="number-item">
					<p class="number-item__title">{{ trans('main.number_title5') }}</p>
					<p class="number-item__text">{{ trans('main.number_text5') }}</p>
				</div>
			</div>
			<div class="col-xl-3 col-md-4 col-6 offset-xl-1">
				<div class="number-item">
					<p class="number-item__title">{{ trans('main.number_title6') }}</p>
					<p class="number-item__text">{{ trans('main.number_text6') }}</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="about">
	<div class="container">
		<div class="about__ico d-none d-md-block"></div>
		<div class="note d-none d-xl-block">{{ trans('main.about_note') }}</div>
		<div class="row">
			<div class="col offset-xl-1">
				<h3 class="block-title">{!! trans('main.about_title') !!}</h3>
			</div>
		</div>
		<div class="row align-items-center">
			<div class="col-xl-5 col-md-6 order-0 order-md-1">
				<div class="video-container">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/LXcoylC3IGA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="col-lx-5 col-md-6 offset-xl-1 order-1 order-md-0">
				<p class="about__text">{!! trans('main.about_text') !!}</p>
				<a href="#modal" class="about__btn fancybox">{{ trans('main.about_btn') }} <i></i></a>
			</div>
			
		</div>
	</div>
</section>

<section id="team" class="team">
	<div class="container">
		<div class="note d-none d-xl-block">{{ trans('main.team_note') }}</div>
		<div class="row">
			<div class="col-xl-10 offset-xl-1">
				<h3 class="block-title">{!! trans('main.team_title') !!}</h3>
				<div class="team-slider">
					<div class="team-slider__slide">
						<div class="expert">
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
						<div class="expert">
							<div class="expert-photo">
								<img src="{{ asset('images/uploads/expert2.jpg') }}" alt="expert" class="expert-photo__image">
								<p class="expert-photo__name">{{ trans('main.expert_name2') }}</p>
							</div>
							<div class="expert-info">
								<p class="expert-info__name">{{ trans('main.expert_name2') }}</p>
								<p class="expert-info__position">{{ trans('main.expert_position2') }}</p>
								<p class="expert-info__text">
									<i>15+</i>
									<span>{{ trans('main.expert_text2') }}</span>
								</p>
								<a href="tel:+380677650888" class="expert-info__phone">+38 067 765 08 88</a>
								<a href="mailto:tsemeiko@spg.kiev.ua" class="expert-info__email">tsemeiko@spg.kiev.ua</a>
							</div>
						</div>
					</div>
					<div class="team-slider__slide">
						<div class="expert">
							<div class="expert-photo">
								<img src="{{ asset('images/uploads/expert3.jpg') }}" alt="expert" class="expert-photo__image">
								<p class="expert-photo__name">{{ trans('main.expert_name3') }}</p>
							</div>
							<div class="expert-info">
								<p class="expert-info__name">{{ trans('main.expert_name3') }}</p>
								<p class="expert-info__position">{{ trans('main.expert_position3') }}</p>
								<p class="expert-info__text">
									<i>17+</i>
									<span>{{ trans('main.expert_text3') }}</span>
								</p>
								<a href="tel:+380973126266" class="expert-info__phone">+38 097 312 62 66</a>
								<a href="mailto:shnyahin@spg.kiev.ua" class="expert-info__email">shnyahin@spg.kiev.ua</a>
							</div>
						</div>
					</div>
					<div class="team-slider__slide">
						<div class="expert">
							<div class="expert-photo">
								<img src="{{ asset('images/uploads/expert4.jpg') }}" alt="expert" class="expert-photo__image">
								<p class="expert-photo__name">{{ trans('main.expert_name4') }}</p>
							</div>
							<div class="expert-info">
								<p class="expert-info__name">{{ trans('main.expert_name4') }}</p>
								<p class="expert-info__position">{{ trans('main.expert_position4') }}</p>
								<p class="expert-info__text">
									<i>15+</i>
									<span>{{ trans('main.expert_text4') }}</span>
								</p>
								<a href="tel:+380674434414" class="expert-info__phone">+38 067 443 44 14</a>
								<a href="mailto:office@prima-veritas.ua" class="expert-info__email">office@prima-veritas.ua</a>
							</div>
						</div>
					</div>
					<div class="team-slider__slide">
						<div class="expert">
							<div class="expert-photo">
								<img src="{{ asset('images/uploads/expert5.jpg') }}" alt="expert" class="expert-photo__image">
								<p class="expert-photo__name">{{ trans('main.expert_name5') }}</p>
							</div>
							<div class="expert-info">
								<p class="expert-info__name">{{ trans('main.expert_name5') }}</p>
								<p class="expert-info__position">{{ trans('main.expert_position5') }}</p>
								<p class="expert-info__text">
									<i>15+</i>
									<span>{{ trans('main.expert_text5') }}</span>
								</p>
								<a href="tel:+380677650888" class="expert-info__phone">+38 067 765 08 88</a>
								<a href="mailto:denis.krainik@gmail.com" class="expert-info__email">denis.krainik@gmail.com</a>
							</div>
						</div>
					</div>
					<div class="team-slider__slide">
						<div class="expert">
							<div class="expert-photo">
								<img src="{{ asset('images/uploads/expert6.jpg') }}" alt="expert" class="expert-photo__image">
								<p class="expert-photo__name">{{ trans('main.expert_name6') }}</p>
							</div>
							<div class="expert-info">
								<p class="expert-info__name">{{ trans('main.expert_name6') }}</p>
								<p class="expert-info__position">{{ trans('main.expert_position6') }}</p>
								<p class="expert-info__text">
									<i>15+</i>
									<span>{{ trans('main.expert_text6') }}</span>
								</p>
								<a href="tel:+380964559677" class="expert-info__phone">+38 096 455 96 77</a>
								<a href="mailto:vestabuhgalter@gmail.com" class="expert-info__email">vestabuhgalter@gmail.com</a>
							</div>
						</div>
					</div>
					<div class="team-slider__slide">
						<div class="expert">
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
						<div class="expert">
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
						<div class="expert">
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
					<div class="team-slider__slide">
						<div class="expert">
							<div class="expert-photo">
								<img src="{{ asset('images/uploads/expert11.jpg') }}" alt="expert" class="expert-photo__image">
								<p class="expert-photo__name">{{ trans('main.expert_name10') }}</p>
							</div>
							<div class="expert-info">
								<p class="expert-info__name">{{ trans('main.expert_name10') }}</p>
								<p class="expert-info__position">{{ trans('main.expert_position10') }}</p>
								<p class="expert-info__text">
									<span>{{ trans('main.expert_text10') }}</span>
								</p>
								<a href="mailto:k.priadka@spg.kiev.ua" class="expert-info__email">k.priadka@spg.kiev.ua</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="partners">
	<div class="container">
		<div class="note d-none d-xl-block">{{ trans('main.partners_note') }}</div>
		<div class="row">
			<div class="col-xl-10 offset-xl-1">
				<h3 class="block-title">{!! trans('main.partners_title') !!}</h3>
				<div class="d-flex align-items-end">
					<p class="partners__text">{{ trans('main.partners_text') }}</p>
					<div class="partners__line"></div>
				</div>
			</div>
			<div class="col-12">
				<div class="row align-items-center justify-content-end d-none d-md-flex">
					<div class="col-md-2">
						<div class="partner">
							<img src="{{ asset('images/uploads/client1.png') }}" alt="partner">
						</div>
					</div>
					<div class="col-md-2">
						<div class="partner">
							<img src="{{ asset('images/uploads/client2.png') }}" alt="partner">
						</div>
					</div>
					<div class="col-md-2">
						<div class="partner">
							<img src="{{ asset('images/uploads/client3.png') }}" alt="partner">
						</div>
					</div>
					<div class="col-md-2">
						<div class="partner">
							<img src="{{ asset('images/uploads/client4.png') }}" alt="partner">
						</div>
					</div>
					<div class="col-md-2">
						<div class="partner">
							<img src="{{ asset('images/uploads/client5.png') }}" alt="partner">
						</div>
					</div>
				</div>
				<div class="row align-items-center d-none d-md-flex">
					<div class="col-md-2">
						<div class="partner">
							<img src="{{ asset('images/uploads/client6.png') }}" alt="partner">
						</div>
					</div>
					<div class="col-md-2">
						<div class="partner">
							<img src="{{ asset('images/uploads/client7.png') }}" alt="partner">
						</div>
					</div>
					<div class="col-md-2">
						<div class="partner">
							<img src="{{ asset('images/uploads/client8.png') }}" alt="partner">
						</div>
					</div>
					<div class="col-md-2">
						<div class="partner">
							<img src="{{ asset('images/uploads/client9.png') }}" alt="partner">
						</div>
					</div>
					<div class="col-md-2">
						<div class="partner">
							<img src="{{ asset('images/uploads/client10.png') }}" alt="partner">
						</div>
					</div>
				</div>
				<div class="partners-slider d-md-none">
					<div class="partners-slider__slide">
						<div class="partner">
							<img src="{{ asset('images/uploads/client1.png') }}" alt="partner">
						</div>
					</div>
					<div class="partners-slider__slide">
						<div class="partner">
							<img src="{{ asset('images/uploads/client2.png') }}" alt="partner">
						</div>
					</div>
					<div class="partners-slider__slide">
						<div class="partner">
							<img src="{{ asset('images/uploads/client3.png') }}" alt="partner">
						</div>
					</div>
					<div class="partners-slider__slide">
						<div class="partner">
							<img src="{{ asset('images/uploads/client4.png') }}" alt="partner">
						</div>
					</div>
					<div class="partners-slider__slide">
						<div class="partner">
							<img src="{{ asset('images/uploads/client5.png') }}" alt="partner">
						</div>
					</div>
					<div class="partners-slider__slide">
						<div class="partner">
							<img src="{{ asset('images/uploads/client6.png') }}" alt="partner">
						</div>
					</div>
					<div class="partners-slider__slide">
						<div class="partner">
							<img src="{{ asset('images/uploads/client7.png') }}" alt="partner">
						</div>
					</div>
					<div class="partners-slider__slide">
						<div class="partner">
							<img src="{{ asset('images/uploads/client8.png') }}" alt="partner">
						</div>
					</div>
					<div class="partners-slider__slide">
						<div class="partner">
							<img src="{{ asset('images/uploads/client9.png') }}" alt="partner">
						</div>
					</div>
					<div class="partners-slider__slide">
						<div class="partner">
							<img src="{{ asset('images/uploads/client10.png') }}" alt="partner">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="reviews">
	<div class="reviews__ico d-none d-md-block"></div>
	<div class="container">
		<div class="note d-none d-xl-block">{{ trans('main.reviews_title') }}</div>
		<div class="row">
			<div class="col-xl-10 offset-xl-1">
				<h3 class="block-title"><span>{{ trans('main.reviews_title') }}</span></h3>
				<div class="reviews-slider">
					<div class="review">
						<a href="{{ asset('images/uploads/1rev.jpg') }}" data-fancybox="reviews">
							<img src="{{ asset('images/uploads/thumb/1rev.jpg') }}" alt="review image" class="review__img">
						</a>
						<p class="review__title">ОТП Банк</p>
					</div>
					<div class="review">
						<p class="review__title">Альфа Банк</p>
						<a href="{{ asset('images/uploads/2rev.jpg') }}" data-fancybox="reviews">
							<img src="{{ asset('images/uploads/thumb/2rev.jpg') }}" alt="review image" class="review__img">
						</a>
					</div>
					<div class="review">
						<a href="{{ asset('images/uploads/3rev.jpg') }}" data-fancybox="reviews">
							<img src="{{ asset('images/uploads/thumb/3rev.jpg') }}" alt="review image" class="review__img">
						</a>
						<p class="review__title">ЧЕРЕДА</p>
					</div>
					<div class="review">
						<p class="review__title">СLIO</p>
						<a href="{{ asset('images/uploads/4rev.jpg') }}" data-fancybox="reviews">
							<img src="{{ asset('images/uploads/thumb/4rev.jpg') }}" alt="review image" class="review__img">
						</a>
					</div>
					<div class="review">
						<a href="{{ asset('images/uploads/5rev.jpg') }}" data-fancybox="reviews">
							<img src="{{ asset('images/uploads/thumb/5rev.jpg') }}" alt="review image" class="review__img">
						</a>
						<p class="review__title">IIT TRADING</p>
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