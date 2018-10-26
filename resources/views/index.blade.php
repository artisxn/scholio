<!DOCTYPE html>
<html lang="en" class="no-js" prefix="og: http://ogp.me/ns#">

<head>
	<meta property="fb:app_id" content="1167687200016783" />
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://schol.io">
	<meta property="og:title" content="Schol.io - Still looking for the perfect study?" />
	<meta property="og:description" content="Στο Schol.io θα βρεις τα δημοφιλέστερα εκπαιδευτικά ιδρύματα!" />
	<meta property="og:image" content="https://schol.io/new/img/metamini.jpg" />
	<meta property="og:image:type" content="image/jpg">

	<meta name="google-site-verification" content="gIvgFOmd0fljlwlSORv5tswdbBGRoT9zU5reco2Ni0c" />

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0">
	<meta property="fb:pages" content="934370089973049" />
	<meta name="description" content="Στο Schol.io θα βρεις τα δημοφιλέστερα εκπαιδευτικά ιδρύματα!">
	<meta name="keywords" content="Κολλέγιο, ΙΕΚ, Σχολείο, Δημοτικό, Γυμνάσιο, Λύκειο, Πανεπιστήμιο, ΚΕΚ, ΙΙΕΚ, Σχολές, Σπουδές, Εκπαιδευτικά Ιδρύματα">



	@include('google.main')
	<title>Schol.io - Still looking for the perfect study?</title>


	<link rel="shortcut icon" href="{{asset('new/img/test-black.png')}}" type="image/x-icon" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&subset=greek" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}">
	<link href="{{asset('new/css/Bootstrap-xxs-xxxs.css')}}" rel="stylesheet">
	<link href="{{asset('new/css/photo-hover.css')}}" rel="stylesheet">
	<link href="{{asset('new/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('new/css/landing.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('new/css/algolia.css') }}">


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js" crossorigin="anonymous"></script>

	<style>
		.opacityLow {
			opacity: 0
		}
		.opacityFull {
			opacity: 1
		}
		#sec2 {
			-webkit-transition: all 0.9s linear;
			transition: all 0.9s linear;
		}
		#sec2,
		#secNew {
			-webkit-transition: all 0.3s linear;
			transition: all 0.3s linear;
		}
		.right-out {
			bottom: -750px;
		}
		.right-in {
			bottom: -240px;
		}
		.sch-reg-title {
			left: 37%;
		: 400px;
			position: absolute;
			max-width: 400px
		}
		.lang-sel {
			color: #fff;
			margin-top: 2px;
			margin-left: -23px
		}
		.lang-drop {
			margin: 4px -13px;
		}
		.select-white .dropdown-menu>li>a {
			color: black;
		}
		.lang-drop .dropdown-menu {
			background-color: transparent;
		}

		.trans{
			display: inline-block; margin: -3px 20px auto 20px; background-color: transparent; width: 50px; border: none; color: #ccc;
			-webkit-appearance: none;
			-moz-appearance: none;
		}
		/*.trans .dropdown-menu>li>a {*/
			/*color: #fff*/
		/*}*/
		div>ul>.selected {
			background-color: transparent;
			border: none;
			box-shadow: none;
		}
		.btn-transparent {
			background-color: transparent;
			box-shadow: none
		}
		.btn-transparent {
			color: #fff
		}
		.btn-transparent:focus {
			box-shadow: none;
			outline: 0
		}
		.btn-transparent:hover {
			color: #00bcd4!important;
		}
		.algolia-image {
			margin-left: 10px;
			margin-top: 2px;
			height: 17px;
		}
		.algolia-powered {
			margin-top: -20px;
			margin-bottom: -10px;
			padding: 0;
			color: #ebebeb
		}
		/* ===========-----------===================== */
		#school-register-button:focus {
			color: #fff;
			outline: none!important;
		}
		.bot-text,
		.bot-text:visited {
			color: black
		}
		.bot-text:hover {
			color: #FD6A33
		}
		.imgGray{filter: grayscale(0.8); opacity: 0.6;}
		.imgFull{filter: none; opacity: 1; zoom: 1.05; margin-top: 2px!important;}
		.img-support{display: block; margin-right: auto; margin-left: auto;}

		.img-support1{height: 68px;  }
		.img-support2{height: 55px;  }
		.img-support3{height: 50px;  }
		.img-support4{height: 50px;  }

		@media (max-width:767px) {
			.cl-fix{clear: both; }
			.img-support{height: 42px;}
			.img-support-container{margin-bottom: 40px  }
			.img-support3{height: 33px;}

		}

		@media (max-width: 2500px) {
			.sch-reg-title {
				left: 42%;
				width: 380px;
			}
		}
		@media (max-width: 2100px) {
			.sch-reg-title {
				left: 41%;
				width: 380px;
			}
		}
		@media (max-width: 1800px) {
			.sch-reg-title {
				left: 39%;
				width: 380px;
			}
		}
		@media (max-width: 1440px) {
			.sch-reg-title {
				left: 35%;
				width: 370px;
			}
		}
		@media (max-width: 1200px) {
			.sch-reg-title {
				left: 28%;
				width: 330px;
			}
		}
		@media (min-width: 768px) and (max-width: 991px) {
			.algolia-input {
				width: 688px!important;
			}
			.algolia-powered {
				position: absolute;
				right: -40px
			}
			.algolia-image {
				position: absolute;
				right: -64px;
				top: 0px;
			}
		}
	</style>

	@include('javascript_lang')

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="250" id="home" style="overflow-x: hidden!important;" ng-app="landingApp"
 ng-controller="landCtrl" data-ng-init="fetchTypes" scroll ng-cloak>

	<!-- @include('components.preloader') -->


	<!-- Scholio Header -->
	<header class="navbar navbar-top sc-landing-header" id="header">
		<div class="container">

			<div class="row landing-nav-row">
				<div class="pull-left visible-lg visible-md nav-web">
					<!-- Scholio Branding -->
					<a class="sc-landing-brand" href="#home">
						<div class="sc-landing-logo">
								<img src="{{asset('new/img/logoNX-light.png')}}" class="sc-logo" alt="scholio logo" style="height: 62px;">
						</div>
						<div class="sc-landing-logo-sticky" style=" padding-top: 15px">
							<picture>
								<source alt="scholio logo" srcset="{{asset('new/img/logoNX.webp')}}" type="image/webp">
								<source alt="scholio logo" srcset="{{asset('new/img/logoNX.png')}}" type="image/png">
								<img src="{{asset('new/img/logoNX.webp')}}" class="sc-logo" alt="scholio logo" style="height: 63px; padding-top: 2px;">
							</picture>
						</div>
					</a>
				</div>

				<div class="col-xs-6  visible-sm visible-xs" id="logo-xs">
					<div class="nav-mobile">
						<a class="" href="#home">
							<div class="navbar-brand  sc-landing-logo">

								<img src="{{asset('new/img/logoNX-light-m.png')}}" class="sc-logo" alt="scholio logo" style="height: 60px;">
							</div>
							<div class="navbar-brand  sc-landing-logo-sticky">
								<picture>
									<source alt="scholio logo" srcset="{{asset('new/img/logoNX-m.webp')}}" type="image/webp">
									<source alt="scholio logo" srcset="{{asset('new/img/logoNX-m.png')}}" type="image/png">
									<img src="{{asset('new/img/logoNX-m.png')}}" class="sc-logo" alt="scholio logo" style="height: 60px; padding-top: 2px;">
								</picture>
							</div>
						</a>
					</div>
				</div>


				<!-- Scholio sMenu -->

				<!-- Large Menu -->
				<div class="pull-right visible-md visible-lg">
					<div class="">
						<ul class="nav navbar-nav navbar-right sc-landing-menu">
							<li class="sc-landing-menu-item">
								<a href="#sc-landing-sec2">@lang('main.navigation.about')</a>
							</li>
							<li class="sc-landing-menu-item">
								<a href="#sc-landing-sec4">@lang('main.navigation.institutions')</a>
							</li>
							<li class="sc-landing-menu-item">
								<a href="#sc-landing-sec3">@lang('main.navigation.features')</a>
							</li>
							<li class="sc-landing-menu-item">
								<a href="#sc-landing-sec5">@lang('main.navigation.contact')</a>
							</li>
							<li class="lang-drop">
								<form method="GET" id="langForm">
									<select onchange="changeLang(this)" class="trans">
										<option data-icon="fa" value="el" {{ request()->cookie('lang') == 'el' ? 'selected' : '' }}>&nbsp; GR</option>
										<option data-icon="fa" value="en" {{ request()->cookie('lang') == 'en' ? 'selected' : '' }}>&nbsp; EN</option>
									</select>
								</form>

							</li>
							@if(auth()->check())
							<li>
								<a href="{{ url('/dashboard') }}">
									<button type="button" class="sc-button-landing sc-button sc-orange sc-t-white">@lang('main.navigation.admin')</button>
								</a>
							</li>
							<li>
								<a href="{{ url('/out') }}">
									<button type="button" class="sc-button-landing sc-button sc-dark-green sc-t-white ">@lang('main.navigation.logout')</button>
								</a>
							</li>
							@else
							<li>
								<a href="{{ url('/register/role') }}">
									<button type="button" class="sc-button-landing sc-button sc-green sc-t-white">@lang('main.navigation.register')</button>
								</a>
							</li>
							<li>
								<a href="{{ url('/login') }}">
									<button type="button" class="sc-button-landing sc-button sc-dark-green sc-t-white">@lang('main.navigation.login')</button>
								</a>
							</li>
							@endif

						</ul>

					</div>
				</div>

				<!-- Mobile Sandwich Icon  -->
				<div class="col-xs-6 visible-sm visible-xs" style="z-index: 6000; height: 20px;">
					<div class="sc-landing-menu-mobile-sandwitch nav navbar-nav navbar-right pull-right">
						<div class="sc-landing-menu-sandwitch sc-landing-menu-sandwitch-button ">
							<img src="image.png" data-src=" {{asset('new/img/collapse-light2.png')}}" class="lozad" alt="scholio logo">
						</div>
					</div>
				</div>

				<!-- ======= Sandwich Menu =======-->
				@include('public.sandwich-menu-landing')




			</div>

		</div>

	</header>


	<!-- Scholio Main Section -->
	<main id="main" class="main-landing">



		<!-- Scholio Landing Page First Section -->
		<section id="sc-landing-sec1" class="sc-landing-sec1">
			<div class="container">
				<div class="sc-landing-sec1-content">
					<h1 class="text-center sc-t-white typed">
						<span class="typed-js"></span>
					</h1>
					<h2 class="text-center sc-t-white main-title">@lang('main.first.subtitlePortal')</h2>

				</div>
			</div>
			<!-- Full Background Video -->
			<div class="sc-landing-video-container hidden-xs" style="overflow-x: hidden; z-index: -500">
				<!-- Video Shadow -->
				<div class="sc-landing-video-filter"></div>
				<video autoplay loop muted id="video-bg">
					<source src="{{asset('new/video/VideoMix6ShortX.ogg')}}" type="video/ogg">
					<source src="{{asset('new/video/VideoMix6ShortX.mp4')}}" type="video/mp4">
				</video>
			</div>


			<div class="sc-landing-video-container vissible-xs hidden-sm hidden-md hidden-lg" style="overflow-x: hidden">
				<div class="sc-landing-video-filter"></div>
				<img class="responsive mobile-hero lozad" src="image.png" data-src="{{asset('new/img/mobile/hero15b.jpg')}}" alt="scholio-hero-img">
			</div>
			<!-- Searchbar -->

			<div class="">
				<div class=" container search-container" style="position: relative;">

					<button class=" sc-button sc-t-white navbar-btn btn-scholarships btn-non-active" ng-click="selectedButton=1"
					 ng-class="{'btn-active': selectedButton==1}">
						<i class="fa fa-trophy margin-right-10"></i>@lang('main.first.searchbar.scholarships.title')</button>
					<button class=" sc-button sc-t-white navbar-btn btn-schools btn-non-active" ng-click="selectedButton=2" ng-class="{'btn-active': selectedButton==2}">
						<i class="fa fa-university margin-right-10"></i>@lang('main.first.searchbar.institutions.title')</button>

					<div class=" sc-landing-search-bar-content">

						<form onsubmit="event.preventDefault(); validateMyForm(this,1);" action="/search/scholarships" id="scholarship"
						 method="post" ng-if="selectedButton==1">
							{{ csrf_field() }}
							<div class="col-md-10 col-sm-10" id="">
								<input name="text" type="text" class="font-weight-300 algolia-input" id="search-input" autocomplete aa-datasets="getDatasets1()"
								 ng-model="selection1" placeholder="@lang('main.first.searchbar.scholarships.placeholder')" />

								<div class=" font-weight-100 pull-right algolia-powered">powered by
									<img src="/new/img/algolia_logof.png" alt="algolia-logo" class="pull-right algolia-image">
								</div>
							</div>

							<div class="col-md-2 col-sm-12">
								<input class="sc-no-border sc-green sc-t-white" type="submit" name="" value="@lang('main.first.searchbar.scholarships.button')">
							</div>
						</form>

						<!-- ΤΟ RADIUS LEFT EINAI STO landing.css 111 grammi -->
						<form onsubmit="event.preventDefault(); validateMyForm(this,2)" action="/search/scholarships" method="post" ng-if="selectedButton==2">
							{{ csrf_field() }}
							<div class="col-md-10 col-sm-10" id="">
								<input name="text" type="text" class="font-weight-300 algolia-input" id="search-input" autocomplete aa-datasets="getDatasets2()"
								 ng-model="selection2" placeholder="@lang('main.first.searchbar.institutions.placeholder')" />
								<div class=" font-weight-100 pull-right algolia-powered">powered by
									<img src="/new/img/algolia_logof.png" alt="algolia-logo" class="pull-right algolia-image lozad">
								</div>
							</div>

							<div class="col-md-2 col-sm-12">
								<input class="sc-no-border sc-green sc-t-white" type="submit" name="" value="@lang('main.first.searchbar.institutions.button')">
							</div>
						</form>
					</div>
				</div>
			</div>


		</section>

		<section id="sc-landing-sec2" class="sc-landing-sec2">
			<div class="container ">
				<div class="sc-landing-sec2-content">
					<h2 class="text-center sc-t-white sc-t-dark-grey">@lang('main.about.titlePortal')</h2>
					<br>
					<br>
					<div class="row">
						<div class="col-md-4 text-center">
							<img src="image.png" data-src="{{asset('new/img/landing-icon-1search.png')}}" class="lozad" alt="Αναζήτηση Κολλεγίων">
							<h5 class="">@lang('main.about.section1.titlePortal')</h5>
							<p class="centered-text">@lang('main.about.section1.subtitlePortal')</p>
						</div>
						<div class="visible-sm visible-xs">
							<br>
							<br>
							<br>
						</div>
						<div class="col-md-4 text-center">
							<img src="image.png" data-src="{{asset('new/img/landing-icon-2pencil.png')}}" class="lozad" alt="Εγγραφή Μαθητή">
							<h5>@lang('main.about.section2.titlePortal')</h5>
							<p class="centered-text">@lang('main.about.section2.subtitlePortal')</p>
						</div>
						<div class="visible-sm visible-xs">
							<br>
							<br>
							<br>
						</div>
						<div class="col-md-4 text-center">
							<img src="image.png" data-src="{{asset('new/img/landing-icon-3startup.png')}}" class="lozad" alt="Έναρξη Σπουδών">
							<h5>@lang('main.about.section3.title')</h5>
							<p class="centered-text">@lang('main.about.section3.subtitlePortal')</p>
						</div>
					</div>

					<div class="row" id="">
						<div class="col-md-4 col-md-offset-4">
							<br>
							<a href="register/role/">
								<button class=" col-xs-offset-3 col-sm-offset-3 col-md-offset-1  col-lg-10 col-md-10 col-sm-6 col-xs-6 sc-button sc-green sc-t-white navbar-btn">@lang('main.about.button')
								</button>
							</a>
						</div>
					</div>
				</div>
		</section>

		<!-- Third Section -->


		<section id="sc-landing-sec4" class="sc-landing-sec4">
			<div class="container">
				<div class="sc-landing-sec4-content">

					<h2 class="text-center sc-t-white sc-t-dark-grey margin-bot-50">@lang('main.institutions.title')</h2>

					<div class="row">

						<a href="{{url('public/schools?q=Ιδιωτικά Σχολεία')}}">
							<div class="col-lg-5 col-md-5 col-sm-6 col-xs-12  col-xxxs-12">
								<div class="grid">
									<figure class="effect-lily sc-landing-card ">
										<picture>
											<source srcset="{{asset('new/img/sect-photo/belfast2.webp')}}" type="image/webp">
											<source srcset="{{asset('new/img/sect-photo/belfast2.jpg')}}" type="image/jpeg">
											<img src="{{asset('new/img/sect-photo/belfast2.webp')}}" alt="Ιδιωτικά Σχολεία" class="img-responsive" />
										</picture>

										<figcaption>
											<div class="centered-text">
												<h2>@lang('main.institutions.private_schools1')
													<span>@lang('main.institutions.private_schools2')</span>
												</h2>
												<p>@lang('main.institutions.button')</p>
											</div>
											@lang('main.institutions.button')
										</figcaption>
									</figure>
								</div>
							</div>
						</a>

						<a href="{{url('public/schools?q=κολλέγια')}}">
							<div class=" col-lg-7 col-md-7 col-sm-6 col-xs-12 col-xxxs-12">
								<div class="grid">
									<figure class="effect-lily sc-landing-card">
										<picture>
											<source srcset="{{asset('new/img/sect-photo/college.webp')}}" type="image/webp">
											<source srcset="{{asset('new/img/sect-photo/college.jpg')}}" type="image/jpeg">
											<img src="{{asset('new/img/sect-photo/college.webp')}}" alt="Κολλέγια" class="img-responsive" />
										</picture>

										<figcaption>
											<div class="centered-text">
												<h2>@lang('main.institutions.colleges')</h2>
												<p>@lang('main.institutions.button')</p>
											</div>
											@lang('main.institutions.button')
										</figcaption>
									</figure>
								</div>
							</div>
						</a>

						<a href="{{url('public/schools?q=ΙΕΚ, Επαγγελματική Σχολή')}}">
							<div class="col-lg-7 col-md-7 col-sm-6 col-xs-12 col-xxxs-12">
								<div class="grid">
									<figure class="effect-lily sc-landing-card ">
										<picture>
											<source srcset="{{asset('new/img/sect-photo/doctor.webp')}}" type="image/webp">
											<source srcset="{{asset('new/img/sect-photo/doctor.jpg')}}" type="image/jpeg">
											<img src="{{asset('new/img/sect-photo/doctor.jpg')}}" alt="ΙΕΚ" class="img-responsive" />
										</picture>

										<figcaption>
											<div class="centered-text">
												<h2>@lang('main.institutions.iek1')
													<span> @lang('main.institutions.iek2')</span>
												</h2>
												<p>@lang('main.institutions.button')</p>
											</div>
											@lang('main.institutions.button')
										</figcaption>
									</figure>
								</div>
							</div>
						</a>

						<a href="{{url('public/schools?q=Φροντιστήρια')}}">
							<div class=" col-lg-5 col-md-5  col-sm-6 col-xs-12 col-xxxs-12">
								<div class="grid">
									<figure class="effect-lily sc-landing-card ">
										<picture>
											<source srcset="{{asset('new/img/sect-photo/student.webp')}}" type="image/webp">
											<source srcset="{{asset('new/img/sect-photo/student.jpg')}}" type="image/jpeg">
											<img src="{{asset('new/img/sect-photo/student.jpg')}}" alt="Φροντιστήρια" class="img-responsive lozad" />
										</picture>


										<figcaption>
											<div class="centered-text">
												<h2>@lang('main.institutions.frontistirio')
													<span></span>
												</h2>
												<p>@lang('main.institutions.button')</p>
											</div>
											@lang('main.institutions.button')
										</figcaption>
									</figure>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</section>

		<!-- Third Section -->



		<section id="sc-landing-sec3" class="sc-landing-sec3 sc-light-grey" style="overflow-x: hidden!important;">
			<div class="container" style="padding-left: 0">
				<div class="sc-landing-sec3-content">
					<div class="row ">
						<div class=" col-sm-7 col-lg-8 col-xs-12 margin-top-50">
							<picture>
								<source srcset="{{asset('new/img/iMac-sm.webp')}}" type="image/webp">
								<source srcset="{{asset('new/img/iMac-sm.png')}}" type="image/png">
								<img src="{{asset('new/img/iMac-sm.webp')}}" alt="ΙΕΚ" class="img-responsive" />
							</picture>

							<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000" style="  ">
								<!-- Indicators -->


								<div class="carousel-inner">
									<div class="item active">
										<picture>
											<source srcset="{{asset('/new/img/screen1b.webp')}}" type="image/webp">
											<source srcset="{{asset('/new/img/screen1b.jpg')}}" type="image/jpeg">
											<img src="{{asset('/new/img/screen1b.jpg')}}" alt="Σχολεία" class="carousel-img" />
										</picture>
										<div class="carousel-caption">
										</div>
									</div>
									<div class="item">
										<picture>
											<source srcset="{{asset('/new/img/screen2b.webp')}}" type="image/webp">
											<source srcset="{{asset('/new/img/screen2b.jpg')}}" type="image/jpeg">
											<img src="{{asset('/new/img/screen2b.webp')}}" alt="Υποτροφίες" class="carousel-img" />
										</picture>
										<div class="carousel-caption">
										</div>
									</div>
									<div class="item">
										<picture>
											<source srcset="{{asset('/new/img/screen3b.webp')}}" type="image/webp">
											<source srcset="{{asset('/new/img/screen3b.jpg')}}" type="image/jpeg">
											<img src="{{asset('/new/img/screen3b.webp')}}" alt="Υποτροφίες" class="carousel-img" />
										</picture>
										<div class="carousel-caption">
										</div>
									</div>
								</div>
							</div>

							<picture>
								<source srcset="{{asset('new/img/iPad-iPhone-macBook-sm.webp')}}" type="image/webp">
								<source srcset="{{asset('new/img/iPad-iPhone-macBook-sm.png')}}" type="image/png">
								<img class="img-responsive iphone-ipad-sm" src="{{asset('new/img/iPad-iPhone-macBook-sm.png')}}" alt="Ιδιωτικά Σχολεία" />
							</picture>


						</div>

						<div class="col-sm-5 col-lg-4 col-xs-12 margin-top-60 sc-landing-sec3-text">
							<h5 class="text-left">
								<span>
									<img height="18" width="18" class="lozad" src="image.png" data-src="{{asset('new/img/check.svg')}}" alt="check">
								</span>
								<span href="#myCarousel" data-slide-to="0" class="carousel-select">
									&nbsp;&nbsp;@lang('main.features.section1')
								</span>
							</h5>

							<h5 class="text-left">
								<span>
									<img height="18" width="18" src="image.png" data-src="{{asset('new/img/check.svg')}}" alt="check2" class="lozad">
								</span>
								<span href="#myCarousel" data-slide-to="2" class="carousel-select">
									&nbsp;&nbsp;@lang('main.features.section3')
								</span>
							</h5>

							<h5 class="text-left">
								<span>
									<img height="18" width="18" src="image.png" data-src="{{asset('new/img/check.svg')}}" alt="check3" class="lozad">
								</span>&nbsp;&nbsp;
								<a href="https://m.me/scholiobot?ref=Welcome%20message" class="bot-text">@lang('main.features.section4')</a>
							</h5>
						</div>
					</div>

				</div>
			</div>
		</section>

		<!-- New Section -->
		<section id="sc-landing-secNew" class="sc-landing-secNew sc-light-grey">
			<div class="container">
				<div class="sc-landing-secNew-content">
					<div class="row">

						<div class="sch-reg-title text-incr-175 font-weight-300 centered-text hidden-xs hidden-sm" style="">@lang('main.about.institutions.title')</div>

						<div style="position: relative" class="hidden-xs">
							<picture>
								<source srcset="{{asset('/new/img/ipad6.webp')}}" type="image/webp">
								<source srcset="{{asset('/new/img/ipad6.png')}}" type="image/png">
								<img src="/new/img/ipad6.webp" class="ipad" alt="ipad">
							</picture>

						</div>

						<div style="position: relative" class="text-incr-125 sc-t-white">
							<picture>
								<source srcset="{{asset('/new/img/BannerVertical3.webp')}}" type="image/webp">
								<source srcset="{{asset('/new/img/BannerVertical3.png')}}" type="image/png">
								<img src="/new/img/BannerVertical3.webp" class="banner" style="z-index: 0" alt="banner">
							</picture>


							<div class="text-container center-block">
								<picture>
									<source srcset="{{asset('/new/img/iphone.webp')}}" type="image/webp">
									<source srcset="{{asset('/new/img/iphone.png')}}" type="image/png">
									<img height="290px" width="auto" src="/new/img/iphone.webp" class="iphone" alt="iphone">
								</picture>



								<div class="visible-xs hidden-sm hidden-md hidden-lg xxs-small-banner-content banner-text center-block">
									<div class="text-incr-125 font-weight-300 centered-text sc-t-dark-blue banner-title" style="width: 280px; margin-left: -28px">@lang('main.about.institutions.title-xs')</div>
									<div>
										<i class="fa fa-trophy text-incr-125 margin-right-10" aria-hidden="true"></i>
										@lang('main.about.institutions.section1')</div>
									<div class="margin-top-50">
										<i class="fa fa-user text-incr-125 margin-right-10" aria-hidden="true"></i>@lang('main.about.institutions.section2')</div>
									<div class="margin-top-50">
										<i class="fa fa-bullhorn text-incr-125 margin-right-10" aria-hidden="true"></i>@lang('main.about.institutions.section3')</div>
								</div>
								<div class="banner-text banner-content center-block">
									<div class="text-incr-125 font-weight-300 centered-text sc-t-dark-blue banner-title hidden-sm hidden-md hidden-lg"
									 style="width: 309px; margin-left: -30px">@lang('main.about.institutions.title-xs')</div>
									<div>
										<i class="fa fa-trophy text-incr-125 margin-right-10" aria-hidden="true"></i>
										@lang('main.about.institutions.section1')</div>
									<div class="margin-top-50">
										<i class="fa fa-user text-incr-125 margin-right-10" aria-hidden="true"></i>@lang('main.about.institutions.section2')</div>
									<div class="margin-top-50">
										<i class="fa fa-bullhorn text-incr-125 margin-right-10" aria-hidden="true"></i>@lang('main.about.institutions.section3')</div>
								</div>

							</div>

						</div>
					</div>

				</div>
			</div>
		</section>


		<!-- SIX Section -->
		<section id="sc-landing-sec5" class="sc-landing-sec3" style="overflow-x: hidden!important; background-color: #f1f8fa; min-height: 450px!important;">
			<div class="container">
				<div class="row">
					<h2 class="text-center sc-t-white sc-t-dark-grey" style="padding-bottom: 80px;">@lang('main.support.title')</h2>
					<div class="col-sm-3 col-xs-6 img-support-container">
						<a href="https://www.venturegarden.gr/" target="_blank">
							<picture>
								<source srcset="{{asset('/new/img/support/venturegarden-logo-green.webp')}}" type="image/webp">
								<source srcset="{{asset('/new/img/support/venturegarden-logo-green.png')}}" type="image/png">
								<img class="imgGray img-support img-support1" rel="noopener" src="/new/img/support/venturegarden-logo-green.png"
								 alt="venture image" ng-mouseover="overVenture=true" ng-mouseleave="overVenture=false" ng-class="{imgFull: (overVenture==true)}">
							</picture>

						</a>
					</div>

					<div class="col-sm-3 col-xs-6 img-support-container">
						<a href="http://www.thermi-group.com/" target="_blank">
							<picture>
								<source srcset="{{asset('/new/img/support/thermi-logo.webp')}}" type="image/webp">
								<source srcset="{{asset('/new/img/support/thermi-logo.png')}}" type="image/png">
								<img class="imgGray img-support img-support2" rel="noopener" src="/new/img/support/thermi-logo.webp" alt="thermi image"
								 ng-mouseover="overThermi=true" ng-mouseleave="overThermi=false" ng-class="{imgFull: (overThermi==true)}">
							</picture>

						</a>
					</div>
					<div class="col-sm-3 col-xs-6 cl-fix ">
						<a href="http://ideatree.gr/" target="_blank">
							<picture>
								<source srcset="{{asset('/new/img/support/ideatree-logo.webp')}}" type="image/webp">
								<source srcset="{{asset('/new/img/support/ideatree-logo.png')}}" type="image/png">
								<img class="imgGray img-support img-support3" rel="noopener" src="/new/img/support/ideatree-logo.webp" alt="ideatree image"
								 ng-mouseover="overIdeatree=true" ng-mouseleave="overIdeatree=false" ng-class="{imgFull: (overIdeatree==true)}">
							</picture>

						</a>
					</div>
					<div class="col-sm-3 col-xs-6">
						<a href="http://www.eoellas.org/" target="_blank">
							<picture>
								<source srcset="{{asset('/new/img/support/eoelogo.webp')}}" type="image/webp">
								<source srcset="{{asset('/new/img/support/eoelogo.png')}}" type="image/png">
								<img class="imgGray img-support img-support4" rel="noopener" src="/new/img/support/eoelogo.webp" alt="eoe image"
								 ng-mouseover="overEoe=true" ng-mouseleave="overEoe=false" ng-class="{imgFull: (overEoe==true)}">
							</picture>

						</a>
					</div>

				</div>
			</div>
		</section>


	</main>


	<!-- ======   Modal Εγγραφής  Εκπ. Ιδρύματος=======-->
	<div id="signUp-school-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				@include('components.modals.registerschool')
			</div>
		</div>
	</div>
	<!-- /.modal -->

	@include('public.footer')

