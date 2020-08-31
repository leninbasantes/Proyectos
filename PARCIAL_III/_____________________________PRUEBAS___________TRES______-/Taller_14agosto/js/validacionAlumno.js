// JavaScript Document
function validar(){
	var  nombre, apellido, direccion, telefono, email, cedula,contraseña,eCivil,fNacimiento;	
	nombre = document.getElementById("nombre").value;
	apellido = document.getElementById("apellido").value;
	direccion = document.getElementById("direccion").value;
	telefono = document.getElementById("telefono").value;
	email = document.getElementById("email").value;
	cedula = document.getElementById("cedula").value;
	contraseña = document.getElementById("contraseña").value;
	eCivil = document.getElementById("eCivil").value;
	fNacimiento = document.getElementById("fNacimiento").value;
	
	if(nombre == "" || apellido == "" || direccion == "" || telefono == "" || email == "" || cedula == "" || contraseña == "" || eCivil == "" || fNacimiento == ""){
		alert("Ingresar Todos los Datos!!!");
		return false;
	}
}

function validarCedula() {
        var cedula = document.getElementById("cedula").value;
        var total = 0;
        var longitud = cedula.length;
        var longcheck = longitud - 1;

        if (cedula != "" && longitud == 10)
		{
          for(var i = 0; i < longcheck; i++)
		  {
            if (i%2 == 0) 
			{
              var aux = cedula.charAt(i) * 2;
              if (aux > 9) aux -= 9;
              total += aux;
            } else {
              total += parseInt(cedula.charAt(i)); // parseInt o concatenará en lugar de sumar
            }
          }

    	  total = total % 10 ? 10 - total % 10 : 0;

          if (cedula.charAt(longitud-1) != total ) 
		  {
			alert("Cédula Invalida");
            document.getElementById("cedula").value = "";
          }
        }else{
			alert("Cédula Invalida");
			document.getElementById("cedula").value = "";
		}
}

function validarFecha(){
	var fActual = new Date();
	var fecha = document.getElementById("fNacimiento").value;
	
	fActual = fActual.getDate() + "/" + (fActual.getMonth() +1) + "/" + fActual.getFullYear();
	console.log(fActual);
	
	if (fecha > fActual)
	{	
		alert("Fecha Incorrecta");
		document.getElementById("fNacimiento").value = "";
		console.log("hola");
	}
}

