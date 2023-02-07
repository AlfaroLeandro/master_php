<h1> Carrito de la compra </h1>

<table>
    <tr>
        <th>Imagen</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Unidades</th>
    </tr>
    
    <?php
        foreach($_SESSION['carrito'] as $i => $elemento):
    ?>
    
    <tr>
        <td><img class="img-carrito" src="<?=BASE_URL?>uploads/images/<?=$elemento['producto']->imagen?>" alt="<?=$elemento['producto']->imagen?>"/></td>
        <td> <a href="<?=BASE_URL?>producto/ver&producto=<?=$elemento['id_producto']?>"> <?=$elemento['producto']->nombre?>  </a> </td>
        <td><?=$elemento['precio']?></td>
        <td><?=$elemento['unidades']?></td>
    </tr>
    
    
    <?php
        endforeach;
    ?>
    
</table>