


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


            <!-- Profile  CSS -->
    <link href="/new/css/scholarship-profile.css" rel="stylesheet">

    <!-- Horizontal Ribbons  CSS -->
    {{--<link href="/new/css/ribbonHorizontal.css" rel="stylesheet">--}}

            <!-- Horizontal Ribbons  CSS -->
    {{--<link href="/new/css/Hexagon.css" rel="stylesheet">--}}

            <!-- jQuery js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <!-- Bootstrap js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <!-- Angular js-->
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.8/angular.min.js"></script>--}}



    <script src="/new/js/profile.js"></script>



    <script>
        window.Scholio = <?php echo json_encode([
    'csrfToken' => csrf_token(),
]); ?>
    </script>

    <style>



    </style>
</head>
<body data-spy="scroll" data-target=".spy" data-offset="270" id="home">
<!-- Scholio Header -->

<header class="spy navbar navbar-fixed-top navbar-scroll sc-landing-header" id="header" style="z-index: 99990">

    <div class="container" style="">
        <div class="row">

            <div class="col-md-1 visible-lg visible-md nav-web">
                <!-- Scholio Branding -->
                <a class="sc-landing-brand" href="{{ url('/') }}">
                    <div class="sc-landing-logo-sticky" style=" padding-top: 15px">
                        <img src="/new/img/logo.png" alt="scholio logo">
                    </div>
                </a>
            </div>

            <div class="col-xs-6  visible-sm visible-xs">
                <div class="nav-mobile">
                    <a class="" href="{{ url('/') }}">
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
                    <li class="sc-landing-menu-item"><a href="#sxetika" >ΛΙΓΑ ΛΟΓΙΑ</a></li>
                    @if(auth()->check())
                        <li><a href="{{ url('/dashboard') }}"><button type="button" class="sc-button-landing sc-button sc-green sc-t-white">Διαχείριση</button></a></li>
                        <li><a href="{{ url('/out') }}"><button type="button" class="sc-button-landing sc-button sc-dark-blue sc-t-white ">Αποσύνδεση</button></a></li>
                    @else
                        <li><a href="{{ url('/register') }}"><button type="button" class="sc-button-landing sc-button sc-green sc-t-white">Εγγραφή</button></a></li>
                        <li><a href="{{ url('/login') }}"><button type="button" class="sc-button-landing sc-button sc-dark-blue sc-t-white ">Σύνδεση</button></a></li>
                    @endif
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
                            <a href="#sxetika">
                                <div class="sc-landing-menu-mobile-item sc-landing-menu-mobile-item-pressed">ΛΙΓΑ ΛΟΓΙΑ</div>
                            </a>
                            <a href="#experience">
                                <div class="sc-landing-menu-mobile-item sc-landing-menu-mobile-item-pressed">ΕΜΠΕΙΡΙΑ</div>
                            </a>
                            <a href="#spoudes">
                                <div class="sc-landing-menu-mobile-item sc-landing-menu-mobile-item-pressed">ΣΠΟΥΔΕΣ</div>
                            </a>
                            <a href="#skills">
                                <div class="sc-landing-menu-mobile-item sc-landing-menu-mobile-item-pressed">ΔΕΞΙΟΤΗΤΕΣ</div>
                            </a>
                            <div class=""><br></div>
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
                            </div>>
                        </div>
                    </div>
                </div>
            </div>
        </div>  <!-- row -->
    </div><!-- container-->
</header>


<div class="container">
    <div class="photo-box">
        <div class="school-name">
            {{ $scholarship->school->name() }}
        </div>
        <img class="logo " src="/images/schools/{{ $scholarship->school->logo}}" alt="">
    </div>
</div>


<div class="container">
    <div class="" style="height: 200px; background-color: #fff; border: 1px solid #e6e6e6;  border-radius: 10px; margin-top:130px; position: relative">

        <div style="position: absolute; top: -50px; left: 17px">
            {{--<img height="180px"  width="220px" src="/new/img/banner.png" alt="">--}}
            <img height="300px" src="/new/img/hex01.png" alt="">
            <img  height="90" class="" style="margin-left: -165px; margin-top: 134px;"  src="/panel/assets/images/steps/step3-best.png" alt="">
        </div>

        <div style="position: absolute; left: 290px; top: 30px;">
            <div class="sc-t-grey text-incr-175 font-weight-300">
                {{ $scholarship->criteria->name }}
            </div>
        </div>

    </div>



    <div class="" style="height: 200px; background-color: #fff; border: 1px solid #e6e6e6;  border-radius: 10px; margin-top:130px; position: relative">

        <div style="position: absolute; right: 17px; top: -50px">
            <img height="300px" src="/new/img/hex02.png" alt="">
            <img  height="90" class="" style="margin-left: -185px; margin-top: 134px;"  src="/panel/assets/images/steps/Διοίκηση Επιχειρήσεων & Οικονομικά - Business.png" alt="">
        </div>
        <div style="position: absolute; right: 295px; top: 30px;">
            <div class="sc-t-dark-grey text-incr-175 font-weight-300 pull-left margin-left-20">
                {{ $scholarship->study->name}}
            </div>
            <div class="clear-fix sc-t-grey margin-left-20 margin-right-10 text-incr-115">
                Το αντικείμενο σπουδών αφορά τους υποψηφίους που στοχεύουν σε <strong> {{ $scholarship->level->name }} </strong> με εξιδίκευση
                σε  {{ $scholarship->study->name}} .
            </div>
        </div>
    </div>


    <div class="" style="height: 200px; background-color: #fff; border: 1px solid #e6e6e6;  border-radius: 10px; margin-top:130px; position: relative">
        <div style="position: absolute; top: -50px; left: 17px">
            {{--<img height="180px"  width="220px" src="/new/img/banner.png" alt="">--}}
            <img height="300px" src="/new/img/hex03.png" alt="">
            <img  height="90" class="" style="margin-left: -200px; margin-top: 134px;"  src="/panel/assets/images/steps/step1-reduce2.png" alt="">
        </div>
        <div style="position: absolute; left: 290px; top: 30px;">
            <div class="sc-t-dark-grey text-incr-175 font-weight-300 margin-left-10">
                {{ $scholarship->financial->plan}} {{ $scholarship->financial_amount }} %
            </div>
            <div class="sc-t-grey margin-top-20 margin-left-10 margin-right-10 text-incr-115">
                Ο τελικός νικητής μέσα από όλους τους συμμετέχοντες για τη συγκεκριμένη
                υποτροφία, θα επιδοτηθεί για τις σπουδές του με  {{ $scholarship->financial->plan}}  {{ $scholarship->financial_amount }} %.
            </div>
        </div>
    </div>




</div>






<!-- Teacher Profile Section. -->

<main id="main"  class="">

   <div class="container">

       <div class="" style="overflow-x: hidden" id="">
           <div class="margin-bot-15 sc-t-dark-grey margin-top-50">

               <div class="row">

                   <div class="col-sm-12">

                       Terms( σε html): <h4>{{ $scholarship->terms }}</h4>
                       <hr>
                       Exams(Boolean): <h4>{{ $scholarship->exams }}</h4>
                       <hr>
                       Exam Date(Carbon): <h4>{{ $scholarship->exams_date }}</h4>

                   </div>

               </div>

           </div>
       </div>
   </div>

</main>


<!-- Footer -->
@include('public.footer')

</body>

</html>