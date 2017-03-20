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
{{--    <link href="{{asset('new/css/ribbon.css')}}" rel="stylesheet">--}}

    <!-- Results CSS -->
    <link href="{{asset('new/css/results.css')}}" rel="stylesheet">


    <!-- Algolia InstantSearch CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/instantsearch.js/1/instantsearch.min.css">


    <!-- Algolia CSS -->
    <link rel="stylesheet" href="/new/css/algolia.css"></link>


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

    <!--  Angular Results App -->
{{--    <script src="{{asset('/new/js/')}}"></script>--}}

    {{--<script src="{{asset('/new/js/ng-map.min.js')}}"></script>--}}

        <!--  Algolia & Algolia Autocomplete -->
    <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
    <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>


    <!-- Algolia InstantSearch.JS -->
    <script src="https://cdn.jsdelivr.net/instantsearch.js/1/instantsearch.min.js"></script>


    <script>
    window.SelectedLocation = "{{ session()->pull('location') }}"
    </script>

</head>
<style>

    .searchbox {
        display: inline-block;
        position: relative;
        width: 200px;
        height: 37px;
        white-space: nowrap;
        box-sizing: border-box;
        font-size: 13px;
        font-family: arial, sans-serif;
    .algolia-autocomplete {
        display: block;
        height: 100%;
    }
    }

    .searchbox__wrapper {
        width: 100%;
        height: 100%;
    }

    .searchbox__input {
        display: inline-block;
        -webkit-transition: box-shadow .4s ease, background .4s ease;
        transition: box-shadow .4s ease, background .4s ease;
        border: 0;
        border-radius: 19px;
        box-shadow: inset 0 0 0 1px #D9D9D9;
        background: #FFFFFF;
        padding: 0;
        padding-right: 30px;
        padding-left: 37px;
        width: 100%;
        height: 100%;
        vertical-align: middle;
        white-space: normal;
        font-size: inherit;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }

    .searchbox__input::-webkit-search-decoration, .searchbox__input::-webkit-search-cancel-button, .searchbox__input::-webkit-search-results-button, .searchbox__input::-webkit-search-results-decoration {
        display: none;
    }

    .searchbox__input:hover {
        box-shadow: inset 0 0 0 1px silver;
    }

    .searchbox__input:focus, .searchbox__input:active {
        outline: 0;
        box-shadow: inset 0 0 0 1px #4098CE;
        background: #FFFFFF;
    }

    .searchbox__input::-webkit-input-placeholder {
        color: #AAAAAA;
    }

    .searchbox__input::-moz-placeholder {
        color: #AAAAAA;
    }

    .searchbox__input:-ms-input-placeholder {
        color: #AAAAAA;
    }

    .searchbox__input::placeholder {
        color: #AAAAAA;
    }


    .searchbox__submit::before {
        display: inline-block;
        margin-right: -4px;
        height: 100%;
        vertical-align: middle;
        content: '';
    }

    .searchbox__submit:hover, .searchbox__submit:active {
        cursor: pointer;
    }

    .searchbox__submit:focus {
        outline: 0;
    }



    @-webkit-keyframes sbx-reset-in {
        0% {
            -webkit-transform: translate3d(-20%, 0, 0);
            transform: translate3d(-20%, 0, 0);
            opacity: 0;
        }
        100% {
            -webkit-transform: none;
            transform: none;
            opacity: 1;
        }
    }

    @keyframes sbx-reset-in {
        0% {
            -webkit-transform: translate3d(-20%, 0, 0);
            transform: translate3d(-20%, 0, 0);
            opacity: 0;
        }
        100% {
            -webkit-transform: none;
            transform: none;
            opacity: 1;
        }
    }

    .aa-dropdown-menu {
        position: relative;
        top: -6px;
        border-radius: 3px;
        margin: 1px 0 0 -40px;
        padding: 0 ;
        text-align: left;
        height: auto;
        position: relative;
        background: transparent;
        border: none;
        left: 0 !important;
        box-shadow: 0 1px 0 0 rgba(0,0,0,0.2),0 2px 3px 0 rgba(0,0,0,0.1);
        width: 265px!important;
    }
    .aa-dropdown-menu [class^="aa-dataset-"] {
        position: relative;
        border: solid 1px #D9D9D9;
        border-radius: 3px;
        overflow: auto;
        padding: 2px;
        width: 265px!important;
    }

    .aa-dropdown-menu .aa-suggestions {
        position: relative;
        z-index: 1000;
    }



    .aa-dropdown-menu * {
        box-sizing: border-box;

    }

    em {
        color: #4098CE;
    }




    #pagination-container a {
        background: #eee;
        padding: 3px 8px;
        color: #00bcd4;
        margin-right: 4px;}

    #pagination-container a.active, #pagination-container a:active {
         border-color: #888;
         color: #888;
         background: #ddd;
     }

