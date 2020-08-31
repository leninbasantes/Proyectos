var nombrecurso = document.getElementById("nombrecurso");
var fechacurso = document.getElementById("fcurso");
var horacurso = document.getElementById("hcurso");
var cocurso = document.getElementById("cocurso");

function verificar() {
  var nombrecursoalue = nombrecurso.value.trim();
  var fechacursoValue = fechacurso.value.trim();
  var horacursoValue = horacurso.value.trim();
  var cocursoValue = cocurso.value.trim();

  if (nombrecursoalue === "") {
    setErrorFor(nombrecurso, "No puede dejar el nombre del curso en blanco");
  } else {
    setSuccessFor(nombrecurso);
  }

  if (fechacursoValue === "") {
    setErrorFor(fechacurso, "No puede dejar la fecha en blanco");
  } else {
    setSuccessFor(fechacurso);
  }

  if (horacursoValue === "") {
    setErrorFor(horacurso, "No puede dejar la hora en blanco");
  } else {
    setSuccessFor(horacurso);
  }

  if (cocursoValue === "") {
    setErrorFor(cocurso, "No puede dejar el costo en blanco");
  } else {
    setSuccessFor(cocurso);
  }
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
