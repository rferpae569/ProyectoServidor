<?php
    
    //incluimos la libreria de jpgraph
    include ("../funciones/Funciones.php");
    include ("../jpgraph/jpgraph.php");
    include ("../jpgraph/jpgraph_pie.php");
    include ("../jpgraph/jpgraph_pie3d.php");

     // Creamos los datos
     $datos = array_map('intval', calcularPorcentajeJugadas());

     //Calculamos los porcentajes
     $total = array_sum($datos);
     $porcentajes = array();
     foreach ($datos as $dato) {
         $porcentajes[] = ($dato/$total)*100;
     }
 
     //creamos la imagen
     $grafico = new PieGraph(500,600);
 
     //especificamos el tipo de grafico
     $grafico->SetScale("textint");
 
     //creamos el titulo
     $grafico->title->Set("Porcentaje de veces jugadas:");
 
     //creamos el color del fondo
     $grafico->SetBackgroundImage("../img/blanco.png",BGIMG_FILLFRAME);
 
     //creamos el plot
     $p1 = new PiePlot3D($porcentajes);
 
     //especificamos el color de las barras
    //  $p1->SetFillColor('#D0ECF2');
 
     //añadimos al grafico
     $grafico->Add($p1);

     //Añadimos una lista con los colores
     $p1->SetLegends(array("JuegoPeliculas","JuegoPreguntas","JuegoMusica"));
     
     //mostramos el grafico
     $grafico->Stroke();
 
?>
