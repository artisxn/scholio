@extends('panel.layouts.main')

@section('styles')
@endsection

@section('scriptsBefore')
@endsection

@section('content')
<div>
    @foreach($admission->fields as $field)
        <h5>{{ $field->name }}</h5>
        <div>{{ $field->pivot->data }}</div>
    @endforeach
</div>
@endsection



@section('scripts')
@endsection
