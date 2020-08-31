<?php
//clase alumno con metodos

require_once('conexion.php');
  
	class AlumnoDB
	{
		
	function guardar_datos($nombre,$edad,$fechanacimiento)
 	{
	$config=new conexion();
	$link=mysqli_connect($config->get_dbhost(),$config->get_dbuser(),$config->get_dbpass(),$config->get_dbname()) or die('No pudo conectarse : ' .mysqli_error());
    $sql= "INSERT INTO alumno(id_alumno, nombres, apellidos, cedula, direccion, telefono, email, fnacimiento, ecivil, contraseña, estado) VALUES ('$nombre','$nombre','$nombre','$nombre','$nombre','$nombre','$nombre','$nombre','$nombre','$nombre','1')";
	$result = mysqli_query($link,"SET NAMES 'utf8'");	
	$result=mysqli_query($link, $sql) or die (mysqli_error($link));
	mysqli_close($link); 
	return $result;
	}	
}
?>