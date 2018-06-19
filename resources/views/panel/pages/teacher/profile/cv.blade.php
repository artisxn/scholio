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
        .photo-box{ height: 285px;
            background-size: cover;
            background-position: center;
            background-image: linear-gradient( rgba(187, 218, 222, 0.2), rgba(0, 67, 79, 0.8)), url("/new/img/teacher/back1.jpg");

        }



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



        .tp{margin-left: 30px}
        .tp2::first-letter{font-size: 120%}


        @media(max-width: 600px){
            .t1{text-indent:-4px;}
            .tp{margin-left: 0px}

        }

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

        .btn-primary, .btn-primary:active, .btn-primary:focus, .btn-primary:visited{border: none; background-color: #508bb0
        }
        .btn-primary:hover{background-color: #416b8a
        }


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

            <div class="container" style="position: relative">

                <div class="photo-box"></div>

                <img src="{{ auth()->user()->info->avatar }}" class="avatar img-circle" >

                <div class="row1 xs-centered">
                <span class="name">
                        <span>{{ auth()->user()->info->name() }} </span>
                </span>

                </div>
        
                <span class="pull-right work hidden-xs mail margin-right-15"> <i class="fa fa-envelope"></i> {{ auth()->user()->info->email() }} </span>

                <div class="basic-title">
                    <span>{{ auth()->user()->info->title }} </span>
                </div>
                <div class="clearfix"></div>



                <hr class="xs-display">


                <div class="up" style="overflow-x: hidden" id="sxetika">
                    <div class=" margin-bot-15 sc-t-dark-grey">
                        {{-- TEACHER STARTS HERE --}}
                        <div class="row">
                            <div class="col-xs-12">

                                <img class="up png-title" src="/new/img/teacher/info.png" alt="">
                                <div class="title">@lang('teacher_profile.section.about') <i class="fa fa-pencil fa-input"  data-toggle="modal" data-target="#about-modal" ></i></div>
                                <div class="text">
                                    {{ auth()->user()->info->about }}
                                </div>
                                <hr>


                                <img class="up png-title" src="/new/img/teacher/desk.png" alt="">
                                <div id="experience" class="title">@lang('teacher_profile.section.experience') <i class="fa fa-plus fa-input" data-toggle="modal" data-target="#work-modal-new"></i></div>
                                @if(!auth()->user()->works->isEmpty())
                                    @foreach(auth()->user()->works as $work)
                                        @include('panel.pages.teacher.profile.modal-edit.work' , ['work' => $work])
                                        <div class="t1">
                                            <i class="fa fa-pencil fa-input" data-toggle="modal" data-target="#work-modal-edit-{{ $work->id }}"></i> {{ $work->job->name }}
                                        </div>
                                        <div class="t2 tp tp2">
                                            {{ $work->company->name }}
                                        </div>
                                        <div class="t3 tp">
                                             @if(isset($work->from))
                                                {{ \Carbon\Carbon::parse(\Carbon\Carbon::createFromFormat('m/Y', $work->from)->toDateTimeString())->year }}
                                             @endif
                                             -
                                             @if(isset($work->until))
                                                {{ \Carbon\Carbon::parse(\Carbon\Carbon::createFromFormat('m/Y', $work->until)->toDateTimeString())->year }}
                                             @endif
                                        </div>
                                    @endforeach
                                @endif
                                <hr>


                                <div id="spoudes">
                                    <img class="up png-title" src="/new/img/teacher/graduate.png" alt="">
                                    <div class="title">@lang('teacher_profile.section.studies') <i class="fa fa-plus fa-input" data-toggle="modal" data-target="#studies-modal-new"></i></div>
                                    @foreach(auth()->user()->certificates as $certificate)
                                     @include('panel.pages.teacher.profile.modal-edit.study', ['certificate' => $certificate])
                                        <div class="t1">
                                            <i class="fa fa-pencil fa-input" data-toggle="modal" data-target="#studies-modal-edit-{{ $certificate->id }}"></i> {{ $certificate->study->name  }}
                                        </div>
                                        <div class="t2 tp tp2">
                                            {{ $certificate->university->name  }}
                                        </div>
                                        <div class="t3 tp">
                                            @if(isset($certificate->from))
                                                {{ \Carbon\Carbon::parse(\Carbon\Carbon::createFromFormat('m/Y', $certificate->from)->toDateTimeString())->year }}
                                            @endif
                                            -
                                            @if(isset($certificate->until))
                                                {{ \Carbon\Carbon::parse(\Carbon\Carbon::createFromFormat('m/Y', $certificate->until)->toDateTimeString())->year }}
                                            @endif
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
                                        <i class="fa fa-trash fa-input margin-right-15" onClick="document.getElementById('delSkill-{{ $skill->id }}').submit()"></i> {{ $skill->name }} :
                                        <form id="delSkill-{{ $skill->id }}" action="{{ route('teacher-cv-skills-delete') }}" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="skill" value="{{ $skill->id }}">
                                        </form>
                                    </span>

                                    <span class="thumps-up">
                                        <i id="bt_like{{$skill->id}}" onclick="like({{ auth()->user()->info->user->id }}, {{$skill->id}})" class="thumps fa fa-thumbs-up"></i>
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

                        </div>

                    </div>
                </div>
            </div>

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
                    </div>

                </div>
                <div class="panel-body">

                <form method="POST" action="{{ route('teacher-cv-about-post') }}" id="aboutForm">
                {{ csrf_field() }}
                    <div class="section2-container ">
                            <div class="inner-section">
                                <div class="section-text centered-text">   <img class="modal-icon" src="/new/img/teacher/info.png" alt=""> </i>@lang('teacher_profile.section.about')</div>
                                <div class="input-container">
                                    <div class="info-text"> </div>
                                    <textarea class="notes" placeholder=" @lang('teacher_profile.section.aboutPlaceholder')" name="about">{{ auth()->user()->info->about }}</textarea>
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
                <form id="form-experience" action="{{ route('teacher-cv-experience-post') }}" method="POST" name="form-work">
                     {{ csrf_field() }}
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
                                                <input label="@lang('teacher_profile.section.experiencePlaceholder')" class="js-typeahead-work demo-form ad-input" name="job"
                                                       type="text" placeholder="" autocomplete="off">
                                                <i class="icon-inp fa fa-briefcase margin-top"></i>
                                            </div>
                                        </div>

                                    <div class="clearfix"></div>

                                    <div class="typeahead__container col-sm-8 polyfill-input-sc">
                                            <div class="typeahead__field typeahead__query">
                                                <input label="@lang('teacher_profile.section.experienceInstitute')" class="js-typeahead-school demo-form ad-input" name="company"
                                                       type="text" placeholder="" autocomplete="off">
                                                <i class="icon-inp fa fa-university"></i>
                                            </div>
                                        </div>

                                        <div class="clearfix"></div>
                                        <div class="col-sm-8 polyfill-input-sc">
                                            <input type="text" label="@lang('teacher_profile.since')" name="start" class="demo-form ad-input"  id="datepickerWorkFrom" value="">
                                            <i class="icon-inp fa fa-calendar-o"></i>
                                            {{--<img src="/new/img/teacher/graduationMono.png" style="height: 22px; margin-top: -92px" alt="">--}}
                                        </div>
                                        <div class="clearfix polyfill-input-sc"></div>
                                        <div class="col-sm-8 ">
                                            <input type="text" label="@lang('teacher_profile.until')" name="end" class="demo-form ad-input" id="datepickerWorkEnd"  value="">
                                            <i class="icon-inp fa fa-calendar-o"></i>
                                            {{--<img src="/new/img/teacher/graduationMono.png" style="height: 22px; margin-top: -92px" alt="">--}}
                                        </div>

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">@lang('profile.modal.abort')</button>
                        <button type="button" onClick="document.getElementById('form-experience').submit()" class="btn btn-info">@lang('teacher_profile.save')</button>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- /.modal -->

    <!-- ====== Studies Modal  New======= -->
    <div id="studies-modal-new" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="top: 100px;">
        <div class="modal-dialog">

                <div class="modal-content">
                    <form id="form-studies" action="{{ route('teacher-cv-certificate-post') }}" method="POST" name="form-studies">
                        {{ csrf_field() }}
                        <div class="panel " style="background-color: #324c5a; height:90px; border-bottom-right-radius: 0; border-bottom-left-radius: 0; padding: 10px">
                            <div class="panel-heading" style=" color: #fff">
                                <button type="button" class="btn pull-right btn-close" data-dismiss="modal" >
                                    x
                                </button>
                                <img src="/new/img/logoNX-light.png" alt="scholio logo" class="pull-left modal-sc-logo">
                            </div>

                        </div>
                        <div class="panel-body">

                            <div class="section2-container ">
                                <div class="inner-section" style="">
                                    <div class="section-text centered-text">   <img class="modal-icon" src="/new/img/teacher/graduate.png" alt=""> </i>@lang('teacher_profile.section.studies')</div>
                                    <div class="input-container">

                                            <div class="typeahead__container col-sm-8 polyfill-input-sc">
                                                <div class="typeahead__field typeahead__query">
                                                    <input label="@lang('teacher_profile.section.studiesTitle')"
                                                           class="js-typeahead-studies demo-form ad-input" name="degree"
                                                           type="text" placeholder="" autocomplete="off">
                                                    <i class="icon-inp fa fa-graduation-cap margin-top"></i>
                                                </div>
                                            </div>
                                        <div class="clearfix"></div>
                                            <div class="typeahead__container col-sm-8 polyfill-input-sc">
                                                <div class="typeahead__field typeahead__query">
                                                    <input label="@lang('teacher_profile.section.studiesInstitute')"
                                                           class="js-typeahead-university demo-form ad-input" name="university"
                                                           type="text" placeholder="" autocomplete="off">
                                                    <i class="icon-inp fa fa-university"></i>
                                                </div>
                                            </div>


                                        <div class="clearfix"></div>
                                        <div class="col-sm-8 polyfill-input-sc">
                                            <input type="text" label="@lang('teacher_profile.since')" name="start" class="demo-form ad-input"  id="datepickerStudiesFrom" value="">
                                            <i class="icon-inp fa fa-calendar-o"></i>
                                            {{--<img src="/new/img/teacher/graduationMono.png" style="height: 22px; margin-top: -92px" alt="">--}}
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-sm-8 polyfill-input-sc" >
                                            <input type="text" label="@lang('teacher_profile.until')" name="end" class="demo-form ad-input" id="datepickerStudiesEnd"  value="">
                                            <i class="icon-inp fa fa-calendar-o"></i>
                                            {{--<img src="/new/img/teacher/graduationMono.png" style="height: 22px; margin-top: -92px" alt="">--}}
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">@lang('profile.modal.abort')</button>
                            <button type="button" onClick="document.getElementById('form-studies').submit()" data-dismiss="modal" class="btn btn-info">@lang('teacher_profile.save')</button>
                        </div>
                    </form>
                </div>
        </div>
    </div><!-- /.modal -->

    <!-- ====== skills Modal  ======= -->
    <div id="skills-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="top: 100px;">
        <div class="modal-dialog">
    
            <div class="modal-content">
                <form id="form-skills" method="POST" action="{{ route('teacher-cv-skills') }}" name="form-studies">
                    {{ csrf_field()}}
                    <div class="panel " style="background-color: #324c5a; height:90px; border-bottom-right-radius: 0; border-bottom-left-radius: 0; padding: 10px">
                        <div class="panel-heading" style=" color: #fff">
                            <button type="button" class="btn pull-right btn-close" data-dismiss="modal">
                                x
                            </button>
                            <img src="/new/img/logoNX-light.png" alt="scholio logo" class="pull-left modal-sc-logo"> {{--
                            <h3 class="pull-left panel-title">schol.io</h3>--}}
                        </div>
    
                    </div>
                    <div class="panel-body">
    
                        <div class="section2-container ">
                            <div class="inner-section" style="">
                                <div class="section-text centered-text">
                                    <img class="modal-icon" src="/new/img/teacher/skillsb.png" alt=""> </i>@lang('teacher_profile.section.skills')</div>
                                <div class="input-container">
    
                                    <div class="typeahead__container col-sm-8 polyfill-input-sc">
                                        <div class="typeahead__field typeahead__query">
                                            <input label="@lang('teacher_profile.section.skillsExpertise')" class="js-typeahead-skills demo-form ad-input" name="skill" type="text" placeholder=""
                                                autocomplete="off">
                                            <i class="icon-inp fa fa-list margin-top"></i>
                                        </div>
                                    </div>
    
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">@lang('profile.modal.abort')</button>
                        <button type="button" onClick="document.getElementById('form-skills').submit()" class="btn btn-info">@lang('teacher_profile.save')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.modal -->

