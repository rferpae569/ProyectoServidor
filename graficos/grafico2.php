<?php
include("../funciones/Funciones.php");
include("../jpgraph/jpgraph.php");
include("../jpgraph/jpgraph_bar.php");

// Obtener los datos de puntos y nombres de usuario
$datos = cogenombreRanking();

// Crear los arrays con los puntos y nombres de usuario
$puntosImagen = array();
$puntosPreguntas = array();
$puntosMusica = array();
$nombresUsuario = array();

foreach ($datos as $dato) {
    $puntosImagen[] = $dato["PuntosImagen"];
    $puntosPreguntas[] = $dato["PuntosPreguntas"];
    $puntosMusica[] = $dato["PuntosMusica"];
    $nombresUsuario[] = $dato["Nombre"];
}

// Crear la imagen
$grafico = new Graph(500, 600);

// Especificar el tipo de gráfico
$grafico->SetScale("textint");

// Crear el título
$grafico->title->Set("Puntos obtenidos:");

// Crear los tres gráficos
$p1 = new BarPlot($puntosImagen);
$p2 = new BarPlot($puntosPreguntas);
$p3 = new BarPlot($puntosMusica);

// Especificar el color de las barras
$p1->SetFillColor('blue');
$p2->SetFillColor('red');
$p3->SetFillColor('green');

// Añadir los gráficos al gráfico principal
$barraGrupo = new GroupBarPlot(array($p1, $p2, $p3));
$grafico->Add($barraGrupo);

// Especificar los nombres de usuario en el eje X
$grafico->xaxis->SetTickLabels($nombresUsuario);

// Añadir leyenda
$p1->SetLegend('Puntos Imagen');
$p2->SetLegend('Puntos Preguntas');
$p3->SetLegend('Puntos Musica');
$grafico->legend->SetPos(0.1, 0.95, 'right', 'top');

// Mostrar el gráfico
$grafico->Stroke();
?>