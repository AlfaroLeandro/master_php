<?php

function app_autoloader($classname)
{
	require_once 'controllers/' . $classname . ".php";
}

spl_autoload_register('app_autoloader');
