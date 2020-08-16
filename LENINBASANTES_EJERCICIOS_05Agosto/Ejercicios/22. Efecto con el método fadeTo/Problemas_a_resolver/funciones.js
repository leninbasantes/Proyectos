// JavaScript Document
let x = $(document);
x.ready(inicializarEventos);

function inicializarEventos() {
  let x = $("#boton1");
  x.click(reducirOpacidadRecuadro);
  x = $("#boton2");
  x.click(aumentarOpacidadRecuadro);
}

function reducirOpacidadRecuadro() {
  let x = $("#descripcion");
  x.fadeTo("slow", 0.5);
}

function aumentarOpacidadRecuadro() {
  let x = $("#descripcion");
  x.fadeTo("slow", 1);
}