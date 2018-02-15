@extends('panel.layouts.main')

@section('styles')
    <style>
        .school-logo{height: 55px; }
        .school-name{ margin: 31px 0 0 10px;}
        .up{margin-top: 30px}
        .sc-center{margin-right: auto; margin-left: auto; text-align: center}

        @media (max-width: 600px){
            .school-logo,.school-name{text-align: center; float: none; margin: 10px auto; display: block;}
            .up{margin-top: 50px;}
        }
    </style>
@endsection

@section('content')

    <div class="sc-center">
        <div class="up"></div>
        <img class="school-logo" src="/images/schools/{{$school->logo }}" alt="">

        <h3 class="school-name">{{ $school->name() }}</h3>
        <div class="clearfix"></div>

        <reviews-create></reviews-create>
    </div>

@endsection

@section('scriptsBefore')
<script>
    window.SchoolID = {{ $school->id }}
</script>
@endsection


@section('scripts')
@endsection
