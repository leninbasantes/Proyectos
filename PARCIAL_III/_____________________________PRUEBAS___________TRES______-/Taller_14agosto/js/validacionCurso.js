// JavaScript Document
function validar(){
	var  curso, fechaIni, costo, nHoras;
	curso = document.getElementById("curso").value;
	fechaIni = document.getElementById("fechaIni").value;
	costo = document.getElementById("costo").value;
	nHoras = document.getElementById("nHoras").value;
	
	if(curso == "" || fechaIni == "" || costo == "" || nHoras == "" ){
		alert("Ingresar Todos los Datos!!!");
		return false;
	}
}