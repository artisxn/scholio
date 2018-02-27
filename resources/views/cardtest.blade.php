<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="{{ route('create-card') }}" method="POST">
        {{ csrf_field() }}

        City: <input type="text" name="city"> <br>

         Address:
        <input type="text" name="address">
        <br>
         Phone:
        <input type="text" name="phone">
        <br>
         Email:
        <input type="text" name="email">
        <br>
         Father Name:
        <input type="text" name="father_name">
        <br>
         Mother Name:
        <input type="text" name="mother_name">
        <br>
         DOB:
        <input type="text" name="dob">
        <br>

        <button type="submit">SUBMIT</button>

    </form>
</body>
</html>