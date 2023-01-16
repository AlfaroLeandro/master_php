<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title> impr pantalla PHP </title>
    </head>
    <body>
        <h1>Master <?php echo "en PHP"; ?></h1>
        
        <?="Alto curso de PHP"?> //forma abreviada de hacer un echo
        
        <?php
            
            /*
            Lista de 
            videojuegos
            comentario loco
            */
        
            echo '<h3>Listado de videojuegos</h3>';
            echo "<ul> "
                    . "<li>GTA</li>"
                    . "<li>Fifa</li>"
                    . "<li>Mario bros</li>"
              . "</ul>";
        
            echo "<p>Esta es toda"."la lista de juegos</p>";
                    
        ?>        
        
    </body>
    
</html>

