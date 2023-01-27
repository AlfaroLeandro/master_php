<h1> Bienvenido a mi web con MVC </h1>

<?php

require_once './controllers/UsuarioController.php';
require_once './controllers/NotaController.php';


if(isset($_GET['controller']) && class_exists($_GET['controller'] . "Controller"))
{
	$nombre_ctrl = $_GET['controller'] . "Controller";  
	$controlador = new $nombre_ctrl();

	if(isset($_GET['action']) && method_exists($controlador, $_GET['action']))
	{
		$action=$_GET['action'];
		$controlador->$action(); // Las acciones van sin comillas en la url
	}
	else
		echo "Metodo inexistente";
}
else
	echo "pagina inexistente";

//$controlador->mostrarTodos();
//$controlador->crear();
//action=crear&controller=UsuarioController <--- EN LA URL

