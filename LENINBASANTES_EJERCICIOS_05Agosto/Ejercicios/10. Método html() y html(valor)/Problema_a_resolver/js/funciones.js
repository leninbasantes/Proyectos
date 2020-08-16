let x = $(document);
x.ready(inicializarEventos);

function inicializarEventos() {
  let x = $("#boton1");
  x.click(presionBoton1);
  x = $("#boton2");
  x.click(presionBoton2);
}

function presionBoton1() {
  let x = $("head");
  alert(x.html());
}
function presionBoton2() {
  let x = $("body");
  alert(x.html());
}