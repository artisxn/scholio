
@extends('panel.layouts.main')

@section('styles')
    <style>
        .card-box{min-height:185px; border: 1px solid #aaa; box-shadow: 3px 3px 12px 1px #bbb;}
        .member-info{margin: -2px 20px;}
        .cont-img{margin: 10px 0;}
        .cont-btn{position: absolute; bottom: 5px; right: 25px; }
        .cont-text{position: absolute; bottom: 35px; right: 25px; }
        .cont-text>a{color: #008da5}
        .admin-name{color: #008da5; font-size: 120%}
        .cont-text>a:hover,.admin-name:hover{color: #FD6A33}
        .sc-btn{padding: 6px; margin-bottom: 30px;}
        .img-logo{height: 75px;}
        .btn-primary{background-color: #008da5;}
        .btn-primary:hover{background-color: #00758c;}


        @media  (min-width:660px) and (max-width:920px) {
            .img-logo{height: 60px;}
            .med-hide{display: none}
        }
        @media  (min-width:1485px) {
            .col-xl-4{width: 33.33%}
        }
        @media  (min-width:1910px) {
            .col-xxl-3{width: 25%}
        }
        @media  (min-width:2500px) {
            .col-xxxl-2{width: 20%}
        }
        @media  (min-width:660px) and (max-width:767px)  {
            .col-xsm-6{width: 50%}
        }
    </style>

@endsection


@section('content')
    <div class="row ">
    @foreach(auth()->user()->connectedSchool()->get() as $school)
            <div class="col-xs-12 col-xsm-6 col-sm-6 col-xl-4 col-xxl-3 col-xxxl-2">
                <div class="card-box" style="{{ $school->pivot->status == 'allumni' ? 'background-color: #aaa;' : ''}}">
                    <div class="row">
                        <div class="contact-card" style="">

                            <a target="_blank" href="/public/profile/{{$school->id}}">
                                <div class="admin-name">
                                    {{$school->admin->name}}
                                </div>

                                <div class="pull-left  cont-img">
                                    <img class="img-logo" src="/images/schools/{{$school->logo}}" alt=""/>
                                </div>
                            </a>

                            <div class="member-info pull-left ">
                                <p class="text-dark">
                                <div class="med-hide">
                                    <i class="fa fa-map-marker"></i>
                                    <small class="pad-left-5">address</small>
                                </div>
                                <div class="">
                                    <i class="fa fa-phone"></i>
                                    <small class="pad-left-3">{{$school->phone}}</small>
                                </div>
                                <div class="">
                                    <i class="fa fa-globe"></i>
                                    <small class="pad-left-3">{{$school->website}}</small>
                                </div>
                                <div class="">
                                    <i class="fa fa-envelope"></i>
                                    <small>{{$school->admin->email}}</small>
                                </div>
                                <div class="">
                                    <i class="fa fa-link"></i>
                                    <small>{{ $school->pivot->status }}</small>
                                </div>
                                </p>
                            </div>
                        </div>
                    </div>


                </div>

            </div>

    @endforeach
    </div>
@endsection