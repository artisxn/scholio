
$(document).ready(function($) {

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


    ///////////
    /*

     */
    ///////////


    //$('.selectpicker').selectpicker({
    //    iconBase: 'fa',
    //    tickIcon: 'fa-check'
    //});


    $("#filter-btn").click(function(){
        $("#main-results").toggleClass("left left-240");
        $("#mobFilt").toggleClass("left--300 left");
    });

    $("#close-btn").click(function(){
        $("#main-results").toggleClass("left left-240");
        $("#mobFilt").toggleClass("left--300 left");
    });

});

