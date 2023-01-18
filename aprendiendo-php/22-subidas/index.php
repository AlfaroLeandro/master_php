<!DOCTYPE HTML>

<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Subir archivos PHP</title>
    </head>
    <body>
        <h1>Subir archivos PHP</h1>
        
        <form action="subir.php" method="POST" enctype="multipart/form-data">
            <!--enctype="multipart/form-data" -> sirve para subir archivos -->
            <input type="file" name="archivo"/>
            <input type="submit" value="enviar"/>
        </form>
        
        
        <?php
            if($gestor=opendir('./img')):
                while($imagen= readdir($gestor)):
                    if($imagen!='.' && $imagen!='..'):
                        echo "<img src='./img/$imagen' width='300px'/>";
                    endif;
                endwhile;
            endif;
        ?>
        
    </body>
</html>
