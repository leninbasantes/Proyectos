// JavaScript Document
var tuNombre=prompt('Un saludo. ¿Cual es tu nombre y apellido?',"");
var num=prompt("Ingrese n: ")
num=Number(num);
num=validarNum(num);
alert("Hola " +tuNombre+", encantado de conocerte");
alert("El valor de n es "+num);
document.write(tuNombre+"</br>");
document.write("El numero es: "+num+"</br>");
var matrix = new Array(num);
var matrix1 = new Array(num);
for (var i=0;i<matrix.length;i++){
	matrix[i] = new Array(num);
}
creaMatrix();
arregloNum();
ordenarArre();
document.write("</br>"+matrix1[0]);



function arregloNum(){
		for( i=0;i<matrix.length;i++){
			for(var j=0;j<matrix.length;j++){
				matrix1[i]=matrix[i][j];
				document.write(matrix1[i]+" ");
			}		
}
}

function ordenarArre(){
	var aux;	
	for( i=0;i<matrix1.length;i++){
		for(var j=i+1;j<matrix1.length;j++){
			if(matrix1[i]<matrix1[j]){
				aux=matrix1[i];
				matrix1[i]=matrix1[j];
				matrix1[j]=aux;
				//document.write(matrix1[i]+" ");
			}
		}
}
}


function creaMatrix(){
	var cont=0;
	for( i=0;i<matrix.length;i++){
			for(var j=0;j<matrix.length;j++){
				cont++;
				var valor=prompt("Ingrese el dato"+cont);
				matrix[i][j]=valor;	
				document.write(matrix[i][j]+" 	");
			}
			document.write("</br>");
			
}
}

function validarNum(num){
	while(num%2==0||num>10){
		alert("Numero ingresado incorrecto por favor ingresa un impar y menor a 10");
		num=prompt("Ingrese nuevamente el numero: ")
	}
	return(num);
}


