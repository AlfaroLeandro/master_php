<?php

define('NOMBRE', 'Leandro Alfaro');
define('WEB', 'alfaroLeandro.github.io');

$WEB = 'web loca mia';

//NOMBRE = 'xd' -> error

echo "<h1>".NOMBRE."</h1>";
echo "<h1>".WEB."</h1>";
echo "<h1>".$WEB."</h1>";

//Constantes predefinidas

echo PHP_OS . '<br/>';
echo PHP_VERSION . '<br/>';
echo PHP_EXTENSION_DIR . '<br/>'; //Indica la carpeta donde estan las extensiones
echo __LINE__. '<br/>'; //Numero de linea en el que estoy sacando este valor
echo __FILE__ . '<br/>'; //ruta completa de este archivo


function hola_mundo() {
    echo __FUNCTION__;
}

hola_mundo();

?>

