SELECT 1;
SELECT "hola mundo";

/* mostrar los registros de una tabla*/

SELECT email as correo, nombre, apellido FROM usuario;
SELECT email c, nombre, apellido FROM usuario;

SELECT * FROM usuario;


/*operadores aritmeticos */

SELECT email, (4+7) as operacion FROM usuario;
SELECT email, (4*7) as operacion FROM usuario;



SELECT id, email, (4+7) as operacion FROM usuario ORDER BY id DESC;
SELECT id, email, (4+7) as operacion FROM usuario ORDER BY id ASC;
SELECT id, email, (id+7) as operacion FROM usuario;

/*## FUNCIONES MATEMATICAS ##*/

//valor absoluto
SELECT ABS(-4);

//redondeo
SELECT CEIL(7.4);

SELECT FLOOR(7.4);

SELECT ROUND(7.9151654,2);

SELECT TRUNCATE(7.91,1);

//Buscar SQL functions math

SELECT PI();

SELECT RAND();

SELECT SQRT(9);

/*## FUNCIONES CON CADENAS ##*/

SELECT UPPER('hola mundo');
SELECT LOWER('HOLA MUNDO');


/* concatenar */
SELECT CONCAT('hola', ' ', 'mundo');

/* contar longitud*/
SELECT LENGTH(CONCAT('hola', ' ', 'mundo'));

/* limpiar cadena */
SELECT TRIM('   hola mundo   ');



/*## FECHA ## */

/* fecha actual*/
SELECT CURDATE();


/* diferencia en dias entre 2 fechas*/
SELECT DATEDIFF(CURDATE(), '2023-01-01');
SELECT DATEDIFF('2023-01-01', CURDATE());

/* Nombre dia de la semana*/
SELECT DAYNAME('2023-01-01');

/* dia de la semana*/
SELECT DAYOFWEEK('2023-05-09');

/* dia del mes*/
SELECT DAYOFMONTH('2023-05-09');

/* dia del año*/
SELECT DAYOFYEAR('2023-05-09');


/* obtener mes*/

SELECT YEAR('2023-05-09'),MONTH('2023-05-09'),DAY('2023-05-09'), WEEK('2023-05-09');

/* ----- */

/* Obtener la hora */

SELECT CURTIME();


/* Obtener fecha hora del sisop*/
SELECT SYSDATE();


/*## FORMATEAR LA FECHA ##*/

SELECT DATE_FORMAT(CURDATE(), '%d-%m-%Y');


/*## FUNCIONES GENERALES ##*/

/* comprobar si es null o no*/
SELECT ISNULL(null);
SELECT ISNULL(15);

/* comparar strings*/
SELECT STRCMP('HOLA', 'HOLA'); //0
SELECT STRCMP('HOLA', 'HOLA1'); //-1
SELECT STRCMP('HOLA1', 'HOLA'); //1


/* ver la version*/

SELECT VERSION();

/* Ver el usuario que se esta usando (a nivel SGBD)*/

SELECT USER();
/*distinct hace que no hayan valores repetidos */
SELECT DISTINCT USER() FROM usuario; 


/* ver bd */

SELECT DATABASE();

/* si un campo de un registro es null, insertar un valor */

SELECT IFNULL(apellido, 'ESTE CAMPO ESTA VACIO') FROM usuario;





































