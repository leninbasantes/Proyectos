<?php 
$manejador=fopen("archivo.txt","w+") or die ("Error al crear");

$datos ="Nombres: ".$nombres."; Apellidos: ".$apellidos."; Telefono: ".$telefono."; Cedula: ".$cedula."; Estado Civil: ".$estadocivil."; Genero: ".$genero."; Direccion: ".$direccion."; Email: ".$email;


fwrite($archivo, $datos);
fflush($archivo);
while ($ver = fgets($archivo)) {
    echo $ver;
}

?>
