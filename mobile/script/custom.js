// JavaScript Document


// $(window).load(function() {
	//$('.flexslider').flexslider();
// });
//
$(document).ready(function (){
//	$('#tweets').tweetable({username: 'iEnabled', time: true, limit: 5, replies: true, position: 'append'});//
	
	$('.section-heading-top a').click(function(){
		 $('html, body').animate({scrollTop: '0px'}, 1000, "easeInOutExpo");
		 return false;
	});
	
	$('.demo').click(function(){
		return false;
	});
	
/*	var myPhotoSwipe = $("#gallery a").photoSwipe({ 
		enableMouseWheel: false, 
		enableKeyboard: false, 
		allowUserZoom: false, 
		loop:false, 
		cacheMode:Code.PhotoSwipe.Cache.Mode.aggressive 
	});
*/	
	$(".scrollto").click(function() {
		$.scrollTo($($(this).attr("href")), {
			duration: 1000,
			axis:'y',
			easing: 'easeInOutExpo'
		});
		window.location.hash = $(this).attr("href");
		return false;
	});
	
	$(".notification-quit-red").click(function(){
	  $(".notification-box-red").fadeOut("slow");
	  return false;
	});
	
	$(".notification-quit-green").click(function(){
	  $(".notification-box-green").fadeOut("slow");
	  return false;
	});
	
	$(".notification-quit-yellow").click(function(){
	  $(".notification-box-yellow").fadeOut("slow");
	  return false;
	});
	
	$(".notification-quit-blue").click(function(){
	  $(".notification-box-blue").fadeOut("slow");
	  return false;
	});
});

$(window).load(function(){
   fitImageToTop();
});

$(window).resize(function(){
   fitImageToTop();
});

function fitImageToTop(){
   height = $('#slideshow2 > img:first-child').height() + $('.top-logo').height() +45;
   $('#top-box').css('height',height);
}