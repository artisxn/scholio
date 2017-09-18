@extends('panel.layouts.main')

@section('styles')
<style>
/*Styling για dashboard*/
    .sc-card:hover{}
    .panel{padding: 20px 10px; height: 220px; border: 1px solid #008da5; border-radius: 10px; text-align: center; box-shadow: 0 0 11px #bbb;}
    .panel:hover{background: #ccc;}
    .image{}
    .counter {}
    .text{}
    .circle {}
</style>
@endsection

@section('content')
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
