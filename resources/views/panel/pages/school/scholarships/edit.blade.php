@extends('panel.layouts.main')

@section('scriptsBefore')
<!-- tinyMCE js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.2/tinymce.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>


<script>

    (function (factory) {
        if (typeof define === "function" && define.amd) {

            // AMD. Register as an anonymous module.
            define(["../widgets/datepicker"], factory);
        } else {

            // Browser globals
            factory(jQuery.datepicker);
        }
    }(function (datepicker) {

        datepicker.regional.el = {
            closeText: "@lang('panel_scholarships.create.close')",
            prevText: "@lang('panel_scholarships.create.previous')",
            nextText: "@lang('panel_scholarships.create.next')",
            @if(request()->cookie('lang') == 'el')
                currentText: "Σήμερα",
                monthNames: ["Ιανουάριος", "Φεβρουάριος", "Μάρτιος", "Απρίλιος", "Μάιος", "Ιούνιος",
                    "Ιούλιος", "Αύγουστος", "Σεπτέμβριος", "Οκτώβριος", "Νοέμβριος", "Δεκέμβριος"],
                monthNamesShort: ["Ιαν", "Φεβ", "Μαρ", "Απρ", "Μαι", "Ιουν",
                    "Ιουλ", "Αυγ", "Σεπ", "Οκτ", "Νοε", "Δεκ"],
                dayNames: ["Κυριακή", "Δευτέρα", "Τρίτη", "Τετάρτη", "Πέμπτη", "Παρασκευή", "Σάββατο"],
                dayNamesShort: ["Κυρ", "Δευ", "Τρι", "Τετ", "Πεμ", "Παρ", "Σαβ"],
                dayNamesMin: ["Κυ", "Δε", "Τρ", "Τε", "Πε", "Πα", "Σα"],
                weekHeader: "Εβδ",
            @endif
            dateFormat: "dd-mm-yy",
            firstDay: 1,
            isRTL: false,
            showMonthAfterYear: false,
            yearSuffix: ""
        };
        datepicker.setDefaults(datepicker.regional.el);
        return datepicker.regional.el;

    }));
</script>

<script>
    $('#terms-edit').hide();
    
    tinymce.init({
        @if(request()->cookie('lang') == 'el')
            language_url: '/el.js',
        @endif

        entity_encoding: "raw",
        selector: 'textarea',
        height: 490,
        menubar: false,

        plugins: [
            'autolink lists link  charmap  preview anchor',
            'visualblocks  fullscreen',
            'insertdatetime media table paste '
        ],
        toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link table',

        setup: function (ed) {
            ed.on("KeyDown", function (ed, evt) {
                chars_without_html = $.trim(tinyMCE.activeEditor.getContent().replace(/(<([^>]+)>)/ig, "")).length;
                var key = ed.keyCode;
                console.log(ed.keyCode)

                var remaining = max_chars - chars_without_html;

                $('#chars_left').html(remaining);

                if (remaining <= 0 && (key != 8 && key != 46)) {
                    ed.stopPropagation();
                    ed.preventDefault();
                    $('#chars_left').html('ΟΧΙ ΑΛΛΟ!')
                }
            });
        }

    });


</script>
@endsection

