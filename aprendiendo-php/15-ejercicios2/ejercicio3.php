<?php

/*
 * Programa que valide si una variable esta vacia, y si lo esta, meterle texto en
 * minusculas y mostrarla con texto en mayus y negrita
 */

$texto = array('txt1', 'txt2', 'txt3');
$arr = [];
$ptr_texto = $texto;

$ptr_texto[0] = 'puto';
echo $texto[0];
//^^^ hace una copia dura, no blanda



if(empty($arr))
{
    $arr = $texto;
    foreach ($arr as $x) {
        echo "<li><strong>" . strtoupper($x) . "</strong></li>";
    }
}
