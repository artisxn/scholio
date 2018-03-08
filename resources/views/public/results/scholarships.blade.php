<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"> <!-- prevent zoomIn in mobile inputs,selects,etc -->
    <meta property="fb:pages" content="934370089973049" />

    <title>schol.io | Διεκδίκησε την υποτροφία σου.</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/new/img/favicon.ico" type="image/x-icon" />

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/new/img/favicon-144.ico">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/new/img/favicon-72.ico">
    <link rel="apple-touch-icon-precomposed" href="/new/img/favicon-57.ico">


    <!--====== CSS  Styles =======-->
    @include('public.styles')
    {{--@include('components.modals.styles')--}}

    <!-- FontAwesome -->
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">--}}

    <!-- Algolia CSS -->
    {{--<link rel="stylesheet" href="/new/css/algolia.css"></link>--}}
    <link rel="stylesheet" href="/new/css/algolia-search.css"></link>

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/instantsearch.js/1/instantsearch.min.css" />

    <!-- Bootstrap Select -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css">

    <!-- Ribbon CSS -->
     {{--<link href="{{asset('new/css/ribbon.css')}}" rel="stylesheet">--}}

    <!-- Hexagon CSS -->
    <link href="/new/css/Hexagon.css" rel="stylesheet">

    <!-- Input Range CSS -->
    {{--<link href="{{asset('new/css/input-range.css')}}" rel="stylesheet">--}}

    <!-- Results CSS -->
    <link href="{{asset('new/css/results.css')}}" rel="stylesheet">
    <link href="{{asset('new/css/scholarships.css')}}" rel="stylesheet">


    <!-- Algolia InstantSearch CSS -->
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/instantsearch.js/1/instantsearch.min.css"> -->

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/instantsearch.js@2.5.0/dist/instantsearch.min.css">






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

    <!-- javascript Results -->
    <script src="{{asset('/new/js/results.js')}}"></script>


    <!--  Angular Results App -->
    {{--<script src="{{asset('/new/js/')}}"></script>--}}

    {{--<script src="{{asset('/new/js/ng-map.min.js')}}"></script>--}}

        <!--  Algolia & Algolia Autocomplete -->
    {{--<script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>--}}
    {{--<script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>--}}


    <!-- Algolia InstantSearch.JS -->
    <script src="https://cdn.jsdelivr.net/instantsearch.js/1/instantsearch.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/instantsearch.js@2.5.0"></script> -->

    <script src="https://maps.googleapis.com/maps/api/js?libraries=geometry,places&language=el&region=GR&key=AIzaSyC18JCENxILnmXA1VGlsjJwBXQi3XZMWVA"></script>
    <script src="https://cdn.jsdelivr.net/instantsearch-googlemaps/1/instantsearch-googlemaps.min.js"></script>


{{--    <script src="{{asset('/new/js/algolia-search.js')}}"></script>--}}

    <script>
    // window.SelectedLocation = "{{ session()->pull('location') }}"
    window.Search = "{{ session('search') }}"
    </script>

     @include('javascript_lang')
</head>

<style>


    .logo-img{max-height: 46px; max-width: 46px; margin-top: 6px; margin-left: -3px;}
    /*.mobile-input input[type='text']{font-size: 16px;}*/
    /*select{  font-size: 16px;  height: 36px; padding: 2px; margin-bottom: 7px;}*/

    .talent-back{background: #d3ecf5
    }
    .talent-border{border-color: #D3ECF5
    }








</style>



