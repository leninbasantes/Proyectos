<?php
require_once("../config/alumnoDB.php");
require_once("../negocio/RN_alumno.php");

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$cedula=$_POST['cedula'];
$direccion=$_POST['direccion'];
$telefono=$_POST['numtele'];
$email=$_POST['email'];
$fnacimiento=$_POST['fnaci'];
$ecivil=$_POST['ecivil'];
$contraseña=$_POST['password'];

$Obj_Alumno = new AlumnoBT;
if($Obj_Alumno->guardar($nombre,$apellido,$cedula,$direccion,$telefono,$email,$fnacimiento,$ecivil,$contraseña)){
	echo "<h1>Los Datos han sido ingresados correctamente</h1>";
}else{
    echo "<center><h1>ERROR no se pudo guardar</h1></center>";
    return false;
}
?>