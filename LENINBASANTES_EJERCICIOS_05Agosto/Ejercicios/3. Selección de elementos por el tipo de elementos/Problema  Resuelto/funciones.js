// JavaScript Document

let x = $(document);
x.ready(inicializarEventos);

function inicializarEventos() {
  let x = $("tr");
  x.click(presionFila);
}

function presionFila() {
  let x = $(this);
  x.css("background-color", "#eeeeee");
}