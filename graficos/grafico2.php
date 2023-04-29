<?php

//incluimos la libreria de jpgraph
include("../funciones/Funciones.php");
include("../jpgraph/jpgraph.php");
include("../jpgraph/jpgraph_bar.php");

//Creamos los datos
$datos = cogeDatosRanking();

//Creamos el array con los puntos
$puntosImagen = array();
$puntosPreguntas = array();
$puntosMusica = array();

foreach ($datos as $dato) {
    $puntosImagen[] = $dato["PuntosImagen"];
    $puntosPreguntas[] = $dato["PuntosPreguntas"];
    $puntosMusica[] = $dato["PuntosMusica"];
}

//Creamos la imagen
$grafico = new Graph(500, 600);

//Especificamos el tipo de grafico
$grafico->SetScale("textint");

//Creamos el titulo
$grafico->title->Set("Puntos obtenidos:");

//Creamos los tres gráficos
$p1 = new BarPlot($puntosImagen);
$p2 = new BarPlot($puntosPreguntas);
$p3 = new BarPlot($puntosMusica);

//Especificamos el color de las barras
$p1->SetFillColor('blue');
$p2->SetFillColor('red');
$p3->SetFillColor('green');

//Añadimos los gráficos al gráfico principal
$barraGrupo = new GroupBarPlot(array($p1, $p2, $p3));
$grafico->Add($barraGrupo);

//Añadimos leyenda
$p1->SetLegend('Puntos Imagen');
$p2->SetLegend('Puntos Preguntas');
$p3->SetLegend('Puntos Musica');
$grafico->legend->SetPos(0.1, 0.95, 'right', 'top');

//Añadimos etiquetas
// $nombresUsuarios = cogeNombreRanking($datos);
// $nombres = array();
// foreach($nombresUsuarios as $nombreUsuario){
//     $nombres[] = $nombreUsuario['Nombre'];
// }
// $grafico->xaxis->SetTickLabels($nombres);

//Mostramos el gráfico
$grafico->Stroke();
?>