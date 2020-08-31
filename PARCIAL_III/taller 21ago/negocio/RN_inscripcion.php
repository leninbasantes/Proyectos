<?

require_once("config/CursoDB.php");

class CursoBT
{

	function buscar_cod($cod)
	{
    $Ocurso=new CursoDB();
	return $Ocurso->buscar_cod($cod);
	}
  	function buscar_cod_nombre($cur_cod)
  	{
    $Ocurso=new CursoDB();
	return $Ocurso->buscar_cod_nombre($cur_cod);
     }
	function buscar_cur_byespe($cod_espe)
	{
    $Ocurso=new CursoDB();
	return $Ocurso->buscar_cur_byespe($cod_espe);
    }
    function buscar_cur_planf($especialidad,$anio,$periodo)
   {
    $Ocurso=new CursoDB();
	return $Ocurso->buscar_cur_planf($especialidad,$anio,$periodo);
   }
}

?>
