<?php

namespace MisClases; //<-- paquetes

class Categoria 
{
	public $nombre;
	public $descripcion;

	public function __construct() {
		$this->nombre = "Accion";
		$this->descripcion= "Categoria a las reviews de videojuegos de accion";
	}

}
