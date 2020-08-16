// JavaScript Document
let x = $(document);
x.ready(inicializarEventos);

function inicializarEventos() {
  let x = $("#parrafos p");
  x.each(resaltarParrafos);
}

function resaltarParrafos() {
  let x = $(this);
  if (x.text().length < 100) {
    x.css("background-color", "#ff0");
  }
}