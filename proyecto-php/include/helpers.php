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

function conseguir_ultimas_entradas() {
    global $db;
    $sql = "SELECT e.*, c.nombre as categoria FROM entradas e " 
           . "INNER JOIN categorias c "
           . "ON e.categoria_id = c.id "
           . "ORDER BY e.id DESC LIMIT 4";
    $entradas = mysqli_query($db, $sql);
    
    return ($entradas && mysqli_num_rows($entradas)>=1)? $entradas: array();
}