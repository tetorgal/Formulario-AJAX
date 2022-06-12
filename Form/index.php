<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
    <title>Formulario AJAX</title>
    
</head>

<body>

    <form action="" id="formulario" method="POST" class="form">
        <h2 class="titulo">Inicia Sesion</h2>
        <!-- CONTENEDOR FORMULARIO -->
        <div class="contenedor">
            <div class="grupo">
                <input type="text" id="Nom" name="Nombre" class="input" placeholder="  ">
                <label for="Nombre" class="etiqueta">Nombre:</label>
              
                <span class="linea"></span>
            </div>
        </div>
        <!-- CONTENEDOR FORMULARIO -->
        <div class="contenedor">
            <div class="grupo">
                <input type="text" id="Usr" name="Usuario" class="input" placeholder="  ">
                <label for="Usuario" class="etiqueta">Usuario:</label>
                <span class="linea"></span>
            </div>
        </div>
        <!-- CONTENEDOR FORMULARIO -->
        <div class="contenedor">
            <div class="grupo">
                <input type="password" id="Psswrd" name="Clave" class="input" placeholder="  ">
                <label for="Clave" class="etiqueta">Contraseña:</label>
                <span class="linea"></span>
            </div>
            <div id="respuesta"></div>
            <input type="submit" id="enviar" class="submit" value="Entrar">
        </div>
        
    </form>
  
    <script src="jquery-3.6.0.js"></script>
    <script src="validacion.js"></script>
</body>

</html>