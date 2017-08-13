
jQuery(document).ready(function($) {


    //Sticky Menu
    var logo = $('.sc-landing-logo');
    var logo_sticky = $('.sc-landing-logo-sticky');

    var sandwitch = $('.sc-landing-menu-sandwitch-button');    //<<===>>//
    var mobilemenu =$('.menu-mobile-holder');
    var material=$('.material-content');
    var btns=$('.btn-links');

    var text =  $('.sc-landing-menu a');
    var header = $('.sc-landing-header');
    var select =  $('.lang-drop');
    var langDropWhite =$('.langDropWhite');

    var open=false;
    var white=true;



    $(window).scroll(function(){

        if($(window).scrollTop()>615){
            if(open) {
                sandwitch.removeClass("invert");
            }
            else{
                sandwitch.addClass("invert");
                sandwitch.css({"margin-top":"-6px"})
            }

            header.css({"background":"rgba(240,240,240,0.92)","border-bottom":"1px solid #c1c1c1","height": "61px",});
            header.removeClass("navbar-top");
            header.addClass("navbar-fixed-top");
            header.addClass("navbar-scroll");
            logo.css({"display":"none"});
            logo_sticky.css({"display":"block"});

            text.css({"color":"#324c5a"});
            select.css({"color":"#324c5a!important"});
            select.addClass("hide");
            langDropWhite.removeClass("hide");
            text.hover( function (e) {
                $(this).toggleClass('hover1', e.type === 'mouseenter');
                text.removeClass('hover2');
            });
           
            //text.removeClass('hover2');

        }else{
            header.css({"background":"transparent","border-bottom":"none"});
            header.removeClass("navbar-fixed-top");
            header.removeClass("navbar-scroll");
            header.addClass("navbar-top");
            logo.css({"display":"block"});
            logo_sticky.css({"display":"none"});

            sandwitch.removeClass("invert");
            sandwitch.css({"display": "block"});

            text.css({"color":"white"});
            select.removeClass("hide");
            langDropWhite.addClass("hide");
            text.hover( function (e) {
                $(this).toggleClass('hover2', e.type === 'mouseenter');
                text.removeClass('hover1');
            });

        }

    });




    //Landing Page Menu Toggle - Collapse
    //Οταν πατάς το sandwitch για να ανοίξει

    sandwitch.click(function(){
        mobilemenu.toggleClass("menu-mobile-right menu-mobile-left");
        material.toggleClass("material-content material-on");
        //btns.toggleClass("btn-links material-on");
        if($(window).scrollTop()>615 ){
            if(  open ){
                sandwitch.addClass("invert");
            }else {
                sandwitch.removeClass("invert");
            }
        }
        open = !open;
        //console.log('clicked  open=',open,' white=',white);
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

