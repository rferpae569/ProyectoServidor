<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../icono/claquetaicon.png">
    <title>ActualizarRegistro</title>
    <!-- <link rel="stylesheet" href="../bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <script src="../bootstrap-5.2.3-dist/js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" href="../css/EstiloFormulario.css">
    <script src="../javascript/Scripts.js"></script>
</head>
<body>
    <?php
        if($_COOKIE['cookies']!='aceptar'){ //Si las cookies no valen "Aceptar", nos quedaremos en el index
            
            header("Location: ../Index.php");    
        }
    ?>
    <h1>Por favor, actualicé sus datos</h1>
    <form action="Actualizar.php" method="post" autocomplete="off"><!--Creamos el formulario para actualizar el registro-->
        <label for="nombre">Nombre de usuario:</label>
        <input type="text" placeholder="Ponga su nombre de usuario para actualizar el correo y la contraseña" name="actnombre"><br>
        <label for="password">Contraseña:</label>
        <div class="contenidocontraseña">
        <input type="password" placeholder="Introduce tu contraseña" name="contrasena" id="contrasena">
        <button type="button" id="botoncontrasena">Mostrar</button>
        </div>            
        <label for="correo">Correo:</label>
        <input type="text" placeholder="Actualice el correo" name="actcorreo"><br>
        <input type="submit" id="actualizar" name="actualizar" value="Actualizar">
    </form>
</body>
</html>