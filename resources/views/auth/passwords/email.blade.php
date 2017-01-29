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
                    <h3 class="text-center"> Reset Password </h3>
                </div>

                <div class="panel-body">

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <form class="text-center" role="form" method="POST" action="{{ url('/password/email') }}">
                        {{ csrf_field() }}



                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                ×
                            </button>
                            Enter your <b>Email</b> and instructions will be sent to you!
                        </div>
                        <div class="form-group m-b-0{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="input-group">
                                <input id="email" type="email" name="email" class="form-control" placeholder="Enter Email" required="" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-pink w-sm waves-effect waves-light">
                                        Send Password Reset Link
                                    </button>
                                </span>
                            </div>
                        </div>
                    </form>
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

    </body>
</html>
