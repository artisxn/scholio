@extends('panel.layouts.main')

@section('styles')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.5/jquery.fullpage.css">
@endsection

@section('content')
    <schol-test></schol-test>
@endsection

@section('scriptsBefore')
    <script src="{{ asset('/new/js/jquery.raty-fa.js') }}"></script>
    <script src="{{ asset('/new/js/jquery.arctext.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.5/jquery.fullpage.js"></script>
@endsection

@section('scripts')

@endsection
