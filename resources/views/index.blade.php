<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"><!-- prevent zoomIn in mobile inputs,selects,etc -->
    <meta property="fb:pages" content="934370089973049"/>

    <title>schol.io | Διεκδίκησε τώρα την υποτροφία που σου ταιριάζει.</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('new/img/favicon.ico')}}" type="image/x-icon" />

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('new/img/favicon-144.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('new/img/favicon-72.ico')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('new/img/favicon-57.ico')}}">


    <!-- Google Fonts -->
    <!--
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i
    |Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i
    |Oxygen:300,400,700
    |Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&subset=greek" rel="stylesheet">
    -->

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&subset=greek" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- font-awesome -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">

{{--    @include('components.modals.styles')--}}

    <link href="{{asset('new/css/Bootstrap-xxs-xxxs.css')}}" rel="stylesheet">

    <!--photo hover animation -->
    <link href="{{asset('new/css/photo-hover.css')}}" rel="stylesheet">

    <!-- Main CSS -->
    <link href="{{asset('new/css/main.css')}}" rel="stylesheet">

    <!-- Landing CSS -->
    <link href="{{asset('new/css/landing.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('new/css/algolia.css') }}">





    <!--====== Javascript Files =======-->



    <!-- jQuery js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <!-- Bootstrap js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <!-- Bootstrap Select js  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.4/js/bootstrap-select.min.js"></script>


    <!-- GoogleMap API -->
    <script src="https://maps.googleapis.com/maps/api/js?libraries=geometry,places&key=AIzaSyC18JCENxILnmXA1VGlsjJwBXQi3XZMWVA"></script>

    <!-- Knob Circular Counters-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Knob/1.2.13/jquery.knob.min.js"></script>

    <!-- Angular js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular.min.js"></script>
    {{--<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-animate.js"></script>--}}
    {{--<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-sanitize.js"></script>--}}

    <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.angular.min.js"></script>
    <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.angular.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/2.5.0/ui-bootstrap-tpls.min.js"></script>

    <script src="/new/js/angular-app.js"></script>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>


    <!-- Local javascript files -->
    <script src="{{asset('new/js/typed.js')}}"></script>

    <!--  -->
    <script src="{{asset('new/js/landing.js')}}"></script>
    <!--  -->


    <style>
        .opacityLow{opacity: 0}
        .opacityFull {opacity: 1}
        #sec2{
            -webkit-transition: all 0.9s linear ;
            transition: all 0.9s linear;}
        #sec2, #secNew {
            -webkit-transition: all 0.3s linear ;
            transition: all 0.3s linear;}

        .right-out { bottom: -750px;}
        .right-in { bottom: -240px;}

        .sch-reg-title{left: 37%; : 400px; position: absolute; max-width: 400px}

        .lang-sel{color: #fff; margin-top: 2px; margin-left: -23px}
        .lang-drop{margin: 4px -13px;}
        .select-white .dropdown-menu>li>a{ color: black;}
        .lang-drop .dropdown-menu{background-color: transparent; }
        .trans .dropdown-menu>li>a{ color: #fff}
         div>ul>.selected{ background-color: transparent; border: none; box-shadow: none;}
        .btn-transparent{background-color: transparent; box-shadow: none}
        .btn-transparent{ color: #fff}
        .btn-transparent:focus{ box-shadow: none; outline: 0}
        .btn-transparent:hover{color: #00bcd4!important;}


        .algolia-image{margin-left:10px; margin-top: 2px; height: 17px;}
        .algolia-powered{margin-top: -20px;  margin-bottom: -10px;  padding: 0; color: #ebebeb}


        /* ===========-----------===================== */
        #school-register-button:focus{color: #fff; outline: none!important;}

        .bot-text,.bot-text:visited{color: black}
        .bot-text:hover{color: #FD6A33}

        @media  (max-width: 2500px) {
            .sch-reg-title {left: 42%; width: 380px;}
        }

        @media  (max-width: 2100px) {
            .sch-reg-title {left: 41%; width: 380px;}
        }


        @media  (max-width: 1800px) {
            .sch-reg-title {left: 39%; width: 380px;}
        }

        @media  (max-width: 1440px) {
            .sch-reg-title {left: 35%; width: 370px;}
        }

        @media  (max-width: 1200px) {
            .sch-reg-title {left:28%; width: 330px;}
        }
        @media  (min-width: 768px) and (max-width: 991px) {
            .algolia-input{width: 688px!important;}
            .algolia-powered{position: absolute; right: -40px}
            .algolia-image{position: absolute; right: -64px; top: 0px;}
        }


    </style>


</head>
<body data-spy="scroll" data-target=".navbar" data-offset="250" id="home" style="overflow-x: hidden!important;" ng-app="landingApp" ng-controller="landCtrl" data-ng-init="fetchTypes" scroll ng-cloak>

@include('components.preloader')


<!-- Scholio Header -->
<header class="navbar navbar-top sc-landing-header" id="header" >
    <div class="container">

        <div class="row landing-nav-row">
            <div class="pull-left visible-lg visible-md nav-web">
                <!-- Scholio Branding -->
                <a class="sc-landing-brand" href="#home">
                    <div class="sc-landing-logo">
                        {{--<img src="{{asset('new/img/logo-light.png')}}" class="sc-logo" alt="scholio logo">--}}
                        <img src="{{asset('new/img/logoNX-light.png')}}" class="sc-logo" alt="scholio logo" style="height: 62px;">
                    </div>
                    <div class="sc-landing-logo-sticky " style=" padding-top: 15px">
                        {{--<img src="{{asset('new/img/logo.png')}}"  class="sc-logo" alt="scholio logo">--}}
                        <img src="{{asset('new/img/logoNX.png')}}"  class="sc-logo" alt="scholio logo" style="height: 63px; padding-top: 2px;">

                    </div>
                </a>
            </div>

            <div class="col-xs-6  visible-sm visible-xs" id="logo-xs">
                <div class="nav-mobile">
                    <a class="" href="#home">
                        <div class="navbar-brand  sc-landing-logo">
                            {{--<img src="{{asset('new/img/logo-light-m.png')}}" class="sc-logo" alt="scholio logo">--}}
                            <img src="{{asset('new/img/logoNX-light-m.png')}}" class="sc-logo" alt="scholio logo" style="height: 60px;">
                        </div>
                        <div class="navbar-brand  sc-landing-logo-sticky">
                            {{--<img src="{{asset('new/img/logo-m.png')}}" class="sc-logo" alt="scholio logo">--}}
                            <img src="{{asset('new/img/logoNX-m.png')}}" class="sc-logo" alt="scholio logo" style="height: 60px; padding-top: 2px;">
                        </div>
                    </a>
                </div>
            </div>


            <!-- Scholio sMenu -->

            <!-- Large Menu -->
            <div class="pull-right visible-md visible-lg">
                <div class="">
                    <ul class="nav navbar-nav navbar-right sc-landing-menu">
                        <li class="sc-landing-menu-item"><a href="#sc-landing-sec2">@lang('main.navigation.about')</a></li>
                        <li class="sc-landing-menu-item"><a href="#sc-landing-sec4">@lang('main.navigation.institutions')</a></li>
                        <li class="sc-landing-menu-item"><a href="#sc-landing-sec3">@lang('main.navigation.features')</a></li>
                        <li class="sc-landing-menu-item"><a href="#sc-landing-sec5">@lang('main.navigation.contact')</a></li>
                        <li class="lang-drop">
                        <form method="GET" id="langForm">
                            <select onchange="changeLang(this)" class="trans selectpicker" data-live-search="false" data-mobile="false" data-size='2' data-width="100%" data-style="btn-transparent">
                                <option data-icon="fa" value="en" {{ request()->cookie('lang')=='en' ? 'selected':'' }}>&nbsp; ENG</option>
                                <option data-icon="fa" value="el" {{ request()->cookie('lang')=='el' ? 'selected':'' }}>&nbsp; GR</option>
                            </select>
                        </form>
                        </li>

                        <li class="langDropWhite hide">
                        <form method="GET" id="langForm">
                            <select onchange="changeLang(this)" class="selectpicker select-white" data-live-search="false" data-mobile="false" data-size='2' data-width="100%" data-style="btn-white">
                                <option data-icon="fa" value="en" {{ request()->cookie('lang')=='en' ? 'selected':'' }}>&nbsp; ENG</option>
                                <option data-icon="fa" value="el" {{ request()->cookie('lang')=='el' ? 'selected':'' }}>&nbsp; GR</option>
                            </select>
                            </form>
                        </li>
                    @if(auth()->check())
                    <li><a href="{{ url('/dashboard') }}"><button type="button" class="sc-button-landing sc-button sc-orange sc-t-white">@lang('main.navigation.admin')</button></a></li>
                    <li><a href="{{ url('/out') }}"><button type="button" class="sc-button-landing sc-button sc-dark-green sc-t-white ">@lang('main.navigation.logout')</button></a></li>
                    @else
                    <li><a href="{{ url('/register/role') }}"><button type="button" class="sc-button-landing sc-button sc-green sc-t-white"
                                                                      {{--data-toggle="modal" data-target="#select-modal"--}}
                            >@lang('main.navigation.register')</button></a></li>
                    <li>
                    <a href="{{ url('/login') }}">
                    <button type="button" class="sc-button-landing sc-button sc-dark-green sc-t-white"
                            {{--data-toggle="modal" data-target="#signIn-modal"--}}
                    >@lang('main.navigation.login')</button>
                    </a>
                    </li>
                    @endif

                    </ul>

                </div>
            </div>

            <!-- Mobile Sandwich Icon  -->
            <div class="col-xs-6 visible-sm visible-xs" style="z-index: 6000; height: 20px;">
                    <div class="sc-landing-menu-mobile-sandwitch nav navbar-nav navbar-right pull-right" >
                        <div class="sc-landing-menu-sandwitch sc-landing-menu-sandwitch-button " >
                            <img src=" {{asset('new/img/collapse-light2.png')}}" alt="scholio logo" >
                            {{--<div style="-webkit-mask-box-image: url({{asset('new/img/collapse-light2.png')}})"></div>--}}
                        </div>
                    </div>
            </div>

            <!-- ======= Sandwich Menu =======-->
            @include('public.sandwich-menu-landing')




        </div>

    </div>

</header>


<!-- Scholio Main Section -->
<main id="main"  class="main-landing">



    <!-- Scholio Landing Page First Section -->
    <section id="sc-landing-sec1" class="sc-landing-sec1">
        <div class="container">
            <div class="sc-landing-sec1-content">
                <h1 class="text-center sc-t-white typed"><span class="typed-js"></span> </h1>
                <h3 class="text-center sc-t-white main-title">@lang('main.first.subtitle')</h3>

            </div>
        </div>
        <!-- Full Background Video -->
        <div class="sc-landing-video-container hidden-xs" style="overflow-x: hidden; z-index: -500">
            <!-- Video Shadow -->
            <div class="sc-landing-video-filter"></div>
            <video autoplay loop muted id="video-bg">
                <source src="{{asset('new/video/VideoMix6.ogg')}}" type="video/ogg">
                <source src="{{asset('new/video/VideoMix6.mp4')}}" type="video/mp4">

                {{--<source src="{{asset('new/video/VideoMix2.webm')}}" type="video/webm">--}}
            </video>
        </div>


        <div class="sc-landing-video-container vissible-xs hidden-sm hidden-md hidden-lg" style="overflow-x: hidden">
            <div class="sc-landing-video-filter"></div>
            <img class="responsive mobile-hero" src="{{asset('new/img/mobile/hero15b.jpg')}}" alt="">
        </div>
        <!-- Searchbar -->

        <div class="">
            <div class=" container search-container" style="position: relative;">

                <button class=" sc-button sc-t-white navbar-btn btn-scholarships btn-non-active" ng-click="selectedButton=1" ng-class="{'btn-active': selectedButton==1}"><i class="fa fa-trophy margin-right-10"></i>@lang('main.first.searchbar.scholarships.title')</button>
                <button class=" sc-button sc-t-white navbar-btn btn-schools btn-non-active" ng-click="selectedButton=2" ng-class="{'btn-active': selectedButton==2}"><i class="fa fa-university margin-right-10"></i>@lang('main.first.searchbar.institutions.title')</button>

                <div class=" sc-landing-search-bar-content">

                    <form onsubmit="event.preventDefault(); validateMyForm(this,1);" action="/search/scholarships" id="scholarship" method="post" ng-if="selectedButton==1">
                        {{ csrf_field() }}
                        <div class="col-md-10 col-sm-10" id="">
                            <input name="text" type="text" class="font-weight-300 algolia-input" id="search-input" autocomplete aa-datasets="getDatasets1()"
                                   ng-model="selection1"
                                   placeholder="@lang('main.first.searchbar.scholarships.placeholder')"
                            />

                             <div class=" font-weight-100 pull-right algolia-powered" >powered by
                                <img  src="/new/img/algolia_logof.png" alt=""  class="pull-right algolia-image"></div>
                        </div>

                        <div class="col-md-2 col-sm-12">
                            <input class="sc-no-border sc-green sc-t-white" type="submit" name="" value="@lang('main.first.searchbar.scholarships.button')">
                        </div>
                    </form>


                    <form onsubmit="event.preventDefault(); validateMyForm(this,2)" action="/search/scholarships" method="post" ng-if="selectedButton==2">
                        {{ csrf_field() }}
                        <div class="col-md-10 col-sm-10" id="">
                            <input name="text" type="text" class="font-weight-300 algolia-input" id="search-input" autocomplete aa-datasets="getDatasets2()"
                                   ng-model="selection2"
                                   placeholder="@lang('main.first.searchbar.institutions.placeholder')"
                            />
                            <div class=" font-weight-100 pull-right algolia-powered">powered by
                                <img src="/new/img/algolia_logof.png" alt="" class="pull-right algolia-image"></div>
                        </div>

                        <div class="col-md-2 col-sm-12">
                            <input class="sc-no-border sc-green sc-t-white" type="submit" name="" value="@lang('main.first.searchbar.institutions.button')">
                        </div>
                    </form>




                </div>
            </div>
        </div>


    </section>

    <!-- Second Section -->
    <section id="sc-landing-sec2" class="sc-landing-sec2">
        <div class="container ">
            <div class="sc-landing-sec2-content">
                <h2 class="text-center sc-t-white sc-t-dark-grey">@lang('main.about.title')</h2>
                <br><br>
                <div class="row">
                    <div class="col-md-4 text-center">
                        <img src="{{asset('new/img/landing-icon-1search.png')}}">
                        <h5 class="">@lang('main.about.section1.title')</h5>
                        <p class="centered-text">@lang('main.about.section1.subtitle')</p>
                    </div>
                    <div class="visible-sm visible-xs"><br><br><br></div>
                    <div class="col-md-4 text-center">
                        <img src="{{asset('new/img/landing-icon-2pencil.png')}}">
                        <h5>@lang('main.about.section2.title')</h5>
                        <p class="centered-text">@lang('main.about.section2.subtitle')</p>
                    </div>
                    <div class="visible-sm visible-xs"><br><br><br></div>
                    <div class="col-md-4 text-center">
                        <img src="{{asset('new/img/landing-icon-3startup.png')}}">
                        <h5>@lang('main.about.section3.title')</h5>
                        <p class="centered-text">@lang('main.about.section3.subtitle')</p>
                    </div>
                </div>

                <div class="row" id="" >
                    <div class="col-md-4 col-md-offset-4">
                        <br>
                        <a href="register/role/">
                            <button class=" col-xs-offset-3 col-sm-offset-3 col-md-offset-1  col-lg-10 col-md-10 col-sm-6 col-xs-6 sc-button sc-green sc-t-white navbar-btn" >@lang('main.about.button') </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Fourth Section -->
    <section id="sc-landing-sec4" class="sc-landing-sec4">
        <div class="container">
            <div class="sc-landing-sec4-content">

                <h2 class="text-center sc-t-white sc-t-dark-grey margin-bot-50">@lang('main.institutions.title')</h2>


                <div class="row">
                    <div class=" col-lg-6 col-md-7 col-sm-8 col-xs-6 col-xxs-12 col-xxxs-12">
                        <div class="grid">
                            <figure class="effect-lily sc-landing-card" >
                                <img src="{{asset('new/img/sect-photo/college2.png')}}" alt="student" style="" class="img-responsive "/>

                                <figcaption>
                                    <div class="centered-text">
                                        <h2>@lang('main.institutions.colleges')</h2>
                                        <p>@lang('main.institutions.button')</p>
                                    </div>
                                    <a href="{{url('public/schools?q=κολλέγια')}}">@lang('main.institutions.button')</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>

                    <div class=" col-lg-3 col-md-5 col-sm-4 col-xs-6 col-xxs-12 col-xxxs-12">
                        <div class="grid">
                            <figure class="effect-lily sc-landing-card " >
                                <img src="{{asset('new/img/sect-photo/student2.jpg')}}" alt="student" style="" class="img-responsive "/>

                                <figcaption>
                                    <div class="centered-text">
                                        <h2>@lang('main.institutions.frontistirio')<span></span></h2>
                                        <p>@lang('main.institutions.button')</p>
                                    </div>
                                    <a href="{{url('public/schools?q=Φροντιστήρια')}}">@lang('main.institutions.button')</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>


                    <div class=" col-lg-3 col-md-5 col-sm-5 col-xs-6 col-xxs-12 col-xxxs-12">
                        <div class="grid">
                            <figure class="effect-lily sc-landing-card " >
                                <img src="{{asset('new/img/sect-photo/Schoolchildren2.png')}}" alt="student" style="" class="img-responsive "/>

                                <figcaption>
                                    <div class="centered-text">
                                        <h2>@lang('main.institutions.languages1')<span>@lang('main.institutions.languages2')</span></h2>
                                        <p>@lang('main.institutions.button')</p>
                                    </div>
                                    <a href="{{url('public/schools?q=Ξένες Γλώσσες')}}">@lang('main.institutions.button')</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-7 col-sm-7 col-xs-6 col-xxs-12 col-xxxs-12">
                        <div class="grid">
                            <figure class="effect-lily sc-landing-card " >
                                <img src="{{asset('new/img/sect-photo/belfast2.png')}}" alt="student" style="" class="img-responsive "/>

                                <figcaption>
                                    <div class="centered-text">
                                        <h2>@lang('main.institutions.private_schools1')<span>@lang('main.institutions.private_schools2')</span></h2>
                                        <p>@lang('main.institutions.button')</p>
                                    </div>
                                    <a href="{{url('public/schools?q=Ιδιωτικά Σχολεία')}}">@lang('main.institutions.button')</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-xxs-12 col-xxxs-12">
                        <div class="grid">
                            <figure class="effect-lily sc-landing-card " >
                                <img src="{{asset('new/img/sect-photo/cubes2.png')}}" alt="student" style="" class="img-responsive "/>

                                <figcaption>
                                    <div class="centered-text">
                                        <h2>@lang('main.institutions.playground')<span></span></h2>
                                        <p>@lang('main.institutions.button')</p>
                                    </div>
                                    <a href="{{url('public/schools?q=Παιδικοί Σταθμοί')}}">@lang('main.institutions.button')</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>


                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xxs-12 col-xxxs-12">
                        <div class="grid">
                            <figure class="effect-lily sc-landing-card " >
                                <img src="{{asset('new/img/sect-photo/doct2.png')}}" alt="student" style="" class="img-responsive "/>

                                <figcaption>
                                    <div class="centered-text">
                                        <h2>@lang('main.institutions.iek1')<span> @lang('main.institutions.iek2')</span> </h2>
                                        <p>@lang('main.institutions.button')</p>
                                    </div>
                                    <a href="{{url('public/schools?q=ΙΕΚ, Επαγγελματική Σχολή')}}">@lang('main.institutions.button')</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>

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
                        <img class="img-responsive" src="{{asset('new/img/screen22.png')}}">
                    </div>

                    <div class="col-sm-5 col-lg-4 col-xs-12 margin-top-60 sc-landing-sec3-text">
                        {{--<div class="col-xs-12">--}}
                            <h2 class="text-left">@lang('main.features.title')</h2>
                        {{--</div>--}}
                        {{--<div class="col-xs-12">--}}
                            <h5 class="text-left"><span><img height="18" width="18" src="{{asset('new/img/check.svg')}}"></span>&nbsp;&nbsp;@lang('main.features.section1')</h5>
                        {{--</div>--}}

                        {{--<div class="col-xs-12">--}}
                            <h5 class="text-left"><span><img height="18" width="18" src="{{asset('new/img/check.svg')}}"></span>&nbsp;&nbsp;@lang('main.features.section2')</h5>
                        {{--</div>--}}
                        {{--<div class="col-xs-12">--}}
                            <h5 class="text-left"><span><img height="18" width="18" src="{{asset('new/img/check.svg')}}"></span>&nbsp;&nbsp;@lang('main.features.section3')</h5>
                        {{--</div>--}}
                        {{--<div class="col-xs-12">--}}
                            <h5 class="text-left"><span><img height="18" width="18" src="{{asset('new/img/check.svg')}}"></span>&nbsp;&nbsp;
                                <a href="https://m.me/scholioapp?ref=Welcome%20message" class="bot-text">@lang('main.features.section4')</a>
                            </h5>
                        {{--</div>--}}
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

                    <div style="position: relative" class="hidden-xs"><img src="/new/img/ipad6.png" class="ipad"></div>

                    <div style="position: relative" class="text-incr-125 sc-t-white">
                        <img src="/new/img/BannerVertical3.png"  class="banner"  style="z-index: 0">

                        <div class="text-container center-block">
                            <img height="290px" width="auto" src="/new/img/iphone.png" class="iphone">
                            {{--<div style="height: 400px; width: 300px; background-color: #00b9d2; margin: 20px 0; position: absolute; z-index: 0"></div>--}}


                            <div class="visible-xs hidden-sm hidden-md hidden-lg xxs-small-banner-content banner-text center-block">
                                <div class="text-incr-125 font-weight-300 centered-text sc-t-dark-blue banner-title" style="width: 280px; margin-left: -28px">@lang('main.about.institutions.title-xs')</div>
                                <div> <i class="fa fa-trophy text-incr-125 margin-right-10" aria-hidden="true"></i> @lang('main.about.institutions.section1')</div>
                                <div class="margin-top-50"> <i class="fa fa-user text-incr-125 margin-right-10" aria-hidden="true"></i>@lang('main.about.institutions.section2')</div>
                                <div class="margin-top-50"> <i class="fa fa-bullhorn text-incr-125 margin-right-10" aria-hidden="true"></i>@lang('main.about.institutions.section3')</div>
                            </div>
                            <div class="banner-text banner-content center-block">
                                <div class="text-incr-125 font-weight-300 centered-text sc-t-dark-blue banner-title hidden-sm hidden-md hidden-lg" style="width: 309px; margin-left: -30px">@lang('main.about.institutions.title-xs')</div>
                                <div> <i class="fa fa-trophy text-incr-125 margin-right-10" aria-hidden="true"></i> @lang('main.about.institutions.section1')</div>
                                <div class="margin-top-50"> <i class="fa fa-user text-incr-125 margin-right-10" aria-hidden="true"></i>@lang('main.about.institutions.section2')</div>
                                <div class="margin-top-50"> <i class="fa fa-bullhorn text-incr-125 margin-right-10" aria-hidden="true"></i>@lang('main.about.institutions.section3')</div>
                            </div>

                            <a href="">
                                <button type="button" id="school-register-button" class="btn sc-orange sc-t-white centered-text btn-school-reg"
                                        data-toggle="modal" data-target="#signUp-school-modal"
                                >@lang('main.about.institutions.button')</button>
                            </a>

                        </div>

                    </div>
                </div>

            </div>
        </div>


    </section>

    <!-- Fifth Section -->
    <section id="sc-landing-sec5" class="sc-landing-sec3" style="overflow-x: hidden!important;">
       <div class="container">
           <div class="row">

               <div class="text-center text-incr-175 sc-t-dark-grey font-weight-300 margin-bot-50 title-extra-top" >
                   @lang('main.statistics.title')
               </div>


               <div class="col-sm-6 col-md-3 margin-top-50 sc-t-grey hidden-xxxs">
                   <div class="text-center">
                       <input type="text" class="knob1"
                              data-min="0"
                              data-max="2000"
                              data-fgcolor="#00bcd4"
                              data-bgColor="#fff"
                              data-angleArc="250"
                              data-angleOffset="-125"
                              data-thickness=".05"
                              data-displayInput=false
                              data-readOnly=true
                              data-linecap="round"
                              data-width="215"
                       >
                       <div class="counter-icon text-incr-200 ">
                           <div>480</div>
                           <div><i class="fa fa-book text-incr-200 sc-t-green "></i></div>
                       </div>
                       <div class="counter-text text-incr-125 font-weight-300">@lang('main.statistics.studies')</div>

                   </div>
               </div>

               <div class="col-sm-6 col-md-3 margin-top-50 sc-t-grey ">
                   <div class="text-center  ">
                       <input type="text" class="knob2"
                              data-min="0"
                              data-max="200"
                              data-fgcolor="#00bcd4"
                              data-bgColor="#fff"
                              data-angleArc="250"
                              data-angleOffset="-125"
                              data-thickness=".05"
                              data-displayInput=false
                              data-readOnly=true
                              data-linecap="round"
                              data-width="215"
                       >
                       <div class="counter-icon text-incr-200">
                           <div>128</div>
                           <div><i class="fa fa-trophy text-incr-200 sc-t-green"></i></div>
                       </div>
                       <div class="counter-text text-incr-125 font-weight-300">@lang('main.statistics.scholarships')</div>

                   </div>
               </div>

               <div class="col-sm-6 col-md-3 margin-top-50 sc-t-grey">
                   <div class="text-center">
                       <input type="text" class="knob3"
                              data-min="0"
                              data-max="500"
                              data-fgcolor="#00bcd4"
                              data-bgColor="#fff"
                              data-angleArc="250"
                              data-angleOffset="-125"
                              data-thickness=".05"
                              data-displayInput=false
                              data-readOnly=true
                              data-linecap="round"
                              data-width="215"
                       >
                       <div class="counter-icon text-incr-200">
                           <div>268</div>
                           <div><i class="fa fa-user text-incr-200 sc-t-green"></i></div>
                       </div>
                       <div class="counter-text text-incr-125 font-weight-300">@lang('main.statistics.students')</div>

                   </div>
               </div>

               <div class="col-sm-6 col-md-3 margin-top-50 sc-t-grey">
                   <div class="text-center ">
                       <input type="text" class="knob4"
                              data-min="0"
                              data-max="160"
                              data-fgcolor="#00bcd4"
                              data-bgColor="#fff"
                              data-angleArc="250"
                              data-angleOffset="-125"
                              data-thickness=".05"
                              data-displayInput=false
                              data-readOnly=true
                              data-linecap="round"
                              data-width="215"
                       >
                       <div class="counter-icon text-incr-200">
                           <div>130</div>
                           <div><i class="fa fa-graduation-cap text-incr-200 sc-t-green"></i></div>
                       </div>
                       <div class="counter-text text-incr-125 font-weight-300">@lang('main.statistics.institutions')</div>

                   </div>
               </div>



           </div>
       </div>
    </section>



</main>

<!-- Footer -->
@include('public.footer')

</body>
<!--  -->
<script>
jQuery(document).ready(function($) {
    $(function(){
        $(".typed-js").typed({
            strings: ["@lang('main.first.title.talent')","@lang('main.first.title.student')","@lang('main.first.title.student1')"],
            typeSpeed: 100,
            backSpeed:100,
            loop: true
        });
    });
});

function validateMyForm(el, id){
    if(id == 1) window.location = '/public/scholarships?q=' + el.text.value;
    if(id == 2)window.location = '/public/schools?q=' + el.text.value;
}


</script>

    <!-- TypeAhead custom dropdown view --->
<script type="text/ng-template" id="customTemplate.html">
    <a>
        {{--<span>@{{ match.model.id }} &nbsp;</span>--}}
        {{--<img ng-src="@{{match.model.png}}" width="16">--}}
        <span ng-bind-html="match.label | uibTypeaheadHighlight:query"></span>
    </a>

</script>

<script>

    $('.knob1').val(1790).knob();
    $('.knob2').val(128).knob();
    $('.knob3').val(268).knob();
    $('.knob4').val(130).knob();
//    var graph = $('.knob');
//    $({value: 0}).animate({ value: 1790 }, {
//        duration:900,
//        easing: 'swing',
//        progress: function () {graph.val(Math.ceil(this.value)).trigger('change')
//        }
//    });
//

</script>
</html>
