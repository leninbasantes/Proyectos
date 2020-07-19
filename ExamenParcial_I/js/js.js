// JavaScript Document
var lafrase=prompt('Ingrese una frase',"");
var arregloF = new Array(lafrase.length);
arregloF = lafrase;
normalF();
document.write("</br>");
inversoF();



function normalF(){
	for(var i=0;i<arregloF.length;i++){
		document.write(arregloF[i]);
	}
}


function inversoF(){
	var aux="";
	for(var i=lafrase.length-1;i>=0;i--){
		aux+=arregloF[i];
		document.write(arregloF[i]);
	}
	
}

function inversocadaF(){
	var aux="";
	for(var i=lafrase.length-1;i>=0;i--){
		aux+=arregloF[i];
		document.write(arregloF[i]);
	}
	
}

