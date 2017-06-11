angular.module("registerApp",[])

    .controller("registerCtrl",function ($scope) {

        $scope.noValid=false;
        $scope.over = false;
        $scope.over2 = false;
        $scope.over3 = false;
        $scope.role = null;
        $scope.active = function (role) {
            $scope.role = role;
            //console.log($scope.role)
        }

        $scope.register=function(){
            if($scope.role!=null){
                window.location.href=/register/
            }
            else{$scope.noValid=true;
            setTimeout(function(){ $scope.noValid=false; location.reload(); console.log('error') }, 2000);

            }
        }
    })

