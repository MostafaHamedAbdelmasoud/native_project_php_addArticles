$(document).ready(function(){
	
	"use strict";
	new WOW().init();

	$("a").click(
	function()
	{
	var e=$(this).attr('href'); 
	$("body").animate({
		scrollTop:$(e).offset().top
	},1000);
	}
	);
	
	$(window).scroll(function(){
		var h =$(window).scrollTop();
		if (h>=120)
			{
				$(".navbar-inverse").css({
					backgroundColor:'white'
				});/*#f05f40*/ 
				$(".navbar-brand").css({
					color:'#f05f40'
				});
			}
		else 
			{
				$(".navbar-inverse").css({
					backgroundColor:'transparent'
				});
				$(".navbar-brand").css({
					color:'white'
				});
			}
	});
	
});