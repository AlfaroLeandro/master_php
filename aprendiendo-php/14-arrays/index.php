<?php

$pelicula = "batman";
$peliculas = array("batman", "spiderman", "El señor de los anillos");
$cantantes = ['Indio solari', 'Luca Prodan', 'Federico Moura'];

echo var_dump($peliculas);
echo var_dump($peliculas[1]);

echo "<br/>"; echo "<br/>"; 

echo var_dump($cantantes);
echo var_dump($peliculas[0]);

//Recorrer con for:


echo "<h1>Listado de peliculas</h1>"
. "<ul>";


for ($i = 0; $i< count($peliculas); $i++) { //count() cuenta la cantidad de elementos de un array
    echo "<li> $peliculas[$i] </li>";
}

echo "</ul>";

echo "<h1>Listado de cantantes</h1>"
. "<ul>";

//FOREACH
foreach ($cantantes as $i => $cantante) { //count() cuenta la cantidad de elementos de un array
    echo "<li> pos $i: $cantante </li>";
}

echo "</ul>";


//----------------------------------- ARRAYS ASOCIATIVOS ----

$personas = array(
    'nombre' => 'Leandro',
    'apellido' => 'Alfaro',
    'web' => 'alfaroLeandro.github.io'
);

var_dump($personas);
var_dump($personas['web']);
//var_dump($personas[0]); --> crashea


// ARRAYS MULTIDIMENSIONALES

$contactos = array(
  array(
      'nombre' => 'Leandro',
      'email' => 'leandroloco@a.com'
    ),    
  array(
      'nombre' => 'Pedro',
      'email' => 'pedroloco@a.com'
    ),
  array(
      'nombre' => 'Jorge',
      'email' => 'jorgito@a.com',
      'telefono' => 123456
    )  
);

var_dump($contactos);

echo "<h1>" . $contactos[1]['email'] . "</h1>";

foreach ($contactos as $key => $contacto) {
    var_dump($key);
    var_dump($contacto);
}