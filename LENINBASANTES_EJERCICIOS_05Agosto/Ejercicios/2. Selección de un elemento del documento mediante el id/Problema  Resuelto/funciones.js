// JavaScript Document

let x = $(document);
x.ready(inicializarEventos);

function inicializarEventos() {
  let x = $("#titulo1");
  x.click(presionTitulo1)
  x = $("#titulo2");
  x.click(presionTitulo2)
}

function presionTitulo1() {
  let x = $("#titulo1");
  x.css("color", "#ff0000");
  x.css("background-color", "#ffff00");
  x.css("font-family", "Courier");
}

function presionTitulo2() {
  let x = $("#titulo2");
  x.css("color", "#ffff00");
  x.css("background-color", "#ff0000");
  x.css("font-family", "Arial");
}