<?php

$nombre ="Leandro";

//Debuggear y ver un dato
var_dump($nombre);

//Fecha

echo date('d-m-Y');
echo '<br>';
echo date('d-M-Y');
echo '<br>';
echo time(); //fecha formato Unix, va cambiando por segundo


echo '<br>';echo '<br>';

//Matematicas

echo "raiz cuadrada de 10: " . (sqrt(10));
echo '<br>';
echo "Numero aleatorio entre 10 y 40: " . (rand(10,40));
echo '<br>';
echo "Numero pi: " . pi();
echo '<br>';
echo "redondear: " . round(7.81256151,2);

echo '<br>';echo '<br>';

//Mas funciones

echo gettype($nombre);

echo '<br>';echo '<br>';

//funciones is_tipo de dato

if(is_string($nombre))
    echo "es un string";

echo '<br>';

if(!isset($var_inexistente))
    echo "la variable 'var_inexistente' no existe";


echo '<br>';

$frase = "   mi contenido   ";

var_dump($frase);
var_dump(trim($frase)); //trim: borra caracter al principio y al final de un string


//Eliminar variables o arrays

$anio = 2020;
unset($anio);
//^^^var anio eliminada

echo '<br>';

//comprobar q una variable esta vacia, es 0 o es null

$texto = "";
$texto = false;
$texto = null;

if(empty($texto))
    echo "la variable 'texto' esta vacia";

echo '<br>';echo '<br>';

//contar caracteres de una cadena

echo "cantidad de caracteres de la var nombre: " . strlen($nombre);

echo '<br>';

//encontrar un substring

echo "buscar 'dro' en 'Leandro': " . strpos($nombre, "dro");

echo '<br>';
//reemplazar contenido de un string

echo "Leandro, remplazo 'o' por 'e': " . str_replace("o", "e", $nombre); 


echo '<br>';echo '<br>';
//MAYUS Y MINUS

echo "mayus: " . strtoupper($nombre);
echo '<br>';
echo "minus: " . strtolower($nombre);