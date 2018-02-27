<!DOCTYPE html>
<html>
<head>
    <title>Scholio</title>
</head>
<body>
@foreach(App\Models\Message::all() as $subscription)
NAME: {{$subscription->name}} <br>
EMAIL: {{$subscription->email}} <br>
MESSAGE: {{$subscription->message}} <br>
<hr>
@endforeach

<hr><hr>
<!-- {{$emails}} -->
</body>
</html>
