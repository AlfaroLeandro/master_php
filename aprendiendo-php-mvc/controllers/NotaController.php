<?php

class NotaController {
	
	public function listar() {
		require_once 'models/nota.php';

		$nota = new Nota();
		$nota->setContenido("Hola mundo php mvc");
		$nota->setNombre("nombre loco");


		require_once 'views/nota/listar.php';
	}

	public function crear() {

	}

	public function borrar() {


	}
}
