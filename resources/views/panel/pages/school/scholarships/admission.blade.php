@extends('panel.layouts.main')

@section('styles')
    <style>


        .section-container{ margin-top: 40px;}

        .inner-section,.inner-section2{  padding: 5px 5px 25px 5px ; border: 1px solid #aaa; border-radius: 8px; background-color: #F1F4F5;
        }

        .section-text{color: #888; font-size: 110%; font-weight: 300; margin:-25px 0 30px 10px;
            border: 1px solid #aaa; border-radius: 6px; padding: 7px; min-width: 190px; max-width: 250px; background-color: #fafafa;
            box-shadow: 0 0 9px #aaa}


        .inner-section2{ min-width: 100%; min-height: 70%; margin: 0;}
        .section2-container{ padding: 0;}

        .section-text,.section-text2{color: #888; font-size: 110%; font-weight: 300; margin:-25px 0 30px 10px;
            border: 1px solid #aaa; border-radius: 6px; padding: 7px; min-width: 190px; max-width: 250px; background-color: #fafafa;
            box-shadow: 0 0 9px #aaa}

        .section-text2{margin-bottom: -5px;}

        .info{ color: #008DA5; font-weight: 400; margin: 8px 15px}
        .value{color: #667;  font-weight: 300;
        }
        .value:before{
            content:"\a";
            white-space: pre;
        }

        .flex-row {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display:         flex;
            flex-wrap: wrap;
        }
        /*.row > [class*='col-'] {*/
        /*display: flex;*/
        /*flex-direction: column;*/
        /*}*/

        /*  ======================================= */

        @media (min-width:992px) and (max-width: 1200px) {

        }

        @media (min-width: 768px) and (max-width: 991px) {
            .inner-section2{ }
        }

        @media  (max-width: 767px) {
            .info{margin-top: 15px;}
            .value:before{
                content:"\a";
                white-space: pre;
            }
            .flex-row { display: inline}
            .section2-container{padding: 0; }


        }
        @media  (max-width: 600px) {
            .section2-container{ padding: 0;}
        }

        @media  (max-width:480px) {
            .main{padding-left: 15px; padding-right: 15px; }
            .inner-section2{  }

        }

        @media  (max-width: 390px) {

        }






    </style>

    <link href="{{asset('new/css/Bootstrap-xxs-xxxs.css')}}" rel="stylesheet">
@endsection

@section('scriptsBefore')
@endsection

@section('content')
<div style="">

    <div class="section-container" >
        <div class="row inner-section">
            <div class="section-text centered-text"> Στοιχεία Υποψηφίου</div>
            @foreach($admission->fields as $field)
                @if ($field->category_id==1)
                    <div class="col-xxxs-12 col-xs-6 col-sm-6 col-md-4 col-lg-3 info">
                        <i class="icon-inp {{ $field->icon}}"></i>
                        {{ $field->name }}
                        <span class="value"> {{ $field->pivot->data }}</span>
                    </div>
                @endif
            @endforeach
        </div>
    </div>


    <div class="section-container" >
        <div class="row inner-section">
            <div class="section-text centered-text"> Στοιχεία Επικοινωνίας Μητέρας</div>
            @foreach($admission->fields as $field)
                @if ($field->category_id==2)
                    <div class="col-xxxs-12 col-xs-6 col-sm-6 col-md-4 col-lg-3 info">
                        <i class="icon-inp {{ $field->icon}}"></i>
                        {{ $field->name }}
                        <span class="value"> {{ $field->pivot->data }}</span>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    <div class="section-container" >
        <div class="row inner-section">
            <div class="section-text centered-text"> Στοιχεία Επικοινωνίας Πατέρα</div>
            @foreach($admission->fields as $field)
                @if ($field->category_id==3)
                    <div class="col-xxxs-12 col-xs-6 col-sm-6 col-md-4 col-lg-3 info">
                        <i class="icon-inp {{ $field->icon}}"></i>
                        {{ $field->name }}
                        <span class="value"> {{ $field->pivot->data }}</span>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    <div class="section-container" >
        <div class="row inner-section">
            <div class="section-text centered-text"> Στοιχεία Επικοινωνίας Κηδεμόνα</div>
            @foreach($admission->fields as $field)
                @if ($field->category_id==4)
                    <div class="col-xxxs-12 col-xs-6 col-sm-6 col-md-4 col-lg-3 info">
                        <i class="icon-inp {{ $field->icon}}"></i>
                        {{ $field->name }}
                        <span class="value"> {{ $field->pivot->data }}</span>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    <div class="section-container" >
        <div class="row inner-section">
            <div class="section-text centered-text">Οικονομικά Στοιχεία Μητέρας</div>
            @foreach($admission->fields as $field)
                @if ($field->category_id==5 )
                    <div class="col-xxxs-12 col-xs-6 col-sm-6 col-md-4 col-lg-3 info">
                        <i class="icon-inp {{ $field->icon}}"></i>
                        {{ $field->name }}
                        <span class="value"> {{ $field->pivot->data }}</span>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    <div class="section-container" >
        <div class="row inner-section">
            <div class="section-text centered-text">Οικονομικά Στοιχεία Πατέρα</div>
            @foreach($admission->fields as $field)
                @if ($field->category_id==6)
                    <div class="col-xxxs-12 col-xs-6 col-sm-6 col-md-4 col-lg-3 info">
                        <i class="icon-inp {{ $field->icon}}"></i>
                        {{ $field->name }}
                        <span class="value"> {{ $field->pivot->data }}</span>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    <div class="section-container" >
        <div class="row inner-section">
            <div class="section-text centered-text">Οικονομικά Στοιχεία Κηδεμόνα</div>
            @foreach($admission->fields as $field)
                @if ($field->category_id==7)
                    <div class="col-xxxs-12 col-xs-6 col-sm-6 col-md-4 col-lg-3 info">
                        <i class="icon-inp {{ $field->icon}}"></i>
                        {{ $field->name }}
                        <span class="value"> {{ $field->pivot->data }}</span>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    <!-- ============= -->

    <div class="row flex-row" style="margin-top: 40px;">
            @foreach($admission->fields as $field)
                @if ($field->category_id==8)
                <div class="section2-container col-sm-6">
                    <div class="inner-section2 ">
                        <div class="section-text2 centered-text"> <i class="icon-title  {{ $field->icon}}" style="margin-right: 10px;"></i>{{ $field->name }}</div>
                        <div class="info">
                            <span class="value"> {{ $field->pivot->data }}</span>
                        </div>
                    </div>
                </div>

                @endif
            @endforeach
    </div>



</div>

<div>

</div>
@endsection



@section('scripts')
    {{--<script>--}}
        {{--angular.module("studentApp",[])--}}
                {{--.controller("studentCtrl",function ($scope,$http) {--}}


                {{--})--}}
    {{--</script>--}}

@endsection


