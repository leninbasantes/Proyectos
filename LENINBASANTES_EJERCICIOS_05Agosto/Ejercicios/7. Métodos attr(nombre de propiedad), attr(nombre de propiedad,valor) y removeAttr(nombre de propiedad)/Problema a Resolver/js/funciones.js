// JavaScript Document

let x = $(document);
x.ready(inicializarEventos);

function inicializarEventos() {
  let x = $("#boton1");
  x.click(hipervinculoGoogle);
  x = $("#boton2");
  x.click(hipervinculoYahoo);
  x = $("#boton3");
  x.click(hipervinculoMsn);
}

function hipervinculoGoogle() {
  let x = $("a");
  x.attr("href", "http://www.google.com");
  x.text("Google");
}

function hipervinculoYahoo() {
  let x = $("a");
  x.attr("href", "http://www.yahoo.com");
  x.text("Yahoo");
}

function hipervinculoMsn() {
  let x = $("a");
  x.attr("href", "http://www.msn.com");
  x.text("Msn");
}