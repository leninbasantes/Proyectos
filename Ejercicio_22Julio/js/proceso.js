class vehiculo {
    constructor(marca,tipo_de_automovil,num_placa,duenio,num_puertas,num_ruedas,num_asientos,kilometraje,estado,num_chasis) {
    this.marca = marca;
    this.tipo_de_automovil = tipo_de_automovil;
    this.num_placa = num_placa;
    this.duenio = duenio;
    this.num_puertas = num_puertas;
    this.num_ruedas = num_ruedas;
    this.num_asientos = num_asientos;
    this.kilometraje = kilometraje;
    this.estado = estado;
    this.num_chasis = num_chasis;
  }


  avanzar(){
    return 'El '+this.marca+' esta avanzando';
  }
  parar(){
    return 'El '+this.marca+' esta parado';
  }
  girarIzquierda(){
    return 'El '+this.marca+' esta girando a la izquierda';
  }
  girarDerecha(){
    return 'El '+this.marca+' esta derecha';
  }
  retroceder(){
    return 'El '+this.marca+' esta retrocediendo';
  }
  encender(){
    return 'El '+this.marca+' esta encendiendo';
  }
}
