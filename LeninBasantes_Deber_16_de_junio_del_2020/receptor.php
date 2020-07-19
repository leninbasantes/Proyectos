<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	
<?php
$a=$_GET['w1'];
$b=$_GET['w2'];
$c=$_GET['w3'];
echo "Bienvenido $a $b como estas?";
echo "<br>";
echo "Tu numero ingresado es $c";
echo "<br>";
	
echo "<br>";
echo('Matriz');
echo "<br>";
	
$d=$c*$c;
$matriz = array($c);
$arreglo =array($d);
	
	
for ($i=0;$i<$c;$i++){
	$matriz[$i] = array($c);
}
	
for( $i=0;$i<$c;$i++){
	for($j=0;$j<$c;$j++){
				$matriz[$i][$j]=rand(1,60);	
				echo ($matriz[$i][$j]."&nbsp;");
			}
	echo "<br>";
}
	
	$cont=0;
		for( $i=0;$i<$c;$i++){
			for($j=0;$j<$c;$j++){
				$arreglo[$cont]=$matriz[$i][$j];
				$cont++;
			}		
		}	
	

	echo "<br>";
	echo "<br>";
	sort($arreglo);
	

	
	echo "<br>";
	echo('Matriz Arreglada');
	echo "<br>";
	
	$cont1=0;
	for( $i=0;$i<$d;$i++){
	for($j=0;$j<$c;$j++){
				$matriz[$i][$j]=$arreglo[$cont1];
				$cont1++;
				echo ($matriz[$i][$j]."&nbsp;");
			}
	echo "<br>";
}

?>

</body>
</html>