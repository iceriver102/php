var $ = jQuery.noConflict();
$(document).ready(function(){
	$('.parent').hover(function(){
		$(this).children('div.dropdown-menu').show();
	},function(){
		$(this).children('div.dropdown-menu').hide();
	})
})