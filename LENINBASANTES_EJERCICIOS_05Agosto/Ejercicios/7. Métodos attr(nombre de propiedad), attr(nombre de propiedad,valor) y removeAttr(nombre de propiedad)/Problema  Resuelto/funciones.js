// JavaScript Document

let x = $(document);
x.ready(inicializarEventos);

function inicializarEventos() {
  let x = $("#boton1");
  x.click(agregarPropiedadBorder);
  x = $("#boton2");
  x.click(recuperarPropiedadBorder);
  x = $("#boton3");
  x.click(eliminarPropiedadBorder);
}

function agregarPropiedadBorder() {
  let x = $("#tabla1");
  x.attr("border", "1");
}

function recuperarPropiedadBorder() {
  let x = $("#tabla1");
  if (x.attr("border") != undefined)
    alert(x.attr("border"));
  else
    alert("No está definida la propiedad border en la tabla");
}

function eliminarPropiedadBorder() {
  let x = $("#tabla1");
  x.removeAttr("border");
}