<?php

$cantantes = ['Indio solari', 'Luca Prodan', 'Federico Moura', 'Alex Caniggia'];
$numeros = [1,5,7,9,20,11];

sort($cantantes);
asort($cantantes); 
var_dump($cantantes);

arsort($cantantes); //Orden inverso
var_dump($cantantes);

sort($numeros);
var_dump($numeros);

//añadir elementos a un array

$cantantes[] = "Guido kackzka";
var_dump($cantantes);

array_push($cantantes, "xd");
array_pop($cantantes);
unset($cantantes[1]);
var_dump($cantantes);

//echo $cantantes[1]; -> crash
echo $cantantes[array_rand($cantantes)];

var_dump(array_reverse($numeros));

//Buscar dentro de un array

var_dump(array_search('asdas', $cantantes)); //No encuentra -> devuelve false
var_dump(array_search('Indio solari', $cantantes)); //devuelve el indice

//ANDA COMO C aspidhoashd{osa
if(1)
    echo "entro";

//sizeof == count
