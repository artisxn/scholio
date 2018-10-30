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
    @foreach($schools as $school)
    <h1>
        {{ $school['type'] }}
    </h1>
        @foreach($school['city'] as $city)
        <h3>
            <a href="/catalog{{ $city['url']}}">
                {{ $city['name'] }}
            </a>
        </h3>
            @foreach($city['region'] as $region)
                <div>
                    <a href="/catalog{{ $region['url'] }}">
                            {{ $region['name'] }}
                    </a>
                    
                </div>
            @endforeach
        @endforeach
    @endforeach
</body>
</html>