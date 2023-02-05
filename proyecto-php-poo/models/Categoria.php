<?php

class Categoria {
    private $id;
    private $nombre;
    private $db;
    
    public function __construct() {
        $this->db = Database::connect();
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
    
    public function getAll() {
        $categorias = $this->db->query("SELECT * FROM categorias;");
        return $categorias;
    }
}