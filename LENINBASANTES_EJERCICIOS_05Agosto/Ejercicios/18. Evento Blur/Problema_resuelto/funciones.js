// JavaScript Document
let x = $(document);
x.ready(inicializarEventos);

function inicializarEventos() {
  let x = $("#text1");
  x.blur(pierdeFoco);
}

function pierdeFoco() {
  let x = $(this);
  let cadena = x.val();
  if (cadena.length == 0)
    alert("No ingresó datos");
}