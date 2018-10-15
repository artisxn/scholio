<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"> <!-- prevent zoomIn in mobile inputs,selects,etc -->
    <meta property="fb:pages" content="934370089973049" />
    <meta name="description" content="Αναζήτηση εκπαιδευτικών ιρδυμάτων και των υπηρεσιών τους.">
    <meta name="keywords" content="Κολλέγιο, ΙΕΚ, Σχολείο, Δημοτικό, Γυμνάσιο, Λύκειο, Πανεπιστήμιο, ΚΕΚ, ΙΙΕΚ, Σχολές, Σπουδές,">
    @include('google.main')
    <title>schol.io | Αναζήτηση εκπαιδευτικών ιρδυμάτων.</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('new/img/test-black.png')}}" type="image/x-icon" />


    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link href="{{asset('new/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('new/css/results.css')}}" rel="stylesheet">
</head>
<script src="https://cdn.jsdelivr.net/jquery/2.1.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
<script src="https://cdn.jsdelivr.net/algoliasearch.helper/2/algoliasearch.helper.min.js"></script>
<script src="//cdn.jsdelivr.net/hogan.js/3.0.2/hogan.min.common.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?libraries=geometry,places&language=el&region=GR&key=AIzaSyDCdWDTJpvexNyV0DzIpbR69XatKp9Litg"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.1/angular.min.js"></script>

