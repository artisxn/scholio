@extends('panel.layouts.main')

@section('styles')
    <link rel="stylesheet" href="{{'/panel/assets/css/vue-multiselect.css'}}" />
@endsection

@section('content')
    <students-view id="chrome"> </students-view>
    <students-view-safari id="safari"></students-view-safari>
@endsection

@section('scripts')
<script>
    $(document).ready(function(){

        if(navigator.vendor.indexOf('Apple') != -1){
            $('#chrome').remove();
        }else{
            $('#safari').remove();
        }
        
    })
</script>
@endsection
