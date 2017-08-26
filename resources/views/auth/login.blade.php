<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="{{asset('new/img/favicon.ico')}}">

        <title>schol.io | Διεκδίκησε την υποτροφία σου.</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="/new/img/favicon.ico" type="image/x-icon" />

        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/new/img/favicon-144.ico">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/new/img/favicon-72.ico">
        <link rel="apple-touch-icon-precomposed" href="/new/img/favicon-57.ico">

        <link href="/panel/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="/panel/assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="/panel/assets/css/components.css" rel="stylesheet" type="text/css" />
        {{-- <link href="/panel/assets/css/icons.css" rel="stylesheet" type="text/css" /> --}}
        <link href="/panel/assets/css/pages.css" rel="stylesheet" type="text/css" />
        {{-- <link href="/panel/assets/css/responsive.css" rel="stylesheet" type="text/css" /> --}}

        {{--<link href="/new/css/Bootstrap-xxs-xxxs.css" rel="stylesheet" type="text/css" />--}}

        <link href="/new/css/main.css" rel="stylesheet" type="text/css" />
        <link href="/new/css/register-login.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <!--<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>-->
        <!--<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>-->
        {{--<![endif]-->--}}

        {{-- <script src="/panel/assets/js/modernizr.min.js"></script> --}}

    </head>


    <style>
        .login-signUp-title,.orange-hover{color: #444}
        .orange-hover:hover{color: #FD6A33}
    </style>

    <body>

        <div class="outer col-xxs-12 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6  col-lg-4 col-lg-offset-4">
            <div class="card-box">
                <div class="panel-heading text-center">
                    <div class="text-center">
                        <a href="/">
                        {{--<img src="/new/img/logo-dark-green-144.png" alt="scholio logo" class="scholio-logo">--}}
                            <img src="/new/img/logoNX-m.png" alt="scholio logo" class="scholio-logo">

                        </a>
                    </div>
                    <div class="text-center login-signUp-title"> Σύνδεση στο schol.io</div>
                </div>

                <div class="panel-body">
                    <form class="form-horizontal m-t-20" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-sm-3 pad-top-10 font-weight-400">e-mail</label>

                            <div class="col-sm-9">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-sm-3 pad-top-10 font-weight-400">Κωδικός</label>

                            <div class="col-sm-9">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group m-t-20 m-b-0">
                            <div class="col-sm-12">
                                <a href="/password/reset" class="text-muted orange-hover"><i class="fa fa-lock m-r-5"></i> Ξέχασες τον κωδικό σου;</a>
                            </div>
                        </div>

                        <div class="form-group text-center m-t-40">
                            <div class="col-xs-12">
                                <button class="btn sc-dark-green sc-t-white btn-block" type="submit">
                                    Σύνδεση
                                </button>
                            </div>
                        </div>

                        <div class="form-group m-t-20 m-b-0">
                            <div class="col-sm-12 text-center">
                                <div class="login-signUp-text">Σύνδεση μέσω</div>
                            </div>
                        </div>

                        <div class="form-group m-b-0 text-center">
                            <div class="col-xs-12">
                                <a href="{{ url('/auth/facebook') }}" type="button" class="btn btn-facebook m-t-20 col-xs-5 pad-top-8">
                                    {{--<i class="fa fa-facebook m-r-5"></i> --}}
                                    Facebook
                                </a>
                                <div class="col-xs-2"></div>
                                <a href="{{ url('/auth/google') }}" type="button" class="btn btn-googleplus m-t-20 col-xs-5 pad-top-8">
                                    {{--<i class="fa fa-google-plus m-r-5"></i> --}}
                                    Google+
                                </a>
                            </div>
                        </div>


                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 text-center">
                    <p>
                        Δεν έχεις λογαριασμό;<a href="/register/role" class="text-primary m-l-5y" style="color: black!important"
                                {{--data-toggle="modal" data-target="#signUp-modal"--}}
                        ><b class="orange-hover"> Δημιούργησε έναν Δωρεάν!</b></a>
                    </p>
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
