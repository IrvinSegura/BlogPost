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
        <form action="login.php" method="post" style="border:2px solid red; max-width:400px; height: 400px;; background-color: orangered;">
            <h1>Registrarse</h1>
            Tipo de Usuario: <select name="tipo_usuario" id="tipo_usuario">
                <option value="Admin">Administrador</option>
                <option value="Usuario">Usuario</option>
            </select><br><br>
            Nombre: <input type="text" id="nombre" name="nombre" placeholder="Nombre"><br><br>
            Apellido: <input type="text"id="apellido" name="apellido" placeholder="Apellido"><br><br>
            Usuario: <input type="text" id="usuario" name="usuario" placeholder="Usuario"><br><br>
            Email: <input type="email" id="email" name="email" placeholder="Email"><br><br>
            Contraseña: <input type="password" id="password" name="contraseña" placeholder="Contraseña"><br><br>
            <input type="submit" value="Registrarse"><br><br>
            Ya tienes cuenta? <a href="login.php">Inicia Sesion</a>
        </form>
    </center>
</body>
</html>
<?php    
    $tipo_usuario = $_POST['tipo_usuario'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];
    $conexion = mysqli_connect ("localhost", "root", "", "blog");
    $consulta = "INSERT INTO usuario (tipo_usuario, nombre, apellido, usuario, email, password) VALUES ('$tipo_usuario', '$nombre', '$apellido', '$usuario', '$email', '$contraseña')";
    $resultado = mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
?>
