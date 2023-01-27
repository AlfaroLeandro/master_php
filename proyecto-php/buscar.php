<?php
require_once './include/conexion.php';
require_once './include/helpers.php';

if(isset($_GET['busqueda'])):
	
	$entradas_buscadas = conseguir_entradas(null,null, $_GET['busqueda']);
	if(!isset($entradas_buscadas)):
		header('Location: index.php');
	else:		
		require_once './include/cabecera.php'; 
		require_once './include/lateral.php'; ?>
				
		<!--Caja principal-->
		<div id="principal">
		
			<h1> Entradas de "<?=$_GET['busqueda']?>" </h1>
			
			<?php
				//$entradas = conseguir_entradas(null, null, $_GET['id']);
				if(!empty($entradas_buscadas)):
					while($entrada = mysqli_fetch_assoc($entradas_buscadas)):
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
				else:
			?>
				<br><br>
				<div class="alerta alerta-error"> No hay entradas en esta categoria <div/>
				
			<?php
				endif;   
			?>        
		</div>            

<?php 
		require_once './include/pie.php'; 
	endif;
else:
	header('Location: index.php');
endif;
	
			
	
	
	
	
