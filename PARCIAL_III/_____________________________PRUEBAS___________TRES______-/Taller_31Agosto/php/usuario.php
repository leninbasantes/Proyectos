<?php
require_once("../config/usuarioDB.php");
require_once("../negocio/RN_usuario.php");


include("function.php");
if(isset($_POST['submit'])){
    $field = array("nombres"=>$_POST['nombres'], "apellidos"=>$_POST['apellidos']);
    $tbl = "tabla_demo";
    insert($tbl,$field);
    
}

?>