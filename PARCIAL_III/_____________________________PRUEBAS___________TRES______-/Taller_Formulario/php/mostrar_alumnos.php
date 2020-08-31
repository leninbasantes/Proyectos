<?php
require_once("../config/alumnoDB.php");
require_once("../negocio/RN_alumno.php");

$Obj_Alumno = new AlumnoBT;
$row = mysqli_num_rows($Obj_Alumno->imprimir());
$result = mysqli_fetch_array($Obj_Alumno->imprimir());
$row1 = mysqli_num_rows($result);
echo($row."<br>");
echo($row1."<br>");
echo ("Nombre:".$result['alu_Nombre']."<br>"); 
echo ("Apellido:".$result['alu_Apellido']."<br>"); 
echo ("Direccion:".$result['alu_direccion']."<br>"); 
echo ("Cedula:".$result['alu_cedula']."<br>"); 
echo ("Telefono:".$result['alu_telefono']."<br>"); 
echo ("Email:".$result['alu_email']."<br>"); 	
echo ("Estado Civil:".$result['alu_ecivil']."<br>"); 
echo ("Fecha de Nacimiento:".$result['alu_fnacimiento']."<br>"); 
echo ("<br>");
?>