<?php
require_once("../config/alumnoDB.php");
require_once("../negocio/RN_alumno.php");

$nombre_alu=$_POST['nombre'];
$edad_alu=$_POST['edad'];
$fnacimineto_alu=$_POST['fnacimiento'];

echo("nombre: $nombre_alu <br>");
echo("edad: $edad_alu <br>");
echo("fnacimiento: $fnacimineto_alu");

 $Obj_Alumno=new AlumnoBT();
  if ($Obj_Alumno->guardar($nombre_alu,$edad_alu,$fnacimiento_alu))
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