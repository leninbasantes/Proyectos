<?php
require_once("../config/alumnoDB.php");

class AlumnoBT
{

	function guardar($nom,$edad,$fnac,$ced)
	{
    $Obj_Alumno=new AlumnoDB();
	   return $Obj_Alumno->guardar_datos($nom,$edad,$fnac,$ced);
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
		
      $Obj_Alumno=new AlumnoDB();
	  $sqloperacion="select * from alumno where 'alu_cedula'=array[0] and 'alu_nombre'=array[1] and ecilvil=array[5]"; 	
	  
	 $Obj_Alumno->procesosbase($sqloperacion)
	if($Obj_Alumno>0) entonces no grabe nada porla cedula ya existe
		 caso contrario
		 $Obj_Alumno->imprimirdatos($sqloperacion)
		
	}
  	
}
?>