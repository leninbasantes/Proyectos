// JavaScript Document
let x = $(document);
x.ready(inicializarEventos);

function inicializarEventos() {
  let x = $("#descripcion1");
  x.click(ocultarRecuadro);
}

function ocultarRecuadro() {
  let x = $("#descripcion1");
  x.hide("slow", mostrarRecuadro);
}

function mostrarRecuadro() {
  let x = $("#descripcion2");
  x.show("slow");
}