<body data-spy="scroll" data-target=".navbar" data-offset="50" id="home"  ng-app="scholarshipsResultsApp"  ng-controller="scholarshipsResultsCtrl" data-ng-init="init()"  ng-cloak>
    @include('components.preloader')
    <!-- Scholio Header -->
    <header class="navbar navbar-fixed-top navbar-scroll sc-landing-header" id="header" >
        <div class="container">

            <div class="row schools-nav-row" >
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

                <div class="pull-left">
                @if(config('scholio.show.fakeLogin'))
                         <form method="GET" action="/fake/login" style="display: inline-block; position: absolute; top: 18px; margin-left: 110px; color: #555">
                    <select onchange="this.form.submit()" style="border: none; background-color: transparent; margin: -15px; width: 250px;" name="userID">
                            @foreach(App\User::all() as $key=>$user)
                                @if(auth()->check() && auth()->user()->id == $user->id)
                                    <option data-icon="fa" value="{{ $user->id }}" selected="selected">{{ $user->role }}-{{$user->name}} | {{ $user->id }} </option>
                                @else
                                @if($key == 0)
                                <option disabled selected value> -- user -- </option>
                                @endif
                                    <option data-icon="fa" value="{{ $user->id }}">{{ $user->role }}-{{$user->name}} | {{ $user->id }} </option>
                                @endif
                            @endforeach
                    </select>
                </form>
                @endif
                </div>

                <!-- Large Menu -->
                <div class="pull-right visible-md visible-lg">
                    <div class="">
                        <ul class="nav navbar-nav navbar-right sc-landing-menu">


                        <li class="langDropWhite" style="margin-top: -2px; ">
                        <form method="GET" id="langForm">
                            <select onchange="changeLang(this)" class="selectpicker " data-live-search="false" data-mobile="false" data-size='2' data-width="100%" data-style="btn-white">
                                <option style="color: black" data-icon="fa" value="en" {{ request()->cookie('lang')=='en' ? 'selected':'' }}>&nbsp; ENG</option>
                                <option style="color: black" data-icon="fa" value="el" {{ request()->cookie('lang')=='el' ? 'selected':'' }}>&nbsp; GR</option>
                            </select>
                            </form>
                        </li>

                            <li class="sc-landing-menu-item">
                                <a href="{{url('public/schools')}}" class="btn-change-search">
                                    <i class="fa fa-university margin-right-5"></i>
                                    @lang('scholarships.search_institution')
                                </a>
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
                                        <button type="button" class="sc-button-landing sc-button sc-dark-green sc-t-white"
                                                {{--data-toggle="modal" data-target="#signIn-modal"--}}
                                        >@lang('main.navigation.login')</button>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
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

                    {{--data-toggle="collapse" aria-controls="collapseMenu" --}}
                    <div class="">
                        <div class="navbar-right pull-right margin-right-30 filter-icon"  id="filter-btn">
                            <a class="" role="button" href="" aria-expanded="false">
                                <i class="fa fa-filter margin-right-10 margin-top-30 sc-t-dark-grey" style="font-size: 180%; z-index: 5!important;" aria-hidden="true" ></i>
                            </a>
                        </div>
                    </div>

                </div>

                <!-- ======= Sandwich Menu =======-->
                @include('public.sandwich-menu-resultsScholarships')








            </div>  <!-- row -->
        </div> <!-- container-->
    </header>

    <!-- Scholio Main Section. -->
    <main id="main"  class="main"  ng-cloak>
        <div class="container">
            <div class="row up">

            </div>

            <div class="row">
                <!-- ============== collapse Mobile Menu start ============= -->
                <div id="mobFilt" class="hidden-md hidden-lg col-xs-8 mob-filter left--300">

                        <div>
                            <div class="input-group margin-bot-15 mobile-input">
                                <input type="text" class="form-control algolia-search-input " id="queryMobile" style="border-radius: 5px;" />
                            </div>
                        </div>

                        <span class="sort-by-text">@lang('scholarships.filters.sortby')</span>
                        <div id="sort-by-container-mobile"></div>

                        <div class="content-wrapper ">
                            <aside>

                                <div id="statsMobile" class=""></div>
                                <div class="facet-category-title">@lang('scholarships.filters.title'):
                                    <a class="" role="button" id="close-btn"
                                       aria-expanded="false" aria-controls="">
                                        <i class="fa fa-times text-incr-115 sc-t-grey pad-left-35" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <div id="clear-allMobile"  class="clear-filter-mobile"></div>

                                <div class="filter-container">
                                    <div class="filter-title" >
                                        <i class="fa fa-university fa-linear5 margin-right-5"></i>
                                        @lang('scholarships.filters.institutions')</div>
                                    <div id="categoriesTypeMobile" ></div>
                                </div>

                                <div class="filter-container">
                                    <div class="filter-title">
                                        <i class="fa fa-map-marker fa-linear5 margin-right-5"></i>
                                        @lang('scholarships.filters.cities')</div>
                                    <div id="categoriesCityMobile"></div>
                                </div>
                                <div class="filter-container">
                                    <div class="filter-title">
                                        <i class="fa fa-book fa-linear5 margin-right-5"></i>
                                        @lang('scholarships.filters.studies')</div>
                                    <div id="categoriesSectionMobile"></div>
                                </div>
                                <div class="filter-container">
                                    <div class="filter-title"><i class="fa fa-graduation-cap fa-linear5 margin-right-5"></i>
                                        @lang('scholarships.filters.level')</div>
                                    <div id="categoriesLevelMobile"></div>
                                </div>
                                <div class="filter-container">
                                    <div class="filter-title">
                                        <i class="fa fa-check-square fa-linear5 margin-right-5"></i>
                                        @lang('scholarships.filters.criteria')</div>
                                    <div id="categoriesCriteriaMobile"></div>
                                </div>

                            </aside>
                        </div>

                </div>
                <!-- ============== collapse Mobile Menu ended ============ -->


                <!-- ============ Left search Menu on Large Screens ============-->
                <div class="col-lg-3 col-md-3 hidden-sm hidden-xs hidden-xxs left-side-container" >


                        <div class="input-group margin-bot-15 algolia-search-container">
                            <input type="text" class="form-control algolia-search-input" id="query"/>
                        </div>

                    <span class="sort-by-text">@lang('scholarships.filters.sortby')</span>
                    <div id="sort-by-container"></div>



                    <div id="sort-by-container" ></div>

                    <div class="content-wrapper">
                        <aside >

                            <div id="stats" class=""></div>
                            <div class="facet-category-title">@lang('scholarships.filters.title'):</div>


                            <div id="clear-all" class="clear-filter"> </div>



                            <div class="filter-container";">
                                <div class="filter-title" >
                                    <i class="fa fa-university fa-linear5 margin-right-5"></i>
                                    @lang('scholarships.filters.institutions')</div>
                                <div id="categoriesType" ></div>
                            </div>

                            <div class="filter-container">
                                <div class="filter-title">
                                    <i class="fa fa-map-marker fa-linear5 margin-right-5"></i>
                                    @lang('scholarships.filters.cities')</div>
                                <div id="categoriesCity"></div>
                            </div>
                            <div class="filter-container">
                                <div class="filter-title">
                                    <i class="fa fa-book fa-linear5 margin-right-5"></i>
                                    @lang('scholarships.filters.studies')</div>
                                <div id="categoriesSection"></div>
                            </div>
                            <div class="filter-container">
                                <div class="filter-title">
                                    <i class="fa fa-graduation-cap fa-linear5 margin-right-5"></i>
                                    @lang('scholarships.filters.level')</div>
                                <div id="categoriesLevel"></div>
                            </div>

                            <div class="filter-container">
                                <div class="filter-title">
                                    <i class="fa fa-check-square fa-linear5 margin-right-5"></i>
                                @lang('scholarships.filters.criteria')</div>
                                <div id="categoriesCriteria"></div>
                            </div>
                            {{--<div id="financial" class="facet"></div>--}}


                        </aside>

                    </div>


                </div>  <!-- //col-lg-3-->



                <!-- ========== SCHOLARSHIPS  CONTAINER ============= -->
                <div class="col-lg-9 col-md-9 col-sm-12 scholarship-container " id="">

                    {{--<div id="map" style="height: 300px; width: 100%; margin-bottom: 20px;"></div>--}}

                    <main id="scholarships">
                    </main>
                    <section id="pagination"></section>




                </div><!-- //col-lg-9-->






            </div> <!-- //row-->
        </div> <!-- //container-->
    </main>

    <!-- Footer -->
    @include('public.footer')

