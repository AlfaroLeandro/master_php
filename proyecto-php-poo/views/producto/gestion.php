<h1> Gestión de productos </h1>

<a href="<?=BASE_URL?>producto/crear" class="button button-small">
	Crear Producto
</a>

<?php
	if(isset($_SESSION['producto']) && $_SESSION['producto'] == "complete"):
?>
	<strong class="alert_green"> El producto se ha añadido con éxito</strong>

<?php
	elseif(isset($_SESSION['producto']) && $_SESSION['producto'] == "failed"):
?>
	<strong class="alert_red"> Fallo al añadir el producto </strong>

<?php
	endif;
	Utils::deleteSession("producto");
?>

<?php
	if(isset($_SESSION['delete']) && $_SESSION['delete'] == "complete"):
?>
	<strong class="alert_green"> El producto se ha borrado con éxito</strong>

<?php
	elseif(isset($_SESSION['delete']) && $_SESSION['delete'] == "failed"):
?>
	<strong class="alert_red"> Fallo al borrar el producto </strong>

<?php
	endif;
	Utils::deleteSession("delete");
?>

<h2> Lista productos </h2>

<table>
	<tr>
		<th>ID</th>
		<th>NOMBRE</th>
		<th>PRECIO</th>
		<th>STOCK</th>
		<th>ACCIONES</th>
		
	</tr>
	<?php while($prod = $productos->fetch_object()): ?>
		<tr>
			<td><?=$prod->id;?></td>
			<td><?=$prod->nombre;?></td>
			<td><?=$prod->precio;?></td>
			<td><?=$prod->stock;?></td>
			<td>
				<a class="button button-gestion" href="<?=BASE_URL?>producto/editar&producto=<?=$prod->id?>">Editar</a>
			</td>
			
			<td>
				<a class="button button-gestion button-red" href="<?=BASE_URL?>producto/eliminar&producto=<?=$prod->id?>">Borrar</a>
			</td>
			
		</tr>
	<?php endwhile; ?>
</table> 