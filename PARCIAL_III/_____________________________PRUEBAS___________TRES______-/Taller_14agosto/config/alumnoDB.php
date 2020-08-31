<?php
//clase alumno con metodos

require_once('conexion.php');
  
	class AlumnoDB
	{
	function guardar_datos($nombre,$apellido,$direccion,$cedula,$telefono,$email,$eCivil,$fechanacimiento,$password)
 	{
	$config=new conexion();
	$link=mysqli_connect($config->get_dbhost(),$config->get_dbuser(),$config->get_dbpass(),$config->get_dbname()) or die('No pudo conectarse : ' .mysqli_error());	
		
	$exist = mysqli_num_rows( mysqli_query($link,"SELECT * FROM alumnos WHERE alu_cedula = '$cedula'"));
	
	if($exist==0){
		$sql= "insert into alumnos (alu_Nombre,alu_Apellido,alu_direccion,alu_telefono,alu_email,alu_ecivil,alu_fnacimiento,alu_pass,alu_cedula)values('$nombre','$apellido','$direccion','$telefono','$email','$eCivil','$fechanacimiento','$password','$cedula')";
	    $result = mysqli_query($link,"SET NAMES 'utf8'");	
	    $result=mysqli_query($link, $sql) or die (mysqli_error($link));
		
		return $result;
		mysqli_close($link); 
	}
	else{
		echo("El alumno ya esta ingresado");
	}
   
	}
	
	function buscarDatos(){
		
		$config=new conexion();
		$link=mysqli_connect($config->get_dbhost(),$config->get_dbuser(),$config->get_dbpass(),$config->get_dbname()) or die('No pudo conectarse : ' .mysqli_error());
		$sql = "SELECT * FROM alumnos";
		$result = mysqli_query($link,$sql);
		return $result;
		mysql_close($link);
	}
		
	function imprimirTodo(){
		
		$config=new conexion();
		$link=mysqli_connect($config->get_dbhost(),$config->get_dbuser(),$config->get_dbpass(),$config->get_dbname()) or die('No pudo conectarse : ' .mysqli_error());
		$sql = "SELECT * FROM alumnos";
		$result = mysqli_query($link,$sql);
		return $result;
		mysql_close($link);
	}
			
		
}
?>