<div class="wrapper-page" style="padding: 0">
    <div class="card-box">
        <div class="panel-heading text-center">
            <a href="/">
                <img src="/new/img/logo-dark-green-144.png" alt="" style="width: 90px;">
            </a>
            <div class="text-center font-weight-300 login-signUp-title">Εγγραφη Εκπαιδευτικού Ιδρύματος στο Schol.io</div>
        </div>

        <div class="panel-body">
            <form class="form-horizontal m-t-20" method="POST" action="{{ url('/register') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ session()->put('registration', 'school') }}

                <div class="form-group">
                    <label for="type" class="col-sm-4 font-weight-400">Τύπος Εκπαιδευτικού Ιδρύματος</label>

                    <div class="col-sm-8">
                        <select id="type" name="type" class="form-control" >
                            @foreach($schoolTypes as $type)
                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-sm-4 font-weight-400">Όνομα Ιδρύματος</label>

                    <div class="col-sm-8">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-sm-4 font-weight-400">e-mail Ιδρύματος</label>

                    <div class="col-sm-8">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-sm-4 font-weight-400">Κωδικός</label>

                    <div class="col-sm-8">
                        <input id="password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="password-confirm" class="col-sm-4 font-weight-400">Επιβεβαίωση Κωδικού</label>

                    <div class="col-sm-8">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                </div>

                <div class="form-group text-center m-t-40">
                    <div class="col-xs-12">
                        <button class="btn btn-block sc-t-white sc-dark-green" type="submit">
                            Εγγραφή
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 text-center">
            <p>
                Έχετε ήδη λογαριασμό;<a href="" class="text-primary m-l-5 a-text"><b>Συνδεθείτε</b></a>
            </p>
        </div>
    </div>
</div>