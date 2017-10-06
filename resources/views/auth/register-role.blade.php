<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"><!-- prevent zoomIn in mobile inputs,selects,etc -->
    <meta name="description" content="Your scholarship is a click away!">
    <meta name="author" content="Schol.io">

    <link rel="shortcut icon" href="/panel/assets/images/favicon_1.ico">

    <title>schol.io | Διεκδίκησε την υποτροφία σου.</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/new/img/favicon.ico" type="image/x-icon" />

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/new/img/favicon-144.ico">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/new/img/favicon-72.ico">
    <link rel="apple-touch-icon-precomposed" href="/new/img/favicon-57.ico">


    <!-- font-awesome -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">

    <link href="/panel/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />


    <link href="/new/css/main.css" rel="stylesheet" type="text/css" />
    <link href="/new/css/register-login.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    {{--<!--[if lt IE 9]>--}}
    {{--<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>--}}
    {{--<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>--}}
    {{--<![endif]-->--}}


    <!-- Angular js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular.min.js"></script>

</head>

<style>

    .middle-text{ font-size: 140%; font-weight: 300; margin-top: 0; margin-bottom: 20px;}
    .btn-role{border: 1px solid #ddd; height: 140px; padding: 0; border-radius: 6px;}
    .btn-role:hover{ background-color: #f1f4f5; border: 2px solid #888; cursor: pointer}
    .role-img,.role-img2,.role-img3,.role-img-cl,.role-img-cl2,.role-img-cl3{width: 90px; margin-top: 15px; position: absolute; top: 10px;}
    .role-img:hover,.role-img2:hover{visibility: hidden}
    .role-img2,.role-img-cl2{ width: 88px; margin-top: 3px}
    .role-img3,.role-img-cl3{ width: 80px; margin-top:0}
    .btn-text{ margin-top: 110px; font-size: 130%; font-weight: 400}
    .colored{opacity: 0.01; }
    .colored:hover, .show{opacity: 1;}
    .selected{ background-color: #d9e5e8; border: 3px solid #555;box-shadow: 0 0  10px #aaa;}

    .btn-next{margin: 30px 0 0 0;}
    .fill{ margin-top: 20px; padding-top: 30px;}
    .login{background-color: #f1f4f5;}
    .mar-left{margin-left: 10px}
    .mar-right{margin-right: 10px}



    @media screen and (min-width:768px) {
        .btn-role {
            max-width: 190px;
        }
    }

    @media screen and (max-width:340px){
        .btn-next{width: 60px; font-size: 130%}
        .mar-left{margin-left: 0}
        .mar-right{margin-right: 0}
    }

</style>



<body ng-app="registerApp" ng-controller="registerCtrl">

        <div class="outer card-box col-xxs-12 col-sm-offset-1 col-sm-10 col-md-8 col-md-offset-2">
                <div class="panel-heading">
                    <div class="text-center">
                        <a href="/">
                            <img  class="register-scholio-logo"  src="/new/img/logoNX-m.png" alt="scholio logo">
                        </a>
                    </div>
                    <div class="text-center login-signUp-title">@lang('register.register')</div>
                </div>

                <div class="panel-body">
                    <form class="form-horizontal m-t-20 " action="{{ url('/userRole/save') }}" id="form">
                        {{ csrf_field() }}

                        <div class="middle-text centered-text">@lang('register.select')</div>

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="btn-role centered-text" ng-mouseover="over=true"  ng-mouseleave="over=false" ng-click="active('student')" ng-class="{selected: role=='student'}">
                                    <img src="/new/img/student2-line.png" class="role-img centered-abs " alt="">
                                    <div class="colored" ng-class="{show: (over||role=='student')}">
                                        <img src="/new/img/student2.png" class="role-img-cl centered-abs " alt="">
                                        <div class="btn-text">@lang('register.student')</div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="btn-role centered-text" ng-mouseover="over2=true"  ng-mouseleave="over2=false" ng-click="active('parent')" ng-class="{selected: role=='parent'}">
                                    <img src="/new/img/parent-line.png" class="role-img2 centered-abs " alt="">
                                    <div class="colored" ng-class="{show: over2||role=='parent'}">
                                        <img src="/new/img/parent.png" class="role-img-cl2 centered-abs " alt="">
                                        <div class="btn-text">@lang('register.parent')</div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-4">
                                <div class="btn-role centered-text" ng-mouseover="over3=true"  ng-mouseleave="over3=false" ng-click="active('teacher')" ng-class="{selected: role=='teacher'}" >
                                    <img src="/new/img/teacher-line.png" class="role-img3 centered-abs " alt="">
                                    <div class="colored" ng-class="{show: over3||role=='teacher'}" >
                                        <img src="/new/img/teacher.png" class="role-img-cl3 centered-abs " alt="">
                                        <div class="btn-text">@lang('register.teacher')</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group text-center">
                            <div class=" col-xs-6">
                                <button class="btn sc-dark-green sc-t-white btn-next" type="submit" onClick="history.back();">
                                    <i class="fa fa-chevron-circle-left mar-right" aria-hidden="true"></i>
                                    <span class="hidden-xxxxs">@lang('register.back') </span>
                                </button>
                            </div>
                            <div class="col-xs-6">
                                <button class="btn sc-dark-green sc-t-white btn-next" type="submit" ng-click="register()">
                                    <span class="hidden-xxxxs">@lang('register.continue')</span>
                                    <i class="fa fa-chevron-circle-right mar-left" aria-hidden="true"></i>
                                </button>
                            </div>
                            <div class="fill" ng-if="noValid">
                                <div class="fill sc-t-orange">@lang('register.error')</div>
                            </div>
                        </div>

                        <input type="text" style="display: none;" ng-model="role" name="role">


                    </form>
                </div>

            <div class="login">
                <div class="col-xs-12 text-center margin-top-15 margin-bot-25 ">
                    @lang('register.account')<a href="/login" class="text-primary" style="color: black"><b class="orange-hover">@lang('register.signin')</b></a>
                </div>
            </div>

        </div>



<script>
    angular.module("registerApp",[])

        .controller("registerCtrl",function ($scope) {
            console.log($scope.role)
            $scope.noValid=false;
            $scope.over = false;
            $scope.over2 = false;
            $scope.over3 = false;
            $scope.role = null;
            $scope.active = function (role) {
                $scope.role = role;
                console.log($scope.role)
            }

            $scope.register=function(){
                if($scope.role){
                    document.getElementById('form').submit();
//                     window.location.href=/register/
                }
                else{$scope.noValid=true;
                setTimeout(function(){ $scope.noValid=false; location.reload(); console.log('error') }, 2000);

                }
            }
        })
</script>
</body>



</html>
