// JavaScript Document
let x = $(document);
x.ready(inicializarEventos);

function inicializarEventos() {
  let x = $("#menu a");
  x.click(presionEnlace);
}

function presionEnlace() {
  let pagina = $(this).attr("href");
  let x = $(document);
  x.ajaxStart(inicioEnvio);
  x.ajaxStop(finEnvio);
  x = $("#detalles");
  x.load(pagina);
  return false;
}

function inicioEnvio() {
  let x = $("#avance");
  x.html('<img src="cargando.gif">');
}

function finEnvio() {
  let x = $("#avance");
  x.html('');
}