</body>

<script src="{{asset('/js/bootstrap//bootstrap337.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?libraries=geometry,places&key=AIzaSyC18JCENxILnmXA1VGlsjJwBXQi3XZMWVA"></script>
<script src="{{ asset('/js/angular/angular155.min.js')}}"></script>
<script src="{{ asset('/js/algolia/algoliasearch.min.js') }}"></script>
<script src="{{ asset('/js/algolia/autocomplete-angular.min.js')}}"></script>
<script src="{{ asset('/js/bootstrap/ui-bootstrap-tpls.min.js') }}"></script>
<script src="/new/js/angular-app.js"></script>
<script src="{{ asset('/js/axios.min.js') }}"></script>
<script src="{{asset('new/js/typed.js')}}"></script>
<script src="{{asset('new/js/landing.js')}}"></script>


<script type="text/ng-template" id="customTemplate.html">
    <a>
        <span>@{{ match.model.id }} &nbsp;</span>        <img ng-src="@{{match.model.png}}" width="16" alt="model" class="lozad">
        <span ng-bind-html="match.label | uibTypeaheadHighlight:query"></span>
    </a>
</script>

<script src="https://cdn.jsdelivr.net/npm/lozad"></script>
<script>
	const observer = lozad('.lozad', {
		rootMargin: '10px 0px', // syntax similar to that of CSS Margin
		threshold: 0.1 // ratio of element convergence
	});
	observer.observe();
	jQuery(document).ready(function ($) {
		$(function () {
			$(".typed-js").typed({
				strings: ["@lang('main.first.title.student')", "@lang('main.first.title.student1')"],
				typeSpeed: 100,
				backSpeed: 100,
				loop: true
			});
		});
	});
	function validateMyForm(el, id) {
		if (id == 1) window.location = '/public/scholarships?q=' + el.text.value;
		if (id == 2) window.location = '/public/schools?q=' + el.text.value;
	}
</script>

</html>