</body>



<script>


    var open = false;
    function dropReport(school){
        if(open==false){
            $('#card1'+school).css('filter','blur(2px)');
            $('#report-drop'+school).animate({opacity:1, width: 220, height: 260}, 190,"swing");
        }
        else{
            $('#report-drop'+school).animate({opacity:0, width: 0, height: 0}, 150,"swing");
            $('#card1'+school).css('filter','blur(0px)');
        }
        open=!open
    }




angular.module("scholarshipsResultsApp",[])
        .controller("scholarshipsResultsCtrl",function ($scope,$http) {

            $scope.over=false;
            $scope.over2=false;
            $scope.over3=false;
            $scope.role=null;
            $scope.active=function(role){
                $scope.role=role;
            }
            $scope.ttt = 'ppp';



        })



</script>


<script>
    'use strict';
    /* global instantsearch */

    var search = instantsearch({
        appId: 'FM3GHJGA1T',
        apiKey: 'de6f693844a49775415380088208bc66',
        indexName: 'dummyScholarships',
        urlSync: true
    });

    search.addWidget(
            instantsearch.widgets.searchBox({
                container: '#query',
                 poweredBy: false,
                 placeholder: "@lang('scholarships.navigation.search_scholarships')"
            })
    );

    search.addWidget(
            instantsearch.widgets.searchBox({
                container: '#queryMobile',
                 poweredBy: false,
                 placeholder: "@lang('scholarships.navigation.search_scholarships')"
            })
    );

    search.addWidget(
            instantsearch.widgets.stats({
                container: '#statsMobile'
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

    var hitTemplate = `

     <div class=" col-xs-12 pad-0-mar-0 inner-container">


           <i id="report" class="fa fa-ellipsis-h report report-scholar" onClick="dropReport(@{{scholarship_id}})" ></i>
                <!-- =================== Report  Menu ====================-->
            <div class="report-drop report-scholar-drop" id="report-drop@{{scholarship_id}}" style="overflow:hidden!important">
            <img class="report-logo"  src="/new/img/logoNX-m.png" alt="" style="overflow:hidden!important">
            <span class="report-title"> Αναφορά </span>
            <form method="POST" action="/report/add/@{{scholarship_id}}/Profile" >
            {{ csrf_field() }}
            <div class="report-text" style="overflow:hidden!important">
            <button type="submit" style=" width:185px; background: none; border: none; text-align: justify;">

            Αναφορά του εκπαιδευτικού ιδρύματος στο διαχειριστή για προσβλητικό περιεχόμενο
            </button>

            </div>
            </form>
            </div>

        <!-- =====================================================-->


    @{{#adminter}}
        <!-- <div  class="ribbon top5"><span style="font-size: 95%"><i class=" fa fa-bolt" style="margin-right: 7px"></i>Trend</span></div> -->
         <img class="ribbonSm" style="" src="/new/img/RibbonSM.png" alt="">
         <span class="text-corner text-Sm"> <i class=" fa fa-bolt" style="margin-right: 7px"></i>Trend</span>
    @{{/adminter}}
    {{--@{{#adm}}--}}
    @{{#multiple}}
            <img class="ribbonMed" style="" src="/new/img/RibbonMed.png" alt="">
            <span class="text-corner text-Med"> <i class=" fa fa-fire" style="margin-right: 7px"></i>Multiple</span>
    @{{/multiple}}
    {{--@{{/adm}}--}}
    @{{#highAmount}}
            <img class="ribbonL" style="" src="/new/img/RibbonL.png" alt="">
            <span class="text-corner text-L"> <i class=" fa fa-eur" style="margin-right: 7px"></i>High Value</span>
    @{{/highAmount}}


   <div class="col-xs-12 scholar-header">
       <div class="circle margin-top-8 pull-left">
           <div class=" trophy-container centered-abs">
                    <img class="logo-img centered img-circle" src="@{{school_logo}}" alt="">
               <!-- <img class="trophy-img centered" src="/new/img/trophy4.png" alt=""> --!>
           </div>
       </div>
       <div class="header-text margin-top-20 pull-left margin-left-10"> <span class="title-from">@lang('scholarships.cards.scholarship_from'):</span>
            <br class="break"> <span class="title-name"> @{{{_highlightResult.school.value}}}</span></div>
        <div class="xxs-title-name"> @{{{_highlightResult.school.value}}} </div>
        <div class="header-line"></div>
    </div>


    @{{#talent}}
            <div class="col-xs-12 pad-0-mar-0 section-container talent-back">
    @{{/talent}}
    @{{^talent}}
        <div class="col-xs-12 pad-0-mar-0 section-container">
    @{{/talent}}


          @{{#multiple}}
            @{{^talent}}
                <div class="col-lg-4 col-md-6 col-sm-4 section1" style="border: 1px solid #FD6A33; border-top: none">
            @{{/talent}}
          @{{/multiple}}

          @{{#talent}}
            @{{^multiple}}
                <div class="col-lg-4 col-md-6 col-sm-4 section1 talent-border">
            @{{/multiple}}
          @{{/talent}}


          @{{^multiple}}
            @{{^talent}}
                <div class="col-lg-4 col-md-6 col-sm-4 section1">
            @{{/talent}}
          @{{/multiple}}

          @{{#talent}}
            @{{#multiple}}
                <div class="col-lg-4 col-md-6 col-sm-4 section1 talent-border">
            @{{/multiple}}
          @{{/talent}}



               <div class="hex-container centered">

                     @{{#multiple}}
                         <div class="hexagon2 hex">
                            <span></span> <!-- Don't delete this empty span, is for hexagons --!>
                            <img class="centered-abs hex-img" src="/panel/assets/images/steps/studies.png" alt="">
                         </div>
                      @{{/multiple}}
                      @{{^multiple}}
                       <div class="hexagon3 hex">
                             <span></span> <!-- Don't delete this empty span, is for hexagons --!>
                             <img class="centered-abs hex-img" src="/panel/assets/images/steps/@{{section}}.png" alt="">
                        </div>
                        @{{/multiple}}

                </div>
            <div class="centered-text">

                <div class="text-title">@lang('scholarships.cards.study')</div>
                @{{#multiple}}
              <div class="text-content" style="">@lang('scholarships.cards.multiple')</div>
                @{{/multiple}}
                @{{^multiple}}
                <div class="text-content">@{{{_highlightResult.study.value}}}</div>
                @{{/multiple}}

                <div class="text-title">@lang('scholarships.cards.level')</div>
                <div class="text-content">@{{{_highlightResult.level.value}}}</div>
            </div>
        </div>

        @{{#talent}}
        <div class="col-lg-4 col-md-6 col-sm-4 section2 hidden-xxxs talent-border">
        @{{/talent}}
        @{{^talent}}
        <div class="col-lg-4 col-md-6 col-sm-4 section2 hidden-xxxs ">
        @{{/talent}}


            <div class="hex-container centered">
                <div class="hexagon3 hex">
                    <span></span>
                    <img class="centered-abs hex-img" src="@{{criteriaicon}}" alt="">
                </div>
            </div>
            <div class="centered-text">
                <div class="text-title">
                    <!-- @{{{_highlightResult.criteria.value}}} -->
                    @{{ scholcriteria }}
                </div>
                <div class="text-content">
                    @{{ scholcriteriainfo }}
                </div>
            </div>
        </div>

        @{{#talent}}
        <div class="col-lg-4 col-md-12 col-sm-4 section3 hidden-xxxs hidden-xxs talent-border">
        @{{/talent}}
        @{{^talent}}
        <div class="col-lg-4 col-md-12 col-sm-4 section3 hidden-xxs hidden-xxxs ">
        @{{/talent}}


            <div class="hex-container centered">
                <div class="hexagon3 hex" style="">
                    <span></span>
                    <img class="centered-abs hex-img" src="@{{financial_icon}}" alt="">
                </div>
            </div>
            <div class="centered-text">
                <div class="text-title">
                <!-- @{{financial_plan}} -->
                @{{ scholfinancial }}
                @{{financial_amount}} @{{financial_metric}}</div>
                <div class="text-content">
                    @{{{ scholfinancialinfo }}}
                </div>
            </div>
        </div>
    </div>

        @{{#talent}}
        <div class="col-xs-12 scholar-footer talent-back">
        @{{/talent}}
        @{{^talent}}
            <div class="col-xs-12 scholar-footer">
         @{{/talent}}

        <div class="col-xs-9 col-sm-10  sc-t-grey font-weight-300 pad-0-mar-0">
            <div class="col-xs-6 col-sm-4  col-md-4 xxs-8 xxs-footer pad-0-mar-0 scholar-footer-left">
                    

                    <div>  <i class="fa fa-pencil-square-o margin-right-10"></i>@lang('scholarships.cards.exams'):
                    <span class="pull-right">
                        @{{ scholexams }}
                    </span>
                    </div>
                    <div class="margin-top-5">  <i class="fa fa-flag-o margin-right-10"></i>@lang('scholarships.cards.end'):  <span class="pull-right">@{{ end_at }}</span> </div>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-xs-5 col-sm-4 pad-0-mar-0 xs-hidden scholar-footer-right">
                    @{{#admissionsShow}}
                    <div> <i class="fa fa-pencil margin-right-10"></i>@lang('scholarships.cards.admissions'): <span class="pull-right">@{{ requested }}</span> </div>
                    @{{/admissionsShow}}
                    @{{#interestedShow}}
                    <div class="margin-top-5">  <i class="fa fa-thumbs-o-up margin-right-10"></i>@lang('scholarships.cards.interested'): <span class="pull-right">@{{ interested }}</span> </div>
                    @{{/interestedShow}}
            </div>
        </div>


        <div class="xxs-3 col-xs-3  col-sm-2 pad-0-mar-0" >
            <a href="/scholarship/@{{scholarship_id}}" >
                <button type="button" class="sc-button-landing sc-button sc-green sc-t-white pull-right btn-provoli" style="">
                    <i class="fa fa-file-text-o margin-right-10" aria-hidden="true"></i> @lang('scholarships.cards.show')
                </button>
            </a>
        </div>
    </div>
    `;



    var noResultsTemplate =
            '<div class="text-center">@lang('scholarships.error') <strong>@{{query}}</strong>.</div>';

    var menuTemplate =
            `<a href="javascript:void(0);" class="facet-item @{{#isRefined}}active@{{/isRefined}}"><span class="facet-name"><i class="fa fa-angle-right"></i> @{{name}}</span>
                <span  class="counter"> @{{count}} </span></a>`;

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
                    hit.adminter=[];
                    hit.adm=[];
                    hit.highAmount=[];
                    hit.talent=[];
                    hit.admissionsShow = function(){
                        if(hit.requested > 5) return true;
                        return false;
                    };
                    hit.interestedShow = function () {
                        if (hit.interested > 5) return true;
                        return false;
                    };
                    hit.criteriaicon = function(){
                        if (this.criteria_id == 1) return '/panel/assets/images/steps/talents.png';
                        if (this.criteria_id == 2) return '/panel/assets/images/steps/medal.png';
                        if (this.criteria_id == 3) return '/panel/assets/images/steps/social.png';
                        if (this.criteria_id == 4) return '/panel/assets/images/steps/friends.png';
                        if (this.criteria_id == 5) return '/panel/assets/images/steps/open.png';
                    };
                    hit.scholfinancial = function () {
                        return lang.seeder.financial[hit.financial_plan_id]
                    };
                    hit.scholcriteria = function () {
                        return lang.seeder.criteria[hit.criteria_id]
                    };
                    hit.scholfinancialinfo = function(){
                        return lang.seeder.financialInfo[hit.financial_plan_id]
                    };
                    hit.scholcriteriainfo = function(){
                        return lang.seeder.criteriaInfoShort[hit.criteria_id]
                    };
                    hit.scholexams = function(){
                        if(hit.exams == 'y')
                            return lang.seeder.exams.y;
                        else
                            return lang.seeder.exams.n;
                        
                    };
                    // hit.multipleStudies=[];

                    for (var i = 1; i <= 5; ++i) {
                        hit.stars.push(i <= hit.rating);
                    }

                    if((hit.interested+hit.requested)> 10){
                        hit.adminter.push(true);
                    }

                    if(hit.requested> 8){
                        hit.adm.push(true);
                    }

                    if(hit.financial_amount> 750 || (hit.financial_amount>50 && hit.financial_metric=='%')){
                        hit.highAmount.push(true);
                    }

                    if(hit.criteria=="Scholarship for talents"){
                        hit.talent.push(true);
                    }

                    // if(hit.multiple){
                    //     hit.multipleStudies.push(true);
                    // }

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
                    previous: '<i class="fa fa-angle-left fa-2x"></i> @lang('scholarships.prev_page')',
                    next: '@lang('scholarships.next_page') <i class="fa fa-angle-right fa-2x"></i>'
                },
                showFirstLast: false
            })
    );

    search.addWidget(
            instantsearch.widgets.hierarchicalMenu({
                container: '#categoriesType',
                attributes: ['type'],
                sortBy: ['count'],
                limit: 5,
                limit: 5,
                templates: {
                    item: menuTemplate
                }
            })
    );


    search.addWidget(
            instantsearch.widgets.hierarchicalMenu({
                container: '#categoriesCity',
                attributes: ['city'],
                sortBy: ['count'],
                limit: 5,
                templates: {
                    item: menuTemplate
                }
            })
    );

