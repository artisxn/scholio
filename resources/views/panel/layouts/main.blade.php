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

        <link rel="stylesheet" href="/panel/assets/css/bootstrap.min.css" />

        <link rel="stylesheet" href="/css/panel.css">
        <link rel="stylesheet" href="/panel/assets/css/icons.css">
        <link rel="stylesheet" href="/panel/assets/css/cs-select2.css">
        <link rel="stylesheet" href="/panel/assets/css/cs-select-circular2.css">

        <style>
        /*Styling topbar*/
        .top-bar-container{}

        .top-img{filter: grayscale(100%); margin: 0 6px; opacity: 0.2;position: relative; display: inline-block;}
        .top-img:hover{filter: grayscale(70%); opacity: 0.7}
        .img-active{filter: none; opacity: 1}
        .top-image{height: 30px;}


        .icon-box{position: absolute;}
        .icon-navigation-container{margin-top: 14px;  position: absolute; left: 0; right: 0;  text-align: center;
            max-width: 340px; margin-left: auto; margin-right: auto;
        }



        @media(max-width: 990px){  .icon-box{display: none;}  }
        @media(min-width: 576px){  .icon-box{left:  70px; width: 94%}  .top-bar-container{margin-left: 70px} }
        @media(min-width: 768px){  .icon-box{left:  70px; width: 92%}  .top-bar-container{margin-left: 70px} }
        @media(min-width: 991px){
            .icon-box{left: 240px; width: 76%}
            /*.button-menu-mobile{display: none;} */
        }


        @media(min-width: 1020px){  .icon-box{width: 77.5%}  }
        @media(min-width: 1180px){  .icon-box{width: 80.3%}  }
        @media(min-width: 1280px){  .icon-box{width: 81.8%}  }
        @media(min-width: 1360px){  .icon-box{width: 82.5%}  }
        @media(min-width: 1450px){  .icon-box{width: 84%}    }
        @media(min-width: 1580px){  .icon-box{width: 85%}    }
        @media(min-width: 1780px){  .icon-box{width: 87%}    }
        @media(min-width: 1980px){  .icon-box{width: 88%}    }
        @media(min-width: 2280px){  .icon-box{width: 89.5%}  }
        @media(min-width: 2400px){  .icon-box{width: 90.6%}  }


        /* =========TOOLTIP=========*/

        .tooltiptext4  {
            width: 95px;
            font-weight: 300;
            font-size: 88%;
            visibility: hidden;
            color: #664;
            /*width: 300px;*/
            /*background-color: #007991;*/
            /*border-radius: 5px;*/
            /*padding: 5px 1px;*/
            text-align: center;
            position: absolute;
            z-index: 1;
            margin-left: -42px;
            opacity: 0;
            transition: opacity 0.1s;
        }

        .tooltiptext4{top: 30px; left: 40%;}
        .tool5{width: 140px; margin-left: -70px}

        .tool:hover .tooltiptext4 {
            visibility: visible;
            opacity: 1;
        }
        /* ===========================*/





        {{-- @media(max-width: 390px){.hidden-xxs{display: none;}} --}}


        @media(max-width: 991px){
            .side-menu{}
            .paddingTop{
                padding-top: 38px;
            }
        }

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


    <body class="" style="background: linear-gradient( #F1F4F5 ,#d9dcdd ); min-height: 550px">
        <div id="app">
            <div id="wrapper">
                  @include('panel.partials.topbar.main')
                  @include('panel.partials.navigation.main')

                <div class="content-page">
                    <div class="content">
                        <div class="container paddingTop">
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


        {{--scripts for rounded select--}}
        <script src="{{ asset('panel/assets/js/selectClassie.js') }}"></script>
        <script src="{{ asset('panel/assets/js/selectFx.js') }}"></script>
        <script>
                //  script for rounded select
                (function() {
                    [].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {
                        new SelectFx(el, {
                            stickyPlaceholder: false,
                            onChange: function(val){
                                var img = document.createElement('img');
                                img.src = 'assets/img/'+val+'.png';
                                if(val == 1) document.location = 'https://scholio.dev/panel/school/students';
                                if(val == 2) document.location = 'https://scholio.dev/panel/school/teachers';
                                if(val == 3) document.location = 'https://scholio.dev/panel/school/studies';
                                if(val == 4) document.location = 'https://scholio.dev/panel/school/profile/images';
                                if(val == 5) document.location = 'https://scholio.dev/panel/school/scholarships/view';
                                if(val == 6) document.location = 'https://scholio.dev/panel/school/scholarships/request';

                                img.onload = function() {
                                    document.querySelector('span.cs-placeholder').style.backgroundImage = 'url(assets/img/'+val+'.png)';


                                };
                            }
                        });
                    } );
                })();
        </script>

        <script>
            var resizefunc = [];
            function changeLang(el){
                    var form = document.getElementById('langForm');
                    form.action = '/lang/'+el.value;
                    form.submit();
                }
    </script>


        @yield('scripts')
    </body>
</html>