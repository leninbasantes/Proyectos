// JavaScript Document

$(document).ready(function(){
	$.getJSON('ajax.json',function(data){
		for(i in data.users){
			$('#usuarios').append("<option>"+data.users[i].nombre+"</option>")
		}
			  
	});
});
function supplant(){
	$.getJSON('ajax.json',function(data){
		for(i in data.users){
			$('#usuariosSupplant').append("<option>"+data.users[i].nombre.replaceAll("a","o")+"</option>")
		}
			  
	});
}