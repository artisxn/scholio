
@section('styles')
    <style>
        @media (min-width: 1360px) {
            .col-xl-4 {  width: 33.33%;  }
        }

        @media (min-width: 1840px) {
            .col-xxl-3 {  width: 25%;  }
        }
    </style>
@endsection


@extends('panel.layouts.main')

@section('content')
    <div class="row" ng-app="studentsApp" ng-controller="studentsCtrl" data-ng-init="init()" ng-cloak>
                    <div class="input-group pull-left " style="width: 200px; margin: 10px 0 0 10px;; border: 1px solid #d1d1d1; border-radius: 5px;" >
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="text" class="form-control" placeholder="Αναζήτηση...χ"
                               ng-model="searchStr">
                    </div>

            <button class="btn btn-info pull-right" ng-click="changeView()" style="margin: 10px 10px 10px 0; height: 38px;">Αλλαγή Προβολής</button>

            <div style="clear: both"></div>
            <div ng-if="selection==1">
            <div ng-repeat="student in allStudents.users | orderBy:sortType:sortReverse | filter:searchStr"
                 ng-if="selection==true">
                <div ng-if="student.role=='student' || student.role=='teacher' ">

                    <div class="col-xs-12 col-sm-6 col-xl-4 col-xxl-3">
                        <div class="card-box">
                            <div class="row">
                                <div class="contact-card">
                                    <a class="pull-left" href="#">
                                        <img class="img-circle" width="75" ng-src="http://lorempixel.com/100/100/fashion/@{{$index}}" alt="" ng-if="$index<5" />
                                        <img class="img-circle" width="75"  ng-src="http://lorempixel.com/100/100/people/@{{$index-4}}" alt="" ng-if="$index>4" />
                                    </a>
                                    <div class="member-info">
                                        <h4 class="m-t-0 m-b-5 header-title"><b>@{{ student.name }}</b></h4>
                                        <p class="text-muted">Φοιτητής</p>
                                        <p class="text-dark">
                                            <i class="md md-email"></i>
                                            <small>@{{ student.email }}</small>
                                        </p>
                                    </div>
                                    <ul class="social-links list-inline m-0">
                                        <li>
                                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href=""
                                               data-original-title="Facebook">
                                                <i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href=""
                                               data-original-title="Twitter">
                                                <i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href=""
                                               data-original-title="LinkedIn">
                                                <i class="fa fa-linkedin"></i></a>
                                        </li>
                                        <li><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href=""
                                               data-original-title="Skype">
                                                <i class="fa fa-skype"></i></a>
                                        </li>
                                        <li><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href=""
                                               data-original-title="Message"><i class="fa fa-envelope-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </div>

            <div style="clear: both"></div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover"
                       style="background-color: #fff;" ng-if="selection==false" ng-cloak>
                    <thead>
                    <tr>
                        <th style="width: 30px">

                        </th>
                        <th> <a href="" ng-click="sortType = 'name' ; sortReverse = !sortReverse">
                                Ονοματεπώνυμο
                                <span ng-show="sortType == 'name' && !sortReverse" class="fa fa-sort-amount-asc"></span>
                                <span ng-show="sortType == 'name' && sortReverse" class="fa fa-sort-amount-desc"></span></a>
                        </th>
                        <th> <a href="" ng-click="sortType = 'email' ; sortReverse = !sortReverse">
                                e-mail
                                <span ng-show="sortType == 'email' && !sortReverse" class="fa fa-sort-amount-asc"></span>
                                <span ng-show="sortType == 'email' && sortReverse" class="fa fa-sort-amount-desc"></span></a>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr ng-repeat="student in allStudents.users | orderBy:sortType:sortReverse | filter:searchStr"
                        ng-if="student.role=='student' || student.role=='teacher' ">
                            <td>
                                    <i class="fa fa-user" style="font-size: 140%" aria-hidden="true"></i>
                            </td>
                            <td>@{{student.name}}</td>
                            <td>@{{student.email}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

@section('scriptsBefore')

<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.8/angular.min.js"></script>

<script>

    window.Scholio = <?php echo json_encode([
    'csrfToken' => csrf_token(),
]); ?>


    angular.module("studentsApp",[])
            .controller("studentsCtrl",function ($timeout,$scope,$http) {

                $scope.sortType='name';
                $scope.sortReverse=false;

                $scope.selection=true;
                $scope.init = function () {
                    console.log("initialize Students!");
                };

                $scope.students = $http.get("/api/users/all", {
                            headers: {'X-CSRF-TOKEN': Scholio.csrfToken}
                        })
                        .success(function (data) {

                            var st1= data;
                            var temp = JSON.stringify(data)
                                .replace(/ά/g,"α")
                                .replace(/έ/g,"ε")
                                .replace(/ή/g,"η")
                                .replace(/ί/g,"ι")
                                .replace(/ό/g,"ο")
                                .replace(/ύ/g,"υ")
                                .replace(/ώ/g,"ω")
                                .replace(/name/g,"name2");
                            var st2= JSON.parse(temp);
                            $scope.allStudents= angular.merge([], st2, st1);

                            console.log('users='+$scope.allStudents.users.length);

                        })
                        .error(function () {
                            console.log("something went wrong: ");
                        });

                $scope.changeView = function(){
                    $scope.selection=!$scope.selection;
                }

            })
</script>
@endsection
