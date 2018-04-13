<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>schol.io | Διεκδίκησε τώρα την υποτροφία που σου ταιριάζει.</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/favicon-144.ico">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/favicon-72.ico">
    <link rel="apple-touch-icon-precomposed" href="img/favicon-57.ico">



    <!--====== CSS  Styles =======-->
    @include('public.styles')


    <!-- Bootstrap Select -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css">

    <!-- Ribbon CSS -->
    <link href="{{asset('new/css/ribbon.css')}}" rel="stylesheet">

    <!-- Results CSS -->
    <link href="{{asset('new/css/results.css')}}" rel="stylesheet">



    <!--====== Javascript Files =======-->
    <!-- jQuery js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <!-- Bootstrap js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Bootstrap Select js  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.4/js/bootstrap-select.min.js"></script>


    <!-- Angular js-->
    <!--  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.8/angular.min.js"></script>
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.20/angular.min.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.8/angular-animate.js"></script>
    <!-- No error Filter:noArray angular 1.3.20 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/2.2.0/ui-bootstrap-tpls.min.js"></script>




    <!-- Rating js-->
    <script src="{{asset('/new/js/jquery.raty-fa.js')}}"></script>

    <!-- javascript Results -->
    <script src="{{asset('/new/js/results.js')}}"></script>
    <!--  -->

    <!--  Angular Results App -->
    <script src="{{asset('/new/js/results-app.js')}}"></script>






