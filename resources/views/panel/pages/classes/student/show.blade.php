@extends('panel.layouts.main')

@section('styles')

@endsection

@section('content')
<h1>ΟΙ ΤΑΞΕΙΣ ΜΟΥ: </h1>
    @foreach($lectures as $lecture)
        <a href="{{ url('/panel/users/student/class/' . $lecture->id) }}">{{ $lecture->title }}</a>
    @endforeach
@endsection
