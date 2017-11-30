<?php
/**
 * Created by PhpStorm.
 * User: chinegua
 * Date: 30/11/17
 * Time: 11:28
 */

$texto= "MTIzNCA1Njc4IDkwMTIgMzQ1Ng=="; // Mete aquí el número de tarjeta codificado
$texto_claro = base64_decode($texto);
echo $texto_claro;