
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

    op logicos:
    OR
    AND
    NOT
    XOR
*/


--1. mostrar nya de todos los usuarios registrados en 2019

SELECT nombre, apellido FROM usuario WHERE YEAR(fecha)='2019';

--2. mostrar nya de todos los usuarios NO registrados en 2019

SELECT nombre, apellido FROM usuario WHERE YEAR(fecha)!='2019' or ISNULL(fecha);

--3. mostrar el email de todos los usuarios cuyo apellido tiene una 'a' y que su contraseña sea 1234

SELECT u.email FROM usuario u
WHERE LOWER(u.apellido) like '%a%'
and u.password = '1234';

-- %: cualquier cantidad caracteres
-- _: un caracter

--4. todos los registros de usuario en el que año sea par

SELECT * FROM usuario u
WHERE (YEAR(u.fecha)%2)=0;

--5. todos los registro de usuario cuyo nombre tenga mas 5 letras 
--y se haya registrado en 2023 y mostrar su nombre en mayus

SELECT UPPER(u.nombre) nombre FROM usuario u
WHERE LENGTH(u.nombre) > 5
and YEAR(u.fecha)=2023;


/** ORDER BY */

SELECT * FROM usuario ORDER BY id DESC;

--ordeno por un campo que no muestro
SELECT nombre FROM usuario ORDER BY fecha ASC;


--Sacar los primeros 2 registros -> parecido al TOP de SQL SERVER
SELECT * FROM usuario LIMIT 2;





























