<?php
require_once("../config/alumnoDB.php");
require_once("../negocio/RN_alumno.php");

$nombres_alu = $_POST['nombre'];
$apellidos_alu = $_POST['apellido'];
$direccion_alu = $_POST['direccion'];
$cedula_alu = $_POST['cedula'];
$telefono_alu = $_POST['telefono'];
$email_alu = $_POST['email'];
$eCivil_alu = $_POST['eCivil'];
$fNacimiento_alu = $_POST['fNacimiento'];
$password_alu = $_POST['contraseña'];
$btn_imprimir = $_POST['imprimir'];

echo ("Nombres: $nombres_alu <br>");
echo ("Apellidos: $apellidos_alu<br>");
echo ("Direccion: $direccion_alu<br>");
echo ("Cedula: $cedula_alu<br>");
echo ("Telefono: $telefono_alu<br>");
echo ("Email: $email_alu<br>");
echo ("Estado Civil: $eCivil_alu<br>");
echo ("Fecha de Nacimiento: $fNacimiento_alu<br>");
echo ("Contraseña: $password_alu<br>");

$Obj_Alumno = new AlumnoBT;
if($Obj_Alumno->guardar($nombres_alu,$apellidos_alu,$direccion_alu,$cedula_alu,$telefono_alu,$email_alu,$eCivil_alu,$fNacimiento_alu,$password_alu)){
	echo "<h1>Los Datos han sido ingresados correctamente</h1>";
	//echo '<script languaje="Javascript">location.href="../hmtl/FormularioAlumno.html"</script>';
}else{
	echo "<center><h1>ERROR no se pudo guardar</h1></center>";
    return false;
}
?>