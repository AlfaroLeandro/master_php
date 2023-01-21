
/*
    Listar todos los vendedores mostrar solo su nombre y la cantidad de dias que lleva trabajando en el
    concesionario
*/

SELECT nombre, ABS(DATEDIFF(fecha_alta, CURDATE()))
FROM vendedor;

UPDATE vendedor SET fecha_alta = '2017-12-03' WHERE id=4;