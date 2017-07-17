@extends('panel.layouts.main')

@section('styles')
    <link href="/panel/assets/css/form.css" rel="stylesheet" type="text/css" />
@endsection


@section('scriptsBefore')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.2/tinymce.min.js"></script>

    <script>
        tinymce.init({
            language_url : '/el.js',

            entity_encoding : "raw",
            selector: 'textarea',
            height: 200,
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


    </script>
@endsection




@section('content')

    <div class="row">
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
                            <img src="{{substr($logo, 0, 4) == 'http' ? '' : '/images/schools/'}}{{ $logo }}" height="100px">
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="avatar">@lang('school_profile.avatar')</label>
                                <div class="col-md-10">
                                    <input type="file" class="form-control" name="logo">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label">@lang('school_profile.type')</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="type">
                                        @foreach($schoolTypes as $schoolType)
                                            <option {{ $schoolType->id == $school->type_id ? 'selected' : ''}} value="{{ $schoolType->id }}"> {{ $schoolType->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label">@lang('school_profile.name')</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" value="{{ $school->name() }}" placeholder="Fullname" name="name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label" for="email">@lang('school_profile.email')</label>
                                <div class="col-md-10">
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="{{ auth()->user()->email }}" readonly="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label">@lang('school_profile.password')</label>
                                <div class="col-md-10">
                                    <input type="password" class="form-control" disabled="" value="Password">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-2 control-label">@lang('school_profile.website')</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" value="{{ $school->website }}" placeholder="Website" name="website">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label">@lang('school_profile.city')</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" value="{{ $school->city }}" placeholder="City" name="city">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label">@lang('school_profile.address')</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" value="{{ $school->address }}" placeholder="Address" name="address">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label">@lang('school_profile.phone')</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" value="{{ $school->phone }}" placeholder="Phone number" name="phone">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label">@lang('school_profile.manager')</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" value="{{ auth()->user()->name }}" placeholder="Contact manager name" name="user_name">
                                </div>
                            </div>

                        </div>



                        <div class="form-group">

                            <div class=" col-xs-12  col-lg-8 col-lg-offset-2">
                                <p>{{ $school->name() }}: @lang('school_profile.about')</p>
                                <textarea value="" name="about">{{ $school->about }}</textarea>
                            </div>
                        </div>

                        <div class="form-group text-center m-t-40">
                            <div class="col-xs-3 col-sm-2 centered-text">
                                <button class="btn btn-pink btn-block" type="submit">
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
