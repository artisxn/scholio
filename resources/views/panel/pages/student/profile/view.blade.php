@extends('panel.layouts.main')

@section('styles')
    <link href="/panel/assets/css/form.css" rel="stylesheet">
@endsection

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title"><b>User Profile</b></h4>

                <div class="row">
                    <form class="form-horizontal m-t-20" method="POST" action="/panel/school/profile/" accept-charset="UTF-8" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group" align="center">
                            <img src="{{ auth()->user()->info->avatar }}" height="100px">
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="avatar">Avatar</label>
                                <div class="col-md-10">
                                    <input type="file" class="form-control" name="logo">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label">Name</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" value="{{ Auth::user()->name }}" placeholder="Fullname" name="name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label" for="email">Email</label>
                                <div class="col-md-10">
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="{{ Auth::user()->email }}" readonly="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label">Password</label>
                                <div class="col-md-10">
                                    <input type="password" class="form-control" disabled="" value="Password">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label">Gender</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" value="{{ Auth::user()->gender }}" placeholder="Gender" name="gender">
                                </div>
                            </div>

                        </div>

                        <div class="col-md-6">


                            <div class="form-group">
                                <label class="col-md-2 control-label">Date of birth</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" value="{{ Auth::user()->dob }}" placeholder="Date of birth" name="dob">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label">City</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" value="{{ Auth::user()->city }}" placeholder="City" name="city">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label">Address</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" value="{{ Auth::user()->address }}" placeholder="Address" name="address">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label">Phone number</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" value="{{ Auth::user()->mobile_phone }}" placeholder="Phone number" name="mobile_phone">
                                </div>
                            </div>


                        </div>

                        <div class="form-group text-center m-t-40">
                            <div class="col-xs-3 col-sm-2 centered-text">
                                <button class="btn btn-pink btn-block" type="submit">
                                    Update
                                </button>
                            </div>
                        </div>
                    </form>

                    <form action="{{ route('students-delete') }}" method="POST">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger">ΔΙΑΓΡΑΦΗ ΛΟΓΑΡΙΑΣΜΟΥ</button>
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
