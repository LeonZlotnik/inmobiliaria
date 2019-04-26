// JavaScript Document

$(document).ready(function(){
	$("#envio").click(function(){
		var respuesta;
		respuesta = confirm("¿Desea enviar esta información?");
		if(respuesta){
			alert("Su información se ha enviado");
		}
		else{
			alert("Envío cancelado");
		}
	});
});