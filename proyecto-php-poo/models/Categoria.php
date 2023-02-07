<?php

class Categoria {
    private $id;
    private $nombre;
    private $db;
    
    public function __construct() {
        $this->db = Database::connect();
    }
    
    public function getAll() {
        return $this->db->query("SELECT * FROM categorias ORDER BY id DESC;");
    }

    public function getOne() {
        return $this->db->query("SELECT * FROM categorias WHERE id={$this->id};")->fetch_object();
    }
	
    public function save() {
        return $this->db->query("INSERT INTO categorias VALUES(null, '{$this->nombre}');");
    }
    
    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }
}