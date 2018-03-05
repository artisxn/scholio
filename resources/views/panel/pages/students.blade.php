@extends('panel.layouts.main')

@section('styles')
    <link rel="stylesheet" href="{{'/panel/assets/css/vue-multiselect.css'}}" />
    <!-- Polymer Float Form CSS -->
    <link rel="stylesheet" href="/new/css/jquery.polymer-form.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    {{--<link rel="stylesheet" href="/new/css/cv.css" type="text/css"  >--}}

@endsection

@section('scriptsBefore')
            <!-- Polymer Float Input Form js -->
    <script src="/new/js/jquery.polymer-form.min.js"></script>
    <script src="/panel/assets/js/cv.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>


@endsection


@section('content')
    <students-view id="chrome" sxoles="{{ (auth()->user()->info->type->id == 4 || auth()->user()->info->type->id == 10 || auth()->user()->info->type->id == 11) }}"> </students-view>
    {{--<students-view-safari id="safari"></students-view-safari>--}}
@endsection



@section('scripts')





    <script>
    $(document).ready(function(){


            console.log('polymer')
            $(".demo-form").polymerForm({
                bar_height: "1px",
                active_color: '#008DA5',
                label_color: '#008DA5',
                base_color: '#bbb',
                origin: 'left',
                margin_top: '25px',
                margin_bottom: '20px'
            });

//            $(".full-content").hide().fadeIn(100);



//
//        if(navigator.vendor.indexOf('Apple') != -1){
//            $('#chrome').remove();
//        }else{
//            $('#safari').remove();
//        }
        
    })
</script>
@endsection
