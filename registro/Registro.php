<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../icono/claquetaicon.png">
    <title>Registro</title>
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
    <h1>Por favor, registrese para jugar</h1>
    <form action="../comprobacion/ComprobarRegistro.php" method="post" autocomplete="off"><!--Creamos el formulario para registrarnos-->
        <label for="nombre">Nombre de usuario:</label>
        <input type="text" placeholder="Introduce el nombre" name="nombre"><br>
        <label for="password">Contraseña:</label>
        <div class="contenidocontraseña">
        <input type="password" placeholder="Introduce tu contraseña" name="contrasena" id="contrasena">
        <button type="button" id="botoncontrasena">Mostrar</button>
        </div>        
        <label for="correo">Correo:</label>
        <input type="text" placeholder="Introduce el correo" name="correo"><br>
        <input type="submit" id="registrar" name="registrar" value="Registrarse">
    </form>
</body>
</html>