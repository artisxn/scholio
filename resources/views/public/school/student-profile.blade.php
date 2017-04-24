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

    <!-- Profile  CSS -->
    <link rel="stylesheet" href="/new/css/scholarship-profile.css" >


    <!-- Results CSS -->
    {{--<link href="{{asset('new/css/results.css')}}" rel="stylesheet">--}}


     <!-- jQuery js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <!-- Bootstrap js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Angular js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular.min.js"></script>


    <!-- javascript Results -->
    <script src="{{asset('/new/js/results.js')}}"></script>


    <script>
        // window.SelectedLocation = "{{ session()->pull('location') }}"
        window.Search = "{{ session('search') }}"
    </script>


    <style>

        .upper-box{background-color: #008DA5; height: 320px; border-radius: 4px; border-bottom-left-radius: 0; border-bottom-right-radius: 0}
        .title-to{ font-size: 140%; color: #fafafa; font-weight: 300; padding: 200px 0 0 70px;}
        .avatar-container{ margin-top: 30px; margin-left: -5px; }
        .avatar{ box-shadow: 0 0 15px #222; }
        .name{margin-left: 150px; margin-top: -80px; color: #fff; font-size: 120%; font-weight: 400;}
        .email{margin-left: 220px; margin-top: 10px; color: #888; font-size: 105%; font-weight: 300;}

        .main{ background: #fff; z-index: -2; margin: -30px 0 40px 0; padding: 40px  }


        .inner-section{ margin: 80px 0 0 0; padding: 5px 5px 25px 5px ; border: 1px solid #aaa; border-radius: 8px; background-color: #F1F4F5;
        }
        .section-text{color: #888; font-size: 110%; font-weight: 300; margin:-25px 0 30px 10px;
            border: 1px solid #aaa; border-radius: 6px; padding: 7px; min-width: 190px; max-width: 250px; background-color: #fafafa;
            box-shadow: 0 0 9px #aaa}


        .info{ color: #008DA5; font-weight: 400; margin: 5px 0}
        .value{color: #667;  font-weight: 300;}
        /*  ======================================= */

        @media (min-width:992px) and (max-width: 1200px) {

        }

        @media (min-width: 768px) and (max-width: 991px) {

        }

        @media  (max-width: 767px) {


        }
        @media  (max-width: 600px) {

        }


        @media  (max-width:480px) {

        }

        @media  (max-width: 390px) {

        }


    </style>


</head>



<body data-spy="scroll" data-target=".navbar" data-offset="50" id="home"  ng-app="studentApp"  ng-controller="studentCtrl" data-ng-init="init()"  ng-cloak>
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

<div class="container">

    <div>
        <div class="upper-box" >
            <div class="title-to">
                <div class="avatar-container"> <img src="{{ $user->info->avatar }}" class="avatar" alt="">
                </div>
                <div class="name">{{ $user->name }}</div>
            </div>
        </div>

        <div class="email">{{ $user->email }}</div>

        <div class=" col-xs-12 row main">
            <div class="row inner-section">
                <div class="section-text centered-text"> Στοιχεία Υποψηφίου</div>

                <div class="col-sm-6 col-lg-4 info">
                    <i class="icon-inp fa fa-street-view"></i>
                    Διεύθυνση:
                    <span class="value"> {{ $user->info->address }}</span>
                </div>
                <div class="col-sm-6 col-lg-4 info">
                    <i class="icon-inp fa fa-phone"></i>
                    Τηλέφωνο:
                    <span class="value"> {{ $user->info->phone }}</span>
                </div>
                <div class="col-sm-6 col-lg-4 info">
                    <i class="icon-inp fa fa-id-card-o"></i>
                    Αριθμός Δελτίου Ταυτότητας:
                    <span class="value"> {{ $user->cv->id_number }}</span>
                </div>
                <div class="col-sm-6 col-lg-4 info">
                    <i class="icon-inp fa fa-envelope-o"></i>
                    Ταχυδρομικός Κώδικας:
                    <span class="value"> {{ $user->cv->post_code }}</span>
                </div>
                <div class="col-sm-6 col-lg-4 info">
                    <i class="icon-inp fa fa-flag"></i>
                    Εθνικότητα:
                    <span class="value"> {{ $user->cv->nationality  }}</span>
                </div>
                <div class="col-sm-6 col-lg-4 info">
                    <i class="icon-inp fa fa-globe"></i>
                    Θρήσκευμα:
                    <span class="value"> {{ $user->cv->religion  }}</span>
                </div>
                <div class="col-sm-6 col-lg-4 info">
                    <i class="icon-inp fa fa-users"></i>
                    Μέλος Πολύτεκνης Οικογένειας:
                    <span class="value"> {{ $user->cv->polyteknos  }}</span>
                </div>
            </div>

        </div>

    </div>
</div>







<!-- Footer -->
@include('public.footer')

</body>


<script>
    angular.module("studentApp",[])
            .controller("studentCtrl",function ($scope,$http) {


            })
</script>



</html>
