<?php

class NotaController {
	
	public function listar() {
		require_once 'models/nota.php';

		$nota = new Nota();

		$notas = $nota->conseguirTodos('notas');

		require_once 'views/nota/listar.php';
	}

	public function crear() {
		require_once 'models/nota.php';

		$nota = new Nota();
		$nota->setUsuario_id(1);
		$nota->setTitulo("Nota desde php mvc");
		$nota->setDescripcion("Descripcion de mi nota");
		$nota->guardar();
		header("Location: index.php?controller=Nota&action=listar");
	}

	public function borrar() {


	}
}
