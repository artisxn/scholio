

    <div class="wrapper-page">

                <div class="panel-heading">
                <div class="text-center">
                    <img src="/new/img/logo-dark-green-144.png" alt="" style="width: 90px;">
                </div>
                    <div class="text-center login-signUp-title">Εγγραφή στο Schol.io</div>
                </div>

                <div class="panel-body">
                    <form class="form-horizontal m-t-20 " method="POST" action="{{ url('/register') }}">
                    {{ csrf_field() }}

                        <div id="form-type" class="form-group">
                            <label for="type" class="col-sm-3 font-weight-400">Ιδιότητα</label>

                            <div class="col-sm-9 font-weight-300">
                                <select id="type" type="password" class="form-control" name="type" onchange="social()">
                                <option value="no" selected>Επέλεξε Ιδιότητα</option>
                                  <option value="student">Μαθητής</option>
                                  <option value="parent">Γονέας</option>
                                  <option value="teacher">Καθηγητής</option>
                                </select>
                            </div>

                            <span id="span-type" class="help-block hidden">
                                <strong>Πρέπει να επιλέξετε ιδιότητα</strong>
                            </span>
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-sm-3 font-weight-400">Όνομα, Επώνυμο</label>

                            <div class="col-sm-9">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-sm-3 font-weight-400">e-mail</label>

                            <div class="col-sm-9">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-sm-3 font-weight-400">Κωδικός</label>

                            <div class="col-sm-9">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-sm-3 font-weight-400 ">Επιβεβαίωση Κωδικού</label>

                            <div class="col-sm-9">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox-signup" type="checkbox">
                                    <label for="checkbox-signup">Αποδέχομαι<a href="#"> τους όρους και τις προϋποθέσεις</a></label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group text-center m-t-40">
                            <div class="col-xs-12">
                                <button class="btn btn-block sc-dark-green">
                                    Εγγραφή
                                </button>
                            </div>
                        </div>

                        <div class="form-group m-t-20 m-b-0">
                            <div class="col-sm-12 text-center login-signUp-text">
                                <div>Εγγραφή μέσω</div>
                            </div>
                        </div>

                        <div class="form-group m-b-0 text-center">
                            <div class="col-xs-12">
                                <button type="button" onclick="login('facebook')" class="btn btn-facebook col-xs-5 m-t-20">
                                   {{--<i class="fa fa-facebook m-r-5"></i> --}}
                                    Facebook
                                </button>
                                    <div class="col-xs-2"></div>
                                <button type="button" onclick="login('google')" class="btn btn-googleplus col-xs-5  m-t-20">
                                   {{--<i class="fa fa-google-plus m-r-5"></i>--}}

                                    Google+
                                </button>
                            </div>
                        </div>


                    </form>
                </div>


            <div class="row">
                <div class="col-sm-12 text-center">
                    <p>
                        Έχεις ήδη λογαριασμό;<a href="" onClick="modal_toggle()" class="text-primary m-l-5" style="color: black"><b> Συνδέσου</b></a>
                    </p>
                </div>
            </div>
        </div>






    <script>

    function modal_toggle(){
        $('#signUp-modal').modal('toggle');
        $('#signIn-modal').modal('toggle');
    }

        function social(){
            axios.post('/api/registration/social', {
                        role: document.getElementById('type').value,
                    })
                    .then(function (response) {
                        console.log(response.data);
                        removeErrors();
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
        }

        function login(media){
            var url = '';
            var type = document.getElementById('type').value;
            if(type!= 'no'){
                if(media == 'google'){
                    url = '/auth/google/';
                }else{
                    url = '/auth/facebook/';
                }
                window.location = url;
            }else{
                showErrors();
            }
        }

        function showErrors(){
            var form = document.getElementById('form-type');
            form.className += ' has-error';
            var span = document.getElementById('span-type');
            span.classList.remove("hidden");
        }

        function removeErrors(){
            var form = document.getElementById('form-type');
            form.classList.remove("has-error");
            var span = document.getElementById('span-type');
            span.className += ' hidden';
        }
    </script>