@extends('panel.layouts.main')

@section('styles')
    <link href="/panel/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/panel/assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="/panel/assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="/panel/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="/panel/assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="/panel/assets/css/responsive.css" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">

            <div class="row">
                <div class="col-sm-12">
                    @include('panel.pages.profile.form')
                </div>
            </div>

        </div>
    </div>
@endsection

@section('scripts')
    <script src="/panel/assets/plugins/moment/moment.js"></script>
    <script src="/panel/assets/plugins/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
    <script src="/panel/assets/pages/jquery.xeditable.js"></script>
@endsection
