<?php
require_once("../config/alumnoDB.php");
require_once("../negocio/RN_alumno.php");

$nombre_alu=$_POST['nombre'];
$edad_alu=$_POST['edad'];
$fnacimiento_alu=$_POST['fnacimiento'];
$cedula_alu=$_POST['cedula'];

$array[0]=$_POST['nombre'];
$array[1]=$_POST['cedula'];
$array[2]=$_POST['edad'];
$array[3]=$_POST['fnacimiento'];

 $Obj_Alumno=new AlumnoBT();
  if ($Obj_Alumno->guardar($nombre_alu,$edad_alu,$fnacimiento_alu,$cedula_alu))
  {
   echo "<h1>Los Datos han sido ingresados correctamente</h1>";
   echo "<script>location.href='../formulario.html'</script>";
	  }
else
	{
    echo "<center><h1>ERROR no se pudo guardar</h1></center>";
    return false;
   }

// $sqlb="SELECT * FROM alumno WHERE 'alu_cedula'='$cedula'"


  $Obj_Alumno=new AlumnoBT();
  //$todoloquenecesite="campo1"."/"."campo2"."/"."campon";
    $todoloquenecesite=$cedula_alu."/".$nombre_alu;
$Obj_Alumno->funcionglobal($array]);

?>