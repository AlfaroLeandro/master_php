<?php

require_once 'models/Categoria.php';

class CategoriaController {
    public function index() {		
		if(Utils::isAdmin())
		{
			$c = new Categoria();
			$categorias = $c->getAll();
			
			require_once 'views/categoria/index.php';	
		}
    }
	
	public function crear() {
		if(Utils::isAdmin())
			require_once 'views/categoria/crear.php';
	}
	
	public function save() {		
		if(Utils::isAdmin() && isset($_POST) && isset($_POST['nombre']))
		{
			$nueva_categoria = new Categoria();
			$nueva_categoria->setNombre($_POST['nombre']);
			$nueva_categoria->save();
		}		
		
		header("Location: " . BASE_URL . "categoria/index");
	}
}
