@extends('panel.layouts.main')

@section('styles')
    {{--<link href="/panel/assets/css/form.css" rel="stylesheet" type="text/css" />--}}
    {{--<link href="/new/css/main.css" rel="stylesheet" type="text/css" />--}}
    <link href="/new/css/Bootstrap-xxs-xxxs.css" rel="stylesheet" type="text/css" />
    <style>


        .margin-right-10 { margin-right: 10px; }
        .margin-top-10 { margin-top: 10px; }
        .margin-top-30 { margin-top: 30px; }
        .margin-top-50 { margin-top: 50px; }


        .center-col{float: none; margin: 0 auto;}


        .scholar-header{ height: 140px; background-color: #008DA5; margin: 0 0 70px 0; border-radius: 10px}

        .scholar-name,.level-name{ position: absolute; left: 90px; max-width: 74%}
        .scholar-name{font-size: 135%; font-weight: 300; color: #fff;  bottom: 6px;}
        .level-name{font-size: 125%; font-weight: 300; color: #008DA5;  bottom: -26px;}
        .trophy-image{ position: absolute; right: 10px; bottom: 2px; height: 80px; opacity: 0.9}

        .img-container{height: 55px;  width:55px; background-color: #fff; border: 1px solid #FD6A33; border-radius: 5px; position: absolute; bottom: -23px; left: 25px; box-shadow: 0 0 10px #aaa;}
        .section-image{max-height: 40px; max-width: 40px}
        .hor-vert-center{  position: absolute;  top: 50%;  left: 50%;  transform: translateX(-50%) translateY(-50%) }

        /*.first-col{margin-left: -10px;}*/
        .colmn{
            /*padding-left: 20px;*/
            border-right: 1px solid #cdcdcd;
            margin-bottom: 10px;
            /*background-color: #ddd; */
            /*height: 90px;*/
        }

        .container-21{padding: 0 10px 0 0;}
        .container-22{padding: 0 0 0 10px;}
        /*.cont-in{ height: 80px; background-color: #f3f6f7; border: 1px solid #ccc; border-radius: 8px;}*/

        .img2-container{text-align: center;}
        .img2-inner{margin-top: 20px}
        .finance-image{max-height: 40px; max-width: 55px;}
        .finance-text{margin-left: 10px; font-weight: 300;}

        .line{height: 1px; background-color: #bbb; margin-top: 3px;opacity: 0.8}

        .adm-sel-title{font-size: 130%; font-weight: 300; margin-left: 15px}

        .avatar-img{height: 50px; width: auto; border-radius: 6px; border: 1px solid #bbb; box-shadow: 0 0 10px #fff; margin: 10px 0;}
        .name-text{ font-weight: 300; color: #777}


        .pad-0{margin: 0}

        @media (min-width: 579px )and (max-width: 590px) {
            .pad-0{padding: 9px}
            .scholar-name{max-width: 70%; font-size: 125%; bottom: 3px;}
        }

        @media (min-width: 568px )and (max-width: 578px) {
            .pad-0{padding: 1px}
        }
        @media (min-width: 481px )and (max-width: 567px) {
            .pad-0{padding: 1px}
            .pad-left-5-xxs{padding-left: 4px;}
            .scholar-name{font-size: 120%; bottom: 1px}
        }

        @media (max-width: 480px) {
            .pad-0{padding: 0; margin-top: 6px;}
            .colmn{border: none}
            .pad-left-5-xxs{padding-left: 0; padding-right: 14px;}
            .first-col{margin-left: 0}
            .scholar-name{ font-weight: 300; font-size: 105%; bottom: -2px}
            .level-name{font-size: 100%}
        }

    </style>
@endsection

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="">   <!-- class="card-box" -->


                <div class="col-xs-12 scholar-header">
                    {{--<div class="scholar-name">{{ $scholarship->study->section[0]->name }}</div>--}}
                    <div class="scholar-name">  {{ $scholarship->study->name }}</div>
                    <div class="level-name">{{ $scholarship->study->section[0]->level->name }}</div>
                    <div class="img-container">
                        <img class="section-image hor-vert-center" src="/panel/assets/images/steps/{{ $scholarship->study->section[0]->name }}.png" alt="">
                    </div>
                    <img class="trophy-image hidden-xxxs" src="/new/img/trophy5white.png" alt="">
                </div>

                <div class="clearfix"></div>

                <!-- ============= LG ================== -->
                <div class="hidden-sm hidden-md hidden-xs col-xxxs-12 col-lg-3 colmn">
                    <span class="col-lg-10 ">
                        <div class="">  <i class="fa fa-pencil margin-right-10"></i>Αιτήθηκαν:</div>
                        <div class="margin-top-10">  <i class="fa fa-thumbs-o-up margin-right-10"></i>Ενδιαφέρθηκαν:</div>
                    </span>
                    <span class="col-lg-2 text-right">
                        <div class="">{{$scholarship->length}}?</div>
                        <div class="margin-top-10">{{$scholarship->interestsLength()}}</div>
                    </span>
                </div>

                <div class="hidden-sm hidden-md hidden-xs col-xxxs-12 col-lg-4 colmn">
                    <span class="col-lg-7">
                        <div class="">  <i class="fa fa-thumb-tack margin-right-10"></i>Αναρτήθηκε:</div>
                        <div class="margin-top-10">  <i class="fa fa-flag-o margin-right-10"></i>Λήγει:</div>
                    </span>
                    <span class=" col-lg-5 text-right">
                        <div class=""><!-- {{$scholarship->created_at}}-->????-??-??</div>
                        <div class="margin-top-10">{{$scholarship->end_at}}</div>
                    </span>
                </div>

                <div class="hidden-sm hidden-md hidden-xs col-xxxs-12 col-lg-4">
                    <span class="col-lg-7">
                        <div class="">  <i class="fa fa-pencil-square-o margin-right-10"></i>Με εξετάσεις:</div>
                        <div class="margin-top-10">  <i class="fa fa-calendar margin-right-10"></i>Ημ/νία Εξ.:</div>
                    </span>
                    <span class="col-lg-5 text-right">
                        <div class=""><!-- {{$scholarship->exams}}-->???</div>
                        <div class="margin-top-10">{{$scholarship->exam_date}}</div>
                    </span>
                </div>

                <!-- ==============  SM XS XXS MD ================= -->

                <div class="row pad-0">
                    <div class=" hidden-lg col-xxxs-12 col-xxs-6 col-xs-6 col-sm-6 col-md-6 pad-0 colmn" >
                    <span class="col-xxxs-7 col-xxs-10 col-xs-8  col-sm-9 col-md-7 pad-0">
                        <div class="">  <i class="fa fa-pencil margin-right-10"></i>Αιτήθηκαν:</div>
                        <div class="margin-top-10">  <i class="fa fa-thumbs-o-up margin-right-10"></i>Ενδιαφέρθηκαν:</div>
                        <div class="margin-top-10">  <i class="fa fa-pencil-square-o margin-right-10"></i>Με εξετάσεις:</div>

                    </span>
                    <span class="col-xxxs-5 col-xxs-2 col-xs-2 col-sm-2 col-md-2 text-right">
                        <div class="">{{$scholarship->length}}?</div>
                        <div class="margin-top-10">{{$scholarship->interestsLength()}}</div>
                        <div class="margin-top-10"><!-- {{$scholarship->exams}}-->???</div>
                    </span>
                    </div>



                    <div class="hidden-lg col-xxxs-12 col-xxs-6 col-xs-6 col-sm-6 pad-0 pad-left-5-xxs">
                        <span class="col-xxxs-7 col-xxs-7 col-xs-7 col-sm-7  col-md-7 pad-0" >
                        <div class="">  <i class="fa fa-thumb-tack margin-right-10"></i>Αναρτήθηκε:</div>
                        <div class="margin-top-10">  <i class="fa fa-flag-o margin-right-10"></i>Λήγει:</div>
                         <div class="margin-top-10">  <i class="fa fa-calendar margin-right-10"></i>Ημ/νία Εξ.:</div>
                    </span>
                    <span class="col-xxxs-5 col-xxs-5 col-xs-5 col-sm-5 col-md-5 col-lg-5 text-right pad-0">
                        <div class=""><!-- {{$scholarship->created_at}}-->????-??-??</div>
                        <div class="margin-top-10">{{$scholarship->end_at}}</div>
                        <div class="margin-top-10">{{$scholarship->exam_date}}</div>
                    </span>
                    </div>

                </div>



                <div class="clearfix"></div>
                <!-- =============================== -->
                <div class="margin-top-30"></div>



                <div class="col-xs-6 container-22 img2-container">
                    <div class="cont-in col-sm-8 center-col">
                        <div class="img2-inner">
                            <img class="finance-image" src="/panel/assets/images/steps/{{ $scholarship->criteria->name }}.png" alt="" style="">
                            <div class="finance-text">{{ $scholarship->criteria->name }}</div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-6 container-21 img2-container " >
                    <div class="cont-in col-sm-8 center-col" >
                        <div class="img2-inner">
                            <img class="finance-image" src="/panel/assets/images/steps/{{ $scholarship->financial->icon }}" alt="" style="">
                            <div class="finance-text">{{ $scholarship->financial->plan }} {{ $scholarship->financial_amount }}  {{ $scholarship->financial->metric }}</div>
                        </div>
                    </div>
                </div>



                <div class="col-sm-12 line"></div>


                <div class="clearfix"></div>
                <!-- ================================ -->
                <div class="margin-top-50"></div>


                <div class="adm-sel-title"> <i class="fa fa-check margin-right-10"></i>Επιλογή Νικητών Υποτροφίας</div>

                <div>
                    @foreach($scholarship->admission as $admission)
                        <div class=" col-xxxs-12 col-xs-6 col-lg-4">
                            <img class="avatar-img" src="{{ $admission->user->info->avatar }}" width="20px">
                            <input type="radio" name="winner" value="{{ $admission->user->id }}"> <a href="/panel/school/admission/{{$admission->user->getAdmissionId($scholarship) }}"> <span class="name-text"> {{$admission->user->name}} </span></a>
                        </div>

                    @endforeach
                </div>

                    <form class="form-horizontal m-t-20" method="POST" action="/scholarship/{{$scholarship->id}}/update" accept-charset="UTF-8" enctype="multipart/form-data">
                        {{--<div class="row">--}}
                        {{--{{ csrf_field() }}--}}

                            {{--<div class="form-group">--}}
                                {{--<label class="col-md-2 control-label">Πλάνο</label>--}}
                                {{--<div class="col-md-5">--}}
                                    {{--<input type="text" class="form-control" value="{{ $scholarship->financial->plan }}" placeholder="Fullname" name="plan">--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--<label class="col-md-2 control-label">Ποσό</label>--}}
                                {{--<div class="col-md-5">--}}
                                    {{--<input type="text" class="form-control" value="{{ $scholarship->financial_amount }}" placeholder="Fullname" name="amount">--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--<label class="col-md-2 control-label">Σπουδες</label>--}}
                                {{--<div class="col-md-5">--}}
                                    {{--<input type="text" class="form-control" value="{{ $scholarship->study->name }}" placeholder="Fullname" name="study">--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--<label class="col-md-2 control-label">Κριτηρια</label>--}}
                                {{--<div class="col-md-5">--}}
                                    {{--<input type="text" class="form-control" value="{{ $scholarship->criteria->name }}" placeholder="Fullname" name="criteria">--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--<label class="col-md-2 control-label">Ημ. Λήξης</label>--}}
                                {{--<div class="col-md-5">--}}
                                    {{--<input type="text" class="form-control" value="{{ $scholarship->end_at }}" placeholder="Fullname" name="end_at">--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--<label class="col-md-2 control-label">Εξετάσεις</label>--}}
                                {{--<div class="col-md-5">--}}
                                    {{--<input type="text" class="form-control" value="{{ $scholarship->exam_date }}" placeholder="Fullname" name="exam_date">--}}
                                {{--</div>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                        {{--<div class="form-group text-center m-t-40">--}}
                            {{--<div class="col-xs-3 col-sm-2 centered-text">--}}
                                {{--<button class="btn btn-pink btn-block" type="submit">--}}
                                    {{--Update--}}
                                {{--</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </form>
                </div>
            </div>
        </div>
    </div>

    @if(count($errors) > 0 )
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

@endsection
