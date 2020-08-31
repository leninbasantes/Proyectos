<?php
require_once("../config/alumnoDB.php");

class AlumnoBT
{

	function guardar($nom,$apellido,$cedula,$direccion,$numtele,$email,$fnaci,$ecivil,$password)
	{
    $Obj_Alumno=new AlumnoDB();
	   return $Obj_Alumno->guardar_datos($nom,$apellido,$cedula,$direccion,$numtele,$email,$fnaci,$ecivil,$password);
	}
	
	
	function imprimir_datos()
	{
    $Obj_Alumno=new AlumnoDB();
	   return $Obj_Alumno->imprimird();
	}
	
	function funciondinamica($array)
	{
	  //separar en partes el parametro recibido   $stringquecontengatodoloquenecesita="123456/juan perez/direccion/telefono/casado"
	  //uso lo que necesito para construir mi $sqloperacion
	//para cada elemento  $stringquecontengatodoloquenecesita puede ser separado en array[indice] 	
		

		
	}
  	
}
?>