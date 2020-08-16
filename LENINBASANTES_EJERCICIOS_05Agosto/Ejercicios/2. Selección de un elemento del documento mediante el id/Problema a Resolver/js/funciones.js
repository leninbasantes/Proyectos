// JavaScript Document
let x = $(document);
x.ready(inicializarEventos);

function inicializarEventos() {
  let x = $("#fila1");
  x.click(presionFila1);
  x = $("#fila2");
  x.click(presionFila2);
}

function presionFila1() {
  let x = $("#fila1");
  x.css("background-color", "#eeeeee");
}

function presionFila2() {
  let x = $("#fila2");
  x.css("background-color", "#eeeeee");
}