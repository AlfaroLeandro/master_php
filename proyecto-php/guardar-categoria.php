<?php
if(isset($_POST))
{
    require_once './include/conexion.php';
    
    $nombre = isset($_POST['nombre'])? mysqli_real_escape_string($db,$_POST['nombre']) : false;
        
    if(!empty($nombre) && !is_numeric($nombre))
    {
        //INSERTAR EL USUARIO EN LA BD
        
        $sql = "INSERT INTO categorias VALUES (null, '$nombre');";
        $guardar = mysqli_query($db, $sql);
        //NO AGREGO MANEJO DE ERRORES        
        
    }
}

header('Location: index.php');