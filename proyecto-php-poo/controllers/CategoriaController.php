<?php

require_once 'models/Categoria.php';

class CategoriaController {
    public function index() {
        $c = new Categoria();
        $categorias = $c->getAll();
        
        
        require_once 'views/categoria/index.php';
    }
}
