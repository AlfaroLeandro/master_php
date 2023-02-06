<?php

require_once 'models/Producto.php';

class ProductoController {
    public function index() {
        //http://localhost/master_php/proyecto-php-poo/?controller=Producto&action=index
        require_once './views/producto/destacados.php';
    }
	
	public function gestion() {
		if(Utils::isAdmin()) {
			$productos = (new Producto())->getAll();
			
			require_once 'views/producto/gestion.php';
		}
		
	}
	
	public function crear() {
		if(Utils::isAdmin()) {
			require_once "views/producto/crear.php";
		}
	}
	
	public function save() {
		if(Utils::isAdmin() && isset($_POST)) {
			var_dump($_POST);
		}
	}
}
