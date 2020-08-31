<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Editar Registros Mysql Mediante Funcion</title>
<link type="text/css" href="bootstrap.min.css" rel="stylesheet">
<link type="text/css" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
<link type="text/css" href="../css/estilos_forma.css" rel="stylesheet">
</head>

<body>
<div class="main-wrapper">
<h1>Editar Registros con Función PHP </h1>
<br><br>
<?php 
include("function.php");
$id = $_GET['id'];
select_id('tabla_demo','id',$id);
?>
<form action="" method="post">
	<input type="text" value="<?php echo $row->nombres;?>" name="nombres">
	<input type="text" value="<?php echo $row->apellidos;?>" name="apellidos" disabled>
	<input type="submit" name="submit">
</form>

<?php
	
	if(isset($_POST['submit'])){
		$field = array("nombres"=>$_POST['nombres']);
		$tbl = "tabla_demo";
		edit($tbl,$field,'id',$id);
		header("location:index.php");
	}
?>
</div>
</body>
</html>