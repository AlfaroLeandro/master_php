<?php

class Usuario 
{
	public $nombre;
	public $email;

	public function __construct()
	{
		$this->nombre = "Leandro Alfaro";
		$this->email = "leandro@leandro.com";
		echo "Instancia creada en el constructor <br/>";
	}

	public function __destruct() {
		echo "Destruyendo el objeto <br/>";
	}

	public function __toString() {
		return "Hola, {$this->nombre}, estas registrado con {$this->email} <br>";
	}


}

$usuario = new Usuario();
echo $usuario;

//for($i = 0; $i<=200; $i++)
//	echo $i . "<br/>";
