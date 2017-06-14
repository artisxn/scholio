@extends('panel.layouts.main')

@section('styles')
<link href="/css/studies.css" rel="stylesheet" type="text/css" />
@endsection
    @section('content')




    <studies-select></studies-select>
    @endsection

    @section('scriptsBefore')
            <!-- Vue Strap  js  -->
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-strap/1.1.34/vue-strap.min.js"></script>--}}
    {{--<script src="/panel/assets/js/vue-strap2.0.0.min.js"></script>--}}
    @endsection

    @section('scripts')
    {{--<script src="/panel/assets/js/studies-app.js"></script>--}}

    <!-- Vue Js   v2.1.3-->
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.3/vue.min.js"></script>--}}



    <script>

    </script>
    @endsection
