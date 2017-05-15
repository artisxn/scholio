<!DOCTYPE html>
<html>
<head>
    <title>Scholio</title>
</head>
<body>
@foreach($subscriptions as $subscription)
NAME: {{$subscription->name}} <br>
EMAIL: {{$subscription->email}} <br>
MESSAGE: {{$subscription->message}} <br>
<hr>
@endforeach

<hr><hr>
{{$emails}}
</body>
</html>
