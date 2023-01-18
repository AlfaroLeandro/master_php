<?php

/*
 * Crear un array con el contenido de la siguiente tabla:
 * ACCION   AVENTURA    DEPORTE
 * GTA      ASSCREED    FIFA19
 * COD      CRASH BAND  PES19
 * PUBG     PRINCE OF P MOTOGP19
 * 
 * Cada columna debe ir en un fichero separado
 */

require_once 'ejercicio5_accion.php';
require_once 'ejercicio5_aventura.php';
require_once 'ejercicio5_deporte.php';

echo "<h1> Tabla con videojuegos</h1>"
. "<table border='3'>"
. "<tr>";

echo "<td>$ACCION[0]</td>";
echo "<td>$AVENTURA[0]</td>";
echo "<td>$DEPORTE[0]</td>";

echo "</tr>";

for($i = 1; $i<=3; $i++)
{
    echo "<tr>"
    . "<td> $ACCION[$i] </td>"
    . "<td> $AVENTURA[$i] </td>"
    . "<td> $DEPORTE[$i] </td>"
    . "</tr>"; 
}

echo "</table>";