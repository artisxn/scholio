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


    <!-- Results CSS -->
    {{--<link href="{{asset('new/css/results.css')}}" rel="stylesheet">--}}


     <!-- jQuery js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <!-- Bootstrap js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Angular js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular.min.js"></script>


    <!-- javascript Results -->
    <script src="{{asset('/new/js/results.js')}}"></script>


    <script>
        window.Search = "{{ session('search') }}"
    </script>


    <style>

        .upper-box{background-color: #008DA5; height: 320px; border-radius: 4px; border-bottom-left-radius: 0; border-bottom-right-radius: 0}
        .title-to{ font-size: 140%; color: #fafafa; font-weight: 300; padding: 200px 0 0 70px;}
        .avatar-container{ margin-top: 30px; margin-left: -5px; }
        .avatar{ box-shadow: 0 0 15px #222; }
        .name{margin-left: 150px; margin-top: -80px; color: #fff; font-size: 120%; font-weight: 400;}
        .email{margin-left: 220px; margin-top: 10px; color: #888; font-size: 105%; font-weight: 300;}

        .main{ background: #fff; z-index: -2; margin: -30px 0 40px 0; padding: 40px  }


        .inner-section,.inner-section2{ margin: 80px 0 0 0; padding: 5px 5px 25px 5px ; border: 1px solid #aaa; border-radius: 8px; background-color: #F1F4F5;
        }
        .inner-section2{ padding: 5px!important; min-width: 100%; min-height: 70%}
        .section2-container{ padding: 0 10px;}

        .section-text,.section-text2{color: #888; font-size: 110%; font-weight: 300; margin:-25px 0 30px 10px;
            border: 1px solid #aaa; border-radius: 6px; padding: 7px; min-width: 190px; max-width: 250px; background-color: #fafafa;
            box-shadow: 0 0 9px #aaa}

        .section-text2{margin-bottom: -5px;}

        .info{ color: #008DA5; font-weight: 400; margin: 8px 0}
        .value{color: #667;  font-weight: 300;
        }
        .value:before{
            content:"\a";
            white-space: pre;
        }

        .flex-row {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display:         flex;
            flex-wrap: wrap;
        }
        /*.row > [class*='col-'] {*/
            /*display: flex;*/
            /*flex-direction: column;*/
        /*}*/

        /*  ======================================= */

        @media (min-width:992px) and (max-width: 1200px) {

        }

        @media (min-width: 768px) and (max-width: 991px) {
            .inner-section2{ }
        }

        @media  (max-width: 767px) {
            .info{margin-top: 15px;}
            .value:before{
                content:"\a";
                white-space: pre;
            }
            .flex-row { display: inline}
            .section2-container{padding: 0; }


        }
        @media  (max-width: 600px) {
            .section2-container{ padding: 0;}
        }

        @media  (max-width:480px) {
            .main{padding-left: 15px; padding-right: 15px; }
            .inner-section2{  }

        }

        @media  (max-width: 390px) {

        }


    </style>


</head>



<body data-spy="scroll" data-target=".navbar" data-offset="50" id="home"  ng-app="studentApp"  ng-controller="studentCtrl" data-ng-init="init()"  ng-cloak>
<!-- Scholio Header -->
<header class="navbar navbar-fixed-top navbar-scroll sc-landing-header" id="header" >
    <div class="container">

        <div class="row">
            <div class="col-md-1 visible-lg visible-md nav-web">
                <!-- Scholio Branding -->
                <a class="sc-landing-brand" href="{{ url('/') }}">
                    <div class="sc-landing-logo-sticky" style=" padding-top: 15px">
                        <img src="{{asset('new/img/logo.png')}}" alt="scholio logo" class="sc-logo">
                    </div>
                </a>
            </div>

            <div class="col-xs-6  visible-sm visible-xs">
                <div class="nav-mobile">
                    <a class="" href="{{ url('/') }}">
                        <div class="navbar-brand  sc-landing-logo-sticky">
                            <img src="{{asset('new/img/logo-m.png')}}"alt="scholio logo" class="sc-logo">
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
        <div class="upper-box" >
            <div class="title-to">
                <div class="avatar-container"> <img src="{{ $user->info->avatar }}" class="avatar" alt="">
                </div>
                <div class="name">{{ $user->name }}</div>
            </div>
        </div>

        <div class="email">{{ $user->email }}</div>

        <div class=" col-xs-12 row main">
            <div class="row inner-section">
                <div class="section-text centered-text"> Στοιχεία Υποψηφίου</div>

                <div class="col-sm-6 col-lg-4 info">
                    <i class="icon-inp fa fa-street-view"></i>
                    Διεύθυνση:
                    <span class="value"> {{ $user->info->address }}</span>
                </div>
                <div class="col-sm-6 col-lg-4 info">
                    <i class="icon-inp fa fa-phone"></i>
                    Τηλέφωνο:
                    <span class="value"> {{ $user->info->phone }}</span>
                </div>
                <div class="col-sm-6 col-lg-4 info">
                    <i class="icon-inp fa fa-id-card-o"></i>
                    Αριθμός Δελτίου Ταυτότητας:
                    <span class="value"> {{ $user->cv->id_number }}</span>
                </div>
                <div class="col-sm-6 col-lg-4 info">
                    <i class="icon-inp fa fa-envelope-o"></i>
                    Ταχυδρομικός Κώδικας:
                    <span class="value"> {{ $user->cv->post_code }}</span>
                </div>
                <div class="col-sm-6 col-lg-4 info">
                    <i class="icon-inp fa fa-flag"></i>
                    Εθνικότητα:
                    <span class="value"> {{ $user->cv->nationality  }}</span>
                </div>
                <div class="col-sm-6 col-lg-4 info">
                    <i class="icon-inp fa fa-globe"></i>
                    Θρήσκευμα:
                    <span class="value"> {{ $user->cv->religion  }}</span>
                </div>
                <div class="col-sm-6 col-lg-4 info">
                    <i class="icon-inp fa fa-calendar"></i>
                    Ημερομηνία Γέννησης:
                    <span class="value"> {{\Carbon\Carbon::parse($user->info->dob)->format('d/m/Y') }}</span>
                </div>
                <div class="col-sm-6 col-lg-4 info">
                    <i class="icon-inp fa fa-map-marker"></i>
                    Τόπος Γέννησης:
                    <span class="value"> {{ $user->cv->place_of_birth }}</span>
                </div>
                <div class="col-sm-6 col-lg-4 info">
                    <i class="icon-inp fa fa-users"></i>
                    Μέλος Πολύτεκνης Οικογένειας:
                    <span class="value"> {{ $user->cv->polyteknos  }}</span>
                </div>
                <div class="col-sm-6 col-lg-4 info">
                    <i class="icon-inp fa fa-users"></i>
                    Μέλη της οικογένειας που φοιτούν στο εκπαιδευτικό ίδρυμα:
                    <span class="value"> {{   $user->cv->student_relatives}}</span>
                </div>
                <div class="col-sm-6 col-lg-4 info">
                    <i class="icon-inp fa fa-building"></i>
                    Προηγούμενο Σχολείο:
                    <span class="value"> {{   $user->cv->previous_school}}</span>
                </div>
                <div class="col-sm-6 col-lg-4 info">
                    <i class="icon-inp fa fa-building"></i>
                    Βαθμός Αποφοίτησης απο το προηγούμενο σχολείο:
                    <span class="value"> {{   $user->cv->school_grades}}</span>
                </div>
            </div>

                <div class="row inner-section">
                    <div class="section-text centered-text"> Στοιχεία Γονέων-Κηδεμόνων</div>


                    <!-- ===== MOTHER =====  -->
                    <div class="col-sm-6 col-lg-4 info">
                        <i class="icon-inp fa fa-user-o"></i>
                         Ονοματεπώνυμο Μητέρας:
                        <span class="value"> {{ $user->cv->mother_name }}</span>
                    </div>
                    <div class="col-sm-6 col-lg-4 info">
                        <i class="icon-inp fa fa-phone"></i>
                        Τηλέφωνο Μητέρας:
                        <span class="value"> {{ $user->cv->mother_phone}}</span>
                    </div>
                    <div class="col-sm-6 col-lg-4 info">
                        <i class="icon-inp fa fa-envelope"></i>
                        e-mail Μητέρας:
                        <span class="value"> {{ $user->cv->mother_email}}</span>
                    </div>
                    <div class="col-sm-6 col-lg-4 info">
                        <i class="icon-inp fa fa-street-view"></i>
                        Διεύθυνση, Πόλη Μητέρας:
                        <span class="value"> {{ $user->cv->mother_city}}</span>
                    </div>
                    <div class="col-sm-6 col-lg-4 info">
                        <i class="icon-inp fa fa-envelope-o"></i>
                        Ταχυδρομικός Κώδικας Μητέρας:
                        <span class="value"> {{ $user->cv->mother_post_code}}</span>
                    </div>
                    <div class="col-sm-6 col-lg-4 info">
                        <i class="icon-inp fa fa-briefcase"></i>
                        Επάγγελμα/Θέση Εγασίας Μητέρας:
                        <span class="value"> {{ $user->cv->mother_job}}</span>
                    </div>
                    <div class="col-sm-6 col-lg-4 info">
                        <i class="icon-inp fa fa-building"></i>
                        Εργοδότης/Εταιρεία Μητέρας:
                        <span class="value"> {{ $user->cv->mother_company}}</span>
                    </div>
                    <div class="col-sm-6 col-lg-4 info">
                        <i class="icon-inp fa fa-file-text-o"></i>
                        Αριθμ. Φορολ. Μητρώου Μητέρας:
                        <span class="value"> {{ $user->cv->mother_vat}}</span>
                    </div>
                    <div class="col-sm-6 col-lg-4 info">
                        <i class="icon-inp fa fa-money"></i>
                        Εισόδημα Μητέρας προηγούμενου Έτους:
                        <span class="value"> {{ $user->cv->mother_income}}</span>
                    </div>
                    <div class="col-sm-6 col-lg-4 info">
                        <i class="icon-inp fa fa-id-card-o"></i>
                        Αριθμός Δελτίου Ταυτότητας Μητέρας
                        <span class="value"> {{ $user->cv->mother_id_number}}</span>
                    </div>

                    <!-- ==================  -->
                    <div class="clearfix"></div>
                    <br>

                    <!-- ===== FATHER =====  -->
                    <div class="col-sm-6 col-lg-4 info">
                        <i class="icon-inp fa fa-user-o"></i>
                        Ονοματεπώνυμο Πατέρα:
                        <span class="value"> {{ $user->cv->father_name }}</span>
                    </div>
                    <div class="col-sm-6 col-lg-4 info">
                        <i class="icon-inp fa fa-phone"></i>
                        Τηλέφωνο Πατέρα:
                        <span class="value"> {{ $user->cv->father_phone}}</span>
                    </div>
                    <div class="col-sm-6 col-lg-4 info">
                        <i class="icon-inp fa fa-envelope"></i>
                        e-mail Πατέρα:
                        <span class="value"> {{ $user->cv->father_email}}</span>
                    </div>
                    <div class="col-sm-6 col-lg-4 info">
                        <i class="icon-inp fa fa-street-view"></i>
                        Διεύθυνση, Πόλη Πατέρα:
                        <span class="value"> {{ $user->cv->father_city}}</span>
                    </div>
                    <div class="col-sm-6 col-lg-4 info">
                        <i class="icon-inp fa fa-envelope-o"></i>
                        Ταχυδρομικός Κώδικας Πατέρα:
                        <span class="value"> {{ $user->cv->father_post_code}}</span>
                    </div>
                    <div class="col-sm-6 col-lg-4 info">
                        <i class="icon-inp fa fa-briefcase"></i>
                        Επάγγελμα/Θέση Εγασίας Πατέρα:
                        <span class="value"> {{ $user->cv->father_job}}</span>
                    </div>
                    <div class="col-sm-6 col-lg-4 info">
                        <i class="icon-inp fa fa-building"></i>
                        Εργοδότης/Εταιρεία Πατέρα:
                        <span class="value"> {{ $user->cv->father_company}}</span>
                    </div>
                    <div class="col-sm-6 col-lg-4 info">
                        <i class="icon-inp fa fa-file-text-o"></i>
                        Αριθμ. Φορολ. Μητρώου Πατέρα:
                        <span class="value"> {{ $user->cv->father_vat}}</span>
                    </div>
                    <div class="col-sm-6 col-lg-4 info">
                        <i class="icon-inp fa fa-money"></i>
                        Εισόδημα Πατέρα προηγούμενου Έτους:
                        <span class="value"> {{ $user->cv->father_income}}</span>
                    </div>
                    <div class="col-sm-6 col-lg-4 info">
                        <i class="icon-inp fa fa-id-card-o"></i>
                        Αριθμός Δελτίου Ταυτότητας Πατέρα:
                        <span class="value"> {{ $user->cv->father_id_number}}</span>
                    </div>

                    <!-- ==================  -->
                    <div class="clearfix"></div>
                    <br>

                    <!-- ===== GUARDIAN =====  -->
                    <div class="col-sm-6 col-lg-4 info">
                        <i class="icon-inp fa fa-user-o"></i>
                        Ονοματεπώνυμο Κηδεμόνα:
                        <span class="value"> {{ $user->cv->guardian_name }}</span>
                    </div>
                    <div class="col-sm-6 col-lg-4 info">
                        <i class="icon-inp fa fa-phone"></i>
                        Τηλέφωνο Κηδεμόνα:
                        <span class="value"> {{ $user->cv->guardian_phone}}</span>
                    </div>
                    <div class="col-sm-6 col-lg-4 info">
                        <i class="icon-inp fa fa-envelope"></i>
                        e-mail Κηδεμόνα:
                        <span class="value"> {{ $user->cv->guardian_email}}</span>
                    </div>
                    <div class="col-sm-6 col-lg-4 info">
                        <i class="icon-inp fa fa-street-view"></i>
                        Διεύθυνση, Πόλη Κηδεμόνα:
                        <span class="value"> {{ $user->cv->guardian_city}}</span>
                    </div>
                    <div class="col-sm-6 col-lg-4 info">
                        <i class="icon-inp fa fa-envelope-o"></i>
                        Ταχυδρομικός Κώδικας Κηδεμόνα:
                        <span class="value"> {{ $user->cv->guardian_post_code}}</span>
                    </div>
                    <div class="col-sm-6 col-lg-4 info">
                        <i class="icon-inp fa fa-briefcase"></i>
                        Επάγγελμα/Θέση Εγασίας Κηδεμόνα:
                        <span class="value"> {{ $user->cv->guardian_job}}</span>
                    </div>
                    <div class="col-sm-6 col-lg-4 info">
                        <i class="icon-inp fa fa-building"></i>
                        Εργοδότης/Εταιρεία Κηδεμόνα:
                        <span class="value"> {{ $user->cv->guardian_company}}</span>
                    </div>
                    <div class="col-sm-6 col-lg-4 info">
                        <i class="icon-inp fa fa-file-text-o"></i>
                        Αριθμ. Φορολ. Μητρώου Κηδεμόνα:
                        <span class="value"> {{ $user->cv->guardian_vat}}</span>
                    </div>
                    <div class="col-sm-6 col-lg-4 info">
                        <i class="icon-inp fa fa-money"></i>
                        Εισόδημα Κηδεμόνα προηγούμενου Έτους:
                        <span class="value"> {{ $user->cv->guardian_income}}</span>
                    </div>
                    <div class="col-sm-6 col-lg-4 info">
                        <i class="icon-inp fa fa-id-card-o"></i>
                        Αριθμός Δελτίου Ταυτότητας Κηδεμόνα:
                        <span class="value"> {{ $user->cv->guardian_id_number}}</span>
                    </div>

                </div>



            <div class="row flex-row ">
                <div class="section2-container col-sm-6">
                    <div class=" inner-section2 ">
                        <div class="section-text2 centered-text"> <i class="icon-title fa fa-wrench margin-right-10"></i>Ικανότητες - Δεξιότητες</div>
                        <div class="info">
                            <span class="value"> {{ $user->cv->skills}}</span>
                        </div>
                    </div>
                </div>
                <div class="section2-container col-sm-6">
                    <div class=" inner-section2">
                        <div class="section-text2 centered-text"> <i class="icon-title fa fa-flag margin-right-10"></i>Ξένες Γλώσσες</div>
                        <div class="info">
                            <span class="value"> {{ $user->cv->languages}}</span>
                        </div>
                    </div>
                </div>
                <div class="section2-container col-sm-6">
                    <div class=" inner-section2">
                        <div class="section-text2 centered-text"> <i class="icon-title fa fa-id-badge margin-right-10"></i>Σημεία Υπεροχής</div>
                        <div class="info">
                            <span class="value"> {{ $user->cv->aboutMe}}</span>
                        </div>
                    </div>
                </div>
                <div class="section2-container col-sm-6">
                    <div class=" inner-section2">
                        <div class="section-text2 centered-text"> <i class="icon-title fa fa-graduation-cap margin-right-10"></i>Προηγούμενες Σπουδές</div>
                        <div class="info">
                            <span class="value"> {{ $user->cv->studies}}</span>
                        </div>
                    </div>
                </div>
                <div class="section2-container col-sm-6">
                    <div class=" inner-section2">
                        <div class="section-text2 centered-text"> <i class="icon-title fa fa-trophy margin-right-10"></i>Έπαινοι - Διακρίσεις</div>
                        <div class="info">
                            <span class="value"> {{ $user->cv->awards}}</span>
                        </div>
                    </div>
                </div>
                <div class="section2-container col-sm-6">
                    <div class=" inner-section2">
                        <div class="section-text2 centered-text"> <i class="icon-title fa fa-paint-brush margin-right-10"></i>Ενδιαφέροντα - Ασχολίες</div>
                        <div class="info">
                            <span class="value"> {{ $user->cv->other_interests}}</span>
                        </div>
                    </div>
                </div>
                <div class="section2-container col-sm-6">
                    <div class=" inner-section2">
                        <div class="section-text2 centered-text"> <i class="icon-title fa fa-certificate margin-right-10"></i>Πιστοποιήσεις - Σεμινάρια</div>
                        <div class="info">
                            <span class="value"> {{ $user->cv->certifications}}</span>
                        </div>
                    </div>
                </div>
                <div class="section2-container col-sm-6">
                    <div class=" inner-section2">
                        <div class="section-text2 centered-text"> <i class="icon-title fa fa-pencil margin-right-10"></i>Σημειώσεις</div>
                        <div class="info">
                            <span class="value"> {{ $user->cv->notes}}</span>
                        </div>
                    </div>
                </div>

            </div>


            <div class="clearfix"></div>
            <br><br>





            {{-- ΕΔΩ ΤΑ ΥΠΟΛΟΙΠΑ (ΤΑ ΕΜΦΑΝΙΖΩ ΜΟΝΟ ΑΝ ΔΕΝ ΕΙΝΑΙ NULL)--}}

            <div>
    {{--<div>{{$admission->father_name!=null ? 'father_name:' . $admission->father_name : ''}}</div>--}}
    {{--<div>{{$admission->father_email!=null ? 'father_email:' . $admission->father_email : ''}}</div>--}}
    {{--<div>{{$admission->father_phone!=null ? 'father_phone:' . $admission->father_phone : ''}}</div>--}}
    {{--<div>{{$admission->father_city!=null ? 'father_city:' . $admission->father_city : ''}}</div>--}}
    {{--<div>{{$admission->father_post_code!=null ? 'father_post_code:' . $admission->father_post_code : ''}}</div>--}}
    {{--<div>{{$admission->father_job!=null ? 'father_job:' . $admission->father_job : ''}}</div>--}}
    {{--<div>{{$admission->father_company!=null ? 'father_company:' . $admission->father_company : ''}}</div>--}}
    {{--<div>{{$admission->father_vat!=null ? 'father_vat:' . $admission->father_vat : ''}}</div>--}}
    {{--<div>{{$admission->father_income!=null ? 'father_income:' . $admission->father_income : ''}}</div>--}}
    {{--<div>{{$admission->father_id_number!=null ? 'father_id_number:' . $admission->father_id_number : ''}}</div>--}}

    {{--<div>{{$admission->mother_name!=null ? 'mother_name:' . $admission->mother_name : ''}}</div>--}}
    {{--<div>{{$admission->mother_email!=null ? 'mother_email:' . $admission->mother_email : ''}}</div>--}}
    {{--<div>{{$admission->mother_phone!=null ? 'mother_phone:' . $admission->mother_phone : ''}}</div>--}}
    {{--<div>{{$admission->mother_city!=null ? 'mother_city:' . $admission->mother_city : ''}}</div>--}}
    {{--<div>{{$admission->mother_post_code!=null ? 'mother_post_code:' . $admission->mother_post_code : ''}}</div>--}}
    {{--<div>{{$admission->mother_job!=null ? 'mother_job:' . $admission->mother_job : ''}}</div>--}}
    {{--<div>{{$admission->mother_company!=null ? 'mother_company:' . $admission->mother_company : ''}}</div>--}}
    {{--<div>{{$admission->mother_vat!=null ? 'mother_vat:' . $admission->mother_vat : ''}}</div>--}}
    {{--<div>{{$admission->mother_income!=null ? 'mother_income:' . $admission->mother_income : ''}}</div>--}}
    {{--<div>{{$admission->mother_id_number!=null ? 'mother_id_number:' . $admission->mother_id_number : ''}}</div>--}}

    {{--<div>{{$admission->guardian_name!=null ? 'guardian_name:' . $admission->guardian_name : ''}}</div>--}}
    {{--<div>{{$admission->guardian_email!=null ? 'guardian_email:' . $admission->guardian_email : ''}}</div>--}}
    {{--<div>{{$admission->guardian_phone!=null ? 'guardian_phone:' . $admission->guardian_phone : ''}}</div>--}}
    {{--<div>{{$admission->guardian_city!=null ? 'guardian_city:' . $admission->guardian_city : ''}}</div>--}}
    {{--<div>{{$admission->guardian_post_code!=null ? 'guardian_post_code:' . $admission->guardian_post_code : ''}}</div>--}}
    {{--<div>{{$admission->guardian_job!=null ? 'guardian_job:' . $admission->guardian_job : ''}}</div>--}}
    {{--<div>{{$admission->guardian_company!=null ? 'guardian_company:' . $admission->guardian_company : ''}}</div>--}}
    {{--<div>{{$admission->guardian_vat!=null ? 'guardian_vat:' . $admission->guardian_vat : ''}}</div>--}}
    {{--<div>{{$admission->guardian_income!=null ? 'guardian_income:' . $admission->guardian_income : ''}}</div>--}}
    {{--<div>{{$admission->guardian_id_number!=null ? 'guardian_id_number:' . $admission->guardian_id_number : ''}}</div>--}}

    {{--<div>{{$admission->id_number!=null ? 'id_number:' . $admission->id_number : ''}}</div>--}}
    {{--<div>{{$admission->post_code!=null ? 'post_code:' . $admission->post_code : ''}}</div>--}}
    {{--<div>{{$admission->religion!=null ? 'religion:' . $admission->religion : ''}}</div>--}}
    {{--<div>{{$admission->nationality!=null ? 'nationality:' . $admission->nationality : ''}}</div>--}}
    {{--<div>{{$admission->place_of_birth!=null ? 'place_of_birth:' . $admission->place_of_birth : ''}}</div>--}}

    {{--<div>{{$admission->student_relatives!=null ? 'student_relatives:' . $admission->student_relatives : ''}}</div>--}}
    {{--<div>{{$admission->school_grades!=null ? 'school_grades:' . $admission->school_grades : ''}}</div>--}}
    {{--<div>{{$admission->previous_school!=null ? 'previous_school:' . $admission->previous_school : ''}}</div>--}}
    {{--<div>{{$admission->polyteknos!=null ? 'polyteknos:' . $admission->polyteknos : ''}}</div>--}}

    {{--<div>{{$admission->skills!=null ? 'skills:' . $admission->skills : ''}}</div>--}}
    {{--<div>{{$admission->languages!=null ? 'languages:' . $admission->languages : ''}}</div>--}}
    {{--<div>{{$admission->certifications!=null ? 'certifications:' . $admission->certifications : ''}}</div>--}}
    {{--<div>{{$admission->awards!=null ? 'awards:' . $admission->awards : ''}}</div>--}}
    {{--<div>{{$admission->other_interests!=null ? 'other_interests:' . $admission->other_interests : ''}}</div>--}}
    {{--<div>{{$admission->aboutMe!=null ? 'aboutMe:' . $admission->aboutMe : ''}}</div>--}}
    {{--<div>{{$admission->notes!=null ? 'notes:' . $admission->notes : ''}}</div>--}}
</div>


        </div>

    </div>
</div>

<!-- Footer -->
@include('public.footer')

</body>


<script>
    angular.module("studentApp",[])
            .controller("studentCtrl",function ($scope,$http) {


            })
</script>



</html>
