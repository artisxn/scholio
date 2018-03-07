<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"><!-- prevent zoomIn in mobile inputs,selects,etc -->
        <meta name="description" content="Your scholarship is a click away!">
        <meta name="author" content="Schol.io">

        <link rel="shortcut icon" href="/panel/assets/images/favicon_1.ico">

        <title>schol.io | Διεκδίκησε την υποτροφία σου.</title>

        <link href="/panel/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        {{--<link href="/panel/assets/css/core.css" rel="stylesheet" type="text/css" />--}}
        {{--<link href="/panel/assets/css/components.css" rel="stylesheet" type="text/css" />--}}
        {{--<link href="/panel/assets/css/icons.css" rel="stylesheet" type="text/css" />--}}
        {{--<link href="/panel/assets/css/pages.css" rel="stylesheet" type="text/css" />--}}
        {{--<link href="/panel/assets/css/responsive.css" rel="stylesheet" type="text/css" />--}}


        <link href="/new/css/main.css" rel="stylesheet" type="text/css" />
        <link href="/new/css/register-login.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>-->
        <!--<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>-->
        <!--<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>-->
        <!--[endif]-->

        {{--<script src="/panel/assets/js/modernizr.min.js"></script>--}}

    </head>

    <style>
        /*============================================================*/
        /*  ///////////////////////////////////////////////////////  */
        /*avoid filled autocomplete input yellow background on chrome*/
        input:-webkit-autofill,
        input:-webkit-autofill:hover,
        input:-webkit-autofill:focus,
        input:-webkit-autofill:active{
            -webkit-box-shadow: 0 0 0 30px white inset!important;
            -webkit-text-fill-color: #000 !important;
        }
        /*  //////////////////////////////////////////////////////  */
        /*==========================================================*/



        input[type="email"]:focus, input[type="password"]:focus, input[type="text"]:focus,.form-control:focus, input{
            box-shadow: none;
            -webkit-box-shadow: none;
        }

        .form-control:focus {
            border-color: #008da5;
            box-shadow: none!important;
        }

        .form-container{margin-top: 40px;}
        .form-control{margin-left: auto; margin-right: auto;}

        .form-control,.btn-primary{max-width: 360px;}

        .btn-primary{border: none!important; margin-top: 30px; width: 100%}
        .btn-block, .form-group .btn{font-weight: 400!important; color: #fff}
        .btn-primary:hover {}
        .help-block{display: none;}



    </style>
    <body>



    <div class=" outer card-box col-xxs-12 col-sm-offset-1 col-sm-10 col-md-8 col-md-offset-2" style=" min-height: 490px;">
        <div class="col-sm-offset-2 col-sm-8 ">
            <div class="panel-heading">
                <div class="text-center">
                    {{--<a href="/">--}}
                        {{--<img src="/new/img/logoNX-m.png" alt="scholio logo" class="register-scholio-logo">--}}
                        <svg id="Logo-Defs" class="" baseProfile="tiny">
                            <defs>
                                <linearGradient id="MyGradient" x1="0%" y1="0%" x2="0%" y2="0%">
                                    <stop offset="5%"  stop-color="#0C496B"/>
                                    <stop offset="50%" stop-color="1B4C6B#" />
                                    <stop offset="95%" stop-color="1B4C6B"/>
                                </linearGradient>

                                <g id="Logo-Group">
                                    <path id="upperArc" d="
                                    M299.738,99.284C288.735,48.008,242.255,9.5,186.559,9.5c-55.802,0-102.33,38.663-113.218,90.084l26.32-13.286
                                    c14.774-31.458,48.106-53.416,86.898-53.416c38.651,0,71.898,21.79,86.755,53.063L299.738,99.284z"/>

                                    <g id="Hat">
                                        <path  d="
                                        M243.613,152.684c-20.961,9.995-46.574,21.084-57.054,21.084c-9.445,0-34.806-10.826-56.394-20.916
                                        c-0.005,0.607-0.024,1.209-0.02,1.818c0.132,19.097-2.693,31.021,5.127,38.722c12.268,12.082,37.776,22.055,51.811,22.055
                                        c14.355,0,42.283-10.597,52.089-19.604c7.625-7.004,4.288-22.076,4.459-41.173C243.637,154.004,243.618,153.346,243.613,152.684z

                                          M301.581,110.668c0,0-92.993-50.83-115.022-50.83c-25.144,0-114.974,50.459-114.974,50.459c-0.45,4.053-0.697,8.166-0.697,12.336
                                        c0,30.933,12.705,58.954,33.275,79.377l7.528-24.114c-12.634-15.237-20.185-33.967-20.185-54.819c0,0,78.419,43.401,95.054,43.401
                                        c7.107,0,32.138-11.096,56.533-22.783c-5.049-2.37-10.588-5.031-16.392-7.887c-22.643-11.139-40.62-20.942-40.151-21.895
                                        c0.469-0.953,19.205,7.305,41.848,18.445c6.769,3.33,13.104,6.534,18.671,9.424c25.683-12.402,34.521-17.13,34.521-17.13
                                        c0,21.85-8.253,39.848-21.997,55.413l8.296,22.995c21.199-20.507,34.342-48.963,34.342-80.429
                                        C302.23,118.591,302.004,114.601,301.581,110.668z"/>
                                    </g>

                                    <g id="Flags">
                                        <path id="flag1" class="Text" d="
                                        M141.948,386.5c-3.367,0,0.342-111.014-7.932-113.713c-6.465-2.109-52.562,70.304-56.385,68.85
                                        c-4.535-1.725,39.608-130.263,39.608-130.263s19.721,17.015,27.948,19.758c7.894,2.632,32.956,1.166,32.956,1.166
                                        S147.771,386.5,141.948,386.5z

                                        M231.739,386.5c3.367,0-0.342-111.014,7.932-113.713c6.465-2.109,52.562,70.304,56.385,68.85
                                        c4.535-1.725-39.608-130.263-39.608-130.263s-19.721,17.015-27.948,19.758c-7.894,2.632-32.956,1.166-32.956,1.166
                                        S225.916,386.5,231.739,386.5z"/>
                                    </g>
                                </g>
                            </defs>
                        </svg>

                        <svg id="Logo" class="svg-box" width="220px" height="auto" viewBox="0 0 600 400" xml:space="preserve">
                                <use id="Draw-upperArc" class="Animate-Draw" xlink:href="#upperArc" />
                            <use id="Draw-Hat" class="Animate-Draw" xlink:href="#Hat" />
                            <use id="Draw-Flags" class="Animate-Draw" xlink:href="#Flags" />
                            </svg>
                    {{--</a>--}}

                </div>
            </div>

            <div class="form-container">
                <form method="POST" action="{{ route('password.request') }}">
                    @csrf
                
                    <input type="hidden" name="token" value="{{ $token }}">
                
                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                
                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email or old('email') }}"
                                required autofocus> @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                
                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                
                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                                required> @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                
                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}"
                                name="password_confirmation" required> @if ($errors->has('password_confirmation'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Reset Password
                            </button>
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
