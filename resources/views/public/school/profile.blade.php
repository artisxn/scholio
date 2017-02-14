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

    <!-- BX Slider CSS -->
    <link href="/new/css/jquery.bxslider.css" rel="stylesheet">

    <!-- Profile  CSS -->
    <link href="/new/css/profile.css" rel="stylesheet">

    <!-- Horizontal Ribbons  CSS -->
    <link href="/new/css/ribbonHorizontal.css" rel="stylesheet">

    <!-- Horizontal Ribbons  CSS -->
    <link href="/new/css/Hexagon.css" rel="stylesheet">

    <!-- jQuery js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <!-- Bootstrap js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
    <script src="/new/js/profile-app.js"></script>
    <script>
        window.Scholio = <?php echo json_encode([
    'csrfToken' => csrf_token(),
]); ?>
    </script>

    <style>

        .main-box2  ul li{text-indent: -20px;}

        .show-more {  padding-bottom: 15px;  text-align: center; color: #777; font-weight: 200; background-color: #fff; margin-bottom: 30px;}
        .show-more:hover {cursor: pointer; color: #008da5; font-weight: 300}

        .bx-wrapper img {height: 220px !important;}



        .slideup, .slidedown {
            background-color: #fff;
            overflow-y: hidden;
            -webkit-transition: max-height 0.3s ease-in-out;
            transition: max-height 0.3s ease-in-out;
            margin-bottom: 0;
        }
        .slidedown {
            max-height: 2000px ;
        }
        .slideAbout {max-height: 400px;}
        .slideStudies {max-height: 400px;}
        .slideScholarships {max-height: 500px;}
        .slideReviews {max-height: 500px;}
        .slideTeacheers {max-height: 500px;}

        #horizontal-style {
            text-align: justify;
        }

        #horizontal-style:after {
            content: '';
            display: inline-block;
            width: 100%;
        }
        #horizontal-style li {
            display: inline-block;
            height: 100%;
        }

        #horizontal-style li a {
            height: 100%;
        }
        #horizontal-style li a:hover {
            color: orange!important;
            background-color: #00bcd4;
        }
        #horizontal-style li a:visited,
        #horizontal-style li a:focus,
        #horizontal-style li a:active {
            background-color: transparent;
        }


        @media (min-width: 991px) and (max-width: 1199px) {
            .ribbon-front {height: 55px;}
            .ribbon-back-right {  height: 55px;}
            .ribbon-edge-bottomright{  top: 55px;  left: 81%;  }
        }
        @media  (max-width: 455px) {
            .ribbon-front {height: 55px;}
            .ribbon-back-right {  height: 55px;}
            .ribbon-edge-bottomright{  top: 55px;  left: 81%;  }
        }

    </style>
</head>
<body data-spy="scroll" data-target=".spy" data-offset="270" id="home"  ng-app="profileApp" ng-controller="profileCtrl" data-ng-init="init()" ng-cloak>
<!-- Scholio Header -->

<header class="spy navbar navbar-fixed-top navbar-scroll sc-landing-header" id="header" style="z-index: 99990">

    <div class="container" style="">
        <div class="row">

            <div class="col-md-1 visible-lg visible-md nav-web">
                <!-- Scholio Branding -->
                <a class="sc-landing-brand" href="#home">
                    <div class="sc-landing-logo-sticky" style=" padding-top: 15px">
                        <img src="/new/img/logo.png" alt="scholio logo">
                    </div>
                </a>
            </div>

            <div class="col-xs-6  visible-sm visible-xs">
                <div class="nav-mobile">
                    <a class="" href="#home">
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
                    <li class="sc-landing-menu-item"><a href="#sxetika" >ΣΧΕΤΙΚΑ</a></li>
                    {{--ng-if="studies.length && col_iek_eng_dan_mus" ng-cloak--}}
                    <li ng-show="col_iek_eng_dan_mus" class="sc-landing-menu-item"><a href="#spoudes" >ΣΠΟΥΔΕΣ</a></li>
                    <li class="sc-landing-menu-item"><a href="#ypotrofies">ΥΠΟΤΡΟΦΙΕΣ</a></li>
                    <li class="sc-landing-menu-item"><a href="#reviews">ΑΞΙΟΛΟΓΗΣΕΙΣ</a></li>
                    @if(auth()->check())
                    <li><a href="{{ url('/dashboard') }}"><button type="button" class="sc-button-landing sc-button sc-green sc-t-white">Panel</button></a></li>
                    <li><a href="{{ url('/out') }}"><button type="button" class="sc-button-landing sc-button sc-dark-blue sc-t-white ">Αποσύνδεση</button></a></li>
                    @else
                    <li><a href="{{ url('/register') }}"><button type="button" class="sc-button-landing sc-button sc-green sc-t-white"></button></a></li>
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
                            <a href="#">
                                <div class="sc-landing-menu-mobile-item sc-landing-menu-mobile-item-pressed">ΣΧΕΤΙΚΑ</div>
                            </a>
                            <a href="#">
                                <div class="sc-landing-menu-mobile-item sc-landing-menu-mobile-item-pressed">ΥΠΟΤΡΟΦΙΕΣ</div>
                            </a>
                            <div class="sc-landing-menu-mobile-item sc-landing-menu-mobile-item-pressed">ΕΠΙΚΟΙΝΩΝΙΑ</div>
                            <div class=""><br></div>
                            <a href=""><button type="button" class="sc-button sc-green sc-t-white pull-right">Εγγραφή</button></a>
                            <div class=""><br><br><br></div>
                            <a href=""><button type="button" class="sc-button sc-white sc-dark-blue pull-right">Σύνδεση</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>  <!-- row -->
    </div><!-- container-->
