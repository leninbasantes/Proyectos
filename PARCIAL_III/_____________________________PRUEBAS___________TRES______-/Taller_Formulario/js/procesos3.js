var cedula = document.getElementById("cedula");

function checkInputs() {
  // trim to remove the whitespaces

  var cedulaValue = cedula.value.trim();

  if (cedulaValue == "") {
    setErrorFor(cedula, "La cedula debe ser una valida");
  } else if (!validarCedula(cedulaValue)) {
    setErrorFor(cedula, "La cedula no cumple con lo requerido");
  } else {
    setSuccessFor(cedula);
  }
}
function esNombre(nombre) {
  return /^[a-z ,.'-]+$/i.test(nombre);
}
function esCedula(cedula) {
  return /[0123456789]{1,10}/.test(cedula);
}
function esNumero(numtele) {
  return /[0123456789]{1,10}/.test(numtele);
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

function isEmail(email) {
  return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(
    email
  );
}

function isnumber(numtele) {
  if (numtele == 10) {
    true;
  } else {
    false;
  }
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
