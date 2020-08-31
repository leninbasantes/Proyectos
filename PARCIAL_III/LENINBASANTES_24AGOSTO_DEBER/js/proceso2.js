var idcurso = document.getElementById("idcurso");
var nombrecurso = document.getElementById("nombrecurso");
var formapago = document.getElementById("formapago");

function verificardos() {
  var idcursoValue = idcurso.value.trim();
  var nombrecursoValue = nombrecurso.value.trim();
  var formapagoValue = formapago.value.trim();

  if (idcursoValue === "") {
    setErrorFor(idcurso, "No puede dejar el nombre del curso en blanco");
  } else if (!validarCedula(idcursoValue)) {
    setErrorFor(idcurso, "La cedula no es valida");
  } else {
    setSuccessFor(idcurso);
  }

  if (nombrecursoValue === "") {
    setErrorFor(nombrecurso, "No puede dejar la fecha en blanco");
  } else {
    setSuccessFor(nombrecurso);
  }

  if (formapagoValue === "") {
    setErrorFor(formapago, "No puede dejar la hora en blanco");
  } else {
    setSuccessFor(formapago);
  }
}

function esNombre(nombre) {
  return /^[a-z ,.'-]+$/i.test(nombre);
}

function setErrorFor(input, message) {
  var formControl = input.parentElement;
  var small = formControl.querySelector("small");
  formControl.className = "grupo error";
  small.innerText = message;
}

function setSuccessFor(input) {
  var formControl = input.parentElement;
  formControl.className = "grupo success";
}

function validarCedula(cedula) {
  var total = 0;
  var longitud = cedula.length;
  var longcheck = longitud - 1;

  if (cedula != "" && longitud == 10) {
    for (var i = 0; i < longcheck; i++) {
      if (i % 2 == 0) {
        var aux = cedula.charAt(i) * 2;
        if (aux > 9) aux -= 9;
        total += aux;
      } else {
        total += parseInt(cedula.charAt(i)); // parseInt o concatenará en lugar de sumar
      }
    }

    total = total % 10 ? 10 - (total % 10) : 0;

    if (cedula.charAt(longitud - 1) != total) {
      return false;
    } else {
      return true;
    }
  } else {
    return false;
  }
}
