<?php
require_once("../config/cursoDB.php");
require_once("../negocio/RN_Curso.php");

$curso = $_POST['curso'];
$fechaInicio_cur = $_POST['fechaIni'];
$nHoras_cur = $_POST['nHoras'];
$costo_cur = $_POST['costo'];

echo ("Curso: $curso <br>");
echo ("Fecha de Inincio: $fechaInicio_cur <br>");
echo ("Número de Horas: $nHoras_cur <br>");
echo ("Costo: $costo_cur <br>");

$Obj_Curso = new CursoBT;
if($Obj_Curso->guardar($curso,$fechaInicio_cur,$nHoras_cur,$costo_cur)){
	echo "<h1>Los Datos han sido ingresados correctamente</h1>";
	//echo '<script languaje="Javascript">location.href="../hmtl/FormularioAlumno.html"</script>';
}else{
	echo "<center><h1>ERROR no se pudo guardar</h1></center>";
    return false;
}
?>