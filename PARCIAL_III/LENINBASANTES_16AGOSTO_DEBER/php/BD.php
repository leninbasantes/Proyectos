<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Document</title>
</head>
<body>
<?php
$link = mysqli_connect("localhost","root","12345678","cursolinea");

$cedula = $_REQUEST["cedula"];
$nombre = $_REQUEST["nombre"];
$apellido = $_REQUEST["apellido"];
$ciudad = $_REQUEST["ciudad"];
$edad = $_REQUEST["edad"];
$direccion = $_REQUEST["direccion"];
$curso = $_REQUEST["curso"];
$tutor = $_REQUEST["tutor"];
$duracion = $_REQUEST["duracion"];
$horasPorDia = $_REQUEST["horas"];
$teleTutor = $_REQUEST["telefono"];
$sede = $_REQUEST["sede"];
$ciudadsede = $_REQUEST["ciudadsede"];
$valor = $_REQUEST["valor"];
$formadePago = $_REQUEST["pago"];

$tablaAlumno = "INSERT INTO alumno(cedula, nombre, apellido, ciudad, edad, direccion) VALUES ('$cedula','$nombre','$apellido','$ciudad','$edad','$direccion')";
$tablaCurso = "INSERT INTO curso(nombreCurso, nombreTutor, duracion, horasPorDia, telefonoTutor) VALUES ('$curso','$tutor','$duracion','$horasPorDia','$teleTutor')";
$tablaInscripcion = "INSERT INTO inscripcion(sede, ciudad, valor, formaDePago) VALUES ('$sede','$ciudad','$valor','$formadePago')";
$resultado = mysqli_query($link,$tablaAlumno);
$resultado2 = mysqli_query($link,$tablaCurso);
$resultado3 = mysqli_query($link,$tablaInscripcion);


echo'
<g class="comple">Registro completo</g>
<br>
<a class="probando"href="../index.html">Ingresar otro formulario</a>
';
?>
</body>
</html>