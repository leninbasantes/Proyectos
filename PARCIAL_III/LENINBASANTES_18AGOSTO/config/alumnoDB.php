<?php
//clase alumno con metodos

require_once('conexion.php');
  
	class AlumnoDB
	{
		
	function guardar_datos($nombre_alu,$apellido_alu,$cedula_alu,$direccion_alu,$numtele_alu,$email_alu,$fnaci_alu,$ecivil_alu,$password_alu)
 	{
	$config=new conexion();
	$link=mysqli_connect($config->get_dbhost(),$config->get_dbuser(),$config->get_dbpass(),$config->get_dbname());
    $sql= "insert into alumno(nombres, apellidos, cedula, direccion, telefono, email, fnacimiento, ecivil, contraseña, estado) values ('$nombre_alu','$apellido_alu','$cedula_alu','$direccion_alu','$numtele_alu','$email_alu','$fnaci_alu','$ecivil_alu','$password_alu','1')";
	$result = mysqli_query($link,"SET NAMES 'utf8'");	
	$result=mysqli_query($link, $sql) or die (mysqli_error($link));
	mysqli_close($link); 
	return $result;
	}	
}
?>