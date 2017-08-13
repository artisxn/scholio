
$(document).ready(function($) {

    //Landing Page Menu Toggle - Collapse
    var itempressed = $('.sc-landing-menu-mobile-item-pressed');
    var menuopen = $('.sc-landing-menu-sandwitch');
    var menuclose = $('.sc-landing-menu-mobile-close');
    var mobilemenu =$('.sc-landing-menu-mobile-holder');
    var mobilemenu2 =$('.menu-mobile-holder');

    //Οταν θέλω να ανοιξω το μενου

    menuopen.click(function(){
        mobilemenu.css({"display":"block"});


        //mobilemenu2.toggleClass("menu-mobile-right menu-mobile-left");
    });


    //Οταν θέλω να κλείσω το μενου

    menuclose.click(function(){
        mobilemenu.css({"display":"none"});
    });

    //Οταν θέλω να πατησω σε ενα αντικειμενο του μενου

    itempressed.click(function(){
        mobilemenu.css({"display":"none"});
    });



    $("#filter-btn").click(function(){
        //$(".main-results").toggleClass("left left-240");
        $("#mobFilt").toggleClass("left--300 left");
    });

    $("#close-btn").click(function(){
        //$(".main-results").toggleClass("left left-240");
        $("#mobFilt").toggleClass("left--300 left");
    });

    $("#query").keypress(function (e) {
        if (e.which == 13) {
            //$(".main-results").toggleClass("left left-240");
            $("#mobFilt").toggleClass("left--300 left");

        }

    });

});

