<?php

require_once("../config/alumnoDB.php");

class AlumnoBT
{

	function guardar($nombre,$apellido,$direccion,$cedula,$telefono,$email,$eCivil,$fechanacimiento,$password)
	{
    $Obj_Alumno=new AlumnoDB();
	   return $Obj_Alumno->guardar_datos($nombre,$apellido,$direccion,$cedula,$telefono,$email,$eCivil,$fechanacimiento,$password);
	}
	
	function imprimir()
	{
		$Obj_Alumno = new AlumnoDB();
		return $Obj_Alumno->imprimirTodo();
	}
	  	
}
?>