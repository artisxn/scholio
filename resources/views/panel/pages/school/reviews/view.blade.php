@extends('panel.layouts.main')

@section('styles')
    .starraty{
        color: red;
        margin: 10000px;
    }
@endsection

@section('content')
    <schools-reviews></schools-reviews>
@endsection

@section('scriptsBefore')
    <script src="{{ asset('/new/js/jquery.raty-fa.js') }}"></script>
@endsection

@section('scripts')
@endsection
