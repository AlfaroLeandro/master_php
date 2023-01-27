<?php


class Persona
{
	public  $nombre,
		$apellido,
		$altura,
		$edad;

	public function get_nombre()
	{
		return $this->nombre;
	}


	public function get_apellido()
	{
		return $this->apellido;
	}


	public function get_altura()
	{
		return $this->altura;
	}


	public function get_edad()
	{
		return $this->edad;
	}


	public function set_nombre($nombre)
	{
		$this->nombre = $nombre;
	}


	public function set_apellido($apellido)
	{
		$this->apellido= $apellido;
	}


	public function set_edad($edad)
	{
		$this->edad= $edad;
	}


	public function set_altura($altura)
	{
		$this->altura= $altura;
	}

	public function hablar()
	{
		return "estoy hablando";
	}

	public function caminar()
	{
		return "estoy caminando";
	}

}

class Informatico extends Persona
{
	public $lenguajes;

	public function __construct()
	{
		$this->lenguajes = "HTML, CSS, JS"; //CUIDADO CON NO USAR LA VARIABLE $THIS, EN LOS HIJOS NO APLICA
	}


	public function sabe_lenguajes($lenguajes)
	{
		$this->lenguajes = $lenguajes;

		return $this->lenguajes;
	}


	public function programar()
	{
		return "soy programador";
	}


	public function reparar_pc()
	{
		return "reparo una pc";
	}


	public function ofimatico()
	{
		return "estoy usando word";
	}

}

class TecnicoRedes extends Informatico 
{
	public $auditarRedes;

	public function __construct()
	{
		parent::__construct();
		$this->auditarRedes = 'experto';
	}


	public function auditoria()
	{
		return "estoy auditando una red";
	}
}


