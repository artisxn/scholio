@extends('panel.layouts.main')
@section('scriptsBefore')
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>tinymce.init({ selector: 'textarea' });</script>
@endsection
@section('content')
<div class="container">
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
                        <form>
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
                                <div class="col-md-4 mb-4">
                                    <label for="validationDefault03">Username</label>
                                    <input type="text" class="form-control" id="validationDefault03" placeholder="Email"
                                        name="username" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-12 mb-12">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">School_Type</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            @foreach(App\Models\SchoolTypes::all() as $type)
                                            <option>{{ $type->name }}</option>
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
                                    <input type="text" class="form-control" id="validationDefault04" placeholder="Phone"
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
                                    <input type="text" class="form-control" id="facebook" name="facebook" required>
                                </div>
                                <div class="col-md-4"><label for="twitter">Twitter</label>
                                    <input type="text" class="form-control" id="twitter" name="twitter" required>
                                </div>
                                <div class="col-md-4"><label for="instagram">Instagram</label>
                                    <input type="text" class="form-control" id="instagram" name="instagram" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-4"><label for="youtube">Youtube</label>
                                    <input type="text" class="form-control" id="youtube" name="youtube" required>
                                </div>
                                <div class="col-md-4"><label for="google">Google</label>
                                    <input type="text" class="form-control" id="google" name="google" required>
                                </div>
                                <div class="col-md-4"><label for="flickr">Flickr</label>
                                    <input type="text" class="form-control" id="flickr" name="flickr" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-2"><label for="validationDefault04"># of Photos</label>
                                    <input type="text" class="form-control" id="validationDefault04" name="photos"
                                        required>
                                </div>
                                <div class="col-md-2"><label for="ranking">Ranking</label>
                                    <input type="text" class="form-control" id="ranking" name="ranking" required>
                                </div>
                                <div class="col-md-3">
                                    <button class="btn btn-primary" style="margin-top:25px;" type="submit">Create
                                        School and Push with Algolia</button>
                                </div>
                                <div class="col-md-3">
                                    <button class="btn btn-warning" style="margin-top:25px;" type="submit">Create
                                        School no Algolia</button>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-info" style="margin-top:25px;" type="submit">Create
                                        webp images</button>
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