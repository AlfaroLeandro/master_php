<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Formulario loco</title>
    </head>
    <body>

        <h1>Formulario</h1>
        
        <form action="" method="POST" enctype="multipart/form-data">
            <!--multipart/form-data -> indica que se enviaran datos-->
            
            <label for="nombre">Nombre: </label>
            <p><input type="text" name="nombre"/></p>
            
            <label for="nombre">Apellido: </label>
            <p><input type="text" name="apellido"/></p>
            
<!--            opciones para el input:
            required="requied" -> hace que el campo no pueda ser nulo
            pattern="[A-Z]" -> regex
            disabled="disabled" -> desabilita el campo para que no se puede marcar/usar
            minlength="5"
            maxlength="5" -> xd
            -->
            
            <p>
                <label for="sexo">hombre: </label>
                <input type="checkbox" name="sexo" value="hombre"/>

                <label for="sexo">mujer: </label>
                <input type="checkbox" name="sexo" value="mujer" checked="checked"/>
            </p>
            <label for="color">color: </label>
            <p><input type="color" name="color"/></p>
            <!--^^^ color picker-->
            
            <label for="fecha">Fecha: </label>
            <p><input type="date" name="fecha"/></p>
                
            <label for="correo">Correo: </label>
            <p><input type="email" name="correo"/></p>
            
            <label for="archivo">archivo: </label>
            <p><input type="file" name="archivo" multiple="multiple"/></p>
            <!--multiple="multiple" -> permite subir varios archivos al mismo tiempo-->
            
            <label for="hidden">hidden: </label>
            <p><input type="hidden" name="hidden"/></p>
            <!--^no se ve-->
            
            <label for="numero">numero: </label>
            <p><input type="number" name="numero"/></p>
            
            <label for="pass">contraseña: </label>
            <p><input type="password" name="pass"/></p>
            
            <label for="continente">continente: </label>
            <p>
                America<input type="radio" name="continente"/>
                Europa<input type="radio" name="continente"/>
                Asia<input type="radio" name="continente"/>
            </p>
            
            <label for="web">pagina web: </label>
            <p><input type="url" name="web"/></p>
            
            <textarea>
                
            </textarea>
            <br/>
            
            Peliculas:
            <select name="peliculas">
                <option value="Spiderman">Spiderman</option>
                <option value="Batman">Batman</option>
                <option value="Superman">Superman</option>
                <option value="Gran torino">Gran torino</option>
                
            </select>
                
            
            <br/>
            <input type="submit" value="enviar"/>
            
        </form>
        
        
    </body>
</html>


<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

