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
         Fname:
        <input type="text" name="fname">
         Lname:
        <input type="text" name="lname">
        <br>
         Email:
        <input type="text" name="email">
        <br>
        Status:
        <select name="status">
            <option value="connected">Connected</option>
            <option value="allumni">Alumni</option>
        </select>
        <br>
         student_country: <input type="text" name="student_country"> <br>
        <br> student_phone:
        <input type="text" name="student_phone">
        <br> student_city:
        <input type="text" name="student_city">
        <br> student_address:
        <input type="text" name="student_address">
        <br>
         Father Name:
        <input type="text" name="father_name">
        <br>
         Mother Name:
        <input type="text" name="mother_name">
        <br>
         father_phone:
        <input type="text" name="father_phone">
        <br> mother_phone:
        <input type="text" name="mother_phone">
        <br>
         DOB:
        <input type="text" name="dob">
        <br>

        <button type="submit">SUBMIT</button>

    </form>
</body>
</html>