<?php

namespace MisClases; //<-- paquetes

class Usuario 
{
	public $nombre;
	public $email;

	public function __construct() {
		$this->nombre = "Leandro Alfaro";
		$this->email = "leandro@leandro.com";
	}

}