@if(request()->cookie('lang') == 'en')
    search.addWidget(
            instantsearch.widgets.hierarchicalMenu({
                container: '#categoriesCriteria',
                attributes: ['criteria'],
                sortBy: ['count'],
                limit: 5,
                templates: {
                    item: menuTemplate
                }
            })
    );
    search.addWidget(
            instantsearch.widgets.hierarchicalMenu({
                container: '#categoriesCriteriaMobile',
                attributes: ['criteria'],
                sortBy: ['count'],
                limit: 5,
                templates: {
                    item: menuTemplate
                }
            })
    );


    @else
search.addWidget(
            instantsearch.widgets.hierarchicalMenu({
                container: '#categoriesCriteria',
                attributes: ['criteria'],
                sortBy: ['count'],
                limit: 5,
                templates: {
                    item: menuTemplate
                }
            })
    );
    search.addWidget(
            instantsearch.widgets.hierarchicalMenu({
                container: '#categoriesCriteriaMobile',
                attributes: ['criteria'],
                sortBy: ['count'],
                limit: 5,
                templates: {
                    item: menuTemplate
                }
            })
    );
    @endif


    search.addWidget(
            instantsearch.widgets.hierarchicalMenu({
                container: '#categoriesTypeMobile',
                attributes: ['type'],
                sortBy: ['count'],
                limit: 5,
                templates: {
                    item: menuTemplate
                }
            })
    );


    search.addWidget(
            instantsearch.widgets.hierarchicalMenu({
                container: '#categoriesCityMobile',
                attributes: ['city'],
                sortBy: ['count'],
                limit: 5,
                templates: {
                    item: menuTemplate
                }
            })
    );


    search.addWidget(
            instantsearch.widgets.hierarchicalMenu({
                container: '#categoriesSection',
                attributes: ['section'],
                sortBy: ['count'],
                limit: 5,
                templates: {
                    item: menuTemplate
                }
            })
    );
    search.addWidget(
            instantsearch.widgets.hierarchicalMenu({
                container: '#categoriesSectionMobile',
                attributes: ['section'],
                sortBy: ['count'],
                limit: 5,
                templates: {
                    item: menuTemplate
                }
            })
    );
