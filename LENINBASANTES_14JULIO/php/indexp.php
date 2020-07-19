<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Funciones</title>
<link href="../css/estilos2.css" rel="stylesheet" type="text/css">
</head>
<body>
	<a href="../index.html">Atras</a><br><br>
	<div>Ejemplos</div>

<etique>
<?php
function enteroUno($a,$b){
	$c;
	$c=dechex($a);
	return $c;
}
function enteroDos($a,$b){
	$c;
	$c=decoct($b);
	return $c;
}
function enteroTres($a,$b){
	$c;
	$c= mt_rand($a,$b);
	return $c;
}
function enteroCuatro($a,$b){
	$c;
	$c=intdiv($a,$b);
	return $c;
}
function enteroCinco($a,$b){
	$c;
	$c= rand ($b,$a);
	return $c;
}
function flotaUno($c){
	$c= round($c);
	return $c;
}
function flotaDos($c){	
	$c=sqrt($c);
	return $c;
}
function flotaTres($c){
	$c= floor($c);
	return $c;
}
function flotaCuatro($c){
	$c= deg2rad($c);
	return $c;
}
function flotaCinco($c){	
	$c=atan($c);
	return $c;
}
function stringUno($a,$b,$c,$d){
	$l=$a." ".$b." ".$c." ".$d;
	$l = str_replace($l,"","Probando funciones string");
	return $l;
}
function stringDos($a,$b,$c,$d){
	$l=$a." ".$b." ".$c." ".$d;
	$l = str_repeat($l,3);
	return $l;
}
function stringTres($a,$b,$c,$d){
	$l=$a." ".$b." ".$c." ".$d;
	$l= strlen($l);
	return $l;
}
function stringCuatro($a,$b,$c,$d){
	$a= lcfirst($a); 
	$b= lcfirst($b); 
	$c= lcfirst($c); 
	$d= lcfirst($d); 
	$l=$a." ".$b." ".$c." ".$d;
	return $l;
}
function stringCinco($a,$b,$c,$d){
	$l=$a." ".$b." ".$c." ".$d;
	$l= convert_uuencode($l);
	return $l;
}

if ($_POST["numerosEnteros"]){
	echo "FUNCIONES ENTERAS";
	echo"<br>";
	echo"<br>";
	echo"<br>";
	echo "->Decimal a hexadecimal de ".$_POST["numero1entero"]." es ".enteroUno($_POST["numero1entero"],$_POST["numero2entero"]);
	echo "</br>";
	echo "->Decimal a octal de ".$_POST["numero2entero"]." es ".enteroDos($_POST["numero1entero"],$_POST["numero2entero"]);
	echo "</br>";
	echo "->Genera un mejor número entero aleatorio de ".$_POST["numero1entero"]." y ".$_POST["numero2entero"]." es ".enteroTres($_POST["numero1entero"],$_POST["numero2entero"]);
	echo "</br>";
	echo "->División entera de ".$_POST["numero1entero"]." y ".$_POST["numero2entero"]." es ".enteroCuatro($_POST["numero1entero"],$_POST["numero2entero"]);
	echo "</br>";
	echo "->Genera un número entero aleatorio de ".$_POST["numero1entero"]." y ".$_POST["numero2entero"]." es: ".enteroCinco($_POST["numero1entero"],$_POST["numero2entero"]);
	echo "</br>";
}
if($_POST["numeroFlotantes"]){
	echo "FUNCIONES FLOTANTES";
	echo"<br>";
	echo"<br>";
	echo"<br>";
	echo "->Redondea un float ".$_POST["numero1flotante"]." es ".flotaUno($_POST["numero1flotante"]);
	echo "</br>";
	echo "->Raiz cuadrada de ".$_POST["numero1flotante"]." es ".flotaDos($_POST["numero1flotante"]);
	echo "</br>";
	echo "->Redondear fracciones hacia abajo de ".$_POST["numero1flotante"]." es ".flotaTres($_POST["numero1flotante"]);
	echo "</br>";
	echo "->Esta función convierte a numero desde grados a su equivalente en radianes de ".$_POST["numero1flotante"]." es ".flotaCuatro($_POST["numero1flotante"]);
	echo "</br>";
	echo "->Arco tangente de ".$_POST["numero1flotante"]." es ".flotaCinco($_POST["numero1flotante"]);
	echo "</br>";
}
if($_POST["String"]){
	echo "FUNCIONES STRING";
	echo"<br>";
	echo"<br>";
	echo"<br>";
	echo "->Funcion 1 Reemplazar texto: ".stringUno($_POST["string1"],$_POST["string2"],$_POST["string3"],$_POST["string4"]);
	echo "</br>";
	echo "->Funcion 2 Repite 3 veces: ".stringDos($_POST["string1"],$_POST["string2"],$_POST["string3"],$_POST["string4"]);
	echo "</br>";
	echo "->Funcion 3 Cuantos espacios ocupa: ".stringTres($_POST["string1"],$_POST["string2"],$_POST["string3"],$_POST["string4"]);
	echo "</br>";
	echo "->Funcion 4 Primera letra en minuscula: ".stringCuatro($_POST["string1"],$_POST["string2"],$_POST["string3"],$_POST["string4"]);
	echo "</br>";
	echo "->Funcion 5 Encriptacion: ".stringCinco($_POST["string1"],$_POST["string2"],$_POST["string3"],$_POST["string4"]);
	echo "</br>";
}
?>
	</etique>
	</body>