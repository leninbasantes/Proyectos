<?php

require_once("../config/inscripcionDB.php");

class InscripcionBT
{

	function guardar($cedula_ins,$nombre_cur,$formaPago_ins)
	{
    $Obj_Inscripcion=new InscripcionDB();
	   return $Obj_Inscripcion->guardar_datos($cedula_ins,$nombre_cur,$formaPago_ins);
	}

}

?>
