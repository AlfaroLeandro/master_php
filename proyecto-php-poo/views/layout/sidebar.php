<!--BARRA LATERAL-->

<aside id="lateral">

    <div id="login" class="block-aside">
        <h3>Mi carrito</h3>
        <ul>
            <li> <a href="<?=BASE_URL?>carrito/index"> Productos () </a> </li>
            <li> <a href="<?=BASE_URL?>carrito/index"> Total </a> </li>
            <li> <a href="<?=BASE_URL?>carrito/index"> Ver carrito </a> </li>
        </ul>
    </div>
    
    <div id="login" class="block-aside">

        <?php 
            if(!isset($_SESSION['login'])):
        ?>
        
            <h3>Entrar a la web</h3>

            <form action="<?=BASE_URL?>usuario/login" method="POST">
                <label for="email">Email</label>
                <input type="email" name="email"/>

                <label for="password">Contraseña</label>
                <input type="password" name="password"/>

                <input type="submit" value="Enviar"/>
				
            </form>
            
        <?php
            elseif(isset($_SESSION['error_login'])):
        ?>
            
            <h3><?=$_SESSION['error_login']?></h3>
            
        <?php
            elseif(isset($_SESSION['login'])):
        ?>
            
            <h3>Bienvenido, <?=" " . $_SESSION['login']->nombre . " " . $_SESSION['login']->apellidos?></h3>
            
        <?php
            endif;
            Utils::deleteSession('error_login');
        ?>
        
        <ul>          
            <?php 
                if(isset($_SESSION['admin'])):
            ?>
                <li> <a href="<?=BASE_URL?>categoria/index">Gestionar Categorias</a> </li>
                <li> <a href="<?=BASE_URL?>producto/gestion">Gestionar Productos</a> </li>
                <li> <a href="<?=BASE_URL?>#">Gestionar Pedidos</a> </li>
                
            <?php 
                endif;
            ?>
            
            <?php
                if(isset($_SESSION['login'])):
            ?>
                <li> <a href="#">Mis Pedidos</a> </li>
                <li> <a href="<?=BASE_URL . 'usuario/logout'?>">Cerrar sesión</a> </li>
            <?php
                else:
            ?>
				<li> <a href="<?=BASE_URL . 'usuario/registro'?>">Registrate aquí</a> </li>
			<?php
				endif;
			?>
        </ul>

    </div>                
</aside>

<!--CONTENIDO CENTRAL-->            

<div id="central">