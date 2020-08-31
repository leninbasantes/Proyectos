<?php

require_once("../config/cursoDB.php");
require_once("../negocio/RN_curso.php");

$nombre_cur=$_POST['nombrecurso'];
$fecha_cur=$_POST['fcurso'];
$horas_cur=$_POST['hcurso'];
$costo_cur=$_POST['cocurso'];

$Obj_Curso = new CursoBT;
if($Obj_Curso->guardar($nombre_cur,$fecha_cur,$horas_cur,$costo_cur)){
	echo "<h1>Los Datos han sido ingresados correctamente</h1>";
}else{
    echo "<center><h1>ERROR no se pudo guardar</h1></center>";
    return false;
}

?>