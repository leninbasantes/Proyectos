// JavaScript Document

let x = $(document);
x.ready(inicializarEventos);

function inicializarEventos() {
  let x;
  x = $("#parrafo1");
  x.click(presionParrafo)
}

function presionParrafo() {
  alert("Se presionó el párrafo");
}