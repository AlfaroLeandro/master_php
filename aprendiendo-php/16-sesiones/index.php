<?php

/*
 * Una sesion es un periodo en el que puede estar en la pagina sin necesidad de identificarse
 * sin tener que volver a logearse, son datos que estan persistiendo
 * 
 * Deben soportar:
 * 
 * A medida que el usuario navega en el sitio web la sesion debe continuar hasta que el 
 * usuario cierre la sesion o cierra el navegador
 * 
 */

//Iniciar la sesion

session_start(); //Hay que usar este metodo en todos los ficheros donde se quiera usar la variable $_SESSION

//variable local
$var_normal = "Soy una cadena de texto";

//variable de sesion -> esta sesion la voy a poder usar en cualquier pagina de mi dominio
$_SESSION['variable persistente'] = "sesion activa"; 

echo $var_normal . "<br>";
echo $_SESSION['variable persistente'] . "<br>";

//Si creo la sesion, luego la destruyo en logout.php y despues voy a pagina1 -> error, no encuentra
//la variable ya que _SESSION fue vaciado