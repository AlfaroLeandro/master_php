/* 
    Nombres y ciudades de los clientes con encargos de 3 o mas unidades
 */


SELECT nombre, ciudad
FROM cliente WHERE
id IN 
(
    SELECT cliente_id
    FROM encargo e
    WHERE e.cantidad>3
);

