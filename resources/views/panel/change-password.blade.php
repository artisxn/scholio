@extends('panel.layouts.main') 

@section('styles')

        <!-- Polymer Float Form CSS -->
<link rel="stylesheet" href="/new/css/jquery.polymer-form.min.css" >
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">

<style>
    /* ======  avoid yellow input background on chrome ============ */
    input:-webkit-autofill,
    input:-webkit-autofill:hover,
    input:-webkit-autofill:focus,
    input:-webkit-autofill:active{
        -webkit-box-shadow: 0 0 0 30px #FFF inset;
        -webkit-text-fill-color: #555;
    }
    /* =========================================================== */

    .title{font-size: 160%; color:#008da5; margin-top: 20px; margin-bottom: 10px; }

    .main-container{text-align: center; width: 700px; margin-left: auto; margin-right: auto;
                    padding: 20px; border: 1px solid #bbb; border-radius: 6px; background: #fafafa; margin-top: 30px;}

    .email-cont{text-align: left; margin-top: 20px;}
    .email{color:#008da5; font-size: 125%; font-weight: 300 }
    .email-text{font-weight: 300}
    .icon-envelope{margin-top: 2px; margin-right: 10px; color: #008da5;}
    .line{height: 1px; width: 100%; background: #c8c8c8; margin-top: 2px;}

    .icon-password{float: left; margin-top: -44px; color: #008da5}
    .input-password{margin-top: 50px;}
    input.demo-form{padding-left: 20px;}
    label{margin-left: 10px; font-weight: 300; font-size: 95%;}
    .btn-submit{margin-top: 30px; border: none; background: #0093ab; padding: 10px 50px; color: #fff; margin-bottom: 30px;}
    .btn-submit:hover,.btn-submit:focus,.btn-submit:active{ background: #00778e; color: #fff;
    }
    @media (max-width: 999px){
        .main-container{ width: 70%; margin-left: 15%;}
    }
    @media (max-width: 659px){
        .main-container{ width: 100%; margin-left: 0;}
    }
    @media (max-width: 450px){
        .main-container{ padding: 20px 8px;}
    }
</style>

@endsection


@section('scriptsBefore')

    <script>
        $(document).ready(function(){
            $('#main').fadeIn(90).removeClass('hidden');
        });
    </script>
    <!-- Polymer Float Input Form js -->
    <script src="/new/js/jquery.polymer-form.min.js"></script>
    <script type="text/javascript" src="/panel/assets/js/cv.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
@endsection

@section('content')

<div id="main" class="main-container hidden ">

    <div class="title">Αλλαγή Κωδικού</div>

    <div class="email-cont">
        <div class="email">
            email
        </div>
        <div class="">
            <span><i class="fa fa-envelope icon-envelope" style="float: left"></i> <span class="email-text">{{auth()->user()->email}}</span></span>
        </div>
        {{--<div class="line"></div>--}}


    </div>


    <form action="/change/password" method="POST">
        <div class="input-password">
            <input  type="password" label="Τρέχων Κωδικός" name="password" class="demo-form " value="">
            <i class="fa fa-key icon-password"></i>
        </div>
        <div class="input-password">
            <input  type="password" label="Νέος Κωδικός" name="password" class="demo-form " value="">
            <i class="fa fa-key icon-password"></i>
        </div>
        <div class="input-password">
            <input  type="password" label="Επαλήθευση Νέου Κωδικού" name="password" class="demo-form " value="">
            <i class="fa fa-key icon-password"></i>
        </div>
        <button class="btn btn-submit" type="submit">Αποδοχή</button>
    </form>

</div>

@endsection