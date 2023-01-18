<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Validacion de formularios</title>
    </head>
    <body>

        <h1>Validar formularios en PHP </h1>
        
        <?php 
            if(isset($_GET['error']))
            {
                echo "<h3 style='color: red;'>Error: ". $_GET['error'] . "</h3>";
            }
        
        ?>
        
        <form method="POST" action="procesar_formulario.php">
            
            <label for="nombre">Nombre: </label> <br/>
            <input type="text" name="nombre" required="required"> <br/>
            
            <label for="apellido">Apellido: </label> <br/>
            <input type="text" name="apellido" required="required"> <br/>
            
            <label for="edad">Edad: </label> <br/>
            <input type="number" name="edad" required="required" pattern="[0-9]+"> <br/>
            
            <label for="email">Email: </label> <br/>
            <input type="email" name="email" required="required"> <br/>
            
            <label for="pass">Contraseña: </label> <br/>
            <input type="password" name="pass"> <br/>
            
            <input type="submit" value="enviar"/> <br/>
            
        </form>
        
    </body>
</html>



<?php


