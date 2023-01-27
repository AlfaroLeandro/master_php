<?php require_once './include/cabecera.php'; ?>      
<?php require_once './include/lateral.php'; ?>
            
    <!--Caja principal-->
    <div id="principal">
        <h1> Todas las entradas </h1>
        
        <?php
            $entradas = conseguir_entradas();
            if(!empty($entradas)):
                while($entrada = mysqli_fetch_assoc($entradas)):
        ?>
        
        <article class="entrada">    
            <a href="entrada.php?id=<?=$entrada['id']?>">
                <h2><?=$entrada['titulo']?></h2>
                <span class="fecha"> <?=$entrada['categoria'] . ' | ' . $entrada['fecha']?> </span>
                
                <p>
                    <?= substr($entrada['descripcion'], 0, 200) . "..."?>
                    <!--^^Con esto limito la descripcion a 2 lineas aprox-->
                    
                </p>
            </a>
        </article>
        
        <?php      
                endwhile;
            endif;   
        ?>        
    </div>            

<?php require_once './include/pie.php'; ?>