</style>


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
                                <li><a href="{{ url('/register') }}"><button type="button" class="sc-button-landing sc-button sc-green sc-t-white">Εγγραφή</button></a></li>
                                <li><a href="{{ url('/login') }}"><button type="button" class="sc-button-landing sc-button sc-dark-blue sc-t-white ">Σύνδεση</button></a></li>
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
                <div id="mobFilt" class="  hidden-md hidden-lg col-xs-8 mob-filter left--300"
                     style="padding: 0 ; width: 254px; box-shadow: 2px 0px 40px 6px #4e4e4e;  margin-top: -79px;">

                    <div class="" style="">
                        <div class="box left-box1" style="z-index: 195;">
                            <p class="text-incr-115 centered-text box1-title"> Πεδία Αναζήτησης
                                <a class="" role="button" id="close-btn"
                                   aria-expanded="false" aria-controls="">
                                    <i class="fa fa-times text-incr-115 sc-t-grey pad-left-35" aria-hidden="true"></i>
                                </a>
                            </p>

                            <div class="centered-text" style="max-width: 338px;" ng-cloak>

                                <select title="Εκπαιδευτικός Φορέας" class="selectpicker" data-width="91%" ng-model="categoryFilter" ng-change="">
                                    <option id="drop1" data-icon="glyphicon glyphicon-education" data-subtext="" value="null"
                                            data-content=" <i class='glyphicon glyphicon-education margin-right-5 kf-gray'></i> <span class='kf-gray text-incr-85'> &nbsp;  Εκπαιδευτικός Φορέας</span>">....</option>

                                    <option data-icon="fa fa-university" data-subtext="" class="kf-option" value="1">&nbsp; Κολλέγια</option>
                                    <option data-icon="fa fa-cogs" data-subtext="" class="kf-option" value="2">&nbsp; IEK </option>
                                    <option data-icon="fa fa-pencil" data-subtext="" class="kf-option" value="3">&nbsp;  Φροντιστήρια </option>
                                    <option data-icon="fa fa-flag" data-subtext="" class="kf-option" value="4">&nbsp;  Ξένες Γλώσσες </option>
                                    <option data-icon="fa fa-book" data-subtext="" class="kf-option" value="6">&nbsp;  Ιδιωτικά Σχολεία</option>
                                </select>
                            </div>

                            <div class="input-group centered-text pad-top-20" ng-cloak>
                                <span class="input-group-addon text-incr-115 kf-gray" id="basic-addon1"><i class="fa fa-map-marker margin-right-5"></i></span>
                                <input type="text" ng-model="locationSelected" placeholder="Στην Περιοχή:" id="input1" class="kf-option"
                                        uib-typeahead="address for address in getLocation($viewValue)" typeahead-loading="loadingLocations"
                                        typeahead-no-results="noResults" autocomplete="off">
                            </div>

                            <div class="input-group centered-text pad-top-20 kf-gray" style="width: 89%; margin-top: 15px;" ng-if="!showAll">
                                <input type="range" ng-model="maxDistance" min=0 max=30 step=2 class="margin-bot-10" ng-change="">
                                <span>Απόσταση μέχρι: &nbsp;&nbs@{{ maxDistance }} km </span>
                            </div>




                        </div>



                    </div>

                </div><!-- collapseMenu -->

                <div class="col-lg-3 col-md-3 hidden-sm hidden-xs hidden-xxs " style="">
                    <div class=" box left-box1">

                        <div class="centered-text"  >
                            <p class="text-incr-115">Αναζήτηση</p>
                            <div class="aa-input-container" id="">
                                <input type="search" id="aa-search-input" class="aa-input-search form-control test" placeholder="Αναζήτηση..." name="search" autocomplete="on" />
                            </div>
                            <form novalidate="novalidate" onsubmit="return false;" class="searchbox">
                                <div role="search" class="searchbox__wrapper">
                                    <input id="search-input" type="search" name="search" placeholder="Search for studies" autocomplete="off" required="required" class="searchbox__input"
                                           style="height: 40px; width: 270px; margin-left: -40px; border-radius: 5px;">
                                </div>
                            </form>
                            <div class="aa-input-container margin-top-20" id="search-box">
                            </div>
                        </div>


                        <div id="cat-school" class="margin-top-50"></div>
                        <div id="cat-city" class="margin-top-20"></div>
                        <div id="criteria" class="margin-top-20"></div>
                        <div id="hierarchical-categories" class="margin-top-20"></div>

                    </div>


                </div>  <!-- //col-lg-3-->
                <div class="col-lg-9 col-md-9 col-sm-12 kf-col-xs-10 kf-col-xs-offset-1" id="main">

                    <div id="hits-per-page-selector" class="col-sm-3"></div>
                    <div id="pagination-container" style="margin-top: 10px"></div>
                    <div class="clear-fix"></div>

                    <div class=" margin-top-10 margin-bot-15 margin-left-20" >
                        <div id="hits-container"></div>
                    </div>





                </div> <!-- //col-lg-9-->
            </div> <!-- //row-->
        </div> <!-- //container-->
    </main>

    <!-- Footer -->
    @include('public.footer')

