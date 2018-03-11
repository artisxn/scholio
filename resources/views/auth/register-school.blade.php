<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">


        <title>schol.io | School Registration</title>

        <!--====== CSS  Styles =======-->
        @include('public.styles')

        <link href="/panel/assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="/panel/assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="/panel/assets/css/pages.css" rel="stylesheet" type="text/css" />



        <style>
            .wrapper-page{width: 600px;}

            @media(max-width: 640px){
                .wrapper-page{width: 95%;}
            }

        </style>

    </head>
    <body>

        <div class="account-pages"></div>
        <div class="clearfix"></div>

        <div class="wrapper-page" style="padding: 0">
            <div class="card-box">
                <div class="panel-heading text-center">
                    <a href="/">
                        <img src="/new/img/logoNXsquareBDG.png" alt="" style="width: 90px;">
                    </a>
                    <div class="text-center font-weight-300 login-signUp-title">@lang('register-step2.school.title')</div>
                </div>

                <div class="panel-body">
                    <form class="form-horizontal m-t-20" method="POST" action="{{ url('/register') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ session()->put('registration', 'school') }}

                    <div class="form-group">
                        <label for="type" class="col-sm-4 font-weight-400">@lang('register-step2.school.type')</label>

                        <div class="col-sm-8">
                            <select id="type" name="type" class="form-control" >
                                @foreach($schoolTypes as $type)
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-sm-4 font-weight-400">@lang('register-step2.school.name')</label>

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
                            <label for="email" class="col-sm-4 font-weight-400">@lang('register-step2.school.email')</label>

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
                            <label for="password" class="col-sm-4 font-weight-400">@lang('register-step2.password')</label>

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
                            <label for="password-confirm" class="col-sm-4 font-weight-400">@lang('register-step2.confirm')</label>

                            <div class="col-sm-8">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group text-center m-t-40">
                            <div class="col-xs-12">
                                <button class="btn btn-block sc-t-white sc-dark-green" type="submit">
                                    @lang('register-step2.signup')
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 text-center">
                    <p>
                        @lang('register-step2.school.account')<a href="/login" class="text-primary m-l-5 a-text"><b>@lang('register-step2.school.login')</b></a>
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
