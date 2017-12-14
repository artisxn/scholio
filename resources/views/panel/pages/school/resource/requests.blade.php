@extends('panel.layouts.main')

@section('styles')
    <link rel="stylesheet" href="/new/css/jquery.polymer-form.min.css" >
@endsection

@section('content')
    <notifications-table></notifications-table>
@endsection

@section('scriptsBefore')
    <!--Polymer Float Input Form js -->
    <script src="/new/js/jquery.polymer-form.min.js"></script>

    <script>

        $(document).ready(function() {
            $(".demo-form").polymerForm({
                bar_height: "1px",
                active_color: '#008DA5',
                label_color: '#008DA5',
                base_color: '#bbb',
                origin: 'left',
                margin_top: '25px',
                margin_bottom: '20px'

            });

            $(".full-content").hide().fadeIn(50);
        });
    </script>
@endsection




