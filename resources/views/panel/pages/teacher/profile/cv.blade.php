@extends('panel.layouts.main')

@section('styles')
    {{--jQuery datepicker css--}}
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    {{--<link rel="stylesheet" href="/new/css/cv.css" type="text/css"  >--}}
    <link rel="stylesheet" href="/new/css/jquery.polymer-form.min.css" >
    <link rel="stylesheet" href="/new/css/cv.css" type="text/css"  >
    <link href="/new/css/teacher-profile.css" rel="stylesheet">

    <style>
        .upper{width: 100%;  height: 280px; border-top-right-radius: 6px; border-top-left-radius: 6px;
            background: linear-gradient(#dddddd, #b4b4b4);
            background: -webkit-linear-gradient(#dddddd, #b4b4b4);
        }
        .social{}
        .gray{color: #888; font-size: 280%;}
        .gray:hover,.fa-input:hover{color: #FD6A33; cursor: pointer;}
        .margin-right-25{margin-right: 25px; }
        .margin-right-15{margin-right: 15px; }
        .fa-input{ margin-left: 10px;}
        .basic-studies>.polymer-form  label{font-size: 150%!important; color: #888!important;}



        .modal-sc-logo{margin-top: -4px; height: 60px;}
        .modal-content{padding: 0!important; border: none; border-radius: 5px!important;}
        .panel-title{margin: 2px 0 0 15px; font-size: 190%; font-weight: 600;}
        .btn-close{background-color: transparent}
        .btn-close:hover{color: #FD6A33;}
        .modal-icon{height: 30px; margin-right: 15px}
        .panel-body{ min-height: 300px}
        .modal-footer{padding: 15px!important;}
        .btn-info{background: #008da5; border: none;}
        .btn-info:hover{background: #007991;}


        .inner-section{border: none; margin-top: 30px; background-color: transparent;}
        textarea.notes{  background-image:
            -webkit-linear-gradient(left, transparent 10px, transparent 10px),
            -webkit-linear-gradient(right, transparent 10px, transparent 10px),
            -webkit-linear-gradient(transparent 30px, #bbb 30px, #bbb 31px, transparent 31px);
        }
    </style>
@endsection

@section('content')
    <div id="full" class="hidden">
        <form method="GET" action="/qqqsss" id="test">

            <div class="container" style="">

                <div class="upper"></div>

                <img src="{{ auth()->user()->info->avatar }}" class="avatar img-circle" >

                <div class="row1 xs-centered">
                <span class="name">
                        <span>{{ auth()->user()->info->name() }} </span>
                </span>

                <span class="social hidden-xs">
                        <a href=""> <span class="pull-right margin-right-15"><i class="gray fa fa-instagram"></i></span> </a>
                        <a href=""> <span class="pull-right margin-right-25"><i class="gray fa fa-linkedin"></i></span> </a>
                        <a href=""> <span class="pull-right margin-right-25"><i class="gray fa fa-twitter"></i></span> </a>
                        <a href=""> <span class="pull-right margin-right-25"><i class="gray fa fa-facebook"></i></span> </a>
                    @if(auth()->user()->info->links())
                        @foreach(auth()->user()->info->links() as $link)
                            <a href="{{$link->link}}" style="color: white;">
                                <span class="pull-right margin-right-25"><i class="fa fa-{{$link->name}}"></i></span>
                            </a>
                        @endforeach
                    @endif
                </span>
                </div>
                {{--  @if(!auth()->user()->works->isEmpty())
                    <span class="pull-left work xs-hidden">{{auth()->user()->works->first()->name}} </span>
                    <div class="work xs-centered xs-display">{{auth()->user()->works->first()->name}} </div>
                @endif  --}}
                <span class="pull-right work hidden-xs mail margin-right-15"> <i class="fa fa-envelope"></i> {{ auth()->user()->info->email() }} </span>


                {{--  ΝΑ ΤΟ ΒΑΛΛΟΥΜΕ ΣΤΗ ΒΑΣΗ ΔΕΔΟΜΕΝΩΝ ΣΤΟΝ ΠΙΝΑΚΑ teachers με field "title"  --}}
                <div class="col-sm-6 basic-studies" style="margin: 110px 0 0 0; max-width: 350px">
                    <input type="text" label="Βασικές Σπουδές/Ειδικότητα:" name="basic-studies" class="demo-form ad-input "  value="{{ auth()->user()->works[0]->name }}" id="datepicker">
                    {{--<i class="icon-inp fa fa-graduation-cap"></i>--}}
                    <img src="/new/img/teacher/graduationMono.png" style="height: 22px; margin-top: -92px" alt="">
                </div>
                <div class="clearfix"></div>





                <div class="xs-social xs-centered">
                    <span class="hidden-sm hidden-md hidden-lg mail-centered clearfix "> {{ auth()->user()->info->email() }} </span>
                    <div class="margin-top-20"></div>
                    <a href=""> <span class="margin-right-25 "><i class="fa fa-facebook"></i></span> </a>
                    <a href=""> <span class="margin-right-25"><i class="fa fa-twitter"></i></span> </a>
                    <a href=""> <span class="margin-right-25"><i class="fa fa-linkedin"></i></span> </a>
                    <a href=""> <span class=""><i class="fa fa-instagram"></i></span> </a>


                </div>
                <hr class="xs-display">


                <div class="up" style="overflow-x: hidden" id="sxetika">
                    <div class=" margin-bot-15 sc-t-dark-grey">
                        {{-- TEACHER STARTS HERE --}}
                        <div class="row">
                            {{--<div class="up"></div>--}}
                            <div class="col-xs-12">

                                <img class="up png-title" src="/new/img/teacher/info.png" alt="">
                                <div class="title">@lang('teacher_profile.section.about') <i class="fa fa-pencil fa-input"  data-toggle="modal" data-target="#about-modal" ></i></div>
                                <div class="text">
                                    {{ auth()->user()->info->about }}
                                    {{-- Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
                                    beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                                    Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
                                    Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? --}}
                                </div>
                                <hr>


                                <img class="up png-title" src="/new/img/teacher/desk.png" alt="">
                                <div id="experience" class="title">@lang('teacher_profile.section.experience') <i class="fa fa-plus fa-input" data-toggle="modal" data-target="#work-modal"></i></div>
                                @if(!auth()->user()->works->isEmpty())
                                    @foreach(auth()->user()->works as $work)
                                        <div class="t1">
                                            <i class="fa fa-pencil"></i> {{ $work->name }}
                                        </div>
                                        <div class="t2">
                                            {{ $work->company }}
                                        </div>
                                        <div class="t3">
                                            {{ \Carbon\Carbon::parse($work->from)->year }} - {{ \Carbon\Carbon::parse($work->until)->year }}
                                        </div>
                                    @endforeach
                                @endif
                                <hr>


                                <div id="spoudes">
                                    <img class="up png-title" src="/new/img/teacher/graduate.png" alt="">
                                    <div class="title">@lang('teacher_profile.section.studies') <i class="fa fa-plus"></i></div>
                                    @foreach(auth()->user()->certificates as $certificate)
                                        <div class="t1">
                                            <i class="fa fa-pencil"></i> {{ $certificate->name  }}
                                        </div>
                                        <div class="t2">
                                            {{ $certificate->university  }}
                                        </div>
                                        <div class="t3">
                                            {{ \Carbon\Carbon::parse($certificate->from)->year }} - {{ \Carbon\Carbon::parse($certificate->until)->year }}
                                        </div>
                                    @endforeach
                                    <hr>
                                </div>


                                <div class="margin-bot-50" id="skills">
                                    <img class="up png-title" src="/new/img/teacher/skillsb.png" alt="">
                                    <div   class="title ">@lang('teacher_profile.section.skills') <i class="fa fa-plus"></i></div>
                                    @foreach(auth()->user()->info->user->getUniqueSkills() as $skill)
                                        <div class="row ">
                                    <span class="t2 col-lg-4 col-md-5 col-sm-5 col-xs-6">
                                        <i class="fa fa-trash"></i> {{ $skill->name }} :
                                    </span>

                                    <span class="col-lg-8 col-md-7 col-sm-7 col-xs-6">

                                        @if(auth()->check() && auth()->user()->role == 'student')
                                            @if(auth()->user()->info->user->checkSkill($skill))

                                                <i id="bt_like{{$skill->id}}" onclick="like({{auth()->user()->info->user->id}}, {{$skill->id}})" class="thumps fa fa-thumbs-up"></i>

                                            @else

                                                <i id="bt_like{{$skill->id}}" onclick="like({{auth()->user()->info->user->id}}, {{$skill->id}})" class="thumps fa fa-thumbs-o-up"></i>

                                            @endif
                                        @endif

                                        <span id="count{{$skill->id}}" class="counter">
                                            {{ auth()->user()->info->user->skills()->where('skill_id', $skill->id)->count() }}
                                        </span>
                                        <div id="bar{{$skill->id}}" class="skill-bar"
                                             style="width: {{auth()->user()->info->user->skills()->where('skill_id', $skill->id)->count() * 25}}px; max-width: 95%" >
                                        </div>

                                    </span>
                                        </div>

                                    @endforeach
                                </div>



                            </div>

                            {{--<div class="col-lg-3 hidden-md hidden-xs">--}}
                            {{--<div class="sidebar"></div>--}}
                            {{--</div>--}}
                        </div>

                    </div>
                </div>
            </div>


        </form>

    </div>

    <!-- ====== AboutMe Modal  ======= -->
    <div id="about-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="top: 100px;">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="panel " style="background-color: #324c5a; height:90px; border-bottom-right-radius: 0; border-bottom-left-radius: 0; padding: 10px">
                    <div class="panel-heading" style=" color: #fff">
                        <button type="button" class="btn pull-right btn-close" data-dismiss="modal" >
                            x
                        </button>
                        <img src="/new/img/logoNX-light.png" alt="scholio logo" class="pull-left modal-sc-logo">
                        {{--<h3 class="pull-left panel-title">schol.io</h3>--}}
                    </div>

                </div>
                <div class="panel-body">

                    <div class="section2-container ">
                        <div class="inner-section">
                            <div class="section-text centered-text">   <img class="modal-icon" src="/new/img/teacher/info.png" alt=""> </i>@lang('teacher_profile.section.about')</div>
                            <div class="input-container">
                                <div class="info-text"> </div>
                                <textarea class="notes" placeholder="Συμπληρώστε λίγα λόγια για το δημόσιο προφίλ σας."> </textarea>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">@lang('profile.modal.abort')</button>
                    <button type="button" onClick="" data-dismiss="modal" class="btn btn-info">Αποθήκευση</button>
                </div>
            </div>
        </div>
    </div><!-- /.modal -->

    <!-- ====== Work Modal  ======= -->
    <div id="work-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="top: 100px;">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="panel " style="background-color: #324c5a; height:90px; border-bottom-right-radius: 0; border-bottom-left-radius: 0; padding: 10px">
                    <div class="panel-heading" style=" color: #fff">
                        <button type="button" class="btn pull-right btn-close" data-dismiss="modal" >
                            x
                        </button>
                        <img src="/new/img/logoNX-light.png" alt="scholio logo" class="pull-left modal-sc-logo">
                        {{--<h3 class="pull-left panel-title">schol.io</h3>--}}
                    </div>

                </div>
                <div class="panel-body">

                    <div class="section2-container ">
                        <div class="inner-section">
                            <div class="section-text centered-text">   <img class="modal-icon" src="/new/img/teacher/desk.png" alt=""> </i>@lang('teacher_profile.section.experience')</div>
                            <div class="input-container">

                                <div class="col-sm-6 " style="margin: 10px 0 0 0; max-width: 330px">
                                    <input type="text" label="Ειδικότητα/Αντικείμενο Εργασίας" name="work-position" class="demo-form ad-input" value="">
                                    <i class="icon-inp fa fa-briefcase"></i>
                                    {{--<img src="/new/img/teacher/graduationMono.png" style="height: 22px; margin-top: -92px" alt="">--}}
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-sm-6 " style="margin: 0 0 0 0; max-width: 330px">
                                    <input type="text" label="Εκπαιδευτικό Ίδρυμα/Εταιρία" name="work-company" class="demo-form ad-input" value="">
                                    <i class="icon-inp fa fa-university"></i>
                                    {{--<img src="/new/img/teacher/graduationMono.png" style="height: 22px; margin-top: -92px" alt="">--}}
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-sm-6 " style="margin: 0 0 0 0; max-width: 330px">
                                    <input type="text" label="Από" name="work-start" class="demo-form ad-input"  id="datepickerFrom" mvalue="">
                                    <i class="icon-inp fa fa-calendar-o"></i>
                                    {{--<img src="/new/img/teacher/graduationMono.png" style="height: 22px; margin-top: -92px" alt="">--}}
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-sm-6 " style="margin: 0 0 40px 0; max-width: 330px">
                                    <input type="text" label="Μέχρι" name="work-end" class="demo-form ad-input" id="datepickerEnd"  value="">
                                    <i class="icon-inp fa fa-calendar-o"></i>
                                    {{--<img src="/new/img/teacher/graduationMono.png" style="height: 22px; margin-top: -92px" alt="">--}}
                                </div>


                            </div>
                        </div>
                    </div>
                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">@lang('profile.modal.abort')</button>
                    <button type="button" onClick="" data-dismiss="modal" class="btn btn-info">Αποθήκευση</button>
                </div>
            </div>
        </div>
    </div><!-- /.modal -->

@endsection

@section('scriptsBefore')
        <!-- Polymer Float Input Form js -->
<script src="/new/js/jquery.polymer-form.min.js"></script>
<script src="/panel/assets/js/cv.js"></script>

    <!-- jQuery datePicker -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- ----------------- -->

<script>
    $(document).ready(function(){
        $('#full').fadeIn(60).removeClass('hidden');

        $( function() {
            $( "#datepickerFrom" ).datepicker();
        } );
        $( function() {
            $( "#datepickerEnd" ).datepicker();
        } );
    });
</script>

@endsection