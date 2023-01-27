<?php
 <h1> Hola mundo POO </h1>



// Comenzamos con la programacion orientada a objetos POO

// Definir una clase

class coche {
	//atributos
	public $color = "rojo";
	public $modelo = "Aventador";
	public $velocidad = 300;
	public $marca = "Ferrari";
	public $caballaje = 500;
	public $plazas = 2;

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

}
//^^ fin definicion de clase

$coche = new Coche();

var_dump($coche);

echo $coche->get_velocidad();
// echo $coche.get_velocidad(); -> NO ANDA XD

$coche->set_color("amarillo");

echo "<br><br> el color del coche es {$coche->get_color()} <br><br>";


$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();

$coche->frenar();

echo "<br> Velocidad del coche {$coche->get_velocidad()}";

$coche2 = new Coche();

var_dump($coche2);
