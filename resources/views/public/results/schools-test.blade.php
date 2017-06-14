<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>schol.io | Διεκδίκησε την υποτροφία σου.</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/new/img/favicon.ico" type="image/x-icon" />

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/new/img/favicon-144.ico">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/new/img/favicon-72.ico">
    <link rel="apple-touch-icon-precomposed" href="/new/img/favicon-57.ico">



    <!--====== CSS  Styles =======-->
    @include('public.styles')

    <!-- Algolia CSS -->
    {{--<link rel="stylesheet" href="/new/css/algolia.css"></link>--}}
    <link rel="stylesheet" href="/new/css/algolia-search.css"></link>

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/instantsearch.js/1/instantsearch.min.css" />


    {{--<!-- FontAwesome -->--}}
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">--}}

    <!-- Bootstrap Select -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css">

    <!-- Ribbon CSS -->
     <link href="{{asset('new/css/ribbon.css')}}" rel="stylesheet">

    <!-- Hexagon CSS -->
    <link href="/new/css/Hexagon.css" rel="stylesheet">

    <!-- Input Range CSS -->
    <link href="{{asset('new/css/input-range.css')}}" rel="stylesheet">

    <!-- Results CSS -->
    <link href="{{asset('new/css/results.css')}}" rel="stylesheet">

    <!-- Algolia InstantSearch CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/instantsearch.js/1/instantsearch.min.css">

    <!-- Angular Material  CSS -->
    {{-- <link href="{{asset('new/css/angular-material.css')}}" rel="stylesheet">--}}

    <!-- jQuery js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <!-- Bootstrap js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Bootstrap Select js  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.4/js/bootstrap-select.min.js"></script>

    <!-- Angular js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular.min.js"></script>



    <!-- No error Filter:noArray angular 1.3.20 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/2.5.0/ui-bootstrap-tpls.min.js"></script>

    <!-- javascript Results -->
    <script src="{{asset('/new/js/results.js')}}"></script>


    <!-- Algolia InstantSearch.JS -->
    <script src="https://cdn.jsdelivr.net/instantsearch.js/1/instantsearch.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?libraries=geometry,places&language=el&region=GR&key=AIzaSyC18JCENxILnmXA1VGlsjJwBXQi3XZMWVA"></script>
    <script src="https://cdn.jsdelivr.net/instantsearch-googlemaps/1/instantsearch-googlemaps.min.js"></script>

    <!-- Rating js-->
    <script src="{{asset('/new/js/jquery.raty-fa.js')}}"></script>

<script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
<script src="https://cdn.jsdelivr.net/algoliasearch.helper/2/algoliasearch.helper.min.js"></script>
</head>



