<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icono/claquetaicon.png">
    <title>JuegoMusica</title>
    <link rel="stylesheet" href="css/EstiloCanciones.css">
    <script src="javascript/scripts.js"></script>
</head>
<?php
    session_start(); //Creamos la sesion
    include "Funciones.php"; //Requirimos las funciones del archivo "Funciones.php"
    $numero=numAleatorio(); //Almacenammos en la variable el numero aleatorio
    $_SESSION["aleatorio"]=$numero; //creamos la sesion aleatorio para almacenar el numero aleatorio para la imagen.
    
    echo ("<h1>Usuario: " . $_SESSION["usuario"] . "<h1>"); //Mostramos el usuario iniciado con la sesion.
    echo ("<h1>Puntos: " . $_SESSION["puntos"]. "</h1>"); //Mostramos los puntos con la sesion.
?>
<body>
    <h1>A que pelicula pertenece esta musica</h1>

    <audio controls>
    <source src="musica/<?php echo cogeMusica($numero);?>" type="audio/mp3"><!--Mostramos el audio de la cancion-->
        Tu navegador no soporta audio HTML5.
    </audio>

    <div id="pistaCancion" style="display:none;">
    <h1>Pista Musical:</h1>
    <?php echo obtenerCanciones($numero) ?>
    </div>

    <button onclick="mostrarPistaMusica()">Pista</button> <!--Añadimos el boton para mostrar la pista al hacer click en el con javascript-->

    <form action="comprobarRespuesta3.php" method="post"><!--Creamos un formulario para que el usuario pueda responder-->
    <input type="text" placeholder="Introduce la respuesta" name="respuesta">
    <input type="submit" id="comprobar"  name="comprobar" value="comprobar">
    </form>
</body>
</html>