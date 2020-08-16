// JavaScript Document
let x=$(document);
x.ready(inicializarEventos);

function inicializarEventos()
{
  let x=$("#descripcion1");
  x.click(reducirOpacidadRecuadro);
}

function reducirOpacidadRecuadro()
{
  let x=$("#descripcion1");
  x.fadeTo("slow",0.20,mostrarRecuadro);
}

function mostrarRecuadro()
{
  let x=$("#descripcion2");
  x.show("slow");
}