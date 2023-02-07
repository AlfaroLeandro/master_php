    <h1>Algunos de nuestros productos</h1>
    
    <?php
        while($pro = $productos->fetch_object()):
    ?>
    
    <div class="product">
        
        <a href="<?=BASE_URL?>producto/ver&producto=<?=$pro->id?>">
            <img src="<?=BASE_URL?>uploads/images/<?=$pro->imagen?>" />
            <h2><?=$pro->nombre?></h2>
        </a>
        <p><?=$pro->precio?><p/>
        <a class="button" href="<?=BASE_URL?>carrito/add&id=<?=$pro->id?>">Comprar<a/>
    </div>

    <?php
        endwhile;
    ?>
</div>
