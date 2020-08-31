<?php 
include("function.php");
$id = $_GET['id'];
delete('tabla_demo','id',$id);
header("location:index.php");
?>