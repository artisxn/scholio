@extends('panel.layouts.main')

@section('styles')
    <!-- Wizard CSS -->
    <link rel="stylesheet" href="/panel/assets/css/wizard/smart_wizard.css"/>
    {{-- <link href="/panel/assets/css/wizard/smart_wizard_theme_arrows.css" rel="stylesheet" type="text/css" /> --}}
    <link rel="stylesheet" href="/panel/assets/css/wizard/smart_wizard_theme_circles.css"/>
    <link rel="stylesheet" href="/panel/assets/css/steps.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="{{asset('/css/atwho.css')}}"/>
    <link rel="stylesheet" href="{{'/panel/assets/css/vue-multiselect.css'}}" />


{{--<!-- Profile  CSS -->--}}
{{--<link href="/new/css/profile.css" rel="stylesheet">--}}

<!-- Horizontal Ribbons  CSS -->
<link href="/new/css/ribbonHorizontal.css" rel="stylesheet">

<!-- Hexagon CSS -->
<link href="/new/css/Hexagon.css" rel="stylesheet">


@endsection

@section('content')
    <scholarships-create></scholarships-create>
@endsection

@section('scriptsBefore')
    <!-- Include SmartWizard JavaScript source -->
    <script src="/panel/assets/js/wizard/jquery.smartWizard.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.2/tinymce.min.js"></script>
    <script src="{{asset('/js/caret.js')}}"></script>
    <script src="{{asset('/js/atwho.js')}}"></script>

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
                        {label: "@lang('panel_scholarships.create.reset')", css: 'btn sc-dark-grey sc-t-white', onClick: function(){ $('#smartwizard').smartWizard("reset"); }},
                        {label: "@lang('panel_scholarships.create.save')", css: 'btn sc-dark-green sc-t-white', onClick: function(){ Event.$emit('saveScholarship', 'OK'); }}
                    ]
                }
            });

        });
    </script>
@endsection


@section('scripts')

    <script>

        //Smooth Scroll from scholarship creation STEPS
        $('a[href*="#"]')
                // Remove links that don't actually link to anything
                .not('[href="#"]')
                .not('[href="#0"]')
                .click(function(event) {
                    // On-page links
                    if (
                            location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                            &&
                            location.hostname == this.hostname
                    ) {
                        // Figure out element to scroll to
                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                        // Does a scroll target exist?
                        if (target.length) {
                            // Only prevent default if animation is actually gonna happen
                            event.preventDefault();
                            $('html, body').animate({
                                scrollTop: target.offset().top
                            }, 1000, function() {
                                // Callback after animation
                                // Must change focus!
                                var $target = $(target);
                                $target.focus();
                                if ($target.is(":focus")) { // Checking if the target was focused
                                    return false;
                                } else {
                                    $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                                    $target.focus(); // Set focus again
                                };
                            });
                        }
                    }
                });
    </script>


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
                closeText: "@lang('panel_scholarships.create.close')",
                prevText: "@lang('panel_scholarships.create.previous')",
                nextText: "@lang('panel_scholarships.create.next')",
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
          $( "#datepicker" ).datepicker({ minDate: 0, maxDate: "+5M +10D" });
        });
    </script>
@endsection
