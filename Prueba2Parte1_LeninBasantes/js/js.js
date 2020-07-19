// JavaScript Document
var tuNombre=prompt('Un saludo. ¿Cual es tu nombre y apellido?',"");
var num=prompt("Ingrese n: ")
num=Number(num);
num=validarNum(num);
alert("Hola " +tuNombre+", encantado de conocerte");
alert("El valor de n es "+num);
crearMatri();



function validarNum(num){
	while(num%2==0){
		alert("Numero ingresado incorrecto por favor ingresa un impar");
		num=prompt("Ingrese nuevamente el numero: ")
	}
	return(num);
}

function crearMatri(){
var matrix = new Array(num);
for (var i=0;i<matrix.length;i++){
	matrix[i] = new Array(num);
}

	var num1=1;
	for(i=0;i<matrix.length;i++){
		for(var j=0;j<matrix.length;j++){
			matrix[i][j]=(num1);
			document.write(matrix[i][j]+" ");
			if(num1==matrix.length){
				num1=num1+matrix.length;
				
			}else if(num1==matrix.length+1){
				num1=num1+matrix.length;
			}
			else if(num1<matrix.length){
				num1++;	
			}else if(num1>matrix.length){
				num1--;
			} 	
		}
	document.write("<br>");
	}
}

