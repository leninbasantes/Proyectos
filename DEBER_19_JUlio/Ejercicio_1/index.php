<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="jquery-1.7.1.min.js"></script>
    <title>Document</title>
</head>
<body>
<script type="text/javascript">
    $.getJSON("ajax.json",function(data)){
        for(usuario in data.users){
            $("#usuarios".append("<
                option>"+data.users[usuario].nombre+"</option>");
        }
    });
</body>
</html>