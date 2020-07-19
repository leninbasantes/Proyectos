<!DOCTYPE html>
    <html>
    <head>
    <script type="text/javascript" src="jquery-1.7.1.min.js">//Aqui se procede a utilizar el "jquesy" que descargue 
    </script>

    </head>
    <body>
	<p>Lo que contiene el JSON es: </p>
	<select id="usuarios"></select>	
    </body>
	
<script type = "text/javascript" language = "javascript">
	$.getJSON('ajax.json', function(data) { 
		for(usuario in data.users){
			console.log(data.users[usuario].nombre)
			$('#usuarios').append("<option>"+data.users[usuario].nombre+"</option>")
		}
    });
</script>
</html>


