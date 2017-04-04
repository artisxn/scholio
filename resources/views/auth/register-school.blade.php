<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <title>schol.io | Διεκδίκησε την υποτροφία σου.</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="/new/img/favicon.ico" type="image/x-icon" />

        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/new/img/favicon-144.ico">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/new/img/favicon-72.ico">
        <link rel="apple-touch-icon-precomposed" href="/new/img/favicon-57.ico">
        <link href="/panel/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="/panel/assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="/panel/assets/css/components.css" rel="stylesheet" type="text/css" />
        {{--<link href="/panel/assets/css/icons.css" rel="stylesheet" type="text/css" />--}}
        <link href="/panel/assets/css/pages.css" rel="stylesheet" type="text/css" />
        {{--<link href="/panel/assets/css/responsive.css" rel="stylesheet" type="text/css" />--}}

        <link href="/new/css/main.css" rel="stylesheet" type="text/css" />
        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        {{--<!--[if lt IE 9]>--}}
        {{--<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>--}}
        {{--<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>--}}
        {{--<![endif]-->--}}

        {{--<script src="/panel/assets/js/modernizr.min.js"></script>--}}

    </head>
    <body>

        <div class="account-pages"></div>
        <div class="clearfix"></div>

        <div class="wrapper-page" style="padding: 0">
            <div class="card-box">
                <div class="panel-heading text-center">
                    <a href="/">
                        <img src="/new/img/logo-dark-green-144.png" alt="" style="width: 90px;">
                    </a>
                    <div class="text-center font-weight-300 login-signUp-title">Εγγραφη Εκπαιδευτικού Ιδρύματος στο Schol.io</div>
                </div>

                <div class="panel-body">
                    <form class="form-horizontal m-t-20" method="POST" action="{{ url('/register') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ session()->put('registration', 'school') }}

                    <div class="form-group">
                        <label for="type" class="col-sm-4 font-weight-400">Τύπος Εκπαιδευτικού Ιδρύματος</label>

                        <div class="col-sm-8">
                            <select id="type" name="type" class="form-control" >
                                @foreach($schoolTypes as $type)
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-sm-4 font-weight-400">Όνομα Ιδρύματος</label>

                            <div class="col-sm-8">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-sm-4 font-weight-400">e-mail Ιδρύματος</label>

                            <div class="col-sm-8">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-sm-4 font-weight-400">Κωδικός</label>

                            <div class="col-sm-8">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-sm-4 font-weight-400">Επιβεβαίωση Κωδικού</label>

                            <div class="col-sm-8">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group text-center m-t-40">
                            <div class="col-xs-12">
                                <button class="btn btn-block sc-t-white sc-dark-green" type="submit">
                                    Εγγραφή
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 text-center">
                    <p>
                        Έχετε ήδη λογαριασμό;<a href="" class="text-primary m-l-5 a-text"><b>Συνδεθείτε</b></a>
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
        {{--<script src="/panel/assets/js/detect.js"></script>--}}
        {{--<script src="/panel/assets/js/fastclick.js"></script>--}}
        {{--<script src="/panel/assets/js/jquery.slimscroll.js"></script>--}}
        {{--<script src="/panel/assets/js/jquery.blockUI.js"></script>--}}
        {{--<script src="/panel/assets/js/waves.js"></script>--}}
        {{--<script src="/panel/assets/js/wow.min.js"></script>--}}
        {{--<script src="/panel/assets/js/jquery.nicescroll.js"></script>--}}
        {{--<script src="/panel/assets/js/jquery.scrollTo.min.js"></script>--}}


        {{--<script src="/panel/assets/js/jquery.core.js"></script>--}}
        {{--<script src="/panel/assets/js/jquery.app.js"></script>--}}

    </body>
</html>
