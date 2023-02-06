<h1> Gestión de productos </h1>

<a href="<?=BASE_URL?>producto/crear" class="button button-small">
	Crear Producto
</a>

<h2> Lista productos </h2>

<table>
	<tr>
		<th>ID</th>
		<th>NOMBRE</th>
		<th>PRECIO</th>
		<th>STOCK</th>
		
	</tr>
	<?php while($prod = $productos->fetch_object()): ?>
		<tr>
			<td><?=$prod->id;?></td>
			<td><?=$prod->nombre;?></td>
			<td><?=$prod->precio;?></td>
			<td><?=$prod->stock;?></td>
		</tr>
	<?php endwhile; ?>
</table> 