<?php

function mostrar_error($errores, $campo) {
    $alerta="";
    
    if(isset($errores) && !empty($campo) && isset($errores[$campo])) 
        $alerta = "<div class='alerta alerta-error'>" . $errores[$campo] . "</div>";
    
    return $alerta;
}

function borrar_errores($nombre_error) {
    unset($_SESSION[$nombre_error]);
}

function conseguir_categorias() {
    global $db;
    $sql = "SELECT * FROM categorias ORDER BY id ASC;";
    $categorias = mysqli_query($db, $sql);
    
    return ($categorias && mysqli_num_rows($categorias)>=1)? $categorias: array();
}

function conseguir_entradas($limit = null, $categoria = null)
{
	global $db;
    $sql = "SELECT e.*, c.nombre as categoria FROM entradas e " 
           . "INNER JOIN categorias c "
           . "ON e.categoria_id = c.id ";
   
   if(!empty($categoria))
	   $sql.= "WHERE e.categoria_id = $categoria ";
	
	$sql.= "ORDER BY e.id DESC ";
	
	if($limit)
		$sql.= "LIMIT 4 ";
	
	//echo $sql;
	//die();
	
    $entradas = mysqli_query($db, $sql);
    
    return ($entradas && mysqli_num_rows($entradas)>=1)? $entradas: array();
}

function conseguir_categoria($id_categoria)
{
	global $db;
    $sql = "SELECT * FROM categorias WHERE id='$id_categoria'";
    $categorias = mysqli_query($db, $sql);
    
    return ($categorias && mysqli_num_rows($categorias)>=1)? mysqli_fetch_assoc($categorias): array();
}