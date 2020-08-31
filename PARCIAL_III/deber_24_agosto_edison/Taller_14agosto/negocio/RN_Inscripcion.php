<?php

require_once("../config/inscripcionDB.php");

class InscripcionBT
{

	function guardar($fechaInscripcion,$formaPago,$estado)
	{
    $Obj_Inscripcion=new InscripcionDB();
	   return $Obj_Inscripcion->guardar_datos($fechaInscripcion,$formaPago,$estado);
	}
  	
}
?>