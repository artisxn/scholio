@extends('panel.layouts.main') 

@section('styles')

@endsection 

@section('content')
email: {{auth()->user()->email}}
<br>
<form action="/change/password" method="POST">
    password: <input type="password" name="password">
    repeat: <input type="password" name="password">
    <button type="submit">Submit</button>
</form>
@endsection