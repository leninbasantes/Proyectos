<?php

require_once("../config/cursoDB.php");

class CursoBT
{

	function guardar($curso,$fechaInicio,$nHoras,$costo)
	{
    $Obj_Curso=new CursoDB();
	   return $Obj_Curso->guardar_datos($curso,$fechaInicio,$nHoras,$costo);
	}
  	
}
?>