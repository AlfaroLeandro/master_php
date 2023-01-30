<!DOCTYPE HTML>

<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width">
        <title>Tienda de camisetas</title>
        <link rel="stylesheet" href="assets/css/styles.css"/>
    </head>
    <body>
        <div id="container">
            <!--CABECERA-->

            <header id="header">
                <div id="logo">
                    <img src="assets/img/camiseta.png" alt="Camiseta logo"/>
                    <a href="index.php">Tienda de camisetas</a>
                </div>

            </header>

            <!--MENU-->

            <nav id="menu">
                <ul>
                    <li>
                        <a href="#">Inicio</a>
                    </li>
                    <li>
                        <a href="#">Categoria 1</a>
                    </li>
                    <li>
                        <a href="#">Categoria 2</a>
                    </li>
                    <li>
                        <a href="#">Categoria 3</a>
                    </li>
                </ul>
            </nav>

            <div class="content">

                <!--BARRA LATERAL-->

                <aside id="lateral">

                    <div id="login" class="block-aside">

                        <h3>Entrar a la web</h3>

                        <form action="#" method="POST">
                            <label for="email">Email</label>
                            <input type="email" name="email"/>

                            <label for="password">Contraseña</label>
                            <input type="password" name="password"/>

                            <input type="submit" value="Enviar"/>

                        </form>


                        <ul>
                            <li>
                                <a href="#">Mis Pedidos</a>
                            </li>
                            <li>
                                <a href="#">Gestionar pedidos</a>
                            </li>
                            <li>
                                <a href="#">Gestionar Categorias</a>
                            </li>
                        </ul>

                    </div>                
                </aside>

                <!--CONTENIDO CENTRAL-->            

                <div id="central">
                    <h1>Productos destacados</h1>
                    <div class="product">
                        <img src="assets/img/camiseta.png" />
                        <h2>Camiseta azul ancha</h2>
                        <p> 30 Euros <p/>
                        <a class="button" href="">Comprar<a/>
                    </div>

                    <div class="product">
                        <img src="assets/img/camiseta.png" />
                        <h2>Camiseta azul ancha</h2>
                        <p> 30 Euros </p>
                        <a class="button" href="">Comprar<a/>
                    </div>

                    <div class="product">
                        <img src="assets/img/camiseta.png" />
                        <h2>Camiseta azul ancha</h2>
                        <p> 30 Euros </p>
                        <a class="button" href="">Comprar<a/>
                    </div>
                </div>
            </div>



            <!--PIE DE PAGINA-->

            <footer id="footer">
                <p>Desarrollado por Leandro Alfaro &copy; <?= date('Y') ?></p>
                <footer/>

        </div>    
    </body>

</html>
