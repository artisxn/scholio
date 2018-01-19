@extends('panel.layouts.main') 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Schools</div>

                <div class="panel-body">

                    <form method="POST" action="/admin/subscription">
                        {{ csrf_field() }}
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inschool">School</label>
                                <select name="userID"  class="form-control" id="inschool">
                                    @foreach(App\User::all() as $user) @if($user->role == 'school')
                                    <option data-icon="fa" value="{{ $user->id }}">
                                        {{ $user->name }}
                                    </option>
                                    @endif @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="plan">Subscription Plan</label>
                                <select type="text" class="form-control" id="plan" name="plan">
                                    <option value="1">FREE</option>
                                    <option value="2">VIP</option>
                                </select>
                            </div>
                        </div>
                    


                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label for="talent">Ταλέντου</label>
                                <input type="text" class="form-control" id="talent" name="talent" value="0">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="excellent">Αριστείας</label>
                                <input type="text" id="excellent" class="form-control" name="excellent" value="0">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="social">Κοινωνικά</label>
                                <input type="text" class="form-control" id="social" name="social" value="0">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="friends">Φίλους</label>
                                <input type="text" class="form-control" id="friends" name="friends" value="0">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="open">Ανοιχτού</label>
                                <input type="text" id="open" class="form-control" name="open" value="0">
                            </div>
                            <div class="form-group col-md-2">
                                <button type="submit" class="btn btn-primary">ΑΠΟΘΗΚΕΥΣΗ</button>
                            </div>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection