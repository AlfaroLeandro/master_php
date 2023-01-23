<?php require_once './include/redireccion.php';?>
<?php require_once './include/cabecera.php'; ?>      
<?php require_once './include/lateral.php'; ?>


<!--CAJA PRINCIPAL-->

<div id="principal">
    <h1>Mis datos</h1>
    
        <form action="actualizar-usuario.php" method="POST">
            
            <?php  echo (isset($_SESSION['errores_mis_datos'])?  mostrar_error($_SESSION['errores_mis_datos'], 'nombre') : false); ?>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" value="<?=$_SESSION['usuario']['nombre']?>"/>                 

            <?php  echo (isset($_SESSION['errores_mis_datos'])?  mostrar_error($_SESSION['errores_mis_datos'], 'apellido') : false); ?>
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" value="<?=$_SESSION['usuario']['apellidos']?>"/> 

            <?php  echo (isset($_SESSION['errores_mis_datos'])?  mostrar_error($_SESSION['errores_mis_datos'], 'email') : false); ?>
            <label for="email">Email</label>
            <input type="email" name="email" value="<?=$_SESSION['usuario']['email']?>"/>
            
            <input type="submit" name="submit" value="actualizar"/> 

        </form>
    
        <?php borrar_errores('errores_mis_datos')?>
</div>            

<?php require_once './include/pie.php'; ?>