/*
TIPOS DE DATO

tinyint
int/integer(n° cifras)
mediumint
bigint

varchar(n° caracteres) (maximo 255 caracteres)
char(n° caracteres)
TEXT (maximo 65535)
MEDIUMTEXT (16 millones de caracteres)
LONGTEXT (16 Billones de caracteres)

float(n° cifras, n° decimales)
date
timestamp

*/

/**
CREAR TABLA
*/

CREATE TABLE usuario(
    id int,
    nombre varchar(100), 
    apellido varchar(255), 
    email varchar(100), 
    password varchar(255) 
);