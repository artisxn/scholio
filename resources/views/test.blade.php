<!DOCTYPE html>
<html>
<head>
    <title>gfdg</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</head>
<script src="https://cdn.jsdelivr.net/jquery/2.1.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
<script src="https://cdn.jsdelivr.net/algoliasearch.helper/2/algoliasearch.helper.min.js"></script>
<script src="//cdn.jsdelivr.net/hogan.js/3.0.2/hogan.min.common.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?libraries=geometry,places&language=el&region=GR&key=AIzaSyC18JCENxILnmXA1VGlsjJwBXQi3XZMWVA"></script>
<body style="height: 100%">


<div class="row">
  <div class="col-lg-3">
            <header>
                <h1>Airports - Geo Search Demo</h1>
                <a href="" class="change_page_state page_mode mode_button active" data-mode="bounding" data-state="rectangle">Bounding box</a>
                <a href="" class="change_page_state page_mode mode_button" data-mode="around"   data-state="ip">Around a location</a>
                <p class="page_mode active" data-mode="bounding">
                  A bounding box filters the scope of the results to a specified zone.<br>
                  This zone can be
                  <a href="" class="change_page_state state_link active" data-mode="bounding" data-state="rectangle">a rectangle</a>
                </p>
              </header>

            <input id="search-input" type="text" autocomplete="off" spellcheck="false" autocorrect="off" placeholder="Search by name, city, airport code..."/>
            <input type="range" id="qqq" min="1000" max="80000" value="1000" onchange="rerender()">


            <div id="hits"></div>
            DEMO:
            <div id="demo"></div>

            <script type="text/template" id="hits-template">
            @{{#hits}}
                <div class="hit">

                  <h2 class="hit-name">@{{{ _highlightResult.name.value }}}</h2>
                  <span class="hit-distance"> @{{ distance }}</span>
                </div>
            @{{/hits}}
            </script>
</div>
<div class="col-lg-9" style="height: 100%;">
    <div id="map" style="min-height: 800px; height: 100%; "></div>
</div>
</div>



<script>
var LAT = '40.60';
var LNG = '23.00';
var MAX_D=1000000;
var c = null;
var APPLICATION_ID = 'FM3GHJGA1T';
var SEARCH_ONLY_API_KEY = 'de6f693844a49775415380088208bc66';
var INDEX_NAME = 'dummySchools';
var PARAMS = { hitsPerPage: 50 };
// Client + Helper initialization
var algolia = algoliasearch(APPLICATION_ID, SEARCH_ONLY_API_KEY);
var algoliaHelper = algoliasearchHelper(algolia, INDEX_NAME, PARAMS);
algoliaHelper.setQueryParameter('getRankingInfo', true);
var map = new google.maps.Map(document.getElementById('map'), { scrollwheel: false, streetViewControl: false, mapTypeControl: false, zoom: 4, minZoom: 3, maxZoom: 12,
  styles: [{stylers: [{hue: '#3596D2'}]}] });

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
              bounds: {north: 35, south: 41, east: 25, west: 19},
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




            var content= '<span class="col-sm-2" >' +
                '<img style="width: 42px; height: auto; margin-left: -20px;" src="' +'/images/schools/'+ hit.logo + '"/></span> ' +
                '<a target="_blank" style="color: #000 !important" href="/public/profile/' +hit.school_id+ '"><span class="col-sm-10 info-window-text" > ' +hit.name+
                '<div style="padding-top: 3px;"> ' +
                ' <span class="info-window-text2"><i class="fa fa-trophy margin-right-5"></i>Υποτροφίες: '+hit.lengthScholarships+'</span> </div>' +
                '</span> </a>'
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
              MAX_D = document.getElementById('qqq').value;
algoliaHelper.setQueryParameter('aroundRadius', MAX_D).search();
            }

</script>
</body>
</html>
