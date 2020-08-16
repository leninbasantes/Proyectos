let x = $(document);
x.ready(inicializarEventos);

function inicializarEventos() {
  let x = $("strong");
  x.click(ocultarPalabra);
}

function ocultarPalabra() {
  $(this).hide();
}