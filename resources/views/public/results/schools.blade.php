<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="fb:pages" content="934370089973049" />
    <meta name="description" content="{{ $title }}">
    <meta name="keywords" content="Φροντιστήριο, Ξένες Γλώσσες, Κολλέγιο, ΙΕΚ, Σχολείο, Δημοτικό, Γυμνάσιο, Λύκειο, Πανεπιστήμιο, ΚΕΚ, Σχολές, Σπουδές">

    <link rel="manifest" href="manifest.json">
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="92x92" href="/img/logo1.png">
    

    <!-- jQuery js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <!-- <script src="/js/loadCSS.js"></script> -->


    <title>{{ $title }} | Schol.io</title>

    <script>
        var x = window.location.href.indexOf('q=');
        var finaltext = 'Αναζήτησε δημοφιλή Εκπαιδευτικά Ιδρύματα';
        if(x > 0){
            var s =  window.location.href.substring(x+2);
            if(s != ''){
                var decodedText = unescape(decodeURIComponent(s));
                finaltext = decodedText;
                var ind = decodedText.indexOf('&')
                if(ind > 0){
                    finaltext = decodedText.substring(0,ind);
                }
            }
        }

        //document.title = finaltext + ' | Schol.io';
    </script>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/new/img/favicon.ico" type="image/x-icon" />

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/new/img/favicon-144.ico">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/new/img/favicon-72.ico">
    <link rel="apple-touch-icon-precomposed" href="/new/img/favicon-57.ico">



    <!--====== CSS  Styles =======-->
    @include('public.styles')

    <!-- Algolia CSS -->
    <link rel="stylesheet" href="/new/css/algolia-search.css"/>

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


<script>
    window.REVIEWS = {{ $reviews }};
</script>
</head>

