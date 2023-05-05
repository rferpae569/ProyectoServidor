<script src="../javascript/Scripts.js"></script>
<link rel="stylesheet" href="../css/style.css">
<?php
include("../funciones/Funciones.php");

if (isset($_POST['nombre'])) { //Este if sirve para mostrar los datos del AJAX en el juego de las imagenes y en el de la musica
  $nombre = trim($_POST['nombre']);
  $peliculas = cogeTituloAJAX($nombre);

  if (!$peliculas) {
    echo "<div style='color: white;'>No hay coincidencias</div>";
  } else {
    $output = '<div class="colorajax">';
    foreach ($peliculas as $pelicula) {
    $output .= $pelicula['nombre'] . "<br>";
  }
  $output .= '</div>';
  echo $output;
  }
}

if (isset($_POST['respuesta'])) { //Este if sirve para mostrar los datos del AJAX en el juego de las preguntas
  $respuesta = trim($_POST['respuesta']);
  $respuestas = cogeRespuestaAJAX($respuesta);

  if (!$respuestas) {
    echo "<div style='color: white;'>No hay coincidencias</div>";
  } else {
    $output = '<div class="colorajax">';
    foreach ($respuestas as $respuesta) {
      $output .= $respuesta['respuesta'] . "<br>";
    }
    $output .= '</div>';
    echo $output;
  }
}
?>