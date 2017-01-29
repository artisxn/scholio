@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
                <notifications></notifications>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('943717bf5769e7b902b4', {
      cluster: 'eu',
      encrypted: true
    });

    var channel = pusher.subscribe('school');
    channel.bind('App\\Events\\StudentAppliedToSchool', function(data) {
      console.log('User ' + data.user.name + ' just applied for connection.');
    });
  </script>
@endsection
