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
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $conexion = mysqli_connect ("localhost ", "root", "", "blog_post");
    $consulta = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contraseña = '$contraseña'";
    $resultado = mysqli_query($conexion, $consulta);
    $filas = mysqli_num_rows($resultado);
    if($filas){
        header("location:publicacion.php");
    }else{
        echo "Error en la autenticacion";
    }
?>