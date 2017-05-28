
jQuery(document).ready(function($) {
    //Call typed-js
    // $(function(){
    //     $(".typed-js").typed({
    //         strings: ["Έχεις Ταλέντο;","Είσαι Μαθητής;","Είσαι Φοιτητής;",],
    //         typeSpeed: 100,
    //         backSpeed:100,
    //         loop: true
    //     });
    // });



    //Sticky Menu
    var logo = $('.sc-landing-logo');
    var logo_sticky = $('.sc-landing-logo-sticky');

    var sandwitch = $('.sc-landing-menu-sandwitch-button');
    var sandwitch_sticky = $('.sc-landing-menu-sandwitch-button-sticky');

    var text =  $('.sc-landing-menu a');
    var header = $('.sc-landing-header');
    var select =  $('.lang-drop');


    $(window).scroll(function(){

        if($(window).scrollTop()>600){
            header.css({"background":"rgba(240,240,240,0.92)","border-bottom":"1px solid #c1c1c1","height": "61px",});
            header.removeClass("navbar-top");
            header.addClass("navbar-fixed-top");
            header.addClass("navbar-scroll");
            logo.css({"display":"none"});
            logo_sticky.css({"display":"block"});
            sandwitch.css({"display":"none"});
            sandwitch_sticky.css({"display":"block"});
            text.css({"color":"#324c5a"});
            select.css({"color":"#324c5a!important"});
            select.addClass("hide");
            text.hover( function (e) {
                $(this).toggleClass('hover1', e.type === 'mouseenter');
                text.removeClass('hover2');
            });
            //text.removeClass('hover2');

        }else{
            header.css({"background":"transparent","border-bottom":"none"});
            header.removeClass("navbar-fixed-top");
            header.addClass("navbar-top");
            logo.css({"display":"block"});
            logo_sticky.css({"display":"none"});
            sandwitch.css({"display":"block"});
            sandwitch_sticky.css({"display":"none"});
            text.css({"color":"white"});
            select.removeClass("hide");
            //text.removeClass('hover1');
            text.hover( function (e) {
                $(this).toggleClass('hover2', e.type === 'mouseenter');
                text.removeClass('hover1');
            });

        }

    });


    //Landing Page Menu Toggle - Collapse

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
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });



    /*===== google.maps.places.Autocomplete  =====*/
    /*
    $(function() {
        new google.maps.places.Autocomplete(
            (document.getElementById('autocomplete')), {
                types: ['geocode']
            });
    });
    */






});

