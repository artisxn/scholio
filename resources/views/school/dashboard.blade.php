<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="fb:pages" content="934370089973049" />

    <title>schol.io | Διεκδίκησε τώρα την υποτροφία που σου ταιριάζει.</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon" />

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('img/favicon-144.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('img/favicon-114.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('img/favicon-72.ico')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('img/favicon-57.ico')}}">
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/css/bootstrap.min.css">
    <!-- Main CSS -->
    <link href="{{asset('new/css/main.css')}}" rel="stylesheet">
    <!-- Landing CSS -->
    <link href="{{asset('new/css/tutorschool.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">

    <!--Google Analytis -->
    <script src="https://cdn.jsdelivr.net/ga-lite/latest/ga-lite.min.js" async></script>
    <script>
        var galite = galite || {};
        galite.UA = 'UA-58279133-2'; // Insert your tracking code here
    </script>

    <!-- Javascript Files -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <!-- Bootstrap JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Responsive Bootstrap Toolkit -->
    <script src="{{asset('new/js/bootstrap-toolkit.min.js')}}"></script>

    <!-- -->
    <script src="{{asset('new/js/school/school.js')}}"></script>

</head>
<body class="sc-light-grey ">

<!-- Scholio Header -->
<header class="sc-header-holder sc-white">
    <div class="container-fluid">
        <!-- Large Device Header -->
        <div class="col-xs-6">
            <div class="visible-lg visible-md">
                <div class="sc-tutorschool-brand">
                    <a href="{{url('school/dashboard')}}"><img width="104" height="auto" src="{{asset('new/img/logo.png')}}"></a>
                </div>
            </div>
            <div class="visible-xs visible-sm">
                <div class="sc-tutorschool-brand">
                    <a href="{{url('school/dashboard')}}"><img src="{{asset('new/img/logo-m.png')}}"></a>
                </div>
            </div>
        </div>
        <div class="col-xs-6">
            <div class="visible-lg visible-md">
                <div class="pull-right">
                    <a href=""><button type="button" class="sc-tutorschool-header-margin-fix sc-button sc-medium-grey sc-t-white ">Αποσύνδεση</button></a>
                </div>
            </div>
            <div class="visible-xs visible-sm">
                <div class="pull-right">
                    <img src="{{asset('new/img/collapse-dark.png')}}" alt="scholio logo">
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Scholio Sidebar -->
    <!-- Large Device -->
<div class="visible-lg visible-md">
    <aside class="sc-sidebar-holder sc-dark-blue">
        <div class="sc-header-mute">
            <div class="sc-header-mute-icon pull-right">
                <div class="sc-header-mute-icon-holder">
                    <i class="fa fa-outdent" aria-hidden="true"></i>
                </div>
            </div>
        </div>
        <a href="">
            <div class="sc-sidebar-tutorschool-card-holder">
                <div class="text-center sc-sidebar-tutorschool-photo">
                    <img src="{{asset('new/img/tutorschool_logo.png')}}" class="img-circle" width="40px" height="auto">
                </div>
                <div class="text-center">
                    <span class="sc-sidebar-tutorschool-name">American College of Thessaloniki</span>
                </div>
                <div class="text-center">
                    <span class="sc-sidebar-tutorschool-type">Κολλέγιο</span>
                </div>
            </div>
        </a>
    </aside>
    <!-- Mini sidebar Large Device -->
    <aside class="sc-mini-sidebar-holder sc-dark-blue">
        <div class="sc-header-mute">
            <div class="sc-header-mute-icon">
                <div class="sc-header-mute-icon-holder">
                    <i class="fa fa-outdent" aria-hidden="true"></i>
                </div>
            </div>
        </div>
        <div class="sc-sidebar-tutorschool-card-holder">
            <div class="text-center">
                <img src="{{asset('new/img/tutorschool_logo.png')}}" class="img-circle" width="30px" height="auto">
            </div>
        </div>
    </aside>
</div>
<div class="visible-xs visible-sm">
    <!-- Small Device -->
    <aside class="sc-mini-sidebar-mobile-holder sc-dark-blue">
        <div class="sc-header-mute">
            <div class="sc-header-mute-icon">
                <div class="sc-header-mute-icon-holder">
                    <i class="fa fa-outdent" aria-hidden="true"></i>
                </div>
            </div>
        </div>
        <div class="sc-sidebar-tutorschool-card-holder">
            <div class="text-center">
                <img src="{{asset('new/img/tutorschool_logo.png')}}" class="img-circle" width="30px" height="auto">
            </div>
        </div>
    </aside>
    <aside class="sc-sidebar-mobile-holder sc-dark-blue">
        <div class="sc-header-mute">
            <div class="sc-header-mute-icon pull-right">
                <div class="sc-header-mute-icon-holder">
                    <i class="fa fa-outdent" aria-hidden="true"></i>
                </div>
            </div>
        </div>
        <div class="sc-sidebar-tutorschool-card-holder">
            <div class="text-center">
                <img src="{{asset('new/img/tutorschool_logo.png')}}" class="img-circle" width="60px" height="auto">
            </div>
        </div>
    </aside>
</div>

<!-- Scholio Main Content -->
<main class="sc-header-main-fix">
    <div class="sc-main-content-holder sc-light-grey">
        <div class="container-fluid">
            School Managment
        </div>
    </div>
</main>
</body>
</html>
