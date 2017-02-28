angular.module("resultsApp",['ui.bootstrap','ngAnimate'])
    .controller("resultsCtrl",function ($timeout,$scope,$http,$rootScope) {
        $scope.HERE = false
        $rootScope.plat=40.622023;
        $rootScope.plong=22.962298;


        $scope.locationSelected = window.SelectedLocation;
        //if(window.SelectedLocation){
        //    $scope.locationSelected = window.SelectedLocation;
        //}
        //else{
        //    $scope.locationSelected ='Θεσσαλονίκη, Ελλάδα'
        //}


        $scope.view='card';
        $scope.changeView= function(view){
            $scope.view=view;
            //console.log(view)
            if( $scope.view=='map'){  setTimeout(function() { $scope.showMap(); }, 10) }
        }

        var path = window.location.pathname;
        var id = path.substring(path.length,16);

        $scope.update = function(){
            if(id != 'all'){
                window.location = '/public/results/' + $scope.categoryFilter;
            }
            $scope.showMap();
        }

        $scope.orderSelect = 'lengthScholarships'; // set the default sort type
        $scope.sortReverse  = true;  // set the default sort order
        $scope.scholars=0;
        $scope.reviews=0;
        $scope.categoryFilter=id;
        $scope.currentPage = 1;
        $scope.itemsPerPage = 10;
        $scope.maxSize = 2;

        $scope.init = function () {
            // console.log("initialize !");
            // 
            getLatLng = function (address) {
                 var geocoder = new google.maps.Geocoder();
                 // var address = $scope.schools[i].address + ', ' + $scope.schools[i].city;
                 //console.log('geo '+address)

                 geocoder.geocode({'address': address}, function (results, status) {
                     if (status == google.maps.GeocoderStatus.OK) {
                         $rootScope.plat = results[0].geometry.location.lat();
                         $rootScope.plong = results[0].geometry.location.lng();
                     }
                 });
             }

             if(window.SelectedLocation != null){
                getLatLng(window.SelectedLocation);
            }


            $scope.schools = $http.get("/test/results/" + id)
                .success(function (data) {
                    // console.log(id);
                    // console.log(data);

                    var st1= data;
                    var temp = JSON.stringify(data)
                        .replace(/ά/g,"α")
                        .replace(/έ/g,"ε")
                        .replace(/ή/g,"η")
                        .replace(/ί/g,"ι")
                        .replace(/ό/g,"ο")
                        .replace(/ύ/g,"υ")
                        .replace(/ώ/g,"ω")
                        .replace(/address/g,"address2")
                        .replace(/city/g,"city2");
                    var st2= JSON.parse(temp);
                    $scope.schools  = angular.merge([], st2, st1);

                    for (var i = 0; i < $scope.schools.length; i++) {
                        var dist = latLonToDistance(data[i].lat,data[i].lng, $rootScope.plat, $rootScope.plong)
                        //console.log('lat -' + data[i].lat)
                        //console.log('lng -' + data[i].lat)
                        $scope.schools[i].distance=parseFloat(dist)
                    }
                    setTimeout(function() {$scope.HERE = true}, 20);
                    //console.log($scope.schools)
                })
                .error(function (data) {
                    //console.log("something went wrong: ", data);
                });


            $scope.totalItems = $scope.schools.length;

        };

        $scope.scrollTop= function(){
            location.hash = '#';
            location.hash = '#home';
            //location.hash = "#" + hash;
            console.log('pagination clicked')
        }

        function toRadius(Value) {
            return Value * Math.PI / 180;
        }

        function latLonToDistance(lat1, lon1, lat2, lon2) {
            //console.log('1 - ' + lat1 + ', 2 - ' + lon1)
            var R = 3958.7558657440545; // Radius of earth in Miles
            var dLat = toRadius(lat2-lat1);
            var dLon = toRadius(lon2-lon1);
            var a = Math.sin(dLat/2) * Math.sin(dLat/2) +
                Math.cos(toRadius(lat1)) * Math.cos(toRadius(lat2)) *
                Math.sin(dLon/2) * Math.sin(dLon/2);
            var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));
            var d = R * c;
            res =  (d*1.609344).toFixed(1);
            return res;
        }

        $rootScope.lat=[]
        $rootScope.lng=[]
        $scope.maxDistance=15
        $scope.checkBoxFilter = function(item){
            var filtered = [];

            if($scope.HERE){
                item.distance = parseFloat( latLonToDistance(item.lat, item.lng, $rootScope.plat, $rootScope.plong) )
            }

            if(item.lengthScholarships >=  $scope.scholars && item.distance<$scope.maxDistance
                    //&& ( item.city == $scope.cityFilter || $scope.cityFilter==null )
                && (item.type_id == $scope.categoryFilter || $scope.categoryFilter =='all') ) {
                //filtered.push(item)
                return filtered;
            };
        }

        //========Google geoLocation=================


        $scope.getLocation = function(val) {
            return $http.get('//maps.googleapis.com/maps/api/geocode/json?components=country:GR', {
                params: {
                    language: 'el',
                    address: val,
                    sensor: false
                }
            }).then(function(response){
                return response.data.results.map(function(item){
                    $rootScope.plat = item.geometry.location.lat;
                    $rootScope.plong =item.geometry.location.lng;
                    return item.formatted_address;
                });
            });
        };


        //========Google geoLocation=================


        $scope.showMap=function(){
            console.log('REFRESH Map')
            var d=$scope.maxDistance
            var zoom =11
            if(d<=7){zoom=13}
            else if (d<=13){zoom=12}


            if( $scope.view=='map'){
                var latlng = new google.maps.LatLng($rootScope.plat,$rootScope.plong);
                var myOptions = {
                    scrollwheel: false,
                    scaleControl:true,
                    scaleControlOptions: {position: google.maps.ControlPosition.BOTTOM_LEFT},
                    zoom: zoom,
                    center: latlng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                var map = new google.maps.Map(document.getElementById("map"), myOptions);


                var filterMark=[]
                var item=$scope.schools
                for ( var i = 0; i < item.length; i++) {
                    if(item[i].lengthScholarships >=  $scope.scholars && item[i].distance<$scope.maxDistance
                        && (item[i].type_id == $scope.categoryFilter || $scope.categoryFilter =='all' || $scope.categoryFilter ==null) ) {
                        filterMark.push(item[i])
                    };
                }
                //console.log(filterMark)

                var bounds = new google.maps.LatLngBounds();



                console.log('center '+$rootScope.plat, $rootScope.plong)
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng($rootScope.plat, $rootScope.plong),
                    //animation: google.maps.Animation.DROP,
                    title:'Κέντρο Αναζήτησης',
                    //icon:"/../new/img/markers/marker-scholio-40.png",
                    map: map
                });
                bounds.extend(marker.getPosition());
                var markers=[]

                for ( i = 0; i < filterMark.length; i++) {
                        marker = new google.maps.Marker({
                        position: new google.maps.LatLng(filterMark[i].lat, filterMark[i].lng),
                        animation: google.maps.Animation.DROP,
                        visible: false,
                        //title:filterMark[i].name,
                        icon:"/../new/img/markers/marker-teal-sm.png",
                        map: map
                    });

                    bounds.extend(marker.getPosition());

                    var infoWindow = new google.maps.InfoWindow({
                        content:filterMark[i].name
                    });

                    google.maps.event.addListener(marker, "click", (function(marker, i){
                        return function () {
                            var content= '<span class="col-sm-2" >' +
                                '<img style="max-width: 44px;" src="' +'/images/schools/'+ filterMark[i].logo + '"/></span> ' +
                                '<a target="_blank" style="color: #000 !important" href="/public/profile/' +filterMark[i].id+ '"><span class="col-sm-10 info-window-text" > ' +filterMark[i].name+
                                '<div style="padding-top: 3px;"> ' +
                                //'Μαθητές: '+filterMark[i].lengthStudents+
                                ' <span class="info-window-text2"><i class="fa fa-trophy margin-right-5"></i>Υποτροφίες: '+filterMark[i].lengthScholarships+'</span> </div>' +
                                '</span> </a>'
                            infoWindow.setContent(content);
                            infoWindow.open(map, marker);
                        }

                    })(marker, i));

                    // google.maps.event.addListener(marker, "mouseout", (function(marker, i){
                    //     return function () {
                    //         infoWindow.close(map, marker);
                    //     }
                    // })(marker, i));
                    //console.log(i,infoWindow.content)
                    // console.log(marker.position.lng());
                    markers.push({'lat': marker.position.lat(), 'lng': marker.position.lng(), 'name': filterMark[i].name});

                }
                console.log(markers);
                var labels = '';
                var markers = markers.map(function(location, i) {
                          return new google.maps.Marker({
                            position: location,
                            icon:"/../new/img/markers/marker-teal-sm.png",
                            animation: google.maps.Animation.DROP,
                            label: labels[i % labels.length]
                          });
                        });

                        // Add a marker clusterer to manage the markers.
                        var markerCluster = new MarkerClusterer(map, markers,
                            {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});

                        markers.forEach(function(key, i){
                            google.maps.event.addListener(key, "click", (function(key, i){
                                return function () {
                                    var content= '<span class="col-sm-2" >' +
                                        '<img style="max-width: 44px;" src="' +'/images/schools/'+ filterMark[i].logo + '"/></span> ' +
                                        '<a target="_blank" style="color: #000 !important" href="/public/profile/' +filterMark[i].id+ '"><span class="col-sm-10 info-window-text" > ' +filterMark[i].name+
                                        '<div style="padding-top: 3px;"> ' +
                                        //'Μαθητές: '+filterMark[i].lengthStudents+
                                        ' <span class="info-window-text2"><i class="fa fa-trophy margin-right-5"></i>Υποτροφίες: '+filterMark[i].lengthScholarships+'</span> </div>' +
                                        '</span> </a>'
                                    infoWindow.setContent(content);
                                    infoWindow.open(map, key);
                                }
                            })(key, i));
                        });

                if(marker.length>1){
                    map.setCenter(bounds.getCenter());
                    map.fitBounds(bounds);
                }


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






            }
        }


        $timeout(function(){
            $scope.showMap();
        },1100);

        $scope.result1 = '';
        $scope.options1 = {
            country: 'gr',
            types: '(cities)'
        };
        $scope.details1 = '';


        $scope.result2 = '';
        $scope.options2 = {
            country: 'gr'

        };
        $scope.details2 = '';

    })


    /* this filter avoids Filter notTo Array error under angular v1.4 */
    .filter('toArray', function () {
        return function (obj, addKey) {
            if (!angular.isObject(obj)) return obj;
            if ( addKey === false ) {
                return Object.keys(obj).map(function(key) {
                    return obj[key];
                });
            } else {
                return Object.keys(obj).map(function (key) {
                    var value = obj[key];
                    return angular.isObject(value) ?
                        Object.defineProperty(value, '$key', { enumerable: false, value: key}) :
                    { $key: key, $value: value };
                });
            }
        };
    })


    .directive('ngAutocomplete', function($parse) {
    return {
        scope: {
            details: '=',
            ngAutocomplete: '=',
            options: '='
        },


        link: function(scope, element, attrs, model) {

            //options for autocomplete
            var opts

            //convert options provided to opts
            var initOpts = function() {
                opts = {}
                if (scope.options) {
                    if (scope.options.types) {
                        opts.types = []
                        opts.types.push(scope.options.types)
                    }
                    if (scope.options.bounds) {
                        opts.bounds = scope.options.bounds
                    }
                    if (scope.options.country) {
                        opts.componentRestrictions = {
                            country: scope.options.country
                        }
                    }
                }
            }
            initOpts()

            //create new autocomplete
            //reinitializes on every change of the options provided
            var newAutocomplete = function() {
                scope.gPlace = new google.maps.places.Autocomplete(element[0], opts);
                google.maps.event.addListener(scope.gPlace, 'place_changed', function() {
                    scope.$apply(function() {
//              if (scope.details) {
                        scope.details = scope.gPlace.getPlace();
//              }
                        scope.ngAutocomplete = element.val();
                    });
                })
            }
            newAutocomplete()

            //watch options provided to directive
            scope.watchOptions = function () {
                return scope.options
            };
            scope.$watch(scope.watchOptions, function () {
                initOpts()
                newAutocomplete()
                element[0].value = '';
                scope.ngAutocomplete = element.val();
            }, true);
        }
    };
})


    .directive('ngEnter', function () {
        return function (scope, element, attrs) {
            element.bind("keydown keypress", function (event) {
                if(event.which === 13) {
                    scope.$apply(function (){
                        scope.$eval(attrs.ngEnter);
                    });

                    event.preventDefault();
                }
            });
        };
    })