<?php
//Iniciar sesion y realizar la conexion con la bd
require_once './include/conexion.php';
$login_verificado=true;


//Recoger datos del formulario
if(isset($_POST)) 
{
    $email = isset($_POST['email'])? mysqli_real_escape_string($db,trim($_POST['email'])) : false;
    $pass = isset($_POST['password'])? mysqli_real_escape_string($db,$_POST['password']) : false;
    
    //Consultar y comprobar las credenciales del usuario
    $sql= "SELECT * FROM usuarios WHERE email='$email'";
    $login = mysqli_query($db, $sql);
    
    if($login && mysqli_num_rows($login) == 1) 
    {
        $usuario = mysqli_fetch_assoc($login);
        //Comprobar la contraseña
        $verif_password = password_verify($pass, $usuario['password']);
        
        if($verif_password)
        {
            //Utilizar una sesion para guardar los datos del usuario logeado
            $_SESSION['usuario'] = $usuario;
            
            if(isset($_SESSION['error_login']))
                unset($_SESSION['error_login']);
            
        }
        else
        {
            $_SESSION['error_login'] = "Login incorrecto";
        }
        
    }
    else
        $_SESSION['error_login'] = "Login incorrecto";
        
    
      
    
}

header('Location: index.php');
