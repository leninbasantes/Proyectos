<?php

require_once("../config/inscripcionDB.php");
require_once("../negocio/RN_inscripcion.php");

$cedula_ins=$_POST['idcurso'];
$nombre_cur=$_POST['nombrecurso'];
$formaPago_ins=$_POST['formapago'];

$Obj_Inscripcion = new InscripcionBT;
if($Obj_Inscripcion->guardar($cedula_ins,$nombre_cur,$formaPago_ins)){
	echo "<h1>Los Datos han sido ingresados correctamente</h1>";
}else{
    echo "<center><h1>ERROR no se pudo guardar</h1></center>";
    return false;
}

?>