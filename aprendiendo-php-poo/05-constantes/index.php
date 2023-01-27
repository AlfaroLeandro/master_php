<?php

class usuario
{
	const URL_COMPLETA = "http://localhost";
	public $email;
	public $password;



	function get_email()
	{
		return $this->email;
	}

	function get_password()
	{
		return $this->password;
	}

	function set_email($email)
	{
		$this->email = $email;
	}

	function set_password($password)
	{
		$this->password= $password;
	}

}


$u = new usuario();

//Muestro la constante
echo usuario::URL_COMPLETA;


//no aperece la constante en el var_dump
var_dump($u);
