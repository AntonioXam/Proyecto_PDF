<?php

use Mpdf\HTMLParserMode;

require_once('vendor/autoload.php');

$mpdf = new \Mpdf\Mpdf([

]);

$mpdf->WriteHTML("<p>Hola Mundo</p>", \Mpdf\HTMLParserMode::HTML_BODY);
$mpdf->Output();


