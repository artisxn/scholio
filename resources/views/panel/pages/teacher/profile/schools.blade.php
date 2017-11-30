
@extends('panel.layouts.main')

@section('content')
    @foreach(auth()->user()->connectedSchool()->get() as $school)
        <div style="{{ $school->pivot->status == 'allumni' ? 'background-color: #aaa;' : ''}}">
            <div>NAME: {{$school->admin->name}} - {{ $school->pivot->status }}</div>
            <div>EMAIL: {{$school->admin->email}}</div>
            <div>PHONE: {{$school->phone}}</div>
            <div>PHONE: {{$school->website}}</div>
        </div>
        <hr>
    @endforeach
@endsection