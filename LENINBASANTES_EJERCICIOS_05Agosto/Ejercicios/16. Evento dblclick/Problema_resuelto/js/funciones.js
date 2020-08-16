let x = $(document);
x.ready(inicializarEventos);

function inicializarEventos() {
  let x = $("#recuadro");
  x.dblclick(dobleClic);
}

function dobleClic() {
  let x = $(this);
  x.hide()
}