<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>schol.io | Form</title>




    <!--====== CSS  Styles =======-->
    {{--@include('public.styles')--}}

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500&subset=greek" >

    <!-- font-awesome -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <!--Bootstrap Select  minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">

    <!-- Main CSS -->
    <link href="{{asset('new/css/main.css')}}" rel="stylesheet">





    <!-- jQuery js-->
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>--}}

    <!-- Bootstrap js-->
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}

    <!-- Bootstrap Select minified JavaScript -->
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>--}}



    <style>
        body {
            background-color: #fff;
            font-family: Roboto, Helvetica, Arial, sans-serif;
        }

        .line{ height: 2px; background-color: #49A6FE; width: 95%; margin-left: 2.5%; display: inline-block;}

        .text-cyan{color: #49A6FE;}
        .text-blue{color: #6D63FF;}
        .text-magenta{color: #BE3D74;}
        .text-white{color: #ffffff;}
        .text-orange{color: #FFDD4C;}
        .text-green{color: #22E1C2;}
        .text-gray{color: #F1F4F5;}

        .mar-t-10{margin-top: 10px;}
        .mar-t-20{margin-top: 20px;}
        .mar-t-30{margin-top: 30px;}
        .mar-t-40{margin-top: 40px;}

        .mar-r-10{margin-right: 10px;}
        .mar-r-20{margin-right: 20px;}
        .mar-r-30{margin-right: 30px;}

        .mar-l-10{margin-left: 10px;}
        .mar-l-20{margin-left: 20px;}
        .mar-l-30{margin-left: 30px;}


        .mar-b-20{margin-bottom: 20px;}
        .mar-b-30{margin-bottom: 30px;}
        .mar-b-40{margin-bottom: 40px;}

        .pad-t-20{padding-top: 20px;}
        .pad-t-30{padding-top: 30px;}
        .pad-t-40{padding-top: 40px;}

        .navbar-top{
            background: #eee;
            border-bottom: 1px solid #d4d4d4;
            box-shadow: 0 0  20px #999;
            opacity: 0.9;
        }
        .container{position: relative;}
        .hoverLink{color: #49A6FE!important;}
        .hoverLink:hover{color: #6D63FF!important;}

        .nav-web{margin: 8px auto 4px auto;}
        .section01{height: 600px; background-color: #ffffff; position: relative;}
        .section02{height: 600px; background-color: #CEE4F1;}
        .section03{height: 600px; background-color: #f5f8f9;}
        .section04{height: 600px; background-color: #d2f5f5;}


        .formContainer{
            z-index: 90;
            position: absolute;
            top: 400px;
            right:40px;

            width: 51%;
            height: 920px;
            border-radius: 5px;
            background-color: #cae2fe;
            border: 1px solid #49A6FE;
            box-shadow: 0 0  30px #888;
            padding: 20px 10px;

        }
        .imgTrophy{max-width: 110%; height:530px; margin-top: 130px;}
        .imgParty{position: absolute; right: -40px; top: -165px; opacity: 0.15; z-index: 0; width: 520px;}
        .imgApply{max-width: 100%; height:330px; margin-top: 250px; margin-left: auto; margin-right: auto; display: block;}
        .imgPeople{max-width: 110%; height:340px; margin-top: 90px; margin-left: auto; margin-right: auto; display: block;}
        .title01,.title02,.title03{margin-top: 170px; text-align: center;}
        .title01{font-size: 280%; font-weight: 300; }
        .title02{font-size: 290%; font-weight: 400; margin-top: 150px;}
        .title03{font-size: 270%; font-weight: 300; margin-top: 190px;}


        .logos{margin-top: 30px;}
        .logo{display: inline-block; float: left; height: 80px; margin-right: 12px;}

        .inputTitle{font-size: 130%;  font-weight: 500; padding: auto 1px; margin: 8px auto;}
        .inputField{ border: 1px solid #49A6FE}
        .imgMan{height:250px; position: absolute; right: -70px; top:-30px;}
        .btn-register, .btn-accept{border: none;  background-color:  #6D63FF; padding: 12px 34px; font-size: 70%; font-weight: 300; color: #fff;}
        .btn-register:hover,.btn-accept:hover{background-color: #574fbe; border: none; color: #fff;}

        .btn-accept{font-size: 120%; background-color: #41afff; margin-bottom: 20px;}


        .btn-schools{border: none;  background-color:  #FFDD4C; padding: 12px;  width: 150px; font-size: 70%; font-weight: 400; color: #6D63FF;}
        .btn-schools:hover{background-color: #dabd40; border: none; color: #5c52c0;}



        @media( max-width: 1199px){
            .imgTrophy{width: 37%; height: auto; }
            .title01{ font-size: 230%; font-weight: 400; width: 60%; float: right; margin-top: -320px;}
            .title02{margin-top: 120px; font-size: 210%;}

            .formContainer {
                top: 890px;
                left: 10%;
                width: 80%;
                height: 930px;
            }
            .imgApply{ height:270px; margin-top: 90px;}
            .imgParty{ right: 0; opacity: 0.08; top:-185px;}
            .section04{height: 890px;}

        }

        @media( max-width: 1024px){
            .imgTrophy{width: 37%; height: auto; }
            .title01{ font-size: 230%; font-weight: 400; width: 60%; float: right; margin-top: -250px;}
            .title02{margin-top: 170px; font-size: 210%;}

            .formContainer {
                top: 810px;
                height: 1050px;
            }
            .imgApply{ height:250px; margin-top: 20px;}


        }

        @media( max-width: 768px){
            .imgTrophy{width: 37%; height: auto; }
            .title01{ font-size: 230%; font-weight: 400; width: 60%; float: right; margin-top: -230px;}
            .title02{margin-top: 240px; font-size: 200%;}

            .formContainer {
                top: 750px;
                height: 1070px;
            }
            .section04{height: 890px;}


        }

        @media( max-width: 470px){

            .formContainer {
                top: 730px;
                left: 3%;
                width: 94%;
                padding: 15px 0;
                height: 1040px;
            }
            .nav-web{margin-left: 14px;}
            .imgTrophy{width: 70%; height: auto; margin: 90px  15% 20px 15%;}
            .title01{margin-top: 5px; font-size: 150%; font-weight: 400; width: 100%; float: none}
            .title02{margin-top: 115px; font-size: 165%; }
            .imgApply{ height:230px; margin-top: 40px;}

            .section04{height: 700px;}
            .sec4TitleContainer{margin-top: 420px;}
            .sec4TitleContainer div{font-size:80%}
            .imgPeopleContainer{margin-top: -680px;}

            .btn-schools{width: 130px; font-size: 60%}



        }
    </style>

</head>
<body>



<!-- Scholio Header -->
<header class="navbar navbar-top navbar-fixed-top" id="header">
    <div class="container">
        <div class="row">
            <div class="pull-left nav-web">
                <!-- Scholio Branding -->
                    <div class=" ">
                        <img src="new/img/logoNX.png" class="visible-lg visible-md " alt="scholio logo" style="height: 60px;">
                        <img src="new/img/logoNX-m.webp" class="visible-xs visible-sm hidden-md " alt="scholio logo" style="height: 40px;">

                    </div>
            </div>
        </div>
        </div>
</header>




    <div class="section01">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <img class="imgTrophy" src="new/img/form/image01.png" alt="trophy">

                </div>
                <div class="col-lg-7 title01 text-cyan" style="position: relative;">
                    <img class="imgParty visible-md visible-lg" src="new/img/form/party.png" alt="party">
                    Είσαι απόφοιτος λυκείου και ψάχνεις σπουδές με μέλλον στα δημοφιλέστερα Κολλέγια και ΙΕΚ ;

                </div>

            </div>


            <div class="row col-lg-5 title02 text-blue">
                Συμπλήρωσε τα στοιχεία σου και διεκδίκησε μοναδικές υποτροφίες
                {{--<div class="logos visible-lg">--}}
                    {{--<img class="logo" src="upload/avatar/college_medThess.png" alt="logo">--}}
                    {{--<img class="logo" src="upload/avatar/college_amcAth.png" alt="logo">--}}
                    {{--<img class="logo" src="upload/avatar/college_icbsthess.png" alt="logo">--}}
                    {{--<img class="logo" src="upload/avatar/college_nycthess.png" alt="logo">--}}
                    {{--<img class="logo" src="upload/avatar/iek_iekalfa.png" alt="logo">--}}
                    {{--<img class="logo" src="upload/avatar/iek_akmi.png" alt="logo">--}}
                {{--</div>--}}

            </div>



            <div class="formContainer text-cyan">
                
                {{--<div class="imgContainer hidden-md hidden-sm hidden-xs ">--}}
                    {{--<img class="imgMan" src="/new/img/form/man.png" alt="">--}}
                {{--</div>--}}
                
                <div class="col-md-6 inputTitle">Όνομα
                    <div><input class="inputField" type="text"></div>
                </div>
                {{--<div class="clearfix"></div>--}}

                <div class="col-md-6 inputTitle">Επώνυμο
                    <div><input class="inputField" type="text"></div>
                </div>


                <div class="col-md-6 inputTitle pad-t-20">Τηλέφωνο
                    <div><input class="inputField" type="text"></div>
                </div>
                <div class="col-md-6 inputTitle pad-t-20">e-Mail
                    <div><input class="inputField" type="text"></div>
                </div>

                {{--<div class="line"></div>--}}

                <hr class="line mr-t-40"/>


                <div class="col-lg-6 inputTitle">Επίπεδο Σπουδών
                    <select class="">
                        <option value="1">Προπτυχιακά - Bachelor</option>
                        <option value="2">Μεταπτυχιακά - Master</option>
                        <option value="3">IEK - Επαγγελματικες Σπουδές</option>
                    </select>

                </div>
                <div class="col-lg-6 inputTitle">Επιθυμητή Πόλη Σπουδών
                    <select class="">
                        <option value="1">Αθήνα</option>
                        <option value="2">Θεσσαλονίκη</option>
                        <option value="3">Λάρισα</option>
                    </select>
                </div>

                <div class="col-lg-12 inputTitle">Αντικείμενο Σπουδών
                    <div>
                        <textarea name="" id="" cols="" rows="3" style="width: 100%" placeholder=""></textarea>
                    </div>

                    {{--<select class="">--}}
                        {{--<option value="1">Οικονομικά / Διοίκηση / Marketing</option>--}}
                        {{--<option value="2">Τουριστικά</option>--}}
                        {{--<option value="3">Πληροφορική</option>--}}
                        {{--<option value="4">Επιστήμες Υγείας</option>--}}
                        {{--<option value="5">Παιδαγωγικά</option>--}}
                        {{--<option value="6">Ανθρωπιστικές Επιστήμες</option>--}}
                        {{--<option value="7">Πολυτεχνικές Σχολές</option>--}}
                        {{--<option value="8">Ναυτιλιακά</option>--}}
                        {{--<option value="9">Arts & Design</option>--}}
                        {{--<option value="10">Πολιτισμός & Επικοινωνία</option>--}}
                        {{--<option value="11">Μόδα & Ομορφιά</option>--}}


                    {{--</select>--}}
                </div>

                <div class="">
                    <div class="col-xs-12">
                        <div class="checkbox checkbox-primary">
                            <input id="checkbox-signup" name="terms" type="checkbox" required>
                            <label for="checkbox-signup">Αποδέχομαι τους <a class="hoverLink" href="{{ url('terms') }}">Όρους Χρήσης </a> και την <a class="hoverLink" href="{{ url('gdpr') }}">Πολιτική Απορρήτου</a></label>

                            @if ($errors->has('terms'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('terms') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="text-center mar-t-10">
                            <button type="button" class="btn btn-default btn-accept">Αποδοχή</button>
                        </div>
                    </div>
                </div>


                <div class="">
                    <img class="imgApply" src="new/img/form/image03.png" alt="trophy">

                </div>





            </div>


        </div>
    </div>

     <div class="section02">
         <div class="container">


         </div>
     </div>


    <div class="section03">
        <div class="container visible-lg">
            <div class="col-lg-5">
                <img class="imgTrophy" src="new/img/form/image02.png" alt="trophy2">

            </div>
            <div class="row col-lg-7 title03 text-blue mar-b-40">
               <div>Κανε εγγραφή και φτιάξε το βιογραφικό σου.
                   Υποτροφίες ταλέντου θα είναι σύντομα διαθέσιμες.
               </div>
                <div class="text-center mar-t-30">
                    <button type="button" class="btn btn-default btn-register">Εγγραφή</button>
                </div>


            </div>




        </div>
    </div>

    <div class="section04">
        <div class="container">
            <div class="clearfix"></div>

            <div class="col-lg-7 title03 text-blue mar-t-30 sec4TitleContainer" >
                <div class="mar-b-30">Μην ψάχνεις άσκοπα εδώ κι εκεί ! To schol.io είναι εδώ</div>
                <div class="text-center">
                    <button type="button" class="btn btn-default btn-schools mar-r-20">Κολλέγια</button>
                    <button type="button" class="btn btn-default btn-schools">ΙΕΚ</button>
                </div>
            </div>


            <div class="col-lg-5 imgPeopleContainer">
                <img class="imgPeople" src="new/img/form/image06.png" alt="people">

            </div>


        </div>
    </div>





</body>
</html>
