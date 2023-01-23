<?php require_once 'conexion.php';?>
<?php require_once 'helpers.php'; ?>

<!DOCTYPE HTML>

<html lang="es">
    <head>
        <meta charset="utf8"/>
        
        <title>Blog de Videojuegos</title>
        
        <!--HOJA DE ESTILOS CSS-->
        <link rel="stylesheet" type="text/css" href="./assets/css/style.css"/>
    </head>
    <body>
        
        <!--Cabecera-->
        <header class="cabecera" style="width:70%; margin-left: 10rem;">
            <div id="logo">
                <a href="index.php"> Blog de videojuegos </a> 
                
            </div>
            
        <!--Menu-->
        
        
        <nav id="menu">
            <ul>
                <li>
                    <a href="index.php">Inicio</a>
                </li>
                <?php 
                    $categorias = conseguir_categorias();
                    if(!empty($categorias)): 
                        while($categoria = mysqli_fetch_assoc($categorias)): 
                ?>
                            <li>
                                <a href="categoria.php?id=<?=$categoria['id']?>"><?=$categoria['nombre']?></a>
                            </li>
                <?php 
                        endwhile; 
                    endif; 
                ?>
                    
                <li>
                    <a href="index.php">Sobre mí</a>
                </li>
                
                <li>
                    <a href="index.php">Contacto</a>
                </li>
            </ul>
        </nav>        
            
        </header>
        
        <div class="clearfix"></div>
        
        <div id="contenedor">