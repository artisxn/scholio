<!DOCTYPE html>
<html>
<head>
    <title>SC</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link href="{{asset('new/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('new/css/results.css')}}" rel="stylesheet">
</head>
<script src="https://cdn.jsdelivr.net/jquery/2.1.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
<script src="https://cdn.jsdelivr.net/algoliasearch.helper/2/algoliasearch.helper.min.js"></script>
<script src="//cdn.jsdelivr.net/hogan.js/3.0.2/hogan.min.common.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?libraries=geometry,places&language=el&region=GR&key=AIzaSyC18JCENxILnmXA1VGlsjJwBXQi3XZMWVA"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.1/angular.min.js"></script>

<style>
 .img-logo{ height: 45px;}
 .hit-name{}
 body {background-color: #F1F4F5}

 .right-map{position: fixed; top: 0; right: 0}


 @media  (max-width: 768px) {
     .right-map{ top: 90px; left: 0}
 }
</style>

<body ng-app="app" ng-controller="resultsCtrl">


<!-- Scholio Header -->
<header class="navbar navbar-fixed-top navbar-scroll sc-landing-header" id="header" >
    <div class="" style="padding: 0 20px;">

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
                            <li><a href=""><button type="button" class="sc-button-landing sc-button sc-green sc-t-white" data-toggle="modal" data-target="#select-modal">Εγγραφή</button></a></li>
                            <li><a href=""><button type="button" class="sc-button-landing sc-button sc-dark-blue sc-t-white " data-toggle="modal" data-target="#signIn-modal">Σύνδεση</button></a></li>
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



<div class="row pad-0-mar-0">
  <div class="col-sm-6 col-md-5 hidden-xs" style="padding: 40px 0 0 20px; margin-right: 0">
            <header>
                My Cordinates
                <div id="demo" style="margin: 0 0 20px 0 "></div>
                <a href="" class="change_page_state page_mode mode_button" data-mode="around"   data-state="ip" ng-click="status='around'" style="color: #888">Κοντά μου</a>
                <div class="clearfix"></div>
                  <a href="" class="change_page_state state_link active" data-mode="bounding" data-state="rectangle" ng-click="status='rectangle'" style="color: #888">Σάρωση Χάρτη</a>
                </p>
              </header>


          <div class="col-sm-12 ">
              <div class="col-sm-6">
              <input id="search-input" class="form-control" type="text" autocomplete="off" spellcheck="false" autocorrect="off" placeholder="Αναζήτηση Εκπαιδευτικών Ιδρυμάτων" style=" margin: 5px 0 20px -20px;"/>
              <div ng-if="status=='around'">
                  <div style="color: #888; font-size: 87%; position: absolute; top: 47px; margin-left: -5px; left: @{{ range/8.2 }}%">@{{range }} km</div>
                  <input type="range" id="qqq" min="1" max="700" value="10" onchange="rerender()"  style="margin: 0 0 5px -20px" ng-model="range">
                  <div class="pull-left" style="margin:0 0 20px -20px; color: #888"> 1 km</div>
                  <div class="pull-right" style="margin:0 20px 20px 0; color: #888"> 700 km</div>
              </div>

            </div>

              <div class="btn-group col-sm-6 " style="width: 50%; margin: 5px 0; padding-right: 0;">
                  <a href="{{ url('public/schools') }}">
                      <button class="btn btn-primary" style=" width: 100%; height: 40px" ng-click="">
                          <i class="fa fa-list pad-right-15" aria-hidden="true"></i>Προβολή Λίστας
                      </button>
                  </a>
              </div>

          </div>





            <div id="hits" ></div>


            <script type="text/template" id="hits-template">
            @{{#hits}}
                {{--<span class="hit clearfix">--}}
                  {{--<img id="" class="img-logo" src="/images/schools/@{{logo}}">--}}
                  {{--<span class="hit-name">@{{{ _highlightResult.name.value }}}</span>--}}
                  {{--<span class="hit-distance" ng-if="false"> @{{ distance }}</span>--}}
                {{--</div>--}}




            <div class=" card clear-fix margin-bot-15" style="background-color: #fff; height: 180px;">
                <con>
                    <photo class="col-sm-4 pad-0-mar-0" >
                        <a href="/public/profile/@{{school_id}}">
                            <img id="img0" class="card-photo pull-left" style=" max-height: 180px;  width: 100%; background-image:linear-gradient(rgba(206, 255, 255, 0.01), rgba(0, 0, 0, 0.40)), url(/images/schools/@{{image}})">
                        </a>
                        <a href="/public/profile/@{{school_id}}" target="_blank">
                            <img id="img1"  style="position: absolute; top: 6px; left: 6px;" class=" img-mini  " src="/images/schools/@{{logo}}">
                        </a>
                    </photo>

                </con>

                <div class="col-sm-8 " style="padding-left: 20px;">
                    <div class=" margin-bot-15 ">

                        <div style="position: absolute; top: 20px; right: 20px; color: #888">@{{distance}} </div>

                    <span class="pull-left" style="padding-right: 15px;">
                        <h5 class="pad-top-10 font-weight-300"> <a href="/public/profile/@{{school_id}}"> @{{name}}</a></h5>
                    </span>
                    </div>

                    <div class="">
                        <div class="col-lg-10 col-md-11 col-sm-12 col-xs-12 sc-t-grey" style="padding-left: 0">
                            <span><i class="fa fa-map-marker pull-left pad-top-3 xs-text-incr-85 " aria-hidden="true"></i></span>
                            <span class="pull-left pad-left-6 xs-text-incr-85 text-incr-95">@{{address}}</span>
                            <br>
                            <div class="hidden-xs">
                                <span><i class="fa fa-street-view pull-left pad-top-3 " aria-hidden="true"></i></span>
                                <span class="pull-left pad-left-3">@{{city}} </span>

                                <br>
                            </div>
                            <div class="pad-top-3"></div>
                            <span><i class="fa fa-phone pull-left pad-top-2 xs-text-incr-85" aria-hidden="true"></i></span>
                            <span class="pull-left pad-left-5">@{{phone}}</span>

                        </div>
                    </div>
                </div>
            </div>








            @{{/hits}}
            </script>


</div>
<div class="col-sm-6 col-md-7 right-map" style="">
    <div id="map" style=" height: 100vh; "></div>
</div>
</div>

{{--<!-- Footer -->--}}
{{--@include('public.footer')--}}

<script>
var LAT = '40.60';
var LNG = '23.00';
var MAX_D=10;
var c = null;
var APPLICATION_ID = 'FM3GHJGA1T';
var SEARCH_ONLY_API_KEY = 'de6f693844a49775415380088208bc66';
var INDEX_NAME = 'dummySchools';
var PARAMS = { hitsPerPage: 80 };
// Client + Helper initialization
var algolia = algoliasearch(APPLICATION_ID, SEARCH_ONLY_API_KEY);
var algoliaHelper = algoliasearchHelper(algolia, INDEX_NAME, PARAMS);
algoliaHelper.setQueryParameter('getRankingInfo', true);
// algoliaHelper.setQueryParameter('urlSync', true);
var map = new google.maps.Map(document.getElementById('map'), { scrollwheel: false, streetViewControl: false, mapTypeControl: false, zoom: 4, minZoom: 3, maxZoom: 12,
  styles: [{stylers: [{hue: '#3596D2'}]}] });

// DOM and Templates binding
  var $map = $('#map');
  var $hits = $('#hits');
  var $searchInput = $('#search-input');

  var hitsTemplate = Hogan.compile($('#hits-template').text());
  var noResultsTemplate = Hogan.compile($('#no-results-template').text());

// setTimeout(function() {

// }, 20);


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
        BOUNDING_BOX_RECTANGLE: 1,
        BOUNDING_BOX_POLYGON: 2,
        AROUND_IP: 4,
        AROUND_NYC: 5,
        AROUND_LONDON: 6,
        AROUND_SYDNEY: 7
      };
      var pageState = PAGE_STATES.LOAD;
      setPageState(PAGE_STATES.AROUND_NYC);

      // PAGE STATES
      // ===========
      function setPageState(state) {
        console.log(state);
        resetPageState();
        beginPageState(state);
      }

      function beginPageState(state) {
        pageState = state;

        switch (state) {
          case PAGE_STATES.BOUNDING_BOX_RECTANGLE:
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

          case PAGE_STATES.AROUND_NYC:
            var ar = LAT + ',' + LNG;
            algoliaHelper.setQueryParameter('aroundLatLng', '40.60, 23.00');
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
              setPageState(PAGE_STATES.BOUNDING_BOX_RECTANGLE);
              break;
            case 'polygon':
              setPageState(PAGE_STATES.BOUNDING_BOX_POLYGON);
              break;
            case 'ip':
              setPageState(PAGE_STATES.AROUND_IP);
              break;
            case 'nyc':
              setPageState(PAGE_STATES.AROUND_NYC);
              break;
            case 'london':
              setPageState(PAGE_STATES.AROUND_LONDON);
              break;
            case 'sydney':
              setPageState(PAGE_STATES.AROUND_SYDNEY);
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
        algoliaHelper.setQuery('');
        algoliaHelper.setQueryParameter('insideBoundingBox', undefined);
        algoliaHelper.setQueryParameter('insidePolygon', undefined);
        algoliaHelper.setQueryParameter('aroundLatLng', undefined);
        algoliaHelper.setQueryParameter('aroundLatLngViaIP', undefined);
      }



    $searchInput.on('input propertychange', function (e) {
        var query = e.currentTarget.value;
        if (pageState === PAGE_STATES.BOUNDING_BOX_RECTANGLE || pageState === PAGE_STATES.BOUNDING_BOX_POLYGON) {
      fitMapToMarkersAutomatically = false;
    }
        algoliaHelper.setQuery(query).search();
      });

      // DISPLAY RESULTS
      // ===============
      algoliaHelper.on('result', function (content) {
        // console.log(content);
        renderMap(content);
        // $hits.text(content);
        renderHits(content);
        c = content;
      });

      function renderHits(content) {
          if (content.hits.length === 0) {
            $hits.html(noResultsTemplate.render());
            return;
          }
          // content.hits = content.hits.slice(0, 10);
          for (var i = 0; i < content.hits.length; ++i) {

            var hit = content.hits[i];
            // console.log(hit._rankingInfo);
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
            // console.log(marker);

              message = hit.name;

            var content= '<div class="row"><span class="col-sm-2" >' +
                '<img style="width: 98%; height: auto; " src="' +'/images/schools/'+ hit.logo + '"/></span> ' +
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

        $scope.status='around';
        $scope.range=10;

        $scope.view='card';
        $scope.changeView= function(view){
            $scope.view=view;
            //console.log(view)
            if( $scope.view=='map'){  setTimeout(function() { $scope.showMap(); }, 10) }
        }


    });
</script>
</body>
</html>
