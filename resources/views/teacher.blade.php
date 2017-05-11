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
    {{--<link href="/new/css/jquery.bxslider.css" rel="stylesheet">--}}

    <!-- Profile  CSS -->
    <link href="/new/css/teacher-profile.css" rel="stylesheet">

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

    <!-- Rating js-->
    {{--<script src="/new/js/jquery.raty-fa.js"></script>--}}

    <!-- BX Slider-->
    {{--<script src="/new/js/jquery.bxslider412.js"></script>--}}
    {{--<!--<script src="http://bxslider.com/lib/jquery.bxslider.js"></script>-->--}}


    <script src="/new/js/profile.js"></script>



    <script>
        window.Scholio = <?php echo json_encode([
    'csrfToken' => csrf_token(),
]); ?>
    </script>
@if($teacher->cover != null)
    <style>
    .photo-box{ min-height: 530px;
        background-size: cover;
        background-position: center;
        background-image: linear-gradient( rgba(187, 218, 222, 0.2), rgba(0, 67, 79, 0.8)),
        url("{{$teacher->cover}}");
    }
    </style>
    @endif
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
                    <li class="sc-landing-menu-item"><a href="#experience" >ΕΜΠΕΙΡΙΑ</a></li>
                    <li class="sc-landing-menu-item"><a href="#spoudes">ΣΠΟΥΔΕΣ</a></li>
                    <li class="sc-landing-menu-item"><a href="#skills">ΔΕΞΙΟΤΗΤΕΣ</a></li>
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



<div class="photo-box"></div>




