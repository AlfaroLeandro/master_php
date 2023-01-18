<?php

if(!is_dir('mi_carpeta'))
    mkdir('mi_carpeta', 0777) or die("No se puede crear la carpeta");
else
    echo "ya existe la carpeta </br>";

//rmdir('mi_carpeta');

if($gestor = opendir('./mi_carpeta'))
{
    while($archivo = readdir($gestor)) //Va leyendo todos los archivos del directorio
            if($archivo != '.' && $archivo!='..')
            {
                echo $archivo . "<br/>";
            }
                
}