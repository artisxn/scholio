<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&subset=greek" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- font-awesome -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">

    <link href="{{asset('new/css/Bootstrap-xxs-xxxs.css')}}" rel="stylesheet">

    <!--photo hover animation -->
    <link href="{{asset('new/css/photo-hover.css')}}" rel="stylesheet">

    <!-- Main CSS -->
    <link href="{{asset('new/css/main.css')}}" rel="stylesheet">

    <!-- Landing CSS -->
    <link href="{{asset('new/css/landing.css')}}" rel="stylesheet">


    <!--====== Javascript Files =======-->

    <!-- jQuery js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <!-- Bootstrap js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <!-- Bootstrap Select js  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.4/js/bootstrap-select.min.js"></script>


    <!-- GoogleMap API -->
    <script src="https://maps.googleapis.com/maps/api/js?libraries=geometry,places&key=AIzaSyC18JCENxILnmXA1VGlsjJwBXQi3XZMWVA"></script>


    <!-- Angular js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular.min.js"></script>
    {{--<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-animate.js"></script>--}}
    {{--<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-sanitize.js"></script>--}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/2.5.0/ui-bootstrap-tpls.min.js"></script>

    <script src="/new/js/angular-app.js"></script>


    <!-- Local javascript files -->
    <script src="{{asset('new/js/typed.js')}}"></script>

    <!--  -->
    <script src="{{asset('new/js/landing.js')}}"></script>
    <!--  -->


    <style>
        /*.animate  #sec2 h5{color: red; opacity: 1;*/
        /*-webkit-transition: all 2.5s ease;*/
        /*transition: all 2.5s ease;}*/
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

        .sch-reg-title{left: 40%; width: 400px; position: absolute;}


        @media  (max-width: 1500px) {
            .sch-reg-title {left: 36%; width: 380px;}
        }

        @media  (max-width: 1300px) {
            .sch-reg-title {left: 31%; width: 370px;}
        }

        @media  (max-width: 1200px) {
            .sch-reg-title {left: 30%; width: 330px;}
        }




    </style>

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50" id="home" style="overflow-x: hidden!important;" ng-app="landingApp" ng-controller="landCtrl" data-ng-init="fetchTypes" scroll ng-cloak>

<!-- Scholio Header -->
<header class="navbar navbar-top sc-landing-header" id="header" >
    <div class="container">

        <div class="row">
            <div class="col-md-1 visible-lg visible-md nav-web">
                <!-- Scholio Branding -->
                <a class="sc-landing-brand" href="#home">
                    <div class="sc-landing-logo">
                        <img src="{{asset('new/img/logo-light.png')}}" alt="scholio logo">
                    </div>
                    <div class="sc-landing-logo-sticky" style=" padding-top: 15px">
                        <img src="{{asset('new/img/logo.png')}}" alt="scholio logo">
                    </div>
                </a>
            </div>

            <div class="col-xs-6  visible-sm visible-xs">
                <div class="nav-mobile">
                    <a class="" href="#home">
                        <div class="navbar-brand  sc-landing-logo">
                            <img src="{{asset('new/img/logo-light-m.png')}}" alt="scholio logo">
                        </div>
                        <div class="navbar-brand  sc-landing-logo-sticky">
                            <img src="{{asset('new/img/logo-m.png')}}" alt="scholio logo">
                        </div>
                    </a>
                </div>
            </div>
            <!-- Scholio sMenu -->

            <!-- Large Menu -->
            <div class="col-md-11 visible-md visible-lg">
                <div class="">
                    <ul class="nav navbar-nav navbar-right sc-landing-menu">
                        <li class="sc-landing-menu-item"><a href="#sc-landing-sec2">ΣΧΕΤΙΚΑ</a></li>
                        <li class="sc-landing-menu-item"><a href="#sc-landing-sec3">ΣΗΜΕΙΑ ΥΠΕΡΟΧΗΣ</a></li>
                        <li class="sc-landing-menu-item"><a href="#sc-landing-sec4">ΕΚΠΑΙΔΕΥΤΗΡΙΑ</a></li>
                        <li class="sc-landing-menu-item"><a href="#sc-landing-sec5">ΕΠΙΚΟΙΝΩΝΙΑ</a></li>
                        @if(auth()->check())
                    <li><a href="{{ url('/dashboard') }}"><button type="button" class="sc-button-landing sc-button sc-green sc-t-white">Panel</button></a></li>
                    <li><a href="{{ url('/out') }}"><button type="button" class="sc-button-landing sc-button sc-dark-blue sc-t-white ">Αποσύνδεση</button></a></li>
                    @else
                    <li><a href="{{ url('/register') }}"><button type="button" class="sc-button-landing sc-button sc-green sc-t-white">Εγγραφή</button></a></li>
                    <li><a href="{{ url('/login') }}"><button type="button" class="sc-button-landing sc-button sc-dark-blue sc-t-white ">Σύνδεση</button></a></li>
                    @endif
                    </ul>
                </div>
            </div>



            <!-- Mobile Menu -->
            <div class="col-xs-6 visible-sm visible-xs ">
                <div class="">
                    <div class="sc-landing-menu-mobile-sandwitch nav navbar-nav navbar-right pull-right">
                        <div class="sc-landing-menu-sandwitch-button  sc-landing-menu-sandwitch">
                            <img src=" {{asset('new/img/collapse-light.png')}}" alt="scholio logo">
                        </div>
                        <div class="sc-landing-menu-sandwitch-button-sticky sc-landing-menu-sandwitch">
                            <img src=" {{asset('new/img/collapse-dark.png')}}" alt="scholio logo">
                        </div>
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
                        <a href="#sc-landing-sec2">

                            <div class="sc-landing-menu-mobile-item sc-landing-menu-mobile-item-pressed">ΣΧΕΤΙΚΑ</div>
                        </a>
                        <a href="#sc-landing-sec4">
                            <div class="sc-landing-menu-mobile-item sc-landing-menu-mobile-item-pressed">ΕΚΠΑΙΔΕΥΤΗΡΙΑ</div>
                        </a>
                        <div class="sc-landing-menu-mobile-item sc-landing-menu-mobile-item-pressed">ΥΠΟΤΡΟΦΙΕΣ</div>
                        <div class="sc-landing-menu-mobile-item sc-landing-menu-mobile-item-pressed">ΕΠΙΚΟΙΝΩΝΙΑ</div>
                        <div class=""><br></div>
                        <a href="register"><button type="button" class="sc-button sc-green sc-t-white pull-right">Εγγραφή</button></a>
                        <div class=""><br><br><br></div>
                        <a href="login"><button type="button" class="sc-button sc-white sc-t-dark-grey pull-right">Σύνδεση</button></a>
                    </div>
                </div>
            </div>

        </div>

    </div>

</header>


<!-- Scholio Main Section. -->
<main id="main"  class="">
    <!-- Scholio Landing Page Firt Section -->
    <section id="sc-landing-sec1" class="sc-landing-sec1">
        <div class="container">
            <div class="sc-landing-sec1-content">
                <h1 class="text-center sc-t-white"><span class="typed-js"></span> </h1>
                <h3  class="text-center sc-t-white">Διεκδίκησε τώρα την υποτροφία που σου ταιριάζει.</h3>

            </div>
        </div>
        <!-- Full Background Video -->
        <div class="sc-landing-video-container hidden-xs" style="overflow-x: hidden; z-index: -500">
            <!-- Video Shadow -->
            <div class="sc-landing-video-filter"></div>
            <video autoplay loop muted id="video-bg">
                <source src="{{asset('new/video/VideoMix2.ogg')}}" type="video/ogg">
                <source src="{{asset('new/video/VideoMix2.mp4')}}" type="video/mp4">

                {{--<source src="{{asset('new/video/VideoMix2.webm')}}" type="video/webm">--}}
            </video>
        </div>


        <div class="sc-landing-video-container vissible-xs hidden-sm hidden-md hidden-lg" style="overflow-x: hidden">
            <div class="sc-landing-video-filter"></div>
            <img class="responsive mobile-hero" src="{{asset('new/img/mobile/hero15b.jpg')}}" alt="">
        </div>
        <!-- Searchbar -->

           <div class="sc-landing-search-bar-holder">
               <div class="container sc-landing-search-bar-content">
                   <form action="/search/school/type" method="post">
                       {{ csrf_field() }}
                       <!-- SELECT Drop Down -->
                       {{--<div class="col-md-5 col-sm-6" id="options">--}}
                           {{--<select class="sc-no-border" name="type">--}}
                               {{--<option value="all" selected="selected">Επέλεξε κατηγορία υποτροφίας:</option>--}}
                               {{--<option value="@{{ type.id }}" ng-repeat="type in schoolTypes">@{{ type.name }}</option>--}}
                           {{--</select>--}}
                       {{--</div>--}}

                        <!-- Επιλογή Εκπαιδευτικών Ιδρυματων ==== angular typeahead  -->
                       <div class="col-md-5 col-sm-6" id="options">
                           <input type="text" ng-model="selected" value="selected" placeholder="Εκπαιδευτικό Ίδρυμα" autocomplete="off"
                                  uib-typeahead="state.id as state.type for state in schoolTypess | filter:$viewValue | limitTo: 8"
                                  typeahead-template-url="customTemplate.html" class="form-control test" typeahead-show-hint="true"
                                  typeahead-min-length="0" typeahead-input-formatter="formatLabel($model)">
                       </div>

                       <input class="hidden" style="color: black!important;" name="type" value="@{{ selected }}" />

                       <div class="col-md-5 col-sm-6" >


                             {{--<input type="text" id="Autocomplete" class="form-control " ng-autocomplete="result2"--}}
                                   {{--details="details2" options="options2" placeholder=" Στην Περιοχή:"/>--}}

                           <!-- Επιλογή Περιοχής ==== angular typeahead  -->
                           <input type="text" ng-model="locationSelected" placeholder="Στην Περιοχή:" name="location"
                                  uib-typeahead="address for address in getLocation($viewValue)" typeahead-loading="loadingLocations"
                                  typeahead-no-results="noResults"  typeahead-show-hint="true" autocomplete="off" class="form-control">
                           {{--<div style="color: white;">--}}
                               {{--<i ng-show="loadingLocations" class="glyphicon glyphicon-refresh"></i>--}}
                               {{--<div ng-show="noResults">--}}
                                   {{--<i class="glyphicon glyphicon-remove"></i> Δε βρέθηκε περιοχή--}}
                               {{--</div>--}}
                           {{--</div>--}}



                       </div>

                       <div class="col-md-2 col-sm-12">
                           <input class="sc-no-border sc-green sc-t-white" type="submit" name="" value="Αναζήτηση">
                       </div>
                   </form>
               </div>
           </div>



    </section>





    <!-- Second Section -->
    <section id="sc-landing-sec2" class="sc-landing-sec2">
        <div class="container ">
            <div class="sc-landing-sec2-content">
                <h2 class="text-center sc-t-white sc-t-dark-grey">Βρες τη δική σου υποτροφία με 3 βήματα</h2>
                <br><br>
                <div class="row">
                    <div class="col-md-4 text-center">
                        <img src="{{asset('new/img/landing-icon-1search.png')}}">
                        <h5 class="">Αναζήτησε Υποτροφίες</h5>
                        <p class="centered-text">Επέλεξε την κατηγορία όπως Κολλέγιο, ΙΕΚ , Ιδιωτικό Λύκειο ή Φροντιστήριο και την πόλη που σε ενδιαφέρει</p>
                    </div>
                    <div class="visible-sm visible-xs"><br><br><br></div>
                    <div class="col-md-4 text-center">
                        <img src="{{asset('new/img/landing-icon-2pencil.png')}}">
                        <h5>Διεκδίκησε</h5>
                        <p class="centered-text">Περιέγραψε το προφίλ και τις δεξιότητες σου με μια απλή φόρμα και διεκδίκησε όσες υποτροφίες σε ενδιαφέρουν.</p>
                    </div>
                    <div class="visible-sm visible-xs"><br><br><br></div>
                    <div class="col-md-4 text-center">
                        <img src="{{asset('new/img/landing-icon-3startup.png')}}">
                        <h5>Ξεκίνα τις σπουδές σου</h5>
                        <p class="centered-text">Ο εκπαιδευτικός φορέας εξετάζει το αίτημα σου και σε ενημερώνει αναλυτικά για τις περαιτέρω λεπτομέρειες.</p>
                    </div>
                </div>

                <div class="row" id="" >
                    <div class="col-md-4 col-md-offset-4">
                        <br>
                        <a href="register">
                            <button class=" col-xs-offset-3 col-sm-offset-3 col-md-offset-1  col-lg-10 col-md-10 col-sm-6 col-xs-6 sc-button sc-green sc-t-white navbar-btn" >Ξεκίνησε Τώρα </button>
                        </a>
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

                    <div class=" sch-reg-title text-incr-175 font-weight-300 centered-text hidden-xs hidden-sm">Η ολοκληρωμένη λύση προβολής για κάθε εκπαιδευτικό ίδρυμα</div>

                    <div style="position: relative" class="hidden-xs"><img src="/new/img/ipad6.png" class="ipad"></div>

                    <div style="position: relative" class="text-incr-125 sc-t-white">
                        <img src="/new/img/BannerVertical3.png"  class="banner"  style="z-index: 0">

                        <div class="text-container center-block">
                            <img height="290px" width="auto" src="/new/img/iphone.png" class="iphone">
                            {{--<div style="height: 400px; width: 300px; background-color: #00b9d2; margin: 20px 0; position: absolute; z-index: 0"></div>--}}


                                <div class="visible-xs hidden-sm hidden-md hidden-lg xxs-small-banner-content banner-text center-block">
                                        <div class="text-incr-125 font-weight-300 centered-text sc-t-dark-blue banner-title">Η λύση για κάθε εκπαιδευτικό ίδρυμα</div>
                                        <div> <i class="fa fa-trophy text-incr-125 margin-right-10" aria-hidden="true"></i> Δημιουργήστε εύκολα καινότομες υποτροφίες</div>
                                        <div class="margin-top-50"> <i class="fa fa-user text-incr-125 margin-right-10" aria-hidden="true"></i>Διαχειριστείτε το δυναμικό σας</div>
                                        <div class="margin-top-50"> <i class="fa fa-bullhorn text-incr-125 margin-right-10" aria-hidden="true"></i>Προβληθείτε σε μια εκπαιδευτική κοινότητα</div>
                                </div>
                                <div class="banner-text banner-content center-block">
                                    <div class="text-incr-125 font-weight-300 centered-text sc-t-dark-blue banner-title hidden-sm hidden-md hidden-lg">Η λύση για κάθε εκπαιδευτικό ίδρυμα</div>
                                    <div> <i class="fa fa-trophy text-incr-125 margin-right-10" aria-hidden="true"></i> Δημιουργήστε και διαθέστε εύκολα καινότομες υποτροφίες</div>
                                    <div class="margin-top-50"> <i class="fa fa-user text-incr-125 margin-right-10" aria-hidden="true"></i>Διαχειριστείτε το δυναμικό σας</div>
                                    <div class="margin-top-50"> <i class="fa fa-bullhorn text-incr-125 margin-right-10" aria-hidden="true"></i>Προβληθείτε σε μια αμιγώς εκπαιδευτική κοινότητα</div>
                                </div>

                                <a href="/register/school"><button type="button" class="btn btn-danger centered-text btn-school-reg"> Εγγραφή Εκπαιδευτικού Φορέα</button></a>

                        </div>

                    </div>
                </div>

            </div>
        </div>


    </section>

    <!-- Third Section -->
    <section id="sc-landing-sec3" class="sc-landing-sec3 sc-light-grey" style="overflow-x: hidden!important;">
        <div class="container">
            <div class="sc-landing-sec3-content">
                <div class="row">
                    <div class=" col-sm-7 col-xs-12 margin-top-70" >
                        <img class="img-responsive" src="{{asset('new/img/screen2.png')}}">

                    </div>

                    <div class="col-sm-4 col-xs-12 margin-top-70 margin-left-30">
                        <div class="col-xs-12">
                            <h2 class="text-left">Τα σημεία υπεροχής μας</h2>
                        </div>

                        <div class="col-xs-12">
                            <h5 class="text-left"><span><img height="18" width="18" src="{{asset('new/img/check.svg')}}"></span>&nbsp;&nbsp;&nbsp;Τα δημοφιλέστερα εκπαιδευτικά ιδρύματα.</h5>
                        </div>

                        <div class="col-xs-12">
                            <h5 class="text-left"><span><img height="18" width="18" src="{{asset('new/img/check.svg')}}"></span>&nbsp;&nbsp;&nbsp;Καινοτόμες μορφές υποτροφιών.</h5>
                        </div>

                        <div class="col-xs-12">
                            <h5 class="text-left"><span><img height="18" width="18" src="{{asset('new/img/check.svg')}}"></span>&nbsp;&nbsp;&nbsp;Ευκαιρίες Σπουδών.</h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Fourth Section -->
    <section id="sc-landing-sec4" class="sc-landing-sec4">
        <div class="container">
            <div class="sc-landing-sec4-content">

                <h2 class="text-center sc-t-white sc-t-dark-grey margin-bot-50">Αναζήτησε ανάμεσα στα πιο πετυχημένα εκπαιδευτικά ιδρύματα.</h2>


                <div class="row">
                    <div class=" col-lg-6 col-md-7 col-sm-8 col-xs-6 col-xxs-12 col-xxxs-12">
                        <div class="grid">
                            <figure class="effect-lily sc-landing-card" >
                                <img src="{{asset('new/img/sect-photo/college2.png')}}" alt="student" style="" class="img-responsive "/>

                                <figcaption>
                                    <div class="centered-text">
                                        <h2>Κολλέγια</h2>
                                        <p>Αναζητηση</p>
                                    </div>
                                    <a href="{{url('/public/results/1')}}">Αναζήτηση</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>

                    <div class=" col-lg-3 col-md-5 col-sm-4 col-xs-6 col-xxs-12 col-xxxs-12">
                        <div class="grid">
                            <figure class="effect-lily sc-landing-card " >
                                <img src="{{asset('new/img/sect-photo/student2.png')}}" alt="student" style="" class="img-responsive "/>

                                <figcaption>
                                    <div class="centered-text">
                                        <h2>Φροντιστήρια<span></span></h2>
                                        <p>Αναζητηση</p>
                                    </div>
                                    <a href="{{url('/public/results/3')}}">Αναζήτηση</a>
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
                                        <h2>Ξένες<span>Γλώσσες</span></h2>
                                        <p>Αναζήτηση</p>
                                    </div>
                                    <a href="{{url('/public/results/4')}}">Αναζήτηση</a>
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
                                        <h2>Ιδιωτικά<span>Σχολεία</span></h2>
                                        <p>Αναζητηση</p>
                                    </div>
                                    <a href="{{url('/public/results/6')}}">Αναζήτηση</a>
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
                                        <h2>Παιδικοί Σταθμοί<span></span></h2>
                                        <p>Αναζητηση</p>
                                    </div>
                                    <ax href="#">Αναζήτηση</ax>
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
                                        <h2>IEK  & Επαγγελματικές <span> Σχολές</span> </h2>
                                        <p>Αναζητηση</p>
                                    </div>
                                    <a href="{{url('/public/results/2')}}">Αναζήτηση</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

</main>

<footer id="sc-landing-sec5" class="sc-landing-footer sc-dark-blue" style="overflow-x: hidden!important;">
    <div class="container">
        <div class="row  ">
            <div class="pull-left pad-top-50 text-incr-125 col-md-5  col-sm-6 col-xs-5" style="overflow-x: hidden!important;">
                <a href="#" class="sc-t-white margin-right-20 ">Επικοινωνία</a>
                <span  class="clear-fix pad-top-10 pad-bot-10">  <a href="#" class="sc-t-white margin-right-20">Blog</a></span>
                <span class="">  <a href="#" class="sc-t-white">Όροι Χρήσης</a></span>
            </div>

            <div class="pull-right pad-top-40 text-incr-175  pad-right-20" style="overflow-x: hidden!important;">
                <a href="#" class="sc-t-white "> <i class="fa fa-envelope-o" aria-hidden="true"></i>  </a>
                <span>  <a href="#" class="sc-t-white margin-left-20"><i class="fa fa-facebook" aria-hidden="true"></i></a></span>
                <span>  <a href="#" class="sc-t-white margin-left-20"><i class="fa fa-twitter" aria-hidden="true"></i></a></span>
                <br>
                <span>  <a href="#" class="sc-t-white "><i class="fa fa-linkedin" aria-hidden="true"></i></a></span>
                <span>  <a href="#" class="sc-t-white margin-left-20"><i class="fa fa-instagram" aria-hidden="true"></i></a></span>
                <span>  <a href="#" class="sc-t-white margin-left-20 "><i class="fa fa-youtube" aria-hidden="true"></i></a></span>
            </div>
        </div>

        <div class=" centered-text">
            <p class="sc-t-white pad-top-100">© 2016 schol.io . Με την επιφύλαξη κάθε δικαιώματος.</p>
        </div>
    </div>
</footer>

</body>

<script type="text/ng-template" id="customTemplate.html">
    <a>
        {{--<span>@{{ match.model.id }} &nbsp;</span>--}}
        {{--<img ng-src="@{{match.model.png}}" width="16">--}}
        <span ng-bind-html="match.label | uibTypeaheadHighlight:query"></span>
    </a>

</script>



</html>
