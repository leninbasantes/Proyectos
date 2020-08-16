<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
<title>Documento sin título</title>
</head>

<body>
	
	<?php
	$a=$_REQUEST["text1"];
	$b=$_REQUEST["text2"];
	$c=$_REQUEST["text3"];
	$d=$_REQUEST["text4"];
	$e=$_REQUEST["text5"];


	
	?>
</body>
	
	
	<h2>La tabla con los datos son: </h2>
	
	<table width="300" border="1">
  <tbody>
    <tr>
      <td>Nombre</td>
      <td><?php

	
	echo " $a  ";
	
	?></td>
    </tr>
    <tr>
      <td>Apellido</td>
      <td><?php

	
	echo " $b  ";
	
	?></td>
    </tr>
    <tr>
      <td>Edad</td>
      <td><?php

	
	echo " $c  ";
	
	?></td>
    </tr>
	  
	  <tr>
      <td>Carrera</td>
      <td><?php

	
	echo " $d  ";
	
	?></td>
    </tr>
	  
	  <tr>
      <td>Nivel</td>
      <td><?php

	
	echo " $e  ";
	
	?></td>
    </tr>
	  
  </tbody>
</table>
	
</body>
</html>