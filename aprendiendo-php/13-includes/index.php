<?php
    include 'header/cabecera.php'; //Lee el contenido del fichero y pone el contenido en la posicion donde lo esta llamando
    include_once 'header/cabecera.php'; //No permite que se siga incluyendo en el archivo
    include 'header/cabecera.php'; 
    //require, require_once -> si no lo puede incluir -> para la ejecucion de la pagina completamente
?>



        <hr/>
        
        <div>
            
            <h2>Esta es la pagina de inicio</h2>
            <p>Texto de prueba pagina de inicio</p>
            
        </div>
        
        <hr/>
        
        <?=var_dump($nombre);?> 
        <!--^^^llamo a una variable definida en la cabecera-->
        
<?php
    include 'header/pie_pagina.php';