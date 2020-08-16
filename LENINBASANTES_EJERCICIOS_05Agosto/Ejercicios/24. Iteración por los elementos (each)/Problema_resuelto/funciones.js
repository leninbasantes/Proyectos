// JavaScript Document
let x=$(document);
x.ready(inicializarEventos);

function inicializarEventos()
{
  let x=$("a");
  x.each(resaltarParrafos);
}

function resaltarParrafos()
{
  let x=$(this);
  let url=x.attr("href");
  url=url.toLowerCase();
  if (url.indexOf(".ar")!=-1)
  {
    x.css("background-color","#ff0");
  }
}