<?php
require_once('coche.php');

$coche = new Coche("amarillo", "sedan", 200, "citroen", 400, 5);

var_dump($coche);

echo $coche->mostrarInformacion();

