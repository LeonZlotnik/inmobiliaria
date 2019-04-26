// JavaScript Document

$(document).ready(function(){
	$("#lee").click(function(){
		$(".ocultar").show("slow");
	});
	$("#lee").dblclick(function(){
		$(".ocultar").hide("fast");
	});
});