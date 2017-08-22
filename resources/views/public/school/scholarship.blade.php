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


    <!-- Angular js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.8/angular.min.js"></script>



    <script src="/new/js/profile.js"></script>



    <script>
        window.Scholio = <?php echo json_encode([
    'csrfToken' => csrf_token(),
]); ?>
    </script>

    <style>
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
    </style>
</head>
<body data-spy="scroll" data-target=".spy" data-offset="270" id="home"  ng-app="scholarshipApp"  ng-controller="scholarshipCtrl" data-ng-init="init()" ng-cloak
      class="">
<!-- Για ληγμενες -->


<!-- Scholio Header -->



<header class="spy navbar navbar-fixed-top navbar-scroll sc-landing-header {{ $scholarship->active ? '' : 'opacity10'}}" id="header" style="z-index: 2">

    <div class="container" style="">
        <div class="row">

            <div class="col-md-1 visible-lg visible-md nav-web">
                <!-- Scholio Branding -->
                <a class="sc-landing-brand" href="{{ url('/') }}">
                    <div class="sc-landing-logo-sticky" style=" padding-top: 15px">
                        <img src="/new/img/logo.png" class="sc-logo" alt="scholio logo">
                    </div>
                </a>
            </div>

            <div class="col-xs-6  visible-sm visible-xs">
                <div class="nav-mobile">
                    <a class="" href="{{ url('/') }}">
                        <div class="navbar-brand  sc-landing-logo-sticky">
                            <img src="/new/img/logo-m.png" class="sc-logo" alt="scholio logo">
                        </div>
                    </a>
                </div>
            </div>
            <!-- Scholio sMenu -->

            <!-- Large Menu -->
            <div class="col-md-11 visible-md visible-lg" >
                <ul class="nav navbar-nav navbar-right sc-landing-menu" >

                    <li class="langDropWhite" style="margin-top: 16px">
                        <form method="GET" id="langForm">
                            <select onchange="changeLang(this)" class="selectpicker select-white landDrop" data-live-search="false" data-mobile="false" data-size='2' data-width="100%" data-style="btn-white">
                                <option style="color: black" data-icon="fa" value="en" {{ request()->cookie('lang')=='en' ? 'selected':'' }}>&nbsp; ENG</option>
                                <option style="color: black" data-icon="fa" value="el" {{ request()->cookie('lang')=='el' ? 'selected':'' }}>&nbsp; GR</option>
                            </select>
                        </form>
                    </li>


                    {{--<li class="sc-landing-menu-item"><a href="#sxetika" >@lang('scholarship_view.navigation.info')</a></li>--}}
                    @if(auth()->check())
                        <li><a href="{{ url('/dashboard') }}"><button type="button" class="sc-button-landing sc-button sc-orange sc-t-white">@lang('main.navigation.admin')</button></a></li>
                        <li><a href="{{ url('/out') }}"><button type="button" class="sc-button-landing sc-button sc-dark-green sc-t-white ">@lang('main.navigation.logout')</button></a></li>
                    @else
                        <li><a href="{{ url('/register/role') }}"><button type="button" class="sc-button-landing sc-button sc-green sc-t-white">@lang('main.navigation.register')</button></a></li>
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
    <img class="trophy" src="/new/img/trophy3.png" alt="">
    {{--<img class="grad" src="/new/img/Graduation.png" alt="">--}}
    <div class="Hero1"> @lang('scholarship_view.top.title'): </div>
    <div class="Hero2"> <a class="school-title" href="/public/profile/{{ $scholarship->school->id}}" target="_blank">{{ $scholarship->school->name() }}</a></div>
</div>
<div class="line {{ $scholarship->active ? '' : 'opacity04'}}"></div>


