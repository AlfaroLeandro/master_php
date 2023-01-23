<?php require_once 'helpers.php'; ?>

<!--Sidebar-->
    <aside id="sidebar">
        
        
        <?php if(isset($_SESSION['usuario'])): ?>
            <div id="usuario-logeado" class="bloque">
                <h3><?="Bienvenido " . $_SESSION['usuario']['nombre'] . " " . $_SESSION['usuario']['apellidos']?></h3>
            </div>
        <?php endif; ?>
        
        
        <div id="login" class="bloque">            
            <h3>Identificate</h3>
            <form action="login.php" method="POST">

                <label for="email">Email</label>
                <input type="email" name="email"/> 

                <label for="password">Contraseña</label>
                <input type="password" name="password"/> 

                <input type="submit" name="submit" value="ingresar"/> 

            </form>
        </div>


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
        
        <?php borrar_errores();?>
    </aside>

