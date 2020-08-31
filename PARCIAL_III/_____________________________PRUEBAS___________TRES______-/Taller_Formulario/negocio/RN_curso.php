<?php

require_once("../config/CursoDB.php");

class CursoBT
{

	function guardar($nombre_cur,$fecha_cur,$horas_cur,$costo_cur)
	{
    $Obj_Curso=new CursoDB();
	   return $Obj_Curso->guardar_datos($nombre_cur,$fecha_cur,$horas_cur,$costo_cur);
	}

}
?>