@endsection

@section('scriptsBefore')
<script>
    window.sk = <?php echo $skills ?>;
    window.cer = <?php echo $cert ?>;
    window.stud = <?php echo $study ?>;
</script>

        <!-- Polymer Float Input Form js -->
    <script src="/new/js/jquery.polymer-form.min.js"></script>
    <script src="/panel/assets/js/cv.js"></script>

    <!-- jQuery datePicker -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="/panel/assets/js/datepicker-el.js"></script>


    <!-- TypeAhead -->
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>--}}
    <script src="/panel/assets/js/jquery.typeahead.min.js"></script>

<script>
    

    $(document).ready(function(){


        var temp = JSON.stringify(window.sk)
                .replace(/ά/g,"α")
                .replace(/έ/g,"ε")
                .replace(/ή/g,"η")
                .replace(/ί/g,"ι")
                .replace(/ό/g,"ο")
                .replace(/ύ/g,"υ")
                .replace(/ώ/g,"ω")
        var skills= JSON.parse(temp);
        var uniq = skills.filter(function(obj) { return window.sk.indexOf(obj) == -1; });
        window.sk= window.sk.concat(uniq);

        temp = JSON.stringify(window.cer)
                .replace(/ά/g,"α")
                .replace(/έ/g,"ε")
                .replace(/ή/g,"η")
                .replace(/ί/g,"ι")
                .replace(/ό/g,"ο")
                .replace(/ύ/g,"υ")
                .replace(/ώ/g,"ω")
        var cert= JSON.parse(temp);
        uniq = cert.filter(function(obj) { return window.cer.indexOf(obj) == -1; });
        window.cer= window.cer.concat(uniq);

        temp = JSON.stringify(window.stud)
                .replace(/ά/g,"α")
                .replace(/έ/g,"ε")
                .replace(/ή/g,"η")
                .replace(/ί/g,"ι")
                .replace(/ό/g,"ο")
                .replace(/ύ/g,"υ")
                .replace(/ώ/g,"ω")
        var studies= JSON.parse(temp);
        uniq = studies.filter(function(obj) { return window.stud.indexOf(obj) == -1; });
        window.stud= window.stud.concat(uniq);


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
                data: window.stud
            },
            callback: {onInit: function () {}}
        });

        $.typeahead({
            input: '.js-typeahead-school',
            order: "asc",
            hint: true,
            source: {
                data: window.cer
            },
            callback: {onInit: function () {}}
        });

        $.typeahead({
            input: '.js-typeahead-studies',
            order: "asc",
            hint: true,
            source: {
                data: window.stud
            },
            callback: {onInit: function () {}}
        });


        $.typeahead({
            input: '.js-typeahead-university',
            order: "asc",
            hint: true,
            source: {
                data: window.cer
            },
            callback: {onInit: function () {}}
        });

        $.typeahead({
            input: '.js-typeahead-skills',
            order: "asc",
            hint: true,
            source: {
                data: window.sk
            },
            callback: {onInit: function () {}}
        });
    });
