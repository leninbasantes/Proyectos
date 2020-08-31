<?php
//clase curso con metodos

require_once('conexion.php');
  
	class InscripcionDB
	{
		
	function guardar_datos($cedula_ins,$nombre_cur,$formaPago_ins)
 	{
	$config=new conexion();
	$link=mysqli_connect($config->get_dbhost(),$config->get_dbuser(),$config->get_dbpass(),$config->get_dbname()) or die('No pudo conectarse : ' .mysqli_error());	
		$sql="INSERT INTO inscripcion(ins_cedula, ins_curso, ins_pago) VALUES ('$cedula_ins','$nombre_cur','$formaPago_ins')";
		$result = mysqli_query($link,"SET NAMES 'utf8'");	
		$result=mysqli_query($link, $sql) or die (mysqli_error($link));
		mysqli_close($link); 
		echo("<script>alert('Inscripcion Completa..!!')</script>");
		echo ('<script>location.href="../html/finscripcion.html"</script>');
		return $result;	
	}
}
?>