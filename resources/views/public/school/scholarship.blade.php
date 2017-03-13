


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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



    </style>
</head>
<body data-spy="scroll" data-target=".spy" data-offset="270" id="home"  ng-app="scholarshipApp"  ng-controller="scholarshipCtrl" data-ng-init="" ng-cloak  >
<!-- Scholio Header -->

<header class="spy navbar navbar-fixed-top navbar-scroll sc-landing-header" id="header" style="z-index: 99990">

    <div class="container" style="">
        <div class="row">

            <div class="col-md-1 visible-lg visible-md nav-web">
                <!-- Scholio Branding -->
                <a class="sc-landing-brand" href="{{ url('/') }}">
                    <div class="sc-landing-logo-sticky" style=" padding-top: 15px">
                        <img src="/new/img/logo.png" alt="scholio logo">
                    </div>
                </a>
            </div>

            <div class="col-xs-6  visible-sm visible-xs">
                <div class="nav-mobile">
                    <a class="" href="{{ url('/') }}">
                        <div class="navbar-brand  sc-landing-logo-sticky">
                            <img src="/new/img/logo-m.png" alt="scholio logo">
                        </div>
                    </a>
                </div>
            </div>
            <!-- Scholio sMenu -->

            <!-- Large Menu -->
            <div class="col-md-11 visible-md visible-lg" >
                <ul class="nav navbar-nav navbar-right sc-landing-menu" >
                    <li class="sc-landing-menu-item"><a href="#sxetika" >info</a></li>
                    @if(auth()->check())
                        <li><a href="{{ url('/dashboard') }}"><button type="button" class="sc-button-landing sc-button sc-green sc-t-white">Διαχείριση</button></a></li>
                        <li><a href="{{ url('/out') }}"><button type="button" class="sc-button-landing sc-button sc-dark-blue sc-t-white ">Αποσύνδεση</button></a></li>
                    @else
                        <li><a href="{{ url('/register') }}"><button type="button" class="sc-button-landing sc-button sc-green sc-t-white">Εγγραφή</button></a></li>
                        <li><a href="{{ url('/login') }}"><button type="button" class="sc-button-landing sc-button sc-dark-blue sc-t-white ">Σύνδεση</button></a></li>
                    @endif
                </ul>
            </div>

            <!-- Mobile Menu -->
            <div class="col-xs-6 visible-sm visible-xs ">
                <div class="">
                    <div class="sc-landing-menu-mobile-sandwitch nav navbar-nav navbar-right pull-right">
                        <div class="sc-landing-menu-sandwitch-button-sticky sc-landing-menu-sandwitch">
                            <img src="/new/img/collapse-dark.png" alt="scholio logo">
                        </div>
                    </div>
                </div>
                <div class="visible-xs visible-sm">
                    <div class="sc-landing-menu-mobile-holder sc-dark-blue">
                        <div class="pull-right">
                            <div class="sc-landing-menu-mobile-close sc-t-white">x</div>
                        </div>
                        <br><br>
                        <div class="pull-right">
                            <a href="#sxetika">
                                <div class="sc-landing-menu-mobile-item sc-landing-menu-mobile-item-pressed">info</div>
                            </a>
                            <div class=""><br></div>
                            <div class="sign-links">
                                @if(auth()->check())
                                    <div class=""><br></div>
                                    <a href="{{ url('/dashboard') }}"><button type="button" class="sc-button sc-orange sc-t-white pull-right">Διαχείριση</button></a>
                                    <div><br><br><br></div>
                                    <a href="{{ url('/out') }}"><button type="button" class="sc-button sc-green sc-t-white pull-right">Αποσύνδεση</button></a>
                                @else
                                    <div class=""><br></div>
                                    <a href="{{ url('/register') }}"><button type="button" class="sc-button sc-orange sc-t-white pull-right">Εγγραφή</button></a>
                                    <div class=""><br><br><br></div>
                                    <a href="{{ url('/login') }}"><button type="button" class="sc-button  sc-green sc-t-white pull-right">Σύνδεση</button></a>
                                @endif
                            </div>>
                        </div>
                    </div>
                </div>
            </div>
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

<div class="container cover">
    <img class="trophy" src="/new/img/trophy.png" alt="">
    {{--<img class="grad" src="/new/img/Graduation.png" alt="">--}}

    <div class="Hero1"> Υποτροφία που προσφέρεται από: </div>
    <div class="Hero2"> {{ $scholarship->school->name() }}</div>
</div>
<div class="line"></div>


