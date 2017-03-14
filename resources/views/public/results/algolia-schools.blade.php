<!DOCTYPE html>
<html>
<head>
    <title>tesrt</title>
</head>
<body>
@foreach($schools as $school)
    Name : {{$school->name()}}<br />
@endforeach
</body>
</html>
