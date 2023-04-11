<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icono/claquetaicon.png">
    <title>JuegoImagenes</title>
    <link rel="stylesheet" href="css/EstiloImagen.css">
    <script src="javascript/Script.js"></script>
</head>
<?php
    session_start(); //Creamos la sesion
    include "Funciones.php"; //Requirimos las funciones del archivo "Funciones.php"
    $numero=numAleatorio(); //Almacenammos en la variable el numero aleatorio
    $_SESSION["aleatorio"]=$numero; //creamos la sesion aleatorio para almacenar el numero aleatorio para la imagen.
    if(!isset($_SESSION["intentos"])){ //Si no existe la sesion "intentos", la creamos, y le decimos que vale tres.
        $_SESSION["intentos"]=3;
    }else if(isset($_SESSION["intentos"])){ //Si existe, comprobamos que vale tres, y si vale 0, le decimos que vuelva valer 3.
        if($_SESSION["intentos"]==3){
            $_SESSION["intentos"]=3;
        }else if($_SESSION["intentos"]==0){
            $_SESSION["intentos"]=3;
        }
    }

    echo ("<h1>Usuario: " . $_SESSION["usuario"] . "<h1>"); //Mostramos el usuario iniciado con la sesion.
    echo ("<h1>Puntos: " . $_SESSION["puntos"]. "</h1>"); //Mostramos los puntos con la sesion.
    if($_SESSION["intentos"]==3){ //Si la sesion de intentos vale 3, mostramos tres imagenes.
        echo ("<h1>Intentos: " . "</h1>");
        echo '<div style="display: flex; justify-content: center;"> <img src="icono/claquetaicon.png" style="width:30px;height:30px;margin: 0px 2px" />   <img src="icono/claquetaicon.png" style="width:30px;height:30px;margin: 0px 2px" />   <img src="icono/claquetaicon.png" style="width:30px;height:30px;margin: 0px 2px" /> </div>';         
    }else if ($_SESSION["intentos"]==2){ //Si la sesion de intentos vale 2, mostramos dos imagenes.
        echo ("<h1>Intentos: " . "</h1>");
        echo '<div style="display: flex; justify-content: center;"> <img src="icono/claquetaicon.png" style="width:30px;height:30px;margin: 0px 2px" />   <img src="icono/claquetaicon.png" style="width:30px;height:30px;margin: 0px 2px" /> </div>';         
    }else if($_SESSION["intentos"]==1){
        echo ("<h1>Intentos: " . "</h1>"); //Si la sesion de intentos vale 1, mostramos una imagen.
        echo '<div style="display: flex; justify-content: center;"> <img src="icono/claquetaicon.png" style="width:30px;height:30px;margin: 0px 2px" /> </div>'; 
    }
?>
<body>
    <h1>A que película pertenece esta imagen</h1>
    <img src="img/<?php echo cogeImagen($numero); ?>"><!--Cogemos la imagen de la base de datos-->
    <form action="comprobarRespuesta.php" method="post"><!--Creamos un formulario para que el usuario pueda responder-->
    <input type="text" placeholder="Introduce la respuesta" name="respuesta">
    <input type="submit" id="comprobar"  name="comprobar" value="comprobar">
    </form>
    <div id="resultado"></div>
</body>
</html>