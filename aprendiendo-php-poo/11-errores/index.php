<?php


try
{
	if(isset($_GET['id']))
		echo "<h1> El parametro id es : {$_GET['id']} </h1>";
	else
		throw new Exception('faltan parametros');
}
catch(Exception $e)
{
	echo "Ha habido un error " . $e->getMessage() . "<br>"; 

}
finally 
{
	echo "Termina la estructura";
}


