<?php

require '../vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf();
//$html2pdf->writeHTML('<h1>HelloWorld</h1>This is my first test');
//$html2pdf->writeHTML("<h6> " . __DIR__ . "</h6>");

//Recoger la vista a imprimir

ob_start();
require_once 'pdf_para_generar.php';
$html = ob_get_clean();

$html2pdf->writeHTML($html);
$html2pdf->output();