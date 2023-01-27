<?php


require_once "configuracion.php";

configuracion::set_color("azul");
configuracion::set_entorno("localhost");
configuracion::set_newsletter(true);

echo configuracion::$color . "</br>";
echo configuracion::$entorno . "</br>";
echo configuracion::$newsletter . "</br>";