<!-- Teacher Profile Section. -->

    <main id="main"  class="main">

        <div class="container">
            <img src="{{ $teacher->avatar }}" class="avatar img-circle" >

            <div class="row1 xs-centered">
                <span class="name">
                        <span>{{ $teacher->name() }} </span>
                </span>

                <span class="social hidden-xs">
                        {{-- <a href=""> <span class="pull-right "><i class="fa fa-instagram"></i></span> </a>
                        <a href=""> <span class="pull-right margin-right-25"><i class="fa fa-linkedin"></i></span> </a>
                        <a href=""> <span class="pull-right margin-right-25"><i class="fa fa-twitter"></i></span> </a>
                        <a href=""> <span class="pull-right margin-right-25"><i class="fa fa-facebook"></i></span> </a> --}}
                        @if($links)
                            @foreach($links as $link)
                            <a href="{{$link->link}}" style="color: white;">
                                <span class="pull-right margin-right-25"><i class="fa fa-{{$link->name}}"></i></span>
                            </a>
                            @endforeach
                        @endif
                </span>
            </div>
            @if(!$works->isEmpty())
                <span class="pull-left work xs-hidden">{{$works->first()->name}} </span>
                <div class="work xs-centered xs-display">{{$works->first()->name}} </div>
            @endif
                <span class="pull-right work hidden-xs mail"> <i class="fa fa-envelope"></i> {{ $teacher->email() }} </span>




                <div class="xs-social xs-centered ">
                    <a href=""> <span class="margin-right-25 "><i class="fa fa-facebook"></i></span> </a>
                    <a href=""> <span class="margin-right-25"><i class="fa fa-twitter"></i></span> </a>
                    <a href=""> <span class="margin-right-25"><i class="fa fa-linkedin"></i></span> </a>
                    <a href=""> <span class=""><i class="fa fa-instagram"></i></span> </a>
                </div>
                <hr class="xs-display">


            <div class="up" style="overflow-x: hidden" id="sxetika">
                <div class=" margin-bot-15 sc-t-dark-grey">
                    {{-- TEACHER STARTS HERE --}}
                    <div class="row">
                        <div class="up"></div>
                        <div class="col-md-9">

                            <img class="up png-title" src="/new/img/teacher/info.png" alt="">
                            <div class="title">Λίγα Λόγια</div>
                            <div class="text">
                            {{ $teacher->about }}
                                {{-- Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
                                beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                                Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                                Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
                                Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? --}}
                            </div>
                            <hr>


                            <img class="up png-title" src="/new/img/teacher/desk.png" alt="">
                            <div id="experience" class="title">Επαγγελματική Εμπειρία</div>
                            @if(!$works->isEmpty())
                                @foreach($works as $work)
                                    <div class="t1">
                                        {{ $work->name }}
                                    </div>
                                    <div class="t2">
                                          {{ $work->company }}
                                    </div>
                                    <div class="t3">
                                        {{ \Carbon\Carbon::parse($work->from)->year }} - {{ \Carbon\Carbon::parse($work->until)->year }}
                                    </div>
                                @endforeach
                            @endif
                            <hr>


                            <div id="spoudes">
                                <img class="up png-title" src="/new/img/teacher/graduate.png" alt="">
                                <div class="title">Σπουδές</div>
                                @foreach($certificates as $certificate)
                                    <div class="t1">
                                        {{ $certificate->name  }}
                                    </div>
                                    <div class="t2">
                                        {{ $certificate->university  }}
                                    </div>
                                    <div class="t3">
                                        {{ \Carbon\Carbon::parse($certificate->from)->year }} - {{ \Carbon\Carbon::parse($certificate->until)->year }}
                                    </div>
                                @endforeach
                                <hr>
                            </div>


                            <div class="margin-bot-50" id="skills">
                                <img class="up png-title" src="/new/img/teacher/skillsb.png" alt="">
                                <div   class="title ">Δεξιότητες</div>
                                @foreach($teacher->user->getUniqueSkills() as $skill)
                                    <div class="row ">
                                    <span class="t2 col-lg-4 col-md-5 col-sm-5 col-xs-6">
                                        {{ $skill->name }} :
                                    </span>

                                    <span class="col-lg-8 col-md-7 col-sm-7 col-xs-6">

                                        @if(auth()->check() && auth()->user()->role != 'school')
                                            @if($teacher->user->checkSkill($skill))
                                                <i id="bt_like{{$skill->id}}" onclick="like({{$teacher->user->id}}, {{$skill->id}})" class="thumps fa fa-thumbs-o-down"></i>
                                            @else
                                                <i id="bt_like{{$skill->id}}" onclick="like({{$teacher->user->id}}, {{$skill->id}})" class="thumps fa fa-thumbs-o-up"></i>
                                            @endif
                                        @endif

                                        <span id="count{{$skill->id}}" class="counter">
                                            {{ $teacher->user->skills()->where('skill_id', $skill->id)->count() }}
                                        </span>
                                        <div id="bar{{$skill->id}}" class="skill-bar" style="width: {{$teacher->user->skills()->where('skill_id', $skill->id)->count() * 20}}px;" >
                                        </div>

                                    </span>
                                    </div>

                                @endforeach
                            </div>



                        </div>

                        <div class="col-md-3 hidden-sm hidden-xs">
                            <div class="sidebar"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </main>


<!-- Footer -->
 @include('public.footer')

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
    changeButton(response.data, skill);
    changeNumber(response.data, skill);
    changeBar(response.data, skill);
  })
  .catch(function (error) {
    console.log(error);
  });
}

function changeButton(data, id){
    if(data == 'ON'){
        document.getElementById('bt_like' + id).className = 'fa fa-thumbs-o-up';
//        document.getElementById('bt_like' + id).innerHTML = 'Like';
    }
    if(data == 'OFF') {
        document.getElementById('bt_like' + id).className = 'fa fa-thumbs-o-down';
//        document.getElementById('bt_like' + id).innerHTML = 'UnLIKE';
    }
}

function changeNumber(data, id){
    var likes =  document.getElementById('count' + id).innerHTML;
    if(data == 'ON') document.getElementById('count' + id).innerHTML = parseInt(likes)-1;
    else document.getElementById('count' + id).innerHTML = parseInt(likes)+1;
}

function changeBar(data, id){
    var likes =  document.getElementById('count' + id).innerHTML;
    document.getElementById('bar' + id).style.width = parseInt(likes) * 20 + 'px';
}

</script>

</html>