<div class="container stats hidden-sm sc-xs-visible {{ $scholarship->active ? '' : 'opacity04'}}">
    <div class="col-lg-11 box-in sc-t-grey row ">
        <div class="col-md-4 col-sm-6  col-xs-12 col-lg-3 colmn ">
            {{--col-md-offset-2 col-lg-offset-2--}}
            <span class="col-xs-10  col-sm-10  col-md-10 col-lg-9  first-col">
                <div class="">  <i class="fa fa-pencil margin-right-10"></i>@lang('scholarship_view.top.admission'):</div>
                <div class="margin-top-10">  <i class="fa fa-thumbs-o-up margin-right-10"></i>@lang('scholarship_view.top.interested'):</div>
            </span>
            <span class="col-xs-2 col-sm-2 col-md-1 col-lg-3 align-right">
                <div class="">@{{scholarship.length}}</div>
                <div class="margin-top-10">@{{scholarship.interested}}</div>
            </span>

        </div>

        <div class="col-md-4  col-xxxs-12 col-sm-6 col-xs-12 col-lg-4 colmn ">
            {{--col-lg-offset-1--}}
            <span class=" col-xxxs-7 col-xs-8 col-sm-7  col-md-7 col-lg-6  ">
                <div class="">  <i class="fa fa-thumb-tack margin-right-10"></i>@lang('scholarship_view.top.posted'):</div>
                <div class="margin-top-10">  <i class="fa fa-flag-o margin-right-10"></i>@lang('scholarship_view.top.end'):</div>
            </span>
            <span class="col-xxxs-5 col-xs-4 col-sm-5 col-md-5 col-lg-5 align-right">
                <div class="">@{{scholarship.created}}</div>
                <div class="margin-top-10">@{{scholarship.end}}</div>
            </span>

        </div>

        <div class="col-md-4 col-sm-6 col-xs-12 col-lg-5 ">
            {{--col-lg-offset-1--}}
            <span class=" col-xxxs-7 col-xs-8 col-sm-7  col-md-7 col-lg-6">
                <div class="">  <i class="fa fa-pencil-square-o margin-right-10"></i>@lang('scholarship_view.top.exams'):</div>
                <div class="margin-top-10">  <i class="fa fa-calendar margin-right-10"></i>@lang('scholarship_view.top.exam_date'):</div>
            </span>
            <span class=" col-xxxs-5 col-xs-4 col-sm-5 col-md-5col-lg-4 align-right" >
                <div class="" >
                    @if($scholarship->exam)
                        @lang('scholarship_view.yes')
                    @else
                        @lang('scholarship_view.no')
                    @endif

                </div>
                <div class="margin-top-10">
                    @{{scholarship.exams}}
                </div>
            </span>

        </div>
    </div>
</div>



<div class="container stats sc-xs-hidden hidden-md hidden-lg {{ $scholarship->active ? '' : 'opacity04'}}">
    <div class="box-in sc-t-grey  ">
        <div class="col-sm-4  col-xs-5 colmn ">
            <span class="col-sm-10  col-xs-10 first-col">
                <div class="">  <i class="fa fa-pencil margin-right-10"></i>@lang('scholarship_view.top.admission'):</div>
                <div class="margin-top-10">  <i class="fa fa-thumbs-o-up margin-right-10"></i>@lang('scholarship_view.top.interested'):</div>
                <div class="margin-top-10">  <i class="fa fa-pencil-square-o margin-right-10"></i>@lang('scholarship_view.top.exams'):</div>
            </span>
            <span class="col-sm-1 col-xs-1 align-right">
                <div class="">@{{scholarship.length}}</div>
                <div class="margin-top-10">@{{scholarship.interested}}</div>
                  <div class="margin-top-10" >
                      @if($scholarship->exam)
                          @lang('scholarship_view.yes')
                      @else
                          @lang('scholarship_view.no')
                      @endif</div>
            </span>

        </div>

        <div class="col-sm-5  col-xs-7">
            <span class=" col-sm-7   col-xs-6">
                <div class="">  <i class="fa fa-thumb-tack margin-right-10"></i>@lang('scholarship_view.top.posted'):</div>
                <div class="margin-top-10">  <i class="fa fa-flag-o margin-right-10"></i>@lang('scholarship_view.top.end'):</div>
                <div class="margin-top-10">  <i class="fa fa-calendar margin-right-10"></i>@lang('scholarship_view.top.exam_date'):</div>
            </span>
            <span class="col-sm-5  col-xs-6 align-right">
                <div class="">@{{scholarship.created}}</div>
                <div class="margin-top-10">@{{scholarship.end}}</div>
                <div class="margin-top-10">@{{scholarship.exams}}</div>
            </span>

        </div>

    </div>
</div>




<div class="degra {{ $scholarship->active ? '' : 'opacity04'}}">