<style>
    .img-logo{ height: 45px;}
    .hit-name{}
    body {background-color: #F1F4F5}

    .right-map{position: fixed; top: 0; right: 0}

    .title{margin-left: -25px;}

    .change_page_state{margin: 0 10px}
    .btn-info{color: #00bcd4!important; border-color: #00bcd4!important;}
    .btn-info:hover{background-color:#00bcd4!important; color: #fff!important;}
    .btn-info:focus,.active{background-color: #00b1c9 !important; color: #fff!important;}

    .btn-list{width: 50%; margin: 5px 0; padding-right: 0}
    .info{padding-left: 20px}
    .search-contain{margin: 5px 0 20px -30px; padding-right: 0; height: 43px}
    .range-input{margin: 27px 0 5px -30px; width: 100%}
    .container-left{padding-top: 20px; margin-right: auto; margin-left: auto; text-align: center;}
    .top-range{color: #888; font-size: 87%; position: absolute; bottom: 40px;   }

    .distance{position: absolute; top: 20px; right: 10px; color: #999}

    .search-div{margin-top: 30px;}

    .km-low{margin-left: -30px; color: #888}
    .km-high{margin-right: 30px; color: #888}

    .col-sm-7, .col-md-7{padding-left: 1px}
    .col-sm-5, .col-md-5{padding-right: 4px; }

    .card-photo{max-height: 180px;  width: 100%; }
    .card{background-color: #fff; height: 180px;  margin-bottom: 12px; border: 1px solid #ccc;}

    .school-filter-m{display: none}
    .container-up{margin-top: 50px; margin-bottom: 10px; padding-right:0;}
    .margin-bottom{height: 40px; width: 20px; margin-bottom: 110px;}
    .photo-mini{position: absolute; top: 6px; left: 6px;}
    .photo-mini2{position: absolute; top: 54px; margin-left: auto;  margin-right: auto;  left: 0;  right: 0;}
    .heightNew{height: 140px;}


    .search-contain,.btn-list{ clear: both; display: block;  margin-left: auto; margin-right: auto; }
    .btn-li{ margin-bottom: 20px; margin-left: -20px; width: 200px; height: 40px}
    .col-sm-12 .col-sm-6{width: 100%}
    .range-input,.search-div{ text-align: center; margin-left: auto; margin-right: auto; }
    .km-low{margin-left: -4px;}
    .km-high{margin-right: -2px;}
    .col-sm-5{padding-left: 10px; padding-right: 10px;}
    .col-sm-7{padding-right: 4px; }


    @media  (min-width: 1441px) {
        .col-sm-5{padding-left: 18px; padding-right: 18px;}
        .card{ box-shadow: 0 0 20px 1px #999;  border-radius: 6px; margin-bottom: 30px;}
    }

    @media  (max-width: 990px) {
        .photo{padding-right: 0!important;}
        .photo a img{padding-top:17px;!important;}
        .info{}
        /*.btn-list{margin-left: -20px; }*/
    }


    @media  (max-width: 767px) {
        .right-map{ top: 60px; left: 0}
        .fa-hidden{display: none}
        .school-filter-m{display: block}
        .school-slider{ background-color: #fafafa; width: 320px; z-index: 5; border-radius: 6px; border: 1px solid #999; box-shadow: 0 0 10px 2px #aaa; position: fixed; top: 75px; bottom: 15px; height: auto;  overflow-y: auto}
        .left-320{left: -320px; transition: all 0.2s}
        .left10{left: 10px; transition: all 0.2s}
        .card{border: 1px solid #ccc; border-radius: 5px; padding-top: 9px; padding-left: 10px; }
        .container-up{margin-top: 0}
        .info-title{margin-left: 40px ; margin-top: -21px}
        .info-content{position: absolute; left: 7px; bottom: -152px}
        .margin-bottom{margin-bottom: 0;}
        .photo-mini{top: -2px}
        .photo-mini2{top: 2px; border: 1px solid #ccc; box-shadow: 0 0 10px 1px #999; border-radius: 5px;}
        .top-range{bottom: 20px; margin-left: -5px;}
        /*.search-div,.range-input{background-color: greenyellow; z-index: 99!important;}*/
        .btn-list{margin-top: 40px;}
        .mobile-info-content{margin-left: -5px; top: 70px; width:100%!important;}
    }


    @media  (max-width: 399px) {
        /*.fa-xxs{display: none;}*/
        .school-slider{width: 305px;}
        .search-contain{font-size: 93%; padding-left: 5px; margin-left: -10px; margin-bottom: 40px;}
    }

    @media  (max-width: 320px) {
        .search-contain{font-size: 91%; padding-left: 3px;}
    }

    @media  (min-width: 375px) and (max-width: 413px) {
        .school-slider{width: 354px;}
        .left-320{left: -370px;}
    }
    @media  (min-width: 414px) and (max-width: 767px)  {
        .school-slider{width: 390px;}
        .left-320{left: -410px;}
    }

    @media  (min-width: 320px) and (max-width: 374px)  {
        .school-slider{width: 298px;}
    }




    @media  (max-width: 1200px) {
        .card-photo,.card{height: 155px!important;}
    }


    @media  (min-width: 768px) and (max-width:990px) {
        .info {padding-left: 8px}
        .con, .card{position: relative}
        .middle {right: 15px; bottom: 123px; position: absolute;}
        .photo-mini2{position: absolute;  z-index: 5; opacity: 0.5; filter: grayscale(0.1); -webkit-filter: grayscale(0.7)}

    }


</style>

<body ng-app="app" ng-controller="resultsCtrl">

@include('components.preloader')


<!-- Scholio Header -->
<header class="navbar navbar-fixed-top navbar-scroll sc-landing-header" id="header" >
    <div class="" style="padding-right: 15px; padding-left: 20px">

        <div class="pull-left visible-lg visible-md nav-web ">
            <!-- Scholio Branding -->
            <a class="sc-landing-brand" href="{{ url('/') }}">
                <div class="sc-landing-logo-sticky" style=" padding-top: 15px">
                    {{--<img src="{{asset('new/img/logo.png')}}" class="sc-logo" alt="scholio logo">--}}
                    <img src="{{asset('new/img/logoNX.png')}}"  class="sc-logo" alt="scholio logo" style="height: 63px; padding-top: 2px;">
                </div>
            </a>
        </div>

        <div class="col-xs-6  visible-sm visible-xs" style="margin-left: -25px">
            <div class="nav-mobile">
                <a class="" href="{{ url('/') }}">
                    <div class="navbar-brand  sc-landing-logo-sticky">
                        {{--<img src="{{asset('new/img/logo-m.png')}}" class="sc-logo" alt="scholio logo">--}}
                        <img src="{{asset('new/img/logoNX-m.png')}}" class="sc-logo" alt="scholio logo" style="height: 60px; padding-top: 2px;">
                    </div>
                </a>
            </div>
        </div>


        <!-- Scholio Menu -->

        <!-- Large Menu -->
        <div class="pull-right visible-md visible-lg">
            <div class="">
                <ul class="nav navbar-nav navbar-right sc-landing-menu">
                    {{--<li class="sc-landing-menu-item"><a href="">ΥΠΟΤΡΟΦΙΕΣ</a></li>--}}


                    <li class="langDropWhite" style="margin-top: 2px;">
                        <form method="GET" id="langForm">
                            <select onchange="changeLang(this)" class="selectpicker select-white landDrop" data-live-search="false" data-mobile="false" data-size='2' data-width="100%" data-style="btn-white" style="background-color: transparent; border: none; color: #555">
                                <option style="color: black" data-icon="fa" value="en" {{ request()->cookie('lang')=='en' ? 'selected':'' }}>&nbsp; ENG</option>
                                <option style="color: black" data-icon="fa" value="el" {{ request()->cookie('lang')=='el' ? 'selected':'' }}>&nbsp; GR</option>
                            </select>
                        </form>
                    </li>


                    {{--<li class="sc-landing-menu-item">--}}
                        {{--<a href="{{url('public/scholarships')}}" class="btn-change-search">--}}
                            {{--<i class="fa fa-trophy margin-right-5"></i>--}}
                            {{--@lang('schools.navigation.search_scholarship')--}}
                        {{--</a>--}}
                    {{--</li>--}}
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
                        <img src="{{asset('new/img/collapse-dark2.png')}}" alt="scholio logo"  style="height:22px; margin-top: 7px;  margin-right: -35px">
                        {{--<img src="{{asset('new/img/collapse-dark.png')}}" alt="scholio logo">--}}
                    </div>
                </div>
            </div>
            {{--data-toggle="collapse" aria-controls="collapseMenu" --}}

            <div class="pull-right margin-right-30 filter-icon school-filter-m"  id="schools-btn">
                <a class="" role="button" href="#" aria-expanded="false">
                    <i class="fa fa-university margin-right-10 margin-top-30 text-175 sc-t-dark-grey" style="font-size: 180%; z-index: 5!important;" aria-hidden="true" ></i>
                </a>
            </div>

        </div>

        <!-- ======= Sandwich Menu =======-->
        @include('public.sandwich-menu-resultsSchools')

    </div>  <!-- row -->
    </div> <!-- container-->
</header>


<div class="row pad-0-mar-0">
    <div class="col-sm-5 col-md-5 school-slider left-320" style="" id="school-slider">
        {{--<header  class="container-left container-up" style="">--}}
            {{--My Cordinates--}}
            {{--<div id="demo" style=" margin: 0 0 20px 0 "></div>--}}
            {{--<p class="">@lang('map.select')</p>--}}
            {{--<a href="" class="change_page_state btn btn-info" data-mode="around" data-state="ip" ng-click="status='around'">--}}
                {{--<i class="fa fa-map-marker margin-right-10 fa-hidden"></i>--}}
                {{--@lang('map.near')--}}
            {{--</a>--}}
            {{--<a href="" class="change_page_state btn btn-info active" data-mode="bounding" data-state="rectangle" ng-click="status='rectangle'">--}}
                {{--<i class="fa fa-search-plus margin-right-10 fa-hidden" ></i>--}}
                {{--@lang('map.scan')--}}
            {{--</a>--}}
        {{--</header>--}}


        <div class="col-sm-12 container-left" style="margin-top: 70px">
            <div class="col-sm-6 pad-right-0" >
                <input id="search-input" class="form-control search-contain" placeholder="@lang('map.placeholder')"/>
                {{--<div ng-if="status=='around'" class="search-div" style="">--}}
                    {{--<div  class="top-range" style="left: @{{ range*4.4 }}%">@{{range }} km</div>--}}
                    {{--<input type="range" id="qqq" min="1" max="20" value="10" class="range-input" onchange="rerender()"  style="" ng-model="range">--}}
                    {{--<div class="pull-left km-low"> 1 km</div>--}}
                    {{--<div class="pull-right km-high"> 20 km</div>--}}
                {{--</div>--}}

            </div>

            <div class="btn-group col-sm-6 btn-list">
                <a href="{{ url('public/schools') }}">
                    <button class="btn btn-primary btn-li"  ng-click="">
                        <i class="fa fa-list pad-right-15" aria-hidden="true"></i>@lang('map.return')
                    </button>
                </a>
            </div>

            <div class="margin-bottom"></div>
        </div>





        <div id="hits"></div>


        <script type="text/template" id="hits-template">
            @{{#hits}}
            {{--<span class="hit clearfix">--}}
            {{--<img id="" class="img-logo" src="@{{logo}}">--}}
            {{--<span class="hit-name">@{{{ _highlightResult.name.value }}}</span>--}}
            {{--<span class="hit-distance" ng-if="false"> @{{ distance }}</span>--}}
            {{--</div>--}}

            <div class="card clear-fix margin-bot-15 heightNew" >
                {{--<con>--}}
                    {{--<photo class="col-sm-2 col-md-4 pad-0-mar-0" >--}}
                        {{--<a href="/public/profile/@{{school_id}}" class="hidden-xs hidden-sm">--}}
                            {{--<img id="img0" class="card-photo pull-left" style="background-image:linear-gradient(rgba(206, 255, 255, 0.01), rgba(0, 0, 0, 0.40)), url(@{{image}}) ">--}}
                        {{--</a>--}}

                        {{--<a href="/public/profile/@{{school_id}}" target="_blank">--}}
                            {{--<img id="img1"  style="" class=" img-mini  photo-mini" src="@{{logo}}">--}}
                        {{--</a>--}}
                    {{--</photo>--}}

                {{--</con>--}}


                <con>
                    <photo class="col-sm-2 pad-0-mar-0 middle" >
                        {{--<a href="/public/profile/@{{school_id}}" class="hidden-xs hidden-sm">--}}
                            {{--<img id="img0" class="card-photo pull-left" style="background-image:linear-gradient(rgba(206, 255, 255, 0.01), rgba(0, 0, 0, 0.40)), url(@{{image}}) ">--}}
                        {{--</a>--}}

                        <a href="/public/profile/@{{school_id}}" target="_blank">
                            <img id="img1"  style="" class=" img-mini  photo-mini2" src="@{{logo2}}.png">
                        </a>
                    </photo>

                </con>

                <div class="col-xs-12  col-md-10 info">  {{-- col-md-8 --}}
                    <div class="  info-title clearfix">
                        <div class="distance">@{{distance}} </div>
                        <span class="pull-left " style="padding-right: 15px;">
                             <h5 class="pad-top-10 font-weight-400"> <a href="/public/profile/@{{school_id}}"  style="color: #008da5;"> @{{name}}</a></h5>
                         </span>
                    </div>

                    <div class="info-content mobile-info-content">
                        <div class="col-lg-10 col-md-11 col-sm-12 col-xs-12 sc-t-grey pad-left-0">
                            <span><i class="fa fa-map-marker pull-left pad-top-3 xs-text-incr-85 fa-xxs" aria-hidden="true"></i></span>
                            <span class="pull-left pad-left-3 xs-text-incr-85 text-incr-95 ellipsis">@{{address}}</span>
                            <br>
                            <div class="">
                                <span><i class="fa fa-street-view pull-left pad-top-3 fa-xxs" aria-hidden="true"></i></span>
                                <span class="pull-left pad-left-3 xs-text-incr-85">@{{city}} </span>

                                <br>
                            </div>
                            <div class="pad-top-3"></div>
                            <span><i class="fa fa-phone pull-left pad-top-2 xs-text-incr-85 fa-xxs" aria-hidden="true"></i></span>
                            <span class="pull-left pad-left-3 xs-text-incr-85">@{{phone}}</span>

                        </div>
                    </div>
                </div>
            </div>








            @{{/hits}}
        </script>


    </div>
    <div class="col-sm-7 col-md-7 right-map" style="">
        <div id="map" style=" height: 100vh; "></div>
    </div>
</div>

{{--<!-- Footer -->--}}
{{--@include('public.footer')--}}

<script>
    window.MAPLATLNG = '';
                navigator.geolocation.getCurrentPosition(function(position){
                   window.MAPLATLNG = position.coords.latitude + ', ' + position.coords.longitude;
               });
</script>

<script>

    var LAT = '40.60';
    var LNG = '23.00';
    var MAX_D=10;
    var c = null;
    var APPLICATION_ID = 'N08SZYEUO0';
    var SEARCH_ONLY_API_KEY = 'e00bc4548ea05c691c81f7c30c100bd7';
    var INDEX_NAME = 'dummySchools';
    var PARAMS = { hitsPerPage: 80 };
    // Client + Helper initialization
    var algolia = algoliasearch(APPLICATION_ID, SEARCH_ONLY_API_KEY);
    var algoliaHelper = algoliasearchHelper(algolia, INDEX_NAME, PARAMS);
    algoliaHelper.setQueryParameter('getRankingInfo', true);
    // algoliaHelper.setQueryParameter('urlSync', true);
    var map = new google.maps.Map(document.getElementById('map'), {
     scrollwheel: false, streetViewControl: false, mapTypeControl: true, zoom: 4, minZoom: 3, maxZoom: 12,
          mapTypeControlOptions: {
              style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
              position: google.maps.ControlPosition.TOP_CENTER
          },
     zoomControl: true,
          zoomControlOptions: {
              position: google.maps.ControlPosition.RIGHT_TOP
          }
 });

    // DOM and Templates binding
    var $map = $('#map');
    var $hits = $('#hits');
    var $searchInput = $('#search-input');

    var hitsTemplate = Hogan.compile($('#hits-template').text());
    var noResultsTemplate = Hogan.compile($('#no-results-template').text());


    var styledMapType = new google.maps.StyledMapType(
            [
                {
                    "featureType": "poi.park",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            //"color": "#9ec4ae"
                            //"color": "#A3BFA8"
                            //"color": "#B5C5B8"
                            //"color": "#D9F0D1"
                            "color": "#E2F0DA"

                            //"color": "#CBE6A3"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            //"color": "#00bcd4"
                            //"color": "#53D0D9"
                            //"color": "#00C9E1"
                            //"color": "#00D1E9"
                            //"color": "#00E2FF"

                            //"color": "#A4E2E7"
                            "color": "#A4DBE7"

                            //"color": "#A3CCFF"
                        }
                    ]
                }
            ]
    )

    map.mapTypes.set('styled_map', styledMapType);
    map.setMapTypeId('styled_map');


</script>

<script>
    navigator.geolocation.getCurrentPosition(function(location) {
        LAT = location.coords.latitude;
        LNG = location.coords.longitude;
    });
    var x = document.getElementById("demo");
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
        var ar = LAT + ',' + LNG;
        MAX_D=MAX_D*1000
        algoliaHelper.setQueryParameter('aroundLatLng', ar);
        algoliaHelper.setQueryParameter('aroundRadius', MAX_D);
    }

    function showPosition(position) {
        x.innerHTML = "Latitude: " + position.coords.latitude +
                "<br>Longitude: " + position.coords.longitude;
    }
</script>

<script>
    var markers = [];
    var fitMapToMarkersAutomatically = true;
    var $searchInput = $('#search-input');

    var fitMapToMarkersAutomatically = true;
    var markers = [];
    var boundingBox;
    var boundingBoxListeners = [];

    // Page states
    var PAGE_STATES = {
        LOAD: 0,
        RECTANGLE_MAP: 1,
        AROUND_ME: 5,
    };
    var pageState = PAGE_STATES.LOAD;
    setPageState(PAGE_STATES.RECTANGLE_MAP);

    // PAGE STATES
    // ===========
    function setPageState(state) {
        resetPageState();
        beginPageState(state);
    }

    function beginPageState(state) {
        pageState = state;

        switch (state) {
            case PAGE_STATES.RECTANGLE_MAP:
                boundingBox = new google.maps.Rectangle({
                    bounds: {north: 35, south: 41.3, west: 20.4, east: 26.5 },
                    strokeColor: '#EF5362',
                    strokeOpacity: 0.8,
                    strokeWeight: 2,
                    fillColor: '#EF5362',
                    fillOpacity: 0.15,
                    draggable: true,
                    editable: true,
                    geodesic: true,
                    map: map
                });
                algoliaHelper.setQueryParameter('insideBoundingBox', rectangleToAlgoliaParams(boundingBox));
                boundingBoxListeners.push(google.maps.event.addListener(
                        boundingBox,
                        'bounds_changed',
                        throttle(rectangleBoundsChanged, 150)
                ));
                break;

            case PAGE_STATES.AROUND_IP:
                algoliaHelper.setQueryParameter('aroundLatLngViaIP', true);
                break;

            case PAGE_STATES.AROUND_ME:
                var ar = LAT + ',' + LNG;
                algoliaHelper.setQueryParameter('aroundLatLng', window.MAPLATLNG); // ΕΔΩ ΑΛΛΑΖΟΥΜΕ ΤΟ LAT LNG
                algoliaHelper.setQueryParameter('aroundRadius', MAX_D);
                break;

            default:
            // No-op
        }


        fitMapToMarkersAutomatically = true;
        algoliaHelper.search();
    }

    // EVENTS BINDING
    // ==============
    $('.change_page_state').on('click', function (e) {
        e.preventDefault();
        updateMenu($(this).data('state'), $(this).data('mode'));
        switch ($(this).data('state')) {
            case 'rectangle':
                setPageState(PAGE_STATES.RECTANGLE_MAP);
                break;
            case 'ip':
                setPageState(PAGE_STATES.AROUND_ME);
                break;
            default:
            // No op
        }
    });


    function resetPageState() {
        if (boundingBox) boundingBox.setMap(null);
        for (var i = 0; i < boundingBoxListeners.length; ++i) {
            google.maps.event.removeListener(boundingBoxListeners[i]);
        }
        boundingBoxListeners = [];
        $searchInput.val('');
        algoliaHelper.setQuery("{{ session('inputSearch') }}");
        algoliaHelper.setQueryParameter('insideBoundingBox', undefined);
        algoliaHelper.setQueryParameter('insidePolygon', undefined);
        algoliaHelper.setQueryParameter('aroundLatLng', undefined);
        algoliaHelper.setQueryParameter('aroundLatLngViaIP', undefined);
    }



    $searchInput.on('input propertychange', function (e) {
        $searchInput.val(e.currentTarget.value);
        var query = e.currentTarget.value;
        if (pageState === PAGE_STATES.RECTANGLE_MAP) {
            fitMapToMarkersAutomatically = false;
        }
        algoliaHelper.setQuery(query).search();

    });

    // DISPLAY RESULTS
    // ===============
    algoliaHelper.on('result', function (content) {
        renderMap(content);
        // $hits.text(content);
        renderHits(content);
        c = content;
        $searchInput.val(c.query);
    });

    function renderHits(content) {
        if (content.hits.length === 0) {
            $hits.html(noResultsTemplate.render());
            return;
        }
        // content.hits = content.hits.slice(0, 10);
        for (var i = 0; i < content.hits.length; ++i) {

            var hit = content.hits[i];
            hit.displayCity = (hit.name === hit.city);
            if (hit._rankingInfo.matchedGeoLocation) {
                hit.distance = parseInt(hit._rankingInfo.matchedGeoLocation.distance / 1000, 10) + ' km';
            }
        }
        $hits.html(hitsTemplate.render(content));
    }

    function renderMap(content) {
        removeMarkersFromMap();
        markers = [];

        for (var i = 0; i < content.hits.length; ++i) {
            var hit = content.hits[i];
            var marker = new google.maps.Marker({
                position: {lat: hit._geoloc.lat, lng: hit._geoloc.lng},
                map: map,
                icon:"/../new/img/markers/marker-teal-sm.png",
                airport_id: hit.objectID,
                title: hit.name + ' - ' + hit.city + ' - ' + hit.country
            });
            markers.push(marker);
            attachInfoWindow(marker, hit);
        }

        if (fitMapToMarkersAutomatically) fitMapToMarkers();
    }

    function updateMenu(stateClass, modeClass) {
        $('.change_page_state').removeClass('active');
        $('.change_page_state[data-state="' + stateClass + '"]').addClass('active');
        $('.page_mode').removeClass('active');
        $('.page_mode[data-mode="' + modeClass + '"]').addClass('active');
    }

    function fitMapToMarkers() {
        var mapBounds = new google.maps.LatLngBounds();
        for (var i = 0; i < markers.length; i++) {
            mapBounds.extend(markers[i].getPosition());
        }
        map.fitBounds(mapBounds);
    }

    function removeMarkersFromMap() {
        for (var i = 0; i < markers.length; i++) {
            markers[i].setMap(null);
        }
    }

    function rectangleBoundsChanged() {
        fitMapToMarkersAutomatically = false;
        algoliaHelper.setQueryParameter('insideBoundingBox', rectangleToAlgoliaParams(boundingBox)).search();
    }
    function polygonBoundsChanged() {
        fitMapToMarkersAutomatically = false;
        algoliaHelper.setQueryParameter('insidePolygon', polygonsToAlgoliaParams(boundingBox)).search();
    }

    function rectangleToAlgoliaParams(rectangle) {
        var bounds = rectangle.getBounds();
        var ne = bounds.getNorthEast();
        var sw = bounds.getSouthWest();
        return [ne.lat(), ne.lng(), sw.lat(), sw.lng()].join();
    }

    function polygonsToAlgoliaParams(polygons) {
        var points = [];
        polygons.getPaths().forEach(function (path) {
            path.getArray().forEach(function (latLng) {
                points.push(latLng.lat());
                points.push(latLng.lng());
            });
        });
        return points.join();
    }

    function attachInfoWindow(marker, hit) {
        var message;

        message = hit.name;

        var content= '<div class="row"><span class="col-sm-2" >' +
                '<img style="width: 98%; height: auto; " src="' +''+ hit.logo2 + '.png"/></span> ' +
                '<a target="_blank" style="color: #000 !important" href="/public/profile/' +hit.school_id+ '"><span class="col-sm-10 info-window-text" > ' +hit.name+
                '<div style="padding-top: 3px;"> ' +
                ' <span class="info-window-text2"><i class="fa fa-trophy margin-right-5"></i>Υποτροφίες: '+hit.lengthScholarships+'</span> </div>' +
                '</span> </a></div>'
        var infowindow = new google.maps.InfoWindow({content: content});
        // infoWindow.setContent(content);

        marker.addListener('mouseover', function () {
            infowindow.open(map, marker);
            //   setTimeout(function () {infowindow.close();}, 3000);
        });

        marker.addListener('mouseout', function () {
            infowindow.close();
        });

    }



    function throttle(func, wait) {
        var context;
        var args;
        var result;
        var timeout = null;
        var previous = 0;
        function later() {
            previous = Date.now();
            timeout = null;
            result = func.apply(context, args);
            if (!timeout) context = args = null;
        }
        return function () {
            var now = Date.now();
            var remaining = wait - (now - previous);
            context = this;
            args = arguments;
            if (remaining <= 0 || remaining > wait) {
                if (timeout) {
                    clearTimeout(timeout);
                    timeout = null;
                }
                previous = now;
                result = func.apply(context, args);
                if (!timeout) {
                    context = args = null;
                }
            } else if (!timeout) {
                timeout = setTimeout(later, remaining);
            }
            return result;
        };
    }

    function rerender(){
        MAX_D = document.getElementById('qqq').value*1000;
        algoliaHelper.setQueryParameter('aroundRadius', MAX_D).search();
    }

</script>

<script>
    angular.module("app",[])
            .controller("resultsCtrl",function ($scope) {

                $scope.status='rectangle';
                $scope.range=10;

                $scope.view='card';
                $scope.changeView= function(view){
                    $scope.view=view;
                    if( $scope.view=='map'){  setTimeout(function() { $scope.showMap(); }, 10) }
                }


            });
</script>


<script>


    $(document).ready(function($) {

        // Toggle - Collapse Schools Mobile Slider Filter
        var schoolsBtn = $('#schools-btn');
        var slider = $('#school-slider');

        // document.getElementById('search-input').value = window.location.href.substring();


        schoolsBtn.click(function(){
            slider.toggleClass("left10 left-320");
        });



    });


</script>



</body>
</html>
