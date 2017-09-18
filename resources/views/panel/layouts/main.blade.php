<!DOCTYPE html>
<html style="background-color: #d9dcdd">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Schol.io College Panel">
        <meta name="author" content="Coderthemes">
        <meta property="fb:pages" content="934370089973049" />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <title>schol.io | Διεκδίκησε την υποτροφία σου.</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{asset('new/img/favicon.ico')}}" type="image/x-icon" />

        <link href="/panel/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <link href="/css/panel.css" rel="stylesheet">
        <link href="/panel/assets/css/icons.css" rel="stylesheet">

        <style>
        /*Styling για topbar*/
        .icon-navigation-container{position: fixed;  display: inline-block;  margin-top: 14px;  text-align: center; left: 50%; width: 350px; margin-left:-50px;}
            @media(max-width: 500px){.hidden-xxs{display: none;}}
        </style>

        @yield('styles')
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script>
            window.Scholio = <?php echo json_encode(['csrfToken' => csrf_token()]); ?>
        </script>

        @if(auth()->user()->role == 'school')
            <script>
                window.Connection = {{ $connection->id }}
                window.SchoolTypeId = '{{ $connection->type->id }}'
                window.SchoolTypeName = '{{ $connection->type->name }}'
            </script>
        @else
             <script>
                window.Connection = {{ $connection->id }}
            </script>
        @endif

        <script>
            window.lang = <?php
$lang_files = File::files(resource_path() . '/lang/' . App::getLocale());
$trans = [];
foreach ($lang_files as $f) {
    $filename = pathinfo($f)['filename'];
    $trans[$filename] = trans($filename);
}
echo json_encode($trans);
?>;
        </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        @yield('scriptsBefore')
    </head>


    <body class="fixed-left" style="background: linear-gradient( #F1F4F5 ,#d9dcdd ); min-height: 550px">
        <div id="app">
            <div id="wrapper">
                  @include('panel.partials.topbar.main')
                  @include('panel.partials.navigation.main')

                <div class="content-page" >
                    <div class="content">
                        <div class="container">
                        @yield('content')

                        </div>
                    </div>

                    @include('panel.partials.footer.main')

                </div>

            </div>

        </div>
        <script src="/panel/assets/js/modernizr.min.js"></script>
        <script src="https://js.pusher.com/3.2/pusher.min.js"></script>
        <script src="/js/app.js"></script>
        <script src="/js/bold.js"></script>

        <script src="/panel/assets/js/bootstrap-select.js"></script>





        <script>var resizefunc = [];</script>

        @yield('scripts')
    </body>
</html>