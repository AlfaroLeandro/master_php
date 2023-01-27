<!--Sidebar-->
    <aside id="sidebar">
        
        <div id="buscador" class="bloque">
			<h3>Busqueda</h3>
			
			<form action="buscar.php" method="GET">
				<input type="text" name="busqueda">
				<input type="submit" value="Buscar"
			</form>
		</div>
		
		
        <?php if(isset($_SESSION['usuario'])): ?>
            <div id="usuario-logeado" class="bloque">
                <h3><?="Bienvenido " . $_SESSION['usuario']['nombre'] . " " . $_SESSION['usuario']['apellidos']?></h3>
            
            <!--Botones-->
            
            <a href="crear-entrada.php" class="boton boton-naranja">Crear entradas</a>
            <a href="crear-categoria.php" class="boton">Crear categoria</a>
            <a href="mis-datos.php" class="boton boton-verde">Mis datos</a>
            <a href="cerrar.php" class="boton boton-rojo">Cerrar sesión</a>
            
            </div>
        
            
        <?php endif; ?>
        
        <?php if(!isset($_SESSION['usuario'])): ?>
            <div id="login" class="bloque">            

                <?php if(isset($_SESSION['error_login'])): ?>
                    <div class="alerta alerta-error">
                        <h3><?=$_SESSION['error_login']?></h3>
                    </div>
                <?php endif; ?>


                <h3>Identificate</h3>
                <form action="login.php" method="POST">

                    <label for="email">Email</label>
                    <input type="email" name="email"/> 

                    <label for="password">Contraseña</label>
                    <input type="password" name="password"/> 

                    <input type="submit" name="submit" value="ingresar"/> 

                </form>
            </div>
        <?php endif; ?>

        <?php if(!isset($_SESSION['usuario'])): ?>
            <div id="registro" class="bloque">

                <?php // session_start();
    //                var_dump($_SESSION); ?>

                <?php if(isset($_SESSION['completado'])): ?>
                <div class="alerta alerta-exito"> 
                    <?=$_SESSION['completado'];?> 
                </div>
                <?php elseif(isset($_SESSION['errores']['general'])): ?>
                <div class="alerta alerta-error"> 
                    <?=$_SESSION['errores']['general'];?> 
                </div>
                <?php endif; ?>




                <h3>Registrate</h3>
                <form action="registro.php" method="POST">

                    <?php  echo (isset($_SESSION['errores'])?  mostrar_error($_SESSION['errores'], 'nombre') : false); ?>
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre"/>                 

                    <?php  echo (isset($_SESSION['errores'])?  mostrar_error($_SESSION['errores'], 'apellido') : false); ?>
                    <label for="apellido">Apellido</label>
                    <input type="text" name="apellido"/> 

                    <?php  echo (isset($_SESSION['errores'])?  mostrar_error($_SESSION['errores'], 'email') : false); ?>
                    <label for="email">Email</label>
                    <input type="email" name="email"/> 

                    <?php  echo (isset($_SESSION['errores'])?  mostrar_error($_SESSION['errores'], 'pass') : false); ?>
                    <label for="password">Contraseña</label>
                    <input type="password" name="password"/> 

                    <input type="submit" name="submit" value="registrar"/> 

                </form>
            </div>
        <?php endif; ?>
        
        <?php borrar_errores('errores');?>
        <?php borrar_errores('completado');?>
    </aside>

