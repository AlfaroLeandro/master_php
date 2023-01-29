<?php

function app_autoloader($class) {
	$classname = "./include/$class";
	require_once  $classname . '.php';
}


spl_autoload_register('app_autoloader');
