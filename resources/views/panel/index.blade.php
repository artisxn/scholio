@extends('panel.layouts.main')

@section('styles')

@endsection

@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">

            <div class="row">
                <div class="col-sm-12">
                    <h4 class="page-title">Πίνακας Διαχείρισης</h4>
                    <p class="text-muted page-title-alt">Schol.io Admin Panel</p>
                </div>
            </div>
                {{-- @include('panel.partials.body.dashboard.tiles') --}}
                 {{--@include('panel.partials.body.dashboard.tiles2')--}}

                {{-- @include('panel.partials.body.dashboard.table') --}}

                {{-- @include('panel.partials.body.dashboard.revenue') --}}
        </div>
    </div>
@endsection
