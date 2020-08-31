<?

require_once("../config/alumnoDB.php");

class AlumnoBT
{
	function guardar($nombre_alu,$apellido_alu,$cedula_alu,$direccion_alu,$numtele_alu,$email_alu,$fnaci_alu,$ecivil_alu,$password_alu)
	{
	$Obj_Alumno = new AlumnoDB();
	$Obj_Alumno->guardar_datos($nombre_alu,$apellido_alu,$cedula_alu,$direccion_alu,$numtele_alu,$email_alu,$fnaci_alu,$ecivil_alu,$password_alu);
	}
  	
}
?>