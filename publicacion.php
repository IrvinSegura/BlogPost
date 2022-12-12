<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="publicacion.css">
    <title>Document</title>
    <style>
        body{
            background-color: orange;
            font: 15px Arial, sans-serif;
        }
    </style>
</head>
<body>
    <div class="container">
    <h1>Bienvenido</h1>
    <div>
       <table border=2 style="background-color: red; ">
            <td>
                <details>
                    <summary>Da clic aqui, para visualizar datos sobre programacion</summary>
                    <p>1. El primer programador en todo el mundo fue una mujer. 
                        Se llamaba Ada Lovelace y nació en 1815. Algunas personas creen que 
                        Lovelace publicó el primer algoritmo destinado a ser ejecutado por una máquina.</p>
                    <p>2. El primer lenguaje de programación del mundo se llamó FORTRAN 
                        (acrónimo de Formula Translation), y fue creado en 1956. 
                        El equipo que lo creó, dirigido por el Sr. John Backus, 
                        comenzó a trabajar en él en 1954.</p>
                    <p>3. Más del 70% de todos los trabajos de programación son en campos e industrias
                         fuera de la tecnología. La gente que aprende a programar puede fortalecer 
                         innumerables habilidades del siglo XXI que le ayudarán a hacer un trabajo excepcional en 
                         casi todas las industrias.</p>
                    <p>4. El primer «bug de la computadora» fue llamado así a causa de un insecto real. 
                        Este bicho fue encontrado por Grace Hopper. El ordenador que ella estaba construyendo 
                        comenzó a fallar y fue entonces cuando descubrió una polilla de verdad en el sistema. </p>
                </details>  
            </td>
       </table>
       <br><br>
    </div>
    <table border=4 style="background-color: white;">
       <th>
        Categoria:
       <select name="tipo_categoria" id="tipo_categoria">
            <option value="Postres">Postre</option>
            <option value="Comida Rapida">Comida Rapida</option>
            <option value="Frituras">Frituras</option>
        </select>
        <textarea rows="8" cols="50" placeholder="Escribe algo..." id="blogText" ></textarea><br>
        <input type="file" id="file" accept="image/*" onchange="mostrar()"/>
        <br>
        <img id="img"/>
       <center> <button onclick="returnPost()">Enviar publicacion</button></center>
       </th>
    </table>
    <br><br>
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
