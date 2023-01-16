<!DOCTYPE HTML>

<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Formulario php</title>
        
    </head>
    <body>
        <h1>Formulario en PHP</h1>
        <form method="POST" action="recibir.php">
            <!--El method GET agarra la url y le concatena ?nombre=valor&apellido=valor2..-->
            <!--el method POST oculta los datos enviados, no los muestra en la url-->
            <p>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" />
            </p>
            
            <p>
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" />
            </p>
            
            <input type="submit" value="enviar"/>
            
        </form>
        
    </body>
    
    
</html>

<?php

?>
