<?php
require_once("../config/usuarioDB.php");

class UsuarioBT
{

	function insertar($nombre,$apellido,$cedula,$direccion,$telefono,$email,$fnacimiento,$ecivil,$contraseña)
	{
    $Obj_Usuario=new UsuarioDB();
	   return $Obj_Usuario->guardar_datos($nombre,$apellido,$cedula,$direccion,$telefono,$email,$fnacimiento,$ecivil,$contraseña);
	}

	
	function imprimir()
	{
		$Obj_Alumno = new AlumnoDB();
		return $Obj_Alumno->imprimirTodo();
	}

}
?>