<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>schol.io | Διεκδίκησε τώρα την υποτροφία που σου ταιριάζει.</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/favicon-144.ico">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/favicon-72.ico">
    <link rel="apple-touch-icon-precomposed" href="img/favicon-57.ico">

    <!--====== CSS  Styles =======-->
    @include('public.styles')

    <!-- Bootstrap Select -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css">

    <!-- Ribbon CSS -->
    <link href="{{asset('new/css/ribbon.css')}}" rel="stylesheet">

    <!-- Results CSS -->
    <link href="{{asset('new/css/results.css')}}" rel="stylesheet">

    <!-- Input Range CSS -->
    <link href="{{asset('new/css/input-range.css')}}" rel="stylesheet">

    <!-- Angular Material  CSS -->
    {{-- <link href="{{asset('new/css/angular-material.css')}}" rel="stylesheet">--}}

    <!-- jQuery js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <!-- Bootstrap js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Bootstrap Select js  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.4/js/bootstrap-select.min.js"></script>

    <!-- GoogleMap API -->
    <script src="https://maps.googleapis.com/maps/api/js?libraries=geometry,places&language=el&region=GR&key=AIzaSyC18JCENxILnmXA1VGlsjJwBXQi3XZMWVA"></script>
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>

    <!-- Angular js-->
    <!--  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.9/angular.min.js"></script>
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.20/angular.min.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.9/angular-animate.js"></script>

    {{--Angular Library required By Angular Material UI--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.9/angular-aria.min.js"></script>--}}


    <!-- No error Filter:noArray angular 1.3.20 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/2.5.0/ui-bootstrap-tpls.min.js"></script>

    <!-- Angular Material UI-->
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/angular-material/1.1.3/angular-material.min.js"></script>--}}

    <!-- Rating js-->
    <script src="{{asset('/new/js/jquery.raty-fa.js')}}"></script>

    <!-- javascript Results -->
    <script src="{{asset('/new/js/results.js')}}"></script>
    <!--  -->

    <!--  Angular Results App -->
    <script src="{{asset('/new/js/algolia-results.js')}}"></script>

    {{--<script src="{{asset('/new/js/ng-map.min.js')}}"></script>--}}

    <script>
    window.SelectedLocation = "{{ session()->pull('location') }}"
    </script>

    <script>
    window.Schools = "{{ $schools }}"
    </script>

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50" id="home"  ng-app="resultsApp" data-ng-init="" ng-cloak>
    <!-- Scholio Header -->
    <header class="navbar navbar-fixed-top navbar-scroll sc-landing-header" id="header" >
        <div class="container">

            <div class="row">
                <div class="col-md-1 visible-lg visible-md nav-web">
                    <!-- Scholio Branding -->
                    <a class="sc-landing-brand" href="{{ url('/') }}">
                        <div class="sc-landing-logo-sticky" style=" padding-top: 15px">
                            <img src="{{asset('new/img/logo.png')}}" alt="scholio logo">
                        </div>
                    </a>
                </div>

                <div class="col-xs-6  visible-sm visible-xs">
                    <div class="nav-mobile">
                        <a class="" href="{{ url('/') }}">
                            <div class="navbar-brand  sc-landing-logo-sticky">
                                <img src="{{asset('new/img/logo-m.png')}}"alt="scholio logo">
                            </div>
                        </a>
                    </div>
                </div>
                <!-- Scholio sMenu -->

                <!-- Large Menu -->
                <div class="col-md-11 visible-md visible-lg">
                    <div class="">
                        <ul class="nav navbar-nav navbar-right sc-landing-menu">
                            {{--<li class="sc-landing-menu-item"><a href="">ΥΠΟΤΡΟΦΙΕΣ</a></li>--}}
                            @if(auth()->check())
                                <li><a href="{{ url('/dashboard') }}"><button type="button" class="sc-button-landing sc-button sc-green sc-t-white">Διαχείριση</button></a></li>
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
                            <div class="sc-landing-menu-sandwitch-button-sticky sc-landing-menu-sandwitch">
                                <img src="{{asset('new/img/collapse-dark.png')}}" alt="scholio logo">
                            </div>
                        </div>
                    </div>

                    {{--data-toggle="collapse" aria-controls="collapseMenu" --}}
                    <div class="">
                        <div class="navbar-right pull-right margin-right-30 filter-icon"  id="filter-btn">
                            <a class="" role="button"
                               href="" aria-expanded="false">
                                <i class="fa fa-filter margin-right-30 margin-top-30 text-incr-175 sc-t-dark-grey" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>

                    <div class="visible-xs visible-sm">
                        <div class="sc-landing-menu-mobile-holder sc-dark-blue">
                            <div class="pull-right">
                                <div class="sc-landing-menu-mobile-close sc-t-white">x</div>
                            </div>
                            <br><br>
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
                            </div>
                        </div>
                    </div>
                </div>

            </div>  <!-- row -->
        </div> <!-- container-->
    </header>

    <!-- Scholio Main Section. -->
    <main id="main"  class="main"   ng-controller="resultsCtrl" data-ng-init="init()" ng-cloak>
        <div class="container">
            <div class="row up">

            </div>

            <div class="row">
                <!--============ collapseMenu =============-->
                <div id="mobFilt" class="  hidden-md hidden-lg col-xs-8 mob-filter left--300"
                     style="padding: 0 ; width: 254px; box-shadow: 2px 0px 40px 6px #4e4e4e;  margin-top: -79px;">

                    <div class="" style="">
                        <div class="box left-box1" style="z-index: 195;">
                            <p class="text-incr-115 centered-text box1-title"> Πεδία Αναζήτησης
                                <a class="" role="button" id="close-btn"
                                   aria-expanded="false" aria-controls="">
                                    <i class="fa fa-times text-incr-115 sc-t-grey pad-left-35" aria-hidden="true"></i>
                                </a>
                            </p>

                            <div class="centered-text" style="max-width: 338px;" ng-cloak>

                                <select title="Εκπαιδευτικός Φορέας" class="selectpicker" data-width="91%" ng-model="categoryFilter" ng-change="update()">
                                    <option id="drop1" data-icon="glyphicon glyphicon-education" data-subtext="" value="null"
                                            data-content=" <i class='glyphicon glyphicon-education margin-right-5 kf-gray'></i> <span class='kf-gray text-incr-85'> &nbsp;  Εκπαιδευτικός Φορέας</span>">....</option>

                                    <option data-icon="fa fa-university" data-subtext="" class="kf-option" value="1">&nbsp; Κολλέγια</option>
                                    <option data-icon="fa fa-cogs" data-subtext="" class="kf-option" value="2">&nbsp; IEK </option>
                                    <option data-icon="fa fa-pencil" data-subtext="" class="kf-option" value="3">&nbsp;  Φροντιστήρια </option>
                                    <option data-icon="fa fa-flag" data-subtext="" class="kf-option" value="4">&nbsp;  Ξένες Γλώσσες </option>
                                    <option data-icon="fa fa-book" data-subtext="" class="kf-option" value="6">&nbsp;  Ιδιωτικά Σχολεία</option>
                                </select>
                            </div>

                            <div class="input-group centered-text pad-top-20" ng-cloak>
                                <span class="input-group-addon text-incr-115 kf-gray" id="basic-addon1"><i class="fa fa-map-marker margin-right-5"></i></span>
                                <input type="text" ng-model="locationSelected" placeholder="Στην Περιοχή:" id="input1" class="kf-option"
                                        uib-typeahead="address for address in getLocation($viewValue)" typeahead-loading="loadingLocations"
                                        typeahead-no-results="noResults" autocomplete="off">
                            </div>

                            <div class="input-group centered-text pad-top-20 kf-gray" style="width: 89%; margin-top: 15px;" ng-if="!showAll">
                                <input type="range" ng-model="maxDistance" min=0 max=30 step=2 class="margin-bot-10" ng-change="showMap()">
                                <span>Απόσταση μέχρι: &nbsp;&nbsp;@{{ maxDistance }} km </span>
                            </div>




                        </div>

                        <div class=" box left-box2 ">
                            <p class="text-incr-115 centered-text"> Φίλτρα Αναζήτησης</p>

                            <div class="[ form-group ] centered-text" >
                                <input type="checkbox" name="checkbox-1" id="checkbox-1" autocomplete="off" ng-model="scholars" ng-value-true=1 ng-value-false=0/>
                                <div class="[ btn-group ]" >
                                    <label for="checkbox-1" class="[ btn btn-default ]">
                                        <span class="[ glyphicon glyphicon-ok ] kf-gray"></span>
                                        <span> </span>
                                    </label>
                                    <label for="checkbox-1" class="[ btn btn-default ] kf-check kf-gray ">
                                        <i class="fa fa-trophy pad-right-15" aria-hidden="true"></i> Με &nbsp; υποτροφίες
                                    </label>
                                </div>
                            </div>

                            <div class="[ form-group ] centered-text" >
                                <input type="checkbox" name="checkbox-2" id="checkbox-2" autocomplete="off" ng-model="reviews" ng-value-true=1 ng-value-false=0/>
                                <div class="[ btn-group ]" >
                                    <label for="checkbox-2" class="[ btn btn-default ]">
                                        <span class="[ glyphicon glyphicon-ok ] kf-gray"></span>
                                        <span> </span>
                                    </label>
                                    <label for="checkbox-2" class="[ btn btn-default ] kf-check kf-gray  " >
                                        <i class="fa fa-star pad-right-15" aria-hidden="true"></i> Με αξιολογήσεις
                                    </label>
                                </div>
                            </div>

                            <div class="pull-left margin-top-10 sc-t-green" style="margin-left: 32px;" ng-cloak>
                                <span ng-if="resultsFiltered.length==0" ng-cloak class="sc-t-primary"> Δεν Βρέθηκαν αποτελέσματα</span>
                                <span ng-if="resultsFiltered.length==1" ng-cloak>Βρέθηκε @{{resultsFiltered.length}} αποτελέσμα </span>
                                <span ng-if="resultsFiltered.length>1" ng-cloakclass="">Βρέθηκαν @{{resultsFiltered.length}} αποτελέσματα </span>
                            </div>


                        </div>

                    </div>

                </div><!-- collapseMenu -->

                <div class="col-lg-3 col-md-3 hidden-sm hidden-xs hidden-xxs " style="">
                    <div class=" box left-box1">
                        <p class="text-incr-115 margin-left-10"> Πεδία Αναζήτησης</p>

                        <div class="centered-text"  ng-cloak>

                            <select title="Εκπαιδευτικός Φορέας" class="selectpicker" data-width="90%" ng-model="categoryFilter" ng-change="update()" ng-cloak>
                                <option id="drop1" data-icon="glyphicon glyphicon-education" data-subtext="" value="all"
                                        data-content=" <i class='glyphicon glyphicon-education margin-right-5 kf-gray'></i> <span class='kf-gray text-incr-85'> &nbsp;  Εκπαιδευτικός Φορέας</span>">....</option>

                                <option data-icon="fa fa-university" data-subtext="" class="kf-option" value="1">&nbsp; Κολλέγια</option>
                                <option data-icon="fa fa-cogs" data-subtext="" class="kf-option" value="2">&nbsp; IEK </option>
                                <option data-icon="fa fa-pencil" data-subtext="" class="kf-option" value="3">&nbsp;  Φροντιστήρια </option>
                                <option data-icon="fa fa-flag" data-subtext="" class="kf-option" value="4">&nbsp;  Ξένες Γλώσσες </option>
                                <option data-icon="fa fa-book" data-subtext="" class="kf-option" value="6">&nbsp;  Ιδιωτικά Σχολεία</option>
                            </select>
                        </div>
                        <div class="input-group centered-text pad-top-20">
                            <span class="input-group-addon text-incr-115 kf-gray" id="basic-addon1"><i class="fa fa-map-marker margin-right-5"></i></span>
                            {{--<input type="text" class="kf-option" id="input1" placeholder="Περιοχή/πόλη" ng-model="cityFilter">--}}


                            {{--typeahead-show-hint="true"--}}
                            <input type="text" name="loc" ng-model="locationSelected" placeholder="Στην Περιοχή:" id="input1" class="kf-option"
                                   uib-typeahead="address for address in getLocation($viewValue)" typeahead-loading="loadingLocations"
                                   typeahead-no-results="noResults" autocomplete="off" ng-enter="showMap(); onEnter = true">


                            {{-- <input type="text" id="Autocomplete" class="kf-option" ng-autocomplete="result2" ng-model="locationSelected"details="details2" options="options2" placeholder=" Στην Περιοχή:" onchange="ccc()" /> --}}

                        </div>
                                {{--====== Input Range ======--}}
                        <div class="input-group centered-text pad-top-20 kf-gray" style="width: 89%;" ng-if="!showAll">
                            <input type="range" ng-model="maxDistance" min=0 max=30 step=2 class="margin-bot-10" ng-change="showMap(maxDistance)">
                            <span>Απόσταση μέχρι: &nbsp;&nbsp;@{{ maxDistance }} km </span>
                        </div>

                    </div>
                    <div class=" box left-box2 ">
                        <p class="text-incr-115 margin-left-10 margin-top-20"> Φίλτρα Αναζήτησης</p>

                        <div class="[ form-group ] centered-text" >
                            <input type="checkbox" name="checkbox-1" id="checkbox-1" autocomplete="off" ng-model="scholars" ng-value-true=1 ng-value-false=0/>
                            <div class="[ btn-group ]" >
                                <label for="checkbox-1" class="[ btn btn-default ]">
                                    <span class="[ glyphicon glyphicon-ok ] kf-gray"></span>
                                    <span> </span>
                                </label>
                                <label for="checkbox-1" class="[ btn btn-default ] kf-check kf-gray ">
                                    <i class="fa fa-trophy pad-right-15" aria-hidden="true"></i> Με &nbsp; υποτροφίες
                                </label>
                            </div>
                        </div>

                        <div class="[ form-group ] centered-text" >
                            <input type="checkbox" name="checkbox-2" id="checkbox-2" autocomplete="off" ng-model="reviews" ng-value-true=1 ng-value-false=0/>
                            <div class="[ btn-group ]" >
                                <label for="checkbox-2" class="[ btn btn-default ]">
                                    <span class="[ glyphicon glyphicon-ok ] kf-gray"></span>
                                    <span> </span>
                                </label>
                                <label for="checkbox-2" class="[ btn btn-default ] kf-check kf-gray  " >
                                    <i class="fa fa-star pad-right-15" aria-hidden="true"></i> Με αξιολογήσεις
                                </label>
                            </div>
                        </div>


                    </div>

                    <div class="btn-group btn-toggle" style="width: 100%; margin-top: 15px">
                        <button class="btn btn-primary active" style="width: 50%; height: 40px" ng-click="changeView('card')">
                            <i class="fa fa-th-list pad-right-15" aria-hidden="true"></i>Λίστα
                        </button>

                        <button class="btn btn-default " style="width: 50%; height: 40px"ng-click="changeView('map')" >
                            <i class="fa fa-map pad-right-10" aria-hidden="true"></i>Χάρτης
                        </button>

                    </div>

                    <a href="" ng-click="showMap()" ng-show="view=='map'">
                        <button type="button" class="sc-button2 sc-green sc-t-white margin-top-50 center-block" style="width: 230px">
                        <i class="fa fa-map pad-right-15" aria-hidden="true"></i>Ανανέωση Χάρτη</button>
                    </a>
                </div>  <!-- //col-lg-3-->
                <div class="col-lg-9 col-md-9 col-sm-12 kf-col-xs-10 kf-col-xs-offset-1" id="main">

                    <div ng-repeat="school in schools
                            | toArray
                            | orderBy: orderSelect:sortReverse
                            {{--| filter: cityFilter--}}
                            | filter: checkBoxFilter as resultsFiltered">
                        <!--<span ng-show="$last" >Βρεθηκαν @{{$index+1}} αποτελέσματα </span>  -->
                    </div>
                    <div class="pull-left margin-top-10 margin-bot-15" ng-cloak>
                        <span ng-if="resultsFiltered.length==0" ng-cloak class="sc-t-primary"> Δεν Βρέθηκαν αποτελέσματα</span>
                        <span ng-if="resultsFiltered.length==1" ng-cloak>Βρέθηκε @{{resultsFiltered.length}} αποτελέσμα </span>
                        <span ng-if="resultsFiltered.length>1" ng-cloakclass="">Βρέθηκαν @{{resultsFiltered.length}} αποτελέσματα </span>

                        <span class="hidden-lg hidden-md">
                            <a ng-click="changeView('card')" class="" style="margin:0 10px"><i class=" fa fa-file-text-o" aria-hidden="true"></i></a>
                            <a ng-click="changeView('map')"><i class="fa fa-map-marker" aria-hidden="true"></i></a>
                        </span>

                    </div>



                    <!-- CARD VIEW-->
                    <div ng-show="view=='card'" class="main-results">

                        <div class="pull-right margin-top-15 margin-bot-15 sm-pull-left xs-pull-left" >
                            <span class="xs-text-incr-85">
                                <!--<i class='glyphicon glyphicon-filter '></i> -->
                                Ταξινόμηση με βάση
                            </span>

                                <form class="pull-right margin-left-10 margin-top--8 font-90">
                                    <select title="" class="selectpicker font-90 shortDrop" data-width="140px" ng-model="orderSelect">
                                        <!--<option id="drop2" data-subtext="" value=""-->
                                                <!--&lt;!&ndash;data-content=" <i class='glyphicon glyphicon-filter margin-right-5 kf-gray'></i> <span class='kf-gray text-incr-85'&ndash;&gt;-->
                                                <!--&gt; &nbsp; </span>"></option>-->
                                        <option data-icon="fa fa-user" data-subtext="" class="font-90" value="lengthStudents">&nbsp; Μαθητές</option>
                                        <option data-icon="fa fa-trophy" data-subtext="" class="font-90" value="lengthScholarships">&nbsp; Υποτροφίες</option>
                                        <option data-icon="fa fa-map-marker" data-subtext="" class="font-90" value="-distance">&nbsp; Απόσταση</option>
                                        <option data-icon="fa fa-star-half-o" data-subtext="" class="font-90" value="reviews">&nbsp; Αξιολόγηση</option>
                                    </select>
                                </form>
                        </div>

                        <ul style="list-style-type: none;" id="cards">
                            <li class="" ng-repeat="school in schools
                            | toArray
                            | orderBy: orderSelect:sortReverse
                            {{--| filter: cityFilter--}}
                            | filter: checkBoxFilter
                            | orderBy: orderSelect:sortReverse
                            | limitTo:itemsPerPage:((currentPage-1)*itemsPerPage )">

                                <div class="card clear-fix margin-bot-25">

                                    <div class="card-ribbon">
                                        <div  ng-show="school.top==5" class="ribbon top5"><span style="font-size: smaller">top @{{school.top}}</span></div>
                                        <div  ng-show="school.top==10" class="ribbon top10"><span style="font-size: smaller">top @{{school.top}}</span></div>
                                        <div  ng-show="school.top==20" class="ribbon top20"><span style="font-size: smaller">top @{{school.top}}</span></div>
                                    </div>

                                    <con>
                                        <photo class="">
                                            <a href="/public/profile/@{{school.school_id}}">
                                                <img id="img0" class=" card-photo pull-left "
                                                ng-style="{'background-image':'linear-gradient(rgba(206, 255, 255, 0.01), rgba(0, 0, 0, 0.40)), url(/images/schools/@{{school.image}})'}"
                                                >
                                            </a>
                                        </photo>
                                        <div class="card-ribbon">
                                            <img id="img2" class=" sc-white img-med hidden-lg hidden-xs" ng-src="/images/schools/@{{school.logo}}">
                                            <img id="img3" class=" sc-white img-thumb hidden-lg hidden-md hidden-sm " ng-src="/images/schools/@{{school.logo}}">
                                        </div>
                                    </con>

                                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-bot-15 ">
                                            <a href="/public/profile/@{{school.school_id}}" target="_blank">
                                            <img id="img1"  class=" img-mini pull-left margin-right-10 margin-top-15 hidden-md hidden-sm hidden-xs"
                                                 ng-src="/images/schools/@{{school.logo}}">
                                            </a>
                                            <span class="pull-left">
                                                <h5 class="pad-top-10"> <a href="/public/profile/@{{school.school_id}}"> @{{school.name}}</a></h5>
                                                <span  ng-show="school.ratingCounter!=0"> <rating  class="text-incr-85 sc-t-orange" id="Rating"></rating></span>
                                                <span ng-show="school.ratingCounter!=0" class="sc-t-orange"> @{{school.ratingStar}} </span> <span class="xs-text-incr-85">  &nbsp; ( @{{school.ratingCounter}}  Αξιολογήσεις)</span>
                                            </span>
                                        </div>

                                        <div class="col-lg-5 col-md-9  col-lg-6 col-sm-9 col-xs-12 kf-margin-top">
                                            <span><i class="fa fa-trophy pull-left pad-top-3 " aria-hidden="true"></i></span>
                                            <span class="pull-left pad-left-5">Υποτροφίες</span>
                                            <span class="pull-right badge"> @{{school.lengthScholarships}}</span>
                                            <br>
                                            <div class="pad-top-5"></div>
                                            <span><i class="fa fa-user pull-left pad-top-2 " aria-hidden="true"></i></span>
                                            <span class="pull-left pad-left-10" ng-show="school.type_id=='1' || school.type_id=='2' ">Συνδ. Φοιτητές</span>
                                            <span class="pull-left pad-left-10" ng-show="school.type_id!='1' && school.type_id!='2'">Συνδ. Μαθητές</span>
                                            <span class="pull-right">@{{school.lengthStudents}}</span>
                                            <br>
                                        </div>

                                        <div class="col-lg-offset-1 col-lg-6 col-md-9 col-sm-9 col-xs-12 margin-bot-10 kf-margin-top margin-top-3">
                                            <div ng-show="school.type_id==1 || school.type_id==2 ">
                                                <span><i class="fa fa-paint-brush pull-left pad-top-3 " aria-hidden="true"></i></span>
                                                <span class="pull-left pad-left-5">Ειδικότητες Σπουδών</span>
                                                <span class="pull-right">@{{school.lengthStudies}}</span>
                                                <br>
                                                <div class="pad-top-5"></div>
                                            </div>

                                            <span><i class="fa fa-graduation-cap pull-left pad-top-3 " aria-hidden="true"></i></span>
                                            <span class="pull-left pad-left-2 pad-bot-10">Συνδ. Καθηγητές</span>
                                            <span class="pull-right">@{{school.lengthTeachers}}</span>
                                        </div>

                                        <div ng-show="school.type_id!=1 && school.type_id!=2">
                                            <div class="margin-pad" style=""></div>
                                        </div>
                                        <hr >
                                    </div>

                                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 ">

                                        <div class="" ng-cloak>
                                            <div class="col-lg-10 col-md-11 col-sm-6 col-xs-12 sc-t-grey">
                                                <span><i class="fa fa-map-marker pull-left pad-top-3 xs-text-incr-85 " aria-hidden="true"></i></span>
                                                <span class="pull-left pad-left-6 xs-text-incr-85 text-incr-95">@{{school.address}}</span>
                                                <br>
                                                <div class="hidden-xs">
                                                    <span><i class="fa fa-street-view pull-left pad-top-3 " aria-hidden="true"></i></span>
                                                    <span class="pull-left pad-left-3">@{{school.city}} </span>
                                                    <span style="color: #333; font-weight: 100"> &nbsp; @{{school.distance}}km</span>
                                                    <br>
                                                </div>
                                                <div class="pad-top-3"></div>
                                                <span><i class="fa fa-phone pull-left pad-top-2 xs-text-incr-85" aria-hidden="true"></i></span>
                                                <span class="pull-left pad-left-5">@{{school.phone}}</span>
                                                <br>
                                                <div class="pad-top-3"></div>
                                                <span><i class="fa fa-globe pull-left pad-top-3 xs-text-incr-85" aria-hidden="true"></i></span>
                                                <span class="pull-left pad-left-5"> <a href="http://@{{school.website}}/" target="_blank">@{{school.website}}</a></span>

                                                <div class="hidden-xs">
                                                    <br>
                                                    <div class="pad-top-3"></div>
                                                    <span><i class="fa fa-envelope  pull-left pad-top-2 " aria-hidden="true"></i></span>
                                                    <span class="pull-left pad-left-5"> <a href="mailto:@{{school.email}}">@{{school.email}}</a></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-2  col-md-1 col-sm-5 col-xs-12 margin-top-15 card-buttons text-incr-85">
                                                <div class="hidden-xs but-pad">
                                                    <a href="">
                                                        <button type="button" class="sc-button3 sc-dark-green sc-t-white pull-right margin-top-70">
                                                            <i class="fa fa-link pad-right-15" aria-hidden="true"></i>Αίτημα Σύνδεσης</button>
                                                    </a>
                                                </div>

                                                <div class="hidden-lg hidden-md hidden-sm  centered-text margin-top-30">
                                                    <a href="">
                                                        <button type="button" class="sc-button3 sc-dark-green sc-t-white ">
                                                            <i class="fa fa-link pad-right-10" aria-hidden="true"></i> Σύνδεση</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- ====================== -->
                            </li>
                        </ul>

                        <div ng-show="resultsFiltered.length >1">
                        <ul     style="list-style-type: none;"
                                class="pull-right"
                                uib-pagination
                                boundary-link-numbers=true
                                max-size=5
                                rotate=true
                                force-ellipses=true
                                total-items="resultsFiltered.length"
                                items-per-page=10
                                ng-model="currentPage"
                                previous-text="Προηγούμενα"
                                next-text="Επόμενα"
                        ng-click="scrollTop()">
                        </ul>
                    </div>

                    </div>


                    <!-- MAP VIEW-->
                    <div ng-if="view=='map'" class="main-results">
                        <div class="col-xs-12"  id="map" style=" height: 555px;"></div>
                    </div>


                    {{--<div ng-if="view=='map'">--}}
                        {{--<ng-map default-style="false" zoom="10" center="40.6457, 23.0199" style="height: 500px">--}}
                            {{--<info-window id="myInfoWindow">--}}
                                {{--<div ng-non-bindable>--}}
                                    {{--<h4>@{{c.name}}</h4>--}}
                                {{--</div>--}}
                            {{--</info-window>--}}
                            {{--<marker ng-repeat="c in schools--}}
                            {{--| toArray--}}
                            {{--| filter: checkBoxFilter"--}}
                                    {{--position="@{{c.pos}}" title="@{{c.name}}"  on-click="showCity(event, c)">--}}
                            {{--</marker>--}}
                        {{--</ng-map>--}}


                        {{--<p ng-repeat="c in schools--}}
                            {{--| toArray--}}
                            {{--| filter: checkBoxFilter" style="padding: 0; margin: 0">--}}
                             {{--@{{c.name}} @{{c.pos}} @{{c.pos[2]}}--}}
                        {{--</p>--}}


                    </div>
                    </div> <!-- //col-lg-9-->
            </div> <!-- //row-->
        </div> <!-- //container-->
    </main>

    <!-- Footer -->
    @include('public.footer')

</body>
<script>

///// Rating Js //////
$('rating').raty({
    score    : 4.2,
    halfShow : true,
    half     : true,
    starHalf : 'fa fa-fw fa-star-half'
});


$('.btn-toggle').click(function() {
    $(this).find('.btn').toggleClass('active');

    if ($(this).find('.btn-primary').size()>0) {
        $(this).find('.btn').toggleClass('btn-primary');
    }

    $(this).find('.btn').toggleClass('btn-default');

});


//====== This delay must change ====
$(document).ready(function(){$("body").hide().fadeIn(2300);});

</script>

</html>
