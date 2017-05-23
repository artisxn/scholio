@extends('panel.layouts.main')

@section('styles')
@endsection

@section('scriptsBefore')
@endsection

@section('content')
<div>
    @foreach($admission->fields as $field)
        @foreach($field->pivot as $data)
            {{ $data-> }}
        @endforeach
    @endforeach
</div>
@endsection



@section('scripts')
@endsection
