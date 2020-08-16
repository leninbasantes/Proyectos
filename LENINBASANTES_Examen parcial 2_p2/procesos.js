document.querySelector("#boton").addEventListener("click", traerDatos);

function traerDatos() {
  const xhttp = new XMLHttpRequest();
  xhttp.open("GET", "archivos.json", true);
  xhttp.send();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      console.log(this.responseText);
      var datos = JSON.parse(this.responseText);
      var res = document.querySelector("#res");
      res.innerHTML = "";

      for (var item of datos) {
        res.innerHTML += `
        <tr>
                    <th>Pedido para el señor ${item.destinatario}. El pedido se compone de una ${item.articulo}. A entregar en la ${item.direccion} el día ${item.fecha}.
                </tr>
        `;
      }
    }
  };
}
