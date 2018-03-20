<!DOCTYPE html>
<html style="background-color: #F1F4F5">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="description" content="Schol.io College Panel">
        <meta name="author" content="Schol.io">
        <meta property="fb:pages" content="934370089973049" />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">



        <title>schol.io | Your Scholarship is a click Away</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{asset('new/img/test-black.png')}}" type="image/x-icon" />

        <link rel="stylesheet" href="/panel/assets/css/bootstrap.min.css" />

        <link rel="stylesheet" href="/css/panel.css">
        <link rel="stylesheet" href="/panel/assets/css/icons.css">
        <link rel="stylesheet" href="/panel/assets/css/cs-select2.css">
        <link rel="stylesheet" href="/panel/assets/css/cs-select-circular2.css">
        <link rel="stylesheet" href="{{'/panel/assets/css/animated-placeholder.css'}}" />
        <link rel="stylesheet" href="{{'/panel/assets/css/masonry.css'}}"/>
        <link rel="stylesheet" href="{{'/panel/assets/plugins/hopscotch/css/hopscotch.css'}}" />

        <style>
        .unverified{margin-top: 40px; font-size: 90%; color: #ccc4a7; text-align: center;}
        .unverified:hover{ cursor: pointer;}

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



        @media(max-width: 990px){  .icon-box, .unverified{display: none;}  }
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




        /* ============   Styling School navigation links   ===============*/

        .badge-nav{background-color: #456676; color: #97A7C3; font-weight: 300; font-size: 90%}
        li>a.active>span{color: #00bcd4;}
        /*li>a>span:hover{color: #dbdbdb;}*/
        /*li>a:hover{color: #dbdbdb;}*/




        /* ===============================================================*/


        @media(max-width: 991px){
            .side-menu{}
            .paddingTop{  padding-top: 38px;  }
            .badge-nav{display: none!important;}
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
            window.lang =
                    <?php
function rsearch($folder, $pattern)
{
    $dir = new RecursiveDirectoryIterator($folder);
    $ite = new RecursiveIteratorIterator($dir);
    $files = new RegexIterator($ite, $pattern, RegexIterator::GET_MATCH);
    $fileList = array();
    foreach ($files as $file) {
        $fileList = array_merge($fileList, $file);
    }
    return $fileList;
}

$files = rsearch(resource_path() . '/lang/' . App::getLocale() . '/', '#^(?:[A-Z]:)?(?:/(?!\.Trash)[^/]+)+/[^/]+\.(?:php)$#Di');
$trans = [];
$txt = [];
$test = [];
foreach ($files as $t) {
    $dirname = explode(resource_path() . '/lang/' . App::getLocale(), pathinfo($t)['dirname']);
    $filename = pathinfo($t)['filename'];
    if ($dirname[1] == '') {
        $trans[$filename] = trans($dirname[1] . '/' . $filename);
    } else {
        $directory = substr($dirname[1], 1, strlen($dirname[1]));
        $trans[$directory][$filename] = trans($directory . '/' . $filename);
        // $trans[$directory . '.' . $filename] = trans($directory . '/' . $filename);
    }

}

echo json_encode($trans);
?>
        </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

        <!-- Ubold Tour js -->
        <script src="/panel/assets/plugins/hopscotch/js/hopscotch.min.js"></script>

        <script>
        function newTour(target, title, content, placement, y, x){
            return  {
                            target: target,
                            title: title,
                            content: content,
                            placement: placement,
                            yOffset: y,
                            xOffset: x

                        };
        }
        </script>

        @if(auth()->user()->role == 'school' && auth()->user()->subscription->plan_id == 2)
        <script>
            console.log(window.navBar)
            
            function startTour(){
                var b = 'bottom';
                var t = 'top';
                var r = 'right';
                var l = 'left';

                var tour = {
                    id: "my-intro",
                    steps: [
                        newTour('logoBtn',         lang.tourSchools.title0,  lang.tourSchools.text0,  r,   0,  -110),
                        newTour('studentsBtn',     lang.tourSchools.title1,  lang.tourSchools.text1,  b,   1,  -18),
                        newTour('teachersBtn',     lang.tourSchools.title2,  lang.tourSchools.text2,  b,   1,  -18),
                        newTour('studiesBtn',      lang.tourSchools.title3,  lang.tourSchools.text3,  b,   1,  -18),
                        newTour('photosBtn',       lang.tourSchools.title4,  lang.tourSchools.text4,  b,   1,  -18),
                        newTour('scholarshipsBtn', lang.tourSchools.title5,  lang.tourSchools.text5,  b,   1,  -18),
                        newTour('admissionsBtn',   lang.tourSchools.title6,  lang.tourSchools.text6,  b,   1,  -18),
                        newTour('reviewsBtn',      lang.tourSchools.title7,  lang.tourSchools.text7,  b,   1,  -18),
                        newTour('notificationsBtn',lang.tourSchools.title8,  lang.tourSchools.text8,  l,   0,   10),
                        newTour('navResources',    lang.tourSchools.title13, lang.tourSchools.text13, r, -10,  -90)
                    ],
                    showPrevButton: true
                };

                hopscotch.startTour(tour);
                }
        </script>
        @elseif(auth()->user()->role == 'school' && auth()->user()->subscription->plan_id == 1)
        <script>
            
            function startTour(){
                var b = 'bottom';
                var t = 'top';
                var r = 'right';
                var l = 'left';

                var tour = {
                    id: "my-intro",
                    steps: [
                        
                    ],
                    showPrevButton: true
                };

                hopscotch.startTour(tour);
                }
        </script>
        @endif


        @yield('scriptsBefore')
        
    </head>

    <body class="" style="background: #F1F4F5; min-height: 550px">
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
                </div>

            </div>

        </div>
        <script>
                if(window.innerWidth <= 600){
                    console.log('rrr')
                    if (localStorage.getItem("navBar") === null) {
                        localStorage.setItem("navBar", false);
                    }
                    window.navBar = 0;
                }else{
                    window.navBar = localStorage.getItem("navBar");
                    if (localStorage.getItem("navBar") === null) {
                        localStorage.setItem("navBar", true);
                    }
                    if (window.navBar === 'false' || window.navBar === 0 || window.navBar === false) {
                        window.navBar = 0
                    }
                }
        </script>
        <script src="/js/app.js"></script>
        <script src="/js/bold.js"></script>

        <script src="/panel/assets/js/bootstrap-select.js"></script>



        <script src="{{ asset('panel/assets/js/selectClassie.js') }}"></script>
        <script src="{{ asset('panel/assets/js/selectFx.js') }}"></script>
        <script>
                (function() {
                    [].slice.call( document.querySelectorAll( 'select.cs-select-school' ) ).forEach( function(el) {
                        new SelectFx(el, {
                            stickyPlaceholder: false,
                            onChange: function(val){
                                var img = document.createElement('img');
                                img.src = 'assets/img/'+val+'.png';
                                if(val == 1) document.location = '/panel/school/students';
                                if(val == 2) document.location = '/panel/school/teachers';
                                if(val == 3) document.location = '/panel/school/studies';
                                if(val == 4) document.location = '/panel/school/profile/images';
                                if(val == 5) document.location = '/panel/school/scholarships/view';
                                if(val == 6) document.location = '/panel/school/scholarships/request';

                                img.onload = function() {
                                    document.querySelector('span.cs-placeholder').style.backgroundImage = 'url(assets/img/'+val+'.png)';


                                };
                            }
                        });
                    } );
                })();

                (function() {
                    [].slice.call( document.querySelectorAll( 'select.cs-select-student' ) ).forEach( function(el) {
                        new SelectFx(el, {
                            stickyPlaceholder: false,
                            onChange: function(val){
                                var img = document.createElement('img');
                                img.src = 'assets/img/1'+val+'.png';
                                if(val == 1) document.location = '/panel/users/student/studentCv';
                                if(val == 2) document.location = '/panel/users/student/mySchools';
                                if(val == 3) document.location = '/panel/users/student/scholarship/request';
                                if(val == 4) document.location = '/panel/users/student/review/show';

                                img.onload = function() {
                                    document.querySelector('span.cs-placeholder').style.backgroundImage = 'url(assets/img/1'+val+'.png)';
                                };
                            }
                        });
                    } );
                })();
        </script>


        <script>
            $('#btn-students').mouseover( function(){ $('#img-student-color').removeClass('hidden');   $('#img-student-black').addClass('hidden');    $('#students-text').addClass('sc-t-teal');   });
            $('#btn-students').mouseout(  function(){ $('#img-student-color').addClass('hidden');      $('#img-student-black').removeClass('hidden'); $('#students-text').removeClass('sc-t-teal');});

            $('#btn-teachers').mouseover( function(){ $('#img-teacher-color').removeClass('hidden');   $('#img-teacher-black').addClass('hidden');    $('#teachers-text').addClass('sc-t-teal');   });
            $('#btn-teachers').mouseout(  function(){ $('#img-teacher-color').addClass('hidden');      $('#img-teacher-black').removeClass('hidden'); $('#teachers-text').removeClass('sc-t-teal');});

            $('#btn-studies').mouseover( function(){ $('#img-studies-color').removeClass('hidden');    $('#img-studies-black').addClass('hidden');    $('#studies-text').addClass('sc-t-teal');    });
            $('#btn-studies').mouseout(  function(){ $('#img-studies-color').addClass('hidden');       $('#img-studies-black').removeClass('hidden'); $('#studies-text').removeClass('sc-t-teal'); });

            $('#btn-trophy').mouseover( function(){ $('#img-trophy-color').removeClass('hidden');      $('#img-trophy-black').addClass('hidden');    $('#trophy-text').addClass('sc-t-teal');      });
            $('#btn-trophy').mouseout(  function(){ $('#img-trophy-color').addClass('hidden');         $('#img-trophy-black').removeClass('hidden'); $('#trophy-text').removeClass('sc-t-teal');   });

            $('#btn-photos').mouseover( function(){ $('#img-photos-color').removeClass('hidden');      $('#img-photos-black').addClass('hidden');    $('#photos-text').addClass('sc-t-teal');      });
            $('#btn-photos').mouseout(  function(){ $('#img-photos-color').addClass('hidden');         $('#img-photos-black').removeClass('hidden'); $('#photos-text').removeClass('sc-t-teal');   });

            $('#btn-admissions').mouseover( function(){ $('#img-admissions-color').removeClass('hidden');      $('#img-admissions-black').addClass('hidden');    $('#admissions-text').addClass('sc-t-teal');      });
            $('#btn-admissions').mouseout(  function(){ $('#img-admissions-color').addClass('hidden');         $('#img-admissions-black').removeClass('hidden'); $('#admissions-text').removeClass('sc-t-teal');   });

            $('#btn-reviews').mouseover( function(){ $('#img-reviews-color').removeClass('hidden');     $('#img-reviews-black').addClass('hidden');    $('#reviews-text').addClass('sc-t-teal');      });
            $('#btn-reviews').mouseout(  function(){ $('#img-reviews-color').addClass('hidden');        $('#img-reviews-black').removeClass('hidden'); $('#reviews-text').removeClass('sc-t-teal');   });

            $('#btn-views').mouseover( function(){ $('#img-views-color').removeClass('hidden');       $('#img-views-black').addClass('hidden');    $('#views-text').addClass('sc-t-teal');      });
            $('#btn-views').mouseout(  function(){ $('#img-views-color').addClass('hidden');          $('#img-views-black').removeClass('hidden'); $('#views-text').removeClass('sc-t-teal');   });

            $('#btnsvg').mouseover( function(){ $('#img-svg-color').removeClass('hidden');       $('#img-svg-black').addClass('hidden');     });
            $('#btnsvg').mouseout(  function(){ $('#img-svg-color').addClass('hidden');          $('#img-svg-black').removeClass('hidden');  });
        </script>



        <script>
            var resizefunc = [];
            function changeLang(el){
                    var form = document.getElementById('langForm');
                    form.action = '/lang/'+el.value;
                    form.submit();
                }
        </script>

        <script>
            console.log(window.navBar)
            if (window.navBar === 'false' || window.navBar === 0 || window.navBar === false) {
                    $("#wrapper").toggleClass("enlarged");
                    $("#wrapper").addClass("forced");

                    if ($("#wrapper").hasClass("enlarged") && $("body").hasClass("fixed-left")) {
                        $("body").removeClass("fixed-left").addClass("fixed-left-void");
                    } else if (!$("#wrapper").hasClass("enlarged") && $("body").hasClass("fixed-left-void")) {
                        $("body").removeClass("fixed-left-void").addClass("fixed-left");
                    }

                    if ($("#wrapper").hasClass("enlarged")) {
                        $(".left ul").removeAttr("style");
                    } else {
                        $(".subdrop").siblings("ul:first").show();
                    }

                    toggle_slimscroll(".slimscrollleft");
                    $("body").trigger("resize");
                }
        </script>


        @yield('scripts')
    </body>





</html>