<!DOCTYPE html>
    <html>
    <head>
    <script type="text/javascript" src="jquery-1.7.1.min.js">
    </script>

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
    </html>>