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
  let x = $("th");
  x.addClass("titulo");
  x = $("td");
  x.addClass("cuerpo");
}

function desasociarClase() {
  let x = $("th");
  x.removeClass("titulo");
  x = $("td");
  x.removeClass("cuerpo");
}