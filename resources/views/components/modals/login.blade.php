

        <div class="wrapper-page">
            <div class=" card-box">
                <div class="panel-heading text-center">
                <div class="text-center">
                                     <img src="/new/img/logo-dark-green-144.png" alt="" style="width: 90px;">
                </div>
                    <div class=" font-weight-300 text-incr-175 text-center"> Σύνδεση στο Schol.io</div>
                </div>

                <div class="panel-body">
                    <form class="form-horizontal m-t-20" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-sm-3 pad-top-10 font-weight-400">e-mail</label>

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
                            <label for="password" class="col-sm-3 pad-top-10 font-weight-400">Κωδικός</label>

                            <div class="col-sm-9">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group m-t-20 m-b-0">
                            <div class="col-sm-12">
                                <a href="/password/reset" class="text-muted" style="color: black!important"><i class="fa fa-lock m-r-5"></i> Ξέχασες τον κωδικό σου;</a>
                            </div>
                        </div>

                        <div class="form-group text-center m-t-40">
                            <div class="col-xs-12">
                                <button class="btn sc-dark-green sc-t-white btn-block" type="submit">
                                    Σύνδεση
                                </button>
                            </div>
                        </div>

                        <div class="form-group m-t-20 m-b-0">
                            <div class="col-sm-12 text-center">
                                <div class="login-signUp-text">Σύνδεση μέσω</div>
                            </div>
                        </div>

                        <div class="form-group m-b-0 text-center">
                            <div class="col-xs-12">
                                <a href="{{ url('/auth/facebook') }}" type="button" class="btn btn-facebook m-t-20 col-xs-5 pad-top-8">
                                   {{--<i class="fa fa-facebook m-r-5"></i> --}}
                                    Facebook
                                </a>
                                <div class="col-xs-2"></div>
                                <a href="{{ url('/auth/google') }}" type="button" class="btn btn-googleplus m-t-20 col-xs-5 pad-top-8">
                                   {{--<i class="fa fa-google-plus m-r-5"></i> --}}
                                    Google+
                                </a>
                            </div>
                        </div>


                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 text-center">
                    <p>
                       Δεν έχεις λογαριασμό;<a href="" onClick="modal_toggle()" class="text-primary m-l-5y" style="color: black!important"><b> Δημιούργησε έναν Δωρεάν!</b></a>
                    </p>
                </div>
            </div>
        </div>

        <script>
        function modal_toggle(){
            $('#signUp-modal').modal('toggle');
            $('#signIn-modal').modal('toggle');
        }
        </script>










          {{--<!-- ======   Modal Εγγραφής  =======-->--}}
        {{--<div id="signUp-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="">--}}
            {{--<div class="modal-dialog">--}}
                {{--<div class="modal-content">--}}
                        {{--@include('components.modals.register')--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div><!-- /.modal -->--}}
