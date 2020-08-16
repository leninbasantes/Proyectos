let x = $(document);
x.ready(inicializarEventos);

function inicializarEventos() {
  let x = $("#recuadro");
  x.mousemove(moverMouse);
  x = $("#recuadro");
  x.mouseout(saleMouse);
}

function moverMouse(event) {
  let x = $("#coordenada");
  x.text("(" + event.clientX + "," + event.clientY + ")");
}

function saleMouse() {
  let x = $("#coordenada");
  x.text("Flecha fuera del recuadro");
}