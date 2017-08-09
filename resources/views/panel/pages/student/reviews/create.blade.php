@extends('panel.layouts.main')

@section('styles')
    <style>
        .school-logo{height: 55px; float: left;}
        .school-name{float: left; margin: 31px 0 0 10px;}
        .up{margin-top: 30px}
    </style>
@endsection

@section('content')
    <div class="up"></div>
    <img class="school-logo" src="/images/schools/{{$school->logo }}" alt="">

        <h3 class="school-name">{{ $school->name() }}</h3>
       <div class="clearfix"></div>

    <reviews-create></reviews-create>
@endsection

@section('scriptsBefore')
<script>
    window.SchoolID = {{ $school->id }}
</script>
@endsection


@section('scripts')
@endsection