@if(request()->cookie('lang') == 'en')
    search.addWidget(
            instantsearch.widgets.hierarchicalMenu({
                container: '#categoriesLevel',
                attributes: ['level'],
                sortBy: ['count'],
                limit: 5,
                templates: {
                    item: menuTemplate
                }
            })
    );
    search.addWidget(
            instantsearch.widgets.hierarchicalMenu({
                container: '#categoriesLevelMobile',
                attributes: ['level'],
                sortBy: ['count'],
                limit: 5,
                templates: {
                    item: menuTemplate
                }
            })
    );
    @else
search.addWidget(
            instantsearch.widgets.hierarchicalMenu({
                container: '#categoriesLevel',
                attributes: ['level'],
                sortBy: ['count'],
                limit: 5,
                templates: {
                    item: menuTemplate
                }
            })
    );
    search.addWidget(
            instantsearch.widgets.hierarchicalMenu({
                container: '#categoriesLevelMobile',
                attributes: ['level'],
                sortBy: ['count'],
                limit: 5,
                templates: {
                    item: menuTemplate
                }
            })
    );
@endif

    search.addWidget(
      instantsearch.widgets.sortBySelector({
        container: '#sort-by-container',
        indices: [
          {name: 'dummyScholarships', label: '@lang('scholarships.filters.about')'},
          {name: 'dummyScholarships_school_asc', label: '@lang('scholarships.filters.popular')'},
          {name: 'dummyScholarships_created_asc', label: '@lang('scholarships.filters.new')'}
        ]
      })
    );

    search.addWidget(
            instantsearch.widgets.sortBySelector({
                container: '#sort-by-container-mobile',
                indices: [
                    {name: 'dummyScholarships', label: '@lang('scholarships.filters.about')'},
                    {name: 'dummyScholarships_school_asc', label: '@lang('scholarships.filters.popular')'},
                    {name: 'dummyScholarships_created_asc', label: '@lang('scholarships.filters.new')'}
                ]
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
                    link: '<div style="padding: 4px;"><i class="fa fa-ban margin-right-5"></i>@lang('scholarships.filters.delete')</div>'
                },
                cssClasses: {
                    root: 'btn btn-block btn-default'
                },
                autoHideContainer: true
            })
    );

    search.addWidget(
            instantsearch.widgets.clearAll({
                container: '#clear-allMobile',
                templates: {
                    link: '<div style="padding: 4px;"><i class="fa fa-ban margin-right-5"></i>@lang('scholarships.filters.delete')</div>'
                },
                cssClasses: {
                    root: 'btn btn-block btn-default'
                },
                autoHideContainer: true
            })
    );

