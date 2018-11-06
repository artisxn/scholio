@extends('panel.layouts.main')
@section('scriptsBefore')
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>tinymce.init({ selector: 'textarea' });</script>
@endsection
@section('content')
<div class="container">
    @if(session()->has('backup_db'))
    <h3 class="verify-title"><i class="fa fa-check-circle" style="margin-right: 20px;"></i>{{ session('backup_db') }}</h3>
    @endif
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="m-t-0 header-title">
                            <b>Seeder</b>
                        </h4>
                        <p class="text-muted font-13">
                            <hr>
                        </p>
                        <a href="/database/backup" class="btn btn-primary">BackUp Database</a>

                        <form method="POST" action="/panel/admin/seed">
                            {{ csrf_field() }}
                            <div class="form-row">
                                <div class="col-md-4 mb-4">
                                    <label for="validationDefault01">Name</label>
                                    <input type="text" class="form-control" id="validationDefault01" placeholder="Name"
                                        name="name" required>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <label for="validationDefault02">Email</label>
                                    <input type="text" class="form-control" id="validationDefault02" placeholder="Email"
                                        name="email" required>
                                </div>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <div class="col-md-4 mb-4">
                                    <label for="validationDefault03">Username</label>
                                    <input type="text" class="form-control" id="validationDefault03" placeholder="Email"
                                        name="username" required>
                                </div>
                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-row">
                                <div class="col-md-12 mb-12">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">School_Type</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="type">
                                            @foreach(App\Models\SchoolTypes::all() as $type)
                                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationDefault03">Address</label>
                                    <input type="text" class="form-control" id="validationDefault03" placeholder="Address"
                                        name="address" required>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationDefault05">City</label>
                                    <input type="text" class="form-control" id="validationDefault05" placeholder="City"
                                        name="city" required>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationDefault04">Region</label>
                                    <input type="text" class="form-control" id="validationDefault04" placeholder="Region"
                                        name="region" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-6">
                                    <label for="validationDefault04">Phone</label>
                                    <input type="number" min="0" step="1" class="form-control" id="validationDefault04" placeholder="Phone"
                                        name="phone" required>
                                </div>
                                <div class="col-md-6 mb-6">
                                    <label for="validationDefault04">Public Email</label>
                                    <input type="text" class="form-control" id="validationDefault04" placeholder="Public Email"
                                        name="public_email" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-12 mb-12">
                                    <label for="about">About</label>
                                    <textarea id="about" name="about"></textarea>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-4"><label for="facebook">Facebook</label>
                                    <input type="text" class="form-control" id="facebook" name="facebook">
                                </div>
                                <div class="col-md-4"><label for="twitter">Twitter</label>
                                    <input type="text" class="form-control" id="twitter" name="twitter">
                                </div>
                                <div class="col-md-4"><label for="instagram">Instagram</label>
                                    <input type="text" class="form-control" id="instagram" name="instagram">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-4"><label for="youtube">Youtube</label>
                                    <input type="text" class="form-control" id="youtube" name="youtube">
                                </div>
                                <div class="col-md-4"><label for="google">Google</label>
                                    <input type="text" class="form-control" id="google" name="google">
                                </div>
                                <div class="col-md-4"><label for="linkedin">LinkedIn</label>
                                    <input type="text" class="form-control" id="linkedin" name="linkedin">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-2"><label for="validationDefault04"># of Photos</label>
                                    <input type="number" min="0" step="1" class="form-control" id="validationDefault04" name="photos"
                                        required>
                                </div>
                                <div class="col-md-2"><label for="ranking">Ranking</label>
                                    <input type="number" min="0" step="1" class="form-control" id="ranking" name="ranking" required>
                                </div>
                                <div class="col-md-3">
                                    <button class="btn btn-primary" style="margin-top:25px;" type="submit">Create School</button>
                                </div>
                            </div>

                            <!-- <button class="btn btn-primary" type="submit">Create School</button> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection