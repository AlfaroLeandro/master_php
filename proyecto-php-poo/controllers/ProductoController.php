<?php

require_once 'models/Producto.php';

class ProductoController {
    public function index() {
        //http://localhost/master_php/proyecto-php-poo/?controller=Producto&action=index
        $productos = (new Producto)->getRandom(CANT_PRODUCTOS_DESTACADOS_MOSTRAR);
        
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
			$nombre = isset($_POST['nombre'])? $_POST['nombre'] : false;
			$descripcion = isset($_POST['descripcion'])? $_POST['descripcion'] : false; 
			$precio = isset($_POST['precio'])? $_POST['precio'] : false; 
			$stock = isset($_POST['stock'])? $_POST['stock'] : false; 
			$categoria = isset($_POST['categoria'])? $_POST['categoria'] : false; 
				
			if($nombre && $descripcion && $precio && $stock && $categoria) {
				$producto_nuevo = new Producto();
				$producto_nuevo->setCategoria_id($categoria);
				$producto_nuevo->setNombre($nombre);
				$producto_nuevo->setDescripcion($descripcion);
				$producto_nuevo->setPrecio($precio);
				$producto_nuevo->setStock($stock);
				
				//Guardar imagen
				$file = $_FILES['imagen'];
				$filename = $file['name'];
				$mimetype = $file['type']; //Formato del archivo
				
				if($mimetype == "image/jpg" || $mimetype == "image/jpeg" || $mimetype == "image/png" || $mimetype == "image/gif") {
					if(!is_dir('uploads/images'))
						mkdir('uploads/images', 0777, true); //El true permite crear directorios de forma recursiva

					$producto_nuevo->setImagen($filename);
					move_uploaded_file($file['tmp_name'], 'uploads/images/' . $filename);
					
				}
                                
                                if(isset($_GET['id']))
                                {
                                    $producto_nuevo->setId($_GET['id']);
                                    $save = $producto_nuevo->edit();
                                }
				else
                                    $save = $producto_nuevo->save();
                                
				if($save ) 
					$_SESSION['producto'] = 'complete';
				else
					$_SESSION['producto'] = 'failed';
				
			}
			else
				$_SESSION['producto'] = 'failed';
				
		}
		header("Location: " . BASE_URL . "producto/gestion");
	}
	
	public function editar() {
	    if(Utils::isAdmin() && isset($_GET) && isset($_GET["producto"])) {
                
                $p = new Producto;
                $p->setId($_GET["producto"]);
                $producto = $p->getOne();
                
                require_once 'views/producto/crear.php';
            }
            else
                header("Location: " . BASE_URL . "producto/gestion");
	}
	
	public function eliminar() {		
		if(Utils::isAdmin() && isset($_GET) && isset($_GET['producto'])) {
			
			$producto_borrar = new Producto();
			$producto_borrar->setId($_GET["producto"]);
			
			if($producto_borrar->delete())
				$_SESSION["delete"]="complete";
			else
				$_SESSION["delete"]="failed";
		}
	header("Location: " . BASE_URL . "producto/gestion");
	}
        
        public function ver() { 
            if(isset($_GET["producto"])) {
                $p = new Producto;
                $p->setId($_GET["producto"]);
                $pro = $p->getOne();    
            }

            require_once 'views/producto/ver.php';
        }
}
