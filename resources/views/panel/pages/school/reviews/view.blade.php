@extends('panel.layouts.main')

@section('styles')
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700&subset=greek" rel="stylesheet">
@endsection

@section('content')
    <schools-reviews></schools-reviews>
@endsection

@section('scriptsBefore')
    <script src="{{ asset('/new/js/jquery.raty-fa.js') }}"></script>
    <script src="{{ asset('/new/js/jquery.arctext.js') }}"></script>
@endsection

@section('scripts')

@endsection
