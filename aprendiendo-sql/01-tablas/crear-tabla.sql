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
    id int auto_increment not null,
    nombre varchar(100) not null, 
    apellido varchar(255) default 'hola que tal', 
    email varchar(100) not null, 
    password varchar(255) null,
    CONSTRAINT pk_usuario PRIMARY KEY(id)
);


/*
[not] null: definir si un campo puede ser nulo o no
default "valor": le da un valor por defecto si es nulo
auto_increment: hace que un campo aumente de a 1
*/