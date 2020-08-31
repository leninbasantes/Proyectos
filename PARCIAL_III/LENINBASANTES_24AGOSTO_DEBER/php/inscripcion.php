<?php
$cedula_ins=$_POST['idcurso'];
$nombre_alu=$_POST['nombre'];
$nombre_cur=$_POST['nombrecurso'];
$costo_cur=$_POST['cocurso'];
$formaPago_ins=$_POST['formapago'];

echo("cedula: $cedula_ins <br>");
echo("nombre del alumno: $nombre_alu <br>");
echo("nombre del curso: $nombre_cur <br>");
echo("costo del curso: $costo_cur <br>");
echo("forma de pago: $formaPago_ins");

?>