<?php
require_once('conexion.php');
  
	class AlumnoDB
	{
		
	function guardar_datos($nombre,$apellido,$cedula,$direccion,$telefono,$email,$fnacimiento,$ecivil,$contraseña)
 	{
	$config=new conexion();
	$link=mysqli_connect($config->get_dbhost(),$config->get_dbuser(),$config->get_dbpass(),$config->get_dbname()) or die('No pudo conectarse : ' .mysqli_error());	
	$exist = mysqli_num_rows( mysqli_query($link,"SELECT * FROM alumno WHERE alu_cedula = '$cedula'"));
	if($exist==0){
		$sql="INSERT INTO alumno(alu_Nombre, alu_Apellido, alu_cedula, alu_direccion, alu_telefono, alu_email, alu_fnacimiento, alu_ecivil, alu_contraseña, alu_estado) VALUES ('$nombre','$apellido','$cedula','$direccion','$telefono','$email','$fnacimiento','$ecivil','$contraseña','1')";
		$result = mysqli_query($link,"SET NAMES 'utf8'");	
		$result=mysqli_query($link, $sql) or die (mysqli_error($link));
		mysqli_close($link); 
		echo("<script>alert('Usuario registrado Correctamente..!!')</script>");
		echo ('<script>location.href="../html/falumno.html"</script>');
		return $result;
	}else{
		echo("<script>alert('El Usuario ya esta registrado')</script>");
		echo ('<script>location.href="../html/falumno.html"</script>');
	}	
	}

	function imprimirTodo(){
		
		$config=new conexion();
		$link=mysqli_connect($config->get_dbhost(),$config->get_dbuser(),$config->get_dbpass(),$config->get_dbname()) or die('No pudo conectarse : ' .mysqli_error());
		$sql = "SELECT * FROM alumno";
		$result = mysqli_query($link,$sql);
		return $result;
		mysql_close($link);
	}

	function actualizar_datos(){
		$config=new conexion();
		$link=mysqli_connect($config->get_dbhost(),$config->get_dbuser(),$config->get_dbpass(),$config->get_dbname()) or die('No pudo conectarse : ' .mysqli_error());	
		$sql="SELECT * FROM alumno";
		$result=mysqli_query($link, $sql) or die (mysqli_error($link));
		mysqli_close($link); 
		return $result;	
	}

	function buscarDatos(){
		
		$config=new conexion();
		$link=mysqli_connect($config->get_dbhost(),$config->get_dbuser(),$config->get_dbpass(),$config->get_dbname()) or die('No pudo conectarse : ' .mysqli_error());
		$sql = "SELECT * FROM alumnos";
		$result = mysqli_query($link,$sql);
		return $result;
		mysql_close($link);
	}

	function borrar_datos(){
		$config=new conexion();
		$link=mysqli_connect($config->get_dbhost(),$config->get_dbuser(),$config->get_dbpass(),$config->get_dbname()) or die('No pudo conectarse : ' .mysqli_error());	
		$sql="SELECT * FROM alumno";
		$result=mysqli_query($link, $sql) or die (mysqli_error($link));
		mysqli_close($link); 
		return $result;	
	}

}
?>