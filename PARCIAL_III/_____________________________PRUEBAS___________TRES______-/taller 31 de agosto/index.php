<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Insertar, Editar, Eliminar Registros con Función PHP MySQLi </title>
<!-- enlace al archivo de estilo -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
body {
	background-image: url();
}
</style>
<h3>TALLER 28 DE AGOSTO</h3>
	<link type="text/css" href="bootstrap.min.css" rel="stylesheet">
<link type="text/css" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
<style>
table {
    border-collapse: collapse;
    width: 100%;
}
th, td {
    text-align: left;
    padding: 4px;
}
tr:nth-child(even){background-color: #f2f2f2}
th {
    background-color: #4CAF50;
    color: white;
}
.main-wrapper{
	width:60%;
	
	background:#E0E4E5;
	border:1px solid #292929;
	padding:25px;
	margin:auto;
}
hr {
    margin-top: 5px;
    margin-bottom: 5px;
    border: 0;
    border-top: 1px solid #eee;
}
h1{
	font-size:24px;
	}
</style>
</head>

<body>
<div class="main-wrapper">
<h1>Insertar, Editar, Eliminar Registros con Función PHP MySQLi </h1>
<br><br>
<form action="" method="post">
  <div class="col-xs-3">
    <input class="form-control" name="nombres" type="text" placeholder="Nombres">
  </div>
  <div class="col-xs-3">
    <input class="form-control" name="apellidos" type="text" placeholder="Apellidos">
  </div>  
	<input type="submit" name="submit" class="btn btn-primary" value="Insertar">
</form>
<br>

<?php
	include("function.php");
	if(isset($_POST['submit'])){
		$field = array("nombres"=>$_POST['nombres'], "apellidos"=>$_POST['apellidos']);
		$tbl = "tabla_demo";
		insert($tbl,$field);
		
	}
?>
<table border="1" width="100%">
	<tr>
		<th width="10%">Id</th>
        <th width="31%">Nombres</th>
		<th width="46%">Apellidos</th>
		<th width="13%">Opcion</th>
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