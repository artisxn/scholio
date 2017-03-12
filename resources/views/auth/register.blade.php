<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="/panel/assets/images/favicon_1.ico">

        <title>Schol.io</title>

        <link href="/panel/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="/panel/assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="/panel/assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="/panel/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="/panel/assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="/panel/assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="/panel/assets/js/modernizr.min.js"></script>

    </head>
    <body>

        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
            <div class=" card-box">
                <div class="panel-heading">
                    <h3 class="text-center"> Sign Up to <strong class="text-custom">Schol.io</strong> </h3>
                </div>

                <div class="panel-body">
                    <form class="form-horizontal m-t-20" method="POST" action="{{ url('/register') }}">
                    {{ csrf_field() }}

                        <div id="form-type" class="form-group">
                            <label for="type" class="col-md-4 control-label">Type</label>

                            <div class="col-md-8">
                                <select id="type" type="password" class="form-control" name="type" onchange="social()">
                                <option value="no" selected>Επέλεξε Ιδιότητα</option>
                                  <option value="student">Student</option>
                                  <option value="parent">Parent</option>
                                  <option value="teacher">Teacher</option>
                                </select>
                            </div>

                            <span id="span-type" class="help-block hidden">
                                <strong>Πρέπει να επιλέξετε ιδιότητα</strong>
                            </span>
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-8">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox-signup" type="checkbox">
                                    <label for="checkbox-signup">I accept <a href="#">Terms and Conditions</a></label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group text-center m-t-40">
                            <div class="col-xs-12">
                                <button class="btn btn-pink btn-block text-uppercase waves-effect waves-light" type="submit">
                                    Register
                                </button>
                            </div>
                        </div>

                        <div class="form-group m-t-20 m-b-0">
                            <div class="col-sm-12 text-center">
                                <h4><b>Sign Up with</b></h4>
                            </div>
                        </div>

                        <div class="form-group m-b-0 text-center">
                            <div class="col-sm-12">
                                <button type="button" onclick="login('facebook')" class="btn btn-facebook waves-effect waves-light m-t-20">
                                   <i class="fa fa-facebook m-r-5"></i> Facebook
                                </button>

                                <button type="button" onclick="login('google')" class="btn btn-googleplus waves-effect waves-light m-t-20">
                                   <i class="fa fa-google-plus m-r-5"></i> Google+
                                </button>
                            </div>
                        </div>


                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 text-center">
                    <p>
                        Already have account?<a href="page-login.html" class="text-primary m-l-5"><b>Sign In</b></a>
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
        <script src="/panel/assets/js/detect.js"></script>
        <script src="/panel/assets/js/fastclick.js"></script>
        <script src="/panel/assets/js/jquery.slimscroll.js"></script>
        <script src="/panel/assets/js/jquery.blockUI.js"></script>
        <script src="/panel/assets/js/waves.js"></script>
        <script src="/panel/assets/js/wow.min.js"></script>
        <script src="/panel/assets/js/jquery.nicescroll.js"></script>
        <script src="/panel/assets/js/jquery.scrollTo.min.js"></script>


        <script src="/panel/assets/js/jquery.core.js"></script>
        <script src="/panel/assets/js/jquery.app.js"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

        <script>
            function social(){
                axios.post('/api/registration/social', {
                    type: document.getElementById('type').value,
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
                    {{session()->flush()}}
                    if(type=='student'){
                            console.log('student');
                            {{session()->put('role', 'student')}}
                        }
                        if(type=='teacher'){
                            console.log('teacher');
                            {{session()->put('role', 'teacher')}}
                        }
                        if(type=='parent'){
                            console.log('parent');
                            {{session()->put('role', 'parent')}}
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
