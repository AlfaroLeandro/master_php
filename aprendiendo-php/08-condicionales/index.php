<?php

/*
 * if(condicion {
 *  instrucciones
 * }
 * else {
 *  otras instrucciones
 * }
 * 
 * OPERADORES DE COMPARACION:
 * == igual -> solo compara valores
 * === identico -> compara valores y tipo de dato
 * != distinto
 * <> distinto (lo mismo que !=)
 * !== no identico
 * 
 * <
 * >
 * <=
 * >=
 * 
 * && and
 * || or
 * ! negacion
 */

$color = "rojo";

if($color=="rojo") {
    echo "el color es rojo";
}
else
{
    echo "el color no es rojo";
}

echo "<br/>";

$anio = 2021;

if($anio ==2019)
    echo "estamos en 2019";
elseif ($anio ==2020)
    echo "estamos en 2020";
else if($anio == 2021)
    echo "estamos en 2021";


echo "<br/>";

$dia = 3;

switch($dia) {
    case 1:
        echo "es 1";
        break;
    case 2:
        echo "es 2";
    case 3:
    case 4:
        echo "es 3 o 4";
        break;
    default: 
        echo "no es del 1 al 4";
        break;
}

// GOTO

goto marca;

echo "<h2> Instruccion 1</h2>";

echo "<h2> Instruccion 2</h2>";

echo "<h2> Instruccion 3</h2>";

marca:
    echo "<h2> me salte 3 echos </h2>";
