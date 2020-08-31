<?php
//clase alumno con metodos

require_once('conexion.php');
  
	class InscripcionDB
	{
	function guardar_datos($fechaInscripcion,$formaPago,$estado)
 	{
	$config=new conexion();
	$link=mysqli_connect($config->get_dbhost(),$config->get_dbuser(),$config->get_dbpass(),$config->get_dbname()) or die('No pudo conectarse : ' .mysqli_error());
    $sql= "insert into inscripcion (inc_finscripcion,inc_estado,inc_fpago)values('$fechaInscripcion','$estado','$formaPago')";
	$result = mysqli_query($link,"SET NAMES 'utf8'");	
	$result=mysqli_query($link, $sql) or die (mysqli_error($link));
	mysqli_close($link); 
	return $result;
	}	
}
?>