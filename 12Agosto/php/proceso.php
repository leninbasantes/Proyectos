<?php 



$manejador=fopen("archivo.txt","w+") or die ("Error al crear");

$nombres=$_REQUEST['text1'];
$apellidos=$_REQUEST['text2'];
$telefono=$_REQUEST['text3'];
$cedula=$_REQUEST['text4'];
$estadocivil=$_REQUEST['text5'];
$genero=$_REQUEST['text6'];
$direccion=$_REQUEST['text7'];
$email=$_REQUEST['text8'];

$datos ="Nombres: ".$nombres."; Apellidos: ".$apellidos."; Telefono: ".$telefono."; Cedula: ".$cedula."; Estado Civil: ".$estadocivil."; Genero: ".$genero."; Direccion: ".$direccion."; Email: ".$email;
fwrite($manejador,$datos); 
fclose($manejador);

header("Location: ../html/formulario2.html");


?>