</body>



<!-- Algolia autocomplete menu -->
<script>
    var client = algoliasearch("FM3GHJGA1T", "de6f693844a49775415380088208bc66");
    var index = client.initIndex('schools');
    //initialize autocomplete on search input (ID selector must match)
    autocomplete('#aa-search-input',
            { hint: false }, {
                source: autocomplete.sources.hits(index, {hitsPerPage: 5}),
                //value to be displayed in input control after user's suggestion selection
                displayKey: '',
                //hash of templates used when rendering dataset
                templates: {
                    //'suggestion' templating function used to render a single suggestion
                    suggestion: function(suggestion) {
                        return '<a style="color: #888;" href="/public/profile/' + suggestion.id +'"><span><img src="/images/schools/'+ suggestion.logo +'" height="25px" style="margin-right: 10px;">' +
                                suggestion.admin.name + '</span></a>';
                    }
                }
            });
</script>

<!-- Algolia instantSearch -->
<script>

//    $(function(){
//
//        $('#pagination-container a').click(function(){
//            console.log('a click');
//            $('#pagination-container a.active').removeClass('active'); // remove the class from the currently selected
//            $(this).addClass('active'); // add the class to the newly clicked link
//
//        });
//
//    });

    var search = instantsearch({
        appId: 'FM3GHJGA1T',
        apiKey: 'de6f693844a49775415380088208bc66',
        indexName: 'schools',
        urlSync: true
    });


    search.addWidget(
            instantsearch.widgets.hitsPerPageSelector({
                container: '#hits-per-page-selector',
                options: [
                    {value: 5, label: '5 σε κάθε σελίδα'},
                    {value: 10, label: '10 σε κάθε σελίδα'},
                    {value: 20, label: '20 σε κάθε σελίδα'}
                ]
            })
    );

    search.addWidget(
            instantsearch.widgets.searchBox({
                container: '#search-box',
                placeholder: 'Search for schools...'
            })
    );

    search.addWidget(
            instantsearch.widgets.hits({
                container: '#hits-container',
                templates: {
                    empty: 'Δεν βρέθηκαν αποτελέσματα',
                    item: '<a style="color: #888;" href="/public/profile/@{{id}}}"><span><img src="/images/schools/@{{logo}}" height="25px" style=" margin-top:10px; margin-right: 10px;">@{{{ _highlightResult.admin.name.value}}}</span></a>'
                },
                hitsPerPage: 5
            })
    );

    search.addWidget(
            instantsearch.widgets.pagination({
                container: '#pagination-container'
            })
    );


    search.addWidget(
            instantsearch.widgets.menu({
                container: '#cat-school',
                attributeName: 'type.name',
                limit: 10,
                sortBy:['name:asc','count:desc:'],
                templates: {
                    header: 'Εκπαιδευτικά Ιδρύματα'
                }
            })
    );


    search.addWidget(
            instantsearch.widgets.menu({
                container: '#cat-city',
                attributeName: 'city',
                limit: 10,
                sortBy:['name:asc','count:desc:'],
                templates: {
                    header: 'Πόλη'
                }
            })
    );

    search.addWidget(
            instantsearch.widgets.hierarchicalMenu({
                container: '#hierarchical-categories',
                attributes: ['hierarchicalCategories.lvl0', 'hierarchicalCategories.lvl1'],
                templates: {
                    header: 'Hierarchical categories'
                }
            })
    );

    search.addWidget(
        instantsearch.widgets.refinementList({
            container: '#criteria',
            attributeName: 'website',
            operator: 'or',
            limit: 10,
            templates: {
                header: 'Υποτροφίες'
            }
        })
);

    search.start();
