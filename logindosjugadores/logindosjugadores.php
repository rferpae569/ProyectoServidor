<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../icono/claquetaicon.png">
    <title>logindosjugadores</title>
    <link rel="stylesheet" href="../bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
    <script src="../javascript/Scripts.js"></script>
</head>
<?php
if ($_COOKIE['cookies'] != 'aceptar') { //Si la cookie no vale "Aceptar", nos llevara al index.
    header("Location: ../Index.php");
}
?>

<body class="fondologin">
    <div class="container">
        <h1 class="text-center mt-5">Modo dos jugadores</h1>
        <h2 class="text-center mt-3">Por favor, inicie sesión para jugar</h2>
        <form class="mt-5" action="../comprobacion/ComprobarDosJugadores.php" method="POST" autocomplete="off">
            <!--Creamos el formulario para que los dos jugadores inicien sesion-->
            <div class="form-group">
                <label for="usuario1">Jugador 1:</label>
                <input type="text" class="form-control" id="usuario1" name="usuario1"
                    placeholder="Introduce el nombre del jugador 1">
            </div>
            <div class="form-group">
                <label for="contrasena1">Contraseña Jugador 1:</label>
                <div class="input-group">
                    <input type="password" class="form-control" placeholder="Introduce tu contraseña" name="contrasena1"
                        id="contrasena1">
                    <div class="input-group-append">
                        <button type="button" class="mostrar-contrasena btn btn-primary rounded"
                            data-id-contrasena="contrasena1">Mostrar</button>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="usuario2">Jugador 2:</label>
                <input type="text" class="form-control" id="usuario2" name="usuario2"
                    placeholder="Introduce el nombre del jugador 2">
            </div>
            <div class="form-group">
                <label for="contrasena2">Contraseña Jugador 2:</label>
                <div class="input-group">
                    <input type="password" class="form-control" placeholder="Introduce tu contraseña" name="contrasena2"
                        id="contrasena2">
                    <div class="input-group-append">
                        <button type="button" class="mostrar-contrasena btn btn-primary rounded"
                            data-id-contrasena="contrasena2">Mostrar</button>
                    </div>
                </div>
            </div>
            <div class="text-center"><br>
                <button type="submit" class="btn btn-primary">Iniciar sesión</button>
            </div>
        </form>
    </div>
</body>

</html>