// JavaScript Document
let x = $(document);
x.ready(inicializarEventos);

function inicializarEventos() {
  let x = $("#boton1");
  x.click(ocultarRecuadro);
  x = $("#boton2");
  x.click(mostrarRecuadro);
}

function ocultarRecuadro() {
  let x = $("#descripcion");
  x.fadeOut("slow");
}

function mostrarRecuadro() {
  let x = $("#descripcion");
  x.fadeIn("slow");
}