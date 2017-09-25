@extends('panel.layouts.main')

@section('styles')
<style>
/*Styling για dashboard*/
    .panel-box{padding: 20px 10px; border: 1px solid #008da5; border-radius: 10px; text-align: center; box-shadow: 0 0 11px #bbb; background: #fff; margin-bottom: 20px;}
    .box1{height: 220px; }
    .box2{height: 100px; }
    .panel-box:hover{background: #fafafa; border-color: #FD6A33; border-width: 2px; box-shadow: 0 0 13px #888;}
    .panel-counter {color: #00839b; font-weight: 400; font-size: 130%; margin: 0 3px 0 15px;}
    .panel-text{color: #008da5; font-weight: 300; font-size: 120%}

    .panel-image{height:45px}
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
