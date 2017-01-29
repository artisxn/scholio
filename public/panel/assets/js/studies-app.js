/**
 * Created by kfrei on 5/12/16.
 */





angular.module("studiesApp",[])

    .controller("studiesCtrl",function ($timeout,$scope,$http) {

        $scope.studySelect = ''; // set the default value


        $scope.init = function () {
            console.log("initialize Studies!");
        };

        $scope.studi = $http.get("/panel/assets/js/studiesCollegeBA.json")
            .success(function (data) {

                //var st1= data;
                //var temp = JSON.stringify(data)
                //    .replace(/ά/g,"α")
                //    .replace(/έ/g,"ε")
                //    .replace(/ή/g,"η")
                //    .replace(/ί/g,"ι")
                //    .replace(/ό/g,"ο")
                //    .replace(/ύ/g,"υ")
                //    .replace(/ώ/g,"ω")
                //    .replace(/address/g,"address2")
                //    .replace(/city/g,"city2");
                //var st2= JSON.parse(temp);
                //$scope.schools  = angular.merge([], st2, st1);
                ////$scope.page=$scope.schools.length;

                $scope.studi = data

            })
            .error(function (data) {
                console.log("something went wrong: ", data);
            });


        $timeout(function(){
            $scope.ready = true;
        },120);

    })







/* this filter avoids Filter notTo Array error under angular v1.4 */
//.filter('toArray', function () {
//    return function (obj, addKey) {
//        if (!angular.isObject(obj)) return obj;
//        if ( addKey === false ) {
//            return Object.keys(obj).map(function(key) {
//                return obj[key];
//            });
//        } else {
//            return Object.keys(obj).map(function (key) {
//                var value = obj[key];
//                return angular.isObject(value) ?
//                    Object.defineProperty(value, '$key', { enumerable: false, value: key}) :
//                { $key: key, $value: value };
//            });
//        }
//    };
//});







