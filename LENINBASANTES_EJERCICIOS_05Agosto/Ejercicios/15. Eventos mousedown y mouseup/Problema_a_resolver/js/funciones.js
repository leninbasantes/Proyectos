let x = $(document);
x.ready(inicializarEventos);

function inicializarEventos() {
  let x = $("#boton1");
  x.mousedown(presionaMouse);
  x.mouseup(sueltaMouse);
  x = $("#boton2");
  x.mousedown(presionaMouse);
  x.mouseup(sueltaMouse);
}

function presionaMouse() {
  $(this).css("background-color", "#fffff0");
}

function sueltaMouse() {
  $(this).css("background-color", "#D4D0C8");
}
