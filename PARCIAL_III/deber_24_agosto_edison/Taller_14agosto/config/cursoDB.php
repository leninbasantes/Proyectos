<?php
//clase alumno con metodos

require_once('conexion.php');
  
	class CursoDB
	{
	function guardar_datos($curso,$fechaInicio,$nHoras,$costo)
 	{
	$config=new conexion();
	$link=mysqli_connect($config->get_dbhost(),$config->get_dbuser(),$config->get_dbpass(),$config->get_dbname()) or die('No pudo conectarse : ' .mysqli_error());
    $sql= "insert into cursos (cur_nombre,cur_finicio,cur_nhoras,cur_costo)values('$curso','$fechaInicio','$nHoras','$costo')";
	$result = mysqli_query($link,"SET NAMES 'utf8'");	
	$result=mysqli_query($link, $sql) or die (mysqli_error($link));
	mysqli_close($link); 
	return $result;
	}	
}
?>