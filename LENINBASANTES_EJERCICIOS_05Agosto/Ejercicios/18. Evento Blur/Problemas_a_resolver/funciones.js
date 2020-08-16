// JavaScript Document
let x = $(document);
x.ready(inicializarEventos);

function inicializarEventos() {
  let x = $("#text1");
  x.focus(tomaFoco);
  x.blur(pierdeFoco);
  x = $("#text2");
  x.focus(tomaFoco);
  x.blur(pierdeFoco);
}

function tomaFoco() {
  let x = $(this);
  x.css("color", "#f00");
}

function pierdeFoco() {
  let x = $(this);
  x.css("color", "#00f");
}