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
    {{--@include('components.modals.styles')--}}

    <!-- Algolia CSS -->
    {{--<link rel="stylesheet" href="/new/css/algolia.css"></link>--}}
    <link rel="stylesheet" href="/new/css/algolia-search.css"></link>

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/instantsearch.js/1/instantsearch.min.css" />

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
    <link href="{{asset('new/css/scholarships.css')}}" rel="stylesheet">


    <!-- Algolia InstantSearch CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/instantsearch.js/1/instantsearch.min.css">






    <!-- Input Range CSS -->
{{--    <link href="{{asset('new/css/input-range.css')}}" rel="stylesheet">--}}

    <!-- Angular Material  CSS -->
    {{-- <link href="{{asset('new/css/angular-material.css')}}" rel="stylesheet">--}}

    <!-- jQuery js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <!-- Bootstrap js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Bootstrap Select js  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.4/js/bootstrap-select.min.js"></script>

    <!-- GoogleMap API -->
    {{--<script src="https://maps.googleapis.com/maps/api/js?libraries=geometry,places&language=el&region=GR&key=AIzaSyC18JCENxILnmXA1VGlsjJwBXQi3XZMWVA"></script>--}}
    {{--<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>--}}

    <!-- Angular js-->
    <!--  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular.min.js"></script>
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.20/angular.min.js"></script>-->
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.9/angular-animate.js"></script>--}}
    {{--<script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.angular.min.js"></script>--}}
    {{--<script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.angular.min.js"></script>--}}


    {{--Angular Library required By Angular Material UI--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.9/angular-aria.min.js"></script>--}}


    <!-- No error Filter:noArray angular 1.3.20 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/2.5.0/ui-bootstrap-tpls.min.js"></script>

    <!-- Angular Material UI-->
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/angular-material/1.1.3/angular-material.min.js"></script>--}}

    <!-- Rating js-->
    {{--<script src="{{asset('/new/js/jquery.raty-fa.js')}}"></script>--}}

    <!-- javascript Results -->
    {{--<script src="{{asset('/new/js/')}}"></script>--}}
    <!--  -->

    <!-- javascript Results -->
    <script src="{{asset('/new/js/results.js')}}"></script>


    <!--  Angular Results App -->
    {{--<script src="{{asset('/new/js/')}}"></script>--}}

    {{--<script src="{{asset('/new/js/ng-map.min.js')}}"></script>--}}

        <!--  Algolia & Algolia Autocomplete -->
    {{--<script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>--}}
    {{--<script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>--}}


    <!-- Algolia InstantSearch.JS -->
    <script src="https://cdn.jsdelivr.net/instantsearch.js/1/instantsearch.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?libraries=geometry,places&language=el&region=GR&key=AIzaSyC18JCENxILnmXA1VGlsjJwBXQi3XZMWVA"></script>
    <script src="https://cdn.jsdelivr.net/instantsearch-googlemaps/1/instantsearch-googlemaps.min.js"></script>


{{--    <script src="{{asset('/new/js/algolia-search.js')}}"></script>--}}

    <script>
    // window.SelectedLocation = "{{ session()->pull('location') }}"
    window.Search = "{{ session('search') }}"
    </script>

</head>



<body data-spy="scroll" data-target=".navbar" data-offset="50" id="home"  ng-app="scholarshipsResultsApp"  ng-controller="scholarshipsResultsCtrl" data-ng-init="init()"  ng-cloak>
    <!-- Scholio Header -->
    <header class="navbar navbar-fixed-top navbar-scroll sc-landing-header" id="header" >
        <div class="container">

            <div class="row">
                <div class="col-md-1 visible-lg visible-md nav-web">
                    <!-- Scholio Branding -->
                    <a class="sc-landing-brand" href="{{ url('/') }}">
                        <div class="sc-landing-logo-sticky" style=" padding-top: 15px">
                            <img src="{{asset('new/img/logo.png')}}" alt="scholio logo">
                        </div>
                    </a>
                </div>

                <div class="col-xs-6  visible-sm visible-xs">
                    <div class="nav-mobile">
                        <a class="" href="{{ url('/') }}">
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
                            {{--<li class="sc-landing-menu-item"><a href="">ΥΠΟΤΡΟΦΙΕΣ</a></li>--}}
                            @if(auth()->check())
                                <li><a href="{{ url('/dashboard') }}"><button type="button" class="sc-button-landing sc-button sc-green sc-t-white">Διαχείριση</button></a></li>
                                <li><a href="{{ url('/out') }}"><button type="button" class="sc-button-landing sc-button sc-dark-blue sc-t-white ">Αποσύνδεση</button></a></li>
                            @else
                                <li>
                                    <a href="">
                                        <button type="button" class="sc-button-landing sc-button sc-green sc-t-white" data-toggle="modal" data-target="#select-modal">Εγγραφή</button>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <button type="button" class="sc-button-landing sc-button sc-dark-blue sc-t-white" data-toggle="modal" data-target="#signIn-modal">Σύνδεση</button>
                                    </a>
                                </li>
                            @endif
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

                    {{--data-toggle="collapse" aria-controls="collapseMenu" --}}
                    <div class="">
                        <div class="navbar-right pull-right margin-right-30 filter-icon"  id="filter-btn">
                            <a class="" role="button"
                               href="" aria-expanded="false">
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

                                <div id="statsMobile" class=""></div>
                                <div class="facet-category-title">Φίλτρα Υποτροφιών:

                                    <a class="" role="button" id="close-btn"
                                       aria-expanded="false" aria-controls="">
                                        <i class="fa fa-times text-incr-115 sc-t-grey pad-left-35" aria-hidden="true"></i>
                                    </a>
                                </div>

                                <div class="filter-container">
                                    <div class="filter-title" >Εκπαιδευτικά Ιδρύματα</div>
                                    <div id="categoriesTypeMobile" ></div>
                                </div>

                                <div class="filter-container">
                                    <div class="filter-title">Πόλεις</div>
                                    <div id="categoriesCityMobile"></div>
                                </div>
                                {{--<div class="filter-container">--}}
                                    {{--<div class="filter-title">Επίπεδο Σπουδών</div>--}}
                                    {{--<div id="categoriesLevel"></div>--}}
                                {{--</div>--}}

                            </aside>

                        </div>

                        <div id="clear-allMobile" style="width: 180px; margin-left: auto; margin-right: auto;"></div>

                    </div>


                </div><!-- collapseMenu -->

                <div class="col-lg-3 col-md-3 hidden-sm hidden-xs hidden-xxs" >

                    <div class="col-sm-12">
                        <div class="input-group margin-bot-15 algolia-search-container">
                            <input type="text" class="form-control algolia-search-input" id="query"/>
                        </div>
                    </div>

                    <div id="sort-by-container"></div>

                    <div class="content-wrapper col-sm-12">
                        <aside>

                            <div id="stats" class=""></div>
                            <div class="facet-category-title">Φίλτρα Υποτροφιών:</div>

                            <div class="filter-container">
                                <div class="filter-title" >Εκπαιδευτικά Ιδρύματα</div>
                                <div id="categoriesType" ></div>
                            </div>

                            <div class="filter-container">
                                <div class="filter-title">Πόλεις</div>
                                <div id="categoriesCity"></div>
                            </div>
                            <div class="filter-container">
                                <div class="filter-title">Αντικείμενο Σπουδών</div>
                                <div id="categoriesSection"></div>
                            </div>
                            <div class="filter-container">
                                <div class="filter-title">Επίπεδο Σπουδών</div>
                                <div id="categoriesLevel"></div>
                            </div>
                            {{--<div id="financial" class="facet"></div>--}}


                        </aside>
                        <div id="clear-all" style="width: 190px; margin-left: auto; margin-right: auto"></div>
                    </div>


                </div>  <!-- //col-lg-3-->



                <!-- ========== SCHOLARSHIPS  CONTAINER ============= -->
                <div class="col-lg-9 col-md-9 col-sm-12 scholarship-container " id="">

                    {{--<div id="map" style="height: 300px; width: 100%; margin-bottom: 20px;"></div>--}}

                    <main id="scholarships">
                    </main>
                    <section id="pagination"></section>




                </div><!-- //col-lg-9-->






            </div> <!-- //row-->
        </div> <!-- //container-->
    </main>

    <!-- Footer -->
    @include('public.footer')

</body>



<script>




angular.module("scholarshipsResultsApp",[])
        .controller("scholarshipsResultsCtrl",function ($scope,$http) {

            console.log('start');

            $scope.over=false;
            $scope.over2=false;
            $scope.over3=false;
            $scope.role=null;
            $scope.active=function(role){
                $scope.role=role;
            }



        })



</script>


<script>
    'use strict';
    /* global instantsearch */

    var search = instantsearch({
        appId: 'FM3GHJGA1T',
        apiKey: 'de6f693844a49775415380088208bc66',
        indexName: 'dummyScholarships',
        urlSync: true
    });

    search.addWidget(
            instantsearch.widgets.searchBox({
                container: '#query',
                 poweredBy: true,
                 placeholder: "Αναζήτηση υποτροφίας"
            })
    );

    search.addWidget(
            instantsearch.widgets.searchBox({
                container: '#queryMobile',
                 poweredBy: true,
                 placeholder: "Αναζήτηση υποτροφίας"
            })
    );

    search.addWidget(
            instantsearch.widgets.stats({
                container: '#statsMobile'
            })
    );

    search.addWidget(
            instantsearch.widgets.stats({
                container: '#stats'
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
    <div class=" col-xs-12 pad-0-mar-0 inner-container">
        <div  class="ribbon top5"><span style="font-size: 95%">top 10</span></div>

    <div class="col-xs-12 scholar-header">
        <div class="circle margin-top-8 pull-left">
            <div class=" trophy-container centered-abs">
                <img class="trophy-img centered" src="/new/img/trophy4.png" alt="">
            </div>
        </div>
        <div class="header-text margin-top-20 pull-left margin-left-10"> <span class="title-from">Υποτροφία από:</span>
            <br class="break"> <span class="title-name"> @{{{_highlightResult.school.value}}}</span></div>
        <div class="xxs-title-name"> @{{{_highlightResult.school.value}}} </div>
        <div class="header-line"></div>
    </div>

    <div class="col-xs-12 pad-0-mar-0 section-container">
        <div class="col-lg-4 col-md-6 col-sm-4 section1 ">
            <div class="hex-container centered">
                <div class="hexagon3 hex">
                    <span></span>
                    <img class="centered-abs hex-img" src="/panel/assets/images/steps/@{{section}}.png" alt="">
                </div>
            </div>
            <div class="centered-text">
                <div class="text-title">Αντικείμενο Σπουδών</div>
                <div class="text-content">@{{{_highlightResult.study.value}}}</div>
                <div class="text-title">Επίπεδο Σπουδών</div>
                <div class="text-content">@{{{_highlightResult.level.value}}}</div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-4 section2 hidden-xxxs ">
            <div class="hex-container centered">
                <div class="hexagon3 hex">
                    <span></span>
                    <img class="centered-abs hex-img" src="/panel/assets/images/steps/@{{criteria}}.png" alt="">
                </div>
            </div>
            <div class="centered-text">
                <div class="text-title">@{{{_highlightResult.criteria.value}}}</div>
                <div class="text-content">Interdum et malesuada fames ac ante ipsum primis in faucibus.
                    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.

                </div>
            </div>
        </div>

        <div class="col-lg-4 col-sm-4 col-md-12 section3 hidden-xxxs hidden-xxs">
            <div class="hex-container centered">
                <div class="hexagon3 hex" style="">
                    <span></span>
                    <img class="centered-abs hex-img" src="/panel/assets/images/steps/@{{financial_icon}}" alt="">
                </div>
            </div>
            <div class="centered-text">
                <div class="text-title">@{{financial_plan}} @{{financial_amount}} @{{financial_metric}}</div>
                <div class="text-content">Ιn faucibus interdum et malesuada fames ac ante ipsum primis.
                    Torquent per conubia nostra.

                </div>
            </div>
        </div>
    </div>

    <div class="col-xs-12 scholar-footer ">
        <div class="col-xs-9 col-sm-10  sc-t-grey font-weight-300 pad-0-mar-0">
            <div class=" xxs-9 col-xs-6 col-sm-5 col-md-6 pad-0-mar-0 xxs-footer" >
                <span class=" xxs-8 col-xs-8 col-sm-7 pad-0-mar-0">
                    <div class="">  <i class="fa fa-pencil margin-right-10"></i>Αιτήθηκαν:</div>
                    <div class="margin-top-5">  <i class="fa fa-thumbs-o-up margin-right-10"></i>Ενδιαφέρθηκαν:</div>
                </span>
                <span class="xxs-2 col-xs-2 col-sm-3 text-right">
                    <div class="">@{{ requested }}</div>
                    <div class="margin-top-5">@{{ interested }}</div>
                </span>
            </div>
            <div class="col-xs-6 col-sm-5 pad-0-mar-0 xs-hidden">
                <span class="col-xs-7 col-sm-7 pad-0-mar-0">
                    <div class="margin-top-5">  <i class="fa fa-pencil-square-o margin-right-10"></i>Με εξετάσεις:</div>
                    <div class="">  <i class="fa fa-flag-o margin-right-10"></i>Λήγει:</div>
                </span>
                <span class="col-xs-5 col-sm-5 pad-0-mar-0 text-right">
                    <div class="margin-top-5" > @{{exams}}</div>
                    <div class="">@{{end_at}}</div>
                </span>
            </div>
        </div>


        <div class=" xxs-3 col-xs-3  col-sm-2 pad-0-mar-0">


            <a href="/scholarship/@{{scholarship_id}}" >
                <button type="button" class="sc-button-landing sc-button sc-green sc-t-white pull-right btn-provoli">
                    <i class="fa fa-file-text-o margin-right-10" aria-hidden="true"></i> Προβολή
                </button>
            </a>
        </div>
    </div>
    `;



    var noResultsTemplate =
            '<div class="text-center">Δεν βρέθηκαν αποτελέσματα για <strong>@{{query}}</strong>.</div>';

    var menuTemplate =
            '<a href="javascript:void(0);" class="facet-item @{{#isRefined}}active@{{/isRefined}}"><span class="facet-name"><i class="fa fa-angle-right"></i> @{{name}}</span class="facet-name"></a>';

    {{--var facetTemplateCheckbox =--}}
            {{--'<a href="javascript:void(0);" class="facet-item">' +--}}
            {{--'<input type="checkbox" class="@{{cssClasses.checkbox}}" value="@{{name}}" @{{#isRefined}}checked@{{/isRefined}} />@{{name}}' +--}}
            {{--'<span class="facet-count">(@{{count}})</span>' +--}}
            {{--'</a>';--}}

    {{--var facetTemplateColors =--}}
            {{--'<a href="javascript:void(0);" data-facet-value="@{{name}}" class="facet-color @{{#isRefined}}checked@{{/isRefined}}"></a>';--}}




    search.addWidget(
            instantsearch.widgets.hits({
                container: '#scholarships',
                hitsPerPage: 5,
                templates: {
                    empty: noResultsTemplate,
                    item: hitTemplate
                },
                transformData: function(hit) {
                    hit.stars = [];
                    for (var i = 1; i <= 5; ++i) {
                        hit.stars.push(i <= hit.rating);
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

    search.addWidget(
            instantsearch.widgets.hierarchicalMenu({
                container: '#categoriesSection',
                attributes: ['section'],
                sortBy: ['name:asc'],
                templates: {
                    item: menuTemplate
                }
            })
    );

    search.addWidget(
            instantsearch.widgets.hierarchicalMenu({
                container: '#categoriesLevel',
                attributes: ['level'],
                sortBy: ['name:asc'],
                templates: {
                    item: menuTemplate
                }
            })
    );

    search.addWidget(
      instantsearch.widgets.sortBySelector({
        container: '#sort-by-container',
        indices: [
          {name: 'dummyScholarships', label: 'Σχετικές'},
          {name: 'dummyScholarships_school_asc', label: 'Δημοφιλείς'},
          {name: 'dummyScholarships_created_asc', label: 'Νέες'}
        ]
      })
    );

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
                    link: '<i class="fa fa-eraser"></i>Καθαρισμός Φίλτρων'
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
                    link: '<i class="fa fa-eraser"></i>Καθαρισμός Φίλτρων'
                },
                cssClasses: {
                    root: 'btn btn-block btn-default'
                },
                autoHideContainer: true
            })
    );

//    search.addWidget(
//            instantsearch.widgets.googleMaps({
//                container: document.querySelector('#map'),
//                scrollwheel: false
//            })
//    );

    search.start();


//    var myOptions = {
//        scrollwheel: false,
//        scaleControl:true,
//        mapTypeId: google.maps.MapTypeId.ROADMAP
//    };
//    var map = new google.maps.Map(document.getElementById("map"), myOptions);
//
//
//    var styledMapType = new google.maps.StyledMapType(
//            [
//                {
//                    "featureType": "poi.park",
//                    "elementType": "geometry.fill",
//                    "stylers": [
//                        {
//                            //"color": "#9ec4ae"
//                            //"color": "#A3BFA8"
//                            //"color": "#B5C5B8"
//                            //"color": "#D9F0D1"
//                            "color": "#E2F0DA"
//
//                            //"color": "#CBE6A3"
//                        }
//                    ]
//                },
//                {
//                    "featureType": "water",
//                    "elementType": "geometry.fill",
//                    "stylers": [
//                        {
//                            //"color": "#00bcd4"
//                            //"color": "#53D0D9"
//                            //"color": "#00C9E1"
//                            //"color": "#00D1E9"
//                            //"color": "#00E2FF"
//
//                            //"color": "#A4E2E7"
//                            "color": "#A4DBE7"
//
//                            //"color": "#A3CCFF"
//                        }
//                    ]
//                }
//            ]
//    )
//
//    map.mapTypes.set('styled_map', styledMapType);
//    map.setMapTypeId('styled_map');

</script>

</html>
