<?php

unset($_COOKIE['mi_cookie']);
setcookie('mi_cookie','',time()-100); //CADUCO LA COOKIE

echo "cookies borradas";

header('Location:ver_cookies'); //CAMBIO DE PAGINA