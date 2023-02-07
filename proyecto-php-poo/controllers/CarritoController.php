<?php

require_once 'models/producto.php';

class CarritoController {
    public function index() {
//        echo "Controlador carrito, Accion index";
//        var_dump($_SESSION['carrito']);
        
        require_once 'views/carrito/index.php';
    }
    
    public function add() {
        if(isset($_GET['id'])) {
            $producto_existente_en_carrito = false;
            if(isset($_SESSION['carrito'])) {
                
                foreach($_SESSION['carrito'] as $i => $elemento) {
                    if($elemento['id_producto'] == $_GET['id']) {
                        $_SESSION['carrito'][$i]['unidades']++;
                        $producto_existente_en_carrito = true;
                    }   
                }   
            }      
            
            if(!$producto_existente_en_carrito) {
                //Conseguir producto
                $producto = new Producto();
                $producto->setId($_GET['id']);
                $producto = $producto->getOne();

                if(is_object($producto)) { //ESTO HACE UN APPEND AL ARRAY ?!?!?!?
                    $_SESSION['carrito'][] = array(
                        "id_producto" => $producto->id,
                        "precio" => $producto->precio,
                        "unidades" => 1,
                        "producto" => $producto
                    );
                }    
            }          
        } 
        
        header("Location: " . BASE_URL . "carrito/index");
    }
    
    public function remove() {
        
    }
    
    public function delete_all() {
        unset($_SESSION['carrito']);
        header("Location: " . BASE_URL . "carrito/index");
    }
    
    
}
