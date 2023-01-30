<?php

require_once 'models/Usuario.php';

class UsuarioController {

    public function index() {
        echo "Controlador Usuarios, Accion index";
    }

    public function registro() {
        require_once 'views/usuario/registro.php';
    }

    public function save() {
        if (isset($_POST)) {

            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
            $email = isset($_POST['email']) ? $_POST['email'] : false;
            $password = isset($_POST['password']) ? $_POST['password'] : false;

            //TAREA - AGREGAR COMPROBACIONES

            if ($nombre && $apellidos && $email && $password) {

                $u = new Usuario();
                $u->setNombre($nombre);
                $u->setApellidos($apellidos);
                $u->setEmail($email);
                $u->setPassword($password);

                $save = $u->save();

                if ($save)
                    $_SESSION["register"] = "complete";
                else
                    $_SESSION["register"] = "failed";
            } else {
                $_SESSION["register"] = "failed";
            }
        } else {
            $_SESSION["register"] = "failed";
        }
        header("Location: " . BASE_URL . "usuario/registro");
    }

    public function login() {
        if(isset($_POST)) {
            $u = new Usuario();
            $u->setEmail($_POST['email']);
            $u->setPassword($_POST['password']);
            
            $login = $u->login();
            
            if($login) {
                $_SESSION['login']=$login;
                
                if($login->rol == 'admin') {
                    $_SESSION['admin'] = true;
                }
            } else {
                $_SESSION['error_login']= "Identificacion fallida";
            }
        }
        
        header("Location: " . BASE_URL);
    }
    
    public function logout() {
        if(isset($_SESSION['login'])){
            unset($_SESSION['login']);
        }
        
        if(isset($_SESSION['admin'])){
            unset($_SESSION['admin']);
        }
        
        header("Location: " . BASE_URL);
    }
    
}
