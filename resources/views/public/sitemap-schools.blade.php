<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{{asset('new/img/test-black.png')}}" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
    <link href="{{asset('new/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('new/css/results.css')}}" rel="stylesheet">

    <style>
    h1 {font-size: 170%; margin: 70px auto 0 auto;  }
    h2 { font-size: 140%; margin: 10px auto 0 auto; }
    h3 { font-size: 102%; margin:  5px auto 0 auto;}
    h3 a { color: #777;}
    /*.dataBox{background-color: #fafafa; border: 1px solid #ccc; border-radius: 5px; margin: 10px auto; padding: auto 20px 20px 20px; }*/


    .dataContainer{margin: 90px auto;}
    .dataBox{padding-right: 30px;}

    .grid-item { width: 25%;}
    /*@media(max-width: 1350px){ .grid-item { width: 25%;}  }*/
    @media(max-width: 1200px){ .grid-item { width: 33.33%;}  }
    @media(max-width: 991px){  .grid-item { width: 50%;}  }
    @media(max-width: 591px){
        .grid-item { width: 100%;}
        .dataBox{padding-left: 30px;}}
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
<div class="dataContainer grid" >
    @foreach($schools as $key=>$school)
        <div class="dataBox grid-item">
            <h1>
                {{ $school['type'] }}
            </h1>
            @foreach($school['city'] as $city)
                <h2>
                    <a href="/catalog{{ $city['url']}}">
                        {{ $city['name'] }}
                    </a>
                </h2>
                @if($school['type']!='Κολλέγια' && $school['type']!='ΙΕΚ - Επαγγελματικές Σχολές - ΚΔΒΜ')
                    @foreach($city['region'] as $region)
                        <h3>
                            <a href="/catalog{{ $region['url'] }}">
                                {{ $region['name'] }}
                            </a>

                        </h3>
                    @endforeach
                @endif
            @endforeach
        </div>
    @endforeach
</div>
     
</div>
   
       
   </div>
    @include('public.footer')
</body>

<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script>
    var msnry = new Masonry( '.grid', {
        itemSelector: '.grid-item',
        transitionDuration: '0.17s'
    });
</script>

</html>