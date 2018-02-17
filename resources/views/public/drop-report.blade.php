<style>
    /* ==============  Mobile Menu Holder & Filters ================== */

    .menu-mobile-holder{ right: 5px;  top:17px; position: absolute; z-index: 500; border-radius: 10px; padding: 20px;
        /*background-color: #dde0e1;*/
        background-color: #006880;
        overflow-x: hidden;
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
        -webkit-filter: grayscale(90%);
        filter: grayscale(90%);
        /*filter: blur(2px) sepia(80%);*/
        -webkit-transition: all 300ms ease-in, all 300ms ease-out;
        -moz-transition: all 300ms ease-in, all 300ms ease-out;
        -o-transition: all 300ms ease-in, all 300ms ease-out;
        transition: all 200ms ease-in, all 200ms ease-out;
    }

    .nogreyscale{
        -webkit-filter: grayscale(0%)!important;
        /*filter: grayscale(0%)!important;*/
        filter:none;
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




</style>



<div class="sand-container hidden-md hidden-lg">
    <div class="menu-mobile-holder menu-mobile-right">
        <div class="material-content" >



        </div>
    </div>
</div>


<script>



</script>