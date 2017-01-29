@extends('panel.layouts.main')

@section('styles')
    <!-- Wizard CSS -->
    <link href="/panel/assets/css/wizard/smart_wizard.css" rel="stylesheet" type="text/css" />
    {{-- <link href="/panel/assets/css/wizard/smart_wizard_theme_arrows.css" rel="stylesheet" type="text/css" /> --}}
    <link href="/panel/assets/css/wizard/smart_wizard_theme_circles.css" rel="stylesheet" type="text/css" />
    <link href="/panel/assets/css/steps.css" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    <scholarships-create></scholarships-create>
@endsection

@section('scriptsBefore')
    <!-- Include SmartWizard JavaScript source -->
    <script src="/panel/assets/js/wizard/jquery.smartWizard.js"></script>

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
                        {label: 'Οριστικοποίηση', css: 'btn  sc-dark-green sc-t-white', onClick: function(){ alert('Finish Clicked'); }}

                    ]
                }
            });

        });
    </script>
@endsection


@section('scripts')

    <script>


    </script>
@endsection