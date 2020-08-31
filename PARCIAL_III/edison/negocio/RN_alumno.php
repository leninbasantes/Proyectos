<?

require_once("../config/alumnoDB.php");

class AlumnoBT
{
	function guardar($nom,$edad,$fnac)
	{
    $Obj_Alumno=new AlumnoDB();
	   return $Obj_Alumno->guardar_datos($nom,$edad,$fnac);
	}
}



?>