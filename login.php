<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href=".css">
    <style>
        body{
            background-color: orange;
            font: 15px Arial, sans-serif;
        }
    </style>
</head>
<body>
    <center>
        <br><br><br><br><br><br><br><br><br>
        <form action="publicacion.php" method="post" style="border:2px solid red; max-width:400px;height: 400px;; background-color: orangered;">
            <br><br><h1>Iniciar Sesion</h1>
            <input type="text" name="usuario" placeholder="Usuario" required><br><br>
            <input type="password" name="contraseña" placeholder="Contraseña" required><br><br>
            <input type="submit" value="Iniciar Sesion"><br><br>
            No tienes cuenta? <a href="registro.php">Registrate</a>
        </form>
    </center>
</body>
</html>
<?php
?>
