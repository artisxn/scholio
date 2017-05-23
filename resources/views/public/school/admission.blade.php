<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>schol.io | Διεκδίκησε την υποτροφία σου.</title>

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

    <!-- Scholio Datepicker  CSS -->
    <link rel="stylesheet" href="/new/css/scholio-datepicker.css" >

    <!-- Results CSS -->
    {{--<link href="{{asset('new/css/results.css')}}" rel="stylesheet">--}}



    <!-- jQuery js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <!-- Bootstrap js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Angular js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular.min.js"></script>

    <!-- Polymer Float Input Form js -->
    <script src="/new/js/jquery.polymer-form.min.js"></script>

    <!-- jQuery UI for datePicker -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!-- javascript Results -->
    <script src="{{asset('/new/js/results.js')}}"></script>


    <script>
        // window.SelectedLocation = "{{ session()->pull('location') }}"
        window.Search = "{{ session('search') }}"
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

        .section2-container{}
        .avatar-container{margin-top: 15px; margin-right: 0; padding-right: 0; }
        .avatar{height: 43px; width: auto;  margin-top: -2px}
        .col-left{padding-left: 0}
        .col-right{padding-right: 0}

        .drop-title{color: #008DA5; font-weight: 300}


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
        .select-polyteknos{ margin: 5px 0 10px 15px;}
        /*  ======================================= */

        @media (min-width:992px) and (max-width: 1200px) {
            .cont1{padding-left: 20px;}
        }

        @media (min-width:992px) and (max-width: 1199px) {
            .select-icon2{margin-top: 18px;}
        }


        @media (min-width: 768px) and (max-width: 991px) {
            .col-left, .col-right{padding: 0}
            .cont1{padding-left: 28px;}
            .select-icon2{margin-top: 18px;}
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
            .select-icon,.select-icon2{margin-top: 26px;}

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


        @media  (max-width:496px) {
            .select-icon2{margin-top: 48px;}
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



<body data-spy="scroll" data-target=".navbar" data-offset="50" id="home"  ng-app="admissionApp"  ng-controller="admissionCtrl" data-ng-init="init()"  ng-cloak>
<!-- Scholio Header -->
<header class="navbar navbar-fixed-top navbar-scroll sc-landing-header" id="header" >
    <div class="container">

        <div class="row">
            <div class="col-md-1 visible-lg visible-md nav-web">
                <!-- Scholio Branding -->
                <a class="sc-landing-brand" href="{{ url('/') }}">
                    <div class="sc-landing-logo-sticky" style=" padding-top: 15px">
                        <img src="{{asset('new/img/logo.png')}}" class="sc-logo" alt="scholio logo">
                    </div>
                </a>
            </div>

            <div class="col-xs-6  visible-sm visible-xs">
                <div class="nav-mobile">
                    <a class="" href="{{ url('/') }}">
                        <div class="navbar-brand  sc-landing-logo-sticky">
                            <img src="{{asset('new/img/logo-m.png')}}" class="sc-logo" alt="scholio logo">
                        </div>
                    </a>
                </div>
            </div>
            <!-- Scholio sMenu -->

            <!-- Large Menu -->
            <div class="col-md-11 visible-md visible-lg">
                <div class="">
                    <ul class="nav navbar-nav navbar-right sc-landing-menu">
                        {{--<li class="sc-landing-menu-item"><a href="">ΥΠΟΤΡΟΦΙΕΣ</a></li>--}}
                        @if(auth()->check())
                            <li><a href="{{ url('/dashboard') }}"><button type="button" class="sc-button-landing sc-button sc-green sc-t-white">Διαχείριση</button></a></li>
                            <li><a href="{{ url('/out') }}"><button type="button" class="sc-button-landing sc-button sc-dark-blue sc-t-white ">Αποσύνδεση</button></a></li>
                        @else
                            <li>
                                <a href="">
                                    <button type="button" class="sc-button-landing sc-button sc-green sc-t-white" data-toggle="modal" data-target="#select-modal">Εγγραφή</button>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <button type="button" class="sc-button-landing sc-button sc-dark-blue sc-t-white" data-toggle="modal" data-target="#signIn-modal">Σύνδεση</button>
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div class="col-xs-6 visible-sm visible-xs ">
                <div class="">
                    <div class="sc-landing-menu-mobile-sandwitch nav navbar-nav navbar-right pull-right">
                        <div class="sc-landing-menu-sandwitch-button-sticky sc-landing-menu-sandwitch">
                            <img src="{{asset('new/img/collapse-dark.png')}}" alt="scholio logo">
                        </div>
                    </div>
                </div>

                <div class="visible-xs visible-sm">
                    <div class="sc-landing-menu-mobile-holder sc-dark-blue">
                        <div class="pull-right">
                            <div class="sc-landing-menu-mobile-close sc-t-white">x</div>
                        </div>
                        <br><br>
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
                        </div>
                    </div>
                </div>
            </div>

        </div>  <!-- row -->
    </div> <!-- container-->
</header>

<div class="container">

    <div>
    <form id="admissionForm" action="/admission/{{ $scholarship->id }}/save" method="POST">
    {{ csrf_field() }}
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
                    <input type="text" label="Πόλη/Περιοχή" name="city" class="demo-form ad-input" value="{{ $user->info->city }}">
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

                @foreach($fields as $field)
                    @if($field->category->id == 1 && $settings->{$field->slug})
                        @if($field->slug != 'student_relatives' && $field->slug != 'student_polyteknos' && $field->slug != 'student_phone' && $field->slug != 'student_address' && $field->slug != 'student_city')
                            @if($field->slug == 'student_dob')
                                <div class="col-sm-6 input-container">
                                    <input class="demo-form ad-input ll-skin-cangas" id="datepicker" size="30" value="{{ \Carbon\Carbon::parse($user->info->dob)->format('d/m/Y') }}" label="{{ $field->name }}" name="{{ $field->slug }}">
                                    <i class="icon-inp {{ $field->icon }}"></i>
                                </div>
                            @else
                                <div class="col-sm-6 input-container">
                                    <input type="text" label="{{ $field->name }}" name="{{ $field->slug }}" class="demo-form ad-input" value="{{ $user->cv->{$field->slug} }}">
                                    <i class="icon-inp {{ $field->icon }}"></i>
                                </div>
                            @endif
                        @endif
                    @endif
                @endforeach

 {{--                <div class="col-sm-6 input-container">
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
                    <input type="text" label="Ημερομηνία Γέννησης" name="dateOfBirth" class="demo-form ad-input ll-skin-cangas"
                           id="datepicker"   size="30"  value="{{ \Carbon\Carbon::parse($user->info->dob)->format('d/m/Y')  }}" onchange=""
                    >
                    <i class="icon-inp fa fa-calendar"></i>
                </div>
                <div class="col-sm-6 input-container">
                    <input type="text" label="Τόπος Γέννησης" name="place_of_birth" class="demo-form ad-input" value="{{ $user->cv->place_of_birth }}">
                    <i class="icon-inp fa fa-map-marker"></i>
                </div>
                <div class="col-sm-6 input-container">
                    <input type="text" label="Προηγούμενο Σχολείο" name="previous_school" class="demo-form ad-input" value="{{ $user->cv->previous_school }}">
                    <i class="icon-inp fa fa-building"></i>
                </div>
                <div class="col-sm-6 input-container">
                    <input type="text" label="Βαθμός Αποφοίτησης απο το προηγούμενο σχολείο" name="school_grades" class="demo-form ad-input" value="{{ $user->cv->school_grades }}">
                    <i class="icon-inp fa fa-graduation-cap"></i>
                </div> --}}

                <div class="clearfix"></div>
                @if($settings->student_polyteknos)
                    <div class="col-sm-6 input-container">
                    <div class="drop-title">Μέλος Πολύτεκνης Οικογένειας</div>

                        <div class="select-polyteknos">
                            <select>
                                <option>Ναι</option>
                                <option>Όχι</option>
                            </select>
                        </div>

                        <i class="icon-inp fa fa-users select-icon"></i>
                    </div>
                    @endif

                @if($settings->student_relatives)
                <div class="col-sm-6 ">
                <div class="drop-title">Πόσα μέλη της οικογένειας σου φοιτούν στο Εκπαιδευτικό Ίδρυμα</div>
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

                    <i class="icon-inp fa fa-users select-icon2"></i>
                </div>
                @endif
            </div>

            <div class="inner-section row">
                <div class="section-text centered-text"> Στοιχεία Γονέων-Κηδεμόνων</div>
                @foreach($fields as $field)
                    @if(($field->category->id == 2 || $field->category->id == 5) && $settings->{$field->slug})
                        <div class="col-sm-6 input-container">
                            <input  type="text" label="{{ $field->name }}" name="{{ $field->slug }}" class="demo-form ad-input" value="{{ $user->cv->{$field->slug} }}">
                            <i class="icon-inp {{ $field->icon }}"></i>
                        </div>
                    @endif
                @endforeach
                <div class="clearfix"></div>
                <br>
                @foreach($fields as $field)
                    @if(($field->category->id == 3 || $field->category->id == 6) && $settings->{$field->slug})
                        <div class="col-sm-6 input-container">
                            <input  type="text" label="{{ $field->name }}" name="{{ $field->slug }}" class="demo-form ad-input" value="{{ $user->cv->{$field->slug} }}">
                            <i class="icon-inp {{ $field->icon }}"></i>
                        </div>
                    @endif
                @endforeach

                <div class="clearfix"></div>
                <br>
                @foreach($fields as $field)
                    @if(($field->category->id == 4 || $field->category->id == 7) && $settings->{$field->slug})
                        <div class="col-sm-6 input-container">
                            <input  type="text" label="{{ $field->name }}" name="{{ $field->slug }}" class="demo-form ad-input" value="{{ $user->cv->{$field->slug} }}">
                            <i class="icon-inp {{ $field->icon }}"></i>
                        </div>
                    @endif
                @endforeach
            </div>


            <div class="row flex-row">
            @if($settings->skills)
                <div class="col-md-6 section2-container ">
                    <div class="inner-section">
                        <div class="section-text centered-text">   <i class="icon-title fa fa-wrench"></i> Ικανότητες - Δεξιότητες</div>
                        <div class="input-container">
                        <div class="info-text"> Γράψε μας τις ικανοτητες και τις δεξιότητες που διαθέτεις.</div>
                            <textarea class="notes">{{ $user->cv->skills }}</textarea>
                        </div>
                    </div>
                </div>
            @endif
            @if($settings->languages)
                <div class="col-md-6 section2-container ">
                    <div class="inner-section">
                        <div class="section-text centered-text">  <i class="icon-title fa fa-flag"></i> Ξένες Γλώσσες</div>
                        <div class=" input-container">
                        <div class="info-text"> Γράψε μας γιατί θεωρείς τον εαυτό σου κατάλληλο/κατάλληλη για την συγκεκριμένη υποτροφία.</div>
                            <textarea name="languages" class="notes" placeholder="Αγγλικά - Β1&#13;&#10;Γερμανικά - C2">{{ $user->cv->languages }}</textarea>
                        </div>
                    </div>
                </div>
                @endif
                @if($settings->strongpoints)
                <div class="col-md-6 section2-container ">
                    <div class="inner-section" >
                        <div class="section-text centered-text">   <i class="icon-title fa fa-id-badge"></i> Σημεία Υπεροχής</div>
                        <div class=" input-container">
                            <div class="info-text"> Γράψε μας γιατί θεωρείς τον εαυτό σου κατάλληλο/κατάλληλη για την συγκεκριμένη υποτροφία.</div>
                                     <textarea name="aboutMe" class="notes" placeholder="1. Είμαι Επίμονος&#13;&#10; 2. Εργάζομαι με μέθοδο & πρόγραμμα &#13;&#10; 3. Μου αρέσει συνεχώς να βελτιώνομαι και να αποκτώ νέες δεξιότητες
                                ">{{ $user->cv->aboutMe}}</textarea>
                        </div>
                    </div>
                </div>
                @endif
                @if($settings->previous_school)
                <div class="col-md-6 section2-container ">
                    <div class="inner-section" >
                        <div class="section-text centered-text">   <i class="icon-title fa fa-graduation-cap"></i> Προηγούμενες Σπουδές</div>
                        <div class=" input-container">
                            <div class="info-text"> Γράψε μας τις μέχρι τώρα σπουδές σου, τα εκπαιδευτικά ιδρύματα και το έτος αποφοίτησης, όπως φαίνονται στο επόμενο παράδειγμα.</div>
                                <textarea name="studies" class="notes" placeholder="1. ΜΒΑ in Business Administration / Πανεπιστημιο Μακεδονίας / 2016&#13;&#10;2. Οικονομικά / Αριστοτέλειο Πανεπιστημιο θεσσαλονίκης / 2014&#13;&#10;3. 7ο Λύκειο Θεσσαλονικης / 2009
                                ">{{ $user->cv->studies }}</textarea>
                        </div>
                    </div>
                </div>
                @endif
                @if($settings->awards)
                <div class="col-md-6 section2-container ">
                    <div class="inner-section" >
                        <div class="section-text centered-text">   <i class="icon-title fa fa-trophy"></i>Έπαινοι - Διακρίσεις</div>
                        <div class=" input-container">
                            <div class="info-text"> Γράψε μας τις μέχρι τώρα διακρίσεις σου στις ξένες γλώσσες, στον αθλητισμό, στη μουσική ή σε προηγούμενες σπουδές σου.</div>
                                <textarea name="awards" class="notes" placeholder="1. &#13;&#10;2.&#13;&#10;3.
                                ">{{ $user->cv->awards }}</textarea>
                        </div>
                    </div>
                </div>
                @endif
                @if($settings->other_interests)
                <div class="col-md-6 section2-container ">
                    <div class="inner-section" >
                        <div class="section-text centered-text">   <i class="icon-title fa fa-paint-brush"></i>Ενδιαφέροντα - Ασχολίες</div>
                        <div class=" input-container">
                            <div class="info-text"> Γράψε μας τα γενικότερα ενδιαφέροντα και τις ασχολίες σου.<br> <span style="color: transparent">.</span></div>
                                <textarea name="other_interests" class="notes" placeholder="1.&#13;&#10;2.&#13;&#10;3.
                                ">{{ $user->cv->other_interests }}</textarea>
                        </div>
                    </div>
                </div>
                @endif
                @if($settings->certifications)
                <div class="col-md-6 section2-container ">
                    <div class="inner-section" >
                        <div class="section-text centered-text">   <i class="icon-title fa fa-certificate"></i>Πιστοποιήσεις - Σεμινάρια</div>
                        <div class=" input-container">
                            <div class="info-text"> Γράψε μας τις μέχρι τωρα πιστοποιήσεις σου και τα σεμινάρια που έχεις παρακολουθήσει</div>
                                <textarea name="certifications" class="notes" placeholder="1.&#13;&#10;2.&#13;&#10;3.
                                ">{{ $user->cv->certifications }}</textarea>
                        </div>
                    </div>
                </div>
                @endif
                @if($settings->notes)
                <div class="col-md-6 section2-container ">
                    <div class="inner-section" >
                        <div class="section-text centered-text">   <i class="icon-title fa fa-pencil"></i>Σημειώσεις</div>
                        <div class=" input-container">
                            <div class="info-text"> Γράψε μας οτιδήποτε θεωρείς σημαντικό ή απαραίτητο σε σχέση με εσένα και την υποτροφία.</div>
                                    <textarea name="notes" class="notes" placeholder="1.&#13;&#10;2.&#13;&#10;3.
                                    ">{{ $user->cv->notes }}</textarea>
                        </div>
                    </div>
                </div>
                @endif
            </div>

            <div class="send-button centered">
                <a href=""><button type="button" class="sc-button-landing sc-button sc-orange sc-t-white " data-toggle="modal" data-target="#send-modal">
                        <i class="icon-title fa fa-paper-plane-o pad-right-10"></i>Αποστολή Αίτησης</button></a>
            </div>
        </div>
    </form>
    </div>

</div>

<!-- ====== Modal Αποστολής =======-->
<div id="send-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="top: 100px;">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="panel " style="background-color: #324c5a; border-bottom-left-radius: 0; border-bottom-right-radius: 0; height: 62px;" >
                <div class="panel-heading" style="height: 55px; color: #fff">
                    <button type="button" class="btn pull-right" data-dismiss="modal" style="background-color: transparent" >
                        x

                    </button>
                    <img src="/new/img/logo-light-m.png" alt="scholio logo" class=" sc-logo pull-left" style="margin-top: -5px;">
                    <h3 class="pull-left panel-title" style="margin: 8px 0 0 15px;">Αίτηση Υποτροφίας</h3>
                </div>

            </div>
            <div class="panel-body">
                <img class="pull-left margin-right-10" style="height: 45px;">
                <span> Αποστολή αίτησης υποτροφίας</span>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Ακύρωση</button>
                <button type="button" data-dismiss="modal" class="btn btn-info" onclick="saveAdmission()">Αποστολή</button>
            </div>
        </div>
    </div>
</div><!-- /.modal -->






<!-- Footer -->
@include('public.footer')

</body>



<script>

    function saveAdmission(){
        var form = document.getElementById('admissionForm');
        form.submit();
    }

    angular.module("admissionApp",[])
            .controller("admissionCtrl",function ($scope,$http) {

                $scope.over=false;
                $scope.over2=false;
                $scope.over3=false;
                $scope.role=null;
                $scope.active=function(role){
                    $scope.role=role;
                }
            })

</script>


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
