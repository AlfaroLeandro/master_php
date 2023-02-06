<?php

class Utils {
    public static function deleteSession($name) {
        if(isset($_SESSION[$name]))
            unset($_SESSION[$name]);
    }
 
	public static function isAdmin() {
		$esAdmin = false;
		if(!isset($_SESSION['admin']))
			header('Location: ' . BASE_URL); 
		else
			$esAdmin = true;
		
		return $esAdmin;
	}
	
	public static function getCategorias() {
		require_once "models/categoria.php";
		$c = new Categoria();
		$categorias = $c->getAll();
		return $categorias;
	}
}
