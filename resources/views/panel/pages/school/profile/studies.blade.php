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
@endsection

@section('content')
    <studies-select></studies-select>
@endsection
