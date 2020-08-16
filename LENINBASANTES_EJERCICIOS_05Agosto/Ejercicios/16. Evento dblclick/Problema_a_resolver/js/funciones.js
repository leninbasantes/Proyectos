let x = $(document);
x.ready(inicializarEventos);

function inicializarEventos() {
  let x = $("#recuadro");
  x.dblclick(dobleClic);
}

let estado = "grande";
function dobleClic() {
  let x = $(this);
  if (estado == "grande") {
    $(this).css("width", "250px");
    $(this).css("height", "250px");
    estado = "chico";
  }
  else {
    $(this).css("width", "800px");
    $(this).css("height", "70px");
    estado = "grande";
  }
}