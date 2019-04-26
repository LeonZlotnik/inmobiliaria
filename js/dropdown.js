// JavaScript Document

$(document).ready(function(){
	$("#mini-menu").click(function(){
		$("#dropdown").css({"visibility":"visible"});
	});
	$("#mini-menu").dblclick(function(){
		$("#dropdown").css({"visibility":"hidden"});
	});
});