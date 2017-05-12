<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">
        <title>schol.io | Διεκδίκησε τώρα την υποτροφία που σου ταιριάζει.</title>
        <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('new/img/favicon.ico')}}" type="image/x-icon" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('new/img/favicon-144.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('new/img/favicon-72.ico')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('new/img/favicon-57.ico')}}">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Architects+Daughter" >
        {{--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Indie+Flower">--}}
        {{--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Indie+Flower" >--}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        <link href="/panel/assets/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="/new/css/error-pages.css" rel="stylesheet"/>
        {{--<link href="/panel/assets/css/core.css" rel="stylesheet" type="text/css" />--}}
        {{--<link href="/panel/assets/css/components.css" rel="stylesheet" type="text/css" />--}}
        {{--<link href="/panel/assets/css/icons.css" rel="stylesheet" type="text/css" />--}}
        {{--<link href="/panel/assets/css/pages.css" rel="stylesheet" type="text/css" />--}}
        {{--<link href="/panel/assets/css/responsive.css" rel="stylesheet" type="text/css" />--}}

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <!--<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>-->
        <!--<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>-->
        {{--<![endif]-->--}}

        {{--<script src="/panel/assets/js/modernizr.min.js"></script>--}}

    </head>
    <body style="background-color: #F1F4F5">

            <div class=" text-center" >
                <div class="content" >
                    <div class="content-box">
                        <img src="/new/img/ScholioLogoNewSm.png" height="90px" alt="">
                        <h1 class="logo-title">schol.io</h1>
                             @yield('content')
                        <a class="btn btn-primary" style="margin-top: 20px; width: 200px;" href="{{ url()->previous() }}"> Επιστροφή </a>
                    </div>
                </div>
            </div>

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="/panel/assets/js/jquery.min.js"></script>
        <script src="/panel/assets/js/bootstrap.min.js"></script>
        {{--<script src="/panel/assets/js/detect.js"></script>--}}
        {{--<script src="/panel/assets/js/fastclick.js"></script>--}}
        {{--<script src="/panel/assets/js/jquery.slimscroll.js"></script>--}}
        {{--<script src="/panel/assets/js/jquery.blockUI.js"></script>--}}
        {{--<script src="/panel/assets/js/waves.js"></script>--}}
        {{--<script src="/panel/assets/js/wow.min.js"></script>--}}
        {{--<script src="/panel/assets/js/jquery.nicescroll.js"></script>--}}
        {{--<script src="/panel/assets/js/jquery.scrollTo.min.js"></script>--}}

        {{--<script src="assets/js/jquery.core.js"></script>--}}
        {{--<script src="assets/js/jquery.app.js"></script>--}}

    </body>
</html>
