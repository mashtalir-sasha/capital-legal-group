$(function() {

	const navHeight = $('.nav').innerHeight()
	$('.header').css({
		'margin-top': navHeight+'px',
		'height': 'calc(100vh - '+navHeight+'px)',
	})
	$('.header .row').css(
		'height', 'calc(100vh - '+navHeight+'px)'
	)

	// Скролинг по якорям
	$('.anchor').bind("click", function(e){
		const anchor = $(this)
		$('html, body').stop().animate({
			scrollTop: $(anchor.attr('href')).offset().top-navHeight // отступ от меню
		}, 500)
	e.preventDefault()
	})

	let toggle = document.querySelector('.nav-toggle')
	let navMob = document.querySelector('.nav-mob')
	toggle.addEventListener('click', function(e) {
		this.classList.toggle('opened')
		navMob.classList.toggle('show')
	})

	let clickNav = document.querySelectorAll('.nav-list__item .anchor')

	clickNav.forEach(el => {
		el.addEventListener("click", () => {
			toggle.classList.remove('opened')
			navMob.classList.remove('show')
		})
	})

	let langBtn = document.querySelector('.lang__item')
	let langHide = document.querySelector('.lang__hide')
	langBtn.addEventListener('click', function(e) {
		this.classList.toggle('opened')
		langHide.classList.toggle('show')
	})

	$('.reviews-slider').slick({
		infinite: false,
		slidesToShow: 5,
		slidesToScroll: 5,
		autoplay: true,
		arrows: false,
		responsive: [
			{
			breakpoint: 768,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3
				}
			},
			{
			breakpoint: 575,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
			}
		]
	})

	// Инит фансибокса
	$('.fancybox').fancybox({
		margin: 0,
		padding: 0,
		touch: false
	})

	$('.partners-slider').slick({
		infinite: false,
		arrows: false,
		centerMode: true,
		centerPadding: '100px',
		rows: 2,
		slidesPerRow: 3,
		responsive: [
			{
			breakpoint: 991,
				settings: {
					slidesPerRow: 2,
				}
			},
			{
			breakpoint: 575,
				settings: {
					centerPadding: '60px',
					slidesPerRow: 1,
				}
			}
		]
	})

	$('.team-slider').slick({
		infinite: false,
		arrows: true,
		centerMode: true,
		centerPadding: '100px',
		dots: true,
		responsive: [
			{
			breakpoint: 768,
				settings: {
					centerPadding: '0px',
					dots: false,
					arrows: false
				}
			}
		]
	})

	$('.team-slider .slick-dots li button').each( function(){
		if ($(this).html() < 10) {
			$(this).prepend('0')
		}
	})
	let lastNumbHead = $('.team-slider .slick-dots li:last-child button').html()
	$('.team-slider .slick-dots').append('<div class="last"><span></span><p>'+lastNumbHead+'</p></div>')

	$('.ja_benefits-item').matchHeight()
	
	$('.ja_volume-item').matchHeight()

	$('.faq-content').accordion({
		collapsible: true,
		heightStyle: "content"
	})

	$('.blog-slider').slick({
		infinite: false,
		arrows: false,
		dots: true,
		slidesToShow: 3,
		slidesToScroll: 3,
		autoplay: true,
		responsive: [
			{
			breakpoint: 992,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2,
				}
			},
			{
			breakpoint: 575,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					adaptiveHeight: true
				}
			}
		]
	})

	$('.blog-item').matchHeight()

	let dots = $('.blog-slider .slick-dots li').length
	$('.blog-slider .slick-dots li').css('width', 'calc(100% / '+dots+')')

		// Отправка формы
	$('form').submit(function() {
		let data = $(this).serialize()
		data += '&ajax-request=true'
		$.ajax({
			type: 'POST',
			url: '/mail.php',
			dataType: 'json',
			data: data,
			success: (function() {
				$.fancybox.close()
				$.fancybox.open({src:'#thn'})
			})()
		})
		return false
	})

})
