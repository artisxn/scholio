@extends('panel.layouts.main')

@section('styles')
<style>
    li a:active {
      color: orange;
    }

    .title {
      font-weight: 300;
      padding: 0 12px;
    }
</style>
<link rel="stylesheet" href="{{'/panel/assets/css/vue-multiselect.css'}}" />
@endsection

@section('content')
    {{--@include('components.preloader')--}}
    <studies-select></studies-select>
@endsection
