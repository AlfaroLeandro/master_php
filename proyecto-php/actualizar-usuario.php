<?php
if(isset($_POST))
{
    require_once './include/redireccion.php';
    require_once './include/conexion.php'; //POR ESTO NO ANDABAN LAS SESIONES
    
    
    $nombre = isset($_POST['nombre'])? mysqli_real_escape_string($db,$_POST['nombre']) : false;
    $apellido = isset($_POST['apellido'])? mysqli_real_escape_string($db,$_POST['apellido']) : false;
    $email = isset($_POST['email'])? mysqli_real_escape_string($db,trim($_POST['email'])) : false;
    $usuario = $_SESSION['usuario'];
    
    //array de errores
    $errores = array();
    
    //Valido los datos antes de guardarlos en la bd:
    
    if(empty($nombre) || is_numeric($nombre) || preg_match("/[0-9]/", $nombre))
        $errores['nombre'] = 'El nombre no es valido';
    
    if(empty($apellido) || is_numeric($apellido) || preg_match("/[0-9]/", $apellido))
        $errores['apellido'] = 'El apellido no es valido';
    
    if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL))
        $errores['email'] = 'El email no es valido';

    
    if(count($errores) == 0)
    {
        // COMPROBAT SI EL EMAIL YA ESTA USADO
		
		$sql = "SELECT id, email FROM usuarios WHERE email = '$email'";
		$email_existente = mysqli_query($db, $sql);
		$usuario_existente = mysqli_fetch_assoc($email_existente);
		
        if($usuario_existente['id'] == $usuario['id'] || empty($usuario_existente))
		{			
			//ACTUALIZAR EL USUARIO EN LA BD
			
			$sql = "UPDATE usuarios SET "
					. "nombre = '{$_POST['nombre']}', " 
					. "apellidos = '$apellido', " 
					. "email = '$email' "
					. "WHERE id = {$usuario['id']};";
					  
					
			$guardar = mysqli_query($db, $sql);
			
	//        var_dump(mysqli_error($db));
	//        die();
			
			if($guardar)
			{
				$_SESSION['usuario']['nombre'] = $nombre;
				$_SESSION['usuario']['apellidos'] = $apellido;
				$_SESSION['usuario']['email'] = $email;
				$_SESSION['completado'] = "Los datos se han actualizado con exito";
			}
			else
				$_SESSION['errores_mis_datos']['general'] = "Fallo al actualizar";
	//        . mysqli_error($db);
		}
		else
		{
			$_SESSION['errores_mis_datos']['general'] = "El email ingresado ya esta en uso!";
	//        var_dump($_SESSION['errores']);   
		}
	}
	else
	{
		$_SESSION['errores_mis_datos'] = $errores;
		
	}
}

header('Location: mis-datos.php');
