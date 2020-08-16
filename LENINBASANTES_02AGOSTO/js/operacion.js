document.querySelector("#boton").addEventListener("click", traerDatos);
document.querySelector("#boton1").addEventListener("click", traerDatosuno);
document.querySelector("#boton2").addEventListener("click", traerDatosdos);
document.querySelector("#boton3").addEventListener("click", traerDatostres);
document.querySelector("#boton4").addEventListener("click", traerDatoscuatro);

function traerDatos() {
  const xhttp = new XMLHttpRequest();
  xhttp.open("GET", "JSON/informacion.json", true);
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
                    <th>Sr/a. ${item.nombre}</th>
                    <th>Altura: ${item.altura}m</th>
                </tr>
        `;
      }
    }
  };
}

function traerDatosuno() {
  const xhttp = new XMLHttpRequest();
  xhttp.open("GET", "JSON/informacion.json", true);
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
                      <th>Sr/a. ${item.nombre}</th>
                      <th>Peso: ${item.peso}Kg</th>
                  </tr>
          `;
      }
    }
  };
}

function traerDatosdos() {
  const xhttp = new XMLHttpRequest();
  xhttp.open("GET", "JSON/informacion.json", true);
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
                        <th>Sr/a. ${item.nombre}</th>
                        <th>Pasa Tiempo:&nbsp&nbsp&nbsp&nbsp ${item.pasatiempos}</th>
                    </tr>
            `;
      }
    }
  };
}

function traerDatostres() {
  const xhttp = new XMLHttpRequest();
  xhttp.open("GET", "JSON/informacion.json", true);
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
                        <th>Sr/a. ${item.nombre}</th>
                        <th>Estado Civil: ${item.estado}</th>
                    </tr>
            `;
      }
    }
  };
}

function traerDatoscuatro() {
  const xhttp = new XMLHttpRequest();
  xhttp.open("GET", "JSON/informacion.json", true);
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
                        <th>Sr/a. ${item.nombre}</th>
                        <th>Direccion: ${item.direccion.calle}<br>Numero: ${item.direccion.numero}<br>Pais: ${item.direccion.pais}</th>
                    </tr>
            `;
      }
    }
  };
}
