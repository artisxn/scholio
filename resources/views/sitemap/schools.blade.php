<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>schol.io | Schools</title>




    <!--====== CSS  Styles =======-->
    @include('public.styles')

    @include('google.main')


    <!-- Profile  CSS -->
    <link href="/new/css/terms.css" rel="stylesheet">


    <!-- jQuery js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <!-- Bootstrap js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Bootstrap Select js  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.4/js/bootstrap-select.min.js"></script>


    <style>

        body {
            background-color: #F1F4F5;
        }
        h1{font-size: 170%; font-weight: 400; color: #667; margin-top: 50px;}
        h2{font-size: 150%; font-weight: 400; color: #667; margin-top: 40px;}
        h3{font-size: 130%; font-weight: 300; color: #778; margin-top: 25px;}
        h5{font-size: 115%; font-weight: 300; color: #997; margin-top: 25px;}
        .dropdown-menu{background-color: #eee; padding-top: 20px}
        .mainBody{min-height: 1100px;}
        .outerBox{min-height: 800px; background: #fafafa; border: 1px solid #ccc; border-radius: 6px; width: 80%;  margin: 120px auto 50px auto; padding: 30px;}
        .terms{color: #999; text-indent: 50px; line-height: 180%; word-spacing: 3px; text-align: justify;}

        .terms::first-letter {
            font-size: 130%;
        }


        @media( max-width: 620px){
            .outerBox{width: 90%;}
        }
        @media( max-width: 560px){
            .outerBox{width: 98%;}
        }
    </style>

</head>
<body>



<header class="spy navbar navbar-fixed-top navbar-scroll sc-landing-header " id="header" style="z-index: 2">

    <div class="container" style="">
        <div class="row scholarship-profile-nav-row">

            <div class="pull-left visible-lg visible-md nav-web ">
                <!-- Scholio Branding -->
                <a class="sc-landing-brand" href="{{ url('/') }}">
                    <div class="sc-landing-logo-sticky" style=" padding-top: 15px">
                        <img src="{{asset('new/img/logoNX.png')}}"  class="sc-logo" alt="scholio logo" style="height: 63px; padding-top: 2px;">
                    </div>
                </a>
            </div>

            <div class="col-xs-6  visible-sm visible-xs">
                <div class="nav-mobile">
                    <a class="" href="{{ url('/') }}">
                        <div class="navbar-brand  sc-landing-logo-sticky">
                            <img src="{{asset('new/img/logoNX-m.webp')}}" class="sc-logo" alt="scholio logo" style="height: 60px; padding-top: 2px;">
                        </div>
                    </a>
                </div>
            </div>
            <!-- Scholio sMenu -->

            <!-- Large Menu -->
            <div class="pull-right visible-md visible-lg" >
                <ul class="nav navbar-nav navbar-right sc-landing-menu" >

                    <li class="" style="margin-top: 16px">
                        <form method="GET" id="langForm">
                            <select onchange="changeLang(this)" class="selectpicker" data-live-search="false" data-mobile="false" data-size='2' data-width="100%" data-style="btn-white">
                                <option style="color: black" data-icon="fa" value="en" {{ request()->cookie('lang')=='en' ? 'selected':'' }}>&nbsp; ENG</option>
                                <option style="color: black" data-icon="fa" value="el" {{ request()->cookie('lang')=='el' ? 'selected':'' }}>&nbsp; GR</option>
                            </select>
                        </form>
                    </li>

                    <li class="sc-landing-menu-item">
                        <a href="{{url('public/scholarships')}}" class="btn-change-search">
                            <i class="fa fa-trophy margin-right-5"></i>
                            @lang('schools.navigation.search_scholarship')
                        </a>
                    </li>
                    <li class="sc-landing-menu-item" style="margin-right: -12px">
                        <a href="{{url('public/schools')}}" class="btn-change-search">
                            <i class="fa fa-university margin-right-5"></i>
                            @lang('scholarships.search_institution')
                        </a>
                    </li>


                    @if(auth()->check())
                        <li><a href="{{ url('/dashboard') }}"><button type="button" class="sc-button-landing sc-button sc-orange sc-t-white" style="margin-right: -12px">@lang('main.navigation.admin')</button></a></li>
                        <li><a href="{{ url('/out') }}"><button type="button" class="sc-button-landing sc-button sc-dark-green sc-t-white ">@lang('main.navigation.logout')</button></a></li>
                    @else
                        <li><a href="{{ url('/register/role') }}"><button type="button" class="sc-button-landing sc-button sc-green sc-t-white" style="margin-right: -12px">@lang('main.navigation.register')</button></a></li>
                        <li><a href="{{ url('/login') }}"><button type="button" class="sc-button-landing sc-button sc-dark-green sc-t-white">@lang('main.navigation.login')</button></a></li>
                    @endif
                </ul>
            </div>


            <!-- Mobile Menu -->
            <div class="col-xs-6 visible-sm visible-xs " style="z-index: 6000; height: 20px;">
                <div class="">
                    <div class="sc-landing-menu-mobile-sandwitch nav navbar-nav navbar-right pull-right">
                        <div class="sc-landing-menu-sandwitch-button-sticky sc-landing-menu-sandwitch">
                            <img src="{{asset('new/img/collapse-dark2.png')}}" alt="scholio logo"  style="height:22px; margin-top: 7px;">
                            {{--<img src="{{asset('new/img/collapse-dark.png')}}" alt="scholio logo">--}}
                        </div>
                    </div>
                </div>

            </div>

            <!-- ======= Sandwich Menu =======-->
            @include('public.sandwich-menu-scholarshipProfile')

        </div>  <!-- row -->
    </div><!-- container-->


</header>

<div class="container mainBody">
    <div class="outerBox">
  <h2>Εκ. Ιδρύματα</h2>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Όνομα - Πόλη</th>
      </tr>
    </thead>
    <tbody>
        @foreach($schools as $school)
        <tr>
            <td>
                  <a href="/{{'@' . $school->admin->username }}">{{ $school->admin->name }} - {{ $school->city }}</a>
              </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
</div>



<!-- Footer -->
@include('public.footer')
</body>
</html>
