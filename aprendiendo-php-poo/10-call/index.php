<?php

class Persona {
	private $nombre;
	private $edad;
	private $ciudad;

	public function __construct($nombre, $edad, $ciudad) {
		$this->nombre = $nombre;
		$this->edad = $edad;
		$this->ciudad = $ciudad;
	}

	public function __call($name, $arguments) {
		$prefix_metodo = substr($name, 0, 3);

		if($prefix_metodo == 'get') {
			$nombre_metodo = substr(strtolower($name), 3);
			return $this->$nombre_metodo; //HACE LOS TODOS LOS GETTERS AUTOMATICAMENTE
		}
		else
			return "el metodo no existe";
		//return "no existe el metodo";
	}

}

$p = new Persona("leandro", 21, "lafe");
echo $p->getNombre() . "<br>";
echo $p->getEdad() . "<br>";
echo $p->getCiudad() . "<br>";
echo $p->terminarCarrera();

