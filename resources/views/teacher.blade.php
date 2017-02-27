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

    <!-- Profile  CSS -->
    <link href="/new/css/profile.css" rel="stylesheet">

    <!-- Horizontal Ribbons  CSS -->
    <link href="/new/css/ribbonHorizontal.css" rel="stylesheet">

    <!-- Horizontal Ribbons  CSS -->
    <link href="/new/css/Hexagon.css" rel="stylesheet">

    <!-- jQuery js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <!-- Bootstrap js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Angular js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.8/angular.min.js"></script>

    <!-- Rating js-->
    <script src="/new/js/jquery.raty-fa.js"></script>

    <!-- BX Slider-->
    <script src="/new/js/jquery.bxslider412.js"></script>
    <!--<script src="http://bxslider.com/lib/jquery.bxslider.js"></script>-->

    <script>
        window.Scholio = <?php echo json_encode([
    'csrfToken' => csrf_token(),
]); ?>
    </script>

    <style>

        .main-box2  ul li{text-indent: -20px;}



        .bx-wrapper img {height: 220px !important;}



        .slideup, .slidedown {
            background-color: #fff;
            overflow-y: hidden;
            -webkit-transition: max-height 0.3s ease-in-out;
            transition: max-height 0.3s ease-in-out;
            margin-bottom: 0;
        }
        .slidedown {  max-height: 3000px ;   }
        .slideAbout {max-height: 400px;}
        .slideStudies {max-height: 400px;}
        .slideScholarships {max-height: 500px;}
        .slideReviews {max-height: 500px;}
        .slideTeacheers {max-height: 500px;}

        #horizontal-style {
            text-align: justify;
        }

        #horizontal-style:after {
            content: '';
            display: inline-block;
            width: 100%;
        }
        #horizontal-style li {
            display: inline-block;
            height: 100%;
        }

        #horizontal-style li a {
            height: 100%;
        }
        #horizontal-style li a:hover {
            color: orange!important;
            background-color: #00bcd4;
        }
        #horizontal-style li a:visited,
        #horizontal-style li a:focus,
        #horizontal-style li a:active {
            background-color: transparent;
        }

        #submButton{z-index: 4000; width: 190px; top: 250px; margin-left: 52px; position: fixed; }

        #about-li { margin: 20px}

        #about-li >div> ul > li { margin-left: 20px;}

        @media (min-width: 991px) and (max-width: 1450px) {
            .ribbon-front {height: 55px;}
            .ribbon-back-right {  height: 55px;}
            .ribbon-edge-bottomright{  top: 55px;  left: 81%;  }
            #submButton{ top: 5px; margin-left: 15px; position: relative}
        }
        @media  (max-width: 490px) {
            .ribbon-front {height: 55px;}
            .ribbon-back-right {  height: 55px;}
            .ribbon-edge-bottomright{  top: 55px;  left: 81%;  }
        }


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
                    <li class="sc-landing-menu-item"><a href="#sxetika" >ΣΧΕΤΙΚΑ</a></li>
                    {{--ng-if="studies.length && col_iek_eng_dan_mus" ng-cloak--}}
                    <li ng-show="col_iek_eng_dan_mus" class="sc-landing-menu-item"><a href="#spoudes" >ΣΠΟΥΔΕΣ</a></li>
                    <li class="sc-landing-menu-item"><a href="#ypotrofies">ΥΠΟΤΡΟΦΙΕΣ</a></li>
                    <li class="sc-landing-menu-item"><a href="#reviews">ΑΞΙΟΛΟΓΗΣΕΙΣ</a></li>
                    @if(auth()->check())
                    <li><a href="{{ url('/dashboard') }}"><button type="button" class="sc-button-landing sc-button sc-green sc-t-white">Panel</button></a></li>
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
    <main id="main"  class="main">

        <div class="container" style="">
        <div class="row up">
            </div>
            <div class="up">
                <div class=" margin-bot-15 ">
{{-- TEACHER STARTS HERE --}}   {{-- TEACHER STARTS HERE --}}   {{-- TEACHER STARTS HERE --}}   {{-- TEACHER STARTS HERE --}}
                    <div>
                        <h1>ΣΤΟΙΧΕΙΑ</h1>
                        Teacher Avatar - <img src="{{ $teacher->avatar }}" width="100" height="100">
                        <br />
                        Teacher Name - {{ $teacher->name() }}
                        <br />
                        Teacher Email - {{ $teacher->email() }}
                        <br />
                        Teacher Phone - {{ $teacher->phone }}
                        <br />
                        Teacher Date Of Birth - {{ $teacher->dob }}
                        <br />
                        <hr>
                        <h1>ΕΠΑΓΓΕΛΜΑΤΙΚΗ ΕΜΠΕΙΡΙΑ</h1>
                        @foreach($works as $work)
                            WORK NAME - {{ $work->name }}
                            <br />
                            WORK COMPANY - {{ $work->company }}
                            <br />
                            WORK DATE - {{ $work->from }} - {{ $work->until }}
                            <br />
                            <hr>
                        @endforeach

                        <h1>ΣΠΟΥΔΕΣ</h1>
                        @foreach($certificates as $certificate)
                            certificate NAME - {{ $certificate->name }}
                            <br />
                            certificate university - {{ $certificate->university }}
                            <br />
                            certificate DATE - {{ $certificate->from }} - {{ $work->until }}
                            <br />
                            <hr>
                        @endforeach

                        <h1>ΔΕΞΙΟΤΗΤΕΣ</h1>
                        @foreach($teacher->user->getUniqueSkills() as $skill)
                        SKILL NAME - {{ $skill->name }} - LIKES - {{ $teacher->user->skills()->where('skill_id', $skill->id)->count() }}
                        @if(auth()->check() & auth()->user()->role != 'school')
                            @if($teacher->user->checkSkill($skill))
                            <button onclick="like({{$teacher->user->id}}, {{$skill->id}})" class="btn btn-danger">UnLike</button>
                            @else
                            <button onclick="like({{$teacher->user->id}}, {{$skill->id}})" class="btn btn-primary">Like</button>
                            @endif
                        @endif
                        <br />
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<!-- Footer -->
{{-- @include('public.footer') --}}

</body>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>

window.axios.defaults.headers.common = {
    'X-CSRF-TOKEN': Scholio.csrfToken,
    'X-Requested-With': 'XMLHttpRequest'
};

function like(user, skill){
    axios.post('/api/skills/set', {
    user: user,
    skill: skill
  })
  .then(function (response) {
    console.log(response.data);
  })
  .catch(function (error) {
    console.log(error);
  });
}

</script>

</html>