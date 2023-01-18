<?php


/*
 * 4 var:
 * 1 de tipo array, 1 string, 1 int, 1 boolean
 * q imprima segun el tipo de var q sea
 */

$array = [[],'hola mundo', 16, true];

var_dump($array);

foreach ($array as $i => $x) {
    echo "el elemento " . ($i+1) . " es: " . gettype($x) . "<br/>";
}