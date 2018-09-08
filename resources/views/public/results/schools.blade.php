<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"> <!-- prevent zoomIn in mobile inputs,selects,etc -->
    <meta property="fb:pages" content="934370089973049" />
    <meta name="description" content="Αναζήτηση εκπαιδευτικών ιρδυμάτων και των υπηρεσιών τους.">
    <meta name="keywords" content="Κολλέγιο, ΙΕΚ, Σχολείο, Δημοτικό, Γυμνάσιο, Λύκειο, Πανεπιστήμιο, ΚΕΚ, ΙΙΕΚ, Σχολές, Σπουδές,">
    @include('google.main')

    <title>schol.io | Αναζήτηση εκπαιδευτικών ιρδυμάτων</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/new/img/favicon.ico" type="image/x-icon" />

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/new/img/favicon-144.ico">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/new/img/favicon-72.ico">
    <link rel="apple-touch-icon-precomposed" href="/new/img/favicon-57.ico">



    <!--====== CSS  Styles =======-->
    @include('public.styles')

    <!-- Algolia CSS -->
    {{--<link rel="stylesheet" href="/new/css/algolia.css"></link>--}}
    <link rel="stylesheet" href="/new/css/algolia-search.css"/>

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
    {{--<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/instantsearch.js/1/instantsearch.min.css">--}}

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

    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?libraries=geometry,places&language=el&region=GR&key=AIzaSyC18JCENxILnmXA1VGlsjJwBXQi3XZMWVA"></script>


    <!-- Algolia InstantSearch.JS -->
    <script src="https://cdn.jsdelivr.net/instantsearch.js/1/instantsearch.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/instantsearch.js@2.7.3"></script> -->
    <script src="https://cdn.jsdelivr.net/instantsearch-googlemaps/1/instantsearch-googlemaps.min.js"></script>

    <!-- Rating js-->
    <script src="{{asset('/new/js/jquery.raty-fa.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
    <script src="https://cdn.jsdelivr.net/algoliasearch.helper/2/algoliasearch.helper.min.js"></script>


<script>
    window.REVIEWS = {{ $reviews }};


</script>
</head>

<style>

    /*=============================================*/
    /*  /////////////////////////////////////////  */
    /* ------------- Ribbons ------------- */
    /*  /////////////////////////////////////////  */
    /*=============================================*/

    .ribbonSm{right: -11px; top: -3px;}
    .ribbonMed{ right: -11px; top: -4.5px;}
    .ribbonL{right: -11px; top: -5px;}
    .ribbonLarge{right: -11px; top: -5px;}

    .text-Sm{right: -2px; top: 13px;}
    .text-Med{right: 2px; top: 34px; }
    .text-L{right: 8px; top: 60px;}
    .text-Large{right: -23px; top: 60px;}

    /*  /////////////////////////////////////////  */
    /*=============================================*/


    .btn-white:hover{color: #00bcd4!important;}
    /*li{color: red}*/

    .pos-xs{right: 11px;}
    .pos-right{right: -6px}

    .pad-rl-2{padding-right: 2px!important; padding-left: 2px!important}



    .sc-button3{display: none;}

    .backImageSm, .backImageLg{position: absolute; z-index: 2; filter: grayscale(10%);opacity: 0.02; overflow: hidden!important;}

    .backImageSm{ height: 170px; width: 80%; left: 40px; bottom: -36px; }
    .backImageLg{ height: 260px; width: 101%; left: 10px; bottom: -30px;}



    @media(min-width: 768px){
        .pad-top{padding-top: 10px;}
    }


    @media(min-width: 1200px){
        .pad-top{padding-top: 10px;}
    }

    @media(min-width: 1338px){
        .pad-left{padding-left:40px}
    }
    @media(min-width: 1465px){
        .pad-left{padding-left:30px}
    }


    @media (max-width:1449px){
        .pos-right{right: -30px}
        .ribbonMed{ right: -11px}
        .text-Med{right: -1px}
    }

    @media (max-width:1349px){
        .ribbonMed,.ribbonLarge{ right: -8px}
        .text-Med{right: 3px}
        .text-Large{right: -20px;}
    }


    @media (max-width:1249px){
        .pos-right{right: -25px}
        .ribbonMed,.ribbonLarge{ right: -5px}
        .text-Med{right: 8px}
        .text-Large{right: -18px;}
    }


    @media (min-width:1200px) and (max-width:1250px){
            span h5{font-size: 14px;}
            #img1{margin-left: -30px;}
    }

    @media (min-width:1251px) and (max-width:1300px){
        span h5{font-size: 15px;}
        #img1{margin-left: -25px;}
    }

    @media (max-width:1199px){
        .pos-right{right: -30px}
        .ribbonMed,.ribbonLarge{ right: -54px}
        .text-Med{right: -42px}
        .text-Large{right: -66px;}
        .backImageSm, .backImageLg{display: none;}
    }

    @media (max-width:1149px){
        .ribbonMed{ right: -48px}
        .text-Med{right: -36px}
        .ribbonLarge{right: -47px}
        .text-Large{right: -61px;}
    }

    @media (max-width:1109px){
        .ribbonMed,.ribbonLarge{ right: -29px}
        .text-Med{right: -16px}
        .text-Large{right: -41px;}
    }

    @media (max-width:1049px){
        .ribbonMed,.ribbonLarge{ right: -10px}
        .text-Med{right: 1px}
        .text-Large{right: -21px;}
    }

    @media (max-width:991px){
        .pos-right{right: -32px}
        .ribbonMed,.ribbonLarge{ right: -102px}
        .text-Med{right: -90px}
        .text-Large{right: -115px;}
        /*.backImageSm, .backImageLg{display: block}*/
    }

    @media (max-width:929px){
        .ribbonMed,.ribbonLarge{ right: -73px}
        .text-Med{right: -61px}
        .text-Large{right: -85px;}
    }

    @media (max-width:859px){
        .ribbonMed,.ribbonLarge{ right: -31px}
        .text-Med{right: -19px}
        .text-Large{right: -44px;}
    }



    @media (max-width:767px){
        .pos-right{top: -349px; right: -2px!important;}
        .ribbonMed,.ribbonLarge{ right: -2.5px; top: -348px;}
        .text-Med{right: 8px ;top: -306px;}
        .text-Large{right: -16px; top: -285px;}

    }
    @media (max-width:600px){
        .pos-right{top: -329px;}
        .ribbonMed,.ribbonLarge{top: -327px;}
        .text-Med{top: -284px;}
        .text-Large{right: -14px; top: -265px;}
    }

    @media (max-width:540px){
        .pos-right{top: -304px;}
        .ribbonMed,.ribbonLarge{top: -303px;}
        .text-Med{top: -260px;}
        .text-Large{right: -15px; top: -240px;}

    }

    @media (max-width:480px){
        .pos-right{top: -274px;}
        .ribbonMed,.ribbonLarge{top: -273px;}
        .text-Med{top: -230px;}
        .text-Large{top: -210px;}
        .report{bottom: -100px;!important;}
    }

    @media (max-width:400px){
        .pos-right{top: -246px;}
        .ribbonMed,.ribbonLarge{top: -245px;}
        .text-Med{top: -204px;}
        .text-Large{top: -182px;}
        .report{bottom: -90px;!important;}
    }


    /* ====== Portal CSS Changes ========*/

    @media (min-width:1200px) and (max-width:1300px) {
        .margin-portal {  margin-top: -10px;  }
        .col-xl-custom{max-height: 240px;}


    }

    @media (max-width:766px) {
        .margin-portal {  margin-top: -100px;  }
        .card-portal {  height: 550px;  }
        .report-portal {  bottom: 30px;!important;  }

        .report-drop-portal {  bottom: 25px!important;  }
        .hr-portal{display: none }

    }

    @media (max-width:650px) {
        .margin-portal {  margin-top: -120px;  }
        .card-portal {  height: 500px;  }

    }

    @media (max-width:490px) {
        .margin-portal {  margin-top: -120px;  }
        .card-portal {  height: 440px;  }

    }

    @media (max-width:415px) {
        .margin-portal {  margin-top: -100px;  }
        .card-portal {  height: 430px;  }

    }





</style>

<body data-spy="scroll" data-target=".navbar" data-offset="50" id="home"  ng-app="schoolsResultsApp"  ng-controller="schoolsResultsCtrl" data-ng-init="init()"  ng-cloak>

  @include('components.preloader')

    <!-- Scholio Header -->
    <header class="navbar navbar-fixed-top navbar-scroll sc-landing-header" id="header" >
        <div class="container">

            <div class="pull-left visible-lg visible-md nav-web ">
                <!-- Scholio Branding -->
                <a class="sc-landing-brand" href="{{ url('/') }}">
                    <div class="sc-landing-logo-sticky" style=" padding-top: 15px">
                        {{--<img src="{{asset('new/img/logo.png')}}" class="sc-logo" alt="scholio logo">--}}
                        <img src="{{asset('new/img/logoNX.png')}}"  class="sc-logo" alt="scholio logo" style="height: 63px; padding-top: 2px;">
                    </div>
                </a>
            </div>

            <div class="col-xs-6  visible-sm visible-xs">
                <div class="nav-mobile">
                    <a class="" href="{{ url('/') }}">
                        <div class="navbar-brand  sc-landing-logo-sticky">
                            {{--<img src="{{asset('new/img/logo-m.png')}}" class="sc-logo" alt="scholio logo">--}}
                            <img src="{{asset('new/img/logoNX-m.png')}}" class="sc-logo" alt="scholio logo" style="height: 60px; padding-top: 2px;">
                        </div>
                    </a>
                </div>
            </div>


                <!-- Scholio Menu -->

                <div class="pull-left">
                @if(App\Key::find(1)->dropdownLogin)
                         <form method="GET" action="/fake/login" id="langForm" style="display: inline-block; position: absolute; top: 18px; margin-left: 110px; color: #555">
                    <select onchange="this.form.submit()" style="border: none; background-color: transparent; margin: -15px; width: 250px;" name="userID">
                            @foreach(App\User::all() as $key=>$user)
                                @if(auth()->check() && auth()->user()->id == $user->id)
                                    <option data-icon="fa" value="{{ $user->id }}" selected="selected">{{ $user->role }}-{{$user->name}} | {{ $user->id }} </option>
                                @else
                                @if($key == 0)
                                <option disabled selected value> -- user -- </option>
                                @endif
                                    <option data-icon="fa" value="{{ $user->id }}">{{ $user->role }}-{{$user->name}} | {{ $user->id }} </option>
                                @endif
                            @endforeach
                    </select>
                </form>
                @endif
                </div>

                <!-- Large Menu -->
                <div class="pull-right visible-md visible-lg">
                    <div class="">
                        <ul class="nav navbar-nav navbar-right sc-landing-menu">
                            {{--<li class="sc-landing-menu-item"><a href="">ΥΠΟΤΡΟΦΙΕΣ</a></li>--}}


                        <li class="langDropWhite" style="margin-top: -1px">
                        <form method="GET" id="langForm">
                            <select onchange="changeLang(this)" class="selectpicker" data-live-search="false" data-mobile="false" data-size='2' data-width="100%" data-style="btn-white">
                                <option style="color: black" data-icon="fa" value="en" {{ request()->cookie('lang')=='en' ? 'selected':'' }}>&nbsp; ENG</option>
                                <option style="color: black" data-icon="fa" value="el" {{ request()->cookie('lang')=='el' ? 'selected':'' }}>&nbsp; GR</option>
                            </select>
                            </form>
                        </li>


                            <!-- ================  For portal only ==================== -->
                            <li class="sc-landing-menu-item">
                            <a href="{{url('public/scholarships')}}" class="btn-change-search">
                                <i class="fa fa-trophy margin-right-5"></i>
                                @lang('schools.navigation.search_scholarship')
                            </a>
                            </li>
                            <!-- ======================================================= -->
                            @if(auth()->check())
                                <li><a href="{{ url('/dashboard') }}"><button type="button" class="sc-button-landing sc-button sc-orange sc-t-white">@lang('main.navigation.admin')</button></a></li>
                                <li><a href="{{ url('/out') }}"><button type="button" class="sc-button-landing sc-button sc-dark-green sc-t-white ">@lang('main.navigation.logout')</button></a></li>
                            @else
                                <li><a href="{{ url('/register/role') }}"><button type="button" class="sc-button-landing sc-button sc-green sc-t-white"
                                                {{--data-toggle="modal" data-target="#select-modal"--}}
                                        >@lang('main.navigation.register')</button></a></li>
                                <li>
                                    <a href="{{ url('/login') }}">
                                        <button type="button" class="sc-button-landing sc-button sc-dark-green sc-t-white"
                                                {{--data-toggle="modal" data-target="#signIn-modal"--}}
                                        >@lang('main.navigation.login')</button>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>

                <!-- Mobile Menu -->
                <div class="col-xs-6 visible-sm visible-xs " style="z-index: 6000; height: 20px;">
                    <div class="">
                        <div class="sc-landing-menu-mobile-sandwitch nav navbar-nav navbar-right pull-right">
                            <div class="sc-landing-menu-sandwitch-button-sticky sc-landing-menu-sandwitch">
                                <img src="{{asset('new/img/collapse-dark2.png')}}" alt="scholio logo"  style="height:22px; margin-top: 7px;">
                                {{--<img src="{{asset('new/img/collapse-dark.png')}}" alt="scholio logo">--}}
                            </div>
                        </div>
                    </div>

                    {{--data-toggle="collapse" aria-controls="collapseMenu" --}}

                        <div class="navbar-right pull-right margin-right-30 filter-icon"  id="filter-btn">
                            <a class="" role="button" href="#" aria-expanded="false">
                                <i class="fa fa-filter margin-right-10 margin-top-30 text-175 sc-t-dark-grey" style="font-size: 180%; z-index: 5!important;" aria-hidden="true" ></i>
                            </a>
                        </div>


                </div>

                <!-- ======= Sandwich Menu =======-->
                @include('public.sandwich-menu-resultsSchools')

            </div>  <!-- row -->
        </div> <!-- container-->
    </header>

    <!-- Scholio main Section. -->
    <main id="main"  class="main"  ng-cloak>
        <div class="container">
            <div class="row up">

            </div>

            <div class="row">
                <!--============ collapse  Menu Mobile Screen =============-->
                <div id="mobFilt" class="hidden-md hidden-lg col-xs-8 mob-filter left--300">


                            <div class="input-group margin-bot-15 mobile-input">

                                <input type="text" class="form-control algolia-search-input" id="queryMobile" style="border-radius: 5px;" />
                            </div>


                        <!-- <span class="sort-by-text">@lang('schools.sortby.title')</span> -->
                        <!-- <div id="sort-by-container-Mobile"></div> -->



                        <div class="content-wrapper">
                            <aside>

                                <div id="statsMobile" class="text-muted "></div>
                                {{--<div class="facet-category-title facet font-weight-300">Φίλτρα Αναζήτησης:</div>--}}
                                <div class="facet-category-title">@lang('schools.filters.title'):
                                    <a class="" role="button" id="close-btn"
                                       aria-expanded="false" aria-controls="">
                                        <i class="fa fa-times text-incr-115 sc-t-grey pad-left-35" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <div id="clear-allMobile" class="clear-filter-mobile"> </div>

                                <div class="filter-container">
                                    <div class="filter-title">
                                        <i class="fa fa-university fa-linear5 margin-right-5"></i>
                                        @lang('schools.filters.categories')</div>
                                    <div id="categoriesTypeMobile"></div>
                                </div>
                                <div class="filter-container">
                                    <div class="filter-title">
                                        <i class="fa fa-map-marker fa-linear5 margin-right-5"></i>
                                        @lang('schools.filters.cities')</div>
                                    <div id="categoriesCityMobile"></div>
                                </div>

                            </aside>

                        </div>

                    <div class="btn-group">
                        {{-- <a href="{{ url('/public/schools/map') }}"> --}}
                        <button class="btn btn-primary btn-map-mob" onClick="showMap()">
                            <i class="fa fa-map pad-right-15" aria-hidden="true"></i>
                            @lang('schools.show_map')
                        </button>
                        </a>
                    </div>



                </div><!-- collapseMenu -->



                <!--============ Left Side Menu large Screen =============-->
                <div class="col-lg-3 col-md-3 hidden-sm hidden-xs hidden-xxs  left-side-container" >


                        <div class="input-group margin-bot-15 algolia-search-container">
                            <input type="text" class="form-control algolia-search-input" id="query"/>
                        </div>


                    <!-- <span class="sort-by-text">@lang('schools.sortby.title')</span> -->
                    <!-- <div id="sort-by-container"></div> -->



                    <div class="btn-group">

                        {{-- <a href="{{ url('/public/schools/map') }}"> --}}
                        <button class="btn btn-primary btn-map" onClick="showMap()">
                            <i class="fa fa-map pad-right-15" aria-hidden="true"></i>
                            @lang('schools.show_map')

                            <!-- ΓΙΑ ΤΟ sitemap για google ΜΟΝΟ -->
                            <a href="/public/schools/map" style="position: relative; z-index: -5; opacity: 0.1">MAPS</a>
                            <!-- ΓΙΑ ΤΟ sitemap για google ΜΟΝΟ -->
                            
                        </button>
                        </a>
                    </div>




                    <!-- <div id="sort-by-container"></div> -->

                    <div class="content-wrapper">
                        <aside>

                            <div id="stats" class="text-muted "></div>
                            <div class="facet-category-title facet font-weight-300">
                                @lang('schools.filters.title'):</div>

                            <div id="clear-all"class="clear-filter"></div>

                            <div class="filter-container">
                                <div class="filter-title">
                                    <i class="fa fa-university fa-linear5 margin-right-5"></i>
                                    @lang('schools.filters.categories')</div>
                                <div id="categoriesType"></div>
                            </div>
                            <div class="filter-container">
                                <div class="filter-title">
                                    <i class="fa fa-map-marker fa-linear5 margin-right-5"></i>
                                    @lang('schools.filters.cities')</div>
                                <div id="categoriesCity"></div>
                            </div>
                            {{-- <div class="filter-title">Αντικείμενο Σπουδών</div>
                            <div id="categoriesSection"></div> --}}
                            {{-- <div class="filter-title">Επίπεδο Σπουδών</div>
                            <div id="categoriesLevel"></div> --}}
                             {{--
                                <div class="filter-container">
                                    <div id="rating" class="facet"></div> 
                                </div>
                            --}}
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
                window.location = '/public/schools/map/?search='+ s;
    }


    var open = false;
    function dropReport(school){
        if(open==false){
            $('#card1'+school).css('filter','blur(2px)');
            $('#card2'+school).css('filter','blur(2px)');
            $('#card3'+school).css('filter','blur(2px)');
            $('#card4'+school).css('filter','blur(2px)');
            $('#card5'+school).css('filter','blur(2px)');

//            $('#card1'+school).css('opacity','0.3');
//            $('#card2'+school).css('opacity','0.3');
//            $('#card3'+school).css('opacity','0.3');
//            $('#card4'+school).css('opacity','0.3');
//            $('#card5'+school).css('opacity','0.3');

            console.log('blur')
            $('#report-drop'+school).animate({opacity:1, width: 220, height: 260}, 190,"swing");

        }
        else{
            $('#report-drop'+school).animate({opacity:0, width: 0, height: 0}, 150,"swing");
            $('#card1'+school).css('filter','blur(0px)');
            $('#card2'+school).css('filter','blur(0px)');
            $('#card3'+school).css('filter','blur(0px)');
            $('#card4'+school).css('filter','blur(0px)');
            $('#card5'+school).css('filter','blur(0px)');

//            $('#card1'+school).css('opacity','1');
//            $('#card2'+school).css('opacity','1');
//            $('#card3'+school).css('opacity','1');
//            $('#card4'+school).css('opacity','1');
//            $('#card5'+school).css('opacity','1');
        }
        open=!open
    }


    $( document ).ready(function() {

    });

</script>



<script>



    window.STATS = {{$settings}}
angular.module("schoolsResultsApp",[])
        .controller("schoolsResultsCtrl",function ($scope,$http) {
            
            
            $scope.over=false;
            $scope.over2=false;
            $scope.over3=false;
            $scope.role=null;
            $scope.active=function(role){
                $scope.role=role;
            }

            $scope.open=false;


            $scope.rate = function(id, stars){
                
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
        appId: 'N08SZYEUO0',
        apiKey: 'e00bc4548ea05c691c81f7c30c100bd7',
        indexName: 'dummySchools',
        urlSync: true
    });

    search.addWidget(
            instantsearch.widgets.searchBox({
                container: '#query',
                 poweredBy: false,
                 placeholder: "@lang('schools.search_institution')"
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
                 placeholder: "@lang('schools.search_institution')"
            })
    );

    search.addWidget(
            instantsearch.widgets.stats({
                container: '#statsMobile'
            })
    );

            // search.addWidget(
            //         instantsearch.widgets.sortBySelector({
            //             container: '#sort-by-container',
            //             indices: [
            //                 {name: 'dummySchools', label: '@lang('schools.sortby.scholarships')'},
            //                 {name: 'dummySchools_students_asc', label: '@lang('schools.sortby.students')'},
            //                 // {name: 'dummySchools_students_asc', label: '@lang('schools.sortby.students')'}
            //             ]
            //         })
            // );

            // search.addWidget(
            //         instantsearch.widgets.sortBySelector({
            //             container: '#sort-by-container-Mobile',
            //             indices: [
            //                 {name: 'dummySchools', label: '@lang('schools.sortby.scholarships')'},
            //                 {name: 'dummySchools_students_asc', label: '@lang('schools.sortby.students')'},
            //                 // {name: 'dummySchools_students_asc', label: '@lang('schools.sortby.students')'}
            //             ]
            //         })
            // );

    search.on('render', function() {
        $('.product-picture img').addClass('transparent');
        $('.product-picture img').one('load', function() {
            $(this).removeClass('transparent');
        }).each(function() {
            if(this.complete) $(this).load();
        });
    });

    var hitTemplate = `



    <div class="card clear-fix margin-bot-25 card-portal" >

        <con>

            <photo class="">
                <a href="/public/profile/@{{school_id}}">
                    <img id="img0" class="card-photo pull-left" style="background-image:linear-gradient(rgba(206, 255, 255, 0.01), rgba(0, 0, 0, 0.40)), url(@{{image}})">
                </a>
            </photo>
            <div class="card-ribbon">
                <img id="img2" class=" sc-white img-med hidden-lg hidden-xs" src="@{{logo}}">
                <img id="img3" class=" sc-white img-thumb hidden-lg hidden-md hidden-sm " src="@{{logo}}">
            </div>
        </con>


        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 col-xl-custom" >


                <i id="report" class="fa fa-ellipsis-h report report-portal" onClick="dropReport(@{{school_id}})" ></i>
                <!-- =================== Report  Menu ====================-->
                <div class="report-drop report-drop-portal" id="report-drop@{{school_id}}" style="overflow:hidden!important">
                     <img class="report-logo"  src="/new/img/logoNX-m.png" alt="" style="overflow:hidden!important">
                     <span class="report-title"> Αναφορά </span>
                     <form method="POST" action="/report/add/@{{school_id}}/Profile" >
                     {{ csrf_field() }}
                        <div class="report-text" style="overflow:hidden!important">
                            <button type="submit" style=" width:185px; background: none; border: none; text-align: justify;">

                               Αναφορά του εκπαιδευτικού ιδρύματος στο διαχειριστή για προσβλητικό περιεχόμενο
                            </button>

                        </div>
                     </form>
                </div>

                <!-- =====================================================-->




           @{{#hot}}
            <!-- <div  class="ribbon top20 pos-right"><span style="font-size: 95%">Popular</span></div> -->
            <img class="ribbonMed" style="" src="/new/img/RibbonMed.png" alt="">
            <span class="text-corner text-Med"> <i class=" fa fa-fire" style="margin-right: 7px"></i>Popular</span>
            @{{/hot}}

            @{{#scholarshipLion}}
            <img class="ribbonLarge" style="" src="/new/img/RibbonL.png" alt="">
            <span class="text-corner text-Large"> <i class=" fa fa-trophy" style="margin-right: 7px"></i>Grand Scholarships</span>
           @{{/scholarshipLion}}


            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-bot-15 cardPad" id="card1@{{school_id}}">






                <a href="/public/profile/@{{school_id}}" target="_blank">
                <img id="img1"  class=" img-mini pull-left margin-right-10 margin-top-15 hidden-md hidden-sm hidden-xs" src="@{{logo}}">
                </a>
                <span class="pull-left">
                    <h5 class="pad-top-10 titleName"> <a href="/public/profile/@{{school_id}}"> @{{name}}</a></h5>
                    @{{#review}}
                    <span>
                    <span class="product-rating">@{{#rating}}<span class="ais-star-rating--star@{{^.}}__empty@{{/.}}"></span>@{{/rating}}</span>
                    </span>
                    <span class="sc-t-orange"> @{{stars}} </span> <span class="xs-text-incr-85">  &nbsp; ( @{{reviews}}  @lang('schools.cards.reviews'))</span>
                    @{{/review}}
                </span>
            </div>

            
            @{{#stats}}
            <div class=" col-md-9  col-lg-5 col-sm-9 col-xs-12 kf-margin-top" id="card2@{{school_id}}">
                <span><i class="fa fa-trophy pull-left pad-top-3 " aria-hidden="true"></i></span>
                <span class="pull-left pad-left-5">@lang('schools.cards.scholarships')</span>


                    @{{#scolarsLength}}
                        <span class="pull-right badge" style="background-color: #FD6A33">
                         <span style="color:#fff ;">@{{lengthScholarships}}</span>
                         </span>
                    @{{/scolarsLength}}


                    @{{^scolarsLength}}
                    <span class="pull-right badge" style="background-color: #aaa">
                     <span style="color: #fff;">@{{lengthScholarships}}</span>
                     </span>
                    @{{/scolarsLength}}


                <br>
                <div class="pad-top-5"></div>
                <span><i class="fa fa-user pull-left pad-top-2 " aria-hidden="true"></i></span>
                <span class="pull-left pad-left-10" ng-show="type_id!='1' && type_id!='2'">@lang('schools.cards.con_students')</span>
                <span id="s-@{{school_id}}" data-length="@{{lengthStudents}}" class="pull-right">@{{lengthStudents}}</span>
                <br>
            </div>

            <div class="col-lg-6 col-md-9 col-sm-9 col-xs-12 margin-bot-10 kf-margin-top margin-top-3 pad-left" id="card3@{{school_id}}">
                <div ng-show="type_id==1 || type_id==2 ">
                    <span><i class="fa fa-paint-brush pull-left pad-top-3 " aria-hidden="true"></i></span>
                    <span class="pull-left pad-left-5">@lang('schools.cards.studies')</span>
                    <span class="pull-right">@{{lengthStudies}}</span>
                    <br>
                    <div class="pad-top-5"></div>
                </div>

                <span><i class="fa fa-graduation-cap pull-left pad-top-3 " aria-hidden="true"></i></span>
                <span class="pull-left pad-left-2 pad-bot-10">@lang('schools.cards.con_teachers')</span>
                <span class="pull-right">@{{lengthTeachers}}</span>
            </div>
            @{{/stats}}



            @{{^stats}}

            <!-- <img src="/new/img/notepad.png"  style="opacity: 0.07; height: 100px; width: auto; position: absolute; z-index: 2; right: 10px; bottom: 30px;"></img> -->

            <span style="color: #eee; opacity: 0.001; filter: blur(0.6px);">
            <div class="col-md-9  col-lg-6 col-sm-9 col-xs-12 kf-margin-top">
                 <span><i class="fa fa-trophy pull-left pad-top-3 " aria-hidden="true"></i></span>
                 <span class="pull-left pad-left-5">@lang('schools.cards.scholarships')</span>
                <br>
                <div class="pad-top-5"></div>
                <span><i class="fa fa-user pull-left pad-top-2 " aria-hidden="true"></i></span>
                <span class="pull-left pad-left-10" ng-show="type_id!='1' && type_id!='2'">@lang('schools.cards.con_students')</span>
                 <br>
            </div>

            <div class=" col-lg-6 col-md-9 col-sm-9 col-xs-12 margin-bot-10 kf-margin-top margin-top-3">
                <div ng-show="type_id==1 || type_id==2 ">
                    <span><i class="fa fa-paint-brush pull-left pad-top-3 " aria-hidden="true"></i></span>
                    <span class="pull-left pad-left-5">@lang('schools.cards.studies')</span>
                    <br>
                    <div class="pad-top-5"></div>
                </div>

                <span><i class="fa fa-graduation-cap pull-left pad-top-3 " aria-hidden="true"></i></span>
                <span class="pull-left pad-left-2 pad-bot-10">@lang('schools.cards.con_teachers')</span>
            </div>
            </span>
            @{{/stats}}

            <div ng-show="type_id!=1 && type_id!=2">
                <div class="margin-pad" style=""></div>
            </div>
            <hr class="hr-portal" id="card5@{{school_id}}" >
        </div>



        <div class="col-lg-7 col-md-10 col-sm-12 col-xs-12 margin-portal" id="card4@{{school_id}}" >

            <div class="" >
                <div class="col-lg-7 col-sm-7 col-xs-12 sc-t-grey pad-rl-2"  style="z-index: 4; position relative; ">
                    <span><i class="fa fa-map-marker pull-left pad-top-3 xs-text-incr-85 " aria-hidden="true"></i></span>
                    <span class="pull-left pad-left-6 xs-text-incr-85 text-incr-95 ellipsis">@{{address}}</span>
                    <br>
                    <div class="hidden-xs pad-top">
                        <span><i class="fa fa-street-view pull-left pad-top-3 " aria-hidden="true"></i></span>
                        <span class="pull-left pad-left-3 ellipsis">@{{city}} </span>

                        <br>
                    </div>
                    <div class="pad-top-3 pad-top clearfix"></div>
                    <span><i class="fa fa-phone pull-left pad-top-2 xs-text-incr-85" aria-hidden="true"></i></span>
                    <span class="pull-left pad-left-5">@{{phone}}</span>
                    <br>

              </div>


            <div class="col-lg-5 col-sm-5 col-xs-12 sc-t-grey pad-rl-2" >
                   <div class="hidden-xs ">
                                <div class="pad-top-3"></div>
                                <span><i class="fa fa-envelope  pull-left pad-top-2 " aria-hidden="true"></i></span>
                                <span class="pull-left pad-left-3 "> <a class="ellipsis2" href="mailto:@{{email}}">@{{email}}</a></span>
                                <br>
                   </div>

                   <div class="pad-top-3 pad-top">
                            @{{^site}}
                            <span><i class="fa fa-globe pull-left pad-top-3 xs-text-incr-85" aria-hidden="true"></i></span>
                            <span class="pull-left pad-left-5"> <a class="ellipsis2"  href="http://@{{website}}/" target="_blank">@{{website}}</a></span>
                            @{{/site}}
                  </div>
           </div>



            @{{^stats}}
            <img src="/new/img/bars2.png" class="backImageLg" style=""></img>
            @{{/stats}}

            @{{#stats}}
            <img src="/new/img/bars2.png" class="backImageSm" style=""></img>
            @{{/stats}}
            <div class="hidden-xs" style=" height: 100px; width: 40%; position: absolute; z-index: 2; left: 20px; bottom: -26px;
            background-image: linear-gradient(to left, rgba(255, 255, 255, 0) 0, #fff 100%);
            "></div>



      <div class="col-lg-2  col-md-1 col-sm-5 col-xs-12 margin-top-15 card-buttons text-incr-85">
          <div class="hidden-xs but-pad">
              <a href="">
                  <button type="button" class="sc-button3 sc-dark-green sc-t-white pull-right margin-top-70">
                      <i class="fa fa-link pad-right-15" aria-hidden="true"></i>@lang('schools.cards.request')</button>
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
            '<div class="text-center">@lang('schools.error') <strong>@{{query}}</strong>.</div>';

    var menuTemplate =
            '<a href="javascript:void(0);" class="facet-item @{{#isRefined}}active@{{/isRefined}}"><span class="facet-name"><i class="fa fa-angle-right"></i> @{{name}}</span class="facet-name"><span class="counter">@{{count}}</span></a>';





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
                    hit.scolarsLength = [];
                    hit.stats = [];
                    hit.hot=[];
                    hit.scholarshipLion=[];
                    hit.review=[];
                    hit.site=[];

                    if(!(hit.website && hit.website != "")){
                        hit.site.push(true);
                    }

                    if(hit.lengthStudents > 8   && (window.STATS[hit.id-1] == 1) ){
                        hit.hot.push(true);
                    }
                    if(hit.lengthScholarships > 8 && (window.STATS[hit.id-1] == 1) ){
                        hit.scholarshipLion.push(true);
                    }

                    if(hit.lengthScholarships > 7){
                        hit.scolarsLength.push(true);
                    }

                    if(window.STATS[hit.id-1] == 1){
                        hit.stats.push(true);
                    }

                    if (window.REVIEWS[hit.id-1] == 1) {
                        hit.review.push(true);
                    }
                    
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
                    previous: '<i class="fa fa-angle-left fa-2x"></i> @lang('schools.prev_page')',
                    next: '@lang('schools.next_page') <i class="fa fa-angle-right fa-2x"></i>'
                },
                showFirstLast: false
            })
    );

    search.addWidget(
            instantsearch.widgets.hierarchicalMenu({
                container: '#categoriesType',
                attributes: ['type'],
                sortBy: ['count'],
                templates: {
                    item: menuTemplate
                }
            })
    );


    search.addWidget(
            instantsearch.widgets.hierarchicalMenu({
                container: '#categoriesCity',
                attributes: ['city'],
                sortBy: ['count'],
                limit: 5,
                templates: {
                    item: menuTemplate
                }
            })
    );

    search.addWidget(
            instantsearch.widgets.hierarchicalMenu({
                container: '#categoriesTypeMobile',
                attributes: ['type'],
                sortBy: ['count'],
                templates: {
                    item: menuTemplate
                }
            })
    );


    search.addWidget(
            instantsearch.widgets.hierarchicalMenu({
                container: '#categoriesCityMobile',
                attributes: ['city'],
                sortBy: ['count'],
                limit: 5,
                templates: {
                    item: menuTemplate
                }
            })
    );

    search.addWidget(
            instantsearch.widgets.clearAll({
                container: '#clear-all',
                templates: {
                    link: '<i class="fa fa-ban margin-right-5"></i>@lang('schools.filters.delete')'
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
                    link: '<i class="fa fa-ban margin-right-5"></i>@lang('schools.filters.delete')'
                },
                cssClasses: {
                    root: 'btn btn-block btn-default'
                },
                autoHideContainer: true
            })
    );

    // ΒΓΑΖΕΙ ΛΑΘΟΣ rectangle bounding error
    // search.addWidget(
    //         instantsearch.widgets.googleMaps({
    //             container: document.querySelector('#map'),
    //             scrollwheel: false
    //         })
    // );



    search.start();
        var algolia = algoliasearch('FM3GHJGA1T', 'de6f693844a49775415380088208bc66');
        // var algoliaHelper = algoliasearchHelper(search, 'dummySchools', { hitsPerPage: 60 });

        // algoliaHelper.setQueryParameter('aroundLatLng', '40.80, 22.41').search()

    })

</script>

</html>
