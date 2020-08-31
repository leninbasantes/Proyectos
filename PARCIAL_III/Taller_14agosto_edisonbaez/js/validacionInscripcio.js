// JavaScript Document
function validar(){
	var cedula, nombreAlumno, curso, formaPago, fechaInscripcion, estado;
	cedula = document.getElementById("cedula").value;
	nombreAlumno = document.getElementById("nombreAlumno").value;
	curso = document.getElementById("curso").value;
	formaPago = document.getElementById("formaPago").value;
	fechaInscripcion = document.getElementById("fechaInscripcion").value;
	estado = document.getElementById("estado").value;
	
	if(cedula == "" || nombreAlumno == "" || curso == "" || formaPago == "" || fechaInscripcion == "" || estado == ""){
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
