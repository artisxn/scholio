<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>schol.io | Διεκδίκησε τώρα την υποτροφία που σου ταιριάζει.</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/new/img/favicon.ico" type="image/x-icon" />

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/new/img/favicon-144.ico">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/new/img/favicon-72.ico">
    <link rel="apple-touch-icon-precomposed" href="/new/img/favicon-57.ico">


    <!--====== CSS  Styles =======-->
    @include('public.styles')


    <!-- BX Slider CSS -->
    <link href="/new/css/jquery.bxslider.css" rel="stylesheet">
    <!--<link href="http://bxslider.com/lib/jquery.bxslider.css" rel="stylesheet" />-->

    <!-- Ribbon CSS -->
    <!--<link href="new/css/ribbon.css" rel="stylesheet">-->

    <!-- Profile  CSS -->
    <link href="/new/css/profile.css" rel="stylesheet">

    <!-- Horizontal Ribbons  CSS -->
    <link href="/new/css/ribbonHorizontal.css" rel="stylesheet">

    <!-- Horizontal Ribbons  CSS -->
    <link href="/new/css/Hexagon.css" rel="stylesheet">


    <!--====== Javascript Files =======-->

    <!-- jQuery js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <!-- Bootstrap js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Bootstrap Select js  -->
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.4/js/bootstrap-select.min.js"></script>--}}

    <!-- Angular js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.8/angular.min.js"></script>

    <!-- Rating js-->
    <script src="/new/js/jquery.raty-fa.js"></script>

    <!-- BX Slider-->
    <script src="/new/js/jquery.bxslider412.js"></script>
    <!--<script src="http://bxslider.com/lib/jquery.bxslider.js"></script>-->

    <!--  -->
    <script src="/new/js/profile.js"></script>

    <!-- Angular App-->
    <script src="/new/js/profile-app.js"></script>

    <script>
        window.Scholio = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <style>
        .main-box2  ul li{text-indent: -20px;}
        .showContent { height: auto;}
        .hideContent {
            overflow: hidden;
            height: 370px;

        }

        .show-more {  padding-top: 30px;  text-align: center; color: #777; font-weight: 200 }
        .show-more:hover {cursor: pointer; color: #008da5; font-weight: 300}
    </style>



</head>
<body data-spy="scroll" data-target=".spy" data-offset="270" id="home"  ng-app="profileApp">
<!-- Scholio Header -->

<header class="spy navbar navbar-fixed-top navbar-scroll sc-landing-header" id="header" style="z-index: 99990">
    <div class="container">
        <div class="row">


            <div class="col-md-1 visible-lg visible-md nav-web">
                <!-- Scholio Branding -->
                <a class="sc-landing-brand" href="#home">
                    <div class="sc-landing-logo-sticky" style=" padding-top: 15px">
                        <img src="/new/img/logo.png" alt="scholio logo">
                    </div>
                </a>
            </div>

            <div class="col-xs-6  visible-sm visible-xs">
                <div class="nav-mobile">
                    <a class="" href="#home">
                        <div class="navbar-brand  sc-landing-logo-sticky">
                            <img src="/new/img/logo-m.png" alt="scholio logo">
                        </div>
                    </a>
                </div>
            </div>
            <!-- Scholio sMenu -->

            <!-- Large Menu -->
            <div class="col-md-11 visible-md visible-lg" >
                <ul class="nav navbar-nav navbar-right sc-landing-menu" >
                    <li class="sc-landing-menu-item"><a href="#sxetika" >ΣΧΕΤΙΚΑ</a></li>
                    <li class="sc-landing-menu-item"><a href="#spoudes">ΣΠΟΥΔΕΣ</a></li>
                    <li class="sc-landing-menu-item"><a href="#ypotrofies">ΥΠΟΤΡΟΦΙΕΣ</a></li>
                    <li class="sc-landing-menu-item"><a href="#reviews">ΑΞΙΟΛΟΓΗΣΕΙΣ</a></li>
                    <li><a href=""><button type="button" class="sc-button-landing sc-button sc-green sc-t-white">Εγγραφή</button></a></li>
                    <li><a href=""><button type="button" class="sc-button-landing sc-button sc-dark-blue sc-t-white ">Σύνδεση</button></a></li>
                </ul>
            </div>

            <!-- Mobile Menu -->
            <div class="col-xs-6 visible-sm visible-xs ">
                <div class="">
                    <div class="sc-landing-menu-mobile-sandwitch nav navbar-nav navbar-right pull-right">
                        <div class="sc-landing-menu-sandwitch-button-sticky sc-landing-menu-sandwitch">
                            <img src="/new/img/collapse-dark.png" alt="scholio logo">
                        </div>
                    </div>
                </div>
                <div class="visible-xs visible-sm">
                    <div class="sc-landing-menu-mobile-holder sc-dark-blue">
                        <div class="pull-right">
                            <div class="sc-landing-menu-mobile-close sc-t-white">x</div>
                        </div>
                        <br><br>
                        <div class="pull-right">
                            <a href="#">
                                <div class="sc-landing-menu-mobile-item sc-landing-menu-mobile-item-pressed">ΣΧΕΤΙΚΑ</div>
                            </a>
                            <a href="#">
                                <div class="sc-landing-menu-mobile-item sc-landing-menu-mobile-item-pressed">ΥΠΟΤΡΟΦΙΕΣ</div>
                            </a>
                            <div class="sc-landing-menu-mobile-item sc-landing-menu-mobile-item-pressed">ΕΠΙΚΟΙΝΩΝΙΑ</div>
                            <div class=""><br></div>
                            <a href=""><button type="button" class="sc-button sc-green sc-t-white pull-right">Εγγραφή</button></a>
                            <div class=""><br><br><br></div>
                            <a href=""><button type="button" class="sc-button sc-white sc-dark-blue pull-right">Σύνδεση</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>  <!-- row -->
    </div><!-- container-->
</header>



<!-- Scholio Main Section. -->
<div>
    <main id="main"  class="main"  ng-controller="profileCtrl" data-ng-init="init()" ng-cloak>
        <div class="container">

            <div class="row up">
            </div>


            <div class="up">
                <div class=" margin-bot-15 ">

                    <div
                            ng-repeat="school in schools
                                    | toArray
                                    | filter: schoolFilter">

                        <img id="img1"  class=" img-thumb pull-left margin-right-10 margin-top-15 margin-bot-10"
                             ng-src="/new/img/colleges/@{{school.logo}}">
                        <span class="pull-left pad-top-5 xs-pad-top">
                            <h4 class="">  @{{contactInfo.name}}..</h4>
                            <span  ng-show="school.ratingCounter!=0"> <rating  class="text-incr-85 sc-t-orange" id="Rating"></rating></span>
                            <span ng-show="school.ratingCounter!=0" class="sc-t-orange"> @{{school.ratingStar}} </span>
                            <span class="xs-text-incr-85">  &nbsp; ( @{{school.ratingCounter}}  Αξιολογήσεις)</span>
                        </span>

                    </div>


                </div>
            </div>



            <!-- BX SLIDER -->
            <div class="">
                <div class="row xl-margin-right " style="padding-left: 0px; padding-right: -2px">
                    <ul class="bxslider  "  data-bx-slider="
                pager: false, controls: true, minSlides: 1, maxSlides:5, moveSlides: 1,
                slideWidth: 303, slideMargin:15, infiniteLoop: true, hideControlOnEnd: false">
                        <li data-ng-repeat="image in contactInfo.image" data-notify-when-repeat-finished>
                            <img data-ng-src="/images/schools/@{{image.path}}" />
                        </li>
                    </ul>
                </div>
            </div>




            <!-- Photo Grid  HIDDEN -->
            <div class="hidden" ng-repeat="school in schools
                                    | toArray
                                    | filter: schoolFilter">

                <div class="row margin-top-30 hidden-xs hidden-sm hidden2">
                    <div class="" ng-repeat ="photo in school.photos">

                        <div class="col-md-3" ng-show="$index<4" >
                            <div class="">
                                <img ng-src="/new/img/colleges/img-act/@{{photo}}" alt="profile-pic" style="" class=" img-grid2"/>
                            </div>
                        </div>
                        <div class="col-md-4" ng-show="$index>3 " >
                            <div class="">
                                <img ng-src="/new/img/colleges/img-act/@{{photo}}" alt="profile-pic" style="" class=" img-grid"/>
                            </div>
                        </div>

                    </div>
                </div>
            </div>



            <!-- MAIN Section-->
            <div class="col-lg-9 col-md-9 margin-top-30 margin-bot-25" >


                <!-- Main scroll bar menu-->

                <nav class="spy sticky-bar-affix hidden-sm hidden-xs" data-spy="affix"  data-offset-top="370" id="header2" >
                    <ul class="nav nav-ul sc-dark-blue" style="">
                        <li class=""><a class="pull-left sc-t-white " href="#sxetika">Σχετικά</a></li>
                        <li><a class="pull-left sc-t-white" href="#spoudes">Σπουδές</a></li>
                        <li><a class="pull-left sc-t-white" href="#ypotrofies">Υποτροφίες</a></li>
                        <li><a class="pull-left sc-t-white" href="#reviews">Αξιολογήσεις</a></li>
                        <li><a class="pull-left sc-t-white" href="#faculty">Διδάσκοντες</a></li>
                    </ul>
                </nav>




                <!-- Main Info profile ng-repeat -->
                <div ng-repeat="school in schools
                                    | toArray
                                    | filter: schoolFilter">

                    <!-- Σχετικά -->
                    <div class="row main-box margin-bot-25">
                        <div  class="section-header" id="sxetika">
                            <p  class=" title margin-left-20 pad-top-40 text-incr-175 font-weight-100" style="">
                                <i class="fa fa-info-circle fa-linear margin-right-10" aria-hidden="true"></i> <span>Σχετικά </span>
                            </p>
                        </div>
                        <div class="margin-left-20 margin-right-20 sc-t-grey text-justify">
                            <p class="margin-top-10">
                                @{{school.about1}}
                            </p>
                            <p class=" margin-top-15">
                                @{{school.about2}}
                            </p>
                            <p class=" margin-top-15">
                                @{{school.about3}}
                            </p>
                        </div>
                    </div>

                    <!-- Σπουδές -->

                    <div class="row main-box2 margin-bot-25" >
                        <div ng-class="['content', {'hideContent':!showContent}]">
                            <div class="section-header2" id="spoudes">
                                <p  class=" title margin-left-20 pad-top-40 text-incr-175 font-weight-100">
                                    <i class="fa fa-graduation-cap fa-linear margin-right-10" aria-hidden="true"></i> <span>Σπουδές-Ειδικότητες </span>
                                </p>
                            </div>

                            <div ng-repeat="level in allStudies" >
                                <ul ng-if="level.status" ng-class="[{'col-md-6': (levelsCounter>1)},'col-sm-12']">
                                    <div class=" text-incr-175 font-weight-300 margin-top-10" style="text-decoration: underline;"> @{{ level.name }} </div>
                                    <ul ng-repeat="section in level.section">
                                        <div ng-if="section.status">
                                            <li class="margin-top-20">
                                                <img ng-src="/panel/assets/images/steps/@{{section.name}}.png" alt="" style="height: 22px; margin-top: -12px; filter: grayscale(90%); opacity: 0.8" class="margin-left-20">
                                                <span class="pad-left-5 text-incr-150 font-weight-100" style="">@{{ section.name}} </span>
                                            </li>
                                            <ul ng-repeat="study in section.study">
                                                <li ng-if="study.status" class="pad-bot-5">
                                                    <span class="pad-left-20 font-weight-100 ">@{{ study.name}}</span>
                                                </li>
                                            </ul>

                                        </div>
                                    </ul>

                                </ul>

                            </div>

                        </div>

                        <div style="clear: both"></div>
                        <div class="show-more" ng-if="studies.length>8">
                            <span ng-click="showMore()">@{{text}}</span>
                            <i class="@{{ icon }}"></i>
                        </div>


                    </div>



                    <!-- Υποτροφίες -->
                    <div class="row main-box margin-bot-25" id="ypotrofies">
                        <div class="section-header3">
                            <p  class=" title margin-left-20 pad-top-40 text-incr-175 font-weight-100">
                                <i class="fa fa-trophy fa-linear margin-right-10" aria-hidden="true"></i> <span>Υποτροφίες </span>
                            </p>
                        </div>

                        <div class="col-md-6 col-sm-12 scholar-box">
                            <div class="ribbon-wrapper">
                                <div class=" ribbon-front sc-green">
                                    <i class="fa fa-diamond sc-t-white pad-left-20 text-incr-150 margin-top-10" aria-hidden="true"></i>
                                    <span class="sc-t-white font-weight-100 text-incr-125 margin-left-10 "> Υποτροφία Αριστείας</span>
                                </div>
                                <div class="ribbon-edge-topright"></div>
                                <div class="ribbon-edge-bottomright"></div>
                                <div class="ribbon-back-right sc-green"></div>
                            </div>

                            <div class="hexagon" style="top: 37px;">
                                <i class="fa fa-money text-incr-200 sc-t-green text" aria-hidden="true"
                                   style=" position: relative; top: 4px; left: 13px; z-index: 2;"></i>
                            </div>

                            <div class="hexagon" style="top: 65px;">
                                <i class="fa fa-line-chart text-incr-200 sc-t-green text" aria-hidden="true"
                                   style=" position: relative; top: 4px; left: 13px; z-index: 2;"></i>
                            </div>

                            <div class="hexagon" style="top: 93px;">
                                <i class="fa fa-pencil text-incr-200 sc-t-green text" aria-hidden="true"
                                   style=" position: relative; top: 3px; left: 17px; z-index: 2;"></i>
                            </div>

                            <div class="sc-t-grey font-weight-300" style="position: relative; left: 70px; top: -110px;">
                                <p>Επιδότηση Διδάκτρων 1200 €</p>
                                <p class="pad-top-50">Σπουδές στη Διοίκηση Επιχειρήσεων (Bachelor's)</p>
                                <p class="pad-top-50"> Υποτροφία με γραπτές εξετάσεις</p>
                            </div>

                            <ul style="position: relative; left: 0px; top: -40px;">
                                <li><a href=""><button type="button" class="margin-left-30 col-xs-4 sc-button-landing sc-button sc-green sc-t-white">Προβολή</button></a></li>
                                <li><a href=""><button type="button" class="col-xs-offset-1  col-xs-4 sc-button-landing sc-button sc-dark-green sc-t-white">Αίτημα</button></a></li>
                            </ul>


                        </div>







                    </div>


                    <!-- Αξιολογησεις -->
                    <div class="row main-box2 margin-bot-25" id="reviews">
                        <div class="section-header2">
                            <p  class=" title margin-left-20 pad-top-40 text-incr-175 font-weight-100">
                                <i class="fa fa-star fa-linear margin-right-10" aria-hidden="true"></i> <span>Αξιολογήσεις </span>
                            </p>
                        </div>

                    </div>

                    <!-- Διδακτικό Προσωπικό  -->
                    <div class="row main-box margin-bot-25" id="faculty">
                        <div class="section-header3">
                            <p  class=" title margin-left-20 pad-top-40 text-incr-175 font-weight-100">
                                <i class="ion-ios-people-outline text-incr-115 margin-right-10" aria-hidden="true"></i> <span>Διδακτικό Προσωπικό </span>
                            </p>
                        </div>


                    </div>

                </div>






            </div> <!-- //col-lg-9-->




            <!-- Right Sidebar  -->
            <div class="col-lg-3 col-md-3 hidden-sm hidden-xs margin-top-30">
                <div  class="sidebar">
                    <div class=" box left-box1">
                        <div class="col-lg-12">
                            <div class="pad-top-20"></div>
                            <span><i class="fa fa-map-marker pull-left pad-top-3 xs-text-incr-85 " aria-hidden="true"></i></span>
                            <span class="pull-left pad-left-8 xs-text-incr-85 text-incr-95">@{{contactInfo.address}}</span>
                            <br>
                            <div class="pad-top-20"></div>
                            <div class="hidden-xs">
                                <span><i class="fa fa-street-view pull-left pad-top-3 " aria-hidden="true"></i></span>
                                <span class="pull-left pad-left-5">@{{contactInfo.city}}</span>
                                <br>
                            </div>
                            <div class="pad-top-20"></div>
                            <span><i class="fa fa-phone pull-left pad-top-2 xs-text-incr-85" aria-hidden="true"></i></span>
                            <span class="pull-left pad-left-5">@{{contactInfo.phone}}</span>
                            <br>
                            <div class="pad-top-20"></div>
                            <span><i class="fa fa-globe pull-left pad-top-3 xs-text-incr-85" aria-hidden="true"></i></span>
                            <span class="pull-left pad-left-5"> <a href="http://@{{contactInfo.website}}/" target="_blank">@{{contactInfo.website}}</a></span>

                            <div class="hidden-xs">
                                <br>
                                <div class="pad-top-20"></div>
                                <span><i class="fa fa-envelope  pull-left pad-top-2 " aria-hidden="true"></i></span>
                                <span class="pull-left pad-left-5"> <a href="mailto:@{{contactInfo.email}}">@{{contactInfo.email}}</a></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-spy="affix" data-offset-top="620" class="sidebar">
                    <div class=" box left-box2 sc-t-grey" ng-repeat="school in schools
                                    | toArray
                                    | filter: schoolFilter">

                        <div class="col-lg-11 margin-top-30">
                            <span><i class="fa fa-trophy pull-left pad-top-3 " aria-hidden="true"></i></span>
                            <span class="pull-left pad-left-5">Υποτροφίες</span>
                            <span class="pull-right badge"> @{{school.scholarships}}</span>
                            <br>
                            <div class="pad-top-20"></div>
                            <span><i class="ion-person-stalker  pull-left pad-top-2 " aria-hidden="true"></i></span>
                            <span class="pull-left pad-left-10" ng-show="school.category=='Κολλέγια' || school.category=='IEK' ">Συνδ. Φοιτητές</span>
                            <span class="pull-left pad-left-10" ng-show="school.category=='Ιδιωτικά Σχολεία'">Συνδ. Μαθητές</span>
                            <span class="pull-right">@{{school.students}}</span>
                            <br>
                            <div ng-show="school.category=='Κολλέγια' || school.category=='IEK' ">
                                <div class="pad-top-20"></div>
                                <span><i class="fa fa-paint-brush pull-left pad-top-3 " aria-hidden="true"></i></span>
                                <span class="pull-left pad-left-5">Ειδικότητες Σπουδών</span>
                                <span class="pull-right">@{{school.studies}}</span>
                                <br>
                            </div>
                            <div class="pad-top-20"></div>
                            <span><i class="fa fa-graduation-cap pull-left pad-top-3 " aria-hidden="true"></i></span>
                            <span class="pull-left pad-left-2 pad-bot-10">Συνδ. Καθηγητές</span>
                            <span class="pull-right">@{{school.teachers}}</span>

                        </div>
                    </div>
                </div>

            </div><!-- //col-lg-3-->
        </div> <!-- //container-->
    </main>
</div>



<!-- Footer -->
@include('public.footer')

</body>
<script>




    ///// Rating Js //////
    $('rating').raty({
        score    : 4.2,
        halfShow : true,
        half     : true,
        starHalf : 'fa fa-fw fa-star-half'
    });





    angular.module("profileApp",[])
            .controller("profileCtrl",function ($timeout,$scope,$http) {


                $scope.init = function () {


                    $scope.allStudies = $http.get('/api/school/studies/', {
                        headers: {'X-CSRF-TOKEN': Scholio.csrfToken}
                    }).success(function(data){
                        console.time('allStudies API');
                        $scope.allStudies = data['levels'];
//                        console.log($scope.allStudies[0].name);
//                        console.log($scope.allStudies[1].name);
//                        console.log($scope.allStudies[0].section[0].name);
//                        console.log($scope.allStudies[0].section[0].study[0].name);
                        chkdstudies();
                        console.timeEnd('allStudies API');
                    });


                    $scope.contactInfo= $http.get('/ptest/6', {
                        headers: {'X-CSRF-TOKEN': Scholio.csrfToken}
                    }).success(function(data){
                        console.time('contactInfo API.');
                        $scope.contactInfo=data;
                        console.timeEnd('contactInfo API.');
                    });





                    var chkdstudies = function(){
                        console.time('chkdstudies API');
                        $scope.studies = $http.get('/api/school/getSchoolStudies', {
                            headers: {'X-CSRF-TOKEN': Scholio.csrfToken}
                        }).success(function(data){
                            $scope.studies = data;
//                          console.log()
                            $scope.initial();
                            console.timeEnd('chkdstudies API');
                        });
                    };


                    $scope.schools = $http.get("/sch.json")
                            .success(function (data) {
                                $scope.schools = data
                                console.log(" API OK ");
                                console.log(Scholio.csrfToken)
                            })

                    $scope.schools =  $scope.schools[1];

                    $scope.schoolFilter = function(item){
                        filtered = [];
                        if(item.id == 1) {
                            filtered.push(item);
                            return  filtered;
                        }
                    };

                    $scope.levelsName=[];
                    $scope.sectionsName=[];
                    $scope.studiesName=[];
                    $scope.levelsCounter=0;


                    $scope.initial=function (){
                        console.time('initial');
                        for (var level in $scope.allStudies ){
//                            console.log(level)
                            for (var section in $scope.allStudies[level].section ){
//                                console.log(level,section)
                                for (var study in $scope.allStudies[level].section[section].study ){
//                                    var std=$scope.allStudies[level].section[section].study[study].name
//                                    console.log(std)
//                                    console.log(level,section,study)
                                    $scope.allStudies[level].section[section].study[study].status=false;

                                }
                            }
                        }

                        for (var std in $scope.studies ){
                            for ( level in $scope.allStudies ){
                                for ( section in $scope.allStudies[level].section ){
                                    for ( study in $scope.allStudies[level].section[section].study ){

                                        var stdy=$scope.allStudies[level].section[section].study[study]

                                            if($scope.studies[std][0].id == stdy.id){
                                                $scope.allStudies[level].section[section].study[study].status=true
                                                $scope.allStudies[level].section[section].status=true
                                                $scope.allStudies[level].status=true


//                                                console.log(level,section,study)
                                            }
                                    }
                                }
                            }
                        }
                        for ( level in $scope.allStudies ){
                            if($scope.allStudies[level].status){
                                $scope.levelsCounter++
                            }
                        }
                        console.timeEnd('initial');
                    }

                };

                $scope.text='Περισσότερα';
                $scope.showContent=false;
                $scope.icon='fa fa-angle-down'
                $scope.showMore= function (){
                    if($scope.text === "Περισσότερα"){
                        $scope.text= "Λιγότερα";
                        $scope.showContent=true;
                        $scope.icon='fa fa-angle-up'
                    } else {
                        $scope.text = "Περισσότερα";
                        $scope.showContent=false;
                        $scope.icon='fa fa-angle-down'
                    };


                }


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

            /* BxSlider Directives for ng-repeat*/
            .directive('bxSlider', [function () {
                return {
                    restrict: 'A',
                    link: function (scope, element, attrs) {
                        scope.$on('repeatFinished', function () {
                            element.bxSlider(scope.$eval('{' + attrs.bxSlider + '}'));
                        });
                    }
                }
            }])
            .directive('notifyWhenRepeatFinished', ['$timeout', function ($timeout) {
                return {
                    restrict: 'A',
                    link: function (scope, element, attr) {
                        if (scope.$last === true) {
                            $timeout(function () {
                                scope.$emit('repeatFinished');
                            });
                        }
                    }
                }
            }]);







    $(document).ready(function(){
        $("#main").hide().fadeIn(2000);
    });



</script>




</html>
