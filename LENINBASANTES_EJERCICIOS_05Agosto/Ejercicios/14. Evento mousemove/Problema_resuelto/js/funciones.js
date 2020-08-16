let x = $(document);
x.ready(inicializarEventos);

function inicializarEventos() {
  let x = $(document);
  x.mousemove(moverMouse);
}

function moverMouse(event) {
  let x = $("#corx");
  x.text("coordenada x=" + event.clientX);
  x = $("#cory");
  x.text("coordenada y=" + event.clientY);
}