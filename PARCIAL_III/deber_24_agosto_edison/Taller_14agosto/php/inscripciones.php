<?php
require_once("../config/inscripcionDB.php");
require_once("../negocio/RN_Inscripcion.php");

$cedula_alu = $_POST['cedula'];
$fechaInscripcion = $_POST['fechaInscripcion'];
$nombre_alu = $_POST['nombreAlumno'];
$curso = $_POST['curso'];
$formaPago = $_POST['formaPago'];
$estado = $_POST['estado'];

echo ("Cédula de Alumno: $cedula_alu <br>");
echo ("Nombre de Alumno: $nombre_alu <br>");
echo ("Fecha de Inscripcion: $fechaInscripcion <br>");
echo ("Curso: $curso <br>");
echo ("Forma de Pago: $formaPago <br>");
echo ("Estado: $estado <br>");

$Obj_Inscripcion = new InscripcionBT;
if($Obj_Inscripcion->guardar($fechaInscripcion,$formaPago,$estado)){
	echo "<h1>Los Datos han sido ingresados correctamente</h1>";
	//echo '<script languaje="Javascript">location.href="../hmtl/FormularioAlumno.html"</script>';
}else{
	echo "<center><h1>ERROR no se pudo guardar</h1></center>";
    return false;
}
?>