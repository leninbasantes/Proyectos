<?php
//clase alumno con metodos

require_once('conexion.php');
  
	class AlumnoDB
	{
		
	function guardar_datos($nombre,$edad,$fechanacimiento)
 	{
	$config=new conexion();
	$link=mysqli_connect($config->get_dbhost(),$config->get_dbuser(),$config->get_dbpass(),$config->get_dbname()) or die('No pudo conectarse : ' .mysqli_error());
    $sql= "insert into alumno (alu_nombre,alu_edad,alu_fnacimiento,alu_estado)values('$nombre','$edad','$fechanacimiento','1',)";
	$result = mysqli_query($link,"SET NAMES 'utf8'");	
	$result=mysqli_query($link, $sql) or die (mysqli_error($link));
	mysqli_close($link); 
	return $result;
	}	
}
?>