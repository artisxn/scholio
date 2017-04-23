<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>schol.io | Διεκδίκησε τώρα την υποτροφία που σου ταιριάζει.</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/new/img/favicon.ico" type="image/x-icon" />

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/new/img/favicon-144.ico">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/new/img/favicon-72.ico">
    <link rel="apple-touch-icon-precomposed" href="/new/img/favicon-57.ico">

    <!--====== CSS  Styles =======-->
    @include('public.styles')


    <!-- Profile  CSS -->
    <link rel="stylesheet" href="/new/css/scholarship-profile.css" >

    <!-- Polymer Float Form CSS -->
    <link rel="stylesheet" href="/new/css/jquery.polymer-form.min.css" >

    <!-- jQuery DatePicker Themes CSS -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!-- Bootstrap Select CSS -->
    {{--<link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js">--}}

    <!-- Scholio Datepicker  CSS -->
    <link rel="stylesheet" href="/new/css/scholio-datepicker.css" >


    <!-- Horizontal Ribbons  CSS -->
    {{--<link href="/new/css/ribbonHorizontal.css" rel="stylesheet">--}}

    <!-- Horizontal Ribbons  CSS -->
    {{--<link href="/new/css/Hexagon.css" rel="stylesheet">--}}

            <!-- jQuery js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/locales/bootstrap-datepicker.el.min.js"></script>--}}

    <!-- Bootstrap js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Bootstrap Select js-->
    {{--<script src=" https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>--}}


    <!-- Angular js-->
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.8/angular.min.js"></script>--}}

    <!-- Polymer Float Input Form js -->
    <script src="/new/js/jquery.polymer-form.min.js"></script>

    <!-- jQuery UI for datePicker -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>



    <script>
        window.Scholio = <?php echo json_encode([
    'csrfToken' => csrf_token(),
]); ?>
    </script>

    <style>
        .trophy-img{height: 45px; margin-top: 5px}
        .upper-box{background-color: #008DA5; height: 320px; border-radius: 4px; border-bottom-left-radius: 0; border-bottom-right-radius: 0}
        .upper-title{ margin-top: -20px; margin-left: 60px;}

        .title-to{ font-size: 140%; color: #fafafa; font-weight: 300; padding: 200px 0 0 70px;}
        /*.inner-box{ background-color: #F1F4F5; border: 1px solid #ddd; border-radius: 26px; height: 500px; margin-top: 15px;*/
        /*box-shadow: -5px 0  4px #fff, 0 -5px  4px #fff, 5px 0 4px #fff;*/
        /*border-bottom-left-radius:17px; border-bottom-right-radius:17px;*/
        /*}*/

       .inner-box{ background-color: #fff; padding: 0 70px 70px 70px; margin-bottom: 50px;}

       .inner-section{ margin: 80px 0 0 0; padding: 5px; border: 1px solid #aaa; border-radius: 8px; background-color: #F1F4F5;
       }

       .demo-form{ margin: 0!important; font-weight: 300!important;}
       .polymer-form label {color: #008DA5!important; font-size:110%!important; font-weight: 300!important; display: block!important; padding-bottom: -40px!important; margin-left: 11px; }
       .ad-input{font-size: 100%!important; padding-left: 25px!important;}
       .icon-inp{position: absolute; top: 33px; color: #008DA5}
       .icon-title{margin-right: 10px;}
       .section-text{color: #888; font-size: 110%; font-weight: 300; margin-left: 10px; margin-top: -25px;
           border: 1px solid #aaa; border-radius: 6px; padding: 7px; min-width: 190px; max-width: 250px; background-color: #fafafa;
           box-shadow: 0 0 9px #aaa}

       .avatar-container{margin-top: 15px; margin-right: 0; padding-right: 0; }
       .avatar{height: 43px; width: auto;  margin-top: -2px}
       .col-left{padding-left: 0}
       .col-right{padding-right: 0}


        /*  ========= TextArea Input Css    ========= */
        .notes {
            resize: none;
            background-image:
            -webkit-linear-gradient(left, #F1F4F5 10px, transparent 10px),
            -webkit-linear-gradient(right, #F1F4F5 10px, transparent 10px),
            -webkit-linear-gradient(#F1F4F5 30px, #bbb 30px, #bbb 31px, #F1F4F5 31px);
            /*background-image: linear-gradient(left, white 10px, transparent 10px), linear-gradient(right, white 10px, transparent 10px), linear-gradient(white 30px, #ccc 30px, #ccc 31px, white 31px);*/
            background-size: 100% 100%, 100% 100%, 100% 31px;
            /*border: 1px solid #ccc;*/
            /*border-radius: 8px;*/
            border: none;
            /*box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);*/
            line-height: 31px;
            padding: 8px;
            width: 100%;
            /*max-width: 100%;*/
            min-height: 240px;
            max-height: 100%;
            /*max-height: 210px;*/
            margin-top: 30px;

        }

        .notes:focus {
            outline: none;
        }
        /*  ======================================= */

        .info-text{ margin: 20px 0 0 15px;  color: #888; font-weight: 400; }

        ::-webkit-input-placeholder { /* WebKit, Blink, Edge */
            font-weight: 300;
        }
        :-moz-placeholder { /* Mozilla Firefox 4 to 18 */
            opacity:  1;
        }
        ::-moz-placeholder { /* Mozilla Firefox 19+ */
            opacity:  1;
        }
        :-ms-input-placeholder { /* Internet Explorer 10-11 */

        }


        .euro{position: absolute; margin-left: 150px; top: 30px; font-weight: 300; color: #bbb}


        .send-button{ width: 210px; }
        .send-button .sc-button { margin-top: 20px; width: 100%;}
        select {
            /*text-shadow: 0 0 0 #000;*/
            /*color: #008DA5!important;*/
            color: #000;
            font-weight: 300;
            border:0;
            width: 60px; height: 27px;
            background-color: #F1F4F5;
        }
        .select-polyteknos{position: absolute; top: 27px;  left: 40px;}
        /*  ======================================= */

        @media (min-width:992px) and (max-width: 1200px) {
            .cont1{padding-left: 20px;}
        }

        @media (min-width: 768px) and (max-width: 991px) {
            .col-left, .col-right{padding: 0}
            .cont1{padding-left: 28px;}
        }

       @media  (max-width: 767px) {
           .upper-title{margin-top: -50px}
           .icon-inp{top: 5px;}
           .icon-inp1{top: 35px}
           .input-container{margin-bottom: 40px; margin-top: 10px;}
           /*.outer{ padding: 15px;}*/
           .inner-box{ padding: 0 15px 15px 15px;}
           .col-left, .col-right{padding: 0}
           .avatar{height: 51px;}
           .avatar-container{width: 12%; float: left;}
           .cont1{width: 88%; float: left; margin-bottom: 20px;}
           .clear-fix-sm{clear: both; }
           .select-polyteknos{ top: 0;  left: 36px;}

       }
       @media  (max-width: 600px) {
           .icon-inp{top: 5px;}
           .icon-inp1 {top: 33px }
           /*.outer{ padding: 5px;}*/
           .inner-box{ padding: 0 5px 8px 5px; }
           .title-to{  padding: 200px 0 0 15px;}
           .avatar-container{width: 10%; }
           .cont1{margin-left: 6%; width: 84%; }
       }


        @media  (max-width:480px) {
        .sch-name{display: block}
        }

        @media  (max-width: 390px) {
            .upper-box{height: 240px; }
            .title-to{margin-left: -20px}
            .trophy-container{text-align:center;
                margin-left: auto;
                margin-right: auto;
                float: none;}
            .trophy-img{width: 90px; height: auto;  margin-top: -160px;  }
            .upper-title{font-size: 80%; clear: both; display: block; margin-left: auto; margin-right: auto}
            .avatar{height: 50px; margin-top: 1px;}
            .avatar-container{width: 8%; }
            .cont1{margin-left: 13%; width: 79%; }
            .select-polyteknos{ top: 0;  left: 35px;}
            select{
                color: #000;
                font-weight: 300;
                height: 28px;
                padding: 0;
            }
        }


   </style>
</head>
<body data-spy="scroll" data-target=".spy" data-offset="270" id="home">
<!-- Scholio Header -->

<header class="spy navbar navbar-fixed-top navbar-scroll sc-landing-header" id="header" style="z-index: 2">
    <div class="container" style="">
        <div class="row">

            <div class="col-md-1 visible-lg visible-md nav-web">
                <!-- Scholio Branding -->
                <a class="sc-landing-brand" href="{{ url('/') }}">
                    <div class="sc-landing-logo-sticky" style=" padding-top: 15px">
                        <img src="/new/img/logo.png" alt="scholio logo">
                    </div>
                </a>
            </div>

            <div class="col-xs-6  visible-sm visible-xs">
                <div class="nav-mobile">
                    <a class="" href="{{ url('/') }}">
                        <div class="navbar-brand  sc-landing-logo-sticky">
                            <img src="/new/img/logo-m.png" alt="scholio logo">
                        </div>
                    </a>
                </div>
            </div>
            <!-- Scholio sMenu -->

            <!-- Large Menu -->
            <div class="col-md-11 visible-md visible-lg" >
                <ul class="nav navbar-nav navbar-right sc-landing-menu" >
                    @if(auth()->check())
                        <li><a href="{{ url('/dashboard') }}"><button type="button" class="sc-button-landing sc-button sc-green sc-t-white">Διαχείριση</button></a></li>
                        <li><a href="{{ url('/out') }}"><button type="button" class="sc-button-landing sc-button sc-dark-blue sc-t-white ">Αποσύνδεση</button></a></li>
                    @else
                        <li><a href=""><button type="button" class="sc-button-landing sc-button sc-green sc-t-white" data-toggle="modal" data-target="#select-modal">Εγγραφή</button></a></li>
                        <li><a href=""><button type="button" class="sc-button-landing sc-button sc-dark-blue sc-t-white " data-toggle="modal" data-target="#signIn-modal">Σύνδεση</button></a></li>
                    @endif
                </ul>
            </div>

            <!-- Mobile Menu -->
            <div class="col-xs-6 visible-sm visible-xs ">
                <div class="">
                    <div class="sc-landing-menu-mobile-sandwitch nav navbar-nav navbar-right pull-right">
                        <div class="sc-landing-menu-sandwitch-button-sticky sc-landing-menu-sandwitch">
                            <img src="/new/img/collapse-dark.png" alt="scholio logo">
                        </div>
                    </div>
                </div>
                <div class="visible-xs visible-sm">
                    <div class="sc-landing-menu-mobile-holder sc-dark-blue">
                        <div class="pull-right">
                            <div class="sc-landing-menu-mobile-close sc-t-white">x</div>
                        </div>
                        <br><br>
                        <div class="pull-right">
                            <div class=""><br></div>
                            <div class="sign-links">
                                @if(auth()->check())
                                    <div class=""><br></div>
                                    <a href="{{ url('/dashboard') }}"><button type="button" class="sc-button sc-orange sc-t-white pull-right">Διαχείριση</button></a>
                                    <div><br><br><br></div>
                                    <a href="{{ url('/out') }}"><button type="button" class="sc-button sc-green sc-t-white pull-right">Αποσύνδεση</button></a>
                                @else
                                    <div class=""><br></div>
                                    <a href="{{ url('/register') }}"><button type="button" class="sc-button sc-orange sc-t-white pull-right">Εγγραφή</button></a>
                                    <div class=""><br><br><br></div>
                                    <a href="{{ url('/login') }}"><button type="button" class="sc-button  sc-green sc-t-white pull-right">Σύνδεση</button></a>
                                @endif
                            </div>>
                        </div>
                    </div>
                </div>
            </div>
        </div>  <!-- row -->
    </div><!-- container-->
</header>



<div class="container">

    <div>
        <div class="upper-box " >
            <div class="title-to">
                <div class="trophy-container"> <img src="/new/img/trophy-fff.png" class="trophy-img" alt="">
                <div class="upper-title">Αίτηση υποτροφίας <span class="hidden-xxxs">προς</span> <span class="sch-name">{{ $scholarship->school->name() }}</span> </div>
                </div>
            </div>
        </div>

        <div class="col-xs-12 inner-box row" style="margin-left: 0">
                    <div class="inner-section row">
                        <div class="section-text centered-text"> Στοιχεία Υποψηφίου</div>

                        <div class="col-sm-6">
                            <div class="col-sm-1 avatar-container pad-0 ">
                                <img src="{{ $user->info->avatar }}" class="avatar">
                            </div>

                            <div class="col-sm-11 input-container  pad-0 pad-left-10 cont1">
                                <input  type="text" label="Όνομα Σπουδαστή" name="firstName" class="demo-form ad-input" value="{{ $user->name }}">
                                <i class="icon-inp icon-inp1 fa fa-user-o"></i>
                            </div>
                        </div>
                        <div class="col-sm-6 input-container clear-fix-sm" >
                            <input type="text" label="Επώνυμο Σπουδαστή" name="lastName" class="demo-form ad-input" >
                            <i class="icon-inp fa fa-user"></i>
                        </div>

                        <div class="col-sm-6 input-container">
                            <input type="text" label="Διεύθυνση" name="address" class="demo-form ad-input" value="{{ $user->info->address }}">
                            <i class="icon-inp fa fa-street-view"></i>
                        </div>
                        <div class="col-sm-6 input-container">
                            <input type="text" label="Πόλη/Περιοχή" name="city" class="demo-form ad-input">
                            <i class="icon-inp fa fa-map-marker"></i>
                        </div>

                        <div class="col-sm-6 input-container">
                            <input type="text" label="Ηλεκτρονικό Tαχυδρομείο/ e-mail" name="email" class="demo-form ad-input" value="{{ $user->email}}">
                            <i class="icon-inp fa fa-envelope"></i>
                        </div>
                        <div class="col-sm-6 input-container">
                        {{--<a href="tel:{{ $user->info->phone }}">--}}
                            <input type="text" label="Τηλέφωνο" name="phone" class="demo-form ad-input" value="{{ $user->info->phone }}">
                            {{--</a>--}}
                            <i class="icon-inp fa fa-phone"></i>
                        </div>

                        <div class="col-sm-6 input-container">
                            <input type="text" label="Αριθμός Δελτίου Ταυτότητας" name="id_number" class="demo-form ad-input" value="{{ $user->cv->id_number }}">
                            <i class="icon-inp fa fa-id-card-o"></i>
                        </div>
                        <div class="col-sm-6 input-container">
                            <input type="text" label="Ταχυδρομικός Κώδικας" name="post_code" class="demo-form ad-input" value="{{ $user->cv->post_code}}">
                            <i class="icon-inp fa fa-envelope-o"></i>
                        </div>

                        <div class="col-sm-6 input-container">
                            <input type="text" label="Εθνικότητα" name="nationality" class="demo-form ad-input" value="{{ $user->cv->nationality }}">
                            <i class="icon-inp fa fa-flag"></i>
                        </div>
                        <div class="col-sm-6 input-container">
                            <input type="text" label="Θρήσκευμα" name="religion" class="demo-form ad-input" value="{{ $user->cv->religion }}">
                            <i class="icon-inp fa fa-globe"></i>
                        </div>

                        <div class="col-sm-6 input-container">
                            <input type="text" label="Μέλος Πολύτεκνης Οικογένειας" name="polyteknos" class="demo-form ad-input"
                                   value="{{ $user->cv->polyteknos }}"
                            >
                            <div class="select-polyteknos">
                                <select>
                                    <option>Ναι</option>
                                    <option>Όχι</option>
                                </select>
                            </div>

                            <i class="icon-inp fa fa-users"></i>
                        </div>
                        <div class="col-sm-6 input-container">
                            <input type="text" label="Πόσα μέλη της οικογένειας σου φοιτούν στο Εκπαιδευτικό Ίδρυμα" name="student_relatives" class="demo-form ad-input"
                                   value="{{ $user->cv->polyteknos }}"
                            >
                            <div class="select-polyteknos">
                                <select>
                                    <option>0</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>

                            <i class="icon-inp fa fa-users"></i>
                        </div>

                        <div class="col-sm-6 input-container">
                        {{-- value="{{ \Carbon\Carbon::parse($user->info->dob)->format('d/m/Y')  }}" --}}
                            <input type="text" label="Ημερομηνία Γέννησης" name="dateOfBirth" class="demo-form ad-input ll-skin-cangas"
                                   id="datepicker"   size="30"  value="{{ \Carbon\Carbon::parse($user->info->dob)->format('d/m/Y')  }}" onchange=""
                            >
                            <i class="icon-inp fa fa-calendar"></i>
                        </div>
                        <div class="col-sm-6 input-container">
                            <input type="text" label="Τόπος Γέννησης" name="place_of_birth" class="demo-form ad-input" value="{{ $user->cv->place_of_birth }}">
                            <i class="icon-inp fa fa-map-marker"></i>
                        </div>


                    </div>

                    <div class="inner-section row">
                        <div class="section-text centered-text"> Στοιχεία Γονέων-Κηδεμόνων</div>
                        <div class="col-sm-6 input-container">
                            <input  type="text" label="Όνοματεπώνυμο Μητέρας" name="mother_name" class="demo-form ad-input" value="{{ $user->cv->mother_name }}">
                            <i class="icon-inp fa fa-user-o"></i>
                        </div>
                        <div class="col-sm-6 input-container">
                            <input  type="text" label="Όνοματεπώνυμο Πατέρα" name="father_name" class="demo-form ad-input" value="{{ $user->cv->father_name }}">
                            <i class="icon-inp fa fa-user-o"></i>
                        </div>

                        <div class="col-sm-6 input-container">
                            <input type="text" label="Τηλέφωνο Μητέρας" name="mother_phone" class="demo-form ad-input" value="{{ $user->cv->mother_phone }}">
                            <i class="icon-inp fa fa-phone"></i>
                        </div>
                        <div class="col-sm-6 input-container">
                            <input type="text" label="Τηλέφωνο Πατέρα" name="father_phone" class="demo-form ad-input" value="{{ $user->cv->father_phone }}">
                            <i class="icon-inp fa fa-phone"></i>
                        </div>


                        <div class="col-sm-6 input-container">
                            <input type="text" label="e-mail Μητέρας" name="mother_email" class="demo-form ad-input" value="{{ $user->cv->mother_email }}">
                            <i class="icon-inp fa fa-envelope"></i>
                        </div>
                        <div class="col-sm-6 input-container">
                            <input type="text" label="e-mail Πατέρα" name="father_email" class="demo-form ad-input" value="{{ $user->cv->father_email }}">
                            <i class="icon-inp fa fa-envelope"></i>
                        </div>

                        <div class="col-sm-6 input-container">
                            <input type="text" label="Διεύθυνση, Πόλη Μητέρας" name="mother_city" class="demo-form ad-input" value="{{ $user->cv->mother_city}}">
                            <i class="icon-inp fa fa-street-view"></i>
                        </div>
                        <div class="col-sm-6 input-container">
                            <input type="text" label="Διεύθυνση, Πόλη Πατέρα" name="father_city" class="demo-form ad-input" value="{{ $user->cv->father_city }}">
                            <i class="icon-inp fa fa-street-view"></i>
                        </div>

                        <div class="col-sm-6 input-container">
                            <input type="text" label="Ταχυδρομικός Κώδικας Μητέρας" name="mother_post_code" class="demo-form ad-input" value="{{ $user->cv->mother_post_code}}">
                            <i class="icon-inp fa fa-envelope-o"></i>
                        </div>
                        <div class="col-sm-6 input-container">
                            <input type="text" label="Ταχυδρομικός Κώδικας Πατέρα" name="father_post_code" class="demo-form ad-input" value="{{ $user->cv->father_post_code}}">
                            <i class="icon-inp fa fa-envelope-o"></i>
                        </div>

                        <div class="col-sm-6 input-container">
                            <input type="text" label="Επάγγελμα/Θέση Εγασίας Μητέρας" name="mother_job" class="demo-form ad-input" value="{{ $user->cv->mother_job}}">
                            <i class="icon-inp fa fa-briefcase"></i>
                        </div>
                        <div class="col-sm-6 input-container">
                            <input type="text" label="Επάγγελμα/Θέση Εγασίας Πατέρα" name="father_job" class="demo-form ad-input" value="{{ $user->cv->father_job}}">
                            <i class="icon-inp fa fa-briefcase"></i>
                        </div>

                        <div class="col-sm-6 input-container">
                            <input type="text" label="Εργοδότης/Εταιρεία Μητέρας" name="mother_company" class="demo-form ad-input" value="{{ $user->cv->mother_company}}">
                            <i class="icon-inp fa fa-building"></i>
                        </div>
                        <div class="col-sm-6 input-container">
                            <input type="text" label="Εργοδότης/Εταιρεία Πατέρα" name="father_company" class="demo-form ad-input" value="{{ $user->cv->father_company}}">
                            <i class="icon-inp fa fa-building"></i>
                        </div>

                        <div class="col-sm-6 input-container">
                            <input type="text" label="Αριθμ. Φορολ. Μητρώου Μητέρας" name="mother_vat" class="demo-form ad-input" value="{{ $user->cv->mother_vat}}">
                            <i class="icon-inp fa fa-file-text-o"></i>
                        </div>
                        <div class="col-sm-6 input-container">
                            <input type="text" label="Αριθμ. Φορολ. Μητρώου Πατέρα" name="father_vat" class="demo-form ad-input" value="{{ $user->cv->father_vat}}">
                            <i class="icon-inp fa fa-file-text-o"></i>
                        </div>

                        <div class="col-sm-6 input-container">
                            <input type="text" label="Εισόδημα Μητέρας προηγούμενου Έτους" name="mother_income" class="demo-form ad-input" value="{{ $user->cv->mother_income}}">
                            <i class="icon-inp fa fa-money"></i>
                            {{--<div class="euro">€</div>--}}
                        </div>
                        <div class="col-sm-6 input-container">
                            <input type="text" label="Εισόδημα Πατέρα προηγούμενου Έτους" name="father_income" class="demo-form ad-input" value="{{ $user->cv->father_income}}">
                            <i class="icon-inp fa fa-money"></i>
                        </div>

                        <div class="col-sm-6 input-container">
                            <input type="text" label="Αριθμός Δελτίου Ταυτότητας Μητέρας" name="mother_id_number" class="demo-form ad-input" value="{{ $user->cv->mother_id_number }}">
                            <i class="icon-inp fa fa-id-card-o"></i>
                        </div>
                        <div class="col-sm-6 input-container">
                            <input type="text" label="Αριθμός Δελτίου Ταυτότητας Πατέρα" name="mother_id_number" class="demo-form ad-input" value="{{ $user->cv->father_id_number }}">
                            <i class="icon-inp fa fa-id-card-o"></i>
                        </div>

                    </div>

                    <div class="col-md-6 col-left">
                        <div class="inner-section " >
                            <div class="section-text centered-text">   <i class="icon-title fa fa-wrench"></i> Ικανότητες - Δεξιότητες</div>
                            <div class="input-container">
                                <textarea class="notes">{{ $user->cv->skils }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-right">
                        <div class="inner-section">
                            <div class="section-text centered-text">  <i class="icon-title fa fa-flag"></i> Ξένες Γλώσσες</div>
                            <div class=" input-container">
                                <textarea class="notes" placeholder="Αγγλικά - Β1&#13;&#10;Γερμανικά - C2"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-left">
                    <div class="inner-section" >
                            <div class="section-text centered-text">   <i class="icon-title fa fa-id-badge"></i> Σημεία Υπεροχής</div>
                            <div class=" input-container">
                                <div class="info-text"> Γράψε μας γιατί θεωρείς τον εαυτό σου κατάλληλο/κατάλληλη για την συγκεκριμένη υποτροφία.</div>
                                 <textarea class="notes" placeholder="1. Είμαι Επίμονος&#13;&#10; 2. Εργάζομαι με μέθοδο & πρόγραμμα &#13;&#10; 3. Μου αρέσει συνεχώς να βελτιώνομαι και να αποκτώ νέες δεξιότητες
                            "></textarea>
                            </div>
                    </div>
                    </div>
                    <div class="col-md-6 col-right">
                    <div class="inner-section" >
                        <div class="section-text centered-text">   <i class="icon-title fa fa-graduation-cap"></i> Προηγούμενες Σπουδές</div>
                        <div class=" input-container">
                            <div class="info-text"> Γράψε μας τις μέχρι τώρα σπουδές σου, τα εκπαιδευτικά ιδρύματα και το έτος αποφοίτησης, όπως φαίνονται στο επόμενο παράδειγμα.</div>
                            <textarea class="notes" placeholder="1. ΜΒΑ in Business Administration / Πανεπιστημιο Μακεδονίας / 2016&#13;&#10;2. Οικονομικά / Αριστοτέλειο Πανεπιστημιο θεσσαλονίκης / 2014&#13;&#10;3. 7ο Λύκειο Θεσσαλονικης / 2009
                            "></textarea>
                        </div>
                    </div>
                    </div>

                    <div class="col-md-6 col-left">
                        <div class="inner-section" >
                            <div class="section-text centered-text">   <i class="icon-title fa fa-trophy"></i> Έπαινοι - Διακρίσεις</div>
                            <div class=" input-container">
                                <div class="info-text"> Γράψε μας τις μέχρι τώρα διακρίσεις σου στις ξένες γλώσσες, στον αθλητισμό, στη μουσική ή σε προηγούμενες σπουδές σου.</div>
                            <textarea class="notes" placeholder="1. &#13;&#10;2.&#13;&#10;3.
                            "></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-right">
                        <div class="inner-section" >
                            <div class="section-text centered-text">   <i class="icon-title fa fa-paint-brush"></i> Ενδιαφέροντα - Ασχολίες</div>
                            <div class=" input-container">
                                <div class="info-text"> Γράψε μας τα γενικότερα ενδιαφέροντα και τις ασχολίες σου.<br> <span style="color: transparent">.</span></div>
                            <textarea class="notes" placeholder="1.&#13;&#10;2.&#13;&#10;3.
                            "></textarea>
                            </div>
                        </div>
                    </div>

                    <div class=" col-md-12 inner-section" >
                            <div class="section-text centered-text">   <i class="icon-title fa fa-certificate"></i> Πιστοποιήσεις - Σεμινάρια</div>
                            <div class=" input-container">
                                <div class="info-text"> Γράψε μας τις μέχρι τωρα πιστοποιήσεις σου και τα σεμινάρια που έχεις παρακολουθήσει</div>
                            <textarea class="notes" placeholder="1.&#13;&#10;2.&#13;&#10;3.
                            "></textarea>
                            </div>
                        </div>

                    <div class="send-button centered">
                        <a href=""><button type="button" class="sc-button-landing sc-button sc-orange sc-t-white " data-toggle="modal" data-target="#send-modal">
                                <i class="icon-title fa fa-paper-plane-o pad-right-10"></i>Αποστολή Αίτησης</button></a>
                    </div>
                </div>

    </div>
</div>



<!-- ====== Modal Αποστολής =======-->
<div id="send-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="top: 100px;">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="panel " style="background-color: #324c5a;">
                <div class="panel-heading" style="height: 55px; color: #fff">
                    <button type="button" class="btn pull-right" data-dismiss="modal" style="background-color: transparent" >
                        x

                    </button>
                    <img src="/new/img/logo-light-m.png" alt="scholio logo" class="pull-left">
                    <h3 class="pull-left panel-title" style="margin: 8px 0 0 15px;">Αίτηση Υποτροφίας</h3>
                </div>

            </div>
            <div class="panel-body">
                <img class="pull-left margin-right-10" style="height: 45px;">
                <span> Αποστολή αίτησης υποτροφίας</span>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Ακύρωση</button>
                <button type="button" data-dismiss="modal" class="btn btn-info">Αποστολή</button>
            </div>
        </div>
    </div>
</div><!-- /.modal -->





<!-- Footer -->
@include('public.footer')

</body>


<script>
    $(document).ready(function(){
        $(".demo-form").polymerForm({
            bar_height: "1px",
            active_color:'#008DA5',
            label_color:'#008DA5',
            base_color:'#bbb',
            origin:'left',
            margin_top: '25px',
            margin_bottom: '20px'

        });

        $( function() {
//            $( "#datepicker" ).datepicker( $.datepicker.regional[ "el" ] );
            $("#datepicker").datepicker({
//                changeMonth: true,
                changeYear: true,
//                maxDate: '01/01/2010',
//                minDate: '01/01/1940',
                yearRange: "1980:2010"
//                regional: "el"
            });
            $("#datepicker").datepicker();
            $("#datepicker").datepicker("option", "dateFormat", "dd/mm/yy");
            $("#datepicker").datepicker("setDate", "{{ \Carbon\Carbon::parse($user->info->dob)->format('d/m/Y')  }}" );
        } );
    });
</script>
</html>