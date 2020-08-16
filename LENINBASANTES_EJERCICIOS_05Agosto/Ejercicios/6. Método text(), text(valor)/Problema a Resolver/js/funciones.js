// JavaScript Document

let x = $(document);
x.ready(inicializarEventos);

function inicializarEventos() {
  let x = $("#boton1");
  x.click(borrarPrimerTabla);
}

function borrarPrimerTabla() {
  let x = $("#tabla1 td");
  x.text("-");
}