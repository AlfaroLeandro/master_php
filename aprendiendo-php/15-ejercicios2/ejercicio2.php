<?php

/*
 * Un programa añada valores a un array mientras que su long sea menor a 120
 * y luego mostrarlo por pantalla
 */

define('LONG_ARR_MAX', 120);

$array = [];

for($i = 0; $i<LONG_ARR_MAX; $i++)
{
    array_push($array, rand());
}
    

echo "<h1> muestro los valores generados: </h1>"
. "<ul>";

foreach ($array as $key => $x) 
    echo "<li> pos" . ($key+1) . ": $x </li>";


echo "</ul>";
