<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="fb:pages" content="934370089973049" />

    <title>schol.io | Διεκδίκησε την υποτροφία σου.</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/new/img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/new/img/favicon-144.ico">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/new/img/favicon-72.ico">
    <link rel="apple-touch-icon-precomposed" href="/new/img/favicon-57.ico">


    <!--====== CSS  Styles =======-->
    @include('public.styles')

    <!-- Profile  CSS -->
    <link rel="stylesheet" href="/new/css/scholarship-profile.css" >

    <!-- Polymer Float Form CSS -->
    <link rel="stylesheet" href="/new/css/jquery.polymer-form.min.css" >

    <!-- jQuery DatePicker Themes CSS -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!-- Scholio Datepicker  CSS -->
    <link rel="stylesheet" href="/new/css/scholio-datepicker.css" >

    <!-- Results CSS -->
    {{--<link href="{{asset('new/css/results.css')}}" rel="stylesheet">--}}



    <!-- jQuery js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <!-- Bootstrap js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Bootstrap Select js  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.4/js/bootstrap-select.min.js"></script>

    <!-- Angular js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular.min.js"></script>

    <!-- Polymer Float Input Form js -->
    <script src="/new/js/jquery.polymer-form.min.js"></script>

    <!-- jQuery UI for datePicker -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!-- javascript Results -->
    <script src="{{asset('/new/js/results.js')}}"></script>


    <script>
        // window.SelectedLocation = "{{ session()->pull('location') }}"
        window.Search = "{{ session('search') }}"
    </script>


    <style>
        .trophy-img{height: 45px; margin-top: 5px}
        .upper-box{background-color: #008DA5; height: 320px; border-radius: 4px; border-bottom-left-radius: 0; border-bottom-right-radius: 0; position: relative}
        .upper-title{ margin-top: -20px; margin-left: 60px;}

        .title-to{ font-size: 140%; color: #fafafa; font-weight: 300; padding: 120px 0 0 70px;}
        /*.inner-box{ background-color: #F1F4F5; border: 1px solid #ddd; border-radius: 26px; height: 500px; margin-top: 15px;*/
        /*box-shadow: -5px 0  4px #fff, 0 -5px  4px #fff, 5px 0 4px #fff;*/
        /*border-bottom-left-radius:17px; border-bottom-right-radius:17px;*/
        /*}*/

        .inner-box{ background-color: #fff; padding: 0 70px 70px 70px; margin-bottom: 50px;}

        .inner-section{ margin: 80px 0 0 0; padding: 5px; border: 1px solid #aaa; border-radius: 8px; background-color: #F1F4F5;
        }

        .demo-form{ margin: 0!important; font-weight: 300!important;}
        .polymer-form label {color: #008DA5!important; font-size:110%!important; font-weight: 300!important; display: block!important; padding-bottom: -40px!important; margin-left: 11px; }
        .ad-input{font-size: 100%!important; padding-left: 25px!important;}
        .icon-inp{position: absolute; top: 33px; color: #008DA5}
        .icon-title{margin-right: 10px;}
        .section-text{color: #008DA5; font-size: 110%; font-weight: 300; margin-left: 10px; margin-top: -25px;
            border: 1px solid #aaa; border-radius: 6px; padding: 7px; min-width: 190px; max-width: 250px; background-color: #fafafa;
            box-shadow: 0 0 9px #aaa}

        .section2-container{}
        .avatar-container{margin-top: 15px; margin-right: 0; padding-right: 0; }
        .avatar{height: 43px; width: auto;  margin-top: -2px}
        .avatarUp{height:90px; width: auto; position: absolute; top: 270px; left: 70px; z-index: 1; box-shadow: 0 0 15px #222; border-radius: 6px;
        }

        .col-left{padding-left: 0}
        .col-right{padding-right: 0}

        .drop-title{color: #008DA5; font-weight: 300}

        .upload{height: 30px; width: 36px; background-color: #000; opacity: 0.6; position: absolute; bottom: -40px; left: 124px; z-index: 2; border-radius: 5px;}
        .fa-img-up{color: #FD6A33; font-size: 130%;  position: relative; top: 50%; left: 50%;  transform: translateY(-50%) translateX(-50%);   }
        .tool{cursor: pointer; }


        /*  ========= TextArea Input Css    ========= */
        .notes {
            resize: none;
            background-image:
                    -webkit-linear-gradient(left, #F1F4F5 10px, transparent 10px),
                    -webkit-linear-gradient(right, #F1F4F5 10px, transparent 10px),
                    -webkit-linear-gradient(#F1F4F5 30px, #bbb 30px, #bbb 31px, #F1F4F5 31px);
            /*background-image: linear-gradient(left, white 10px, transparent 10px), linear-gradient(right, white 10px, transparent 10px), linear-gradient(white 30px, #ccc 30px, #ccc 31px, white 31px);*/
            background-size: 100% 100%, 100% 100%, 100% 31px;
            /*border: 1px solid #ccc;*/
            /*border-radius: 8px;*/
            border: none;
            /*box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);*/
            line-height: 31px;
            padding: 8px;
            width: 100%;
            /*max-width: 100%;*/
            min-height: 240px;
            max-height: 100%;
            /*max-height: 210px;*/
            margin-top: 30px;

        }

        .notes:focus {
            outline: none;
        }
        /*  ======================================= */

        .info-text{ margin: 20px 0 0 15px;  color: #888; font-weight: 400; }

        ::-webkit-input-placeholder { /* WebKit, Blink, Edge */
            font-weight: 300;
        }
        :-moz-placeholder { /* Mozilla Firefox 4 to 18 */
            opacity:  1;
        }
        ::-moz-placeholder { /* Mozilla Firefox 19+ */
            opacity:  1;
        }
        :-ms-input-placeholder { /* Internet Explorer 10-11 */

        }


        .euro{position: absolute; margin-left: 150px; top: 30px; font-weight: 300; color: #bbb}


        .send-button{ width: 210px; }
        .send-button .sc-button { margin-top: 20px; width: 100%;}
        select {
            /*text-shadow: 0 0 0 #000;*/
            /*color: #008DA5!important;*/
            color: #000;
            font-weight: 300;
            border:0;
            width: 60px; height: 36px;
            background-color: #F1F4F5;
        }
        .select-polyteknos{ margin: 5px 0 10px 15px;}

        .select-icon,.select-icon2{margin-top: 3px;}
        /*  ======================================= */

        @media (min-width:992px) and (max-width: 1200px) {
            .cont1{padding-left: 20px;}
        }

        @media (min-width:992px) and (max-width: 1199px) {
            .select-icon2{margin-top: 18px;}
        }


        @media (min-width: 768px) and (max-width: 991px) {
            .col-left, .col-right{padding: 0}
            .cont1{padding-left: 28px;}
            .select-icon2{margin-top: 18px;}
        }

        @media  (max-width: 767px) {
            .upper-title{margin-top: -50px}
            .icon-inp{top: 5px;}
            .icon-inp1{top: 35px}
            .input-container{margin-bottom: 40px; margin-top: 10px;}
            /*.outer{ padding: 15px;}*/
            .inner-box{ padding: 0 15px 15px 15px;}
            .col-left, .col-right{padding: 0}
            .avatar{height: 51px;}
            .avatar-container{width: 12%; float: left;}
            .cont1{width: 88%; float: left; margin-bottom: 20px;}
            .clear-fix-sm{clear: both; }
            .select-polyteknos{ top: 0;  left: 36px;}
            .select-icon,.select-icon2{margin-top: 26px;}

        }
        @media  (max-width: 600px) {
            .icon-inp{top: 5px;}
            .icon-inp1 {top: 33px }
            /*.outer{ padding: 5px;}*/
            .inner-box{ padding: 0 5px 8px 5px; }
            .title-to{  padding: 120px 0 0 15px;}
            .avatar-container{width: 10%; }
            .avatarUp{left: 20px}
            .upload{left: 74px}
            .cont1{margin-left: 6%; width: 84%; }
        }


        @media  (max-width:480px) {
            .sch-name{display: block}
        }


        @media  (max-width:496px) {
            .select-icon2{margin-top: 48px;}
        }

        @media  (max-width: 455px) {
            .avatarUp{left:0; right: 0; text-align: center; margin-left: auto; margin-right: auto; top: 195px}
            .fa-img-up,.upload{position: absolute; text-align: center; left:0; right: 0; margin-left: 53%; margin-right: auto; }
            .upload{bottom: -45px;}
            .upper-box{height: 240px; margin-top: 75px;}
            .title-to{margin-left: -20px; padding-top: 110px; }
            .trophy-container{text-align:center;
                margin-left: auto;  margin-right: auto;
                float: none; }
            .trophy-img{width: 90px; height: auto;  margin-top: -160px;  }
            .upper-title{font-size: 80%; clear: both; display: block; margin-left: auto; margin-right: auto}
            .avatar{height: 50px; margin-top: 1px;}
            .avatar-container{width: 8%; }
            .cont1{margin-left: 13%; width: 79%; }
            .select-polyteknos{ top: 0;  left: 35px;}
            select{
                color: #000;
                font-weight: 300;
                height: 28px;
                padding: 0;
            }
        }

        @media  (max-width:340px) {
            .title-to{  padding-top: 100px;}
        }



        /* =========TOOLTIP=========*/
        .relative {
            position: relative;
        }

        .tooltip {
            position: absolute; bottom: -25px; left: 140px; z-index: 1;
            text-align: center;
            font-weight: 300;
            visibility: hidden;

            width: 180px; background-color: transparent;
            color: #777;
            border-radius: 5px;
            padding: 7px 15px;
            opacity: 0;
            transition: opacity 0.1s;
        }


        .tool:hover .tooltip  {
            visibility: visible;
            opacity: 1;
        }

        .tool:hover .fa-img-up  {
            zoom: 1.4;
            color: #fff;
        }


    </style>


</head>



<body data-spy="scroll" data-target=".navbar" data-offset="50" id="home"  ng-app="admissionApp"  ng-controller="admissionCtrl" data-ng-init="init()"  ng-cloak>
<!-- Scholio Header -->
<header class="spy navbar navbar-fixed-top navbar-scroll sc-landing-header {{ $scholarship->active ? '' : 'opacity10'}}" id="header" style="z-index: 5">
    <div class="container" style="">
        <div class="row scholarship-profile-nav-row">

            <div class="pull-left visible-lg visible-md nav-web ">
                <!-- Scholio Branding -->
                <a class="sc-landing-brand" href="{{ url('/') }}">
                    <div class="sc-landing-logo-sticky" style=" padding-top: 15px">
                        {{--<img src="{{asset('new/img/logo.png')}}" class="sc-logo" alt="scholio logo">--}}
                        <img src="{{asset('new/img/logoNX.webp')}}"  class="sc-logo" alt="scholio logo" style="height: 63px; padding-top: 2px;">
                    </div>
                </a>
            </div>

            <div class="col-xs-6  visible-sm visible-xs">
                <div class="nav-mobile">
                    <a class="" href="{{ url('/') }}">
                        <div class="navbar-brand  sc-landing-logo-sticky">
                            {{--<img src="{{asset('new/img/logo-m.png')}}" class="sc-logo" alt="scholio logo">--}}
                            <img src="{{asset('new/img/logoNX-m.webp')}}" class="sc-logo" alt="scholio logo" style="height: 60px; padding-top: 2px;">
                        </div>
                    </a>
                </div>
            </div>
            <!-- Scholio sMenu -->

            <!-- Large Menu -->
            <div class="pull-right visible-md visible-lg" >
                <ul class="nav navbar-nav navbar-right sc-landing-menu" >

                    <li class="langDropWhite" style="margin-top: 16px">
                        <form method="GET" id="langForm">
                            <select onchange="changeLang(this)" class="selectpicker select-white landDrop" data-live-search="false" data-mobile="false" data-size='2' data-width="100%" data-style="btn-white">
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
                            <img src="{{asset('new/img/collapse-dark2.webp')}}" alt="scholio logo"  style="height:22px; margin-top: 7px;">
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


<div class="container">

    <div>
    <form id="admissionForm" action="/admission/{{ $scholarship->id }}/save" method="POST" onsubmit="return confirm('Are you sure you want to submit?')">
    {{ csrf_field() }}
        <div class="upper-box relative" >
            <div class="" >
                <img src="{{ $user->info->avatar }}" class="avatarUp">

                <!-- ================ CHANGE PHOTO ==============  -->

                {{--<label for="avatarUpload" class="">--}}
                {{--<div class="tool">--}}
                   {{--<div class="upload"> <i class="fa fa-picture-o fa-img-up tool"></i></div>--}}
                    {{--<span class="tooltip hidden-xs"> @lang('admission.photo')</span>--}}
                    {{--<input type="file" id="avatarUpload" class="" name="avatarUpload" style="visibility: hidden;">--}}
                {{--</div>--}}
                {{--</label>--}}

            </div>

            <div class="title-to">
                <div class="trophy-container"> <img src="/new/img/trophy-fff.png" class="trophy-img" alt="">
                    <div class="upper-title">@lang('admission.apply')<span class="hidden-xxxs">@lang('admission.to')</span> <span class="sch-name">{{ $scholarship->school->name() }}</span> </div>
                </div>
            </div>
        </div>

        <div class="col-xs-12 inner-box row" style="margin-left: 0; ">
            <div class="inner-section row" style="margin-top: 100px">
                <div class="section-text centered-text">@lang('admission.candidate.info')</div>

                <div class="col-sm-6 input-container  input-container">
                        <input  type="text" label="@lang('admission.candidate.name')" name="firstName" class="demo-form ad-input" value="{{ $user->info->fname }}" required>
                        <i class="icon-inp fa fa-user-o"></i>
                </div>
                <div class="col-sm-6 input-container clear-fix-sm" >
                    <input type="text" label="@lang('admission.candidate.last-name')" name="lastName" class="demo-form ad-input" value="{{ $user->info->lname }}"  required>
                    <i class="icon-inp fa fa-user"></i>
                </div>

                <div class="col-sm-6 input-container">
                    <input type="text" label="@lang('admission.candidate.address')" name="student_address" class="demo-form ad-input" value="{{ $user->cv->student_address }}" required>
                    <i class="icon-inp fa fa-street-view"></i>
                </div>
                <div class="col-sm-6 input-container">
                    <input type="text" label="@lang('admission.candidate.city')" name="student_city" class="demo-form ad-input" value="{{ $user->cv->student_city }}" required>
                    <i class="icon-inp fa fa-map-marker"></i>
                </div>

                <div class="col-sm-6 input-container">
                    <input type="text" label="@lang('admission.candidate.email')" name="email" class="demo-form ad-input" value="{{ $user->email}}" required>
                    <i class="icon-inp fa fa-envelope"></i>
                </div>
                <div class="col-sm-6 input-container">
                    {{--<a href="tel:{{ $user->info->phone }}">--}}
                    <input type="text" label="@lang('admission.candidate.phone')" name="student_phone" class="demo-form ad-input" value="{{ $user->cv->student_phone }}" required>
                    {{--</a>--}}
                    <i class="icon-inp fa fa-phone"></i>
                </div>

                @foreach($fields as $field)
                    @if($field->category->id == 1 && $settings->{$field->slug})
                        @if($field->slug != 'student_relatives' && $field->slug != 'student_polyteknos' && $field->slug != 'student_phone' && $field->slug != 'student_address' && $field->slug != 'student_city')
                            @if($field->slug == 'student_dob')
                                <div class="col-sm-6 input-container">
                                    <input class="demo-form ad-input ll-skin-cangas" id="datepicker" size="30" value="{{ \Carbon\Carbon::parse($user->info->dob)->format('d/m/Y') }}" label="{{ trans('settings.admissions.' . $field->slug) }}" name="{{ $field->slug }}" required>
                                    <i class="icon-inp {{ $field->icon }}"></i>
                                </div>
                            @else
                                <div class="col-sm-6 input-container">
                                    <input type="text" label="{{ trans('settings.admissions.' . $field->slug) }}" name="{{ $field->slug }}" class="demo-form ad-input" value="{{ $user->cv->{$field->slug} }}" required>
                                    <i class="icon-inp {{ $field->icon }}"></i>
                                </div>
                            @endif
                        @endif
                    @endif
                @endforeach


                <div class="clearfix"></div>
                @if($settings->student_polyteknos)
                    <div class="col-sm-6 input-container">
                    <div class="drop-title">@lang('admission.candidate.multi-child')</div>

                        <div class="select-polyteknos">
                            <select name="student_polyteknos" required>
                                <option value="0" default>@lang('admission.candidate.no')</option>
                                <option value="1">@lang('admission.candidate.yes')</option>
                            </select>
                        </div>

                        <i class="icon-inp fa fa-users select-icon"></i>
                    </div>
                    @endif

                @if($settings->student_relatives)
                <div class="col-sm-6 ">
                <div class="drop-title">@lang('admission.candidate.relatives')</div>
                    <div class="select-polyteknos">
                        <select name="student_relatives" required>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>

                    <i class="icon-inp fa fa-users select-icon2"></i>
                </div>
                @endif
            </div>

            <div class="inner-section row">
                <div class="section-text centered-text">@lang('admission.parent.info')</div>
                @foreach($fields as $field)
                    @if(($field->category->id == 2 || $field->category->id == 5) && $settings->{$field->slug})
                        <div class="col-sm-6 input-container">
                            <input type="text" label="{{ trans('settings.admissions.' . $field->slug) }}" name="{{ $field->slug }}" class="demo-form ad-input" value="{{ $user->cv->{$field->slug} }}" required>
                            <i class="icon-inp {{ $field->icon }}"></i>
                        </div>
                    @endif
                @endforeach
                <div class="clearfix"></div>
                <br>
                @foreach($fields as $field)
                    @if(($field->category->id == 3 || $field->category->id == 6) && $settings->{$field->slug})
                        <div class="col-sm-6 input-container">
                            <input  type="text" label="{{ trans('settings.admissions.' . $field->slug) }}" name="{{ $field->slug }}" class="demo-form ad-input" value="{{ $user->cv->{$field->slug} }}" required>
                            <i class="icon-inp {{ $field->icon }}"></i>
                        </div>
                    @endif
                @endforeach

                <div class="clearfix"></div>
                <br>
                @foreach($fields as $field)
                    @if(($field->category->id == 4 || $field->category->id == 7) && $settings->{$field->slug})
                        <div class="col-sm-6 input-container">
                            <input  type="text" label="{{ trans('settings.admissions.' . $field->slug) }}" name="{{ $field->slug }}" class="demo-form ad-input" value="{{ $user->cv->{$field->slug} }}" required>
                            <i class="icon-inp {{ $field->icon }}"></i>
                        </div>
                    @endif
                @endforeach
            </div>

            <?php $i = 0?>
            <div class="row flex-row">
            @if($settings->skills)
                <div class="col-md-6 section2-container ">
                    <div class="inner-section">
                        <div class="section-text centered-text">   <i class="icon-title fa fa-wrench"></i>@lang('admission.skills')</div>
                        <div class="input-container">
                        <div class="info-text">@lang('admission.skills-text')</div>
                            <textarea class="notes">{{ $user->cv->skills }}</textarea>
                        </div>
                    </div>
                </div>
                <?php $i++?>
            @endif
            @if($settings->languages)
                <div class="col-md-6 section2-container ">
                    <div class="inner-section">
                        <div class="section-text centered-text">  <i class="icon-title fa fa-flag"></i>@lang('admission.languages')</div>
                        <div class=" input-container">
                        <div class="info-text">@lang('admission.languages-text')</div>
                            <textarea name="languages" class="notes" placeholder="Αγγλικά - Β1&#13;&#10;Γερμανικά - C2" required>{{ $user->cv->languages }}</textarea>
                        </div>
                    </div>
                </div>
                    <?php $i++;if ($i % 2 == 0): ?>
                        <div class="clearfix"></div>
                    <?php endif;?>
                @endif
                @if($settings->strongpoints)
                <div class="col-md-6 section2-container ">
                    <div class="inner-section" >
                        <div class="section-text centered-text">   <i class="icon-title fa fa-id-badge"></i>@lang('admission.strongpoints')</div>
                        <div class=" input-container">
                            <div class="info-text">@lang('admission.strongpoints-text')</div>
                                     <textarea name="strongpoints" class="notes" placeholder="1. Είμαι Επίμονος&#13;&#10; 2. Εργάζομαι με μέθοδο & πρόγραμμα &#13;&#10; 3. Μου αρέσει συνεχώς να βελτιώνομαι και να αποκτώ νέες δεξιότητες
                                " required>{{ $user->cv->strongpoints}}</textarea>
                        </div>
                    </div>
                </div>
                    <?php $i++;if ($i % 2 == 0): ?>
                    <div class="clearfix"></div>
                    <?php endif;?>
                @endif
                @if($settings->previous_school)
                <div class="col-md-6 section2-container ">
                    <div class="inner-section" >
                        <div class="section-text centered-text">   <i class="icon-title fa fa-graduation-cap"></i>@lang('admission.studies')</div>
                        <div class=" input-container">
                            <div class="info-text">@lang('admission.studies-text')</div>
                                <textarea name="studies" class="notes" placeholder="1. ΜΒΑ in Business Administration / Πανεπιστημιο Μακεδονίας / 2016&#13;&#10;2. Οικονομικά / Αριστοτέλειο Πανεπιστημιο θεσσαλονίκης / 2014&#13;&#10;3. 7ο Λύκειο Θεσσαλονικης / 2009
                                " required>{{ $user->cv->student_previous }}</textarea>
                        </div>
                    </div>
                </div>
                    <?php $i++;if ($i % 2 == 0): ?>
                    <div class="clearfix"></div>
                    <?php endif;?>
                @endif
                @if($settings->awards)
                <div class="col-md-6 section2-container ">
                    <div class="inner-section" >
                        <div class="section-text centered-text">   <i class="icon-title fa fa-trophy"></i>@lang('admission.accomplishments')</div>
                        <div class=" input-container">
                            <div class="info-text">@lang('admission.accomplishments-text')</div>
                                <textarea name="awards" class="notes" placeholder="1. &#13;&#10;2.&#13;&#10;3.
                                " required>{{ $user->cv->awards }}</textarea>
                        </div>
                    </div>
                </div>
                    <?php $i++;if ($i % 2 == 0): ?>
                    <div class="clearfix"></div>
                    <?php endif;?>
                @endif
                @if($settings->other_interests)
                <div class="col-md-6 section2-container ">
                    <div class="inner-section" >
                        <div class="section-text centered-text">   <i class="icon-title fa fa-paint-brush"></i>@lang('admission.interests')</div>
                        <div class=" input-container">
                            <div class="info-text">@lang('admission.interests-text')<br> <span style="color: transparent">.</span></div>
                                <textarea name="other_interests" class="notes" placeholder="1.&#13;&#10;2.&#13;&#10;3.
                                " required>{{ $user->cv->other_interests }}</textarea>
                        </div>
                    </div>
                </div>
                    <?php $i++;if ($i % 2 == 0): ?>
                    <div class="clearfix"></div>
                    <?php endif;?>
                @endif
                @if($settings->certifications)
                <div class="col-md-6 section2-container ">
                    <div class="inner-section" >
                        <div class="section-text centered-text">   <i class="icon-title fa fa-certificate"></i>@lang('admission.certifications')</div>
                        <div class=" input-container">
                            <div class="info-text"> @lang('admission.certifications-text')</div>
                                <textarea name="certifications" class="notes" placeholder="1.&#13;&#10;2.&#13;&#10;3.
                                " required>{{ $user->cv->certifications }}</textarea>
                        </div>
                    </div>
                </div>
                    <?php $i++;if ($i % 2 == 0): ?>
                    <div class="clearfix"></div>
                    <?php endif;?>
                @endif
                @if($settings->notes)
                <div class="col-md-6 section2-container ">
                    <div class="inner-section" >
                        <div class="section-text centered-text">   <i class="icon-title fa fa-pencil"></i>@lang('admission.notes')</div>
                        <div class=" input-container">
                            <div class="info-text">@lang('admission.notes-text') </div>
                                    <textarea name="notes" class="notes" placeholder="1.&#13;&#10;2.&#13;&#10;3.
                                    " required>{{ $user->cv->notes }}</textarea>
                        </div>
                    </div>
                </div>
                @endif
            </div>

            <div class="send-button centered"><button type="submit" class="sc-button-landing sc-button sc-orange sc-t-white">
                        <i class="icon-title fa fa-paper-plane-o pad-right-10"></i>@lang('admission.send')</button>
            </div>
        </div>
    </form>
    </div>

</div>

<!-- ====== Modal Αποστολής =======-->
<div id="send-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="top: 100px;">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="panel " style="background-color: #324c5a; border-bottom-left-radius: 0; border-bottom-right-radius: 0; height: 62px;" >
                <div class="panel-heading" style="height: 55px; color: #fff">
                    <button type="button" class="btn pull-right" data-dismiss="modal" style="background-color: transparent" >
                        x
                    </button>
                    <img src="/new/img/logo-light-m.png" alt="scholio logo" class=" sc-logo pull-left" style="margin-top: -5px;">
                    <h3 class="pull-left panel-title" style="margin: 8px 0 0 15px;">@lang('admission.apply')</h3>
                </div>

            </div>
            <div class="panel-body">
                <img class="pull-left margin-right-10" style="height: 45px;">
                <span>@lang('admission.send')</span>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">@lang('admission.cancel')</button>
                <button type="button" data-dismiss="modal" class="btn btn-info" onclick="saveAdmission()">@lang('admission.send')</button>
            </div>
        </div>
    </div>
</div><!-- /.modal -->






<!-- Footer -->
@include('public.footer')

</body>



<script>

    function saveAdmission(){
        var form = document.getElementById('admissionForm');
        form.submit();
    }

    angular.module("admissionApp",[])
            .controller("admissionCtrl",function ($scope,$http) {

                $scope.over=false;
                $scope.over2=false;
                $scope.over3=false;
                $scope.role=null;
                $scope.active=function(role){
                    $scope.role=role;
                }
            })

</script>


<script>
    $(document).ready(function(){
        $(".demo-form").polymerForm({
            bar_height: "1px",
            active_color:'#008DA5',
            label_color:'#008DA5',
            base_color:'#bbb',
            origin:'left',
            margin_top: '25px',
            margin_bottom: '20px'

        });

        $( function() {
//            $( "#datepicker" ).datepicker( $.datepicker.regional[ "el" ] );
            $("#datepicker").datepicker({
//                changeMonth: true,
                changeYear: true,
//                maxDate: '01/01/2010',
//                minDate: '01/01/1940',
                yearRange: "1980:2010"
//                regional: "el"
            });
            $("#datepicker").datepicker();
            $("#datepicker").datepicker("option", "dateFormat", "dd/mm/yy");
            $("#datepicker").datepicker("setDate", "{{ \Carbon\Carbon::parse($user->info->dob)->format('d/m/Y')  }}" );
        } );
    });
</script>

</html>
