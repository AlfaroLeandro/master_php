<?php
/* Ejercicio: hacer un programa todos los números impares entre 2 numeros que nos lleguen por
la URL usando $_GET */

//http://localhost/master_php/aprendiendo-php/11-ejercicios1/ejercicio5.php?n1=2&n2=1

//isset() para validar que $_GET[] tiene algo

for($i=$_GET['n1'] + 1 ; $i<$_GET['n2']; $i++)
    if($i % 2!=0)    
        echo "<h1>$i</h1>";

?>
