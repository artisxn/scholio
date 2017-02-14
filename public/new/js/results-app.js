angular.module("resultsApp",['ui.bootstrap','ngAnimate'])
    .controller("resultsCtrl",function ($timeout,$scope,$http) {
        $scope.orderSelect = 'ratingStar'; // set the default sort type
        $scope.sortReverse  = true;  // set the default sort order
        $scope.scholars=0;
        $scope.reviews=0;
        $scope.categoryFilter="null";
        $scope.currentPage = 1;
        $scope.itemsPerPage = 3;
        $scope.maxSize = 2;

        $scope.init = function () {
            console.log("initialize !");

            var path = window.location.pathname;
            var id = path.substring(path.length,16);

            $scope.schools = $http.get("/test/results/" + id)
                .success(function (data) {
                    console.log(id);
                    console.log(data);

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

                })
                .error(function (data) {
                    console.log("something went wrong: ", data);
                });


            $scope.totalItems = $scope.schools.length;
        };

        $scope.checkBoxFilter = function(item){

            filtered = [];
            filtered.push(item);
            console.log(filtered.length);
            if(item.scholarships >=  $scope.scholars && item.ratingCounter >=  $scope.reviews
                    //&& ( item.city == $scope.cityFilter || $scope.cityFilter==null )
                && (item.category == $scope.categoryFilter || $scope.categoryFilter =="null") ) {
                filtered.push(item);
            console.log('dsd' + filtered);
                //if (filtered.length > 0  ) {$scope.page=filtered.length;}
                //console.log($scope.page);

                return filtered;

            }
        };

        $timeout(function(){
            $scope.ready = true;
        },120);

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
    });