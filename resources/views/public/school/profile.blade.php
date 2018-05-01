<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta property="og:url" content="https://www.schol.io/public/profile/1" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"> <!-- prevent zoomIn in mobile inputs,selects,etc -->
    <meta property="fb:pages" content="934370089973049" />
    @include('google.main')

    <title>schol.io | Διεκδίκησε τώρα την υποτροφία που σου ταιριάζει.</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/new/img/favicon.ico" type="image/x-icon" />

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/new/img/favicon-144.ico">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/new/img/favicon-72.ico">
    <link rel="apple-touch-icon-precomposed" href="/new/img/favicon-57.ico">

    <!--====== CSS  Styles =======-->
    @include('public.styles')

    <!-- BX Slider CSS -->
    <link href="/new/css/jquery.bxslider.css" rel="stylesheet">

    <!-- Profile  CSS -->
    <link href="/new/css/profile.css" rel="stylesheet">

    <!-- Horizontal Ribbons  CSS -->
    <link href="/new/css/ribbonHorizontal.css" rel="stylesheet">

    <!-- Hexagon CSS -->
    <link href="/new/css/Hexagon.css" rel="stylesheet">

    <!-- jQuery js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>




    {{--<!-- GoogleMap API -->--}}
    <script src="https://maps.googleapis.com/maps/api/js?libraries=geometry,places&language=el&region=GR&key=AIzaSyC18JCENxILnmXA1VGlsjJwBXQi3XZMWVA"></script>


    <!-- Bootstrap js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Bootstrap Select js  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.4/js/bootstrap-select.min.js"></script>

    <!-- Angular js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.8/angular.min.js"></script>

    <!-- Rating js-->
    <script src="/new/js/jquery.raty-fa.js"></script>

    <!-- BX Slider-->
    <script src="/new/js/jquery.bxslider412.js"></script>
    <!--<script src="http://bxslider.com/lib/jquery.bxslider.js"></script>-->

    <!--  -->
    <script src="/new/js/profile.js"></script>

    <!-- Angular App-->
    {{--<script src="/new/js/profile-app.js"></script>--}}
    <script>
        window.Scholio = <?php echo json_encode([
    'csrfToken' => csrf_token(),
]); ?>
    </script>

    @include('public.window-lang')

    <style>
        
        .bx-img{
            cursor: pointer;}

        .disabledButton{
            opacity: 20%;
            cursor:not-allowed;
        }

        @media(max-width: 1250px) {
            .right-side-bar{padding-left: 2px}
        }

        @media(min-width: 1020px) and (max-width: 1090px){
            .container-profile{width: 1010px!important;}
        }
        @media(min-width: 1010px) and (max-width: 1019px){
            .container-profile{width: 1010px!important;}
        }
        @media(min-width: 992px) and (max-width: 1009px){
            .container-profile{width: 990px!important;}
            .right-side-bar{padding-left: 0}
        }


        span.fulltext {
            text-indent: 0;
        }

        .main-box2  ul li{text-indent: -20px;}
        .bx-wrapper img {height: 260px !important;}
        .slideup, .slidedown {
            background-color: #fff;
            overflow-y: hidden;
            -webkit-transition: max-height 0.3s ease-in-out;
            transition: max-height 0.3s ease-in-out;
            margin-bottom: 0;
        }
        .slidedown {  max-height: 3000px ;   }
        .slideAbout {max-height: 400px;}
        .slideStudies {max-height: 400px;}
        .slideScholarships {max-height: 522px;}
        .slideReviews {max-height: 500px;}
        .slideTeachers {max-height: 520px;}

        #horizontal-style {
            text-align: justify;
            margin-left: -15px;
            font-size: 115%;
        }

        #horizontal-style:after {
            content: '';
            display: inline-block;
        }
        #horizontal-style li {
            display: inline-block;
            height: 100%;
        }

        #horizontal-style li a {
            height: 100%;
        }
        #horizontal-style li a:hover {
            color: #FD6A33!important;
            background-color: #00bcd4;
        }
        #horizontal-style li a:visited,
        #horizontal-style li a:focus,
        #horizontal-style li a:active {
            background-color: transparent;
        }

        #submButton{ width: 100%;  position: relative; margin-top: 25px;}

        #about-li { margin: 20px}

        #about-li >div> ul > li { margin-left: 20px;}

        .lead {
            font-weight: bold;
            padding: 0; margin: 0;
        }
        .total-score{margin-top: -8px;}

        .raty {
            padding-left: 0 !important;
            padding-right: 0 !important;
        }

        .person-review{margin: 25px 0 5px 16px;}
        .review-text{ margin-bottom: 25px}

        #total-reviews{margin: 35px 0;}
        .xs-stars{margin: 27px 0;}


        .pad-left-0{padding-left: 0}
        .stats-box-xs{ background-color: #fff; margin-bottom: 30px; padding: 10px;}

        .school-links, .school-links:visited, .school-links:focus{color: #888!important;}
        .school-links:hover{color: #FD6A33!important;}


        .xxs-custom-line{display: none; height: 1px; background-color: #bbb; left:3%; width: 94%;
            right:auto; position: absolute; top:165px;}


        .modal-close{background-color: transparent; margin-top: 20px}
        .modal-close:hover{color:#FD6A33}
        .modal-select{border: none; background: transparent;}
        .modal-icon{height: 45px; margin:0 15px 0 5px}
        .select-container{border-bottom: 1px solid #777; margin-bottom: 20px}
        .input-text{margin-top: 40px; font-size: 110%; color: #777}
        .input-text-interest{margin-top: 40px; font-size: 110%; color: #777; margin-bottom: -10px; }
        .cursor-hand{cursor: pointer;}



        @media(max-width: 1109px) {
        .school-profile-nav-link{padding-right: 8px!important; padding-left: 8px!important; font-size: 95%;}
        }


        @media(max-width: 540px) {
            .xxs-custom-contact{width: 52.5%}
            .xxs-custom-stats{width: 46.5%}
        }


        @media(max-width: 480px) {
            .xxs-custom-contact{width: 99%}
            .xxs-custom-stats{width: 60%; float: left!important; margin-top: 35px;}
            .xxs-custom-line{display: block}
        }

        @media(max-width: 410px) {
            .xxs-custom-stats{width: 65%; }
        }

        @media(max-width: 395px) {
            .xxs-custom-stats{width: 75%;}

        }

        @media(max-width: 345px) {
            .xxs-custom-stats{width: 99%;}
            .slideup>div>.title{font-size: 155%}
        }

        hr {
            margin-left: auto;
            margin-right: auto;
            width: 94%;
            margin-top: 30px;
        }

        @media (min-width: 991px) and (max-width: 1450px) {
            /*.ribbon-front {height: 55px;}*/
            /*.ribbon-back-right {  height: 55px;}*/
            /*.ribbon-edge-bottomright{  top: 55px;  left: 81%;  }*/
/*            #submButton{ top: 5px; margin-left: 15px; position: relative}
*/        }

/*  @media (min-width: 481px) and  (max-width: 769px) {
            #xs-submButton{ z-index: 2000; top: 90%; margin-left: 1%;  width: 70%;  position: fixed; }
        }*/

        @media (max-width: 991px) {
            #xs-submButton{ eight: 41px; z-index: 2000; bottom: 10px; left: 13%;   width: 74%; right: auto; position: fixed; }
        }


        @media (max-width: 689px) {
            #xs-submButton{ height: 39px;  bottom: 3px; left: 8%; width: 84%; }
        }
        @media (max-width: 489px) {
            #xs-submButton{ height: 37px;  bottom: -1px; left: 4%; width: 92%; }
        }
        @media (max-width: 399px) {
            #xs-submButton{ left: 4%; width: 92%;}
        }


        @media  (max-width: 490px) {
            /*!*.ribbon-front {height: 55px;}*!*/
            /*.ribbon-back-right {  height: 55px;}*/
            /*.ribbon-edge-bottomright{  top: 55px;  left: 81%;  }*/
        }


    </style>
</head>
<body data-spy="scroll" data-target=".spy" data-offset="270" id="home"  ng-app="profileApp" ng-controller="profileCtrl" data-ng-init="init()" ng-cloak>

@include('components.preloader')


    {{\Counter::showAndCount('school-profile', $school->id)}}
<!-- Scholio Header -->

<header class="spy navbar navbar-fixed-top navbar-scroll sc-landing-header" id="header" style="z-index: 99990">

    <div class="container container-profile" style="">
        <div class="row scholarship-profile-nav-row">

            <div class="pull-left visible-lg visible-md nav-web ">
                <!-- Scholio Branding -->
                <a class="sc-landing-brand" href="{{ url('/') }}">
                    <div class="sc-landing-logo-sticky" style=" padding-top: 15px">
                        {{--<img src="{{asset('new/img/logo.png')}}" class="sc-logo" alt="scholio logo">--}}
                        <img src="{{asset('new/img/logoNX.png')}}"  class="sc-logo" alt="scholio logo" style="height: 63px; padding-top: 2px;">
                    </div>
                </a>
            </div>

            <div class="col-xs-6  visible-sm visible-xs">
                <div class="nav-mobile">
                    <a class="" href="{{ url('/') }}">
                        <div class="navbar-brand  sc-landing-logo-sticky">
                            {{--<img src="{{asset('new/img/logo-m.png')}}" class="sc-logo" alt="scholio logo">--}}
                            <img src="{{asset('new/img/logoNX-m.png')}}" class="sc-logo" alt="scholio logo" style="height: 60px; padding-top: 2px;">
                        </div>
                    </a>
                </div>
            </div>
            <!-- Scholio sMenu -->

            <!-- Large Menu -->
            <div class="pull-right visible-md visible-lg" >
                <ul class="nav navbar-nav navbar-right sc-landing-menu" >

                    @if($school->settings->about)<li class="sc-landing-menu-item "><a href="#sxetika" class="school-profile-nav-link ">@lang('profile.navigation.about')</a></li>@endif
                    @if($school->settings->studies && count($school->study) > 0)<li ng-show="studies.length && col_iek_eng_dan_mus" class="sc-landing-menu-item"><a href="#spoudes" class="school-profile-nav-link ">@lang('profile.navigation.studies')</a></li>@endif
                    @if($school->settings->scholarships && count($school->scholarship) > 0)<li class="sc-landing-menu-item"><a href="#ypotrofies" class="school-profile-nav-link">@lang('profile.navigation.scholarships')</a></li>@endif
                    @if($school->settings->teachers && count($school->teachers) > 0)<li class="sc-landing-menu-item"><a href="#faculty" class="school-profile-nav-link">@lang('profile.navigation.teachers')</a></li>@endif
                    @if($school->settings->reviews && count($school->reviews) > 0)<li class="sc-landing-menu-item"><a href="#reviews" class="school-profile-nav-link">@lang('profile.navigation.reviews')</a></li>@endif



                        <li class="langDropWhite " style="margin-top: 15px;">
                            <form method="GET" id="langForm">
                                <select onchange="changeLang(this)" class="selectpicker select-white landDrop school-profile-lang" data-live-search="false" data-mobile="false" data-size='2' data-width="100%" data-style="btn-white">
                                    <option style="color: black" data-icon="fa" value="en" {{ request()->cookie('lang')=='en' ? 'selected':'' }}>&nbsp; ENG</option>
                                    <option style="color: black" data-icon="fa" value="el" {{ request()->cookie('lang')=='el' ? 'selected':'' }}>&nbsp; GR</option>
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
                                    <button type="button" class="sc-button-landing sc-button sc-dark-green sc-t-white">@lang('main.navigation.login')</button>
                                </a>
                            </li>
                        @endif




                </ul>
            </div>


             <!-- Mobile Menu -->
            <div class="col-xs-6 visible-sm visible-xs " style="z-index: 6000; height: 20px;">
                <div class="">
                    <div class="sc-landing-menu-mobile-sandwitch nav navbar-nav navbar-right pull-right">
                        <div class="sc-landing-menu-sandwitch-button-sticky sc-landing-menu-sandwitch">
                            <img src="{{asset('new/img/collapse-dark2.png')}}" alt="scholio logo"  style="height:22px; margin-top: 7px;">
                            {{--<img src="{{asset('new/img/collapse-dark.png')}}" alt="scholio logo">--}}
                        </div>
                    </div>
                </div>

            </div>

            <!-- ======= Sandwich Menu =======-->
            @include('public.sandwich-menu-schoolProfile')



        </div>  <!-- row -->
    </div><!-- container-->
</header>

<!-- Scholio Main Section. -->
<div>
    <main id="main"  class="main" style="overflow-x: hidden">

        <div class="container container-profile" style="overflow-x: hidden">

            <div class="row up">
            </div>
            <!-- Logo & School Name -->
            <div class="up">
                <div class=" margin-bot-15 ">
                    <div class="">
                    <div class="xs-center">
                        <img id="img1"  class=" pull-left margin-right-10 margin-top-15 margin-bot-10"
                             ng-src="@{{contactInfo.logo}}">
                    </div>

                    <div class=" xs-centered-text">
                                                <h4 class="xs-h4">@{{contactInfo.name}}</h4>
                        @if($school->settings->reviews && count($school->reviews) >0)
                                                 <span class="pad-top-5 xs-pad-top xs-review">

                                        <span ng-show="contactInfo.ratingCounter!=0"> <rating class="text-incr-85 sc-t-orange" id="Rating"></rating>
                                                </span>
                                                <span ng-show="contactInfo.ratingCounter!=0" class="sc-t-orange"> @{{  contactInfo.stars}} </span>
                                                <span class="xs-text-incr-85">  &nbsp; ( @{{contactInfo.reviews.length}}  @lang('profile.reviews'))</span>

                         </span>

                         @else

                         <style>
                         .socials{
                            margin-top: -65px;
                         }
                            </style>

                         @endif

                    </div>


                        <div class="clearfix"></div>

                        @if($school->settings->social)
                            <ul class="nav nav-ul socials" id="" style="">
                            @foreach($school->admin->socialLinks as $link)
                                <li>
                                    <a class="lg-pull-left" href="{{ $link->link }}" target="_blank">
                                        <i style="" class="social fa fa-{{ $link->name }}" aria-hidden="true"></i>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                        @endif


                    </div>
                </div>
            </div>

            <!-- BX SLIDER -->
            
                <div class="margin-top-70 xs-slider" style="overflow-x: hidden">
                    <div class="row xl-margin-right " style="padding-left: 7px;">
                        <ul class="bxslider "  data-bx-slider="
                    pager: false, controls: true, minSlides: 1, maxSlides:5, moveSlides: 1,
                    slideWidth: 380, slideMargin:15, infiniteLoop: true, hideControlOnEnd: false">
                            @if($school->image->count() >= 4)
                                <li data-ng-repeat="image in contactInfo.image" data-notify-when-repeat-finished>
                                    <img class="bx-img" id="@{{image.full_path}}" data-ng-src="@{{image.full_path}}" onclick="test(event.target)"/>
                                </li>
                             @endif
                        </ul>
                    </div>
                </div>
            

            <div class="row">
                <button id="xs-submButton" type="button" class="hidden-lg hidden-md visible-sm visible-xs sc-button3 sc-orange sc-t-white margin-top-10 center-block"
                                        data-toggle="modal" data-target="#interest-modal">
                                    <i class="fa fa-pencil pad-right-15" aria-hidden="true"></i>
                                    Ενδιαφέρομαι
                                </button>
                @if($school->admin->subscription->plan_id == 2)
                    @if(auth()->check())
                        @if(auth()->user()->role != 'school')
                            @if(auth()->user()->apply->contains($school))
                                <button id="xs-submButton" type="button" class="hidden-lg hidden-md visible-sm visible-xs sc-button3 sc-green sc-t-white margin-top-10 center-block" style="background-color: #7fafbb" disabled>
                                    <i class="fa fa-link pad-right-15" aria-hidden="true"></i>
                                    @lang('profile.pending')
                                </button>


                            @elseif(auth()->user()->connectedSchool->contains($school))

                                        <button id="xs-submButton" type="button" class="hidden-lg hidden-md visible-sm visible-xs sc-button3 sc-orange sc-t-white margin-top-10 center-block" style="background-color: #bbb" disabled >
                                            <i class="fa fa-link pad-right-15" aria-hidden="true"></i>
                                            @lang('profile.connected')
                                        </button>



                            @else
                                <button id="xs-submButton" type="button" class="hidden-lg hidden-md visible-sm visible-xs sc-button3 sc-orange sc-t-white margin-top-10 center-block"
                                        data-toggle="modal" data-target="#connect-modal">
                                    <i class="fa fa-link pad-right-15" aria-hidden="true"></i>
                                    @lang('profile.request')
                                </button>
                            @endif
                        @endif
                    @endif
                    @endif
                        {{-- <button id="xs-submButton" type="button" class="hidden-lg hidden-md visible-sm visible-xs sc-button3 sc-orange sc-t-white margin-top-10 center-block"
                                data-toggle="modal" data-target="#connect-modal">
                            <i class="fa fa-link pad-right-15" aria-hidden="true"></i>

                            @lang('profile.request')
                        </button> --}}

                <!-- MAIN Section-->
                <div class="col-lg-9 col-md-9 margin-top-30 margin-bot-25" >
                    <!-- Main LEFT scroll bar menu-->


                    <!-- Main Info profile ng-repeat -->





                    <!-- SM - XS  contact & stats section -->
                        <div class="sc-t-grey hidden-lg hidden-md visible-sm visible-xs clearfix">
                            <div class="col-xs-12 margin-top-10 stats-box-xs">


                                <div class="col-xs-7 col-sm-7 pad-left-0 xxs-custom-contact">

                                    <span><i class="fa fa-map-marker pad-top-3 xs-text-incr-85 " aria-hidden="true"></i></span>
                                    <span class=" pad-left-8 xs-text-incr-85 text-incr-95">@{{contactInfo.address}}</span>

                                    <div class="pad-top-10"></div>
                                    <div class="">
                                        <span><i class="fa fa-street-view pad-top-3 " aria-hidden="true"></i></span>
                                        <span class="pad-left-5">@{{contactInfo.city}}</span>
                                    </div>

                                    <div class="pad-top-10"></div>
                                    <span><i class="fa fa-phone pad-top-2 xs-text-incr-85" aria-hidden="true"></i></span>
                                    <span class="pad-left-5">@{{contactInfo.phone}}</span>

                                    <div class="pad-top-10"></div>
                                    <span><i class="fa fa-envelope  pad-top-2 " aria-hidden="true"></i></span>
                                    <span class="pad-left-5 "> <a href="mailto:@{{contactInfo.email}}" class="school-links">@{{contactInfo.email}}</a></span>

                                    <span ng-if="contactInfo.website">
                                        <div class="pad-top-10"></div>
                                        <span><i class="fa fa-globe pad-top-3 xs-text-incr-85" aria-hidden="true"></i></span>
                                        <span class="pad-left-5"> <a href="https://@{{contactInfo.website}}/" target="_blank" class="school-links">@{{contactInfo.website}}</a></span>
                                    </span>

                                </div>






                              
                              <div class="xxs-custom-line"></div>
                              <div class="col-xs-5 col-sm-4 pad-left-0 pull-right xxs-custom-stats">

                                <span class="">
                                    <i class="fa fa-trophy  pad-top-3 " aria-hidden="true"></i>
                                    <span class="pad-left-5">@lang('profile.statistics.scholarships')</span>
                                    <span class="badge pull-right" style="margin-right: -4px"> @{{contactInfo.activeScholarships}}</span>
                                </span>


                                  <div ng-show="contactInfo.type_id==1 || contactInfo.type_id==2 ">
                                    <div class="clearfix pad-top-10"></div>
                                    <span class="">
                                        <i class="fa fa-paint-brush pad-top-3 " aria-hidden="true"></i>
                                        <span class="pad-left-5">@lang('profile.statistics.studies')</span>
                                        <span class="pull-right">@{{contactInfo.lengthStudies}}</span>
                                    </span>
                                  </div>

                                 @if($school->settings->statistics)
                                  <div class="clearfix pad-top-10"></div>
                                  <span class="">
                                        <i class="fa fa-user pull-left pad-top-2 " aria-hidden="true"></i>
                                        <span class="pad-left-10" ng-show="contactInfo.type_id==1 || contactInfo.type_id==2 ">@lang('profile.statistics.students')</span>
                                        <span class="pad-left-10" ng-show="contactInfo.type_id!=1 && contactInfo.type_id!=2">@lang('profile.statistics.students_s')</span>
                                     <span class="pull-right">@{{contactInfo.lengthStudents}}</span>
                                  </span>

                                  <div class="clearfix pad-top-10"></div>
                                  <span class="">
                                        <i class="fa fa-graduation-cap pad-top-3 " aria-hidden="true"></i>
                                        <span class="pad-left-2 pad-bot-10">@lang('profile.statistics.teachers')</span>
                                         <span class="pull-right">@{{contactInfo.lengthTeachers}}</span>
                                  </span>

                                 @endif
                              </div>
                               

                            </div>

                        </div>


                    @if($school->settings->about)
                        <!-- Σχετικά -->
                        <div class="margin-bot-25 slideup slideAbout" id="sxetika">
                            <div  class="section-header">
                                <p  class=" title margin-left-20 pad-top-40 text-incr-175 font-weight-300" style="">
                                    <i class="fa fa-info-circle fa-linear4 margin-right-10" aria-hidden="true"></i> <span>@lang('profile.cards.about') </span>
                                </p>
                            </div>
                            <div class="margin-left-20 margin-right-20 sc-t-grey text-justify">
                                <div class="margin-top-10" id="about-li" >
                                    <div ng-bind-html="trustAsHtml(contactInfo.about)"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Show More About  -->
                        <div class="show-more" style="background-color: #fff">
                            <div class="pad-top-20">
                                 <span ng-click="showMoreAbout('sxetika')">@{{textAbout}}
                                     <i class="@{{ iconAbout }}"></i></span>
                            </div>
                        </div>
                    @endif

                    @if($school->settings->studies)
                    <!-- ======= Σπουδές ========-->
                        <div ng-if="studies.length && ( col_iek_eng_dan_mus  )" id="spoudes" style="overflow-x: hidden">
                            <div id="sliderStudies" class=" main-box-2 slideup slideStudies">
                                <div class="section-header2">
                                    <p class="title margin-left-20 pad-top-40 text-incr-175 font-weight-300">
                                        <i class="fa fa-book fa-linear4 margin-right-10" aria-hidden="true"></i> <span>@lang('profile.cards.studies') </span>
                                    </p>
                                </div>
                                <!-- Σπουδές Κολλέγια & ΙΕΚ  -->
                                <div ng-if="col_iek_eng_dan_mus" >
                                    <div ng-repeat="(levIndex, level) in levelsName" >
                                        <ul ng-class="[{'col-md-6': (levelsName.length>1)},{'clearFloat': (levelsName.length>1)&&( levIndex+1)%2 ==1 },  'col-sm-12']" style="padding-bottom: 20px;">
                                            <div class=" text-incr-150 font-weight-300 margin-top-30 margin-left-10" style="margin-bottom: 0" ng-if="contactInfo.type_id!=2">  @{{ level }} </div>


                                            <ul ng-repeat="(secIndex, section) in sectionsName[$index]" ng-class="[{'col-lg-6': (contactInfo.type_id==2)},{'clearFloat': (( secIndex+1)%2 ==1)}]" style="list-style-type: none;">

                                                <li class="margin-top-10 margin-left-10">
                                                    <img ng-src="@{{ sectionsIcon[levIndex][secIndex] }}" alt=""
                                                         style="height: 22px; margin-top: -12px; filter: grayscale(80%); opacity: 0.8">
                                                    <span class="pad-left-5 text-incr-125 font-weight-300" style="text-indent: 100%" >
                                                        @{{ section }}
                                                    </span>
                                                </li>

                                                {{--@{{levIndex}} , , @{{secIndex}}--}}
                                                <ul ng-repeat="study in studiesName[levIndex][secIndex]" style="list-style-type: none;">
                                                    <li class="pad-top-7 margin-left-10">
                                                        <span class="  font-weight-300" style="" ng-if="studiesUrl[levIndex][secIndex][$index]">
                                                            <a href="@{{ studiesUrl[levIndex][secIndex][$index] }}">@{{ study }}</a>
                                                        </span>
                                                        <span class="  font-weight-300" style="" ng-if="!studiesUrl[levIndex][secIndex][$index]">
                                                            @{{ study }}
                                                        </span>
                                                    </li>
                                                </ul>
                                            </ul>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Σπουδές Φροντιστηρια  -->
                                <div ng-if=" (contactInfo.type_id==3 || contactInfo.type_id==6)" style="overflow-x: hidden">
                                    <div class="col-md-6 col-sm-12" style="margin-bottom: 40px;">
                                        <div class="pad-left-5 text-incr-150 font-weight-300  margin-left-10" >Τμήματα
                                        </div>
                                        <div ng-repeat="(levIndex, level) in levelsName " >
                                            <ul><div class="pad-left-20 font-weight-300 " style="">  @{{ level}} </div>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- Show More Studies  -->
                            <div class="show-more" style="background-color: #fff" ng-if="studies.length>5 && col_iek_eng_dan_mus">
                                <div class="pad-top-20">
                                 <span ng-click="showMoreStudies('spoudes')" >@{{textStudies}}
                                     <i class="@{{ iconStudies }}"></i></span>
                                </div>
                            </div>
                        </div>
                     @endif

                    @if($school->settings->scholarships && count($school->scholarship) > 0)
                            <!-- Υποτροφίες -->
                            <div class="slideup slideScholarships" id="ypotrofies" ng-if="contactInfo.activeScholarships" style="overflow-x: hidden;" ng-style="(studies.length<6 || !col_iek_eng_dan_mus) && {'margin-top':'30px'}">
                                <div class="section-header3">
                                    <p  class=" title margin-left-20 pad-top-40 text-incr-175 font-weight-300">
                                        <i class="fa fa-trophy fa-linear4 margin-right-10" aria-hidden="true"></i> <span>@lang('profile.cards.scholarships') </span>
                                    </p>
                                </div>


                                <div class=" scholar-box col-sm-12" >
                                    <div ng-repeat="scholarship in contactInfo.scholarship | limitTo:4" class="col-lg-6 col-md-6 col-sm-6 col-xs-12"
                                         style="height: 400px!important; position: relative; margin: 20px 0 ; padding-left: 40px;">

                                            <div class="scholar-frame " ng-class="{'sm-margin-left':($index%2==1)}" >
                                                    <div class="ribbon-wrapper">
                                                        <div class="ribbon-front sc-medium-grey">
                                                            {{--<i class="fa fa-diamond sc-t-white pad-left-20 text-incr-150 margin-top-10" aria-hidden="true"></i>--}}
                                                            <span class="">
                                                                <img  class="criteria-img" ng-src="/panel/assets/images/steps/step3-skills1.png" alt="" ng-if="scholarship.criteria.id==1">
                                                                <img  class="criteria-img" ng-src="/panel/assets/images/steps/step3-best.png" alt="" ng-if="scholarship.criteria.id==2">
                                                                <img  class="criteria-img" ng-src="/panel/assets/images/steps/step3-help.png" alt="" ng-if="scholarship.criteria.id==3">
                                                                <img  class="criteria-img" ng-src="/panel/assets/images/steps/step3-friends.png" alt="" ng-if="scholarship.criteria.id==4">
                                                                <img  class="criteria-img" ng-src="/panel/assets/images/steps/step3-open.png" alt="" ng-if="scholarship.criteria.id==5">
                                                            </span>

                                                            <span class="sc-t-dark-green font-weight-400 text-incr-120 margin-left-10 scholar-title">@{{scholarship.criteria.name}}</span>
                                                        </div>
                                                        <div class="ribbon-edge-topright"></div>
                                                        <div class="ribbon-edge-bottomright"></div>
                                                        <div class="ribbon-back-right sc-medium-grey"></div>
                                                    </div>
                                                    <div class="hexagon hex1">

                                                        {{--<i class="fa fa-money text-incr-200 sc-t-green text" aria-hidden="true"--}}
                                                        {{--style=" position: relative; top: 4px; left: 13px; z-index: 2;"></i>--}}
                                                    </div>
                                                    <div class="hexagon hex2">

                                                        {{--<i class="fa fa-line-chart text-incr-200 sc-t-green text" aria-hidden="true"--}}
                                                        {{--style=" position: relative; top: 4px; left: 13px; z-index: 2;"></i>--}}
                                                    </div>

                                                    {{--<div class="hexagon" style="top: 93px;">--}}
                                                    {{--<i class="fa fa-pencil text-incr-200 sc-t-green text" aria-hidden="true"--}}
                                                    {{--style=" position: relative; top: 3px; left: 17px; z-index: 2;"></i>--}}

                                                    {{--</div>--}}

                                                    <div class="scholar-content sc-t-grey font-weight-400">
                                                        <p class="scholar-left xxs-up">@{{scholarship.financial.plan}} @{{scholarship.financial_amount}}
                                                            <span ng-if="scholarship.financial.id==1"> %</span>
                                                            <span ng-if="scholarship.financial.id==2"> €  </span>
                                                            <span ng-if="scholarship.financial.id==3"> @lang('profile.months')</span>
                                                        </p>

                                                        <div class="scholar-left xxs-text" style="padding-top: 40px;"ng-if="contactInfo.type_id==1 || contactInfo.type_id==3" >@{{scholarship.level.name}}</div>
                                                        <div class="margin-top-50 scholar-left xxs-text"  ng-if="contactInfo.type_id==2">@{{scholarship.section[0].name}}</div>
                                                        <div class="scholar-left xxs-up2" style="margin-right: 10px; color: #464646;"
                                                             ng-class="{'margin-top-50': (contactInfo.type_id!=1 && contactInfo.type_id!=2 && contactInfo.type_id!=3),'margin-top-0': (contactInfo.type_id==1 || contactInfo.type_id==2 || contactInfo.type_id==3) }" ng-if="scholarship.multiple == 0">
                                                            @{{scholarship.study.name}}
                                                        </div>
                                                        <div class="scholar-left xxs-up2" style="margin-right: 10px; color: #464646;"
                                                             ng-class="{'margin-top-50': (contactInfo.type_id!=1 && contactInfo.type_id!=2 && contactInfo.type_id!=3),'margin-top-0': (contactInfo.type_id==1 || contactInfo.type_id==2 || contactInfo.type_id==3) }" ng-if="scholarship.multiple == 1">
                                                           <div ng-repeat="st in scholarship.multipleStudies" ng-if="scholarship.multipleStudies.length < 3">
                                                               @{{ st.name }}
                                                           </div>

                                                           <div ng-if="scholarship.multipleStudies.length > 2">
                                                               Πολλαπλα αντικείμενα σπουδών: @{{ scholarship.multipleStudies.length }}
                                                           </div>
                                                        </div>

                                                        <div>
                                                            <img  ng-if="scholarship.financial_id==1" style="height: 34px; top: -6px; left: 5px;" class="hex1-img"
                                                                  ng-src="/panel/assets/images/steps/step1-reduce2.png">
                                                            <img  ng-if="scholarship.financial_id==2" style="height: 37px; top: -6px; left: 19px;" class="hex1-img"
                                                                  ng-src="/panel/assets/images/steps/step1-hand2.png">
                                                            <img  ng-if="scholarship.financial_id==3" style="height: 38px; top: -8px; left: 10px;" class="hex1-img"
                                                                  ng-src="/panel/assets/images/steps/step1-clock2.png">
                                                        </div>

                                                        <img ng-if="scholarship.multiple == 0" class="hex2-img" ng-src="/panel/assets/images/steps/@{{scholarship.section[0].name}}.png">

                                                        <img ng-if="scholarship.multiple == 1 && multipleSectionsSelected[scholarship.id]" class="hex2-img" ng-src="/panel/assets/images/steps/studies.png">

                                                        <img ng-if="scholarship.multiple == 1 && !multipleSectionsSelected[scholarship.id]" class="hex2-img" ng-src="@{{scholarship.section[0]}}">


                                                    </div>

                                                    <div class="xxs-text" ng-class="{'text-up':contactInfo.type_id!=1}" >
                                                        <div style="position: absolute; top: 282px; width: 145px" class="font-weight-400 sc-t-grey" ng-if="scholarship.interests>3">
                                                            <span class="" style=""><i class="fa fa-thumbs-o-up margin-right-5" aria-hidden="true"></i>
                                                                @lang('profile.scholarship.interested'): <span class="pull-right" ng-bind="scholarship.interests"></span>
                                                            </span>
                                                        </div>

                                                        <div style="position: absolute; top: 301px; width: 145px" class="font-weight-400 sc-t-grey" ng-if="scholarship.length>2">
                                                            <span class="" style=""> <i class="fa fa-pencil margin-right-5" aria-hidden="true"></i>
                                                                @lang('profile.scholarship.requested'): <span class="pull-right"> @{{ scholarship.length}}</span>
                                                            </span>
                                                        </div>

                                                    </div>

                                                    @if(auth()->check() && auth()->user()->role != 'school' && auth()->user()->role != 'teacher' )

                                                        <ul class="like-btn">
                                                            <a href=""><button id="b@{{scholarship.id}}" type="button" ng-click="interested(scholarship.id, $index)" class="sc-button-landing sc-button sc-dark-green sc-t-white" style="width:140px;">
                                                                    <i id="i@{{scholarship.id}}" class="fa fa-thumbs-o-up margin-right-10 margin-left-5" aria-hidden="true"></i>
                                                                    <span id="t@{{scholarship.id}}" ng-init="test(scholarship)">@lang('profile.scholarship.like')</span>
                                                                </button>
                                                            </a>
                                                        </ul>
                                                    @endif

                                                    <ul class="show-btn">
                                                        <a href="/scholarship/@{{scholarship.id}}"><button type="button" class="sc-button-landing sc-button sc-green sc-t-white provoli">
                                                                <i class="fa fa-file-text-o margin-right-10" aria-hidden="true"></i> @lang('profile.scholarship.show')</button></a>
                                                        {{--<span class="sc-t-grey font-weight-400" style="left: -210px; top: 10px; position: absolute">--}}
                                                        {{--<i class="fa fa-file-text-o" aria-hidden="true" style="margin-right: 10px;"></i>Αιτήθηκαν: @{{ scholarship.length}} </span>--}}
                                                        {{--<div style="height: 1px; width: 390px; background-color: lightgrey;--}}
                                                        {{--margin: 50px 0 0 0; right: -20px;  position: absolute"></div>--}}
                                                    </ul>
                                                    {{--<div ng-if="($index%2==0)" class="hidden-xs hidden-sm"--}}
                                                         {{--style="border-right: 1px solid #dbdbdb; height: 355px; position: absolute; top: 18px; right:  5px"></div>--}}


                                                    {{--<hr class="mob-hr">--}}
                                                </div>

                                    </div>

                                </div>


                            </div>
                            <!-- Show More Scholarships  -->
                            <div class="show-more" style="background-color: #fff">
                                {{--ng-if="contactInfo.lengthScholarships>2"--}}
                                <div class="pad-top-20">
                                    {{-- <span ng-click="showMoreScholarships('ypotrofies')">@{{textScholarships}}
                                         <i class="@{{ iconScholarships }}"></i></span> --}}

                                         <span><a class="more-scholarships-text" href="{{ url('/public/scholarships?q=' . $school->admin->name) }}" target="_blank">@{{textScholarships}}</a></span>
                                </div>
                            </div>
                    @endif

                            
                    @if($school->settings->teachers && count($school->teachers) > 0)
                        <!-- Διδακτικό Προσωπικό  -->
                        <div class="slideTeachers slideup margin-bot-25" id="faculty" style="overflow-x: hidden">
                            <div class="section-header3">
                                <p  class=" title margin-left-20 pad-top-40 text-incr-175 font-weight-300">
                                    <i class="fa fa-graduation-cap fa-linear4 text-incr-115 margin-right-10" aria-hidden="true"></i> <span>@lang('profile.cards.teachers') </span></span>
                                </p>
                            </div>

                            <div class="sc-t-grey text-justify">
                                <div class="margin-top-10" id="about-li" >
                                    <div ng-repeat="teacher in contactInfo.teachers">

                                        <div class="col-sm-12 col-md-6 hidden-xs">
                                            <div class="col-sm-12 user-card">
                                               <div class="user-header ">
                                                   <a href="/public/profile/teacher/@{{teacher.info.id}}">
                                                   <img class="user-img img-circle" ng-src="@{{teacher.info.avatar}}" alt="">
                                                    <span class="user-name">
                                                            <span style="color: #fff !important;" >@{{teacher.name}}</span>
                                                    </span>
                                                   </a>
                                                   <span class="user-info"> @{{ teacher.info.title }}</span>

                                               </div>
                                            </div>
                                        </div>

                                        <div class="xs-user-card visible-xs hidden-sm hidden-md">
                                            <div class="xs-user-header  center-block centered-text">
                                                <a href="/public/profile/teacher/@{{teacher.info.id}}">
                                                <img class="xs-user-img img-circle" ng-src="@{{teacher.info.avatar}}" alt="">
                                                <div class="xs-user-name">
                                                        <span class="xs-name" style="color: #888 !important;" >@{{teacher.name}}</span>
                                                </div>
                                                </a>
                                                <span class="xs-user-info"> @{{ teacher.info.title }}</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Show More Reviews  -->
                        <div class="show-more" style="background-color: #fff"  >
                            <div class="pad-top-20">
                                 <span ng-click="showMoreTeachers('faculty')">@{{textTeachers}}
                                     <i class="@{{ iconTeachers }}"></i></span>
                            </div>
                        </div>
                    @endif


                    @if($school->settings->reviews && count($school->reviews) > 0)
                            <!-- Αξιολογησεις -->
                    <div class="slideReviews slideup margin-bot-25 " id="reviews" style="overflow-x: hidden">
                        <div class="section-header2">
                            <p  class=" title margin-left-20 pad-top-40 text-incr-175 font-weight-300">
                                <i class="fa fa-star fa-linear4 margin-right-10" aria-hidden="true"></i> <span>@lang('profile.cards.reviews') </span>
                            </p>
                        </div>

                        <!--  Total Score -->
                        <div id="total-reviews" class="row col-sm-12">

                            <div class="font-weight-400 sc-t-green col-xs-12 col-lg-4 col-lg-push-8 text-center total-score">
                                <span class="lead">@{{contactInfo.stars}}</span>
                                <br />
                                <span class="sc-t-grey">@lang('profile.total')</span>

                                <br />
                                <div class="raty" id="totalRating"></div>
                                <span class="sc-t-grey">(@{{contactInfo.reviews.length}} @lang('profile.reviews'))</span>
                            </div>

                            <div class="row font-weight-400 sc-t-grey col-xs-12 col-lg-8 col-lg-pull-4 xs-stars">


                                <div ng-repeat="review in contactInfo.avgReviews" >
                                    <div class="col-xs-12 col-sm-6 pad-0" >
                                        <i class="@{{review.icon}} margin-right-10" aria-hidden="true"></i>
                                        <span>@{{ categ(review.icon) }}</span>
                                    </div>
                                    <div class="col-xs-12 col-sm-6" style="margin-left: -12px; margin-bottom: 9px;">
                                        <span id="catReview-@{{$index}}" ng-init="categoryReview($index, review.stars)" value="@{{review.stars}}" class="margin-left-20 raty" id="studyProgram"></span>
                                        <span> @{{review.stars}}</span>
                                    </div>
                                </div>


                            </div>

                        </div>

                        <!--  Personal Reviews-->
                        <div id="reviews-container" ng-repeat="review in contactInfo.reviews">
                            <hr class="sc-t-grey" />
                            {{-- @{{ contactInfo.reviews }} --}}
                            <div class="col-lg-12">
                                <div class="margin-left-10  person-review">
                                    <span>@{{review.user.name}}</span> - @{{ role(review.user.role) }}
                                    <br />
                                    <span value="@{{review.stars.total}}" class="raty margin-right-10 sc-t-grey" style="margin-left: -3px"></span>
                                    <span class="sc-t-grey"> <div class="raty" id="totalRating-@{{review.id}}" ng-init="rate(review.id, review.average)">@{{ review.average }}</div> </span>
                                    <br />
                                    <span class="sc-t-grey">@{{review.created_at}}</span>
                                    <br />
                                </div>
                                <span class="col-lg-12 font-weight-400 sc-t-grey review-text fulltext">@{{review.text}}</span>
                            </div>

                        </div>
                    </div>
                    <!-- Show More Reviews  -->
                    <div class="show-more" style="background-color: #fff"  >
                        <div class="pad-top-20">
                                 <span ng-click="showMoreReviews('reviews')">@{{textReviews}}
                                     <i class="@{{ iconReviews }}"></i></span>
                        </div>
                    </div>
                    @endif



                    @if($school->settings->map)
                        <!-- SM - XS  contact & stats section -->
                        <div class="hidden-lg hidden-md visible-sm visible-xs clearfix">
                            <div class="margin-top-10 stats-box-xs">
                             <div class="" id="googleMapXS" style="height: 310px; width: 100%; "></div>
                            </div>
                        </div>
                    @endif





                </div> <!-- //col-lg-9-->



                <!-- ============================================================================= --!>


                <!-- Right Sidebar  -->
                <div class="col-lg-3 col-md-3 hidden-sm hidden-xs margin-top-30 right-side-bar">
                @if($school->settings->info)
                    <div >
                        <div class="box left-box1" style="height: 240px;">

                            <div class="col-lg-12" style="">
                                <div class="pad-top-20"></div>
                                <span><i class="fa fa-map-marker pull-left pad-top-3 xs-text-incr-85 " aria-hidden="true"></i></span>
                                <span class="pull-left pad-left-8 xs-text-incr-85 text-incr-95">@{{contactInfo.address}}</span>
                                <br>
                                <div class="pad-top-20"></div>
                                <div class="hidden-xs">
                                    <span><i class="fa fa-street-view pull-left pad-top-3 " aria-hidden="true"></i></span>
                                    <span class="pull-left pad-left-5">@{{contactInfo.city}}</span>
                                    <br>
                                </div>
                                <div class="pad-top-20"></div>
                                <span><i class="fa fa-phone pull-left pad-top-2 xs-text-incr-85" aria-hidden="true"></i></span>
                                <span class="pull-left pad-left-5">@{{contactInfo.phone}}</span>

                                <div class="hidden-xs ">
                                    <br>
                                    <div class="pad-top-20"></div>
                                    <span><i class="fa fa-envelope  pull-left pad-top-2 " aria-hidden="true"></i></span>
                                    <span class="pull-left pad-left-5 "> <a href="mailto:@{{contactInfo.email}}">@{{contactInfo.email}}</a></span>
                                </div>

                                <span ng-if="contactInfo.website">
                                     <br>
                                    <div class="pad-top-20"></div>
                                    <span><i class="fa fa-globe pull-left pad-top-3 xs-text-incr-85" aria-hidden="true"></i></span>
                                    <span class="pull-left pad-left-5"> <a href="https://@{{contactInfo.website}}/" target="_blank">@{{contactInfo.website}}</a></span>
                                </span>


                            </div>
                        </div>
                    </div>
                 @endif

                    <div class="">
                    
                        <div class=" box left-box2 sc-t-grey">
                            <div class="col-lg-12 margin-top-30" id="box-2nd" style="">
                                <span><i class="fa fa-trophy pull-left pad-top-3 " aria-hidden="true"></i></span>
                                <span class="pull-left pad-left-5">@lang('profile.statistics.scholarships')</span>
                                <span class="pull-right badge" style="margin-right: -4px"> @{{contactInfo.activeScholarships}}</span>
                                <br>
                                
                                <div ng-show="contactInfo.type_id==1 || contactInfo.type_id==2 ">
                                    <div class="pad-top-20"></div>
                                    <span><i class="fa fa-paint-brush pull-left pad-top-3 " aria-hidden="true"></i></span>
                                    <span class="pull-left pad-left-5">@lang('profile.statistics.studies')</span>
                                    <span class="pull-right">@{{contactInfo.lengthStudies}}</span>
                                    <br>
                                </div>

                                 @if($school->settings->statistics)
                                <div class="pad-top-20"></div>
                                <span>
                                    <i class="fa fa-user pull-left pad-top-2 " aria-hidden="true"></i>
                                </span>
                                <span class="pull-left pad-left-10" ng-show="contactInfo.type_id==1 || contactInfo.type_id==2 ">@lang('profile.statistics.students')</span>
                                <span class="pull-left pad-left-10" ng-show="contactInfo.type_id!=1 && contactInfo.type_id!=2">@lang('profile.statistics.students_s')</span>
                                <span class="pull-right">@{{contactInfo.lengthStudents}}</span>
                                <br>
                                <div class="pad-top-20"></div>
                                <span><i class="fa fa-graduation-cap pull-left pad-top-3 " aria-hidden="true"></i></span>
                                <span class="pull-left pad-left-2 pad-bot-10">@lang('profile.statistics.teachers')</span>
                                <span class="pull-right">@{{contactInfo.lengthTeachers}}</span>
                                 @endif

                            </div>

                            <div class="clearfix"></div>
                        </div>
                        

                        @if($school->settings->map)
                        <div class="box" style="margin-top: 30px; margin-bottom: 90px;">
                            <div class=""  id="googleMap" style="height: 270px; width: 100%; "></div>
                        </div>
                        @endif

                         @if($school->admin->subscription->plan_id == 2)
                            @if(auth()->check())
                                @if(auth()->user()->role != 'school')
                                        @if(auth()->user()->apply->contains($school))
                                        <nav data-spy="affix" data-offset-top="1160" id="connectionButton">
                                            <button id="submButton" type="button" class="affix-button  sc-t-white center-block" style="background-color: #7fafbb" disabled>
                                                <i class="fa fa-link pad-right-15" aria-hidden="true"></i>
                                                @lang('profile.pending')
                                            </button>
                                        </nav>

                                        @else

                                            @if(auth()->user()->connectedSchool->contains($school))
                                            <nav data-spy="affix" data-offset-top="1160" id="connectionButton">
                                                <button id="submButton" type="button" class="affix-button sc-t-white center-block" style="background-color: #bbb" disabled >
                                                <i class="fa fa-link pad-right-15" aria-hidden="true"></i>
                                                @lang('profile.connected')
                                                </button>
                                            </nav>
                                            @else
                                                <nav data-spy="affix" data-offset-top="1170" id="connectionButton">
                                                <button id="submButton" type="button" class="affix-button sc-orange sc-t-white center-block"
                                                        data-toggle="modal" data-target="#connect-modal" ng-disabled="!showButton">
                                                    <i class="fa fa-link pad-right-15" aria-hidden="true"></i>@lang('profile.request')
                                                </button>
                                            </nav>
                                            @endif

                                        @endif
                                    @endif

                                @else
                                    <nav data-spy="affix" data-offset-top="1240" id="connectionButton">
                                        <a href="{{ url('/login') }}">
                                            <button id="submButton" type="button" class="affix-button sc-orange sc-t-white center-block">
                                                <i class="fa fa-link pad-right-15" aria-hidden="true"></i>@lang('profile.request')
                                            </button>
                                        </a>

                                    </nav>
                            @endif
                        @endif

                        <nav data-spy="affix" data-offset-top="1180" id="interestButton" style="top: 120px!important">
                            <button id="interestButton" type="button" class="affix-button sc-orange sc-t-white center-block"
                                    data-toggle="modal" data-target="#interest-modal">
                                <i class="fa fa-pencil pad-right-15" aria-hidden="true"></i>Ενδιαφέρομαι
                            </button>
                        </nav>

                    </div>


                </div><!-- //col-lg-3-->

            </div>


        </div> <!-- //container-->



        <!-- ====== Modal Connect =======-->
        <div id="connect-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="top: 100px;" >
            <div class="modal-dialog" >
                <div class="modal-content" >

                    <div class="panel " style="background-color: #324c5a; height: 90px; border-bottom-right-radius: 0; border-bottom-left-radius: 0;" >
                        <div class="panel-heading" style="height: 55px; color: #fff">
                            <button type="button" class="btn pull-right modal-close" data-dismiss="modal" >
                                x

                            </button>
                            <img src="/new/img/logoNX-light-m.png" alt="scholio logo" class="pull-left sc-logo" style="margin-top: 14px;">
                            <h3 class="pull-left panel-title" style="margin: 20px 0 0 15px;">@lang('profile.request')</h3>
                        </div>

                    </div>
                    <div class="panel-body">
                        <img class="pull-left margin-right-10" style="height: 45px;"
                              ng-src="/images/schools/@{{contactInfo.logo.full_path}}">


                        @if(auth()->check() && auth()->user()->role == 'student')
                            <span> @{{ contactInfo.name }}:  @lang('profile.modal.message') </span>


                            <div class="input-container">

                                <div class="select-container">
                                    <div class="input-text" >
                                        <img class="modal-icon" src="/new/img/teacher/graduate.png" alt=""> @lang('profile.modal.studiesSelect')
                                    </div>
                                    <select ng-model="selectedStudy" class="modal-select">
                                        <optgroup label="@{{level.level.name}}" ng-repeat="level in schoolStudies">
                                            <option ng-repeat="study in level.studies" value="@{{study.study.id}}">@{{ study.study.name }}</option>
                                        </optgroup>
                                    </select>
                                </div>

                                <div class="select-container">
                                    <div class="input-text" >
                                        <img class="modal-icon" src="/new/img/teacher/team.png" alt="" >@lang('profile.modal.statusSelect')
                                    </div>
                                    <select ng-model="selectedStatus" class="modal-select cursor-hand">
                                        <option value="connected">@lang('panel/schools/resource.students.active')</option>
                                        <option value="allumni">@lang('panel/schools/resource.students.alumni')</option>
                                    </select>
                                </div>
                            </div>

                        @elseif(auth()->check() && auth()->user()->role == 'teacher')
                            <span>@{{ contactInfo.name }}:  Με τη σύνδεση σας, το δημόσιο προφίλ σας θα φαίνεται στο εκπαιδευτικό ίδρυμα</span>

                            <div class="input-container">
                                <div class="select-container">
                                    <div class="input-text">
                                        <img class="modal-icon" src="/new/img/teacher/graduate.png" alt="" >Περιγραφή Βασικής Ειδικότητας/Σπουδών
                                    </div>
                                    <input type="text" ng-model="selectedStudy" class="modal-select"/>
                                    {{-- <select ng-model="selectedStudy">
                                        <optgroup label="@{{level.level.name}}" ng-repeat="level in sections">
                                            <option ng-repeat="section in level.sections" value="@{{section.section.id}}">@{{ section.section.name }}</option>
                                        </optgroup>
                                    </select> --}}
                                </div>

                                <div class="select-container">
                                    <div class="input-text">
                                        <img class="modal-icon" src="/new/img/teacher/team.png" alt="" style="height: 45px">Επιλογή Κατάστασης
                                    </div>
                                    <select ng-model="selectedStatus" class="modal-select cursor-hand">
                                        <option value="connected">@lang('panel/schools/resource.teachers.active')</option>
                                        <option value="allumni">@lang('panel/schools/resource.teachers.alumni')</option>
                                    </select>
                                </div>
                            </div>

                        @endif


                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">@lang('profile.modal.abort')</button>
                        <button type="button" ng-click="sendRequest()" data-dismiss="modal" class="btn btn-info" ng-class="[{'disabledButton': !(selectedStudy && selectedStatus)}]" ng-disabled="!(selectedStudy && selectedStatus)">@lang('profile.modal.send')</button>
                    </div>
                </div>
            </div>
        </div><!-- /.modal -->

        <!-- ====== interest Modal =======-->
        <div id="interest-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="top: 100px;" >
            <div class="modal-dialog" >
                <div class="modal-content" >

                    <div class="panel " style="background-color: #324c5a; height: 90px; border-bottom-right-radius: 0; border-bottom-left-radius: 0;" >
                        <div class="panel-heading" style="height: 55px; color: #fff">
                            <button type="button" class="btn pull-right modal-close" data-dismiss="modal" >
                                x

                            </button>
                            <img src="/new/img/logoNX-light-m.png" alt="scholio logo" class="pull-left sc-logo" style="margin-top: 14px;">
                            <h3 class="pull-left panel-title" style="margin: 20px 0 0 15px;">Αίτημα Ενδιαφέροντος</h3>
                        </div>

                    </div>
                    <div class="panel-body">
                        <img class="pull-left margin-right-10" style="height: 45px;"
                              ng-src="/images/schools/@{{contactInfo.logo.full_path}}">

                              <div class="select-container">
                                    <div class="input-text-interest">
                                    Ονοματεπώνυμο
                                    </div>
                                    <input type="text" ng-model="interestName" class="modal-select"/>
                                </div>
                                <div class="select-container">
                                    <div class="input-text-interest">
                                        Τηλεφωνο
                                    </div>
                                    <input type="text" ng-model="interestTel" class="modal-select"/>
                                </div>
                                <div class="select-container">
                                    <div class="input-text-interest">
                                        Email
                                    </div>
                                    <input type="text" ng-model="interestEmail" class="modal-select"/>
                                </div>


                              <div class="select-container">
                                    <div class="input-text" >
                                        <img class="modal-icon" src="/new/img/teacher/graduate.png" alt=""> @lang('profile.modal.studiesSelect')
                                    </div>
                                    <select ng-model="interestStudy" class="modal-select">
                                        <optgroup label="@{{level.level.name}}" ng-repeat="level in schoolStudies">
                                            <option ng-repeat="study in level.studies" value="@{{study.study.id}}">@{{ study.study.name }}</option>
                                        </optgroup>
                                    </select>
                                </div>

                                <div class="">
                                    <input type="radio" ng-model="interestStudent" value="student"> Μαθητής<br>
                                    <input type="radio" ng-model="interestStudent" value="guardian"> Γονέας<br>
                                </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">@lang('profile.modal.abort')</button>
                        <button type="button" ng-click="sendInterest()" data-dismiss="modal" class="btn btn-info" ng-class="[{'disabledButton': !(selectedStudy && selectedStatus)}]" ng-disabled="!(interestName && interestTel && interestEmail && interestStudy)">@lang('profile.modal.send')</button>
                    </div>
                </div>
            </div>
        </div><!-- /.modal -->

        <!-- ====== MODAL IMAGES =======-->
        <div id="img-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none; top: 100px;">
            <div class="modal-dialog">
                <div class="modal-content">

                    <img src="/" id="bigImage" width="120%" height="auto"/>
        
                
                        </div>
                    </div>
                </div>


        <!-- ====== Modal Υποτροφίας =======-->
        <div id="scholarship-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none; top: 100px;">
                <div class="modal-content" >

                    <div class="panel " style="background-color: #324c5a;">
                        <div class="panel-heading" style="height: 55px; color: #fff">
                            <button type="button" class="btn pull-right" data-dismiss="modal" style="background-color: transparent" >
                                x

                            </button>
                            <img src="/new/img/logoNX-light-m.png" alt="scholio logo" class="pull-left">
                            <h3 class="pull-left panel-title" style="margin: 8px 0 0 15px;">Υποτροφία @{{'>>  send id here <<<'}}</h3>
                        </div>

                    </div>
                    <div class="panel-body">
                        <img  class="pull-left margin-right-10" style="height: 45px;"
                              ng-src="@{{contactInfo.logo.full_path}}">
                        <span>@{{contactInfo.type }} @{{ contactInfo.name }}:   </span>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">@lang('profile.modal.abort')</button>
                        <button type="button" class="btn btn-info">@lang('profile.modal.request')</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal -->


    </main>
</div>

<!-- Footer -->
@include('public.footer')

</body>

<script>
    function test(e){
        var IMG = e.id

        $('#bigImage').attr("src", IMG);

        $('#img-modal').modal('toggle');
    }

    var lengthStudents = 0;

// $.nonbounce();

// $(document).on("scroll",function(){
//     var documentHeight = $(window).height();
//     $('#xs-submButton').css('bottom',documentHeight);
// });

    $(function() {
        var bt = $('#connectionButton');
        var offset = bt.offset() || 0;
        bt.attr("data-offset-top", offset.top + 120);

        //caches a jQuery object containing the header element
        var sb = $("#submButton1");
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll >= 595) {
                sb.removeClass('hidden').addClass("vissible");
            } else {
                sb.removeClass("vissible").addClass('hidden');
            }
        });
    });

    var lengthStudents = 0;
    angular.module("profileApp",[])
            .controller("profileCtrl",function ($timeout,$scope,$http, $sce) {

                $scope.notifications = []
                $scope.studies = []
                $scope.sections = []
                $scope.selectedUser = null
                $scope.selectedStudy = null
                $scope.selectedStatus = null
                $scope.buttonsDisabled = true
                $scope.studyConnection = 0
                $scope.showButton = false
                $scope.schoolStudies = null

//////////////////////

                $scope.role = function(r){
                    return lang.seeder.role[''+r]
                }

                $scope.categ = function(icon){
                    return lang.seeder.category['' + icon]
                }

                $scope.getSchoolStudies = function(){
                    $http.get('/api/notifications/getSchoolLevelStudies/public/{{$id}}', {
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'X-CSRF-TOKEN': window.Scholio.csrfToken}})
                        .success(function(data) {
                            $scope.schoolStudies = data
                            $scope.showButton = true
                            console.log('gh')
                            console.log($scope.studies.length)

                        })
                    }

                    $scope.getSchoolSections = function(){
                    $http.get('/api/notifications/getSchoolLevelSections/public/{{$id}}', {
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'X-CSRF-TOKEN': window.Scholio.csrfToken}})
                        .success(function(data) {
                            $scope.sections = data
                            $scope.showButton = true
                        })

                    }
/////////////////////
                $scope.categoryReview = function(index, stars){
                    setTimeout(function() {
                        $('#catReview-' + index).raty({
                                score: stars,
                                halfShow : true,
                                half     : true,
                                readOnly: true,
                                starHalf : 'fa fa-fw fa-star-half'
                        });
                    }, 500);

                }

                $scope.uniqueArray = function(arr){
                    console.log(arr)
                    return !!arr.reduce(function(a, b){ return (a === b) ? a : NaN; });
                }

                $scope.rate = function(id, stars){
                    setTimeout(function() {
                        $('#totalRating-' +id).raty({
                            score    : stars,
                            halfShow : true,
                            half     : true,
                            readOnly: true,
                            starHalf : 'fa fa-fw fa-star-half'
                        });
                    }, 20);
                }

                $scope.test = function(scholarship){
                    setTimeout(function() {
                        console.log(scholarship.userInterested)
                        if(scholarship.userInterested){
                        $('#i'+ scholarship.id).toggleClass('fa-thumbs-up fa-thumbs-o-up');
                        $('#t'+ scholarship.id).text('@lang('profile.scholarship.button.like')')
                        $('#b'+ scholarship.id).css("background-color", "#ccc");
                        }
                     }, 30);
                }

                $scope.ratings = function(){
                        $('rating').raty({
                            score    : window.totalStars,
                            halfShow : true,
                            half     : true,
                            readOnly: true,
                            starHalf : 'fa fa-fw fa-star-half'
                        });

                        $('#totalRating').raty({
                            score    : window.totalStars,
                            halfShow : true,
                            half     : true,
                            readOnly: true,
                            starHalf : 'fa fa-fw fa-star-half'
                        });
                }

                $scope.init = function () {
                    $scope.interestStudent = 'student';
                    $scope.trustAsHtml = $sce.trustAsHtml;
                    $scope.message = null;
                    $scope.scholarship = ['sd'];
                    $scope.col_iek_eng_dan_mus = false;

                    @if(auth()->check() && auth()->user()->role == 'student')
                        $scope.getSchoolStudies();
                    @elseif(auth()->check() && auth()->user()->role == 'teacher')
                        $scope.showButton = true
                        // $scope.getSchoolSections();
                    @endif

                    var apiLink = '';
                    @if(auth()->check())
                        apiLink = '/api/profile/auth/{{ $id }}';
                    @else
                        apiLink = '/api/profile/{{ $id }}';
                    @endif
                    $http.get(apiLink, {
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'X-CSRF-TOKEN': window.Scholio.csrfToken
                                    }
                                })
                                .success(function(data)   {
                                   console.time('contactInfo API');
                        $scope.contactInfo=data;
                        console.log(data)
                        window.totalStars = data.stars
                        $scope.ratings();
                        $scope.studies = data.levels;
                        if(data.scholarship[0]) $scope.message = $sce.trustAsHtml(data.scholarship[0].terms);
                        else $scope.message = ''

                        if( $scope.studies.length) $scope.initial();

                        var type=data.type_id
                        if (type==1 || type==2 || type==4 || type==10 || type==11) $scope.col_iek_eng_dan_mus  = true

                        $scope.multipleSectionsSelected = {};
                        $scope.mStudies = { };
                       var multipleStudies = []

                        // data.scholarship.forEach(function(item){
                        //         item.multipleStudies.forEach(function(st){
                        //             multipleStudies.push(st.section[0].id)
                        //             $scope.mStudies[item.id] = multipleStudies
                        //             $scope.multipleSectionsSelected[item.id] = !$scope.uniqueArray(multipleStudies)
                        //         })
                        //         multipleStudies = []
                        // })


                            });


                    $scope.interestedCheck = function(id){
                        $scope.interested1 = $http.post('/api/interested/save',{'scholarship' : id}, {
                                    headers: {
                                        'X-Requested-With': 'XMLHttpRequest',
                                        'X-CSRF-TOKEN': window.Scholio.csrfToken
                                    }
                                })
                                .success(function(data)   {
                                    console.log(data);
                                    if(data == 'YES'){
                                        $('#t'+ id).text("@lang('profile.scholarship.button.interested')")
                                        $('#i'+ id).toggleClass('fa-thumbs-up fa-thumbs-o-up');
                                    }else{
                                        $('#t'+ id).text("@lang('profile.scholarship.button.like')")
                                        $('#i'+ id).toggleClass('fa-thumbs-o-up fa-thumbs-up');
                                        $('#b'+ id).style.backgroundColor='#ccc'
                                    }

                                });
                    }
                    $scope.levelsName=[];
                    $scope.sectionsName=[];
                    $scope.sectionsIcon=[];
                    $scope.studiesName=[];
                    $scope.studiesUrl=[];

                    $scope.initial=function (){
                        console.time('initial');
                        $scope.getSchoolStudies();
                        /* ========== BUILD levelsName ARRAY============ */
                        $scope.levelsName[0]=$scope.studies[0][0].section[0].level.name
//                        console.log($scope.levelsName[0])
                        var length=0
                        var found= false
                        for (var std in $scope.studies ){
                            found= false
                            for (var lev in $scope.levelsName ){
                                if ( $scope.levelsName[lev]==$scope.studies[std][0].section[0].level.name){
                                    found=true
                                }
                            }
                            if (!found) {
                                length++
                                $scope.levelsName[length]=$scope.studies[std][0].section[0].level.name
//                                console.log($scope.levelsName[length])
                            }
                        }
//                        console.log($scope.levelsName.length)
                        /* ========== BUILD sectionsName ARRAY============ */
                        for (lev in $scope.levelsName ){
                            $scope.sectionsName[lev]=[];
                            $scope.sectionsIcon[lev]=[];
                        }
                        length=0

                        for (lev in $scope.levelsName ){
                            for (std in $scope.studies ){
                                if ( $scope.levelsName[lev]==$scope.studies[std][0].section[0].level.name){
                                    if(!length){
                                        $scope.sectionsName[lev][0]=$scope.studies[std][0].section[0].name
                                         $scope.sectionsIcon[lev][0]=$scope.studies[std][0].section[0].icon
                                        length=1
                                    }
                                    found= false
                                    for (var sec in $scope.sectionsName[lev] ){
                                        if($scope.sectionsName[lev][sec]==$scope.studies[std][0].section[0].name){
                                            found=true
                                        }
                                    }
                                    if (!found) {
                                        $scope.sectionsName[lev][length]=$scope.studies[std][0].section[0].name
                                        $scope.sectionsIcon[lev][length]=$scope.studies[std][0].section[0].icon
                                        length++
                                    }
                                }
                            }
                            length=0
                        }
                        /* ========== BUILD studiesName ARRAY============ */
                        var study=0
                        for (lev in $scope.levelsName ){
                            $scope.studiesName[lev]=[];
                            $scope.studiesUrl[lev]=[];
                            for (sec in $scope.sectionsName[lev] ){
                                $scope.studiesName[lev][sec]=[];
                                $scope.studiesUrl[lev][sec]=[];

                                study=0
                                for (std in $scope.studies){
                                    if( $scope.levelsName[lev]==$scope.studies[std][0].section[0].level.name
                                            && $scope.sectionsName[lev][sec]==$scope.studies[std][0].section[0].name
                                    ){
                                        // console.log($scope.studies[std]);
                                        $scope.studiesName[lev][sec][study]=$scope.studies[std][0].name
                                        $scope.studiesUrl[lev][sec][study]=$scope.contactInfo.study[std].pivot.url
                                        // console.log($scope.contactInfo.study[std].pivot.url)

                                    // $scope.studiesIcon[lev][sec][study]=$scope.studies[std][0].icon
                                        study++
                                    }
                                }
                            }
                        }
                        console.timeEnd('initial');
                        @if($school->settings->map)
                            $scope.mapInitial()
                        @endif
                    }
                };
                $scope.interested = function(id, index){
                    $scope.interested1 = $http.post('/api/interested/save',{'scholarship' : id}, {
                                headers: {
                                    'X-Requested-With': 'XMLHttpRequest',
                                    'X-CSRF-TOKEN': window.Scholio.csrfToken
                                }
                            })
                            .success(function(data){
                                console.log(data);
                                if(data == 'YES'){
                                    $scope.contactInfo.scholarship[index].interests++;
                                    $('#i'+ id).toggleClass('fa-thumbs-up fa-thumbs-o-up');
                                    $('#t'+ id).text("@lang('profile.scholarship.button.like')")
                                    $('#b'+ id).css("background-color", "#ccc");
                                }else{
                                    $scope.contactInfo.scholarship[index].interests--;
                                    $('#i'+ id).toggleClass('fa-thumbs-o-up fa-thumbs-up');
                                    $('#t'+ id).text("@lang('profile.scholarship.button.interested')")
                                    $('#b'+ id).css("background-color", "#008da5");
                                }
                            });
                }


                $scope.mapInitial=function () {
                    var myLatlng = new google.maps.LatLng($scope.contactInfo.lat, $scope.contactInfo.lng);
                    var myOptions = {
                        zoom: 15,
                        center: myLatlng,
                        scrollwheel: false,
                        scaleControl:true,
                    }
                    var map = new google.maps.Map(document.getElementById("googleMap"), myOptions);
                    var mapXS = new google.maps.Map(document.getElementById("googleMapXS"), myOptions);
//                    console.log('map')

                    var marker = new google.maps.Marker({
                        position: myLatlng,
                        //animation: google.maps.Animation.DROP,
                        title:$scope.contactInfo.name,
                        icon:"/../new/img/markers/marker-teal-sm.png",
                        map: map,
                        mapTypeId: google.maps.MapTypeId.ROADMAP

                    });
                    var marker2 = new google.maps.Marker({
                        position: myLatlng,
                        //animation: google.maps.Animation.DROP,
                        title:$scope.contactInfo.name,
                        icon:"/../new/img/markers/marker-teal-sm.png",
                        map:mapXS,
                        mapTypeId: google.maps.MapTypeId.ROADMAP

                    });


                    var styledMapType = new google.maps.StyledMapType(
                            [
                                {
                                    "featureType": "poi.park",
                                    "elementType": "geometry.fill",
                                    "stylers": [
                                        {
                                            //"color": "#9ec4ae"
                                            //"color": "#A3BFA8"
                                            //"color": "#B5C5B8"
                                            //"color": "#D9F0D1"
                                            "color": "#E2F0DA"

                                            //"color": "#CBE6A3"
                                        }
                                    ]
                                },
                                {
                                    "featureType": "water",
                                    "elementType": "geometry.fill",
                                    "stylers": [
                                        {
                                            //"color": "#00bcd4"
                                            //"color": "#53D0D9"
                                            //"color": "#00C9E1"
                                            //"color": "#00D1E9"
                                            //"color": "#00E2FF"

                                            //"color": "#A4E2E7"
                                            "color": "#A4DBE7"

                                            //"color": "#A3CCFF"
                                        }
                                    ]
                                }
                            ]
                    )

                    map.mapTypes.set('styled_map', styledMapType);
                    map.setMapTypeId('styled_map');

                    mapXS.mapTypes.set('styled_map', styledMapType);
                    mapXS.setMapTypeId('styled_map');
                }



                $scope.sendRequest = function(){
                    if($scope.selectedStudy && $scope.selectedStatus){
                        $scope.sendRequestToSchool = $http.post('/api/request/school', { 'school': $scope.contactInfo.id, 'study': $scope.selectedStudy, 'status': $scope.selectedStatus }, {
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest',
                                'X-CSRF-TOKEN': window.Scholio.csrfToken
                            }
                        })
                        .success(function (data) {
                            window.location.reload();
                        });
                    }
                }

                $scope.sendInterest = function(){
                    console.log($scope.interestStudent);
                    $scope.sendInterestToSchool = $http.post('/api/interest/school', { 'school_id': $scope.contactInfo.id, 'study_id': $scope.interestStudy, 'name': $scope.interestName, 'email': $scope.interestEmail, 'tel': $scope.interestTel, 'student': $scope.interestStudent }, {
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest',
                                'X-CSRF-TOKEN': window.Scholio.csrfToken
                            }
                        })
                        .success(function (data) {
                            window.location.reload();
                        });
                }

                $scope.textAbout="@lang('profile.more')";
                $scope.iconAbout='fa fa-angle-down'
                $scope.showMoreAbout= function (hash){
                    if($scope.textAbout === "@lang('profile.more')"){
                        $scope.textAbout= "@lang('profile.less')";
                        $scope.iconAbout='fa fa-angle-up'
                        $("#sxetika").removeClass('slideAbout').toggleClass("slidedown slideup");
                    } else {
                        $scope.textAbout = "@lang('profile.more')";
                        $scope.iconAbout='fa fa-angle-down'
                        $("#sxetika").toggleClass("slidedown slideup").addClass('slideAbout');
//                        location.hash = '#';
//                        location.hash = "#" + hash;
                    };
                }
                $scope.textStudies="@lang('profile.more')";
                $scope.iconStudies='fa fa-angle-down'
                $scope.showMoreStudies= function (hash){
                    if($scope.textStudies === "@lang('profile.more')"){
                        $scope.textStudies= "@lang('profile.less')";
                        $scope.iconStudies='fa fa-angle-up'
                        $("#sliderStudies").removeClass('slideStudies').toggleClass("slidedown slideup");
                    } else {
                        $scope.textStudies = "@lang('profile.more')";
                        $scope.iconStudies='fa fa-angle-down'
                        $("#sliderStudies").toggleClass("slidedown slideup").addClass('slideStudies');
                        location.hash = '#';
                        location.hash = "#" + hash;
//
                    };
                }
                $scope.textScholarships="@lang('profile.more')";
                $scope.iconScholarships='fa fa-angle-down'
                $scope.showMoreScholarships= function (hash){
                    if($scope.textScholarships === "@lang('profile.more')"){
                        $scope.textScholarships= "@lang('profile.less')";
                        $scope.iconScholarships='fa fa-angle-up'
                        $("#ypotrofies").removeClass('slideScholarships').toggleClass("slidedown slideup");
                    } else {
                        $scope.textScholarships = "@lang('profile.more')";
                        $scope.iconScholarships='fa fa-angle-down'
                        $("#ypotrofies").toggleClass("slidedown slideup").addClass('slideScholarships');
                        location.hash = '#';
                        location.hash = "#" + hash;
                    };
                }
                $scope.textReviews="@lang('profile.more')";
                $scope.iconReviews='fa fa-angle-down'
                $scope.showMoreReviews= function (hash){
                    if($scope.textReviews === "@lang('profile.more')"){
                        $scope.textReviews= "@lang('profile.less')";
                        $scope.iconReviewst='fa fa-angle-up'
                        $("#reviews").removeClass('slideReviews').toggleClass("slidedown slideup");
                    } else {
                        $scope.textReviews = "@lang('profile.more')";
                        $scope.iconReviews='fa fa-angle-down'
                        $("#reviews").toggleClass("slidedown slideup").addClass('slideReviews');
                        location.hash = '#';
                        location.hash = "#" + hash;
                    };
                }
                $scope.textTeachers="@lang('profile.more')";
                $scope.iconTeachers='fa fa-angle-down'
                $scope.showMoreTeachers= function (){
                    if($scope.textTeachers === "@lang('profile.more')"){
                        $scope.textTeachers= "@lang('profile.less')";
                        $scope.iconTeachers='fa fa-angle-up'
                        $("#faculty").removeClass('slideTeachers').toggleClass("slidedown slideup");
                    } else {
                        $scope.textTeachers = "@lang('profile.more')";
                        $scope.iconTeachers='fa fa-angle-down'
                        $("#faculty").toggleClass("slidedown slideup").addClass('slideTeachers');
                        location.hash = '#';
                        location.hash = "#" + hash;
                    };
                }

                $scope.getAVG = function(category) {

                    var avg = 0;

                    for (var i = $scope.reviews.length - 1; i >= 0; i--) {
                        avg += $scope.reviews[i].stars[category];
                    }

                    if($scope.reviews.length>0)
                        return Math.round((avg/$scope.reviews.length)*10) / 10;
                    else
                        return "?";
                }
            })


            /* BxSlider Directives for ng-repeat*/
            .directive('bxSlider', [function () {
                return {
                    restrict: 'A',
                    link: function (scope, element, attrs) {
                        scope.$on('repeatFinished', function () {
                            element.bxSlider(scope.$eval('{' + attrs.bxSlider + '}'));
                        });
                    }
                }
            }])
            .directive('notifyWhenRepeatFinished', ['$timeout', function ($timeout) {
                return {
                    restrict: 'A',
                    link: function (scope, element, attr) {
                        if (scope.$last === true) {
                            $timeout(function () {
                                scope.$emit('repeatFinished');
                            });
                        }
                    }
                }
            }]);
    $(document).ready(function(){
        $("#main").hide().fadeIn(1800);

    });

    setTimeout(function() {
        // $(".raty").raty({
        //     score: window.totalStars,
        //     readOnly: true
        // })
    }, 500);


</script>


</html>
