<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Insertar, Editar, Eliminar Registros con Función PHP MySQLi </title>
<!-- enlace al archivo de estilo -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<h3>TALLER 31 DE AGOSTO</h3>
	<link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
<link type="text/css" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="css/estilo_form.css">

</head>

<body>
<div class="main-wrapper">
<h1>Insertar, Editar, Eliminar Registros con Función PHP MySQLi </h1>
<br><br>
<form action="" method="post">
  <div class="col-xs-3">
    <input class="form-control" name="txt_nombres" type="text" placeholder="Ingrese Nombres">
  </div>
  <div class="col-xs-3">
    <input class="form-control" name="txt_apellidos" type="text" placeholder="Apellidos">
  </div>  
	<input type="submit" name="submit" class="btn btn-primary" value="Insertar">
</form>
<br>

<?php
	include("function.php");
	if(isset($_POST['submit'])){
		$field = array("nombres"=>$_POST['txt_nombres'], "apellidos"=>$_POST['txt_apellidos']);
		$tbl = "tabla_demo";
		insert($tbl,$field);
		
	}
?>
<table border="1" width="100%">
	<tr>
		<th width="10%">El Id</th>		
        <th width="31%">Los Nombres</th>
		<th width="36%">Los Apellidos</th>
		<th width="10%">Estado</th>
		<th width="13%">Las Opciones</th>
	</tr>
<?php 
	$sql = "select * from tabla_demo";
	$result = db_query($sql);
	while($row = mysqli_fetch_object($result)){
	?>
	<tr>
		<td><?php echo $row->id;?></td>
        <td><?php echo $row->nombres;?></td>
		<td><?php echo $row->apellidos;?></td>
		<td><?php echo $row->estado;?></td>
		<td>

<a class="btn btn-primary" href="editar.php?id=<?php echo $row->id; ?>"><i class="fa fa-pencil fa-lg" aria-hidden="true">E</i></a>
<a class="btn btn-primary" href="borrar.php?id=<?php echo $row->id;?>"><i class="fa fa-trash-o fa-lg" aria-hidden="true">B</i></a>
</td>
	</tr>
	<?php } ?>
</table>
</div>
<!-- enlace a los  archivos Javascript  -->
</body>
</html>