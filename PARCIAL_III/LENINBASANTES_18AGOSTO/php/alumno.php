<?php
require_once("../config/alumnoDB.php");
require_once("../negocio/RN_alumno.php");

$nombre_alu=$_POST['nombre'];
$apellido_alu=$_POST['apellido'];
$cedula_alu=$_POST['cedula'];
$direccion_alu=$_POST['direccion'];
$numtele_alu=$_POST['numtele'];
$email_alu=$_POST['email'];
$fnaci_alu=$_POST['fnaci'];
$ecivil_alu=$_POST['ecivil'];
$password_alu=$_POST['password'];

echo("nombre: $nombre_alu <br>");
echo("apellido: $apellido_alu <br>");
echo("cedula: $cedula_alu");

 $Obj_Alumno=new AlumnoBT();
  if ($Obj_Alumno->guardar($nombre_alu,$apellido_alu,$cedula_alu,$direccion_alu,$numtele_alu,$email_alu,$fnaci_alu,$ecivil_alu,$password_alu))
  {
   echo "<h1>Los Datos han sido ingresados correctamente</h1>";
   echo '<script languaje="Javascript">location.href="formulario.html"</script>';
	  }
    else
	{
    echo "<center><h1>ERROR no se pudo guardar</h1></center>";
    return false;
   }
?>