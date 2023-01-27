<?php

trait utilidades {
	public function mostrarNombre() {
		echo "<h1> El nombre es " . $this->nombre . "<h1/>";
	}
}


class Coche {
	public $nombre;
	public $marca;

	use utilidades; // <---- HABILITA EL USO DEL TRAIT
}

class Persona {
	public $nombre;
	public $apellido;

	use utilidades; // <---- HABILITA EL USO DEL TRAIT
}

class Videojuego {
	public $nombre;
	public $anio;

	use utilidades; // <---- HABILITA EL USO DEL TRAIT
}

$c = new Coche();
$p = new Persona();
$v = new Videojuego();


var_dump($c);
$c->nombre = "Ferrari";
$p->nombre = "pedro";
$v->nombre = "sus";


echo $c->mostrarNombre();
echo $p->mostrarNombre();
echo $v->mostrarNombre();
