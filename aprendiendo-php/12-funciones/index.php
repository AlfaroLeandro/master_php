<?php

/* FUNCIONES
 * 
 * function nombreF($parametro) {
 *  Instrucciones
 * }
 * 
 *  */

function muestraNombres() {
    echo "nom1<br>nom2<br>nom3";
}

muestraNombres();

function tabla($num) {
    var_dump($num);
}

tabla(55);

function calculadora($n1, $n2, $negrita=false) 
{
    if($negrita)
        echo "<h1>";
    echo "Suma: ".($n1+$n2)."<br>";
    echo "Resta: ".($n1-$n2)."<br>";
    if($negrita)
        echo "</h1>";
}

calculadora(2, 5);

calculadora(20, 20, true);


function devuelveNom($nom)
{
    return "el nombre es " . $nom;
}

$cadena = devuelveNom("lel lal");
$cadena .= "<br>";
$cadena .= devuelveNom("lal lol");
echo $cadena;