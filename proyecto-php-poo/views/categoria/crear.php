<h1> Crear nueva categoría </h1>

<form action="<?=BASE_URL?>categoria/save" method="POST">
	
	<label for="nombre">Nombre<label/>
	<input type="text" name="nombre" required/>
	
	<input type="submit" name="Guardar"/>

<form/>