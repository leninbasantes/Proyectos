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


$array[0]=$_POST['nombre'];
$array[1]=$_POST['apellido'];
$array[2]=$_POST['cedula'];
$array[3]=$_POST['direccion'];
$array[4]=$_POST['numtele'];
$array[5]=$_POST['email'];
$array[6]=$_POST['fnaci'];
$array[7]=$_POST['ecivil'];
$array[8]=$_POST['password'];

 $Obj_Alumno=new AlumnoBT();
  if ($Obj_Alumno->guardar($nombre_alu,$apellido_alu,$cedula_alu,$direccion_alu,$numtele_alu,$email_alu,$fnaci_alu,$ecivil_alu,$password_alu))
  {
   echo "<h1>Los Datos han sido ingresados correctamente</h1>";
   echo "<script>location.href='../formulario.html'</script>";
	  }
else
	{
    echo "<center><h1>ERROR no se pudo guardar</h1></center>";
    return false;
   }

// $sqlb="SELECT * FROM alumno WHERE 'alu_cedula'='$cedula'"




?>