<?php

interface Ordenador
{
	public function encender();
	public function apagar();
	public function reiniciar();
	public function desfragmentar();
	public function detectarUSB();
}

class iMac implements Ordenador
{
	public $modelo;

	function getModelo()
	{
		return $this->modelo;
	}

	function setModelo($modelo)
	{
		$this->modelo = $modelo;
	}

	public function encender() {}
	public function apagar() {}
	public function reiniciar() {}
	public function desfragmentar() {}
	public function detectarUSB() {}
	//si comento uno de los metodos rompo todo
}

$maquintos = new iMac();
$maquintos->setModelo("Macbook PRO 2019");

var_dump($maquintos);

