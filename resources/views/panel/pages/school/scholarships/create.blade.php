@extends('panel.layouts.main') 

@section('styles')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.5/jquery.fullpage.css">
<link rel="stylesheet" href="{{'/panel/assets/css/vue-multiselect.css'}}" />
<link rel="stylesheet" href="{{'/panel/assets/css/funkyradio.css'}}" />


<!-- Horizontal Ribbons  CSS -->
<link rel="stylesheet" href="/new/css/ribbonHorizontal.css">

<!-- Hexagon CSS -->
<link rel="stylesheet" href="/new/css/Hexagon.css">

<style>
    .btn-primary,.btn-primary:focus,.btn-primary:visited,.btn-primary:active{background: #0092aa !important; border: none; margin: 10px auto; padding: 5px 20px;}
    .btn-primary:hover{background: #007187 !important;}
    .centered{text-align: center; margin-left: auto; margin-right: auto;}
    .titleText{font-size: 130%;  margin-top: 50px;}

    /*===========================================*/
    /*=============== FLASH ALERT ===============*/
    .verify-title{margin-left: auto; margin-right: auto; text-align: center; color: #fff; font-weight: 300}
    .alert-primary{background: #7CA2B0; border-color: none;  }
    .close-x{color: #fff !important; font-size: 150%; background: transparent; float: right; border: none; padding: 0; margin-top: -11px;}
    .close-x:hover{color: #FD6A33!important;}
    .alert-dismissable{padding: 20px;}

    .verify-title>a{font-weight: 400; color: #fafafa}
    .verify-title>a:hover{font-weight: 400; color: #90fdee
    }
</style>
@endsection 

@section('content') 

@if(count(auth()->user()->info->study) > 0)

    @if(auth()->user()->info->allScholarshipLimits() != 0)
        <scholarships-create></scholarships-create>
    @else
        <div class="titleText centered">
            @lang('panel_scholarships.create.noMoreText')

        </div>
        <div>
            <button class="btn btn-primary centered">@lang('panel_scholarships.create.buyMore')</button>
        </div>
    @endif

@else
    <div class="alert-dismissable alert alert-primary" style="margin-bottom: 40px">
        {{--<button type="button" class="close-x" data-dismiss="alert" aria-hidden="true">--}}
            {{--×--}}
        {{--</button>--}}
        <h3 class="verify-title"><i class="fa fa-exclamation" style="margin-right: 20px;"></i>
            @lang('panel_scholarships.create.createStudies')
            <a href="{{ url('/panel/school/studies') }}"> @lang('panel_scholarships.create.here')
            </a>
        </h3>
    </div>

@endif

@endsection @section('scriptsBefore') {{--
<script src="{{ asset('/new/js/jquery.raty-fa.js') }}"></script>--}} {{--
<script src="{{ asset('/new/js/jquery.arctext.js') }}"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.5/jquery.fullpage.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.2/tinymce.min.js"></script> 

@endsection 

@section('scripts')
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
                currentText: "Σήμερα",
                // monthNames: ["Ιανουάριος", "Φεβρουάριος", "Μάρτιος", "Απρίλιος", "Μάιος", "Ιούνιος",
                //     "Ιούλιος", "Αύγουστος", "Σεπτέμβριος", "Οκτώβριος", "Νοέμβριος", "Δεκέμβριος"],
                // monthNamesShort: ["Ιαν", "Φεβ", "Μαρ", "Απρ", "Μαι", "Ιουν",
                //     "Ιουλ", "Αυγ", "Σεπ", "Οκτ", "Νοε", "Δεκ"],
                // dayNames: ["Κυριακή", "Δευτέρα", "Τρίτη", "Τετάρτη", "Πέμπτη", "Παρασκευή", "Σάββατο"],
                // dayNamesShort: ["Κυρ", "Δευ", "Τρι", "Τετ", "Πεμ", "Παρ", "Σαβ"],
                // dayNamesMin: ["Κυ", "Δε", "Τρ", "Τε", "Πε", "Πα", "Σα"],
                // weekHeader: "Εβδ",
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
@endsection

