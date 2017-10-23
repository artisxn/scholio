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




        /*  ==========  Button  ===========  */

        .sc-btn {
            float: right;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            padding: 7px 15px;
            background: #4a5a62;
            font-weight: 300;
        }
        .sc-green{background:#00bcd4;}
        .sc-orange {background: #FD6A33;}
        .sc-dark-green{background: #008da5;}

        .sc-btn:focus,.sc-btn:active{outline:none;}

        button.sc-dark-green:hover{background-color: #006880  }

        @media (max-width: 420px) {
            .sc-btn{display: block; text-align: center;  float: none; margin-left: auto; margin-right: auto; padding: 0}
        }



        /*  ===========================================  */
        /*  ==========  Ended Fixed Banner  ===========  */
        /*  ===========================================  */

        .non-active{opacity: 0.45}
        .margin-right-30{margin-right: 30px}
        .box{ border: solid 5px #FD6A33; border-radius:10px; background: #fff; height: 65px; width: 320px; z-index: 1; bottom:70px;  right:25px;
             position: fixed; box-shadow: 0 0 15px 1px #fff}
        .ended{ opacity: 0.9; font-size: 170%; font-weight: 300; color: #008da5; position: relative;
            top: 50%;  transform: translateY(-50%); text-align: center;}
        .fa-flag, .fa-flag-checkered{ position: fixed; top: -90px; left: 20px; font-size: 420%!important; color: #FD6A33; }


        /*@media (min-width:1800px){*/
            /*.box{width: 60%}*/
        /*}*/
        /*@media (max-width:1449px){*/
            /*.ended{font-size: 5vw;}*/
        /*}*/
        /*@media (max-width:830px){*/
            /*.ended{font-size: 5.4vw;}*/
            /*.box{height: 100px;}*/
            /*.margin-right-30{margin-right: 15px}*/
        /*}*/

        /*@media (max-width:420px){*/
            /*.ended{font-size: 5.8vw;}*/
            /*.margin-right-30{margin-right: 5px}*/
        /*}*/




        /*  ===============================  */

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
            .amount-metric{display: block; text-align: center}
            .scholar-header{margin-top: 15px; }
        }



        @media (max-width: 380px) {
            .img-container,.scholar-name,.level-name{ left: 0; right: 0; text-align: center; margin-left: auto; margin-right: auto;}
            .img-container {top:25px;}
            .scholar-name{ bottom: 5px;}
            .level-name{bottom: -25px;}
            .scholar-header{padding: 0;}
            .outer-row .col-sm-12 {padding: 2px!important; }


        }


    </style>
@endsection

@section('content')

    @if(!$scholarship->active)
        <div class="box">
            <div class="ended">
                <i class="fa fa-flag margin-right-10"></i>
                @lang('scholarship_view.top.ended') {{Carbon\Carbon::parse($scholarship->end_at)->format('d-m-Y')}}
            </div>
        </div>
    @endif




    <div class="row outer-row {{ $scholarship->active ? '' : 'non-active'}} ">
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
                        <div class="">{{$scholarship->usersLength()}}</div>
                        <div class="margin-top-10">{{$scholarship->interestsLength()}}</div>
                    </span>
                </div>

                <div class="hidden-sm hidden-md hidden-xs col-xxxs-12 col-lg-4 colmn">
                    <span class="col-lg-7">
                        <div class="">  <i class="fa fa-thumb-tack margin-right-10"></i>Αναρτήθηκε:</div>
                        <div class="margin-top-10">  <i class="fa fa-flag-o margin-right-10"></i>Λήγει:</div>
                    </span>
                    <span class=" col-lg-5 text-right">
                        <div class="">
                            {{Carbon\Carbon::parse($scholarship->created_at)->format('d-m-Y')}}

                            </div>
                        <div class="margin-top-10">{{Carbon\Carbon::parse($scholarship->end_at)->format('d-m-Y')}}</div>
                    </span>
                </div>

                <div class="hidden-sm hidden-md hidden-xs col-xxxs-12 col-lg-4">
                    <span class="col-lg-7">
                        <div class="">  <i class="fa fa-pencil-square-o margin-right-10"></i>Με εξετάσεις:</div>
                        <div class="margin-top-10">  <i class="fa fa-calendar margin-right-10"></i>Ημ/νία Εξ.:</div>
                    </span>
                    <span class="col-lg-5 text-right">
                        <div class="">
                            @if($scholarship->exams)
                            NAI
                            @else
                            OXI
                            @endif
                        </div>
                        <div class="margin-top-10">{{Carbon\Carbon::parse($scholarship->exam_date)->format('d-m-Y')}}</div>
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
                        <div class="text-right">{{$scholarship->usersLength()}}</div>
                        <div class="margin-top-10 text-right">{{$scholarship->interestsLength()}}</div>
                        <div class="margin-top-10 text-right">
                            @if($scholarship->exams)
                            NAI
                            @else
                            OXI
                            @endif
                        </div>
                    </span>
                    </div>



                    <div class="hidden-lg col-xxxs-12 col-xxs-6 col-xs-6 col-sm-6 pad-0 pad-left-5-xxs">
                        <span class="col-xxxs-7 col-xxs-7 col-xs-7 col-sm-7  col-md-7 pad-0" >
                        <div class="">  <i class="fa fa-thumb-tack margin-right-10"></i>Αναρτήθηκε:</div>
                        <div class="margin-top-10">  <i class="fa fa-flag-o margin-right-10"></i>Λήγει:</div>
                         <div class="margin-top-10">  <i class="fa fa-calendar margin-right-10"></i>Ημ/νία Εξ.:</div>
                    </span>
                    <span class="col-xxxs-5 col-xxs-5 col-xs-5 col-sm-5 col-md-5 col-lg-5 text-right pad-0">
                        <div class="">{{Carbon\Carbon::parse($scholarship->created_at)->format('d-m-Y')}}</div>
                        <div class="margin-top-10">{{Carbon\Carbon::parse($scholarship->end_at)->format('d-m-Y')}}</div>
                        <div class="margin-top-10">{{Carbon\Carbon::parse($scholarship->exam_date)->format('d-m-Y')}}</div>
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
                            <div class="finance-text">{{ $scholarship->financial->plan }} <span class="amount-metric"> {{ $scholarship->financial_amount }} {{ $scholarship->financial->metric }} </span> </div>
                        </div>
                    </div>
                </div>



                <div class="col-sm-12 line"></div>


                <div class="clearfix"></div>
                <!-- ================================ -->
                <div class="margin-top-50"></div>

              <form method="POST" action="/scholarship/{{$scholarship->id}}/end">
                  @if($scholarship->active)
                <div class="adm-sel-title"> <i class="fa fa-check margin-right-10"></i>Επιλογή Νικητών Υποτροφίας</div>
                  @else
                      <div class="adm-sel-title"> <i class="fa fa-check margin-right-10"></i>Νικητές Υποτροφίας</div>
                  @endif

                <div>
                    @foreach($scholarship->admission as $admission)
                        <div class=" col-xxxs-12 col-xs-6 col-lg-4">
                            <img class="avatar-img" src="{{ $admission->user->info->avatar }}" width="20px">
                            @if($scholarship->active)
                                <input type="checkbox" name="winner[]" value="{{ $admission->user->id }}"> <a href="/panel/school/admission/{{$admission->user->getAdmissionId($scholarship) }}"> <span class="name-text"> {{$admission->user->name}} </span></a>
                            @else
                                <input type="checkbox" onclick="return false;" name="winner[]" value="{{ $admission->user->id }}"> <a href="/panel/school/admission/{{$admission->user->getAdmissionId($scholarship) }}"> <span class="name-text"> {{$admission->user->name}} </span></a>
                            @endif
                        </div>

                    @endforeach
                </div>
                <div class="margin-top-30"></div>
                @if($scholarship->active)
                    <button class="sc-btn sc-dark-green"> <i class="fa fa-paper-plane-o margin-right-10"></i>Ενημέρωση Νικητών</button>
                @endif
                <div class="clearfix"></div>
                <div class="col-sm-12 line"></div>
                <!-- ================================ -->
                <div class="margin-top-50"></div>

                <div class="adm-sel-title"> <i class="fa fa-pencil margin-right-10"></i>Όροι και δικαίωμα συμμετοχής</div>

                <div>
                    <?php echo $scholarship->terms; ?>
                </div>


                <div class="margin-top-50"></div>
                <div class="clearfix"></div>
                <div class="col-sm-12 line"></div>
                <!-- ================================ -->
                <div class="margin-top-50"></div>


                <div class="margin-top-30"></div>

                    {{ csrf_field() }}
                  @if($scholarship->active)
                    <button class="sc-btn sc-dark-green"> <i class="fa fa-flag-checkered margin-right-10"></i>Λήξη Υποτροφίας</button>
                  @endif
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
