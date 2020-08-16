let x = $(document);
x.ready(inicializarEventos);

function inicializarEventos() {
  let x = $("a");
  x.mouseover(entraMouse);
  x.mouseout(saleMouse);
}

function entraMouse() {
  $(this).css("background-color", "#ff0");
}

function saleMouse() {
  $(this).css("background-color", "#fff");
}