</script>

<script>
    $(function () {
            $("#datepickerWorkFromEdit-{{ $work->id }}").datepicker(
                {
                    dateFormat: "mm/yy",
                    changeMonth: true,
                    changeYear: true,
                    showButtonPanel: true,
                    yearRange: "1980:",
                    onClose: function (dateText, inst) {


                        function isDonePressed() {
                            return ($('#ui-datepicker-div').html().indexOf('ui-datepicker-close ui-state-default ui-priority-primary ui-corner-all ui-state-hover') > -1);
                        }

                        if (isDonePressed()) {
                            datestr = $(this).val()
                            var year = datestr.substring(datestr.length - 4, datestr.length);
                            var month = datestr.substring(0, 2);
                            // var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
                            // var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                            $(this).datepicker('setDate', new Date(year, month -1, 1)).trigger('change');

                            $('.date-picker').focusout()//Added to remove focus from datepicker input box on selecting date
                        }
                    },
                    beforeShow: function (input, inst) {

                        inst.dpDiv.addClass('month_year_datepicker')
                        
                        if ((datestr = $(this).val()).length > 0) {
                            year = datestr.substring(datestr.length - 4, datestr.length);
                            month = datestr.substring(0, 2);
                            $(this).datepicker('option', 'defaultDate', new Date(year, month - 1, 1));
                            $(this).datepicker('setDate', new Date(year, month - 1, 1));
                            $(".ui-datepicker-calendar").hide();
                        }
                    }
                });
        });

        $(function () {
                $("#datepickerWorkEndEdit-{{$work->id}}").datepicker(
                    {
                        dateFormat: "mm/yy",
                        changeMonth: true,
                        changeYear: true,
                        showButtonPanel: true,
                        yearRange: "1980:",
                        onClose: function (dateText, inst) {


                            function isDonePressed() {
                                return ($('#ui-datepicker-div').html().indexOf('ui-datepicker-close ui-state-default ui-priority-primary ui-corner-all ui-state-hover') > -1);
                            }

                            if (isDonePressed()) {
                                var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
                                var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                                $(this).datepicker('setDate', new Date(year, month, 1)).trigger('change');

                                $('.date-picker').focusout()//Added to remove focus from datepicker input box on selecting date
                            }
                        },
                        beforeShow: function (input, inst) {

                            inst.dpDiv.addClass('month_year_datepicker')

                            if ((datestr = $(this).val()).length > 0) {
                                year = datestr.substring(datestr.length - 4, datestr.length);
                                month = datestr.substring(0, 2);
                                $(this).datepicker('option', 'defaultDate', new Date(year, month - 1, 1));
                                $(this).datepicker('setDate', new Date(year, month - 1, 1));
                                $(".ui-datepicker-calendar").hide();
                            }
                        }
                    })
            });
</script>

@endsection