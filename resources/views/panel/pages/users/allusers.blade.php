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
                    <users-table></users-table>
                </div>
            </div>

        </div>
    </div>
@endsection
