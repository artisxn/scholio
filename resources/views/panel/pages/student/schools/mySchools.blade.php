@extends('panel.layouts.main')




@section('styles')
    <style>
        .infoContainer{border: 1px solid #aaa; border-radius: 5px; margin-bottom: 20px; box-shadow: 0 0 8px 2px #ccc;}
        .infoPad{min-height: 110px; padding: 15px 15px 10px 15px; margin: 30px 0; color: #008da5}
        .scholar-limit{font-size: 110%; margin: 10px 0;}
        .trophy{height: 85px; float: right; display: inline-block; margin-top: -45px; margin-right: 5px}
    </style>
@endsection

@section('content')
    <my-schools></my-schools>
@endsection