<style>
        *{font-family:'Roboto', sans-serif;}
        [ng\:cloak], [ng-cloak], .ng-cloak{display:none !important;}
        .clear-fix{clear:both;display:block;}
        #header{background:rgba(240,240,240,0.92);border-bottom:1px solid #c1c1c1;height:61px;}
        #header .active a{padding-bottom:5px;border-bottom:2px solid #a1a1a1;}
        .navbar-scroll li{top:-11px;}
        .nav-web .sc-landing-logo, .nav-web .sc-landing-logo-sticky{padding-top:15px;}
        .nav-mobile{padding-top:11px;}
        section{padding-top:100px!important;padding-bottom:100px!important;}
        .sc-landing-header{height:79px;background:transparent;}
        .sc-landing-header-sticky{background:transparent;}
        .sc-landing-brand{padding-top:26px!important;}
        .sc-landing-menu{padding-top:10px;}
        .sc-landing-menu a{color:#324c5a;}
        .sc-landing-menu li>a:hover{background-color:transparent!important;color:#ffffff;}
        .sc-landing-menu li>a:focus{background-color:transparent!important;color:#ffffff;}
        .sc-landing-menu-item{padding-top:8px;}
        .sc-button-landing{margin-top:-4px;}
        .sc-landing-logo-sticky{display:block}
        .sc-landing-logo{}
        .sc-landing-menu-mobile-sandwitch{padding-right:20px;margin-top:25px!important;cursor:pointer;}
        .sc-landing-menu-button-sandwitch{}
        .sc-landing-menu-sandwitch-button-sticky{display:block;}
        .sc-landing-menu-sandwitch{}
        .sc-landing-menu-mobile-holder{padding:20px;width:230px;height:100%;position:fixed;right:0;top:0;z-index:999999;display:none;}
        .sc-landing-menu-mobile-close{font-size:25px;cursor:pointer;}
        .sc-landing-menu-mobile-item{font-size:18px;text-align:right;color:white;font-weight:300;padding-top:20px;}
        .filter-icon{margin-top:-10px!important;}
        .landDrop{margin-top:10px;}
        .langDropWhite{margin-right:10px}
        .main{min-height:800px;background-color:#F1F4F5;}
        .up{height:100px;}
        .box{height:225px;}
        .left-box1{background-color:#fff;border:solid 1px #e1e1e1;height:245px!important;}
        .left-box2{background-color:#f5f5f5;border:solid 1px #e1e1e1;border-top:none;height:195px!important;}
        p{padding:15px;color:#5d5d5d;}
        .mob-filter{z-index:95;opacity:0.98;position:fixed;top:68px;height:auto;bottom:8px;border-radius:6px;border:1px solid #777;width:250px;box-shadow:2px 3px 40px 6px #4e4e4e;overflow-y:auto;background-color:#e3e3e3;padding:10px 7px 30px 7px;overflow-x:hidden;}
        .left{left:8px;}
        .font-90{font-size:80%!important;}
        .input-group-addon{background-color:#fff;border-right:none;width:20px;}
        #input1, #Autocomplete{border:none !important;box-shadow:none !important;width:194px;height:34px;border-bottom:1px solid #c4c4c5 !important;border-top:1px solid #c4c4c5 !important;border-right:1px solid #c4c4c5 !important;border-left:none !important;font-size:98%;color:#888;border-top-left-radius:0;border-bottom-left-radius:0;}
        ::-webkit-input-placeholder{color:#888;}
        .kf-gray{color:#888;}
        .form-group input[type="checkbox"]{display:none;}
        .form-group input[type="checkbox"] + .btn-group > label span{width:20px;}
        .form-group input[type="checkbox"] + .btn-group > label span:first-child{display:none;}
        .form-group input[type="checkbox"] + .btn-group > label span:last-child{display:inline-block;}
        .form-group input[type="checkbox"]:checked + .btn-group > label span:first-child{display:inline-block;}
        .form-group input[type="checkbox"]:checked + .btn-group > label span:last-child{display:none;}
        .kf-check{width:185px;}
        .card-ribbon{position:relative;}
        .card{background:white;}
        .card, .card-photo{height:310px;}
        .card-photo{width:345px;margin-right:8px;background-size:cover;background-position:center;object-fit: cover;object-position: center;}
        #img2{top:165px;}
        #img2, #img3{position:absolute;left:29px;-moz-box-shadow:0px 0px 3px 2px #ffffff;-webkit-box-shadow:0px 0px 3px 2px #ffffff;box-shadow:0px 0px 3px 2px #ffffff;}
        .card-buttons{padding:0;margin:0;}
        .margin-pad{margin:50px 0;padding:35px 0;}
        .facet-category-title{font-weight:300;padding-top:20px;margin-bottom:0;padding-bottom:0}
        .filter-title{font-weight:300;font-size:120%;;margin-top:0;padding-top:0}
        .algolia-search-container{width:297px;padding:0;margin-left:-16px;margin-right:0}
        .algolia-search-input{font-size:95%;font-weight:300;border-radius:5px!important;}
        .filter-container{padding-top:10px;padding-bottom:10px;background-color:#fafafa;border:1px solid #bbb;border-radius:4px;margin:10px 0;padding-left:15px;padding-right:15px;}
        .report{position:absolute;bottom:-110px;right:20px;font-size:180%;color:#aaa;z-index:50;}
        .report:hover{color:#FD6A33;cursor:pointer;}
        .report-logo{height:50px;text-align:left;margin:14px 0 0 14px;opacity:0.3}
        .report-drop{background:#fafafa;border:1px solid #ddd;box-shadow:0px 0px 10px 2px #ccc;border-radius:6px;width:0;height:0;opacity:0;margin-top:30px;margin-right:10px;display:inline-block;position:absolute;bottom:-110px;right:-1px;z-index:20}
        .report-title{color:#00475d;opacity:0.3;margin-left:10px;font-size:110%}
        .report-text{width:100%;height:80px;text-align:justify;font-size:90%;color:#ccc;margin-top:20px;padding:14px 18px;}
        .report-text:hover{background:#aaa;color:#fff;cursor:pointer;}
        .report-scholar{bottom:3px;right:163px;}
        .report-scholar-drop{bottom:3px;right:145px;}
        .left, .left-240, .left--300{transition:all 0.4s;}
        .left-240{filter:grayscale(100%);opacity:0.5;}
        .left--300{left:-275px;}
        #cards>li{opacity:1;}
        #cards>li.ng-enter, #cards>li.ng-leave-active, #cards>li.ng-move{transition:0.4s;margin-bottom:3800px;}
        #cards>li.ng-enter-active ,#cards>li.ng-leave, #cards>li.ng-move-active{margin-bottom:0;}
        .info-window-text{padding-top:6px;left:12px}
        .btn-map,.btn-group,.sort-by-text,.ais-sort-by-selector,.mobile-input{margin-left:-16px;}
        .algolia-search-container,.ais-sort-by-selector{width:110%!important;}
        .mobile-input{width:108%}
        .btn-map,.btn-group{width:105%;}
        .btn-group{margin-top:15px;margin-bottom:15px;}
        .btn-map{height:40px}
        .btn-map-mob{width:195px;margin-left:auto;margin-right:auto;text-align:center;position:absolute;left:20px;right:20px!important;}
        @media (max-width:1239px){.algolia-search-container,.ais-sort-by-selector{width:113%!important;}
        .btn-map,.btn-group{width:107%;}
        }
        @media (max-width:1149px){.algolia-search-container,.ais-sort-by-selector{width:116%!important;}
        }
        @media(min-width:1150px){.col-xl-custom{width:59%;}
        }
        @media(min-width:1250px){.clear-filter,.filter-container{width:100%}
        .col-xl-custom{width:60%;padding-right:10px}
        }
        @media(min-width:1350px){.col-xl-custom{width:62.5%;}
        }
        @media(min-width:1450px){.col-xl-custom{width:64.5%;}
        }
        @media(max-width:1249px){.content-wrapper{padding-right:25px;}
        .clear-filter,.filter-container{width:104%}
        .algolia-search-container,.ais-sort-by-selector{width:111%!important;}
        .btn-map,.btn-group{width:105.2%;}
        }
        @media(max-width:1199px){.clear-filter,.filter-container{width:99.5%}
        }
        @media(max-width:1149px){.content-wrapper{padding-right:45px;}
        .clear-filter,.filter-container{width:98%}
        .algolia-search-container,.ais-sort-by-selector{width:113%!important;}
        .btn-map,.btn-group{width:106%;}
        }
        @media(max-width:1049px){.content-wrapper{padding-right:65px;}
        }
        @media(max-width:991px){.filter-container{width:237px}
        .mob-filter{padding-left:21px}
        .ais-sort-by-selector{width:107.3%!important;}
        .clear-filter-mobile{width:237px}
        }
        @media (min-width:1450px){#input1 ,#Autocomplete{width:225px!important;}
        .kf-check{width:216px!important;}
        }
        @media (max-width:1440px){}
        @media (min-width:1200px) and (max-width:1449px){#input1,#Autocomplete{width:208px!important;}
        .kf-check{width:208px!important;}
        .form-group input[type="checkbox"] + .btn-group > label span{width:10px!important;}
        }
        @media (max-width:1238px){}
        @media (min-width:1200px){.kf-margin-top{margin-top:25px;}
        .margin-pad{margin-top:110px;padding:3px 0;}
        }
        @media (min-width:992px) and (max-width:1199px){#input1 ,#Autocomplete{width:150px;}
        .kf-check{width:160px;}
        .form-group input[type="checkbox"] + .btn-group > label span{width:7px;}
        .card{height:348px;}
        .card-photo{width:280px;height:197px;margin-bottom:19px;}
        .but-pad{padding-left:310px;}
        .margin-pad{margin-top:140px;padding:3px 0;}
        }
        @media (min-width:768px) and (max-width:991px){.card{height:340px;}
        .card-photo{width:265px;height:190px;margin-bottom:32px;}
        .margin-pad{margin:60px 0;padding:35px 0;}
        .left-box2{height:900px!important;}
        }
        @media (min-width:481px) and (max-width:767px){}
        @media (min-width:601px) and (max-width:767px){.card{height:715px;}
        .card-photo{width:100%;height:345px;max-height:350px;}
        .kf-col-xs-10{width:82%}
        .kf-col-xs-offset-1{margin-left:11%}
        #img3{top:293px;}
        .left--300{left:-343px;}
        .left--390{left:-393px;}
        .left-box2{height:900px!important;}
        .btn-close{margin-left:72%;}
        }
        @media (max-width:767px){.info-window-text{padding-top:6px;left:-30px}
        .info-window-text2{margin-left:90px}
        }
        @media (min-width:541px) and (max-width:600px){.card{height:700px;}
        .card-photo{width:100%;height:324px;max-height:340px;}
        .kf-col-xs-10{width:88%}
        .kf-col-xs-offset-1{margin-left:6%}
        #img3{left:30px;top:273px;}
        .sm-pull-left{width:66%;float:left!important;}
        .left-box2{background-color:#ebebeb;height:900px!important;}
        .btn-close{margin-left:87%;}
        }
        @media (min-width:481px) and (max-width:540px){.card{height:670px;}
        .card-photo{width:100%;height:320px;max-height:300px;}
        .kf-col-xs-10{width:92%}
        .kf-col-xs-offset-1{margin-left:4%}
        #img3{left:30px;top:243px;}
        .sm-pull-left{width:70%;float:left!important;}
        .xs-text-incr-80{font-size:81%;}
        .left-box2{background-color:#ebebeb;height:900px!important;}
        .btn-close{margin-left:85%;}
        }
        @media (max-width:480px){.card{height:600px;}
        .card-photo{width:100%;height:285px;max-height:270px;}
        #img3{left:30px;top:218px;}
        .xs-text-incr-85{font-size:86%;}
        .xs-text-incr-80{font-size:81%;}
        .sc-button3{min-width:120px;}
        .sm-pull-left{width:88%;float:left!important;}
        .box{height:200px;}
        .left-box2{background-color:#ebebeb;height:900px!important;}
        .shortDrop{width:138px!important;}
        .btn-close{margin-left:83%;}
        }
        @media (max-width:400px){.card{height:560px;}
        .card-photo{width:100%;height:242px;max-height:280px;}
        #img3{left:30px;top:190px;}
        .xs-text-incr-80{font-size:81%;}
        .box{height:170px;}
        .left-box2{background-color:#ebebeb;height:900px!important;}
        .shortDrop{width:135px!important;}
        .btn-close{margin-left:83%;}
        .selectpicker{width:99%!important;}
        .report-scholar{right:135px;}
        .report-scholar-drop{right:120px;}
        }
        input[type="text"]:focus,.form-control:focus, input{box-shadow:none;-webkit-box-shadow:none;}
        .form-control:focus{border-color:#008da5;box-shadow:none!important;}

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

<body data-spy="scroll" data-target=".navbar" data-offset="50" id="home"  ng-app="schoolsResultsApp"  ng-controller="schoolsResultsCtrl" data-ng-init="init()"  ng-cloak>

  <!-- @include('components.preloader') -->

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



                <!-- ======= Sandwich Menu =======-->

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
                








                <!--============ Left Side Menu large Screen =============-->



                <!-- ========== SCHOLARSHIPS  CONTAINER ============= -->
                <div class="col-lg-9 col-md-9 col-sm-12 scholarship-container " id="">

                    <main id="schools">
                        @include('resultsPHP')
                    </main>

                    <section id="pagination"></section>
                </div><!-- //col-lg-9-->
            </div> <!-- //row-->
        </div> <!-- //container-->
    </main>
    
    @include('public.footer')
    
    
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
            if ('serviceWorker' in navigator) {
              console.log("Will the service worker register?");
              navigator.serviceWorker.register('/service-worker.js')
                .then(function(reg){
                  console.log("Yes, it did.");
                }).catch(function(err) {
                  console.log("No it didn't. This happened: ", err)
                });
            }
          </script>

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

            <photo>
                <a href="/public/profile/@{{school_id}}">
                    <picture>
                            <source srcset="@{{image}}" type="image/webp">
                            <source srcset="@{{image2}}.jpg" type="image/jpeg">
                            <img id="img0" class="card-photo pull-left" src="@{{image2}}.jpg">
                    </picture>
                </a>
            </photo>
            <div class="card-ribbon">
                <picture>
                        <source srcset="@{{logo}}" type="image/webp">
                        <source srcset="@{{logo2}}.png" type="image/png">
                        <img id="img2" class="sc-white img-med hidden-lg hidden-xs" src="@{{logo2}}.png" alt="logo">
                </picture>

                <picture>
                        <source srcset="@{{logo}}" type="image/webp">
                        <source srcset="@{{logo2}}.png" type="image/png">
                        <img id="img3" src="@{{logo2}}.png" class="sc-white img-thumb hidden-lg hidden-md hidden-sm">
                </picture>
                
            </div>
        </con>


        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 col-xl-custom" >

                <!-- 
                <i id="report" class="fa fa-ellipsis-h report report-portal" onClick="dropReport(@{{school_id}})" ></i>
                
                <div class="report-drop report-drop-portal" id="report-drop@{{school_id}}" style="overflow:hidden!important">
                     
                     <picture>
                        <source srcset="/new/img/logoNX-m.webp" type="image/webp">
                        <source srcset="/new/img/logoNX-m.png" type="image/png">
                            <img class="report-logo"  src="/new/img/logoNX-m.png" alt="" style="overflow:hidden!important">
                    </picture>
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

                =====================================================-->




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
                
                <picture>
                        <source srcset="@{{logo}}" type="image/webp">
                        <source srcset="@{{logo2}}.png" type="image/png">
                            <img id="img1" class=" img-mini pull-left margin-right-10 margin-top-15 hidden-md hidden-sm hidden-xs" src="@{{logo2}}.png">
                </picture>
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
                    <span><i class="fa fa-map-marker pull-left pad-top-3 " aria-hidden="true"></i></span> {{--xs-text-incr-85 text-incr-95 --}}
                    <span class="pull-left pad-left-6  ellipsis">@{{address}}</span>  {{--xs-text-incr-85 text-incr-95 --}}
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
            <picture>
                <source srcset="/new/img/bars2.webp" type="image/webp">
                <source srcset="/new/img/bars2.png" type="image/png">
                <img src="/new/img/bars2.png" class="backImageLg" style="">
            </picture>
            @{{/stats}}

            @{{#stats}}
            <picture>
                <source srcset="/new/img/bars2.webp" type="image/webp">
                <source srcset="/new/img/bars2.png" type="image/png">
                <img src="/new/img/bars2.png" class="backImageSm" style="">
            </picture>
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
            "<div class='text-center'>@lang('schools.error') <strong>@{{query}}</strong>.</div>";

    var menuTemplate =
            '<a href="javascript:void(0);" class="facet-item @{{#isRefined}}active@{{/isRefined}}"><span class="facet-name"><i class="fa fa-angle-right"></i> @{{name}}</span class="facet-name"><span class="counter">@{{count}}</span></a>';





    search.addWidget(
            instantsearch.widgets.hits({
                container: '#schools',
                hitsPerPage: 8,
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
                    previous: '' +
//                    '<i class="fa fa-angle-left fa-2x"></i>' +
                    " @lang('schools.prev_page')",
                    next: "@lang('schools.next_page') "

//                            '<i class="fa fa-angle-right fa-2x"></i> '
                },
                showFirstLast: true
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
                attributes: ['categories.lvl0', 'categories.lvl1'],
                sortBy: ['count'],
                limit:6,
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
                attributes: ['categories.lvl0', 'categories.lvl1'],
                limit:4,
                sortBy: ['count'],
                templates: {
                    item: menuTemplate
                  }
            })
    );

    search.addWidget(
            instantsearch.widgets.clearAll({
                container: '#clear-all',
                templates: {
                    link: "<i class='fa fa-ban margin-right-5'></i>@lang('schools.filters.delete')"
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
                    link: "<i class='fa fa-ban margin-right-5'></i>@lang('schools.filters.delete')"
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
