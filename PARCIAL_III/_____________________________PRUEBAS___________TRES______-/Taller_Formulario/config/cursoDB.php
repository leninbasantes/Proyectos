<?php
//clase curso con metodos

require_once('conexion.php');
  
	class CursoDB
	{
		
	function guardar_datos($nombre_cur,$fecha_cur,$horas_cur,$costo_cur)
 	{
	$config=new conexion();
	$link=mysqli_connect($config->get_dbhost(),$config->get_dbuser(),$config->get_dbpass(),$config->get_dbname()) or die('No pudo conectarse : ' .mysqli_error());	
		$sql="INSERT INTO curso(cur_nombre, cur_finicio, cur_nhoras, cur_costo) VALUES ('$nombre_cur','$fecha_cur','$horas_cur','$costo_cur')";
		$result = mysqli_query($link,"SET NAMES 'utf8'");	
		$result=mysqli_query($link, $sql) or die (mysqli_error($link));
		mysqli_close($link); 
		echo("<script>alert('Curso registrado Correctamente..!')</script>");
		echo ('<script>location.href="../html/fcurso.html"</script>');
		return $result;	
	}
}
?>