</header>

<!-- Scholio Main Section. -->
<div>
    <main id="main"  class="main">

        <div class="container" style="">

            <div class="row up">
            </div>
            <!-- Logo & School Name -->
            <div class="up">
                <div class=" margin-bot-15 ">
                    <div>
                        <img id="img1"  class=" img-thumb pull-left margin-right-10 margin-top-15 margin-bot-10"
                             ng-src="/images/schools/@{{contactInfo.logo}}">
                        <span class="pull-left pad-top-5 xs-pad-top">
                            <h4 class="">  @{{contactInfo.name}}</h4>
                            <span  ng-show="contactInfo.ratingCounter!=0"> <rating  class="text-incr-85 sc-t-orange" id="Rating"></rating></span>
                            <span ng-show="contactInfo.ratingCounter!=0" class="sc-t-orange"> @{{contactInfo.ratingStar}} </span>
                            <span class="xs-text-incr-85">  &nbsp; ( @{{contactInfo.ratingCounter}}  Αξιολογήσεις)</span>
                        </span>
                    </div>
                </div>
            </div>

            <!-- BX SLIDER -->
            <div class=" ">
                <div class="row xl-margin-right " style="padding-left: 7px;">
                    <ul class="bxslider  "  data-bx-slider="
                pager: false, controls: true, minSlides: 1, maxSlides:5, moveSlides: 1,
                slideWidth: 305, slideMargin:19, infiniteLoop: true, hideControlOnEnd: false">
                        <li data-ng-repeat="image in contactInfo.image" data-notify-when-repeat-finished>
                            <img data-ng-src="/images/schools/@{{image.path}}" />
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Photo Grid  HIDDEN -->
            <div class="hidden">
                <div class="row margin-top-30 hidden-xs hidden-sm hidden2">
                    <div class="" ng-repeat ="image in contactInfo.image">

                        <div class="col-md-3" ng-show="$index<4" >
                            <div class="">
                                <img data-ng-src="/images/schools/@{{image.path}}" alt="profile-pic" style="" class=" img-grid2"/>
                            </div>
                        </div>
                        <div class="col-md-4" ng-show="$index>3 " >
                            <div class="">
                                <img data-ng-src="/images/schools/@{{image.path}}" alt="profile-pic" style="" class=" img-grid"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- MAIN Section-->
            <div class="col-lg-9 col-md-9 margin-top-30 margin-bot-25" >
                <!-- Main LEFT scroll bar menu-->
                <nav class="spy sticky-bar-affix hidden-sm hidden-xs" data-spy="affix"  data-offset-top="370" id="header2" >
                    <ul class="nav nav-ul sc-dark-blue" style="">
                        <li class=""><a class="pull-left sc-t-white " href="#sxetika">Σχετικά</a></li>
                        {{--ng-if="studies.length && col_iek_eng_dan_mus" --}}
                        <li ng-show="col_iek_eng_dan_mus"><a class="pull-left sc-t-white" href="#spoudes">Σπουδές</a></li>
                        <li><a class="pull-left sc-t-white" href="#ypotrofies">Υποτροφίες</a></li>
                        <li><a class="pull-left sc-t-white" href="#reviews">Αξιολογήσεις</a></li>
                        <li><a class="pull-left sc-t-white" href="#faculty">Διδάσκοντες</a></li>
                    </ul>
                </nav>

                <!-- Main Info profile ng-repeat -->


                <!-- Σχετικά -->
                <div class="row margin-bot-25 slideup slideAbout" id="sxetika">
                    <div  class="section-header">
                        <p  class=" title margin-left-20 pad-top-40 text-incr-175 font-weight-100" style="">
                            <i class="fa fa-info-circle fa-linear margin-right-10" aria-hidden="true"></i> <span>Σχετικά </span>
                        </p>
                    </div>
                    <div class="margin-left-20 margin-right-20 sc-t-grey text-justify">
                        <p class="margin-top-10">
                            <div ng-bind-html="trustAsHtml(contactInfo.about)"></div>
                            ACT is accredited in the United States by NEASC (New England Association of Schools and Colleges) through its Commission on Institutions of Higher Education.
                            In addition to ACT having full NEASC accreditation, the undergraduate programs delivered at ACT are also validated by Open University, UK.
                            <br>
                            ACT has also been granted a license by the Greek government to operate as a private post-secondary educational institution (“College”).
                        </p>
                    </div>
                </div>

                <!-- Show More About  -->
                <div class="row show-more" style="background-color: #fff"  >
                    <div class="pad-top-20">
                         <span ng-click="showMoreAbout()" ng-if="contactInfo.lengthScholarships>2">@{{textAbout}}
                             <i class="@{{ iconAbout }}"></i></span>
                    </div>
                </div>


                <!-- ======= Σπουδές ========-->

                <div ng-if="studies.length && ( col_iek_eng_dan_mus || (contactInfo.type_id==3) )" id="spoudes">
                    <div id="sliderStudies" class=" main-box-2 row slideup slideStudies">
                        <div class="section-header2">
                            <p  class=" title margin-left-20 pad-top-40 text-incr-175 font-weight-100">
                                <i class="fa fa-graduation-cap fa-linear margin-right-10" aria-hidden="true"></i> <span>Σπουδές-Ειδικότητες </span>
                            </p>
                        </div>
                        <!-- Σπουδές Κολλέγια & ΙΕΚ  -->
                        <div ng-if="col_iek_eng_dan_mus" >
                            <div ng-repeat="(levIndex, level) in levelsName" >
                                <ul ng-class="[{'col-md-6': (levelsName.length>1)},'col-sm-12']">
                                    <div class=" text-incr-175 font-weight-300 margin-top-10 margin-left-10" style="" ng-if="contactInfo.type_id!=2">  @{{ level}} </div>
                                    <ul ng-repeat="(secIndex, section) in sectionsName[$index]" ng-class="{'col-lg-6': (contactInfo.type_id==2)}">

                                        <li class="margin-top-20 margin-left-10">
                                            <img ng-src="/panel/assets/images/steps/@{{section}}.png" alt=""
                                                 style="height: 22px; margin-top: -12px; filter: grayscale(80%); opacity: 0.8">
                                            <span class="pad-left-5 text-incr-150 font-weight-100" style="text-indent: 100%" >@{{ section}} </span>
                                        </li>

                                        {{--@{{levIndex}} , , @{{secIndex}}--}}
                                        <ul ng-repeat="study in studiesName[levIndex][secIndex]">
                                            <li class="pad-top-7 margin-left-10">
                                                <span class="  font-weight-100" style="">@{{ study}}</span>
                                            </li>
                                        </ul>
                                    </ul>
                                </ul>
                            </div>
                        </div>

                        <!-- Σπουδές Φροντιστηρια  -->
                        <div ng-if=" (contactInfo.type_id==3 || contactInfo.type_id==6)" >
                            <div class="col-md-6 col-sm-12" style="margin-bottom: 40px;">
                                <div class="pad-left-5 text-incr-150 font-weight-100  margin-left-10" >Τμήματα
                                </div>
                                <div ng-repeat="(levIndex, level) in levelsName " >
                                    <ul><div class="pad-left-20 font-weight-100 " style="">  @{{ level}} </div>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Show More Studies  -->
                    <div class="row show-more" style="background-color: #fff" ng-if="studies.length>5 && col_iek_eng_dan_mus">
                        <div class="pad-top-20">
                         <span ng-click="showMoreStudies()" >@{{textStudies}}
                             <i class="@{{ iconStudies }}"></i></span>
                        </div>
                    </div>


                </div>



                <!-- Υποτροφίες -->
                <div class="row slideup slideScholarships" id="ypotrofies" ng-if="contactInfo.lengthScholarships" >
                    <div class="section-header3">
                        <p  class=" title margin-left-20 pad-top-40 text-incr-175 font-weight-100">
                            <i class="fa fa-trophy fa-linear margin-right-10" aria-hidden="true"></i> <span>Υποτροφίες </span>
                        </p>
                    </div>


                    <div class=" scholar-box ">
                        <div ng-repeat="scholarship in contactInfo.scholarship" class="col-md-6 col-sm-12"
                             style="height: 410px!important;
                                 position: relative; margin: 20px 0 ; padding-left: 40px;">



                            <div class="ribbon-wrapper">
                                <div class=" ribbon-front sc-medium-grey">
                                    {{--<i class="fa fa-diamond sc-t-white pad-left-20 text-incr-150 margin-top-10" aria-hidden="true"></i>--}}
                                    <span class="">
                                            <img  style="height: 25px; margin: 7px 0 0 10px" ng-src="/panel/assets/images/steps/step3-skills1.png" alt="" ng-if="scholarship.criteria.id==1">
                                            <img  style="height: 25px; margin: 7px 0 0 10px;" ng-src="/panel/assets/images/steps/step3-best.png" alt="" ng-if="scholarship.criteria.id==2">
                                            <img  style="height: 25px; margin: 7px 0 0 10px;" ng-src="/panel/assets/images/steps/step3-help.png" alt="" ng-if="scholarship.criteria.id==3">
                                            <img  style="height: 25px; margin: 7px 0 0 10px;" ng-src="/panel/assets/images/steps/step3-friends.png" alt="" ng-if="scholarship.criteria.id==4">
                                            <img  style="height: 25px; margin: 7px 0 0 10px;" ng-src="/panel/assets/images/steps/step3-open.png" alt="" ng-if="scholarship.criteria.id==5">
                                        </span>

                                    <span class="sc-t-dark-green font-weight-300 text-incr-125 margin-left-10" style="top: 7px; position: absolute"> @{{scholarship.criteria.name}}</span>
                                </div>
                                <div class="ribbon-edge-topright"></div>
                                <div class="ribbon-edge-bottomright"></div>
                                <div class="ribbon-back-right sc-medium-grey"></div>
                            </div>

                            <div class="hexagon" style="top: 37px; z-index: 0;">
                                {{--<i class="fa fa-money text-incr-200 sc-t-green text" aria-hidden="true"--}}
                                {{--style=" position: relative; top: 4px; left: 13px; z-index: 2;"></i>--}}
                            </div>

                            <div class="hexagon" style="top: 65px; position: relative; z-index: 0;">
                                {{--<i class="fa fa-line-chart text-incr-200 sc-t-green text" aria-hidden="true"--}}
                                {{--style=" position: relative; top: 4px; left: 13px; z-index: 2;"></i>--}}


                            </div>

                            {{--<div class="hexagon" style="top: 93px;">--}}
                            {{--<i class="fa fa-pencil text-incr-200 sc-t-green text" aria-hidden="true"--}}
                            {{--style=" position: relative; top: 3px; left: 17px; z-index: 2;"></i>--}}

                            {{--</div>--}}

                            <div class=" sc-t-grey font-weight-300" style="position: relative; padding-left: 70px; margin-top: -60px;">
                                <p style="color: #464646">@{{scholarship.financial.plan}} @{{scholarship.financial_amount}}
                                    <span ng-if="scholarship.financial.id==1"> %</span>
                                    <span ng-if="scholarship.financial.id==2"> €  </span>
                                    <span ng-if="scholarship.financial.id==3"> μήνες</span>
                                </p>

                                <div class="" style="padding-top: 40px;"ng-if="contactInfo.type_id==1 || contactInfo.type_id==3" >@{{scholarship.level.name}}</div>
                                <div class="margin-top-50" style="" ng-if="contactInfo.type_id==2">@{{scholarship.section[0].name}}</div>
                                <div class="" style="margin-right: 10px; color: #464646;"
                                     ng-class="{'margin-top-50': (contactInfo.type_id!=1 && contactInfo.type_id!=2 && contactInfo.type_id!=3),
                                              'margin-top-0': (contactInfo.type_id==1 || contactInfo.type_id==2 || contactInfo.type_id==3) }">
                                    @{{scholarship.study.name}}</div>

                                <div style="z-index: 5; ">
                                    <img  ng-if="scholarship.financial_id==1" style="height: 34px; position: absolute; top: -6px; left: 5px;"
                                          ng-src="/panel/assets/images/steps/step1-reduce2.png">
                                    <img  ng-if="scholarship.financial_id==2" style="height: 37px; position: absolute; top: -6px; left: 19px;"
                                          ng-src="/panel/assets/images/steps/step1-hand2.png">
                                    <img  ng-if="scholarship.financial_id==3" style="height: 38px; position: absolute; top: -8px; left: 10px;"
                                          ng-src="/panel/assets/images/steps/step1-clock2.png">

                                </div>


                                <div style="z-index: 5">
                                    <img  style="height: 38px; position: absolute; top: 73px; left: 9px;" class=""
                                          ng-src="/panel/assets/images/steps/@{{scholarship.section[0].name}}.png">
                                </div>




                            </div>


                            <div style="position: absolute; top: 270px;" class="font-weight-300 sc-t-grey">
                                <span class="" style=""><i class="fa fa-thumbs-o-up margin-right-5" aria-hidden="true"></i>
                                    Ενδιαφέρθηκαν: <span class="pad-left-10">@{{ scholarship.interests}}</span>
                                </span>
                            </div>

                            <div style="position: absolute; top: 290px;" class="font-weight-300 sc-t-grey">
                                <span class="" style=""> <i class="fa fa-pencil margin-right-5" aria-hidden="true"></i>
                                    Αιτήθηκαν: <span class="pad-left-42"> @{{ scholarship.length}}</span>
                                </span>
                            </div>



                            <ul style="position: absolute; left: 34px; bottom: 30px;">
                                <a href=""><button id="b@{{scholarship.id}}" type="button" ng-click="interested(scholarship.id)" class="sc-button-landing sc-button sc-dark-green sc-t-white" style="width:140px;">
                                        <i id="i@{{scholarship.id}}" class="fa fa-thumbs-o-up margin-right-10 margin-left-5" aria-hidden="true"></i>
                                        <span id="t@{{scholarship.id}}">Ενδιαφέρομαι</span>
                                    </button>
                                </a>
                            </ul>



                            <ul style="position: absolute; right: 14%; bottom: 25px;">
                                <a href=""><button type="button" class="margin-left-30 esc-button-landing sc-button sc-green sc-t-white"
                                                   data-toggle="modal" data-target="#scholarship-modal">
                                        <i class="fa fa-file-text-o margin-right-10" aria-hidden="true"></i> Προβολή</button></a>
                                {{--<span class="sc-t-grey font-weight-300" style="left: -210px; top: 10px; position: absolute">--}}
                                {{--<i class="fa fa-file-text-o" aria-hidden="true" style="margin-right: 10px;"></i>Αιτήθηκαν: @{{ scholarship.length}} </span>--}}
                                {{--<div style="height: 1px; width: 390px; background-color: lightgrey;--}}
                                {{--margin: 50px 0 0 0; right: -20px;  position: absolute"></div>--}}
                            </ul>




                            <div ng-if="($index%2==0)" class="hidden-xs hidden-sm"
                                 style="border-right: 1px solid #dbdbdb; height: 355px; position: absolute; top: 18px; right:  5px"></div>
                        </div>

                    </div>

                </div>
                <!-- Show More Scholarships  -->
                <div class="row show-more" style="background-color: #fff">
                    <div class="pad-top-20" ng-if="contactInfo.lengthScholarships>2">
                         <span ng-click="showMoreScholarships()">@{{textScholarships}}
                             <i class="@{{ iconScholarships }}"></i></span>
                    </div>
                </div>







                <!-- Αξιολογησεις -->
                <div class="row slideReviews slideup margin-bot-25" id="reviews">
                    <div class="section-header2">
                        <p  class=" title margin-left-20 pad-top-40 text-incr-175 font-weight-100">
                            <i class="fa fa-star fa-linear margin-right-10" aria-hidden="true"></i> <span>Αξιολογήσεις </span>
                        </p>
                    </div>
                </div>
                <!-- Show More Reviews  -->
                <div class="row show-more" style="background-color: #fff"  >
                    <div class="pad-top-20">
                         <span ng-click="showMoreReviews()">@{{textReviews}}
                             <i class="@{{ iconReviews }}"></i></span>
                    </div>
                </div>


                <!-- Διδακτικό Προσωπικό  -->
                <div class="row slideTeachers slideup margin-bot-25" id="faculty">
                    <div class="section-header3">
                        <p  class=" title margin-left-20 pad-top-40 text-incr-175 font-weight-100">
                            <i class="ion-ios-people-outline text-incr-115 margin-right-10" aria-hidden="true"></i> <span>Διδακτικό Προσωπικό </span>
                        </p>
                    </div>
                </div>
                <!-- Show More Reviews  -->
                <div class="row show-more" style="background-color: #fff"  >
                    <div class="pad-top-20">
                         <span ng-click="showMoreTeachers()">@{{textTeachers}}
                             <i class="@{{ iconTeachers }}"></i></span>
                    </div>
                </div>





            </div> <!-- //col-lg-9-->
            <!-- Right Sidebar  -->
            <div class="col-lg-3 col-md-3 hidden-sm hidden-xs margin-top-30">
                <div  class="sidebar">
                    <div class="box left-box1" style="height: 280px;">
                        <div style="width: 100%">
                            <ul class="nav nav-ul sc-dark-blue text-incr-125" id="horizontal-style" >
                                <li><a class=""  style="color: #fff!important;" href="">
                                        <i style="" class="fa fa-facebook" aria-hidden="true"></i>
                                    </a></li>
                                <li><a class=""  style="color: #fff!important;" href="">
                                        <i style="" class="fa fa-twitter" aria-hidden="true"></i>
                                    </a></li>
                                <li><a class=""  style="color: #fff!important;" href="">
                                        <i style="" class="fa fa-linkedin" aria-hidden="true"></i>
                                    </a></li>

                                <li><a class=""  style="color: #fff!important;" href="">
                                        <i style="" class="fa fa-instagram" aria-hidden="true"></i>
                                    </a></li>

                                <li><a class=""  style="color: #fff!important;" href="">
                                        <i style="" class="fa fa-youtube" aria-hidden="true"></i>
                                    </a></li>

                                <li><a class=""  style="color: #fff!important;" href="">
                                        <i style="" class="fa fa-google-plus" aria-hidden="true"></i>
                                    </a></li>
                            </ul>

                        </div>


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
                            <br>
                            <div class="pad-top-20"></div>
                            <span><i class="fa fa-globe pull-left pad-top-3 xs-text-incr-85" aria-hidden="true"></i></span>
                            <span class="pull-left pad-left-5"> <a href="http://@{{contactInfo.website}}/" target="_blank">@{{contactInfo.website}}</a></span>

                            <div class="hidden-xs ">
                                <br>
                                <div class="pad-top-20"></div>
                                <span><i class="fa fa-envelope  pull-left pad-top-2 " aria-hidden="true"></i></span>
                                <span class="pull-left pad-left-5 "> <a href="mailto:@{{contactInfo.email}}">@{{contactInfo.email}}</a></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-spy="affix" data-offset-top="620" class="sidebar">
                    <div class=" box left-box2 sc-t-grey">

                        <div class="col-lg-11 margin-top-30">
                            <span><i class="fa fa-trophy pull-left pad-top-3 " aria-hidden="true"></i></span>
                            <span class="pull-left pad-left-5">Υποτροφίες</span>
                            <span class="pull-right badge"> @{{contactInfo.lengthScholarships}}</span>
                            <br>
                            <div class="pad-top-20"></div>
                            <span><i class="ion-person-stalker  pull-left pad-top-2 " aria-hidden="true"></i></span>
                            <span class="pull-left pad-left-10" ng-show="contactInfo.type_id==1 || contactInfo.type_id==2 ">Φοιτητές</span>
                            <span class="pull-left pad-left-10" ng-show="contactInfo.type_id!=1 && contactInfo.type_id!=2">Μαθητές</span>
                            <span class="pull-right">@{{contactInfo.lengthStudents}}</span>
                            <br>
                            <div ng-show="contactInfo.type_id==1 || contactInfo.type_id==2 ">
                                <div class="pad-top-20"></div>
                                <span><i class="fa fa-paint-brush pull-left pad-top-3 " aria-hidden="true"></i></span>
                                <span class="pull-left pad-left-5">Ειδικότητες Σπουδών</span>
                                <span class="pull-right">@{{contactInfo.lengthStudies}}</span>
                                <br>
                            </div>
                            <div class="pad-top-20"></div>
                            <span><i class="fa fa-graduation-cap pull-left pad-top-3 " aria-hidden="true"></i></span>
                            <span class="pull-left pad-left-2 pad-bot-10">Καθηγητές</span>
                            <span class="pull-right">@{{contactInfo.lengthTeachers}}</span>

                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <button id="submButton" type="button" class="hidden-sm hidden xs sc-button3 sc-dark-blue sc-t-white margin-top-10 center-block hidden"
                        style="z-index: 4000; width: 190px; top: 250px; margin-left: 55px; position: fixed;"
                        data-toggle="modal" data-target="#connect-modal">
                    <i class="fa fa-link pad-right-15" aria-hidden="true"></i>Αίτημα &nbsp; Σύνδεσης
                </button>
            </div><!-- //col-lg-3-->
        </div> <!-- //container-->



        <!-- ====== Modal Συνδεσης =======-->
        <div id="connect-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none; top: 100px;">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="panel " style="background-color: #324c5a;">
                        <div class="panel-heading" style="height: 55px; color: #fff">
                            <button type="button" class="btn pull-right" data-dismiss="modal" style="background-color: transparent" >
                                x

                            </button>
                            <img src="/new/img/logo-light-m.png" alt="scholio logo" class="pull-left">
                            <h3 class="pull-left panel-title" style="margin: 8px 0 0 15px;">Αίτημα Σύνδεσης</h3>
                        </div>

                    </div>
                    <div class="panel-body">
                        <img  class="pull-left margin-right-10" style="height: 45px;"
                              ng-src="/images/schools/@{{contactInfo.logo.full_path}}">
                        <span>@{{contactInfo.type }} @{{ contactInfo.name }}:   Με τη σύνδεσή σας θα έχετε τη δυνατότητα να γράψετε την αξιολόγησή σας.</span>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Ακύρωση</button>
                        <button type="button" class="btn btn-info">Αποστολή</button>
                    </div>
                </div>
            </div>
        </div><!-- /.modal -->


        <!-- ====== Modal Υποτροφίας =======-->
        <div id="scholarship-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none; top: 100px;">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="panel " style="background-color: #324c5a;">
                        <div class="panel-heading" style="height: 55px; color: #fff">
                            <button type="button" class="btn pull-right" data-dismiss="modal" style="background-color: transparent" >
                                x

                            </button>
                            <img src="/new/img/logo-light-m.png" alt="scholio logo" class="pull-left">
                            <h3 class="pull-left panel-title" style="margin: 8px 0 0 15px;">Υποτροφία @{{'>>  send id here <<<'}}</h3>
                        </div>

                    </div>
                    <div class="panel-body">
                        <img  class="pull-left margin-right-10" style="height: 45px;"
                              ng-src="/images/schools/@{{contactInfo.logo.full_path}}">
                        <span>@{{contactInfo.type }} @{{ contactInfo.name }}:   </span>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Ακύρωση</button>
                        <button type="button" class="btn btn-info">Αίτηση</button>
                    </div>
                </div>
            </div>
        </div><!-- /.modal -->



        {{-------------------------------------- TEXT TO HTML ΓΙΑ ΤΟ ABOUT --------------------------------------}}
        <div ng-repeat="scholarship in contactInfo.scholarship">
            <div ng-bind-html="trustAsHtml(scholarship.terms)"></div>
        </div>
        {{-------------------------------------- TEXT TO HTML ΓΙΑ ΤΟ ABOUT --------------------------------------}}

    </main>
</div>

<!-- Footer -->
@include('public.footer')

</body>

<script>
    var lengthStudents = 0;
    $(function() {
        //caches a jQuery object containing the header element
        var sb = $("#submButton");
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 595) {
                sb.removeClass('hidden').addClass("vissible");
            } else {
                sb.removeClass("vissible").addClass('hidden');
            }
        });
    });

    ///// Rating Js //////
    $('rating').raty({
        score    : 4.2,
        halfShow : true,
        half     : true,
        starHalf : 'fa fa-fw fa-star-half'
    });

    var lengthStudents = 0;

    angular.module("profileApp",[])
            .controller("profileCtrl",function ($timeout,$scope,$http, $sce) {


                $scope.init = function () {

                    $scope.trustAsHtml = $sce.trustAsHtml;

                    $scope.message = null;
                    $scope.scholarship = ['sd'];

                    $scope.col_iek_eng_dan_mus = false;

                    $scope.contactInfo = $http.get('/api/profile/{{ $id }}').success(function(data){
                        console.time('contactInfo API');
                        $scope.contactInfo=data;
                        console.log(data);
                        $scope.studies = data.levels;
                        $scope.message = $sce.trustAsHtml(data.scholarship[0].terms);
                        console.timeEnd('contactInfo API');
                        if( $scope.studies.length){
                            $scope.initial();
                        }
                        var type=data.type_id
                        if (type==1 || type==2)
                        {$scope.col_iek_eng_dan_mus  = true}
                        console.log('SchoolTypeId= '+data.type_id)
//                        console.timeEnd('contactInfo API');
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
                                        $('#i'+ id).toggleClass('fa-thumbs-up fa-thumbs-o-up');
                                        $('#t'+ id).text('Ενδιαφέρθηκα')
                                    }else{
                                        $('#i'+ id).toggleClass('fa-thumbs-o-up fa-thumbs-up');
                                        $('#t'+ id).text('Ενδιαφέρομαι')
                                    }
                                });
                    }


                    $scope.levelsName=[];

                    $scope.sectionsName=[];
                    $scope.studiesName=[];

                    $scope.initial=function (){
                        console.time('initial');

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
                        }
                        length=0

                        for (lev in $scope.levelsName ){
                            for (std in $scope.studies ){
                                if ( $scope.levelsName[lev]==$scope.studies[std][0].section[0].level.name){
                                    if(!length){
                                        $scope.sectionsName[lev][0]=$scope.studies[std][0].section[0].name
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
                            for (sec in $scope.sectionsName[lev] ){
                                $scope.studiesName[lev][sec]=[];
                                study=0
                                for (std in $scope.studies){

                                    if( $scope.levelsName[lev]==$scope.studies[std][0].section[0].level.name
                                            && $scope.sectionsName[lev][sec]==$scope.studies[std][0].section[0].name
                                    ){
                                        $scope.studiesName[lev][sec][study]=$scope.studies[std][0].name
                                        study++
                                    }
                                }
                            }
                        }
                        console.timeEnd('initial');
                    }

                };

                $scope.interested = function(id){
                    $scope.interested1 = $http.post('/api/interested/save',{'scholarship' : id}, {
                                headers: {
                                    'X-Requested-With': 'XMLHttpRequest',
                                    'X-CSRF-TOKEN': window.Scholio.csrfToken
                                }
                            })
                            .success(function(data){
                                console.log(data);
                                if(data == 'YES'){
                                    $('#i'+ id).toggleClass('fa-thumbs-up fa-thumbs-o-up');
                                    $('#t'+ id).text('Ενδιαφέρθηκα')
                                }else{
                                    $('#i'+ id).toggleClass('fa-thumbs-o-up fa-thumbs-up');
                                    $('#t'+ id).text('Ενδιαφέρομαι')
                                }
                            });
                }


                $scope.textAbout='Περισσότερα';
                $scope.iconAbout='fa fa-angle-down'
                $scope.showMoreAbout= function (){
                    if($scope.textAbout === "Περισσότερα"){
                        $scope.textAbout= "Λιγότερα";
                        $scope.iconAbout='fa fa-angle-up'
                        $("#sxetika").removeClass('slideAbout').toggleClass("slidedown slideup");
                    } else {
                        $scope.textAbout = "Περισσότερα";
                        $scope.iconAbout='fa fa-angle-down'
                        $("#sxetika").toggleClass("slidedown slideup").addClass('slideAbout');
                    };
                }


                $scope.textStudies='Περισσότερα';
                $scope.iconStudies='fa fa-angle-down'
                $scope.showMoreStudies= function (){
                    if($scope.textStudies === "Περισσότερα"){
                        $scope.textStudies= "Λιγότερα";
                        $scope.iconStudies='fa fa-angle-up'
                        $("#sliderStudies").removeClass('slideStudies').toggleClass("slidedown slideup");
                    } else {
                        $scope.textStudies = "Περισσότερα";
                        $scope.iconStudies='fa fa-angle-down'
                        $("#sliderStudies").toggleClass("slidedown slideup").addClass('slideStudies');
                    };
                }


                $scope.textScholarships='Περισσότερα';
                $scope.iconScholarships='fa fa-angle-down'
                $scope.showMoreScholarships= function (){
                    if($scope.textScholarships === "Περισσότερα"){
                        $scope.textScholarships= "Λιγότερα";
                        $scope.iconScholarships='fa fa-angle-up'
                        $("#ypotrofies").removeClass('slideScholarships').toggleClass("slidedown slideup");
                    } else {
                        $scope.textScholarships = "Περισσότερα";
                        $scope.iconScholarships='fa fa-angle-down'
                        $("#ypotrofies").toggleClass("slidedown slideup").addClass('slideScholarships');
                    };
                }

                $scope.textReviews='Περισσότερα';
                $scope.iconReviews='fa fa-angle-down'
                $scope.showMoreReviews= function (){
                    if($scope.textReviews === "Περισσότερα"){
                        $scope.textReviews= "Λιγότερα";
                        $scope.iconReviewst='fa fa-angle-up'
                        $("#reviews").removeClass('slideReviews').toggleClass("slidedown slideup");
                    } else {
                        $scope.textReviews = "Περισσότερα";
                        $scope.iconReviews='fa fa-angle-down'
                        $("#reviews").toggleClass("slidedown slideup").addClass('slideReviews');
                    };
                }

                $scope.textTeachers='Περισσότερα';
                $scope.iconTeachers='fa fa-angle-down'
                $scope.showMoreTeachers= function (){
                    if($scope.textTeachers === "Περισσότερα"){
                        $scope.textTeachers= "Λιγότερα";
                        $scope.iconTeachers='fa fa-angle-up'
                        $("#faculty").removeClass('slideTeachers').toggleClass("slidedown slideup");
                    } else {
                        $scope.textTeachers = "Περισσότερα";
                        $scope.iconTeachers='fa fa-angle-down'
                        $("#faculty").toggleClass("slidedown slideup").addClass('slideTeachers');
                    };
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

    //    $("#Trigger").click(function () {
    //        $("#Slider").toggleClass("slidedown slideup");
    //        //  if ($("#Slider").hasClass("slideup"))
    //        //    $("#Slider").removeClass("slideup").addClass("slidedown");
    //        //  else
    //        //      $("#Slider").removeClass("slidedown").addClass("slideup");
    //    });


</script>



</html>
