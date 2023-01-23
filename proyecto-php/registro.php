<?php
if(isset($_POST))
{
    require_once './include/conexion.php'; //POR ESTO NO ANDABAN LAS SESIONES
    
    $nombre = isset($_POST['nombre'])? mysqli_real_escape_string($db,$_POST['nombre']) : false;
    $apellido = isset($_POST['apellido'])? mysqli_real_escape_string($db,$_POST['apellido']) : false;
    $email = isset($_POST['email'])? mysqli_real_escape_string($db,trim($_POST['email'])) : false;
    $pass = isset($_POST['password'])? mysqli_real_escape_string($db,$_POST['password']) : false;
    //^^^ misqli_real_scape_string EVITA SQL INJECTION
    
    //array de errores
    $errores = array();
    
    //Valido los datos antes de guardarlos en la bd:
    
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre))
        $nombre_validado = true;
    else
    {
        $nombre_validado = false;
        $errores['nombre'] = 'El nombre no es valido';
    }
    
    if(!empty($apellido) && !is_numeric($apellido) && !preg_match("/[0-9]/", $apellido))
        $apellido_validado = true;
    else
    {
        $apellido_validado = false;
        $errores['apellido'] = 'El apellido no es valido';
    }    
            
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL))
        $email_validado = true;
    else
    {
        $email_validado = false;
        $errores['email'] = 'El email no es valido';
    }
    
    if(!empty($pass))
        $pass_validado = true;
    else
    {
        $pass_validado = false;
        $errores['pass'] = 'la contraseña esta vacia';
    }
    
    
    if(count($errores) == 0)
    {
        $guardar_usuario = true;
        
        //Cifrar contraseña
        
        $password_segura = password_hash($pass, PASSWORD_BCRYPT, ['cost'=>4]); //usa el metodo BCRYPT en 4 pasadas, hashea 4 veces
//        var_dump($password_segura);
//        var_dump(password_verify($pass, $password_segura)); -> verificar la contraseña
        
        //INSERTAR EL USUARIO EN LA BD
        
        $sql = "INSERT INTO usuarios VALUES (null, '$nombre', '$apellido', '$email', '$password_segura', CURDATE());";
        $guardar = mysqli_query($db, $sql);
        
        if($guardar)
            $_SESSION['completado'] = "El registro se ha compleado con exito";
        else
            $_SESSION['errores']['general'] = "Fallo al guardar el usuario ";
//        . mysqli_error($db);
        
        
    }
    else
    {
        $_SESSION['errores'] = $errores;
//        var_dump($_SESSION['errores']);   
    }
}

header('Location: index.php');