<div class="container back {{ $scholarship->active ? '' : 'opacity04'}}">

    @if($scholarship->active)
        <div class=" buttons centered-text">
            @if(auth()->check())
                @if(auth()->user()->role != 'school')
                    <span class="margin-right-20">
                        <a href=""><button id="b@{{scholarship.id}}" type="button" ng-click="interested(scholarship.id)"
                                           class="sch-button sc-button-landing sc-button sc-dark-green sc-t-white">
                                <i id="i@{{scholarship.id}}" class="fa fa-thumbs-o-up margin-right-10 margin-left-5" aria-hidden="true"></i>
                                <span id="t@{{scholarship.id}}" ng-init="test(scholarship)">@lang('scholarship_view.top.interested_button')</span>
                            </button>
                        </a>
                    </span>
                @endif
            @else
                <span class="margin-right-20">
                        <a href="{{ url('login') }}"><button type="button"
                                           class="sch-button sc-button-landing sc-button sc-dark-green sc-t-white">
                                <i class="fa fa-thumbs-o-up margin-right-10 margin-left-5" aria-hidden="true"></i>
                                <span>@lang('scholarship_view.top.interested_button')</span>
                            </button>
                        </a>
                    </span>
            @endif

            <span class="">
                @if(auth()->check())
                    @if(auth()->user()->role != 'school')
                        @if(!auth()->user()->checkAdmission($scholarship))
                            <a href="/public/scholarship/admission/{{ auth()->user()->id }}/{{$scholarship->id}}"><button type="button" class="sch-button sc-button sc-orange sc-t-white"><i class="fa fa-file-text-o margin-right-10" aria-hidden="true"></i> @lang('scholarship_view.top.admission_button') </button></a>
                        @else
                            <a href=""><button disabled="true" type="button" class="sch-button sc-button sc-t-white"><i class="fa fa-file-text-o margin-right-10" aria-hidden="true"></i> @lang('scholarship_view.top.admission_past') </button></a>
                        @endif
                    @endif
                @endif
            </span>
        </div>
    @endif


    <!-- ========== 1 ============= -->
    <div class="scholar-box">
        <div class="centered-text hex-box-left">
                <img class="hex" src="/new/img/hex01.png" alt="">
                <img class="hex-in" style="margin-top: -110px;"  src="/panel/assets/images/steps/{{$scholarship->study->section[0]->name}}.png" alt="">
        </div>
        <div class="xs-hex-box-left">
            <img class="hex-in-xs" src="/new/img/hex01upb.png" alt="">
        </div>
        <div class="box-left">
            <div class="title">

                @lang('scholarship_view.cards.study') 
                <br>
                @if($scholarship->multiple)
                <ul>
                    @foreach($scholarship->multipleStudies as $study)
                        <li>{{$study->name}}</li>
                    @endforeach
                </ul>
                @else
                    {{ $scholarship->study->name}}
                @endif
            </div>
            <div class="text">
                @lang('scholarship_view.cards.study_message1') {{ $scholarship->level->name }}  @lang('scholarship_view.cards.study_message2')
                  {{ $scholarship->study->name}} .
            </div>
        </div>
    </div>

    <!-- ========== 2 ============= -->
    <div class="scholar-box">
        <div class="centered-text hex-box-right">
                <img class="hex" src="/new/img/hex02.png" alt="">
                <img class="hex-in" style=" margin-top: -115px;"  src="/panel/assets/images/steps/{{$scholarship->criteria->name}}.png"  alt="">
        </div>
        <div class="xs-hex-box-right">
            <img class="hex-in-xs" src="/new/img/hex02upb.png" alt="">
        </div>
        <div class="box-right">
            <div class="title right" style="">
                {{ $scholarship->criteria->name }}
            </div>
            <div class="text-right" style="" >
                @lang('scholarship_view.cards.scholarship_message')
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
                {{ $scholarship->terms }}

            </div>
        </div>
    </div>

    <!-- ========== 4 ============= -->
    <div class="scholar-box">
        <div class="centered-text hex-box-right">
                <img class="hex"  src="/new/img/hex04.png" alt="">
                <img class="hex-in"  style="margin-top: -115px;"  src="/panel/assets/images/steps/{{ $scholarship->financial->plan}}.png" alt="">
        </div>
        <div class="xs-hex-box-right">
            <img class="hex-in-xs" src="/new/img/hex04upb.png" alt="">
        </div>
        <div style="" class="box-right">
            <div class="title right">
                {{ $scholarship->financial->plan}} {{ $scholarship->financial_amount }} {{ $scholarship->financial->metric}}
            </div>
            <div class="text-right">
                @lang('scholarship_view.cards.terms')  {{ $scholarship->financial->plan}}  {{ $scholarship->financial_amount }} {{ $scholarship->financial->metric}}.
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
</div>

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


            })
</script>
</html>