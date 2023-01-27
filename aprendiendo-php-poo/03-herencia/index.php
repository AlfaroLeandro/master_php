<?php

require_once('clases.php');

$persona = new Persona();

$persona->set_nombre("roberto");

$informatico = new Informatico();

$tecnico = new TecnicoRedes();

var_dump($persona);

var_dump($informatico);

var_dump($tecnico);
