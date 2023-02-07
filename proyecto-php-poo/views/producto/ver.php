<?php 
    if(isset($pro)):
?>
    <h1> <?=$pro->nombre?> </h1>
    
    <div id="detail-product">
        
        <div class="image">
            <img src="<?=BASE_URL?>uploads/images/<?=$pro->imagen?>" alt="producto"/>
        </div>
        
        <div class="datos">
            <h2><?=$pro->nombre?></h2>
            <p class="description"><?=$pro->descripcion?><p/>
            <p class="price"><?=$pro->precio?>$<p/>
        </div>
        <a class="button" href="<?=BASE_URL?>carrito/add&id=<?=$pro->id?>">Comprar<a/>
    </div>
<?php 
    else:
?>
    <h1> El producto no existe <h1/>
<?php 
    endif; 
?>



