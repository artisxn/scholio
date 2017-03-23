@extends('panel.layouts.main')

@section('styles')
@endsection

@section('content')
<h1>{{ $school->name() }}</h1>
<reviews-create></reviews-create>
@endsection

@section('scriptsBefore')
<script>
    window.SchoolID = {{ $school->id }}
</script>
@endsection


@section('scripts')
@endsection
