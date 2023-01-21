
/*
    4.Sacar a todos los vendedores cuya fecha de alta sea posterior al 1 de julio de 
*/

SELECT * FROM vendedor v 
WHERE DATEDIFF(v.fecha_alta, '2018-07-01') > 0;

SELECT * FROM vendedor v
WHERE fecha_alta >= '2018-07-01';

UPDATE vendedor SET fecha_alta='2017-04-03' WHERE id=8;