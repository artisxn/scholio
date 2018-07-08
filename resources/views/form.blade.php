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
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500&subset=greek" rel="stylesheet">

    <!-- font-awesome -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <!-- Main CSS -->
    <link href="{{asset('new/css/main.css')}}" rel="stylesheet">





    <!-- jQuery js-->
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>--}}

    <!-- Bootstrap js-->
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}

    <!-- Bootstrap Select js  -->
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.4/js/bootstrap-select.min.js"></script>--}}


    <style>
        body {
            background-color: #fff;
            font-family: Roboto, Helvetica, Arial, sans-serif;
        }
        .navbar-top{
            background: #eee;
            border-bottom: 1px solid #d4d4d4;
            box-shadow: 0 0  20px #999;
            opacity: 0.9;
        }
        .container{position: relative;}

        .nav-web{margin: 8px auto 4px auto;}
        .section01{height: 600px; background-color: #ffffff; position: relative;}
        .section02{height: 600px; background-color: #CEE4F1;}
        .section03{height: 600px; background-color: #F1F4F5;}


        .formContainer{
            position: absolute;
            top: 400px;
            right:40px;

            width: 45%;
            height: 900px;
            border-radius: 5px;
            background-color: #FFDD4C;
            border: 1px solid #49A6FE;
            box-shadow: 0 0  20px #999;
            padding: 20px 10px;

        }
        .imgTrophy{max-width: 100%; height:530px; margin-top: 130px;}
        .title01{color: #49A6FE; font-size: 290%; font-weight: 300; margin-top: 180px; text-align: center;}

        .inputTitle{font-size: 130%; color: #49A6FE; font-weight: 500; padding: auto 1px; margin: 8px auto;}
        .inputField{ border: 1px solid #49A6FE}
        .imgContainer{}
        .imgMan{height:250px; position: absolute; right: -70px; top:-30px;}

        @media( max-width: 1170px){

            .formContainer {
                top: 640px;
                left: 10%;
                width: 80%;
            }

        }

        @media( max-width: 470px){

            .formContainer {
                left: 4%;
                width: 92%;
            }

        }
    </style>

</head>
<body>



<!-- Scholio Header -->
<header class="navbar navbar-top navbar-fixed-top" id="header">
    <div class="container">
        <div class="row">
            <div class="pull-left visible-lg visible-md nav-web">
                <!-- Scholio Branding -->
                    <div class="">
                        <img src="new/img/logoNX.png" class="" alt="scholio logo" style="height: 60px;">
                    </div>
            </div>
        </div>
        </div>
</header>




    <div class="section01">
        <div class="container">
            <div class="col-lg-6">
                <img class="imgTrophy" src="new/img/form/image01.png" alt="trophy">

            </div>
            <div class="col-lg-6 title01">
                Συμπλήρωσε τη φόρμα, και διεκδίκησε μοναδικές υποτροφίες !

            </div>


            <div class="formContainer">
                
                <div class="imgContainer">
                    <img class="imgMan" src="/new/img/form/man.png" alt="">
                </div>
                
                <div class="col-lg-8 inputTitle">Όνομα
                    <div><input class="inputField" type="text"></div>
                </div>
                <div class="clearfix">

                </div>


                <div class="col-lg-8 inputTitle">Επώνυμο
                    <div><input class="inputField" type="text"></div>
                </div>

            </div>


        </div>
    </div>

     <div class="section02">
         <div class="container">


         </div>
     </div>

    <div class="section03">
        <div class="container">


        </div>
    </div>





</body>
</html>
