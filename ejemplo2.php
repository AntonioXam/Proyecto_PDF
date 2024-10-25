<?php

use Mpdf\HTMLParserMode;

require_once('vendor/autoload.php');

$mpdf = new \Mpdf\Mpdf([]);

$html ="
<h4>Titulo principal</h4>
<p align='center'><b>Titulo del documento</b></p>
<hr>
<table border='1' >
        <th>
            <tr>
                <td>Encabezado1</td>
                <td>Encabezado2</td>
            <tr>
        </th>
        <tbody>
            <tr>
                <td>Valor1</td>
                <td>Valor2</td>
            </tr>
            <tr>
                <td>Valor3</td>
                <td>Valor4</td>
            </tr>
            </tbody>
        </table>
        ";

$mpdf->WriteHTML($html);
$mpdf->Output();



