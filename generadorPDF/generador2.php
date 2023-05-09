<?php
require "../fpdf/fpdf.php";

// Crear una nueva instancia de FPDF
$pdf = new FPDF();

// Agregar una página al PDF
$pdf->AddPage();

// Definir la fuente y el tamaño de letra para el título
$pdf->SetFont('Arial','B',16);

// Escribir el título del documento
$pdf->Cell(0,10,'Informacion grafica',0,1,'C');

// Definir la fuente y el tamaño de letra para el contenido
$pdf->SetFont('Arial','',16);

// Agregar el HTML al PDF
$pdf->Image('../graficos/grafico1.png', 10, 30, 80, 50);
$pdf->Image('../graficos/grafico2.png', 100, 30, 80, 50);

// Guardar el PDF en descargas del usuario
$pdf->Output('D','graficos.pdf');

// Descargar el archivo en la carpeta de descargas del usuario
$file = 'graficos.pdf';
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="'.basename($file).'"');
header('Content-Length: ' . filesize($file));
readfile($file);

// Redirigir al usuario a la página de eleccion2.php
header('Location: ../elecciones/Eleccion2.php');
?>