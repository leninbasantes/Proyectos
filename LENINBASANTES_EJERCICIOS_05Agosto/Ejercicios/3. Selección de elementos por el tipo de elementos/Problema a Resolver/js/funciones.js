// JavaScript Document

let x = $(document);
x.ready(inicializarEventos);

function inicializarEventos() {
  let x = $("li");
  x.click(presionItem);
}

function presionItem() {
  let x = $(this);
  x.hide();
}