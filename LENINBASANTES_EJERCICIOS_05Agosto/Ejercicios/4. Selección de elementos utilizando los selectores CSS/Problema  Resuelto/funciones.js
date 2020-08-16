// JavaScript Document

let x=$(document);
x.ready(inicializarEventos);

function inicializarEventos()
{
  let x=$("#boton1");
  x.click(ocultarItem);
}

function ocultarItem()
{
  let x=$("#lista1 li");
  x.hide();
}