<?php require_once './include/cabecera.php'; ?>      
<?php require_once './include/lateral.php'; ?>
            
    <!--Caja principal-->
    <div id="principal">
        <h1> Últimas entradas </h1>
        
        <?php
            $entradas = conseguir_ultimas_entradas();
            if(!empty($entradas)):
                while($entrada = mysqli_fetch_assoc($entradas)):
        ?>
        
        <article class="entrada">    
            <a href="">
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
        
        <div id="ver-todas">
            <a href="" style="color: white;">Ver todas las entradas</a>
        </div>
        
    </div>            

<?php require_once './include/pie.php'; ?>
