<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Συνδεθείτε με το εκ. ίδρυμα {{ $school->name() }}</h1>

    <div>
        <select>
            <option value="1">A LYKEIOU</option>
            <option value="1">B LYKEIOU</option>
            <option value="1">Γ LYKEIOU</option>
        </select>
        <select>
            <option>@lang('panel/schools/resource.teachers.active')</option>
            <option>@lang('panel/schools/resource.teachers.alumni')</option>
        </select>
        <button> SUBMIT </button>
    </div>
</body>
</html>