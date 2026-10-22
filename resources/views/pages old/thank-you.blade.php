<div class="no_foot media_all_12333">
	@extends('index')
	@section('title_and_meta')

	@endsection
	@section('content')
	<!-- Global site tag (gtag.js) - Google Ads: 835155431 -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-835155431"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'AW-835155431');
	</script>

	<script>
		gtag('event', 'conversion', {
			'send_to': 'AW-835155431/i4ZJCKapy4UDEOfrnY4D'
		});
	</script>
	<style>
		body {
			background: #2A2E3A;
		}

		.media_all_12333 .inner_popup_services {
			display: none !important;
		}

		.body_of_thankyou {
			background-image: url('../img/backgroundiqwe.png');
			padding: 14% 10px;
			height: auto;
			width: 100%;
			background-position: center;
			background-size: cover;
		}

		.body_of_thankyou .row {
			display: block;
		}

		.body_of_thankyou img {
			width: 17%;
			margin-bottom: 20px;
		}

		.body_of_thankyou {
			text-align: center;
			color: white;
		}

		.body_of_thankyou h1 {
			font-family: Poppins-bold;
			color: white;
			font-size: 60px;
			letter-spacing: -2px;
		}

		.body_of_thankyou p {
			font-size: 18px;
		}


		/*	MOBILE 	*/
		/*Only in desktop*/
		@media only screen and (min-width: 1000px) {
			.desktop-d-n {
				display: none;
			}
		}

		/*Only on Mobile*/
		@media only screen and (max-width: 1000px) {
			.mobile-d-n {
				display: none;
			}

			.body_of_thankyou {
				padding-top: 43%;
			}

			.body_of_thankyou img {
				width: 35% !important;
			}
		}
	</style>

	<div class="animsition-overlay">

		<section class="body_of_thankyou">
			<div class="container">
				<div class="row">
					<img src="/img/check.svg" data-aos="zoom-in-up" data-aos-delay="150">
					<h1 data-aos="zoom-in-up" data-aos-delay="150">Thank You!</h1>
					<p data-aos="zoom-in-up" data-aos-delay="150">We will contact you shortly, but in the meantime,
						take<br> a look at our amazing work.</p>
					<a href="/home"><button class="button_submit_a" data-aos="zoom-in-up"
							data-aos-delay="150">Portfolio</button></a>
				</div>
			</div>
		</section>

	</div>
	@endsection