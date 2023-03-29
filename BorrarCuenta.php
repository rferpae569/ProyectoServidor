<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icono/claquetaicon.png">
    <title>BorrarCuenta</title>
    <link rel="stylesheet" href="css/EstiloFormulario.css">
</head>
<body>
    <?php
        if($_COOKIE['cookies']!='aceptar'){ //Si las cookies no valen "Aceptar", nos quedaremos en el index

            header("Location: Index.php");  
              
        }
    ?>
    <h1>Lamentamos que quiera marcharse</h1>
    <form action="borrar.php" method="post"><!--Creamos un formulario para borrar el registro de la base de datos-->
        <label for="usuario">Usuario:</label>
        <input type="text" placeholder="Introduce tu usuario" name="borrusuario"><br>
        <label for="correo">Correo:</label>
        <input type="text" placeholder="Introduce tu correo" name="borrcorreo"><br>
        <input type="submit" id="borrar" name="borrar" value="Borrar">
    </form>
</body>
</html>