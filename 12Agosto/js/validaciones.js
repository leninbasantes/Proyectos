var nombres = document.getElementById("text1");
var apellidos = document.getElementById("text2");
var telefono = document.getElementById("text3");
var cedula = document.getElementById("text4");
var estadocivil = document.getElementById("text5");
var genero = document.getElementById("text6");
var direccion = document.getElementById("text7");
var email = document.getElementById("text8");

function validar() {
  var validacion = true;
  if (nombres.value.length == "") {
    validacion = false;
  }
  if (direccion.value.length == "") {
    validacion = false;
  }
  if (estadocivil.value == "") {
    validacion = false;
  }
  if (genero.value == "") {
    validacion = false;
  }
  if (!validacion) {
    alert("Algunos campos no están correctos, vuelva a revisarlos");
  }
  return validacion;
}
