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

    <!-- Algolia CSS -->
    {{--<link rel="stylesheet" href="/new/css/algolia.css"></link>--}}
    <link rel="stylesheet" href="/new/css/algolia-search.css"></link>


    <!-- Bootstrap Select -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css">

    <!-- Ribbon CSS -->
     <link href="{{asset('new/css/ribbon.css')}}" rel="stylesheet">

    <!-- Hexagon CSS -->
    <link href="/new/css/Hexagon.css" rel="stylesheet">

    <!-- Input Range CSS -->
    <link href="{{asset('new/css/input-range.css')}}" rel="stylesheet">

    <!-- Results CSS -->
    <link href="{{asset('new/css/results.css')}}" rel="stylesheet">
    <link href="{{asset('new/css/scholarships.css')}}" rel="stylesheet">


    <!-- Algolia InstantSearch CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/instantsearch.js/1/instantsearch.min.css">





    <!-- Input Range CSS -->
{{--    <link href="{{asset('new/css/input-range.css')}}" rel="stylesheet">--}}

    <!-- Angular Material  CSS -->
    {{-- <link href="{{asset('new/css/angular-material.css')}}" rel="stylesheet">--}}

    <!-- jQuery js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <!-- Bootstrap js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Bootstrap Select js  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.4/js/bootstrap-select.min.js"></script>

    <!-- GoogleMap API -->
    {{--<script src="https://maps.googleapis.com/maps/api/js?libraries=geometry,places&language=el&region=GR&key=AIzaSyC18JCENxILnmXA1VGlsjJwBXQi3XZMWVA"></script>--}}
    {{--<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>--}}

    <!-- Angular js-->
    <!--  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular.min.js"></script>
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.20/angular.min.js"></script>-->
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.9/angular-animate.js"></script>--}}
    {{--<script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.angular.min.js"></script>--}}
    {{--<script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.angular.min.js"></script>--}}


    {{--Angular Library required By Angular Material UI--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.9/angular-aria.min.js"></script>--}}


    <!-- No error Filter:noArray angular 1.3.20 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/2.5.0/ui-bootstrap-tpls.min.js"></script>

    <!-- Angular Material UI-->
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/angular-material/1.1.3/angular-material.min.js"></script>--}}

    <!-- Rating js-->
    {{--<script src="{{asset('/new/js/jquery.raty-fa.js')}}"></script>--}}

    <!-- javascript Results -->
    {{--<script src="{{asset('/new/js/')}}"></script>--}}
    <!--  -->

    <!--  Angular Results App -->
    {{--<script src="{{asset('/new/js/')}}"></script>--}}

    {{--<script src="{{asset('/new/js/ng-map.min.js')}}"></script>--}}

        <!--  Algolia & Algolia Autocomplete -->
    {{--<script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>--}}
    {{--<script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>--}}


    <!-- Algolia InstantSearch.JS -->
    <script src="https://cdn.jsdelivr.net/instantsearch.js/1/instantsearch.min.js"></script>


{{--    <script src="{{asset('/new/js/algolia-search.js')}}"></script>--}}

    <script>
    window.SelectedLocation = "{{ session()->pull('location') }}"
    </script>

</head>



<body data-spy="scroll" data-target=".navbar" data-offset="50" id="home"  ng-app="scholarshipsResultsApp"  ng-controller="scholarshipsResultsCtrl" data-ng-init="init()"  ng-cloak>
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
    <main id="main"  class="main"  ng-cloak>
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
                                <select title="Εκπαιδευτικός Φορέας" class="selectpicker" data-width="91%" ng-model="categoryFilter" ng-change="">
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
                                <input type="range" ng-model="maxDistance" min=0 max=30 step=2 class="margin-bot-10" ng-change="">
                                <span>Απόσταση μέχρι: &nbsp;&nbs@{{ maxDistance }} km </span>
                            </div>




                        </div>


                    </div>

                </div><!-- collapseMenu -->

                <div class="col-lg-3 col-md-3 hidden-sm hidden-xs hidden-xxs" >
                    {{--<div class="left-box1">--}}

                        {{--<div class="centered-text margin-top-30" style="max-width: 338px;" ng-cloak>--}}
                            {{--<select title="Εκπαιδευτικός Φορέας" class="selectpicker" data-width="91%">--}}
                                {{--<option id="" data-icon="glyphicon glyphicon-education" data-subtext="" value="null"--}}
                                        {{--data-content=" <i class='glyphicon glyphicon-education margin-right-5 kf-gray'></i> <span class='kf-gray text-incr-85'> &nbsp;  Εκπαιδευτικός Φορέας</span>">....</option>--}}

                                {{--<option data-icon="fa fa-university" data-subtext="" class="kf-option" value="1">&nbsp; Κολλέγια</option>--}}
                                {{--<option data-icon="fa fa-cogs" data-subtext="" class="kf-option" value="2">&nbsp; IEK </option>--}}
                                {{--<option data-icon="fa fa-pencil" data-subtext="" class="kf-option" value="3">&nbsp;  Φροντιστήρια </option>--}}
                                {{--<option data-icon="fa fa-flag" data-subtext="" class="kf-option" value="4">&nbsp;  Ξένες Γλώσσες </option>--}}
                                {{--<option data-icon="fa fa-book" data-subtext="" class="kf-option" value="6">&nbsp;  Ιδιωτικά Σχολεία</option>--}}
                            {{--</select>--}}

                            {{--<div class="input-container">--}}
                                {{--<input class="input-box" type="text"  id="" placeholder="Αναζήτησε πχ Αγγλικά, ή Λύκειο"/>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="location-container font-weight-300">--}}
                            {{--<div class="input-group centered-text pad-top-20" ng-cloak>--}}
                                {{--<span class="input-group-addon text-incr-115 kf-gray " id="basic-addon1"><i class="fa fa-map-marker margin-right-5"></i></span>--}}
                                {{--<input type="text" ng-model="locationSelected" placeholder="Στην Περιοχή:" id="input1" class="kf-option"--}}
                                       {{--uib-typeahead="address for address in getLocation($viewValue)" typeahead-loading="loadingLocations"--}}
                                       {{--typeahead-no-results="noResults" autocomplete="off">--}}
                            {{--</div>--}}

                            {{--<div class="input-group centered-text pad-top-20 kf-gray" style="width: 89%; margin-top: 15px;" ng-if="!showAll">--}}
                                {{--<input type="range" ng-model="maxDistance" min=0 max=30 step=2 class="margin-bot-10" ng-change="showMap()">--}}
                                {{--<span>Απόσταση μέχρι: &nbsp;&nbsp;@{{ maxDistance }} km </span>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="left-box4 font-weight-300 sc-t-grey centered-text margin-top-30">--}}
                    {{--Βρέθηκαν 3 αποτελέσματα--}}
                    {{--</div>--}}

                    <div class="col-sm-12">
                        <div class="input-group margin-bot-15" style="width:290px; padding: 0; margin-left: -16px; ">
                            <input type="text" class="form-control font-weight-300" id="query" style="border-radius: 5px; font-size: 95%"/>
                        </div>
                    </div>



                    <div class="content-wrapper col-sm-12">
                        <aside>

                            <div id="stats" class="text-muted "></div>
                            <div class="facet-category-title facet font-weight-300">Βρέθηκαν υποτροφίες από:</div>
                            <div class="filter-title">Επαιδευτικά Ιδρύματα</div>
                            <div id="categoriesType"></div>
                            <div class="filter-title">Πόλεις</div>
                            <div id="categoriesCity"></div>
                            <div class="filter-title">Αντικείμενο Σπουδών</div>
                            <div id="categoriesSection"></div>
                            <div class="filter-title">Επίπεδο Σπουδών</div>
                            <div id="categoriesLevel"></div>
                            {{--<div id="financial" class="facet"></div>--}}


                        </aside>
                        <div id="clear-all" style="width: 190px; margin-left: auto; margin-right: auto"></div>
                    </div>


                </div>  <!-- //col-lg-3-->



                <!-- ========== SCHOLARSHIPS  CONTAINER ============= -->
                <div class="col-lg-9 col-md-9 col-sm-12 scholarship-container " id="">


                    <main id="scholarships"></main>
                    <section id="pagination"></section>


                </div><!-- //col-lg-9-->






            </div> <!-- //row-->
        </div> <!-- //container-->
    </main>

    <!-- Footer -->
    @include('public.footer')

</body>



<script>


angular.module("scholarshipsResultsApp",[])
        .controller("scholarshipsResultsCtrl",function ($scope,$http) {

//            $scope.results = $http.get("api/...." + id)
//                    .success(function (data) {
//                        $scope.results = data
//                    })

            console.log('start');

            $scope.test=true;



        })



</script>


<script>
    'use strict';
    /* global instantsearch */

    var search = instantsearch({
        appId: 'FM3GHJGA1T',
        apiKey: 'de6f693844a49775415380088208bc66',
        indexName: 'scholarships'
    });

    search.addWidget(
            instantsearch.widgets.searchBox({
                container: '#query',
                placeholder: 'Αναζήτησε υποτροφία: π.χ. marketing ή Λύκειο'
            })
    );

    search.addWidget(
            instantsearch.widgets.stats({
                container: '#stats'
            })
    );

    search.on('render', function() {
        $('.product-picture img').addClass('transparent');
        $('.product-picture img').one('load', function() {
            $(this).removeClass('transparent');
        }).each(function() {
            if(this.complete) $(this).load();
        });
    });

    var hitTemplate =

            '  <div>'+
            '<div class=" col-xs-12 pad-0-mar-0 inner-container">'+
//            '<div class="ribbon top20"><span style="font-size: 95%; ">Πλήρης</span></div>'+

                <!-- ========== Scholarship Header ============= -->
            '<div class="col-xs-12 scholar-header">'+
            '<div class="circle margin-top-8 pull-left">'+
            '<div class=" trophy-container centered-abs">'+
            '<img class="trophy-img centered" src="/new/img/trophy4.png" alt="">'+
            '</div>'+
            '</div>'+
            '<div class="header-text margin-top-20 pull-left margin-left-10"> Υποτροφία από: @{{{_highlightResult.school.admin.name.value}}}</div>'+
            '<div class="header-line"></div>'+
            '</div>'+

                <!-- ========== Scholarship Section1 Αντικειμενο Σπουδών ============= -->
            '<div class="col-xs-12 pad-0-mar-0 section-container">'+
            '<div class="col-lg-4 col-md-6 col-sm-4 section1 ">'+
            '<div class="hex-container centered">'+
            '<div class="hexagon3 hex">'+
            '<span></span>'+
            '<img class="centered-abs hex-img" src="/panel/assets/images/steps/Οικονομία & Διοίκηση.png" alt="">'+
            '</div>'+
            '</div>'+
            '<div class="centered-text">'+
            '<div class="text-title">Αντικείμενο Σπουδών</div>'+
            '<div class="text-content">@{{{_highlightResult.study.name.value}}}</div>'+
            '<div class="text-title">Επίπεδο Σπουδών</div>'+
            '<div class="text-content">Προπτυχιακές Σπουδές-Bachelor</div>'+
{{--            '<div class="text-content">@{{{_highlightResult.study.section.name.value}}}</div>'+--}}
            '</div>'+
            '</div>'+

                <!-- ========== Scholarship Section2 Κριτήρια ============= -->
            '<div class="col-lg-4 col-md-6 col-sm-4 section2">'+
            '<div class="hex-container centered">'+
            '<div class="hexagon3 hex">'+
            '<span></span>'+
            '<img class="centered-abs hex-img" src="/panel/assets/images/steps/@{{criteria.name}}.png" alt="">'+
            '</div>'+
            '</div>'+
            '<div class="centered-text">'+
            '<div class="text-title">@{{criteria.name}}</div>'+
            '<div class="text-content">Interdum et malesuada fames ac ante ipsum primis in faucibus.'+
                    'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.'+

            '</div>'+
            '</div>'+
            '</div>'+

                <!-- ========== Scholarship Section3 Financial Plan ============= -->
            '<div class="col-lg-4 col-sm-4 hidden-md section3 ">'+
                    '<div class="hex-container centered">'+
                    '<div class="hexagon3 hex" style="">'+
                    '<span></span>'+
                    '<img class="centered-abs hex-img" src="/panel/assets/images/steps/step1-hand2.png" alt="">'+
                    '</div>'+
                    '</div>'+
                    '<div class="centered-text">'+
                    '<div class="text-title">Ποσό Επιδότησης 800 €</div>'+
            '<div class="text-content">Ιn faucibus interdum et malesuada fames ac ante ipsum primis.Torquent per conubia nostra.'+

            '</div>'+
            '</div>'+
            '</div>'+

            '<div class="col-md-12 hidden-xs hidden-lg hidden-sm visible-md section4" ></div>'+
            '</div>'+


            '<div class="col-xs-12 scholar-footer ">'+
            '<div class="col-xs-9 sc-t-grey font-weight-300">'+
            '<div class="col-xs-5 pad-0-mar-0" >'+
            '<span class="col-xs-7 pad-0-mar-0">'+
            '<div class="">  <i class="fa fa-pencil margin-right-10"></i>Αιτήθηκαν:</div>'+
    '<div class="margin-top-5">  <i class="fa fa-thumbs-o-up margin-right-10"></i>Ενδιαφέρθηκαν:</div>'+
    '</span>'+
    '<span class="col-xs-3 text-right">'+
            '<div class="">34</div>'+
            '<div class="margin-top-5">123</div>'+
            '</span>'+
            '</div>'+
            '<div class="col-xs-6">'+
            '<span class="col-xs-7">'+
            '<div class="margin-top-5">  <i class="fa fa-pencil-square-o margin-right-10"></i>Με εξετάσεις:</div>'+
    '<div class="">  <i class="fa fa-flag-o margin-right-10"></i>Λήγει:</div>'+
    '</span>'+
    '<span class="col-xs-5 text-right">'+
            '<div class="margin-top-5" > NAI</div>'+
            '<div class="">10 Μαϊ 2017</div>'+
    '</span>'+
    '</div>'+

    '</div>'+


    '<div class="col-xs-3">'+



            '<a href="/scholarship/@{{id }}">'+
            '<button type="button" class="sc-button-landing sc-button sc-green sc-t-white pull-right btn-provoli">'+
            '<i class="fa fa-file-text-o margin-right-10" aria-hidden="true"></i> Προβολή'+
            '</button>'+
            '</a>'+
            '</div>'+

            '</div>'+
            '</div>'+
            '</div> ';

    var noResultsTemplate =
            '<div class="text-center">Δεν βρέθηκαν αποτελέσματα για <strong>@{{query}}</strong>.</div>';

    var menuTemplate =
            '<a href="javascript:void(0);" class="facet-item @{{#isRefined}}active@{{/isRefined}}"><span class="facet-name"><i class="fa fa-angle-right"></i> @{{name}}</span class="facet-name"></a>';

    {{--var facetTemplateCheckbox =--}}
            {{--'<a href="javascript:void(0);" class="facet-item">' +--}}
            {{--'<input type="checkbox" class="@{{cssClasses.checkbox}}" value="@{{name}}" @{{#isRefined}}checked@{{/isRefined}} />@{{name}}' +--}}
            {{--'<span class="facet-count">(@{{count}})</span>' +--}}
            {{--'</a>';--}}

    {{--var facetTemplateColors =--}}
            {{--'<a href="javascript:void(0);" data-facet-value="@{{name}}" class="facet-color @{{#isRefined}}checked@{{/isRefined}}"></a>';--}}

    search.addWidget(
            instantsearch.widgets.hits({
                container: '#scholarships',
                hitsPerPage: 5,
                templates: {
                    empty: noResultsTemplate,
                    item: hitTemplate
                },
                transformData: function(hit) {
                    hit.stars = [];
                    for (var i = 1; i <= 5; ++i) {
                        hit.stars.push(i <= hit.rating);
                    }
                    return hit;
                }
            })
    );

    search.addWidget(
            instantsearch.widgets.pagination({
                container: '#pagination',
                cssClasses: {
                    active: 'active'
                },
                labels: {
                    previous: '<i class="fa fa-angle-left fa-2x"></i> Προηγούμενη Σελίδα',
                    next: 'Επόμενη Σελίδα <i class="fa fa-angle-right fa-2x"></i>'
                },
                showFirstLast: false
            })
    );

    search.addWidget(
            instantsearch.widgets.hierarchicalMenu({
                container: '#categoriesType',
                attributes: ['school.type.name'],
//                 attributes: ['school.type.name','school.city'],
                sortBy: ['name:asc'],
                templates: {
                    item: menuTemplate
                }
            })
    );


    search.addWidget(
            instantsearch.widgets.hierarchicalMenu({
                container: '#categoriesCity',
                attributes: ['school.city'],
                sortBy: ['name:asc'],
                templates: {
                    item: menuTemplate
                }
            })
    );

    search.addWidget(
            instantsearch.widgets.hierarchicalMenu({
                container: '#categoriesSection',
                attributes: ['study.section.name'],
                sortBy: ['name:asc'],
                templates: {
                    item: menuTemplate
                }
            })
    );

    search.addWidget(
            instantsearch.widgets.hierarchicalMenu({
                container: '#categoriesLevel',
                attributes: ['study.section.level.name'],
                sortBy: ['name:asc'],
                templates: {
                    item: menuTemplate
                }
            })
    );

    // search.addWidget(
    //   instantsearch.widgets.refinementList({
    //     container: '#materials',
    //     attributeName: 'materials',
    //     operator: 'or',
    //     limit: 10,
    //     templates: {
    //       item: facetTemplateCheckbox,
    //       header: '<div class="facet-title">Materials</div class="facet-title">'
    //     }
    //   })
    // );

    // search.addWidget(
    //   instantsearch.widgets.refinementList({
    //     container: '#colors',
    //     attributeName: 'colors',
    //     operator: 'or',
    //     limit: 10,
    //     templates: {
    //       item: facetTemplateColors,
    //       header: '<div class="facet-title">Colors</div class="facet-title">'
    //     }
    //   })
    // );

    // search.addWidget(
    //   instantsearch.widgets.starRating({
    //     container: '#rating',
    //     attributeName: 'rating',
    //     templates: {
    //       header: '<div class="facet-title">Ratings</div class="facet-title">'
    //     }
    //   })
    // );

//     search.addWidget(
//       instantsearch.widgets.priceRanges({
//         container: '#financial',
//         attributeName: 'financial_amount',
//         cssClasses: {
//           list: 'nav nav-list',
//           count: 'badge pull-right',
//           active: 'active'
//         },
//         templates: {
//           header: '<div class="facet-title">Ποσό Επιδότησης</div class="facet-title">'
//         }
//       })
//     );

    // search.addWidget(
    //   instantsearch.widgets.sortBySelector({
    //     container: '#sort-by-selector',
    //     indices: [
    //       {name: 'ikea', label: 'Featured'},
    //       {name: 'ikea_price_asc', label: 'Price asc.'},
    //       {name: 'ikea_price_desc', label: 'Price desc.'}
    //     ],
    //     label:'sort by'
    //   })
    // );

    search.addWidget(
            instantsearch.widgets.clearAll({
                container: '#clear-all',
                templates: {
                    link: '<i class="fa fa-eraser"></i>Καθαρισμός Φίλτρων'
                },
                cssClasses: {
                    root: 'btn btn-block btn-default'
                },
                autoHideContainer: true
            })
    );

    search.start();

</script>

</html>
