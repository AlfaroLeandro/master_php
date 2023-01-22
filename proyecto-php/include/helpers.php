<?php

function mostrar_error($errores, $campo) {
    $alerta="";
    
    if(isset($errores) && !empty($campo) && isset($errores[$campo])) 
        $alerta = "<div class='alerta alerta-error'>" . $errores[$campo] . "</div>";
    
    return $alerta;
}

function borrar_errores() {
    unset($_SESSION['errores']);
    unset($_SESSION['completado']);
}