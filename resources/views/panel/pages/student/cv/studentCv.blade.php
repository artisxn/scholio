@extends('panel.layouts.main')

@section('styles')
    <link href="/panel/assets/css/form.css" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title"><b>User Profile</b></h4>
                <p class="text-muted m-b-30 font-13">
                    Complete your profile .. ... .BLA BLA BLA
                </p>
                <div class="row">

                    <form class="form-horizontal m-t-20" method="POST" action="/panel/student/cv" accept-charset="UTF-8" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group" align="center">
                            <img src="{{substr(auth()->user()->info->avatar, 0, 4) == 'http' ? '' : '/images/schools/'}}{{ auth()->user()->info->avatar }}" height="100px">
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {{--<label class="col-md-2 control-label" for="avatar">Avatar</label>--}}
                                <div class="col-md-10">
                                    <input type="file" class="form-control" name="logo">
                                </div>
                            </div>

                            <div class="form-group">
                                {{--<label class="col-md-2 control-label"></label>--}}
                                <div class="col-md-10">
                                    <input type="text" class="form-control" value="{{ auth()->user()->info->fname }}" placeholder="Όνομα*" name="fname">
                                </div>
                            </div>

                            <div class="form-group">
                                {{--<label class="col-md-2 control-label"></label>--}}
                                <div class="col-md-10">
                                    <input type="text" class="form-control" value="{{ auth()->user()->info->lname }}" placeholder="Επώνυμο*" name="lname">
                                </div>
                            </div>

                            <div class="form-group">
                                {{--<label class="col-md-2 control-label" for="email">Email</label>--}}
                                <div class="col-md-10">
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Email*" value="{{ auth()->user()->email }}" readonly="">
                                </div>
                            </div>


                            <div class="form-group">
                                {{--<label class="col-md-2 control-label">Gender</label>--}}
                                <div class="col-md-10">
                                    <input type="text" class="form-control" value="{{ auth()->user()->info->gender }}" placeholder="Φύλο*" name="gender">
                                </div>
                            </div>

                            <div class="form-group">
                                {{--<label class="col-md-2 control-label"></label>--}}
                                <div class="col-md-10">
                                    <input type="text" class="form-control" value="{{ auth()->user()->info->dob }}" placeholder="Ημερομηνία Γέννησης*" name="dob">
                                </div>
                            </div>

                            <div class="form-group">
                                {{--<label class="col-md-2 control-label"></label>--}}
                                <div class="col-md-10">
                                    <input type="text" class="form-control" value="{{ auth()->user()->info->address }}" placeholder="Διεύθυνση" name="address">
                                </div>
                            </div>

                            <div class="form-group">
                                {{--<label class="col-md-2 control-label">Phone number</label>--}}
                                <div class="col-md-10">
                                    <input type="text" class="form-control" value="{{ auth()->user()->info->phone }}" placeholder="Τηλέφωνο" name="phone">
                                </div>
                            </div>

                            <div class="form-group">
                                {{--<label class="col-md-2 control-label"></label>--}}
                                <div class="col-md-10">
                                    <input type="text" class="form-control" value="{{ auth()->user()->info->father_name }}" placeholder="Ον/νυμο Πατέρα" name="father_name">
                                </div>
                            </div>

                            <div class="form-group">
                                {{--<label class="col-md-2 control-label"></label>--}}
                                <div class="col-md-10">
                                    <input type="text" class="form-control" value="{{ auth()->user()->info->mother_name }}" placeholder="Ον/νυμο Μητέρας" name="mother_name">
                                </div>
                            </div>

                            <div class="form-group">
                                {{--<label class="col-md-2 control-label"></label>--}}
                                <div class="col-md-10">
                                    <input type="text" class="form-control" value="{{ auth()->user()->info->father_job }}" placeholder="Επάγγελμα Πατέρα" name="father_job">
                                </div>
                            </div>

                            <div class="form-group">
                                {{--<label class="col-md-2 control-label"></label>--}}
                                <div class="col-md-10">
                                    <input type="text" class="form-control" value="{{ auth()->user()->info->mother_job }}" placeholder="Επάγγελμα Μητέρας" name="mother_job">
                                </div>
                            </div>

                        </div>



                        <div class="col-md-6">

                            <div class="form-group">
                                {{--<label class="col-md-2 control-label"></label>--}}
                                <div class="col-md-10">
                                    <input type="text" class="form-control" value="{{ auth()->user()->info->father_phone }}" placeholder="Τηλέφωνο Πατέρα" name="father_phone">
                                </div>
                            </div>

                            <div class="form-group">
                                {{--<label class="col-md-2 control-label"></label>--}}
                                <div class="col-md-10">
                                    <input type="text" class="form-control" value="{{ auth()->user()->info->mother_phone }}" placeholder="Τηλέφωνο Μητέρας" name="mother_phone">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-10 control-label">Ξένες Γλώσσες - Επίπεδο</label>
                                <div class="col-md-10">
                                    <textarea class="form-control" name="languages">{{ auth()->user()->info->languages }}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-10 control-label">Ποιές είναι οι σπουδές σου μέχρι σήμερα;</label>
                                <div class="col-md-10">
                                    <textarea class="form-control" name="studies">{{ auth()->user()->info->studies }}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-10 control-label">Διακρίσεις - Έπαινοι</label>
                                <div class="col-md-10">
                                    <textarea class="form-control" name="achievements">{{ auth()->user()->info->achievements }}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-10 control-label">Ιδιαίτερες Ικανότητες - Δεξιότητες</label>
                                <div class="col-md-10">
                                    <textarea class="form-control" name="skills">{{ auth()->user()->info->skills }}</textarea>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-12">
                            <label class="col-md-11 control-label">Γράψε μας εν συντομία γιατί θεωρείς πως είσαι κατάλληλος/κατάλληλη για αυτή την υποτροφία.</label>
                            <div class="col-md-11">
                                <textarea class="form-control" name="about">{{ auth()->user()->info->about }}</textarea>
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
                </div>
            </div>
        </div>
    </div>



@endsection
