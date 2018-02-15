@extends('panel.layouts.main')

@section('styles')
<style>
/*Styling για dashboard*/
    .panel-box{padding: 20px 10px; border: 1px solid #7f7f7f; border-radius: 10px; text-align: center; box-shadow: 0 0 11px #bbb; background: #fff; margin-bottom: 20px;}
    .box1{height: 220px; }
    .box2{height: 100px; }
    .panel-box:hover{background: #fafafa; border-color: #FD6A33; border-width: 2px; box-shadow: 0 0 13px #888;}
    .panel-counter {  margin: 0 3px 0 15px;}
    .panel-text{ }
    .sc-t-gray{color: #555;     font-size: 105%}
    .sc-t-teal{color: #007e94;  font-size: 105%;}

    .panel-image{height:45px}
    .visible{display: inline-block}
    .hidden{display: none;}
    .circle {}

    .empty{position: absolute; left: 42px;  top: 12px; height:62%; opacity: 0.8;}


</style>
@endsection

@section('content')

<!-- ΕΔΩ ΜΠΑΙΝΕΙ ΤΟ ΜΗΝΥΜΑ ΓΙΑ ΤΟ EMAIL VERIFICATION -->
@if(Session::has('verify'))
<h1>{{ session('verify') }}</h1>
@endif
<!-- ΕΔΩ ΜΠΑΙΝΕΙ ΤΟ ΜΗΝΥΜΑ ΓΙΑ ΤΟ EMAIL VERIFICATION -->

    <!-- Page-Title -->
    <div class="row" >
        <div class="col-sm-12">

            <div class="row">
                <div class="col-sm-12">
                    <div class="" style="font-size: 160%; font-weight: 300; margin: 15px 0; color: #008da5"> <i class="fa fa-tachometer" style="margin-right: 10px"></i> @lang('panel/schools/navigation.dashboard')</div>
                    {{--<p class="text-muted page-title-alt">Πληροφορίες</p>--}}
                </div>
            </div>
                {{-- @include('panel.partials.body.dashboard.tiles') --}}
                @include('panel.partials.body.dashboard.tiles2')

                {{-- @include('panel.partials.body.dashboard.table') --}}

                {{-- @include('panel.partials.body.dashboard.revenue') --}}
        </div>
    </div>
@endsection

