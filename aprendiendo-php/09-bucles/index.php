<?php

/*
 * BUCLES
 * 
 * while(condicion) {
 *  instrucciones
 * }
 */

$n = 0;

//while($n <= 100)
//    echo "<p>$n</p>";

while($n < 10)
{
    echo "<p>" . (++$n) . "</p>";
    
}

if(isset($_GET['numero']))
{
    var_dump($_GET['numero']); //aparece como string
    var_dump((int) $_GET['numero']); //se castea a int
}
    