

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
<style>

    /*============================================================*/
    /*  ////////////////////////////////////////////////////////  */
    /*  ============= AVOID  input Blue Glow Shadow ==============*/

    input[type="text"]:focus,.form-control:focus, input{
        box-shadow: none;
        -webkit-box-shadow: none;
    }

    .form-control:focus {
        border-color: #008da5;
        box-shadow: none!important;
    }
    /*  //////////////////////////////////////////////////////  */
    /*==========================================================*/
</style>
<div class="wrapper-page" style="padding: 70px">
    <div class="card-box">
        <div class="panel-heading text-center">
            <a href="/">
                <img src="/new/img/logoNXsquareBDG.png" alt="" style="width: 90px;">
            </a>
            <div class="text-center font-weight-300 login-signUp-title">Εγγραφη Εκπαιδευτικού Ιδρύματος στο Schol.io</div>
        </div>

        <div class="panel-body">
            <form class="form-horizontal m-t-20" method="POST" action="{{ url('/register/school') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ session()->put('registration', 'school') }}

                <div class="form-group">
                    <label for="type" class="col-sm-4 font-weight-400">Τύπος Εκπαιδευτικού Ιδρύματος</label>

                    <div class="col-sm-8">
                        <select id="type" name="type" class="form-control selectpicker" data-width="100%" data-style="btn-primary">
                            @foreach(\App\Models\SchoolTypes::all() as $type)
                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-sm-4 font-weight-400">Όνομα Ιδρύματος</label>

                    <div class="col-sm-8">
                        <input  id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>

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

                <input id="checkbox-signup" type="checkbox" name="terms" required>
                <label for="checkbox-signup">@lang('register-step2.accept')
                    <a href="{{ url('terms') }}" target="_blank">
                        <span class=" orange-hover">@lang('register-step2.terms')</span>
                    </a>
                </label>

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
                Έχετε ήδη λογαριασμό;<a href="" onClick="modal_toggle1()" class="text-primary m-l-5 a-text"><b>Συνδεθείτε</b></a>
            </p>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>

<script>
function modal_toggle1(){
    $('#signUp-school-modal').modal('toggle');
    $('#signIn-modal').modal('toggle');
}
</script>