<body data-spy="scroll" data-target=".navbar" data-offset="50" id="home"  ng-app="schoolsResultsApp"  ng-controller="schoolsResultsCtrl" data-ng-init="init()"  ng-cloak>

  @include('components.preloader')

    <!-- Scholio Header -->
    <header class="navbar navbar-fixed-top navbar-scroll sc-landing-header" id="header" >
        <div class="container">

            <div class="row">
                <div class="col-md-1 visible-lg visible-md nav-web">
                    <!-- Scholio Branding -->
                    <a class="sc-landing-brand" href="{{ url('/') }}">
                        <div class="sc-landing-logo-sticky" style=" padding-top: 15px">
                            <img src="{{asset('new/img/logo.png')}}" class="sc-logo" alt="scholio logo">
                        </div>
                    </a>
                </div>

                <div class="col-xs-6  visible-sm visible-xs">
                    <div class="nav-mobile">
                        <a class="" href="{{ url('/') }}">
                            <div class="navbar-brand  sc-landing-logo-sticky">
                                <img src="{{asset('new/img/logo-m.png')}}" class="sc-logo" alt="scholio logo">
                            </div>
                        </a>
                    </div>
                </div>
                <!-- Scholio sMenu -->

                <!-- Large Menu -->
                <div class="col-md-11 visible-md visible-lg">
                    <div class="">
                        <ul class="nav navbar-nav navbar-right sc-landing-menu">
                            {{--<li class="sc-landing-menu-item"><a href="">ΥΠΟΤΡΟΦΙΕΣ</a></li>--}}
                            <li class="sc-landing-menu-item"  ">
                            <a href="{{url('public/scholarships')}}" class="btn-change-search">
                                <i class="fa fa-trophy margin-right-5"></i>
                                Αναζήτηση Υποτροφιών
                            </a>
                            </li>
                            @if(auth()->check())
                                <li><a href="{{ url('/dashboard') }}"><button type="button" class="sc-button-landing sc-button sc-green sc-t-white">Διαχείριση</button></a></li>
                                <li><a href="{{ url('/out') }}"><button type="button" class="sc-button-landing sc-button sc-dark-blue sc-t-white ">Αποσύνδεση</button></a></li>
                            @else
                                <li><a href=""><button type="button" class="sc-button-landing sc-button sc-green sc-t-white" data-toggle="modal" data-target="#select-modal">Εγγραφή</button></a></li>
                                <li><a href=""><button type="button" class="sc-button-landing sc-button sc-dark-blue sc-t-white " data-toggle="modal" data-target="#signIn-modal">Σύνδεση</button></a></li>
                            @endif
                        </ul>
                    </div>
                </div>

                <!-- Mobile Menu -->
                <div class="col-xs-6 visible-sm visible-xs ">
                    <div class="">
                        <div class="sc-landing-menu-mobile-sandwitch nav navbar-nav navbar-right pull-right">
                            <div class="sc-landing-menu-sandwitch-button-sticky sc-landing-menu-sandwitch">
                                <img src="{{asset('new/img/collapse-dark.png')}}"  alt="scholio logo">
                            </div>
                        </div>
                    </div>

                    {{--data-toggle="collapse" aria-controls="collapseMenu" --}}
                    <div class="">
                        <div class="navbar-right pull-right margin-right-30 filter-icon"  id="filter-btn">
                            <a class="" role="button"
                               href="#" aria-expanded="false">
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
                            <div class="sign-links">
                                @if(auth()->check())
                                    <div class=""><br></div>
                                    <a href="{{ url('/dashboard') }}"><button type="button" class="sc-button sc-orange sc-t-white pull-right">Διαχείριση</button></a>
                                    <div><br><br><br></div>
                                    <a href="{{ url('/out') }}"><button type="button" class="sc-button sc-green sc-t-white pull-right">Αποσύνδεση</button></a>
                                @else
                                    <div class=""><br></div>
                                    <a href="{{ url('/register') }}"><button type="button" class="sc-button sc-orange sc-t-white pull-right">Εγγραφή</button></a>
                                    <div class=""><br><br><br></div>
                                    <a href="{{ url('/login') }}"><button type="button" class="sc-button  sc-green sc-t-white pull-right">Σύνδεση</button></a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

            </div>  <!-- row -->
        </div> <!-- container-->
    </header>

    <!-- Scholio Main Section. -->
    <main id="main"  class="main"  ng-cloak>
        <div class="container">
            <div class="row up">

            </div>

            <div class="row">
                <!--============ collapseMenu =============-->
                <div id="mobFilt" class="hidden-md hidden-lg col-xs-8 mob-filter left--300"
                     style=" padding: 0 0 15px 0;  width: 250px; box-shadow: 2px 0px 40px 6px #4e4e4e; height: 100%; overflow-y: auto">

                    <div class="" style="z-index: 95; background-color: #eee; padding: 10px 7px 40px 7px; min-height: 100%; overflow-x: hidden" >

                        <div >
                            <div class="input-group margin-bot-15 " style="width: 100%; ">
                                <input type="text" class="form-control algolia-search-input" id="queryMobile" style="border-radius: 5px;" />
                            </div>
                        </div>


                        <div class="content-wrapper col-sm-12">
                            <aside style="width: 230px;">

                                <div id="statsMobile" class="text-muted "></div>
                                {{--<div class="facet-category-title facet font-weight-300">Φίλτρα Αναζήτησης:</div>--}}
                                <div class="facet-category-title">Φίλτρα Αναζήτησης:
                                    <a class="" role="button" id="close-btn"
                                       aria-expanded="false" aria-controls="">
                                        <i class="fa fa-times text-incr-115 sc-t-grey pad-left-35" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <div id="clear-allMobile" class="clear-filter-mobile"> </div>

                                <div class="filter-container">
                                    <div class="filter-title">Κατηγορίες</div>
                                    <div id="categoriesTypeMobile"></div>
                                </div>
                                <div class="filter-container">
                                    <div class="filter-title">Πόλεις</div>
                                    <div id="categoriesCityMobile"></div>
                                </div>

                            </aside>

                        </div>



                    </div>


                </div><!-- collapseMenu -->

                <div class="col-lg-3 col-md-3 hidden-sm hidden-xs hidden-xxs" >

                    <div class="col-sm-12">
                        <div class="input-group margin-bot-15 algolia-search-container">
                            <input type="text" class="form-control algolia-search-input" id="query"/>
                        </div>
                    </div>


                    <div class="btn-group " style="width: 100%; margin: 15px 0;">
                        {{-- <a href="{{ url('/public/schools/map') }}"> --}}
                        <button class="btn btn-primary" style=" width: 100%; height: 40px" onClick="showMap()">
                            <i class="fa fa-map pad-right-15" aria-hidden="true"></i>Προβολή Χάρτη
                        </button>
                        </a>
                    </div>




                    <div id="sort-by-container">

                    </div>

                    <div class="content-wrapper col-sm-12">
                        <aside>

                            <div id="stats" class="text-muted "></div>
                            <div class="facet-category-title facet font-weight-300">Φίλτρα Αναζήτησης:</div>

                            <div id="clear-all"class="clear-filter"></div>

                            <div class="filter-container">
                                <div class="filter-title">
                                    <i class="fa fa-university fa-linear5 margin-right-5"></i>
                                    Κατηγορίες</div>
                                <div id="categoriesType"></div>
                            </div>
                            <div class="filter-container">
                                <div class="filter-title">
                                    <i class="fa fa-map-marker fa-linear5 margin-right-5"></i>
                                    Πόλεις</div>
                                <div id="categoriesCity"></div>
                            </div>
                            {{-- <div class="filter-title">Αντικείμενο Σπουδών</div>
                            <div id="categoriesSection"></div> --}}
                            {{-- <div class="filter-title">Επίπεδο Σπουδών</div>
                            <div id="categoriesLevel"></div> --}}
                            <div class="filter-container">
                            <div id="rating" class="facet"></div>
                            </div>
                            {{--<div id="financial" class="facet"></div>--}}


                        </aside>

                    </div>


                </div>  <!-- //col-lg-3-->



                <!-- ========== SCHOLARSHIPS  CONTAINER ============= -->
                <div class="col-lg-9 col-md-9 col-sm-12 scholarship-container " id="">

                    {{--<div id="map" class="hidden-xs" style="height: 300px; width: 100%; margin-bottom: 20px;"></div>--}}

                    <main id="schools"></main>

                    <section id="pagination"></section>
                </div><!-- //col-lg-9-->
            </div> <!-- //row-->
        </div> <!-- //container-->
    </main>

    <!-- Footer -->
    @include('public.footer')

