@extends('panel.layouts.main')

@section('styles')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.5/jquery.fullpage.css">
<link rel="stylesheet" href="{{'/panel/assets/css/vue-multiselect.css'}}" />


<!-- Horizontal Ribbons  CSS -->
<link href="/new/css/ribbonHorizontal.css" rel="stylesheet">

<!-- Hexagon CSS -->
<link href="/new/css/Hexagon.css" rel="stylesheet">
@endsection

@section('content')
    <schol-test></schol-test>
@endsection

@section('scriptsBefore')
    <script src="{{ asset('/new/js/jquery.raty-fa.js') }}"></script>
    <script src="{{ asset('/new/js/jquery.arctext.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.5/jquery.fullpage.js"></script>
@endsection

@section('scriptsBefore')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.2/tinymce.min.js"></script>

@endsection