</script>

<script>
    var client = algoliasearch("FM3GHJGA1T", "de6f693844a49775415380088208bc66")
//    var client = algoliasearch("latency", "6be0576ff61c053d5f9a3225e2a90f76")
//    var index = client.initIndex('movies');
    var index = client.initIndex('studies');
    var myAutocomplete = autocomplete('#search-input', {hint: false}, [
        {
            source: autocomplete.sources.hits(index, {hitsPerPage: 5}),
//            displayKey: 'title',
            displayKey: 'name',
            templates: {
                suggestion: function(suggestion) {
//                    var sugTemplate = "<span>"+ suggestion._highlightResult.title.value +"</span>"
                    var sugTemplate = "<span>"+ suggestion._highlightResult.name.value +"</span>"
                    return sugTemplate;
                }
            }
        }
    ]).on('autocomplete:selected', function(event, suggestion, dataset) {
        console.log(suggestion, dataset);
    });


</script>

<script>


angular.module("scholarshipsResultsApp",[])
        .controller("scholarshipsResultsCtrl",function ($scope,$http) {

//            $scope.results = $http.get("api/...." + id)
//                    .success(function (data) {
//                        $scope.results = data
//                    })

//            console.log('start');

            //========Algolia Angular Autocomplete=================

//            var client = algolia.Client('FM3GHJGA1T', 'de6f693844a49775415380088208bc66');
//            var index = client.initIndex('schools');
//            $scope.getDatasets = function() {
//                return {
//                    source: algolia.sources.hits(index, { hitsPerPage: 5 }),
//                    displayKey: '',
//                    templates: {
//                        suggestion: function(suggestion) {
//                            return '<a style="color: #888;" href="/public/profile/' + suggestion.id +'"><span><img src="/images/schools/'+ suggestion.logo +'" height="30px" style="margin-right: 10px;">' +
//                                    suggestion.admin.name + '</span></a>';
//                        }
//                    }
//                };
////                console.log(suggestion._highlightResult)
//            };
//
//            $scope.$on('autocomplete:selected', function(event, suggestion, dataset) {
//                console.log(suggestion, dataset);
//            });


        })



</script>

</html>
