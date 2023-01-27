<?php

function app_autoloader($class) {
	$classname = substr($class, strrpos($class, "\\") + 1);
	require_once  $classname . '.php';
}


spl_autoload_register('app_autoloader');
