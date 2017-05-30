@extends('panel.layouts.main')

@section('styles')
    <link href="/panel/assets/css/form.css" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title"><b>Edit Scholarship</b></h4>
                <p class="text-muted m-b-30 font-13">
                    Edit
                </p>
                    <form class="form-horizontal m-t-20" method="POST" action="/scholarship/{{$scholarship->id}}/update" accept-charset="UTF-8" enctype="multipart/form-data">
                    <div class="row">
                        {{ csrf_field() }}

                        <div>{{ $scholarship->study->section[0]->name }}</div>
                        <div>{{ $scholarship->study->section[0]->level->name }}</div>
                        <div>{{ $scholarship->interestsLength() }}</div>
                        <div>
                        @foreach($scholarship->user as $user)
                            <img src="{{ $user->info->avatar }}" width="20px">
                            <input type="radio" name="winner" value="{{ $user->id }}"> {{$user->name}}<br>
                        @endforeach
                        </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label">Πλάνο</label>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" value="{{ $scholarship->financial->plan }}" placeholder="Fullname" name="plan">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label">Ποσό</label>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" value="{{ $scholarship->financial_amount }}" placeholder="Fullname" name="amount">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label">Σπουδες</label>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" value="{{ $scholarship->study->name }}" placeholder="Fullname" name="study">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label">Κριτηρια</label>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" value="{{ $scholarship->criteria->name }}" placeholder="Fullname" name="criteria">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label">Ημ. Λήξης</label>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" value="{{ $scholarship->end_at }}" placeholder="Fullname" name="end_at">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label">Εξετάσεις</label>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" value="{{ $scholarship->exam_date }}" placeholder="Fullname" name="exam_date">
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

@endsection
