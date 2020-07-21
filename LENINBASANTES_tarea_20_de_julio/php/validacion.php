<?php
if(isset($_REQUEST['datospersonales'])){
    $nombre = $_REQUEST['nombre'];
    $apellido = $_REQUEST['apellido'];
    $genero = $_REQUEST['genero'];
    $edad = $_REQUEST['edad'];
    $fecha = $_REQUEST['fecha'];
    $email = $_REQUEST['email'];
    echo "{$nombre}, tu apellido es: {$apellido} ";
}


?>