<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"><!-- prevent zoomIn in mobile inputs,selects,etc -->
        <meta name="description" content="Your scholarship is a click away!">
        <meta name="author" content="Schol.io">
        <meta name="description" content="Αναζήτηση υποτροφιών και εκπαιδευτικών υπηρεσιών.">
        <meta name="keywords" content="Κολλέγιο, ΙΕΚ, Σχολείο, Δημοτικό, Γυμνάσιο, Λύκειο, Πανεπιστήμιο, ΚΕΚ, ΙΙΕΚ, Σχολές, Σπουδές, Εκπαιδευτικά Ιδρύματα">

        <link rel="shortcut icon" href="/panel/assets/images/favicon_1.ico">

        <title>schol.io | Διεκδίκησε την υποτροφία σου.</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="/new/img/favicon.ico" type="image/x-icon" />

        <link href="/panel/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="/new/css/main.css" rel="stylesheet" type="text/css" />
        <link href="/new/css/register-login.css" rel="stylesheet" type="text/css" />

        <!-- jQuery  -->
        <script src="/panel/assets/js/jquery.min.js"></script>
        <script src="/panel/assets/js/bootstrap.min.js"></script>


        <script src="/panel/assets/js/modernizr.min.js"></script>

        <script>
            $(document).ready(function(){
//                $('#full').fadeIn(3000).removeClass(hidden);
            });
        </script>


    </head>

    <style>
        .alert-info {
            color: #324c5a;
            background-color: rgba(208, 233, 242, 0.24) !important;
            border-color: #ccc;
        }

       input[type="text"]:focus, input:focus {
            border-color: #0098af !important;
            box-shadow: none;
            -webkit-box-shadow: none;
            outline: -webkit-focus-ring-color auto 5px;
        }

        .btn-primary{border: none!important; }
        .btn-block, .form-group .btn{font-weight: 400!important; color: #fff}
        .btn-primary:hover {}
        .help-block{display: none;}



    </style>




    <body>



            <div class=" outer card-box col-xxs-12 col-sm-offset-1 col-sm-10 col-md-8 col-md-offset-2" style=" min-height: 490px;">
                <div class="col-sm-offset-2 col-sm-8 ">
                    <div class="panel-heading">
                        <div class="text-center">
                            <a href="/">
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

                            </a>

                        </div>
                    </div>

                    <div class="">


                            <div class="form-group  m-b-0">
                                <div class="col-sm-12 text-center">
                                    <div class=" login-signUp-text" style="margin-bottom: 10px">Reset Password</div>
                                </div>
                            </div>


                        <div class="panel-body">

                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form class="text-center" role="form" method="POST" action="{{ url('/password/email') }}">
                                {{ csrf_field() }}

                                <div class="alert-dismissable alert alert-info" style="margin-bottom: 40px">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                        ×
                                    </button>
                                    Enter your <b>Email</b> and instructions will be sent to you!
                                </div>
                                <div class="form-group  m-b-0{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <div class="input-group">
                                        <input id="email" type="email" name="email" class="form-control" placeholder="Enter Email" required="" value="{{ old('email') }}" style="height: 40px;">
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                        <span class="input-group-btn">
                                    <button type="submit" class="btn btn-primary">
                                        Send Password Reset Link
                                    </button>
                                </span>
                                    </div>
                                </div>
                            </form>
                        </div>




                    </div>
                </div>


            </div>





            <script>
            var resizefunc = [];
        </script>



    </body>

</html>
