<?php require_once './include/conexion.php'?>
<?php require_once './include/helpers.php'?>

<?php
	$entrada_actual = conseguir_entrada($_GET['id']);
	
	if(!isset($entrada_actual)):
		header('Location: index.php');
	else:		
		require_once './include/cabecera.php'; 
		require_once './include/lateral.php'; ?>
				
		<!--Caja principal-->
		<div id="principal">
		
		
		
			<h1> <?=$entrada_actual['titulo']?> </h1>
			<h2> <?=$entrada_actual['categoria']?> </h2>
			<h4> <?=$entrada_actual['fecha'] ?> </h4>
			
			<p>
				<?=$entrada_actual['descripcion']?>
			</p>
			

<?php 
		require_once './include/pie.php'; 
	endif;
?>
