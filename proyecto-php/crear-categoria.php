<?php require_once './include/redireccion.php';?>
<?php require_once './include/cabecera.php'; ?>      
<?php require_once './include/lateral.php'; ?>


<!--CAJA PRINCIPAL-->

<div id="principal">
    <h1>Crear categorias</h1>
    
    <form action="guardar-categoria.php" method="POST">
        
        <p>
            Añade nuevas categorias al blog para que los usuarios puedan usarlas al crear sus entradas
        </p>
        
        <br/>
        
        <label for="nombre">Nombre categoría</label>
        <input type="text" name="nombre"/>
        
        <input type="submit" value="Guardar"/>
    </form>
    
</div>            

<?php require_once './include/pie.php'; ?>


