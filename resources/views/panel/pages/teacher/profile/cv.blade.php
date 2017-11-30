@extends('panel.layouts.main')

@section('styles')
    <link rel="stylesheet" href="/new/css/cv.css" type="text/css"  >
    <link href="/new/css/teacher-profile.css" rel="stylesheet">
@endsection

@section('content')
<form method="GET" action="/qqqsss" id="test">

{{--  ΝΑ ΤΟ ΒΑΛΛΟΥΜΕ ΣΤΗ ΒΑΣΗ ΔΕΔΟΜΕΝΩΝ ΣΤΟΝ ΠΙΝΑΚΑ teachers με field "title"  --}}
<div>ΒΑΣΙΚΗ ΙΔΙΟΤΗΤΑ: <input type="text" name="title"></div>

    <div class="container">
            <img src="{{ auth()->user()->info->avatar }}" class="avatar img-circle" >

            <div class="row1 xs-centered">
                <span class="name">
                        <span>{{ auth()->user()->info->name() }} </span>
                </span>

                <span class="social hidden-xs">
                        {{-- <a href=""> <span class="pull-right "><i class="fa fa-instagram"></i></span> </a>
                        <a href=""> <span class="pull-right margin-right-25"><i class="fa fa-linkedin"></i></span> </a>
                        <a href=""> <span class="pull-right margin-right-25"><i class="fa fa-twitter"></i></span> </a>
                        <a href=""> <span class="pull-right margin-right-25"><i class="fa fa-facebook"></i></span> </a> --}}
                        {{--  @if(auth()->user()->info->links())
                            @foreach(auth()->user()->info->links() as $link)
                            <a href="{{$link->link}}" style="color: white;">
                                <span class="pull-right margin-right-25"><i class="fa fa-{{$link->name}}"></i></span>
                            </a>
                            @endforeach
                        @endif  --}}
                </span>
            </div>
            {{--  @if(!auth()->user()->works->isEmpty())
                <span class="pull-left work xs-hidden">{{auth()->user()->works->first()->name}} </span>
                <div class="work xs-centered xs-display">{{auth()->user()->works->first()->name}} </div>
            @endif  --}}
                <span class="pull-right work hidden-xs mail"> <i class="fa fa-envelope"></i> {{ auth()->user()->info->email() }} </span>




                <div class="xs-social xs-centered">
                    <span class="hidden-sm hidden-md hidden-lg mail-centered clearfix"> {{ auth()->user()->info->email() }} </span>
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
                        <div class="up"></div>
                        <div class="col-xs-12">

                            <img class="up png-title" src="/new/img/teacher/info.png" alt="">
                            <div class="title">@lang('teacher_profile.section.about') <i class="fa fa-pencil"></i></div>
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
                            <div id="experience" class="title">@lang('teacher_profile.section.experience') <i class="fa fa-plus"></i></div>
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
@endsection

@section('scripts')

@endsection