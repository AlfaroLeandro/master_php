<?php

require_once 'autoload.php';
require_once './config/db.php';
require_once './config/parameters.php';
require_once './helpers/utils.php';

if(!isset($_SESSION))
    session_start();


//  LAYOUT
require_once './views/layout/header.php';
require_once './views/layout/sidebar.php';


if (isset($_GET['controller']) && class_exists($_GET['controller'] . "Controller")) {
    $nombre_ctrl = $_GET['controller'] . "Controller";
    $controlador = new $nombre_ctrl();

    if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
        $action = $_GET['action'];
        $controlador->$action(); // Las acciones van sin comillas en la url
    } else {
        $error = new ErrorController();
        $error->index();
    }
} elseif(!isset($_GET['controller']) && !isset($_GET['action'])) {
    $nombre_ctrl = CONTROLLER_DEFAULT;
    $action = ACTION_DEFAULT;
    $controlador = new $nombre_ctrl();
    $controlador->$action();
    
}   else {
    $error = new ErrorController();
    $error->index();
}


require_once './views/layout/footer.php';
