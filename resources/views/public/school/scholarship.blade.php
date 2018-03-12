<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="fb:pages" content="934370089973049" />

    <title>schol.io | Διεκδίκησε τώρα την υποτροφία που σου ταιριάζει.</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/new/img/favicon.ico" type="image/x-icon" />

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/new/img/favicon-144.ico">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/new/img/favicon-72.ico">
    <link rel="apple-touch-icon-precomposed" href="/new/img/favicon-57.ico">

    <!--====== CSS  Styles =======-->
    @include('public.styles')




    <!-- Profile  CSS -->
    <link href="/new/css/scholarship-profile.css" rel="stylesheet">


    <!-- Horizontal Ribbons  CSS -->
    {{--<link href="/new/css/ribbonHorizontal.css" rel="stylesheet">--}}

            <!-- Horizontal Ribbons  CSS -->
    {{--<link href="/new/css/Hexagon.css" rel="stylesheet">--}}



    <!-- jQuery js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>


    <!-- Bootstrap js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <!-- Bootstrap Select js  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.4/js/bootstrap-select.min.js"></script>


    <!-- Angular js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.8/angular.min.js"></script>



    <script src="/new/js/profile.js"></script>



    <script>
        window.Scholio = <?php echo json_encode([
    'csrfToken' => csrf_token(),
]); ?>
    </script>



    <style>

    .imgLogo{height: 50px; border-radius: 4px; border: 1px solid #ddd; box-shadow: 0 0 7px 1px #ccc; margin-top: -5px; margin-right: 8px}


    .margin-right-30{margin-right: 30px}
    .opacity04{opacity: 0.4;}
    .opacity05{opacity: 0.5;}
    .opacity06{opacity: 0.6;}
    .opacity09{opacity: 0.9;}
    .opacity10{opacity: 1;}
    .box{ border: solid 5px #FD6A33; border-radius:10px; background: #fff; height: 200px; width: 70%; z-index: 1; top: 250px;   left: 50%;
        transform: translate(-50%, 0);  position: fixed; max-width: 1300px}
    .ended{ opacity: 0.8; font-size: 4vw; font-weight: 300; color: #008da5; position: relative;
        top: 50%;  transform: translateY(-50%); text-align: center;}
    .img-sad{height:100px; width: auto; margin-top: -10px;}
    .applied:hover{cursor: not-allowed}
    .modalNoApplyContent{width: 500px;}


    @media (min-width:1800px){
        .box{width: 60%}
    }
    @media (max-width:1449px){
        .ended{font-size: 5vw;}
    }
    @media (max-width:830px){
        .ended{font-size: 5.4vw;}
        .box{height: 100px;}
        .margin-right-30{margin-right: 15px}
    }

    @media (max-width:420px){
        .ended{font-size: 5.8vw;}
        .margin-right-30{margin-right: 5px}

    }
    @media (max-width:1199px){
        #trophy-svg{top: -67px;}
    }
    @media (max-width:991px){
        #trophy-svg{top: 0;}
    }
    @media (max-width:767px){
        #trophy-svg{top: -40px;}
    }


    @media (max-width:600px){
        #trophy-svg{margin-left: auto; margin-right: auto; left:0; right: 0; top: 50px; height: 270px!important; width: 210px!important;}
        .Hero1{margin-top: 30px;}
        .Hero2{position: absolute; z-index: 20; right: 0; left: 0; top: 70px;}
        .imgLogo{display: none;}
        .modalNoApplyContent{width: 94%}

    }


        #trophy-svg{float: right;  height: 400px; width: 260px ;position: absolute;  right: 20px}

    .dropdown-menu{background-color: #eee; padding-top: 20px}



    </style>
</head>
<body data-spy="scroll" data-target=".spy" data-offset="270" id="home"  ng-app="scholarshipApp"  ng-controller="scholarshipCtrl" data-ng-init="init()" ng-cloak
      class="">
<!-- Για ληγμενες -->




<!-- Scholio Header -->

<header class="spy navbar navbar-fixed-top navbar-scroll sc-landing-header {{ $scholarship->active ? '' : 'opacity10'}}" id="header" style="z-index: 2">

    <div class="container" style="">
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

                    <li class="" style="margin-top: 16px">
                        <form method="GET" id="langForm">
                            <select onchange="changeLang(this)" class="selectpicker" data-live-search="false" data-mobile="false" data-size='2' data-width="100%" data-style="btn-white">
                                <option style="color: black" data-icon="fa" value="en" {{ request()->cookie('lang')=='en' ? 'selected':'' }}>&nbsp; ENG</option>
                                <option style="color: black" data-icon="fa" value="el" {{ request()->cookie('lang')=='el' ? 'selected':'' }}>&nbsp; GR</option>
                            </select>
                        </form>
                    </li>

                    <li class="sc-landing-menu-item">
                        <a href="{{url('public/scholarships')}}" class="btn-change-search">
                            <i class="fa fa-trophy margin-right-5"></i>
                            @lang('schools.navigation.search_scholarship')
                        </a>
                    </li>
                    <li class="sc-landing-menu-item" style="margin-right: -12px">
                        <a href="{{url('public/schools')}}" class="btn-change-search">
                            <i class="fa fa-university margin-right-5"></i>
                            @lang('scholarships.search_institution')
                        </a>
                    </li>



                    {{--<li class="sc-landing-menu-item"><a href="#sxetika" >@lang('scholarship_view.navigation.info')</a></li>--}}
                    @if(auth()->check())
                        <li><a href="{{ url('/dashboard') }}"><button type="button" class="sc-button-landing sc-button sc-orange sc-t-white" style="margin-right: -12px">@lang('main.navigation.admin')</button></a></li>
                        <li><a href="{{ url('/out') }}"><button type="button" class="sc-button-landing sc-button sc-dark-green sc-t-white ">@lang('main.navigation.logout')</button></a></li>
                    @else
                        <li><a href="{{ url('/register/role') }}"><button type="button" class="sc-button-landing sc-button sc-green sc-t-white" style="margin-right: -12px">@lang('main.navigation.register')</button></a></li>
                        <li><a href="{{ url('/login') }}"><button type="button" class="sc-button-landing sc-button sc-dark-green sc-t-white">@lang('main.navigation.login')</button></a></li>
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
            @include('public.sandwich-menu-scholarshipProfile')

        </div>  <!-- row -->
    </div><!-- container-->
</header>


{{--<div class="container">--}}
    {{--<div class="photo-box">--}}
        {{--<div class="">--}}
            {{--<div class="school-name ">--}}
                {{--{{ $scholarship->school->name() }}--}}
            {{--</div>--}}
            {{--<img class="logo " src="/images/schools/{{ $scholarship->school->logo}}" alt="">--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}



@if(!$scholarship->active)
    <div class="box">
        <div class="ended">
            <i class="fa fa-flag margin-right-30"></i>
            {{--<img src="/new/img/sad.png" class="img-sad margin-right-30" alt="">--}}
            @lang('scholarship_view.top.ended') @{{scholarship.end}}
        </div>
    </div>
@endif


<div class="container cover {{ $scholarship->active ? '' : 'opacity04'}}">
    {{--<img class="trophy" src="/new/img/trophy3.png" alt="">--}}
    {{--<img class="grad" src="/new/img/Graduation.png" alt="">--}}

    <svg class="" x="0" y="0px" id="" display="none"
         viewBox="0 0 300 300" enable-background="new 0 0 300 300" xml:space="preserve">
    <path id="trophy" fill="#01BDD5" stroke="#01BDD5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
        M275.788,47.294H228.24c-1.169-4.153-2.601-8.241-4.295-12.252c-0.831-1.961-2.753-3.237-4.883-3.237H76.572
        c-2.13,0-4.052,1.276-4.883,3.237c-1.694,4.011-3.126,8.099-4.295,12.252h-47.04c-2.927,0-5.299,2.373-5.299,5.299
        c0,21.436,6.973,41.632,19.638,56.866c12.464,14.99,28.973,23.472,46.667,24.031c0.478,0.707,0.965,1.41,1.462,2.109
        c11.605,16.235,27.356,28.624,45.725,36.006v12.364h-6.596c-2.927,0-5.299,2.375-5.299,5.299c0,2.927,2.373,5.299,5.299,5.299h6.596
        v9.448h-6.596c-2.927,0-5.299,2.373-5.299,5.299c0,2.927,2.373,5.299,5.299,5.299h6.596V227.1h-13.836
        c-15.818,0-28.686,12.868-28.686,28.686v5.77c0,2.927,2.373,5.299,5.299,5.299H204.31c2.927,0,5.299-2.373,5.299-5.299v-5.77
        c0-15.818-12.868-28.686-28.686-28.686h-13.836v-12.485h7.103c2.927,0,5.299-2.373,5.299-5.299c0-2.927-2.373-5.299-5.299-5.299
        h-7.103v-9.448h7.103c2.927,0,5.299-2.373,5.299-5.299c0-2.924-2.373-5.299-5.299-5.299h-7.103v-12.364
        c18.372-7.382,34.123-19.771,45.725-36.006c12.607-17.645,19.273-38.471,19.273-60.227c0-5.91-0.497-11.746-1.47-17.48h39.705
        c-1.561,24.828-14.007,47.276-32.593,58.162c-2.526,1.48-3.372,4.728-1.895,7.253c0.986,1.682,2.758,2.621,4.577,2.621
        c0.911,0,1.832-0.235,2.673-0.727c11.298-6.616,20.825-16.814,27.55-29.491c6.84-12.892,10.454-27.799,10.454-43.118
        C281.087,49.667,278.714,47.294,275.788,47.294L275.788,47.294z M25.814,57.893h39.205c-0.976,5.734-1.47,11.569-1.47,17.48
        c0,16.447,3.812,32.36,11.119,46.771C48.367,117.335,27.827,90.722,25.814,57.893L25.814,57.893z M180.923,237.698
        c9.972,0,18.087,8.115,18.087,18.087v0.471H96.624v-0.471c0-9.972,8.115-18.087,18.087-18.087H180.923z M156.488,214.614V227.1
        h-17.342v-12.485H156.488z M139.146,204.015v-9.448h17.342v9.448H139.146z M159.989,162.97c-2.101,0.758-3.501,2.75-3.501,4.983
        v16.015h-17.342v-16.015c0-2.233-1.4-4.225-3.501-4.983c-36.783-13.274-61.497-48.479-61.497-87.598
        c0-6.997,0.768-13.877,2.285-20.587c0.274-0.603,0.437-1.266,0.466-1.967c0.88-3.524,1.964-7,3.258-10.415h135.322
        c3.99,10.516,6.008,21.589,6.008,32.969C221.486,114.491,196.772,149.696,159.989,162.97L159.989,162.97z M159.989,162.97"/>
            <path id="orange" fill="#FD6A33" stroke="#FD6A33" stroke-width="2" stroke-miterlimit="10" d="
        M125.525,136.139 c-11.396-6.298-20.784-17.272-26.433-30.901c-1.118-2.704-4.22-3.988-6.924-2.867c-2.704,1.12-3.987,4.22-2.867,6.924
        c6.565,15.839,17.606,28.668,31.098,36.12c0.813,0.45,1.69,0.662,2.557,0.662c1.865,0,3.677-0.986,4.644-2.738
        C129.015,140.779,128.087,137.558,125.525,136.139L125.525,136.139z M125.525,136.139

        M90.035,94.872 c2.886-0.492,4.826-3.227,4.337-6.112c-0.758-4.454-1.141-9.039-1.141-13.627c0-2.927-2.373-5.299-5.299-5.299
        c-2.927,0-5.299,2.373-5.299,5.299c0,5.183,0.435,10.364,1.291,15.401c0.44,2.585,2.681,4.412,5.217,4.412
        C89.435,94.95,89.735,94.924,90.035,94.872L90.035,94.872z M90.035,94.872"/>
    </svg>
    <svg id="trophy-svg" class="Animate-Path" viewBox="0 0 290 160" xml:space="preserve">
        <use id="Draw-upperArc" class="Animate-Draw" xlink:href="#trophy" />
        <use id="Draw-Hat" class="Animate-Draw" xlink:href="#orange" />
    </svg>





    <div class="Hero1"> @lang('scholarship_view.top.title'):</div>



    <div class="Hero2">
        <img src="{{ $scholarship->school->logo }}"  class="imgLogo">
        <a class="school-title" href="/public/profile/{{ $scholarship->school->id}}" target="_blank">{{ $scholarship->school->name() }}</a>
    </div>
</div>
<div class="line {{ $scholarship->active ? '' : 'opacity04'}}"></div>


<div class="container stats hidden-sm sc-xs-visible {{ $scholarship->active ? '' : 'opacity04'}}">
    <div class="col-lg-11 box-in sc-t-grey row ">

        <div class="col-md-4 col-sm-6  col-xs-12 col-lg-4 colmn ">
            {{--col-md-offset-2 col-lg-offset-2--}}
            <span class="col-xs-7  col-sm-10  col-md-7 col-lg-7  first-col">
                <div class="margin-top-10">  <i class="fa fa-flag-o margin-right-10"></i>@lang('scholarship_view.top.end'):</div>
                <div class="margin-top-10">  <i class="fa fa-calendar margin-right-10"></i>@lang('scholarship_view.top.exam_date'):</div>
            </span>
            <span class="col-xs-5 col-sm-2 col-md-5 col-lg-5 align-right">


                <div class="margin-top-10">@{{scholarship.end}}</div>
                @if($scholarship->exam)
                    <div class="margin-top-10">{{Carbon\Carbon::parse($scholarship->exam_date)->format('d-m-Y')}}</div>
                @else
                    <div> - </div>
                @endif


            </span>

        </div>

        <div class="col-md-4  col-xxxs-12 col-sm-6 col-xs-12 col-lg-4 colmn ">
            {{--col-lg-offset-1--}}
            <span class=" col-xxxs-7 col-xs-8 col-sm-7  col-md-7 col-lg-6  ">
                <div class="margin-top-10">  <i class="fa fa-thumb-tack margin-right-10"></i>@lang('scholarship_view.top.posted'):</div>
                <div class="margin-top-10">  <i class="fa fa-pencil-square-o margin-right-10"></i>@lang('scholarship_view.edit.limit'):</div>

            </span>
            <span class="col-xxxs-5 col-xs-4 col-sm-5 col-md-5 col-lg-5 align-right">
                <div class="margin-top-10">@{{scholarship.created}}</div>
                 <div class="margin-top-10" >{{ $scholarship->admissions_limit }}</div>

            </span>

        </div>

        <div class="col-md-4 col-sm-6 col-xs-12 col-lg-4 ">
            {{--col-lg-offset-1--}}
            <span class=" col-xxxs-7 col-xs-8 col-sm-7  col-md-7 col-lg-6">
                 <div class="margin-top-10" ng-if="scholarship.length > 5">  <i class="fa fa-pencil margin-right-10"></i>@lang('scholarship_view.top.admission'):</div>
                <div class="margin-top-10" ng-if="scholarship.interested > 5">  <i class="fa fa-thumbs-o-up margin-right-10"></i>@lang('scholarship_view.top.interested'):</div>
            </span>
            <span class=" col-xxxs-5 col-xs-4 col-sm-5 col-md-5col-lg-4 align-right" >
                <div class="margin-top-10" ng-if="scholarship.length > 5">@{{scholarship.length}}</div>
                <div class="margin-top-10" ng-if="scholarship.interested > 5">@{{scholarship.interested}}</div>

            </span>

        </div>
    </div>
</div>






<div class="container stats sc-xs-hidden hidden-md hidden-lg {{ $scholarship->active ? '' : 'opacity04'}}">
    <div class="box-in sc-t-grey  ">


        <div class="col-sm-5  col-xs-7 colmn">
            <span class=" col-sm-7   col-xs-6">
                 <div class="">  <i class="fa fa-calendar margin-right-10"></i>@lang('scholarship_view.top.exam_date'):</div>
                <div class="margin-top-10">  <i class="fa fa-thumb-tack margin-right-10"></i>@lang('scholarship_view.top.posted'):</div>
                <div class="margin-top-10">  <i class="fa fa-flag-o margin-right-10"></i>@lang('scholarship_view.top.end'):</div>

            </span>
            <span class="col-sm-5  col-xs-5 align-right">
                 <div class="">@{{scholarship.exams}}</div>
                <div class="margin-top-10">@{{scholarship.created}}</div>
                <div class="margin-top-10">@{{scholarship.end}}</div>

            </span>

        </div>

        <div class="col-sm-4  col-xs-5  ">
            <span class="col-sm-10  col-xs-10 first-col">
                <div class="">  <i class="fa fa-pencil-square-o margin-right-10"></i>@lang('scholarship_view.top.exams'):</div>
                <div class="margin-top-10" ng-if="scholarship.length > 5">  <i class="fa fa-pencil margin-right-10"></i>@lang('scholarship_view.top.admission'):</div>
                <div class="margin-top-10" ng-if="scholarship.interested > 5">  <i class="fa fa-thumbs-o-up margin-right-10"></i>@lang('scholarship_view.top.interested'):</div>

            </span>
            <span class="col-sm-1 col-xs-1 align-right">
                      <div class="" >
                          @if($scholarship->exam)
                              @lang('scholarship_view.yes')
                          @else
                              @lang('scholarship_view.no')
                          @endif
                      </div>
                <div class="margin-top-10" ng-if="scholarship.length > 5">@{{scholarship.length}}</div>
                <div class="margin-top-10" ng-if="scholarship.interested > 5">@{{scholarship.interested}}</div>

            </span>

        </div>

    </div>
</div>




<div class="degra {{ $scholarship->active ? '' : 'opacity04'}}">

<div class="container back {{ $scholarship->active ? '' : 'opacity04'}}">

    @if($scholarship->active)
        <div class=" buttons centered-text">
            @if(auth()->check())
                @if(auth()->user()->role != 'school' && auth()->user()->role != 'teacher')
                    @if($activeDate)
                        <span class="margin-right-20">
                            <a href="">
                                @if(auth()->check() && auth()->user()->role == 'student' && auth()->user()->interestedIn($scholarship->id))
                                    <button id="button" type="button" ng-click="interested(scholarship.id)" class="sch-button sc-button-landing sc-button sc-dark-green sc-t-white" style="background-color: #aaa;">
                                        <i id="icon" class="fa fa-thumbs-up margin-right-10 margin-left-5" aria-hidden="true"></i>
                                        <span id="text" ng-init="check(scholarship)">@lang('scholarship_view.top.interested_yes')</span>
                                    </button>
                                @else
                                <button id="button" type="button" ng-click="interested(scholarship.id)" class="sch-button sc-button-landing sc-button sc-dark-green sc-t-white">
                                    <i id="icon" class="fa fa-thumbs-o-up margin-right-10 margin-left-5" aria-hidden="true"></i>
                                    <span id="text" ng-init="check(scholarship)">@lang('scholarship_view.top.interested_button')</span>
                                </button>

                                @endif
                            </a>
                        </span>
                        @if(!auth()->user()->checkAdmission($scholarship))
                            @if($scholarship->admissions_limit > 0 && auth()->user()->role != 'admin' && auth()->user()->info->admissions_limit > 0)
                                <a href="/public/scholarship/admission/{{$scholarship->id}}">
                                    <button type="button" class="sch-button sc-button sc-orange sc-t-white" style="margin-right: 0 ">
                                        <i class="fa fa-file-text-o margin-right-10" aria-hidden="true"></i>
                                        @lang('scholarship_view.top.admission_button')
                                    </button>
                                </a>
                            @else
                                <a href="">
                                    <button type="button" class="sch-button sc-button sc-orange sc-t-white" data-toggle="modal" data-target="#modalNoApply">
                                        <i class="fa fa-file margin-right-10" aria-hidden="true"></i>
                                        @lang('scholarship_view.top.admission_button')
                                    </button>
                                </a>
                            @endif

                        @else
                            <a href="">
                                <button disabled="true" type="button" class=" sch-button sc-button sc-t-white  applied " style="background: #87b0be">
                                    <i class="fa fa-file-text-o margin-right-10" aria-hidden="true" ></i>
                                    @lang('scholarship_view.top.admission_past')
                                </button>
                            </a>
                        @endif
                    @else

                        <span class="margin-right-20">
                            @lang('scholarship_view.top.ended_text')

                        </span>
                    @endif

                @endif
            @else
                <span class="margin-right-20" >
                        <a href="{{ url('login') }}">
                            <button type="button" style=""
                                           class="sch-button sc-button-landing sc-button sc-dark-green sc-t-white">
                                <i class="fa fa-thumbs-o-up margin-right-10 margin-left-5" aria-hidden="true"></i>
                                <span>@lang('scholarship_view.top.interested_button')</span>
                            </button>
                        </a>
                </span>

                <a href="{{ url('login') }}"><button type="button" class="sch-button sc-button sc-orange sc-t-white" style="margin-right: 0"><i class="fa fa-file-text-o margin-right-10" aria-hidden="true"></i> @lang('scholarship_view.top.admission_button') </button></a>



            @endif
        </div>
    @endif


    <!-- ========== 1 ============= -->
    <div class="scholar-box">
        <div class="centered-text hex-box-left">
                <img class="hex" src="/new/img/hex01.png" alt="">
                @if(!$scholarship->multiple)
                    <img class="hex-in" style="margin-top: -110px;" src="/panel/assets/images/steps/{{$scholarship->study->section[0]->name}}.png" alt="">
                @else
                    <img class="hex-in" style="margin-top: -110px;" src="{{ $scholarship->sectionIcon }}" alt="">
                @endif
        </div>
        <div class="xs-hex-box-left">
            <img class="hex-in-xs" src="/new/img/hex01upb.png" alt="">
        </div>
        <div class="box-left">
            <div class="title">

                @lang('scholarship_view.cards.study')
                <br>
                @if($scholarship->multiple)
                 @if(count($scholarship->multipleStudies) < 3)
                <ul>
                    @foreach($scholarship->multipleStudies as $study)
                        <div>
                            {{$study->name}},
                        </div>
                    @endforeach
                </ul>
                    @else
                        @lang('scholarship_view.top.multiple'):  {{count($scholarship->multipleStudies)}}
                        @endif
                @else
                    {{ $scholarship->study->name}}
                @endif
            </div>
            <div class="text">
                @lang('scholarship_view.cards.study_message1') {{ $scholarship->level->name }}
                @if(!$scholarship->multiple)
                    @lang('scholarship_view.cards.study_message2')
                  {{ $scholarship->study->name}}.
                @else

                    @lang('scholarship_view.cards.study_message3')
                    @foreach($scholarship->multipleStudies as $key => $study)
                        <div>
                            {{$key + 1}}) {{$study->name}},
                        </div>
                    @endforeach
              @endif
            </div>
        </div>
    </div>

    <!-- ========== 2 ============= -->
    <div class="scholar-box">
        <div class="centered-text hex-box-right">
                <img class="hex" src="/new/img/hex02.png" alt="">
                <img class="hex-in" style=" margin-top: -115px;"  src="{{$scholarship->criteria->icon}}"  alt="">
        </div>
        <div class="xs-hex-box-right">
            <img class="hex-in-xs" src="/new/img/hex02upb.png" alt="">
        </div>
        <div class="box-right">
            <div class="title right" style="">
                {{ trans('seeder.criteria.' . $scholarship->criteria->id) }}
            </div>
            <div class="text-right" style="" >
                @lang('seeder.criteriaInfo.' . $scholarship->criteria->id)

            </div>
            <div class="clearfix"></div>
        </div>

    </div>

    <!-- ========== 3 ============= -->
    <div class="scholar-box">
        <div class="centered-text hex-box-left">
            <img class="hex"  src="/new/img/hex03.png" alt="">
            <img class="hex-in" style=" margin-top: -118px;"  src="/panel/assets/images/steps/terms.png" alt="">
        </div>
        <div class="xs-hex-box-left">
            <img class="hex-in-xs" src="/new/img/hex03upb.png" alt="">
        </div>
        <div style="" class="box-left">
            <div class="title">
                @lang('scholarship_view.cards.terms')
            </div>
            <div class="text">
                <?php echo $scholarship->terms; ?>

            </div>
        </div>
    </div>

    <!-- ========== 4 ============= -->
    <div class="scholar-box">
        <div class="centered-text hex-box-right">
                <img class="hex"  src="/new/img/hex04.png" alt="">
                <img class="hex-in"  style="margin-top: -115px;"  src="{{ $scholarship->financial->icon}}" alt="">
        </div>
        <div class="xs-hex-box-right">
            <img class="hex-in-xs" src="/new/img/hex04upb.png" alt="">
        </div>
        <div style="" class="box-right">
            <div class="title right">
                {{ trans('seeder.financial.' . $scholarship->financial->id )}} {{ $scholarship->financial_amount }} {{ trans('seeder.financialMetric.' . $scholarship->financial->id) }}
            </div>
            <div class="text-right">
                 @lang('seeder.financialInfo.' . $scholarship->financial->id)
            </div>
            @if($scholarship->price)
                <div class="text-right">
                    Συνολικα Δίδακτρα {{ $scholarship->price }}€
                </div>
            @endif
            <div class="clearfix"></div>
        </div>


    </div>
</div>
</div>


<!-- ====== Modal NoApply =======-->
<div id="modalNoApply" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none; top: 100px;">
    <div class="modal-dialog" >
        <div class="modal-content modalNoApplyContent" style="padding: 0; border: none; border-radius: 5px; margin-left: auto; margin-right: auto;">

            <div class="panel " style="background-color: #324c5a; height: 100px; border-bottom-left-radius: 0; border-bottom-right-radius: 0;">
                <div class="panel-heading" style="height: 55px; color: #fff">
                    <button type="button" class="btn pull-right" data-dismiss="modal" style="background-color: transparent" >
                        x

                    </button>
                    <img src="/new/img/logoNX-light-m.png" alt="scholio logo" class="pull-left" height="80px">
                    <div style="margin: 30px 0 0 70px; font-size: 130%"> @lang('scholarship_view.noApplyModal.title')</div>
                    <h3 class="pull-left panel-title" style="margin: 8px 0 0 15px;"></h3>
                </div>

            </div>
            <div class="panel-body" style="min-height: 110px;">

                <div style="text-align: justify">
                    @lang('scholarship_view.noApplyModal.text')
                </div>
            </div>

            <div class="modal-footer" style="padding: 20px;">
                <button type="button" class="btn btn-default" data-dismiss="modal">@lang('panel/schools/navigation.close')</button>
            </div>
        </div>
    </div>
</div>
<!-- modal -->



<!-- Footer -->
<div class="{{ $scholarship->active ? '' : 'opacity10'}}">
    @include('public.footer')
</div>


</body>


<script>
    angular.module("scholarshipApp",[])
            .controller("scholarshipCtrl",function ($scope,$http) {

                 $scope.init = function(){
                    $scope.scholarship = $http.get("/api/scholarship/get/{{$scholarship->id}}", {
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'X-CSRF-TOKEN': window.Scholio.csrfToken
                                    }
                                })
                            .success(function (data) {
                                 console.log(data);
                                $scope.scholarship=data

                            })


                }

                $scope.interested = function(id){
                    $scope.interested1 = $http.post('/api/interested/save',{'scholarship' : id}, {
                                headers: {
                                    'X-Requested-With': 'XMLHttpRequest',
                                    'X-CSRF-TOKEN': window.Scholio.csrfToken
                                }
                            })
                            .success(function(data)   {
                                console.log(data,'data');
                                if(data == 'YES'){
                                    $('#text').text(" @lang('scholarship_view.top.interested_yes') ")
                                    $('#icon').toggleClass('fa-thumbs-o-up fa-thumbs-up');
                                    $('#button').css('background-color', '#aaa')
                                }else{
                                    $('#text').text(" @lang('scholarship_view.top.interested_button')")
                                    $('#icon').toggleClass('fa-thumbs-up fa-thumbs-o-up');
                                    $('#button').css('background-color', '#008da5')
                                }

                            });
                }

                // $scope.check = function(scholarship){

                //     setTimeout(function() {
                //         if(scholarship.userInterested){
                //             $('#icon').toggleClass('fa-thumbs-up fa-thumbs-o-up');
                //             $('#text').text('@lang('profile.scholarship.button.like')')
                //             $('#button').css("background-color", "#ccc");
                //         }
                //         console.log(scholarship)
                //     }, 150);
                // }



            })
</script>
</html>