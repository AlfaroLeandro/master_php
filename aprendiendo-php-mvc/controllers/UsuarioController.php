<?php

class UsuarioController {
	
	public function mostrarTodos() {
		require_once 'models/usuario.php'; // EL REQUIRE SE HACE DESDE EL INDEX.PHP

		$usuario = new Usuario();
		$usuarios = $usuario->conseguirTodos('usuarios');

		require_once 'views/usuarios/mostrar-todos.php';
	}	

	public function crear() {
		require_once 'views/usuarios/crear.php';
	}
}
