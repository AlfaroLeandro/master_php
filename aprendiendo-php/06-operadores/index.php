<?php

$n1 = 5;
$n2 = 33;

echo 'suma: ' . ($n1 + $n2) . '<br/>';
echo 'resta: ' . ($n1 - $n2) . '<br/>';
echo 'mult: ' . ($n1 * $n2) . '<br/>';
echo 'div: ' . ($n1 / $n2) . '<br/>';
echo 'modulo: ' . ($n1 % $n2) . '<br/>';

//Operadores de incremento y decremento

$anio = 2019;

$anio++;
$anio--;
++$anio;
--$anio;
echo "<h1>$anio</h1>";

//Operadores de asignacion

$edad = 21;

echo $edad . '<br/>';
echo ($edad+=5) . '<br/>';        

?>