<?php

$db_servidor = 'localhost';
$db_usuario = 'root';
$db_contrasenia = '';
$db_nombre = 'blog';

$db = mysqli_connect($db_servidor, $db_usuario, $db_contrasenia, $db_nombre);
mysqli_query($db, "SET NAMES 'utf8'");

//Iniciar la sesion

session_start();