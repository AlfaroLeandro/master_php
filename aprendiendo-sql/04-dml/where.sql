
SELECT * FROM usuario WHERE email='leandro@leandro.com';

/* Operadores de comparacion
    
    =
    !=
    <
    >
    <=
    >=
    between A and B --ej:
    in
    is null
    is not null
    like
    not

*/


--1. mostrar nya de todos los usuarios registrados en 2019

SELECT nombre, apellido FROM usuario WHERE YEAR(fecha)='2019';

--1. mostrar nya de todos los usuarios NO registrados en 2019 o su fecha es nula

SELECT nombre, apellido FROM usuario WHERE YEAR(fecha)!='2019' or isnull(fecha);









































