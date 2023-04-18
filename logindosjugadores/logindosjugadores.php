<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../icono/claquetaicon.png">
    <title>logindosjugadores</title>
    <link rel="stylesheet" href="../css/EstiloIndex.css">
</head>
<?php
    if($_COOKIE['cookies']!='aceptar'){ //Si la cookie no vale "Aceptar", nos llevara al index.
        header("Location: ../Index.php");    
    }
?>
<body>
    <h1>Modo dos jugadores</h1>
    <h1>Por favor, inicie sesion para jugar</h1>
    <form action="../comprobacion/ComprobarDosJugadores.php" method="POST">
            <label for="jugador1">Jugador 1:</label>
            <input type="text" id="usuario1" name="usuario1" placeholder="Introduce el nombre de usuario">
            <label for="">Contraseña Jugador 1:</label>
            <input type="text" id="contrasena1" name="contrasena1" placeholder="Introduce la contraseña del jugador1">
            <label for="jugador2">Jugador 2:</label>
            <input type="text" id="usuario2" name="usuario2" placeholder="Introduce el nombre de usuario">
            <label for="">Contraseña Jugador 2:</label>
            <input type="text" id="contrasena2" name="contrasena2" placeholder="Introduce la contraseña del jugador2">
            <input type="submit" id="iniciar" name="iniciar" value="IniciarSesion">
    </form>
</body>
</html>