//    search.addWidget(
//            instantsearch.widgets.googleMaps({
//                container: document.querySelector('#map'),
//                scrollwheel: false
//            })
//    );

    search.start();


//    var myOptions = {
//        scrollwheel: false,
//        scaleControl:true,
//        mapTypeId: google.maps.MapTypeId.ROADMAP
//    };
//    var map = new google.maps.Map(document.getElementById("map"), myOptions);
//
//
//    var styledMapType = new google.maps.StyledMapType(
//            [
//                {
//                    "featureType": "poi.park",
//                    "elementType": "geometry.fill",
//                    "stylers": [
//                        {
//                            //"color": "#9ec4ae"
//                            //"color": "#A3BFA8"
//                            //"color": "#B5C5B8"
//                            //"color": "#D9F0D1"
//                            "color": "#E2F0DA"
//
//                            //"color": "#CBE6A3"
//                        }
//                    ]
//                },
//                {
//                    "featureType": "water",
//                    "elementType": "geometry.fill",
//                    "stylers": [
//                        {
//                            //"color": "#00bcd4"
//                            //"color": "#53D0D9"
//                            //"color": "#00C9E1"
//                            //"color": "#00D1E9"
//                            //"color": "#00E2FF"
//
//                            //"color": "#A4E2E7"
//                            "color": "#A4DBE7"
//
//                            //"color": "#A3CCFF"
//                        }
//                    ]
//                }
//            ]
//    )
//
//    map.mapTypes.set('styled_map', styledMapType);
//    map.setMapTypeId('styled_map');

</script>

</html>
