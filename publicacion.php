<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="publicacion.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <h1>Bienvenido </h1>
    <table border=4>
       <th>
        Categoria:
       <select name="tipo_categoria" id="tipo_categoria">
            <option value=1>Postre</option>
            <option value=2>Comida Rapida</option>
            <option value=3>Frituras</option>
        </select>
        <textarea rows="8" cols="50" placeholder="Escribe algo..." id="blogText"></textarea><br>
        <input type="file" id="file" accept="image/*" onchange="mostrar()"/>
        <br>
        <img id="img"/>
       <center> <button onclick="returnPost()">Enviar publicacion</button></center>
       </th>
    </table>
    <div id="app"><div>
    </div>
    <script src="publicacion.js"></script>  
    <script>
        function mostrar(){
            var archivo = document.getElementById("file").files[0];
            var reader = new FileReader();
            if (file) {
                reader.readAsDataURL(archivo );
                reader.onloadend = function () {
                document.getElementById("img").src = reader.result;
                }
            }
            }
    </script> 
</body>
</html>
<?php
    
?>