</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50" id="home"  ng-app="resultsApp">
    <!-- Scholio Header -->
    <header class="navbar navbar-fixed-top navbar-scroll sc-landing-header" id="header" >
        <div class="container">

            <div class="row">
                <div class="col-md-1 visible-lg visible-md nav-web">
                    <!-- Scholio Branding -->
                    <a class="sc-landing-brand" href="#home">
                        <div class="sc-landing-logo-sticky" style=" padding-top: 15px">
                            <img src="{{asset('new/img/logo.png')}}" alt="scholio logo">
                        </div>
                    </a>
                </div>

                <div class="col-xs-6  visible-sm visible-xs">
                    <div class="nav-mobile">
                        <a class="" href="#home">
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
                            <li class="sc-landing-menu-item"><a href="#sc-landing-sec2">ΣΧΕΤΙΚΑ</a></li>
                            <li class="sc-landing-menu-item"><a href="">ΥΠΟΤΡΟΦΙΕΣ</a></li>
                            <li class="sc-landing-menu-item"><a href="#sc-landing-sec5">ΕΠΙΚΟΙΝΩΝΙΑ</a></li>
                            <li><a href=""><button type="button" class="sc-button-landing sc-button sc-green sc-t-white">Εγγραφή</button></a></li>
                            <li><a href=""><button type="button" class="sc-button-landing sc-button sc-dark-blue sc-t-white ">Σύνδεση</button></a></li>
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

                    <div class="">
                        <div class="navbar-right pull-right margin-right-30  ">
                            <a class="" role="button"
                               data-toggle="collapse" href="#collapseMenu"
                               aria-expanded="false" aria-controls="collapseMenu">
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
        </div> <!-- container-->
    </header>

    <!-- Scholio Main Section. -->
    <main id="main"  class="main"   ng-controller="resultsCtrl" data-ng-init="init()" ng-cloak>
        <div class="container">
            <div class="row up">

            </div>

            <div class="row">
                <!--============ collapseMenu =============-->
                <div class="collapse  hidden-md hidden-lg col-xs-12 mob-filter " id="collapseMenu"
                     style=" ">

                        <div class="" style=" box-shadow: 0px 4px 9px 0px #979797;">
                            <div class=" box left-box1" style="z-index: 195; ">
                                <p class="text-incr-115 centered-text"> Πεδία Αναζήτησης</p>

                                <a class="" role="button"
                                   data-toggle="collapse" href="#collapseMenu"
                                   aria-expanded="false" aria-controls="collapseMenu">
                                        <span class="btn-close">
                                            <i class="fa fa-times text-incr-115 sc-t-grey" aria-hidden="true"></i>
                                        </span>
                                </a>

                                <form class="centered-text" style="max-width: 335px;">

                                    <select title="Εκπαιδευτικός Φορέας" class="selectpicker" data-width="70%" ng-model="categoryFilter">
                                        <option id="drop1" data-icon="glyphicon glyphicon-education" data-subtext="" value="null"
                                                data-content=" <i class='glyphicon glyphicon-education margin-right-5 kf-gray'></i> <span class='kf-gray text-incr-85'> &nbsp;  Εκπαιδευτικός Φορέας</span>">....</option>

                                        <option data-icon="glyphicon glyphicon-globe" data-subtext="" class="kf-option" value="Κολλέγια">&nbsp; Κολλέγια</option>
                                        <option data-icon="glyphicon glyphicon-blackboard" data-subtext="" class="kf-option" value="Ιδιωτικά Σχολεία">&nbsp;  Ιδιωτικά Σχολεία</option>
                                        <option data-icon="glyphicon glyphicon-briefcase" data-subtext="" class="kf-option" value="IEK">&nbsp; IEK </option>
                                        <option data-icon="glyphicon glyphicon-grain" data-subtext="" class="kf-option" value="Επαγγελματικές Σχολές">&nbsp; Επαγγελματικές Σχολές</option>
                                        <option data-icon="glyphicon glyphicon-pencil" data-subtext="" class="kf-option" value="Φροντιστήρια">&nbsp;  Φροντιστήρια </option>
                                    </select>
                                </form>

                                <div class="input-group centered-text pad-top-20">
                                    <span class="input-group-addon text-incr-115 kf-gray" id="basic-addon1"><i class="fa fa-map-marker margin-right-5"></i></span>
                                    <input type="text" class="kf-option" id="input1" placeholder="Περιοχή/πόλη" ng-model="cityFilter">
                                </div>

                            </div>

                            <div class=" box left-box2 ">
                                <p class="text-incr-115 centered-text"> Φίλτρα Αναζήτησης</p>

                                <div class="[ form-group ] centered-text" >
                                    <input type="checkbox" name="checkbox-1" id="checkbox-1" autocomplete="off" ng-model="scholars" ng-value-true=1 ng-value-false=0/>
                                    <div class="[ btn-group ]" >
                                        <label for="checkbox-1" class="[ btn btn-default ]">
                                            <span class="[ glyphicon glyphicon-ok ] kf-gray"></span>
                                            <span> </span>
                                        </label>
                                        <label for="checkbox-1" class="[ btn btn-default ] kf-check kf-gray ">
                                            <i class="fa fa-trophy pad-right-15" aria-hidden="true"></i> Με &nbsp; υποτροφίες
                                        </label>
                                    </div>
                                </div>

                                <div class="[ form-group ] centered-text" >
                                    <input type="checkbox" name="checkbox-2" id="checkbox-2" autocomplete="off" ng-model="reviews" ng-value-true=1 ng-value-false=0/>
                                    <div class="[ btn-group ]" >
                                        <label for="checkbox-2" class="[ btn btn-default ]">
                                            <span class="[ glyphicon glyphicon-ok ] kf-gray"></span>
                                            <span> </span>
                                        </label>
                                        <label for="checkbox-2" class="[ btn btn-default ] kf-check kf-gray  " >
                                            <i class="fa fa-star pad-right-15" aria-hidden="true"></i> Με αξιολογήσεις
                                        </label>
                                    </div>
                                </div>

                            </div>

                        </div>

                </div><!-- collapseMenu -->


                <div class="col-lg-3 col-md-3 hidden-sm hidden-xs hidden-xxs " style="">
                    <div class=" box left-box1">
                        <p class="text-incr-115 margin-left-10"> Πεδία Αναζήτησης</p>

                        <form class="centered-text" >

                            <select title="Εκπαιδευτικός Φορέας" class="selectpicker" data-width="90%" ng-model="categoryFilter">
                                <option id="drop1" data-icon="glyphicon glyphicon-education" data-subtext="" value="null"
                                        data-content=" <i class='glyphicon glyphicon-education margin-right-5 kf-gray'></i> <span class='kf-gray text-incr-85'> &nbsp;  Εκπαιδευτικός Φορέας</span>">....</option>

                                <option data-icon="glyphicon glyphicon-globe" data-subtext="" class="kf-option" value="Κολλέγια">&nbsp; Κολλέγια</option>
                                <option data-icon="glyphicon glyphicon-blackboard" data-subtext="" class="kf-option" value="Ιδιωτικά Σχολεία">&nbsp;  Ιδιωτικά Σχολεία</option>
                                <option data-icon="glyphicon glyphicon-briefcase" data-subtext="" class="kf-option" value="IEK">&nbsp; IEK </option>
                                <option data-icon="glyphicon glyphicon-grain" data-subtext="" class="kf-option" value="Επαγγελματικές Σχολές">&nbsp; Επαγγελματικές Σχολές</option>
                                <option data-icon="glyphicon glyphicon-pencil" data-subtext="" class="kf-option" value="Φροντιστήρια">&nbsp;  Φροντιστήρια </option>
                            </select>
                        </form>

                        <div class="input-group centered-text pad-top-20">
                            <span class="input-group-addon text-incr-115 kf-gray" id="basic-addon1"><i class="fa fa-map-marker margin-right-5"></i></span>
                            <input type="text" class="kf-option" id="input1" placeholder="Περιοχή/πόλη" ng-model="cityFilter">
                        </div>

                    </div>

                    <div class=" box left-box2 ">
                        <p class="text-incr-115 margin-left-10"> Φίλτρα Αναζήτησης</p>

                        <div class="[ form-group ] centered-text" >
                            <input type="checkbox" name="checkbox-1" id="checkbox-1" autocomplete="off" ng-model="scholars" ng-value-true=1 ng-value-false=0/>
                            <div class="[ btn-group ]" >
                                <label for="checkbox-1" class="[ btn btn-default ]">
                                    <span class="[ glyphicon glyphicon-ok ] kf-gray"></span>
                                    <span> </span>
                                </label>
                                <label for="checkbox-1" class="[ btn btn-default ] kf-check kf-gray ">
                                    <i class="fa fa-trophy pad-right-15" aria-hidden="true"></i> Με &nbsp; υποτροφίες
                                </label>
                            </div>
                        </div>

                        <div class="[ form-group ] centered-text" >
                            <input type="checkbox" name="checkbox-2" id="checkbox-2" autocomplete="off" ng-model="reviews" ng-value-true=1 ng-value-false=0/>
                            <div class="[ btn-group ]" >
                                <label for="checkbox-2" class="[ btn btn-default ]">
                                    <span class="[ glyphicon glyphicon-ok ] kf-gray"></span>
                                    <span> </span>
                                </label>
                                <label for="checkbox-2" class="[ btn btn-default ] kf-check kf-gray  " >
                                    <i class="fa fa-star pad-right-15" aria-hidden="true"></i> Με αξιολογήσεις
                                </label>
                            </div>
                        </div>


                    </div>

                    <a href="">
                        <button type="button" class="sc-button2 sc-primary sc-t-white pull-right margin-top-15">
                        <i class="fa fa-search pad-right-15" aria-hidden="true"></i>Αναζήτηση</button>
                    </a>

                </div>  <!-- //col-lg-3-->


                <div class="col-lg-9 col-md-9 col-sm-12 kf-col-xs-10 kf-col-xs-offset-1" >

                    <div ng-repeat="school in schools
                        | toArray
                        | filter: cityFilter
                        | filter: checkBoxFilter as resultsFiltered">
                        <!--<span ng-show="$last" >Βρεθηκαν @{{$index+1}} αποτελέσματα </span>  -->
                    </div>
                    <div class="pull-left margin-top-10 margin-bot-15">
                        <span ng-show="resultsFiltered.length==0" class="sc-t-primary"> Δεν Βρέθηκαν αποτελέσματα</span>
                        <span ng-show="resultsFiltered.length==1">Βρέθηκε @{{resultsFiltered.length}} αποτελέσμα </span>
                        <span ng-show="resultsFiltered.length >1" class="">Βρέθηκαν @{{resultsFiltered.length}} αποτελέσματα </span>
                    </div>

                        <div class="pull-right margin-top-15 margin-bot-15 sm-pull-left xs-pull-left" >
                            <span class="xs-text-incr-85">
                                <!--<i class='glyphicon glyphicon-filter '></i> -->
                                Ταξινόμηση με βάση
                            </span>

                                <form class="pull-right margin-left-10 margin-top--8 font-90">
                                    <select title="" class="selectpicker font-90 shortDrop" data-width="140px" ng-model="orderSelect">
                                        <!--<option id="drop2" data-subtext="" value=""-->
                                                <!--&lt;!&ndash;data-content=" <i class='glyphicon glyphicon-filter margin-right-5 kf-gray'></i> <span class='kf-gray text-incr-85'&ndash;&gt;-->
                                                <!--&gt; &nbsp; </span>"></option>-->
                                        <option data-icon="glyphicon glyphicon-star" data-subtext="" class="font-90" value="ratingStar">&nbsp; Αξιολόγηση</option>
                                        <option data-icon="fa fa-trophy" data-subtext="" class="font-90" value="scholarships">&nbsp; Υποτροφίες</option>
                                    </select>
                                </form>

                        </div>


                        <ul>
                            <li class="" ng-repeat="school in schools
                            | toArray
                            | orderBy: orderSelect:sortReverse
                            | filter: cityFilter
                            | filter: checkBoxFilter
                            | limitTo:itemsPerPage:((currentPage-1)*itemsPerPage )">

                                <!--@{{$index+1+( (currentPage-1)*numPerPage )}}-->

                                <div class="card clear-fix margin-bot-25">

                                    <div class="card-ribbon">
                                        <div  ng-show="school.top==5" class="ribbon top5"><span style="font-size: smaller">top @{{school.top}}</span></div>
                                        <div  ng-show="school.top==10" class="ribbon top10"><span style="font-size: smaller">top @{{school.top}}</span></div>
                                        <div  ng-show="school.top==20" class="ribbon top20"><span style="font-size: smaller">top @{{school.top}}</span></div>
                                    </div>

                                    <con>
                                        <photo class="">
                                            <img id="img0" class=" card-photo pull-left "
                                            ng-style="{'background-image':'linear-gradient(rgba(206, 255, 255, 0.01), rgba(0, 0, 0, 0.40)), url(/new/img/colleges/@{{school.image}})'}"
                                            >
                                        </photo>
                                        <div class="card-ribbon">
                                            <img id="img2" class=" sc-white img-med hidden-lg hidden-xs" ng-src="/new/img/colleges/@{{school.logo}}">
                                            <img id="img3" class=" sc-white img-thumb hidden-lg hidden-md hidden-sm " ng-src="/new/img/colleges/@{{school.logo}}">
                                        </div>
                                    </con>

                                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-bot-15 ">
                                            <img id="img1"  class=" img-mini pull-left margin-right-10 margin-top-15 hidden-md hidden-sm hidden-xs"
                                                 ng-src="/new/img/colleges/@{{school.logo}}">
                                            <span class="pull-left">
                                                <h5 class="pad-top-10">  @{{school.schoolName}}</h5>
                                                <span  ng-show="school.ratingCounter!=0"> <rating  class="text-incr-85 sc-t-orange" id="Rating"></rating></span>
                                                <span ng-show="school.ratingCounter!=0" class="sc-t-orange"> @{{school.ratingStar}} </span> <span class="xs-text-incr-85">  &nbsp; ( @{{school.ratingCounter}}  Αξιολογήσεις)</span>
                                            </span>
                                        </div>

                                        <div class="col-lg-5 col-md-9  col-lg-6 col-sm-9 col-xs-12 kf-margin-top">
                                            <span><i class="fa fa-trophy pull-left pad-top-3 " aria-hidden="true"></i></span>
                                            <span class="pull-left pad-left-5">Υποτροφίες</span>
                                            <span class="pull-right badge"> @{{school.scholarships}}</span>
                                            <br>
                                            <div class="pad-top-5"></div>
                                            <span><i class="ion-person-stalker  pull-left pad-top-2 " aria-hidden="true"></i></span>
                                            <span class="pull-left pad-left-10" ng-show="school.category=='Κολλέγια' || school.category=='IEK' ">Συνδ. Φοιτητές</span>
                                            <span class="pull-left pad-left-10" ng-show="school.category=='Ιδιωτικά Σχολεία'">Συνδ. Μαθητές</span>
                                            <span class="pull-right">@{{school.students}}</span>
                                            <br>
                                        </div>

                                        <div class="col-lg-offset-1 col-lg-6 col-md-9 col-sm-9 col-xs-12 margin-bot-10 kf-margin-top margin-top-3">
                                            <div ng-show="school.category=='Κολλέγια' || school.category=='IEK' ">
                                                <span><i class="fa fa-paint-brush pull-left pad-top-3 " aria-hidden="true"></i></span>
                                                <span class="pull-left pad-left-5">Ειδικότητες Σπουδών</span>
                                                <span class="pull-right">@{{school.studies}}</span>
                                                <br>
                                                <div class="pad-top-5"></div>
                                            </div>

                                            <span><i class="fa fa-graduation-cap pull-left pad-top-3 " aria-hidden="true"></i></span>
                                            <span class="pull-left pad-left-2 pad-bot-10">Συνδ. Καθηγητές</span>
                                            <span class="pull-right">@{{school.teachers}}</span>

                                        </div>

                                        <div ng-show="school.category=='Ιδιωτικά Σχολεία' ">
                                            <div class="margin-pad" style=" "></div>
                                        </div>


                                        <hr>
                                    </div>

                                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 ">

                                        <div class="">
                                            <div class="col-lg-10 col-md-11 col-sm-6 col-xs-12 sc-t-grey">
                                                <span><i class="fa fa-map-marker pull-left pad-top-3 xs-text-incr-85 " aria-hidden="true"></i></span>
                                                <span class="pull-left pad-left-6 xs-text-incr-85 text-incr-95">@{{school.address}}</span>
                                                <br>
                                                <div class="hidden-xs">
                                                    <span><i class="fa fa-street-view pull-left pad-top-3 " aria-hidden="true"></i></span>
                                                    <span class="pull-left pad-left-3">@{{school.city}}</span>
                                                    <br>
                                                </div>
                                                <div class="pad-top-3"></div>
                                                <span><i class="fa fa-phone pull-left pad-top-2 xs-text-incr-85" aria-hidden="true"></i></span>
                                                <span class="pull-left pad-left-5">@{{school.phone}}</span>
                                                <br>
                                                <div class="pad-top-3"></div>
                                                <span><i class="fa fa-globe pull-left pad-top-3 xs-text-incr-85" aria-hidden="true"></i></span>
                                                <span class="pull-left pad-left-5"> <a href="http://@{{school.website}}/" target="_blank">@{{school.website}}</a></span>

                                                <div class="hidden-xs">
                                                    <br>
                                                    <div class="pad-top-3"></div>
                                                    <span><i class="fa fa-envelope  pull-left pad-top-2 " aria-hidden="true"></i></span>
                                                    <span class="pull-left pad-left-5"> <a href="mailto:@{{school.email}}">@{{school.email}}</a></span>
                                                </div>
                                            </div>


                                            <div class="col-lg-2  col-md-1 col-sm-5 col-xs-12 margin-top-15 card-buttons text-incr-85">
                                                <div class="hidden-xs but-pad">
                                                    <a href="">
                                                        <button type="button" class="sc-button3 sc-dark-grey sc-t-white pull-right" >
                                                            <i class="fa fa-link pad-right-15" aria-hidden="true"></i>Αίτημα &nbsp; Σύνδεσης</button>
                                                    </a>
                                                    <a href="">
                                                        <button type="button" class="sc-button3 sc-dark-green sc-t-white pull-right margin-top-15">
                                                            <i class="fa fa-trophy pad-right-15" aria-hidden="true"></i>Αίτημα Υποτροφίας</button>
                                                    </a>
                                                </div>

                                                <div class="hidden-lg hidden-md hidden-sm  centered-text margin-top-30">
                                                    <a href="">
                                                        <button type="button" class="sc-button3 sc-dark-grey sc-t-white margin-right-10" >
                                                            <i class="fa fa-link pad-right-10" aria-hidden="true"></i>Σύνδεση</button>
                                                    </a>
                                                    <a href="">
                                                        <button type="button" class="sc-button3 sc-dark-green sc-t-white ">
                                                            <i class="fa fa-trophy pad-right-10" aria-hidden="true"></i> Υποτροφίες</button>
                                                    </a>
                                                </div>


                                            </div>

                                        </div>

                                    </div>

                                </div> <!-- ====================== -->
                            </li>
                        </ul>

                    <div ng-show="resultsFiltered.length >1">
                        <ul
                                class="pull-right"
                                uib-pagination
                                total-items="resultsFiltered.length"
                                items-per-page=3
                                ng-model="currentPage"
                                previous-text="Προηγούμενα"
                                next-text="Επόμενα">
                        </ul>
                    </div>


                    </div> <!-- //col-lg-9-->







            </div> <!-- //row-->

        </div> <!-- //container-->



    </main>

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

</script>





</html>
