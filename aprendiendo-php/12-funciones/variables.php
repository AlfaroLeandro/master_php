<?php

/*
 * var locales
 * var globales
 */

$c = "lorem ipsum";

echo $c;

function holaMundo()
{
    global $c; //LE DIGO QUE USE LA $c GLOBAL
    echo "<h1>$c</h1>";
}

holaMundo();

function buenasDias() {
    return "holo, buenas pa";
}

function buenasTardes() {
    return "holo, buenas pan´t";
}

function buenasNoches() {
    return "puto puto puto";
}

$horario = "buenasNoches";

echo $horario();

$horario="Tardes";

$miFuncion = "buenas" .  $horario;

echo "<h1>" . $miFuncion()  ."</h1>";



