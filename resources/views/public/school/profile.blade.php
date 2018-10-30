<!DOCTYPE html>
<html lang="en">

<head>
    <meta property="fb:app_id" content="1167687200016783" />
    <meta property="og:url" content="{{'https://schol.io/@' . $school->admin->username}}" />
    <meta property="og:title" content="Schol.io - {{ $school->name() }}" />
    <meta property="og:description" content="{{$school->city}} | {{$school->phone}}" />
    <meta property="og:image" content="{{url($school->profileImage())}}" />
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:image:width" content="600">
    <meta property="og:image:height" content="400">
    <meta charset="utf-8">
    <link rel="shortcut icon" href="{{asset('new/img/test-black.png')}}" type="image/x-icon" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    

    <meta name="keywords" content="{{ $school->name() }}, {{ $school->city }}, {{ $school->type->name }}">
    <title>{{ $school->name() }} - schol.io</title>
    <meta name="description" content="Schol.io - {{ $school->name() }}, {{ $school->city }}, {{ $school->type->name }}">


    

<link rel="shortcut icon" href="{{asset('new/img/test-black.png')}}" type="image/x-icon" />



<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">


<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">



<link href="{{asset('new/css/main.css')}}" rel="stylesheet">

    
    <link href="/new/css/jquery.bxslider.css" rel="stylesheet">

    
    <link href="/new/css/profile.css" rel="stylesheet">

    
    <link href="/new/css/ribbonHorizontal.css" rel="stylesheet">

    
    <link href="/new/css/Hexagon.css" rel="stylesheet">

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>


    <style>
            .schoolname{
                font-size: 160%;
            }
            .schooltype{
                display: inline;
                font-size: 100%;
                font-weight: 400;
            }
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
            .bx-wrapper img {height: 230px !important;}
            .slideup, .slidedown {
                background-color: #fff;
                overflow-y: hidden;
                -webkit-transition: max-height 0.3s ease-in-out;
                transition: max-height 0.3s ease-in-out;
                margin-bottom: 0;
                padding-bottom: 25px;
            }
            .slidedown {  max-height: 3000px ;   }
            .slideAbout {max-height: 400px;}
            .slideStudies {max-height: 400px;}
            .slideScholarships {}
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
                .ellipsis{width: 90%}
                .webHover:hover{color:#FD6A33!important;}
            @media (min-width: 992px) and (max-width: 1160px) {
                .affix-button{font-size: 90%;}
                .fa-pencil{padding-right: 4px!important;}
            }
            @media(max-width: 1109px) {
            .school-profile-nav-link{padding-right: 8px!important; padding-left: 8px!important; font-size: 95%;}
                .ellipsis{width: 89%}
            }
            @media(max-width: 540px) {
                .xxs-custom-contact{width: 52.5%}
                .xxs-custom-stats{width: 46.5%}
            }
            @media(max-width: 480px) {
                .xxs-custom-contact{width: 99%}
                .xxs-custom-stats{width: 60%; float: left!important; margin-top: 35px;}
                .xxs-custom-line{display: block; top: 195px;}
                .socials{margin-top: 5px!important;}
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
       }
            @media (max-width: 991px) {
                #xs-submButton{ height: 41px; z-index: 99; bottom: 10px; left: 13%;   width: 74%; right: auto; position: fixed; }
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
            }
    
    </style>
</head>


<body data-spy="scroll" data-target=".spy" data-offset="270" id="home">
    

    

    <header class="spy navbar navbar-fixed-top navbar-scroll sc-landing-header" id="header" style="z-index: 99990">

        <div class="container container-profile" style="">
            <div class="row scholarship-profile-nav-row">

                <div class="pull-left visible-lg visible-md nav-web ">
                    
                    <a class="sc-landing-brand" href="{{ url('/') }}">
                        <div class="sc-landing-logo-sticky" style=" padding-top: 15px">
                            
                            <picture>
                                <source class="sc-logo" alt="scholio logo" style="height: 63px; padding-top: 2px;" srcset="{{asset('new/img/logoNX.webp')}}" type="image/webp">
                                <source class="sc-logo" alt="scholio logo" style="height: 63px; padding-top: 2px;" srcset="{{asset('new/img/logoNX.png')}}" type="image/png">
                                <img src="{{asset('new/img/logoNX.png')}}" class="sc-logo" alt="scholio logo" style="height: 63px; padding-top: 2px;">
                            </picture>
                        </div>
                    </a>
                </div>

                <div class="col-xs-6  visible-sm visible-xs">
                    <div class="nav-mobile">
                        <a class="" href="{{ url('/') }}">
                            <div class="navbar-brand  sc-landing-logo-sticky">
                                <picture>
                                    <source srcset="{{asset('new/img/logoNX-m.webp')}}" type="image/webp" class="sc-logo" alt="scholio logo" style="height: 60px; padding-top: 2px;">
                                    <source srcset="{{asset('new/img/logoNX-m.png')}}" type="image/png" class="sc-logo" alt="scholio logo" style="height: 60px; padding-top: 2px;">
                                    <img src="{{asset('new/img/logoNX-m.png')}}" class="sc-logo" alt="scholio logo" style="height: 63px; padding-top: 2px;">
                                </picture>
                            </div>
                        </a>
                    </div>
                </div>
                

                
                <div class="pull-right visible-md visible-lg">
                    <ul class="nav navbar-nav navbar-right sc-landing-menu">


                        <li class="sc-landing-menu-item">
                            <a href="{{url('public/schools')}}" class="btn-change-search-profile">
                                <i class="fa fa-university margin-right-5"></i>
                                @lang('scholarships.search_institution_short')
                            </a>
                        </li>

                        @if($school->settings->about)<li class="sc-landing-menu-item "><a href="#sxetika" class="school-profile-nav-link ">@lang('profile.navigation.about')</a></li>@endif
                        @if($school->settings->studies && count($school->study) > 0)<li ng-show="studies.length && col_iek_eng_dan_mus"
                            class="sc-landing-menu-item"><a href="#spoudes" class="school-profile-nav-link ">@lang('profile.navigation.studies')</a></li>@endif
                        @if($school->settings->scholarships && count($school->scholarship) > 0)<li class="sc-landing-menu-item"><a
                                href="#ypotrofies" class="school-profile-nav-link">@lang('profile.navigation.scholarships')</a></li>@endif
                        @if($school->settings->teachers && count($school->teachers) > 0)<li class="sc-landing-menu-item"><a
                                href="#faculty" class="school-profile-nav-link">@lang('profile.navigation.teachers')</a></li>@endif
                        @if($school->settings->reviews && count($school->reviews) > 0)<li class="sc-landing-menu-item"><a
                                href="#reviews" class="school-profile-nav-link">@lang('profile.navigation.reviews')</a></li>@endif



                        <li class="langDropWhite " style="margin-top: 15px;">
                            <form method="GET" id="langForm">
                                <select onchange="changeLang(this)" class="" style="border: none; background-color: transparent; width: 80%; margin-top: -2px!important;"
                                     data-mobile="false" >
                                    <option style="color: black" data-icon="fa" value="en"
                                        {{ request()->cookie('lang')=='en' ? 'selected':'' }}>&nbsp; EN</option>
                                    <option style="color: black" data-icon="fa" value="el"
                                        {{ request()->cookie('lang')=='el' ? 'selected':'' }}>&nbsp; GR</option>
                                </select>
                            </form>
                        </li>




                        @if(auth()->check())
                        <li><a href="{{ url('/dashboard') }}"><button type="button" class="sc-button-landing sc-button sc-orange sc-t-white">@lang('main.navigation.admin')</button></a></li>
                        <li><a href="{{ url('/out') }}"><button type="button" class="sc-button-landing sc-button sc-dark-green sc-t-white ">@lang('main.navigation.logout')</button></a></li>
                        @else
                        <li><a href="{{ url('/register/role') }}"><button type="button" class="sc-button-landing sc-button sc-green sc-t-white">@lang('main.navigation.register')</button></a></li>
                        <li>
                            <a href="{{ url('/login') }}">
                                <button type="button" class="sc-button-landing sc-button sc-dark-green sc-t-white">@lang('main.navigation.login')</button>
                            </a>
                        </li>
                        @endif




                    </ul>
                </div>

                
                <div class="col-xs-6 visible-sm visible-xs " style="z-index: 6000; height: 20px;">
                    <div class="">
                        <div class="sc-landing-menu-mobile-sandwitch nav navbar-nav navbar-right pull-right">
                            <div class="sc-landing-menu-sandwitch-button-sticky sc-landing-menu-sandwitch">
                                <img src="{{asset('new/img/collapse-dark2.png')}}" alt="scholio logo" style="height:22px; margin-top: 7px;">
                            </div>
                        </div>
                    </div>

                </div>

                
                @include('public.sandwich-menu-schoolProfile')



            </div> 
        </div>
    </header>

    
    <div>
        <main id="main" class="main" style="overflow-x: hidden">

            <div class="container container-profile" style="overflow-x: hidden">

                <div class="row up">
                </div>
                
                <div class="up">
                    <div class=" margin-bot-15 ">
                        <div class="">
                            <div class="xs-center">
                                <img id="img1" alt="logo" class="pull-left margin-right-10 margin-top-15 margin-bot-10" src="{{ substr($school->logo, 0, -4)}}png">
                            </div>
                            <div class=" xs-centered-text">
                                <h2 class="xs-h4 schoolname">{{ $school->name()}}</h2>
                                @if($school->settings->reviews && count($school->reviews) >0)
                                <span class="pad-top-5 xs-pad-top xs-review">

                                    <span>
                                        <rating class="text-incr-85 sc-t-orange" id="Rating"></rating>
                                    </span>
                                    <span class="sc-t-orange"> {{ $school->averageStars() }} </span>
                                    <span class="xs-text-incr-85"> &nbsp; ( {{ $school->countReviews() }}
                                        @lang('profile.reviews'))</span>
                                </span>

                                @else

                                <style>.socials{  margin-top: -54px; }</style>

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

                

                <div class="margin-top-70 xs-slider" style="overflow-x: hidden">
                    <div class="row xl-margin-right " style="padding-left: 7px;">
                        <ul class="bxslider" id="bx" style="visibility: hidden;">
                            @if($school->image->count() >= 4)
                            
                            @foreach($school->image as $image)
                            <li>
                                <picture>
                                    <source srcset="{{$image->path}}" type="image/webp">
                                    <source srcset="{{$image->full_path}}" type="image/jpeg">
                                    <img class="bx-img" id="bx-img-{{$image->id}}" src="{{$image->full_path}}" onclick="test(event.target)" alt="{{ $school->name() }} Image"/>
                                </picture>
                            </li>
                            @endforeach
                            @endif
                        </ul>
                    </div>
                </div>


                <div class="row">

                    
                    <div class="col-lg-9 col-md-9 margin-top-30 margin-bot-25">
                        


                        





                        
                        <div class="sc-t-grey hidden-lg hidden-md visible-sm visible-xs clearfix">
                            <div class="col-xs-12 margin-top-10 stats-box-xs">


                                <div class="col-xs-7 col-sm-7 pad-left-0 xxs-custom-contact">

                                    <span><i class="fa fa-university pad-top-3 xs-text-incr-85 " aria-hidden="true"></i></span>
                                    <span class=" pad-left-8 xs-text-incr-85 text-incr-95 ellipsis">{{ $school->type->name }}</span>
                                    <div class="pad-top-10"></div>

                                    <span><i class="fa fa-map-marker pad-top-3 xs-text-incr-85 " aria-hidden="true"></i></span>
                                    <span class="pad-left-8 xs-text-incr-85 text-incr-95 ellipsis">{{ $school->address }}</span>

                                    <div class="pad-top-10"></div>
                                    <div class="">
                                        <span><i class="fa fa-street-view pad-top-3 " aria-hidden="true"></i></span>
                                        <span class="pad-left-5">{{ $school->city }}</span>
                                    </div>

                                    <div class="pad-top-10"></div>
                                    <span><i class="fa fa-phone pad-top-2 xs-text-incr-85" aria-hidden="true"></i></span>
                                    <span class="pad-left-5">{{ $school->phone }}</span>

                                    <div class="pad-top-10"></div>
                                    <span><i class="fa fa-envelope  pad-top-2 " aria-hidden="true"></i></span>
                                    <span class="pad-left-5 ellipsis"> <a href="mailto:{{ $school->email() }}" class="school-links">{{
                                            $school->email() }}</a></span>

                                    <span ng-if="contactInfo.website">
                                        <div class="pad-top-10"></div>
                                        <span><i class="fa fa-globe pad-top-3 xs-text-incr-85" aria-hidden="true"></i></span>
                                        <span class="pad-left-5 ellipsis"> <a href="/schoolink/redirect/{{$school->id}}/"
                                                target="_blank" class="school-links">{{ $school->website }}</a></span>
                                    </span>

                                </div>

                                <div class="xxs-custom-line"></div>
                                <div class="col-xs-5 col-sm-4 pad-left-0 pull-right xxs-custom-stats">

                                    <span class="">
                                        <i class="fa fa-trophy  pad-top-3 " aria-hidden="true"></i>
                                        <span class="pad-left-5">@lang('profile.statistics.scholarships')</span>
                                        <span class="badge pull-right" style="margin-right: -4px"> {{
                                            count($school->activeScholarships()) }}</span>
                                    </span>


                                    <div ng-show="contactInfo.type_id==1 || contactInfo.type_id==2 ">
                                        <div class="clearfix pad-top-10"></div>
                                        <span class="">
                                            <i class="fa fa-paint-brush pad-top-3 " aria-hidden="true"></i>
                                            <span class="pad-left-5">@lang('profile.statistics.studies')</span>
                                            <span class="pull-right">{{ $school->lengthStudies() }}</span>
                                        </span>
                                    </div>

                                    @if($school->settings->statistics)
                                    <div class="clearfix pad-top-10"></div>
                                    <span class="">
                                        <i class="fa fa-user pull-left pad-top-2 " aria-hidden="true"></i>
                                        <span class="pad-left-10" ng-show="contactInfo.type_id==1 || contactInfo.type_id==2 ">@lang('profile.statistics.students')</span>
                                        <span class="pad-left-10" ng-show="contactInfo.type_id!=1 && contactInfo.type_id!=2">@lang('profile.statistics.students_s')</span>
                                        <span class="pull-right">{{ $school->lengthStudents() }}</span>
                                    </span>

                                    <div class="clearfix pad-top-10"></div>
                                    <span class="">
                                        <i class="fa fa-graduation-cap pad-top-3 " aria-hidden="true"></i>
                                        <span class="pad-left-2 pad-bot-10">@lang('profile.statistics.teachers')</span>
                                        <span class="pull-right">{{ $school->lengthTeachers() }}</span>
                                    </span>

                                    @endif
                                </div>


                            </div>

                        </div>


                        @if($school->settings->about)
                        
                        <div class="margin-bot-25 slideup" id="sxetika">
                            <div class="section-header">
                                <p class=" title margin-left-20 pad-top-40 text-incr-175 font-weight-300" style="">
                                    <i class="fa fa-info-circle fa-linear4 margin-right-10" aria-hidden="true"></i>
                                    <span>@lang('profile.cards.about') </span>
                                </p>
                            </div>
                            <div class=" sc-t-grey text-justify">
                                <div class="margin-top-10" id="about-li">
                                    <div>{!! $school->about !!}</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="show-more" style="background-color: #fff">
                            <div class="pad-top-20">
                                
                            </div>
                        </div>
                        @endif

                        @if($school->settings->studies)
                        @if($school->lengthStudies() > 0 && ($school->type->id == 1 || $school->type->id == 2 ||
                        $school->type->id == 3 || $school->type->id == 4 || $school->type->id == 10 ||
                        $school->type->id == 11 || $school->type->id == 12) || $school->type->id == 13)
                        <div id="spoudes" style="overflow-x: hidden">
                            <div id="sliderStudies" class=" main-box-2 slideup">
                                <div class="section-header2">
                                    <p class="title margin-left-20 pad-top-40 text-incr-175 font-weight-300">
                                        <i class="fa fa-book fa-linear4 margin-right-10" aria-hidden="true"></i> <span>@lang('profile.cards.studies')
                                        </span>
                                    </p>
                                </div>
                                
                                @if($school->type->id == 1 || $school->type->id == 2 || $school->type->id == 3 ||
                                $school->type->id == 4 || $school->type->id == 10 || $school->type->id == 11 ||
                                $school->type->id == 12)
                                <div>
                                    @foreach($data as $key=>$level)
                                    <div>
                                        @if($levelsCounter > 1)
                                                @if(($key+1)%2 == 1)
                                                   <ul class="col-md-6" style="clear: left">
                                                @else
                                                   <ul class="col-md-6">
                                                @endif

                                       @elseif($levelsCounter > 1 && ($key+1)%2==1 )
                                            <ul class="clearFloat" style="clear: left">
                                       @elseif($school->type->id != 2 )
                                                    @if(($key+1)%2 == 1)
                                                        <ul class="col-sm-12 col-md-6" style="clear: left">
                                                   @else
                                                       <ul class="col-sm-12 col-md-6">
                                                    @endif
                                       @else
                                            <ul class="col-sm-12 ">
                                       @endif




                                                    @if($school->type->id != 2)
                                                            <div class=" text-incr-150 font-weight-300 margin-top-30 margin-left-10" style="margin-bottom: 0;">
                                                            {{ $level["level"]["name"] }}
                                                            </div>
                                                    @endif

                                                    @foreach($level["sections"] as $key2=>$section)
                                                    @if($school->type->id ==2 || ($school->type->id ==4  && $levelsCounter == 1))
                                                    <ul class="col-lg-6" style="list-style-type: none;  padding-top: 16px;">
                                                        @elseif(($key2+1)%2 == 1)
                                                        <ul class="clearFloat" style="list-style-type: none;  padding-top: 16px;" >
                                                            @else
                                                            <ul style="list-style-type: none;  padding-top: 16px;">
                                                                @endif

                                                                <li class="margin-top-10 margin-left-10">
                                                                    <img src='{{ $section["section"]["icon"] }}' alt="section name" style="height: 22px; margin-top: -12px; filter: grayscale(80%); opacity: 0.8" />
                                                                    <span class="pad-left-5 text-incr-125 font-weight-300" style="text-indent: 100%;">
                                                                        {{ $section["section"]["name"] }}
                                                                    </span>
                                                                </li>

                                                                @foreach($section["studies"] as $study)
                                                                <ul style="list-style-type: none;">
                                                                    <li class="pad-top-7 margin-left-10">
                                                                        @if($study["link"] != '')
                                                                        <span class="font-weight-300">
                                                                            <a href='/studylink/redirect/{{ $school->id }}/{{ $study["study"]["id"] }}' target="_blank">{{ $study["study"]["name"] }}</a>
                                                                        </span>
                                                                        @else
                                                                        <span class="font-weight-300">
                                                                            {{ $study["study"]["name"] }}
                                                                        </span>
                                                                        @endif
                                                                    </li>
                                                                </ul>
                                                                @endforeach
                                                            </ul>
                                                            @endforeach
                                                        </ul>
                                    </div>
                                    @endforeach
                                </div>
                                @endif
                                

                                


                                
                                @if($school->type->id == 13)
                                <div>
                                    @foreach($data as $key3=>$level)
                                    <div>
                                        @if($levelsCounter > 1)
                                        <ul class="col-md-6" style="padding-bottom: 20px;">
                                            @elseif(($levelsCounter > 1) && ($key+1)%2==1 )
                                            <ul class="clearFloat" style="padding-bottom: 20px;">
                                                @else
                                                <ul class="col-sm-12" style="padding-bottom: 20px;">
                                                    @endif
                                                    <div class="text-incr-150 font-weight-300 margin-top-30 margin-left-10"
                                                        style="margin-bottom: 0"> {{ $level["level"]["name"] }} </div>
                                                </ul>
                                    </div>
                                    @endforeach
                                </div>
                                @endif

                            </div>
                            
                                <div class="pad-top-30">
                                </div>

                        </div>
                        @endif
                        @endif

                        @if($school->settings->scholarships && count($school->scholarship) > 0 &&
                        count($school->activeScholarships()) > 0 )
                        <div class="slideup slideScholarships" id="ypotrofies" style="overflow-x: hidden;" ng-style="(studies.length<6 || !col_iek_eng_dan_mus) && {'margin-top':'30px'}">
                            <div class="section-header3">
                                <p class=" title margin-left-20 pad-top-40 text-incr-175 font-weight-300">
                                    <i class="fa fa-trophy fa-linear4 margin-right-10" aria-hidden="true"></i> <span>@lang('profile.cards.scholarships')
                                    </span>
                                </p>
                            </div>


                            <div class=" scholar-box col-sm-12">
                                @foreach($school->scholarship as $key=>$scholarship)
                                @if($key <= 6) <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="height: 400px!important; position: relative; margin: 20px 0 ; padding-left: 40px;">

                                    <div class="scholar-frame " ng-class="{'sm-margin-left':($index%2==1)}">
                                        <div class="ribbon-wrapper">
                                            <div class="ribbon-front sc-medium-grey">
                                                <span class="">
                                                    <img class="criteria-img" src="{{$scholarship->criteria->icon}}" alt="criteria icon">
                                                </span>

                                                <span class="sc-t-dark-green font-weight-400 text-incr-120 margin-left-10 scholar-title">{{$scholarship->criteria->name}}</span>
                                            </div>
                                            <div class="ribbon-edge-topright"></div>
                                            <div class="ribbon-edge-bottomright"></div>
                                            <div class="ribbon-back-right sc-medium-grey"></div>
                                        </div>

                                        <div class="hexagon hex1">
                                            <img class="hex-img" src="{{ $scholarship->financial->icon }}" alt="icon">
                                        </div>
                                        <div class="hexagon hex2">
                                            @if($scholarship->multiple == 0)
                                            <img class="hex-img" src="/panel/assets/images/steps/{{$scholarship->section[0]->name}}.png" alt="icon">
                                            @else
                                            <img class="hex-img" src="/panel/assets/images/steps/studies.png" alt="icon">
                                            @endif
                                        </div>

                                        <div class="scholar-content sc-t-grey font-weight-400">
                                            <p class="scholar-left xxs-up">{{$scholarship->financial->plan}}
                                                {{$scholarship->financial_amount}}
                                                @if($scholarship->financial->id !=3 )
                                                <span> {{$scholarship->financial->metric}}</span>
                                                @else
                                                <span> @lang('profile.months')</span>
                                                @endif
                                            </p>

                                            @if($school->type->id == 1 || $school->type->id ==3 || $school->type->id == 2)
                                            <div class="scholar-left xxs-text" style="padding-top: 40px;">
                                                {{$scholarship->level->name}}
                                            </div>
                                            @endif

                                            @if($scholarship->multiple == 0)
                                            <div class="scholar-left xxs-up2" style="margin-right: 10px; color: #464646;"
                                                ng-class="{'margin-top-50': (contactInfo.type_id!=1 && contactInfo.type_id!=2 && contactInfo.type_id!=3),'margin-top-0': (contactInfo.type_id==1 || contactInfo.type_id==2 || contactInfo.type_id==3) }">
                                                {{$scholarship->study->name}}
                                            </div>
                                            @endif

                                            @if($scholarship->multiple == 1)
                                            <div class="scholar-left xxs-up2" style="margin-right: 10px; color: #464646;"
                                                ng-class="{'margin-top-50': (contactInfo.type_id!=1 && contactInfo.type_id!=2 && contactInfo.type_id!=3),'margin-top-0': (contactInfo.type_id==1 || contactInfo.type_id==2 || contactInfo.type_id==3) }">
                                                @if(count($scholarship->multipleStudies) < 3) 
                                                @foreach($scholarship->multipleStudies as $ms)
                                                    <div>
                                                        {{ $ms->name }}
                                                    </div>
                                                    @endforeach
                                                    @endif

                                                    @if(count($scholarship->multipleStudies) > 2)

                                                    <div>
                                                        Πολλαπλα αντικείμενα σπουδών: {{
                                                        count($scholarship->multipleStudies) }}
                                                    </div>

                                                    @endif
                                            </div>
                                            @endif


                                        </div>

                                        <div class="xxs-text xs-none" ng-class="{'text-up':contactInfo.type_id!=1}">
                                            @if($scholarship->interestsLength() > 3 && count($scholarship->multipleStudies)<3) 
                                            <div style="position: absolute; top: 300px; width: 145px"
                                                class="font-weight-400 sc-t-grey">
                                                <span class="" style=""><i class="fa fa-thumbs-o-up margin-right-5"
                                                        aria-hidden="true"></i>
                                                    @lang('profile.scholarship.interested'): <span class="pull-right">{{ $scholarship->interestsLength() }}</span>
                                                </span>
                                        </div>
                                        @endif

                                        @if(count($scholarship->admission) > 2 && count($scholarship->multipleStudies)<3)
                                            <div style="position: absolute; top: 320px; width: 145px" class="font-weight-400 sc-t-grey">
                                            <span class="" style=""> <i class="fa fa-pencil margin-right-5" aria-hidden="true"></i>
                                                @lang('profile.scholarship.requested'): <span class="pull-right"> {{ count($scholarship->admission) }}</span>
                                            </span>
                                    </div>
                                    @endif

                            </div>

                            @if(auth()->check() && auth()->user()->role != 'school' && auth()->user()->role !='teacher' )

                            <ul class="like-btn">
                                <a href=""><button id="b@{{scholarship.id}}" type="button" ng-click="interested(scholarship.id, $index)"
                                        class="sc-button-landing sc-button sc-dark-green sc-t-white" style="width:140px;">
                                        <i id="i@{{scholarship.id}}" class="fa fa-thumbs-o-up margin-right-10 margin-left-5"
                                            aria-hidden="true"></i>
                                        <span id="t@{{scholarship.id}}" ng-init="test(scholarship)">@lang('profile.scholarship.like')</span>
                                    </button>
                                </a>
                            </ul>
                            @endif

                            <ul class="show-btn">
                                <a href="/scholarship/{{$scholarship->id}}"><button type="button" class="sc-button-landing sc-button sc-green sc-t-white provoli">
                                        <i class="fa fa-file-text-o margin-right-10" aria-hidden="true"></i>
                                        @lang('profile.scholarship.show')</button></a>
                                
                                                </div>

                                    </div>
                                    @endif
                                    @endforeach

                                </div>


                            </div>
                            
                            <div class="show-more" ng-if="contactInfo.lengthScholarships>6" style="background-color: #fff">
                                    <div class="pad-top-20">
    

                                        <span><a class="more-scholarships-text" href="{{ url('/public/scholarships?q=' . $school->admin->name) }}"
                                                target="_blank">@{{textScholarships}}</a></span>
                                    </div>
                                </div>
                                @endif


                                @if($school->settings->teachers && count($school->teachers) > 0)
                                
                                <div class="slideTeachers slideup margin-bot-25" id="faculty" style="overflow-x: hidden">
                                    <div class="section-header3">
                                        <p class=" title margin-left-20 pad-top-40 text-incr-175 font-weight-300">
                                            <i class="fa fa-graduation-cap fa-linear4 text-incr-115 margin-right-10"
                                                aria-hidden="true"></i> <span>@lang('profile.cards.teachers') </span></span>
                                        </p>
                                    </div>

                                    <div class="sc-t-grey text-justify">
                                        <div class="margin-top-10" id="about-li">
                                            <div ng-repeat="teacher in contactInfo.teachers">

                                                <div class="col-sm-12 col-md-6 hidden-xs">
                                                    <div class="col-sm-12 user-card">
                                                        <div class="user-header ">
                                                            <a href="/public/profile/teacher/@{{teacher.info.id}}">
                                                                <img class="user-img img-circle" ng-src="@{{teacher.info.avatar}}"
                                                                    alt="teacher">
                                                                <span class="user-name">
                                                                    <span style="color: #fff !important;">@{{teacher.name}}</span>
                                                                </span>
                                                            </a>
                                                            <span class="user-info"> @{{ teacher.info.title }}</span>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="xs-user-card visible-xs hidden-sm hidden-md">
                                                    <div class="xs-user-header  center-block centered-text">
                                                        <a href="/public/profile/teacher/@{{teacher.info.id}}">
                                                            <img class="xs-user-img img-circle" ng-src="@{{teacher.info.avatar}}"
                                                                alt="teacher">
                                                            <div class="xs-user-name">
                                                                <span class="xs-name" style="color: #888 !important;">@{{teacher.name}}</span>
                                                            </div>
                                                        </a>
                                                        <span class="xs-user-info"> @{{ teacher.info.title }}</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="show-more" style="background-color: #fff">
                                    <div class="pad-top-20">
                                        <span ng-click="showMoreTeachers('faculty')">@{{textTeachers}}
                                            <i class="@{{ iconTeachers }}"></i></span>
                                    </div>
                                </div>
                                @endif


                                @if($school->settings->reviews && count($school->reviews) > 0)
                                
                                <div class="slideReviews slideup margin-bot-25 " id="reviews" style="overflow-x: hidden">
                                    <div class="section-header2">
                                        <p class=" title margin-left-20 pad-top-40 text-incr-175 font-weight-300">
                                            <i class="fa fa-star fa-linear4 margin-right-10" aria-hidden="true"></i>
                                            <span>@lang('profile.cards.reviews') </span>
                                        </p>
                                    </div>

                                    
                                    <div id="total-reviews" class="row col-sm-12">

                                        <div class="font-weight-400 sc-t-green col-xs-12 col-lg-4 col-lg-push-8 text-center total-score">
                                            <span class="lead">{{ $school->stars}}</span>
                                            <br />
                                            <span class="sc-t-grey">@lang('profile.total')</span>

                                            <br />
                                            <div class="raty" id="totalRating"></div>
                                            <span class="sc-t-grey">({{ $school->countReviews() }}
                                                @lang('profile.reviews'))</span>
                                        </div>

                                        <div class="row font-weight-400 sc-t-grey col-xs-12 col-lg-8 col-lg-pull-4 xs-stars">


                                            <div ng-repeat="review in contactInfo.avgReviews">
                                                <div class="col-xs-12 col-sm-6 pad-0">
                                                    <i class="@{{review.icon}} margin-right-10" aria-hidden="true"></i>
                                                    <span>@{{ categ(review.icon) }}</span>
                                                </div>
                                                <div class="col-xs-12 col-sm-6" style="margin-left: -12px; margin-bottom: 9px;">
                                                    <span id="catReview-@{{$index}}" ng-init="categoryReview($index, review.stars)"
                                                        value="@{{review.stars}}" class="margin-left-20 raty" id="studyProgram"></span>
                                                    <span> @{{review.stars}}</span>
                                                </div>
                                            </div>


                                        </div>

                                    </div>

                                    
                                    <div id="reviews-container" ng-repeat="review in contactInfo.reviews">
                                        <hr class="sc-t-grey" />
                                        <div class="col-lg-12">
                                            <div class="margin-left-10  person-review">
                                                <span>@{{review.user.name}}</span> - @{{ role(review.user.role) }}
                                                <br />
                                                <span value="@{{review.stars.total}}" class="raty margin-right-10 sc-t-grey"
                                                    style="margin-left: -3px"></span>
                                                <span class="sc-t-grey">
                                                    <div class="raty" id="totalRating-@{{review.id}}" ng-init="rate(review.id, review.average)">@{{
                                                        review.average }}</div>
                                                </span>
                                                <br />
                                                <span class="sc-t-grey">@{{review.created_at}}</span>
                                                <br />
                                            </div>
                                            <span class="col-lg-12 font-weight-400 sc-t-grey review-text fulltext">@{{review.text}}</span>
                                        </div>

                                    </div>
                                </div>
                                
                                <div class="show-more" style="background-color: #fff">
                                    <div class="pad-top-20">
                                        <span ng-click="showMoreReviews('reviews')">@{{textReviews}}
                                            <i class="@{{ iconReviews }}"></i></span>
                                    </div>
                                </div>
                                @endif



                                @if($school->settings->map)
                                
                                <div class="hidden-lg hidden-md visible-sm visible-xs clearfix">
                                    <div class="margin-top-10 stats-box-xs">
                                        <div class="" id="googleMapXS" style="height: 310px; width: 100%; "></div>
                                    </div>
                                </div>
                                @endif



                                <div class="row" style="padding: 0">
                                    <hr>
                                </div>


                                
                                <div id="otherSchools" class="row boxAlsoContainer">


                                    <p class=" title margin-left-20 pad-top-40 text-incr-175 font-weight-300">
                                        <i class="fa fa-university fa-linear4 margin-right-10" aria-hidden="true"></i>
                                        <span>Αναζήτησε παρόμοιες σπουδές</span>
                                    </p>

                                    <div class="innerPadding col-sm-4">
                                        @if($school->type->id==1)
                                        <a id="c1" style="color: #fff" href="https://schol.io/public/schools?q={{ $school->type->name }}">
                                            <div id="c1b" class="boxAlso">
                                                <div class="upImgContainer">
                                                    <picture>
                                                        <source srcset="{{asset('/new/img/sect-photo/college.webp')}}" type="image/webp">
                                                        <source srcset="{{asset('/new/img/sect-photo/college.jpg')}}" type="image/jpeg">
                                                        <img id="c1im" class="upImg" src="/new/img/sect-photo/college.webp" alt="icons">
                                                    </picture>
                                                
                                                </div>
                                                <h1 id="c1t" class="alsoText">{{ $school->type->name }} σε Ελλάδα</h1>
                                            </div>
                                        </a>
                                        @else
                                        <a id="c1" style="color: #fff" href="https://schol.io/public/schools?hFR%5Btype%5D%5B0%5D={{ $school->type->name }}&is_v=1&hPP=8&idx=dummySchools&p=0&hFR%5Bcategories.lvl0%5D%5B0%5D={{ $school->city}} > {{ $school->region}}">
                                            <div id="c1b" class="boxAlso">
                                                <div class="upImgContainer">
                                                    <picture>
                                                        <source srcset="{{asset('/new/img/sect-photo/college.webp')}}" type="image/webp">
                                                        <source srcset="{{asset('/new/img/sect-photo/college.jpg')}}" type="image/jpeg">
                                                        <img id="c1im" class="upImg" src="/new/img/sect-photo/college.webp" alt="icons">
                                                    </picture>
                                                </div>
                                                <h1 id="c1t" class="alsoText">{{ $school->type->name }} σε {{
                                                    $school->city}} {{ $school->region}}</h1>
                                            </div>
                                        </a>

                                        @endif
                                    </div>


                                    <div class="innerPadding col-sm-4">
                                        <a id="c2" style="color: #fff" href="https://schol.io/public/schools?q=&hPP=8&idx=dummySchools&p=0&hFR%5Bcategories.lvl0%5D%5B0%5D={{ $school->city}}&hFR%5Btype%5D%5B0%5D={{ $school->type->name }}&is_v=1">
                                            <div id="c2b" class="boxAlso">
                                                <div class="upImgContainer">
                                                
                                                <picture>
                                                        <source srcset="{{asset('/new/img/sect-photo/student.webp')}}" type="image/webp">
                                                        <source srcset="{{asset('/new/img/sect-photo/student.jpg')}}" type="image/jpeg">
                                                            <img id="c2im" class="upImg" src="/new/img/sect-photo/student.webp" alt="icons">
                                                    </picture>
                                                </div>
                                                <h1 id="c2t" class="alsoText">{{ $school->type->name }} σε {{
                                                    $school->city}} </h1>
                                            </div>
                                        </a>
                                    </div>


                                    <div class="innerPadding col-sm-4 ">

                                        @if($school->type->id==1)
                                        <a id="c3" style="color: #fff" href="https://schol.io/public/schools?q=&hPP=8&idx=dummySchools&p=0&hFR%5Bcategories.lvl0%5D%5B0%5D={{ $school->city}}&hFR%5Btype%5D%5B0%5D=ΙΕΚ%20-%20Επαγγελματική%20Σχολή%20-%20ΚΔΒΜ&is_v=1">
                                            <div id="c3b" class="boxAlso">
                                                <div class="upImgContainer">
                                                    <picture>
                                                        <source srcset="{{asset('/new/img/sect-photo/doct2.webp')}}" type="image/webp">
                                                        <source srcset="{{asset('/new/img/sect-photo/doct2.jpg')}}" type="image/jpeg">
                                                        <img id="c3im" class="upImg" src="/new/img/sect-photo/doct2.webp" alt="icons">
                                                    </picture>
                                                
                                                
                                                </div>
                                                <h1 id="c3t" class="alsoText">IEK σε σε {{ $school->city}} </h1>
                                            </div>
                                        </a>
                                        @elseif($school->type->id!=4)
                                        <a id="c3" style="color: #fff" href="https://schol.io/public/schools?hFR%5Btype%5D%5B0%5D=Φροντιστήριο Ξένων Γλωσσών / Πληροφορικής&is_v=1&hPP=8&idx=dummySchools&p=0&hFR%5Bcategories.lvl0%5D%5B0%5D={{ $school->city}} > {{ $school->region}}">
                                            <div id="c3b" class="boxAlso">
                                                <div class="upImgContainer">
                                                    <picture>
                                                        <source srcset="{{asset('/new/img/sect-photo/Schoolchildren2.webp')}}" type="image/webp">
                                                        <source srcset="{{asset('/new/img/sect-photo/Schoolchildren2.jpg')}}" type="image/jpeg">
                                                            <img id="c3im" class="upImg" src="new/img/sect-photo/Schoolchildren2.webp" alt="icons">
                                                    </picture>
                                                
                                                </div>
                                                <h1 id="c3t" class="alsoText">Κέντρα Ξένων Γλωσσών σε σε {{
                                                    $school->city}} {{ $school->region}}</h1>
                                            </div>
                                        </a>
                                        @else
                                        <a id="c3" style="color: #fff" href="https://schol.io/public/schools?hFR%5Btype%5D%5B0%5D=Φροντιστήριο Μέσης Εκπαίδευσης&is_v=1&hPP=8&idx=dummySchools&p=0&hFR%5Bcategories.lvl0%5D%5B0%5D={{ $school->city}} > {{ $school->region}} ">
                                            <div id="c3b" class="boxAlso">
                                                <div class="upImgContainer">
                                                    <picture>
                                                        <source srcset="{{asset('/new/img/sect-photo/student.webp')}}" type="image/webp">
                                                        <source srcset="{{asset('/new/img/sect-photo/student.jpg')}}" type="image/jpeg">
                                                            <img id="c3im" class="upImg" src="/new/img/sect-photo/student.webp" alt="icons">
                                                    </picture>
                                                
                                                </div>
                                                <h1 id="c3t" class="alsoText">Φροντιστήρια Μέσης Εκπαίδευσης σε σε {{
                                                    $school->city}} {{ $school->region}}</h1>
                                            </div>
                                        </a>
                                        @endif
                                    </div>
                                </div>

                                





                        </div> 



                        


                
                        <div class="col-lg-3 col-md-3 hidden-sm hidden-xs margin-top-30 right-side-bar">





                            @if($school->settings->info)
                            <div>
                                <div class="box left-box1" style="height: 250px;">

                                    <div class="col-lg-12" style="">




                                        <div class="pad-top-20"></div>
                                        <span><i class="fa fa-university pull-left pad-top-3 xs-text-incr-85 "
                                                aria-hidden="true"></i></span>
                                        <span class="pull-left pad-left-8 xs-text-incr-85 text-incr-95 ellipsis">
                                            <h1 class="schooltype">{{ $school->type->name }}</h1>

                                        </span>
                                        <br>
                                        <div class="pad-top-20"></div>
                                        <span><i class="fa fa-map-marker pull-left pad-top-3 xs-text-incr-85 "
                                                aria-hidden="true"></i></span>
                                        <span class="pull-left pad-left-8 xs-text-incr-85 text-incr-95 ellipsis">{{$school->address}}</span>
                                        <br>
                                        <div class="pad-top-20"></div>
                                        <div class="hidden-xs">
                                            <span><i class="fa fa-street-view pull-left pad-top-3 " aria-hidden="true"></i></span>
                                            <span class="pull-left pad-left-5">{{ $school->city}}</span>
                                            <br>
                                        </div>
                                        <div class="pad-top-20"></div>
                                        <span><i class="fa fa-phone pull-left pad-top-2 xs-text-incr-85" aria-hidden="true"></i></span>
                                        <span class="pull-left pad-left-5">{{ $school->phone}}</span>

                                        <div class="hidden-xs ">
                                            <br>
                                            <div class="pad-top-20"></div>
                                            <span><i class="fa fa-envelope  pull-left pad-top-2 " aria-hidden="true"></i></span>
                                            <span class="pull-left pad-left-5 ellipsis"> <a href="mailto:{{ $school->email()}}">{{$school->email()}}</a></span>
                                        </div>

                                        <span ng-if="contactInfo.website">
                                            <br>
                                            <div class="pad-top-20"></div>
                                            <a class="webHover" href="/schoolink/redirect/{{$school->id}}/" target="_blank">
                                                <span><i class="fa fa-globe pull-left pad-top-3 xs-text-incr-85" aria-hidden="true"></i></span>
                                                <span class="pull-left pad-left-5 ellipsis"> {{ $school->website }}</span>
                                            </a>
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
                                        <span class="pull-right badge" style="margin-right: -4px"> {{
                                            count($school->activeScholarships()) }}</span>
                                        <br>

                                        <div ng-show="contactInfo.type_id==1 || contactInfo.type_id==2 ">
                                            <div class="pad-top-20"></div>
                                            <span><i class="fa fa-paint-brush pull-left pad-top-3 " aria-hidden="true"></i></span>
                                            <span class="pull-left pad-left-5">@lang('profile.statistics.studies')</span>
                                            <span class="pull-right">{{ $school->lengthStudies() }}</span>
                                            <br>
                                        </div>

                                        @if($school->settings->statistics)
                                        <div class="pad-top-20"></div>
                                        <span>
                                            <i class="fa fa-user pull-left pad-top-2 " aria-hidden="true"></i>
                                        </span>
                                        <span class="pull-left pad-left-10" ng-show="contactInfo.type_id==1 || contactInfo.type_id==2 ">@lang('profile.statistics.students')</span>
                                        <span class="pull-left pad-left-10" ng-show="contactInfo.type_id!=1 && contactInfo.type_id!=2">@lang('profile.statistics.students_s')</span>
                                        <span class="pull-right">{{ $school->lengthStudents() }}</span>
                                        <br>
                                        <div class="pad-top-20"></div>
                                        <span><i class="fa fa-graduation-cap pull-left pad-top-3 " aria-hidden="true"></i></span>
                                        <span class="pull-left pad-left-2 pad-bot-10">@lang('profile.statistics.teachers')</span>
                                        <span class="pull-right">{{ $school->lengthTeachers() }}</span>
                                        @endif


                                    </div>
                                    <div class="clearfix"></div>
                                </div>


                                @if($school->settings->map)
                                <div class="box" style="margin-top: 30px; margin-bottom: 90px;">
                                    <div class="" id="googleMap" style="height: 270px; width: 100%; "></div>
                                </div>
                                @endif

                                @if($school->admin->subscription->plan_id == 2)
                                @if(auth()->check())
                                @if(auth()->user()->role != 'school')
                                @if(auth()->user()->apply->contains($school))
                                <nav data-spy="affix" data-offset-top="1160" id="connectionButton" style="top: 120px!important">
                                    <button id="submButton" type="button" class="affix-button  sc-t-white center-block"
                                        style="background-color: #7fafbb" disabled>
                                        <i class="fa fa-link pad-right-15" aria-hidden="true"></i>
                                        @lang('profile.pending')
                                    </button>
                                </nav>

                                @else

                                @if(auth()->user()->connectedSchool->contains($school))
                                <nav data-spy="affix" data-offset-top="1160" id="connectionButton" style="top: 120px!important">
                                    <button id="submButton" type="button" class="affix-button sc-t-white center-block"
                                        style="background-color: #bbb" disabled>
                                        <i class="fa fa-link pad-right-15" aria-hidden="true"></i>
                                        @lang('profile.connected')
                                    </button>
                                </nav>
                                @else
                                <nav data-spy="affix" data-offset-top="1170" id="connectionButton" style="top: 120px!important">
                                    <button id="submButton" type="button" class="affix-button sc-orange sc-t-white center-block"
                                        data-toggle="modal" data-target="#connect-modal" ng-disabled="!showButton">
                                        <i class="fa fa-link pad-right-15" aria-hidden="true"></i>@lang('profile.request')
                                    </button>
                                </nav>
                                @endif

                                @endif
                                @endif

                                @else
                                <nav data-spy="affix" data-offset-top="1240" id="connectionButton" style="top: 120px!important">
                                    <a href="{{ url('/login') }}">
                                        <button id="submButton" type="button" class="affix-button sc-orange sc-t-white center-block">
                                            <i class="fa fa-link pad-right-15" aria-hidden="true"></i>@lang('profile.request')
                                        </button>
                                    </a>

                                </nav>
                                @endif
                                @endif


                            </div>

                            


                        </div>



                    </div>


                </div> 

                            
                    </div>
                </div>

                <div id="img-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none; top: 100px;">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <img src="/" id="bigImage" width="120%" height="auto" alt="icon"/>

                        </div>
                    </div>
                </div>

                
                </div>


        </main>
    </div>

    @include('public.footer')

    <script src="https://maps.googleapis.com/maps/api/js?libraries=geometry,places&language=el&region=GR&key=AIzaSyDCdWDTJpvexNyV0DzIpbR69XatKp9Litg"></script>


    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.8/angular.min.js"></script>

    
    <script src="/new/js/jquery.raty-fa.js"></script>

    
    <script src="/new/js/jquery.bxslider412.js"></script>

    <script src="/js/in-view.min.js"></script>




</body>

<script>
    

    $(document).ready(function () {
        inView('#otherSchools').on('enter', isInView).on('exit', saveAnalytic);

        var seconds;

        function isInView(){
            seconds = 0;
            startTimer();
        }

        function startTimer() {
            setInterval(function () {
                seconds++;
            }, 1000);
        }

        function saveAnalytic() {
            seconds = 0;
        }
    });

    $(document).ready(function(){
        var myLatlng = new google.maps.LatLng({{$school->lat}}, {{$school->lng}});
                var myOptions = {
                    zoom: 15,
                    center: myLatlng,
                    scrollwheel: false,
                    scaleControl: true,
                };
                var map = new google.maps.Map(document.getElementById("googleMap"), myOptions);
                var mapXS = new google.maps.Map(document.getElementById("googleMapXS"), myOptions);

                var marker = new google.maps.Marker({
                    position: myLatlng,
                    title: "{{$school->name()}}",
                    icon: "/../new/img/markers/marker-teal-sm.webp",
                    map: map,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                });
                var marker2 = new google.maps.Marker({
                    position: myLatlng,
                    title: "{{$school->name()}}",
                    icon: "/../new/img/markers/marker-teal-sm.webp",
                    map: mapXS,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                });
                var styledMapType = new google.maps.StyledMapType(
                    [
                        {
                            "featureType": "poi.park",
                            "elementType": "geometry.fill",
                            "stylers": [{"color": "#E2F0DA"}]
                        },
                        {
                            "featureType": "water",
                            "elementType": "geometry.fill",
                            "stylers": [{"color": "#A4DBE7"}]
                        }
                    ]
                );
                map.mapTypes.set('styled_map', styledMapType);
                map.setMapTypeId('styled_map');
                mapXS.mapTypes.set('styled_map', styledMapType);
                mapXS.setMapTypeId('styled_map');
    });

    $(document).ready(function () {

        $("#c1").mouseover(function () {
            $("#c1t").css("color", "#FD6A33");
            $("#c1b").css("box-shadow", "0 0 10px #999").css("background", "#fff");
            $("#c1im").css("opacity", "1");
        });
        $("#c1").mouseout(function () {
            $("#c1t").css("color", "#006373");
            $("#c1b").css("box-shadow", "none").css("background", "#f8f8f8");
            $("#c1im").css("opacity", "0.7");
        });
        $("#c2").mouseover(function () {
            $("#c2t").css("color", "#FD6A33");
            $("#c2b").css("box-shadow", "0 0 10px #999").css("background", "#fff");
            $("#c2im").css("opacity", "1");
        });
        $("#c2").mouseout(function () {
            $("#c2t").css("color", "#006373");
            $("#c2b").css("box-shadow", "none").css("background", "#f8f8f8");
            $("#c2im").css("opacity", "0.7");
        });

        $("#c3").mouseover(function () {
            $("#c3t").css("color", "#FD6A33");
            $("#c3b").css("box-shadow", "0 0 10px #999").css("background", "#fff");
            $("#c3im").css("opacity", "1");
        });
        $("#c3").mouseout(function () {
            $("#c3t").css("color", "#006373");
            $("#c3b").css("box-shadow", "none").css("background", "#f8f8f8");
            $("#c3im").css("opacity", "0.7");
        });
    });


    $(function () {
        $('.bxslider').bxSlider({
            pager: false,
            controls: true,
            minSlides: 1,
            maxSlides: 5,
            moveSlides: 1,
            slideWidth: 328.5,
            slideMargin: 10,
            infiniteLoop: true,
            hideControlOnEnd: false,
            onSliderLoad: function () {
                $("#bx").css("visibility", "visible")
            }
        });
    });

    function test(e) {
        var IMG = e.src;

        $('#bigImage').attr("src", IMG);

        $('#img-modal').modal('toggle');
    }

    var lengthStudents = 0;


    $(function () {
        var bt = $('#connectionButton');
        var offset = bt.offset() || 0;
        bt.attr("data-offset-top", offset.top + 120);

        var sb = $("#submButton1");
        $(window).scroll(function () {
            var scroll = $(window).scrollTop();
            if (scroll >= 595) {
                sb.removeClass('hidden').addClass("vissible");
            } else {
                sb.removeClass("vissible").addClass('hidden');
            }
        });
    });
</script>


</html>