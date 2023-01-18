<!DOCTYPE HTML>

<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Calculadora</title>
    </head>
    <body>
        
        <h1>Calculadora</h1>
        
        <form action="ejercicio3.php" method="POST">
            <p>
                <label for="operando1">Operando1</label>
                <input type="number" name="operando1" required="required">
            </p>
            <p>
                <label for="operando2">Operando2</label>
                <input type="number" name="operando2" required="required">
            </p>
        
            <p>
                
                <strong>+<strong/>
                <input type="radio" name="operacion" value="+"/>
                &nbsp;&nbsp;
                <strong>-<strong/>
                <input type="radio" name="operacion" value="-"/>
                &nbsp;&nbsp;
                <strong>*<strong/>
                <input type="radio" name="operacion" value="*"/>
                &nbsp;&nbsp;
                <strong>/<strong/>
                <input type="radio" name="operacion" value="/"/>
            </p>
            
            <input type="submit" value="calcular"/>
        </form>
        
        <?php if(isset($_POST['operacion'])): 
                switch($_POST['operacion']):
                    case '+':
                        $resultado = $_POST['operando1'] + $_POST['operando2'];
                        break;
                    case '-':
                        $resultado = $_POST['operando1'] - $_POST['operando2'];
                        break;
                    case '*':
                        $resultado = $_POST['operando1'] * $_POST['operando2'];
                        break;
                    case '/':
                        $resultado = $_POST['operando1'] / $_POST['operando2'];
                        break;
                endswitch;
                
                echo "<h2>Resultado: $resultado</h2>";
                
            endif;
        ?>
  
    </body>
</html>


<?php

/*
 * ejercicio 3:
 * hacer una interfaz de usuario con 2 imputs y 4 botones, + - * /
 */

