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
    <link href="/new/css/scholarship-profile.css" rel="stylesheet">

    <!-- Polymer Float Form CSS -->
    <link href="/new/css/jquery.polymer-form.min.css" rel="stylesheet">


    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!-- Scholio Datepicker  CSS -->
    <link href="/new/css/scholio-datepicker.css" rel="stylesheet">

    <!-- Horizontal Ribbons  CSS -->
    {{--<link href="/new/css/ribbonHorizontal.css" rel="stylesheet">--}}

            <!-- Horizontal Ribbons  CSS -->
    {{--<link href="/new/css/Hexagon.css" rel="stylesheet">--}}

            <!-- jQuery js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <!-- Bootstrap js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <!-- Angular js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.8/angular.min.js"></script>

    <!-- Polymer Float Input Form js -->
    <script src="/new/js/jquery.polymer-form.min.js"></script>

    <!-- jQuery UI for datePicker -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script src=""></script>



    <script>
        window.Scholio = <?php echo json_encode([
    'csrfToken' => csrf_token(),
]); ?>
    </script>

    <style>
        .upper-box{background-color: #008DA5; height: 320px; border-radius: 4px; border-bottom-left-radius: 0; border-bottom-right-radius: 0}
        .upper-title{ margin-top: -20px; margin-left: 60px;}
        .outer{min-height:1800px;
            /*margin-top: -40px;*/
            /*padding: 25px; */
            /*margin-top:15px;*/
        }
        .title-to{ font-size: 140%; color: #fafafa; font-weight: 300; padding: 200px 0 0 70px;}
        /*.inner-box{ background-color: #F1F4F5; border: 1px solid #ddd; border-radius: 26px; height: 500px; margin-top: 15px;*/
        /*box-shadow: -5px 0  4px #fff, 0 -5px  4px #fff, 5px 0 4px #fff;*/
        /*border-bottom-left-radius:17px; border-bottom-right-radius:17px;*/
        /*}*/

       .inner-box{min-height: 1600px; background-color: #fff; padding: 0 70px; }

       .inner-section{ margin: 80px 0 0 0; padding: 5px; border: 1px solid #aaa; border-radius: 8px; background-color: #F1F4F5; min-height: 270px;}

       .demo-form{ margin: 0!important; font-weight: 300!important;}
       .polymer-form label {color: #008DA5!important; font-size:110%!important; font-weight: 300!important; display: block!important; padding-bottom: -40px!important; margin-left: 11px; }
       .ad-input{font-size: 100%!important; padding-left: 20px!important;}
       .icon-inp{position: absolute; top: 30px; color: #008DA5}
       .icon-title{margin-right: 10px;}
       .section-text{color: #888; font-size: 110%; font-weight: 300; margin-left: 10px; margin-top: -25px;
           border: 1px solid #aaa; border-radius: 6px; padding: 7px; min-width: 190px; max-width: 250px; background-color: #fafafa;
           box-shadow: 0 0 9px #aaa}

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


        /*  ======================================= */
        @media (min-width: 768px) and (max-width: 991px) {
            .col-left, .col-right{padding: 0}
        }

       @media  (max-width: 767px) {
           .icon-inp{top: 5px;}
           .input-container{margin-bottom: 40px; margin-top: 10px;}
           .outer{ padding: 15px;}
           .inner-box{ padding: 0 15px;}
           .col-left, .col-right{padding: 0}
       }
       @media  (max-width: 600px) {
           .icon-inp{top: 5px;}
           .outer{ padding: 5px;}
           .inner-box{ padding: 0 5px;}
           .title-to{  padding: 200px 0 0 15px;}
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

    <div style="">
        <div class="upper-box" >
            <div class="title-to">
                <img src="/new/img/trophy-fff.png" style="height: 45px; margin-top: 5px" alt="">
                <div class="upper-title">Αίτηση υποτροφίας προς  </div>
            </div>
        </div>

        <div class="col-xs-12 outer">
                <div class="inner-box row">
                    <div class="inner-section">

                        <div class="section-text centered-text"> Στοιχεία Επικοινωνίας</div>
                        <div class="col-sm-6 input-container">
                            <input  type="text" label="Όνομα Σπουδαστή" name="firstName" class="demo-form ad-input">
                            <i class="icon-inp fa fa-user-o"></i>
                        </div>
                        <div class="col-sm-6 input-container">
                            <input type="text" label="Επώνυμο Σπουδαστή" name="lastName" class="demo-form ad-input">
                            <i class="icon-inp fa fa-user"></i>
                        </div>
                        <div class="col-sm-6 input-container">
                            <input type="text" label="Διεύθυνση" name="address" class="demo-form ad-input">
                            <i class="icon-inp fa fa-street-view"></i>
                        </div>
                        <div class="col-sm-6 input-container">
                            <input type="text" label="Πόλη/Περιοχή" name="city" class="demo-form ad-input">
                            <i class="icon-inp fa fa-map-marker"></i>
                        </div>
                        <div class="col-sm-6 input-container">
                            <input type="text" label="Τηλέφωνο" name="phone" class="demo-form ad-input">
                            <i class="icon-inp fa fa-phone"></i>
                        </div>
                        <div class="col-sm-6 input-container">
                            <input type="text" label="Ημερομηνία Γέννησης" name="birthOfDate" class="demo-form ad-input ll-skin-cangas"
                                   id="datepicker"   size="30"  value="" onchange=""
                            >
                            <i class="icon-inp fa fa-calendar"></i>
                        </div>

                    </div>
                    <div class="inner-section">
                        <div class="section-text centered-text"> Στοιχεία Γονέων-Κηδεμόνων</div>
                        <div class="col-sm-6 input-container">
                            <input  type="text" label="Όνοματεπώνυμο Μητέρας" name="mothersName" class="demo-form ad-input">
                            <i class="icon-inp fa fa-user-o"></i>
                        </div>
                        <div class="col-sm-6 input-container">
                            <input type="text" label="Τηλέφωνο Μητέρας" name="mothersPhone" class="demo-form ad-input">
                            <i class="icon-inp fa fa-phone"></i>
                        </div>

                        <div class="col-sm-6 input-container">
                            <input  type="text" label="Όνοματεπώνυμο Πατέρα" name="fathersName" class="demo-form ad-input">
                            <i class="icon-inp fa fa-user-o"></i>
                        </div>
                        <div class="col-sm-6 input-container">
                            <input type="text" label="Τηλέφωνο Πατέρα" name="fathersPhone" class="demo-form ad-input">
                            <i class="icon-inp fa fa-phone"></i>
                        </div>

                        <div class="col-sm-6 input-container">
                            <input type="text" label="Διεύθυνση" name="nothersAddress" class="demo-form ad-input">
                            <i class="icon-inp fa fa-street-view"></i>
                        </div>
                        <div class="col-sm-6 input-container">
                            <input type="text" label="Πόλη/Περιοχή" name="mothersCity" class="demo-form ad-input">
                            <i class="icon-inp fa fa-map-marker"></i>
                        </div>



                    </div>

                    <div class="col-md-6 col-left">
                        <div class="inner-section " >
                            <div class="section-text centered-text">   <i class="icon-title fa fa-wrench"></i> Ικανότητες - Δεξιότητες</div>
                            <div class="input-container">
                                <textarea class="notes"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-right">
                        <div class="inner-section">
                            <div class="section-text centered-text">   <i class="icon-title fa fa-flag"></i> Ξένες Γλώσσες</div>
                            <div class=" input-container">
                                <textarea class="notes"></textarea>
                            </div>
                        </div>
                    </div>


                    <div class=" col-sm-12 inner-section" >
                            <div class="section-text centered-text">   <i class="icon-title fa fa-flag"></i> Σημεία Υπεροχής</div>
                            <div class=" input-container">
                                <div class="info-text"> Γράψε μας γιατί θεωρείς τον εαυτό σου κατάλληλο/κατάλληλη για την συγκεκριμένη υποτροφία.</div>
                                <textarea class="notes"></textarea>
                            </div>
                    </div>



                </div>
        </div>
    </div>
</div>




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
            $( "#datepicker" ).datepicker();
        } );
    });
</script>
</html>