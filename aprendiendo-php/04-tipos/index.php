<?php

    //Tipos de datos:
    $numero = 100;
    $decimal = 27.9;
    $texto = "soy un texto";
    $null = null;
    echo gettype($numero) . " ";
    echo gettype($decimal). " ";
    echo gettype($texto). " ";
    echo gettype($null). " ";

    //Debugear
    
    $miNombre = "Leandro";
    var_dump($miNombre);
    //^^^DETECTA QUE HAY DENTRO DE LA VARIABLE
    
    $nombres[] = "nombre1";
    $nombres[] = "nombre2";
    var_dump($nombres);
    
    echo "<br/><br/><br/><br/>";
    
    echo "soy un texto con variable '\"$numero\"' <br/>";
    echo 'soy un texto con variable \'"$numero"\' <br/>';
    echo 'soy un texto con variable \'"' . $numero . '"\'';
      
    
?>