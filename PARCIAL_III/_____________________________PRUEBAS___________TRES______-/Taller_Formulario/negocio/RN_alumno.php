<?php

require_once("../config/alumnoDB.php");

class AlumnoBT
{

	function guardar($nombre,$apellido,$cedula,$direccion,$telefono,$email,$fnacimiento,$ecivil,$contraseña)
	{
    $Obj_Alumno=new AlumnoDB();
	   return $Obj_Alumno->guardar_datos($nombre,$apellido,$cedula,$direccion,$telefono,$email,$fnacimiento,$ecivil,$contraseña);
	}

	
	function imprimir()
	{
		$Obj_Alumno = new AlumnoDB();
		return $Obj_Alumno->imprimirTodo();
	}

}
?>