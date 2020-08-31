<?php
//clase alumno con metodos

require_once('conexion.php');
  
	class AlumnoDB
	{
		
	function guardar_datos($nombre,$edad,$fechanacimiento,$cedula)
 	{
	$config=new conexion();
	$link=mysqli_connect($config->get_dbhost(),$config->get_dbuser(),$config->get_dbpass(),$config->get_dbname()) or die('No pudo conectarse : ' .mysqli_error());
   	$sqlb="SELECT * FROM alumno WHERE 'alu_cedula'='$cedula'"; //buscar si existe un alumno con esa cedula
	$num=count($sqlb); //cuenta el numero encontrado de ocurrencias
	if($num==0)	
	   {$sql= "INSERT INTO alumno(nombres, apellidos, cedula, direccion, telefono, email, fnacimiento, ecivil, contraseña, estado) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11])";
	   $result = mysqli_query($link,"SET NAMES 'utf8'");	
	   $result=mysqli_query($link, $sql) or die (mysqli_error($link));
	   mysqli_close($link); 
	   return $result;}
	else
		{
		  echo("el alumno ya esta ingresado");
		}
		
	}
		
	
		function imprimird()
      {
	$config=new conexion();
	$link=mysqli_connect($config->get_dbhost(),$config->get_dbuser(),$config->get_dbpass(),$config->get_dbname()) or die('No pudo conectarse : ' .mysqli_error());	
	$sql="SELECT * FROM alumno";
    $result = mysqli_query($link,"SET NAMES 'utf8'");	
	$result=mysqli_query($link, $sql) or die (mysqli_error($link));
	mysqli_close($link); 
	//return $result;
			
	//opcion 1 hacer aqui la impresion de los datos		
	//opcion 2 llamra a funcion que haga la impresion
	//opcion 3 enviar los datos obtenidos al archivo donde fue invocada la funcion  
		
	}
		
		function procesosbase($sql_operacion)
      {
	$config=new conexion();
	$link=mysqli_connect($config->get_dbhost(),$config->get_dbuser(),$config->get_dbpass(),$config->get_dbname()) or die('No pudo conectarse : ' .mysqli_error());	
    $result = mysqli_query($link,"SET NAMES 'utf8'");	
	$result=mysqli_query($link, $sql_operacion) or die (mysqli_error($link));
	mysqli_close($link);
    return($result);
		}
	
		
		
		
		
}
?>