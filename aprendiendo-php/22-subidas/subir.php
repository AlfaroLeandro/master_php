<?php

$archivo = $_FILES['archivo'];

//var_dump($archivo);
//die();


$nombre = $archivo['name'];
$tipo = $archivo['type'];

if($tipo=='image/jpg' || $tipo=='image/jpeg' || $tipo=='image/gif' || $tipo=='image/png')
{
    if(!is_dir('img'))
        mkdir ('img',0777);
    
    move_uploaded_file($archivo['tmp_name'], './img/'.$nombre); //Guarda el fichero subido en el servidor
    //tmp_name -> donde esta el archivo como tal
    echo "<h1> Imagen subida correctamente </h1>";
    
    Header('Refresh: 3; URL=index.php');
}
else
{ //Muestra el mensaje y a los 5s me manda a la index
    Header('Refresh: 3; URL=index.php');
    echo "Subi una imagen con formato correcto";
}
    