<div class="container stats hidden-sm sc-xs-visible">
    <div class="col-lg-11 box-in sc-t-grey row ">
        <div class="col-md-4 col-sm-6  col-xs-12 col-lg-3 colmn ">
            {{--col-md-offset-2 col-lg-offset-2--}}
            <span class="col-xs-10  col-sm-10  col-md-10 col-lg-9  first-col">
                <div class="">  <i class="fa fa-pencil margin-right-10"></i>Αιτήθηκαν:</div>
                <div class="margin-top-10">  <i class="fa fa-thumbs-o-up margin-right-10"></i>Ενδιαφέρθηκαν:</div>
            </span>
            <span class="col-xs-2 col-sm-2 col-md-1 col-lg-3 align-right">
                <div class="">34</div>
                <div class="margin-top-10">123</div>
            </span>

        </div>

        <div class="col-md-4  col-xxxs-12 col-sm-6 col-xs-12 col-lg-4 colmn ">
            {{--col-lg-offset-1--}}
            <span class=" col-xxxs-7 col-xs-8 col-sm-7  col-md-7 col-lg-6  ">
                <div class="">  <i class="fa fa-thumb-tack margin-right-10"></i>Αναρτήθηκε:</div>
                <div class="margin-top-10">  <i class="fa fa-flag-o margin-right-10"></i>Λήγει:</div>
            </span>
            <span class="col-xxxs-5 col-xs-4 col-sm-5 col-md-5 col-lg-5 align-right">
                <div class="">10 Μαϊ 2017</div>
                <div class="margin-top-10">30 Σεπ 2017</div>
            </span>

        </div>

        <div class="col-md-4 col-sm-6 col-xs-12 col-lg-5 ">
            {{--col-lg-offset-1--}}
            <span class=" col-xxxs-7 col-xs-8 col-sm-7  col-md-7 col-lg-6">
                <div class="">  <i class="fa fa-pencil-square-o margin-right-10"></i>Με εξετάσεις:</div>
                <div class="margin-top-10">  <i class="fa fa-calendar margin-right-10"></i>Ημ/νία Εξ.:</div>
            </span>
            <span class=" col-xxxs-5 col-xs-4 col-sm-5 col-md-5col-lg-4 align-right" >
                <div class="" >{{ $scholarship->exams }} NAI</div>
                <div class="margin-top-10">{{ $scholarship->exams_date }} 25 Σεπ 2017</div>
            </span>

        </div>
    </div>
</div>



<div class="container stats sc-xs-hidden hidden-md hidden-lg">
    <div class="box-in sc-t-grey  ">
        <div class="col-sm-4  col-xs-5 colmn ">
            {{--col-md-offset-2 col-lg-offset-2--}}
            <span class="col-sm-10  col-xs-10 first-col">
                <div class="">  <i class="fa fa-pencil margin-right-10"></i>Αιτήθηκαν:</div>
                <div class="margin-top-10">  <i class="fa fa-thumbs-o-up margin-right-10"></i>Ενδιαφέρθηκαν:</div>
                <div class="margin-top-10">  <i class="fa fa-pencil-square-o margin-right-10"></i>Με εξετάσεις:</div>
            </span>
            <span class="col-sm-1 col-xs-1 align-right">
                <div class="">34</div>
                <div class="margin-top-10">123</div>
                  <div class="margin-top-10" >{{ $scholarship->exams }} NAI</div>
            </span>

        </div>

        <div class="col-sm-5  col-xs-7">
            {{--col-lg-offset-1--}}
            <span class=" col-sm-7   col-xs-6">
                <div class="">  <i class="fa fa-thumb-tack margin-right-10"></i>Αναρτήθηκε:</div>
                <div class="margin-top-10">  <i class="fa fa-flag-o margin-right-10"></i>Λήγει:</div>
                <div class="margin-top-10">  <i class="fa fa-calendar margin-right-10"></i>Ημ/νία Εξετ.:</div>
            </span>
            <span class="col-sm-5  col-xs-6 align-right">
                <div class="">10 Μαϊ 2017</div>
                <div class="margin-top-10">30 Σεπ 2017</div>
                <div class="margin-top-10">{{ $scholarship->exams_date }} 25 Σεπ 2017</div>
            </span>

        </div>

    </div>
</div>




<div class="degra">

