<h1> Hola mundo POO </h1>

<?php

class coche {
	//atributos
	public $color; 
	protected $modelo;
	private $velocidad;
	public $marca;
	public $caballaje;
	public $plazas;

	public function __construct($color, $modelo, $velocidad, $marca, $caballaje, $plazas) 
	{
		$this->color = $color;
		$this->modelo = $modelo;
		$this->velocidad = $velocidad;
		$this->marca = $marca;
		$this->caballaje = $caballaje;
		$this->plazas = $plazas;
	}


	//metodos
	public function get_color() {
		return $this->color;	
	}

	public function set_color($color) {
		$this->color=$color;
	}
		
	public function acelerar() {
		$this->velocidad++;
	}		

	public function frenar() {
		$this->velocidad--;
	}

	public function get_velocidad() {
		return $this->velocidad;
	}


	public function mostrarInformacion() {
		return  "<h1>Informacion del coche</h1>" .
			"Modelo: {$this->modelo} <br>" .
			"Velocidad: {$this->velocidad} <br>";	
	}

}
