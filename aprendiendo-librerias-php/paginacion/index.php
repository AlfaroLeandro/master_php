<?php

require_once '../vendor/autoload.php';

define('NUMERO_ELEMENTOS_PAGINA', 2);

//conexion db
$conexion = new mysqli("localhost", "root", "", "notas_master");
$conexion->query("SET NAMES 'utf8'");

//consulta
$consulta = $conexion->query("SELECT * from notas");

//Hacer paginacion
$pagination = new Zebra_Pagination();

//Total de elementos a paginar
$pagination->records($consulta->num_rows);

//Numero de elementos por pagina
$pagination->records_per_page(NUMERO_ELEMENTOS_PAGINA);


$page = $pagination->get_page();
$notas = $conexion->query("SELECT * FROM notas LIMIT " . (($page - 1)*NUMERO_ELEMENTOS_PAGINA) . "," . (NUMERO_ELEMENTOS_PAGINA) . ";");

echo '<link rel="stylesheet" href="../vendor/stefangabos/zebra_pagination/public/css/zebra_pagination.css" type="text/css">';

while($nota = $notas->fetch_object())
{
    echo "<h1>{$nota->titulo}</h1>";
    echo "<h3>{$nota->descripcion}</h3> <hr/>";
}

$pagination->render();