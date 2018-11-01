<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>


    <link rel="shortcut icon" href="{{asset('new/img/test-black.png')}}" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
    <link href="{{asset('new/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('new/css/results.css')}}" rel="stylesheet">

    <style>
    h1 {font-size: 240%; margin: 70px auto 0 auto;  }
    h2 { font-size: 200%; margin: 10px auto 0 auto; }
    h3 { font-size: 110%; margin:  5px auto 0 auto;}
    h3 a { color: #777;}

    .dataContainer{margin: 90px auto;}
        
    </style>

</head>
<body>

    <!-- Scholio Header -->
    <header class="navbar navbar-fixed-top navbar-scroll sc-landing-header" id="header" >
        <div class="container">

            <div class="pull-left visible-lg visible-md nav-web ">
                <!-- Scholio Branding -->
                <a class="sc-landing-brand" href="{{ url('/') }}">
                    <div class="sc-landing-logo-sticky" style=" padding-top: 15px">
                        <picture>
                            <source srcset="/new/img/logoNX-m.webp" type="image/webp">
                            <source srcset="/new/img/logoNX-m.png" type="image/png">
                            <img src="/new/img/logoNX-m.png" class="sc-logo" alt="scholio logo" style="height: 63px; padding-top: 2px;">
                        </picture>
                    </div>
                </a>
            </div>

            <div class="col-xs-6  visible-sm visible-xs">
                <div class="nav-mobile">
                    <a class="" href="{{ url('/') }}">
                        <div class="navbar-brand  sc-landing-logo-sticky">
                            <picture>
                                <source srcset="/new/img/logoNX-m.webp" type="image/webp">
                                <source srcset="/new/img/logoNX-m.png" type="image/png">
                                <img src="/new/img/logoNX-m.png" class="sc-logo" alt="scholio logo" style="height: 60px; padding-top: 2px;">
                            </picture>
                        </div>
                    </a>
                </div>
            </div>

            </div>
        </div>
    </header>


   <div class=" main">

<div class="container ">
<div class="dataContainer">
    @foreach($schools as $school)
    <h1>
        {{ $school['type'] }}
    </h1>
        @foreach($school['city'] as $city)
        <h2>
            <a href="/catalog{{ $city['url']}}">
                {{ $city['name'] }}
            </a>
        </h2>
            @foreach($city['region'] as $region)
                <h3>
                    <a href="/catalog{{ $region['url'] }}">
                            {{ $region['name'] }}
                    </a>
                    
                </h3>
            @endforeach
        @endforeach
    @endforeach
</div>
     
</div>
   
       
   </div>
   
</body>
</html>