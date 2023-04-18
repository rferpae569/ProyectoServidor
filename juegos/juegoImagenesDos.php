<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../icono/claquetaicon.png">
    <title>JuegoImagenesDos</title>
    <link rel="stylesheet" href="../css/EstiloImagen.css">
    <script src="../javascript/Scripts.js"></script>
</head>
<?php
    session_start(); //Creamos la sesion
    include "../funciones/Funciones.php"; //Requirimos las funciones del archivo "Funciones.php"
    $numero=numAleatorio(); //Almacenammos en la variable el numero aleatorio
    $_SESSION["aleatorio"]=$numero; //creamos la sesion aleatorio para almacenar el numero aleatorio para la imagen.
    if(!isset($_SESSION["intentosusuario1"]) && !isset($_SESSION["intentosusuario2"])){ //Si no existe la sesion "intentosusuario1" y "intentosusuario2", la creamos, y le decimos que vale tres.
        $_SESSION["intentosusuario1"]=3;
        $_SESSION["intentosusuario2"]=3;
    }else if(isset($_SESSION["intentosusuario1"]) && isset($_SESSION["intentosusuario2"])){ //Si existen, comprobamos que vale tres, y si no vale 3, le decimos que vuelva valer 3.
        if($_SESSION["intentosusuario1"]==3 && $_SESSION["intentosusuario2"]==3){
            $_SESSION["intentosusuario1"]=3;
            $_SESSION["intentosusuario2"]=3;
        }else if($_SESSION["intentosusuario1"]!=3 || $_SESSION["intentosusuario2"]!=3){
            $_SESSION["intentosusuario1"]=3;
            $_SESSION["intentosusuario2"]=3;
        }
    }

    $rankingUsuario1=cogeRankingUsuario($_SESSION["usuario1"]);
    $rankingUsuario2=cogeRankingUsuario($_SESSION["usuario2"]);

    if($_SESSION["puntosusuario1"]==0 && $_SESSION["intentosusuario1"]==3 && $_SESSION["puntosusuario2"]==0 && $_SESSION["intentosusuario2"]==3){ 
        $jugadaUsuario1=cogeJugadaUsuarios();
        $jugadaUsuario2=cogeJugadaUsuarios(); 
        incrementaJugadaImagenDOS($jugadaUsuario1,$jugadaUsuario2);
    }

    echo ("<h1>Usuario1: " . $_SESSION["usuario1"] . "<h1>"); 
    echo ("<h1>Puntos: " . $_SESSION["puntosusuario1"]. "</h1>");
    echo("<h1>Record: " . implode(cogeRecordImagenDOS($rankingUsuario1)) . "</h1>"); //Mostramos su record

    if($_SESSION["intentosusuario1"]==3){ //Si la sesion de intentosusuario1 vale 3, mostramos tres imagenes.
        echo ("<h1>Intentos: " . "</h1>");
        echo '<div style="display: flex; justify-content: center;"> <img src="../icono/claquetaicon.png" style="width:30px;height:30px;margin: 0px 2px" />   <img src="../icono/claquetaicon.png" style="width:30px;height:30px;margin: 0px 2px" />   <img src="../icono/claquetaicon.png" style="width:30px;height:30px;margin: 0px 2px" /> </div>';         
    }else if ($_SESSION["intentosusuario1"]==2){ //Si la sesion de intentos vale 2, mostramos dos imagenes.
        echo ("<h1>Intentos: " . "</h1>");
        echo '<div style="display: flex; justify-content: center;"> <img src="../icono/claquetaicon.png" style="width:30px;height:30px;margin: 0px 2px" />   <img src="../icono/claquetaicon.png" style="width:30px;height:30px;margin: 0px 2px" /> </div>';         
    }else if($_SESSION["intentosusuario1"]==1){
        echo ("<h1>Intentos: " . "</h1>"); //Si la sesion de intentos vale 1, mostramos una imagen.
        echo '<div style="display: flex; justify-content: center;"> <img src="../icono/claquetaicon.png" style="width:30px;height:30px;margin: 0px 2px" /> </div>'; 
    }
 
    echo ("<h1>Usuario2: " . $_SESSION["usuario2"] . "<h1>"); 
    echo ("<h1>Puntos: " . $_SESSION["puntosusuario2"]. "</h1>"); 
    echo("<h1>Record: " . implode(cogeRecordImagenDOS($rankingUsuario2)) . "</h1>"); //Mostramos su record
    

    if($_SESSION["intentosusuario2"]==3){ //Si la sesion de intentosusuario2 vale 3, mostramos tres imagenes.
        echo ("<h1>Intentos: " . "</h1>");
        echo '<div style="display: flex; justify-content: center;"> <img src="../icono/claquetaicon.png" style="width:30px;height:30px;margin: 0px 2px" />   <img src="../icono/claquetaicon.png" style="width:30px;height:30px;margin: 0px 2px" />   <img src="../icono/claquetaicon.png" style="width:30px;height:30px;margin: 0px 2px" /> </div>';         
    }else if ($_SESSION["intentosusuario2"]==2){ //Si la sesion de intentos vale 2, mostramos dos imagenes.
        echo ("<h1>Intentos: " . "</h1>");
        echo '<div style="display: flex; justify-content: center;"> <img src="../icono/claquetaicon.png" style="width:30px;height:30px;margin: 0px 2px" />   <img src="../icono/claquetaicon.png" style="width:30px;height:30px;margin: 0px 2px" /> </div>';         
    }else if($_SESSION["intentosusuario2"]==1){
        echo ("<h1>Intentos: " . "</h1>"); //Si la sesion de intentos vale 1, mostramos una imagen.
        echo '<div style="display: flex; justify-content: center;"> <img src="../icono/claquetaicon.png" style="width:30px;height:30px;margin: 0px 2px" /> </div>'; 
    }
?>
<body>
    <h1>¿A que película pertenece esta imagen?</h1>
    <img src="../img/<?php echo cogeImagen($numero); ?>"><!--Cogemos la imagen de la base de datos-->
    <form action="../comprobacion/comprobarRespuestaDOS.php" method="post" autocomplete="off"><!--Creamos un formulario para que el usuario pueda responder-->
    <div id="titulopelicula"></div><!-- Creamos un div para mostrar los datos del AJAX-->
    <input id="titulo" type="text" placeholder="Introduce la respuesta" name="respuesta" onkeyup="TituloPeliculaAJAX(this.value)">    
    <input type="submit" id="comprobar"  name="comprobar" value="comprobar">
    </form>
</body>
</html>
</html>