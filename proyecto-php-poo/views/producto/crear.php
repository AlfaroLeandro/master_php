<?php
    $urlAction = BASE_URL;
    if (!isset($producto) || !is_object($producto) ):
        $urlAction.="producto/save";    
?>
        <h1> Crear nuevos productos </h1>
<?php
    else:
        $urlAction.="producto/save&id={$producto->id}";
?>
        <h1> Editar producto <?=$producto->nombre?> </h1>
<?php
    endif;
?>


<div class="form-container"> 

    <?php
            
    ?>
    <form action="<?=$urlAction?>" method="POST" enctype="multipart/form-data">

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value="<?=isset($producto) && is_object($producto)? $producto->nombre : ""?>" />

        <label for="descripcion">Descripcion</label>
        <textarea type="text" name="descripcion"> <?=isset($producto) && is_object($producto)? $producto->descripcion : ""?> </textarea>

        <label for="precio">Precio</label>
        <input type="text" name="precio" value="<?=isset($producto) && is_object($producto)? $producto->precio : ""?>" />

        <label for="stock">Stock</label>
        <input type="number" name="stock" min="0" value="<?=isset($producto) && is_object($producto)? $producto->stock : ""?>"/>

        <label for="categoria">Categoria</label>
        <select name="categoria">
            <?php
            $categorias = Utils::getCategorias();
            while ($cat = $categorias->fetch_object()):
                ?>

                <option value="<?= $cat->id ?>" <?=isset($producto) && is_object($producto) && $producto->categoria_id==$cat->id? " selected" : ""?>  ><?= $cat->nombre ?></option>

                <?php
            endwhile;
            ?>
        </select>

        <label for="imagen">Imagen</label>
        <?php 
            if(isset($producto) && is_object($producto) && !empty($producto->imagen)):
        ?>
            <img class="thumb" src="<?=BASE_URL?>uploads/images/<?=$producto->imagen?>"/>
        
        <?php
            endif;
        ?>
        <input type="file" name="imagen"/>

        <input type="submit" value="guardar"/>

    </form>

</div>