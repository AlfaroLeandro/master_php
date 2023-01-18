<?php

/*
 * Crear una sesion que aumente su valor en 1 o disminuya en 1 en funcion al parametro
 * get "counter" esta a 1 o a 0
 */

session_start();

if(!isset($_SESSION['mi_sesion']))
    $_SESSION['mi_sesion'] = 0;

if(isset($_GET['counter']))
{
    if((int)$_GET['counter'])
        $_SESSION['mi_sesion']++;
    else
        $_SESSION['mi_sesion']--;
}

echo "<a href='ejercicio1.php?counter=0'> disminuir valor </a> <br/>";
echo "<a href='ejercicio1.php?counter=1'> aumentar valor </a> <br/>";
echo "valor: " . $_SESSION['mi_sesion'];
    
