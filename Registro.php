<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icono/claquetaicon.png">
    <title>Registro</title>
    <link rel="stylesheet" href="css/EstiloFormulario.css">
</head>
<?php
    if($_COOKIE['cookies']!='aceptar'){ //Si la cookie no vale "Aceptar", nos llevara al index.
        header("Location: Index.php");    
    }
?>
<body>
    <form action="ComprobarRegistro.php" method="post"><!--Creamos el formulario para registrarnos-->
        <label for="nombre">Nombre de usuario:</label>
        <input type="text" placeholder="Introduce el nombre" name="nombre"><br>
        <label for="password">Contraseña:</label>
        <input type="text" placeholder="Introduce la contraseña" name="password"><br>
        <label for="correo">Correo:</label>
        <input type="text" placeholder="Introduce el correo" name="correo"><br>
        <input type="submit" id="registrar" name="registrar" value="Registrarse">
    </form>
</body>
</html>