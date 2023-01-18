<?php
    define('CANTIDAD_CARAC_MIN_PASS', 5);

    function correjir_msj_error()
    {
        global $error;
        if($error=='ok')
            $error="";
        else
           $error.="<br/>"; 
    }

    $error='Faltan valores';
    if(!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['email']) &&
            !empty($_POST['edad']) && !empty($_POST['pass']))
    { //empty comprueba si es null y si esta vacio
        $error='ok';
        
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $edad = (int) $_POST['edad'];
        $pass = $_POST['pass'];
        
            
        
        if(!is_string($nombre) || !preg_match("/([a-zA-Z]+[^ ]*)+/", $nombre)) { //reges /b/ : busqueda estricta
            $error="El nombre debe contener solo letras";
        }
        
        if(!is_string($apellido) || !preg_match("/([a-zA-Z]+[^ ]*)+/", $apellido)) {
            correjir_msj_error();
            $error.="El apellido debe contener solo letras";
        }

//        die(); --> PARA LA EJECUCION DEL PROGRAMA
        
        if(!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT)) { //Valida que sea un entero
            correjir_msj_error();
            $error.="La edad debe ser un numero entero";
        }
        
        if(!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) { //Valida que sea un entero
            correjir_msj_error();
            $error.="Email no valido";
        }
        
        if(strlen($pass)<CANTIDAD_CARAC_MIN_PASS)
        {
            correjir_msj_error();
            $error.="La contraseña tiene menos de 5(cinco) caracteres";
        }
        
    }
        

    if($error!='ok')
        header("Location:index.php?error=$error");

?>


<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Validacion de formularios</title>
    </head>
    <body>
        
        
        
        <?php if($error=='ok'): ?>
        <h1>Datos validados correctamente</h1>
            <p><?=$nombre?></p>
            <p><?=$apellido?></p>
            <p><?=$edad?></p>
            <p><?=$email?></p>
        <?php endif; ?>
        
        
    </body>
</html>
