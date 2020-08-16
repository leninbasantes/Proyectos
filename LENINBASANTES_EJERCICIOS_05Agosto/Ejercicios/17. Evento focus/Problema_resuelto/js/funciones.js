let x = $(document);
x.ready(inicializarEventos);

function inicializarEventos() {
  let x = $("#buscar");
  x.focus(tomaFoco);
}

function tomaFoco() {
  let x = $("#buscar");
  x.attr("value", "");
}