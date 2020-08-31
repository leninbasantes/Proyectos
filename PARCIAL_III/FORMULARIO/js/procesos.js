var nombre = document.getElementById("nombre");
var apellido = document.getElementById("apellido");
var cedula = document.getElementById("cedula");
var direccion = document.getElementById("direccion");
var numtele = document.getElementById("numtele");
var fnaci = document.getElementById("fnaci");
var ecivil = document.getElementById("ecivil");
var email = document.getElementById("email");
var password = document.getElementById("password");

function checkInputs() {
  // trim to remove the whitespaces
  var nombreValue = nombre.value.trim();
  var apellidoValue = apellido.value.trim();
  var cedulaValue = cedula.value.trim();
  var direccionValue = direccion.value.trim();
  var numteleValue = numtele.value.trim();
  var fnaciValue = fnaci.value.trim();
  var ecivilValue = ecivil.value.trim();
  var emailValue = email.value.trim();
  var passwordValue = password.value.trim();

  if (nombreValue === "") {
    setErrorFor(nombre, "No puede dejar el usuairo en blanco");
  } else if (!esNombre(nombreValue)) {
    setErrorFor(nombre, "Nombre no valido solo debe ingresar letras");
  } else {
    setSuccessFor(nombre);
  }
  if (apellidoValue == "") {
    setErrorFor(apellido, "No se puede dejar el Apellido en blanco");
  } else if (!esNombre(apellidoValue)) {
    setErrorFor(apellido, "Apellido no valido solo debe ingresar letras");
  } else {
    setSuccessFor(apellido);
  }
  if (cedulaValue == "") {
    setErrorFor(cedula, "La cedula debe ser una valida");
  } else if (!validarCedula(cedulaValue)) {
    setErrorFor(cedula, "La cedula no cumple con lo requerido");
  } else {
    setSuccessFor(cedula);
  }
  if (direccionValue == "") {
    setErrorFor(direccion, "No se puede dejar la direccion en blanco");
  } else {
    setSuccessFor(direccion);
  }
  if (numteleValue == "") {
    setErrorFor(numtele, "No se puede dejar el telefono en blanco");
  } else if (isnumber(numtele) == false) {
    setErrorFor(numtele, "No es un numero Ecuatoriano");
  } else {
    setSuccessFor(numtele);
  }
  if (fnaciValue == "") {
    setErrorFor(fnaci, "No se puede dejar la fecha de nacimiento en blanco");
  } else {
    setSuccessFor(fnaci);
  }
  if (ecivilValue == "") {
    setErrorFor(ecivil, "No se puede dejar la fecha de nacimiento en blanco");
  } else {
    setSuccessFor(ecivil);
  }
  if (emailValue === "") {
    setErrorFor(email, "No puede dejar el email en blanco");
  } else if (!isEmail(emailValue)) {
    setErrorFor(email, "No ingreso un email válido");
  } else {
    setSuccessFor(email);
  }
  if (passwordValue === "") {
    setErrorFor(password, "Password no debe ingresar en blanco.");
  } else {
    setSuccessFor(password);
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
