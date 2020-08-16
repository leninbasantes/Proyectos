<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$nombre = 'labasantes';
$contrasenia = 'prueba1';
$usuario=$_REQUEST['textfield'];
$password=$_REQUEST['textfield2'];

if (($nombre!=$usuario)||($contrasenia!=$password)){
    header("Location: ../index.html");
}	

if (($nombre==$usuario)&&($contrasenia==$password)){
    header("Location: ../index2.html");
}

?>

</body>
</html>