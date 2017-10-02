<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="/panel/assets/images/favicon_1.ico">

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
        {{--<!--[if lt IE 9]>--}}
        {{--<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>--}}
        {{--<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>--}}
        {{--<![endif]-->--}}

        {{-- <script src="/panel/assets/js/modernizr.min.js"></script> --}}


        <!-- Angular js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular.min.js"></script>

        <script src="/new/js/register-app.js"></script>
    </head>

    <style>
        .role-image{margin-left: 10px; height: 40px; margin-top: -5px; opacity: 0.7}
        .role-text{font-weight: 300; font-size: 130%; margin: 2px 0 0 10px;}
        .btn-facebook:hover, .btn-googleplus:hover { color: #fafafa!important; font-weight: 300}

    </style>

    <body ng-app="registerApp" ng-controller="registerCtrl">
        <div class="outer col-xxs-12 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6  col-lg-4 col-lg-offset-4" >
            <div class="card-box">
            <div class="panel-heading">
                <div class="text-center">
                    <a href="/">
                    {{--<img src="/new/img/logo-dark-green-144.png" alt="scholio logo" class="scholio-logo">--}}
                        <img src="/new/img/logoNX-m.png" alt="scholio logo" class="scholio-logo" width="110">
                    </a>
                </div>
            </div>

            <div class="">
                <form class="form-horizontal m-t-20 " method="POST" action="{{ url('/register') }}">
                    {{ csrf_field() }}

                    <div class="form-group m-t-20 m-b-0">
                        <div class="col-sm-12 text-center login-signUp-text">
                            <img src="/new/img/{{ session('userrole') }}.png" style="width: 100px;">
                            <div>@lang('register-step2.register')</div>
                        </div>
                    </div>

                    <div class="form-group m-b-0 text-center">
                        <div class="col-xs-12">
                            <a href="/auth/facebook/" class="btn btn-googleplus sc-t-white" style="width: 180px">Facebook</a>
                            <a href="/auth/google/" class="btn btn-facebook sc-t-white" style="width: 180px">Google</a>

                            {{-- <form action="/auth/facebook/" method="GET">
                                <button type="submit" class="btn btn-facebook sc-t-white" style="width: 180px">
                                    Facebook
                                </button>
                            </form>

                            <form action="/auth/google/" method="GET">
                                <button type="submit" class="btn btn-googleplus sc-t-white" style="width: 180px">
                                    Google+
                                </button>
                            </form> --}}

                        </div>
                    </div>

                    <div class="or">@lang('login.or')</div>

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="col-sm-3 font-weight-400">@lang('register-step2.name')</label>

                        <div class="col-sm-9">
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>


                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="last-name" class="col-sm-3 font-weight-400">@lang('register-step2.last-name')</label>

                        <div class="col-sm-9">
                            <input id="last-name" name="lastName" type="text" class="form-control" name="name" value="{{ old('name') }}" required>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>


                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-sm-3 font-weight-400">@lang('register-step2.email')</label>

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
                        <label for="password" class="col-sm-3 font-weight-400">@lang('register-step2.password')</label>

                        <div class="col-sm-9">
                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password-confirm" class="col-sm-3 font-weight-400 ">@lang('register-step2.confirm')</label>

                        <div class="col-sm-9">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox-signup" type="checkbox">
                                <label for="checkbox-signup" >@lang('register-step2.accept')<a href="#" > <span class=" orange-hover">@lang('register-step2.terms')</span></a></label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <button class="btn btn-block sc-dark-green">
                                @lang('register-step2.signup')
                            </button>
                        </div>
                    </div>

                    <input type="text" style="display: none;" name="role" value="{{ session('userrole') }}">
                </form>
            </div>
            </div>

            <div class="row">
                <div class="col-sm-12 text-center">
                    <p>
                        @lang('register-step2.account')<a href="/login" class="text-primary m-l-5" style="color: black"><b class=" orange-hover">@lang('register-step2.login')</b></a>
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
    {{--     <script src="/panel/assets/js/detect.js"></script>
        <script src="/panel/assets/js/fastclick.js"></script>
        <script src="/panel/assets/js/jquery.slimscroll.js"></script>
        <script src="/panel/assets/js/jquery.blockUI.js"></script>
        <script src="/panel/assets/js/waves.js"></script>
        <script src="/panel/assets/js/wow.min.js"></script>
        <script src="/panel/assets/js/jquery.nicescroll.js"></script>
        <script src="/panel/assets/js/jquery.scrollTo.min.js"></script> --}}


        {{--<script src="/panel/assets/js/jquery.core.js"></script>--}}
        {{--<script src="/panel/assets/js/jquery.app.js"></script>--}}
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

        <script>
            function social(){
                axios.post('/api/registration/social', {
                    role: document.getElementById('type').value,
                  })
                  .then(function (response) {
                    console.log(response.data);
                    removeErrors();
                  })
                  .catch(function (error) {
                    console.log(error);
                  });
            }

            function login(media){
                var url = '';
                var type = document.getElementById('type').value;
                if(type!= 'no'){
                    if(media == 'google'){
                        url = '/auth/google/';
                    }else{
                        url = '/auth/facebook/';
                    }
                    window.location = url;
                }else{
                    showErrors();
                }
            }

            function showErrors(){
                var form = document.getElementById('form-type');
                form.className += ' has-error';
                var span = document.getElementById('span-type');
                span.classList.remove("hidden");
            }

            function removeErrors(){
                var form = document.getElementById('form-type');
                form.classList.remove("has-error");
                var span = document.getElementById('span-type');
                span.className += ' hidden';
            }
        </script>

    </body>
</html>
