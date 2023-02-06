<h1> Crear nuevos productos </h1>

<div class="form-container"> 

	<form action="<?=BASE_URL?>producto/save" method="POST">

		<label for="nombre">Nombre</label>
		<input type="text" name="nombre" />
		
		<label for="descripcion">Descripcion</label>
		<textarea type="text" name="descripcion"> </textarea>
		
		<label for="precio">Precio</label>
		<input type="text" name="precio" />
		
		<label for="stock">Stock</label>
		<input type="number" name="stock" min="0"/>
		
		<label for="categoria">Categoria</label>
		<select>
			<?php 
				$categorias = Utils::getCategorias();
				while($cat = $categorias->fetch_object()):
			?>
			
				<option value="<?=$cat->id?>"><?=$cat->nombre?></option>
			
			<?php
				endwhile;
			?>
		</select>
		
		<label for="imagen">Imagen</label>
		<input type="file" name="imagen"/>
		
		<input type="submit" value="guardar"/>

	</form>

</div>