</body>
<script>
    function showMap(){
        var s = document.getElementById('query').value;
                console.log('asdasd');
                window.location = '/public/schools/map/?search='+ s;
    }
</script>



<script>
angular.module("schoolsResultsApp",[])
        .controller("schoolsResultsCtrl",function ($scope,$http) {


            $scope.over=false;
            $scope.over2=false;
            $scope.over3=false;
            $scope.role=null;
            $scope.active=function(role){
                $scope.role=role;
            }

            console.log('start');

            $scope.rate = function(id, stars){
                console.log('YYY');
            setTimeout(function() {
                $('#Rating-' + id).raty({
                    score    : stars,
                    halfShow : true,
                    half     : true,
                    starHalf : 'fa fa-fw fa-star-half'
                });
            }, 20);
        }

    var search = instantsearch({
        appId: 'FM3GHJGA1T',
        apiKey: 'de6f693844a49775415380088208bc66',
        indexName: 'dummySchools',
        urlSync: true
    });

    search.addWidget(
            instantsearch.widgets.searchBox({
                container: '#query',
                 poweredBy: true,
                 placeholder: "Αναζήτηση Εκπαιδευτικού Ιδρύματος"
            })
    );

    search.addWidget(
            instantsearch.widgets.stats({
                container: '#stats'
            })
    );

    search.addWidget(
            instantsearch.widgets.searchBox({
                container: '#queryMobile',
                 poweredBy: true,
                 placeholder: "Αναζήτηση Εκπαιδευτικού Ιδρύματος"
            })
    );

    search.addWidget(
            instantsearch.widgets.stats({
                container: '#statsMobile'
            })
    );

    search.on('render', function() {
        $('.product-picture img').addClass('transparent');
        $('.product-picture img').one('load', function() {
            $(this).removeClass('transparent');
        }).each(function() {
            if(this.complete) $(this).load();
        });
    });

    var hitTemplate = `
    <div class="card clear-fix margin-bot-25">
        <con>
            <photo class="">
                <a href="/public/profile/@{{school_id}}">
                    <img id="img0" class="card-photo pull-left" style="background-image:linear-gradient(rgba(206, 255, 255, 0.01), rgba(0, 0, 0, 0.40)), url(/images/schools/@{{image}})">
                </a>
            </photo>
            <div class="card-ribbon">
                <img id="img2" class=" sc-white img-med hidden-lg hidden-xs" src="/images/schools/@{{logo}}">
                <img id="img3" class=" sc-white img-thumb hidden-lg hidden-md hidden-sm " src="/images/schools/@{{logo}}">
            </div>
        </con>

        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-bot-15 ">
                <a href="/public/profile/@{{school_id}}" target="_blank">
                <img id="img1"  class=" img-mini pull-left margin-right-10 margin-top-15 hidden-md hidden-sm hidden-xs" src="/images/schools/@{{logo}}">
                </a>
                <span class="pull-left">
                    <h5 class="pad-top-10"> <a href="/public/profile/@{{school_id}}"> @{{name}}</a></h5>
                    <span>
                    <span class="product-rating">@{{#rating}}<span class="ais-star-rating--star@{{^.}}__empty@{{/.}}"></span>@{{/rating}}</span>
                    </span>
                    <span class="sc-t-orange"> @{{stars}} </span> <span class="xs-text-incr-85">  &nbsp; ( @{{reviews}}  Αξιολογήσεις)</span>
                </span>
            </div>

            <div class="col-lg-5 col-md-9  col-lg-6 col-sm-9 col-xs-12 kf-margin-top">
                <span><i class="fa fa-trophy pull-left pad-top-3 " aria-hidden="true"></i></span>
                <span class="pull-left pad-left-5">Υποτροφίες</span>
                <span class="pull-right badge"> @{{lengthScholarships}}</span>
                <br>
                <div class="pad-top-5"></div>
                <span><i class="fa fa-user pull-left pad-top-2 " aria-hidden="true"></i></span>
                <span class="pull-left pad-left-10" ng-show="type_id!='1' && type_id!='2'">Συνδ. Σπουδαστές</span>
                <span id="s-@{{school_id}}" data-length="@{{lengthStudents}}" class="pull-right">@{{lengthStudents}}</span>
                <br>
            </div>

            <div class="col-lg-offset-1 col-lg-6 col-md-9 col-sm-9 col-xs-12 margin-bot-10 kf-margin-top margin-top-3">
                <div ng-show="type_id==1 || type_id==2 ">
                    <span><i class="fa fa-paint-brush pull-left pad-top-3 " aria-hidden="true"></i></span>
                    <span class="pull-left pad-left-5">Ειδικότητες Σπουδών</span>
                    <span class="pull-right">@{{lengthStudies}}</span>
                    <br>
                    <div class="pad-top-5"></div>
                </div>

                <span><i class="fa fa-graduation-cap pull-left pad-top-3 " aria-hidden="true"></i></span>
                <span class="pull-left pad-left-2 pad-bot-10">Συνδ. Καθηγητές</span>
                <span class="pull-right">@{{lengthTeachers}}</span>
            </div>

            <div ng-show="type_id!=1 && type_id!=2">
                <div class="margin-pad" style=""></div>
            </div>
            <hr >
        </div>

        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 ">

            <div class="">
                <div class="col-lg-10 col-md-11 col-sm-6 col-xs-12 sc-t-grey">
                    <span><i class="fa fa-map-marker pull-left pad-top-3 xs-text-incr-85 " aria-hidden="true"></i></span>
                    <span class="pull-left pad-left-6 xs-text-incr-85 text-incr-95">@{{address}}</span>
                    <br>
                    <div class="hidden-xs">
                        <span><i class="fa fa-street-view pull-left pad-top-3 " aria-hidden="true"></i></span>
                        <span class="pull-left pad-left-3">@{{city}} </span>

                        <br>
                    </div>
                    <div class="pad-top-3"></div>
                    <span><i class="fa fa-phone pull-left pad-top-2 xs-text-incr-85" aria-hidden="true"></i></span>
                    <span class="pull-left pad-left-5">@{{phone}}</span>
                    <br>
                    <div class="pad-top-3"></div>
                    <span><i class="fa fa-globe pull-left pad-top-3 xs-text-incr-85" aria-hidden="true"></i></span>
                    <span class="pull-left pad-left-5"> <a href="http://@{{website}}/" target="_blank">@{{website}}</a></span>

                    <div class="hidden-xs">
                        <br>
                        <div class="pad-top-3"></div>
                        <span><i class="fa fa-envelope  pull-left pad-top-2 " aria-hidden="true"></i></span>
                        <span class="pull-left pad-left-5"> <a href="mailto:@{{email}}">@{{email}}</a></span>
                    </div>
                </div>
                <div class="col-lg-2  col-md-1 col-sm-5 col-xs-12 margin-top-15 card-buttons text-incr-85">
                    <div class="hidden-xs but-pad">
                        <a href="">
                            <button type="button" class="sc-button3 sc-dark-green sc-t-white pull-right margin-top-70">
                                <i class="fa fa-link pad-right-15" aria-hidden="true"></i>Αίτημα Σύνδεσης</button>
                        </a>
                    </div>

                    <div class="hidden-lg hidden-md hidden-sm  centered-text margin-top-30">
                        <a href="">
                            <button type="button" class="sc-button3 sc-dark-green sc-t-white ">
                                <i class="fa fa-link pad-right-10" aria-hidden="true"></i> Σύνδεση</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    `;



    var noResultsTemplate =
            '<div class="text-center">Δεν βρέθηκαν αποτελέσματα για <strong>@{{query}}</strong>.</div>';

    var menuTemplate =
            '<a href="javascript:void(0);" class="facet-item @{{#isRefined}}active@{{/isRefined}}"><span class="facet-name"><i class="fa fa-angle-right"></i> @{{name}}</span class="facet-name"></a>';





    search.addWidget(
            instantsearch.widgets.hits({
                container: '#schools',
                hitsPerPage: 5,
                templates: {
                    empty: noResultsTemplate,
                    item: hitTemplate
                },
                transformData: function(hit) {
                    hit.rating = [];
                    for (var i = 1; i <= 5; ++i) {
                        hit.rating.push(i <= hit.stars);
                    }
                    return hit;
                }
            })
    );

    search.addWidget(
            instantsearch.widgets.pagination({
                container: '#pagination',
                cssClasses: {
                    active: 'active'
                },
                labels: {
                    previous: '<i class="fa fa-angle-left fa-2x"></i> Προηγούμενη Σελίδα',
                    next: 'Επόμενη Σελίδα <i class="fa fa-angle-right fa-2x"></i>'
                },
                showFirstLast: false
            })
    );

    search.addWidget(
            instantsearch.widgets.hierarchicalMenu({
                container: '#categoriesType',
                attributes: ['type'],
                sortBy: ['name:asc'],
                templates: {
                    item: menuTemplate
                }
            })
    );


    search.addWidget(
            instantsearch.widgets.hierarchicalMenu({
                container: '#categoriesCity',
                attributes: ['city'],
                sortBy: ['name:asc'],
                templates: {
                    item: menuTemplate
                }
            })
    );

    search.addWidget(
            instantsearch.widgets.hierarchicalMenu({
                container: '#categoriesTypeMobile',
                attributes: ['type'],
                sortBy: ['name:asc'],
                templates: {
                    item: menuTemplate
                }
            })
    );


    search.addWidget(
            instantsearch.widgets.hierarchicalMenu({
                container: '#categoriesCityMobile',
                attributes: ['city'],
                sortBy: ['name:asc'],
                templates: {
                    item: menuTemplate
                }
            })
    );

    // search.addWidget(
    //         instantsearch.widgets.hierarchicalMenu({
    //             container: '#categoriesSection',
    //             attributes: ['section'],
    //             sortBy: ['name:asc'],
    //             templates: {
    //                 item: menuTemplate
    //             }
    //         })
    // );

    // search.addWidget(
    //         instantsearch.widgets.hierarchicalMenu({
    //             container: '#categoriesLevel',
    //             attributes: ['level'],
    //             sortBy: ['name:asc'],
    //             templates: {
    //                 item: menuTemplate
    //             }
    //         })
    // );

    search.addWidget(
      instantsearch.widgets.starRating({
        container: '#rating',
        attributeName: 'starsInt',
        templates: {
          header: '<div class="filter-title">Αξιολογήσεις</div class="filter-title">'
        }
      })
    );

    // search.addWidget(
    //   instantsearch.widgets.sortBySelector({
    //     container: '#sort-by-container',
    //     indices: [
    //       {name: 'dummyScholarships', label: 'Σχετικές'},
    //       {name: 'dummyScholarships_school_asc', label: 'Δημοφιλείς'},
    //       {name: 'dummyScholarships_created_asc', label: 'Νέες'}
    //     ]
    //   })
    // );

    // search.addWidget(
    //   instantsearch.widgets.refinementList({
    //     container: '#materials',
    //     attributeName: 'materials',
    //     operator: 'or',
    //     limit: 10,
    //     templates: {
    //       item: facetTemplateCheckbox,
    //       header: '<div class="facet-title">Materials</div class="facet-title">'
    //     }
    //   })
    // );

    // search.addWidget(
    //   instantsearch.widgets.refinementList({
    //     container: '#colors',
    //     attributeName: 'colors',
    //     operator: 'or',
    //     limit: 10,
    //     templates: {
    //       item: facetTemplateColors,
    //       header: '<div class="facet-title">Colors</div class="facet-title">'
    //     }
    //   })
    // );

    // search.addWidget(
    //   instantsearch.widgets.starRating({
    //     container: '#rating',
    //     attributeName: 'rating',
    //     templates: {
    //       header: '<div class="facet-title">Ratings</div class="facet-title">'
    //     }
    //   })
    // );

//     search.addWidget(
//       instantsearch.widgets.priceRanges({
//         container: '#financial',
//         attributeName: 'financial_amount',
//         cssClasses: {
//           list: 'nav nav-list',
//           count: 'badge pull-right',
//           active: 'active'
//         },
//         templates: {
//           header: '<div class="facet-title">Ποσό Επιδότησης</div class="facet-title">'
//         }
//       })
//     );

    // search.addWidget(
    //   instantsearch.widgets.sortBySelector({
    //     container: '#sort-by-selector',
    //     indices: [
    //       {name: 'ikea', label: 'Featured'},
    //       {name: 'ikea_price_asc', label: 'Price asc.'},
    //       {name: 'ikea_price_desc', label: 'Price desc.'}
    //     ],
    //     label:'sort by'
    //   })
    // );

    search.addWidget(
            instantsearch.widgets.clearAll({
                container: '#clear-all',
                templates: {
                    link: '<i class="fa fa-ban margin-right-5"></i>Διαγραφή Φίλτρων'
                },
                cssClasses: {
                    root: 'btn btn-block btn-default'
                },
                autoHideContainer: true
            })
    );

    search.addWidget(
            instantsearch.widgets.clearAll({
                container: '#clear-allMobile',
                templates: {
                    link: '<i class="fa fa-ban margin-right-5"></i>Διαγραφή Φίλτρων'
                },
                cssClasses: {
                    root: 'btn btn-block btn-default'
                },
                autoHideContainer: true
            })
    );

    search.addWidget(
            instantsearch.widgets.googleMaps({
                container: document.querySelector('#map'),
                scrollwheel: false
            })
    );



    search.start();
        var algolia = algoliasearch('FM3GHJGA1T', 'de6f693844a49775415380088208bc66');
        var algoliaHelper = algoliasearchHelper(search, 'dummySchools', { hitsPerPage: 60 });

        algoliaHelper.setQueryParameter('aroundLatLng', '40.80, 22.41').search()

    })

setTimeout(function() {
    for(var i=1; i<=11; i++){
        var data = $('#s-'+i).attr('data-length');
        if(data >=8){
        console.log('OK');
        $('#s-'+i).addClass('testRed');
    }
    }

}, 1500);


</script>

</html>
