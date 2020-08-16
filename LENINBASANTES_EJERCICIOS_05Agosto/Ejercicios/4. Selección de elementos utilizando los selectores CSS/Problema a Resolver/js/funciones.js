// JavaScript Document

let x = $(document);
x.ready(inicializarEventos);

function inicializarEventos() {
  let x = $("#tabla1 tr");
  x.click(cambiarColor);
}

function cambiarColor() {
  let x = $(this);
  x.css("background-color", "#ffff00");
}


