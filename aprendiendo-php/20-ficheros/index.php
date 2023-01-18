<?php

/*
$archivo = fopen("fichero_texto.txt", "a+"); //r -> lectura, w -> escritura, x -> ejecucion
//a+ -> lect y escritura

while(!feof($archivo))
{
    echo fgets($archivo);
    echo "<br/>";
}

fwrite($archivo, "\nhola mun2");

fclose($archivo);
 
 */

//copy('fichero_texto.txt', 'fichero_copiado.txt') or die("Error al copiar");
//rename('fichero_copiado.txt','archivo_loco.txt');
//unlink('archivo_loco.txt') or die('Error al borrar el archivo');

if(file_exists('fichero_texto.txt'))
    echo "existe el fichero";