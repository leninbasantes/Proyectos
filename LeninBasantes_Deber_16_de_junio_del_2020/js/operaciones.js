// JavaScript Document
 var no =prompt("Ingresa tu nombre");
	validarNom();
    var ape =prompt("Ingresa tu apellido");
   validarApe()
	var num =prompt("Ingresa un numero");
	num=validarNum(num);
    window.location.href = "receptor.php?w1=" + no + "&w2=" + ape + "&w3=" + num; 
	

function validarNum(){
	while(num%1!==0||num<0){
		alert("Numero ingresado incorrecto por favor ingresa otra ves");
		num=prompt("Ingrese nuevamente el numero: ")
	}
	return(num);	
}

function validarNom(){
		while(!isNaN(no)){
			alert("No valido ingrese nuevamne");
              no  = prompt("Ingresa tu nombres");
		}

}
function validarApe(){
			
		while(!isNaN(ape)){
			alert("No valido ingrese nuevamne");
              ape  = prompt('Ingrese tu apellido');
		}
		
}	



	

