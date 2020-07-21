<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	
<?php

if ($_REQUEST["nombre"] == "") {
    print "<p>No ha escrito ningún nombre</p>";
} else {
    print "<p>Su nombre es $_REQUEST[nombre]</p>\n"; 	 
}
if ($_REQUEST["apellido"] == "") {
    print "<p>No ha escrito ningún apellido</p>";
} else {
    print "<p>Su apellido es $_REQUEST[apellido]</p>\n"; 	 
}
if ($_REQUEST["genero"] == "") {
    print "<p>No ha escrito ningún genero</p>";
} else {
    print "<p>Su genero es $_REQUEST[genero]</p>\n"; 	 
}
if ($_REQUEST["edad"] == "") {
    print "<p>No ha escrito ningún edad</p>";
} else {
    print "<p>Su edad es $_REQUEST[edad]</p>\n"; 	 
}
if ($_REQUEST["fecha"] == "") {
    print "<p>No ha escrito ningún fecha</p>";
} else {
    print "<p>Su fecha es $_REQUEST[fecha]</p>\n"; 	 
}
if ($_REQUEST["email"] == "") {
    print "<p>No ha escrito ningún email</p>";
} else {
    print "<p>Su email es $_REQUEST[email]</p>\n"; 	 
}


if (isset($_REQUEST["acepto"])) {
    print "<p>Desea recibir información</p>\n";
} else {
    print "<p>No desea recibir información</p>\n";
}
?>
</body>
</html>