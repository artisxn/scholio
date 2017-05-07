@extends('panel.layouts.main')

@section('styles')

@endsection

@section('content')
<h1>ΟΙ ΤΑΞΕΙΣ: </h1>
    @foreach($lectures as $lecture)
    <a href="">{{ $lecture->title }}</a>
    @endforeach
@endsection
