<style>
    /* ==============  Mobile Menu Holder & Filters ================== */

    .menu-mobile-holder{ right: 7px;  top:10px; position: absolute; z-index: 500; border-radius: 10px; padding: 20px;
        /*background-color: #dde0e1;*/
        background-color: #006880;
        overflow-x: hidden;
        /*border: 1px solid #aaa;*/
        /*box-shadow: 0 0 10px 1px #666;*/
    }

    .menu-mobile-left{
        opacity: 0.98;
        width: 258px;
        /*height:555px; */
        height:315px;
        -webkit-transition: all 300ms ease-in, all 300ms ease-out;
        -moz-transition: all 300ms ease-in, all 300ms ease-out;
        -o-transition: all 300ms ease-in, all 300ms ease-out;
        transition: all 200ms ease-in, all 200ms ease-out;
        /*transition: width 300ms ease-in, width 300ms ease-out,height 200ms ease-in, height 200ms ease-out;*/

    }
    .menu-mobile-right{
        /*right: -255px;  top: -800px; */
        opacity: 0;
        width: 10px;
        height: 10px;

        -webkit-transition: all 300ms ease-in, all 300ms ease-out;
        -moz-transition: all 300ms ease-in, all 300ms ease-out;
        -o-transition: all 300ms ease-in, all 300ms ease-out;
        /*transition: width 300ms ease-in, width 300ms ease-out,height 200ms ease-in, height 200ms ease-out;*/
        transition: all 250ms ease-in, all 250ms ease-out;
        /*transition: opacity 1ms;*/

    }

    .sandwitch{position: absolute; right: 10px; top:6px;}

    .invert{
        -webkit-filter: invert(100%);
        filter: invert(100%);
        /*filter:sepia(100%);*/
    }
    .greyscale{
        -webkit-filter: grayscale(80%) blur(2px));
        filter: grayscale(80%) blur(2px);
        /*filter: blur(2px) sepia(80%);*/
        -webkit-transition: all 300ms ease-in, all 300ms ease-out;
        -moz-transition: all 300ms ease-in, all 300ms ease-out;
        -o-transition: all 300ms ease-in, all 300ms ease-out;
        transition: all 200ms ease-in, all 200ms ease-out;
    }

    .material-content{opacity: 0;
        transition: all 100ms ease-in, all 100ms ease-out;}

    .material-on{opacity: 1;
        transition: all 100ms ease-in, all 100ms ease-out;
    }



    @media   (min-width: 768px) {
        .sand-container{width: 106%!important; position: relative!important;}
        .menu-mobile-holder{ top:11px; right: 53px;}
    }



    /* ================== Buttons on mobile menu ======================= */

    .choose-lang{ color: #fff; margin: -2px 0 23px 0; }
    .choose-lang>a,.choose-lang>a:visited{color: #fff;}
    .choose-lang>a:hover{color: #FD6A33}

    .nav-item,.nav-item:visited,.nav-item:focus{color: #fff; font-size: 100%; display: block; margin: 10px 0; font-weight: 300;}

    .btn-register,.btn-login{ position: absolute; bottom: 30px; color: #fff; font-weight: 400;  border: none; padding: 7px;  width: 98px; border-radius: 4px; margin-top: 40px; }
    .btn-register{background-color: #00bcd4; left:18px;}
    .btn-login{background-color: #FD6A33; right: 16px; }

    .btn-register:hover,.btn-register2:hover{background-color: #c1572a}
    .btn-login:hover,.btn-login2:hover{background-color: #00a1b9}

    .btn-school-results,.btn-scholarship-results,.btn-home{ border-radius: 5px; padding: 10px 6px; font-size: 95%; position: absolute; bottom: 153px; left: 17px; right: 17px; text-align: center;  background-color: #eee!important; color: #555!important;width: 220px; }
    .btn-home{bottom: 102px; background-color: #aaa!important; color: #fff!important; }
    .btn-scholarship-results{bottom: 204px}


    .btn-register2,.btn-login2{ position: absolute; left: 17px; right: 17px;  color: #fff; font-weight: 400;  border: none; padding: 10px 7px;  width: 220px; border-radius: 5px; margin-top: 40px; }

    .btn-register2{background-color: #FD6A33; bottom: 60px; }
    .btn-login2{background-color: #00bcd4;  bottom: 8px;}





    /* =============================================================== */
</style>




<div class="sand-container hidden-md hidden-lg">
    <div class="menu-mobile-holder menu-mobile-right">
        <div class="material-content" >

            <div class="choose-lang" >
                <a href="/lang/en" style="z-index: 7000!important;">ENG &nbsp;</a> | <a href="/lang/el"> &nbsp;&nbsp;GR</a>
            </div>


            {{--@if($school->settings->about)--}}
                {{--<a href="#sxetika">--}}
                    {{--<div class="sc-landing-menu-mobile-item sc-landing-menu-mobile-item-pressed">@lang('profile.navigation.about')</div>--}}
                {{--</a>--}}
            {{--@endif--}}
            {{--@if($school->settings->studies)--}}
                {{--<a href="#spoudes">--}}
                    {{--<div class="sc-landing-menu-mobile-item sc-landing-menu-mobile-item-pressed">@lang('profile.navigation.studies')</div>--}}
                {{--</a>--}}
            {{--@endif--}}
            {{--@if($school->settings->scholarships)--}}
                {{--<a href="#ypotrofies">--}}
                    {{--<div class="sc-landing-menu-mobile-item sc-landing-menu-mobile-item-pressed">@lang('profile.navigation.scholarships')</div>--}}
                {{--</a>--}}
            {{--@endif--}}
            {{--@if($school->settings->reviews)--}}
                {{--<a href="#reviews">--}}
                    {{--<div class="sc-landing-menu-mobile-item sc-landing-menu-mobile-item-pressed">@lang('profile.navigation.reviews')</div>--}}
                {{--</a>--}}
            {{--@endif--}}
            {{--@if($school->settings->teachers)--}}
                {{--<a href="#faculty">--}}
                    {{--<div class="sc-landing-menu-mobile-item sc-landing-menu-mobile-item-pressed">@lang('profile.navigation.teachers')</div>--}}
                {{--</a>--}}
            {{--@endif--}}


            <a href="{{url('public/schools')}}" class="nav-item btn-scholarship-results" >
                <i class="fa fa-university margin-right-5">
                </i>@lang('scholarships.search_institution')
            </a>
            <a href="{{url('public/scholarships')}}" class="nav-item btn-school-results" >
                <i class="fa fa-trophy margin-right-5">
                </i>@lang('schools.navigation.search_scholarship')
            </a>
            <a href="{{url('/')}}" class="nav-item btn-home" >
                @lang('scholarships.navigation.home')
            </a>

            <div class="btn-links centered-text">
                @if(auth()->check())
                    <a href="{{ url('/dashboard') }}"><button type="button" class="btn-register2 centered-text">@lang('main.navigation.admin')</button></a>
                    <a href="{{ url('/out') }}"><button type="button" class="btn-login2 centered-text">@lang('main.navigation.logout')</button></a>
                @else
                    <a href="{{ url('/register/role') }}">
                        <button type="button" class=" btn-register2 centered-text">@lang('main.navigation.register')</button>
                    </a>
                    <a href="{{ url('/login') }}">
                        <button type="button" class=" btn-login2 centered-text">@lang('main.navigation.login')</button>
                    </a>
                @endif
            </div>

        </div>
    </div>
</div>


<script>

    var sandwitch = $('.sc-landing-menu-sandwitch-button-sticky ');    //<<===>>//
    var mobilemenu =$('.menu-mobile-holder');
    var material=$('.material-content');
    var filter=$('.filter-icon');

    var main=$('#main');
    var headerFull=$('header');

    var open=false;
    var white=true;

    //Οταν πατάς το sandwitch για να ανοίξει

    sandwitch.click(function(){
        mobilemenu.toggleClass("menu-mobile-right menu-mobile-left");
        material.toggleClass("material-content material-on");
        sandwitch.toggleClass("invert");
        if(  open ){
            main.removeClass("greyscale")
            filter.css({"display":"block"})
        }else {
            main.addClass("greyscale")
            headerFull.css({"z-index":"6020"})
            filter.css({"display":"none"})
        }
        open = !open;

    });

</script>