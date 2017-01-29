/**
 * Created by kfrei on 5/12/16.
 */





angular.module("stepsApp",[])

    .controller("stepsCtrl",function ($timeout,$scope) {

        $scope.step1Select = 'reduce'; // set the default value
        $scope.step2Select = 'Διοίκηση Επιχειρήσεων';
        $scope.step3Select = 'talent';


        $scope.init = function () {
            console.log("initialize !");
        };


        $timeout(function(){
            $scope.ready = true;
        },120);

    });














