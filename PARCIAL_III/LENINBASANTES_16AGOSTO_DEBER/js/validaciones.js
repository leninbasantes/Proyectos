function validar() {
  var cedula;
  var nombre;
  var apellido;
  var ciudad;
  var edad;
  var direccion;
  var curso;
  var tutor;
  var duracion;
  var horasPorDia;
  var teleTutor;
  var sede;
  var ciudadsede;
  var valor;
  var formadePago;
  cedula = document.getElementById("cedula").value;
  nombre = document.getElementById("nombre").value;
  apellido = document.getElementById("apellido").value;
  ciudad = document.getElementById("ciudad").value;
  edad = document.getElementById("edad").value;
  direccion = document.getElementById("direccion").value;
  curso = document.getElementById("curso").value;
  tutor = document.getElementById("tutor").value;
  duracion = document.getElementById("duracion").value;
  horasPorDia = document.getElementById("horas").value;
  teleTutor = document.getElementById("telefono").value;
  sede = document.getElementById("sede").value;
  ciudadsede = document.getElementById("ciudadsede").value;
  valor = document.getElementById("valor").value;
  formadePago = document.getElementById("pago").value;

  exprecion = /^[A-Za-z _]*[A-Za-z][A-Za-z _]*$/;

  if (cedula < 1000000000 || cedula > 9999999999 || isNaN(cedula)) {
    alert("Numero de cedula Incorrecto");
    return false;
  } else if (isNaN(teleTutor)) {
    alert("El telefono ingresado no es un numero");
    return false;
  } else if (!exprecion.test(nombre)) {
    alert("El Nombre solo debe contener letras");
    return false;
  } else if (!exprecion.test(apellido)) {
    alert("El Apellido solo debe contener letras");
    return false;
  } else if (!exprecion.test(ciudad)) {
    alert("La ciudad solo debe contener letras");
    return false;
  } else if (isNaN(edad)) {
    alert("Edad debe ser un numero");
    return false;
  } else if (!exprecion.test(direccion)) {
    alert("La Direccion solo debe contener letras");
    return false;
  } else if (!exprecion.test(curso)) {
    alert("Curso");
    return false;
  } else if (!exprecion.test(tutor)) {
    alert("Nombre del Tutor solo debe tener letras");
    return false;
  } else if (isNaN(duracion)) {
    alert("La duracion del curso debe tener solo numeros");
    return false;
  } else if (isNaN(horasPorDia)) {
    alert("Horas por dia solo debe tener numeros");
    return false;
  } else if (!exprecion.test(sede)) {
    alert("La sede solo debe tener letras");
    return false;
  } else if (!exprecion.test(ciudadsede)) {
    alert("Ciudad de la sede debe tener solo letras");
    return false;
  } else if (isNaN(valor)) {
    alert("El valor debe ser un numero");
    return false;
  } else if (!exprecion.test(formadePago)) {
    alert("Forma de pago debe contener solo letras");
    return false;
  }
}
