<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../icono/claquetaicon.png">
    <title>logindosjugadores</title>
    <!-- <link rel="stylesheet" href="../bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <script src="bootstrap-5.2.3-dist/js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" href="../css/EstiloFormulario.css">
    <script src="../javascript/Scripts.js"></script>
</head>
<?php
    if($_COOKIE['cookies']!='aceptar'){ //Si la cookie no vale "Aceptar", nos llevara al index.
        header("Location: ../Index.php");    
    }
?>
<body>
    <h1>Modo dos jugadores</h1>
    <h1>Por favor, inicie sesion para jugar</h1>
    <form action="../comprobacion/ComprobarDosJugadores.php" method="POST" autocomplete="off">
            <label for="jugador1">Jugador 1:</label>
            <input type="text" id="usuario1" name="usuario1" placeholder="Introduce el nombre del jugador1">
            <label for="contrasena1">Contraseña Jugador 1:</label>
            <div class="contenidocontraseña1">
            <input type="password" placeholder="Introduce tu contraseña" name="contrasena1" id="contrasena1">
            <button type="button" id="botoncontrasena1">Mostrar</button>
            </div> 
            <label for="jugador2">Jugador 2:</label>
            <input type="text" id="usuario2" name="usuario2" placeholder="Introduce el nombre del jugador2">
            <label for="contrasena2">Contraseña Jugador 2:</label>
            <div class="contenidocontraseña2">
            <input type="password" placeholder="Introduce tu contraseña" name="contrasena2" id="contrasena2">
            <button type="button" id="botoncontrasena2">Mostrar</button>
            </div>             
            <input type="submit" id="iniciar" name="iniciar" value="IniciarSesion">
    </form>
</body>
</html>