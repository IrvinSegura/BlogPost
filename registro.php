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
        <form action="publicacion.php" method="post" style="border:2px solid red; max-width:400px; height: 400px;; background-color: orangered;">
            <h1>Registrarse</h1>
            Nombre: <input type="text" name="nombre" placeholder="Nombre"><br><br>
            Apellido: <input type="text" name="apellido" placeholder="Apellido"><br><br>
            Usuario: <input type="text" name="usuario" placeholder="Usuario"><br><br>
            Contraseña: <input type="password" name="contraseña" placeholder="Contraseña"><br><br>
            <input type="submit" value="Registrarse"><br><br>
            Ya tienes cuenta? <a href="login.php">Inicia Sesion</a>
        </form>
    </center>
</body>
</html>