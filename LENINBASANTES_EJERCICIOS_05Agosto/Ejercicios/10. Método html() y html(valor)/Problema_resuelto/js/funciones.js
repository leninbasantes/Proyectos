let x = $(document);
x.ready(inicializarEventos);

function inicializarEventos() {
  let x = $("#boton1");
  x.click(presionBoton1);
  x = $("#boton2");
  x.click(presionBoton2);
}

function presionBoton1() {
  let x = $("#formulario");
  x.html('<form>Ingrese nombre:<input type="text" id = "nombre" >' +
    '<br>Ingrese clave:<input type="text" id="clave"><br>' +
    '<input type="submit" value="confirmar"></form>');
}

function presionBoton2() {
  let x = $("#formulario");
  alert(x.html());
}