







// Sidebar Open & Close
jQuery(document).ready(function($){

    var main_content = $('.sc-main-content-holder');


    var sidebar =   $('.sc-sidebar-holder');
    var minisidebar = $('.sc-mini-sidebar-holder');


    var sidebarmobile = $('.sc-sidebar-mobile-holder');
    var minisidebarmobile = $('.sc-mini-sidebar-mobile-holder');


    var mute_sidebar =   $('.sc-header-mute-icon');

    (function($, viewport){
                //Εαν είμαστε σε μαγάλη οθονη π.χ lg ή md
                if(viewport.current() == 'lg' || viewport.current() == 'md'){
                    mute_sidebar.click(function(){
                        //Οταν θέλω να κλείσω το sidebar
                        if(sidebar.css('display') == 'block'){
                            sidebar.css({"display":"none"});
                            main_content.css({"margin-left":"60px","width":"calc( 100% - 60px )"});
                            minisidebar.css({"display":"block"});
                        }else{
                            sidebar.css({"display":"block"});
                            main_content.css({"margin-left":"250px","width":"calc( 100% - 250px )"});
                            minisidebar.css({"display":"none"});
                            minisidebarmobile.css({"display":"none"});
                        }
                    });
                }
                //Εαν είμαστε σε μικρή οθόνη π.χ xs ή sm
                else{
                    mute_sidebar.click(function(){
                        //Οταν θέλω να ανοιξω το sidebar
                        if(minisidebarmobile.css('display') == 'block'){

                            minisidebarmobile.css({"display":"none"});
                            sidebarmobile.css({"display":"block"});
                            main_content.css({"margin-left":"250px","width":"calc( 100% - 250px )"});

                        }else{
                            minisidebarmobile.css({"display":"block"});
                            sidebarmobile.css({"display":"none"});
                            main_content.css({"margin-left":"60px","width":"calc( 100% - 60px )"});
                        }
                    });
                }

        if(viewport.is('sm')) {
            sidebar.css({"margin-left":"60px","width":"calc( 100% - 60px )"})
        }

    })(jQuery, ResponsiveBootstrapToolkit);

});