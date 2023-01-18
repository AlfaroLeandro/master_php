<?php

/*
 * Mecanismo por el cual se almacenan los datos de navegacion del usuario 
 * en el CLIENTE y una menor parte (referencia) en el sv
 * 
 * ventaja: están ahí incluso si el navegador esta cerrado o abierto
 *  ej: recordar una contraseña
 *  ej2: continuar llenando un formulario que se habia dejado por la mitad
 * 
 * desventaja: seguridad
 *  ej: se almacenan en el cliente por lo q el cliente puede modificar la cookie
 *  ej2: la cantidad de datos es limitada (no como la sesion)
 *  ej3: las cookies deben primero ser validadas por el sv
 * 
 *  norma general: sesion > cookie. Salvo en casos particulares
 */

//Crear cookie

//setcookie("nombre", "Valor que solo puede ser texto", CADUCIDAD, RUTA, DOMINIO);

//cookie basica
setcookie("mi_cookie", "valor de mi galleta");

//cookie con expiracion

setcookie("un_anio", "valor de mi galleta de 365 dias", time()+60*60*24*365); //60s * 60min* 24hs * 365 dias -> 1 año

//en herramientas de desarrollador -> aplicacion -> cookies => puedo ver las cookies guardadas

?>

<a href="ver_cookies.php">Ver las galletas</a>