<div class="container back ">

    <div class=" buttons centered-text">
        {{--@if(auth()->check())--}}
        <span class="margin-right-20">
            <a href=""><button id="b@{{scholarship.id}}" type="button" ng-click="interested(scholarship.id)"
                               class="sch-button sc-button-landing sc-button sc-dark-green sc-t-white">
                    <i id="i@{{scholarship.id}}" class="fa fa-thumbs-o-up margin-right-10 margin-left-5" aria-hidden="true"></i>
                    <span id="t@{{scholarship.id}}" ng-init="test(scholarship)">Ενδιαφέρομαι</span>
                </button>
            </a>
        </span>
        {{--@endif--}}

        <span class="">
        <a href=""><button type="button" class="sch-button sc-button sc-orange sc-t-white"><i class="fa fa-file-text-o margin-right-10" aria-hidden="true"></i> Αίτηση </button></a>
        </span>

    </div>


    <!-- ========== 1 ============= -->
    <div class="scholar-box">
        <div class="centered-text hex-box-left">
                <img height="170px" src="/new/img/hex01.png" alt="">
                <img  height="50" class="" style=" margin-top: -110px;"  src="/panel/assets/images/steps/{{$scholarship->study->section[0]->name}}.png" alt="">
        </div>
        <div class="xs-hex-box-left">
            <img height="88px" src="/new/img/hex01upb.png" alt="">
        </div>
        <div class="box-left">
            <div class="title">
                Σπούδασε {{ $scholarship->study->name}}
            </div>
            <div class="text">
                Το αντικείμενο σπουδών αφορά τους υποψηφίους που στοχεύουν σε {{ $scholarship->level->name }}  με ειδικότητα
                  {{ $scholarship->study->name}} .
            </div>
        </div>
    </div>

    <!-- ========== 2 ============= -->
    <div class="scholar-box">
        <div class="centered-text hex-box-right">
                <img height="170px" src="/new/img/hex02.png" alt="">
                <img  height="50" class="" style=" margin-top: -115px;"  src="/images/schools/{{ $scholarship->school->logo}}"  alt="">
        </div>
        <div class="xs-hex-box-right">
            <img height="170px" src="/new/img/hex02upb.png" alt="">
        </div>
        <div class="box-right">
            <div class="title right" style="">
             Υποτροφία από {{ $scholarship->school->name() }}
            </div>
            <div class="text-right" style="" >
                Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                Interdum et malesuada fames ac ante ipsum primis in faucibus.
            </div>


        </div>

    </div>

    <!-- ========== 3 ============= -->
    <div class="scholar-box">
        <div class="centered-text hex-box-left">
            <img height="170px" src="/new/img/hex03.png" alt="">
            <img  height="50" class="" style=" margin-top: -118px;"  src="/panel/assets/images/steps/{{ $scholarship->financial->plan}}.png" alt="">

        </div>
        <div style="" class="box-left">
            <div class="title">
                {{ $scholarship->financial->plan}} {{ $scholarship->financial_amount }} %
            </div>
            <div class="text">
                Ο τελικός νικητής από όλους τους συμμετέχοντες για τη συγκεκριμένη
                υποτροφία, θα αποκτήσει για τις σπουδές του  {{ $scholarship->financial->plan}}  {{ $scholarship->financial_amount }} %.
            </div>
        </div>
    </div>

    <!-- ========== 4 ============= -->
    <div class="scholar-box">
        <div class="centered-text hex-box-right">
                <img height="170px" src="/new/img/hex04.png" alt="">
                <img  height="50" class="" style="margin-top: -115px;"  src="/panel/assets/images/steps/{{$scholarship->criteria->name}}.png" alt="">
        </div>
        <div style="" class="box-right">
            <div class="title right">
                {{ $scholarship->criteria->name }}
            </div>
            <div class="text-right">
                Morbi efficitur urna quis sapien viverra consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ligula augue,
                facilisis ut blandit sed, lobortis dignissim quam.
            </div>
        </div>
    </div>

    <!-- ========== 5 ============= -->
    <div class="scholar-box">
        <div class="centered-text hex-box-left">
            <img height="170px" src="/new/img/hex05.png" alt="">
            <img  height="50" class="" style="margin-top: -118px;"  src="/panel/assets/images/steps/terms.png" alt="">
        </div>
        <div class="box-left" style="">
            <div class="title">
               Όροι & Δικαίωμα Συμμετοχής
            </div>
            <div class="text">
                {{--htmlentities()--}}
                {{ $scholarship->terms }}
            </div>
        </div>
    </div>
</div>
</div>

{{--<div style="margin-top: 140px"></div>--}}
<!-- Footer -->
@include('public.footer')

</body>


<script>
    angular.module("scholarshipApp",[])
            .controller("scholarshipCtrl",function ($scope,$http) {

//                $scope.scholarship = $http.get("/api/scholarship/"+id)
//                        .success(function (data) {
//                             console.log(data);
//                            $scope.scholarship=data
//
//                        })
            })
</script>
</html>