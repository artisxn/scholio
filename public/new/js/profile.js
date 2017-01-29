
jQuery(document).ready(function($) {

    //$('.bxslider').bxSlider({
    //    slideWidth: 306,
    //    minSlides: 3,
    //    maxSlides: 5,
    //    moveSlides: 1,
    //    slideMargin: 15,
    //    video: false
    //});


    //Sticky Menu

    $(window).scroll(function(){

        if($(window).scrollTop()>100){

            //$('header').addClass("hidden");
            //$('tpb').removeClass("hidden");
            //$('.topbar').css({"display":"block"});


        }else {
            //$('.topbar').css({"display": "none"});
            //$('tpb').addClass("hidden");
            //$('header').removeClass("hidden");
        }
    });



    //Landing Page Menu Toggle - Collapse
    var sandwitch = $('.sc-landing-menu-sandwitch-button');
    //Οταν πατάς το sandwitch για να ανοίξει
    sandwitch.click(function(){
        console.log('ΠΑΤΗΘΗΚΕ');
    });


    //Landing Page Menu Toggle - Collapse
    var itempressed = $('.sc-landing-menu-mobile-item-pressed');
    var menuopen =   $('.sc-landing-menu-sandwitch');
    var menuclose =   $('.sc-landing-menu-mobile-close');
    var mobilemenu =$('.sc-landing-menu-mobile-holder');

    //Οταν θέλω να ανοιξω το μενου

    menuopen.click(function(){
        mobilemenu.css({"display":"block"});
    });

    //Οταν θέλω να κλείσω το μενου

    menuclose.click(function(){
        mobilemenu.css({"display":"none"});
    });

    //Οταν θέλω να πατησω σε ενα αντικειμενο του μενου

    itempressed.click(function(){
        mobilemenu.css({"display":"none"});
    });


    //Smooth Scroll
    $(function() {
        $('a[href*="#"]:not([href="#"])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top-120
                    }, 400);
                    return false;
                }
            }
        });
    });







});

