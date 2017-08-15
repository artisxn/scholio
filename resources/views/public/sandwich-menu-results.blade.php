<style>
    /* ==============  Mobile Menu Holder & Filters ================== */

    .menu-mobile-holder{ right: 5px;  top:17px; position: absolute; z-index: 500; border-radius: 10px; padding: 20px;
        /*background-color: #dde0e1;*/
        background-color: #006880;
        /*border: 1px solid #aaa;*/
        /*box-shadow: 0 0 10px 1px #666;*/
    }

    .menu-mobile-left{
        opacity: 0.94;
        width: 250px;
        height:270px;
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
        -webkit-filter: invert(70%);
        filter: invert(70%);
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
        .menu-mobile-holder{ top:15px; right: 53px;}
    }



    /* ================== Buttons on mobile menu ======================= */

    .choose-lang{ color: #fff; margin: 1px 0 23px 0; }
    .choose-lang>a,.choose-lang>a:visited{color: #fff;}
    .choose-lang>a:hover{color: #FD6A33}

    .nav-item,.nav-item:visited,.nav-item:focus{color: #fff; font-size: 105%; display: block; margin: 10px 0;}

    .btn-register,.btn-login{ position: absolute; bottom: 30px; color: #fff; font-weight: 400;  border: none; padding: 7px;  width: 98px; border-radius: 4px; margin-top: 40px; }
    .btn-register{background-color: #00bcd4; left:18px;}
    .btn-login{background-color: #FD6A33; right: 16px; }

    .btn-register:hover{background-color: #00a1b9;}
    .btn-login:hover{background-color: #c1572a
    }
    /* =============================================================== */
</style>



<div class="sand-container hidden-md hidden-lg">
    <div class="menu-mobile-holder menu-mobile-right">
        <div class="material-content" >

            <div class="choose-lang" >
                <a href="/lang/en" style="z-index: 7000!important;">ENG &nbsp;</a> | <a href="/lang/el"> &nbsp;&nbsp;GR</a>
            </div>
            <a href="{{url('public/schools')}}" class="nav-item"> @lang('scholarships.search_institution')</a>
            <div class="btn-links centered-text">
                @if(auth()->check())
                    <a href="{{ url('/dashboard') }}"><button type="button" class="btn-register centered-text">@lang('main.navigation.admin')</button></a>
                    <a href="{{ url('/out') }}"><button type="button" class="btn-login centered-text">@lang('main.navigation.logout')</button></a>
                @else
                    <a href="{{ url('/register/role') }}">
                        <button type="button" class=" btn-register centered-text">@lang('main.navigation.register')</button>
                    </a>
                    <a href="{{ url('/login') }}">
                        <button type="button" class=" btn-login centered-text">@lang('main.navigation.login')</button>
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
        }else {
            main.addClass("greyscale")
            headerFull.css({"z-index":"6020"})
        }
        open = !open;

    });

</script>