<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0">    <meta property="fb:pages" content="934370089973049" />
    <meta name="description" content="{{ $title }}">
    <meta name="keywords" content="Φροντιστήριο, Ξένες Γλώσσες, Κολλέγιο, ΙΕΚ, Σχολείο, Δημοτικό, Γυμνάσιο, Λύκειο, Πανεπιστήμιο, ΚΕΚ, Σχολές, Σπουδές">
    


    <!-- Favicon -->
    <link rel="shortcut icon" href="/new/img/favicon.ico" type="image/x-icon" />

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/new/img/favicon-144.ico">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/new/img/favicon-72.ico">
    <link rel="apple-touch-icon-precomposed" href="/new/img/favicon-57.ico">


    <link rel="shortcut icon" href="{{asset('new/img/test-black.png')}}" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
    <link href="{{asset('new/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('new/css/results.css')}}" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

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
    .displayFilterOff{
        display: none;
    }

    .displayFilterOn{
        display: block;
    }



    .sc-button3{display: none;}

    .backImageSm, .backImageLg{position: absolute; z-index: 2; filter: grayscale(10%);opacity: 0.02; overflow: hidden!important;}

    .backImageSm{ height: 170px; width: 80%; left: 40px; bottom: -36px; }
    .backImageLg{ height: 260px; width: 101%; left: 10px; bottom: -30px;}

    .ais-search-box--powered-by-link{display: inline; background-image: none;}

    .filtersMobile{display: none;}
    .filtersButton{width: 100%;}
    .faUp{display: none;}

    .leftCol{margin-right: 1%;}
    .rightCol{margin-left: 1%;}
    .leftCol, .rightCol{width: 49%; z-index: 999;}

    @media(max-width: 410px){
        .leftCol{margin-right: 0;}
        .rightCol{margin-left: 0;}
        .leftCol, .rightCol{width:100%}
        .clear-filter-mobile{ margin-top: 10px;}
    }



    @media(max-width: 1199px){
        .card-portal{ border: 1px #ddd solid; border-radius: 6px;}
        .card-photo{border-top-left-radius: 6px; }
    }

    @media(max-width: 767px){
        .card-photo{  border-top-right-radius: 6px;}
    }


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
        .margin-portal {  margin-top: -115px;  }
        .card-portal {  height: 430px;  }

    }





</style>

<body data-spy="scroll" data-target=".navbar" id="home">

    <!-- Scholio Header -->
    <header class="navbar navbar-fixed-top navbar-scroll sc-landing-header" id="header" >
        <div class="container">

            <div class="pull-left visible-lg visible-md nav-web ">
                <!-- Scholio Branding -->
                <a class="sc-landing-brand" href="{{ url('/') }}">
                    <div class="sc-landing-logo-sticky" style=" padding-top: 15px">
                        <picture>
                            <source srcset="/new/img/logoNX-m.webp" type="image/webp">
                            <source srcset="/new/img/logoNX-m.png" type="image/png">
                            <img src="/new/img/logoNX-m.png" class="sc-logo" alt="scholio logo" style="height: 63px; padding-top: 2px;">
                        </picture>
                    </div>
                </a>
            </div>

            <div class="col-xs-6  visible-sm visible-xs">
                <div class="nav-mobile">
                    <a class="" href="{{ url('/') }}">
                        <div class="navbar-brand  sc-landing-logo-sticky">
                            <picture>
                                <source srcset="/new/img/logoNX-m.webp" type="image/webp">
                                <source srcset="/new/img/logoNX-m.png" type="image/png">
                                <img src="/new/img/logoNX-m.png" class="sc-logo" alt="scholio logo" style="height: 60px; padding-top: 2px;">
                            </picture>
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

                        <li class="langDropWhite" style="margin-top: -1px">
                        <form method="GET" id="langForm">
                            <select onchange="changeLang(this)" class="" style="border: none; background-color: transparent; width: 80%; margin-top: 14px!important;">
                                <option style="color: black" data-icon="fa" value="en" {{ request()->cookie('lang')=='en' ? 'selected':'' }}>&nbsp; ENG</option>
                                <option style="color: black" data-icon="fa" value="el" {{ request()->cookie('lang')=='el' ? 'selected':'' }}>&nbsp; GR</option>
                            </select>
                            </form>
                        </li>


                            <li class="sc-landing-menu-item">
                            <a href="{{url('public/scholarships')}}" class="btn-change-search">
                                <i class="fa fa-trophy margin-right-5"></i>
                                @lang('schools.navigation.search_scholarship')
                            </a>
                            </li>

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

                <div class="col-xs-6 visible-sm visible-xs " style="z-index: 6000; height: 20px;">
                    <div class="">
                        <div class="sc-landing-menu-mobile-sandwitch nav navbar-nav navbar-right pull-right">
                            <div class="sc-landing-menu-sandwitch-button-sticky sc-landing-menu-sandwitch">

                                <picture>
                                    <source srcset="{{asset('new/img/collapse-dark2.webp')}}" type="image/webp">
                                    <source srcset="{{asset('new/img/collapse-dark2.png')}}" type="image/png">
                                    <img src="{{asset('new/img/collapse-dark2.png')}}" alt="scholio logo"  style="height:22px; margin-top: 7px;">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ======= Sandwich Menu =======-->
                @include('public.sandwich-menu-resultsSchools')

            </div> 
        </div>
    </header>

    <main id="main"  class="main">
        <div class="container">

            
            <div class="row" style="padding-top: 150px;">
                    <h1>{{ $title }}</h1>

                    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs hidden-xxs left-side-container" >

    
                        <a href="/public/schools"> 
                            <div class="btn btn-info" style="width: 100%;"> 
                            Νέα Αναζήτηση
                            </div>
                        </a>

                        @foreach($regions as $region)
                                <a href="/catalog{{$region['url']}}">
                                    <div>{{ $region['name'] }}</div>
                                </a>
                        @endforeach
    
    
                    </div>  <!-- //col-lg-3-->
                <div class="col-lg-9 col-md-9 scholarship-container" id="">


                    <main id="schools">
                        @include('resultsPHP')
                    </main>

                    <section id="pagination"></section>
                </div>
            </div>
        </div> 
    </main>
    
    @include('public.footer')
    </body>

</html>
