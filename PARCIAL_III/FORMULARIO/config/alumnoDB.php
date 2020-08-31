<?php

require_once('conexion.php');
  
	class AlumnoDB
	{
		
	function guardar_datos($nom,$apellido,$cedula,$direccion,$numtele,$email,$fnaci,$ecivil,$password)
 	{
	$config=new conexion();
	$link=mysqli_connect($config->get_dbhost(),$config->get_dbuser(),$config->get_dbpass(),$config->get_dbname()) or die('No pudo conectarse : ' .mysqli_error());
	$sqlb="SELECT * FROM alumno WHERE 'alu_cedula'='$cedula'";
	$num=count($sqlb);
	if($num==0){
		$sql = "INSERT INTO alumno(nombres, apellidos, cedula, direccion, telefono, email, fnacimiento, ecivil, contraseña, estado) VALUES ('$nom','$apellido','$cedula','$direccion','$numtele','$email','$fnaci','$ecivil','$password','1')";
		$result = mysqli_query($link,"SET NAMES 'utf8'");	
		$result=mysqli_query($link, $sql) or die (mysqli_error($link));
		mysqli_close($link); 
		return $result;
	}else{
	  		echo("el alumno ya esta ingresado");
		}
	
	}
}
?>