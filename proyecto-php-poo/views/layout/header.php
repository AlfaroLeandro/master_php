<!DOCTYPE HTML>

<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width">
        <title>Tienda de camisetas</title>
        <link rel="stylesheet" href="<?=BASE_URL?>assets/css/styles.css"/>
    </head>
    <body>
        <div id="container">
            <!--CABECERA-->

            <header id="header">
                <div id="logo">
                    <img src="<?=BASE_URL?>assets/img/camiseta.png" alt="Camiseta logo"/>
                    <a href="index.php">Tienda de camisetas</a>
                </div>

            </header>

            <!--MENU-->

            <nav id="menu">
                <ul>
                    <li>
                        <a href="#">Inicio</a>
                    </li>
					
					<?php 
						$categorias = Utils::getCategorias();
						while($cat = $categorias->fetch_object()):
					?>
					
                    <li>
                        <a href="#"><?=$cat->nombre?></a>
                    </li>
					
					<?php
						endwhile;
					?>
                </ul>
            </nav>

            <div class="content">