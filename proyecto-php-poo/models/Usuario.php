<?php

class Usuario {
    private $id;
    private $nombre;
    private $apellidos;
    private $email;
    private $password;
    private $rol;
    private $imagen;
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

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getRol() {
        return $this->rol;
    }

    public function getImagen() {
        return $this->imagen;
    }

    public function setNombre($nombre): void {
        $this->nombre = $this->db->real_escape_string($nombre);
    }

    public function setApellidos($apellidos): void {
        $this->apellidos = $this->db->real_escape_string($apellidos);
    }

    public function setEmail($email): void {
        $this->email = $this->db->real_escape_string($email);
    }

    public function setPassword($password): void {
        $this->password = $password;
    }

    public function setRol($rol): void {
        $this->rol = $rol;
    }

    public function setImagen($imagen): void {
        $this->imagen = $imagen;
    }

    public function save() {
        $sql = "INSERT INTO usuarios VALUES(null, '{$this->nombre}', '{$this->apellidos}', '{$this->email}', '" . password_hash($this->db->real_escape_string($this->password), PASSWORD_BCRYPT, ['cost' => 4]) . "', 'User', null);";
        $save = $this->db->query($sql);
        return $save;
    }
    
    public function login() {
        $resultado = false;
        //Comprobar el usuario
        $sql = "SELECT * FROM usuarios WHERE email='$this->email';";
        $login = $this->db->query($sql);
        
        if($login && $login->num_rows == 1) {
            $usuario = $login->fetch_object();
            
            if(password_verify($this->password, $usuario->password)) 
                $resultado = $usuario;
        }
        
        return $resultado;
    }
    
}
