<h1>Listado de Usuarios</h1>

<?php 
	while($usuario = $usuarios->fetch_object()):
?>

	<?= $usuario->email . " - " . $usuario->fecha . "<br/>"?>

<?php 
	endwhile; 
?>
