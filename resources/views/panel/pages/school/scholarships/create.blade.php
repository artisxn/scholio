@extends('panel.layouts.main')

@section('styles')
    <!-- Wizard CSS -->
    <link rel="stylesheet" href="/panel/assets/css/wizard/smart_wizard.css"/>
    {{-- <link href="/panel/assets/css/wizard/smart_wizard_theme_arrows.css" rel="stylesheet" type="text/css" /> --}}
    <link rel="stylesheet" href="/panel/assets/css/wizard/smart_wizard_theme_circles.css"/>
    <link rel="stylesheet" href="/panel/assets/css/steps.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
@endsection

@section('content')

    <scholarships-create></scholarships-create>
@endsection

@section('scriptsBefore')
    <!-- Include SmartWizard JavaScript source -->
    <script src="/panel/assets/js/wizard/jquery.smartWizard.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.2/tinymce.min.js"></script>

    <script>
        $(document).ready(function(){
            // Smart Wizard
            $('#smartwizard').smartWizard({
                selected: 0,
                theme: 'circles', // default, arrows, circles, dots,
                cycleSteps: false, // Allows to cycle the navigation of steps
                transitionEffect:'fade',
                toolbarSettings: {toolbarPosition: 'bottom',
                    toolbarExtraButtons: [
                        {label: 'Επαναφορά', css: 'btn sc-dark-grey sc-t-white', onClick: function(){ $('#smartwizard').smartWizard("reset"); }},
                        {label: 'Οριστικοποίηση', css: 'btn sc-dark-green sc-t-white', onClick: function(){ Event.$emit('saveScholarship', 'OK'); }}
                    ]
                }
            });
        });
    </script>
@endsection


@section('scripts')
    <script>

        ( function( factory ) {
            if ( typeof define === "function" && define.amd ) {

                // AMD. Register as an anonymous module.
                define( [ "../widgets/datepicker" ], factory );
            } else {

                // Browser globals
                factory( jQuery.datepicker );
            }
        }( function( datepicker ) {

            datepicker.regional.el = {
                closeText: "Κλείσιμο",
                prevText: "Προηγούμενος",
                nextText: "Επόμενος",
                currentText: "Σήμερα",
                monthNames: [ "Ιανουάριος","Φεβρουάριος","Μάρτιος","Απρίλιος","Μάιος","Ιούνιος",
                    "Ιούλιος","Αύγουστος","Σεπτέμβριος","Οκτώβριος","Νοέμβριος","Δεκέμβριος" ],
                monthNamesShort: [ "Ιαν","Φεβ","Μαρ","Απρ","Μαι","Ιουν",
                    "Ιουλ","Αυγ","Σεπ","Οκτ","Νοε","Δεκ" ],
                dayNames: [ "Κυριακή","Δευτέρα","Τρίτη","Τετάρτη","Πέμπτη","Παρασκευή","Σάββατο" ],
                dayNamesShort: [ "Κυρ","Δευ","Τρι","Τετ","Πεμ","Παρ","Σαβ" ],
                dayNamesMin: [ "Κυ","Δε","Τρ","Τε","Πε","Πα","Σα" ],
                weekHeader: "Εβδ",
                dateFormat: "dd-mm-yy",
                firstDay: 1,
                isRTL: false,
                showMonthAfterYear: false,
                yearSuffix: "" };
            datepicker.setDefaults( datepicker.regional.el );
            return datepicker.regional.el;

        } ) );

        $( function() {
          $( "#datepicker" ).datepicker({ minDate: 0, maxDate: "+10M +10D" });
        });


//
//        tinymce.init({
//          selector: 'textarea',
//          height: 300,
//          menubar: false,
//          plugins: [
//            'advlist autolink lists link image charmap print preview anchor',
//            'searchreplace visualblocks code fullscreen',
//            'insertdatetime media table contextmenu paste code'
//          ],
//          toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image'
////          ,content_css: '//www.tinymce.com/css/codepen.min.css'
//        });



    </script>
@endsection
