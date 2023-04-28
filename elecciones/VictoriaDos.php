<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../icono/claquetaicon.png">
    <title>Victoria</title>
    <!-- <link rel="stylesheet" href="../bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <script src="../bootstrap-5.2.3-dist/js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" href="../css/EstiloFormulario.css">
</head>
<?php
    require "../funciones/Funciones.php";
     session_start(); //Creamos la sesion
    if(isset($_POST["cerrar"])){
    if($_POST["cerrar"]="cerrar"){ //Si pulsamos en cerrar, e cierra la sesion
        header("Location: ../logoff/logoff.php");
    }
}
 
?>
<body>
    <h1>¡Enhorabuena, ha ganado <?php mostrarturno($_SESSION["usuario1"], $_SESSION["usuario2"]);?></h1>
    <form action="VictoriaDos.php" method="post"><!--Creamos un formulario para cerrar la sesion.-->
    <input type="submit" value="Cerrar Sesion" id="cerrar" name="cerrar">
    </form>
</body>
</html>