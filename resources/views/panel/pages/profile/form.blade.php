@extends('panel.layouts.main')


@section('styles')
    <!-- Polymer Float Form CSS -->
    <link rel="stylesheet" href="/new/css/jquery.polymer-form.min.css" >

    <link href="/panel/assets/css/form.css" rel="stylesheet" type="text/css" />
    <style>
        .full-content{display: none;}
        input[type=text],input[type=text]:focus{border-radius:0; border: none; border-bottom: 1px solid #ccc; }
        .school-logo{height: 100px; border-radius: 10px; box-shadow: 0 0 10px 2px #bbb;}
        .btn-photo{padding: 7px 0!important; height: 34px!important; width: 190px;}
        .btn-label{font-size: 110%; font-weight: 300;}
        .btn-submit{height: 36px!important;}

        /*=================*/
        .up20{height: 2px;}
        .up30{margin-top: 30px;}
        .input-container{position: relative; padding: 0 0 0 20px;}
        .demo-form{ margin: 0!important; font-weight: 300!important; border: none!important;}
        .polymer-form label {color: #008DA5!important; font-size:110%!important; font-weight: 300!important; display: block!important; padding-bottom: -40px!important; margin-left: 11px; }
        .ad-input{font-size: 100%!important; padding-left: 25px!important;}
        .icon-inp{position: absolute; top: 8px;  color: #008DA5}
    </style>

@endsection


@section('scriptsBefore')
     <!-- Polymer Float Input Form js -->
     <script src="/new/js/jquery.polymer-form.min.js"></script>

    <!-- tinyMCE js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.2/tinymce.min.js"></script>

    <script>
        tinymce.init({
            language_url : '/el.js',

            entity_encoding : "raw",
            selector: 'textarea',
            height: 490,
            menubar: false,

            plugins: [
                'autolink lists link  charmap  preview anchor',
                'visualblocks  fullscreen',
                'insertdatetime media table paste '
            ],
            toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link table',

            setup: function (ed) {
                ed.on("KeyDown", function (ed, evt) {
                    chars_without_html = $.trim(tinyMCE.activeEditor.getContent().replace(/(<([^>]+)>)/ig, "")).length;
                    var key = ed.keyCode;
                    console.log(ed.keyCode)

                    var remaining = max_chars - chars_without_html;

                    $('#chars_left').html(remaining);

                    if (remaining <= 0  && (key != 8 && key != 46)) {
                        ed.stopPropagation();
                        ed.preventDefault();
                        $('#chars_left').html('ΟΧΙ ΑΛΛΟ!')
                    }
                });
            }

        });


        $(document).ready(function() {
            $(".demo-form").polymerForm({
                bar_height: "1px",
                active_color: '#008DA5',
                label_color: '#008DA5',
                base_color: '#bbb',
                origin: 'left',
                margin_top: '25px',
                margin_bottom: '20px'

            });

            $(".full-content").hide().fadeIn(100);
        });


    </script>
@endsection



@section('content')

    <div class="row full-content">
        <div class="col-sm-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title"><b>@lang('school_profile.title')</b></h4>
                <p class="text-muted m-b-30 font-13">
                    @lang('school_profile.subtitle')
                </p>
                <div class="row">

                    <form class="form-horizontal m-t-20" method="POST" action="/panel/school/profile/{{ $school->id }}" accept-charset="UTF-8" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group" align="center">
                            <img src="{{substr($logo, 0, 4) == 'http' ? '' : '/images/schools/'}}{{ $logo }}" class="school-logo">
                            <div class="clearfix up30"></div>
                            <div class="btn btn-primary text-centered btn-photo">
                                <label for="avatar" class="btn-label"> <i class="fa fa-upload mar-right-10"></i>@lang('school_profile.avatar')</label>
                                <input type="file" id="avatar" class="form-control" name="logo" style="visibility: hidden;">
                            </div>
                        </div>




                        <div class="col-md-6">



                            {{--<div class="form-group">--}}
                                {{--<label class="col-md-2 control-label">@lang('school_profile.type')</label>--}}
                                {{--<div class="col-md-10">--}}
                                    {{--<select class="form-control" name="type">--}}
                                        {{--@foreach($schoolTypes as $schoolType)--}}
                                            {{--<option {{ $schoolType->id == $school->type_id ? 'selected' : ''}} value="{{ $schoolType->id }}"> {{ $schoolType->name }}</option>--}}
                                        {{--@endforeach--}}
                                    {{--</select>--}}
                                {{--</div>--}}
                            {{--</div>--}}


                            {{--<div class="form-group">--}}
                                {{--<label class="col-md-2 control-label" for="email">@lang('school_profile.email')</label>--}}
                                {{--<div class="col-md-10">--}}
                                    {{--<input type="email" id="email" name="email" class="form-control" placeholder="Email" value="{{ auth()->user()->email }}" readonly="">--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--<label class="col-md-2 control-label">@lang('school_profile.password')</label>--}}
                                {{--<div class="col-md-10">--}}
                                    {{--<input type="password" class="form-control" disabled="" value="Password">--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--<label class="col-md-2 control-label">@lang('school_profile.name')</label>--}}
                                {{--<div class="col-md-10">--}}
                                    {{--<input type="text" class="form-control" value="{{ $school->name() }}" placeholder="Fullname" name="name">--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--<label class="col-md-2 control-label">@lang('school_profile.website')</label>--}}
                                {{--<div class="col-md-10">--}}
                                    {{--<input type="text" class="form-control" value="{{ $school->website }}" placeholder="Website" name="website">--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--<label class="col-md-2 control-label">@lang('school_profile.city')</label>--}}
                                {{--<div class="col-md-10">--}}
                                    {{--<input type="text" class="form-control" value="{{ $school->city }}" placeholder="City" name="city">--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--<label class="col-md-2 control-label">@lang('school_profile.address')</label>--}}
                                {{--<div class="col-md-10">--}}
                                    {{--<input type="text" class="form-control" value="{{ $school->address }}" placeholder="Address" name="address">--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--<label class="col-md-2 control-label">@lang('school_profile.phone')</label>--}}
                                {{--<div class="col-md-10">--}}
                                    {{--<input type="text" class="form-control" value="{{ $school->phone }}" placeholder="Phone number" name="phone">--}}
                                {{--</div>--}}
                            {{--</div>--}}



                            <!-- change foreach -->
                            <div class="input-container">
                                @foreach($schoolTypes as $schoolType)
                                  @if($schoolType->id == $school->type_id )
                                    <input type="text" label="@lang('school_profile.type')" name="type" class="demo-form ad-input" value="{{ $schoolType->name }}" disabled>
                                    @endif
                                @endforeach

                                <i class="icon-inp fa fa-university"></i>
                            </div>
                            <div class="up20" style=""></div>

                            <div class="input-container">
                                <input type="text" label="@lang('school_profile.email')" name="email" class="demo-form ad-input" value="{{ auth()->user()->email }}" disabled>
                                <i class="icon-inp fa fa-envelope"></i>
                            </div>
                            <div class="up20" style=""></div>


                            <div class="input-container">
                                <input type="text" label="@lang('school_profile.name')" name="name" class="demo-form ad-input" value="{{ $school->name() }}">
                                <i class="icon-inp fa fa-university"></i>
                            </div>
                            <div class="up20" style=""></div>

                            <div class=" input-container">
                                <input type="text" label="@lang('school_profile.website')" name="website" class="demo-form ad-input" value="{{ $school->website }}" >
                                <i class="icon-inp fa fa-globe"></i>
                            </div>
                            <div class="up20" style=""></div>

                            <div class=" input-container">
                                <input type="text" label="@lang('school_profile.city')" name="city" class="demo-form ad-input" value="{{ $school->city }}">
                                <i class="icon-inp fa fa-map-marker"></i>
                            </div>
                            <div class="up20" style=""></div>

                            <div class=" input-container">
                                <input type="text" label="@lang('school_profile.address')" name="address" class="demo-form ad-input" value="{{ $school->address }}">
                                <i class="icon-inp fa fa-home"></i>
                            </div>
                            <div class="up20" style=""></div>

                            <div class=" input-container">
                                <input type="text" label="@lang('school_profile.phone')" name="phone" class="demo-form ad-input" value="{{ $school->phone }}">
                                <i class="icon-inp fa fa-phone"></i>
                            </div>
                            <div class="up20" style=""></div>

                            <div class=" input-container">
                                <input type="text" label="@lang('school_profile.manager')" name="user_name" class="demo-form ad-input" value="{{ auth()->user()->name }}">
                                <i class="icon-inp fa fa-user"></i>
                            </div>

                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                    <p>{{ $school->name() }}: @lang('school_profile.about')</p>
                                    <textarea value="" name="about">{{ $school->about }}</textarea>
                                    <!-- Height change on scrpit @ tinymce.init-->
                            </div>
                        </div>



                        <div class="clearfix"></div>
                        <div class="text-centered">
                            <div class="col-xs-6 col-sm-3 centered-text">
                                <button class="btn btn-primary btn-submit" type="submit">
                                    @lang('school_profile.button')
                                </button>
                            </div>
                        </div>

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

    @if(Session::has('updated_profile'))
        <div class="row">
            <p class="alert alert-success col-lg-6"  style="margin: 0 10px">{{session('updated_profile')}}</p>
        </div>
    @endif

@endsection


@section('script')




@endsection
