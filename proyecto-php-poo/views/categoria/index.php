<h1>Gestionar categorias</h1>

<a href="<?=BASE_URL?>categoria/crear" class="button button-small">
	Crear categoria
</a>

<table>
	<tr>
		<th>ID</th>
		<th>NOMBRE</th>
	</tr>
	<?php while($cat = $categorias->fetch_object()): ?>
		<tr>
			<td><?=$cat->id;?></td>
			<td><?=$cat->nombre;?></td>
		</tr>
	<?php endwhile; ?>
</table> 