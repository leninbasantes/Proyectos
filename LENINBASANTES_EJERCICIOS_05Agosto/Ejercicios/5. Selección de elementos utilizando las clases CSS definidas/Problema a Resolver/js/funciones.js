// JavaScript Document
let x=$(document);
x.ready(inicializarEventos);

function inicializarEventos()
{
  let x=$("#boton1");
  x.click(fuentePequena);
  x=$("#boton2");
  x.click(fuenteMediana);
  x=$("#boton3");
  x.click(fuenteGrande);
}

function fuentePequena()
{
  let x=$(".noticia");
  x.css("font-size","10px");
}

function fuenteMediana()
{
  let x=$(".noticia");
  x.css("font-size","12px");
}

function fuenteGrande()
{
  let x=$(".noticia");
  x.css("font-size","14px");
}