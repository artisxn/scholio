<template>
    <div class="cv">
        <div id="full" class="hidden">
            <form method="GET" action="/qqqsss" id="test">
        
                <div class="container" style="position: relative">
        
                    <div class="upper"></div>
        
                    <img src="{{ auth()->user()->info->avatar }}" class="avatar img-circle">
        
                    <div class="row1 xs-centered">
                        <span class="name">
                            <span>{{ auth()->user()->info->name() }}
                            </span>
                        </span>
        
        
                        <span class="social hidden-xs">
                            <a href="">
                                <span class="pull-right margin-right-15">
                                    <i class="gray fa fa-instagram"></i>
                                </span>
                            </a>
                            <a href="">
                                <span class="pull-right margin-right-25">
                                    <i class="gray fa fa-linkedin"></i>
                                </span>
                            </a>
                            <a href="">
                                <span class="pull-right margin-right-25">
                                    <i class="gray fa fa-twitter"></i>
                                </span>
                            </a>
                            <a href="">
                                <span class="pull-right margin-right-25">
                                    <i class="gray fa fa-facebook"></i>
                                </span>
                            </a>
                            {{--@if(auth()->user()->info->links())--}} {{--@foreach(auth()->user()->info->links() as $link)--}} {{--
                            <a href="{{$link->link}}" style="color: white;">--}} {{--
                                <span class="pull-right margin-right-25">
                                    <i class="fa fa-{{$link->name}}"></i>
                                </span>--}} {{--
                            </a>--}} {{--@endforeach--}} {{--@endif--}}
                        </span>
                    </div>
                    {{-- @if(!auth()->user()->works->isEmpty())
                    <span class="pull-left work xs-hidden">{{auth()->user()->works->first()->name}} </span>
                    <div class="work xs-centered xs-display">{{auth()->user()->works->first()->name}} </div>
                    @endif --}}
                    <span class="pull-right work hidden-xs mail margin-right-15">
                        <i class="fa fa-envelope"></i> {{ auth()->user()->info->email() }} </span>
        
        
                    {{-- ΝΑ ΤΟ ΒΑΛΛΟΥΜΕ ΣΤΗ ΒΑΣΗ ΔΕΔΟΜΕΝΩΝ ΣΤΟΝ ΠΙΝΑΚΑ teachers με field "title" --}} {{--
                    <div class="col-sm-6 basic-studies" style="margin: 110px 0 0 0; max-width: 350px">--}} {{--
                        <input type="text" label="Βασικές Σπουδές/Ειδικότητα:" name="basic-studies" class="demo-form ad-input " value="{{ auth()->user()->info->title }}"
                            id="">--}} {{--
                        <i class="icon-inp fa fa-graduation-cap"></i>--}} {{--
                        <img src="/new/img/teacher/graduationMono.png" style="height: 22px; margin-top: -92px" alt="">--}} {{--
                    </div>--}}
        
                    <div class="basic-title">
                        <span>{{ auth()->user()->info->title }} </span>
                    </div>
                    <div class="clearfix"></div>
        
        
        
        
        
                    <div class="xs-social xs-centered">
                        <span class="hidden-sm hidden-md hidden-lg mail-centered clearfix "> {{ auth()->user()->info->email() }} </span>
                        <div class="margin-top-20"></div>
                        <a href="">
                            <span class="margin-right-25 ">
                                <i class="fa fa-facebook"></i>
                            </span>
                        </a>
                        <a href="">
                            <span class="margin-right-25">
                                <i class="fa fa-twitter"></i>
                            </span>
                        </a>
                        <a href="">
                            <span class="margin-right-25">
                                <i class="fa fa-linkedin"></i>
                            </span>
                        </a>
                        <a href="">
                            <span class="">
                                <i class="fa fa-instagram"></i>
                            </span>
                        </a>
        
        
                    </div>
                    <hr class="xs-display">
        
        
                    <div class="up" style="overflow-x: hidden" id="sxetika">
                        <div class=" margin-bot-15 sc-t-dark-grey">
                            {{-- TEACHER STARTS HERE --}}
                            <div class="row">
                                {{--
                                <div class="up"></div>--}}
                                <div class="col-xs-12">
        
                                    <img class="up png-title" src="/new/img/teacher/info.png" alt="">
                                    <div class="title">@lang('teacher_profile.section.about')
                                        <i class="fa fa-pencil fa-input" data-toggle="modal" data-target="#about-modal"></i>
                                    </div>
                                    <div class="text">
                                        {{ auth()->user()->info->about }} {{-- Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
                                        beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur
                                        aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi
                                        nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci
                                        velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam
                                        quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
                                        suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit
                                        qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum
                                        fugiat quo voluptas nulla pariatur? --}}
                                    </div>
                                    <hr>
        
        
                                    <img class="up png-title" src="/new/img/teacher/desk.png" alt="">
                                    <div id="experience" class="title">@lang('teacher_profile.section.experience')
                                        <i class="fa fa-plus fa-input" data-toggle="modal"
                                            data-target="#work-modal-new"></i>
                                    </div>
                                    @if(!auth()->user()->works->isEmpty()) @foreach(auth()->user()->works as $work)
                                    <div class="t1">
                                        <i class="fa fa-pencil fa-input" data-toggle="modal" data-target="#work-modal-edit"></i> {{ $work->job->name }}
                                    </div>
                                    <div class="t2">
                                        {{ $work->company->name }}
                                    </div>
                                    <div class="t3">
                                        {{ \Carbon\Carbon::parse($work->from)->year }} - {{ \Carbon\Carbon::parse($work->until)->year }}
                                    </div>
                                    @endforeach @endif
                                    <hr>
        
        
                                    <div id="spoudes">
                                        <img class="up png-title" src="/new/img/teacher/graduate.png" alt="">
                                        <div class="title">@lang('teacher_profile.section.studies')
                                            <i class="fa fa-plus fa-input" data-toggle="modal"
                                                data-target="#studies-modal-new"></i>
                                        </div>
                                        @foreach(auth()->user()->certificates as $certificate)
                                        <div class="t1">
                                            <i class="fa fa-pencil fa-input" data-toggle="modal" data-target="#studies-modal-edit"></i> {{ $certificate->study->name }}
                                        </div>
                                        <div class="t2">
                                            {{ $certificate->university->name }}
                                        </div>
                                        <div class="t3">
                                            {{ \Carbon\Carbon::parse($certificate->from)->year }} - {{ \Carbon\Carbon::parse($certificate->until)->year }}
                                        </div>
                                        @endforeach
                                        <hr>
                                    </div>
        
        
                                    <div class="margin-bot-50" id="skills">
                                        <img class="up png-title" src="/new/img/teacher/skillsb.png" alt="">
                                        <div class="title ">@lang('teacher_profile.section.skills')
                                            <i class="fa fa-plus fa-input" data-toggle="modal"
                                                data-target="#skills-modal"></i>
                                        </div>
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
                                                <div id="bar{{$skill->id}}" class="skill-bar" style="width: {{auth()->user()->info->user->skills()->where('skill_id', $skill->id)->count() * 25}}px; max-width: 95%">
                                                </div>
        
                                            </span>
                                        </div>
        
                                        @endforeach
                                    </div>
        
        
        
                                </div>
        
                                {{--
                                <div class="col-lg-3 hidden-md hidden-xs">--}} {{--
                                    <div class="sidebar"></div>--}} {{--
                                </div>--}}
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
                            <button type="button" class="btn pull-right btn-close" data-dismiss="modal">
                                x
                            </button>
                            <img src="/new/img/logoNX-light.png" alt="scholio logo" class="pull-left modal-sc-logo"> {{--
                            <h3 class="pull-left panel-title">schol.io</h3>--}}
                        </div>
        
                    </div>
                    <div class="panel-body">
        
                        <form method="POST" action="{{ route('cv-about-post') }}" id="aboutForm">
                            {{ csrf_field() }}
                            <div class="section2-container ">
                                <div class="inner-section">
                                    <div class="section-text centered-text">
                                        <img class="modal-icon" src="/new/img/teacher/info.png" alt=""> </i>@lang('teacher_profile.section.about')</div>
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
        </div>
        <!-- /.modal -->
        
        <!-- ====== Work Modal New ======= -->
        <div id="work-modal-new" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="top: 100px;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form id="" name="form-work">
        
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
                                        <img class="modal-icon" src="/new/img/teacher/desk.png" alt=""> </i>@lang('teacher_profile.section.experience')</div>
                                    <div class="input-container">
        
                                        <div class="typeahead__container col-sm-8 polyfill-input-sc">
                                            <div class="typeahead__field typeahead__query">
                                                <input label="Ειδικότητα/Αντικείμενο Εργασίας" class="js-typeahead-work demo-form ad-input" name="work" type="text" placeholder=""
                                                    autocomplete="off">
                                                <i class="icon-inp fa fa-briefcase margin-top"></i>
                                            </div>
                                        </div>
        
                                        <div class="clearfix"></div>
        
                                        <div class="typeahead__container col-sm-8 polyfill-input-sc">
                                            <div class="typeahead__field typeahead__query">
                                                <input label="Εκπαιδευτικό Ίδρυμα/Εταιρία" class="js-typeahead-school demo-form ad-input" name="work-company" type="text"
                                                    placeholder="" autocomplete="off">
                                                <i class="icon-inp fa fa-university"></i>
                                            </div>
                                        </div>
        
                                        <div class="clearfix"></div>
                                        <div class="col-sm-8 polyfill-input-sc">
                                            <input type="text" label="Από" name="work-start" class="demo-form ad-input" id="datepickerWorkFrom" value="">
                                            <i class="icon-inp fa fa-calendar-o"></i>
                                            {{--
                                            <img src="/new/img/teacher/graduationMono.png" style="height: 22px; margin-top: -92px"
                                                alt="">--}}
                                        </div>
                                        <div class="clearfix polyfill-input-sc"></div>
                                        <div class="col-sm-8 ">
                                            <input type="text" label="Μέχρι" name="work-end" class="demo-form ad-input" id="datepickerWorkEnd" value="">
                                            <i class="icon-inp fa fa-calendar-o"></i>
                                            {{--
                                            <img src="/new/img/teacher/graduationMono.png" style="height: 22px; margin-top: -92px"
                                                alt="">--}}
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
        </div>
        <!-- /.modal -->
        
        <!-- ====== Work Modal Edit ======= -->
        <div id="work-modal-edit" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="top: 100px;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form id="" name="form-work">
        
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
                                        <img class="modal-icon" src="/new/img/teacher/desk.png" alt=""> </i>@lang('teacher_profile.section.experience')</div>
                                    <div class="input-container">
        
                                        <div class="typeahead__container col-sm-8 polyfill-input-sc">
                                            <div class="typeahead__field typeahead__query">
                                                <input label="Ειδικότητα/Αντικείμενο Εργασίας" class="js-typeahead-work demo-form ad-input" name="work" type="text" placeholder=""
                                                    autocomplete="off">
                                                <i class="icon-inp fa fa-briefcase margin-top"></i>
                                            </div>
                                        </div>
        
                                        <div class="clearfix"></div>
        
                                        <div class="typeahead__container col-sm-8 polyfill-input-sc">
                                            <div class="typeahead__field typeahead__query">
                                                <input label="Εκπαιδευτικό Ίδρυμα/Εταιρία" class="js-typeahead-school demo-form ad-input" name="work-company" type="text"
                                                    placeholder="" autocomplete="off">
                                                <i class="icon-inp fa fa-university"></i>
                                            </div>
                                        </div>
        
        
                                        <div class="clearfix"></div>
                                        <div class="col-sm-8 polyfill-input-sc">
                                            <input type="text" label="Από" name="work-start" class="demo-form ad-input" id="datepickerWorkFromEdit" value="">
                                            <i class="icon-inp fa fa-calendar-o"></i>
                                            {{--
                                            <img src="/new/img/teacher/graduationMono.png" style="height: 22px; margin-top: -92px"
                                                alt="">--}}
                                        </div>
                                        <div class="clearfix polyfill-input-sc"></div>
                                        <div class="col-sm-8 ">
                                            <input type="text" label="Μέχρι" name="work-end" class="demo-form ad-input" id="datepickerWorkEndEdit" value="">
                                            <i class="icon-inp fa fa-calendar-o"></i>
                                            {{--
                                            <img src="/new/img/teacher/graduationMono.png" style="height: 22px; margin-top: -92px"
                                                alt="">--}}
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
        </div>
        <!-- /.modal -->
        
        <!-- ====== Studies Modal  New======= -->
        <div id="studies-modal-new" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="top: 100px;">
            <div class="modal-dialog">
        
                <div class="modal-content">
                    <form id="" name="form-studies">
        
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
                                        <img class="modal-icon" src="/new/img/teacher/graduate.png" alt=""> </i>@lang('teacher_profile.section.studies')</div>
                                    <div class="input-container">
        
                                        <div class="typeahead__container col-sm-8 polyfill-input-sc">
                                            <div class="typeahead__field typeahead__query">
                                                <input label="Τίτλος/Επίπεδο Σπουδών" class="js-typeahead-studies demo-form ad-input" name="studies" type="text" placeholder=""
                                                    autocomplete="off">
                                                <i class="icon-inp fa fa-graduation-cap margin-top"></i>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="typeahead__container col-sm-8 polyfill-input-sc">
                                            <div class="typeahead__field typeahead__query">
                                                <input label="Εκπαιδευτικό Ίδρυμα/Εταιρία" class="js-typeahead-university demo-form ad-input" name="university" type="text"
                                                    placeholder="" autocomplete="off">
                                                <i class="icon-inp fa fa-university"></i>
                                            </div>
                                        </div>
        
        
                                        <div class="clearfix"></div>
                                        <div class="col-sm-8 polyfill-input-sc">
                                            <input type="text" label="Από" name="work-start" class="demo-form ad-input" id="datepickerStudiesFrom" value="">
                                            <i class="icon-inp fa fa-calendar-o"></i>
                                            {{--
                                            <img src="/new/img/teacher/graduationMono.png" style="height: 22px; margin-top: -92px"
                                                alt="">--}}
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-sm-8 polyfill-input-sc">
                                            <input type="text" label="Μέχρι" name="work-end" class="demo-form ad-input" id="datepickerStudiesEnd" value="">
                                            <i class="icon-inp fa fa-calendar-o"></i>
                                            {{--
                                            <img src="/new/img/teacher/graduationMono.png" style="height: 22px; margin-top: -92px"
                                                alt="">--}}
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
        </div>
        <!-- /.modal -->
        
        <!-- ====== Studies Modal  Edit======= -->
        <div id="studies-modal-edit" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="top: 100px;">
            <div class="modal-dialog">
        
                <div class="modal-content">
                    <form id="" name="form-studies">
        
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
                                        <img class="modal-icon" src="/new/img/teacher/graduate.png" alt=""> </i>@lang('teacher_profile.section.studies')</div>
                                    <div class="input-container">
        
                                        <div class="typeahead__container col-sm-8 polyfill-input-sc">
                                            <div class="typeahead__field typeahead__query">
                                                <input label="Τίτλος/Επίπεδο Σπουδών" class="js-typeahead-studies demo-form ad-input" name="studies" type="text" placeholder=""
                                                    autocomplete="off">
                                                <i class="icon-inp fa fa-graduation-cap margin-top"></i>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="typeahead__container col-sm-8 polyfill-input-sc">
                                            <div class="typeahead__field typeahead__query">
                                                <input label="Εκπαιδευτικό Ίδρυμα/Εταιρία" class="js-typeahead-university demo-form ad-input" name="university" type="text"
                                                    placeholder="" autocomplete="off">
                                                <i class="icon-inp fa fa-university"></i>
                                            </div>
                                        </div>
        
                                        <div class="clearfix"></div>
                                        <div class="col-sm-8 polyfill-input-sc">
                                            <input type="text" label="Από" name="work-start" class="demo-form ad-input" id="datepickerStudiesFromEdit" value="">
                                            <i class="icon-inp fa fa-calendar-o"></i>
                                            {{--
                                            <img src="/new/img/teacher/graduationMono.png" style="height: 22px; margin-top: -92px"
                                                alt="">--}}
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-sm-8 polyfill-input-sc">
                                            <input type="text" label="Μέχρι" name="work-end" class="demo-form ad-input" id="datepickerStudiesEndEdit" value="">
                                            <i class="icon-inp fa fa-calendar-o"></i>
                                            {{--
                                            <img src="/new/img/teacher/graduationMono.png" style="height: 22px; margin-top: -92px"
                                                alt="">--}}
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
        </div>
        <!-- /.modal -->
        
        <!-- ====== skills Modal  ======= -->
        <div id="skills-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="top: 100px;">
            <div class="modal-dialog">
        
                <div class="modal-content">
                    <form id="" name="form-studies">
        
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
                                                <input label="Δεξιότητες/Ικανότητες" class="js-typeahead-skills demo-form ad-input" name="studies" type="text" placeholder=""
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
                            <button type="button" onClick="" data-dismiss="modal" class="btn btn-info">Αποθήκευση</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.modal -->
    </div>
</template>

<script>
    export default{
        mounted(){
            console.log('OK')
        }
    }
</script>