$(function(){
	"use strict";


	// Initialize WOW.js plugin
	// var wow = new WOW({
	// 	mobile: false
	// });
	// wow.init();



	// Initialize Countdown Plugin
	$('#countdown').countdown('2018/05/30 00:00:00', function(event) {

		$(this).html(event.strftime('<div>%m<span>months</span></div> <div>%d<span>days</span></div> <div>%H<span>Hours</span></div> <div>%M<span>minutes</span></div> <div>%S<span>seconds</span></div>'));

	});



	// ScrollDown Function
	$('.scroll-down').on('click', function(e){
		e.preventDefault();
		var _offset = $(this).closest('.section').next('.section').offset().top;
		$('body, html').animate({
			scrollTop: _offset
		}, 1000);
	});



	//Scrollspy Function
	$(document).on("scroll", onScroll);
	function onScroll(event){
		var scrollPos = $(document).scrollTop();
		$('#nav > li > a').each(function () {
			var currLink = $(this);
			var refElement = $(currLink.attr("href"));
			if (refElement.position().top <= scrollPos && refElement.position().top + refElement.outerHeight() > scrollPos) {
				$('#nav > li > a').removeClass("active");
				currLink.addClass("active");
			}
			else{
				currLink.removeClass("active");
			}
		});
	}



	// Initialize Smoothscroll Plugin
	smoothScroll.init({
		speed: 1000,
		easing: 'easeInOutCubic',
		offset: 0,
		updateURL: false
	});



	// Mailchimp Form - Ajax
	$('#mc-form').ajaxChimp();



	// Contact Form
	function isJSON(val){
		var str = val.replace(/\\./g, '@').replace(/"[^"\\\n\r]*"/g, '');
		return (/^[,:{}\[\]0-9.\-+Eaeflnr-u \n\r\t]*$/).test(str);
	}
	$('#contact-form').validator().on('submit', function (e) {

		if (!e.isDefaultPrevented()) {
			// If there is no any error in validation then send the message

			e.preventDefault();
			var $this = $(this),

				//You can edit alerts here
				alerts = {
					success: "Message Sent! We'll be in touch as soon as possible",
					error: "Oops! Sorry, an error occurred. Try again."
				};
		}
	});



	// Preloader
	$(window).on('load', function(){
		$('body').addClass('loaded');
	});



	// Particleground Plugin
	// if( $.isFunction($.fn.particleground) ){
	// 	$('#particle-bg').particleground({
	// 		dotColor: 'rgba(255,255,255,.25)',
  //                       maxSpeedX: 25,
	// 		lineColor: 'rgba(255,255,255,.15)'
	// 	});
	// }



	// Youtube Video as Background
	// if( $.isFunction($.fn.YTPlayer) ){
	// 	$('#youtube-bg').YTPlayer();
	// }



	// Initialize Slick Slider Plugin
	if( $.isFunction($.fn.slick) ){

		$('#slider-bg').slick({
			autoplay: true,
			speed: 900,
			arrows:false,
			fade: true,
			autoplaySpeed: 2500
		});

	  }

     });
