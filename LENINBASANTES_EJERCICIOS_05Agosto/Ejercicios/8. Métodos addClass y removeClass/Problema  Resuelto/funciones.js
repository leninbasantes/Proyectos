// JavaScript Document
let x = $(document);
x.ready(inicializarEventos);

function inicializarEventos() {
  let x = $("#boton1");
  x.click(asociarClase);
  x = $("#boton2");
  x.click(desasociarClase);
}

function asociarClase() {
  let x = $("#descripcion");
  x.addClass("recuadro");
}

function desasociarClase() {
  let x = $("#descripcion");
  x.removeClass("recuadro");
}
