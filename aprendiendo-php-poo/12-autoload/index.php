<?php

//require_once 'usuario.php';
//require_once 'categoria.php';
//require_once 'entrada.php';

/*
require_once 'autoload.php';

$u = new Usuario();
echo $u->nombre . "<br/>";
echo $u->email;

$c= new Categoria();
echo "<br>" . $c->nombre;
 */


// ESPACIOS DE NOMBRES Y PAQUETES

class Principal {
	public $u;
	public $c;
	public $e;

	public function __construct() 
	{
		$this->u = new MisClases\Usuario();
	}

}

$p = new Principal();

var_dump($p->u);