@section('styles')
    {{--<link href="/panel/assets/css/form.css" rel="stylesheet" type="text/css" />--}}
    {{--<link href="/new/css/main.css" rel="stylesheet" type="text/css" />--}}
    <link rel="stylesheet" href="/new/css/Bootstrap-xxs-xxxs.css" />
    <link rel="stylesheet" href="{{'/panel/assets/css/funkyradio.css'}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">

    <style>

        .margin-right-10 { margin-right: 10px; }
        .margin-top-10 { margin-top: 10px; }
        .margin-top-30 { margin-top: 30px; }
        .margin-top-50 { margin-top: 50px; }


        .center-col{float: none; margin: 0 auto;}


        .scholar-header{ height: 140px; background-color: #008DA5; margin: 0 0 70px 0; border-radius: 10px}

        .scholar-name,.level-name{ position: absolute; left: 90px; max-width: 74%}
        .scholar-name{font-size: 135%; font-weight: 300; color: #fff;  bottom: 6px;}
        .level-name{font-size: 125%; font-weight: 300; color: #008DA5;  bottom: -26px;}
        .trophy-image{ position: absolute; right: 10px; bottom: 2px; height: 80px; opacity: 0.9}

        .img-container{height: 55px;  width:55px; background-color: #fff; border: 1px solid #FD6A33; border-radius: 5px; position: absolute; bottom: -23px; left: 25px; box-shadow: 0 0 10px #aaa;}
        .section-image{max-height: 40px; max-width: 40px}
        .hor-vert-center{  position: absolute;  top: 50%;  left: 50%;  transform: translateX(-50%) translateY(-50%) }

        /*.first-col{margin-left: -10px;}*/
        .colmn{
            /*padding-left: 20px;*/
            border-right: 1px solid #cdcdcd;
            margin-bottom: 10px;
            /*background-color: #ddd; */
            /*height: 90px;*/
        }





        @media(min-width: 1450px){
            .inner-column{max-width: 70%; margin-left: 16%;}
        }
        @media(min-width: 1820px){
            .inner-column{max-width: 60%; margin-left: 22%;}
        }
        @media(min-width: 2120px){
            .inner-column{max-width: 45%; margin-left: 27%;}
        }



        .container-21{padding: 0 10px 0 0;}
        .container-22{padding: 0 0 0 10px;}
        /*.cont-in{ height: 80px; background-color: #f3f6f7; border: 1px solid #ccc; border-radius: 8px;}*/

        .img2-container{text-align: center;}
        .img2-inner{margin-top: 20px}
        .finance-image{max-height: 40px; max-width: 55px;}
        .finance-text{margin-left: 10px; font-weight: 300;}

        .line{height: 1px; background-color: #bbb; margin-top: 3px;opacity: 0.8}

        .adm-sel-title{font-size: 130%; font-weight: 300; margin-left: 15px}

        .avatar-img{height: 42px; width: auto; border-radius: 6px; border: 1px solid #bbb; box-shadow: 0 0 10px #fff; margin: 8px 0;}
        .name-text{ font-weight: 300; color: #777}


        .pad-0{margin: 0}

        .funkyradio input[type="radio"]:empty ~ label, .funkyradio input[type="checkbox"]:empty ~ label {
            line-height: 2.9em;
        }




        /*  ==========  Button  ===========  */

        .sc-btn {
            /*float: right;*/

            color: #ffffff;
            border: none;
            border-radius: 5px;
            padding: 7px 15px;
            font-weight: 300;
            display: block; text-align: center;  float: none; margin-left: auto; margin-right: auto;
        }

        .disabled{background: #5b7079;}
        .disabled:hover{cursor: not-allowed;}
        .sc-green{background:#00bcd4;}
        .sc-orange {background: #FD6A33;}
        .sc-dark-green{background: #008da5;}

        .sc-btn:focus,.sc-btn:active{outline:none;}
        .btn-primary{background-color: #0097af  }
        .btn-primary:hover{background-color: #007f97
        }

        button.sc-dark-green:hover{background-color: #006880  }

        @media (max-width: 420px) {
            .sc-btn{display: block; text-align: center;  float: none; margin-left: auto; margin-right: auto; padding: 8px 15px;}
        }

        .input-href,.input-href:visited,.input-href:active,.input-href:focus{color: #888;}
        label{width: 280px;  padding-left: 6px;}
        .funkyradio-success input[type="radio"]:checked~label:before,
        .funkyradio-success input[type="checkbox"]:checked~label:before{text-align: center;}



        @media (min-width: 1200px){
            label{ width: 390px;}
        }
        @media (min-width: 1600px){
            .col-xl-4{width: 33.33%}
            label{ width: 350px;}
        }
        @media (min-width: 1910px){
            .col-xl-4{width: 25%}
            label{ width: 330px;}
        }
        @media (min-width: 2190px){
            label{ width: 390px;}
        }


        @media (max-width: 840px){
            .saveButton{text-align: center; margin-right: auto; margin-left: auto;}
            .sc-btn{float: none;}
            .col-xxs-name{margin-left: auto; margin-right: auto; text-align: center; width: 100%;}
            label{ margin-left:10px; width: 420px;}
        }

        @media (max-width: 640px){
            .col-xxs-name{margin-left: auto; margin-right: auto; text-align: center; width: 100%;}
            label{margin-left:5px; width: 360px;}
        }

        @media(max-width: 478px){
            label{margin-left:3px; width: 280px;}
        }
        @media(max-width: 380px){
            label{margin-left:1px; width: 270px; padding-right: 2px;}
        }
        @media(max-width: 360px){
            label{width: 220px;}
        }


        /*.datepicker-lg{ margin-left: -50px;}*/
        /*.datepicker-mobile{margin-left: -23px;}*/
        .datepicker-input{ background: transparent; border: none; display: inline-block; margin-top: -10px}
        .datepicker-input:hover{cursor: pointer; color: #FD6A33}

        .terms-icon:hover{color: #FD6A33; cursor: pointer;}



        /*  ===========================================  */
        /*  ==========  Ended Fixed Banner  ===========  */
        /*  ===========================================  */

        .non-active{opacity: 0.45}
        .margin-right-30{margin-right: 30px}
        .box{ border: solid 5px #FD6A33; border-radius:10px; background: #fff; height: 65px; width: 320px; z-index: 1; bottom:70px;  right:25px;
             position: fixed; box-shadow: 0 0 15px 1px #fff}
        .ended{ opacity: 0.9; font-size: 170%; font-weight: 300; color: #008da5; position: relative;
            top: 50%;  transform: translateY(-50%); text-align: center;}
        .fa-flag, .fa-flag-checkered{ position: fixed; top: -90px; left: 20px; font-size: 420%!important; color: #FD6A33; }


        /*@media (min-width:1800px){*/
            /*.box{width: 60%}*/
        /*}*/
        /*@media (max-width:1449px){*/
            /*.ended{font-size: 5vw;}*/
        /*}*/
        /*@media (max-width:830px){*/
            /*.ended{font-size: 5.4vw;}*/
            /*.box{height: 100px;}*/
            /*.margin-right-30{margin-right: 15px}*/
        /*}*/

        /*@media (max-width:420px){*/
            /*.ended{font-size: 5.8vw;}*/
            /*.margin-right-30{margin-right: 5px}*/
        /*}*/




        /*  ===============================  */

        @media (min-width: 579px )and (max-width: 590px) {
            .pad-0{padding: 9px}
            .scholar-name{max-width: 70%; font-size: 125%; bottom: 3px;}
        }

        @media (min-width: 568px )and (max-width: 578px) {
            .pad-0{padding: 1px}
        }
        @media (min-width: 481px )and (max-width: 567px) {
            .pad-0{padding: 1px}
            .pad-left-5-xxs{padding-left: 4px;}
            .scholar-name{font-size: 120%; bottom: 1px}
        }

        @media (max-width: 480px) {
            .pad-0{padding: 0; margin-top: 6px;}
            .colmn{border: none}
            .pad-left-5-xxs{padding-left: 0; padding-right: 14px;}
            .first-col{margin-left: 0}
            .scholar-name{ font-weight: 300; font-size: 105%; bottom: -2px}
            .level-name{font-size: 100%}
            .amount-metric{display: block; text-align: center}
            .scholar-header{margin-top: 15px; }
        }



        @media (max-width: 380px) {
            .img-container,.scholar-name,.level-name{ left: 0; right: 0; text-align: center; margin-left: auto; margin-right: auto;}
            .img-container {top:25px;}
            .scholar-name{ bottom: 5px;}
            .level-name{bottom: -25px;}
            .scholar-header{padding: 0;}
            .outer-row .col-sm-12 {padding: 2px!important; }


        }

        /* =========TOOLTIP=========*/
        .tool {
            position: relative;
            cursor: auto;
        }

        .tooltiptext  {
            font-weight: 300;
            visibility: hidden;
            /*width: 300px;*/
            color: #fff;
            text-align: left;

            padding: 15px;
            position: absolute;
            z-index: 1;
            bottom: 120%;
            margin-left: -140px;
            opacity: 0;
            transition: opacity 0.1s;
            background-color: #007991;
            border-radius: 5px;
            border: 1px solid #009fb9;
        }


        .tooltip3{width: 570px;  bottom: 27px; left: 140px;}


        @media (max-width: 767px) {
            .tooltip3{width:510px; margin-left: -250px;  bottom: 150%;}

        }

        @media (max-width: 430px) {
            .tooltip3{width:390px;}
        }

        @media (max-width: 380px) {
            .tooltip3{width:310px;}
        }

        /*.tooltiptext::after {*/
        /*content: "";*/
        /*position: absolute;*/
        /*top: 100%;*/
        /*left: 50%;*/
        /*margin-left: -5px;*/
        /*border-width: 5px;*/
        /*border-style: solid;*/
        /*border-color: #007991 transparent transparent transparent;*/
        /*}*/
        .tool:hover .tooltiptext{
            visibility: visible;
            opacity: 1;
        }

        /* =================================*/


        /* /////////////////////////////////////////////////////////////////////////////////////////////// */

        /*==== DATE picker jQuery STYLING ====*/

        .ui-widget-header {
            background: #00bcd4;
            color: #fff
        }

        .ui-icon,
        .ui-icon:hover {
            width: 16px;
            height: 16px;
            /*background-color: #00bcd4;*/
        }

        .ui-widget-header .ui-icon {
            background-image: url("/images/ui-icons_ffffff_256x240.png");
        }

        .ui-state-default,
        .ui-widget-content .ui-state-default,
        .ui-widget-header .ui-state-default,
        .ui-button,
        html .ui-button.ui-state-disabled:hover,
        html .ui-button.ui-state-disabled:active {
            border: none;
            background: #f4f4f4;
            /*font-weight: bold;*/
            color: #004276;
        }

        .ui-state-highlight,
        .ui-widget-content .ui-state-highlight,
        .ui-widget-header .ui-state-highlight {
            border: none;
            background: #008da5;
            color: #fff;
        }

        .ui-state-active,
        .ui-widget-content .ui-state-active,
        .ui-widget-header .ui-state-active,
        .ui-button:active,
        .ui-button.ui-state-active:hover {
            background: #00bcd4;
            /*font-weight: bold;*/
            color: #fff;
        }


        /*===============================*/

        /* ======  avoid yellow input background on chrome ============ */
        input:-webkit-autofill,
        input:-webkit-autofill:hover,
        input:-webkit-autofill:focus,
        input:-webkit-autofill:active{
            -webkit-box-shadow: 0 0 0 30px #F1f4f5 inset;
            -webkit-text-fill-color: #555;
        }
        /* =========================================================== */





    </style>
@endsection

@section('content')

    @if(!$scholarship->active)
        <div class="box">
            <div class="ended">
                <i class="fa fa-flag margin-right-10"></i>
                @lang('scholarship_view.top.ended') {{Carbon\Carbon::parse($scholarship->end_at)->format('d-m-Y')}}
            </div>
        </div>
    @endif




    <div class="row outer-row {{ $scholarship->active ? '' : 'non-active'}} ">
        <div class="col-sm-12">
            <div class="">   <!-- class="card-box" -->

                <form method="POST" action="/scholarship/{{$scholarship->id}}/update">
                <div class="col-xs-12 scholar-header">
                    {{--<div class="scholar-name">{{ $scholarship->study->section[0]->name }}</div>--}}
                    <div class="scholar-name">

                        @if($scholarship->multiple)
                            @if(count($scholarship->multipleStudies )<3)
                                    @foreach($scholarship->multipleStudies as $study)
                                        <div style="font-size: 80%; font-weight: 300">
                                            {{ $study->name }}
                                        </div>
                                    @endforeach
                            @else
                                <div class="tool">
                                    {{--Πολλαπλές Σπουδές: --}}
                                    {{count($scholarship->multipleStudies)}} @lang('scholarship_view.edit.studies')
                                    @if(count($scholarship->multipleStudies )<6)
                                    <div class="tooltiptext tooltip3">
                                        @foreach($scholarship->multipleStudies as $study)
                                            <div style="font-size: 80%; font-weight: 300">
                                                {{ $study->name }}
                                            </div>
                                        @endforeach
                                    </div>
                                    @endif
                                </div>

                            @endif
                        @else
                            {{ $scholarship->study->name }}
                        @endif
                    </div>
                    <div class="level-name">{{ $scholarship->study->section[0]->level->name ?? $scholarship->multipleStudies[0]->section[0]->level->name }}</div>
                    <div class="img-container">
                        <img class="section-image hor-vert-center" src="/panel/assets/images/steps/{{ $scholarship->study->section[0]->name ?? 'studies' }}.png" alt="">
                    </div>
                    <img class="trophy-image hidden-xxxs" src="/new/img/trophy5white.png" alt="">
                </div>

                <div class="clearfix"></div>

                <!-- ============= LG ================== -->
                <div class="hidden-sm hidden-md hidden-xs col-xxxs-12 col-lg-3 colmn">
                    <div class="inner-column">
                        <span class="col-lg-10 ">
                            <div class="">  <i class="fa fa-pencil margin-right-10"></i>@lang('scholarship_view.top.admission'):</div>
                            <div class="margin-top-10">  <i class="fa fa-thumbs-o-up margin-right-10"></i>@lang('scholarship_view.top.interested'):</div>
                        </span>
                        <span class="col-lg-2 text-right">
                            <div class="">{{$scholarship->usersLength()}}</div>
                            <div class="margin-top-10">{{$scholarship->interestsLength()}}</div>
                        </span>
                    </div>
                </div>

                <div class="hidden-sm hidden-md hidden-xs col-xxxs-12 col-lg-4 colmn">
                    <div class="inner-column">
                        <span class="col-lg-7">
                            <div class="">  <i class="fa fa-thumb-tack margin-right-10"></i>@lang('scholarship_view.top.posted'):</div>
                            <div class="margin-top-10">  <i class="fa fa-flag-o margin-right-10"></i>@lang('scholarship_view.top.end'):</div>
                        </span>
                        <span class=" col-lg-5 text-right">
                            <div class="">
                                {{Carbon\Carbon::parse($scholarship->created_at)->format('d-m-Y')}}

                                </div>
                            <div class="margin-top-10">{{Carbon\Carbon::parse($scholarship->end_at)->format('d-m-Y')}}</div>
                        </span>
                    </div>
                </div>

                <div class="hidden-sm hidden-md hidden-xs col-xxxs-12 col-lg-4">
                    <div class="inner-column">
                        <span class="col-lg-8">
                            <div class="">  <i class="fa fa-user-o margin-right-10"></i>@lang('scholarship_view.edit.limit'):</div>
                            <div class="margin-top-10">  <i class="fa fa-calendar margin-right-10"></i>@lang('scholarship_view.top.exam_date'):</div>
                        </span>
                        <span class="col-lg-4 text-right">
                            <div class="" style="float: right">
                                {{ $scholarship->admissions_limit }}
                            </div>
                            @if($scholarship->exam)
                                <div class="margin-top-10" style="float: right">

                                    <input type="text" id="datepicker" size="32" class="ll-skin-cangas datepicker-input datepicker-lg" style="text-align: right; height: 37px;"
                                    value="{{Carbon\Carbon::parse($scholarship->exam_date)->format('d-m-Y')}}" name="exams" />
                                </div>
                            @else
                                _
                            @endif
                        </span>
                    </div>
                </div>

                <!-- ==============  SM XS XXS MD ================= -->

                <div class="row pad-0">
                    <div class=" hidden-lg col-xxxs-12 col-xxs-6 col-xs-6 col-sm-6 col-md-6 pad-0 colmn" >
                    <span class="col-xxxs-7 col-xxs-10 col-xs-8  col-sm-9 col-md-7 pad-0">
                        <div class="">  <i class="fa fa-pencil margin-right-10"></i>@lang('scholarship_view.top.admission'):</div>
                        <div class="margin-top-10">  <i class="fa fa-thumbs-o-up margin-right-10"></i>@lang('scholarship_view.top.interested'):</div>
                        <div class="margin-top-10">  <i class="fa fa-pencil-square-o margin-right-10"></i>@lang('scholarship_view.top.exams'):</div>

                    </span>
                    <span class="col-xxxs-5 col-xxs-2 col-xs-2 col-sm-2 col-md-2 text-right">
                        <div class="text-right">{{$scholarship->usersLength()}}</div>
                        <div class="margin-top-10 text-right">{{$scholarship->interestsLength()}}</div>
                        <div class="margin-top-10 text-right">
                            @if($scholarship->exams)
                                @lang('scholarship_view.yes')
                            @else
                                @lang('scholarship_view.no')
                            @endif
                        </div>
                    </span>
                    </div>



                    <div class="hidden-lg col-xxxs-12 col-xxs-6 col-xs-6 col-sm-6 pad-0 pad-left-5-xxs">
                        <span class="col-xxxs-7 col-xxs-7 col-xs-7 col-sm-7  col-md-7 pad-0" >
                        <div class="">  <i class="fa fa-thumb-tack margin-right-10"></i>@lang('scholarship_view.top.posted'):</div>
                        <div class="margin-top-10">  <i class="fa fa-flag-o margin-right-10"></i>@lang('scholarship_view.top.end'):</div>
                         <div class="margin-top-10">  <i class="fa fa-calendar margin-right-10"></i>@lang('scholarship_view.top.exam_date'):</div>
                    </span>
                    <span class="col-xxxs-5 col-xxs-5 col-xs-5 col-sm-5 col-md-5 col-lg-5 text-right pad-0">
                        <div class="">{{Carbon\Carbon::parse($scholarship->created_at)->format('d-m-Y')}}</div>
                        <div class="margin-top-10">{{Carbon\Carbon::parse($scholarship->end_at)->format('d-m-Y')}}</div>
                        <div class="margin-top-10">{{Carbon\Carbon::parse($scholarship->exam_date)->format('d-m-Y')}}</div>
                        {{--@if($scholarship->exam)--}}
                            {{--<div class="margin-top-10">--}}
                                {{--<input type="text" id="datepicker-mob" size="32" class="ll-skin-cangas datepicker-input datepicker-mobile" style="text-align: center; height: 37px;"--}}
                                       {{--value="{{Carbon\Carbon::parse($scholarship->exam_date)->format('d-m-Y')}}" name="exams" />--}}
                            {{--</div>--}}
                        {{--@else--}}
                            {{--_--}}
                        {{--@endif--}}
                    </span>
                    </div>

                </div>


                <div class="clearfix"></div>
                <!-- =============================== -->
                <div class="margin-top-30"></div>



                <div class="col-xs-6 container-22 img2-container">
                    <div class="cont-in col-sm-8 center-col">
                        <div class="img2-inner">
                            <img class="finance-image" src="{{ $scholarship->criteria->icon }}" alt="" style="">
                            <div class="finance-text">{{ $scholarship->criteria->name }}</div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-6 container-21 img2-container " >
                    <div class="cont-in col-sm-8 center-col" >
                        <div class="img2-inner">
                            <img class="finance-image" src="{{ $scholarship->financial->icon }}" alt="" style="">
                            <div class="finance-text">{{ $scholarship->financial->plan }} <span class="amount-metric"> {{ $scholarship->financial_amount }} {{ $scholarship->financial->metric }} </span> </div>
                        </div>
                    </div>
                </div>



                <div class="col-sm-12 line"></div>


                <div class="clearfix"></div>
                <!-- ================================ -->
                <div class="margin-top-50"></div>

                  @if($scholarship->active)
                <div class="adm-sel-title"> <i class="fa fa-check margin-right-10"></i>@lang('scholarship_view.edit.selectWinners') {{ $scholarship->winners }}

                    @if($scholarship->winners>1)
                    <span>
                        @lang('scholarship_view.edit.winners')
                    </span>
                    @else
                        <span>
                        @lang('scholarship_view.edit.winner')
                    </span>
                    @endif

                </div>
                  @else
                      <div class="adm-sel-title"> <i class="fa fa-check margin-right-10"></i>@lang('scholarship_view.edit.scholarWinners') </div>
                  @endif

                <div>
                    @foreach($scholarship->admission as $admission)
                        <div class=" col-xxs-name col-sm-6 col-xl-4">
                            <img class="avatar-img" src="{{ $admission->user->info->avatar }}" >
                            @if($scholarship->active)
                                {{--<input class="winners-checkbox" type="checkbox" name="winner[]" value="{{ $admission->user->id }}">--}}



                                <span class="funkyradio" style=" display: inline-block;">
                                            <span class="funkyradio-success">
                                                <input class="winners-checkbox" type="checkbox" id="win{{ $admission->user->id }}" name="winner[]" value="{{ $admission->user->id }}">

                                                <label for="win{{ $admission->user->id }}">
                                                    <a href="/panel/school/admission/{{$admission->user->getAdmissionId($scholarship) }}" class="input-href">
                                                    {{$admission->user->name}}
                                                    </a>
                                                </label>

                                            </span>
                                 </span>

                                {{--<a href="/panel/school/admission/{{$admission->user->getAdmissionId($scholarship) }}">--}}
                                    {{--<span class="name-text"> {{$admission->user->name}} </span>--}}
                                {{--</a>--}}
                            @else
                                <input type="checkbox" onclick="return false;" name="winner[]" value="{{ $admission->user->id }}">
                                <a href="/panel/school/admission/{{$admission->user->getAdmissionId($scholarship) }}">
                                    <span class="name-text"> {{$admission->user->name}} </span>
                                </a>
                            @endif
                        </div>
                    @endforeach
                </div>
                <div class="margin-top-30"></div>
                <div class="clearfix"></div>
                <div class="col-sm-12 line"></div>
                <!-- ================================ -->
                <div class="margin-top-50"></div>

                <div class="adm-sel-title"> <i id="open-terms" class="fa fa-pencil margin-right-10 terms-icon"></i>@lang('scholarship_view.edit.terms')</div>

                <div id="terms-text">
                    <?php echo $scholarship->terms; ?>
                </div>

                <div id="terms-edit" class="hidden">
                    <textarea value="" name="terms">{{ $scholarship->terms }}</textarea>
                </div>


                <div class="margin-top-50"></div>
                <div class="clearfix"></div>
                <div class="col-sm-12 line"></div>
                <!-- ================================ -->
                <div class="margin-top-50"></div>


                <div class="margin-top-30 saveButton">

                    {{ csrf_field() }}
                    <button type="submit" class="btn sc-btn btn-primary">
                        <i class="fa fa-save margin-right-10"></i>@lang('scholarship_view.edit.btnSave')</button>
                </div>

                </form>

                <form method="POST" action="/scholarship/{{$scholarship->id}}/end" style="margin-top: 10px; margin-bottom: 10px;">
                    <button id="saveButton" type="submit" class="sc-btn disabled" disabled>
                        <i class="fa fa-flag-o margin-right-10"></i>@lang('scholarship_view.edit.btnEnd')</button>
                </form>

                <form method="POST" action="/scholarship/{{$scholarship->id}}/delete">
                    {{ csrf_field() }}
                     {{ method_field('DELETE') }}
                     @if($scholarship->usersLength() == 0)
                    <button type="submit" class="btn sc-btn btn-danger">
                        <i class="fa fa-trash margin-right-10"></i>@lang('scholarship_view.edit.btnDelete')</button>
                    @endif
                </form>
                </div>
            </div>
        </div>
    </div>

    @if(count($errors) > 0 )
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

@endsection

@section('scripts')

<script>

    $( document ).ready(function() {


        $("#datepicker").datepicker({ minDate: 0, maxDate: "+5M +10D" })
        $("#datepicker-mob").datepicker({ minDate: 0, maxDate: "+5M +10D" })
        $('#terms-edit').hide();
        var limit = {{ $scholarship->winners }};


        var open=false;
        $('#open-terms').click(function(){
            if(!open){
                $('#terms-text').hide();
                $('#terms-edit').removeClass("hidden")
                $('#terms-edit').show();
            }
            else{
                $('#terms-edit').addClass("hidden")
                $('#terms-edit').hide();
                $('#terms-text').show();
            }



            open=!open;
            console.log( open );
        })

        $('input.winners-checkbox').on('change', function(evt) {
            if( $('.winners-checkbox:checked').length >= limit+1) {
                this.checked = false;
            }

            if($('.winners-checkbox:checked').length == limit){
                @if(!$activeDate || $scholarship->admissions_limit == 0)
                    $('#saveButton').addClass("sc-dark-green").removeClass("disabled");
                $('#saveButton').prop('disabled', false);
                @endif
            }else{
                $('#saveButton').removeClass("sc-dark-green").addClass("disabled");
                $('#saveButton').prop('disabled', true);
            }
        });


    });



</script>
@endsection
