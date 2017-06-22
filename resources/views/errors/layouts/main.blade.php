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

    <style>
        .sc-btn{margin: 20px 5px 0 5px; width: 150px;}
        .margin-right-10{ margin-right: 10px; }

        .inline>a {color:#008da5; font-size: 120%; margin: 20px 15px 0 15px; font-weight: 400;}
        .inline>a:hover{color: #FD6A33; text-decoration: none}
        .thin-line{height: 1px; background-color: #008da5; margin: 30px 0 10px 0; }

        .main-fa{color: #008da5; font-size: 1300%}

    </style>
    <body style="background-color: #F1F4F5">

            <div class=" text-center" >
                <div class="content" >
                    <div class="content-box">
                        <img src="/new/img/ScholioLogoNewSm.png" height="100px" alt="">
                        <h1 class="logo-title">schol.io</h1>
                             @yield('content')

                        {{--<div class="buttons">--}}
                            {{--<a class="btn btn-primary sc-btn" href="/">--}}
                                {{--<i class="fa fa-home margin-right-10"></i> Αρχική--}}
                            {{--</a>--}}

                            {{--<a class="btn btn-primary sc-btn" href="/public/scholarships">--}}
                                {{--<i class="fa fa-trophy margin-right-10"></i> Υποτροφίες--}}
                            {{--</a>--}}

                            {{--<a class="btn btn-primary sc-btn" href="/public/schools">--}}
                                {{--<i class="fa fa-university margin-right-10"></i> Εκπ.Ιδρύματα--}}
                            {{--</a>--}}
{{--                            <a class="btn btn-primary sc-btn"  href="{{ url()->previous() }}">--}}
                            {{--<a class="btn btn-primary sc-btn"  href="javascript:history.back()">--}}
                                {{--<i class="fa fa-undo margin-right-10"></i> Επιστροφή--}}
                            {{--</a>--}}
                        {{--</div>--}}


                        <div class="inline">
                            <div class="thin-line"></div>
                            <a class="sc-btn" href="/">Αρχική</a>

                            <a class="sc-btn" href="/public/scholarships">Υποτροφίες</a>

                            <a class="sc-btn" href="/public/schools">Εκπ.Ιδρύματα</a>

                            <a class="sc-btn"  href="javascript:history.back()">Επιστροφή</a>
                        </div>

                    </div>
                </div>
            </div>

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="/panel/assets/js/jquery.min.js"></script>
        <script src="/panel/assets/js/bootstrap.min.js"></script>

    </body>
</html>
