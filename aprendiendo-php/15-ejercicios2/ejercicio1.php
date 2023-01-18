<?php

/*
 * array de 8 numeros enteros, que haga lo sig:
 * 1-recorrerlo y mostrarlo
 * 2-ordenarlo y mostrarlo
 * 3-mostrar su longitud
 * 4-buscar algun elemento
 */

$arr = array(4,5,699,1,651,32,1684,-5);

echo "<h1>1-Recorro y muestro</h1>"
. "<ul>";

foreach ($arr as $x) {
    echo "<li>$x</li>";
}

echo "</ul>";   

echo "<h1>2-ordeno y muestro</h1>"
. "<ul>";

sort($arr);

foreach ($arr as $x) {
    echo "<li>$x</li>";
}

echo "</ul>";   

echo "<h1>3-longitud: " . sizeof($arr) . "</h1>";

echo "<h1>4-busco '32':" . array_search(32, $arr) . "</h1>";
