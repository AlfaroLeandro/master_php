<?php

/* Imprimir por pantalla todas las tablas de multiplicar del 1 al 10*/

echo "<table border='1'>";

echo "<tr>";
for($i=1; $i<=10; $i++)
    echo "<td>Tabla del $i</td>";
echo "</tr>";

for($i=1; $i<=10; $i++)
{
    echo "<tr>";    
    for($j=1; $j<=10; $j++)
        echo "<td>".($i*$j)."</td>";
    
    echo "</tr>";
}

    

echo "</table>";
