<?php
if(isset($_POST))
{
    require_once './include/conexion.php';
    
    $titulo = isset($_POST['titulo'])? mysqli_real_escape_string($db,$_POST['titulo']) : false;
    $descripcion = isset($_POST['descripcion'])? mysqli_real_escape_string($db,$_POST['descripcion']) : false;
    $categoria = isset($_POST['categoria'])? (int)$_POST['categoria'] : false;
    $usuario = $_SESSION['usuario'];
    
    $errores = array();
    
    if(empty($titulo) || is_numeric($titulo))
        $errores['titulo'] = 'El titulo no es valido';
    
    if(empty($descripcion))
        $errores['descripcion'] = 'La descripcion no es valida';
    
    if(empty($categoria))
        $errores['categoria'] = 'No se eligio la categoria';
    
    if(count($errores) == 0)
    {
        //INSERTAR EL USUARIO EN LA BD
        
        $sql = "INSERT INTO entradas VALUES (null," . $usuario['id'] . ", $categoria , '$titulo', '$descripcion', CURDATE());";
        $guardar = mysqli_query($db, $sql);        
        header('Location: index.php');
    }
    else
    {                    
        $_SESSION['errores_entradas'] = $errores;
        header('Location: crear-entrada.php');
    }
    
}

