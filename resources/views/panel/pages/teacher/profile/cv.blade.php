@extends('panel.layouts.main')

@section('styles')
    {{--jQuery datepicker css--}}
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    {{--<link rel="stylesheet" href="/new/css/cv.css" type="text/css"  >--}}
    <link rel="stylesheet" href="/new/css/jquery.polymer-form.min.css" >
    <link rel="stylesheet" href="/new/css/cv.css" >
    <link rel="stylesheet" href="/new/css/teacher-profile.css" >
    <link rel="stylesheet" href="/panel/assets/css/jquery.typeahead.min.css" >


    <style>
        /* ======  avoid filled autocomplete input yellow background on chrome ============ */
        input:-webkit-autofill,
        input:-webkit-autofill:hover,
        input:-webkit-autofill:focus,
        input:-webkit-autofill:active{
            -webkit-box-shadow: 0 0 0 30px #FFF inset;
            -webkit-text-fill-color: #555;
        }
        /* =========================================================== */


        .upper{width: 100%;  height: 280px; border-top-right-radius: 6px; border-top-left-radius: 6px;
            background: linear-gradient(#dddddd, #b4b4b4);
            background: -webkit-linear-gradient(#dddddd, #b4b4b4);
        }
        .social{margin-left: 0;}
        .gray{color: #888; font-size: 280%;}
        .gray:hover,.fa-input:hover{color: #FD6A33; cursor: pointer;}
        .margin-right-25{margin-right: 25px; }
        .margin-right-15{margin-right: 15px; }
        .fa-input{ margin-left: 10px;}
        .basic-studies>.polymer-form  label{font-size: 150%!important; color: #888!important;}

        .polyfill-input-sc{margin: 0 0 0 0; max-width: 370px}

        .basic-title{position: absolute; left: 235px; top: 290px;  font-size: 115%; color: #888; }
        .mail{margin-top: 20px; display: inline-block}


         /* ========== Modal ============== */

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

        .section-text{margin-bottom: 20px;}
        .inner-section{border: none; margin-top: 30px; background-color: transparent;}

        /* ================================ */

        textarea.notes{  background-image:
            -webkit-linear-gradient(left, transparent 10px, transparent 10px),
            -webkit-linear-gradient(right, transparent 10px, transparent 10px),
            -webkit-linear-gradient(transparent 30px, #bbb 30px, #bbb 31px, transparent 31px);

        }
        .skill-text{float: left; width: 40%}
        .thumps-up {float: left; width: 60%;}



        @media (min-width: 992px) and (max-width: 1199px) {

        }


        @media(max-width: 1200px){
            .name{margin-top: -14px; display: inline-block;}
            .social{font-size: 170%;}
            .skill-text{ width: 45%}
            .thumps-up { width: 55%;}
            .basic-title{left: 235px;}

        }

        @media(min-width: 521px) and (max-width: 1160px){
            .up{margin-top: 75px;}

        }
        @media(max-width: 1020px){
            .social{display: none;}
        }
        @media(max-width: 990px){
            .basic-title{left: 215px;}
            .skill-text{float: left; width: 50%}
            .thumps-up {float: left; width: 50%;}
        }

        @media(max-width: 767px){
            .margin-top{margin-top: 25px;}
            .basic-title{left: 200px;}
            .skill-text{float: left; width: 55%}
            .thumps-up {float: left; width: 45%;}
        }

        @media(min-width: 521px) and (max-width: 1160px){
            .mail{display: none;}

        }

        @media(max-width:520px){
            .margin-right-15{margin-right: 4px}
            .skill-text{float: left; width: 60%}
            .thumps-up {float: left; width: 40%;}
            .basic-title{ display: none;}
            .mail-centered{display: none;}
            .xs-social{margin-top: 5px;}
        }

        @media(max-width:470px){
            .skill-text{float: left; width: auto;}
            .thumps-up {float: right; width: 45px;}
            .skill-bar{display: none;}
        }

        @media(max-width:380px){
            .basic-title,.mail-centered{display: none;}
        }

        /* ========== DatePicker jQuery ============== */
        .ui-datepicker{width: 350px}
        .ui-datepicker-current,.ui-datepicker-calendar {
            display: none;
        }

        .ui-datepicker-year,.ui-widget-header {
            /*background: #00bcd4;*/
            /*color: #fff;*/
        }
        .ui-priority-primary{
            background: #00b2ca !important;
            color: #fff!important;
            border: none!important;
        }
        .ui-state-highlight, .ui-widget-content .ui-state-highlight, .ui-widget-header .ui-state-highlight
        { background: #00b2ca!important; color: #fff!important; border-color: #c5c5c5}
        .ui-datepicker-month{width: 60px!important; margin-right: 30px!important;}
        .ui-datepicker-year{width: 60px!important; }
        .ui-datepicker-month,.ui-datepicker-year{background: #e9e9e9!important;}


        /* ========== typeAhead jQuery ============== */
        .typeahead__field .typeahead__hint, .typeahead__field [contenteditable], .typeahead__field input, .typeahead__field textarea{
            border: none!important; background: transparent!important;
        }
        .typeahead__container{font-size: 100%}
        .typeahead__dropdown>li>a, .typeahead__list>li>a{color: #888; font-weight: 300;}

    </style>


@endsection

@section('content')
    <div id="full" class="hidden">
        <form method="GET" action="/qqqsss" id="test">

            <div class="container" style="position: relative">

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
                    {{--@if(auth()->user()->info->links())--}}
                        {{--@foreach(auth()->user()->info->links() as $link)--}}
                            {{--<a href="{{$link->link}}" style="color: white;">--}}
                                {{--<span class="pull-right margin-right-25"><i class="fa fa-{{$link->name}}"></i></span>--}}
                            {{--</a>--}}
                        {{--@endforeach--}}
                    {{--@endif--}}
                </span>
                </div>
                {{--  @if(!auth()->user()->works->isEmpty())
                    <span class="pull-left work xs-hidden">{{auth()->user()->works->first()->name}} </span>
                    <div class="work xs-centered xs-display">{{auth()->user()->works->first()->name}} </div>
                @endif  --}}
                <span class="pull-right work hidden-xs mail margin-right-15"> <i class="fa fa-envelope"></i> {{ auth()->user()->info->email() }} </span>


                {{--  ΝΑ ΤΟ ΒΑΛΛΟΥΜΕ ΣΤΗ ΒΑΣΗ ΔΕΔΟΜΕΝΩΝ ΣΤΟΝ ΠΙΝΑΚΑ teachers με field "title"  --}}
                {{--<div class="col-sm-6 basic-studies" style="margin: 110px 0 0 0; max-width: 350px">--}}
                {{--<input type="text" label="Βασικές Σπουδές/Ειδικότητα:" name="basic-studies" class="demo-form ad-input " value="{{ auth()->user()->info->title }}" id="">--}}
                    {{--<i class="icon-inp fa fa-graduation-cap"></i>--}}
                    {{--<img src="/new/img/teacher/graduationMono.png" style="height: 22px; margin-top: -92px" alt="">--}}
                {{--</div>--}}

                <div class="basic-title">
                    <span>{{ auth()->user()->info->title }} </span>
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
                                <div id="experience" class="title">@lang('teacher_profile.section.experience') <i class="fa fa-plus fa-input" data-toggle="modal" data-target="#work-modal-new"></i></div>
                                @if(!auth()->user()->works->isEmpty())
                                    @foreach(auth()->user()->works as $work)
                                        <div class="t1">
                                            <i class="fa fa-pencil fa-input" data-toggle="modal" data-target="#work-modal-edit"></i> {{ $work->job->name }}
                                        </div>
                                        <div class="t2">
                                            {{ $work->company->name }}
                                        </div>
                                        <div class="t3">
                                            {{ \Carbon\Carbon::parse($work->from)->year }} - {{ \Carbon\Carbon::parse($work->until)->year }}
                                        </div>
                                    @endforeach
                                @endif
                                <hr>


                                <div id="spoudes">
                                    <img class="up png-title" src="/new/img/teacher/graduate.png" alt="">
                                    <div class="title">@lang('teacher_profile.section.studies') <i class="fa fa-plus fa-input" data-toggle="modal" data-target="#studies-modal-new"></i></div>
                                    @foreach(auth()->user()->certificates as $certificate)
                                        <div class="t1">
                                            <i class="fa fa-pencil fa-input" data-toggle="modal" data-target="#studies-modal-edit"></i> {{ $certificate->study->name  }}
                                        </div>
                                        <div class="t2">
                                            {{ $certificate->university->name  }}
                                        </div>
                                        <div class="t3">
                                            {{ \Carbon\Carbon::parse($certificate->from)->year }} - {{ \Carbon\Carbon::parse($certificate->until)->year }}
                                        </div>
                                    @endforeach
                                    <hr>
                                </div>


                                <div class="margin-bot-50" id="skills">
                                    <img class="up png-title" src="/new/img/teacher/skillsb.png" alt="">
                                    <div   class="title ">@lang('teacher_profile.section.skills') <i class="fa fa-plus fa-input" data-toggle="modal" data-target="#skills-modal"></i></div>
                                    @foreach(auth()->user()->info->user->getUniqueSkills() as $skill)
                                        <div class="row ">
                                    <span class="t2 skill-text">
                                        <i class="fa fa-trash fa-input margin-right-15" onClick="deleteSkill()"></i> {{ $skill->name }} :
                                    </span>

                                    <span class="thumps-up">
                                        <i id="bt_like{{$skill->id}}" onclick="like({{auth()->user()->info->user->id}}, {{$skill->id}})" class="thumps fa fa-thumbs-up"></i>
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

                <form method="POST" action="{{ route('cv-about-post') }}" id="aboutForm">
                {{ csrf_field() }}
                    <div class="section2-container ">
                            <div class="inner-section">
                                <div class="section-text centered-text">   <img class="modal-icon" src="/new/img/teacher/info.png" alt=""> </i>@lang('teacher_profile.section.about')</div>
                                <div class="input-container">
                                    <div class="info-text"> </div>
                                    <textarea class="notes" placeholder="Συμπληρώστε λίγα λόγια για το δημόσιο προφίλ σας." name="about">{{ auth()->user()->info->about }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">@lang('profile.modal.abort')</button>
                        <button type="submit" class="btn btn-info" onClick="document.getElementById('aboutForm').submit()">Αποθήκευση</button>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- /.modal -->

    <!-- ====== Work Modal New ======= -->
    <div id="work-modal-new" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="top: 100px;">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="" name="form-work">

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
                            <div class="inner-section" style="">
                                <div class="section-text centered-text">   <img class="modal-icon" src="/new/img/teacher/desk.png" alt=""> </i>@lang('teacher_profile.section.experience')</div>
                                <div class="input-container">

                                    <div class="typeahead__container col-sm-8 polyfill-input-sc">
                                            <div class="typeahead__field typeahead__query">
                                                <input label="Ειδικότητα/Αντικείμενο Εργασίας" class="js-typeahead-work demo-form ad-input" name="work"
                                                       type="text" placeholder="" autocomplete="off">
                                                <i class="icon-inp fa fa-briefcase margin-top"></i>
                                            </div>
                                        </div>

                                    <div class="clearfix"></div>

                                    <div class="typeahead__container col-sm-8 polyfill-input-sc">
                                            <div class="typeahead__field typeahead__query">
                                                <input label="Εκπαιδευτικό Ίδρυμα/Εταιρία" class="js-typeahead-school demo-form ad-input" name="work-company"
                                                       type="text" placeholder="" autocomplete="off">
                                                <i class="icon-inp fa fa-university"></i>
                                            </div>
                                        </div>

                                        <div class="clearfix"></div>
                                        <div class="col-sm-8 polyfill-input-sc">
                                            <input type="text" label="Από" name="work-start" class="demo-form ad-input"  id="datepickerWorkFrom" value="">
                                            <i class="icon-inp fa fa-calendar-o"></i>
                                            {{--<img src="/new/img/teacher/graduationMono.png" style="height: 22px; margin-top: -92px" alt="">--}}
                                        </div>
                                        <div class="clearfix polyfill-input-sc"></div>
                                        <div class="col-sm-8 ">
                                            <input type="text" label="Μέχρι" name="work-end" class="demo-form ad-input" id="datepickerWorkEnd"  value="">
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
                </form>
            </div>
        </div>
    </div><!-- /.modal -->

    <!-- ====== Work Modal Edit ======= -->
    <div id="work-modal-edit" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="top: 100px;">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="" name="form-work">

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
                            <div class="inner-section" style="">
                                <div class="section-text centered-text">   <img class="modal-icon" src="/new/img/teacher/desk.png" alt=""> </i>@lang('teacher_profile.section.experience')</div>
                                <div class="input-container">

                                    <div class="typeahead__container col-sm-8 polyfill-input-sc">
                                        <div class="typeahead__field typeahead__query">
                                            <input label="Ειδικότητα/Αντικείμενο Εργασίας" class="js-typeahead-work demo-form ad-input" name="work"
                                                   type="text" placeholder="" autocomplete="off">
                                            <i class="icon-inp fa fa-briefcase margin-top"></i>
                                        </div>
                                    </div>

                                    <div class="clearfix"></div>

                                    <div class="typeahead__container col-sm-8 polyfill-input-sc">
                                        <div class="typeahead__field typeahead__query">
                                            <input label="Εκπαιδευτικό Ίδρυμα/Εταιρία" class="js-typeahead-school demo-form ad-input" name="work-company"
                                                   type="text" placeholder="" autocomplete="off">
                                            <i class="icon-inp fa fa-university"></i>
                                        </div>
                                    </div>


                                    <div class="clearfix"></div>
                                    <div class="col-sm-8 polyfill-input-sc">
                                        <input type="text" label="Από" name="work-start" class="demo-form ad-input"  id="datepickerWorkFromEdit" value="">
                                        <i class="icon-inp fa fa-calendar-o"></i>
                                        {{--<img src="/new/img/teacher/graduationMono.png" style="height: 22px; margin-top: -92px" alt="">--}}
                                    </div>
                                    <div class="clearfix polyfill-input-sc"></div>
                                    <div class="col-sm-8 ">
                                        <input type="text" label="Μέχρι" name="work-end" class="demo-form ad-input" id="datepickerWorkEndEdit"  value="">
                                        <i class="icon-inp fa fa-calendar-o"></i>
                                        {{--<img src="/new/img/teacher/graduationMono.png" style="height: 22px; margin-top: -92px" alt="">--}}
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Διαγραφή</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">@lang('profile.modal.abort')</button>
                        <button type="button" onClick="" data-dismiss="modal" class="btn btn-info">Αποθήκευση</button>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- /.modal -->

    <!-- ====== Studies Modal  New======= -->
    <div id="studies-modal-new" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="top: 100px;">
        <div class="modal-dialog">

                <div class="modal-content">
                    <form id="" name="form-studies">

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
                                <div class="inner-section" style="">
                                    <div class="section-text centered-text">   <img class="modal-icon" src="/new/img/teacher/graduate.png" alt=""> </i>@lang('teacher_profile.section.studies')</div>
                                    <div class="input-container">

                                            <div class="typeahead__container col-sm-8 polyfill-input-sc">
                                                <div class="typeahead__field typeahead__query">
                                                    <input label="Τίτλος/Επίπεδο Σπουδών"
                                                           class="js-typeahead-studies demo-form ad-input" name="studies"
                                                           type="text" placeholder="" autocomplete="off">
                                                    <i class="icon-inp fa fa-graduation-cap margin-top"></i>
                                                </div>
                                            </div>
                                        <div class="clearfix"></div>
                                            <div class="typeahead__container col-sm-8 polyfill-input-sc">
                                                <div class="typeahead__field typeahead__query">
                                                    <input label="Εκπαιδευτικό Ίδρυμα/Εταιρία"
                                                           class="js-typeahead-university demo-form ad-input" name="university"
                                                           type="text" placeholder="" autocomplete="off">
                                                    <i class="icon-inp fa fa-university"></i>
                                                </div>
                                            </div>


                                        <div class="clearfix"></div>
                                        <div class="col-sm-8 polyfill-input-sc">
                                            <input type="text" label="Από" name="work-start" class="demo-form ad-input"  id="datepickerStudiesFrom" value="">
                                            <i class="icon-inp fa fa-calendar-o"></i>
                                            {{--<img src="/new/img/teacher/graduationMono.png" style="height: 22px; margin-top: -92px" alt="">--}}
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-sm-8 polyfill-input-sc" >
                                            <input type="text" label="Μέχρι" name="work-end" class="demo-form ad-input" id="datepickerStudiesEnd"  value="">
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
                </form>
            </div>
        </div>
    </div><!-- /.modal -->

    <!-- ====== Studies Modal  Edit======= -->
    <div id="studies-modal-edit" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="top: 100px;">
        <div class="modal-dialog">

            <div class="modal-content">
                <form id="" name="form-studies">

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
                            <div class="inner-section" style="">
                                <div class="section-text centered-text">   <img class="modal-icon" src="/new/img/teacher/graduate.png" alt=""> </i>@lang('teacher_profile.section.studies')</div>
                                <div class="input-container">

                                    <div class="typeahead__container col-sm-8 polyfill-input-sc">
                                        <div class="typeahead__field typeahead__query">
                                            <input label="Τίτλος/Επίπεδο Σπουδών"
                                                   class="js-typeahead-studies demo-form ad-input" name="studies"
                                                   type="text" placeholder="" autocomplete="off">
                                            <i class="icon-inp fa fa-graduation-cap margin-top"></i>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="typeahead__container col-sm-8 polyfill-input-sc">
                                        <div class="typeahead__field typeahead__query">
                                            <input label="Εκπαιδευτικό Ίδρυμα/Εταιρία"
                                                   class="js-typeahead-university demo-form ad-input" name="university"
                                                   type="text" placeholder="" autocomplete="off">
                                            <i class="icon-inp fa fa-university"></i>
                                        </div>
                                    </div>

                                    <div class="clearfix"></div>
                                    <div class="col-sm-8 polyfill-input-sc">
                                        <input type="text" label="Από" name="work-start" class="demo-form ad-input"  id="datepickerStudiesFromEdit" value="">
                                        <i class="icon-inp fa fa-calendar-o"></i>
                                        {{--<img src="/new/img/teacher/graduationMono.png" style="height: 22px; margin-top: -92px" alt="">--}}
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-sm-8 polyfill-input-sc" >
                                        <input type="text" label="Μέχρι" name="work-end" class="demo-form ad-input" id="datepickerStudiesEndEdit"  value="">
                                        <i class="icon-inp fa fa-calendar-o"></i>
                                        {{--<img src="/new/img/teacher/graduationMono.png" style="height: 22px; margin-top: -92px" alt="">--}}
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Διαγραφή</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">@lang('profile.modal.abort')</button>
                        <button type="button" onClick="" data-dismiss="modal" class="btn btn-info">Αποθήκευση</button>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- /.modal -->

    <!-- ====== skills Modal  ======= -->
    <div id="skills-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="top: 100px;">
        <div class="modal-dialog">

            <div class="modal-content">
                <form id="" name="form-studies">

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
                            <div class="inner-section" style="">
                                <div class="section-text centered-text">   <img class="modal-icon" src="/new/img/teacher/skillsb.png" alt=""> </i>@lang('teacher_profile.section.skills')</div>
                                <div class="input-container">

                                <div class="typeahead__container col-sm-8 polyfill-input-sc">
                                                <div class="typeahead__field typeahead__query">
                                                    <input label="Δεξιότητες/Ικανότητες"
                                                           class="js-typeahead-skills demo-form ad-input" name="studies"
                                                           type="text" placeholder="" autocomplete="off">
                                                    <i class="icon-inp fa fa-list margin-top"></i>
                                                </div>
                                            </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">@lang('profile.modal.abort')</button>
                        <button type="button" onClick="" data-dismiss="modal" class="btn btn-info">Αποθήκευση</button>
                    </div>
                </form>
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
    <script src="/panel/assets/js/datepicker-el.js"></script>
    <!-- ----------------- -->

    <!-- TypeAhead -->
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>--}}
    <script src="/panel/assets/js/jquery.typeahead.min.js"></script>

    <script>
        window.skills = <?php echo $skills ?>
    </script>
<script>

    function deleteSkill(){
        console.log('delete skill')
    };


    $(document).ready(function(){

        console.log(window.skills)

        $('#full').fadeIn(60).removeClass('hidden');

        $( function() {

         //$( "#datepickerFrom" ).datepicker( $.datepicker.regional[ "el" ] );
            $( "#datepickerWorkFrom" ).datepicker(
                    {
                        dateFormat: "mm/yy",
                        changeMonth: true,
                        changeYear: true,
                        showButtonPanel: true,
                        yearRange: "1980:",
                        onClose: function(dateText, inst) {


                            function isDonePressed(){
                                return ($('#ui-datepicker-div').html().indexOf('ui-datepicker-close ui-state-default ui-priority-primary ui-corner-all ui-state-hover') > -1);
                            }

                            if (isDonePressed()){
                                var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
                                var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                                $(this).datepicker('setDate', new Date(year, month, 1)).trigger('change');
                                
                                 $('.date-picker').focusout()//Added to remove focus from datepicker input box on selecting date
                            }
                        },
                        beforeShow : function(input, inst) {

                            inst.dpDiv.addClass('month_year_datepicker')

                            if ((datestr = $(this).val()).length > 0) {
                                year = datestr.substring(datestr.length-4, datestr.length);
                                month = datestr.substring(0, 2);
                                $(this).datepicker('option', 'defaultDate', new Date(year, month-1, 1));
                                $(this).datepicker('setDate', new Date(year, month-1, 1));
                                $(".ui-datepicker-calendar").hide();
                            }
                        }
                    })
        });
        $( function() {
            $( "#datepickerWorkEnd" ).datepicker(
                    {
                        dateFormat: "mm/yy",
                        changeMonth: true,
                        changeYear: true,
                        showButtonPanel: true,
                        yearRange: "1980:",
                        onClose: function(dateText, inst) {


                            function isDonePressed(){
                                return ($('#ui-datepicker-div').html().indexOf('ui-datepicker-close ui-state-default ui-priority-primary ui-corner-all ui-state-hover') > -1);
                            }

                            if (isDonePressed()){
                                var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
                                var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                                $(this).datepicker('setDate', new Date(year, month, 1)).trigger('change');
                                
                                 $('.date-picker').focusout()//Added to remove focus from datepicker input box on selecting date
                            }
                        },
                        beforeShow : function(input, inst) {

                            inst.dpDiv.addClass('month_year_datepicker')

                            if ((datestr = $(this).val()).length > 0) {
                                year = datestr.substring(datestr.length-4, datestr.length);
                                month = datestr.substring(0, 2);
                                $(this).datepicker('option', 'defaultDate', new Date(year, month-1, 1));
                                $(this).datepicker('setDate', new Date(year, month-1, 1));
                                $(".ui-datepicker-calendar").hide();
                            }
                        }
                    })
        });

        $( function() {
        $( "#datepickerWorkFromEdit" ).datepicker(
                {
                    dateFormat: "mm/yy",
                    changeMonth: true,
                    changeYear: true,
                    showButtonPanel: true,
                    yearRange: "1980:",
                    onClose: function(dateText, inst) {


                        function isDonePressed(){
                            return ($('#ui-datepicker-div').html().indexOf('ui-datepicker-close ui-state-default ui-priority-primary ui-corner-all ui-state-hover') > -1);
                        }

                        if (isDonePressed()){
                            var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
                            var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                            $(this).datepicker('setDate', new Date(year, month, 1)).trigger('change');

                            $('.date-picker').focusout()//Added to remove focus from datepicker input box on selecting date
                        }
                    },
                    beforeShow : function(input, inst) {

                        inst.dpDiv.addClass('month_year_datepicker')

                        if ((datestr = $(this).val()).length > 0) {
                            year = datestr.substring(datestr.length-4, datestr.length);
                            month = datestr.substring(0, 2);
                            $(this).datepicker('option', 'defaultDate', new Date(year, month-1, 1));
                            $(this).datepicker('setDate', new Date(year, month-1, 1));
                            $(".ui-datepicker-calendar").hide();
                        }
                    }
                })
    });
    $( function() {
        $( "#datepickerWorkEndEdit" ).datepicker(
                {
                    dateFormat: "mm/yy",
                    changeMonth: true,
                    changeYear: true,
                    showButtonPanel: true,
                    yearRange: "1980:",
                    onClose: function(dateText, inst) {


                        function isDonePressed(){
                            return ($('#ui-datepicker-div').html().indexOf('ui-datepicker-close ui-state-default ui-priority-primary ui-corner-all ui-state-hover') > -1);
                        }

                        if (isDonePressed()){
                            var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
                            var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                            $(this).datepicker('setDate', new Date(year, month, 1)).trigger('change');

                            $('.date-picker').focusout()//Added to remove focus from datepicker input box on selecting date
                        }
                    },
                    beforeShow : function(input, inst) {

                        inst.dpDiv.addClass('month_year_datepicker')

                        if ((datestr = $(this).val()).length > 0) {
                            year = datestr.substring(datestr.length-4, datestr.length);
                            month = datestr.substring(0, 2);
                            $(this).datepicker('option', 'defaultDate', new Date(year, month-1, 1));
                            $(this).datepicker('setDate', new Date(year, month-1, 1));
                            $(".ui-datepicker-calendar").hide();
                        }
                    }
                })
    });
        $( function() {
            $( "#datepickerStudiesFrom" ).datepicker(
                    {
                        dateFormat: "mm/yy",
                        changeMonth: true,
                        changeYear: true,
                        showButtonPanel: true,
                        yearRange: "1980:",
                        onClose: function(dateText, inst) {


                            function isDonePressed(){
                                return ($('#ui-datepicker-div').html().indexOf('ui-datepicker-close ui-state-default ui-priority-primary ui-corner-all ui-state-hover') > -1);
                            }

                            if (isDonePressed()){
                                var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
                                var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                                $(this).datepicker('setDate', new Date(year, month, 1)).trigger('change');
                                
                                 $('.date-picker').focusout()//Added to remove focus from datepicker input box on selecting date
                            }
                        },
                        beforeShow : function(input, inst) {

                            inst.dpDiv.addClass('month_year_datepicker')

                            if ((datestr = $(this).val()).length > 0) {
                                year = datestr.substring(datestr.length-4, datestr.length);
                                month = datestr.substring(0, 2);
                                $(this).datepicker('option', 'defaultDate', new Date(year, month-1, 1));
                                $(this).datepicker('setDate', new Date(year, month-1, 1));
                                $(".ui-datepicker-calendar").hide();
                            }
                        }
                    })
        });
        $( function() {
            $( "#datepickerStudiesEnd" ).datepicker(
                    {
                        dateFormat: "mm/yy",
                        changeMonth: true,
                        changeYear: true,
                        showButtonPanel: true,
                        yearRange: "1980:",
                        onClose: function(dateText, inst) {


                            function isDonePressed(){
                                return ($('#ui-datepicker-div').html().indexOf('ui-datepicker-close ui-state-default ui-priority-primary ui-corner-all ui-state-hover') > -1);
                            }

                            if (isDonePressed()){
                                var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
                                var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                                $(this).datepicker('setDate', new Date(year, month, 1)).trigger('change');
                                
                                 $('.date-picker').focusout()//Added to remove focus from datepicker input box on selecting date
                            }
                        },
                        beforeShow : function(input, inst) {

                            inst.dpDiv.addClass('month_year_datepicker')

                            if ((datestr = $(this).val()).length > 0) {
                                year = datestr.substring(datestr.length-4, datestr.length);
                                month = datestr.substring(0, 2);
                                $(this).datepicker('option', 'defaultDate', new Date(year, month-1, 1));
                                $(this).datepicker('setDate', new Date(year, month-1, 1));
                                $(".ui-datepicker-calendar").hide();
                            }
                        }
                    })
        });

        $( function() {
            $( "#datepickerStudiesFromEdit" ).datepicker(
                    {
                        dateFormat: "mm/yy",
                        changeMonth: true,
                        changeYear: true,
                        showButtonPanel: true,
                        yearRange: "1980:",
                        onClose: function(dateText, inst) {


                            function isDonePressed(){
                                return ($('#ui-datepicker-div').html().indexOf('ui-datepicker-close ui-state-default ui-priority-primary ui-corner-all ui-state-hover') > -1);
                            }

                            if (isDonePressed()){
                                var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
                                var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                                $(this).datepicker('setDate', new Date(year, month, 1)).trigger('change');

                                $('.date-picker').focusout()//Added to remove focus from datepicker input box on selecting date
                            }
                        },
                        beforeShow : function(input, inst) {

                            inst.dpDiv.addClass('month_year_datepicker')

                            if ((datestr = $(this).val()).length > 0) {
                                year = datestr.substring(datestr.length-4, datestr.length);
                                month = datestr.substring(0, 2);
                                $(this).datepicker('option', 'defaultDate', new Date(year, month-1, 1));
                                $(this).datepicker('setDate', new Date(year, month-1, 1));
                                $(".ui-datepicker-calendar").hide();
                            }
                        }
                    })
        });
        $( function() {
            $( "#datepickerStudiesEndEdit" ).datepicker(
                    {
                        dateFormat: "mm/yy",
                        changeMonth: true,
                        changeYear: true,
                        showButtonPanel: true,
                        yearRange: "1980:",
                        onClose: function(dateText, inst) {


                            function isDonePressed(){
                                return ($('#ui-datepicker-div').html().indexOf('ui-datepicker-close ui-state-default ui-priority-primary ui-corner-all ui-state-hover') > -1);
                            }

                            if (isDonePressed()){
                                var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
                                var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                                $(this).datepicker('setDate', new Date(year, month, 1)).trigger('change');

                                $('.date-picker').focusout()//Added to remove focus from datepicker input box on selecting date
                            }
                        },
                        beforeShow : function(input, inst) {

                            inst.dpDiv.addClass('month_year_datepicker')

                            if ((datestr = $(this).val()).length > 0) {
                                year = datestr.substring(datestr.length-4, datestr.length);
                                month = datestr.substring(0, 2);
                                $(this).datepicker('option', 'defaultDate', new Date(year, month-1, 1));
                                $(this).datepicker('setDate', new Date(year, month-1, 1));
                                $(".ui-datepicker-calendar").hide();
                            }
                        }
                    })
        });



        $.typeahead({
            input: '.js-typeahead-work',
            order: "asc",
            hint: true,
            minLength: 2,
            maxItem: 5,
            searchOnFocus: true,
            source: {
                data: [
                    'Able Seamen', 'Account Manager', 'Accountant', 'Actor', 'Actuary', 'Advertising Sales Agent', 'Aerospace Engineer', 'Agricultural Crop Farm Manager', 'Agricultural Crop Worker', 'Agricultural Engineer', 'Agricultural Equipment Operator', 'Agricultural Inspector', 'Agricultural Manager', 'Agricultural Product Grader Sorter', 'Agricultural Sales Representative', 'Agricultural Science Technician', 'Agricultural Sciences Teacher', 'Agricultural Technician', 'Agricultural Worker', 'Air Crew Member', 'Air Crew Officer', 'Air Traffic Controller', 'Aircraft Assembler', 'Aircraft Body Repairer', 'Aircraft Cargo Handling Supervisor', 'Aircraft Engine Specialist', 'Aircraft Launch and Recovery Officer', 'Aircraft Launch Specialist', 'Aircraft Mechanics OR Aircraft Service Technician', 'Aircraft Rigging Assembler', 'Aircraft Structure Assemblers', 'Airfield Operations Specialist', 'Airframe Mechanic', 'Airline Pilot OR Copilot OR Flight Engineer', 'Algorithm Developer', 'Alteration Tailor', 'Ambulance Driver', 'Amusement Attendant', 'Anesthesiologist', 'Animal Breeder', 'Animal Care Workers', 'Animal Control Worker', 'Animal Husbandry Worker', 'Animal Scientist', 'Animal Trainer', 'Annealing Machine Operator', 'Announcer', 'Answering Service', 'Anthropologist', 'Anthropologist OR Archeologist', 'Anthropology Teacher', 'Appliance Repairer', 'Arbitrator', 'Archeologist', 'Architect', 'Architectural Drafter', 'Architectural Drafter OR Civil Drafter', 'Architecture Teacher', 'Archivist', 'Armored Assault Vehicle Crew Member', 'Armored Assault Vehicle Officer', 'Art Director', 'Art Teacher', 'Artillery Officer', 'Artillery Crew Member', 'Artist', 'Assembler', 'Assessor', 'Astronomer', 'Athletes and Sports Competitor', 'Athletic Trainer', 'Atmospheric and Space Scientist', 'Audio and Video Equipment Technician', 'Audiologist', 'Audio-Visual Collections Specialist', 'Auditor', 'Auditor', 'Automatic Teller Machine Servicer', 'Automotive Body Repairer', 'Automotive Glass Installers', 'Automotive Master Mechanic', 'Automotive Mechanic', 'Automotive Specialty Technician', 'Automotive Technician', 'Auxiliary Equipment Operator', 'Aviation Inspector', 'Avionics Technician',
                    'Bailiff', 'Baker', 'Barber', 'Bartender', 'Bartender Helper', 'Battery Repairer', 'Bellhop','Biochemist or Biophysicist', 'Biological Science Teacher', 'Biological Scientist', 'Biological Technician', 'Biologist', 'Biomedical Engineer', 'Biophysicist', 'Board Of Directors', 'Boat Builder and Shipwright', 'Boiler Operator', 'Boilermaker', 'Bookbinder', 'Bookkeeper', 'Brake Machine Setter', 'Brattice Builder', 'Brazer', 'Brazing Machine Operator', 'Brickmason', 'Bridge Tender OR Lock Tender', 'Broadcast News Analyst', 'Broadcast Technician', 'Brokerage Clerk', 'Budget Analyst', 'Buffing and Polishing Operator', 'Building Cleaning Worker', 'Building Inspector', 'Bulldozer Operator', 'Bus Driver', 'Business Development Manager', 'Business Manager', 'Business Operations Specialist', 'Business Teacher', 'Butcher', 'Buyer',
                    'Cabinetmaker', 'Carpenter Assembler and Repairer', 'Carpet Installer', 'Cartographer', 'Cartoonist', 'Carver', 'Cashier', 'Casting Machine Operator', 'Casting Machine Set-Up Operator', 'ccc', 'Ceiling Tile Installer', 'Cement Mason and Concrete Finisher', 'Central Office', 'Central Office and PBX Installers', 'Central Office Operator', 'CEO', 'CFO', 'Chef', 'Chemical Engineer', 'Chemical Equipment Controller', 'Chemical Equipment Operator', 'Chemical Equipment Tender', 'Chemical Plant Operator', 'Chemical Technician', 'Chemist', 'Chemistry Teacher', 'Child Care', 'Child Care Worker', 'Chiropractor', 'Choreographer', 'City', 'City Planning Aide', 'Civil Drafter', 'Civil Engineer', 'Civil Engineering Technician', 'Claims Adjuster', 'Claims Examiner', 'Claims Taker', 'Cleaners of Vehicles', 'Clergy', 'Clerk', 'Clinical Laboratory Technician', 'Clinical Psychologist', 'Clinical School Psychologist', 'Coaches and Scout', 'Coating Machine Operator', 'Coil Winders', 'Command Control Center Officer', 'Command Control Center Specialist', 'Commercial and Industrial Designer', 'Commercial Diver', 'Commercial Pilot', 'Communication Equipment Repairer', 'Communication Equipment Worker', 'Communications Equipment Operator', 'Communications Teacher', 'Community Service Manager', 'Compacting Machine Operator', 'Compensation and Benefits Manager', 'Compliance Officers', 'Composer', 'Computer', 'Computer Hardware Engineer', 'Computer Operator', 'Computer Programmer', 'Computer Repairer', 'Computer Science Teacher', 'Computer Scientist', 'Computer Security Specialist', 'Computer Software Engineer', 'Computer Specialist', 'Computer Support Specialist', 'Computer Systems Analyst', 'Computer-Controlled Machine Tool Operator', 'Concierge', 'Conservation Scientist', 'Construction', 'Construction Carpenter', 'Construction Driller', 'Construction Equipment Operator', 'Construction Laborer', 'Construction Manager', 'Continuous Mining Machine Operator', 'Control Valve Installer', 'Conveyor Operator', 'Cook', 'Cooling and Freezing Equipment Operator', 'Copy Machine Operator', 'Copy Writer', 'Coremaking Machine Operator', 'Coroner', 'Corporate Trainer', 'Correctional Officer', 'Correspondence Clerk', 'Cost Estimator', 'Costume Attendant', 'Counseling Psychologist', 'Counselor', 'Counsil', 'Courier', 'Court Clerk', 'Court Reporter', 'Craft Artist', 'Crane and Tower Operator', 'Creative Writer', 'Credit Checkers Clerk', 'Credit Analyst', 'Credit Authorizer', 'Credit Checker', 'Criminal Investigator', 'Crossing Guard', 'Crushing Grinding Machine Operator', 'CSI', 'CTO', 'Cultural Studies Teacher', 'Curator', 'Custom Tailor', 'Customer Service Representative', 'Cutting Machine Operator', 'Cutting Machine Operator',
                    'Dancer', 'Data Entry Operator', 'Data Processing Equipment Repairer', 'Database Administrator', 'Database Manager', 'Deburring Machine Operator', 'Decorator', 'Dental Assistant', 'Dental Hygienist', 'Dental Laboratory Technician', 'Dentist', 'Designer', 'Desktop Publisher', 'Detective', 'Diagnostic Medical Sonographer', 'Diamond Worker', 'Diesel Engine Specialist', 'Dietetic Technician', 'Director Of Business Development', 'Director Of Marketing', 'Director Of Social Media Marketing', 'Director Of Talent Acquisition', 'Director Religious Activities', 'Directory Assistance Operator', 'Dishwasher', 'Dispatcher', 'Distribution Manager', 'Door To Door Sales', 'Dot Etcher', 'Drafter', 'Dragline Operator', 'Dredge Operator', 'Drilling and Boring Machine Tool Setter', 'Driver-Sales Worker', 'Drycleaning Machine Operator', 'Drywall Ceiling Tile Installer', 'Drywall Installer',
                    'Earth Driller', 'Economics Teacher', 'Economist', 'Editor', 'Education Administrator', 'Education Teacher', 'Educational Counselor OR Vocationall Counselor', 'Educational Psychologist', 'Electric Meter Installer', 'Electric Motor Repairer', 'Electrical and Electronic Inspector and Tester', 'Electrical and Electronics Drafter', 'Electrical Drafter', 'Electrical Engineer', 'Electrical Engineering Technician', 'Electrical Parts Reconditioner', 'Electrical Power-Line Installer', 'Electrical Sales Representative', 'Electrician', 'Electrician', 'Electrolytic Plating Machine Operator', 'Electromechanical Equipment Assembler', 'Electro-Mechanical Technician', 'Electronic Drafter', 'Electronic Engineering Technician', 'Electronic Equipment Assembler', 'Electronic Masking System Operator', 'Electronics Engineer', 'Electronics Engineering Technician', 'Electrotyper', 'Elementary and Secondary School Administrators', 'Elementary School Teacher', 'Elevator Installer and Repairer', 'Eligibility Interviewer', 'Embalmer', 'Embossing Machine Operator', 'Emergency Management Specialist', 'Emergency Medical Technician and Paramedic', 'Employment Interviewer', 'Engine Assembler', 'Engineer', 'Engineering', 'Engineering Manager', 'Engineering Teacher', 'Engineering Technician', 'English Language Teacher', 'Engraver', 'Entertainer and Performer', 'Entertainment Attendant', 'Environmental Compliance Inspector', 'Environmental Engineer', 'Environmental Engineering Technician', 'Environmental Science Teacher', 'Environmental Science Technician', 'Environmental Scientist', 'Epidemiologist', 'Equal Opportunity Representative', 'Etcher', 'Etcher and Engraver', 'Event Planner', 'Excavating Machine Operator', 'Executive Secretary', 'Exhibit Designer', 'Explosives Expert', 'Extraction Worker', 'Extruding and Drawing Machine Operator', 'Extruding Machine Operator',
                    'Fabric Mender', 'Fabric Pressers', 'Farm and Home Management Advisor', 'Farm Equipment Mechanic', 'Farm Labor Contractor', 'Farmer', 'Farmworker', 'Fashion Designer', 'Fashion Model', 'Fast Food Cook', 'Fence Erector', 'Fiber Product Cutting Machine Operator', 'Fiberglass Laminator and Fabricator', 'File Clerk', 'Film Laboratory Technician', 'Financial Analyst', 'Financial Examiner', 'Financial Manager', 'Financial Services Sales Agent', 'Financial Specialist', 'Fire Fighter', 'Fire Inspector', 'Fire Investigator', 'Fire-Prevention Engineer', 'First-Line Supervisor-Manager of Landscaping, Lawn Service, and Groundskeeping Worker', 'Fish Game Warden', 'Fish Hatchery Manager', 'Fishery Worker', 'Fishing OR Forestry Supervisor', 'Fitness Trainer', 'Fitter', 'Flight Attendant', 'Floor Finisher', 'Floor Layer', 'Floral Designer', 'Food Batchmaker', 'Food Cooking Machine Operators', 'Food Preparation', 'Food Preparation and Serving Worker', 'Food Preparation Worker', 'Food Science Technician', 'Food Scientists and Technologist', 'Food Servers', 'Food Service Manager', 'Food Tobacco Roasting', 'Foreign Language Teacher', 'Forensic Investigator', 'Forensic Science Technician', 'Forest and Conservation Technician', 'Forest and Conservation Worker', 'Forest Fire Fighter', 'Forest Fire Fighting Supervisor', 'Forest Fire Inspector', 'Forester', 'Forestry Conservation Science Teacher', 'Forging Machine Setter', 'Forming Machine Operator', 'Forming Machine Operator', 'Foundry Mold and Coremaker', 'Fraud Investigator', 'Freight Agent', 'Freight and Material Mover', 'Freight Inspector', 'Funeral Attendant', 'Funeral Director', 'Furnace Operator', 'Furniture Finisher',
                    'Gaming Cage Worker', 'Gaming Dealer', 'Gaming Manager', 'Gaming Service Worker', 'Gaming Supervisor', 'Gaming Surveillance Officer', 'Garment', 'Gas Appliance Repairer', 'Gas Compressor Operator', 'Gas Distribution Plant Operator', 'Gas Plant Operator', 'Gas Processing Plant Operator', 'Gas Pumping Station Operator', 'Gas Pumping Station Operator', 'Gauger', 'GED Teacher', 'General Farmworker', 'General Manager', 'General Practitioner', 'Geographer', 'Geography Teacher', 'Geological Data Technician', 'Geological Sample Test Technician', 'Geologist', 'Geoscientists', 'Glass Blower', 'Glass Cutting Machine Operator', 'Glazier', 'Gluing Machine Operator', 'Government', 'Government Property Inspector', 'Government Service Executive', 'Graduate Teaching Assistant', 'Graphic Designer', 'Grinder OR Polisher', 'Grinding Machine Operator', 'Grips', 'Grounds Maintenance Worker',
                    'Hairdresser OR Cosmetologist', 'Hand Trimmer', 'Hand Presser', 'Hand Sewer', 'Hazardous Materials Removal Worker', 'Head Nurse', 'Health Educator', 'Health Practitioner', 'Health Services Manager', 'Health Specialties Teacher', 'Health Technologist', 'Healthcare', 'Healthcare Practitioner', 'Healthcare Support Worker', 'Heat Treating Equipment Operator', 'Heaters', 'Heating and Air Conditioning Mechanic', 'Heating Equipment Operator', 'Heavy Equipment Mechanic', 'Highway Maintenance Worker', 'Highway Patrol Pilot', 'Historian', 'History Teacher', 'Hoist and Winch Operator', 'Home', 'Home Appliance Installer', 'Home Appliance Repairer', 'Home Economics Teacher', 'Home Entertainment Equipment Installer', 'Home Health Aide', 'Homeland Security', 'Horticultural Worker', 'Host and Hostess', 'Hotel Desk Clerk', 'House Cleaner', 'Housekeeper', 'Housekeeping Supervisor', 'HR Manager', 'HR Specialist', 'Human Resource Director', 'Human Resource Manager', 'Human Resources Assistant', 'Human Resources Manager', 'Human Resources Specialist', 'Hunter and Trapper', 'HVAC Mechanic', 'Hydrologist',
                    'Illustrator', 'Immigration Inspector OR Customs Inspector', 'Industrial Engineer', 'Industrial Engineering Technician', 'Industrial Equipment Maintenance', 'Industrial Machinery Mechanic', 'Industrial Production Manager', 'Industrial Safety Engineer', 'Industrial-Organizational Psychologist', 'Infantry', 'Infantry Officer', 'Information Systems Manager', 'Inspector', 'Installation and Repair Technician', 'Instructional Coordinator', 'Instrument Sales Representative', 'Insulation Installer', 'Insulation Worker', 'Insurance Investigator', 'Insurance Appraiser', 'Insurance Claims Clerk', 'Insurance Policy Processing Clerk', 'Insurance Sales Agent', 'Insurance Underwriter', 'Interaction Designer', 'Interior Designer', 'Internist', 'Interpreter OR Translator', 'Interviewer', 'Irradiated-Fuel Handler',
                    'Janitor', 'Janitorial Supervisor', 'Jeweler', 'Jewelry Model OR Mold Makers', 'Job Printer', 'Judge',
                    'Keyboard Instrument Repairer and Tuner', 'Kindergarten Teacher',
                    'Landscape Architect', 'Landscape Artist', 'Landscaper', 'Landscaping', 'Lathe Operator', 'Laundry OR Dry-Cleaning Worker', 'Law Clerk', 'Law Enforcement Teacher', 'Law Teacher', 'Lawn Service Manager', 'Lawyer', 'Lay-Out Worker', 'Legal Secretary', 'Legal Support Worker', 'Legislator', 'Letterpress Setters Operator', 'Librarian', 'Library Assistant', 'Library Science Teacher', 'Library Technician', 'Library Worker', 'License Clerk', 'Licensed Practical Nurse', 'Licensing Examiner and Inspector', 'Life Science Technician', 'Life Scientists', 'Lifeguard', 'Loading Machine Operator', 'Loan Counselor', 'Loan Interviewer', 'Loan Officer', 'Locker Room Attendant', 'Locksmith', 'Locomotive Engineer', 'Locomotive Firer', 'Lodging Manager', 'Log Grader and Scaler', 'Logging Equipment Operator', 'Logging Supervisor', 'Logging Tractor Operator', 'Logging Worker', 'Logistician',
                    'Machine Feeder', 'Machine Operator', 'Machine Tool Operator', 'Machinery Maintenance', 'Taxi Drivers and Chauffeur', 'Teacher', 'Teacher Assistant', 'Team Assembler', 'Technical Director', 'Technical Program Manager', 'Technical Specialist', 'Technical Writer', 'Telecommunications Equipment Installer', 'Telecommunications Facility Examiner', 'Telecommunications Line Installer', 'Telemarketer', 'Telephone Operator', 'Telephone Station Installer and Repairer', 'Teller', 'Terrazzo Workes and Finisher', 'Textile Cutting Machine Operator', 'Textile Dyeing Machine Operator', 'Textile Knitting Machine Operator', 'Textile Machine Operator', 'Textile Worker', 'Therapist', 'Ticket Agent', 'Tile Setter OR Marble Setter', 'Timing Device Assemblers', 'Tire Builder', 'Tire Changer', 'Title Abstractor', 'Title Examiner', 'Title Searcher', 'Tool and Die Maker', 'Tool Set-Up Operator', 'Tool Sharpener', 'Tour Guide', 'Tractor Operator', 'Tractor-Trailer Truck Driver', 'Traffic Technician', 'Train Crew', 'Trainer', 'Training Manager OR Development Manager', 'Transformer Repairer', 'Transit Police OR Railroad Police', 'Transportation and Material-Moving', 'Transportation Attendant', 'Transportation Equipment Maintenance', 'Transportation Equipment Painters', 'Transportation Inspector', 'Transportation Manager', 'Transportation Worker', 'Travel Agent', 'Travel Clerk', 'Travel Guide', 'Tree Trimmer', 'Truck Driver', 'TSA', 'Typesetter', 'Typesetting Machine Operator',
                    'Umpire and Referee', 'Underground Mining', 'University', 'Upholsterer', 'Urban Planner', 'User Experience Manager', 'User Experience Researcher', 'Usher', 'Utility Meter Reader',
                    'Valve Repairer OR Regulator Repairer', 'Vending Machine Servicer', 'Veterinarian', 'Veterinary Assistant OR Laboratory Animal Caretaker', 'Veterinary Technician', 'Vice President Of Human Resources', 'Vice President Of Marketing', 'Video Editor', 'Visual Designer', 'Vocational Education Teacher',
                    'Waiter', 'Waitress', 'Warehouse', 'Washing Equipment Operator', 'Waste Treatment Plant Operator', 'Watch Repairer', 'Weapons Specialists', 'Web Developer', 'Webmaster', 'Welder', 'Welder', 'Welder and Cutter', 'Welder-Fitter', 'Welding Machine Tender', 'Welding Machine Operator', 'Welding Machine Setter', 'Welfare Eligibility Clerk', 'Well and Core Drill Operator', 'Wellhead Pumper', 'Wholesale Buyer', 'Wind Instrument Repairer', 'Woodworker', 'Woodworking Machine Operator', 'Woodworking Machine Setter', 'Word Processors and Typist', 'Writer OR Author',
                    'Zoologists OR Wildlife Biologist','Μαθηματικός','Μηχανικός Αεροσκαφών','Χημικός Μηχανικός','Μηχανικός Αυτοκινήτων','Φιλόλογος','Φυσικός','Χημικός','Οικονομολόγος','Βιολόγος','Βιοχημικός'
                ]
            },
            callback: {onInit: function () {}}
        });

        $.typeahead({
            input: '.js-typeahead-school',
            order: "asc",
            hint: true,
            source: {
                data: [
                    'American College of Thessaloniki','Μητροπολιτικό Κολλέγιο Θεσσαλονίκης','ΑΚΜΗ Θεσσαλονίκη','Εκπαιδευτήρια Βασιλειάδη','Εκπαιδευτήρια Φρυγανιώτη','New York College','Φροντιστήρια Υποδομή','Εκπαιδευτήρια Απόστολος Παύλος','Ευρωγνώση Τσιμισκή','Danza Fuerte','Danza Fuerte',
                    'Hellenic American College','The American College of Greece','Aegean College','Dei College','Αττικό Κολλέγιο'
                ]
            },
            callback: {onInit: function () {}}
        });

        $.typeahead({
            input: '.js-typeahead-studies',
            order: "asc",
            hint: true,
            source: {
                data: [
                    'Baker', 'Barber', 'Bartender', 'Bartender Helper', 'Battery Repairer', 'Bellhop','Biochemist or Biophysicist', 'Biological Science Teacher', 'Biological Scientist','Landscaper', 'Landscaping', 'Lathe Operator', 'Laundry OR Dry-Cleaning Worker', 'Law Clerk', 'Law Enforcement Teacher', 'Law Teacher', 'Lawn Service Manager', 'Lawyer', 'Lay-Out Worker', 'Legal Secretary', 'Legal Support Worker', 'Legislator', 'Letterpress Setters Operator', 'Librarian', 'Library Assistant', 'Library Science Teacher', 'Library Technician', 'Library Worker', 'License Clerk', 'Licensed Practical Nurse', 'Licensing Examiner and Inspector', 'Life Science Technician', 'Life Scientists', 'Lifeguard', 'Loading Machine Operator', 'Loan Counselor', 'Loan Interviewer', 'Loan Officer', 'Locker Room Attendant', 'Locksmith', 'Locomotive Engineer', 'Locomotive Firer', 'Lodging Manager', 'Log Grader and Scaler', 'Logging Equipment Operator', 'Logging Supervisor', 'Logging Tractor Operator', 'Logging Worker', 'Logistician',
                    'Machine Feeder', 'Machine Operator', 'Machine Tool Operator','Waitress', 'Warehouse', 'Washing Equipment Operator', 'Waste Treatment Plant Operator', 'Watch Repairer',
                    'Μαθηματικός','Μηχανικός Αεροσκαφών','Χημικός Μηχανικός','Μηχανικός Αυτοκινήτων','Φιλόλογος','Φυσικός','Χημικός','Οικονομολόγος','Βιολόγος','Βιοχημικός'
                ]
            },
            callback: {onInit: function () {}}
        });


        $.typeahead({
            input: '.js-typeahead-university',
            order: "asc",
            hint: true,
            source: {
                data: [
                    'American College of Thessaloniki','Μητροπολιτικό Κολλέγιο Θεσσαλονίκης','ΑΚΜΗ Θεσσαλονίκη','Εκπαιδευτήρια Βασιλειάδη','Εκπαιδευτήρια Φρυγανιώτη','New York College','Φροντιστήρια Υποδομή','Εκπαιδευτήρια Απόστολος Παύλος','Ευρωγνώση Τσιμισκή','Danza Fuerte','Danza Fuerte',
                    'Hellenic American College','The American College of Greece','Aegean College','Dei College','Αττικό Κολλέγιο'
                ]
            },
            callback: {onInit: function () {}}
        });

        $.typeahead({
            input: '.js-typeahead-skills',
            order: "asc",
            hint: true,
            source: {
                data: window.skills
            },
            callback: {onInit: function () {}}
        });





    });
</script>

@endsection