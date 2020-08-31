<?php
require_once("../config/alumnoDB.php");

class AlumnoBT
{

	function guardar($nom,$apellido,$cedula,$direccion,$numtele,$email,$fnaci,$ecivil,$password)
	{
    $Obj_Alumno=new AlumnoDB();
	$Obj_Alumno->guardar_datos($nom,$apellido,$cedula,$direccion,$numtele,$email,$fnaci,$ecivil,$password);
	return true;
	}

  	
}
?>