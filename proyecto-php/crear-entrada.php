<?php require_once './include/redireccion.php';?>
<?php require_once './include/cabecera.php'; ?>      
<?php require_once './include/lateral.php'; ?>

<!--CAJA PRINCIPAL-->

<div id="principal">
    <h1>Crear entradas</h1>
    
    <form action="guardar-entrada.php" method="POST">
        
        <p>
            Añade nuevas entradas al blog y que los usuarios puedan disfrutar de nuestro contenido
        </p>
        
        <?php // var_dump($_SESSION['errores_entradas']); ?>
        <?php // var_dump($_SESSION); ?>
        
        <br/>
        
        <?php  echo (isset($_SESSION['errores_entradas'])?  mostrar_error($_SESSION['errores_entradas'], 'titulo') : false); ?>
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo"/>
        
        
        <?php  echo (isset($_SESSION['errores_entradas'])?  mostrar_error($_SESSION['errores_entradas'], 'categoria') : false); ?>
        <label for="categoria">Categoria</label>
        <select name="categoria">
            <?php 
                $categorias = conseguir_categorias();
                if(!empty($categorias)): 
                    while($categoria = mysqli_fetch_assoc($categorias)): 
            ?>
                <option value="<?=$categoria['id']?>">
                    <?=$categoria['nombre']?>
                </option>
                            
                        
            <?php 
                    endwhile; 
                endif; 
            ?>
        </select>
        
        <br/><br/>
        
        <?php  echo (isset($_SESSION['errores_entradas'])?  mostrar_error($_SESSION['errores_entradas'], 'descripcion') : false); ?>
        <label for="descripcion">Descripcion</label>
        <textarea name="descripcion" width="1000px" ></textarea>
        
        <input type="submit" value="Guardar"/>
    </form>
    
    <?php borrar_errores('errores_entradas');?>
    
</div>            

<?php require_once './include/pie.php'; ?>
