<?php

require_once 'models/Categoria.php';
require_once 'models/producto.php';

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
        
        public function ver() {
            if(isset($_GET['id'])) {
                //Conseguir categoria
                $categoria = new Categoria();
                $categoria->setId($_GET['id']);
                $categoria = $categoria->getOne();
                
                //Conseguir productos
                $productos = new Producto();
                $productos->setCategoria_id($_GET['id']);
                $productos = $productos->getAllCategory();
            }
                
            require_once 'views/categoria/ver.php';
        }
}
