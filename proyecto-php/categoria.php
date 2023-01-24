<?php require_once './include/conexion.php'?>
<?php require_once './include/helpers.php'?>

<?php
	$cat = conseguir_categoria($_GET['id']);
	
	if(!isset($cat)):
		header('Location: index.php');
	else:		
		require_once './include/cabecera.php'; 
		require_once './include/lateral.php'; ?>
				
		<!--Caja principal-->
		<div id="principal">
		
		
		
			<h1> Entradas de <?=$cat['nombre']?> </h1>
			
			<?php
				$entradas = conseguir_entradas(null, $_GET['id']);
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
?>
