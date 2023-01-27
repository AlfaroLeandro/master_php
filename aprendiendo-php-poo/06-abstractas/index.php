<?php

abstract class Ordenador
{
	public $encendido;

	abstract public function encender();
	abstract public function apagar();
}

class PcAsus extends Ordenador
{
	public $software;

	public function arrancarSoftware()
	{
		$this->software = true;
	}

	public function encender()
	{
		$this->encendido=true;
	}


	public function apagar()
	{
		$this->encendido=false;
	}

}

$pc = new PcAsus();
$pc->arrancarSoftware();
$pc->apagar();
var_dump($pc);
