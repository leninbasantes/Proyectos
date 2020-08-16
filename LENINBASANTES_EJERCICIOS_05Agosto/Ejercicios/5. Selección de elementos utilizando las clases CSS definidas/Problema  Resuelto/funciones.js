// JavaScript Document

let x = $(document);
x.ready(inicializarEventos);

function inicializarEventos() {
  let x = $("#boton1");
  x.click(resaltar);
}

function resaltar() {
  let x = $(".resaltado");
  x.css("background-color", "#ffff00");
}