let x = $(document);
x.ready(inicializarEventos);

function inicializarEventos() {
  let x = $("#text1");
  x.focus(tomaFoco);
  x = $("#text2");
  x.focus(tomaFoco);
}

function tomaFoco() {
  let x = $(this);
  x.css("color", "#f00");
}
